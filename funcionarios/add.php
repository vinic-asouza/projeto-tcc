<?php 
  require_once 'functions.php';
  add();
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Novo Funcionario</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
  
    <div class="form-group col-md-4">
      <label for="id">Código</label>
      <input type="text" class="form-control" name="funcionario['id']">
    </div>
  
    <div class="form-group col-md-4">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="funcionario['nome_funcionario']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Setor</label>
      <input type="text" class="form-control" name="funcionario['setor_func']">
    </div>

    <div class="form-group col-md-4">
      <input type="hidden" class="form-control" name="funcionario['created']" disabled>
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