<?php
$servidor ="localhost";
$usuario = "root";
$senha = "";
$dbname="cadastro";

$mysqli=new mysqli($servidor, $usuario, 
$senha, $dbname);
if($mysqli->connect_errno){
 echo"Houve um erro: (" . $mysqli->connect_errno.")" . $mysqli->connect_error;
}
?>