<?php
    /*
    $ID = $_POST['user'];
    $Password = $_POST['password'];
    */
    function SignIn()
    {
    session_start();   //starting the session for user profile page
    if(!empty($_POST['username']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
    {
            	$query = mysql_query("SELECT *  FROM UserName where userName = '$_POST[username]' AND password = '$_POST[password]'") or die(mysql_error());
            	$row = mysql_fetch_array($query) or die(mysql_error());
            	if(!empty($row['userName']) AND !empty($row['password']))
            	{
                        	$_SESSION['userName'] = $row['password'];
                        	echo "SUCCESSFULLY LOGGED IN";
            	}
            	else
            	{
                        	echo " INCORRECT ID AND PASSWORD... PLEASE RETRY...";
            	}
    }
    }
    if(isset($_POST['submit']))
    {
            	SignIn();
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
                   <form name="loginForm" id="loginForm" validate>
                       <div class="row control-group">
                           <div class="form-group col-xs-12 floating-label-form-group controls">
                               <label>User Name</label>
                               <input type="text" class="form-control" placeholder="User Name" id="userName" required data-validation-required-message="Please enter user name.">
                               <p class="help-block text-danger"></p>
                           </div>
                       </div>
                       <div class="row control-group">
                           <div class="form-group col-xs-12 floating-label-form-group controls">
                               <label>Password</label>
                               <textarea type="num" class="form-control" placeholder="Password" id="password" required data-validation-required-message="Please enter password."></textarea>
                           </div>
                       </div>
                               <button type="submit" class="btn btn-success btn-lg">Login</button>
                   </form>
               </div>
           </div>
       </div>
   </section>
</main>

<center> <h2> Don't have an account? <a href ="/Signup/index.php">Register!</a></h2></center>
