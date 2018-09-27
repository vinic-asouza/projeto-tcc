<?php
    require_once 'functions.php';
    index();
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
		<th class ="text-center">Responsável</th>
		<th class ="text-center">Cód. Equipamento</th>		
		<th class ="text-center">Data</th>
		<th class ="text-center">Cód. Cliente</th>
		<th class ="text-center">Serviço</th>
		<th class ="text-center">Motivo</th>
		<th class ="text-center">Avaliação</th>
		<th class ="text-center">Atualizado em</th>
		<th class ="text-center">Opções</th>
	</tr>
</thead>
<tbody>
<?php if ($devolucoes) : ?>
<?php foreach ($devolucoes as $devolucao) : ?>

	<tr>
		<td class ="text-center"><?php echo $devolucao['id']; ?></td>
		<td class ="text-center"><?php echo $devolucao['funcionario_id']; ?></td>
		<td class ="text-center"><?php echo $devolucao['equipamento_id']; ?></td>
		<td class ="text-center"><?php echo $devolucao['data']; ?></td>
		<td class ="text-center"><?php echo $devolucao['cod_cliente']; ?></td>
		<td class ="text-center"><?php echo $devolucao['servico']; ?></td>
		<td class ="text-center"><?php echo $devolucao['motivo']; ?></td>
		<td class ="text-center"><?php echo $devolucao['avaliacao']; ?></td>
		<td class ="text-center"><?php echo $devolucao['modified']; ?></td>
		<td class="actions text-center">
			<a href="view.php?id=<?php echo $devolucao['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $devolucao['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $devolucao['id']; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
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

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Avaliação', 'Quantidade'],
          ['SIG',     <?php echo $cont_sig; ?>],
          ['CAN',     <?php echo $cont_can; ?>],

        ]);

        var options = {
          title: 'Estatistica de Avaliações'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>

<?php include 'modal.php'; ?>

<?php include FOOTER_TEMPLATE; ?>