<?php

    $nome = $_POST['usuario'];
    $senha = $_POST['senha'];

    require_once 'classes/Usuario.php';

    $usuario = new usuario();
    $existe = $usuario->validarLogin($nome, $senha);

    if(isset($existe)){

        header('Location:index2.php');

    }else{
        
        header('Location:index.php?mensagem=1');
        
        
    }

?>
