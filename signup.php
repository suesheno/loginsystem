<?php
  include "header.php";
?>
    <section class="main-content pt-5">
      <div class="container">
        <?php
          if( isset( $_GET['error']) ){
            if( $_GET['error'] == 'empty' ){
              echo '<p class="text-warning">Fill All Field</p>';
            }
            elseif ( $_GET['error'] == 'invalidmail' ) {
              echo '<p class="text-warning">Invalid Email</p>';
            }
            elseif ( $_GET['error'] == 'invalidusername' ) {
              echo '<p class="text-warning">Invalid Username</p>';
            }
            elseif ( $_GET['error'] == 'passwordcheck' ) {
              echo '<p class="text-warning">Password don\'t Match</p>';
            }
          }
          elseif ( isset($_GET['signup']) ) {
            if( $_GET['signup'] == 'success' ){
              echo '<p class="text-success">User Successfully Added</p>';
            }
          }
        ?>
        <form action="inc/signUp.inc.php" method="post">
          <div class="form-group">
            <input type="text" class="form-control" name="uid" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="pwd" placeholder="Password">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="pwd-repeat" placeholder="Repeat Password">
          </div>
          <button type="submit" class="btn btn-primary" name="signup-submit">Sign Up</button>
        </form>
      </div>
    </section>



    <?php
      include "footer.php";
    ?>
