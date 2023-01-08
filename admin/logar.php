<?php
include('../config/connection.php');

session_start();
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);

if (empty($dados['email'])) {
   $retorna = ['status' => false, 'msg' => "Necessario preencher o campo email"];
} else if (empty($dados['senha'])) {
   $retorna = ['status' => false, 'msg' => "Necessario preencher o campo senha!"];
} else {
   $senha = md5($_POST['senha']);

   $query_usuario = ("SELECT * FROM users WHERE email=:email AND senha=:senha");
   $stmt = $conectar->prepare($query_usuario);

   $stmt->bindParam(":email", $dados['email']);
   $stmt->bindValue(":senha", $senha);

   $stmt->execute();
   if ($stmt->rowCount() == 1) {
      $info = $stmt->fetch();
      $retorna = ['status' => true, 'id' => $info['id']];
      $_SESSION['logado'] = true;
      $_SESSION['id'] = $info['id'];
      $_SESSION['nome'] = $info['nome'];
      $_SESSION['senha'] = $info['senha'];
      $_SESSION['perfil'] = $info['perfil'];
   } else {
      $retorna = ['status' => false, 'msg' => "Email/Senha incorretos!"];
   }
}
echo json_encode($retorna);