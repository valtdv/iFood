<?php
    include('connection.php');
    $correo =  $_POST['email1'];
    $password = $_POST['password1'];

    $sql="SELECT * FROM Cliente WHERE contra = '$password' AND correo = '$correo'";

    if (mysqli_query($connection, $sql)) {
        $result = mysqli_query($connection, $sql);
        if (! $row = mysqli_fetch_array($result)) {
          echo "<script> alert('Ha introducido un correo o contraseña errados, verifique e intente nuevamente') </script>";
          include ('index.php');
        }else{
          echo "accedido";
          $Nombre = $row[3];
          $iduser = $row[0];
          include ('sesion_cliente.php');
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
    mysqli_close($connection);
?>
