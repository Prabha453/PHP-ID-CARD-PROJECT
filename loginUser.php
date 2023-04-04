<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'idcard';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }

     $uemail = $_POST['uemail'];
     $upass = $_POST['upass'];
	 if ($upass != ""){
     $sql = "SELECT uid,uemail,upass FROM users WHERE uemail='$uemail'";
	 $data = mysqli_query($conn, $sql);
	 //print_r($data);
     if ($data->num_rows > 0) {
  
  while($row = $data->fetch_assoc()) {
	 if($upass == $row['upass']){
		 session_start();
		 $_SESSION['username'] = $uemail;
		 $_SESSION['uid'] = $row['uid']; 	
		 @include("index.php");
	 }else{
		 @include("login.php");
	 }
  }
}
else{
	echo'<script>
	window.alert("Please Enter Valid Username Or PassWord");
	window.location.href="login.php";
	</script>';
}
	 }else{
		 echo "Please Fill Password";
	 }
     mysqli_close($conn); 
?>