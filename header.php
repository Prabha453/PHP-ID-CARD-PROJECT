
<nav class="navbar navbar-default p-3 bg-dark">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#" style="color:white; font-size:20px;"><b>IDENTY CARD<sub> System</b></sub> </a>
    </div>
	  <?php 
		session_start();
		if(count($_SESSION) > 0){
			echo ' <div class="col-md-6 text-md-end">
      <a href="cart.php" class="text-white">'.$_SESSION["username"].'</a> 
      <span class="text-muted">|</span> 
      <a href="logout.php" class="text-white">Logout</a>';
		}else{
			echo '<a href="login.php" class="text-white">Login</a>';
		}
	  ?>
  </div>
</nav>
