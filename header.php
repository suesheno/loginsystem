<?php
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
    <body>

    <header>
      <div class="container pt-3">
        <div class="row">
          <div class="col-4">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link active" href="#">Home</a>
              </li>
            </ul>
          </div>
          <div class="col-8 d-flex justify-content-around">
            <?php
              if( isset($_SESSION['userId']) ){
                echo '<form action="inc/logout.inc.php" method="post">
                  <div class="form-row">
                    <button type="submit" class="btn btn-dark" name="logout-submit">Sign Out</button>
                  </div>
                </form>';
              }
              else {
                echo '<form action="inc/login.inc.php" method="post">
                  <div class="form-row">
                    <div class="col">
                      <input type="text" class="form-control" name="mailuid" placeholder="Username/Email">
                    </div>
                    <div class="col">
                      <input type="password" class="form-control" name="pwd" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary" name="login-submit">Sign in</button>
                  </div>
                </form>
                <a href="signup.php" class="btn btn-secondary">Sign Up</a>';
              }
            ?>


          </div>
        </div>
      </div>
    </header>
