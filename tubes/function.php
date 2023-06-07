<?php
// Sesuaikan dengan URL project kalian
define('BASE_URL', '/pw2023_223040104/tubes/admin/');

function koneksi()
{
  $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die('KONEKSI GAGAL!');
  return $conn;
}

function query($query)
{
  $conn = koneksi();
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

function dd($value)
{
  echo "<pre>";
  var_dump($value);
  echo "</pre>";
  die;
}

function uriIS($uri)
{
  return ($_SERVER["REQUEST_URI"] === $uri) ? 'active' : '';
}


function registrasi($data) {
  $conn = koneksi();

   $username =  strtolower(stripslashes($data["username"]));
   $email =  $data["email"];
   $password = mysqli_real_escape_string($conn, $data["password"]);
   $password2 = mysqli_real_escape_string($conn, $data["password2"]);


   // cek user name sudah ada atau belum
   $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

   if( mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('username sudah terdaftar!');
            </script>";
            return false;
   }

   // cek konfirmasi password
   if ($password !== $password2) {
    echo "<script>
          alert('konfirmasi password tidak sesuai!');
          </script>";
          return false;
   }

  // enskripsi password
$password = password_hash($password, PASSWORD_DEFAULT);

   // tambahkan user baru ke data base
   mysqli_query($conn, "INSERT INTO user VALUES(null, '$username', '$email', '$password')");

   return mysqli_affected_rows($conn);
}
