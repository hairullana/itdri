<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register | ITDRI</title>

  <?php require '_headtags.php' ?>
</head>

<body>

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
          <form>
            <!-- Email input -->
            <div class="row gy-3">
              <!-- your name -->
              <div class="col-md-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class='bi bi-person-fill'></i></div>
                  </div>
                  <input type="text" class="form-control bounder-form" id="inlineFormInputGroupUsername2" placeholder="Your name">
                </div>
              </div>
              <!-- email -->
              <div class="col-md-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class='bi bi-envelope-fill'></i></div>
                  </div>
                  <input type="text" class="form-control bounder-form" id="inlineFormInputGroupUsername2" placeholder="E-mail">
                </div>
              </div>
              <!-- phone -->
              <div class="col-md-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class='bi bi-telephone-fill'></i></div>
                  </div>
                  <input type="text" class="form-control bounder-form" id="inlineFormInputGroupUsername2" placeholder="Phone number">
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
                <a href="who.php" class="getstarted">Let's Go</a>
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