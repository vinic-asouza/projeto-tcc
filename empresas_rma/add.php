<?php 
  require_once 'functions.php';
  add();
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Cadastrar Empresa</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
  
    <div class="form-group col-md-4">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="empresa_conserto['nome_empresa']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Cidade</label>
      <input type="text" class="form-control" name="empresa_conserto['cidade']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Endereço</label>
      <input type="text" class="form-control" name="empresa_conserto['endereco']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Responsável</label>
      <input type="text" class="form-control" name="empresa_conserto['responsavel']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Telefone</label>
      <input type="text" class="form-control" name="empresa_conserto['telefone_empresa']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Email</label>
      <input type="text" class="form-control" name="empresa_conserto['email']">
    </div>

    <div class="form-group col-md-4">
      <input type="hidden" class="form-control" name="empresa_conserto['created']" disabled>
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