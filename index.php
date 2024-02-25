<?php
$insert = false;
if(isset($_POST['name'])){
    //Set connection variables
$server = "localhost";
$username = "root";
$password = "";

//Create a database connection
$con = mysqli_connect($server,$username,$password);

//Check for connection success
if(!$con){
    die("Sorry we failed to connect: " . mysqli_connect_error());
}
// else{
//     echo "Connection is successfull";
// }

//Collect post variables
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender']; 
$email = $_POST['email'];
$phone = $_POST['phone'];
$desc = $_POST['desc'];


$sql = "INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp())";
//echo $sql;

//Execute the query
if ( $con->query($sql) == true) {
    

    
    $insert = true;
}
else{
    echo "ERROR: $sql <br> $con->error";
}

//Close the database connection
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <img  class="bg" src="iit-delhi.jpg" alt="IIT DELHI">
    <div class="container">
        <h3>Welcome to IIT DELHI US Trip form</h3>
        <p>Enter Your Details and submit form to confirm your participation in the trip</p>
        <?php
            if($insert == true){
      echo  "<p class='submitMsg'> Thanks for submitting the form for joining the US trip</p>";
            }
         ?>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone no.">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your others information"></textarea>
            <button class="btn">Submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>
