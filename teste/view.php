<?php 
    require_once 'functions.php';
    view($_GET['id']);
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Teste Cód: <?php echo $teste['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Responsável:</dt>
	<dd><?php echo $teste['funcionario_id']; ?></dd>
	<dt>Cód Equipamento:</dt>
	<dd><?php echo $teste['equipamento_id']; ?></dd>
	<dt>Situação:</dt>
	<dd><?php echo $teste['situacao']; ?></dd>
	<dt>Descrição:</dt>
	<dd><?php echo $teste['descricao']; ?></dd>
	<dt>Avaliação:</dt>
	<dd><?php echo $teste['avaliacao']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
		<a href="edit.php?id=<?php echo $teste['id']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
		<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $teste['id']; ?>">
			<i class="fa fa-trash"></i> Excluir
		</a>
		<a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include 'modal.php'; ?>

<?php include FOOTER_TEMPLATE; ?>