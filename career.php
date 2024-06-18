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
  
  <meta http-equiv="Content-Encoding" content="gzip">

</head>
<body>
   <!-- Navbar -->
  <?php echo displayHeader(); ?>
  <!-- Content -->
  <div class="margin-top"></div>
  <div class="container mt-5 mb-5 shadow col-md-11 p-4">
    <div class="row">
        <div class="col-md-6">
            <h2>Find Your Future Here!</h2>
            <p class="mt-3">We are always looking forward to having the right resources join our growing team. We offer competitive pay and benefits along with a great working environment. Our full-time positions offer employment benefits including paid holidays, paid vacations, annual performance bonuses, and project-driven bonuses.</p>
            <div class="container mt-3 mb-4 col-md-11">
              <div class="row d-flex justify-content-center align-items-center">
                  <!--<div class="col-md-4">-->
                  <!--  <div class="counter" data-target="30">0</div>-->
                  <!--  <div class="text-center counter-span">Jobs Posted</div>-->
                  <!--</div>-->
                  <!--<div class="col-md-4">-->
                  <!--  <div class="counter" data-target="20"><h1>0</h1></div>-->
                  <!--  <div class="text-center counter-span">Partners</div>-->
                  <!--</div>-->
                  <!--<div class="col-md-4">-->
                  <!--    <div class="counter" data-target="102">0</div>-->
                  <!--    <div class="text-center counter-span">Candidates</div>-->
                  <!--</div>-->
              </div>
            </div>

        </div>
        <div class="col-md-6">
          <img src="images/careers/careers.png" alt="" class="img-fluid" loading="lazy">
        </div>
    </div>
</div>
<div class="container col-md-11 shadow p-4 mb-4 text-muted">
  <div class="text-center">
      <h1>Popular Categories</h1>
      <p>Join us and help disrupt the enterprise market!</p>
    </div>
  <div class="m-5">
    <div class="row">
      <div class="col-md-3">
       <center>
          <i class="fa fa-money-bill-1 fa-3x "></i>
        <p>Accounting / Finance</p>
        <p>(234)</p>
       </center> 
      </div>

      <div class="col-md-3">
       <center>
          <i class="fa fa-graduation-cap fa-3x "></i>
        <p>Education Training</p>
        <p>(345)</p>
       </center>
        
      </div>
      <div class="col-md-3">
       <center>
          <i class="fa fa-heart fa-3x "></i>
        <p>Digital Marketing</p>
        <p>(345)</p>
       </center>
      </div>
      <div class="col-md-3">
       <center>
          <i class="fa fa-earth-americas fa-3x "></i>
        <p>Sales & Marketing</p>
        <p>(045)</p>
       </center>
        
      </div>

       <div class="col-md-3">
       <center>
          <i class="fa fa-earth-americas fa-3x "></i>
        <p>Writing & Translations</p>
        <p>(045)</p>
       </center>
        
      </div>
       <div class="col-md-3">
       <center>
          <i class="fa fa-earth-americas fa-3x "></i>
        <p>Health</p>
        <p>(045)</p>
       </center>
        
      </div>
       <div class="col-md-3">
       <center>
          <i class="fa fa-earth-americas fa-3x "></i>
        <p>Accounting / Finance</p>
        <p>(045)</p>
       </center>
        
      </div>
       <div class="col-md-3">
       <center>
          <i class="fa fa-earth-americas fa-3x "></i>
        <p>Transportation / Logistics</p>
        <p>(045)</p>
       </center>
        
      </div>
    </div>
  </div>
</div> 

<div class="container col-md-11 shadow p-4 text-muted">
  <div class="text-center">
      <h1>Our Job Offers</h1>
      <p>Join us and help disrupt the enterprise market!</p>
    </div>
   <div class="card transparent-card table-responsive">
   <table style="min-width: 600px;" id="displayCareerPosts" class="table border-stripped">

  </table>  
  </div>
 
  </div>
 <?php readMore(); ?>
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.0/lazysizes.min.js" async></script>
  <script src="js/form-actions.js"></script>
  <script src="js/main3.js"></script>
</body>
</html>
