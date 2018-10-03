<?php 
  require_once 'functions.php';
  edit();
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Atualizar Modelo</h2>

<form action="edit.php?id=<?php echo $modelo['id']; ?>" method="post">
  <hr />

  <div class="row">
    <div class="form-group col-md-4">
      <label for="name">Código</label>
      <input type="text" class="form-control" name="modelo['id']" value="<?php echo $modelo['id']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="name">Descrição</label>
      <input type="text" class="form-control" name="modelo['nome_equip']" value="<?php echo $modelo['nome_equip']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Marca</label>
      <input type="text" class="form-control" name="modelo['marca_equip']" value="<?php echo $modelo['marca_equip']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo3">Modelo</label>
      <input type="text" class="form-control" name="modelo['modelo_equip']" value="<?php echo $modelo['modelo_equip']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo3">Tipo</label>
      <input type="text" class="form-control" name="modelo['tipo']" value="<?php echo $modelo['tipo']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo4">Data de Cadastro</label>
      <input type="text" class="form-control" name="modelo['created']" disabled value="<?php echo $modelo['created']; ?>">
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