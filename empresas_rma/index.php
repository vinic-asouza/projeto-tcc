<?php
    require_once 'functions.php';
    index();
?>

<?php include HEADER_TEMPLATE; ?>

<header>
	<div class="row">
		<div class="col-sm-6">
			<h2>Empresas RMA</h2>
		</div>
		<div class="col-sm-6 text-right h2">
	    	<a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Cadastrar Empresa</a>
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
		<th>Nome</th>			
		<th>Cidade</th>
		<th>Endereço</th>
		<th>Responsavel</th>
		<th>Telefone</th>
		<th>E-Mail</th>
		<th class ="text-center">Atualizado em</th>
		<th class ="text-center">Opções</th>	
	</tr>
</thead>
<tbody>
<?php if ($empresas) : ?>
<?php foreach ($empresas as $empresa) : ?>
	<tr>
		<td class ="text-center"><?php echo $empresa['id']; ?></td>
		<td><?php echo $empresa['nome_empresa']; ?></td>
		<td><?php echo $empresa['cidade']; ?></td>
		<td><?php echo $empresa['endereco']; ?></td>
		<td><?php echo $empresa['responsavel']; ?></td>
		<td><?php echo $empresa['telefone_empresa']; ?></td>
		<td><?php echo $empresa['email']; ?></td>
		<td class ="text-center"><?php echo $empresa['modified']; ?></td>
		<td class="actions text-center">
			<a href="view.php?id=<?php echo $empresa['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
			<a href="edit.php?id=<?php echo $empresa['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
			<a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $empresa['id']; ?>">
				<i class="fa fa-trash"></i> Excluir
			</a>
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

<?php include 'modal.php'; ?>

<?php include FOOTER_TEMPLATE; ?>