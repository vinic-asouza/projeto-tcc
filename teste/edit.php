<?php 
  require_once 'functions.php';
  edit();
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Editar Teste</h2>

<form action="edit.php?id=<?php echo $teste['id']; ?>" method="post">
  <hr />

  <div class="row">

    <div class="form-group col-md-2">
      <label for="campo3">Responsável</label>
      <input type="text" class="form-control" name="teste['funcionario_id']" value="<?php echo $teste['funcionario_id']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo4">Cód. Equipamento</label>
      <input type="text" class="form-control" name="teste['equipamento_id']" value="<?php echo $teste['equipamento_id']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo5">Situação</label>
      <input type="text" class="form-control" name="teste['situacao']" value="<?php echo $teste['situacao']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo6">Descrição</label>
      <input type="text" class="form-control" name="teste['descricao']" value="<?php echo $teste['descricao']; ?>">
    </div>

    <div class="form-group col-md-2">
      <label for="campo8">Avaliação</label>
      <input type="text" class="form-control" name="teste['avaliacao']" value="<?php echo $teste['avaliacao']; ?>">
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