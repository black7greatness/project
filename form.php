<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];

//Database connection
$conn = new mysqli('localhost','root','','form');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into form(firstname, lastname, gender, email, password, number) values(?,?,?,?,?,?)");
    $stmt->bind_param("sssssi",$firstname, $lastname, $gender, $email, $password, $number);
    $stmt->execute();
    echo "message sent";
    $stmt->close();
    $conn->close();
}
?>