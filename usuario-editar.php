<?php
$codigo = $_GET['codigo'];


require_once 'cabecalho.php'; 
require_once 'classes\usuario.php';

$OBJ_usuario = new usuario();
$LISTA_usuario = $OBJ_usuario->listar1usuario($codigo);
?>
<h2>Alterar Usuario</h2>
<form name="alterar-usuario" method="post" action="usuario-editar-post.php?codigo=<?php echo $LISTA_usuario['senha'];?>" method="post">
Usuario:
<br>
<input name="usuario" value="<?php echo $LISTA_usuario['usuario'];?>">
    <br>senha:
    <br>
    <input name="senha" value="<?php echo $LISTA_usuario['senha'];?>">
    <button type="submit">Salvar</button>
    </form>
    <?php
 require_once 'rodape.php'; 
 ?>