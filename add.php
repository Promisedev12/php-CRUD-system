<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Add Student</title>
  <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.css" />
  <link rel="stylesheet" href="./fontawesome-free-6.5.2-web/css/all.css" />
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <div class="container d-flex flex-column justify-content-center aling-items-center mt-2">
    <h1 class="text-center">Add Student</h1>
    <div class="my-1">
      <form method="post" style="display: flex; flex-direction: column; align-items: center">
        <div class="input-container d-flex">
          <div class="right">
            <div class="form-group my-2">
              <label class="my-1" for="exampleInputEmail1">Name</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
            </div>
            <div class="form-group my-2">
              <label class="my-1" for="exampleInputEmail1">Martricle</label>
              <input name="martricle" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
            </div>
            <div class="form-group my-2">
              <p>Gender:</p>
              <select name="gender" class="form-select mb-3" id="">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
            <div class="form-group my-2">
              <label class="my-1" for="exampleInputEmail1">Shift</label>
              <input name="shift" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
            </div>
            <div class="form-group my-2">
              <label class="my-1" for="exampleInputEmail1">Date Of Birth</label>
              <input name="dob" type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
            </div>
          </div>
          <div class="left">

            <div class="form-group my-2">
              <label class="my-1" for="exampleInputEmail1">Specialty</label>
              <input name="specialty" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
            </div>
            <div class="form-group my-2">
              <label class="my-1" for="exampleInputEmail1">School</label>
              <input name="schl" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
            </div>
            <div class="form-group my-2">
              <label class="my-1" for="exampleInputEmail1">Region</label>
              <input name="region" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
            </div>
            <div class="form-group my-2">
              <label class="my-1" for="exampleInputEmail1">contact</label>
              <input name="contact" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
            </div>
            <div class="form-group my-2">
              <label class="my-1" for="exampleInputEmail1">Fee</label>
              <input name="fee" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
            </div>
          </div>
        </div>

        <button type="submit" name="submit" class="btn btn-primary btn-lg"> Submit</button>
      </form>
    </div>
  </div>
</body>

</html>
<?php
include "connect.php";
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $martricle = $_POST['martricle'];
  $gender = $_POST['gender'];
  $shift = $_POST['shift'];
  $dob = $_POST['dob'];
  $school = $_POST['schl'];
  $specialty = $_POST['specialty'];
  $region = $_POST['region'];
  $contact = $_POST['contact'];
  $fee = $_POST['fee'];

  $sql = "INSERT INTO `intern` VALUES ('','$name','$martricle','$gender','$shift','$dob','$school','$specialty','$region','$contact','$fee')";
  $result = $conn->query($sql);
  if ($result == TRUE) {
    echo "New record created successfully.";
    header('Location: view.php');
  } else {
    echo "Error:" . $sql . "<br>" . $conn->error;
  }
  $conn->close();
}
?>