<?php
 ob_start();
 session_start();
 require_once '../assets/php/dbConnect.php';

 // it will never let you open index(login) page if session is set
 if ( isset($_SESSION['user'])!="" ) {
  header("Location: index.php");
  exit;
 }

 $error = false;

 if( isset($_POST['btn-login']) ) {

  // prevent sql injections/ clear user invalid inputs
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $password = trim($_POST['password']);
  $password = strip_tags($password);
  $password = htmlspecialchars($password);
  // prevent sql injections / clear user invalid inputs

  if(empty($email)){
   $error = true;
   $emailError = "Please enter your email address.";
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  }

  if(empty($password)){
   $error = true;
   $passwordError = "Please enter your password.";
  }

  // if there's no error, continue to login
  if (!$error) {

   $password = hash('sha256', $pass); // password hashing using SHA256

   $res=mysql_query("SELECT userId, userFirstName, userLastName, userPassword FROM users WHERE userEmail='$email'");
   $row=mysql_fetch_array($res);
   $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row

   if( $count == 1 && $row['userPassword']==$password ) {
    $_SESSION['user'] = $row['userId'];
    header("Location: index.php");
   } else {
    $errMSG = "Incorrect Credentials, Try again...";
   }

  }

 }
?>
<!-- Login Grid Section -->
    <main class="container">
      <section id="login">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2>Login</h2>
              <hr class="star-primary">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
              <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
              <form name="loginForm" id="loginForm"  method='post' validate>
                <div class="row control-group">
                  <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Please enter your email.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="row control-group">
                  <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" id="password" required data-validation-required-message="Please enter your password.">
                  </div>
                </div>
                <button type="submit" class="btn btn-default btn-lg" name="btn-login">Login</button>
              </form>
            </div>
          </div>
       </div>
     </section>
   </main>
