<?php

$host ="localhost";
$user ="root";
$password = "";
$dbname = "";

try{

$conectar = new PDO("mysql:host=".$host."; dbname=".$dbname, $user, $password);

// echo "conexão Ok";

} catch (Exception $e){
echo "Erro na conexão" . $e->getMessage();

}

?>