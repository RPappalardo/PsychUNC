<?php
  $title = "UNCedu | login";
  $css = "index";
require '../assets/php/dbConnect.php';

  require '../assets/views/partials/_head.php';
  require '../assets/views/partials/_navbar.php';

  require '../assets/views/login.php';

  require '../assets/views/partials/_footer.php';
  require '../assets/views/partials/_scripts.php';
?>

  <?php
  session_start();
  if(isset($_SESSION['username'])) {
      header("Location: index.php");
  }
  ?>
