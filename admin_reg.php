<?php include "admin_server.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
 <div class="container">
  <div class="py-5 text-center">
    <!-- <img class="d-block mx-auto mb-4" src="logo.jpg" alt="" width="72" height="72"> -->
    <h2>Admin Registration</h2>
  </div>
 </div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
<form action="" method="POST" class="">

      <div class="row">
     <div class="form-group col-md-6  ">

        
   
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="firstName" placeholder="" required name="name">
    </div>
     
    <div class="form-group col-md-6">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="" aria-describedby="emailHelp" name="email">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->  
  </div>

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Old age home Address </label>
    <input type="text" class="form-control" id="address" placeholder="" required name="address">
    <small class="form-text text-muted">Street Address</small>
  </div>

  <div class="row">
  
          <div class="col-md-4 mb-3">
            <label for="state">State</label>
            <input type="text" class="form-control" id="address" placeholder="" required name="state">
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" placeholder="" required name="pincode">
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>

        </div>

        <div>
          <label for="name">old age home name </label>
          <input type="text" class="form-control" id="address" placeholder="" required name="oahname">
        </div>

        <hr class="mb-4">
        <div class="row">
  
          <div class="col-md-4 mb-3">
            <label for="state">Username</label>
            <input type="text" class="form-control" id="usern" placeholder="" required name="username">
          </div>
          <div class="col-md-4 mb-3">
            <label for="zip">Password</label>
           <input type="Password" class="form-control" id="pass" placeholder="" required name="password">
          </div>
          <div class="col-md-4 mb-3">
            <label for="zip">Re-enter Password</label>
            <input type="Password" class="form-control" id="pass" placeholder="" required name="repass">
          </div>

        </div>
      
<hr class="mb-4">
  <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Submit</button>
  </form>
    </div>
  </div>
  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">@Team phantom</p>
   
  </footer>
  </div>
</body>
</html>
