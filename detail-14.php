<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Detail Product | ITDRI</title>
  <?php require '_headtags.php' ?>
</head>

<body>
  <?php include '_google.php' ?>

  <?php include '_header-white.php' ?>


    <main id="detail" class="main mt-5" style="padding-bottom: 5rem;">

        <!-- ======= About Section ======= -->
        <section id="about" class="about d-flex align-items-center">
        <div class="container" data-aos="fade-up">
            <div class="row gx-0">
    
              <div class="col-lg-6 align-middle" data-aos="zoom-out" data-aos-delay="200">
                  <img src="assets/img/bigbox.jpg" class="img-fluid" alt="">
                  <div class="rating text-center">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star"></i>
                    <span style="padding-left: 2rem;">1 Review</span>
                  </div>
              </div>
            
              <div class="col-lg-5 offset-lg-1 d-flex flex-column" data-aos="fade-up" data-aos-delay="200">
                <div class="card-desc">
                  <div class="card-body">
                    <span class="text-muted">LEARNING & INNOVATION</span><br/><br/>
                    <h4 class="fw-bolder">BigOne: Integrasi Satu Data</h4>
                    <span>Platform Event Virtual</span><br>
                    <div class="row text-muted gy-3 my-3">
                      <div class="col-md-6">
                        <i class="bi bi-people"></i> People & Organization
                      </div>
                      <div class="col-md-6">
                        <i class="bi bi-tools"></i> Tools
                      </div>
                      <div class="col-md-6">
                        <i class="bi bi-book"></i> Digital Leadership
                      </div>
                      <div class="col-md-6">
                        <i class="bi bi-laptop"></i> Strategy & Programs
                      </div>
                      <div class="col-md-6">
                        <i class="bi bi-reception-4"></i> Products & Technology
                      </div>
                    </div>
                  </div>
                  <div class="card-footer" style="text-align: justify;">
                    <p class="font-weight-bold"><i class="bi bi-file-earmark-medical"></i> Descriptions</p>
                    <span>Suatu badan perusahaan memiliki banyaknya data yang tersimpan dan sulit sekali untuk menyatukannya. Hal ini juga membuat sulit untuk merencanakan dan memindahkan (integrasi) data dari source data awal ke platform baru. Layanan Integrasi Satu Data menyediakan server untuk mengintegrasikan platform ke sumber data (database/file server) Anda agar lebih efisien dalam mengakses data.</span>
                  </div>
                </div>
              </div>

              <div class="col-lg-12">
                
                <div class="pricing mt-4">
                  <div class="row gy-4" data-aos="fade-left">

                    <div class="col-2 offset-1" data-aos="zoom-in" data-aos-delay="100">
                      <div class="box">
                        <h3 style="color: #07d5c0;">Free</h3>
                        <div class="price"><sup>Rp.</sup>XXX</div>
                        <p class="text-dark"><i class="bi bi-x-circle"></i></p>
                        <p class="text-dark"><i class="bi bi-x-circle"></i></p>
                        <p class="text-dark">Email</p>
                        <p class="text-dark"><i class="bi bi-x-circle"></i></p>
                        <p class="text-dark">Template</p>
                        <a id="select1" class="getstarted">Select</a>
                      </div>
                    </div>
          
                    <div class="col-2" data-aos="zoom-in" data-aos-delay="200">
                      <div class="box">
                        <h3 style="color: #65c600;">UMKM</h3>
                        <div class="price"><sup>Rp.</sup>XXX</div>
                        <p class="text-dark">Labeling</p>
                        <p class="text-dark"><i class="bi bi-x-circle"></i></p>
                        <p class="text-dark"><i class="bi bi-x-circle"></i></p>
                        <p class="text-dark">Social Media</p>
                        <p class="text-dark">Template</p>
                        <a id="select2" class="getstarted">Select</a>
                      </div>
                    </div>
          
                    <div class="col-2" data-aos="zoom-in" data-aos-delay="300">
                      <div class="box">
                        <h3 style="color: #ff901c;">Startup</h3>
                        <div class="price"><sup>Rp.</sup>XXX</div>
                        <p class="text-dark">Labeling</p>
                        <p class="text-dark"><i class="bi bi-x-circle"></i></p>
                        <p class="text-dark">Email</p>
                        <p class="text-dark"><i class="bi bi-x-circle"></i></p>
                        <p class="text-dark">Template</p>
                        <a id="select3" class="getstarted">Select</a>
                      </div>
                    </div>
          
                    <div class="col-2" data-aos="zoom-in" data-aos-delay="400">
                      <div class="box">
                        <h3 style="color: #ff0071;">SME</h3>
                        <div class="price"><sup>Rp.</sup>XXX</div>
                        <p class="text-dark">Labeling</p>
                        <p class="text-dark">Webchat</p>
                        <p class="text-dark">Email</p>
                        <p class="text-dark"><i class="bi bi-x-circle"></i></p>
                        <p class="text-dark">Template</p>
                        <a id="select4" class="getstarted">Select</a>
                      </div>
                    </div>

                    <div class="col-2" data-aos="zoom-in" data-aos-delay="400">
                      <div class="box">
                        <h3 style="color: #ff0071;">Enterprise</h3>
                        <div class="price"><sup>Rp.</sup>XXX</div>
                        <p class="text-dark">Labeling</p>
                        <p class="text-dark">Webchat</p>
                        <p class="text-dark">Email</p>
                        <p class="text-dark">Social Media</p>
                        <p class="text-dark">Template</p>
                        <a id="select5" class="getstarted">Select</a>
                      </div>
                    </div>
          
                  </div>
                </div>
              </div>
    
    
            </div>
          </div>
    
        </section>

        <div class="content" id="pallet1" style="padding-top: 7.5rem;">
          <div class="testimonials" data-aos="fade-up">
    
            <header class="section-header">
              <!-- <h2>Testimonials</h2> -->
              <p>Mungkin juga cocok untuk anda.</p>
            </header>
    
            <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
    <div class="swiper-wrapper">

      <div class="swiper-slide">
        <div class="testimonial-item">
            <div class="media-29101">
            <a href="detail-11.php"><img src="assets/img/product/11.png" class="img-fluid" alt=""></a>
            </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="testimonial-item">
            <div class="media-29101">
            <a href="detail-22.php"><img src="assets/img/product/22.png" class="img-fluid" alt=""></a>
            </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="testimonial-item">
            <div class="media-29101">
            <a href="detail-33.php"><img src="assets/img/product/33.png" class="img-fluid" alt=""></a>
            </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="testimonial-item">
            <div class="media-29101">
            <a href="detail-14.php"><img src="assets/img/product/14.png" class="img-fluid" alt=""></a>
            </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="testimonial-item">
            <div class="media-29101">
            <a href="detail-25.php"><img src="assets/img/product/25.png" class="img-fluid" alt=""></a>
            </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="testimonial-item">
            <div class="media-29101">
            <a href="detail-36.php"><img src="assets/img/product/36.png" class="img-fluid" alt=""></a>
            </div>
        </div>
      </div>

      <div class="swiper-slide">
        <div class="testimonial-item">
            <div class="media-29101">
            <a href="detail-17.php"><img src="assets/img/product/17.png" class="img-fluid" alt=""></a>
            </div>
        </div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div>
    
          </div>
        </div>
        
        <!-- End About Section -->
    </main>

  <?php include '_footer.php' ?>

