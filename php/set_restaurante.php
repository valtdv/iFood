<?php
    include('configuration.php');

    $email =  $_POST['email'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];

    $sql="INSERT INTO `Restaurante` (`idrestaurante`, `nombre`, `ubicacion`, `telefono`, `correo`) VALUES ('11','$nombre','$direccion', '$telefono', '$email')";

    if (mysqli_query($connection, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }    
?>