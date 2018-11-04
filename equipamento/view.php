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
	<dt>Nome:</dt>
	<dd><?php echo $equipamento['nome_equip']; ?></dd>
	<dt>Marca:</dt>
	<dd><?php echo $equipamento['marca_equip']; ?></dd>
	<dt>Modelo:</dt>
	<dd><?php echo $equipamento['modelo_equip']; ?></dd>
	<dt>Tipo:</dt>
	<dd><?php echo $equipamento['tipo']; ?></dd> <hr>
	<dt>MAC:</dt>
	<dd><?php echo $equipamento['mac_address']; ?></dd>
	<dt>Num. Série:</dt>
	<dd><?php echo $equipamento['num_serie']; ?></dd> <hr>
	<dt>Obs:</dt>
	<dd><?php echo $equipamento['observacao']; ?></dd> <hr>
	<dt>Atualizado em:</dt>
	<dd><?php echo $equipamento['modified']; ?></dd> <hr>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
		<a href="edit.php?id=<?php echo $equipamento['id']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
		<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $equipamento['id']; ?>">
			<i class="fa fa-trash"></i> Excluir
		</a>
		<a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include 'modal.php'; ?>

<?php include FOOTER_TEMPLATE; ?>