<?php include "php/actions.php"; ?>
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
  <?php echo displayHeader() ?>
  <!-- Content -->
  <div class="margin-top"></div>
  <div class="container mt-1 shadow col-md-11 p-5" style="width: 98vw !important;" data-aos="fade-fade">
    <div class="content-container" data-aos="fade-left">
      <div class="row">
          <div class="col-md-5">
              <h1>Empowering Your Tech Journey</h1>
              <p>Our experts provide tailored guidance in areas such as business planning, product development, marketing, financial management, and risk management, ensuring your company's competitiveness and sustainable growth.</p>
          </div>
          <div class="col-md-7" data-aos="fade-right">
              <img src="images/services/services.png" alt="" class="img-fluid" loading="lazy">
          </div>
      </div>
  </div>
  </div>
<section >
  <div class="container py-5 col-md-11 mt-5 p-4 col-sm-12 shadow">
    <div class="row d-flex justify-content-start">
      <div class="col-md-10 col-xl-8">
        <h3 class="fw-bold mb-3">Our Services Lead the Way</h3>
        <p class="mb-4 pb-2 mb-md-3 pb-md-0">
          
        </p>
      </div>
    </div>

    <div class="row">
     <?php displayServicesList(); ?>
   </div>
       
       <div class="container mt-1">
         <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center" id="pagination">
                <li class="page-item disabled" id="prev-page">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <!-- Page numbers will be inserted here by JavaScript -->
                <li class="page-item" id="next-page">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
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
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.0/lazysizes.min.js" async></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script src="js/page_stylings.js"></script>
  <script src="js/main3.js"></script>


</body>
</html>
