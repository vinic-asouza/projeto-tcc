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

    <div class="form-group col-md-2">
      <label for="campo2">Data</label>
      <div class="input-group date" data-provide="datepicker" id="anterior_data">
        <input type="text" class="form-control" name="devolucao['data']">
        <div class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </div>
      </div>
    </div>
    
    <div class="form-group col-md-2">
      <label for="campo3">Cód. Responsável</label>
      <input type="text" class="form-control" name="devolucao['funcionario_id']">
    </div>
    
    <div class="form-group col-md-3">
      <label for="campo4">Cód. Equip.</label>
      <input type="text" class="form-control" name="devolucao['equipamento_id']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo5">Cód. Cliente</label>
      <input type="text" class="form-control" name="devolucao['cod_cliente']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo6">Serviço</label>
      <input type="text" class="form-control" name="devolucao['servico']">
    </div>

    <div class="form-group col-md-8">
      <label for="campo7">Descrição técnica</label>
      <input type="text" class="form-control" name="devolucao['motivo']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo8">Avaliação</label>
      <select type="text" class="form-control" name="devolucao['avaliacao']">
        <option>
          ...
        </option>
        <?php $item = selectDistinct('id', 'avaliacao'); ?>
        <?php foreach ($item as $i) :  ?>
        <option ?>
          <?php
            echo $i['id'];
          ?>
        </option>
        <?php endforeach; ?>
      </select>
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