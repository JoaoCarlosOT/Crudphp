<?php
session_start();
include_once 'conexao.php';


if(isset($_GET['id'])){
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "DELETE FROM `usuarios` WHERE `id` = '$id'";

    mysqli_query($connect, $sql); 
    $_SESSION['mensagem'] = "Deletado com sucesso!";
    header('location:index.php');
}












?>