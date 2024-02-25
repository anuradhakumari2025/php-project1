<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1</title>
</head>
<body>
    <?php
    echo "Hello World <br>";
    $variable1 = 20;
    $variable2 = 21;
    echo "The value of variable1 is : $variable1";
    echo "<br>";
    echo "The value of variable2 is : $variable2";
    echo "<br>";

    //Operators in PHP
    //Arithmetic Operators
    echo "The value of variable 1 + variable 2 is : ";
    echo $variable1 + $variable2;
    echo "<br>";
    echo "The value of variable 1 - variable 2 is : ";
    echo $variable1 - $variable2;
    echo "<br>";
    echo "The value of variable 1 * variable 2 is : ";
    echo $variable1 * $variable2;
    echo "<br>";
    echo "The value of variable 1 / variable 2 is : ";
    echo $variable1 / $variable2;
    echo "<br>";

    //Assignment Operators
    $newvar1 = $variable1;
    echo "The value of newvar1 is : $newvar1" ;
    echo "<br>";
    $newvar1 += 1;
    echo "The value of newvar1 += 1 is : $newvar1";
    echo "<br>";
    $newvar2 = $variable2;
    echo "The value of newvar2 is : $newvar2";
    echo "<br>";
    $newvar2 *= 2;
    echo "The value of newvar2 *= 2 is : $newvar2";
    echo "<br>";

    //Comparison Operators
    echo "The value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";
    echo "The value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";
    echo "The value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";
    echo "The value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";

    //Increment Operators//
    echo "The value of variable1++ is :  "; 
    echo $variable1++;
    echo "<br>";
    echo "The value of variable2++ is :  "; 
    echo $variable2++;
    echo "<br>";
    echo "The value of ++newvar1 is :  "; 
    echo ++$newvar1;
    echo "<br>";
    echo "The value of --newvar2 is :  "; 
    echo --$newvar2;

    ?>
</body>
</html>


