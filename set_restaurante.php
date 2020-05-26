<?php
    include('connection.php');
    $email =  $_POST['email'];
    $nombre = $_POST['nombre'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];

    $sql="INSERT INTO `Restaurante` (`idrestaurante`, `nombre`, `ubicacion`, `telefono`, `correo`) VALUES ('12','$nombre','$direccion', '$telefono', '$email')";

    if (mysqli_query($connection, $sql)) {
        //echo "Registro Exitoso";
        include('../html/reg_exitoso.html');
    } else {
        //echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        include('../html/error_registro.html');
    }
    mysqli_close($connection);
?>
