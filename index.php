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
    @font-face {
    font-family: myFirstFont;
    src: url('logo-font/font.ttf');
    }
    
  </style>

</head>
<body>
  
  <!-- Navbar -->
    <?php echo displayHeader(); ?>

   
  <!-- Content -->
  <!-- <div class="container mt-3 mb-3"> -->
    <!-- title text -->
   <!--  <h1 class="text-center typing-text text-muted">Your Trusted Source<br>
      For Digital Excellence</h1>
      
         <div class="mt-3">
           <h6 class="text-center">BEYOND IMAGINATION 
          <i class="fa fa-angle-right text-light" style="background-color:
           rgb(47,85,151); padding: 5px;"></i></h6>
      </div> -->
    <!-- playing video at the hompage here -->
   <!--  <video src="videos/video1.mp4" 
    preload="auto" autoplay loop muted style="width: 100%; height: 100%;   overflow: hidden;border-radius: 10px; box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);"></video>   -->
  
  <!-- </div> -->

<div class="container col-md-11 mt-4" id="video-background">
  <video id='vid' autoplay loop muted style="opacity: 90%;">
    <source src="videos/vid1.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  <div id="video-caption">
    <h1 class="text-center text-light pb-4">
    <span class="d-none d-lg-inline typing-text">Your Trusted Source<br> For Digital Excellence</span>
    <span class="d-lg-none">Your Trusted Source<br>For Digital Excellence</span>
    </h1>
    <div class="mt-3">
        <h5 class="text-center">BEYOND IMAGINATION 
        <i class="fa fa-angle-right text-light" style="background-color:
         rgb(47,85,151); padding: 5px;"></i></h5>
    </div>
    <a href="services" class="custom-btn">LEARN MORE</a>
  </div>
</div>

  <!-- counter section -->
<div class="container mt-3 mb-4 col-md-11">
  <div class="row d-flex justify-content-center align-items-center">
      <div class="col-md-4">
        <div class="counter plus" data-target="500">0</div>
        <div class="text-center counter-span">Projects Completed</div>
      </div>
      <div class="col-md-4">
        <div class="counter percent" data-target="99"><h1>0</h1></div>
        <div class="text-center counter-span">Customer Satisfaction</div>
      </div>
      <div class="col-md-4">
          <div class="counter plus" data-target="300">0</div>
          <div class="text-center counter-span">Community Commitment Hours</div>
      </div>
  </div>
</div>
<!-- start of services floating screen and company floating screen -->
 <?php echo displayFloatingButton(); ?>

<!-- end of services floating screen and company floating screen -->

  <!-- see our works section -->
  <section>
    <div class="container mb-5 col-md-11">
      <div class="row">
        <h3 class="mb-3">See our work</h3>
        <hr>

       <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-12 col-md-4">
                  <img style="min-height: 300px;" src="images/case-study/3.jpg" class="d-block img-fluid" alt="Service 1">
                  <div class="mt-2">
                    <h5>Sage Butte Energy Strategic Shift</h5>
                    <p class="card-text textContent">Discover how Denver based Energy Company leveraged armely’ s expertise in data, integration, and development to standardize, streamline and Integrate OpenInvoice data with Internal ERP Systemsn.</p>
                  </div>
                </div>
                <div class="col-md-4 d-none d-md-block">
                  <img src="images/services/service2.jpg" class="d-block img-fluid" alt="Service 1">
                  <div class="mt-2">
                    <h5>Sybase to SQL Server Migration</h5>
                    <p class="card-text textContent">Seamlessly transition your data ecosystem with precision and 
                      efficiency through Sybase to SQL Server migration, unlocking enhanced 
                      performance and scalability.</p>
                  </div>
                </div>
                <div class="col-md-4 d-none d-md-block">
                  <img src="images/services/service3.jpg" class="d-block img-fluid" alt="Service 1">
                  <div class="mt-2">
                    <h5>Healthcare Productivity Reports</h5>
                    <p class="card-text textContent">Unlock operational efficiency 
                      and elevate healthcare outcomes with our cutting-edge Healthcare Productivity Reports.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Add more carousel-items here if needed -->
            <div class="carousel-item">
              <div class="row">
                <div class="col-12 col-md-4">
                  <img src="images/services/service2.jpg" class="d-block img-fluid" alt="Service 1">
                  <div class="mt-2">
                    <h5>Sybase to SQL Server Migration</h5>
                    <p class="card-text textContent">Seamlessly transition your data ecosystem with precision and 
                      efficiency through Sybase to SQL Server migration, unlocking enhanced 
                      performance and scalability.</p>
                  </div>
                </div>
                <div class="col-md-4 d-none d-md-block">
                  <img src="images/services/service5.jpg" class="d-block img-fluid" alt="Service 1">
                  <div class="mt-2">
                    <h5>Managed Services</h5>
                    <p class="card-text textContent">Optimize your business efficiency with our Managed Services,
                       ensuring seamless operations and peace of mind.</p>
                  </div>
                </div>
                <div class="col-md-4 d-none d-md-block">
                  <img src="images/services/service4.jpg" class="d-block img-fluid" alt="Service 1">
                  <div class="mt-2">
                    <h5>Custom Application development</h5>
                    <p class="card-text textContent">Empower your business with tailor-made solutions through our 
                      expert Custom Application Development services.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Add more carousel-items here if needed -->
          </div>
          <!-- Previous and Next buttons -->
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
    
  </section>
  <style>
    .svg-img {
    width: 150px; /* Set the desired width */
    height: auto; /* Maintain aspect ratio */
}
.marquee-container {
  overflow: hidden;
}

