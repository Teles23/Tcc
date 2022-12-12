<?php
include('../config/connection.php');

session_start();

$email=$_POST['email'];
$senha= md5($_POST['senha']);


$stmt=$conectar->prepare("SELECT * FROM users WHERE email=:EMAIL AND senha=:SENHA");

$stmt->bindParam(":EMAIL",$email);
$stmt->bindParam(":SENHA",$senha);
// $stmt->bindValue(":LOGIN", md5($senha));

$stmt->execute();



if($stmt->rowCount()== 1){
	$info = $stmt->fetch();
	/*var_dump($info) exit();*/
   // $_SESSION['logado']=true;
   // $_SESSION['id']=$info['id'];
   // $_SESSION['nome']=$info['nome'];
   // // $_SESSION['login']=$info['login'];
   // $_SESSION['senha']=$info['senha'];
   header("Location: ../pages/perfil.php");
}else{
	echo "usuário não cadastrado";
}
