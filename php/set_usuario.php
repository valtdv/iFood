<?php
    include('connection.php');

    $nombre = $_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $direccion = $_POST['direccion'];
    $email1 = $_POST['email1'];
    $password1 = $_POST['password1'];
    $membresia = '0';
    $telefono1 = $_POST['telefono1'];


    $sql = "INSERT INTO Cliente VALUES (NULL, '$password1','$membresia','$nombre','$apellido1','$apellido2','$email1','$telefono1','$direccion')";
    if (mysqli_query($connection, $sql)) {
        echo "Cuenta creada exitosamente";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($connection);
    }
    mysqli_close($connection);
    echo "<!DOCTYPE html>
    <html>
      <head>
        <title>MyFood - Registro exitoso</title>
        <link rel='stylesheet' href='styles.css' />
        <link
          rel='stylesheet'
          href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'
          integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh'
          crossorigin='anonymous'
        />
      </head>
      <body class='pattern'>
        <section id='form' class='d-flex justify-content-center'>
        <article class='bg-light' id='formulario'>
           <h1>¡Registro exitoso!</h1>
           <p>Tú registro ha sido exitoso, ya puedes ingresar sesión en MyFood</p>
           <div class='d-flex justify-content-center'>
             <button class='btn btn-danger' type='submit' onclick=location='../index.php'> Aceptar </button>
           </div>
        </article>
        </section>
        <script
          src='https://code.jquery.com/jquery-3.4.1.slim.min.js'
          integrity='sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n'
          crossorigin='anonymous'
        ></script>
        <script
          src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'
          integrity='sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo'
          crossorigin='anonymous'
        ></script>
        <script
          src='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js'
          integrity='sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6'
          crossorigin='anonymous'
        ></script>
      </body>
    </html>";
?>
