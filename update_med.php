<?php 
	session_start();
	include "medtab_server.php";
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/medtab.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
<!--===============================================================================================-->
</head>
<body>



	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="">
                        <!-- <img class="img-fluid logo1" src="images/logo.jpeg" height="61px" width="155px" alt=""> -->
                    </a>
  <a class="navbar-brand" href="#">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  	
                       
                                
                                <a href="medtab.php"  class="btn btn-default" name="b1" > go back
                                         </a> 
                          
   
  </div>  
</nav>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				
				<div class="table100 ver2 m-b-110">
					<div class="table1">
							<form method="POST">				
						
					
					<table data-vertable="ver2">
						<thead>	
						
							<tr class="row100 head">
								
								<th class="column100 column1" data-column="column1">Name</th>
								<th class="column100 column2" data-column="column2">Age</th>
								<th class="column100 column3" data-column="column3">Disease</th>
								<th class="column100 column4" data-column="column4">Medicines Required </th>
								<th class="column100 column5" data-column="column5">Doctor's appointment</th>
								<th class="column100 column6" data-column="column6">Remarks</th>
							
								
							</tr>

						</thead>

								
								
						<tbody>
							<tr class="row100">
						

								<td class="column100 column1" data-column="column1">
									<input type="text" name="umedn" style="background-color: lightblue;" value="<?php echo $_SESSION['name']; ?>"></td>
								<td class="column100 column2" data-column="column2"><input type="text" value="<?php echo $_SESSION['age']; ?>" name="umeda" style="background-color: lightblue;"></td>
								<td class="column100 column3" data-column="column3"><input type="text" value="<?php echo $_SESSION['disease']; ?>" name="umeddis" style="background-color: lightblue;"></td>
								<td class="column100 column4" data-column="column4"><input type="text" value="<?php echo $_SESSION['medicine']; ?>" name="umedmed" style="background-color: lightblue;"></td>
								<td class="column100 column5" data-column="column5"><input type="text" value="<?php echo $_SESSION['appointment']; ?>" name="umedapp" style="background-color: lightblue;"></td>
								<td class="column100 column6" data-column="column6"><input type="text" value="<?php echo $_SESSION['remarks']; ?>" name="umedre" style="background-color: lightblue;"></td>
								
							

							</tr>

							
							
						</tbody>
						

				
					
					</table>	
					<div class="" >
							<button class="btn btn-primary enter" name="savemed">
									save
								</button>
						</div>
								</form>
					</div>

			</div>
		</div>




	</div>



	
	</div>


		






	<!-- update manager model -->


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>