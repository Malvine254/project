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
  
  <meta http-equiv="Content-Encoding" content="gzip">


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
  <!-- Content -->
  <div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Find Your Future Here!</h2>
            <p class="mt-3">We are always looking forward to having the right resources join our growing team. We offer competitive pay and benefits along with a great working environment. Our full-time positions offer employment benefits including paid holidays, paid vacations, annual performance bonuses, and project-driven bonuses.</p>
            <button class="btn default-button-color btn-primary">JOIN OUR TEAM</button>
        </div>
        <div class="col-md-6">
          <img src="images/Careers/careers.png" alt="" class="img-fluid" loading="lazy">
        </div>
    </div>
</div>

<!-- Black Rectangle -->
<div  class="container-fluid black-rectangle mb-5">
  <h4 style="padding-left: 400px; padding-right: 400px;" class="text-center">We employ a wide array of cutting-edge tools and technologies To Create Timeless Design</h4>
  <div class="row">
      <div class="col-md-12">
          <!-- First Row of Icons -->
          <div class="text-center p-5 row ">
            <div class="col">
              <img height="50" width="50" src="images/Careers/css.svg" alt="" class="icon bg-white rounded-circle">
            </div>
            <div class="col">
              <img height="50" width="50" src="images/Careers/linux.svg" alt="" class="icon bg-white rounded-circle">
            </div>
            <div class="col">
              <img height="50" width="50" src="images/Careers/nodejs.svg" alt="" class="icon bg-white rounded-circle">
            </div>
            <div class="col">
              <img height="50" width="50" src="images/Careers/angular.svg" alt="" class="icon bg-white rounded-circle">
            </div>
            <div class="col">
              <img height="50" width="50" src="images/Careers/react.svg" alt="" class="icon bg-white rounded-circle">
            </div>
            <div class="col">
              <img height="50" width="50" src="images/Careers/python.svg" alt="" class="icon bg-white rounded-circle">
            </div>
            <div class="col">
              <img height="50" width="50" src="images/Careers/js.svg" alt="" class="icon bg-white rounded-circle">
            </div>
            <div class="col">
              <img height="50" width="50" src="images/Careers/github.svg" alt="" class="icon bg-white rounded-circle">
            </div>
          </div>

          <!-- Second Row of Icons -->
          <div class="text-center p-5 row">
            <div class="col">
              <img height="50" width="50" src="images/Careers/css.svg" alt="" class="icon bg-white rounded-circle">
            </div>
            <div class="col">
              <img height="50" width="50" src="images/Careers/linux.svg" alt="" class="icon bg-white rounded-circle">
            </div>
            <div class="col">
              <img height="50" width="50" src="images/Careers/nodejs.svg" alt="" class="icon bg-white rounded-circle">
            </div>
            <div class="col">
              <img height="50" width="50" src="images/Careers/angular.svg" alt="" class="icon bg-white rounded-circle">
            </div>
            <div class="col">
              <img height="50" width="50" src="images/Careers/react.svg" alt="" class="icon bg-white rounded-circle">
            </div>
            <div class="col">
              <img height="50" width="50" src="images/Careers/python.svg" alt="" class="icon bg-white rounded-circle">
            </div>
            <div class="col">
              <img height="50" width="50" src="images/Careers/js.svg" alt="" class="icon bg-white rounded-circle">
            </div>
            <div class="col">
              <img height="50" width="50" src="images/Careers/github.svg" alt="" class="icon bg-white rounded-circle">
            </div>
          </div>
      </div>
  </div>
</div>
<div class="container container-fluid content-container">
  <div class="row">
      <!-- First Column -->
      <div class="col-md-6 column">
          <img src="images/Careers/software_engineer.png" alt="" class="img-fluid" loading="lazy">
          <h4 class="mt-3">Software Engineer</h4>
          <p text-left>Fuel Innovation in Web and Mobile App Development. Be part of our dynamic team, crafting the digital future one line of code at a time.</p>
      </div>
      <!-- Second Column -->
      <div class="col-md-6 column">
          <img src="images/Careers/software_engineer.png" alt="" class="img-fluid" loading="lazy">
          <h4 class="mt-3">Data Scientist</h4>
          <p text-left>Transform information into insights, and shape the future through data-driven decisions. Make your mark on the world of analytics with us.</p>
      </div>
  </div>
</div>
<div class="row">
  <!-- Centered Column -->
  <div style="padding-left: 400px; padding-right: 400px;" class="text-center" class="col-md-12 center-column">
      <img src="images/Careers/software_engineer.png" alt="" class="img-fluid" loading="lazy">
      <h4>Data Engineer</h4>
      <p class="text-left ml-5">Be the backbone of our data ecosystem, architecting solutions that power innovation and decision-making.</p>
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
  <!-- Footer -->
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
