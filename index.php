<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Bootstrap CSS -->
    <link rel="shortcut icon" href="image/logo-login.ico" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.min.css" />
    <title>CadetHub</title>
  </head>

  <body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<?php
			include 'conf/conn.php';
		?>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="logo ml-5">
        <a class="navbar-brand logo" href="index.html">Cadet<span>Hub</span></a>
      </div>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="login ml-auto mr-5">
          <button type="button" class="btn login">Login</button>
        </div>
      </div>
    </nav>
    <!-- end navbar -->
    <div class="jumbotron jumbotron-fluid">
      <div class="box-login hide">
        <form action="login_process.php" method="post">
          <div class="judul">
            <img src="image/logo-login.png" alt="" />
            <h1>CadetHub</h1>
          </div>
          <div class="input">
            <label for="username">username</label>
            <input type="text" name="username" id="username" />
          </div>
          <div class="input">
            <label for="password">password</label>
            <input type="password" name="password" id="password" />
          </div>
          <div class="forget">
            <a href="">Lupa Password?</a>
          </div>
          <div class="button">
            <button>Login</button>
          </div>
        </form>
      </div>
      <div class="container">
        <div class="judul">
          <h1 class="display-4">CadetHub</h1>
          <p class="lead">Aplikasi Web bagi kadet untuk ...</p>
        </div>
      </div>
      <img class="gambar" src="image/Frame 5.png" alt="ilustration" />
    </div>
    <!-- end jumbotron -->
    <!-- section top -->
    <section class="row p-3 m-2 top">
      <div class="container">
        <div class="judul row justify-content-center">
          <h1>CadetHub</h1>
        </div>
        <div class="menu mt-5 row justify-content-center">
          <div class="col-md-11 row box tengah justify-content-around">
           
            <div
              class="col-md-3 item items row justify-content-center align-items-center"
            >
             <a href="#satu"> Apa itu CadetHub ?</a>
            </div>
            <div
              class="col-md-3 item items row justify-content-center align-items-center"
            >
              <a href="#tiga">Kenapa CadetHub ?</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end section -->

    <!-- section middle -->
    <section class="tengah">
      <div class="top">
        <div id="satu" class="one">
          <img src="image/gambarr.png" alt="" />
          <div class="one-kanan">
            
            <div class="box">
              <h2>Apa itu Cadet <span>Hub</span></h2>
              <br>
              <p>
                Kita menyediakan pembelajaran yang mudah di pahami oleh peserta
                didik.
              </p>
            </div>
          </div>
        </div>
      
      </div>
      <div class="bottom" id="tiga">
        <div class="three">
          <div class="image">
            <img src="image/back.png" class="img-1" alt="bakground hijau" />
            <img src="image/math.png" class="img-2" alt="math" />
            <img src="image/list.png" class="img-3" alt="list" />
          </div>
          <div class="three-kanan">
            <div class="box">
              <h2>Kenapa Menggunakan 
                <br> Cadet <span>Hub</span></h2>
                <br>
              <p>
                BrainLab ngajak mencari tau sampai ke akar. Gak ada tuh jawaban
                "ya dari sananya begitu". Bareng BrainLab, selami rangkaian cerita
                yang runtut dan masuk akal.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
