<?php 
$hostname = "localhost";
$bancoDeDados = "livraria";
$usuario = "root";
$senha = "070714";
//objeto php mysqli
$mysqli = new mysqli( $hostname, $usuario, $senha, $bancoDeDados);
if($mysqli->connect_errno){
    die("Falha na conexão com o banco de dados");
}else
    echo"<div style='display:none;'>conectado</div>";
?>