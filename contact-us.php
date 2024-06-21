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
   <?php echo displayHeader(); echo displayFloatingButton();?>

  <!-- counter section -->  
  <style>
    .background-image {
      background-image: url('https://images.pexels.com/photos/280193/pexels-photo-280193.jpeg');
      background-size: cover;
      background-position: center;
      background-size: 100vw;
      background-repeat: no-repeat;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 60vh; /* or any height you prefer */
    }
    .font-size{
      font-size: 57px;
    }
  </style>
 <div class="margin-top"></div>  
<div class="container col-md-12">
  <div class="background-image">
    <h1 class="text-center text-light font-size">Contact Us</h1>
  </div>
</div>  
<div class="col-md-12 container mt-1 mb-4 p-4 shadow mt-0" data-aos="fade-left">
  <div class=" mb-3 row">
    <div class="col-md-8  p-5">
      <h1 class="">Get in Touch</h1>
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
    <div class="col-md-4  p-5" style="border: 8px; opacity: 23px; border-radius: 8px;" data-aos="fade-left">
        <h1 class="mb-3">Company Contact</h1>
       <div>
          <h5>Email: <a href="mailto:info@armely.com">info@armely.com</a></h5>
       </div>
        <div>
            <h5>Phone: <a href="tel:+1 972 460 0643">+1 972 460 0643</a></h5>
        </div>
        <hr>
         <h2>Office Locations</h2>
         <div>
            <h5>Dallas, Texas</h5>
            <p>2831 Eldorado Pkwy Suite 103-128 Frisco TX 75033</p>
        </div>
        <hr>
        <div>
            <h5>Nairobi, Kenya</h5>
            <p>Off Thika Superhighway, Juja, Highpoint, Nairobi</p>
        </div>

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
