<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Responsive Menu and Footer</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- main csss -->
  <link rel="stylesheet" href="../css/style.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- font awesome  -->
  <link rel="stylesheet" href="../vendor/font-awesome/css/all.css"> 
  <script src="../vendor/jquery/jquery.min.js"></script>  
  <script src="https://cdn.ckeditor.com/ckeditor5/35.0.0/classic/ckeditor.js"></script>

</head>
<body>
  
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top pt-3 pb-3">
    <a class="navbar-brand link" href="index"><h1 class="armely-logo-font text-light  h1" ><strong>armely</strong></h1></a>
    <button style="background-color:rgb(47,85,151)" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center text-center" id="navbarNav">
    <ul class="navbar-nav mx-auto">
    <li class="nav-item active">
        <a class="nav-link text-light link" href="#"><i class="fa fa-dashboard"></i> DASHBOARD <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light link" href="action.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <i class="fa fa-list"></i> ACTIONS
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="action.php?name=Add New Blog">Add New Blog</a></li>
          <li><a class="dropdown-item" href="action.php?name=Add New Services">Add New Services</a></li>
          <li><a class="dropdown-item" href="action.php?name=Edit Career">Edit Career</a></li>
          <li><a class="dropdown-item" href="action.php?name=Edit Footer">Edit Footer</a></li>
          <li><a class="dropdown-item" href="action.php?name=Edit About Company">Edit About Company</a></li>
          <li><a class="dropdown-item" href="action.php?name=Edit Customer Stories">Edit Customer Stories</a></li>
          <li><a class="dropdown-item" href="action.php?name=Edit Index Page">Edit Index Page</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <i class="fa fa-table"></i> TABLES
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Blogs Table</a></li>
            <li><a class="dropdown-item" href="#">Services Table</a></li>
            <li><a class="dropdown-item" href="#">Career Table</a></li>
            <li><a class="dropdown-item" href="#">Footer Table</a></li>
            <li><a class="dropdown-item" href="#">About Company Table</a></li>
            <li><a class="dropdown-item" href="#">Customer Stories Table</a></li>
            <li><a class="dropdown-item" href="#">Index Page Table</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <i class="fa fa-book"></i> REPORTS
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Weekly Report</a></li>
            <li><a class="dropdown-item" href="#">Monthly Report</a></li>
            <li><a class="dropdown-item" href="#">Annual Report</a></li>
            <li><a class="dropdown-item" href="#">All Reports</a></li>
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-message"></i>
           <sup>  <span class="badge bg-danger badge-number">4</span></sup>
            MESSAGES 
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">
             You have 3 messages <span class="btn btn-primary btn-sm">View All</span>
              </a>
            </li>
            <hr>
            <li><a class="dropdown-item" href="#">
              <div class="col">
                <i>
                  <h5>Malvine Owuor</h5>
                  Lorem ipsum dolor sit ipsum <br>
                    <span class="text-primary">4 hours ago</span>
                 </i>
                </div>
                <hr>
              </a>
            </li>
            <li><a class="dropdown-item" href="#">
              <div class="col">
                <i>
                  <h5>John Doe</h5>
                  Lorem ipsum dolor sit ipsum <br>
                    <span class="text-primary">2 days ago</span>
                 </i>
                </div>
                <hr>
              </a>
            </li>
            <li><a class="dropdown-item" href="#">
              <div class="col">
                <i>
                  <h5>Anderw Johns</h5>
                  Lorem ipsum dolor sit ipsum <br>
                    <span class="text-primary">2 Minutes ago</span>
                 </i>
                </div>
                <hr>
              </a>
            </li>
            
        </ul>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-light link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fa fa-user"></i>
            USER 
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li class="justify-content-center text-center"><a class="dropdown-item" href="#"></i> <h4>Kevin Anderson</h4>
            <p>System Admin</p>
          </a>
            <hr>
            </li>
           <li><a class="dropdown-item" href="#"><i class="fa fa-right-from-bracket"></i> LogOut</a>
            </li>
             <hr>
            <li><a class="dropdown-item" href="#"><i class="fa fa-cog"></i> Settings</a></li>
            <hr>
            <li><a class="dropdown-item" href="#"><i class="fa fa-user"></i> My Account</a></li>
        </ul>
    </li>
   
