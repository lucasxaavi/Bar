<?php 
    require_once 'cabecalho.php';
    require_once 'classes/Categoria.php';

    $categoria = new Categoria();
    $lista = $categoria->listar();
?>
<h2>Criar Novo Produto</h2>
<form action="produtos-criar-post.php" method="post">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-group">
                <label for="nome">Nome do Produto</label>
                <input name='nome'type="text" class="form-control" placeholder="Nome do Produto" required>
            </div>
            <div class="form-group">
                <label for="preco">Quantidade do Produto</label>
                <input name='quantidade'type="number" step="0.01" min="0" class="form-control" placeholder="Quantidade do Produto" required>
            </div>
            <div class="form-group">
                <label for="nome">Categoria do Produto</label>
                <select class="form-control" name="categoria">

                    <?php foreach($lista as $linha){?>

                        <option ><?php echo $linha['descricao'];?></option>

                    <?php }?>
                </select>
            </div>
            <input type="submit" class="btn btn-success btn-block" value="Salvar">
        </div>
    </div>
</form>

<?php require_once 'rodape.php' ?>
