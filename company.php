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
  <?php echo displayHeader(); ?>
  
  <!-- start of services floating screen and company floating screen -->
 <?php echo displayFloatingButton(); ?>

<!-- end of services floating screen and company floating screen -->
  <!-- Content -->
  <div class="margin-top"></div>
  <div class="container col-md-10  mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="text-left">
                <h1>Turn your data into insightful business solutions</h1>
                <p>Intuition or gut feeling business decisions don’t work anymore. In an era where consumer preferences constantly evolve and market dynamics shift rapidly, relying solely on intuition can lead to missed opportunities and costly missteps. We help your organization leverage data to make insightful decisions becomes paramount.</p>
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <p>Our proven end-to-end track record of data management positions us as your strategic partner. By handling data at every stage of its lifecycle, from collection and storage to analysis and utilization, we ensure that our clients have the insights they need to make informed decisions and drive their business forward. Our expertise in data management not only enhances operational efficiency but also enables us to provide tailored solutions that align with our clients' objectives. With a focus on accuracy, security, and compliance, we establish trust and reliability in our partnerships. As a result, our clients view us not just as service providers, but as indispensable collaborators who contribute to their long-term success.</p>
        </div>
    </div>
</div>

<!-- our values section -->
<div>
    <h1 class="text-center mt-4 mb-4">Our Values</h1>
</div>
<div class="container col-md-10">
    <div class="row">
        <div class="col-md-4 column">
            <div class="shadow p-4 " style="min-height: 400px !important;">
                <img width="130" height="130" src="images/company/integrity.svg" alt="" class="img-fluid rounded-circle  bg-light p-1 mt-4 mb-1 p-4">
                <h5>Integrity</h5>
                <p class="truncated-text">We uphold honesty and transparency in all our interactions, fostering trust and credibility with clients, partners, and colleagues alike.</p>
                 <button class="btn btn-outline-primary read-more-btn">Read More</button>
                </div>
        </div>
        <div class="col-md-4 column" >
            <div class="shadow p-4" style="min-height: 400px !important;">
                <img width="130" height="130" src="images/company/innovation.svg" alt="" class="img-fluid rounded-circle  bg-light p-1 mt-4 mb-1 p-4">
                <h5>Innovation</h5>
                <p class="truncated-text">We embrace creativity and continuous improvement, striving to pioneer new solutions and approaches that drive positive change and propel our organization forward.</p>
                 <button class="btn btn-outline-primary read-more-btn">Read More</button>
                
            </div>
           
            
        </div>
        <div class="col-md-4 column" >
            <div class="shadow p-4" style="min-height: 400px !important;">
              <img width="130" height="130" src="images/company/collaboration.svg" alt="" class="img-fluid rounded-circle  bg-light p-1 mt-4 mb-1 p-4">
              <h5>Collaboration</h5>
              <p class="truncated-text">We recognize the power of teamwork and actively promote a culture of collaboration, where diverse perspectives are valued, and collective efforts lead to greater success.</p>  
               <button class="btn btn-outline-primary read-more-btn">Read More</button>
            </div>
        </div>
    </div>
    <div class="mt-5"></div>
    <div class="row">
        <div class="col-md-4 column" >
            <div class="shadow p-4" style="min-height: 400px !important;">
                <img width="130" height="130" src="images/company/accountability.svg" alt="" class="img-fluid rounded-circle  bg-light p-1 mt-4 mb-1 p-4">
                <h5>Accountability</h5>
                <p class="truncated-text">We take ownership of our actions and decisions, holding ourselves responsible for delivering results and fulfilling our commitments to clients, stakeholders, and each other.</p>
                 <button class="btn btn-outline-primary read-more-btn">Read More</button>
                </div>
            
            
        </div>
        <div class="col-md-4 column" >
            <div class="shadow p-4" style="min-height: 400px !important;">
                <img width="130" height="130" src="images/company/empowerment.svg" alt="" class="img-fluid rounded-circle  bg-light p-1 mt-4 mb-1 p-4" >
                <h5>Empowerment</h5>
                <p class="bb-4 truncated-text">We empower our employees to take initiative, pursue growth opportunities, and make meaningful contributions, fostering a culture of empowerment that fuels individual and organizational success.</p>
                 <button class="btn btn-outline-primary read-more-btn">Read More</button>
            </div>
            
        </div>
        <div class="col-md-4 column" >
            <div class="shadow p-4" style="min-height: 400px !important;">
                <img width="130" height="130" src="images/company/centricity.svg" alt="" class="img-fluid rounded-circle  bg-light p-1 mt-4 mb-1 p-4">
                <h5>Customer Centricity</h5>
                <p class="mb-4 truncated-text">We prioritize the needs and satisfaction of our customers, striving to exceed expectations and deliver exceptional value through personalized solutions and attentive service.</p>
                 <button class="btn btn-outline-primary read-more-btn">Read More</button>
            </div>
            
            
        </div>
    </div>
</div>
<!-- another div -->
<div class="mt-5"></div>
<div class="container mt-4 col-md-10">
    <div class="row">
        <div class="col-md-6">
            <img src="images/company/Comp.svg" alt="" class="img-fluid">
        </div>
        <div class="col-md-6 mt-5">
            <h1>Let's collaborate and achieve greatness together</h1>
            <p class="mt-5 mb-5">Whether you're launching a new venture or managing an established brand.</p>
            <a href="contact-us" class="btn default-button-color btn-primary">Contact Us</a>
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
  <!-- sweet alerts -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.0/lazysizes.min.js" async></script>
  <script src="js/form-actions.js"></script>
  <script src="js/main3.js"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


</body>
</html>
