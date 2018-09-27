<?php 
    require_once 'functions.php';
    view($_GET['id']);
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Equipamento <?php echo $equipamento['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Modelo:</dt>
	<dd><?php echo $equipamento['modelo_id']; ?></dd>

	<dt>MAC:</dt>
	<dd><?php echo $equipamento['mac_address']; ?></dd>

	<dt>Num. Série:</dt>
	<dd><?php echo $equipamento['num_serie']; ?></dd>

	<dt>Obs.:</dt>
	<dd><?php echo $equipamento['observacao']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $equipamento['mac_address']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include FOOTER_TEMPLATE; ?>