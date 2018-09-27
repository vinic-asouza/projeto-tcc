<?php 
  require_once 'functions.php';
  add();
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Novo Modelo</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
  <!--
    <div class="form-group col-md-4">
      <label for="id">Código</label>
      <input type="text" class="form-control" name="modelo['id_modelo']">
    </div>
  -->
    <div class="form-group col-md-1">
      <label for="name">Código</label>
      <input type="text" class="form-control" name="modelo['id']">
    </div>

    <div class="form-group col-md-3">
      <label for="name">Descrição</label>
      <input type="text" class="form-control" name="modelo['nome_equip']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Marca</label>
      <input type="text" class="form-control" name="modelo['marca_equip']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Modelo</label>
      <input type="text" class="form-control" name="modelo['modelo_equip']">
    </div>

    <div class="form-group col-md-4">
      <input type="hidden" class="form-control" name="modelo['created']" disabled>
    </div>

    </div>

    <hr />

    <div id="actions" class="row">
    <div class="col-md-12">
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="index.php" class="btn btn-default">Cancelar</a>
    </div>
  </div>
</form>

<?php include FOOTER_TEMPLATE; ?>