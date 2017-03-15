<?php
  $title = "UNCedu | signup";
  $css = "index";

  require '../assets/views/partials/_head.php';
  require '../assets/views/partials/_navbar.php';

  require '../assets/views/signup.php';

  require '../assets/views/partials/_footer.php';
  require '../assets/views/partials/_scripts.php';
?>

  <?php
    // Defining form variables (Thought I didn't have to do this in PHP)
    $email = "";
    $password = "";
    $password2 = "";

    // Error variable
    $error = "";

    // Holds db search info
    $emailsearch = "";
    $emailresult = "";

    // If submit button WAS clicked
    if (!empty($_POST["submit"]) && $_POST["submit"] == "submit") {
      // If all forms filled
      if (empty($_POST["email"]) &&
          empty($_POST["password"]) &&
          empty($_POST["password2"]))
      {
        $error = "Please fill out all forms";
      }


        // If both passwords MATCH
      if (($_POST['password'] !== $_POST['password2']) && $error === "") {
        $error = "Password mismatch.";
      }

      // If email is valid format
      if(eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $_POST["email"])) {
        // Clean variables for SQL queries
        $SAFEemail = mysqli_real_escape_string($db, $_POST['email']);
        $SAFEpassword = mysqli_real_escape_string($db, $_POST['password']);
        // Returns # of rows w/ given email
        $emailsearch = mysqli_query($db, "SELECT *
                                           FROM `users`
                                          WHERE `email` = '$SAFEemail'");
        $emailresult = mysqli_num_rows($emailsearch);
        // If email is UNIQUE
        if ($emailresult == 0) {
          // Saves info to users database
          mysqli_query($db, "INSERT INTO `users` (`email`, `password`)
                                 VALUES ('$SAFEemail', '$SAFEpassword')");
          header("location: signup_success.php"); // Redirect to success page
        }
        else { // If email IN USE
          $error = "Error: Email in use.";
        }
      }
      else { // If email invalid
        $error = "Error: invalid email.";
      }

      require ("includes/formrecovers/signupinput.php"); // Saves user entries
    }
  ?>
