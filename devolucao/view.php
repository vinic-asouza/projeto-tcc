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
	<dt>Data:</dt>
	<dd><?php echo $devolucao['data']; ?></dd> <hr>
	<dt>Cód. Equipamento:</dt>
	<dd><?php echo $devolucao['equipamento_id']; ?></dd>
	<dt>Cód. Modelo:</dt>
	<dd><?php echo $devolucao['modelo_id']; ?></dd>
	<dt>Tipo Equipamento:</dt>
	<dd><?php echo $devolucao['tipo']; ?></dd>
	<dt>Nome Equipamento:</dt>
	<dd><?php echo $devolucao['nome_equip']; ?></dd>
	<dt>Modelo Equipamento:</dt>
	<dd><?php echo $devolucao['modelo_equip']; ?></dd>
	<dt>MAC Address:</dt>
	<dd><?php echo $devolucao['mac_address']; ?></dd>
	<dt>Num. Série:</dt>
	<dd><?php echo $devolucao['num_serie']; ?></dd> <hr>
	<dt>Cód Cliente:</dt>
	<dd><?php echo $devolucao['cod_cliente']; ?></dd>
	<dt>Serviço:</dt>
	<dd><?php echo $devolucao['servico']; ?></dd>
	<dt>Motivo:</dt>
	<dd><?php echo $devolucao['motivo']; ?></dd>
	<dt>Cód. Avaliação:</dt>
	<dd><?php echo $devolucao['avaliacao']; ?></dd> <hr>
	<dt>Cód. Responsável:</dt>
	<dd><?php echo $devolucao['funcionario_id']; ?>
	<dt>Nome:</dt>
	<dd><?php echo $devolucao['nome_funcionario']; ?>
	<dt>Setor:</dt>
	<dd><?php echo $devolucao['setor_func']; ?>
	<dt>Atualizado em:</dt>
	<dd><?php echo $devolucao['modified']; ?></dd> <hr>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
		<a href="edit.php?id=<?php echo $devolucao['id']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
		<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $devolucao['id']; ?>">
			<i class="fa fa-trash"></i> Excluir
		</a>
		<a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include 'modal.php'; ?>

<?php include FOOTER_TEMPLATE; ?>