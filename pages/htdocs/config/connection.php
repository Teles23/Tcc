<?php

$host = "sql113.epizy.com";
$user = "epiz_33282288";
$password = "6gCpWje8Hp1y";
$dbname = "epiz_33282288_epalco";

try {

    $conectar = new PDO("mysql:host=" . $host . "; dbname=" . $dbname, $user, $password);

    // echo "conexão Ok";

} catch (PDOException $e) {
    die("Erro na conexão" . $e->getMessage());
}