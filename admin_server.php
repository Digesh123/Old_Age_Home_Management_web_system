<?php
	    
	    error_reporting(0);
    // Initialize a database connection
    $db = mysqli_connect("localhost", "root", "", "oahadmin");

    if(!$db) 
    {
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }


    if(isset($_REQUEST['submit']))
{

		$name =mysqli_real_escape_string($db,$_REQUEST['name']);
		
		$email = mysqli_real_escape_string($db,$_REQUEST['email']);
		$address = mysqli_real_escape_string($db,$_REQUEST['address']);
		$state = mysqli_real_escape_string($db,$_REQUEST['state']);
		$pincode = mysqli_real_escape_string($db,$_REQUEST['pincode']);
		$oahname = mysqli_real_escape_string($db,$_REQUEST['oahname']);
      	$username = mysqli_real_escape_string($db,$_REQUEST['username']);
      	$password =mysqli_real_escape_string($db,$_REQUEST['password']);
      	$repass =mysqli_real_escape_string($db,$_REQUEST['repass']);

     

  
		


      		//register validation


      		$querry = mysqli_query($db,"SELECT *FROM regdata WHERE username ='$username'");
      		if(mysqli_num_rows($querry)>0)
      		{
      			echo "<script>alert('Username already exist');</script>";
      		}
      		else
      		{
      			if($password=== $repass)
	      		{
	      			

	      			$insertquery="INSERT INTO regdata(Name, email, address, state, pincode,oahname, username, password) VALUES ('$name', '$email', '$address', '$state','$pincode','$oahname', '$username', '$password')";

	      			 mysqli_query($db,$insertquery);


	      			  echo '<script type = "text/javascript">';
					    echo 'alert("registered successfully!  ");';
					    echo 'window.location.href = "home_page.php"';
					    echo '</script>';


	      		}
	      		else
	      		{
	      			echo "<script>alert('password not matching');</script>" ;
	      		}

      		}
      	
    }


    //login validation

		session_start();	
	
        if(isset($_REQUEST['login']))  
        	
    {

    	$usern = mysqli_real_escape_string($db,$_REQUEST['username']);
    	$password_1 = mysqli_real_escape_string($db,$_REQUEST['password']);

    	$querry1 = mysqli_query($db,"SELECT *FROM regdata WHERE Binary username ='$usern' AND Binary password='$password_1'");
                   
               $row=mysqli_fetch_assoc($querry1);
               $fname=$row['name'];
               $pmail=$row['email'];
               $paddr=$row['address'];
               $pstate=$row['state'];
               $ppin=$row['pincode'];
               $poahn=$row['oahname'];


                   
            

      		if(mysqli_num_rows($querry1)>0)

      		{	
      				$_SESSION['fname']=$fname;
      				$_SESSION['pmail']=$pmail;
      				$_SESSION['paddr']=$paddr;
      				$_SESSION['pstate']=$pstate;
      				$_SESSION['ppin']=$ppin;
      				$_SESSION['poahn']=$poahn;

      				$_SESSION['uname']= $usern;
      				header("location: admin_pro.php");


      			echo "<script>alert('login successfully');</script>";

      
      		}
      		else
      		{	

      			echo "<script>alert('login failed');</script> ";
      		}


      		$_SESSION['dashp']= 'active';

      		
      		 $currentadmin1 = $_SESSION['uname'];
			    $number= mysqli_query($db,"SELECT *FROM sm_data WHERE nameadmin='$currentadmin1'");
			    $cnt= mysqli_num_rows($number);

			    $_SESSION['scnt'] =$cnt;
  		  }







  		  if(isset($_REQUEST['Count']))
  		  {

				$currentadmin1 = $_SESSION['uname'];
			    $number= mysqli_query($db,"SELECT *FROM sm_data WHERE nameadmin='$currentadmin1'");
			    $cnt= mysqli_num_rows($number);

			    $_SESSION['scnt'] =$cnt;

  		  }

  		





  		  if(isset($_REQUEST['empadd']))
  		  {


		
		$empname = $_REQUEST['empname'];
		$emprole = $_REQUEST['emprole'];
		$empdate = date('y-m-d',strtotime($_REQUEST['empdate']));
		$empusern = $_REQUEST['empusern'];
		$emppass = $_REQUEST['emppass'];
		$empan= $_SESSION['uname'];

		

		$que = mysqli_query($db,"SELECT *FROM sm_data WHERE username ='$empusern'");
      		if(mysqli_num_rows($que)>0)
      		{
      			echo "<script>alert('Username already exist');</script>";
      			      		}
      		else
      		{


      				$insertquery1="INSERT INTO sm_data(name,role,datep, username, password,nameadmin) VALUES ('$empname','$emprole','$empdate','$empusern','$emppass','$empan')";


	      			 mysqli_query($db,$insertquery1);

	      			 echo '<script type = "text/javascript">';
					    echo 'alert("added successfully!  ");';
					    echo 'window.location.href = "admin_manager1.php"';
					    echo '</script>';



      		}





  		  }






  		  if(isset($_REQUEST['update']))
  		  {

  		  	$updatename = $_REQUEST['namen'];
  		  	$updateemail = $_REQUEST['emailn'];
  		  		$updateaddr = $_REQUEST['addressn'];
  		  			$updatestate = $_REQUEST['staten'];
  		  					$updatepin = $_REQUEST['pincoden'];
  		  						$updateusern = $_REQUEST['usernamen'];
  		  							$updateoahn = $_REQUEST['oahnamen'];


  		  				
  		  		$currentadmin = $_SESSION['uname'];



  		  		// $querry3 = mysqli_query($db,"SELECT *FROM regdata WHERE username ='$updateusern'");
      		// if(mysqli_num_rows($querry3)>0)
      		// {
      		// 	echo "<script>alert('Username already exist');</script>";
      		// }
      		// else
      		// {
      			

	      			$que3 = "UPDATE regdata SET name='$updatename', email='$updateemail', address='$updateaddr', state='$updatestate', pincode='$updatepin', oahname='$updateoahn', username='$updateusern' WHERE username='$currentadmin'";
	      			$run = mysqli_query($db,$que3);

	      			if ($run)
	      			{




	      			  echo '<script type = "text/javascript">';
					    echo 'alert("updated successfully!  ");';
					    echo 'window.location.href = "admin_pro.php"';
					    echo '</script>';
					    	}


	      		// }

  		  }



  		  if(isset($_REQUEST['deletec']))
     {
        $id = $_REQUEST['id'];

        $sq = "DELETE FROM sm_data WHERE id = $id";
        mysqli_query($db, $sq);

        header("Location: admin_manager1.php");
        exit();
    }

 


   

























  	  if(isset($_REQUEST['loginman']))  
        	
    {

    	$usern = mysqli_real_escape_string($db,$_REQUEST['systemun']);
    	$password_1 = mysqli_real_escape_string($db,$_REQUEST['manpass']);

    	$querry1 = mysqli_query($db,"SELECT *FROM sm_data WHERE Binary username ='$usern' AND Binary password='$password_1'");

    	if(mysqli_num_rows($querry1)>0)

      		{	


      			echo "<script>alert('login successfully');</script>";
      			  header("Location: medtab.php");

      
      		}
      		else
      		{	

      			echo "<script>alert('login failed');</script> ";
      		}


      	}





  ?>







