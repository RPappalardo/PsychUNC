<?php
  $title = "UNCedu | login";
  $css = "index";

  require '../assets/views/partials/_head.php';
  require '../assets/views/partials/_navbar.php';

  require '../assets/views/login.php';

  require '../assets/views/partials/_footer.php';
  require '../assets/views/partials/_scripts.php';









    define('DB_HOST', 'localhost');
    define('DB_NAME', 'practice');
    define('DB_USER','root');
    define('DB_PASSWORD','');

    $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
    $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
    /*
    $ID = $_POST['user'];
    $Password = $_POST['password'];
    */
    function SignIn()
    {
    session_start();   //starting the session for user profile page
    if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
    {
            	$query = mysql_query("SELECT *  FROM UserName where userName = '$_POST[user]' AND password = '$_POST[password]'") or die(mysql_error());
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
