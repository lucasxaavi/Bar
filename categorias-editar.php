<?php
$id = $_GET['codigo'];


require_once 'cabecalho.php'; 
require_once 'classes\Categoria.php';

$categoria = new Categoria();
$linha = $categoria->listar1Categoria($id);
?>
<h2>ALterar categoria</h2>
<form name="alterar-categoria" method="post" action="categorias-editar-post.php" method="post">
<input name="id" value="<?php echo $id;?>">
    Descrição:
    <input name="descricao" value="<?php echo $linha['descricao'];?>">
    <button type="submit">Salvar</button>
    </form>
    <?php
 require_once 'rodape.php'; 
 ?>