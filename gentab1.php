<?php 
			
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
	<link rel="stylesheet" type="text/css" href="css/medtab1.css">
	<link rel="stylesheet" type="text/css" href="css/main2.css">
<!--===============================================================================================-->
</head>
<body>



	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="">
                        <!-- <img class="img-fluid logo1" src="images/logo.jpeg" height="61px" width="155px" alt=""> -->
                    </a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
  	<ul class="navbar-nav">
  	<li class="nav-item dropdown">
                                <a class="ng nav-link dropdown-toggle" data-toggle="dropdown" role="button" href="#">MANAGING ROLE</a>
                                <div class="dropdown-menu">
                                   
                                    
                                    <a class="dropdown-item" href="gentab1.php">General</a>
                                    <a class="dropdown-item" href="medtab.php">Medical</a>
                                    
                                </div>
                            </li> 
                        </ul>

                       
                       
                                
                               
                                          <ul class="breadcrumb-item" style="margin-left: 25px;">
                        	<div class="row">
                        	
                        	<li style="color:whitesmoke; margin-left: 5px; font-size: 25px; opacity:80%; font-family:serif"><span>/</span>General data</li>
                        	</div>
                        </ul>
                          
                           <a href="home_page.php"  class="btn btn-default" name="b1"  style="margin-left: 800px"> Logout
                                         </a> 
   
  </div>  
</nav>

	
	<div class="limiter">

		<div class="container-table100">
			<form action="" method="GET">
                                    <div class="col-md-12 input-group ">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search data according to names">
                                        <button type="submit" class="btn btn-primary" name="search2">Search</button>
                                    </div>
                                </form>
			<div class="wrap-table100">
				
				<div class="table100 ver2 m-b-110">
					<div class="table1">
						
						
					
					<table data-vertable="ver2">
						<thead>	
						
							<tr class="row100 head">
								<th class="column100 column8" data-column="column8">Sr NO.</th>
								<th class="column100 column1" data-column="column1">Name</th>
								
								<th class="column100 column3" data-column="column3">Contact</th>
								<th class="column100 column4" data-column="column4">Adhar number </th>
								
								<th class="column100 column6" data-column="column6">Remarks</th>
								<th class="column100 column7" data-column="column7">update</th>
								<th class="column100 column7" data-column="column7">delete</th>
							</tr>

						</thead>

							 <?php
              
            $qu2 = "SELECT * FROM generaltab ORDER BY id ASC";
            $result1 = mysqli_query($db, $qu2);

                while($row = mysqli_fetch_array($result1))
            {
            	$id=$row['id'];
            	           	
        ?>
                
						<tbody>
							<tr class="row100">
								<td class="column100 column8" data-column="column8"><?php echo $id;?></td>
								<td class="column100 column1" data-column="column1"><?php echo $row['name'];?></td>
								<td class="column100 column2" data-column="column2"><?php echo $row['contact'];?></td>
								<td class="column100 column3" data-column="column3"><?php echo $row['adhar'];?></td>
								
								<td class="column100 column6" data-column="column6"><?php echo $row['remarks'];?> </td>
								<td class="column100 column7" data-column="column7">
									
										
											<form method="POST">
												<input type="" name="id" type="text" hidden value="<?php echo $id;?>">
												
														
												
											<button class="btn btn-primary" name="updategen" >update	</button>
												
											</form>
								</td>
								<td class="column100 column7" data-column="column8">
									
										
											<form method="get">
												<input type="" name="id" type="text" hidden value="<?php echo 	$id;?>">
												
											<button class="btn btn-primary" name="delmed">delete	</button>
												
											</form>
								</td>
								
							</tr>

							
							
						</tbody>
						    <?php
            }
            ?>
					</table>
					
					</div>

			</div>
		</div>




	</div>



	
	</div>










		

<form method="POST">
	
<div class="inputdata">
	

	<div class="inputpart row">
			
			
			<div class="col-md-3">
				<p>Name</p>
				<input type="text" name="gentabn" required >
				
			</div>
			<div class="col-md-3">
				<p>Contact</p>
				<input type="text" name="gentabcon" required>
				
			</div>

			<div class="col-md-3">
				<p>Adhar number</p>
				<input type="text" name="gentabadh" required>
				
			</div>

			

			

			<div class="col-md-3	">
				<p>Remarks</p>
				<input type="text" name="gentabre" required>
				
			</div>
		</div>
		<button class="btn btn-primary enter" name="genbut">
			Enter Data 
		</button>
	</div>
</form>






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