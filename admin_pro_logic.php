<?php

    // Don't display server errors 
    ini_set("display_errors", "off");

    // Initialize a database connection
    $conn = mysqli_connect("localhost", "root", "", "oahadmin");

    // Destroy if not possible to create a connection
    if(!$conn)
    {
        echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establisDatabase Connection<h3>";
    }
    


    // Get data to display on index page
    $sql = "SELECT * FROM regdata";
    $query = mysqli_query($conn, $sql);
 

    // edit

    if(isset($_REQUEST['saved']))
    {
        // $namen= $_REQUEST['namen'];
        // $emailn= $_REQUEST['emailn'];
        // $addn= $_REQUEST['addressn'];
        // $staten=$_REQUEST['staten'];
        // $pincn=$_REQUEST['pincoden'];

        // $usernn= $_REQUEST['usernamen'];
        // $oahnn= $_REQUEST['oahnamen'];

        // $querry1 = mysqli_query($db,"SELECT *FROM regdata WHERE Binary username ='$usernn'");

        //     if(mysqli_num_rows($querry1)>0)
        //     {


        // $sql = "INSERT INTO regdata(name,datep,pin,address,contact,post) VALUES('$userndata','$datep','$pin','$address','$contact','$postd')";
        // mysqli_query($conn, $sql);

        // //echo $sql;

        // header("Location:NGO_home.php?");

        // exit();
    }

     {
        if(isset($_REQUEST['id']))
        {
        $id = $_REQUEST['id'];

        $sql = "SELECT * FROM ngodata WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        }
    }

     if(isset($_REQUEST['delete']))
     {
        $id = $_REQUEST['id'];

        $sql = "DELETE FROM ngodata WHERE id = $id";
        mysqli_query($conn, $sql);

        header("Location: NGO_home.php");
        exit();
    }





    if(isset($_REQUEST['enter']))
    {
           
       
        $pinc = $_REQUEST['pin1'];
        

         $fquery = "SELECT * FROM ngodata WHERE pin = $pinc";
         $filter = mysqli_query($conn, $fquery);


    }
   

?>