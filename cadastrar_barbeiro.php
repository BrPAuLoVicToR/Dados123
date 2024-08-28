<?php
include "conexao.php";

echo "<pre>";
print_r($_POST);

$email = $_POST['email'];
$nome_usuario = $_POST['nome_usuario'];
$data_de_nascimento = $_POST['data_de_nascimento'];
$nome_banco = $_POST['email'];
$numero_agencia = $_POST['`numero_agencia'];
$numero_conta = $_POST['numero_conta'];
$chave_pix = $_POST['chave_pix'];
$data_criacao = $_POST['data_criacao'];

?> 