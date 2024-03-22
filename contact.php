<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Responsive Menu and Footer</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- main csss -->
  <link rel="stylesheet" href="css/style.css">
  <!-- font awesome  -->
  <link rel="stylesheet" href="vendor/font-awesome/css/all.css"> 
  <script src="vendor/jquery/jquery.min.js"></script>  
  <script src="js/main1.js"></script>

  <style>
    /* Add your custom styles here */
    body {
      padding-top: 56px; /* Adjust based on the height of your fixed navbar */
    }

    footer {
      padding: 0PX;
      width: 100% !important;
    }
    .contact-container {
        background-color: #000;
        color: #fff;
        margin-top: 20px;
        margin-right: 0px;
        margin-left: 0px;
        width: 100%;
        padding: 50px;
        height: 50vh; /* Height set to a quarter of the viewport height */
    }
    
  </style>
</head>
<body>
  <!-- preloader -->
  <div id="preloader">
    <div id="loader"></div>
  </div>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top pt-3 pb-3 ">
   
    <a class="navbar-brand link" href="index"><h1 class="armely-logo-font defaut-color logo-size h1"><strong>armely</strong></h1></a>
    <button style="background-color:rgb(47,85,151)" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center text-center" id="navbarNav">
      <ul class="navbar-nav mx-auto ">
        <li class="nav-item active">
          <a  class="nav-link text-dark h5 link" href="services">SERVICES <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark h5 link" href="customer-stories">CUSTOMER STORIES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark h5 link" href="company">COMPANY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark h5 link" href="contact-us" target="_parent" rel="noopener noreferrer">CONTACT US</a>
        </li>
         <li class="nav-item">
          <a class="nav-link text-dark h5 link" href="career">CAREERS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark h5 link" href="blog">BLOGS</a>
        </li>
  
      </ul>
      <!-- Search Bar -->
     
      <form class="form-inline my-2 my-lg-0">
        <div class="input-group" style="width: 350px;">
            <input class="form-control py-2 border-right-0 border col-md-12 bg-transparent" type="search" placeholder="Search..." id="example-search-input" style="outline: none;">
            <span class="input-group-append">
                <button class="btn btn-outline-secondary border-left-0 border" type="button" style="outline: none;">
                    <i class="fa fa-search"></i>
                </button>
            </span>
        </div>
    </form>
    
    
      <a id="toggleDarkMode" class="nav-link link" ><i class="icon fa fa-moon icon"></i></a>
    </div>
  </nav><br><br>
  <!-- Content -->
  <div class="container mt-5 mb-5">
    <div class="container">
            <form>
                <div class="row">
                <div class="col-md-6">
                    <h1>Inquiries</h1>
                    <h2>For specific questions complete the form below.</h2>
                    <div class="form-group ">
                        <label for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your name" required>
                      </div>
                      <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                      </div>
                      <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control" id="message" rows="5" placeholder="Enter your message" required></textarea>
                      </div>
                      <button type="submit" class="default-button-color">Submit</button>
                    </div>
                      <div class="mt-5 col-md-6">
                        <h2>Location</h2>
                        <!-- Google Maps Embed API -->
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.4096182217284!2d36.82194681426153!3d-1.2869753990642092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1bb0ef16e90f%3A0x337bf84d4a5540b0!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2sus!4v1646994680361!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                      
                </div>
                <div class="container-fluid contact-container">
                  <div class="row">
                      <div class="col-sm-4">
                          <h2>Call Us</h2>
                          <p>+1 800 123 4567</p>
                      </div>
                      <div class="col-sm-4">
                          <h2>Email Us</h2>
                          <p>hello@armely.com</p>
                      </div>
                      <div class="col-sm-4">
                          <h2>Find Us</h2>
                          <p>2831 Eldorado Pkwy Suite 103-128<br>Friso TX 75033</p>
                      </div>
                  </div>
              </div>
              
              <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
              <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
              <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
              
              </div>
                   
            </div>
              </form>

            
      
      </div>
  </div>
  <!-- counter section -->




  

  
  
  

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
  <footer style="background-color: rgb(47,85,151);" class="text-center col-md-12">
    <div class=" mt-5">
      <div class="row text-light ">
        <div class="col-md-2">
          <h1 class="mt-3 armely-logo-font">armely</h1>
         
        </div>
        <div class="col-md-2">
          <h5 class="mt-3">ABOUT</h5>
          <p>Case studies</p>
          <p>Job Board</p>
        </div>
        <div class="col-md-3">
          <h5 class="mt-3">SERVICES</h5>
          <p >Advisory Services <br>Business intelligence <br>Data Services
          <br>Managed Services <br>
           Application Development <br>
           Mentoring</p>
        </div>
        <div class="col-md-2">
          <h5 class="mt-3">CONTACT US</h5>
          <a href="" class="text-light">
            <p>+1 972 460 0643</p>
            </a>
          <h6>ADDRESS</h6>
          <p>2831 Eldorado
            <br>Pkwy Suite 103-128
            <br>Friso TX 75033</p>
        </div>

        <div class="col-md-2">
          <h5 class="mt-3">FOLLOW US</h5>
           <div style="align-items: start;" class="pt-3">
              <a href=""><i class="fab fa-facebook text-light h3"></i></a>
              <a href=""><i class="fab fa-linkedin text-light h3"></i></a>
              <a href=""><i class="fab fa-x-twitter text-light h3"></i></a>
              <a href=""><i class="fab fa-github text-light h3"></i></a>
              <a href=""><i class="fab fa-youtube text-light h3"></i></a>
            </div>
        
        
        </div>
      </div>
    </div>
   
  </footer>
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
    <iframe id="lazy-loaded-iframe" src="https://copilotstudio.microsoft.com/environments/Default-588cadf4-9902-4465-86c0-8bcf04f4f102/bots/crc65_armelyCom/webchat?__version__=2"
    frameborder="0" style="width: 100%; height: 100%;"></iframe>  
      </div>

</div>

  <!--Bootrap and jQuery Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

  <script src="js/main.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
        var lazyIframe = document.getElementById('lazy-loaded-iframe');
        if ('IntersectionObserver' in window) {
            var lazyIframeObserver = new IntersectionObserver(function(entries, observer) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        lazyIframe.src = lazyIframe.dataset.src;
                        lazyIframeObserver.unobserve(lazyIframe);
                    }
                });
            });
            lazyIframeObserver.observe(lazyIframe);
        } else {
            // Fallback for browsers that do not support IntersectionObserver
            lazyIframe.src = lazyIframe.dataset.src;
        }
    });
    </script>


</body>
</html>
