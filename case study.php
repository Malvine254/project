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
    
  </style>
</head>
<body>
  <!-- preloader -->
  <div id="preloader">
    <div id="loader"></div>
  </div>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-light fixed-top pt-3 pb-3">
   
    <a class="navbar-brand" href="#"><img src="images/logo/logo1.png" alt="" height="27px" loading="lazy"></a>
    <button style="background-color:rgb(47,85,151)" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a  class="nav-link menu-item-color" href="#">SERVICES <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link menu-item-color" href="#">CUSTOMER STORIES</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menu-item-color" href="#">COMPANY</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menu-item-color" href="#">CONTACT US</a>
        </li>
         <li class="nav-item">
          <a class="nav-link menu-item-color" href="#">CAREERS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link menu-item-color" href="#">BLOGS</a>
        </li>
  
      </ul>
      <!-- Search Bar -->
      <form class="form-inline my-2 my-lg-0">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="searchIcon">
          <div class="input-group-append">
            <span class="input-group-text" id="searchIcon"><i class="fas fa-search"></i></span>
          </div>
        </div>
      </form>
      <a id="toggleDarkMode" class="nav-link menu-item-color modes" ><i class="icon fa fa-moon icon"></i></a>
    </div>
  </nav>
  <!-- Content -->


  

  
  
  

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
    <iframe src="https://copilotstudio.microsoft.com/environments/Default-588cadf4-9902-4465-86c0-8bcf04f4f102/bots/crc65_armelyCom/webchat?__version__=2"
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


</body>
</html>
