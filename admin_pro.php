<?php
    session_start();
    include "admin_server.php";

?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
  
    
    <title></title>
       
   
    <!-- Custom CSS -->
    <link href="/assets/plugins/chartist/dist/chartist.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.min.css" rel="stylesheet">
    <style type="text/css">
        .b1 {
    background-color: whitesmoke;

}

.b1:hover {background-color: #e7e7e7;}

button.but {
    border: 0px;
    color: #54667a;
    background-color: whitesmoke;
    border-color: white;
}

button:not(:disabled) {
    cursor: pointer;
}
    </style>
   
</head>

<body>
   
  
        <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin6">
                    
                    <a class="navbar-brand" href="admin_pro.php">
                        <!-- Logo icon -->
                        <b class="logo-icon">
                            <img src="assets/images/logo3.png" alt="" class="dark-logo" />
                        </b>
                        
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="assets/images/logo-text1.png" alt="" class="dark-logo" />

                        </span>
                    </a>
                    <!-- <a class="nav-toggler waves-effect waves-light text-dark d-block d-md-none"
                        href="javascript:void(0)"><i class="ti-menu ti-close"></i></a> -->
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->


                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto mt-md-0 ">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <li class="nav-item hidden-sm-down">
                            <form class="app-search ps-3">
                                
                            </form>
                        </li>
                    </ul>

                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav">
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <!-- <img src="../assets/images/users/1.jpg" alt="user" class="profile-pic me-2">Markarn Doe -->
                          
                   
                            <a href="index_home.php"  class="btn btn-default" name="b1" > Logout
                                         </a> 
                                   
                            <ul class="dropdown-menu show" aria-labelledby="navbarDropdown"></ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
  


        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="admin_pro.php" aria-expanded="false">
                                <i class="me-3 fa fa-user" aria-hidden="true"></i>
                                  <form method="POST">  <button class="but" name="profile">Profile </button> </form></a>
                        </li>

 <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="admin_dash.php" aria-expanded="false"><i class="me-3 far fa-clock fa-fw"
                                    aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                        </li>


                        


                        
                        

                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="admin_manager1.php" aria-expanded="false"><i class="me-3 fa fa-table"
                                    aria-hidden="true"></i><span class="hide-menu">Add Managers</span></a>
                        </li>


                      
                    

                      


                    </ul>

                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>




    

        <div class="page-wrapper">

            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-md-6 col-8 align-self-center">
                        
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                    Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                  <!--  -->
                </div>
            </div>








            <div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
    
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="assets/images/avtar.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                   

                      <h4><?php echo $_SESSION['fname'];?></h4>
                      <p class="text-secondary mb-1">SYTEM ADMIN</p>
                      <p class="text-muted font-size-sm"> <?php echo $_SESSION['poahn'];?></p>
                    
                    </div>
                  </div>
                </div>
              </div>
            </div>  
            
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?php echo $_SESSION['fname'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                     <?php echo $_SESSION['pmail'];?>

                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                       <?php echo $_SESSION['paddr'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">State</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $_SESSION['pstate'];?>
                    </div>
                  </div>
                  <hr>          
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Pincode</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $_SESSION['ppin'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Username</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $_SESSION['uname'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Old age home/ngo name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <?php echo $_SESSION['poahn'];?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-12">
                      <a class="btn btn-info " target="_self" href="admin_pro_edit.php">Edit</a>
                    </div>
                  </div>
                </div>
                   
              </div>

           <!--  -->


            </div>
          </div>

        </div>
    </div>






            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->



            <div class="">
               
                
            <footer class="footer text-center">
               <a href=""> @ team phantom</a>
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
   


    <script src="../assets/plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.js"></script>
    <!--This page JavaScript -->
    <!--flot chart-->
    <script src="../assets/plugins/flot/jquery.flot.js"></script>
    <script src="../assets/plugins/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="js/pages/dashboards/dashboard1.js"></script>
</body>

</html>