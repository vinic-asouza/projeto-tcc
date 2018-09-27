<?php 
  require_once 'functions.php';
  edit();
?>

<?php include HEADER_TEMPLATE; ?>

<h2>Atualizar Funcionario</h2>

<form action="edit.php?id=<?php echo $funcionario['id']; ?>" method="post">
  <hr />

  <div class="row">
    <div class="form-group col-md-4">
      <label for="name">Código</label>
      <input type="text" class="form-control" name="funcionario['id']" value="<?php echo $funcionario['id']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="name">Nome</label>
      <input type="text" class="form-control" name="funcionario['nome_funcionario']" value="<?php echo $funcionario['nome_funcionario']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo2">Setor</label>
      <input type="text" class="form-control" name="funcionario['setor_func']" value="<?php echo $funcionario['setor_func']; ?>">
    </div>

    <div class="form-group col-md-4">
      <label for="campo4">Data de Cadastro</label>
      <input type="text" class="form-control" name="funcionario['created']" disabled value="<?php echo $funcionario['created']; ?>">
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