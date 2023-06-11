<?php
// Sesuaikan dengan URL project kalian
define('BASE_URL', '/pw2023_223040104/tubes/admin/');


  $conn = mysqli_connect('localhost', 'root', '', 'tubes') or die('KONEKSI GAGAL!');


function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}

// registrasi user

function registrasi($data) {
  global $conn;

  $username = strtolower(stripslashes($data["username"]));
  $email = $data["email"];
  $password = mysqli_real_escape_string($conn, $data["password"]);
  $password2 = mysqli_real_escape_string($conn, $data["password2"]);
  $level = $data["level"];

  // Check if the username already exists
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
            alert('Username sudah terdaftar!');
          </script>";
    return false;
  }

  // Check password confirmation
  if ($password !== $password2) {
    echo "<script>
            alert('Konfirmasi password tidak sesuai!');
          </script>";
    return false;
  }

  // Encrypt the password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // Add the new user to the database
  mysqli_query($conn, "INSERT INTO user (`id`, `username`, `email`, `password`, `level`)
                      VALUES(null, '$username', '$email', '$password', '$level')");
  
  return mysqli_affected_rows($conn);
}


// function registrasi($data) {
//   global $conn;

//    $username =  strtolower(stripslashes($data["username"]));
//    $email =  $data["email"];
//    $password = mysqli_real_escape_string($conn, $data["password"]);
//    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
//   $level = $data ["level"];

//    // cek user name sudah ada atau belum
//    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

//    if( mysqli_fetch_assoc($result)) {
//     echo "<script>
//             alert('username sudah terdaftar!');
//             </script>";
//             return false;
//    }

//    // cek konfirmasi password
//    if ($password !== $password2) {
//     echo "<script>
//           alert('konfirmasi password tidak sesuai!');
//           </script>";
//           return false;
//    }
//    // enskripsi password
//    $password = password_hash($password, PASSWORD_DEFAULT);

  
//   // tambahkan user baru ke data base
//   mysqli_query($conn, "INSERT INTO user (`id`, `username`, `email`, `password`, `level`)
//   VALUES(null, '$username', '$email', '$password', '$level')");
  
//   return mysqli_affected_rows($conn);
  
// }




  //function hapus

  function deleted($id) {

    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE id  = $id");

    return mysqli_affected_rows($conn);
  }


 //fanction cari
 function cari($keyword) {

  $query = "SELECT * FROM  user WHERE username LIKE '%$keyword%' OR
                                      email LIKE '%$keyword%' OR                          
  ";
  return query($query);


 }


?>
