<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>My Cart | ITDRI</title>
  <?php require '_headtags.php' ?>
</head>

<body>


  <?php require '_header-white.php' ?>

  <section id="purchase" class="main">

    <div class="container">

      <div class="row">
        <div class="col-md-7">

          <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-md-10">
                      <h2 class="fw-bold">My Cart</h1>
                    </div>
                    <div class="col-md-2">
                      <h2><i class="bi bi-cart"></i></h2>
                    </div>
                    <hr>
                </div>

                <div class="row my-2">
                  <div class="col-md-8">
                    <p class="fw-bold">PRODUCT DETAIL</p>
                  </div>  
                  <div class="col-md-2">
                    <p class="fw-bold">PRICE</p>
                  </div>
                  <div class="col-md-2">
                    <p class="fw-bold">SUBSCRIBE</p>
                  </div>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="assets/img/blog/product-1.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <span style="font-size:1.1rem;" class="fw-bold">
                            Network Management System
                        </span>
                        <br>
                        <span class="text-info" style="font-size:1rem;">
                            OCA BY Telkom - Social Network
                        </span>
                    </div>
                    <div class="col-md-2">
                        <p class="fw-bold">
                            Rp.0,-
                        </p>
                    </div>
                    <div class="col-md-2">
                      <div class="row gy-4 text-center">
                        <div class="d-grid gap-2">
                          <a href="purchase.php" class="getstarted">Get</a>
                          <a href="home.php" class="getstarted-white">Cancel</a>
                        </div>
                      </div>
                    </div>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="assets/img/blog/product-2.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <span style="font-size:1.1rem;" class="fw-bold">
                            Network Management System
                        </span>
                        <br>
                        <span class="text-info" style="font-size:1rem;">
                            OCA BY Telkom - Social Network
                        </span>
                    </div>
                    <div class="col-md-2">
                        <p class="fw-bold">
                            Rp.0,-
                        </p>
                    </div>
                    <div class="col-md-2">
                      <div class="row gy-4 text-center">
                        <div class="d-grid gap-2">
                          <a href="purchase.php" class="getstarted">Get</a>
                          <a href="home.php" class="getstarted-white">Cancel</a>
                        </div>
                      </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card">
                            <img src="assets/img/blog/product-3.png" class="card-img-top" alt="...">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <span style="font-size:1.1rem;" class="fw-bold">
                            Network Management System
                        </span>
                        <br>
                        <span class="text-info" style="font-size:1rem;">
                            OCA BY Telkom - Social Network
                        </span>
                    </div>
                    <div class="col-md-2">
                        <p class="fw-bold">
                            Rp.0,-
                        </p>
                    </div>
                    <div class="col-md-2">
                      <div class="row gy-4 text-center">
                        <div class="d-grid gap-2">
                          <a href="purchase.php" class="getstarted">Get</a>
                          <a href="home.php" class="getstarted-white">Cancel</a>
                        </div>
                      </div>
                    </div>
                </div>

            </div>
          </div>
        </div>

        <div class="col-md-4 offset-md-1">
            <div class="row">
                <div clas="col-12">
                    <h3 class="fw-bold">
                       Order Summary
                    </h3>
                    <hr>
                </div>
            </div>
            <div class="row">
               <div class="col-12">
                   <div class="row">
                        <div clas="col-12">
                            <p style="font-size: 1rem;" class="fw-bold">
                                ITEMS 3
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-9">
                            <span class="fw-bold">
                                Network Management System
                            </span>
                            <br>
                            <span class="text-info">
                                OCA BY Telkom - Social Network
                            </span>
                        </div>
                        <div class="col-md-3">
                            <p class="fw-bold">
                                Rp.0,-
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-9">
                            <span class="fw-bold">
                                Network Management System
                            </span>
                            <br>
                            <span class="text-info">
                                OCA BY Telkom - Social Network
                            </span>
                        </div>
                        <div class="col-md-3">
                            <p class="fw-bold">
                                Rp.0,-
                            </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-9">
                            <span class="fw-bold">
                                Network Management System
                            </span>
                            <br>
                            <span class="text-info">
                                OCA BY Telkom - Social Network
                            </span>
                        </div>
                        <div class="col-md-3">
                            <p class="fw-bold">
                                Rp.0,-
                            </p>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-md-9">
                            <span class="fw-bold">
                               TOTAL COST
                            </span>
                        </div>
                        <div class="col-md-3">
                            <P class="fw-bold">
                                Rp.0,-
                            </P>
                            
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-12 getstarted text-center">
                            <span>
                                <a id="checkout">CHECKOUT</a>
                            </span>
                        </div>
                    </div>
                       

                </div>
                
            </div>
        </div>

      </div>
      
      
        </section>
    
  <?php require '_footer.php' ?>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<script>
  document.getElementById('checkout').onclick = function(){
    Swal.fire({
      title: 'Subscribe has been successful, we will contact you soon !',
      // text: "You won't be able to revert this!",
      imageUrl: 'assets/img/cart2.png',
      // imageWidth: 400,
      imageHeight: 200,
      imageAlt: 'Custom image',
      confirmButtonColor: '#1F2855',
      confirmButtonText: 'Explore Other Product'
    }).then(function(){
      window.location = 'home.php';
    });
  }
</script>

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