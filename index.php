<?php require_once 'config.php'; ?>
<?php require_once DBAPI; ?>

<?php
    require_once 'functions.php';
    require_once ABSPATH.'/Modelos/functions.php';
    index();
    contagemTotal();
?>

<?php include HEADER_TEMPLATE; ?>
<?php $db = open_database(); ?>

<h1>Dashboard</h1>
<hr />

<?php if ($db) : ?>

<div class="row">
	<div>
		<table class="table table-striped table-bordered">
		<h2 >Quantidades totais</h2>
				<thead>
					<tr class="danger">
						<th scope="col" class ="text-center">Total Devoluções</th>
						<th scope="col" class ="text-center">Total Testes</th>
						<th scope="col" class ="text-center">Progresso</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class ="text-center"><?php echo $cont_devolucao; ?></td>
						<td class ="text-center"><?php echo $cont_teste; ?></td>
						<td class ="text-center">
						<?php 
                            if ($cont_devolucao && $cont_teste > 0) {
                                $porcentagem = ($cont_teste / $cont_devolucao) * 100;
                                $porcentagem = round($porcentagem, 0);
                            } else {
                                $porcentagem = 0;
                            }
                        ?>
						<div>
						<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $porcentagem; ?>%;">
						<?php echo $porcentagem.'%'; ?>
						</div>
						</div>	
					</td>
					</tr>
				</tbody>
		</table>
		<table class="table table-striped table-bordered" id="id_tabela">
		<h2>Quantidades por modelos</h2>
		<hr />
			<thead>
				<tr class="info">
					<th scope="col" class ="text-center">Equipamento</th>
					<th scope="col" class ="text-center">Modelo</th>
					<th scope="col" class ="text-center">Total Devoluções</th>
					<th scope="col" class ="text-center">Total Testes</th>
					<th scope="col" class ="text-center">Progresso</th>
				</tr>
			</thead>
			<tbody>
				<?php if ($modelos) : ?>
				<?php foreach ($modelos as  $modelo) : ?>
				<tr>
					<td class ="text-center">
						<?php
                            echo $modelo['nome_equip'];
                        ?>
					</td>
					<td class ="text-center">
						<?php
                            echo $modelo['modelo_equip'];
                        ?>
					</td>		
					<td class ="text-center">
						<?php
                            $cont_item1 = contagemItens('devolucao', 'equipamento', 'equipamento_id', 'modelo_id', $modelo['id'], 'id');
                            echo $cont_item1;
                        ?>
					</td>
					<td class ="text-center">
						<?php
                            $cont_item2 = contagemItens('teste', 'equipamento', 'equipamento_id', 'modelo_id', $modelo['id'], 'id');
                            echo $cont_item2;
                        ?>
					</td>
					<td class ="text-center">
						<?php 
                            $cont_item1 = contagemItens('devolucao', 'equipamento', 'equipamento_id', 'modelo_id', $modelo['id'], 'id');
                            $cont_item2 = contagemItens('teste', 'equipamento', 'equipamento_id', 'modelo_id', $modelo['id'], 'id');
                            if ($cont_item1 && $cont_item2 > 0) {
                                $porcentagem = ($cont_item2 / $cont_item1) * 100;
                                $porcentagem = round($porcentagem, 0);
                            } else {
                                $porcentagem = 100;
                            }
                        ?>
						<div>
							<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $porcentagem; ?>%;">
								<?php echo $porcentagem.'%'; ?>
							</div>
						</div>	
					</td>
				</tr>
				<?php endforeach; ?>
				<?php else : ?>
					<tr>
						<td colspan="6">Nenhum registro encontrado.</td>
					</tr>
				<?php endif; ?>
			</tbody>
		</table>
	</div>
</div>

<hr />

<div class="row">
	<div class="col-xs-6 col-sm-3 col-md-6">
		Ambiente para desenvolver analise de dados e estatistica.
	</div>

	<div class="col-xs-6 col-sm-3 col-md-6">
		Ambiente para desenvolver analise de dados e estatistica.
	</div>
</div>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include FOOTER_TEMPLATE; ?>