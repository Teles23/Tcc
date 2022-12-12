<?php

include "../config/connection.php";

$nome= $_POST['nome'];
$email= $_POST['email'];
$senha= md5($_POST['senha']);
$confirmesenha = md5($_POST['confirmesenha']);
$perfil =($_POST['perfil']);

//preparar
$stmt=$conectar->prepare("INSERT INTO users (nome, email, senha, confirmesenha, perfil) VALUES(:nome, :email, :senha, :confirmesenha, :perfil)");
//tratar
$stmt->bindParam(':nome',$nome);
$stmt->bindParam(':email',$email);
$stmt->bindParam(':senha',$senha);
$stmt->bindParam(':confirmesenha',$confirmesenha);
$stmt->bindParam(':perfil',$perfil);

//executar
$stmt->execute();

header("Location:../pages/login.php");

// echo "$nome - $ - $senha";
