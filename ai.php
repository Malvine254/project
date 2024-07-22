<?php include 'php/actions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>armely</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"><link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- font awesome  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="icon" href="images/logo/logo1.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.css">
  <!-- main styles -->
  <link rel="stylesheet" href="css/nav.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lobster&family=Dancing+Script&family=Cinzel:wght@400;700&family=Great+Vibes&family=Roboto+Slab:wght@400;700&family=Sacramento&family=Merriweather:wght@400;700&family=PT+Serif:wght@400;700&family=Zilla+Slab:wght@400;700&family=Poppins:wght@400;600&family=Lato:wght@100;300;400;700;900&display=swap">
</head>
</head>
<body>
   <!-- Navbar -->
  <?php echo displayHeader(); echo displayFloatingButton();?>


  <!-- Content -->
<br><br><br><br><br>
  <div class="container content-container mt-3">
    <div class="row">
        <!-- Column One -->
        <div class="col-md-6 column">
            <h2>Artificial Intelligence</h2>
            <p>We harness the power of artificial intelligence to automate processes, uncover patterns, predict outcomes, and drive innovation across your business.</p>
        </div>
        <!-- Column Two -->
        <div class="col-md-6 column">
          <h2>Azure Cognitive Services Development</h2>
            <p>As a Microsoft Azure partner, we specialize in leveraging Azure Cognitive Services to build intelligent applications that can perceive, interpret, and interact with the world just like humans do. Whether you need to incorporate natural language processing, computer vision, or speech recognition into your applications, our team of experts can develop custom solutions tailored to your unique requirements.</p>
            <br>
            <a href="#" class="btn default-button-color btn-primary btn-advisory">Artificial Intelligence</a>
        </div>
    </div>
</div>
<div class="container content-container mt-5">
    <div class="row">
        <!-- Column One -->
        <div class="col-md-6 column">
            <img src="images/services/ai (1).png" alt="" class="img-fluid">
        </div>
        <!-- Column Two -->
        <div class="col-md-6 column">
            <h2>Retrieval-Augmented Generation</h2>
            <p>One of the cutting-edge techniques we employ is retrieval-augmented generation, a hybrid approach that combines the strengths of information retrieval and natural language generation. By retrieving relevant information from large datasets and using it to generate contextually relevant responses or content, we enable more accurate and personalized interactions with your customers, employees, and stakeholders.</p>
            <br>
            <h2>Generative AI and Machine Learning</h2>
            <p>Our expertise in generative AI and machine learning allows us to create intelligent systems that can generate new content, designs, or solutions autonomously. Whether it's generating realistic images, text, or even entire software code, our advanced algorithms can fuel creativity and innovation within your organization. From predictive analytics and recommendation engines to anomaly detection and process optimization, we leverage machine learning to extract valuable insights from your data and drive business growth.</p>
        </div>
    </div>
</div>
<div class="container content-container">
    <!-- Row 1 -->
    <div class="row row-spacing">
        <!-- Column One -->
        <div class="col-md-12 column">
            <h2>Armely AI Services</h2>
            <p>Our expert team offers four key services to simplify complex setups, craft cost-effective solutions, enhance operational flexibility and proactively optimize the ever-evolving technologies powering your business, ensuring peak performance.</p>
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
  <script src="js/jquery-3.3.1.min.js"></script>

  <!-- sweet alerts -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.0/lazysizes.min.js" async></script>
  <script src="js/form-actions.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  
   <script src="js/jquery.sticky.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- <script src="js/nav.js"></script> -->
  <script src="js/main3.js"></script>

  <script src="js/form-actions.js"></script>
  <script src="js/nav.js"></script>
  <script src="js/nav.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var currentYear = new Date().getFullYear();
      var copyrightElement = document.getElementById('copyright');
      copyrightElement.innerHTML = '&copy; ' + currentYear + ' Your Company Name. All rights reserved.';
    });
  </script>
  <script src="js/main3.js"></script>
  


</body>
</html>