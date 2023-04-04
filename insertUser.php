<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'idcard';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }

     $uname = $_POST['uname'];
     $uemail = $_POST['uemail'];
     $upass = $_POST['upass'];
	 $uphone = $_POST['uphone'];
	 if ($upass != ""){
     $sql = "INSERT INTO users(uname,uemail,upass,uphone) VALUES ('$uname','$uemail','$upass','$uphone')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully ! <br/><a href='login.php'>Login</a>";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
	 }else{
		 echo "Please Fill Password";
	 }
     mysqli_close($conn); 
?>