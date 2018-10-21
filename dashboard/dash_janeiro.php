<?php 
require_once '../config.php';
require_once DBAPI;
require_once '../functions.php';
require_once ABSPATH.'/Modelos/functions.php';
index();
contagemTotal();
?>

<?php include HEADER_TEMPLATE; ?>
<?php $db = open_database(); ?>

<h1>Dashboard / Saldos / Janeiro</h1>
<hr />

<?php if ($db) : ?>

<div class="row">

<ul class="nav nav-tabs">
  <li role="presentation"><a href="../index.php">Geral</a></li>
  <li role="presentation" class="active"><a href="#">Janeiro</a></li>
  <li role="presentation"><a href="#">Fevereiro</a></li>
</ul>

	<div>
		<table class="table table-striped table-bordered">
		<h2 >Quantidades Totais</h2>
		<hr />
				<thead>
					<tr id="table_total">
						<th scope="col" class ="text-center">Total Devoluções</th>
						<th scope="col" class ="text-center">Total Testes</th>
						<th scope="col" class ="text-center">Saldo Atual</th>
						<th scope="col" class ="text-center">Progresso</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class ="text-center"><?php echo $cont_devolucao; ?></td>
						<td class ="text-center"><?php echo $cont_teste; ?></td>
						<td class ="text-center"><?php echo $cont_devolucao - $cont_teste; ?></td>
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
						<div class="progress-bar progress-bar-info" id="barra_progresso" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $porcentagem; ?>%;">
						<?php echo $porcentagem.'%'; ?>
						</div>
						</div>	
					</td>
					</tr>
				</tbody>
		</table>
		<table class="table table-striped table-bordered">
		<h2>Quantidades por Equipamento</h2>
		<hr />
			<thead>
				<tr id="table_equip">
					<th scope="col" class ="text-center">Equipamento</th>
					<th scope="col" class ="text-center">Total Devoluções</th>
					<th scope="col" class ="text-center">Total Testes</th>
					<th scope="col" class ="text-center">Saldo Atual</th>
					<th scope="col" class ="text-center">Progresso</th>
				</tr>
			</thead>
			<tbody>
				<?php $item = selectDistinct('nome_equip', 'modelo'); ?>
				<?php if ($item) : ?>
				<?php foreach ($item as $i) :  ?>
				<?php 
                    $cont_descricao_devolucao = contagemItensPorDescricao('devolucao', $i['nome_equip']);
                    $cont_descricao_teste = contagemItensPorDescricao('teste', $i['nome_equip']);
                ?>
				<tr>
					<td class ="text-center">
					<?php
                        echo $i['nome_equip'];
                    ?>
					</td>		
					<td class ="text-center">
						<?php
                            echo  $cont_descricao_devolucao;
                        ?>
					</td>
					<td class ="text-center">
						<?php
                            echo $cont_descricao_teste;
                        ?>
					</td>
					<td class ="text-center">
						<?php
                            echo $cont_descricao_devolucao - $cont_descricao_teste;
                        ?>
					</td>
					<td class ="text-center">
						<?php 
                            if ($cont_descricao_devolucao && $cont_descricao_teste > 0) {
                                $porcentagem = ($cont_descricao_teste / $cont_descricao_devolucao) * 100;
                                $porcentagem = round($porcentagem, 0);
                            } else {
                                $porcentagem = 100;
                            }
                        ?>
						<div>
							<div class="progress-bar progress-bar-info" id="barra_progresso" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $porcentagem; ?>%;">
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
		<table class="table table-striped table-bordered" id="id_tabela">
		<h2>Quantidades por Modelos</h2>
		<hr />
			<thead>
				<tr id="table_modelo">
					<th scope="col" class ="text-center">Equipamento</th>
					<th scope="col" class ="text-center">Modelo</th>
					<th scope="col" class ="text-center">Total Devoluções</th>
					<th scope="col" class ="text-center">Total Testes</th>
					<th scope="col" class ="text-center">Saldo Atual</th>
					<th scope="col" class ="text-center">Progresso</th>
				</tr>
			</thead>
			<tbody>
				<?php if ($modelos) : ?>
				<?php foreach ($modelos as  $modelo) : ?>
				<?php 
                    $cont_itens_devolucao = contagemItensPorModelo('devolucao', 'equipamento', 'equipamento_id', 'modelo_id', $modelo['id'], 'id');
                    $cont_itens_teste = contagemItensPorModelo('teste', 'equipamento', 'equipamento_id', 'modelo_id', $modelo['id'], 'id');
                ?>
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
                            echo $cont_itens_devolucao;
                        ?>
					</td>
					<td class ="text-center">
						<?php
                            echo $cont_itens_teste;
                        ?>
					</td>
					<td class ="text-center">
						<?php
                            echo $cont_itens_devolucao - $cont_itens_teste;
                        ?>
					</td>
					<td class ="text-center">
						<?php 
                            if ($cont_itens_devolucao && $cont_itens_teste > 0) {
                                $porcentagem = ($cont_itens_teste / $cont_itens_devolucao) * 100;
                                $porcentagem = round($porcentagem, 0);
                            } else {
                                $porcentagem = 100;
                            }
                        ?>
						<div>
							<div class="progress-bar progress-bar-info" id="barra_progresso" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $porcentagem; ?>%;">
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