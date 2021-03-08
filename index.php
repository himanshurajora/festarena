<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Fest Arena</title>
  
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/simple-sidebar.css" rel="stylesheet">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
</head>

<body>

  <div class="d-flex bg-dark text-light" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark text-light border-right" id="sidebar-wrapper">
      <div class="sidebar-heading">Colleges And Events </div>
      <div class="list-group list-group-flush">
        <div class="row justify-content-center">
          <div class="col-8 form-group"><input placeholder="Search..." type="text" class="form-control form-control-sm"></div>
          <div class="col-2 form-group">
            <button class="btn btn-warning btn-sm" type="reset">
              <i class="fa fa-search text-light"></i>
            </button>
          </div>
        </div>
        <a href="#" class="list-group-item list-group-item-action text-light bg-dark">Dashboard</a>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <script>
      var expand = true;
      $(document).ready(function() {
        $('#toggle-click').click(function() {
          $('#toggle-click').toggleClass("fa-angle-left fa-angle-right");
        });
      })
    </script>
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <?php
        include("conn.php");
        include("navbar.php");
    ?>
      <div class="container">
        <div class="row">
          <div class="col-8 col-sm-12 col-xs-12 col-md-12">
          <div class="row">
          <div class="col-lg-1  col-md- 1 col-sm-1">
          <p class="lead">Filter:</p>
          </div>
          <div class="col-lg-10" style="margin-top: 3px;">
          <select class="form-select bg-dark text-light" aria-label="Default select example">
                <option selected>Select Tag</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
          </div>
          </div>
          </div>
        </div>
      </div>
      <br>
      <div class="container-fluid" id="event-container">
        <div class="card shadow bg-dark mb-3">
          <div class="card-header  py-3">
            <p class="text-warning m-0 font-weight-bold">Event</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="row">
                  <div class="col">
                    <h3>Event Name</h3>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <p class="lead">College Name</p>
                  </div>
                </div>

              </div>
              <div class="col">
                <img src="https://anandice.ac.in/wp-content/uploads/2019/05/Logo-.png" alt="College Icon">
                <br><br>
              </div>
            </div>
            <div class="row">
              <div class="col">
                <p><i class="fa fa-map-marker text-warning " aria-hidden="true"></i> Jaipur, Rajasthan</p>
              </div>
            </div>
            <div class="row">
              <div class="col-6 col-md-6 col-lg-4">
                <div class="row">
                  <div class="col-xs-3 col-md-6 col-sm-6 col-lg-6">
                    <div class="row">
                      <div class="col-12" style="color:rgb(140,140,140)"> <i class="far fa-play-circle"></i> Event Date </div>
                      <div class="col-12">12 Jan, 2020</div>
                    </div>
                  </div>
                  <div class="col-xs-3 col-md-6 col-sm-6 col-lg-6">
                    <div class="row">
                      <div class="col-12" style="color:rgb(140,140,140)"> <i class="far fa-clock"></i> Duration </div>
                      <div class="col-12">12 Jan, 2020</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-md-6 col-lg-4">
                <div class="row">
                  <div class="col-xs-3 col-md-6 col-sm-6 col-lg-6">
                    <div class="row">
                      <div class="col-12" style="color:rgb(140,140,140)"> <i class="fal fa-rupee-sign"></i> Entry Fee </div>
                      <div class="col-12">500/-</div>
                    </div>
                  </div>
                  <div class="col-xs-3 col-md-6 col-sm-6 col-lg-6">
                    <div class="row">
                      <div class="col-12" style="color:rgb(140,140,140)"> <i class="far fa-clock"></i> Apply By </div>
                      <div class="col-12">10 Jan, 2020</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br><br>
            <div class="row">
              <div class="col-3">
                <div class="row" style="margin-left:5px;">
                  <p class="lead text-center text-warning" style="background-color: rgb(50,50,50); border-radius: 8px; padding-left:10px; padding-right:10px; margin-right:10px;">Coding</p>
                  <p class="lead text-center text-warning" style="background-color: rgb(50,50,50); padding-left:10px; padding-right:10px; border-radius: 8px;">Tech</p>
                </div>
              </div>
              <div class="col">
                <a href="https://anandice.ac.in/softtechhack/" style="float: right;" class="lead text-dark btn btn-md btn-warning"><b>Apply Now</b></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>


</html>