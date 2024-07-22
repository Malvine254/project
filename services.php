<?php include "php/actions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>armely</title>
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"><link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- font awesome  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="icon" href="images/logo/logo1.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.css">
  <!-- main styles -->
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lobster&family=Dancing+Script&family=Cinzel:wght@400;700&family=Great+Vibes&family=Roboto+Slab:wght@400;700&family=Sacramento&family=Merriweather:wght@400;700&family=PT+Serif:wght@400;700&family=Zilla+Slab:wght@400;700&family=Poppins:wght@400;600&family=Lato:wght@100;300;400;700;900&display=swap">
</head>
  
</head>
<body>
   
  <!-- Navbar -->
   <?php echo displayHeader(); echo displayFloatingButton();?>
  <!-- Content -->
  <div class="container mt-1 shadow col-md-11 mt-1 p-5" style="width: 98vw !important;">
    <div class="content-container">
      <div class="row">
          <div class="col-md-5  col-sm-12">
              <h1>Empowering Your Tech Journey</h1>
              <p>Our experts provide tailored guidance in areas such as business planning, product development, marketing, financial management, and risk management, ensuring your company's competitiveness and sustainable growth.</p>
          </div>
          <div class="col-md-7" >
              <img  src="images/services/services.png" alt="" class="img-fluid" loading="lazy">
          </div>
      </div>
  </div>
  </div>
<section >
  <div class="container py-5 col-md-11 mt-2 p-4 col-sm-12 shadow">
    <div class="row d-flex justify-content-start">
      <div class=" col-xl-12">
        <h3 class="fw-bold mb-3">Our Services Lead the Way</h3>
        <hr>
        <p class="mb-4 pb-2 mb-md-3 pb-md-0">
          
        </p>
      </div>
    </div>

    <div class="row">
     <?php displayServicesList(); ?>
   </div>
       
  </div>
</section>
  
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
  <script src="js/jquery-3.3.1.min.js"></script>

  <!-- sweet alerts -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.0/lazysizes.min.js" async></script>
  <script src="js/form-actions.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  
   <script src="js/jquery.sticky.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- <script src="js/nav.js"></script> -->
  <script src="js/main3.js"></script>

  <script src="js/form-actions.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/main3.js"></script>


</body>
</html>
