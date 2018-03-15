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
$sql = "INSERT INTO seminariocm (nombre, apellido, email, ciudad, celular, id_curso, genero, llamada, fecha)
VALUES ('$_POST[nombre]', '$_POST[apellido]', '$_POST[email]', '$_POST[ciudad]', '$_POST[celular]', '$_POST[id_curso]','$_POST[genero]','$llamada', CURDATE())";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    header('Location: formularioSeminario.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>