.marquee-content {
  display: flex;
  animation: marquee-scroll 30s linear infinite;
}

@keyframes marquee-scroll {
  0% {
    transform: translateX(0);
  }
  100% {
    transform: translateX(-100%);
  }
}

  </style>

  <!-- partners section -->
  <div class="container mt-5 mb-5 col-md-11">
    <p class="partner-subtitle mb-3">Your Reliable Hub for Digital Excellence, Committed to Caring, Building Relationships, 
      Backed by Industry Expertise and Recognized for Award-Winning Achievements.</p>
   <div class="row align-items-center justify-content-center">
    <div class="col-md-12 p-4 col-sm-4 d-flex justify-content-center">
        <div class="marquee-container">
        <div class="marquee-content">
          <a href="https://www.talend.com/" class="ml-5"><img class="svg-img" src="https://upload.wikimedia.org/wikipedia/commons/9/97/Talend_logo.svg" alt=""></a>
          <a href="https://www.uscloud.com/" class="ml-5"><img class="svg-img" src="images/partners/us-cloud-logo.webp" alt=""></a>
          <a href="https://www.microsoft.com/en-us/" class="ml-5"><img class="svg-img" src="images/partners/ms.svg" alt=""></a>
          <a href="https://www.tdsynnex.com/na/us/" class="ml-5"><img class="svg-img" src="images/partners/SNX_BIG.D (1).svg" alt=""></a>
          <a href="https://cloud.google.com/" class="ml-5"><img class="svg-img" src="images/partners/google_cloud-ar21.svg" alt=""></a>
          <a href="https://aws.amazon.com/" class="ml-5"><img class="svg-img" src="images/partners/amazon_aws-ar21.svg" alt=""></a>
          <a href="https://www.snowflake.com/en/" class="ml-5"><img class="svg-img" src="images/partners/snowflake.png" alt=""></a>

          <a href="https://www.talend.com/" class="ml-5"><img class="svg-img" src="https://upload.wikimedia.org/wikipedia/commons/9/97/Talend_logo.svg" alt=""></a>
          <a href="https://www.uscloud.com/" class="ml-5"><img class="svg-img" src="images/partners/us-cloud-logo.webp" alt=""></a>
          <a href="https://www.microsoft.com/en-us/" class="ml-5"><img class="svg-img" src="images/partners/ms.svg" alt=""></a>
          <a href="https://www.tdsynnex.com/na/us/" class="ml-5"><img class="svg-img" src="images/partners/SNX_BIG.D (1).svg" alt=""></a>
          <a href="https://cloud.google.com/" class="ml-5"><img class="svg-img" src="images/partners/google_cloud-ar21.svg" alt=""></a>
          <a href="https://aws.amazon.com/" class="ml-5"><img class="svg-img" src="images/partners/amazon_aws-ar21.svg" alt=""></a>
          <a href="https://www.snowflake.com/en/" class="ml-5"><img class="svg-img" src="images/partners/snowflake.png" alt=""></a>
        </div>
      </div>
    </div>
</div>

   
</div>

</div>

  <!-- connect with experts -->
  <div class="container col-md-11"><br>
    <h3 class="mb-2">Our recent blog posts</h3>
  
    <div class="row">
     <?php displayRecentBlogs(); ?>
      
    </div>
    </div>
  </div>

  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class=" card-back">
          <div class="card-body">
            <h3 class="card-title text-center mb-4">Connect with our experts?</h3>
            <form id="contact-form" method="post">
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

<!-- Advert Modal -->
<div id="snackbar" class="snackbar">
    <button class="btn-close" aria-label="Close">&times;</button>
    <div class="text-center">
        <h5 class="mb-3">SQL Server 2014 End-of-Life!</h5>
        <p>We are 64 days away from the end of support (EOS) for SQL Server 2014. On July 9th, 2024, Microsoft will stop the mainstream support of SQL Server 2014. Don’t wait until it’s too late to secure your data and maintain compliancy.</p>
        <a href="sql" class="btn btn-success default-button-color">Contact Us</a>
    </div>
</div>
  
<!-- start of Footer -->
  <?php  echo displayFooter(); ?>
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
  <script>

    $(document).ready(function(){
 // Get the element to animate
      var typingText = document.querySelector('.typing-text');
      // Set the opacity to 1 to reveal the text
      typingText.style.opacity = 1;
      // Start the typing animation
      typingText.style.animation = 'typing 3s steps(10, end) forwards, fadeIn 2s ease-in-out';
      
})

  </script>
  <script src="js/main3.js"></script>


</body>
</html>
