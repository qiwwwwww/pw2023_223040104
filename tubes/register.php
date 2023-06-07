<?php 
 require 'function.php';

if( isset($_POST["register"]) ) {

  if (registrasi($_POST) > 0) {
    echo "<script>
      alert('user baru sudah ditambahkan!');
      window.location.href='login.php';
        </script>";
  }

  else {
    echo "<script>
      alert('user baru gagal ditambahkan!');
      window.location.href='register.php';
        </script>";
  }
}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>login</title>
</head>
<body>
<div class="container mt-3">
<form action="" method="post">
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" id="inputEmail3">
    </div>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" id="inputPassword3">
    </div>
  </div>
    <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password2" id="inputPassword3">
    </div>
  </div>
  <div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-dark" type="submit" name="register">Sing in</button>
</div>
</form>
</div>
</body>
</html>