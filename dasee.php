<?php

// echo "<h1>Hello World!</h1>";
// echo "<p style='color:red;'>This is my first PHP program</p>";

// echo "My name is Renz Gabun <br>";a
// echo "I am 20 years old <br>";
// echo "My Favorite subject is Computer Programming <br>";
// echo "My dream job is IT <br>";
// echo "My motto in life: 'Time is gold' <br>";
// echo "Here is my ASCII art <br>";
// echo "  __         __<br>";
// echo "/  \.-\'\'\'-./  \ <br>";
//  echo" \    -   -    /  <br>";
// echo  " |   o   o   | <br>";
//  echo"  \  .-'''-.  /  <br>";
//  echo"   '-\__Y__/-'  <br>";
//  echo"     \`---\`<br>";
 
//  $name = "Renz";
//  $age = 20;

//  echo"My name is $name and Im $age years old<br>";

//  $text = "HEllo";
//  $int = 29;
//   $double = 19.0;

// $a = 10;
// $b = 20;
// $c = 30;
// $d = 40;


// $sum = $a + $b ;
// $diff = $b - $c;
// $pro = $a * $d ;
// $div = $d / $b ;
// // $mol = $a % $b ;

// $total = $sum + $diff + $pro + $div;
// $ave = $total / 4;


// echo  " the sum of $a and $b is $sum <br>";

// echo  " the difference of $b and $c is $diff  <br>";

// echo  " the products of $a and $d is $pro  <br>";

// echo  " the division of $d and $b is $div  <br>";

// echo" the total of all result $total <br>";

// echo" the average of all result is $ave";

// echo  " the remainder of $a and $b is $mol  <br>";
 
// $age = 11;

// if($age <= 12){
//   echo"you are child";
// }
// elseif ($age <= 17){
//     echo"you are teenager";
// }
// elseif($age <= 59){
//     echo"you are Adult";
// }
// else{
//   echo"senior";
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display: flex;
            justify-content: center;
            align-content: center;
            margin-top: 15%;
        }
       form{
        color: red;
        width: 20%;
        height: 15%;
        background-color: lightblue;
       }
       
    </style>
</head>
<body>
     <form action="process.php" method="post">
        <h1>Employee Payroll System</h1>
        <label>Enter Name</label>
        <input type="text" name="em" required><br>

        <label>Hourly Rate</label>
        <select name="hrate">
            <option value="500">500</option>
            <option value="650">650</option>
            <option value="800">800</option>
        </select><br>

        <label>Hours Worked</label>
        <input type="number" name="hworked" value=""><br>

        <label>Overtime Hours</label>
        <input type="number" name="othours" value=""><br>
        <input type="submit" name="payroll" value="submit" onclick></h1>

    </form>
</body>
</html>
