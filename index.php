<?php
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server,$username,$password);
if(!$con){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
else{
    echo "Connection is successfull";
    echo "<br>";
}
?>
