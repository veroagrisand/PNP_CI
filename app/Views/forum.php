
<?php
include "head.php";
include "config/koneksi.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Forum</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
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
   
    <div class="row">
      <div class="col-200">
    <form action="simpan_forum.php"method="post" class="forum" style="background: #DF8D00;">
    <label for="comment" class="text-pesan">Pesan : </label><br><br>
    <textarea id="comment" name="comment" style=" border-radius: 10px; height:200px; width:90%"></textarea><br>
    <button type="submit" class="btn btn-pesan mt-4" >Kirim Pesan</button>
</form>
</div>
</div>

<div class="forum text-pesan" style="background: #DF8D00;">      
      <?php 
      $qu=mysqli_query($conn,"SELECT * FROM forum ORDER BY id_forum ASC ") or die(mysqli_error($conn));
      while($row=mysqli_fetch_array($qu)){ 
      ?>
      <?php                           
       echo "<strong>" . $row["username"] . "</strong> (" . $row["created_at"] . "): " . $row["comment"] . "<br>";
      ?>
      <br>
      <?php
       }
      ?>
</div>
</body>
<?php include "footer.php"?> 
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