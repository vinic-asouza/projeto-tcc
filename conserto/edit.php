<?php 
  require_once 'functions.php';
  edit();
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Atualizar Informaçoes</h2>

<form action="edit.php?id=<?php echo $conserto['id']; ?>" method="post">
  <hr />
  <div class="row">
   <div class="form-group col-md-2">
      <label for="name">Num. Nota</label>
      <input type="text" class="form-control" name="conserto['num_nota']" value="<?php echo $conserto['num_nota']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="name">Quantidade</label>
      <input type="text" class="form-control" name="conserto['qntd']" value="<?php echo $conserto['qntd']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Data Envio</label>
      <input type="text" class="form-control" name="conserto['data_envio']" value="<?php echo $conserto['data_envio']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Previsão Chegada</label>
      <input type="text" class="form-control" name="conserto['previsao_chegada']" value="<?php echo $conserto['previsao_chegada']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Cód. Empresa</label>
      <input type="text" class="form-control" name="conserto['empresa_conserto_id']" value="<?php echo $conserto['empresa_conserto_id']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Cód. Modelo</label>
      <input type="text" class="form-control" name="conserto['modelo_id']" value="<?php echo $conserto['modelo_id']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo4">Data de Cadastro</label>
      <input type="text" class="form-control" name="conserto['created']" disabled value="<?php echo $conserto['created']; ?>">
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