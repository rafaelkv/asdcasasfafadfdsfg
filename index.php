<?php
include_once "conexao.php"
?>
<!DOCTYPE html>
<html lang="pt-BR">
<hea <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ingenium</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="carrosel.css">
    <link rel="stylesheet" href="topo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="icon" type="image/png" src="imagens/LOGOTIPO.png" href= "imagens/logofavicon.png" width="30" height="50" > 
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="home.js"></script>
    
    <script src="script.js" defer></script>
<style type="text/css">
    .container{
  position: relative;
  width: 25%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay {  
  margin-top:  10px;
  margin-right: 0px;
  margin-left: 220px;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 250px;
  width: 250px;
  opacity: 0;
  transition: .5s ease;
  background-color: #ffc629;
}

.container:hover .overlay {
  opacity: 1;
}

.text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: justify;}
 
  .container1{
  position: relative;
  width: 25%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
}

.overlay1 {  
  margin-top:  10px;
  margin-right: 0px;
  margin-left: 200px;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 250px;
  width: 250px;
  opacity: 0;
  transition: .5s ease;
  background-color: #808080;
}

.container1:hover .overlay1 {
  opacity: 1;
}


.text1 {
  color: black;
  font-size: 19px;
  position: absolute;
  top: 50%;
  left: 40%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: left;}

  .container2{
  position: relative;
  width: 25%;
}

.image2 {
  display: block;
  width: 100%;
  height: auto;
}

.overlay2 {  
  margin-top:  10px;
  margin-right: 250px;
  margin-left: 250px;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  height: 250px;
  width: 250px;
  opacity: 0;
  transition: .5s ease;
  background-color: #ffc629;
}

.container2:hover .overlay2 {
  opacity: 1;
}

.text2 {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 44%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;}




    html{

    }

 
 * {
	padding: 0;
	margin: 0;
	text-decoration: none;
	list-style: none;
	box-sizing: border-box;
}

body {
    font-family: 'Lato', sans-serif;
}
nav {
    position: fixed;
	background: #FFf;
	height: 90px;
	width: 100%;
    box-shadow: 0px 0.5px #888888;
}
label.logo{
	text-transform: uppercase;
}

nav ul {
	float: right;
	margin-right: 20px;
}
nav ul li {
	display: inline-block;
	line-height: 80px;
	margin: 0 5px;
}
nav ul li a {
	color: #FFC629;
	font-size: 17px;
	padding: 7px 13px;
	border-radius: 3px;
	text-transform: uppercase;
}
a.active, a:hover {
	border: 0.1px color: #ffc629
	transition: .5s;
}
.checkbtn {
	font-size: 30px;
	color: white;
	float: right;
	line-height: 80px;
	margin-right: 40px;
	cursor: pointer;
	display: none;
}
#check {
	display: none;
}
@media (max-width: 952px){
	label.logo{
		font-size: 30px;
		padding-left: 50px;
	}
	nav ul li a{
		font-size: 16px;
	}
}
@media (max-width: 858px){
	.checkbtn {
		display: block;
	}
	ul{
		position: fixed;
		width: 100%;
		height: 100vh;
		background: #FFF;
		top: 80px;
		left: -100%;
		text-align: center;
		transition: all .5s;
	}
	nav ul li{
		display: block;
		margin: 50px 0;
		line-height: 30px;
	}
	nav ul li a {
		font-size: 20px;
	}
	a:hover, a.active {
		background: none;
		color: #ffce49;
	}
	#check:checked ~ ul {
		left: 0;
	}
}
</style>


<style type="text/css">
    .btnenviar{
        margin-left: 380px;
        margin-right: 0px;
    }
