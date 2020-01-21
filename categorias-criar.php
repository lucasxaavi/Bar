<?php require_once 'cabecalho.php'; ?>
<h2>Criar nova categoria</h2>
<form name="nova-categoria" method="post" action="categorias-criar-post.php">
    Descrição da Categoria:
    <input name="descricao" maxlength="30" placeholder="Descrição" required>
    <br>
    <button type="submit">Salvar</button>
    </form>
<?php require_once 'rodape.php'; ?>