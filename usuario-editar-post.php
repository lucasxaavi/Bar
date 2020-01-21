<?php

        require_once 'classes/usuario.php';
        $codigo =$_POST['codigo'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        
        
        $OBJ_usuario = new usuario();
        $OBJ_usuario ->alterar($id, $usuario, $senha);
        header('Location:usuarios.php');

?>