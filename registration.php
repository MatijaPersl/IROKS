<?php
  require 'header.php';
  error_reporting(0);
?>

<main>
  <div class ="wrapper-main">
    <section class="section-default">
      <h1 class = "signup">Signup</h1>
      <?php
        // vsi errorji pri registraciji
        if (isset($_GET["error"])) {
          if ($_GET["error"] == "emptyfields") {
            echo '<p class="signuperror">Vnesite podatke</p>';
          }
          else if ($_GET["error"] == "invaliduidmail") {
            echo '<p class="signuperror">Napačen username ali mail</p>';
          }
          else if ($_GET["error"] == "invaliduid") {
            echo '<p class="signuperror">Napačen username</p>';
          }
          else if ($_GET["error"] == "invalidmail") {
            echo '<p class="signuperror">Napačen email</p>';
          }
          else if ($_GET["error"] == "passwordcheck") {
            echo '<p class="signuperror">Geslo se ne ujema</p>';
          }
          else if ($_GET["error"] == "usertaken") {
            echo '<p class="signuperror">Username je že v uporabi</p>';
          }
        }
        // uspešna registracija
        else if ($_GET["signup"] == "success") {
          echo '<p class="signupsuccess">Signup successful!</p>';
        }
        
      ?>
      <!-- form za registracijo -->
      <form class="form-signup" action="includes\registration.inc.php" method="post">
        <input type="text" name="uid" placeholder="Username"><br>
        <input type="text" name="mail" placeholder="Email"><br>
        <input type="password" name="pwd" placeholder="Password"><br>
        <input type="password" name="pwd-repeat" placeholder="Repeat Password"><br>
        <button type ="submit" name ="signup-submit">Signup</button>
      </form>
    </section>
  </div>
</main>



<?php
  require 'footer.php';
?>