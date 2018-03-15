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
$llamada = "no";
$id_curso = "17";
//$enterado= "1";
$sql = "INSERT INTO usuario (nombre, email, ciudad, celular, id_curso, fecha, id_enterado)
VALUES ('$_POST[nombre]', '$_POST[email]', '$_POST[ciudad]', '$_POST[celular]', '$id_curso', CURDATE(), '$_POST[id_enterado]')";
if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    header('Location: gracias.html');
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
  


    