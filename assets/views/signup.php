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




<!-- Login Grid Section -->
<main class="container">
<section class="success" id="register">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>Register</h2>
                <hr class="star-light">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form name="registerForm" id="registerForm" validate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>First Name</label>
                            <input type="text" class="form-control" placeholder="First Name" id="firstname" required data-validation-required-message="Please enter your first name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Last Name</label>
                            <input type="text" class="form-control" placeholder="Last Name" id="lastname" required data-validation-required-message="Please enter your last name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Code</label>
                            <textarea type="num" class="form-control" placeholder="Class Code" id="classCode" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg">Register</button>

                </form>
            </div>
        </div>
    </div>
</section>
</main>
