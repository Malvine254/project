<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Responsive Menu and Footer</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- main csss -->
  <link rel="stylesheet" href="../css/style.css">
  <!-- font awesome  -->
  <link rel="stylesheet" href="../vendor/font-awesome/css/all.css"> 
  <script src="../vendor/jquery/jquery.min.js"></script>  

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
        <a class="nav-link text-light link" href="dashboard.php"><i class="fa fa-dashboard"></i> <u>DASHBOARD</u> <span class="sr-only">(current)</span></a>
    </li>
     <li class="nav-item">
      <a class="nav-link text-light link" href="actions.php">  <i class="fa fa-list"></i> ACTIONS</a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light link" href="actions.php"> <i class="fa fa-table"></i> TABLES</a>
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
  <section class="section container shadow p-4 col-md-10" style="margin-top: 133px;">
     <h1>Dashboard</h1>
      <div class="row">
        <div class="col-lg-7 col-md-7">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Blog Articles Clicks</h5>

              <!-- Line Chart -->
              <canvas  id="lineChart" style="max-height: 400px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#lineChart'), {
                    type: 'line',
                    data: {
                      labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                      datasets: [{
                        label: 'Line Chart',
                        data: [65, 59, 80, 81, 56, 55, 40],
                        fill: false,
                        borderColor: 'rgb(75, 192, 192)',
                        tension: 0.1
                      }]
                    },
                    options: {
                      scales: {
                        y: {
                          beginAtZero: true
                        }
                      }
                    }
                  });
                });
              </script>
              <!-- End Line CHart -->

            </div>
          </div>
        </div>

        

        <div class="col-lg-5 col-md-5">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Projects Status  </h5>

              <!-- Pie Chart -->
              <canvas id="pieChart" style="max-height: 329px;"></canvas>
              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new Chart(document.querySelector('#pieChart'), {
                    type: 'pie',
                    data: {
                      labels: [
                        'Completed',
                        'Pending',
                        'Deployed'
                      ],
                      datasets: [{
                        label: 'My First Dataset',
                        data: [300, 50, 100],
                        backgroundColor: [
                          'rgb(255, 99, 132)',
                          'rgb(54, 162, 235)',
                          'rgb(255, 205, 86)'
                        ],
                        hoverOffset: 4
                      }]
                    }
                  });
                });
              </script>
              <!-- End Pie CHart -->

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



</body>
</html>
