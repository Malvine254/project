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
</head>
<body>
 
  <!-- Navbar -->
  <?php echo displayHeader() ?>
  
  <!-- Content -->
  <div class="margin-top"></div>
  <div class="container content-container mt-3">
    <div class="row">
        <!-- Column One -->
        <div class="col-md-6 column">
            <h2>Data Services</h2>
            <p>Navigate the complex data landscape with confidence. Find clarity amidst the data noise. Establish a reputation built on data-driven decisions.</p>
            <img src="images/services/data (1).png" alt="" class="img-fluid">

        </div>
        <!-- Column Two -->
        <div class="col-md-6 column">
            <p>Armely's data services empower you to harness the full potential of your data. We offer tailored solutions, expert guidance and actionable insights to help you achieve your data objectives. Whether it's data architecture, data governance, data integration, data quality or data security, our services cover a spectrum of areas.</p>
            <br>
            <p>Collaborating closely with your management team, we develop and execute plans, analyze data, uncover opportunities and navigate the challenges of the data-driven world. Our ultimate aim is to empower your company by optimizing data value, streamlining data management processes, ensuring data security and accuracy, and fostering sustainable growth through data.</p>
            <br>
            <h4>A business partner that embraces data management from every angle</h4>
            <p>We take pride in assembling a team of business intelligence experts at Armely. Whether it's Data Analysis, Strategy Formulation, Dashboard Development, or Data Visualization, your business intelligence project will benefit from a customized strategy rooted in thorough research.</p>
            <a href="#" class="btn default-button-color btn-primary btn-advisory">Data Services</a>
        </div>
    </div>
</div>

  <!-- form -->
  <div class="container container-fluid content-container col-md-10 mt-5">
    <div class="text-center">
        <h2>Optimize Your Business with Armely Services</h2>
        <p class="mt-2">Maximize your business potential with Armely's range of industry-leading solutions. Whether it's Data Services, Web Development, Business Intelligence, Managed Services, or Advisory Services, we provide the utmost value to your operations and applications.</p>
    </div>
    <div class="form-container">
        <h3 class="text-center mb-4">SCHEDULE A CONSULTATION TODAY</h3>
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
