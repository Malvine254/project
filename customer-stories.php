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
  <div class="container mt-5 mb-5 col-md-10">
    <div class="container content-container">
      <div class="row">
          <div class="col-md-6">
              <h1 class="mt-5">Hear it straight from our thrilled clients</h1>
              <p>Our success stories are a testament to our dedication to delivering the highest quality solutions, getting it right on the first try.</p>
          </div>
          <div class="col-md-6">
              <img src="images/company/jtucrutuvii.png" alt="" class="img-fluid">
          </div>
      </div>
  </div>
  </div>
 
  <div>
    <h2 class="container">Our Impressive Customer Stories</h2>
  </div>
  <div class="container content-container col-md-10">
    <!-- <h2 class="text-center mb-4">Our Services</h2> -->
    <div class="row">
        <div class="col-md-4">
            <div class="service-card">
                <img src="images/Customer stories/customer_services_1.png" alt="" class="img-fluid" loading="lazy">
                <h5>Advisory Services</h5>
                <p>Get expert guidance in planning, development, marketing, finance, and risk management for sustainable growth.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-card">
                <img src="images/Customer stories/customer_services_2.png" alt="" class="img-fluid" loading="lazy">
                <h5>Data</h5>
                <p>Harness the power of data with performance management, data analysis, modeling, storage, and visualization services.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-card">
                <img src="images/Customer stories/customer_services_3.png" alt="" class="img-fluid" loading="lazy">
                <h5>Artificial Intelligence</h5>
                <p>Harness the potential of AI to automate processes, enhance productivity, and uncover patterns that drive innovation and efficiency.</p>
            </div>
        </div>
    </div>
</div>
  <!-- second row -->
  <div class="container content-container col-md-10">
    <!-- <h2 class="text-center mb-4">Our Services</h2> -->
    <div class="row">
        <div class="col-md-4">
            <div class="service-card">
                <img src="images/Customer stories/customer_services_4.png" alt="" class="img-fluid" loading="lazy">
                <h5>Managed Services</h5>
                <p>Enhance your technology infrastructure with supportability reviews, root cause analysis, coordinated service delivery and technology.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-card">
                <img src="images/Customer stories/mentoringcustomer.png" alt="" class="img-fluid" loading="lazy">
                <h5>Enterprise Applications</h5>
                <p>Implement customized software solutions tailored to your business requirements, optimizing workflows and driving productivity across your organization.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="service-card">
                <img src="images/Customer stories/customer_services_6.png" alt="" class="img-fluid" loading="lazy">
                <h5>Cloud</h5>
                <p>Embrace the scalability, flexibility, and cost-efficiency of cloud computing, empowering your business to innovate and grow without infrastructure constraints.</p>
            </div>
        </div>
    </div>
</div>

<!-- start of    form -->
<div class="container container-fluid content-container col-md-10">
    <div class="text-center">
        <h2>Optimize Your Business with Armely Services</h2>
        <p class="mt-2">Maximize your business potential with Armely's range of industry-leading solutions. Whether it's Data Services, Web Development, Business Intelligence, Managed Services, or Advisory Services, we provide the utmost value to your operations and applications.</p>
    </div>
    <div class="form-container">
        <h3 class="text-center mb-4">SCHEDULE A CONSULTATION TODAY</h3>
        <div class="row mb-3">
            <div class="col-md-12">
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
                      <div class="col-md-4 mb-3">
                        <label for="validationServer03">Organization Name</label>
                        <input type="text" class="form-control is-invalid edit-input" id="validationServer03" placeholder="Organization Name" required>
                        <div class="invalid-feedback">
                          Please provide a valid Organization Name.
                        </div>
                        
                      </div>
                      
                      <div class="col-md-4 mb-1">
                        <label for="validationServer04">Phone Number</label>
                        <input type="text" class="form-control is-invalid edit-input" id="validationServer04" placeholder="Phone Number" required>
                        <div class="invalid-feedback">
                          Please provide a valid Phone Number.
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="validationServer03">Which service piques your interest?</label>
                        <select type="text" class="form-control is-invalid edit-input" id="validationServer03" placeholder="Organization Name" required>
                            <option value="" disabled selected>Select Service of Interest</option>
                            <option value="Data Services">Data Services</option>
                            <option value="Web Development">Web Development</option>
                            <option value="Business Intelligence">Business Intelligence</option>
                            <option value="Managed Services">Managed Services</option>
                            <option value="Advisory Services">Advisory Services</option>
                        </select>
                        <div class="invalid-feedback">
                          Please select an option to proceed.
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

<!-- end of    form -->


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
