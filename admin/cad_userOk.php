<?php

include "../config/connection.php";

$nome= $_POST['nome'];
$email= $_POST['email'];
$senha= md5($_POST['senha']);
$confirmesenha = md5($_POST['confirmesenha']);

//preparar
$stmt=$conectar->prepare("INSERT INTO users (nome, email, senha, confirmesenha) VALUES(:nome, :email, :senha, :confirmesenha)");
//tratar
$stmt->bindParam(':nome',$nome);
$stmt->bindParam(':email',$email);
$stmt->bindParam(':senha',$senha);
$stmt->bindParam(':confirmesenha',$confirmesenha);

//executar
$stmt->execute();

header("Location:../pages/login.html");

// echo "$nome - $ - $senha";
?>