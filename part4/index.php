<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Part 4</title>
</head>
<body>
    <h1>Multidimensional Arrays</h1>
    <?php
      $arr = array("musicals" => array( 0 => "Oklahoma" , 1 => "The Music Man" , 2 => "South Pacific"),
    
                    "dramas" => array(0 => "Lawrence of Arabia" , 1 => "To Kill a Mockingbird " , 2 => "Casablanca"),
                
                    "mysteries" => array(0 => " The Maltese Falcon" , 1 => "Rear Window" , 2 => "North by Northwest"));
      $Keys = array_keys($arr);
      for($i=0 ; $i<count($arr); $i++){
          echo strtoupper($Keys[$i])."<br/>";
          foreach($arr[$Keys[$i]] as $key => $value){
              echo "------> ".$key." = ".$value."<br/>";
          }
      }
    
    echo "<h2>Sort the array in decreasing order </h2>";
    
    krsort($arr);
    $Keys = array_keys($arr);
      for($i=0 ; $i<count($arr); $i++){
          echo strtoupper($Keys[$i])."<br/>";
          foreach($arr[$Keys[$i]] as $key => $value){
              echo "------> ".$key." = ".$value."<br/>";
          }
      }

    ?>
</body>
</html>