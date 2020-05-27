<!DOCTYPE html>
<html>
    <head>
        <title>MyFood - Inicio</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="./css/adminview_styles.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    </head>
    <body>
        <header>
            <nav class="navbar navbar-dark bg-danger">
                <a class="navbar-brand text-white" href="#">MyFood</a>
                <button id="menu-toggle" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </header>

        <div id="wrapper" class="d-flex">
            <div class="bg-light border-right" id="sidebar-wrapper">
                <div class="sidebar-heading">Menú</div>
                <div class="list-group list-group-flush">
                    <a href="#" class="list-group-item list-group-item-action bg-light">Ordenes Activas</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Pagos Realizados</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Gestión de Clientes</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Bodega de Ingredientes</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Gestión de Platos</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light">Ordenes Rechazadas</a>
                </div>
            </div>
            <div id="page-content-wrapper">
                <h1 id="titlehome">Bienvenido/a Administrador/a</h1>
                <div class = "container-fluid">
                    <img src="./images/hamburger.png" alt="Esto es una hamburguesa" class="center">
                </div>
            </div>    

        </div>
      
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });
        </script>
    </body>
</html>