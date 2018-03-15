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
$sql = "INSERT INTO manager_musical (nombre, genero, nombrecontacto, email, ciudad, celular, fecha)
VALUES ('$_POST[nombre]', '$_POST[genero]','$_POST[nombrecontacto]','$_POST[email]', '$_POST[ciudad]', '$_POST[celular]',CURDATE())";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    header('Location: formulariomm.html');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>