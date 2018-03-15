<?php
$servername = "localhost";
$username = "iolcolom_user";
$password = "formula2";
$dbname = "iolcolom_tablas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//$llamada = "no";
$sql = "INSERT INTO periodismo_inter (nombre, email, telefono, ciudad, fecha)
VALUES ('$_POST[nombre]', '$_POST[email]', '$_POST[telefono]','$_POST[ciudad]', CURDATE())";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    header('Location: periodismoInter.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>