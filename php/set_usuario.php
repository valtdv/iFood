<?php
    include('connection.php');

    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $direccion = $_POST['direccion'];
    $email1 = $_POST['email1'];
    $password1 = $_POST['password1'];
    $membresia = false;
    $telefono1 = $_POST['telefono1'];

    $sql = "INSERT INTO Cliente VALUES ('$password1','$membresia','$nombre','$apellido1','$apellido2','$email1','$telefono1','$direccion')";
    if (mysqli_query($connection, $sql)) {
        echo "Cuenta creada exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
    mysqli_close($connection);
    echo "<br><button type='submit' onclick=location='../index.php'> Aceptar </button>";
?>
