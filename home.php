<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>ITDRI</title>
  <?php require '_headtags.php' ?>

</head>

<body>
  <?php include '_google.php' ?>

  <?php require '_header-violet.php' ?>

  <!-- ======= Hero Section ======= -->
  <section id="jumbotron" class="main home d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center">
          <h1 style="font-weight:750;font-size: 3rem;" class="text-white" data-aos="fade-up"><span class="" style="color: whitesmoke;">HI, <span style="text-transform:uppercase"><?= $_SESSION['nama'] ?></span></span><br/><span class="stroke">WE GOT YOUR MASTERPLAN AND</span><br/><span style="color:whitesmoke;">ENJOY TO EXPLORE OUR DIRECTORY !</span></h1>
          <div data-aos="fade-up" data-aos-delay="600">
            <div class="text-center text-lg-start mt-4">
              <a href="#body" class="getstarted-big" style="background-color:whitesmoke;color: #1F2855;">Explore Now</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 offset-lg-1 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <div class="container2">
            <div class="card2" onclick="whyus()">
              <a href="#pallet3"><h3 class="title">Why Us ?</h3></a>
              <div class="bar">
                <div class="emptybar"></div>
                <div class="filledbar"></div>
              </div>
              <div class="circle">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                <circle class="stroke" cx="60" cy="60" r="50"/>
              </svg>
              </div>
            </div>
            <div class="card2" onclick="products()">
              <a href="#pallet1"><h3 class="title">Products</h3></a>
              <div class="bar">
                <div class="emptybar"></div>
                <div class="filledbar"></div>
              </div>
              <div class="circle">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                <circle class="stroke" cx="60" cy="60" r="50"/>
              </svg>
              </div>
            </div>
            <div class="card2" onclick="testimonials()">
              <a href="#testimonials"><h3 class="title">Testimonials</h3></a>
              <div class="bar">
                <div class="emptybar"></div>
                <div class="filledbar"></div>
              </div>
              <div class="circle">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg">
                <circle class="stroke" cx="60" cy="60" r="50"/>
              </svg>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <div id="body" class="mt-3">

    <!-- WHY ME -->
    <div class="col-sm-7 mx-auto" id="whyus" style="padding-top: 95px;">
      <header class="section-header text-center">
        <h1 style="font-weight:700;">WHY US ?</h1>
      </header>
    </div>
    
    <div id="flex-container" class="testimonials">
      <div id="left-zone">
        <ul class="list">
          <li class="item">
            <input type="radio" id="radio_testimonial-1" name="basic_carousel" checked="checked" />
            <label class="label_testimonial-1" for="radio_testimonial-1">No 1 Di Indonesia</label>
            <div class="content-test content_testimonial-1">
              <span class="picto"></span>
              <h1>No 1 Di Indonesia</h1>
              <p>“The team really takes pride in their work. If I didn’t know any better I would think they actually worked for my company.”</p>
              <!-- <p class="testimonialFrom">Bill, Owner</p>
              <p class="testimonialState">Rochester, NY</p> -->
            </div>
          </li>
          <li class="item">
            <input type="radio" id="radio_testimonial-2" name="basic_carousel" />
            <label class="label_testimonial-2" for="radio_testimonial-2">Kualitas Terbaik</label>
            <div class="content-test content_testimonial-2">
              <span class="picto"></span>
              <h1>Kualitas Terbaik</h1>
              <p>“Quite simply… the service offers prompt response time to my visitors and helps me to better know what type of project a potential customer wants.”</p>
              <!-- <p class="testimonialFrom">Bill, Owner</p>
              <p class="testimonialState">Tucson, AZ</p> -->
              <br>
            </div>
          </li>
          <li class="item">
            <input type="radio" id="radio_testimonial-3" name="basic_carousel" />
            <label class="label_testimonial-3" for="radio_testimonial-3">Pelayanan Terbaik</label>
            <div class="content-test content_testimonial-3">
              <span class="picto"></span>
              <h1>Pelayanan Terbaik</h1>
              <p>“I couldn’t believe it. I actually had to hire someone to help me keep up with the new business. I had no idea my website had so much value.”</p>
              <!-- <p class="testimonialFrom">Marlene, Owner</p>
              <p class="testimonialState">Monterey, CA</p> -->
            </div>
          </li>
          <li class="item">
            <input type="radio" id="radio_testimonial-4" name="basic_carousel" />
            <label class="label_testimonial-4" for="radio_testimonial-4">Mantap Pokoknya</label>
            <div class="content-test content_testimonial-4">
              <span class="picto"></span>
              <h1>Pokoknya Mantap</h1>
              <p>Great company to send leads. Very efficient and pleased with the services. We get lots of leads and that whats important. Support is also great from the managers/support. Thanks YPC Chat</p>
              <!-- <p class="testimonialFrom">Mark, Owner</p>
              <p class="testimonialState">Somerset, VA</p> -->
              <br>
            </div>
          </li>
        </ul>
      </div>
      <div id="right-zone"></div>
    </div>

    <!-- PALLET 1 -->
    <div class="content" id="pallet1" style="padding-top: 7.5rem;">
      <div class="testimonials" data-aos="fade-up">

        <header class="section-header">
          <!-- <h2>Testimonials</h2> -->
          <p>Persiapkan Diri Anda Untuk Keajaiban Teknologi</p>
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
                  <a href="detail-12.php"><img src="assets/img/product/12.png" class="img-fluid" alt=""></a>
                  </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                  <div class="media-29101">
                  <a href="detail-13.php"><img src="assets/img/product/13.png" class="img-fluid" alt=""></a>
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
                  <a href="detail-15.php"><img src="assets/img/product/15.png" class="img-fluid" alt=""></a>
                  </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                  <div class="media-29101">
                  <a href="detail-16.php"><img src="assets/img/product/16.png" class="img-fluid" alt=""></a>
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

    <div class="content" id="pallet2">
      <div class="testimonials" data-aos="fade-up">

        <header class="section-header">
          <!-- <h2>Testimonials</h2> -->
          <p>Percepat Perjalanan Transformasi Digital Perusahaan Semakin Didepan</p>
        </header>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

          <div class="swiper-slide">
              <div class="testimonial-item">
                  <div class="media-29101">
                  <a href="detail-21.php"><img src="assets/img/product/21.png" class="img-fluid" alt=""></a>
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
                  <a href="detail-23.php"><img src="assets/img/product/23.png" class="img-fluid" alt=""></a>
                  </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                  <div class="media-29101">
                  <a href="detail-24.php"><img src="assets/img/product/24.png" class="img-fluid" alt=""></a>
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
                  <a href="detail-26.php"><img src="assets/img/product/26.png" class="img-fluid" alt=""></a>
                  </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                  <div class="media-29101">
                  <a href="detail-27.php"><img src="assets/img/product/27.png" class="img-fluid" alt=""></a>
                  </div>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </div>

    <div class="content" id="pallet3">
      <div class="testimonials" data-aos="fade-up">

        <header class="section-header">
          <!-- <h2>Testimonials</h2> -->
          <p>Persiapkan Perusahaan Anda Menyambut Dunia Digital dan Menjadikan Segalanya Lebih Nyata</p>
        </header>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

          <div class="swiper-slide">
              <div class="testimonial-item">
                  <div class="media-29101">
                  <a href="detail-31.php"><img src="assets/img/product/31.png" class="img-fluid" alt=""></a>
                  </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                  <div class="media-29101">
                  <a href="detail-32.php"><img src="assets/img/product/32.png" class="img-fluid" alt=""></a>
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
                  <a href="detail-34.php"><img src="assets/img/product/34.png" class="img-fluid" alt=""></a>
                  </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                  <div class="media-29101">
                  <a href="detail-35.php"><img src="assets/img/product/35.png" class="img-fluid" alt=""></a>
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
                  <a href="detail-37.php"><img src="assets/img/product/37.png" class="img-fluid" alt=""></a>
                  </div>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </div>

    <!-- testi -->
    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="container testimonials" style="padding-top: 3rem;">

      <div class="" data-aos="fade-up">

        <header class="section-header">
          <h2>Testimonials</h2>
          <p>What they are saying about us</p>
        </header>

        <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="200">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/foto.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/foto.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/foto.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/foto.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/foto.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section> -->
    <!-- End Testimonials Section -->


  <?php require '_footer.php' ?>

</body>

</html>

<?php

if (!isset($_SESSION['login']) || $_SESSION['login'] == false) {
  echo "
    <script>
        Swal.fire('AKSES DITOLAK','Silahkan melakukan login terlebih dahulu','warning').then(function(){
          window.location = 'login.php';
        });
    </script>
    ";
}


?>