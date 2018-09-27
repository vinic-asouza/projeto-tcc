<?php 
  require_once 'functions.php';
  edit();
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Atualizar Empresa</h2>

<form action="edit.php?id=<?php echo $empresa['id']; ?>" method="post">
  <hr />
  <div class="row">
   <div class="form-group col-md-4">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="empresa_conserto['nome_empresa']" value="<?php echo $empresa['nome_empresa']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Cidade</label>
      <input type="text" class="form-control" name="empresa_conserto['cidade']" value="<?php echo $empresa['cidade']; ?>">
    </div>

    <div class="form-group col-md-6">
      <label for="campo2">Endereço</label>
      <input type="text" class="form-control" name="empresa_conserto['endereco']" value="<?php echo $empresa['endereco']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Responsável</label>
      <input type="text" class="form-control" name="empresa_conserto['responsavel']" value="<?php echo $empresa['responsavel']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="empresa_conserto['telefone_empresa']" value="<?php echo $empresa['telefone_empresa']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Email</label>
      <input type="text" class="form-control" name="empresa_conserto['email']" value="<?php echo $empresa['email']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo4">Data de Cadastro</label>
      <input type="text" class="form-control" name="empresa_conserto['created']" disabled value="<?php echo $empresa['created']; ?>">
    </div>
  </div>
  
  <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include FOOTER_TEMPLATE; ?>