</ul>

      <!-- Search Bar -->
    <!-- Default dropleft button -->
    </div>
    </div>
  </nav>
  <!-- Content -->
  <section class="section container shadow mb-5 col-md-10" style="margin-top: 133px;">
    <div class="row">
    <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-md-12">
        <div class=" card-back">
          <div class="card-body">
           <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-ellipsis-v"></span>
              </button>
              <div class="collapse navbar-collapse mx-auto justify-content-center" id="navbarNav2">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="action.php?name=Add New Blog">Add New Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"href="action.php?name=Add New Services">Add New Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="action.php?name=Edit Career">Edit Career</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="action.php?name=Edit Footer">Edit Footer</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="action.php?name=Edit About Company">Edit About Company</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="action.php?name=Edit Customer Stories">Edit Customer Stories</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="action.php?name=Edit Index Page">Edit Index Page</a>
                  </li>
                </ul>
              </div>
            </nav>
             <div class="card mt-3 p-4">
             <h3 class="card-title text-center"><?php if (isset($_GET['name'])) {
             echo $_GET['name'];
            } ?></h3>
            <!-- start of blog form -->
            <?php if (isset($_GET['name']) && $_GET['name']=="Add New Blog"): ?>

               <form>
                <div class="form-row">
                  <div class="col-md-6 mb-1">
                    <label for="validationServer01">Blog Tiltle</label>
                    <input type="text" class="form-control  is-valid edit-input  edit-input-valid" id="validationServer01" placeholder="First name" value="Mark" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-6 mb-1">
                    <label for="validationServer02">Blog Image</label>
                    <input type="file" class="form-control is-valid edit-input  edit-input-valid" id="validationServer02" placeholder="Email" value="Otto@gmail.com" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationServer05">Blog Body</label>
                    <textarea rows="5" type="text" class="form-control is-invalid edit-textarea" id="editor" placeholder="Articles here..." required></textarea>
                      <script>
                          // Initialize CKEditor
                          ClassicEditor
                              .create(document.querySelector('#editor'))
                              .catch(error => {
                                  console.error(error);
                              });
                      </script>
                    <div class="invalid-feedback">
                      Please provide a valid Message.
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary default-button-color" type="submit">Add Blog</button>
              </form>
            <?php endif ?>
           
            <!-- end of blog form -->

            <!-- start of service form -->
            <?php if (isset($_GET['name']) && $_GET['name']=="Add New Services"): ?>
               <form>
                <div class="form-row">
                  <div class="col-md-6 mb-1">
                    <label for="validationServer01">Service Tiltle</label>
                    <input type="text" class="form-control  is-valid edit-input  edit-input-valid" id="validationServer01" placeholder="First name" value="Mark" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-6 mb-1">
                    <label for="validationServer02">Service Image</label>
                    <input type="file" class="form-control is-valid edit-input  edit-input-valid" id="validationServer02" placeholder="Email" value="Otto@gmail.com" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationServer05">Service Body</label>
                    <textarea rows="5" type="text" class="form-control is-invalid edit-textarea" placeholder="Articles here..." required></textarea>
                    <div class="invalid-feedback">
                      Please provide a valid Message.
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary default-button-color" type="submit">Add Serive</button>
              </form>
            <?php endif ?>
           
            <!-- end of service form -->

            <!-- start of career form -->
            <?php if (isset($_GET['name']) && $_GET['name']=="Edit Career"): ?>
               <form>
                <div class="form-row">
                  <div class="col-md-6 mb-1">
                    <label for="validationServer01">Career Tiltle</label>
                    <input type="text" class="form-control  is-valid edit-input  edit-input-valid" id="validationServer01" placeholder="First name" value="Mark" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                  <div class="col-md-6 mb-1">
                    <label for="validationServer02">Career Image</label>
                    <input type="file" class="form-control is-valid edit-input  edit-input-valid" id="validationServer02" placeholder="Email" value="Otto@gmail.com" required>
                    <div class="valid-feedback">
                      Looks good!
                    </div>
                  </div>
                </div>
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationServer05">Career Body</label>
                    <textarea rows="5" type="text" class="form-control is-invalid edit-textarea" placeholder="Career body here..." required></textarea>
                    <div class="invalid-feedback">
                      Please provide a valid Message.
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary default-button-color" type="submit">Edit Career</button>
              </form>
            <?php endif ?>
           
            <!-- end of career form -->

             <!-- start of footer form -->
            <?php if (isset($_GET['name']) && $_GET['name']=="Edit Footer"): ?>
               <form>
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationServer05">Career Body</label>
                    <textarea rows="5" type="text" id="editor-two" class="form-control is-invalid edit-textarea" placeholder="Footer Contents here..." required></textarea>
                    <script>
                          // Initialize CKEditor
                          ClassicEditor
                              .create(document.querySelector('#editor-two'))
                              .catch(error => {
                                  console.error(error);
                              });
                      </script>
                    <div class="invalid-feedback">
                      Please provide a valid Message.
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary default-button-color" type="submit">Edit Footer</button>
              </form>
            <?php endif ?>
           
            <!-- end of footer form -->

             <!-- start of about form -->
            <?php if (isset($_GET['name']) && $_GET['name']=="Edit About Company"): ?>
               <form>
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationServer05">Edit About</label>
                    <textarea id="editor-three" rows="5" type="text" class="form-control is-invalid edit-textarea" placeholder="Career body here..." required></textarea>
                    <script>
                          // Initialize CKEditor
                          ClassicEditor
                              .create(document.querySelector('#editor-three'))
                              .catch(error => {
                                  console.error(error);
                              });
                      </script>
                    <div class="invalid-feedback">
                      Please provide a valid Message.
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary default-button-color" type="submit">Edit About</button>
              </form>
            <?php endif ?>
           
            <!-- end of customer Stories form -->

            <!-- start of custmer stories form -->
            <?php if (isset($_GET['name']) && $_GET['name']=="Edit Customer Stories"): ?>
               <form>
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationServer05">Customer Stories</label>

                    <textarea id="editor-four" rows="5" type="text" class="form-control is-invalid edit-textarea" placeholder="Careerustomer Stories here..." required></textarea>

                    <div class="invalid-feedback">
                      Please provide a valid Message.
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary default-button-color" type="submit">Edit Customer Stories</button>
              </form>
            <?php endif ?>
           
            <!-- end of customer Stories form -->

            <!-- start of Edit Index Page form -->
            <?php if (isset($_GET['name']) && $_GET['name']=="Edit Index Page"): ?>
               <form>
                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label for="validationServer05">Edit Index Page</label>

                    <textarea id="editor-five" rows="5" type="text" class="form-control is-invalid edit-textarea" placeholder="Edit Index Page here..." required></textarea>

                    <div class="invalid-feedback">
                      Please provide a valid Message.
                    </div>
                  </div>
                </div>
                <button class="btn btn-primary default-button-color" type="submit">Edit Index Page</button>
              </form>
            <?php endif ?>
           
            <!-- end of Edit Index Page form -->


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

        

      </div>
    </section>

  <!-- counter section -->




  

  

 


  <!--Bootrap and jQuery Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <script src="../js/main3.js"></script>

<script>
    // Initialize CKEditor
     ClassicEditor
        .create(document.querySelector('#editor-four'))
        .catch(error => {
            console.error(error);
        });
         ClassicEditor
          .create(document.querySelector('#editor-five'))
        .catch(error => {
            console.error(error);
        });
  </script>

</body>
</html>