.fa:hover {
    opacity: 0.7;
}
#redesociais{
    display:flex;
    flex-direction: row;
}
.fa-facebook {
    padding: 20px;
  font-size: 30px;
  margin-bottom: 10px;
  width: 70px;
  text-align: center;
  text-decoration: none;
  background: #3B5998;
  color: white;  
  border-radius: 50%;
  margin-left:20px;
}
.fa-instagram {
    margin-left:20px;
    margin-bottom: 10px;
    padding: 20px;
  font-size: 30px;
  width: 70px;
  text-align: center;
  text-decoration: none;
  background: #E1306C;
  color: white;
  border-radius: 50%;
}
        .botaotop{
            color: rgb(0, 0, 0);
        }
        .texto1 {
  text-align: center;
}
.titulo1 { 
    margin-left: 160px;
    margin-right: 0px;
    font-family: 'Lato', sans-serif;
}
.titulo2 { 
    margin-left: 600px;
    margin-right: 0px;
    font-family: 'Lato', sans-serif;
}
.textoladin{
    font-family: 'Lato', sans-serif;
    font-size: 40px;
    margin-left: 250px;
    margin-right: 0px;
    flex-direction: row;

}
.subt1, h2{
    display: inline-block;
}
.subt2{
    font-family: 'Lato', sans-serif;
    font-size: 40px;
    margin-left: 240px;
    margin-right: 650px;
    
}
h2.subt3, h2 {
    display: inline-block;
}
.subt3{
    font-family: 'Brandon Printed', sans-serif; 
    font-size: 40px;
    margin-left: 1150px;
    margin-right: 500px;
    margin-top: -90px;
}
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
    #textodurodo{
        font-family: 'Lato', sans-serif;
    display:flex;
    flex-direction: row;
  }
    .txt2-1{
        margin-top: 20px;
        margin-right: 0px;
        margin-left: 260px;
    }
    .txt2-2{
        margin-top: 20px;
        margin-right: 0px;
        margin-left: 200px;
    }
    .ingeniumphoto{
        margin-top: 1;
    }
    .txt2-3{
        margin-right: 0px;
        margin-left: 120px;
    }
    .titulo3{
        margin-left: 44%;
        margin-right: 0px;
        font-family: 'Lato', sans-serif;
        font-size: 45px;
    }
    .titulo4{
        margin-left: 44%;
        margin-right: 0%;
    }
    #projetosp1{
        display:flex;
    flex-direction: row;
    }
    .subt2-1{
        margin-left: 390px;
        margin-right: 0px;
    }
    .subt2-2{
        margin-left: 310px;
        margin-right: 0px;
    }
    #subtexto1{
        display:flex;
        flex-direction: row;
    }
    .subestacao{
        margin-left: 340px;
        margin-right: 0px;
    }
    .laudo{
        margin-left: 150px;
        margin-right: 0px;
    }
    #projetosp2{
        display:flex;
        flex-direction: row;
    }
    .subt2-3{
        margin-left: 270px;
        margin-right: 0px;
    }
    .subt2-4{
        margin-left: 250px;
        margin-right: 0px;
    }
    .subt2-5{
        margin-left: 250px;
        margin-right: 0px;
    }
    #subtexto2{
        display:flex;
        flex-direction: row;
    }
    .industrial{
        margin-left: 240px;
        margin-right: 0px;
    }
    .fotovoltaico{
        margin-left: 150px;
        margin-right: 0px;
    }
    .residencial{
        margin-left: 125px;
        margin-right: 0px;
    }
    #fotos1{
        display: flex;
        flex-direction: row;
    }
    .balanca{
        margin-top: 40px;
        margin-left: 280px;
        margin-right: 0px;
    }
    .olho{
        margin-left: 280px;
        margin-right: 0px;
    }
    .montanha{
        margin-left: 190px;
        margin-right: 0px;
    }
    .engenheiro{
      margin-left: 700px;
      margin-right: 0px;
    }
    </style>    
    
    <link rel="icon" type="image/x-icon" href="">


