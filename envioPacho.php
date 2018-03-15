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
$id_curso="19";
//$enterado= "1";
$sql = "INSERT INTO conversatorioMarca (nombre, apellido, email, ciudad, celular, id_curso, genero, llamada, fecha, id_enterado)
VALUES ('$_POST[nombre]', '$_POST[apellido]', '$_POST[email]', '$_POST[ciudad]', '$_POST[celular]', '$_POST[id_curso]','$_POST[genero]','$llamada', CURDATE(), '$_POST[id_enterado]')";
if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
    //header('Location: formulario.php');
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<script type="text/javascript">
      window.onload= history.back();
    </script>
<?php
?>
  


    