<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Fest Arena - Add</title>

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

<body class="bg-dark">

  <div class="d-flex bg-dark text-light" id="wrapper">

    <!-- Sidebar -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom-dark">

        <a href="" class="nav-item nav-brand text-light link-disable" style="font-size: 22px; padding-left: 20px;">Fest Arena</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="dash.php">Dashbord</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="addnew.php">Add New Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li> -->
          </ul>
        </div>
      </nav>
      <?php
      session_start();
      include("conn.php");
      ?>
      <div class="container">
        <h3 class="text-center">Add New Event</h3>
        <br>
        <div class="row text-center">
          <div class="col-12">
            <div class="form-group row">
              <label for="example-text-input" class="col-2 col-form-label">Event Name</label>
              <div class="col-10">
                <input class="form-control" type="text" id="example-text-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-search-input" class="col-2 col-form-label">Event Date</label>
              <div class="col-10">
                <input class="form-control" type="date" id="example-search-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-email-input" class="col-2 col-form-label">Duration</label>
              <div class="col-10">
                <input class="form-control" type="text" id="example-email-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-url-input" class="col-2 col-form-label">Entry Fee</label>
              <div class="col-10">
                <input class="form-control" type="text" id="example-url-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-tel-input" class="col-2 col-form-label">Apply By</label>
              <div class="col-10">
                <input class="form-control" type="date" id="example-tel-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Apply URL</label>
              <div class="col-10">
                <input class="form-control" type="url" id="example-password-input">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-password-input" class="col-2 col-form-label">Tag</label>
              <div class="col-10"><select class="form-control form-control-sm custom-select custom-select-sm" name="department" required id="department">
                <option value=""Coding">Software</option>
                <option selected value="Hardware">Hardware</option>
                <option selected value="Communication">Communication</option>
                <option selected value="Workshop">Workshop</option>
                <option selected value="Expert Lecture">Expert Lecture</option>
                <option selected value="Other">Other</option>
              </select></div>
            </div>
            <div class="form-group row">
              <div class="col-4 text-center">
                <input class="form-contro btn btn-md btn-warning" style="margin-left: 100px;" type="Submit" value="Submit" name="Submit">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

</body>


</html>