<?php

session_start();
include_once 'conexao.php';


if(isset($_POST['btn-editar'])):
    $id = mysqli_escape_string($connect, $_POST['id']);
    $nome = mysqli_escape_string($connect, $_POST['txtnome']);
    $email = mysqli_escape_string($connect, $_POST['txtemail']);
    $tel = mysqli_escape_string($connect, $_POST['txttel']);

    $sql= "UPDATE `usuarios` SET `nome` = '$nome', `email` = '$email', `telefone` = '$tel'  WHERE `id` = '$id'";

    mysqli_query($connect, $sql);
    $_SESSION['mensagem'] = "Editado com sucesso!";
    header('location:index.php');

endif;





?>