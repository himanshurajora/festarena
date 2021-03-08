<?php
session_start();
if (isset($_SESSION['username'])) {
    echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom-dark">
        <button class="btn btn-warning btn-md text-light" id="menu-toggle"><i id="toggle-icon" class="fa fa-angle-left"></i></button>
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
</nav>';

}
else{
    echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark border-bottom-dark">
    <button class="btn btn-warning btn-md text-light" id="menu-toggle"><i id="toggle-icon" class="fa fa-angle-left"></i></button>
    <a href="" class="nav-item nav-brand text-light link-disable" style="font-size: 22px; padding-left: 20px;">Fest Arena</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="login.php">Member Login</a>
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
</nav>';

}
?>
