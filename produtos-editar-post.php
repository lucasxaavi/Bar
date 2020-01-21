<?php
    require_once 'Classes/produtos.php';
    $id = $_POST['id'];
    $quantidade = $_POST['quantidade'];
    $categoria = $_POST['categoria'];
    $nome = $_POST["nome"];
    $produto = new produtos();
    $produto->alterarproduto($id, $nome, $quantidade, $categoria);

    header('Location:produtos.php');
?>