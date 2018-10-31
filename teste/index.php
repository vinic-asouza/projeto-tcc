<?php
    require_once 'functions.php';
    index();
?>

<?php include HEADER_TEMPLATE; ?>

<?php
    global $cont_ok;
    global $cont_defeito;

    $cont_ok == 0;
    $cont_defeito == 0;
 ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Registros de Testes de Equipamentos</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Registrar teste</a>
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
		<th class ="text-center">Situação</th>
		<th class ="text-center">Descrição</th>
		<th class ="text-center">Avaliação</th>
		<th class ="text-center">Atualizado em</th>
		<th class ="text-center">Detalhes</th>
	</tr>
</thead>
<tbody>
<?php if ($testes) : ?>
<?php foreach ($testes as $teste) : ?>

	<tr 
		<?php if ($teste['situacao'] == 'OK') {
     ?> 
		class="success" <?php
 } ?>  
			<?php if ($teste['situacao'] == 'DEFEITO') {
     ?> 
			class="danger" <?php
 } ?> 
	>

		<td class ="text-center"><?php echo $teste['id']; ?></td>
		<td class ="text-center"><?php echo $teste['funcionario_id']; ?></td>
		<td class ="text-center"><?php echo $teste['equipamento_id']; ?></td>
		<td class ="text-center"><?php echo $teste['situacao']; ?></td>
		<td class ="text-center"><?php echo $teste['descricao']; ?></td>
		<td class ="text-center"><?php echo $teste['avaliacao']; ?></td>
		<td class ="text-center"><?php echo $teste['modified']; ?></td>
		<td class="actions text-center">
			<a href="view.php?id=<?php echo $teste['id']; ?>"><i class="fa fa-eye"></i></a>
		</td>
	</tr>

	<?php
        if ($teste['situacao'] == 'OK') {
            ++$cont_ok;
        } elseif ($teste['situacao'] == 'DEFEITO') {
            ++$cont_defeito;
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

<div id="situacao" style="width: 700px; height: 300px;"> </div>
	
<?php include 'modal.php'; ?>

<?php include FOOTER_TEMPLATE; ?>