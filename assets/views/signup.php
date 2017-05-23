<?php
if($_POST != null) { echo $_GET; }
?>
<!-- Login Grid Section -->
    <main class="container">
      <section class="success" id="register">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2>Sign Up</h2>
              <hr class="star-light">
            </div>
          </div>
          <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
              <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
              <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
              <form name="registerForm" id="registerForm" method = "post" validate>
                <div class="row control-group">
                  <div class="form-group col-xs-12 col-sm-6 floating-label-form-group controls">
                    <label>First Name</label>
                    <input type="text" class="form-control" name ="firstname" placeholder="First Name" id="firstname" required data-validation-required-message="Please enter your first name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group col-xs-12 col-sm-6 floating-label-form-group controls">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name= "lastname" placeholder="Last Name" id="lastname" required data-validation-required-message="Please enter your last name.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="row control-group">
                  <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Email Address</label>
                    <input type="email" class="form-control" name ="email" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="row control-group">
                  <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password" id="password" required data-validation-required-message="Please enter a password.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="row control-group">
                  <div class="form-group col-xs-12 floating-label-form-group controls">
                    <label>Password Confirmation</label>
                    <input type="password" class="form-control" name="password" placeholder="Password Confirmation" id="password2" required data-validation-required-message="Please enter a password.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="row">
                  <div class="form-group col-xs-12">
                    <button fill="#C0C0C0" type="submit" class="btn btn-default btn-lg" name="btn-signup">
                      Register</button>
                    </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

  <?php
/*
    function SignUp()
{
if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM users WHERE username = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		newuser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_POST['submit']))
{
	SignUp();
} */
 ?>


 <?php
 ob_start();
 session_start();
 if( isset($_SESSION['user'])!="" ){
  header("Location: index.php");
 }
 include_once '../assets/php/dbConnect.php';

 $error = false;

 if ( isset($_POST['btn-signup']) ) {

  // clean user inputs to prevent sql injections
  $firstname = trim($_POST['firstname']);
  $firstname = strip_tags($firstname);
  $firstname = htmlspecialchars($firstname);

  $lastname = trim($_POST['lastname']);
  $lastname = strip_tags($lastname);
  $lastname = htmlspecialchars($lastname);

  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $password = trim($_POST['password']);
  $password = strip_tags($password);
  $password = htmlspecialchars($password);

  // basic name validation
  if (empty($firstname)) {
   $error = true;
   $firstnameError = "Please enter your first name.";
 } else if (empty($lastname)) {
  $error = true;
  $lastnameError = "Please enter your last name.";
} else if (strlen($firstname) < 3) {
   $error = true;
   $firstnameError = "Name must have atleat 3 characters.";
 } else if (strlen($lastname) < 3) {
  $error = true;
  $lastnameError = "Name must have atleat 3 characters.";
} else if (!preg_match("/^[a-zA-Z ]+$/",$firstname)) {
   $error = true;
   $firstnameError = "Name must contain alphabets and space.";
 } else if (!preg_match("/^[a-zA-Z ]+$/",$lastname)) {
  $error = true;
  $lastnameError = "Name must contain alphabets and space.";
  }

  //basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  } else {
   // check email exist or not
   $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Provided Email is already in use.";
   }
  }
  // password validation
  if (empty($password)){
   $error = true;
   $passwordError = "Please enter password.";
 } else if(strlen($password) < 6) {
   $error = true;
   $passwordError = "Password must have atleast 6 characters.";
  }

  // password encrypt using SHA256();
  $password = hash('sha256', $password);

  // if there's no error, continue to signup
  if( !$error ) {

   $query = "INSERT INTO users(userFirstName,userLastName, userEmail,userPassword) VALUES('$firstname','$lastname','$email','$password')";
   $res = mysql_query($query);

   if ($res) {
    $errTyp = "success";
    $errMSG = "Successfully registered, you may login now";
    unset($firstname);
    unset($lastname);
    unset($email);
    unset($password);
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later...";
   }

  }


 }
?>
