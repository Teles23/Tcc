<?php

$host ="localhost";
$user ="root";
$password = "teles97";
$dbname = "epalco";

try{

$conectar = new PDO("mysql:host=".$host."; dbname=".$dbname, $user, $password);

// echo "conexão Ok";

} catch (PDOException $e){
die( "Erro na conexão" . $e->getMessage());

}
