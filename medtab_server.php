<?php
	    
	    error_reporting(0);
    // Initialize a database connection
    $db = mysqli_connect("localhost", "root", "", "oahadmin");

    if(!$db) 
    {
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
    }


    if(isset($_REQUEST['medbut']))
{

		$medname =mysqli_real_escape_string($db,$_REQUEST['medtabn']);
		
		$medage = mysqli_real_escape_string($db,$_REQUEST['medtabage']);
		$meddis = mysqli_real_escape_string($db,$_REQUEST['medtabdis']);
		$medmed = mysqli_real_escape_string($db,$_REQUEST['medtabmed']);
		$medapp = mysqli_real_escape_string($db,$_REQUEST['medtabapp']);
		$medre = mysqli_real_escape_string($db,$_REQUEST['medtabre']);

		$sign = 'confirm';
      	
			if ($sign !='confirm' )
			{
				echo "data not entered";
			}
			else
			{

	      			$insertquery="INSERT INTO medtable(name, age, disease, medicine,appointment, remarks) VALUES ('$medname', '$medage', '$meddis', '$medmed','$medapp','$medre')";


	      			 mysqli_query($db,$insertquery);
	      			   

	      			}


      }






      if(isset($_REQUEST['genbut']))
{

		$genname =mysqli_real_escape_string($db,$_REQUEST['gentabn']);
		
		$gencon = mysqli_real_escape_string($db,$_REQUEST['gentabcon']);
		$genadh = mysqli_real_escape_string($db,$_REQUEST['gentabadh']);
		
		$genre = mysqli_real_escape_string($db,$_REQUEST['gentabre']);

		$sign = 'confirm';
      	
			if ($sign !='confirm' )
			{
				echo "data not entered";
			}
			else
			{

	      			$insertquery="INSERT INTO generaltab(name, contact, adhar, remarks) VALUES ('$genname', '$gencon', '$genadh','$genre')";


	      			 mysqli_query($db,$insertquery);
	      			   

	      			}


      }





      session_start();

        		  if(isset($_REQUEST['updatemed']))
  		  {
 session_start();
        		  		 
  		  		$id= $_REQUEST['id'];
  		    		  		
  		  		$_SESSION['id'] = $id;

  		  		header("Location: update_med.php");


  		  		    $sql4 = "SELECT * FROM medtable WHERE id=$id";
            $result = mysqli_query($db, $sql4);

                while($row = mysqli_fetch_array($result))
            {

            	$_SESSION['name']=$row['name'];
            	$_SESSION['age']=$row['age'];
            	$_SESSION['disease']=$row['disease'];
            	$_SESSION['medicine']=$row['medicine'];
            	$_SESSION['appointment']=$row['appointment'];
            	$_SESSION['remarks']=$row['remarks'];

            }
            

}
        		  if(isset($_REQUEST['savemed']))
        		  {
    				

        		  		$currentid=$_SESSION['id'];	
        		  	 	$umedn = $_REQUEST['umedn'];
			  	 	  	$umeda = $_REQUEST['umeda'];
			  	 		$umeddis = $_REQUEST['umeddis'];
			  	 		$umedmed = $_REQUEST['umedmed'];
						$umedapp = $_REQUEST['umedapp'];
			   			$umedre = $_REQUEST['umedre'];
			   			

	    			$que3 = "UPDATE medtable SET name='$umedn', age= '$umeda', disease='$umeddis', medicine='$umedmed', appointment='$umedapp', remarks='$umedre' WHERE id=$currentid";
	     			$run = mysqli_query($db,$que3);




	     			if ($run)
				{



					header("Location: update_med.php");
	 	    		 	  echo '<script type = "text/javascript">';
			 		     echo 'alert("updated successfully!  ")';
			 		     echo '</script>';
			 		     header("Location: medtab.php");
			 		    	}
			 		    	else
			 		    	{
			 		    			echo 'not updated';
			 		    	}

		 	}


		 	 if(isset($_REQUEST['delmed']))
     {
        $id = $_REQUEST['id'];

        $sq = "DELETE FROM medtable WHERE id = $id";
        mysqli_query($db, $sq);

        header("Location: medtab.php");
        exit();
    }




 if(isset($_REQUEST['search1']))
        		  {

        		  	$keyword=$_REQUEST['search'];
        		  	$_SESSION['key'] = $keyword;
        		  	header("Location: search_data.php");





        		  	$sql12 = "SELECT * FROM medtable WHERE name='$keyword'";
       				$result1= mysqli_query($db, $sql12);	
       				 while($row = mysqli_fetch_array($result1))	

       				  {

            	$_SESSION['name']=$row['name'];
            	$_SESSION['age']=$row['age'];
            	$_SESSION['disease']=$row['disease'];
            	$_SESSION['medicine']=$row['medicine'];
            	$_SESSION['appointment']=$row['appointment'];
            	$_SESSION['remarks']=$row['remarks'];

            }



        		  }

        		  if(isset($_REQUEST['sclear1']))
        		  {
        		  	header("Location: medtab.php");
}

  	



  	// gen table 



      session_start();

        		  if(isset($_REQUEST['updategen']))
  		  {
 session_start();
        		  		 
  		  		$id= $_REQUEST['id'];
  		    		  		
  		  		$_SESSION['id'] = $id;

  		  		header("Location: update_gen.php");


  		  		    $sql4 = "SELECT * FROM generaltab WHERE id=$id";
            $result = mysqli_query($db, $sql4);

                while($row = mysqli_fetch_array($result))
            {

            	$_SESSION['name']=$row['name'];
            	$_SESSION['contact']=$row['contact'];
            	$_SESSION['adhar']=$row['adhar'];
            
            	$_SESSION['remarks']=$row['remarks'];

            }
            

}

 		 if(isset($_REQUEST['savegen']))
        		  {
    				

        		  		$currentid=$_SESSION['id'];	
        		  	 	$ugenn = $_REQUEST['ugenn'];
			  	 	  	$ugenc = $_REQUEST['ugenc'];
			  	 		$ugena = $_REQUEST['ugena'];
			  	 		
			   			$ugenr = $_REQUEST['ugenr'];
			   			

	    			$que3 = "UPDATE generaltab SET name='$ugenn', contact= '$ugenc', adhar='$ugena', remarks='$ugenr' WHERE id=$currentid";
	     			$run = mysqli_query($db,$que3);




	     			if ($run)
				{



					header("Location: update_med.php");
	 	    		 	  echo '<script type = "text/javascript">';
			 		     echo 'alert("updated successfully!  ")';
			 		     echo '</script>';
			 		     header("Location: gentab1.php");
			 		    	}
			 		    	else
			 		    	{
			 		    			echo 'not updated';
			 		    	}

		 	}




if(isset($_REQUEST['search2']))
        		  {

        		  	$keyword=$_REQUEST['search'];
        		  	$_SESSION['key'] = $keyword;
        		  	header("Location: search_gen_data.php");





        		  	$sql12 = "SELECT * FROM generaltab WHERE name='$keyword'";
       				$result1= mysqli_query($db, $sql12);	
       				 while($row = mysqli_fetch_array($result1))	

       				  {

       			$_SESSION['id']=$row['id'];
            	$_SESSION['name']=$row['name'];
            	$_SESSION['contact']=$row['age'];
            	$_SESSION['adhar']=$row['disease'];
            	
            	$_SESSION['remarks']=$row['remarks'];

            }



        		  }


if(isset($_REQUEST['sclear2']))
        		  {
        		  	header("Location: gentab1.php");
}