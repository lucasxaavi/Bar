<?php 
    require_once 'cabecalho.php';
    require_once 'classes/produtos.php';
    require_once 'classes/Categoria.php';

    $id_editar = $_GET['CODIGO'];

    $produto = new  produtos();
    $linhaEditar = $produto->listar1produto($id_editar);
    
    $categoria = new Categoria();
    $listaCategoria = $categoria->listar();
?>

<div class="row">
    <div class="col-md-12">
        <h2>Editar Categoria</h2>
    </div>
</div>

<form action="produtos-editar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <input type="hidden" name="id" value="<?php echo $id_editar;?>">

            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input type="text" name="nome" value="<?php echo $linhaEditar['nome'];?>" class="form-control" placeholder="Nome do produto" required>
            </div>
            
            <div class="form-group">
                <label for="quantidade">Quantidade do Produto</label>
                <input type="number" name="quantidade" value="<?php echo $linhaEditar['quantidade'];?>" min="0" class="form-control" placeholder="Quantidade do produto" required>
            </div>
            
            <div class="form-group">
                <label for="nome">Categoria do Produto</label>
                <select class="form-control" name="categoria">
                    <option selected><?php echo $linhaEditar['categoria'];?></option>
                    <?php foreach($listaCategoria as $linha){?>
                        <option ><?php echo $linha['descricao'];?></option>
                    <?php }?>
                                        
                </select>
            </div>

            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require_once 'rodape.php' ?>