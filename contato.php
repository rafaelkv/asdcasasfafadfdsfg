<?php
include_once "conexao.php"
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>
    <link href="contato.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="icon" type="image/x-icon" href="minilogo-removebg-preview.png" width="144" height="144">
    <style type="text/css">
        .botaotop{
            color: rgb(0, 0, 0);
        }
        </style>
    <style>
    .whatsapp-link {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        background-color: #25d366;
        color: #fff;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        box-shadow: 1px 1px 2px #888;
        z-index: 1000;
    }
    .fa-whatsapp{
        margin-top: 16px;
    }
    </style>    
    
</head>
<body>
<header>
        <nav>

            <img src="logo.png" height="65" width="200" class="logo"  >
            <div class="mobile-menu">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
            </div>
            <ul class="nav-list">
            <li><a href="contato.php">contato</a></li>
            <li><a href="index.html">inicio</a></li>
            <li><a href="aindansei.html">diario</a></li>
            <li><a href="sobrenos.html">sobre nós</a></li>
            </ul>
        </nav>
    </header>
    <main></main>
    <script src="mobile-navbar.js"></script>
<h1> formulario de contato </h1> 


<?php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($dados['sendcadmsg'])) {
    
    $query_msg = "INSERT INTO mensagens (nome, Email, zapzap, areaint) VALUES (:nome, :Email, :zapzap, :areaint)";
    $conn->prepare($query_msg);
    $cad_msg = $conn->bindParam(':nome', $dados['nome'], PDO::PARAM_STR);
    $cad_msg->bindParam(':Email', $dados['Email'], PDO::PARAM_STR);
    $cad_msg->bindParam(':zapzap', $dados['zapzap'], PDO::PARAM_STR);
    $cad_msg->bindParam(':areaint', $dados['areaint']);
    
    $cad_msg->execute();

    if($cad_msg->rowCount()) {
        require 'lib/vendor/autoload.php';

            $email = new \SendGrid\Mail\Mail();

            $email->setFrom("2006rafaelsantos@gmail.com", "Cesar");
            $email->setSubject("Mensagem recebida com sucesso!");
            $email->addTo($dados['email_usuario'], $dados['nome_usuario']);
            $email->addContent("text/plain", "Recebi a mensagem, em breve será respondida: " . $dados['mensagem']);
            $email->addContent(
                "text/html",
                "Recebi a mensagem, em breve será respondida: " . $dados['mensagem']
            );

            $sendgrid = new \SendGrid('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');

            try {
                $response = $sendgrid->send($email);
                echo "Mensagem enviada com sucesso!<br>";
            } catch (Exception $e) {
                echo "Erro: Mensagem não enviada com sucesso!<br>";
            }
    }else{
        echo"erro: Mensagem não enviada com sucesso";
    }
}
?>

<form method="POST" action="processa.php">
 <label>Nome<label>
<input type="text" name="nome" placeholder="Nome Completo"><br><br>

<label>E-mail<label>
<input type="E-mail" name="Email" placeholder="Digite Seu E-mail"><br><br>

<label>Numero para contato<label>
<textarea name="zapzap" rows="1" cols="50" placeholder="Telefone ou WhatsApp"></textarea><br><br><br><br>

<label>Fale sobre o o serviço necessario<label>
<textarea name="areaint" rows="8" cols="50"></textarea><br><br>

<input type="submit" value="enviar"><br><br>


</form>

<div>
   <a class="whatsapp-link"href="https://web.whatsapp.com/send?phone=5519997463745" target="_blank">
       <i class="fa fa-whatsapp"></i>
       
   </a> 
    </div>
    <a class="botaotop" href="https://www.instagram.com/ingenium_projetos/" target="_blank">insta</a>
    <a class="botaotop" href="https://www.facebook.com/ingeniumproj" target="_blank">facebook</a>
    
    
</body>
</html>