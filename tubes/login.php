<?php 
session_start();

require 'function.php'; 

if (isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}
if (isset($_SESSION["login2"])) {
  header("Location: admin/halamanadmin.php");
  exit;
}


if (isset($_POST["login"])) {

$username = $_POST["username"];
$password = $_POST["password"];
$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

// Cek username
if (mysqli_num_rows($result) === 1) {
  // cek password
  $row = mysqli_fetch_assoc($result);
  if (password_verify($password, $row["password"])) {
    if($row["level"] == "admin") {
      // set session
      
      $_SESSION["login"] = true;
      $_SESSION["login2"] = true;
    header("Location : admin/halamanadmin.php");
    exit;

    }
    if($row["level"] == "user") {
      // set session
      $_SESSION["login"] = true;

      header("Location: tubes.php");
      exit;
    
  }
}

$error = true;
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

<?php 

if(isset($error) ) : ?>
    <p style="color: red; font-style: italic;">username  
    password salah</p>
<?php endif; ?>

<div class="container mt-5">
<form action="" method="POST">
  
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="password" id="inputPassword3">
  </div>
  <div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-dark" type="submit" name="login">Login</button>
  <a href="register.php" class="btn btn-primary" type="submit" name="login">Register</a>
</div>
</form>
</div>
</body>
</html>