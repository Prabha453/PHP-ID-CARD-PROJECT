<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = 'idcard';
    $conn=mysqli_connect($servername,$username,$password,$dbname);
		if(!$conn){
          die('Could not Connect MySql Server:' .mysql_error());
        }
        session_start();
        if(count($_SESSION) > 0)
        {
          $userid=$_SESSION['uid'];
          $orgname = $_POST['orgname'];
          $orgAddr = $_POST['orgAddr'];
          $scnum = $_POST['scnum'];
        $prolno = $_POST['prolno'];
        $pname = $_POST['pname'];
          $pstand = $_POST['pstand'];
          $dob = $_POST['dob'];
          $pphone = $_POST['pphone'];
        $paddress= $_POST['paddress'];
        $pblood = $_POST['pblood'];
        $temp1 = $_FILES['logoimg']['tmp_name'];
        $pimg1 = './uploads/'.$_FILES['logoimg']['name'];
        move_uploaded_file($temp1, './uploads/' .$_FILES['logoimg']['name']);
          $temp = $_FILES['img']['tmp_name'];
        $pimg = './uploads/'.$_FILES['img']['name'];
        move_uploaded_file($temp, './uploads/' .$_FILES['img']['name']);
        
          $sql = "INSERT INTO iddata(user_id,orgName,orgAddress,orgPhone,prollno,pname,pposition,dob,pphone,paddress,pblood,orglogo,pphoto) VALUES 
          ('$userid','$orgname','$orgAddr','$scnum','$prolno','$pname','$pstand','$dob','$pphone','$paddress','$pblood','$pimg1','$pimg')";
     
          if (mysqli_query($conn, $sql)) {
            @include 'select-design.php';
          } else {
           echo '<a href="IDForm.php">Back</a>';
             echo "Error: " . $sql . ":-" . mysqli_error($conn);
             echo "Please Enter Valid INPUTS";
          }
          mysqli_close($conn); 
        }
      else{
        echo '<script>
        window.alert("Please Login First");
        window.location.href="login.php";
        </script>';
      }
?>