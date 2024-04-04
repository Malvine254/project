<?php include 'php/actions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>armely</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- main csss -->
  <link rel="stylesheet" href="css/style.css">
  <!-- font awesome  -->
  <link rel="stylesheet" href="vendor/font-awesome/css/all.css"> 
  <link rel="icon" href="images/logo/logo1.png" type="image/x-icon">


  <style>
    /* Add your custom styles here */
    body {
      padding-top: 56px; /* Adjust based on the height of your fixed navbar */
    }

    footer {
      padding: 0PX;
      width: 100% !important;
    }
    
  </style>
</head>
<body>
  <!-- preloader -->
  <div id="preloader">
    <div id="loader"></div>
  </div>
  <!-- Navbar -->
  <?php include 'php/header.php'; ?>

  <!-- start of services floating screen and company floating screen -->
   <?php include "display_services-company-floating-contents.php"; ?>

  <!-- end of services floating screen and company floating screen -->
  <!-- counter section -->
<div class="col-md-10 container mt-3 mb-4 shadow p-4">
    <h1 class="big-font">Inquiries</h1>
    <h5 class="subtitle-font">For specific questions complete the form below.</h5>
  <div class="row mb-3">
    <div class="col-md-6">
        <!-- <form>
            <div class="form-row">
              <div class="col-md-6 mb-1">
                <label for="validationServer01">Name</label>
                <input type="text" class="form-control  is-valid edit-input  edit-input-valid" id="validationServer01" placeholder="First name" value="Mark" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
              <div class="col-md-6 mb-1">
                <label for="validationServer02">Email</label>
                <input type="email" class="form-control is-valid edit-input  edit-input-valid" id="validationServer02" placeholder="Email" value="Otto@gmail.com" required>
                <div class="valid-feedback">
                  Looks good!
                </div>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationServer03">Organization Name</label>
                <input type="text" class="form-control is-invalid edit-input" id="validationServer03" placeholder="Organization Name" required>
                <div class="invalid-feedback">
                  Please provide a valid Organization Name.
                </div>
              </div>
              <div class="col-md-6 mb-1">
                <label for="validationServer04">Phone Number</label>
                <input type="text" class="form-control is-invalid edit-input" id="validationServer04" placeholder="Phone Number" required>
                <div class="invalid-feedback">
                  Please provide a valid Phone Number.
                </div>
              </div>
              <div class="col-md-12 mb-3">
                <label for="validationServer05">Message</label>
                <textarea rows="5" type="text" class="form-control is-invalid edit-textarea" id="validationServer05" placeholder="Message..." required></textarea>
                <div class="invalid-feedback">
                  Please provide a valid Message.
                </div>
              </div>
            </div>
            <button class="btn btn-primary default-button-color" type="submit">Send Message</button>
          </form>   -->

          <form method="post">
              <div class="form-row">
                <div class="col-md-6 mb-1">
                  <label for="validationServer01">Name</label>
                  <input type="text" class="form-control edit-input " id="validationServer01" placeholder="First name" name="name" required>
                  
                </div>
                <div class="col-md-6 mb-1">
                  <label for="validationServer02">Email</label>
                  <input type="email" class="form-control edit-input" id="validationServer02" placeholder="Email" required name="email">
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationServer03">Organization Name</label>
                  <input type="text" class="form-control edit-input" id="validationServer03" placeholder="Organization Name" required name="organization">
                </div>
                <div class="col-md-6 mb-1">
                  <label for="validationServer04">Phone Number</label>
                  <input type="text" class="form-control edit-input" id="validationServer04" placeholder="Phone Number" required name="phone">
                </div>
                <div class="col-md-12 mb-3">
                  <label for="validationServer05">Message</label>
                  <textarea rows="5" type="text" class="form-control edit-textarea" id="validationServer05" placeholder="Message..." required name="message"></textarea>
                </div>
              </div>
              <button name="submit_form" class="btn btn-primary default-button-color" type="submit">Send Message</button>
            </form>
    </div>
    <div class="col-md-6" style="border: 8px; opacity: 23px; border-radius: 8px;">
        <h5> Our Location</h5>
        <iframe class="col-md-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3339.393990831668!2d-96.88709372452247!3d33.177533073498864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c39992307da29%3A0x2c2a76b897ebb224!2s2831%20Eldorado%20Pkwy%20103%20128%2C%20Frisco%2C%20TX%2075033%2C%20USA!5e0!3m2!1sen!2ske!4v1710673206549!5m2!1sen!2ske"
          height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </div>
    
  </div>
</div>

   <!-- Floating Action Button -->
   <div class="floating-btn">
    <button id="myBtn"  style="border-radius: 50%; height: 70px; width: 70px; background-color: rgb(47,85,151);"  type="button" class="btn btn-primary btn-lg">
      <i class="fas fa-comments"></i>
    </button>
  </div>
  <!-- scroll bar -->
  <button  id="scrollToTopBtn" class="btn btn-primary rounded-circle" style="display:none; background: rgb(47,85,151);">
    <i style="font-size: 2em;" class="fa-solid fa-arrow-up"></i>
</button>

<!-- start of Footer -->
  <?php include 'php/footer.php'; ?>
<!-- end of Footer -->

<style>
  .modal-right {
  position: absolute;
  top: 50% ;
  left: 0 ;
  transform: translate(0, -50%) ;
}
</style>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content col-lg-4">
    <span class="close">&times;</span>
    <iframe src="https://copilotstudio.microsoft.com/environments/Default-588cadf4-9902-4465-86c0-8bcf04f4f102/bots/crc65_armelyCom/webchat?__version__=2"
    frameborder="0" style="width: 100%; height: 100%;"></iframe>  
      </div>

</div>

  <!--Bootrap and jQuery Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var currentYear = new Date().getFullYear();
      var copyrightElement = document.getElementById('copyright');
      copyrightElement.innerHTML = '&copy; ' + currentYear + ' Your Company Name. All rights reserved.';
    });
  </script>
  <script src="js/main3.js"></script>
  <script>
    window.addEventListener('load', function() {
        // Get the element to animate
        var typingText = document.querySelector('.typing-text');
        // Set the opacity to 1 to reveal the text
        typingText.style.opacity = 1;
        // Start the typing animation
        typingText.style.animation = 'typing 5s steps(50, end) forwards, fadeIn 2s ease-in-out';
        
    });
</script>


</body>
</html>
