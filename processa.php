<?php 
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$CPF = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_STRING);
$RG = filter_input(INPUT_POST, 'RG', FILTER_SANITIZE_STRING);
$Data_Nasc = filter_input(INPUT_POST, 'Data de Nascimento', FILTER_SANITIZE_STRING);
$Sexo = filter_input(INPUT_POST, 'Sexo', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO usuarios(nome, email, created, CPF, RG, Data_Nasc, Sexo) values('$nome', '$email', '$CPF', '$RG', '$Data_Nasc', '$Sexo', NOW())";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<div class='alert alert-success' role='alert'>
    Cadastrado com sucesso
  </div>";
  header("location: cadastrocliente.php");
} else {
    $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>
    Erro ao cadastrar
  </div>";}
  header("location: cadastrocliente.php");
?>