<?php

$insert = false;
if(isset($_POST['name']))  {

// Two types for connect database PHP MySQLi Functions extention we use function   or php data object
// PHP MySQLi Functions use as a beginner procedure oriante programming lang
 //set connection variable   
$_SERVER ="localhost";
$username = "root";
$password = "";

// Connection variable c
$con = mysqLi_connect($_SERVER,$username,$password);
// connection check
if(!$con){
    die("Connection to database due to" . 
    mysqLi_connect_error());
}
// echo "Succes connecting to the db";
//collct post variable
$name = $_POST['name'];
$collage = $_POST['collage'];
$stream = $_POST['stream'];
$number = $_POST['number'];
$address = $_POST['address'];
$desc = $_POST['desc'];


$sql = "INSERT INTO `vivekjagar2023`.`vivekjagar2023` (`name`, `collage`, `stream`, `number`, `addres`, `other`, `date`)
 VALUES ('$name', '$collage', '$stream', '$number', '$address', '$desc', current_timestamp());"; 

//echo $sql; 
//excute the query
if($con->query($sql) == true){
   // echo "Succesfully Inserted";
 
   //flag for successful insertion
   $insert = true; 
}
else{
    echo "Error: $sql <br> $con -> error ";
}
//close the database connction
$con->close();
} 
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Vivek Jagar</title>
    <!-- We Link Css To HTML -->
    <link rel="stylesheet" href="style.css">
</head>
<body>      
    <img class="photo1" src="bg.jpg" alt="IMR JAMNER"
    style=" width: 100%;
            position: absolute;
            z-index: -1;
            height: 100%   ; "
    >   
    <div class="container">
     <h1>Welcome To IMR Collage For Vivek Jagar</h1>
     <p> To Confirm Your Participation In 
        In Vivek Jagar Please Submit This Form</p>
        <?php 
        if($insert == true) 
        {
       echo "<p class='submitMsg'><b>Thanks For Submitting Your Form. 
            We Are Happy To See You Joining Us For The Vivek Jagar</p>";
        }
        ?>
       <!-- Post Is Secure Methode &&& Get Shows Data On Url Which We Sent -->
        <form action="index.php" method="post">
         <input type="text" name="name" id="name" placeholder="Enter Your Name"> 
         <input type="text" name="collage" id="collage" placeholder="Enter Your Collage Name">
         <input type="text" name="stream" id="stream" placeholder="Enter Your Stream Eg.Science,Art"> 
         <input type="text" name="number" id="number" placeholder="Enter Your Phone Number"> 
         <input type="text" name="address" id="addres" placeholder="Enter Your Addres"> 
        <textarea name="desc" id="desc " cols="30" rows="10" 
        placeholder="Enter Your Intrest After 12th Complete"></textarea>
         
        <button class="btn">Submit</button>
        <!-- <button class="Reset">Reset</button>   -->
        <!-- ID Define Unqiue Key Class Is Multiple Elemet Ek Element Main Multiple Class -->
         

        </form>

    </div>
 
    <!-- We Link Javascript File To HTML -->
    <script src="index.js"></script>
   
</body>
</html>   