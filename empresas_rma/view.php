<?php 
    require_once 'functions.php';
    view($_GET['id']);
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Empresa <?php echo $empresa['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Nome:</dt>
	<dd><?php echo $empresa['nome_empresa']; ?></dd>

	<dt>Cidade:</dt>
	<dd><?php echo $empresa['cidade']; ?></dd>

	<dt>Endereço:</dt>
	<dd><?php echo $empresa['endereco']; ?></dd>

	<dt>Responsável:</dt>
	<dd><?php echo $empresa['responsavel']; ?></dd>

	<dt>Telefone:</dt>
	<dd><?php echo $empresa['telefone_empresa']; ?></dd>

	<dt>E-mail:</dt>
	<dd><?php echo $empresa['email']; ?></dd>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	<a href="edit.php?id=<?php echo $empresa['id']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
		<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $empresa['id']; ?>">
			<i class="fa fa-trash"></i> Excluir
		</a>
		<a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include 'modal.php'; ?>

<?php include FOOTER_TEMPLATE; ?>