<?php require_once 'cabecalho.php'; ?>
<?php require_once 'classes/usuario.php'; ?>
<?php
$usuario = new usuario();

$listar = $usuario->listar();

?>
<h2>Usuario</h2>
<a href="usuario_criar.php" class="btn btn-success">Adicionar Usuario</a>
<br>
<table class="table">
    <thead>
        <th>ID</th>
        <th>Usuario</th>
        <th>Senha</th>
    
        </thead>
        <tbody>
            <?php foreach($listar as $linha){ ?>
            <tr>
                <td><?php echo $linha['id'];?></td>
                <td><?php echo $linha['usuario'];?></td>
                <td><?php echo $linha['senha'];?></td>
                <td>
                    <a href="usuario-editar.php?codigo=<?php echo $linha['id']; ?>" class="btn btn-info">Alterar</a>
                    <a href="usuario-excluir.php?codigo="<?php echo $linha['id']; ?> class="btn btn-danger">excluir</a>
                </td>
            </tr>
                <?php } ?>
         </tbody>
         </table>





<?php
require_once 'rodape.php';
?>