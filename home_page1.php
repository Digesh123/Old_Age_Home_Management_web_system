<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="s11.css">

  <!-- 
   <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/add_man.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
     -->

</head>

<body>

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="">
      <!-- <img class="img-fluid logo1" src="img/index/logo.jpeg" height="61px" width="155px" alt=""> -->
    </a>
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">




        <li class="nav-item dropdown">
          <a class="ng nav-link dropdown-toggle" data-toggle="dropdown" role="button" href="#">Admin</a>
          <div class="dropdown-menu">


            <a class="dropdown-item" href="admin_reg.php">Register</a>
            <a class="dropdown-item" href="admin_log.php">Login</a>

          </div>
        </li>


        <li class="nav-item dropdown">
          <a class="ng nav-link dropdown-toggle" data-toggle="dropdown" role="button" href="#">System manager</a>
          <div class="dropdown-menu">



            <a class="dropdown-item" href="manager_log.php">Login</a>

          </div>
        </li>

        <li class="nav-item">
          <a class="ab nav-link" href="aboutus.php">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contactus.php">Contact Us</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Main Content -->

  <div class="container">
    <div class="row justify-content-center">
      <br>
    </div>

    <div class="row shadow-lg p-3 mb-5 bg-dark rounded">

      <img class="col-3" src="img/index/logo.png" alt="">

      <div id="carouselExampleIndicators" class="carousel slide col-6" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/index/2.webp" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h3 class=".text-dark">DONATE</h3>

            </div>

          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/index/3.webp" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h3 class=".text-dark">BRING SMILES</h3>

            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/index/1.png" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h3 class=".text-dark">SPREAD LOVE</h3>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <img class="col-3" src="img/index/logo.png" alt="">
    </div>







    <footer class="footer text-center">
      © Team phantom
    </footer>






</body>

</html>