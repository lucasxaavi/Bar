<?php

    require_once 'classes/produtos.php';

    $produto = new produtos();

    $nome = $_POST['nome'];
    $quant = $_POST['quantidade'];
    $categoria = $_POST['categoria'];

    $produto->inserir($nome,$quant,$categoria);

    header('Location:produtos.php')

?>  