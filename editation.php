<?php
     $servername='localhost';
     $username='root';
     $password='';
     $dbname = 'idcard';
     $conn=mysqli_connect($servername,$username,$password,$dbname);
        if(!$conn){
           die('Could not Connect MySql Server:' .mysql_error());
        }
if(isset($_POST['add']))
{   

    session_start();
       $userid = $_SESSION['uid'];
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
        $pimg1 =  $_POST['logoimg'];
        $temp = $_FILES['img']['tmp_name'];
        $pimg = 'uploads/'.$_FILES['img']['name'];
        move_uploaded_file($temp, './uploads/' .$_FILES['img']['name']);
        $sql = "INSERT INTO iddata(user_id,orgName,orgAddress,orgPhone,prollno,pname,pposition,dob,pphone,paddress,pblood,orglogo,pphoto) VALUES 
        ('$userid','$orgname','$orgAddr','$scnum','$prolno','$pname','$pstand','$dob','$pphone','$paddress','$pblood','$pimg1','$pimg')";
        if (mysqli_query($conn, $sql)) {

            echo "<font color='green'>Data added successfully.";
            echo '<br/>
            <a href="select-design.php" class="btn">View Result</a>';

        } else {
           echo "Error: " . $sql . ":-" . mysqli_error($conn);
        }
        }else{
            echo "Please Fill Password";
        }
        mysqli_close($conn); 
   ?>