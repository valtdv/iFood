<?php
    include('connection.php');

    $id = random_int(0, 900);
    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $direccion = $_POST['direccion'];
    $email1 = $_POST['email1'];
    $password1 = $_POST['password1'];

    $sql = "INSERT INTO Usuario VALUES ('$id','$password1','$nombre','$apellido1','$apellido2','$direccion','$email1')";
    if (mysqli_query($connection, $sql)) {
        echo "Cuenta creada exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
    mysqli_close($connection);
    echo "<br><button type='submit' onclick=location='../index.php'> Aceptar </button>";
?>
