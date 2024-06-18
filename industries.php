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
  <?php echo displayHeader(); ?>
  
  <!-- Content -->
  <div class="margin-top"></div>
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

  <!-- our values section -->
  <div class="container col-md-11 shadow p-4 mt-5" data-aos="fade-up">
    <h1 class="text-start mt-4 mb-4">Our Values</h1>
    <div class="row">
        <div class="col-md-4 column" data-aos="zoom-in">
            <div class="shadow p-4" style="min-height: 400px !important;">
                <img width="130" height="130" src="images/company/integrity.svg" alt="" class="img-fluid rounded-circle bg-light p-1 mt-4 mb-1 p-4">
                <h5>Integrity</h5>
                <p class="truncated-text">We uphold honesty and transparency in all our interactions, fostering trust and credibility with clients, partners, and colleagues alike.</p>
                <button class="btn btn-outline-primary read-more-btn">Read More</button>
            </div>
        </div>
        <div class="col-md-4 column" data-aos="zoom-in" data-aos-delay="100">
            <div class="shadow p-4" style="min-height: 400px !important;">
                <img width="130" height="130" src="images/company/innovation.svg" alt="" class="img-fluid rounded-circle bg-light p-1 mt-4 mb-1 p-4">
                <h5>Innovation</h5>
                <p class="truncated-text">We embrace creativity and continuous improvement, striving to pioneer new solutions and approaches that drive positive change and propel our organization forward.</p>
                <button class="btn btn-outline-primary read-more-btn">Read More</button>
            </div>
        </div>
        <div class="col-md-4 column" data-aos="zoom-in" data-aos-delay="200">
            <div class="shadow p-4" style="min-height: 400px !important;">
                <img width="130" height="130" src="images/company/collaboration.svg" alt="" class="img-fluid rounded-circle bg-light p-1 mt-4 mb-1 p-4">
                <h5>Collaboration</h5>
                <p class="truncated-text">We recognize the power of teamwork and actively promote a culture of collaboration, where diverse perspectives are valued, and collective efforts lead to greater success.</p>
                <button class="btn btn-outline-primary read-more-btn">Read More</button>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">6</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
  </div>

  <div class="mt-5"></div>
  <div class="container mt-4 col-md-10">
    <div class="row">
        <div class="col-md-6" data-aos="fade-right">
            <img src="images/company/Comp.svg" alt="" class="img-fluid">
        </div>
        <div class="col-md-6 mt-5" data-aos="fade-left">
            <h1>Let's collaborate and achieve greatness together</h1>
            <p class="mt-5 mb-5">Whether you're launching a new venture or managing an established brand.</p>
            <a href="contact-us" class="btn default-button-color btn-primary">Contact Us</a>
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
