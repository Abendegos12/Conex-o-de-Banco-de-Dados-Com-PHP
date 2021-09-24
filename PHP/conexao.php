<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "DBPHP";

$connect = mysqli_connect($servidor, $usuario, $senha, $dbname);

if (!$connect){
    die ("Falha na Conexão: " .mysqli_connect_error());
}

echo "<h1>Conexão bem sucedida</h1>";

?>