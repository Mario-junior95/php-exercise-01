<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 3</title>
</head>
<body>
<?php
 function palindrome ($str){
   if(is_string($str) && $str !== ""){
     $str1 = strtolower($str);
     $str2 = strrev($str1);
      if($str2 === $str1){
        echo "true" ;
     }else{
       echo "false";
     }
   }
   else{
      $alert = <<<ALERT
      <script>
      alert("You should insert a string not a number not a empty String");
      </script>
      ALERT;
      echo $alert;
   }
   return $str;
 }

//return an alert
#palindrome("");

//return an alert
#palindrome(25);

//return false
#palindrome("Mario");

//return true
#palindrome("Mom");

?>
</body>

</html>
