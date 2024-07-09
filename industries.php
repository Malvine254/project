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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="icon" href="images/logo/logo1.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
</head>
<body>
  
  <!-- Navbar -->
   <?php echo displayHeader(); echo displayFloatingButton();?>
  
  <!-- Content -->

  <div class="margin-top"></div>
  <div class="container mt-5 col-md-11">
  <button style='background-color:rgb(47,85,151); ' class="btn btn-primary btn-block d-md-none mb-3" type="button" data-toggle="collapse" data-target="#tabsMenu" aria-expanded="false" aria-controls="tabsMenu"><i class="fa fa-angle-left"></i>
    CLICK FOR MORE OPTIONS
  </button>
  <div class="collapse d-md-block" id="tabsMenu">
    <ul class="nav nav-tabs" id="myTab" role="tablist" style="background: none !important;">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Healthcare</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Energy</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="higher-tab" data-toggle="tab" href="#higher" role="tab" aria-controls="higher" aria-selected="false">Higher Education</a>
      </li>
       <li class="nav-item" role="presentation">
        <a class="nav-link" id="education-tab" data-toggle="tab" href="#education" role="tab" aria-controls="education" aria-selected="false">Education</a>
      </li>
       <li class="nav-item" role="presentation">
        <a class="nav-link" id="government-tab" data-toggle="tab" href="#government" role="tab" aria-controls="government" aria-selected="false">Local Government</a>
      </li>
       <li class="nav-item" role="presentation">
        <a class="nav-link" id="marketing-tab" data-toggle="tab" href="#marketing" role="tab" aria-controls="contact" aria-selected="false">Marketing</a>
      </li>
      <li class="nav-item" role="presentation">
        <a id="save-as-pdf" class="btn default-button-color" >Download PDF</a>
      </li>
    </ul>
  </div>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
      <div style="height: auto; min-height: 65vh">

        <div class="mt-4">
          <div class="row">
            <div class="col-md-6">
              <h2>Healthcare</h2>
              <p>Data empowers personalized healthcare journeys. Analyzing medical history and wearables allows providers to tailor treatments and optimize workflows, leading to better patient outcomes.</p>
              <p>We partner with you to unlock this potential. Our expertise in data analytics and EHR integration empowers you to consolidate patient data, generate actionable insights for personalized care, and make data-driven decisions for better resource allocation and cost reduction. </p>
            </div>

            <div class="col-md-4">
              <img height="100" class="img-fluid" src="images/services/service2.jpg">
            </div>

          </div>
          
          <div class=" mt-5">
             <p>Accelerate innovation while improving healthcare experience with AI-powered Solutions, actionable insights and trustworthy capabilities  </p>
            <div class="row justify-content-center text-center">
            <div class="col">
              <h6>Connected</h6>
              <i class="fa fa-share-nodes fa-3x"></i>
            </div>
             <div class="col">
              <h6>Secure</h6>
              <i class="fa fa-user fa-3x"></i>
            </div>
             <div class="col">
              <h6>Productive</h6>
              <i class="fa fa-chart-line fa-3x"></i>
            </div>
             <div class="col">
              <h6>Insights</h6>
              <i class="fa fa-list fa-3x"></i>
            </div>
          </div>
          </div>

          <div class="row mt-4">
            <div class="col-md-2">
              <div class="shadow p-2" style="min-height: 360px; max-height: 360px;">
                <img width="48" height="48" src="https://www.microsoft.com/content/dam/microsoft/final/en-us/microsoft-brand/icons/Icon-Microsoft-fabric-24x24.svg" alt="microsoft-power-automate-2020"/>
                <h6>Microsoft Fabric in healthcare</h6>
                <p>Unlock powerful analytics in healthcare data. As Microsoft Fabric Partners we empower organizations build data-driven decisions solutions</p>
              </div>
            </div>
             <div class="col-md-2">
              <div class="shadow p-2" style="min-height: 360px; max-height: 360px;">
                <img width="48" height="48" src="https://www.microsoft.com/content/dam/microsoft/final/en-us/microsoft-brand/icons/Icon-Power-Platform-24x24.svg" alt="microsoft-power-automate-2020"/>
                <h6>Power Platform in healthcare</h6>
                <p>Streamline workflows and automates tasks, building low-code/no-code solutions that empower organizations to transform data into actionable insights.</p>
              </div>
            </div>
             <div class="col-md-2">
              <div class="shadow p-2" style="min-height: 360px; max-height: 360px;">
                <img width="48" height="48" src="https://www.microsoft.com/content/dam/microsoft/final/en-us/microsoft-brand/icons/Icon-Microsft-Cloud-for-Healthcare-24x24.svg" alt="microsoft-power-automate-2020"/>
                <h6>Microsoft Cloud for healthcare</h6>
                <p>Cloud for healthcare brings together secure, scalable cloud services to empower healthcare organizations with data-driven insights.</p>
              </div>
            </div>
             <div class="col-md-2">
              <div class="shadow p-2" style="min-height: 360px; max-height: 360px;">
                <img width="48" height="48" src="https://img.icons8.com/fluency/48/microsoft-power-automate-2020.png" alt="microsoft-power-automate-2020"/>
                <h6>Azure AI in healthcare</h6>
                <p>Empowers organizations with intelligent capabilities, enabling tasks like analyzing medical images for faster diagnoses, predicting patient outcomes and extracting insights from unstructured data to improve research and development.</p>
              </div>
            </div>
             <div class="col-md-2">
              <div class="shadow p-2" style="min-height: 360px; max-height: 360px;">
                <img width="48" height="48" src="https://th.bing.com/th/id/OIP.GIheK6M3kWlHXSMg_2L-nQAAAA?rs=1&pid=ImgDetMain" alt="microsoft-power-automate-2020"/>
                <h6>FHIR Integration</h6>
                <p>Unlocks seamless data exchange within healthcare ecosystems, enabling secure sharing of patient information across different applications and platforms for improved care coordination and decision-making.</p>
              </div>
            </div>
             <div class="col-md-2">
              <div class="shadow p-2" style="min-height: 360px; max-height: 360px;">
               <img width="48" height="48" src="https://www.microsoft.com/content/dam/microsoft/final/en-us/microsoft-brand/icons/Icon-Azure-AI-24x24-1.svg" alt="tableau-software"/>
                <h6>Tableau in healthcare</h6>
                <p>Transform complex healthcare data into clear, insightful visualizations allowing organization to identify trends, patterns leading to better patient care, optimized resource allocation, and informed decision-making.</p>
              </div>
            </div>
          </div>
          
        </div>
    </div>
    </div>
    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
         <div style="min-height: 65vh; height: auto;">
             
         </div>
      
    </div>
    <div class="tab-pane fade" id="education" role="tabpanel" aria-labelledby="education-tab">
         <div style="min-height: 65vh; height: auto;">
             <p>Education content goes here.</p>
            
         </div>
      
    </div>
    <div class="tab-pane fade" id="energy" role="tabpanel" aria-labelledby="energy-tab">
         <div style="height: 65vh;">
             <p>Energy content goes here.</p>
         </div>
    </div>
    <div class="tab-pane fade" id="government" role="tabpanel" aria-labelledby="government-tab">
        <div style="height: 65vh;">
            <p>Government Education content goes here.</p>
        </div>
    </div>
    <div class="tab-pane fade" id="marketing" role="tabpanel" aria-labelledby="marketing-tab">
        <div style="height: 65vh;">
             <p>Marketing Education content goes here.</p>
        </div>
     
    </div>
    <div class="tab-pane fade" id="higher" role="tabpanel" aria-labelledby="higher-tab">
        <div style="height: 65vh;">
             <p>Higher Education content goes here.</p>
        </div>
     
    </div>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>
 <!--  <script>
  $(document).ready(function() {
    // Get the response data from sessionStorage
    var responseData = sessionStorage.getItem('responseData');
     //console.log( responseData);
    var fd = new FormData()
    fd.append("arrayString",responseData);
     if (fd != "") {
        $.ajax({
            type: 'POST',
            url: 'php/actions', // Replace with your actual server-side endpoint
            processData: false, // Prevent jQuery from automatically processing data
            contentType: false,
            data: fd,
            success: function(e) {
                $("#showAllContents").html(e)
              //alert(e)
            
              }
        })
     }
    
    //sessionStorage.removeItem('responseData');

    $("#save-as-pdf").click(function() {
    var element = document.getElementById('myTabContent');
    html2pdf().from(element).save();
});
});
    
    
  </script> -->

</body>
</html>
