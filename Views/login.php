<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="<?php echo base_url('style.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-...your-sha512-here..." crossorigin="anonymous" />
</head>
<body>


<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form>
          <!--<div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>-->

          <!-- Email input -->
          <div class="form-outline mb-4">
  <input type="email" id="form3Example3" class="form-control form-control-lg"
    placeholder="Enter your school email address" />
 <!-- <label class="form-label" for="form3Example3">Email address</label>-->
  <small id="emailHelp" class="form-text" style="color: blue;"><i class="fas fa-info-circle"></i> Please enter a valid school email address ending with .edu</small>
</div>

<script>
  const emailInput = document.getElementById('form3Example3');
const emailHelpText = document.getElementById('emailHelp');

emailInput.addEventListener('input', function() {
  const email = emailInput.value.trim();
  if (email.endsWith('.edu')) {
    emailInput.setCustomValidity('');
    emailHelpText.style.color = 'blue';
  } else {
    emailInput.setCustomValidity('Please enter a valid school email address ending with .edu');
    emailHelpText.style.color = 'red';
  }
});
</script>

          <!-- Password input -->
          <div class="form-outline mb-3">
  <input type="password" id="form3Example4" class="form-control form-control-lg"
    placeholder="Enter password" />
  <!--<label class="form-label" for="form3Example4">Password</label>-->
  <small id="passwordHelp" class="form-text">
    <i class="fas fa-info-circle"></i> Use the password sent to your email
  </small>
</div>
<script>
  const passwordHelpText = document.getElementById('passwordHelp');
passwordHelpText.style.color = 'blue';
</script>

          <!--<div class="d-flex justify-content-between align-items-center">-->
            <!-- Checkbox -->
           <!-- <div class="form-check mb-0">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
              <label class="form-check-label" for="form2Example3">
                Remember me
              </label>-->
           <!-- </div>
            <a href="#!" class="text-body">Forgot password?</a>
          </div>-->

          <div class="text-center text-lg-start mt-4 pt-2">
  <a href="http://localhost:8080/homepage" class="btn btn-primary btn-lg"
    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</a>
</div>
            <!--<p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                class="link-danger">Register</a></p>
          </div>-->

        </form>
      </div>
    </div>
  </div>
  <!--<div
    class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">-->
    <!-- Copyright -->
    <!--<div class="text-white mb-3 mb-md-0">
      Copyright © 2020. All rights reserved.
    </div>-->
    <!-- Copyright -->

    <!-- Right -->
    <!--<div>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#!" class="text-white me-4">
        <i class="fab fa-google"></i>
      </a>
      <a href="#!" class="text-white">
        <i class="fab fa-linkedin-in"></i>
      </a>
    </div>-->
    <!-- Right -->
   <!-- </div>
  <div class="popup-overlay" id="popupOverlay">
    <div class="popup">
      <p>Would you like to register as a voter?</p>
      <div class="popup-buttons">
        <button class="btn btn-primary" id="registerYes">Yes</button>
        <button class="btn btn-secondary" id="registerNo">No</button>
      </div>
    </div>
  </div>
  <div class="popup-overlay" id="successPopupOverlay">
    <div class="popup">
      <p>You are now a registered voter! Check your email to proceed.</p>
      <button id="successOkButton" class="btn btn-primary">OK</button>
    </div>
  </div>
</section>

<script>
  // Get references to the login button and popups
  const loginButton = document.querySelector('.btn-primary.btn-lg');
  const popupOverlay = document.getElementById('popupOverlay');
  const successPopupOverlay = document.getElementById('successPopupOverlay');
  const successOkButton = document.getElementById('successOkButton');

  // Hide the popups initially
  popupOverlay.style.display = 'none';
  successPopupOverlay.style.display = 'none';

  // Add click event listener to the login button
  loginButton.addEventListener('click', function() {
    // Show the initial popup overlay
    popupOverlay.style.display = 'flex';
  });

  // Add click event listener to the "No" button inside the initial popup
  const registerNoButton = document.getElementById('registerNo');
  registerNoButton.addEventListener('click', function() {
    // Hide the initial popup overlay
    popupOverlay.style.display = 'none';
  });

  // Add click event listener to the "Yes" button inside the initial popup
  const registerYesButton = document.getElementById('registerYes');
  registerYesButton.addEventListener('click', function() {
    // Hide the initial popup overlay
    popupOverlay.style.display = 'none';
    // Show the success popup overlay
    successPopupOverlay.style.display = 'flex';
  });
  successOkButton.addEventListener('click', () => {
  successPopupOverlay.style.display = 'none';
});
</script>-->
</body>