<!DOCTYPE html>
<?php 
error_reporting(0);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Belleza&display=swap" rel="stylesheet">
</head>

<body>
    <img class="beach3" src="beach3.jpg">
    <div class="container">
        <h1>&#127754 Welcome to the Travel form &#127754</h1>

        <p>ENTER YOUR DETAIL TO CONFIRM YOUR PARTICIPATION</p><br>

        <form action="main.php" method="POST">
            <input type="text" name= "name" id="name" placeholder="ENTER YOUR NAME"><br>
            <input type="text" name= "age" id="age" placeholder="ENTER YOUR AGE"><br>
            <input type="text" name= "gender" id="gender" placeholder="ENTER YOUR GENDER"><br>
            <input type="email" name= "email" id="email" placeholder="ENTER YOUR EMAIL"><br>
            <input type="phone" name= "phone" id="phone" placeholder="ENTER YOUR PHONE"><br>
            <textarea name= "message" id= "message" cols="30" rows="10" placeholder="ENTER ANY OTHER INFORMATION"></textarea><br>
            <button type="submit" name="form" class="btn" >CHECK AND SUBMIT</button>
        </form>
        <?php
        require_once "index.php";
         ?>
        
        <!-- <p id="submitted" class="submitted"> Thanks for submitting the form you will receive the reciept from the college</p> -->
    </div>
    <script src="index.js"></script>
</body>

</html>