<?php
session_start();
if (!isset($_SESSION["login2"])) {
  header("Location:../login.php");
  exit;
}


require '../function.php';




$user = query("SELECT * FROM user");

// tombol cari di tekan
if (isset($_POST["cari"])) {
  $user = cari($_POST["keyword"]);



}





?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css" />
    <link rel="stylesheet" href="../css/style.css" />
    <title>DrakSoul</title>
  </head>
  <body>
    <!-- top navigation bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#sidebar"
          aria-controls="offcanvasExample"
        >
          <span class="navbar-toggler-icon" data-bs-target="#sidebar"></span>
        </button>
        <a
          class="navbar-brand me-auto ms-lg-0 ms-3 text-uppercase fw-bold"
          href="#"
          >DarkSoul</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#topNavBar"
          aria-controls="topNavBar"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="topNavBar">
          <form class="d-flex ms-auto my-3 my-lg-0">
            
          </form>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle ms-2"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <i class="bi bi-person-fill"></i>
              </a>
              <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="../logout.php">LOGOUT</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                CORE
              </div>
            </li>
            <li>
              <a href="#" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>admin</span>
              </a>
            </li>
            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Interface
              </div>
            </li>
              <div class="collapse" id="layouts">
                <ul class="navbar-nav ps-3">
                  <li>
                    <a href="#" class="nav-link px-3">
                      <span class="me-2"
                        ><i class="bi bi-speedometer2"></i
                      ></span>
                      <span>user</span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <li>
              <a href="ajax1.php" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Tables user</span>
              </a>
            </li>
        </nav>
      </div>
    </div>
    <!-- offcanvas -->
    <main class="mt-5 pt-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>users</h4>
          </div>
        </div>
      
              <div class="card-footer d-flex">
                View Details
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
          </div>
          
        <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card-header">
              <div class="input-group">
                <span><i class="bi bi-table me-2"></i>Data table</span> 
                <form action="" method="POST" class="d-flex ms-auto my-3 my-lg-0">
                  <input
                  class="form-control"
                  type="search"
                  placeholder="Search"
                  aria-label="Search"
                  name = "keyword"
                  autofocus
                  autocomplite ="off"
                  id ="keyword"
                  />
                  
                  <button class="btn btn-primary me-5" type="submit" name="cari" id ="tombol-cari">
                    <i class="bi bi-search"></i>
                  </button>
                  <a href="tambah.php" class="btn btn-primary float-end"> Tambah</a>   
                </div>
              </div>
            </form>
             <div id="container" >
        <div class="card-body">
    <div class="table-responsive">
                    <table
                    id="example"
                    class="table table-striped data-table"
                    style="width: 100%"
                    >
                    
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Action</th>
                        
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                        
                      <?php foreach($user as $s) :?>
                        <tr>
                        
                          <td><?= $s['id']?></td>
                          <td><?= $s['username']?></td>
                          <td><?= $s['email']?></td>
                          <td><?= $s['password']?></td>
                          <td>
                            <a href="edit.php" class="btn btn-success btn-sm mt-1">Edit</a>
                            <a href="hapus.php?id=<?= $s['id']; ?>" class="btn btn-danger btn-sm mt-1">Delete</a>
                          </td>
                        </tr>           
                        <?php endforeach; ?> 
                      </tbody>
                     </div>        
                      </table>


      <div class="row">
          <div class="col-md-12 mb-3">
            <div class="card-header">
              <div class="input-group">
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
    </table>
   </main>

    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.2/dist/chart.min.js"></script>
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.bootstrap5.min.js"></script>
    <script src="../js/script.js"></script>

  </body>
</html>


