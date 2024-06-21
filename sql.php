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
      
      <meta http-equiv="Content-Encoding" content="gzip">

    </head>
    <body>
      
       <!-- Navbar -->
    <?php echo displayHeader(); echo displayFloatingButton();?>

      <!-- Content -->
   <div class="margin-top"></div>
    <div class="container col-md-11 mt-5 shadow p-4">
      <div class="text-center p-2 default-color  defaut-color h3 text-danger" id="countdown">00 : 00  : 00  : 00 </div>
      <hr>
        <div class="row">
           
            <div class="col-md-6">
                 <video autoplay loop muted style="opacity: 90%; width: 100% !important;">
                    <source src=upload/sql.mp4 type="video/mp4">
                    Your browser does not support the video tag.
                  </video>
                <p><strong>SQL Server 2014 End-of-Life&nbsp;</strong>&nbsp;</p>

                <p>We are 64 days away from the end of support (EOS) for SQL Server 2014. On July 9th, 2024, Microsoft will stop the mainstream support of SQL Server 2014. Don&rsquo;t wait until it&rsquo;s too late to secure your data and maintain compliancy.&nbsp;</p>

                <p>Seven Risks of Doing Nothing&nbsp;</p>

                <ol start="1">
                  <li>
                  <p>Security Vulnerabilities&nbsp;</p>
                  </li>
                </ol>

                <ol start="2">
                  <li>
                  <p>Data Breaches&nbsp;</p>
                  </li>
                </ol>

                <ol start="3">
                  <li>
                  <p>Malware Infections&nbsp;</p>
                  </li>
                </ol>

                <ol start="4">
                  <li>
                  <p>Compliance Violations&nbsp;</p>
                  </li>
                </ol>

                <ol start="5">
                  <li>
                  <p>Service Disruption&nbsp;&nbsp;</p>
                  </li>
                </ol>

                <ol start="6">
                  <li>
                  <p>Loss of Trust&nbsp;&nbsp;</p>
                  </li>
                </ol>

                <ol start="7">
                  <li>
                  <p>Reputation Damages&nbsp;</p>
                  </li>
                </ol>

                <p>Overall, the risk extends beyond just immediate security concerns and can have far-reaching consequences for your organization&rsquo;s operations, finances, and reputation.&nbsp;&nbsp;</p>

                <p>Our experience with SQL Server implementation, migrations, and maintenance (On-Premises and Cloud) edges us to be your trusted partner in your journey to data security.&nbsp;&nbsp;</p>
 
            </div>
            <div class="col-md-6">
              <h3 class="">Contact us today for a free migration analysis.  </h3>
          <form id="contact-form" method="post">
              <div class="form-row">
                <div class="col-md-6 mb-1">
                  <label for="validationServer01">Name</label>
                  <input type="text" class="form-control edit-input " id="validationServer01" placeholder="First name" name="name" required>
                  
                </div>
                <div class="col-md-6 mb-1">
                  <label for="validationServer02">Email</label>
                  <input type="email" class="form-control edit-input" id="validationServer02" placeholder="Email" required name="email">
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationServer03">Organization Name</label>
                  <input type="text" class="form-control edit-input" id="validationServer03" placeholder="Organization Name" required name="organization">
                </div>
                <div class="col-md-6 mb-1">
                  <label for="validationServer04">Phone Number</label>
                  <input type="tel" class="form-control edit-input" id="validationServer04" placeholder="Phone Number" required name="phone">
                </div>
                <div class="col-md-12 mb-3">
                  <label for="validationServer05">Message</label>
                  <textarea rows="5" type="text" class="form-control edit-textarea" id="validationServer05" placeholder="Message..." required name="message"></textarea>
                </div>
              </div>
              <button name="submit_form" class="btn btn-primary default-button-color" type="submit">Send Message</button>
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
      <script>
       $(document).ready(function() {
          // Set the target date and time
          var targetDate = new Date("2024-07-09T00:00:00");

          // Update the countdown every second
          var countdown = setInterval(function() {
            // Get the current date and time
            var currentDate = new Date();
            
            // Calculate the time difference
            var timeDifference = targetDate - currentDate;
            
            // Check if the target date has passed
            if (timeDifference <= 0) {
              clearInterval(countdown);
              $('#countdown').text('Countdown expired!');
              return;
            }
            
            // Calculate remaining days, hours, minutes, and seconds
            var remainingDays = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
            var remainingHours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var remainingMinutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
            var remainingSeconds = Math.floor((timeDifference % (1000 * 60)) / 1000);
            
            // Display the countdown
            $('#countdown').text( remainingDays+ ' Days : ' +  remainingHours + ' Hrs: ' + remainingMinutes + ' Min : ' +remainingSeconds+ ' Sec' );
          }, 1000);
        });

      </script>
      <script src="js/main3.js"></script>


    </body>
    </html>  

