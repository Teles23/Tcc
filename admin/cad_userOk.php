<?php

include "../config/connection.php";
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
// $nome = $_POST['nome'];
// $email = $_POST['email'];
// $senha = md5($_POST['senha']);
// $confirmesenha = md5($_POST['confirme_senha']);
// $perfil = ($_POST['perfil']);

if (empty($dados['nome'])) {
    $retorna = ['status' => false, 'msg' => "Erro: Necessario preencher o campo nome!"];
} else if (empty($dados['email'])) {
    $retorna = ['status' => false, 'msg' => "Erro: Necessario preencher o campo email!"];
} else if (empty($dados['senha'] )) {
    $retorna = ['status' => false, 'msg' => "Erro: Necessario preencher o campo senha!"];
} elseif (empty($dados['confirme_senha'])) {
    $retorna = ['status' => false, 'msg' => "Erro: Necessario preencher o campo Confirme senha!"];
} else {
    //preparar
    $query_usuario = ("INSERT INTO users (nome, email, senha, confirmesenha, perfil) VALUES(:nome, :email, :senha, :confirmesenha, :perfil)");
    $stmt = $conectar->prepare($query_usuario);
    //tratar
    $stmt->bindParam(':nome', $dados['nome']);
    $stmt->bindParam(':email', $dados['email']);
    $stmt->bindParam(':senha', $dados['senha']);
    $stmt->bindParam(':confirmesenha', $dados['confirme_senha']);
    $stmt->bindParam(':perfil', $dados['perfil']);

    //executar
    $stmt->execute();

    if($stmt->rowCount()){
        $retorna = ['status' => true, 'msg' => "Usuario cadastro com sucesso!"];
    }else{
        $retorna = ['status' => false, 'msg' => "Erro: Usuario não cadastro com sucesso!"];
    }

}
echo json_encode($retorna);





// header("Location:../pages/login.php");
