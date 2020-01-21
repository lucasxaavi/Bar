<?php

$codigo = $_GET['id'];
require_once 'classes/usuario.php';
$OBJ_usuario = new usuario();
$LISTA_usuario = $OBJ_usuario ->excluir($id);
header('Location:usuarios.php');
?>






