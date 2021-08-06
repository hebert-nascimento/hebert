<?php
require_once 'Conexao.php';
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$senha = md5($senha);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrenome', FILTER_SANITIZE_STRING);
$query_usuario = "INSERT INTO formulario (email, senha, nome, sobrenome, tipo) VALUES ('$email', '$senha', '$nome', '$sobrenome', 3)";
mysqli_query($conn, $query_usuario);
if (mysqli_insert_id($conn)) {
    $msg = "Usuário cadastrado com sucesso.";
    header("Location: index.php?msg=".$msg."&class=success");
} else {
    $msg = "Erro ao cadastrar usuário.";
    header("Location: index.php?msg=".$msg."&class=danger");
}
?>








