<?php 
    require_once 'functions.php';
    view($_GET['id']);
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Modelo <?php echo $modelo['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Código:</dt>
	<dd><?php echo $modelo['id']; ?></dd>

	<dt>Descrição:</dt>
	<dd><?php echo $modelo['nome_equip']; ?></dd>

	<dt>Marca:</dt>
	<dd><?php echo $modelo['marca_equip']; ?></dd>

	<dt>Modelo:</dt>
	<dd><?php echo $modelo['modelo_equip']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $modelo['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include FOOTER_TEMPLATE; ?>