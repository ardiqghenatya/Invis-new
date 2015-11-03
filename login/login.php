<?php
session_start();

if (!empty($_SESSION['username'])) {
  header('location:index.php');
}
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../content/bootstrap/css/bootstrap.min.css">


    <!-- Custom styles for this template -->
    <link href="../content/bootstrap/css/signin.css" rel="stylesheet">
  </head>

  <body>
 
<?php 

if (!empty($_GET['error'])) {
  if ($_GET['error'] == 1) {
    echo '<div class="alert alert-danger" role="alert">Username dan Password belum terisi</div>';
  } else if ($_GET['error'] == 2) {
    echo '<div class="alert alert-danger" role="alert">Username belum terisi</div>';
  } else if ($_GET['error'] == 3) {
    echo '<div class="alert alert-danger" role="alert">Password belum terisi </div>';
  } else if ($_GET['error'] == 4) {
    echo '<div class="alert alert-danger" role="alert">Username belum terdaftar</div>';
  }
}
?>

    <div class="container">

      <form class="form-signin" name="login" method="post" action="otentikasi.php">
        <h2 class="form-signin-heading">Login</h2>
        <label for="input username" class="sr-only">username</label>
        <input type="text" name="username" class="form-control" placeholder="username" required autofocus >
        
        <input type="password" name="password" class="form-control" placeholder="password" >
        
          <label>
          </label>
        
        <button class="btn btn-lg btn-primary btn-block"  type="submit" value="login" name="Login">Login</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   </body>
</html>


