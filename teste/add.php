<?php 
  require_once 'functions.php';
  add();
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Teste</h2>

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
      <label for="campo2">Cód. Equipamento</label>
      <input type="text" class="form-control" name="teste['equipamento_id']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Situação</label>
      <input type="text" class="form-control" name="teste['situacao']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo4">Descrição</label>
      <input type="text" class="form-control" name="teste['descricao']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo4">Avaliação</label>
      <input type="text" class="form-control" name="teste['avaliacao']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo5">Responsável</label>
      <input type="text" class="form-control" name="teste['funcionario_id']">
    </div>

    <div class="form-group col-md-4">
      <input type="hidden" class="form-control" name="teste['created']" disabled>
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