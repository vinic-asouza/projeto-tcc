<?php 
  require_once 'functions.php';
  add();
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Registrar envio de RMA</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
    <div class="form-group col-md-2">
      <label for="name">Num. Nota</label>
      <input type="text" class="form-control" name="conserto['num_nota']">
    </div>

    <div class="form-group col-md-2">
      <label for="name">Quantidade</label>
      <input type="text" class="form-control" name="conserto['qntd']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Data Envio</label>
      <input type="text" class="form-control" name="conserto['data_envio']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Previsão Chegada</label>
      <input type="text" class="form-control" name="conserto['previsao_chegada']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Cód. Empresa</label>
      <input type="text" class="form-control" name="conserto['empresa_conserto_id']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Cód. Modelo</label>
      <input type="text" class="form-control" name="conserto['modelo_id']">
    </div>

    <div class="form-group col-md-2">
      <input type="hidden" class="form-control" name="conserto['created']" disabled>
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