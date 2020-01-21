<?php
$id_excluir = $_GET ['CODIGO'];
require_once 'classes\produtos.php';
$produto = new produtos();
$produto->excluirproduto($id_excluir);
header('Location:produtos.php');
?>