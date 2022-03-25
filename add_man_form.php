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
    	
    	.form-center
    	{

	display:flex;
  justify-content: center;
		}
    </style>
   
</head>

<body>


 			<div class=" form-center" >
 				
 			 
              <div class="col-md-5">
                
                    <form class="" method="POST">



                    	<div class="modal-header">                      
                    <h4 class="modal-title">Add Employee</h4>
                    
                </div>
                <div class="modal-body">                    
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="empname" required>
                    </div>
                      <div class="form-group">
                        <label>Role</label>
                        <input type="text" class="form-control" name="emprole" required>
                    </div>
                    <div class="form-group">
                        <label>Date </label>
                        <input type="date" class="form-control" name="empdate" required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <textarea class="form-control" name="empusern" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="Password" class="form-control " name="emppass" required>
                    </div>                  
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel" name="cancel">
                    <input type="submit" class="btn btn-success" name="empadd">
                </div>
              </form>
                </div>
              </div>
          






         
                
            <footer class="footer text-center">
               <a href=""> @ team phantom</a>
            </footer>
            


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