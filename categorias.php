<?php
require_once 'classes/Categoria.php';
$categoria = new Categoria();

$lista = $categoria->listar();



require_once 'cabecalho.php';
?>
<h2>Categorias</h2>
<a href="categorias-criar.php" class="btn btn-success">Adicionar categoria</a>
<br>

    
<table class="table">
    <thead>
    <th>ID</th>
        <th>Categoria</th>
        
    </thead>
        <tbody>
        <?php
             foreach($lista as $linha){?>
            <tr>
              <td><?php echo $linha['id'];?></td>
              <td><?php echo $linha['descricao'];?></td>
                <td><a href="categorias-editar.php?codigo=<?php echo $linha['id']; ?>" class="btn btn-info">Alterar</a></td>
                <td><a href="categorias-excluir.php?codigo=<?php echo $linha['id']; ?>" class="btn btn-danger">excluir</a></td>
                </td>
            </tr>
             <?php } ?>
    </tbody>
</table>





<?php
require_once 'rodape.php';
?>