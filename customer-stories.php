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
  <div class="container mt-1 mb-5 p-4 col-md-11 shadow">
    <div class="container content-container">
      <div class="row">
          <div class="col-md-6"  data-aos="fade-left">
              <h1 class="mt-5">Hear it straight from our thrilled clients</h1>
              <p>Our success stories are a testament to our dedication to delivering the highest quality solutions, getting it right on the first try.</p>
          </div>
          <div class="col-md-6"  data-aos="fade-right">
              <img src="images/customer-stories/1.png" alt="" class="img-fluid">
          </div>
      </div>
  </div>
  </div>
  <div class="container col-md-11 shadow p-4">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-xl-8 text-center"  data-aos="fade-in">
        <h3 class="fw-bold mb-1">Testimonials</h3>
        <p class="mb-4 pb-2 mb-md-5 pb-md-0">
          Here, you'll find the voices of our satisfied customers sharing their experiences with our products/services. Dive into these authentic reviews to get a glimpse of the quality, reliability, and exceptional service we strive to deliver. Discover why our customers trust us and why you should too
        </p>
      </div>
    </div>
    <div data-aos="fade-left">
        <div class="row text-center" >
       
      <?php displayCustomerStoriesTestimonials(); ?>
    </div>
    </div>
  
    <div class="container mt-3">
         <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center" id="pagination">
                <li class="page-item disabled" id="prev-page">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <!-- Page numbers will be inserted here by JavaScript -->
                <li class="page-item" id="next-page">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
  </div>

<!-- see our works section -->
  <section >
    <div class="container mb-5 col-md-11 shadow mt-4 p-5">
      <div class="row" >
        <h3 class="mb-3">Key Projects</h3>
        <hr>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-12 col-md-4"  data-aos="fade-left">
                  <img src="images/services/service1.jpg" class="d-block img-fluid" alt="Service 1">
                  <div class="mt-2">
                    <h5>Executive Reports Development</h5>
                    <p class="card-text">Transforming data into actionable insights, 
                      our Executive Reports Development ensures informed decision-making at every level of your organization.</p>
                  </div>
                </div>
                <div class="col-md-4 d-none d-md-block"  data-aos="fade-right">
                  <img src="images/services/service2.jpg" class="d-block img-fluid" alt="Service 1" >
                  <div class="mt-2">
                    <h5>Sybase to SQL Server Migration</h5>
                    <p class="card-text">Seamlessly transition your data ecosystem with precision and 
                      efficiency through Sybase to SQL Server migration, unlocking enhanced 
                      performance and scalability.</p>
                  </div>
                </div>
                <div class="col-md-4 d-none d-md-block"  data-aos="fade-left">
                  <img src="images/services/service3.jpg" class="d-block img-fluid" alt="Service 1">
                  <div class="mt-2">
                    <h5>Healthcare Productivity Reports</h5>
                    <p class="card-text">Unlock operational efficiency 
                      and elevate healthcare outcomes with our cutting-edge Healthcare Productivity Reports.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Add more carousel-items here if needed -->
            <div class="carousel-item">
              <div class="row">
                <div class="col-12 col-md-4"  data-aos="fade-left">
                  <img src="images/services/service2.jpg" class="d-block img-fluid" alt="Service 1">
                  <div class="mt-2">
                    <h5>Sybase to SQL Server Migration</h5>
                    <p class="card-text">Seamlessly transition your data ecosystem with precision and 
                      efficiency through Sybase to SQL Server migration, unlocking enhanced 
                      performance and scalability.</p>
                  </div>
                </div>
                <div class="col-md-4 d-none d-md-block"  data-aos="fade-left">
                  <img src="images/services/service5.jpg" class="d-block img-fluid" alt="Service 1">
                  <div class="mt-2">
                    <h5>Managed Services</h5>
                    <p class="card-text">Optimize your business efficiency with our Managed Services,
                       ensuring seamless operations and peace of mind.</p>
                  </div>
                </div>
                <div class="col-md-4 d-none d-md-block"  data-aos="fade-left">
                  <img src="images/services/service4.jpg" class="d-block img-fluid" alt="Service 1">
                  <div class="mt-2">
                    <h5>Custom Application development</h5>
                    <p class="card-text">Empower your business with tailor-made solutions through our 
                      expert Custom Application Development services.</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Add more carousel-items here if needed -->
          </div>
          <!-- Previous and Next buttons -->
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
     </div>
  </section> 

<!-- start of    form -->
<div class="container container-fluid content-container col-md-11 shadow p-5">
    <div class="text-center" data-aos="fade-right">
        <h2 class="fw-bold">Optimize Your Business with Armely Services</h2>
        <p class="mt-2">Maximize your business potential with Armely's range of industry-leading solutions. Whether it's Data Services, Web Development, Business Intelligence, Managed Services, or Advisory Services, we provide the utmost value to your operations and applications.</p>
    </div>
    <div class="form-container">
        <h3 class="text-center mb-4">Schedule a consultation today</h3>
        <div class="row mb-3">
            <div class="col-md-12" data-aos="fade-right">
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
  <?php echo displayFooter(); ?>
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
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.0/lazysizes.min.js" async></script>
  <script src="js/form-actions.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script src="js/page_stylings.js"></script>
  <script src="js/main3.js"></script>


</body>
</html>
