<?php
session_start();
require '_functions.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register | ITDRI</title>

  <?php require '_headtags.php' ?>
</head>

<body>
  <?php include '_google.php' ?>

  <!-- ======= Hero Section ======= -->
  <section id="regis" class="main regis d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-5 d-flex flex-column justify-content-center login-card">
          <div class="mb-4">
            <img src="assets/img/logo.png" alt="">
            <h6 class="mt-4">Start with ITDRI now</h6>
            <h3><b>Hi ! Happy To See You Again !</b></h3>
          </div>
          <form method="POST">
            <!-- Email input -->
            <div class="row gy-3">
              <!-- your name -->
              <div class="col-md-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class='bi bi-person-fill'></i></div>
                  </div>
                  <input type="text" class="form-control bounder-form" name="nama" placeholder="Your name">
                </div>
              </div>
              <!-- email -->
              <div class="col-md-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class='bi bi-envelope-fill'></i></div>
                  </div>
                  <input type="text" class="form-control bounder-form" name="email" placeholder="E-mail">
                </div>
              </div>
              <!-- phone -->
              <div class="col-md-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class='bi bi-telephone-fill'></i></div>
                  </div>
                  <input type="text" class="form-control bounder-form" name="telp" placeholder="Phone number">
                </div>
              </div>
                <!-- Password input -->
              <div class="col-md-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class='bi bi-shield-lock-fill'></i></div>
                  </div>
                  <input type="password" class="form-control bounder-form" name="password1" placeholder="Create password">
                </div>
              </div>
              <!-- repeat -->
              <div class="col-md-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class='bi bi-shield-lock-fill'></i></div>
                  </div>
                  <input type="password" class="form-control bounder-form" name="password2" placeholder="Repeat Password">
                </div>
              </div>
              <div class="col-md-12 d-flex justify-content-between align-items-center mt-3">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                  <label class="form-check-label" for="form2Example3">
                    <i>I agree to terms of use</i>
                  </label>
                </div>
              </div>
              <div class="col-md-6 offset-4">
                <button type="submit" name="daftar" class="getstarted">Let's Go</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php require '_footer-js.php' ?>

</body>

</html>

<?php

  if (isset($_POST["daftar"])) {
    // tangkap semua form
    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $telp = htmlspecialchars($_POST["telp"]);
    $password1 = htmlspecialchars($_POST["password1"]);
    $password2 = htmlspecialchars($_POST["password2"]);

    // validasi
    if (validasiNama($nama) == true){
      if (validasiTelp($telp) == true){
        if (validasiPassword($password1) == true){
          if (validasiPassword($password2) == true){
            // cek password
            if ($password1 != $password2) {
              echo "
                  <script>
                      Swal.fire('PENDAFTARAN GAGAL','Password Yang Anda Masukkan Tidak Sama','error');
                  </script>
              ";
            }else {
              $_SESSION['nama'] = $nama;
              $_SESSION['email'] = $email;
              $_SESSION['telp'] = $telp;
              $_SESSION['password'] = $password1;
              echo "
                <script>
                    Swal.fire('PENDAFTARAN BERHASIL','','success').then(function(){
                      window.location = 'who.php';
                    });
                </script>
                ";
            }
          }
        }
      }
    }

  }


  if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    echo "
      <script>
          Swal.fire('AKSES DITOLAK','Anda sudah login','warning').then(function(){
            window.location = 'home.php';
          });
      </script>
      ";
  }
?>

