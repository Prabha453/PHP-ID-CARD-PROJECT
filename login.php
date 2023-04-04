<!DOCTYPE html>
<html lang="en">
<head>
  <title>ID CARD || Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="CSS\bootstrap.min.css">
    <link rel="stylesheet" href="CSS\Style.css\">
    <link rel="stylesheet" href="CSS\bootstrap-icons.css">
  <script src="JS\jquery.min.js"></script>
  <script src="JS\bootstrap.min.js"></script>
  <script src="JS\bootstrap.bundle.min.js"></script>
  <script src="JS\Script.js"></script>
  <style>
  .container{
	  color: black;
  }
  </style>
</head>
<body>
<style>
  body
  {
    color:white;
  }
  label
  {
    font-family:verdana;
  }
</style>
<?php include "header.php"; ?>
<div class="container mt-4">
<div class="img-reg text-center">
  <img src="IMAGES\comment-3.png" alt="" width="100" height="100">
  <h2>Login User</h2>  
</div>    
  <form class="form-horizontal" action="loginUser.php" method="post">
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="uemail">Email:</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="uemail" placeholder="Enter mail" name="uemail" required>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-sm-2" for="upass">Password:</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="upass" placeholder="Enter password" name="upass" required>
      </div>
    </div> 
    <div class="form-group mt-3">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default bg-success text-light">Login</button>
		<a href="reguser.php" class="btn btn-default  bg-success text-light">Register</a>
    <button type="reset" class="btn btn-default bg-success text-light">Reset</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>



