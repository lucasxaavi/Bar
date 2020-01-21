<?php

require_once 'classes/usuario.php';

$nome = $_POST['usuario'];
$senha = $_POST['senha'];


$usuario = new usuario();
$usuario -> inserir($nome, $senha);
header('Location:usuarios.php');

?>





