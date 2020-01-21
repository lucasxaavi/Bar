<?php require_once 'cabecalho.php'; ?>

<h2>criar Usuario</h2>

<form name="formulario" method="post" action="usuario-criar-post.php">
<label>Usuario</label>
<input name="usuario" maxlenght="30" id="usuario">
<br>
<label>Senha</label>
<input type="Password" name="senha" id="senha" maxlenght="30">
<br><br>
<button type="submit">Salvar</button>
</form>

<?php require_once 'rodape.php';?>