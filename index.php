<?php
include 'conn.php';
if (isset($_POST['form'])) {
$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$sql = "INSERT INTO travel ( name , age , gender , email , phone , message ,dt )  VALUES  ('$name', '$age',' $gender', '$email',' $phone' , '$message', current_timestamp())";
if(mysqli_query($conn,$sql)){
    echo "Message sent sucessfully";
    header("Location: main.php");
    exit();
} else{
    echo ('failed' . mysqli_error($conn));
}

// Close the database connection
$conn->close();

}
?>