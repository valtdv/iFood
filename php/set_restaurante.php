<?php
    include('configuration.php');

    $sql= "INSERT INTO Restaurante VALUES (11111,'El Sazon casero','cra 51b #35-05', 3034598, 'sazoncasero@hotmail.com')";

    if (mysqli_query($connection, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }    
?>