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
   
  <!-- Content -->
  <div class="container mt-3">
    <!-- title text -->
    <h1 class="text-center typing-text">Your Trusted Source<br>
      For Digital Excellence</h1>
      <div class="mt-5">
        <h6 class="text-center">BRINGING YOUR VISION TO LIFE 
          <i class="fa fa-angle-right text-light" style="background-color:
           rgb(47,85,151); padding: 5px;"></i></h6>
      </div>
    <!-- playing video at the hompage here -->
    <video src="https://res.cloudinary.com/timothymugo2323/video/upload/f_auto:video,q_auto/v1/armely/mrngrcv3n9yeloisubz7" 
    preload="auto" autoplay loop muted style="width: 100%; height: 100%;"></video>  
  
  </div>
  <!-- counter section -->
<div class="container mt-3 mb-4">
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
 <?php include "display_services-company-floating-contents.php"; ?>

<!-- end of services floating screen and company floating screen -->

  <!-- see our works section -->
  <section>
    <div class="container mb-5">
      <div class="row">
        <h3 class="mb-3">See our work</h3>
        <hr>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-12 col-md-4">
                  <img src="images/services/service1.jpg" class="d-block img-fluid" alt="Service 1">
                  <div class="mt-2">
                    <h5>Executive Reports Development</h5>
                    <p class="card-text">Transforming data into actionable insights, 
                      our Executive Reports Development ensures informed decision-making at every level of your organization.</p>
                  </div>
                </div>
                <div class="col-md-4 d-none d-md-block">
                  <img src="images/services/service2.jpg" class="d-block img-fluid" alt="Service 1">
                  <div class="mt-2">
                    <h5>Sybase to SQL Server Migration</h5>
                    <p class="card-text">Seamlessly transition your data ecosystem with precision and 
                      efficiency through Sybase to SQL Server migration, unlocking enhanced 
                      performance and scalability.</p>
                  </div>
                </div>
                <div class="col-md-4 d-none d-md-block">
                  <img src="images/services/service3.jpg" class="d-block img-fluid" alt="Service 1">
                  <div class="mt-2">
                    <h5>Healthcare Productivity Reports</h5>
                    <p class="card-text">Unlock operational efficiency 
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
                    <p class="card-text">Seamlessly transition your data ecosystem with precision and 
                      efficiency through Sybase to SQL Server migration, unlocking enhanced 
                      performance and scalability.</p>
                  </div>
                </div>
                <div class="col-md-4 d-none d-md-block">
                  <img src="images/services/service5.jpg" class="d-block img-fluid" alt="Service 1">
                  <div class="mt-2">
                    <h5>Managed Services</h5>
                    <p class="card-text">Optimize your business efficiency with our Managed Services,
                       ensuring seamless operations and peace of mind.</p>
                  </div>
                </div>
                <div class="col-md-4 d-none d-md-block">
                  <img src="images/services/service4.jpg" class="d-block img-fluid" alt="Service 1">
                  <div class="mt-2">
                    <h5>Custom Application development</h5>
                    <p class="card-text">Empower your business with tailor-made solutions through our 
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

  </style>

  <!-- partners section -->
  <div class="container mt-5 mb-5">
    <p class="partner-subtitle mb-3">Your Reliable Hub for Digital Excellence, Committed to Caring, Building Relationships, 
      Backed by Industry Expertise and Recognized for Award-Winning Achievements.</p>
    <div class="row align-items-center justify-content-center">
        <div class="col-md-2 p-4 col-sm-4 d-flex justify-content-center">
            <a href=""><img class="svg-img" src="https://upload.wikimedia.org/wikipedia/commons/9/97/Talend_logo.svg" alt=""></a>
        </div>
        <div class="col-md-2 p-4 col-sm-4 d-flex justify-content-center">
            <a href=""><img class="svg-img" src="images/partners/us-cloud-logo.webp" alt=""></a>
        </div>
        <div class="col-md-2 p-4 col-sm-4 d-flex justify-content-center">
            <a href=""><img class="svg-img" src="images/partners/ms.svg" alt=""></a>
        </div>
        <div class="col-md-2 p-4 col-sm-4 d-flex justify-content-center">
            <a href=""><img class="svg-img" src="images/partners/SNX_BIG.D (1).svg" alt=""></a>
        </div>
        <div class="col-md-2 p-4 col-sm-4 d-flex justify-content-center">
            <a href=""><img class="svg-img" src="images/partners/google_cloud-ar21.svg" alt=""></a>
        </div>
        <div class="col-md-2 p-4 col-sm-4 d-flex justify-content-center">
            <a href=""><img class="svg-img" src="images/partners/amazon_aws-ar21.svg" alt=""></a>
        </div>
    </div>
</div>

</div>

  <!-- connect with experts -->
  <div class="container"><br>
    <h3 class="mb-2">Our recent blog posts</h3>
  
    <div class="row">
      <div class="col-md-4">
        <div class="card bg-primary mb-3 transparent-card">
          <img class="card-img-top" src="images/services/service1.jpg" alt="Card image cap">
          <div class="card-body">
              <h6 class="text-muted">News Needs to Meet Its Audiences Where They Are</h6>
             <p style="font-size: 14px;" class="mt-0 text-sm">Dave Rogers in News
                <br><span class="text-muted">Jun 14 • 3 min read</span>
                 <a href="" class="btn btn-outline-primary ml-2">Read more</a>
              </p>
          </div>
      </div>
      
      </div>

      <div  class="col-md-4">
        <div class="card bg-primary mb-3 transparent-card  ">
          <img class="card-img-top" src="images/services/service1.jpg" alt="Card image cap">
          <div class="card-body">
              <h6 class="text-muted">News Needs to Meet Its Audiences Where They Are</h6>
             <p style="font-size: 14px;" class="mt-0 text-sm">Dave Rogers in News
                <br><span class="text-muted">Jun 14 • 3 min read</span>
                 <a href="" class="btn btn-outline-primary ml-2">Read more</a>
              </p>
          </div>
      </div>
      
      </div>

      <div class="col-md-4">
        <div class="card bg-primary mb-3 transparent-card  ">
          <img class="card-img-top" src="images/services/service1.jpg" alt="Card image cap">
          <div class="card-body">
              <h6 class="text-muted">News Needs to Meet Its Audiences Where They Are</h6>
             <p style="font-size: 14px;" class="mt-0 text-sm">Dave Rogers in News
                <br><span class="text-muted">Jun 14 • 3 min read</span>
                 <a href="" class="btn btn-outline-primary ml-2">Read more</a>
              </p>
          </div>
      </div>
      
      </div>
      </div>
    </div>
  </div>

  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class=" card-back">
          <div class="card-body">
            <h3 class="card-title text-center mb-4">Connect with our experts?</h3>
            <form>
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
