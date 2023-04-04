
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="CSS\Style.css">
    <link rel="stylesheet" href="CSS\bootstrap-icons.css">
  <script src="JS\jquery.min.js"></script>
  <script src="JS\bootstrap.min.js"></script>
  <script src="JS\bootstrap.bundle.min.js"></script>
  <script src="JS\Script.js"></script>
    <title>ID CARD||DESIGN 7</title>
</head>
<body>
    <style>
          body
      {
        box-sizing: border-box;
        background-color:white;
        font-family:roboto;
        
      }
        .container
        {
  width:40%;
    color:white;
  padding:10px; 
  border-radius:10px;
  box-shadow: 1px 1px 7px 1px black;

        }
    
        @media only screen and (max-width:900px)
{
   .container{
    width:90%;
    }
}
.card
{
    background-image: url('IMAGES/bg-1.jpg');
    background-repeat: no-repeat;
    background-size: 100% 100%;
    background-position:center;
  border:1px solid black;

}
#labeldel
{
    
  color:white;
  -webkit-text-stroke-width: 0.1px;
-webkit-text-stroke-color:black;

}
#namedel{
color:white;
font-weight:bold;
}

    </style>
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
      $userid=$_SESSION['uid'];
   $sql = "SELECT * FROM iddata WHERE user_id='$userid' ORDER BY slno DESC LIMIT 1";
      
 $data = mysqli_query($conn, $sql);
      
if ($data->num_rows > 0) {

while($row = $data->fetch_assoc()) 
{
  
  echo '
  <div class="container">
<div class="card m-1">
    <div class="head text-white text-center">
    <h3 class="text-center text-danger"><img src="'.$row["orglogo"].'" alt="logo" id="logo" width="40" height="40">    <b>'.$row["orgName"].'</b></h3>
    <small class="text-center text-primary"><b>'.$row["orgAddress"].'</b></small>
    <h6 class="text-center text-dark" ><b><pre>Phone:'.$row["orgPhone"].'</pre><b></h6>
    </div>
    <h3 class="text-center text-primary mt-2">IDENTY CARD</h3>
    <div class="text-center mt-3">
    <img src="'.$row["pphoto"].'" alt="Card image cap"  width="180px" height="180px" style="border-radius:100px; border:3px solid aquamarine;">
    </div>
    <div class="card-body text-center">
      <h3 class="card-title" id="namedel">'.$row["pname"].'</h3>
      <p class="card-text" id="namedel">'.$row["pposition"].'</p>
      </div>
       <div class="details p-2 mx-4">
    <label for="name1"><b id="labeldel"> Roll No </b> :  '.$row["prollno"].'</label><br>
    <label for="dob"><b id="labeldel">DOB</b> :  '.$row["dob"].'</label><br>
    <label for="phone"><b id="labeldel">Phone</b> :  '.$row["pphone"].'</label><br>
     <label for="blood"><b id="labeldel">BloodGroup</b>  :  '.$row["pblood"].'</label><br>
    <label for="adr"><b id="labeldel">Address </b>: '.$row["paddress"].'</label><br>
    </div>
    </div>
</div>
<div class="text-center">
<a href="edit.php?slno='.$row["slno"].'" id="printid1" class="btn bg-success mt-3 text-white">Add Another</a>
<button class="btn bg-success mt-3 text-white" id="printid">PRINT</button>'; 
}
} else {
echo "NO RESULT FOUND";
}
   mysqli_close($conn); 
?>
<script>
$(document).ready(function()
{
$("#printid").click(function()
{
 $("#printid").hide();
 $("#printid1").hide();
  window.print();
  $("#printid").show();
 $("#printid1").show();
})
});
</script>
</body>
</html>

