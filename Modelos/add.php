<?php 
  require_once dirname(__FILE__).'/../config.php';
  require_once DBAPI;
  require_once 'functions.php';
  add();
?>


<?php include HEADER_TEMPLATE; ?>
<?php $db = open_database(); ?>

<h2>Novo Modelo</h2>

<?php if ($db) : ?>

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

    <div class="form-group col-md-5">
      <label for="name">Descrição</label>
      <select type="text" class="form-control" name="modelo['nome_equip']">
        <option>
          ...
        </option>
        
        <?php $item = selectDistinct('id_nome', 'modelo'); ?>
        <?php foreach ($item as $i) : ?>
        <option>
          <?php
            echo $i;
          ?>
        </option>
        <?php endforeach; ?>
        
      </select>
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Marca</label>
      <input type="text" class="form-control" name="modelo['marca_equip']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Modelo</label>
      <input type="text" class="form-control" name="modelo['modelo_equip']">
    </div>

    <div class="form-group col-md-2">
      <label for="campo3">Tipo</label>
      <input type="text" class="form-control" name="modelo['tipo']">
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


<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>

<?php endif; ?>

<?php include FOOTER_TEMPLATE; ?>