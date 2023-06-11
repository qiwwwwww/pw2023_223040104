<?php
require 'function.php';
session_start();
if(!isset($_SESSION["login"])){
  header("Location: login.php");

}


?>





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />



    <title>DrakSoul</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,700;1,400&display=swap"
      rel="stylesheet"
    />

    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- stylesheet -->
    <link rel="stylesheet" href="css/tubes.css" />
    <link rel="stylesheet" href="css/footer.css"/>
  </head>
  <body>
    <!-- navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo"><span>Dark</span>Soul</a>

      <div class="navbar-nav">
        <a href="#">Home</a>
        <a href="#about">About</a>
        <a href="#event">Event</a>
      </div>

      <div class="navbar-nav">
        <a href="logout.php">Logout</a>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- Hero section start -->
    <section class="hero" id="home">
      <main class="content">
        <h1>BOOST YOUR ADRENALINE</h1>
        <a href="register.php" class="cta"><p>BELI TIKET</p></a>
      </main>
    </section>
    <!-- Hero section end -->
    <!--About section  start-->
    <section id="about" class="about">
      <h2><span>A</span>BOUT</h2>

      <div class="row">
        <div class="about-img"><img src="img/fight jpeg.jpg" alt="ABOUT ">
        <div class="content">
          <h3>Macth To Champion</h3>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate
            vero maxime alias facere aut sed error iure doloremque id? Quo.
          </p>
        </div>
      </div>
    </section>
    <!--About section end-->

    <!-- menu section start -->
    <section id="event" class="event">
      <h2><span>E</span>VENT</h2>

      <div class="row">
        <div class="event-card">
          <img
            src="img/ufc jpeg2.jpg"
            alt="matrial arts"
            class="event-card-img"
          />
          <h3 class="event-card-title">UFC</h3>
        </div>
        <div class="event-card">
          <img
            src="img/boxing2 jpeg.jpg"
            alt="matrial arts"
            class="event-card-img"
          />
          <h3 class="event-card-title">boxing</h3>
        </div>
        <div class="event-card">
          <img
            src="img/kick boxing2.jpg"
            alt="matrial arts"
            class="event-card-img"
          />
          <h3 class="event-card-title">kick boxing</h3>
        </div>
        <div class="event-card">
          <img
            src="img/muaithay jpeg2.jpg"
            alt="matrial arts"
            class="event-card-img"
          />
          <h3 class="event-card-title">muaythai</h3>
        </div>
      </div>
    </section>
    <!-- menu section end-->
    <!-- fether icon-->
    <script>
      feather.replace();
    </script>
    <!-- footer--->
    <footer>
        <div class="social">
            <a href="https://www.instagram.com/yawa_bobo/"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://discord.com/channels/@me"><i class="fa-brands fa-discord"></i></a>
            <a href="https://web.whatsapp.com/"><i class="fa-brands fa-whatsapp"></i></a>
        </div>

        <div class="links">
            <a href="../tubes.php">Home</a>
            <a href="#">About</a>
            <a href="#">contak</a>
        </div>

        <div class="credits">
            <p>created by <a href="#">Muhammad rizqi Saputra</a>. | &copy; 2023 </p>
        </div>
    </footer>
    
    <!-- end footer--->
  </body>
</html>
