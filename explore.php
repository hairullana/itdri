<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Explore Now | ITDRI</title>

  <?php include '_headtags.php' ?>
</head>

<body>
  <?php include '_google.php' ?>

  <!-- ======= Hero Section ======= -->
  <section id="explore" class="main regis d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center login-card">
          <div class="mb-4">
            <img class="logo-login" src="assets/img/logo.png" alt="">
          </div>
          <div class="text-center">
            <img src="assets/img/thanks.png" alt="" style="max-height:200px"><br/>
            <span class="mt-4" style="color: #33475c;font-size: 2.5rem;font-weight: bold;">Thanks <?= $_SESSION['nama'] ?>,</span><br/>
            We got your masterplan and enjoy to explore our directory!
            <div class="mt-5">
              <a href="register.php" class="getstarted-white">BACK</a>
              <a href="login.php" class="getstarted">LOGIN NOW TO EXPLORE</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include '_footer-js.php' ?>

</body>

</html>

<?php

if ($_SESSION['login-itdri'] == true) {
  echo "
    <script>
        Swal.fire('AKSES DITOLAK','Anda sudah melakukan login','warning').then(function(){
          window.location = 'index.php';
        });
    </script>
    ";
}

?>