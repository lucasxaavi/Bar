<?php 
    require_once 'cabecalho.php';
    require_once 'classes/produtos.php';

    $produto = new produtos;
    $lista = $produto->listar();
?>

<h2>Produtos</h2>
<a href="produtos-criar.php" class="btn btn-info">Criar Novo Produto</a>
<br><br>

<table class="table">
    
    <thead>
        <tr>
            
            <th>Nome</th>
            <th>Quantidade</th>
            <th>Categoria</th>
            <th class="acao">Editar</th>
            <th class="acao">Excluir</th>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach($lista as $linha){?>
            <tr>
                <td><?php echo $linha['nome'];?></td>
                <td><?php echo $linha['quantidade'];?></th>
                <td><?php echo $linha['categoria'];?></td>
                <td><a href="produtos-editar.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-info">Editar</a></td>
                <td><a href="produtos-excluir.php?CODIGO=<?php echo $linha['id'];?>" class="btn btn-danger">Excluir</a></td>
            </tr>
        <?php }?>
    </tbody>

</table>

<?php require_once 'rodape.php' ?>
