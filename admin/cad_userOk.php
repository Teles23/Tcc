<?php

include "../config/connection.php";
$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);


if (empty($dados['nome'])) {
    $retorna = ['status' => false, 'msg' => "Erro: Necessario preencher o campo nome!"];
} else if (empty($dados['email'])) {
    $retorna = ['status' => false, 'msg' => "Erro: Necessario preencher o campo email!"];
} else if (empty($dados['senha'])) {
    $retorna = ['status' => false, 'msg' => "Erro: Necessario preencher o campo senha!"];
} elseif (empty($dados['confirme_senha'])) {
    $retorna = ['status' => false, 'msg' => "Erro: Necessario preencher o campo Confirme senha!"];
} else {
    $senha = md5($_POST['senha']);
    $confirmesenha = md5($_POST['confirme_senha']);
    //preparar
    $query_usuario = ("INSERT INTO users (nome, email, senha, confirmesenha, perfil) VALUES(:nome, :email, :senha, :confirmesenha, :perfil)");
    $stmt = $conectar->prepare($query_usuario);
    //tratar
    $stmt->bindParam(':nome', $dados['nome']);
    $stmt->bindParam(':email', $dados['email']);
    $stmt->bindParam(':senha', $senha);
    $stmt->bindParam(':confirmesenha', $confirmesenha);
    $stmt->bindParam(':perfil', $dados['perfil']);

    //executar
    $stmt->execute();

    if ($stmt->rowCount()) {
        $retorna = ['status' => true, 'msg' => "Usuario cadastro com sucesso!"];
    } else {
        $retorna = ['status' => false, 'msg' => "Erro: Usuario não cadastro com sucesso!"];
    }
    // header("Location:../pages/login.php");
}
echo json_encode($retorna);

