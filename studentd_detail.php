<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Pepscom interns</title>
  <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.css" />
  <link rel="stylesheet" href="./fontawesome-free-6.5.2-web/css/all.css" />
  <link rel="stylesheet" href="./style.css" />
</head>

<body>
  <div class="mx-3 mt-5">
    <header class="mb-4">
      <h2>Student Full Details</h2>

    </header>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Martricle</th>
          <th scope="col">Name</th>
          <th scope="col">Shift</th>
          <th scope="col">Contact</th>
          <th scope="col">School</th>
          <th scope="col">Specialty</th>

          <th scope="col">Gender</th>
          <th scope="col">Date of Birth</th>
          <th scope="col">Fee Paid</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody class="td">
        <?php
        if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $sql = "SELECT *FROM `intern` WHERE id = '$id';";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
              <tr>
                <td class="id"><?php echo $row['id']; ?></td>
                <td><?php echo $row['martricle']; ?></td>
                <td class="name"><?php echo $row['name']; ?></td>
                <td><?php echo $row['shift']; ?></td>
                <td><?php echo $row['contact']; ?></td>
                <td><?php echo $row['school']; ?></td>
                <td><?php echo $row['specialty']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['dob']; ?></td>
                <td><?php echo $row['fee']; ?></td>
                <td><a class="btn btn-sm" href="edit.php?id=<?php echo $row['id']; ?>"><i class="fa-solid action text-primary mx-3 fa-pen-to-square"></i></a>
                  &nbsp;
                  <a class="btn btn-sm  del-btn" href=""><i class="fa-solid action text-danger fa-trash"></i></a>

                </td>
              </tr>

        <?php       }
          }
        }

        ?>



      </tbody>
    </table>
    <div class="text-center">
      <a href="view.php" class="btn btn-primary btn-lg">Back to Dashboad</a>
    </div>
  </div>
  <div class="delet-mordal hide ">
    <p class="text-center">Are you sre you want ot delete the student <span class="st-name"></span></p>
    <div class="btn-groups">
      <a href="" class="btn no btn-info ">No</a>
      <a class="btn yes mx-3 btn-danger">Yes</a>

    </div>

  </div>
  <div class="overaly hide"></div>
  <script src="./script.js"></script>
</body>

</html>