</body>

</html>

<script>
  document.getElementById('select1').onclick = function(){
    Swal.fire({
      title: 'Success Insert',
      // text: "You won't be able to revert this!",
      imageUrl: 'assets/img/cart.png',
      // imageWidth: 400,
      imageHeight: 200,
      imageAlt: 'Custom image',
      confirmButtonColor: '#1F2855',
      confirmButtonText: 'Explore Other Product'
    }).then(function(){
      window.location = 'home.php';
    });
    // alert('a')
  }

  document.getElementById('select2').onclick = function(){
    Swal.fire({
      title: 'Success Insert',
      // text: "You won't be able to revert this!",
      imageUrl: 'assets/img/cart.png',
      // imageWidth: 400,
      imageHeight: 200,
      imageAlt: 'Custom image',
      confirmButtonColor: '#1F2855',
      confirmButtonText: 'Explore Other Product'
    }).then(function(){
      window.location = 'home.php';
    });
    // alert('a')
  }

  document.getElementById('select3').onclick = function(){
    Swal.fire({
      title: 'Success Insert',
      // text: "You won't be able to revert this!",
      imageUrl: 'assets/img/cart.png',
      // imageWidth: 400,
      imageHeight: 200,
      imageAlt: 'Custom image',
      confirmButtonColor: '#1F2855',
      confirmButtonText: 'Explore Other Product'
    }).then(function(){
      window.location = 'home.php';
    });
    // alert('a')
  }

  document.getElementById('select4').onclick = function(){
    Swal.fire({
      title: 'Success Insert',
      // text: "You won't be able to revert this!",
      imageUrl: 'assets/img/cart.png',
      // imageWidth: 400,
      imageHeight: 200,
      imageAlt: 'Custom image',
      confirmButtonColor: '#1F2855',
      confirmButtonText: 'Explore Other Product'
    }).then(function(){
      window.location = 'home.php';
    });
    // alert('a')
  }

  document.getElementById('select5').onclick = function(){
    Swal.fire({
      title: 'Success Insert',
      // text: "You won't be able to revert this!",
      imageUrl: 'assets/img/cart.png',
      // imageWidth: 400,
      imageHeight: 200,
      imageAlt: 'Custom image',
      confirmButtonColor: '#1F2855',
      confirmButtonText: 'Explore Other Product'
    }).then(function(){
      window.location = 'home.php';
    });
    // alert('a')
  }
</script>

<?php

if ($_SESSION['login-itdri'] == false) {
  echo "
    <script>
        Swal.fire('AKSES DITOLAK','Anda harus melakukan login terlebih dahulu','warning').then(function(){
          window.location = 'login.php';
        });
    </script>
    ";
}

?>