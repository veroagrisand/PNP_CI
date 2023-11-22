<?php
include "head.php";
?>

<html>

<head>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-1 nav-padding navbar-expand-lg navbar-dark position-fixed w-100 wave-animation navbarSaya" id="myNavbar" >
      <div class="container">
        <a class="navbar-brand no-effect" href="#">
          <img src="konekin-bulat.png" alt="" width="30" class="d-inline-block align-text-top me-2" />
          Konekin</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item mx-4">
              <a class="nav-link" aria-current="page" href="index2.php">Beranda</a>
            </li>

            <li class="nav-item mx-4">
              <a class="nav-link" aria-current="page" href="komunitas.php">Komunitas</a>
            </li>

            <li class="nav-item dropdown mx-4">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Acara</a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="acara/organisasi.php" >Organisasi</a></li>
                <li><a class="dropdown-item" href="acara/organisasi.php" >Individu</a></li>
              </ul>
            </li>
            <li class="nav-item mx-4">
              <a class="nav-link" id="portofolio" href="forum.php">Forum</a>
            </li>
          </ul>
          <div>
          <ul class="navbar-nav mx-auto">
          <li class="nav-item dropdown mx-4">
          <?php
                  session_start();

                  if (isset($_SESSION['username'])) {
                      $username = $_SESSION['username']; 
                      echo '
                      <div class="dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              ' . $username . '
                          </a>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <li><a class="dropdown-item" href="user/logout.php">Keluar</a></li>

                          </ul>
                      </div>';
                  }
                  ?>
              </ul>
            </li>        
          </div>
        </div>
      </div>
    </nav>

    <section class="temukan">
    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <title>Document</title>
</head>
<body>
<section id="latest">
      <div class="container cow">
        <div class="row ">
        <h5>Ketahui apa yang kamu sukai</h5>
            <p ><span class="fw-bold">Hai teman teman</span>  yuk cari komunitas kamu yang kamu minati disini."</p>

          <div class="col-12">
         
          </div>

        <div class="col-md-4 mb-4">
          <div class="card-latest">
            <img class="line14-latest" src="assets/line14-latest.png" alt="line14-latest" />
            <div class="flex-row">
              <div class="flex-col-1">
                <div class="paragraph-6 poppins-medium-eerie-black-58px"><a href="https://www.instagram.com/cybertech_pnp/">Cybertech<br /> PNP </a></div>
                <div class="flex-row-1 flex-row-3">
                  <div class="paragraph-7 valign-text-middle poppins-semi-bold-eerie-black-16px">Cybertech "</div>
                  <img class="carbonnext-latest" src="assets/carbonnext-latest.png" alt="carbon:next-filled" />
                </div>
                <img class="image-5 mt-4" src="assets/cybertech.png" alt="image-5">
              </div>
            </div>
          </div>

          
         
        </div>

        
        <div class="col-md-4 mb-4">
          <div class="card-latest">
            <img class="line14-latest" src="assets/line14-latest.png" alt="line14-latest" />
            <div class="flex-row">
              <div class="flex-col-1">
                <div class="paragraph-6 poppins-medium-eerie-black-58px"><a href="https://getbootstrap.com/">Mastering Code<br /> Bootstrap </a></div>
                <div class="flex-row-1 flex-row-3">
                  <div class="paragraph-7 valign-text-middle poppins-semi-bold-eerie-black-16px">Build fast with boostrap</div>
                  <img class="carbonnext-latest" src="assets/carbonnext-latest.png" alt="carbon:next-filled" />
                </div>
                <img class="image-5 mt-4" src="assets/bostrap.png" alt="image-5">
              </div>
            </div>
          </div>

          
         
        </div>

        
        <div class="col-md-4 mb-4">
          <div class="card-latest">
            <img class="line14-latest" src="assets/line14-latest.png" alt="line14-latest" />
            <div class="flex-row">
              <div class="flex-col-1">
                <div class="paragraph-6 poppins-medium-eerie-black-58px"><a href="https://getbootstrap.com/">Mastering Code<br /> Bootstrap </a></div>
                <div class="flex-row-1 flex-row-3">
                  <div class="paragraph-7 valign-text-middle poppins-semi-bold-eerie-black-16px">Build fast with boostrap</div>
                  <img class="carbonnext-latest" src="assets/carbonnext-latest.png" alt="carbon:next-filled" />
                </div>
                <img class="image-5 mt-4" src="assets/bostrap.png" alt="image-5">
              </div>
            </div>
          </div>

          
         
        </div>

        
        <div class="col-md-4 mb-4">
          <div class="card-latest">
            <img class="line14-latest" src="assets/line14-latest.png" alt="line14-latest" />
            <div class="flex-row">
              <div class="flex-col-1">
                <div class="paragraph-6 poppins-medium-eerie-black-58px"><a href="https://getbootstrap.com/">Mastering Code<br /> Bootstrap </a></div>
                <div class="flex-row-1 flex-row-3">
                  <div class="paragraph-7 valign-text-middle poppins-semi-bold-eerie-black-16px">Build fast with boostrap</div>
                  <img class="carbonnext-latest" src="assets/carbonnext-latest.png" alt="carbon:next-filled" />
                </div>
                <img class="image-5 mt-4" src="assets/bostrap.png" alt="image-5">
              </div>
            </div>
          </div>

          
         
        </div>

        
        <div class="col-md-4 mb-4">
          <div class="card-latest">
            <img class="line14-latest" src="assets/line14-latest.png" alt="line14-latest" />
            <div class="flex-row">
              <div class="flex-col-1">
                <div class="paragraph-6 poppins-medium-eerie-black-58px"><a href="https://getbootstrap.com/">Mastering Code<br /> Bootstrap </a></div>
                <div class="flex-row-1 flex-row-3">
                  <div class="paragraph-7 valign-text-middle poppins-semi-bold-eerie-black-16px">Build fast with boostrap</div>
                  <img class="carbonnext-latest" src="assets/carbonnext-latest.png" alt="carbon:next-filled" />
                </div>
                <img class="image-5 mt-4" src="assets/bostrap.png" alt="image-5">
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-4">
          <div class="card-latest">
            <img class="line14-latest" src="assets/line14-latest.png" alt="line14-latest" />
            <div class="flex-row">
              <div class="flex-col-1">
                <div class="paragraph-6 poppins-medium-eerie-black-58px">Mastering Code<br /> Bootstrap </div>
                <div class="flex-row-1 flex-row-3">
                  <div class="paragraph-7 valign-text-middle poppins-semi-bold-eerie-black-16px">Build fast with boostrap</div>
                  <img class="carbonnext-latest" src="assets/carbonnext-latest.png" alt="carbon:next-filled" />
                </div>
                <img class="image-5 mt-4" src="assets/bostrap.png" alt="image-5">
              </div>
            </div>
          </div>
        </div>
   
    </section>
</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script>
  var swiper = new Swiper(".mySwiper", {
    // Konfigurasi Swiper di sini
  });
</script>

<!-- TESTI END -->

<script>
  const buttonPrimary = document.querySelector(".button-primary");
  const buttonSecondary = document.querySelector(".button-secondary");

  buttonPrimary.addEventListener("mouseover", () => {
    buttonSecondary.classList.add("shift-background");
  });

  buttonPrimary.addEventListener("mouseout", () => {
    buttonSecondary.classList.remove("shift-background");
  });
</script>
</html>