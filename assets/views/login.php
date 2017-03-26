<?php
if($_POST != null) { echo $_GET; }
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
              <form name="loginForm" id="loginForm" action='login.php' method='post' validate>
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
                <button type="submit" class="btn btn-default btn-lg">Login</button>
              </form>
            </div>
          </div>
       </div>
     </section>
   </main>
   <?php function Login()
{
if(empty($_POST['email']))
{
$this->HandleError("Email is empty!");
return false;
}
if(empty($_POST['password']))
{
$this->HandleError("Password is empty!");
return false;
}
$email = trim($_POST['email']);
$password = trim($_POST['password']);
if(!$this->CheckLoginInDB($email,$password))
{
return false;
}
session_start();
$_SESSION[$this->GetLoginSessionVar()] = $email;
return true;
} ?>


<?php function CheckLoginInDB($email,$password)
{
if(!$this->DBLogin())
{
$this->HandleError("Database login failed!");
return false;
}
$email = $this->SanitizeForSQL($email);
$pwdmd5 = md5($password);
$qry = "Select name, email from $this->tablename ".
" where email='$email' and password='$pwdmd5' ".
" and confirmcode='y'";
$result = mysql_query($qry,$this->connection);
if(!$result || mysql_num_rows($result) <= 0)
{
$this->HandleError("Error logging in. ".
"The email or password does not match");
return false;
}
return true;
} ?>
