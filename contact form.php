<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$conn = new mysqli('localhost','root','','contact');

if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(name,email,message)
            values(?,?,?)");
    $stmt->bind_param("sss",$name,$email,$message);
    $stmt->execute();
    echo "registration succesful";
    $stmt->close();
    $conn->close();
}
?>