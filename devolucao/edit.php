<?php 
  require_once 'functions.php';
  edit();
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Editar Devolução</h2>

<form action="edit.php?id=<?php echo $devolucao['id']; ?>" method="post">
  <hr />

  <div class="row">
    <div class="form-group col-md-1">
      <label for="name">Código</label>
      <input type="text" class="form-control" name="devolucao['id']" value="<?php echo $devolucao['id']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo2">Data</label>
      <input type="text" class="form-control" name="devolucao['data']" value="<?php echo $devolucao['data']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo3">Responsável</label>
      <input type="text" class="form-control" name="devolucao['funcionario_id']" value="<?php echo $devolucao['funcionario_id']; ?>">
    </div>

    <div class="form-group col-md-3">
      <label for="campo4">MAC Address</label>
      <input type="text" class="form-control" name="devolucao['equipamento_id']" value="<?php echo $devolucao['equipamento_id']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo5">Cód. Cliente</label>
      <input type="text" class="form-control" name="devolucao['cod_cliente']" value="<?php echo $devolucao['cod_cliente']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo6">Serviço</label>
      <input type="text" class="form-control" name="devolucao['servico']" value="<?php echo $devolucao['servico']; ?>">
    </div>

    <div class="form-group col-md-6">
      <label for="campo7">Motivo</label>
      <input type="text" class="form-control" name="devolucao['motivo']" value="<?php echo $devolucao['motivo']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo8">Avaliação</label>
      <input type="text" class="form-control" name="devolucao['avaliacao']" value="<?php echo $devolucao['avaliacao']; ?>">
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