</div>
</head>
<body>
<nav>
		<input type="checkbox" id="check">
		<label for="check" class="checkbtn">
			<i class="fas fa-bars"></i>
		</label>
		<label class="logo">
            <img class="logo" src="https://media.discordapp.net/attachments/985985388025892894/994616571047706754/LOGOTIPO.png?width=1200&height=318"alt="*LOGOTIPO*.png" width="350" height="100">
        </label>
		<ul>
			<li><a class="active" href="index.php">Início</a></li>
			<li><a href="#sobrenos">Sobre</a></li>
			<li><a href="#cadastro">Contato</a></li>
			<li><a href="diario.html">diario</a></li>
		</ul>
	</nav>
	<section>
   
</section>

<br><br><br>
<section><div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
     <div class="carousel-inner">
       <div class="carousel-item active">
         <img src="https://source.unsplash.com/1500x500/? Adidas sneakers" class="d-block w-100" alt="...">
       </div>
       <div class="carousel-item">
         <img src="https://source.unsplash.com/1500x500/?Nike sneakers" class="d-block w-100" alt="...">
       </div>
       <div class="carousel-item">
         <img src="https://source.unsplash.com/1500x500/?Puma sneakers" class="d-block w-100" alt="...">
       </div>
       <div class="carousel-item">
        <img src="https://source.unsplash.com/1500x500/? Corrida sneakers " class="d-block w-100" alt="...">
      </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
       <div>  
     </div>
   </div>
     </section>
    

    </div>
    <br id="sobrenos">
    <h1 class="titulo1">Quem somos?</h1>
    <div class="divdomal">
     <h3 class="txt1" id="txt1">A Ingenium Projetos Em Engenharia<p> é uma empresa focada em projetos elétricos.<p> 
         de projetos Empresariais à um projetoo residencial,<p> trazemos a solução do problema enfrentado
         estudando<P> as melhores opções que venham atender as necessidades de nossos clientes.
         </h3>
         <img href="logotipo" class="img1" id="img1" src="imagens/logo.png" width="250" height="200">
</div>
            <br><br><br>
  </div>
</div>
         <h1 class="titulo2">o que nos motiva?</h1>
         <h2 class="textoladin">Valores</h2> 
         <h2 class="textoladin">Missão</h2>
         <h2 class="textoladin">Visão</h2>

     <div id="textodurodo">
       
     
     <div class="container">
        <img class="balanca" src="https://media.discordapp.net/attachments/985985388025892894/994397327248859156/balanca.png?width=492&height=492" alt="balança.png"  width="150" height="150">
        <div class="overlay" >
    <div class="text">Segurança<P>
        Transparência<P>
        Excelência<P>
        Desenvolvimento Humano
</div>
</div>
</div>

<div class="container1">    
<img class="montanha" src="https://media.discordapp.net/attachments/985985388025892894/994397365161168977/montanha.png.png?width=492&height=492" alt="montanha.png"  width="250" height="250">
        <div class="overlay1">
         <div class="text1">Fornecer a melhor<p> solução via projetos de engenharia
            buscando atender todas as suas necessidades com qualidade e segurança 
            </div>
</div>
</div>

<div class="container2">    
<img class="olho" src="https://media.discordapp.net/attachments/985985388025892894/994397352095907921/olho.png?width=492&height=492" alt="olho.png"  width="250" height="250">
        <div class="overlay2">
         <div class="text2"> buscamos ser referencia na sustendabilidade<p>
         e desenvolvimento do meio<p>
        em que se encontra<P>
            </div>
</div>
</div>
    </div>
 <br><br>
    <h1 class="titulo4">Nossas soluções</h1>
    <br><br>    
    <div id="projetosp1">
    <h2 class="subt2-1">✓Subestações</h2>
    <h2 class="subt2-2">✓Laudos</h2>
    </div>
    <div id="subtexto1">
    <h3 class="subestacao">Desde subestações simplificadas,<p> ao
tempo até subestações blindadas<p>
destinada ao consumidor rural ou<p>
industrial.<h3>

