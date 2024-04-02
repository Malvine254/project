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
  <!-- Content -->
  <div class="container mt-5 col-md-10">
    <div class="content-container">
      <div class="row">
          <div class="col-md-5 text-muted">
              <h1 class="mt-5">Empowering Your Tech Journey</h1>
              <p>Our experts provide tailored guidance in areas such as business planning, product development, marketing, financial management, and risk management, ensuring your company's competitiveness and sustainable growth.</p>
          </div>
          <div class="col-md-7">
              <img src="images/services/services_main.png" alt="" class="img-fluid">
          </div>
      </div>
  </div>
  </div>

  <div class="container content-container col-md-10">
    <h2 >Our Services Lead the Way</h2>
    <div class="row">
        <div class="col-md-4">
           <a href="advisory-services">
              <div class="service-card text-muted">
                <img src="images/services/advisory_services.png" alt="" class="img-fluid">
                <h5 class="m-1">Advisory Services</h5>
                <p>Get expert guidance in planning, development, marketing, finance, and risk management for sustainable growth.</p>
            </div>
           </a>
        </div>
        <div class="col-md-4">
         <a href="data">
            <div class="service-card text-muted">
              <img src="images/services/business_intelligence.png" alt="" class="img-fluid">
              <h5 class="m-1">Data</h5>
              <p>Harness the power of data with performance management, data analysis, modeling, storage, and visualization services.</p>
          </div>
         </a>
        </div>
        <div class="col-md-4">
           <a href="ai">
              <div class="service-card text-muted">
                <img src="images/services/data_services.png" alt="" class="img-fluid">
                <h5 class="m-1">Artificial Intelligence</h5>
                <p>Harness the potential of AI to automate processes, enhance productivity, and uncover patterns that drive innovation and efficiency.</p>
            </div>
           </a>
        </div>
    </div>
  <!-- second row -->

    <!-- <h2 class="text-center mb-4">Our Services</h2> -->
    <div class="row mt-5">
        <div class="col-md-4">
           <a href="managed-services">
              <div class="service-card text-muted">
                <img src="images/services/managed_services.png" alt="" class="img-fluid">
                <h5 class="m-1">Managed Services</h5>
                <p>Enhance your technology infrastructure with supportability reviews, root cause analysis, coordinated service delivery and technology.</p>
            </div>
           </a>
        </div>
        <div class="col-md-4">
           <a href="">
              <div class="service-card text-muted">
                <img src="images/services/web_development.png" alt="" class="img-fluid">
                <h5 class="m-1">Enterprise Applications</h5>
                <p>Implement customized software solutions tailored to your business requirements, optimizing workflows and driving productivity across your organization.</p>
            </div>
           </a>
        </div>
        <div class="col-md-4">
            <a href="cloud">
              <div class="service-card text-muted">
                <img src="images/services/mentoring.png" alt="" class="img-fluid">
                <h5 class="m-1">Cloud</h5>
                <p>Embrace the scalability, flexibility, and cost-efficiency of cloud computing, empowering your business to innovate and grow without infrastructure constraints.</p>
            </div>
            </a>
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
