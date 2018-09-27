<?php 
    require_once 'functions.php';
    view($_GET['id']);
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Devolução <?php echo $devolucao['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Responsável:</dt>
	<dd><?php echo $devolucao['funcionario_id']; ?></dd>
	<dt>Cód Equipamento:</dt>
	<dd><?php echo $devolucao['equipamento_id']; ?></dd>
	<dt>Data:</dt>
	<dd><?php echo $devolucao['data']; ?></dd>
	<dt>Cód. Cliente:</dt>
	<dd><?php echo $devolucao['cod_cliente']; ?></dd>
	<dt>Serviço:</dt>
	<dd><?php echo $devolucao['servico']; ?></dd>
	<dt>Motivo:</dt>
	<dd><?php echo $devolucao['motivo']; ?></dd>
	<dt>Avaliação:</dt>
	<dd><?php echo $devolucao['avaliacao']; ?></dd>
</dl>

<!--
<dl class="dl-horizontal">
	<dt>xxx:</dt>
	<dd><?//php echo $customer['address']; ?></dd>

	<dt>xxx:</dt>
	<dd><?//php echo $customer['hood']; ?></dd>

	<dt>xxx:</dt>
	<dd><//?php echo $customer['zip_code']; ?></dd>

	<dt>xxx:</dt>
	<dd><?//php echo $customer['created']; ?></dd>
</dl>
-->

<div id="actions" class="row">
	<div class="col-md-12">
	  <a href="edit.php?id=<?php echo $devolucao['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include FOOTER_TEMPLATE; ?>