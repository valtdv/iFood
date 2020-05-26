<?php
    include('connection.php');
    $pedido =  $_POST['pedido'];
    $ingredientes = $_POST['ingredientes'];
    //$ingredientes = $_POST['preparacion'];
    $ingredientes = 2;
    $pago = $_POST['pago'];

    $sql="INSERT INTO Pedido VALUES (NULL,'$pedido','$ingredientes', '$ingredientes', '$pago')";

    if (mysqli_query($connection, $sql)) {
      //Rgistro exitoso
      include('./mensajes/pedido_exitoso.html');
    } else {
      //registro no exitoso
      include('./mensajes/error_registro.html');
    }
    mysqli_close($connection);
?>
