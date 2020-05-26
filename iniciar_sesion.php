<?php
    include('connection.php');
    $correo =  $_POST['email1'];
    $password = $_POST['password1'];

    $sql="SELECT * FROM Cliente WHERE contra = '$password' AND correo = '$correo'";

    if (mysqli_query($connection, $sql)) {
        $result = mysqli_query($connection, $sql);
        if (mysqli_fetch_array($result) == NULL) {
          echo "<script> alert('Ha introducido un correo o contraseña errados, verifique e intente nuevamente') </script>";
          include ('index.php');
        }else{
          echo "accedido";
          include ('sesion_cliente.php');
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
    mysqli_close($connection);
?>
