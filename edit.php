<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Update</title>
  <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.css" />
  <link rel="stylesheet" href="./fontawesome-free-6.5.2-web/css/all.css" />
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <?php
  include "connect.php";
  if (isset($_POST['update'])) {
    $stu_id = $_POST['id'];
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

    $sql = "UPDATE `intern` SET `name`='$name',`martricle`='$martricle',`gender`='$gender',`shift`='$shift',`dob`='$dob',`school`='$school',`specialty`='$specialty',`region`='$region',`contact`='$contact',`fee`='$fee'  WHERE `id`='$stu_id'";
    $result = $conn->query($sql);
    if ($result == TRUE) {
      echo "Record updated successfully.";
      header('Location: view.php');
    } else {
      echo "Error:" . $sql . "<br>" . $conn->error;
    }
  }

  if (isset($_GET['id'])) {
    $stu_id = $_GET['id'];
    $sql = "SELECT * FROM `intern` WHERE id='$stu_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        $id = $row['id'];
        $name = $row['name'];
        $martricle = $row['martricle'];
        $gender = $row['gender'];
        $shift = $row['shift'];
        $dob = $row['dob'];
        $school = $row['school'];
        $specialty = $row['specialty'];
        $region = $row['region'];
        $contact = $row['contact'];
        $fee = $row['fee'];
      }
  ?>
      <div class="container d-flex flex-column justify-content-center aling-items-center mt-2">
        <h1 class="text-center">Update Student</h1>
        <div class="my-1">
          <form method="post" style="display: flex; flex-direction: column; align-items: center">
            <div class="input-container d-flex">
              <div class="right">
                <div class="form-group my-2">

                  <label class="my-1" for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" value="<?php echo $name; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
                <div class="form-group my-2">
                  <label class="my-1" for="exampleInputEmail1">Martricle</label>
                  <input name="martricle" value="<?php echo $martricle; ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
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
                  <input name="shift" value="<?php echo $shift; ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
                <div class="form-group my-2">
                  <label class="my-1" for="exampleInputEmail1">Date Of Birth</label>
                  <input name="dob" type="date" value="<?php echo $dob; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
              </div>
              <div class="left">

                <div class="form-group my-2">
                  <label class="my-1" for="exampleInputEmail1">Specialty</label>
                  <input name="specialty" value="<?php echo $specialty; ?>" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div class="form-group my-2">
                  <label class="my-1" for="exampleInputEmail1">School</label>
                  <input name="schl" type="text" value="<?php echo $school; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
                <div class="form-group my-2">
                  <label class="my-1" for="exampleInputEmail1">Region</label>
                  <input name="region" type="text" value="<?php echo $region; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
                <div class="form-group my-2">
                  <label class="my-1" for="exampleInputEmail1">contact</label>
                  <input name="contact" type="number" value="<?php echo $contact; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>
                <div class="form-group my-2">
                  <label class="my-1" for="exampleInputEmail1">Fee</label>
                  <input name="fee" type="number" value="<?php echo $fee; ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
                </div>

              </div>
            </div>

            <button type="submit" name="update" class="btn btn-primary btn-lg"> Update</button>
          </form>
        </div>
      </div>



  <?php
    } else {
      header('Location: view.php');
    }
  }
  ?>
</body>

</html>