<?php 
session_start();
if (!isset($_SESSION["login2"])) {
  header("Location:../login.php");
  exit;
  require('../function.php');
  
  
  if(isset ($_POST ['edit'])) {
    if (registrasi($_POST) > 0) {
      echo "<script>
        alert('user baru sudah ditambahkan!');
        window.location.href='halamanadmin.php';
          </script>";
    }
  
    else {
      echo "<script>
        alert('user baru gagal ditambahkan!');
        window.location.href='registrasi.php';
          </script>";
    }
  }
}
  ?>
  



<?php require('../partials/header.php'); ?>

<div class="container mt-3">
  <h1>tampilan edit</h1>

  <div class="row">
    <div class="col-md-8">
      <form action="" method="POST">
        <div class="mb-3 w-25">
          <label for="name" class="form-label">username</label>
          <input type="text" class="form-control" name="username"  maxlength="30" autofocus required>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" class="form-control" name="email" >
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" >
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Confirm</label>
          <input type="password" class="form-control" name="password2" >
        </div>
        <button class="btn btn-primary" type="submit" name="edit">edit Data</button>
      </form>
    </div>
  </div>

</div>

<?php require('../partials/footer.php'); ?>