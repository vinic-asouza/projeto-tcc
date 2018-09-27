<?php 
    require_once 'functions.php';
    view($_GET['id']);
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Funcionario <?php echo $funcionario['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $funcionario['nome_funcionario']; ?></dd>

	<dt>Setor:</dt>
	<dd><?php echo $funcionario['setor_func']; ?></dd>
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
	  <a href="edit.php?id=<?php echo $funcionario['id']; ?>" class="btn btn-primary">Editar</a>
	  <a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include FOOTER_TEMPLATE; ?>