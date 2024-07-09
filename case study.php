<?php include 'php/actions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>armely</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- main csss -->
  <link rel="stylesheet" href="css/style.css">
  <!-- font awesome  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="icon" href="images/logo/logo1.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
  <meta http-equiv="Content-Encoding" content="gzip">
</head>
<body>
 
   <!-- Navbar -->
 <?php echo displayHeader(); echo displayFloatingButton();?>

  <!-- Content -->
  <div class="margin-top"></div>

    <div class="container col-md-11 col-sm-12">
      <div id="carouselExampleCaptions" class="carousel slide pointer-event"  data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
         <img src="images/case-study/case2.png" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100 "  alt="First slide">

          <div class="carousel-caption d-none d-md-block shadow bg-dark rounded" style="margin-bottom: 100px;">
            <h2>Industry: Energy</h2>
            <p>Discover how Denver based Energy Company leveraged
            armely’ s expertise in data, integration, and development to
            standardize, streamline and Integrate OpenInvoice data with
            Internal ERP Systems. </p>
            <a target="_blank" href="case_docs/SageButte.pdf" class="btn btn-outline-light mb-2 mt-2">Read More</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/case-study/case3.png" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100 " width="800" alt="First slide">

          <div class="carousel-caption d-none d-md-block shadow bg-dark rounded"  style="margin-bottom: 100px;">
            <h2>Industry: Real Estate</h2>
            <p>Discover how Casey Family Programs leveraged Armely’s
              expertise on Cognitive services to improve their document
              retrieval and search experience, making it easier and more
              secure to retrieve and interact with their SharePoint
              documents.</p>
              <a target="_blank" href="case_docs/Casey.pdf" class="btn btn-outline-light mb-2 mt-2">Read More</a>
         </div>
        </div>
        <div class="carousel-item">
           <img src="images/case-study/case4.png" class="bd-placeholder-img bd-placeholder-img-lg d-block w-100 " width="800"  alt="First slide">
          <div class="carousel-caption d-none d-md-block shadow bg-dark rounded"  style="margin-bottom: 100px; ">
            <h2>Industry: Health</h2>
            <p>Accurate, high-quality data from test and production fleets is critical to the development of safe automated driving functions. DXC Mobile Ingest Box optimizes that data.Automating data sharing with Health
            Agencies, Insurance Companies,
            Pharmaceuticals and Other Providers
            significantly improves Swope health
            efficiency and accuracy allowing for
            better care coordination, faster
            diagnoses, and more personalized
            treatment plans.</p>
            <a target="_blank" href="case_docs/SwopeHealthAutomate.pdf" class="btn btn-outline-light mb-2 mt-2">Read More</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <div class="d-flex justify-content-between align-items-center mt-4">
      <h2 class="m-1">Case Studies</h2>
     </div>
      <div class="row"> <?php displayIndustryListings(); ?></div>
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

<!-- The Modal -->
<div id="customModal" class="modal-for-share">
   <span class="close">&times;</span>
  <div class="modal-content-for-share ">
   
    <div class="">
  <h2 class="text-dark text-center">Share through social media pages</h2>
  <hr>
  <div class="row justify-content-center mt-4 mb-4">
    <div class=" col-md-2 text-center">
      <a data-social="linkedin" class="fab fa-linkedin text-primary fa-3x shareBtn"></a>
    </div>
    <div class=" col-md-2  text-center">
      <a data-social="twitter" class="fab fa-twitter text-primary fa-3x shareBtn"></a>
    </div>
    <div class=" col-md-2 text-center">
      <a data-social="facebook" class="fab fa-facebook text-primary fa-3x shareBtn"></a>
    </div>
    <div class="  col-md-2 text-center ">
      <a data-social="whatsapp" class="fab fa-whatsapp text-primary fa-3x shareBtn"></a>
    </div>
    <div class="col-md-2 text-center">
      <a data-social="reddit" class="fab fa-reddit text-primary fa-3x shareBtn"></a>
    </div>
  </div>
</div>
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
  <script src="js/form-actions.js"></script>
  <script>
    
  </script>
  <script src="js/main3.js"></script>

  <script>

</script>

</body>
</html>
