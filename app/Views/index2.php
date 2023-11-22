<?php
include "head.php";
include "config/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<title>Dashboard</title>
<!-- Navbar -->
<nav class="navbar nav-padding navbar-expand-lg navbar-dark position-fixed w-100 wave-animation navbarSaya" id="myNavbar" >
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

    

  <body>
    <!-- hero section -->
    <section id="hero">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-md-6 hero-tagline my-auto">
            <h1>Temukan Potensi Tanpa Batas di Dalam Komunitas</h1>
            <p><span class="fw-bold"> Selamat datang di Konekin, </span> Selamat datang di Konekin, tempat di mana visi Anda tentang sebuah komunitas yang kuat menjadi kenyataan.</p>

            <a class="button-lg-primary mt-5"  href="acara/organisasi.php">Join Acara</a>
            <!-- <a href="https://api.whatsapp.com/send/?phone=081273474170&text&type=phone_number&app_absent=0"> -->
              <!-- <img src="assets/button arrow.png" alt="" class="mx-4" /> -->
            </a>
          </div>
        </div>

        <img src="konekin.png" alt=""  class="position-absolute top-50 translate-middle-y banner3dy" style="left: 40%"; />
        <img src="assets/Accsent.png" alt="" class="accsent-img h-100 position-absolute top-0 start-0" />
      </div>
    </section>

    <!-- Project saya -->
    <section id="tugas">
      <div class="container">
        <div class="row mt-3">
        <div class="col-12 text-center">
            <h2>Komunitas apa saja yang bisa kamu ikuti disini?</h2>
            <span class="sub-tittle"> Project perjalanan saya dalam belajar programing</span>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-md-4 text-center">
            <div class="card-tugas">
              <div class="bulet position-relative mx-auto">
                <img src="assets/tugaswireframe.png" alt="" class="position-absolute top-50 start-50 translate-middle" />
              </div>
              <h3 class="mt-4">Wireframe</h3>
              <p class="mt-3">Tugas utama dari wireframe website adalah untuk merancang konsep visual dan struktur navigasi website.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="card-tugas">
              <div class="bulet position-relative mx-auto">
                <img src="assets/tugaswireframe.png" alt="" class="position-absolute top-50 start-50 translate-middle" />
              </div>
              <h3 class="mt-4">UI/UX</h3>
              <p class="mt-3">Saya memiliki pengetahuan mendalam tentang prinsip desain UI/UX, penelitian pengguna, pengalaman pengguna, dan pengembangan prototipe.</p>
            </div>
          </div>

          <div class="col-md-4 text-center">
            <div class="card-tugas">
              <div class="bulet position-relative mx-auto">
                <img src="assets/ikonuidanux.png" alt="" class="position-absolute top-50 start-50 translate-middle" />
              </div>
              <h3 class="mt-4">Html</h3>
              <p class="mt-3">Saya pernah belajar HTML di masa kuliah dan memiliki pemahaman dasar dalam penggunaan HTML untuk membangun struktur dasar halaman web.</p>
            </div>
          </div>

          <br /><br />

          <div class="col-md-4 text-center mt-5">
            <div class="card-tugas">
              <div class="bulet position-relative mx-auto">
                <img src="assets/iconcss.png" alt="" class="position-absolute top-50 start-50 translate-middle" />
              </div>
              <h3 class="mt-4">Css</h3>
              <p class="mt-3">Saya memiliki pengalaman belajar CSS dan pengembangan web di masa kuliah, yang memberi saya pemahaman dasar tentang CSS</p>
            </div>
          </div>

          <div class="col-md-4 text-center mt-5">
            <div class="card-tugas">
              <div class="bulet position-relative mx-auto">
                <img src="assets/iconslicing.png" alt="" class="position-absolute top-50 start-50 translate-middle" />
              </div>
              <h3 class="mt-4">Slicing Desain</h3>
              <p class="mt-3">Saya telah belajar dan mengembangkan keterampilan dalam slicing desain selama masa kuliah.</p>
            </div>
          </div>

          <div class="col-md-4 text-center mt-5">
            <div class="card-tugas">
              <div class="bulet position-relative mx-auto">
                <img src="assets/iconweb.png" alt="" class="position-absolute top-50 start-50 translate-middle" />
              </div>
              <h3 class="mt-4">First Website</h3>
              <p class="mt-3">Saya dengan bangga mempersembahkan website portofolio pertama yang saya buat saat kuliah di semester empat.</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    

    <!-- AWAL SERVICES -->

    <!--AKHIR SERVICES-->



    <section id="latest">
      <div class="container">
        <div class="row ">
          <div class="col-12">
            <h5>Ketahui apa yang kamu sukai</h5>
            <p class=""><span class="fw-bold">"Hai teman teman</span>  yuk cari komunitas kamu yang kamu minati disini."</p>
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
          <div class="card-latest dua">
            <img class="line14-latest" src="assets/line14-latest.png" alt="line14-latest" />
            <div class="flex-row">
              <div class="flex-col-1">
                <div class="paragraph-6 poppins-medium-eerie-black-58px"><a href="https://laravel.com/">Mastering <br />Laravel</a></div>
                <div class="flex-row-1 flex-row-3">
                  <div class="paragraph-7 valign-text-middle poppins-semi-bold-eerie-black-16px">Deeply understand how Laravel works</div>
                  <img class="carbonnext-latest" src="assets/carbonnext-latest.png" alt="carbon:next-filled" />
                </div>
                <img class="image-5 mt-4" src="assets/laravel.png" alt="image-5">
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card-latest tiga">
            <img class="line14-latest" src="assets/line14-latest.png" alt="line14-latest" />
            <div class="flex-row">
              <div class="flex-col-1">
                <div class="paragraph-6 poppins-medium-eerie-black-58px"><a href="https://figma.com">Desain system<br />in Figma</a></div>
                <div class="flex-row-1 flex-row-3">
                  <div class="paragraph-7 valign-text-middle poppins-semi-bold-eerie-black-16px">Bagaimana Dasar sistem figma</div>
                  <img class="carbonnext-latest" src="assets/carbonnext-latest.png" alt="carbon:next-filled" />
                </div>
                <img class="image-5 mt-4" src="assets/dfigma.png" alt="image-5">
              </div>
            </div>
          </div>
        </div>

      </div>

   
    </section>
    <!--AKHIR Latest Project-->

    <!--AWAL TESTI-->


  <!-- TESTI END -->

  <!--LEST  DISCUS-->


    
        <!-- TESTI END -->

  </body>
    <!--Link untuk JS untuk Bootstrap -->
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

<?php
include "footer.php";
?>