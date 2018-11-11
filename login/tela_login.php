<!-- <html>
<head>
<title> Login de Usuário </title>
</head>
<body>
<form method="POST" action="login.php">
<label>Login:</label><input type="text" name="login" id="login"><br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br>
<input type="submit" value="entrar" id="entrar" name="entrar"><br>
<a href="cadastro.html">Cadastre-se</a>
</form>
</body>
</html> -->
<?php require_once '../config.php';

include LOGIN_TEMPLATE;
?>

<div class="card card-login mx-auto mt-5">
    <div class="card-body">
      <form method="POST" action="login.php">
        <div class="form-group">  
          <label for="exampleInputEmail1">Email address</label>
          <input class="form-control" type="text" name="login" id="login" aria-describedby="emailHelp" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input class="form-control" type="password" name="senha" id="senha" placeholder="Password">
        </div>
        <div class="form-group">
          <div class="form-check">
            <label class="form-check-label">
              <input class="form-check-input" type="checkbox"> Remember Password</label>
          </div>
        </div>
        <input class="btn btn-primary btn-block" type="submit" value="Login" id="entrar" name="entrar">
      </form>
      <div class="text-center">
        <a class="d-block small mt-3" href="cadastro.html">Register an Account</a>
        <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
      </div>
  </div>

      <style>
        body {
            padding-right: 600px;
            padding-left: 600px;
        }
    </style>
