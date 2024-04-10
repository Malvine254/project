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
<<<<<<< HEAD
  
=======
  <!-- preloader -->
  <div id="preloader">
    <div id="loader"></div>
  </div>
>>>>>>> 08cb6bd748b01a9b5d60c749cf1dbd996506eb0e
   <!-- Navbar -->
  <?php include 'php/header.php'; ?>

  <!-- Content -->
<<<<<<< HEAD
<div class="container mt-5">
    <h1>Job Board</h1>
    <h2>Complete the following form</h2>
    <form>
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number:</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div> 
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="city">City:</label>
                <input type="text" class="form-control" id="city" name="city" required>
            </div>
            <div class="form-group col-md-4">
                <label for="state">State:</label>
                <input type="text" class="form-control" id="state" name="state" required>
            </div>
            <div class="form-group col-md-2">
                <label for="zip">Zip Code:</label>
                <input type="text" class="form-control" id="zip" name="zip" required>
            </div>
        </div>
        <div class="form-group">
    <label for="position">Position:</label>
    <select class="form-control" id="position" name="position">
        <option value="">Select Position</option> <!-- Default option -->
        <option value="full-time">Full Time</option>
        <option value="part-time">Part Time</option>
        <option value="contract">Contract</option>
        <option value="internship">Internship</option>
        <option value="volunteer">Volunteer</option>
    </select>
</div>
<div class="form-group">
    <label for="role">Role:</label>
    <select class="form-control" id="role" name="role">
        <option value="">Select Role</option> <!-- Default option -->
        <option value="software-developer">Software Developer</option>
        <option value="software-engineer">Software Engineer</option>
        <option value="data-engineer">Data Engineer</option>
    </select>
</div>

        <div class="form-group">
            <label for="cv">Upload CV or Resume (PDF, DOC or DOCX)*:</label>
            <input type="file" class="form-control-file" id="cv" name="cv" accept=".pdf,.doc,.docx" required>
        </div>
        <button type="submit" class="btn default-button-color btn-primary text-center">Submit Form</button>
    </form>
=======
  <div class="container content-container mt-3">
    <div class="row">
        <!-- Column One -->
        <div class="col-md-6 column">
            <h2>Cloud Services</h2>
            <p>Businesses today recognize the immense benefits of migrating their on-premise data infrastructure to the cloud.</p>
        </div>
        <!-- Column Two -->
        <div class="col-md-6 column">
          <h2>On-Premise to Cloud Data Migrations: Seamless Transition to the Cloud</h2>
            <p>At Armely, we specialize in facilitating on-premise to cloud data migrations, enabling organizations to harness the full potential of cloud computing while minimizing disruption to their operations.</p>
            <br>
            <a href="#" class="btn btn-primary btn-advisory">Advisory Services</a>
        </div>
    </div>
</div>
<div class="container content-container">
    <div class="row">
        <!-- Column One -->
        <div class="col-md-6 column">
            <img src="images/services/mentoring.png" alt="" class="img-fluid">
        </div>
        <!-- Column Two -->
        <div class="col-md-6 column">
            <h4>Our Approach to On-Premise to Cloud Data Migrations</h4>
            <ul class="list-unstyled">
                <li class="list-item">&#10004; Assessment and Planning</li>
                <li class="list-item">&#10004; Data Preparation and Cleansing</li>
                <li class="list-item">&#10004; Selection of Cloud Services</li>
                <li class="list-item">&#10004; Migration Execution</li>
                <li class="list-item">&#10004; Testing and Validation</li>
                <li class="list-item">&#10004; Optimization and Continuous Improvement</li>
            </ul>
        </div>
    </div>
</div>
<div class="container content-container">
    <!-- Row 1 -->
    <div class="row row-spacing">
        <!-- Column One -->
        <div class="col-md-12 column">
            <h2>Armely Advisory Services</h2>
            <p>Our expert team offers four key services to simplify complex setups, craft cost-effective solutions, enhance operational flexibility and proactively optimize the ever-evolving technologies powering your business, ensuring peak performance.</p>
        </div>
    </div>
    <!-- Row 2 -->
    <div class="row row-spacing">
        <!-- Column One -->
        <div class="col-md-6 column">
            <!-- Icon 1 -->
            <div class="icon-label">
                <img height="100" width="100" src="images/services/effective-communication.png" alt="Mentoring" class="img-fluid">
                <p>Mentoring</p>
            </div>
        </div>
        <!-- Column Two -->
        <div class="col-md-6 column">
            <!-- Icon 2 -->
            <div class="icon-label">
                <img height="100" width="100" src="images/services/effective-communication.png" alt="Advisory Services" class="img-fluid">
                <p>Advisory Services</p>
            </div>
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
>>>>>>> 08cb6bd748b01a9b5d60c749cf1dbd996506eb0e
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
