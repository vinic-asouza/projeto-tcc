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
	  <a href="edit.php?id=<?php echo $teste['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include FOOTER_TEMPLATE; ?>