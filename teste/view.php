<?php 
    require_once 'functions.php';
    view($_GET['id']);
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Registro de Teste #<?php echo $teste['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
<dt>Data:</dt>
	<dd><?php echo $teste['modified']; ?></dd> <hr>
	<dt>Cód. Equipamento:</dt>
	<dd><?php echo $teste['equipamento_id']; ?></dd>
	<dt>Cód. Modelo:</dt>
	<dd><?php echo $teste['modelo_id']; ?></dd>
	<dt>Tipo Equipamento:</dt>
	<dd><?php echo $teste['tipo']; ?></dd>
	<dt>Nome Equipamento:</dt>
	<dd><?php echo $teste['nome_equip']; ?></dd>
	<dt>Modelo Equipamento:</dt>
	<dd><?php echo $teste['modelo_equip']; ?></dd>
	<dt>MAC Address:</dt>
	<dd><?php echo $teste['mac_address']; ?></dd>
	<dt>Num. Série:</dt>
	<dd><?php echo $teste['num_serie']; ?></dd> <hr>
	<dt>Situação:</dt>
	<dd><?php echo $teste['situacao']; ?></dd>
	<dt>Descrição:</dt>
	<dd><?php echo $teste['descricao']; ?></dd>
	<dt>Cód. Avaliação:</dt>
	<dd><?php echo $teste['avaliacao']; ?></dd> <hr>
	<dt>Cód. Responsável:</dt>
	<dd><?php echo $teste['funcionario_id']; ?></dd>
	<dt>Nome:</dt>
	<dd><?php echo $teste['nome_funcionario']; ?></dd>
	<dt>Setor:</dt>
	<dd><?php echo $teste['setor_func']; ?></dd> <hr>
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