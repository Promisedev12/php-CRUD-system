
<?php 
if (isset($_POST['login'])) {
  $loginID = $_POST['loginID'];
  $pass =$_POST['password'];
  require 'connect.php';
  $sql  = "SELECT * FROM users WHERE user_name = '$loginID';";
  $results = mysqli_query($conn, $sql);
  if (mysqli_num_rows($results) > 0) {
    $userData = mysqli_fetch_assoc($results);
    echo $userData['password'];
    if ($userData['password'] === $pass) {
      header('Location: view.php');
    }
    else{
      header('Location: index.php?error=Incorrect password try again');
      // echo $userData['password'];
      // echo $pass;
    }
  }
  else{
    header('Location: index.php?error=User does not exist');
  }
}
?>
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
  <div class="container mt-5">
    <header class="mb-4">
      <h2>Pefscom Interns</h2>
      <div class="input-group searc-box">
        <input type="search" class="form-control search-input rounded" placeholder="Search intern" aria-label="Search" aria-describedby="search-addon" />
        <button type="button" class="btn btn-primary" data-mdb-ripple-init>
          <i class="fa-solid fa-magnifying-glass"></i>
        </button>
      </div>
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
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody class="td">
        <?php
        $sql = "SELECT `id`, `name`, `martricle`,  `shift`, `contact`, `school`, `specialty` FROM `intern`;";
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
              <td><a class="btn btn-sm" href="edit.php?id=<?php echo $row['id']; ?>"><i class="fa-solid action text-primary mx-3 fa-pen-to-square"></i></a>
                &nbsp;
                <a class="btn btn-sm  del-btn" href=""><i class="fa-solid action text-danger fa-trash"></i></a>
                <a class="btn btn-sm " href="studentd_detail.php?id=<?php echo $row['id']; ?>"><i class="fa-solid action text-info mx-3 fa-eye"></i></a>
              </td>
            </tr>

        <?php       }
        }
        ?>



      </tbody>
    </table>
    <div class="text-center">
      <a href="add.php" class="btn btn-primary btn-lg"><i class="fa-solid fa-plus"></i> Add Student</a>
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
  <script>
    //js for the search
    const searchInput = document.querySelector('.search-input');
    searchInput.addEventListener('input', function() {
      let searchData = this.value;

      fetch(`search.php?query=${searchData}`)
        .then((response) => response.json())

        .then((data) => {
          const td = document.querySelector('.td');
          let values = ``;
          if (data === 'No student found') {
            td.innerHTML = `<h3 class="text-danger text-center">${data}</h3>`;
          } else {
            data.forEach((items) => {
              values += `<tr>
          <td class="id">${items.id}</td>
          <td >${items.martricle}</td>
          <td class="name">${items.name}</td>
          <td>${items.email}</td>
          <td>${items.shift}</td>
          <td>${items.contact}</td>
          <td>${items.school}</td>
          <td>${items.specialty}</td>
          <td><a class="btn btn-sm " href='edit.php?id=${+items.id}' ><i class="fa-solid action text-primary mx-3 fa-pen-to-square"></i></a>
          <a class="btn btn-sm  del-btn" onclick=" const row = this.closest('tr');
      id = row.querySelector('.id').textContent;
      name = row.querySelector('.name').textContent;
      document.querySelector('.st-name').textContent = name;
      showMordal();"  ><i class="fa-solid action text-danger fa-trash"></i></a>
      <a class="btn btn-sm " href='studentd_detail.php?id=${+items.id}' ><i class="fa-solid action text-info mx-3 fa-eye"></i></a>
          </td>
        </tr>`;
            });
            td.innerHTML = values;
          }
        });
    });
  </script>
  <script src="./script.js"></script>
</body>

</html>