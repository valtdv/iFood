<!DOCTYPE html>
<html>
    <head>
        <title>MyFood - Inicio</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="./css/adminview_styles.css" />
        <link rel="stylesheet" href="./css/seccion_styles.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    </head>
    <body>
        <h1 class="seccion_titles">Ordenes Activas</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#Orden</th>
                    <th scope="col">id de Plato</th>
                    <th scope="col">Detalles</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Persona</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include('connection.php');
                    $query = "SELECT * FROM Orden";
                    $result = mysqli_query($connection, $query);
                    // Añadir registros a la tabla que se creó anteriormente, desde la base de datos  
                    while ($row = mysqli_fetch_row($result)){
                        //echo "<tr onclick=location='verdetallesactividad.php?var=$row[0]'>"; 
                        echo "<tr>";
                        echo "<td align=center>".$row[0]."</td>";  
                        echo "<td align=center>".$row[1]."</td>";
                        echo "<td align=center>".$row[2]."</td>";
                        echo "<td align=center>".$row[3]."</td>";
                        echo "<td align=center>".$row[4]."</td>";    
                        echo "</tr>";
                    }  
                ?>
            </tbody>
        </table>
    </body>
</html>