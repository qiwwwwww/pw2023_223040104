
<?php 

session_start();
if (!isset($_SESSION["login2"])) {
  header("Location:../login.php");
  exit;
} 
  require('../function.php');
  
  // insret data ke tabel jika tombol diklik
  if(isset ($_POST ['tambah'])) {
    if (registrasi($_POST) > 0) {
      echo "<script>
      alert('user baru sudah ditambahkan!');
      window.location.href='halamanadmin.php';
      </script>";
    }
    
    else {
      mysqli_error($conn);
    }
  }
  
  ?>
  
  <?php require('../partials/header.php'); ?>
<div class="container mt-3">
  <h1>Tambah Data User</h1>

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
        <div class="mb-3">
        <label for="level" class="form-label">sebagai apa</label>
          <select name="level" id="level" class="form-control">
            <option value="admin">admin</option>
            <option value="user">user</option>
          </select>
        </div>
        <button class="btn btn-primary" type="submit" name="tambah">Tambah Data</button>
      </form>
    </div>
  </div>

</div>

<?php require('../partials/footer.php'); ?>


