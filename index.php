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
    echo $variable1;
    echo "<br>";
    echo $variable2;
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
    echo $newvar1;
    echo "<br>";
    $newvar1 += 1;
    echo $newvar1;
    echo "<br>";
    $newvar2 = $variable2;
    $newvar2 *= 2;
    echo $newvar2;
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

    ?>
</body>
</html>


