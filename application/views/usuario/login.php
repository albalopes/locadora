
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Faça login para acessar o sistema</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/vendor/bootstrap/signin.css')?>" rel="stylesheet">


  </head>

  <body>

    <div class="container">
    <div id="msg">
    </div>

      <form class="form-signin" action="" method="post">
        <h2 class="form-signin-heading">Acesso ao sistema</h2>
        <label for="inputEmail" class="sr-only">Usuario</label>
        <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Informe seu usuario" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="senha" id="senha" class="form-control" placeholder="Informe sua senha" required>
        <button class="btn btn-dark btn-primary btn-block" type="submit">Login</button>
      </form>

    </div> <!-- /container -->


    
  </body>
</html>
