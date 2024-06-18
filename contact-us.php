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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
</head>
<body>
  
  <!-- Navbar -->
  <?php echo displayHeader(); ?>

  <!-- counter section -->  
  <div class="margin-top"></div>
<div class="col-md-11 container mt-5 mb-4 p-4" data-aos="fade-left">
  <div class=" mb-3">
    <div class="col-md-12 shadow p-5">
      <h1 class="">Inquiries</h1>
      <p class="subtitle-font">For specific questions complete the form below.</p>
          <form id="contact-form" method="post">
              <div class="form-row">
                <div class="col-md-6 mb-1" data-aos="fade-left">
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
                  <input type="tel" class="form-control edit-input" id="validationServer04" placeholder="Phone Number" required name="phone">
                </div>
                <div class="col-md-12 mb-3">
                  <label for="validationServer05">Message</label>
                  <textarea rows="5" type="text" class="form-control edit-textarea" id="validationServer05" placeholder="Message..." required name="message"></textarea>
                </div>
              </div>
              <button name="submit_form" class="btn btn-primary default-button-color" type="submit">Send Message</button>
            </form>
    </div>
    <div class="col-md-12 mt-5 shadow p-5" style="border: 8px; opacity: 23px; border-radius: 8px;" data-aos="fade-left">
        <h2> Our Location</h2>
        <iframe class="col-md-12" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3339.393990831668!2d-96.88709372452247!3d33.177533073498864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x864c39992307da29%3A0x2c2a76b897ebb224!2s2831%20Eldorado%20Pkwy%20103%20128%2C%20Frisco%2C%20TX%2075033%2C%20USA!5e0!3m2!1sen!2ske!4v1710673206549!5m2!1sen!2ske"
          height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

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
  <?php echo displayFooter(); ?>
<!-- end of Footer -->

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
  <!-- sweet alerts -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.0/lazysizes.min.js" async></script>
  <script src="js/form-actions.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script src="js/main3.js"></script>
  
</script>


</body>
</html>
