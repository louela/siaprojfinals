<?php

    if(isset($_GET['loginFailed'])){
        if($_GET['loginFailed'])
             $loginAttemptFailed = true; 
        else
             $loginAttemptFailed = false;
    }


?>

<!DOCTYPE html>
<html>
<head>
	<title>log in and sign up form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700,800&display=swap" rel="stylesheet">
</head>
<body>
<form action="process-login.php" method="post">
  <div class="cont">
    <div class="form sign-in">
      <h2>Sign In</h2>
      <label>
        <span>Email Address</span>
        <input type="emai" name="semail">
      </label>
      <label>
        <span>Password</span>
        <input type="password" name="spassword">
      </label>
      <button class="submit" name = "login" type="submit">Sign In</button>
      </form>
      <p class="forgot-pass">Forgot Password ?</p>

      <div class="social-media">
        <ul>
          <li><img src="images/facebook.png"></li>
          <li><img src="images/twitter.png"></li>
          <li><img src="images/linkedin.png"></li>
          <li><img src="images/instagram.png"></li>
        </ul>
      </div>
    </div>
    
    <div class="sub-cont">
      <div class="img">
        <div class="img-text m-up">
          <h2>New here?</h2>
          <p>Sign up and discover great amount of a local products!</p>
        </div>
        <div class="img-text m-in">
          <h2>are you One of us?</h2>
          <p>If you already has an account, just sign in. We've missed you!</p>
        </div>
        <div class="img-btn">
          <span class="m-up">Sign Up</span>
          <span class="m-in">Sign In</span>
        </div>
      </div>
      <form action="signup-process-entry.php" name="signup" method="post">
      <div class="form sign-up">
        <h2>Sign Up</h2>
        <label>
          <span>Name</span>
          <input type="text" id="sname" name="sname">
        </label>
        <label>
          <span>Email</span>
          <input type="email" id="semail" name="semail"> 
        </label>
        <label>
          <span>Password</span>
          <input type="password" id="spassword" name=spassword>
        </label>
        <label>
          <span>Confirm Password</span>
          <input type="password" id="cpassword" name="scpassword">
        </label>
        <button type="submit" class="submit">Sign Up Now</button>
        </form>
        <?php
       

        ?>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="script.js"></script>
</body>
</html>