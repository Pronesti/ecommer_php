<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
<?php include_once("navbar.php"); ?>
<div class="card mx-auto" style="padding: 1rem;margin: 1rem;width:50vw;">
  <div class="card-body">
    <h5 class="card-title text-center">Login</h5>    
<form action='login.php' method='POST'>
  <div class="form-group">
    <label for="exampleInput">Username</label>
    <input type="text" class="form-control" id="exampleInput" name='username'>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name='password'>
  </div>
  <button type="submit" class="btn btn-primary w-75">Login</button>
  <a href="registerForm.php" class="btn btn-warning float-right w-25">Register</a>
</form>
   </div>
</div>
</body>
</html>