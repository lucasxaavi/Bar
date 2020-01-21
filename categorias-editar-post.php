<?php

require_once 'classes/Categoria.php';
$categoria = new Categoria();
$id = $_POST['id'];
$descricao = $_POST['descricao'];

$categoria ->alterar($id, $descricao);
header('Location:categorias.php');

?>