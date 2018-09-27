<?php 
  require_once 'functions.php';
  add();
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Devolução</h2>

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

    <div class="form-group col-md-2">
      <label for="campo2">Data</label>
      <input type="text" class="form-control" name="devolucao['data']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo3">Responsável</label>
      <input type="text" class="form-control" name="devolucao['funcionario_id']">
    </div>
<?php 

  //////////codigo

?>
    <div class="form-group col-md-3">
      <label for="campo4">Cód. Equip.</label>
      <input type="text" class="form-control" name="devolucao['equipamento_id']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo5">Cód. Cliente</label>
      <input type="text" class="form-control" name="devolucao['cod_cliente']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo6">Serviço</label>
      <input type="text" class="form-control" name="devolucao['servico']">
    </div>

    <div class="form-group col-md-6">
      <label for="campo7">Motivo</label>
      <input type="text" class="form-control" name="devolucao['motivo']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo8">Avaliação</label>
      <input type="text" class="form-control" name="devolucao['avaliacao']">
    </div>

    <div class="form-group col-md-4">
      <input type="hidden" class="form-control" name="devolucao['created']" disabled>
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