
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log In</title>
    <link rel="stylesheet" href="./bootstrap-5.3.3-dist/css/bootstrap.css" />
  </head>
  <body class="bg-light">
    <div class="container">
      <div class="row mt-5">
        <div class="col-6 m-auto bg-white">
          <h1 class="text-center pt-3">Log In</h1>
          
          <form action="view.php" method="post">
            <?php
              if (isset($_GET['error'])) {
                echo "<p class='bg-danger text-center rounded-1 text-white p-1 m-3'>".$_GET['error']."</p>";
              }
            ?>
           
            <div class="input-group mb-3">
              <input
                required
                type="text"
                placeholder="user name"
                class="form-control"
                name="loginID"
              />
            </div>
            
            <div class="input-group mb-3">
              <input
                required
                type="password"
                placeholder="Password"
                class="form-control"
                name="password"
              />
              
            </div>
            
            <div class="d-grid">
              <button type="submit" name="login" class="btn btn-primary">Log In</button>

            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
