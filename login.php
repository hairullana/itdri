<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login | ITDRI</title>

  <?php require '_headtags.php' ?>
</head>

<body>

  <!-- ======= Hero Section ======= -->
  <section id="login" class="main login d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-5 d-flex flex-column justify-content-center login-card">
          <div class="mb-4">
            <img src="assets/img/logo.png" alt="">
            <h3 class="mt-4"><b>Hi ! Happy To See You Again !</b></h3>
            <h6>Log in with data you entered during your registration.</h6>
          </div>
          <form>
            <!-- Email input -->
            <div class="row gy-4">
              <div class="col-md-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class='bi bi-person-fill'></i></div>
                  </div>
                  <input type="text" class="form-control bounder-form" id="inlineFormInputGroupUsername2" placeholder="E-mail">
                </div>
              </div>
                <!-- Password input -->
              <div class="col-md-12">
                <div class="input-group">
                  <div class="input-group-prepend">
                    <div class="input-group-text"><i class='bi bi-shield-lock-fill'></i></div>
                  </div>
                  <input type="text" class="form-control bounder-form" id="inlineFormInputGroupUsername2" placeholder="Password">
                </div>
              </div>
              <div class="col-md-12 d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                  <label class="form-check-label" for="form2Example3">
                    Remember me
                  </label>
                </div>
                <div class="form-check mb-0">
                  <label class="form-check-label">
                    <a href="#" class="text-body"><i>Forgot password?</i></a>
                  </label>
                </div>
              </div>
              <div class="col-md-6 offset-4">
                <a href="home.php" class="getstarted">Let's Go</a>
              </div>
              <p class="text-center small">Don't have an account? <a href="register.php" class="fw-bold">Sign Up</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <?php require '_footer-js.php' ?>

</body>

</html>