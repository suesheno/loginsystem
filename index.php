<?php
  include "header.php";
?>
    <section class="main-content">
      <?php
        if( isset($_SESSION['userId']) ){
          echo "<h1>You are logged in</h1>";
        }
        else {
          echo "<h1>You are logged out</h1>";
        }
      ?>


    </section>



    <?php
      include "footer.php";
    ?>
