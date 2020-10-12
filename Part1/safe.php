<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe</title>
</head>
<body>
<?php
 $full_name = test_input($_POST["full_name"]);
 $username = test_input($_POST["username"]);
 $password = test_input($_POST["password"]);
 $Confirm_pass = test_input($_POST["Confirm_pass"]);
 $email = test_input($_POST["email"]);
 $phone = test_input($_POST["phone"]);
 $date = test_input($_POST["date"]);
 $soc_sec_num = test_input($_POST["soc_sec_num"]);
    if(!empty($full_name) && !empty($username) && !empty($password) && !empty($Confirm_pass) && !empty($email) && !empty($phone) && !empty($date) && !empty($soc_sec_num)
    && isset($full_name) && isset($username) && isset($password) && isset($Confirm_pass) && isset($email) && isset($phone) && isset($date) && isset($soc_sec_num)){
     
      if(preg_match("/^[a-zA-Z-' ]*$/",$full_name)){
        
        echo "<span style='font-weight:bold; margin-left:3%;'>Full-Name :</span> ".$full_name."<br/>";
     }else{
      require_once("home.php");
        $error_fullName = <<<ALERT
           <script>
             alert("Only letters and white space allowed in full-name field");
           </script>
         ALERT;
         echo($error_fullName);
         echo "<span style='color:red; font-weight:bold; margin-left:3%;'>Error Full-Name : </span> ".$full_name."<br/>";
        
     }
     
     if(preg_match("/^[\w]{6,100}$/",$username) || preg_match("/^[a-zA-Z-' ]*$/",$username)){
      echo "<span style='font-weight:bold; margin-left:3%;'>UserName :</span> ".$username."<br/>";
     }else{
      require_once("home.php");
       $error_userName = <<<ALERT
         <script>
           alert("Only letters and numbers allowed in UserName field");
         </script>
         ALERT;
         echo($error_userName);
         echo "<span style='color:red; font-weight:bold; margin-left:3%;'>Error UserName :</span> ".$username."<br/>";
     }
   
     if($password === $Confirm_pass){
      
         echo "<span style='font-weight:bold;  margin-left:3%;'>Password :</span> " .$password."<br/>";
         echo "<span style='font-weight:bold;  margin-left:3%;'>Confirm_Password :</span> " .$Confirm_pass."<br/>";
   
     }else{
        require_once("home.php");
        $error_password = <<<ALERT
           <script>
             alert("Password doesn't match ");
           </script>
          ALERT;
          echo($error_password);
          echo "<span style='color:red; font-weight:bold; margin-left:3%;'>Error Password :</span> " . $password." is not equal to ".$Confirm_pass."<br/>";
      }
   
   // check if e-mail address is well-formed
   if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      require_once("home.php"); 
      $emailError = "Invalid email format";
   }else{
      echo "<span style='font-weight:bold; margin-left:3%;'>Email :</span> ".$email."<br/>";
   }

   if(preg_match("/^(?:\+961|961)?(1|0?3[0-9]?[4-6]01|70|71|76|78|7|81|03?|9)\d{6}$/",$phone)){
      echo "<span style='font-weight:bold; margin-left:3%;'>Phone :</span> ".$phone."<br/>";
     }else{
      require_once("home.php");
       $error_phone = <<<ALERT
         <script>
           alert("Phone field accept all lebanease number only");
         </script>
         ALERT;
         echo($error_phone);
         echo "<span style='color:red; font-weight:bold; margin-left:3%;'>Error Phone :</span> ".$phone."<br/>";
     }

   
     echo "<span style='font-weight:bold; margin-left:3%;'>Date of birth:</span> ".$date."<br/>";
   
     
   if(preg_match("/^[0-9]*$/",$soc_sec_num)){
      echo "<span style='font-weight:bold; margin-left:3%;'>Social Security Number:</span> ".$soc_sec_num."<br/>";
   }else{
      require_once("home.php");
      $error_socialSecurity = <<<ALERT
         <script>
           alert("Only numbers allowed in Social Security Number field");
         </script>
       ALERT;
       echo($error_socialSecurity);
       echo "<span style='color:red; font-weight:bold;  margin-left:3%;'>Error Social Security Number: </span> ".$soc_sec_num."<br/>";
      }

    #Insert Username and Password inside an array from Register Field
    $Info = array();
    $Info[]=$username;
    $Info[]=$password;
 
    }else{
   require_once("home.php");
   $error = <<<ALERT
          <script>
             alert("No data to see until you insert all the registration info");
          </script>
          ALERT;
    echo $error;
 }

 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }



/*
#Log in Part

$name = $_POST["username"];
$pass = $_POST["password"];
#Insert Username and Password inside an array from Login Field

$Info1 = array();
$Info1[] = $name;
$Info1[] = $pass;

if(!empty($name) && !empty($pass) && isset($name) && isset($pass)){
  if($Info1[0] === $Info[0] && $Info1[1]===$Info1[1]){
    $cong= <<<ALERT
             <script>
                alert("Nice to meet you again "+$name );
             </script>
             ALERT;
     echo($cong);        
  }else{
    $failed= <<<ALERT
             <script>
                alert("Go to the Register field and creat an account");
             </script>
             ALERT;
    echo $failed;

  }



   
*/
?>
</body>
</html>