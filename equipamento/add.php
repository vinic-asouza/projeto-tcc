<?php 
  require_once dirname(__FILE__).'/../config.php';
  require_once DBAPI;
  require_once 'functions.php';
  add();
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Cadastrar Equipamento</h2>

<form action="add.php" method="post">
  <!-- area de campos do form -->
  <hr />
  <div class="row">
  
    <div class="form-group col-md-2">
      <label for="id">Modelo</label>
      <select type="text" class="form-control" name="equipamento['modelo_id']">
        <option>
          ...
        </option>
        <?php $item = selectDistinct('id', 'modelo'); ?>
        <?php foreach ($item as $i) :  ?>
        <option ?>
          <?php
            echo $i['id'];
          ?>
        </option>
        <?php endforeach; ?>
      </select>
    </div>
  
    <div class="form-group col-md-3">
      <label for="name">MAC</label>
      <input type="text" class="form-control" name="equipamento['mac_address']">
    </div>

    <div class="form-group col-md-3">
      <label for="campo2">Num. Série</label>
      <input type="text" class="form-control" name="equipamento['num_serie']">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Obs.</label>
      <input type="text" class="form-control" name="equipamento['observacao']">
    </div>

    <div class="form-group col-md-4">
      <input type="hidden" class="form-control" name="equipamento['created']" disabled>
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