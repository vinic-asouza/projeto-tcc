<?php
    require_once 'functions.php';
    indexDevolucao();
?>

<?php include HEADER_TEMPLATE; ?>

<?php
    global $cont_sig;
    global $cont_can;

    $cont_sig == 0;
    $cont_can == 0;
?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Registros de Devoluções</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Registrar devolução</a>
			<a class="btn btn-primary" href="<?php echo BASEURL; ?>equipamento/add.php"><i class="fa fa-plus"></i> Cadastrar equipamento</a>
	    	<a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
	    </div>
	</div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
	<div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<?php echo $_SESSION['message']; ?>
	</div>
	<?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-striped" id="id_tabela">
<thead>
	<tr>
		<th class ="text-center">Código</th>			
		<th class ="text-center">Data</th>
		<th class ="text-center">Cód. Equipamento</th>		
		<th class ="text-center">Equipamento</th>
		<th class ="text-center">Modelo</th>
		<th class ="text-center">MAC</th>
		<th class ="text-center">Num. Série</th>
		<th class ="text-center">Cód. Cliente</th>
		<th class ="text-center">Serviço</th>
		<th class ="text-center">Avaliação</th>
		<th class ="text-center">Responsável</th>
		<th class ="text-center">Detalhes</th>
	</tr>
</thead>
<tbody>
<?php if ($selectDevolucoes) : ?>
<?php foreach ($selectDevolucoes as $selectDevolucao) : ?>

	<tr>
		<td class ="text-center"><?php echo $selectDevolucao['id']; ?></td>
		<td class ="text-center"><?php echo $selectDevolucao['data']; ?></td>
		<td class ="text-center"><?php echo $selectDevolucao['equipamento_id']; ?></td>
		<td class ="text-center"><?php echo $selectDevolucao['nome_equip']; ?></td>
		<td class ="text-center"><?php echo $selectDevolucao['modelo_equip']; ?></td>
		<td class ="text-center"><?php echo $selectDevolucao['mac_address']; ?></td>
		<td class ="text-center"><?php echo $selectDevolucao['num_serie']; ?></td>
		<td class ="text-center"><?php echo $selectDevolucao['cod_cliente']; ?></td>
		<td class ="text-center"><?php echo $selectDevolucao['servico']; ?></td>
		<td class ="text-center"><?php echo $selectDevolucao['avaliacao']; ?></td>
		<td class ="text-center"><?php echo $selectDevolucao['nome_funcionario']; ?></td>
		<td class="actions text-center">
			<a href="view.php?id=<?php echo $selectDevolucao['id']; ?>"><i class="fa fa-eye"></i></a>
		</td>
	</tr>

<?php
    if ($devolucao['avaliacao'] == 'SIG') {
        ++$cont_sig;
    } elseif ($devolucao['avaliacao'] == 'CAN') {
        ++$cont_can;
    }
?>

<?php endforeach; ?>
<?php else : ?>
	<tr>
		<td colspan="6">Nenhum registro encontrado.</td>
	</tr>
<?php endif; ?>
</tbody>
</table>

<div id="piechart" style="width: 700px; height: 300px;"></div>

<?php include 'modal.php'; ?>

<?php include FOOTER_TEMPLATE; ?>