<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project 1</title>
</head>
<style>
    *{
        margin : 0;
        padding : 0;
        box-sizing : border-box;
    }
    .container{
        max-width : 80%;
        background-color : #14A3C7;
        margin : auto;
        padding : 23px;
    }

</style>
<body>
    <div class = "container">
        <h1>Let's learn about PHP </h1>

    <?php
    /*  Basics of PHP

    define('PI' , 3.14);
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
    echo "<br>";
    
    //Logical Operator
    $myvar1 = (true and true);
    echo var_dump($myvar1);
    echo "<br>";

    $myvar2 = (false and true);
    echo var_dump($myvar2);
    echo "<br>";

    $myvar2 = (false or true);
    echo var_dump($myvar2);
    echo "<br>";

    $myvar2 = (false xor true);
    echo var_dump($myvar2);
    echo "<br>";

    $myvar2 = (false xor false);
    echo var_dump($myvar2);
    echo "<br>";

    //Data Types in php
    echo "Data Types";
    echo "<br>";

    $var = "This is a string";
    echo var_dump($var);
    echo "<br>";

    $var = 20;
    echo var_dump($var);
    echo "<br>";

    $var = 20.5;
    echo var_dump($var);
    echo "<br>";

    $var = true;
    echo var_dump($var);
    echo "<br>";

    echo PI; //Printing constant value
    */

    echo "<p>Eligibility for vote in India :- </p>";
    $age = 34;
    if($age >= 18){
        echo " You can vote";
    }
    else{
        echo "You can't vote";
    }
    echo "<br>";

    //Arrays in Php
    $language = array("C", "C++", "Java", "Python" , "Php" , "Js");
    echo count($language);
    echo "<br>";
    echo $language[4];
    echo "<br>";

    //Loops in php
    $a = 1;
    while($a <= 4){
        echo "The value of a is : $a";
        $a++;
    }
    echo "<br>";

    //Iterating Arrays in php using while loop
    $a = 0;
    while ($a < count($language)){
        echo "The value of language is : ";
        echo $language[$a];
        echo "<br>";
        $a++;
    }
    echo "<br>";

    //Iterating Arrays in php using do while loop
    $a = 20;
    do {
        echo "The value of a is : ";
        echo $a;
        echo "<br>";
        $a++;
    }while ($a <= 5);
    echo "<br>";
    $b = 0;
    do {
        echo "The value of a is : ";
        echo $b;
        echo "<br>";
        $b++;
    }while ($b <= 5);
    echo "<br>";

    //For Loop
    for ($c=4 ; $c < 8 ; $c++){
        echo "You are Astute";
        echo "<br>";
    }
    echo "<br>";

    foreach($language as $value){
        echo "The value is ";
        echo $value;
        echo "<br>";
        }
        echo "<br>";

        function print5(){
            echo "FIVE";
        }
        print5();



    ?>
    </div>
</body>
</html>


