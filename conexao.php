<?php

$host = "localhost";
$user= "root";
$pass = "";
$dbname = "ingenium";
$port = 3306;

try{
 $conn = new PDO("mysql:host=$host;port=$port;dbname=".$dbname, $user, $pass);
}catch(PDOException $err){
    
//$conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);

    //echo "Conexão com banco de dados realizado com sucesso!";
}catch(PDOException $err){
    //echo "Erro: Conexão com banco de dados não realizado com sucesso. Erro gerado " . $err->getMessage();
}