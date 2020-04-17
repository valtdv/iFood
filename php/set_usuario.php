<?php
    include('connection.php');

    $sql= "INSERT INTO Usuario VALUES (1234567,'contra','Diego','Albor','Rojas','cra 34 #87-09','diegoaalborrojas@gmail.com')";

    if (mysqli_query($connection, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }    
?>