<h3 class="laudo">Laudos para área industrial, tais como,<p>
SPDA (Sistema contra Descargas<p>
Atmosféricas) e NR-10, seguindo as normas<p>
NBR5410, NBR5419 e IT-41 Conforme Corpo<p>
de Bombeiros e Laudo ICMS.</h3>
</div>
    <br><br>
    <div id="projetosp2">
    <h2 class="subt2-3">✓Industrial e Comercial</h2>
    <h2 class="subt2-4">✓Fotovoltaico</h2>
    <h2 class="subt2-5">✓Residencial</h2>
    </div>
    <div id="subtexto2">
    <h3 class="industrial">Infraestrutura elétrica, QGBTs e QDFs<p>
Quadros de Medição Coletiva<p>
atendendo a necessidade da<p>
indústria/Comércio.</h3>
<h3 class="fotovoltaico">Dimensionamento de painéis<p>
fotovoltaicos para atendimento de<p>
acordo com a demanda necessária<p>
para sua casa ou indústria.</h3>
    <h3 class="residencial">Dimensionamento elétrico para sua<p>
residência, cuidando desde o padrão<p>
de entrada até os circuitos elétricos<P>
internos.</h3>
</div>
    <h3 class="txt3-1"></h3>
    <h3 class="txt3-2">  </h3>
    <h3 class="txt3-3">  </h3>
    <h3 class="txt3-4">  </h3>
    <h3 class="txt3-5">  </h3>
    </div>
    <div>
        <a class="whatsapp-link"href="https://web.whatsapp.com/send?phone=5519997463745" target="_blank">
            <i class="fa fa-whatsapp"></i>
            
        </a> 
         </div>
<br><br>
<div class="mapa">
    <iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14685.675461389632!2d-47.3778136!3d-23.0451004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x7899c8cef31e2d48!2sIngenium%20Projetos%20em%20Engenharia!5e0!3m2!1spt-BR!2sbr!4v1647307449015!5m2!1spt-BR!2sbr" width="1200" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
   </div>  
    

    <div>
    


<?php
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if(!empty($dados['sendcadmsg'])) {
    
    $query_msg = "INSERT INTO mensagens (nome, Email, zapzap, areaint) VALUES (nome, Email, zapzap, areaint)";
    $conn->prepare($query_msg);
    $cad_msg = $conn->bindParam('nome', $dados['nome'], PDO::PARAM_STR);
    $cad_msg->bindParam('Email', $dados['Email'], PDO::PARAM_STR);
    $cad_msg->bindParam('zapzap', $dados['zapzap'], PDO::PARAM_STR);
    $cad_msg->bindParam('areaint', $dados['areaint']);
    
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
<div id="backgroundcad">
<br><br><h1 class="txtprecad"> Formulario de contato </h1><br><br> 
 <div id="cadastro" class="cadastro">
<form method="POST" action="processa.php">
 <label class="txtcadastro" >Nome<label><br>
<input class="lblcadastro" type="text" name="nome" placeholder="Nome Completo"><br><br>

<label class="txtcadastro">E-mail<label><br>
<input class="lblcadastro" type="E-mail" name="Email" placeholder="Digite Seu E-mail"><br><br>

<label class="txtcadastro1">Numero para contato<label><br>
<textarea class="lblcadastro" name="zapzap" rows="1" placeholder="Telefone ou WhatsApp"></textarea><br><br>
<label class="txtcadastro2">Fale sobre o o serviço necessario<label><br>
<textarea class="lblcadastro" name="areaint" rows="8" cols="50"></textarea><br><br>


<input class="btnenviar" type="submit" value="Enviar"><br>
<div id="form">
    <br>
</div>
</div>
</div>
    </div>
 <div id="redesociais">
 <a href="https://www.facebook.com/ingeniumproj" class="fa fa-facebook" target="_blank"></a>
 <a class="fa fa-instagram" href="https://www.instagram.com/ingenium_projetos/" target="_blank"></a>
</div>
</body>
</html>