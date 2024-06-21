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

<!-- end of services floating screen and company floating screen -->
  <!-- Content -->
  <div class="margin-top"></div>
  <div class="container mt-3 col-md-11">
      <div class="row">
        
        <?php
          require 'php/config.php';

          if (isset($_GET['blogId'])) {
              $id = mysqli_real_escape_string($conn, $_GET['blogId']);
              $query = "SELECT * FROM blogs WHERE blog_id='$id' LIMIT 1";
          } else {
              $query = "SELECT * FROM blogs ORDER BY id  DESC LIMIT 1";
          }

          $select = $conn->query($query);

          if ($select->num_rows > 0) {
              while ($row = $select->fetch_assoc()) {
        ?>
        <div class='col-md-8'>
            <img src='<?php echo $row['image_path']; ?>' class='img-fluid' alt='image'>
            <div class='mt-3'>
                <h3 id='blogTitle'><?php echo $row['title']; ?></h3>
            </div>
            <div class='profile-card d-flex align-items-center'>
                <img width='45' height='45' src='images/blog/profile.svg' class='rounded-circle img-fluid mr-3' alt='Profile Picture'>
                <div>
                    <p class='mt-0 text-muted'><strong id='blog-author'><?php echo $row['author']; ?></strong>
                        <span class='ml-5 h4 btn btn-primary ' id='toggleSpeech'>Read Aloud <i id='volume-icons' class='fa fa-volume-high'></i></span>
                        <br><span class='text-muted'><?php echo $row['date']; ?></span>
                    </p>
                </div>
            </div>
            <div class='paragraph'>
               <div id='content'> <?php echo $row['body']; ?> </div>
                <div class='row'>
                    <div class='col'> <i class='fa-regular fa-message'></i><span> 45 Comments</span></div>
                    <div class='col'> <i class='fa-regular fa-thumbs-up'></i><span> 1k Likes</span></div>
                    <div id='share-button' class='col'> <i class='fa-regular fa-share-from-square'></i><span> Share</span></div>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    ?>
    <div class='col-md-8'>
            <div class='paragraph alert alert-danger bg-danger text-light text-center p-2'>
                <h5><i class="fa fa-warning"></i> Warning !</h5><p id='content '>No data was found! </p>
               
            </div>
        </div>
    <?php
}
  ?>   

        <div class="col-md-4">
          <h4 class="mb-3"><u>Popular Posts</u></h4>
          <?php echo  displayBlogs(); ?>
        <div>
          <?php if (isset($_GET['blogId'])):$url = mysqli_real_escape_string($conn, $_GET['blogId']); ?>
            <a id='see_all_blogs_one' href="?blogId=<?php echo $url; ?>&aseealessblogpost" class="text-link"> SEE LESS BLOG POSTS <i class="fa fa-angle-right"></i></a>
            

          <?php else:?>
             <a  href="?action=seeallblogpost&blogId" class="text-link"> SEE ALL BLOG POSTS <i class="fa fa-angle-right"></i></a>
          <?php endif ?>
    
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

<!-- The Modal -->
<div id="customModal" class="modal-for-share">
   <span class="close">&times;</span>
  <div class="modal-content-for-share ">
   
    <div class="">
  <h2 class="text-dark text-center">Share through social media pages</h2>
  <hr>
  <div class="row justify-content-center mt-4 mb-4">
    <div class=" col-md-2 text-center">
      <a data-social="linkedin" class="fab fa-linkedin text-primary fa-3x shareBtn"></a>
    </div>
    <div class=" col-md-2  text-center">
      <a data-social="twitter" class="fab fa-twitter text-primary fa-3x shareBtn"></a>
    </div>
    <div class=" col-md-2 text-center">
      <a data-social="facebook" class="fab fa-facebook text-primary fa-3x shareBtn"></a>
    </div>
    <div class="  col-md-2 text-center ">
      <a data-social="whatsapp" class="fab fa-whatsapp text-primary fa-3x shareBtn"></a>
    </div>
    <div class="col-md-2 text-center">
      <a data-social="reddit" class="fab fa-reddit text-primary fa-3x shareBtn"></a>
    </div>
  </div>
</div>

  </div>
</div>



  <!--Bootrap and jQuery Scripts -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.0/lazysizes.min.js" async></script>
  <script src="js/form-actions.js"></script>
  <script>
    // document.addEventListener('DOMContentLoaded', function() {
    //   var currentYear = new Date().getFullYear();
    //   var copyrightElement = document.getElementById('copyright');
    //   copyrightElement.innerHTML = '&copy; ' + currentYear + ' Your Company Name. All rights reserved.';
    // });
  </script>
  <script src="js/main3.js"></script>

  <script>
  $(document).ready(function(){
    $("img").addClass("img-fluid");
    // Share button click event
    $(".shareBtn").click(function(){
      var social = $(this).data("social");
      var url = encodeURIComponent(window.location.href);
      var title = $("#blogTitle").text();
      var shareURL;

      switch(social) {
        case "facebook":
          shareURL = "https://www.facebook.com/sharer/sharer.php?u=" + url;
          break;
        case "twitter":
          shareURL = "https://twitter.com/intent/tweet?url=" + url + "&text=" + title;
          break;
        case "linkedin":
          shareURL = "https://www.linkedin.com/shareArticle?url=" + url + "&title=" + title;
          break;
           case "whatsapp":
          shareURL = "https://api.whatsapp.com/send?text=" + title + "%20" + url;
          break;
           case "reddit":
          shareURL = "https://reddit.com/submit?url=" + url + "&title=" + title;
          break;


      }

    // Open share URL in new window
    window.open(shareURL, "_blank");
  });
});
</script>

</body>
</html>
