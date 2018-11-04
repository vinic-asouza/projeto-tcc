<?php 
    require_once 'functions.php';
    view($_GET['id']);
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Conserto #<?php echo $conserto['id']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
	<dt>Num. Nota:</dt>
	<dd><?php echo $conserto['num_nota']; ?></dd>
	<dt>Quantidade:</dt>
	<dd><?php echo $conserto['qntd']; ?></dd>
	<dt>Data Envio:</dt>
	<dd><?php echo $conserto['data_envio']; ?></dd>
	<dt>Previsão Chegada:</dt>
	<dd><?php echo $conserto['previsao_chegada']; ?></dd> <hr>
	<dt>Cód. Modelo:</dt>
	<dd><?php echo $conserto['modelo_id']; ?></dd>
	<dt>Equipamento:</dt>
	<dd><?php echo $conserto['nome_equip']; ?></dd>
	<dt>Marca:</dt>
	<dd><?php echo $conserto['marca_equip']; ?></dd>
	<dt>Modelo:</dt>
	<dd><?php echo $conserto['modelo_equip']; ?></dd>
	<dt>Tipo:</dt>
	<dd><?php echo $conserto['tipo']; ?></dd> <hr>
	<dt>Cód. Empresa:</dt>
	<dd><?php echo $conserto['empresa_conserto_id']; ?></dd>
	<dt>Empresa:</dt>
	<dd><?php echo $conserto['nome_empresa']; ?></dd>
	<dt>Telefone:</dt>
	<dd><?php echo $conserto['telefone_empresa']; ?></dd>
	<dt>Cidade:</dt>
	<dd><?php echo $conserto['cidade']; ?></dd>
	<dt>Endereço:</dt>
	<dd><?php echo $conserto['endereco']; ?></dd>
	<dt>Responsável:</dt>
	<dd><?php echo $conserto['responsavel']; ?></dd>
	<dt>E-mail:</dt>
	<dd><?php echo $conserto['email']; ?></dd> <hr>
	<dt>Atualizado em:</dt>
	<dd><?php echo $conserto['modified']; ?></dd> <hr>
</dl>

<div id="actions" class="row">
	<div class="col-md-12">
	<a href="edit.php?id=<?php echo $conserto['id']; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Editar</a>
		<a href="#" class="btn btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $conserto['id']; ?>">
			<i class="fa fa-trash"></i> Excluir
		</a>
		<a href="index.php" class="btn btn-default">Voltar</a>
	</div>
</div>

<?php include 'modal.php'; ?>

<?php include FOOTER_TEMPLATE; ?>