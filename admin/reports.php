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
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top pt-3 pb-3" style="padding: 0px !important;">
    <a class="navbar-brand link" href="index"><h1 class="armely-logo-font text-light pl-2" ><strong>armely</strong></h1></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center text-center" id="navbarNav">
    <ul class="navbar-nav mx-auto">
    <li class="nav-item active">
        <a class="nav-link text-light link" href="dashboard.php"><i class="fa fa-dashboard"></i> DASHBOARD <span class="sr-only">(current)</span></a>
    </li>
     <li class="nav-item">
      <a class="nav-link text-light link" href="actions.php">  <i class="fa fa-list"></i> ACTIONS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light link" href="actions.php"> <i class="fa fa-table"></i> <u>TABLES</u></a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light link" href="actions.php">   <i class="fa fa-book"></i> REPORTS</a>
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
            <nav class="navbar navbar-expand-sm navbar-dark  bg-dark">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav2" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fas fa-ellipsis-v"></span>
              </button>
              <div class="collapse navbar-collapse mx-auto justify-content-center" id="navbarNav2">
                <ul class="navbar-nav">
                  <li id="link-one" class="nav-item hide-items">
                    <a class="nav-link">Blogs Table</a>
                  </li>
                  <li id="link-two" class="nav-item  hide-items">
                    <a class="nav-link">Services Table</a>
                  </li>
                  <li id="link-three" class="nav-item  hide-items">
                    <a class="nav-link">Career Table</a>
                  </li>
                 
                </ul>
              </div>
            </nav>
            <h3 class="card-title text-center mb-4"><?php if (isset($_GET['name'])) {
             echo $_GET['name'];
            } ?></h3>
            
            <div class="mb-3">
              <form class="form-inline my-2 my-lg-0">
                <div class="input-group col" style="width: 350px;">
                    <input class="form-control py-2 border-right-0 border col-md-12 bg-transparent" type="search" placeholder="Search..." id="example-search-input" style="outline: none;">
                    <span class="input-group-append">
                        <button class="btn btn-outline-secondary border-left-0 border" type="button" style="outline: none;">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>

                <div class="input-group col" style="width: 350px;">
                    <select class="form-control py-2 border-right-0 border col-md-12 bg-transparent" type="search" placeholder="Search..." id="example-search-input" style="outline: none;">
                      <option>Filter By</option>
                      <option>Ascending</option>
                      <option>Descending</option>
                    </select>
                    <span class="input-group-append">
                        <button class="btn btn-outline-secondary border-left-0 border" type="button" style="outline: none;">
                            <i class="fa-solid fa-filter"></i>
                        </button>
                    </span>
                </div>
            </form>
            </div>
            <!-- start of blog form -->
            <div id="table-one" class="tables">
              <table  class="table table-bordered">
                <div  class="table-responsive">
                  <tr>
                  <th>#</th>
                  <th>Blog Title</th>
                  <th>Blog Image</th>
                  <th>Blog Date</th>
                  <th>Blog Body</th>
                  <th>Actions</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Effects of climate change</td>
                  <td><img width="70" height="70" class="img-fluid" src="../images/services/service1.jpg"></td>
                  <td> 22 Nov</td>
                  <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor <a href="">Read More</a></td>
                  <td>
                    <a href=""> <i class="fa fa-trash"></i></a>
                    <a class="pl-2" href=""> <i  class="fa-regular fa-pen-to-square"></i></a>
                  </td> 
                </tr>
                  <tr>
                  <td>2</td>
                  <td>Effects of climate change</td>
                  <td><img width="70" height="70" class="img-fluid" src="../images/services/service1.jpg"></td>
                  <td> 22 Nov</td>
                  <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor <a href="">Read More</a></td>
                  <td>
                    <a href=""> <i class="fa fa-trash"></i></a>
                    <a class="pl-2" href=""> <i  class="fa-regular fa-pen-to-square"></i></a>
                  </td> 
                    <tr>
                  <td>3</td>
                  <td>Effects of climate change</td>
                  <td><img width="70" height="70" class="img-fluid" src="../images/services/service1.jpg"></td>
                  <td> 22 Nov</td>
                  <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor <a href="">Read More</a></td>
                  <td>
                    <a href=""> <i class="fa fa-trash"></i></a>
                    <a class="pl-2" href=""> <i  class="fa-regular fa-pen-to-square"></i></a>
                  </td> 
                </tr>
                </tr>
                </div>
              </table>
               <!-- Pagination -->
              <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                  </li>
              </ul>
              
            </div>
              
              
           
            <!-- end of blog form -->

            <!-- start of service form -->
            <div id="table-two" class="tables">
              <table class="table table-bordered">
                <div  class="table-responsive">
                  <tr>
                  <th>#</th>
                  <th>Service Title</th>
                  <th>Service Image</th>
                  <th>Service Date</th>
                  <th>Service Body</th>
                  <th>Actions</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Effects of climate change</td>
                  <td><img width="70" height="70" class="img-fluid" src="../images/services/service1.jpg"></td>
                  <td> 22 Nov</td>
                  <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor <a href="">Read More</a></td>
                  <td>
                    <a href=""> <i class="fa fa-trash"></i></a>
                    <a class="pl-2" href=""> <i  class="fa-regular fa-pen-to-square"></i></a>
                  </td> 
                </tr>
                  <tr>
                  <td>2</td>
                  <td>Effects of climate change</td>
                  <td><img width="70" height="70" class="img-fluid" src="../images/services/service1.jpg"></td>
                  <td> 22 Nov</td>
                  <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor <a href="">Read More</a></td>
                  <td>
                    <a href=""> <i class="fa fa-trash"></i></a>
                    <a class="pl-2" href=""> <i  class="fa-regular fa-pen-to-square"></i></a>
                  </td> 
                    <tr>
                  <td>3</td>
                  <td>Effects of climate change</td>
                  <td><img width="70" height="70" class="img-fluid" src="../images/services/service1.jpg"></td>
                  <td> 22 Nov</td>
                  <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor <a href="">Read More</a></td>
                  <td>
                    <a href=""> <i class="fa fa-trash"></i></a>
                    <a class="pl-2" href=""> <i  class="fa-regular fa-pen-to-square"></i></a>
                  </td> 
                </tr>
                </tr>
                </div>
                
              </table>
               <!-- Pagination -->
              <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                  </li>
              </ul>
            </div>
           
            <!-- end of service form -->

            <!-- start of career form -->
          <div id="table-three" class="tables">
            <table class="table table-bordered">
                <div  class="table-responsive">
                  <tr>
                  <th>#</th>
                  <th>Career Title</th>
                  <th>Career Image</th>
                  <th>Career Date</th>
                  <th>Career Body</th>
                  <th>Actions</th>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Effects of climate change</td>
                  <td><img width="70" height="70" class="img-fluid" src="../images/services/service1.jpg"></td>
                  <td> 22 Nov</td>
                  <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor <a href="">Read More</a></td>
                  <td>
                    <a href=""> <i class="fa fa-trash"></i></a>
                    <a class="pl-2" href=""> <i  class="fa-regular fa-pen-to-square"></i></a>
                  </td> 
                </tr>
                  <tr>
                  <td>2</td>
                  <td>Effects of climate change</td>
                  <td><img width="70" height="70" class="img-fluid" src="../images/services/service1.jpg"></td>
                  <td> 22 Nov</td>
                  <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor <a href="">Read More</a></td>
                  <td>
                    <a href=""> <i class="fa fa-trash"></i></a>
                    <a class="pl-2" href=""> <i  class="fa-regular fa-pen-to-square"></i></a>
                  </td> 
                    <tr>
                  <td>3</td>
                  <td>Effects of climate change</td>
                  <td><img width="70" height="70" class="img-fluid" src="../images/services/service1.jpg"></td>
                  <td> 22 Nov</td>
                  <td> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor <a href="">Read More</a></td>
                  <td>
                    <a href=""> <i class="fa fa-trash"></i></a>
                    <a class="pl-2" href=""> <i  class="fa-regular fa-pen-to-square"></i></a>
                  </td> 
                </tr>
                </tr>
                </div>
                
              </table>
               <!-- Pagination -->
              <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                  </li>
              </ul>
          </div>
           
            <!-- end of career form -->

           



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
  <script src="js/main.js"></script>

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
