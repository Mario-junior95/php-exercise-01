<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Part 2</title>
    </head>
    <body>
    <?php 
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["salary"])) {
          $salary_error = " Number is required";

        }elseif (!is_numeric($_POST["salary"])) {
            $salary_error = " Number is required";

        }else {
            $salary = test($_POST["salary"]); 
        }if (!is_numeric($_POST["free"])){
            $free_error = " Number is required";

        }elseif (!is_numeric($_POST["free"])) {
            $free_error = " Number is required";

        }else {
            $free = test($_POST["free"]);
        }if(empty($_POST['time'])){
            $radio_error = " Required";

        }else {
            $radio = $_POST['time'];
        }
        };
    
        function test($data)
        {
          return htmlspecialchars(stripslashes(trim($data)));
        };
    
        ?>

        <div style="width:200px ; margin:0 auto;">
            <div>
                <header>
                    <h1 style="text-align:center;">Tax calculator</h1>
                </header>
                <fieldset style="display:inline;">
                    <legend>Calculator</legend>
                    <form action="" method="POST">
                        <label for="salary">Salary Income in USD:<?php echo "<span style='color:red;'>$salary_error</span>" ?></label><input type="text" name="salary" id="salary" value="<?php if(isset($_POST["salary"])){ echo htmlentities($_POST['salary']);} ?>"></label><br/>
                        <label for="option">Option:<?php echo "<span style='color:red;'>$radio_error</span>" ?></label>
                        <div class="radios">
                            <label><input type="radio" name="time" value="Yearly" <?php if($_POST["time"] == "Yearly") { echo "checked='checked'" ;} ?>>Yearly</label>
                            <label><input type="radio" name="time" value="Monthly" <?php if($_POST["time"] == "Monthly") { echo "checked='checked'" ;} ?> >Monthly</label>
                        </div>
                        <label>Tax Free Allowance:<?php echo "<span style='color:red;'>$free_error</span>" ?></label><input type="text" name="free" value="<?php if(isset($_POST["free"])){ echo htmlentities($_POST['free']);} ?>"></label><br/>
                        <input type="submit" value="Calculate" name="btn" style="margin-top:1%; margin-left:30%;">
                     </form>
                </fieldset>
                <?php 
                if ($_SERVER["REQUEST_METHOD"] == "POST") {   
                              
                    $tax = 0;
                    $socialfee = 4;
                    $salary_after_tax = 0;

                    if($salary <= 10000){

                        $tax = 0;
                        $salary_after_tax = $salary + $free;
                        if($radio == "Monthly"){
                            $salary_after_tax = $salary_after_tax / 12;
                        }
                        echo "<table style='border:1px black solid;  width:232px;'>";
                            echo "<tr>";
                                echo "<td>Total salary:</td>";  
                                echo "<td>".number_format($salary)."</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>Tax amount:</td>";
                                echo "<td>N/A</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>Social security fee:</td>";
                                echo "<td>N/A</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>Salary after tax:</td>";
                                echo "<td>".number_format($salary_after_tax, 2)."</td>";
                            echo "</tr>";
                        echo "</table>";
                
                    }elseif($salary > 10000 && $salary <= 25000){

                        $tax_percentage = 11;
                        $tax_sum = $salary * $tax / 100;
                        $social_fee = ($salary - $tax_sum) * $socialfee / 100;
                        $salary_after_tax = (($salary - $tax_sum) - $social_fee) + $free;
                        if($radio == "Monthly"){
                            $salary_after_tax = $salary_after_tax / 12;
                        }
                  
                        echo "<table style='border:1px black solid; width:232px;'>";
                            echo "<tr>";
                                echo "<td>Total salary:</td>";  
                                echo "<td>".number_format($salary)."</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>Tax amount:</td>";
                                echo "<td>".number_format($tax_sum. 2)."</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>Social security fee:</td>";
                                echo "<td>".number_format($social_fee, 2)."</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>Salary after tax:</td>";
                                echo "<td>".number_format($salary_after_tax, 2)."</td>";
                            echo "</tr>";
                        echo "</table>";
                        
                    }elseif($salary >= 25000 && $salary <= 50000){
                        $tax = 30;
                        $tax_sum = $salary * $tax / 100;
                        $social_fee = ($salary - $tax_sum) * $socialfee / 100;
                        $salary_after_tax = (($salary - $tax_sum) - $social_fee) + $free;
                        if($radio == "Monthly"){
                            $salary_after_tax = $salary_after_tax / 12;
                        }
              
                        echo "<table style='border:1px black solid;  width:232px;'>";
                            echo "<tr>";
                                echo "<td>Total salary:</td>";  
                                echo "<td>".number_format($salary)."</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>Tax amount:</td>";
                                echo "<td>".number_format($tax_sum. 2)."</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>Social security fee:</td>";
                                echo "<td>".number_format($social_fee, 2)."</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>Salary after tax:</td>";
                                echo "<td>".number_format($salary_after_tax, 2)."</td>";
                            echo "</tr>";
                        echo "</table>";
                        
                    }else {
                        $tax = 45;
                        $tax_sum = $salary * $tax / 100;
                        $social_fee = ($salary - $tax_sum) * $socialfee / 100;
                        $salary_after_tax = (($salary - $tax_sum) - $social_fee) + $free;
                        if($radio == "Monthly"){
                            $salary_after_tax = $salary_after_tax / 12;
                        }

                        echo "<table style='border:1px black solid; width:232px;'>";
                            echo "<tr>";
                                echo "<td>Total salary:</td>";  
                                echo "<td>".number_format($salary)."</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>Tax amount:</td>";
                                echo "<td>".number_format($tax_sum. 2)."</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>Social security fee:</td>";
                                echo "<td>".number_format($social_fee, 2)."</td>";
                            echo "</tr>";
                            echo "<tr>";
                                echo "<td>Salary after tax:</td>";
                                echo "<td>".number_format($salary_after_tax, 2)."</td>";
                            echo "</tr>";
                        echo "</table>";
                    }
                    

             }
                ?>
            </div>
        </div>
    
    </body>
</html>