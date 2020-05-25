<?php
    include('connection.php');

    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $direccion = $_POST['direccion'];
    $email1 = $_POST['email1'];
    $password1 = $_POST['password1'];
    $membresia = '0';
    $telefono1 = $_POST['telefono1'];


    $sql = "INSERT INTO Cliente VALUES (NULL, '$password1','$membresia','$nombre','$apellido1','$apellido2','$email1','$telefono1','$direccion')";
    if (mysqli_query($connection, $sql)) {
        //echo "Cuenta creada exitosamente";
        include('../html/reg_exitoso.html');
    } else {
        //echo "Error: " . $sql . "<br>" . mysqli_error($connection);
        include('../html/error_registro.html');
    }
    mysqli_close($connection);
?>
