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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
</head>
<body>
  
  <!-- Navbar -->
   <?php echo displayHeader(); echo displayFloatingButton();?>
  
  <!-- Content -->

  <div class="margin-top"></div>
  <div class="container mt-5 col-md-11">
  <button style='background-color:rgb(47,85,151); ' class="btn btn-primary btn-block d-md-none mb-3" type="button" data-toggle="collapse" data-target="#tabsMenu" aria-expanded="false" aria-controls="tabsMenu"><i class="fa fa-angle-left"></i>
    CLICK FOR MORE OPTIONS
  </button>
  <div class="collapse d-md-block" id="tabsMenu">
    <ul class="nav nav-tabs" id="myTab" role="tablist" style="background: none !important;">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Healthcare</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Energy</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="higher-tab" data-toggle="tab" href="#higher" role="tab" aria-controls="higher" aria-selected="false">Higher Education</a>
      </li>
       <li class="nav-item" role="presentation">
        <a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="false">Education</a>
      </li>
       <li class="nav-item" role="presentation">
        <a class="nav-link" id="government-tab" data-toggle="tab" href="#government" role="tab" aria-controls="government" aria-selected="false">Local Government</a>
      </li>
       <li class="nav-item" role="presentation">
        <a class="nav-link" id="marketing-tab" data-toggle="tab" href="#marketing" role="tab" aria-controls="contact" aria-selected="false">Marketing</a>
      </li>
    </ul>
  </div>

  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <p>Healthcare content goes here.</p>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
      <p>Energy content goes here.</p>
    </div>
    <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
      <p>Education content goes here.</p>
    </div>
    <div class="tab-pane fade" id="energy" role="tabpanel" aria-labelledby="energy-tab">
      <p>Energy content goes here.</p>
    </div>
    <div class="tab-pane fade" id="government" role="tabpanel" aria-labelledby="government-tab">
      <p>Government Education content goes here.</p>
    </div>
    <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
      <p>Marketing Education content goes here.</p>
    </div>
    <div class="tab-pane fade" id="higher" role="tabpanel" aria-labelledby="higher-tab">
      <p>Higher Education content goes here.</p>
    </div>
  </div>
</div>











  <div class="container col-md-11 mt-5 shadow p-5" data-aos="fade-up">
    <div class="row">
        <div class="col-md-6">
            <div class="text-left">
                <h1>Industries</h1>
                <p>Avanade brings transformation and innovation to every industry. By combining Microsoft’s next-generation technology solutions and deep industry expertise, we help you navigate the complex landscape of today's business world and thrive in the AI-first age.Unlock your organization's full potential with Avanade, your trusted industry partner, by your side.</p>
            </div>
        </div>
        <div class="col-md-6 mt-5" data-aos="fade-left">
            <img src="images/careers/career-float.jpg" class="img-fluid"/>
        </div>
    </div>
  </div>


  </div>

  <!-- Floating Action Button -->
  <div class="floating-btn" data-aos="fade-in">
    <button id="myBtn" style="border-radius: 50%; height: 70px; width: 70px; background-color: rgb(47,85,151);" type="button" class="btn btn-primary btn-lg">
      <i class="fas fa-comments"></i>
    </button>
  </div>
  
  <!-- scroll bar -->
  <button id="scrollToTopBtn" class="btn btn-primary rounded-circle" style="display:none; background: rgb(47,85,151);" data-aos="fade-in">
    <i style="font-size: 2em;" class="fa-solid fa-arrow-up"></i>
  </button>
  
  <!-- Footer -->
  <?php echo displayFooter(); ?>

  <!-- Modal -->
  <div id="myModal" class="modal">
    <div class="modal-content col-lg-4">
      <span class="close">&times;</span>
      <iframe src="https://copilotstudio.microsoft.com/environments/Default-588cadf4-9902-4465-86c0-8bcf04f4f102/bots/crc65_armelyCom/webchat?__version__=2" frameborder="0" style="width: 100%; height: 100%;"></iframe>  
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
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>
