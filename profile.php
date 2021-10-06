<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Profile | ITDRI</title>
  <?php require '_headtags.php' ?>
</head>

<body>
  <?php include '_google.php' ?>

  <?php require '_header-white.php' ?>

  <!-- ======= Hero Section ======= -->
  <section id="profile" class="main d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 hero-img my-auto text-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="assets/img/user.png" class="img-fluid" style="height: 300px; width: auto;" alt="">
          <h2 class="mt-5"><?= $_SESSION['nama'] ?> <sup style="font-size: 1.5rem;" id="change-name"><i class="bi bi-pencil-fill"></i></sup></h2>
        </div>
        <div class="col-lg-6 offset-lg-1 d-flex flex-column justify-content-center">
          <h1><b>USER DETAILS</b></h1>
          <p class="mb-4">General Information</p>
          <form>
            <!-- form -->
            <div class="row gy-4">
              <!-- your name -->
              <!-- email -->
              <div class="col-md-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class='bi bi-envelope-fill'></i></div>
                  </div>
                  <input type="text" class="form-control bounder-form" id="inlineFormInputGroupUsername2" placeholder="E-mail" value="<?= $_SESSION['email'] ?>">
                </div>
              </div>
              <!-- phone -->
              <div class="col-md-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class='bi bi-telephone-fill'></i></div>
                  </div>
                  <input type="text" class="form-control bounder-form" id="inlineFormInputGroupUsername2" placeholder="Phone number" value="<?= $_SESSION['telp'] ?>">
                </div>
              </div>
                <!-- Password input -->
              <div class="col-md-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class='bi bi-shield-lock-fill'></i></div>
                  </div>
                  <input type="password" class="form-control bounder-form" id="inlineFormInputGroupUsername2" placeholder="Create password">
                </div>
              </div>
              <!-- repeat -->
              <div class="col-md-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class='bi bi-shield-lock-fill'></i></div>
                  </div>
                  <input type="password" class="form-control bounder-form" id="inlineFormInputGroupUsername2" placeholder="Repeat Password">
                </div>
              </div>
              <div class="col-md-4 offset-md-4 d-flex justify-content-between align-items-center mt-4">
                <a href="home.php" class="getstarted ">Cancel</a>
                <a href="#" class="getstarted ">Save</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  </main><!-- End #main -->
</div>
  
  <?php require '_footer.php' ?>

</body>

</html>

<script>
  document.getElementById('change-name').onclick = function(){
    Swal.fire({
      title: 'Type Your Name',
      input: 'text',
      showCancelButton: true,
      confirmButtonText: 'Save',
      showLoaderOnConfirm: true
    })
  }
</script>

<?php

if ($_SESSION['login'] == false) {
  echo "
    <script>
        Swal.fire('AKSES DITOLAK','Anda harus melakukan login terlebih dahulu','warning').then(function(){
          window.location = 'login.php';
        });
    </script>
    ";
}
?>