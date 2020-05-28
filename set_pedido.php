<?php
    include('connection.php');
    $categoria =  $_POST['categoria'];
    $ingredientes = $_POST['ingredientes'];
    
    //$sql="INSERT INTO Plato VALUES (NULL,'$categoria', '10000')";
    $sql0="SELECT * FROM Plato WHERE categoria='$categoria'";
    if (mysqli_fetch_row(mysqli_query($connection, $sql0)) == NULL) {
      //No existe, así que se inserta el plato nuevo
      $sql01="INSERT INTO Plato VALUES (NULL,'$categoria', '10000')";
      if (!mysqli_query($connection, $sql01)) {
          //registro no exitoso
          echo "problema al insertar ingrediente";
      }
    }
    $sql0="SELECT * FROM Plato WHERE categoria='$categoria'";
    $result=(mysqli_query($connection, $sql0));
    while($row = mysqli_fetch_row($result)){
      $idplato =  $row[0];
      foreach($ingredientes as $selected){
      //insertar nuevos ingredientes a la base de datos
      $sql="SELECT * FROM Ingrediente WHERE nombre='$selected'";
      if (mysqli_fetch_row(mysqli_query($connection, $sql)) == NULL) {
        //No existe
        $sql1="INSERT INTO Ingrediente VALUES (NULL,'$selected', '3000')";
        if (!mysqli_query($connection, $sql1)) {
            //registro no exitoso
            echo "problema al insertar ingrediente";
        }
      }
      //Tomar id del ingrediente 
      $sql="SELECT * FROM Ingrediente WHERE nombre='$selected'";
      $result1=(mysqli_query($connection, $sql));
      while($row1 = mysqli_fetch_row($result1)){
        $idingrediente = $row1[0];
      }
      echo $idingrediente;
      echo $idplato;
      echo $sql3="INSERT INTO Pi_Ing VALUES ('$idingrediente','$idplato')";
      if (!mysqli_query($connection, $sql3)) {
          //registro no exitoso
          echo "problema al insertar Pi_Ing ";
          echo "Error: Unable to connect to MySQL." . PHP_EOL;
          echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
          echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
      }
      } 
    }

    
    //$ingredientes = $_POST['preparacion'];
    $ingredientes = 2;
    $pago = $_POST['pago'];

    /*$sql="INSERT INTO Plato VALUES (NULL,'$pedido', '20000')";
    //$sql="INSERT INTO Pedido VALUES (NULL,'$pedido','$ingredientes', '$ingredientes', '$pago')";


    if (mysqli_query($connection, $sql)) {
      //Rgistro exitoso
      include('./mensajes/pedido_exitoso.php');
    } else {
      //registro no exitoso
      include('./mensajes/pedido_noexitoso.php');
    }*/
    mysqli_close($connection);
?>