<?php
    include('connection.php');
    $categoria =  $_POST['categoria'];
    $ingredientes = $_POST['ingredientes'];
    $descripcion = $_POST['descripcion'];
    
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
      
      //toma el id del plato
      $idplato = (int) $row[0];
      
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
      $sql4="SELECT * FROM Ingrediente WHERE nombre='$selected'";
      $result1=(mysqli_query($connection, $sql4));
      while($row1 = mysqli_fetch_row($result1)){
        $idingredient = (int) $row1[0];
      }

      //echo $idingredient;
      //echo $idplato;
      $sql3="INSERT INTO Pi_Ing VALUES ('$idplato', '$idingredient')";
      if (!mysqli_query($connection, $sql3)) {
          //registro no exitoso
          //echo "problema al insertar Pi_Ing ";
          echo "Error: Unable to connect to MySQL. \n" . PHP_EOL;
          echo "Debugging errno: \n" . mysqli_connect_errno() . PHP_EOL;
          echo "Debugging error: \n" . mysqli_connect_error() . PHP_EOL;
      }
      
      }

      $sql5 ="INSERT INTO Orden VALUES (NULL, '$idplato','$descripcion', 'En proceso','1')";
      if (mysqli_query($connection, $sql5)) {
        //Rgistro exitoso
        include('./mensajes/pedido_exitoso.php');
      } else {
        //registro no exitoso
        include('./mensajes/pedido_noexitoso.php');
      }
    }

    mysqli_close($connection);
?>