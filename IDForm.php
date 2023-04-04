<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS\bootstrap.min.css">
    <link rel="stylesheet" href="CSS\Style.css">
    <link rel="stylesheet" href="CSS\bootstrap-icons.css">
  <script src="JS\jquery.min.js"></script>
  <script src="JS\bootstrap.min.js"></script>
  <script src="JS\bootstrap.bundle.min.js"></script>
  <script src="JS\Script.js"></script>
    <title>Create-IdCard</title>
</head>
<body>
  <style>
    sup{
      color:red;
      font-size:20px;
    }
  </style>
  <?php include "navbar.php" ?>
  
<div class="container mt-4">
            <h2 class="text-center p-5">Create Your Identity Card</h2>
            <h4 class="text-center mt-3 bg-success p-3 text-white mx-4 rounded">Enter Campus Details</h4>
            <form class="form-horizontal mt-5" action="input.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label class="control-label col-sm-2" for="ptype">ID Type:</label>
                <div class="col-sm-10">
                  <select onchange="changeTxt(this)" class="form-control" id="ptype" name="ptype">
                      <option value="0" selected>School</option>
                      <option value="1">College</option>
                    
                  </select>
                </div>
              </div>
              <div class="form-group pt-3">
                <label class="control-label col-sm-2" for="orgname"  id="orgnameid">School Name:<sup>*</sup></label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="orgname" placeholder="Eg.Marry High School" name="orgname"  required>
                </div>
              </div>
              <div class="form-group pt-3">
                <label class="control-label col-sm-2"  for="orgAddr" id="orgAddrid">School Address:<sup>*</sup></label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="orgAddr" placeholder="Enter Address" name="orgAddr">
                </div>
              </div>
              <div class="form-group pt-3">
                <label class="control-label col-sm-2" for="logoimg" id="logoimgid">Upload School Logo:<sup>*</sup>  </label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="logoimg" placeholder="choose" name="logoimg" required>
                </div>
              </div>
              <div class="form-group pt-3">
                <label class="control-label col-sm-2"  for="scnum" id="orgphoneid">Phone Number:<sup>*</sup></label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="scnum" placeholder="Enter Campus Phone Number " name="scnum"  required>
                </div>
              </div>
              <h4 class="text-center mt-3 bg-success p-3 text-white mx-4 rounded">Enter Personal Details</h4>
              <div class="form-group pt-3">
                <label class="control-label col-sm-2" id="prolnoid" for="prolno" id="prolnoid">Roll/Admi No:<sup>*</sup></label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="prolno" placeholder="Enter Roll Number" name="prolno">
                </div>
              <div class="form-group pt-3">
                <label class="control-label col-sm-2" for="pname">Name:<sup>*</sup></label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="pname" placeholder="Enter name" name="pname"  required>
                </div>
              </div>
              <div class="form-group pt-3">
                <label class="control-label col-sm-2" for="proll" id="rollid">Standard:<sup>*</sup></label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="proll" placeholder="Enter Standard" name="pstand"  required>
                </div>
              </div>
              <div class="form-group pt-3">
                <label class="control-label col-sm-2"  for="dob" id="dobid">DOB:<sup>*</sup></label>
                <div class="col-sm-10">
                  <input type="date" class="form-control" id="dob" placeholder="Enter Date Of Birth" name="dob"  required>
                </div>
              </div>
               <div class="form-group pt-3">
                <label class="control-label col-sm-2" for="pphone">Phone:<sup>*</sup></label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="pphone" placeholder="Enter Phone Number" name="pphone"  required>
                </div>
              </div>
              <div class="form-group pt-3">
                <label class="control-label col-sm-2" for="paddress">Adress:<sup>*</sup></label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="paddress" placeholder="Enter Address" name="paddress"  required>
                </div>
              </div>
              <div class="form-group pt-3">
                <label class="control-label col-sm-2" for="pblood">Blood group:<sup>*</sup></label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="pblood" placeholder="Enter Blood Group" name="pblood">
                </div>
              </div>
              <div class="form-group pt-3">
                <label class="control-label col-sm-2" for="img">Upload Person Photo:<sup>*</sup></label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" id="img" placeholder="choose" name="img"  required>
                </div>
              </div>
              <div class="form-group pt-3">        
                <div class="col-sm-offset-2 col-sm-10">
                  <button type="submit" class="btn btn-default bg-success text-white">Submit</button>
                </div>
              </div>
            </form>
            </div>
</div>
<?php include "footer.php" ?>
</body>
</html>