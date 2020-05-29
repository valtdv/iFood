<?php
    include('connection.php');
    $query = "SELECT * FROM cliente" ;
    $result = mysqli_query($connection, $query);
    // Añadir registros a la tabla que se creó anteriormente, desde la base de datos  
    while ($row = mysqli_fetch_row($result)){
        //echo "<tr onclick=location='verdetallesactividad.php?var=$row[0]'>"; 
        echo "<tr>";
        echo "<td align=center>".$row[0]."</td>";  
        echo "<td align=center>".$row[1]."</td>";
        echo "<td align=center>".$row[2]."</td>";    
        echo "</tr>";
    }  
?>