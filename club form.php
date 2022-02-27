<?php
$visitor_email = $_POST['email'];

$conn = new mysqli('localhost','root','','club');

if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(email)
            values(?)");
    $stmt->bind_param("s",$email);
    $stmt->execute();
    echo "registration succesful";
    $stmt->close();
    $conn->close();
}

?>