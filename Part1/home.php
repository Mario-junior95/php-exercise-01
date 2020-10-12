<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="form">
    <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          <form action="safe.php" method="post">
          <div class="top-row">
            <div class="field-wrap">
              <input type="text" autocomplete="off" id="fullname" name="full_name" placeholder="FullName"/>
            </div>
        
            <div class="field-wrap">
              <input type="text" autocomplete="off" name="username" placeholder = "UserName"/>
            </div>
          </div>

          <div class="field-wrap">
            <input type="password" autocomplete="off" name="password" placeholder = "Password"/>
          </div>
          
          <div class="field-wrap">
            <input type="password" autocomplete="off" name="Confirm_pass" placeholder = "Confirm Password"/>
          </div>

          <div class="field-wrap">
            <input type="email" autocomplete="off" name="email" placeholder = "Email"/>
          </div>

          <div class="field-wrap">
            <input type="text"  autocomplete="off" name="phone" placeholder = "Phone number"/>
          </div>

          <div class="field-wrap">
            <input type="date"  autocomplete="off" name="date" placeholder="Date Of Birth"/>
          </div>

          <div class="field-wrap">
            <input type="ptext" autocomplete="off" name="soc_sec_num" placeholder = " Social Security Number"/>
          </div>
          
          
          <button type="submit" class="button button-block">Get Started</button>
          
          </form>
        </div>
        <span class="border"></span>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="safe.php" method="post">
            <div class="field-wrap">
            <input type="text" required autocomplete="off" name="username" placeholder="UserName"/>
          </div>
          
          <div class="field-wrap">
            <input type="password" required autocomplete="off" name="password" placeholder="Password"/>
          </div>
          
          <p class="forgot"><a href="javascript:;">Forgot Password?</a></p>
          
          <button class="button button-block">Log In</button>
          
          </form>

        </div>
      </div>
</div> 
<div class="error">
    <span><?php echo  $error_fullName; ?></span> 
    <span><?php echo  $error_userName; ?></span>
    <span><?php echo  $Emailerror; ?></span>
    <span><?php echo  $error_phone; ?></span>
    <span><?php echo  $error_socialSecurity; ?></span>
</div> 
</html>