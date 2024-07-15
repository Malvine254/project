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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="icon" href="images/logo/logo1.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lobster&family=Dancing+Script&family=Cinzel:wght@400;700&family=Great+Vibes&family=Roboto+Slab:wght@400;700&family=Sacramento&family=Merriweather:wght@400;700&family=PT+Serif:wght@400;700&family=Zilla+Slab:wght@400;700&family=Poppins:wght@400;600&family=Lato:wght@100;300;400;700;900&display=swap">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.css">
  
</head>
<body>
   
  <!-- Navbar -->
   <?php echo displayHeader(); echo displayFloatingButton();?>
  <!-- Content -->
  <?php if (isset($_GET['service_name'])) {
    include 'php/config.php';
     $title = strtolower(mysqli_real_escape_string($conn, $_GET['service_name']));
     $select = $conn->query("SELECT * FROM services_lists WHERE LOWER(title)='$title'");
     if ($select->num_rows>0) {
       while ($row=$select->fetch_assoc()) {
        $intro_content = $row['intro_content'];
        $other_contents = $row['other_contents'];
        $image = $row['image'];
         
       }
     }else{
      echo "No record";
     }
             
  } ?>
  <div class="margin-top"></div>
  <div class="container col-sm-11 p-4">
  <div class="mt-2">
    <div class="row">
    <div class="col-md-6 order-md-2">
      <img style="max-height: 400px; width: 100%;" class="img-fluid mt-4" src="images/services/<?php if (isset($_GET['service_name'])) {
       echo $image;
      } ?>">
    </div>
    <div class="col-md-6 order-md-1">
      <h4><a href="services">All Services </a> <span class="text-muted"> /
        <?php if (isset($_GET['service_name'])) {
       echo ucwords($title);
      } ?>
      </span></h4>
      <hr>
      <?php if (isset($_GET['service_name'])) {
       echo $intro_content;
      } ?>

    </div>
  </div>
   <div class="mt-4">
     <?php if (isset($_GET['service_name'])) {
       echo $other_contents;
      } ?>
   </div>


  </div>
  </div>
<section>
  <div class="container col-md-11 mt-4  p-5">
    <div class="">
        <h4>Optimize Your Business with Armely Services</h4>
        <p class="mt-2">Maximize your business potential with Armely's range of industry-leading solutions. Whether it's Data Services, Web Development, Business Intelligence, Managed Services, or Advisory Services, we provide the utmost value to your operations and applications.</p>
    </div>
    <div class="form-container">
      <h4 class=" mb-4">SCHEDULE A CONSULTATION TODAY</h4>
      <div class="row mb-3">
      <div class="col-md-12">
           <form id="consultation-form" method="post">
              <div class="form-row">
                <div class="col-md-6 mb-1">
                  <label for="validationServer01">Name</label>
                  <input name="name" type="text" class="form-control edit-input " id="validationServer01" placeholder="First name"  required>
                </div>
                <div class="col-md-6 mb-1">
                  <label for="validationServer02">Email</label>
                  <input name="email" type="email" class="form-control  edit-input " id="validationServer02" placeholder="Email"  required>
                  
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationServer03">Organization Name</label>
                  <input name="organization" type="text" class="form-control edit-input" id="validationServer03" placeholder="Organization Name" required>
                 
                </div>   
                <div class="col-md-4 mb-1">
                  <label for="validationServer04">Phone Number</label>
                  <input name="phone" type="text" class="form-control  edit-input" id="validationServer04" placeholder="Phone Number" required>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationServer03">Which service piques your interest?</label>
                  <select name="service_type" type="text" class="form-control edit-input" id="validationServer03" placeholder="Organization Name" required>
                      <option value="" disabled selected>Select Service of Interest</option>
                      <option value="Data Services">Data Services</option>
                      <option value="Web Development">Web Development</option>
                      <option value="Business Intelligence">Business Intelligence</option>
                      <option value="Managed Services">Managed Services</option>
                      <option value="Advisory Services">Advisory Services</option>
                  </select>

                </div>
                <div class="col-md-12 mb-3">
                  <label for="validationServer05">Message</label>
                  <textarea name="message" rows="5" type="text" class="form-control  edit-textarea" id="validationServer05" placeholder="Message..." required></textarea>
                 
                </div>
              </div>
              <button name="submit_consultation_form" class="btn btn-primary default-button-color" type="submit">Send Message</button>
            </form>  
      </div>
    </div>
</div>


</div>
</section>
<section class="mt-4">
  <div class="container py-5 col-md-11 mt-1 p-4 col-sm-12">
    <div class="row d-flex justify-content-start">
      <div class=" col-xl-12">
        <h3 class="fw-bold mb-2">Explore More Services</h3>
        <p class="mb-4 pb-2 mb-md-3 pb-md-0">
          
        </p>
      </div>
    </div>

    <div class="row">
     <?php displayMoreServicesList(); ?>
     <div class="d-flex justify-content-between align-items-center mb-4 pl-5">
          <h5><a href="services" class="default-color">Explore All Services <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i> </a></h5>
    </div>
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
  <script src="js/main3.js"></script>


</body>
</html>
