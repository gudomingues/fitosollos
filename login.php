<?php
session_start();
    include('configuracao.php');

    if(empty($_POST['usuario']) || empty($_POST['senha'])) {
        header('Location: loginIndex.php');
        exit();
    }

$usuario = mysqli_real_escape_string($conexao,$_POST['usuario']);
$senha = mysqli_real_escape_string($conexao,$_POST['senha']);

$query = "select CAD_USU, CAD_SENHA FROM cadastro WHERE CAD_USU = '{$usuario}' and CAD_SENHA = '{$senha}'";


$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row ==1){
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();
} else{
    header('Location: loginIndex.php');
    exit();
}
