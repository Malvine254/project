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
  <div class="container content-container mt-3">
    <div class="row">
        <!-- Column One -->
        <div class="col-md-6 column">
            <h2>Data Services</h2>
            <p>Navigate the complex data landscape with confidence. Find clarity amidst the data noise. Establish a reputation built on data-driven decisions.</p>
        </div>
        <!-- Column Two -->
        <div class="col-md-6 column">
            <p>Armely's data services empower you to harness the full potential of your data. We offer tailored solutions, expert guidance and actionable insights to help you achieve your data objectives. Whether it's data architecture, data governance, data integration, data quality or data security, our services cover a spectrum of areas.</p>
            <br>
            <p>Collaborating closely with your management team, we develop and execute plans, analyze data, uncover opportunities and navigate the challenges of the data-driven world. Our ultimate aim is to empower your company by optimizing data value, streamlining data management processes, ensuring data security and accuracy, and fostering sustainable growth through data.</p>
            <br>
            <a href="#" class="btn btn-primary btn-advisory">Data Services</a>
        </div>
    </div>
</div>
<div class="container-fluid content-container">
    <div class="row">
        <!-- Column One -->
        <div class="col-md-6 column">
            <img src="images/services/mentoring.png" alt="" class="img-fluid">
        </div>
        <!-- Column Two -->
        <div class="col-md-6 column">
            <h4>A business partner that embraces data management from every angle</h4>
            <p>We take pride in assembling a team of business intelligence experts at Armely. Whether it's Data Analysis, Strategy Formulation, Dashboard Development, or Data Visualization, your business intelligence project will benefit from a customized strategy rooted in thorough research.</p>
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
 <footer id="footer" class="col-md-12">
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
          <h5 class="mt-3 text-white">SERVICES</h5>
          <div><a class="text-light text-right" href="#">Data Services</a></div>
          <div><a class="text-light text-right" href="#">Advisory Services</a></div>
          <div><a class="text-light" href="#">Managed Services</a></div>
         <div> <a class="text-light" href="#">Business intelligence</a></div>
         <div> <a class="text-light" href="#">Application Development Mentoring</a></div>
      </div>

        <div class="col-md-2">
          <h5 class="mt-3">CONTACT US</h5>
           <div> <a class="text-white" href="tel:+1 972 460 0643"><i class="fa fa-phone"></i> +1 972 460 0643</a></div>
            <div><h6>ADDRESS</h6></div>
            <div><p>2831 Eldorado Pkwy Suite 103-128 Friso TX 75033</p></div>
          </div>

        <div class="col-md-2">
          <h5 class="mt-3">FOLLOW US</h5>
           <div style="align-items: start;" class="pt-3">
              <a href=""><i class="fab fa-facebook text-light h3"></i></a>
              <a href=""><i class="fab fa-linkedin text-light h3 pl-3"></i></a>
              <a href=""><i class="fab fa-x-twitter text-light h3 pl-3"></i></a>
              <a href=""><i class="fab fa-github text-light h3 pl-3"></i></a>
              <a href=""><i class="fab fa-youtube text-light h3 pl-3"></i></a>
            </div>     
        </div>
      </div>
      <hr class="bg-light">
      <div class="text-center col mb-3 text-light text-small">
        <p> &copy; 2024 Armely LLC || All rights reserved.</p><br>
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
