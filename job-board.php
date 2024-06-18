<?php include 'php/actions.php'; ?>
<?php if (isset($_GET['jobId'])): ?>
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

    </head>
    <body>
      
       <!-- Navbar -->
      <?php echo displayHeader(); ?>

      <!-- Content -->
   <div class="margin-top"></div>
    <div class="container col-md-11 mt-5 shadow p-4">
        <div class="row">
            <div class="col-md-6">
                <?php include 'php/job_description_preview.php'; ?>  
            </div>
            <div class="col-md-6">
              <h1>Job Board</h1>
            <h2>Complete the following form</h2>
            <form id="job-form" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control edit-input" id="name" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control edit-input" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" class="form-control edit-input" id="phone" name="phone" placeholder="Phone Number" required>
            </div> 
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control edit-input" id="address" name="address" placeholder="Address" required>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="city">City:</label>
                <input type="text" class="form-control edit-input" id="city" name="city" placeholder="City" required>
            </div>
            <div class="form-group col-md-4">
                <label for="state">State:</label>
                <input type="text" class="form-control edit-input" id="state" name="state" placeholder="State" required>
            </div>
            <div class="form-group col-md-2">
                <label for="zip">Zip Code:</label>
                <input type="text" class="form-control edit-input" id="zip" name="zip" placeholder="Zip Code" required>
            </div>
            </div>
        <div class="form-group">
            <label for="position">Position:</label>
            <select  class="form-control edit-input" id="position" name="position">
                <option selected value=""><?php if (isset($_GET['jobId'])) {
                    echo $job_type;
                } ?></option>
                <option>Part Time</option>
                 <!-- Default option -->
            </select>
        </div>
        <div class="form-group">
        <label for="role">Role:</label>
        <select class="form-control edit-input" id="role" name="role">
            <option selected value=""><?php if (isset($_GET['jobId'])) {
                echo $job_title;
            } ?>
            </option>
        </select>
    </div>
    <div class="form-group">
        <label for="cv">Upload CV or Resume (PDF)*:</label>
        <input type="file" class="form-control edit-input" id="cv" name="cv" accept=".pdf" required>
    </div>
    <button name="submit_applications_btn" type="submit" class="btn default-button-color btn-primary text-center">Submit Form</button>
    </form>
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
            </div>
        </div>
      
        
      
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
<?php else: header('location: career'); ?>

<?php endif ?>

