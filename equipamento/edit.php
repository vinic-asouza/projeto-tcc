<?php 
  require_once 'functions.php';
  edit();
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Atualizar Equipamento</h2>

<form action="edit.php?id=<?php echo $equipamento['id']; ?>" method="post">
  <hr />
  <div class="row">
    <div class="form-group col-md-4">
      <label for="name">Modelo</label>
      <input type="text" class="form-control" name="equipamento['modelo_id']" value="<?php echo $equipamento['modelo_id']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="name">MAC</label>
      <input type="text" class="form-control" name="equipamento['mac_address']" value="<?php echo $equipamento['mac_address']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="name">Num. Série</label>
      <input type="text" class="form-control" name="equipamento['num_serie']" value="<?php echo $equipamento['num_serie']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="name">Obs.</label>
      <input type="text" class="form-control" name="equipamento['observacao']" value="<?php echo $equipamento['observacao']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo4">Data de Cadastro</label>
      <input type="text" class="form-control" name="equipamento['created']" disabled value="<?php echo $equipamento['created']; ?>">
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