<?php
session_start();
error_reporting(0);
require "includes\dbh.inc.php";
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- DATATABLES -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

  <header>
     <!-- NAV -->
      <nav class="nav-header-main">
        <ul>
          <li><a href="index.php">Domov</a></li>
          <?php  
          if ($_SESSION['uid'] == 'admin'){?>
            <li><a href="pregledNarocil.php">Naročila</a></li>
          <?php } ?>
        </ul>
      <div class="header-login">
        <?php
        if (!isset($_SESSION['uid'])) {
          echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="E-mail/Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
          </form>
          <a href="registration.php" class="header-signup">Signup</a>';
        }
        else  {
          echo '<form action="includes/logout.inc.php" method="post">
            Pozdravljeni, '.$_SESSION["uid"].'&nbsp
            <button type="submit" name="login-submit">Logout</button>
          </form>';
        }
        ?>
      </div>
      </nav>
    </header>



