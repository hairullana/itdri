<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My Purchase | ITDRI</title>

  <?php require '_headtags.php' ?>
</head>

<body>

  <?php require '_header-white.php' ?>

  <section id="purchase" class="main mt-5">
    <div class="container">

      <div class="row">
        <div class="col-12  my-5">
          <div class="row">
            <div style="font-size: 3rem;" class="fw-bold">My Purchase</div>
          </div>
        </div>

      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="post-box">
            <div class="post-img"><img src="assets/img/laptop.png" class="img-fluid" alt=""></div>
            <span class="post-date">LEARNING & INNOVATION</span>
            <br>
            <span class="post-date"> Smart eye</span>
            <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
            <a href="#" class="readmore stretched-link mt-auto"><span>Detail Produk</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>

        <div class="col-md-5">
          <div class="post-box">
            <div class="post-img"><img src="assets/img/laptop.png" class="img-fluid" alt=""></div>
            <span class="post-date">LEARNING & INNOVATION</span>
            <br>
            <span class="post-date"> Smart eye</span>
            <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
            <a href="#" class="readmore stretched-link mt-auto"><span>Detail Produk</span><i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </div>

      </div>
    </div>
  </section>

  <?php require '_footer.php' ?>

</body>

</html>
<?php

if ($_SESSION['login'] == false) {
  echo "
    <script>
        Swal.fire('AKSES DITOLAK','Anda harus melakukan login terlebih dahulu','error').then(function(){
          window.location = 'login.php';
        });
    </script>
    ";
}

?>