<?php 
session_start();
if (!isset($_SESSION["login2"])) {
  header("Location:../login.php");
  exit;

require ('../function.php');

$id = $_GET['id'];

if ( deleted($id) > 0 ) { 
echo "<script>
    alert('user sudah dihapus!');
    window.location.href='halamanadmin.php';
      </script>";
} else {
    echo "<script>
    alert('user belum dihapus!');
    window.location.href='hapus.php';
      </script>";
}
}
?>