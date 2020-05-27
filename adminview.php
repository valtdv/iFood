<!DOCTYPE html>
<html>
    <head>
        <title>MyFood - Inicio</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="./css/adminview_styles.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
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
                    <a href="#" class="list-group-item list-group-item-action bg-light" id="Ordenes">Ordenes Activas</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light" id="Pagos">Pagos Realizados</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light" id="Gestion">Gestión de Clientes</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light" id="Ingredientes">Bodega de Ingredientes</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light" id="Platos">Gestión de Platos</a>
                    <a href="#" class="list-group-item list-group-item-action bg-light" id="Rechazos">Ordenes Rechazadas</a>
                </div>
            </div>
            <div id="page-content-wrapper">
                <h1 id="titlehome">Bienvenido/a Administrador/a</h1>
                <div class = "container-fluid">
                    <img src="./img/hamburger.png" alt="Esto es una hamburguesa" class="center">
                </div>
            </div>    

        </div>
      
        
        <script>
            $("#menu-toggle").click(function(e) {
                e.preventDefault();
                $("#wrapper").toggleClass("toggled");
            });

            $(document).ready(function(){
                $('#Ordenes').click(function(){
                    $("#page-content-wrapper").load("orden_admin.php");
                });
                $('#Pagos').click(function(){
                    $("#page-content-wrapper").load("pagos_admin.php");
                });
                $('#Gestion').click(function(){
                    $("#page-content-wrapper").load("gestion_admin.php");
                });
                $('#Ingredientes').click(function(){
                    $("#page-content-wrapper").load("ingredientes_admin.php");
                });
                $('#Platos').click(function(){
                    $("#page-content-wrapper").load("platos_admin.php");
                });
                $('#Rechazos').click(function(){
                    $("#page-content-wrapper").load("rechazos_admin.php");
                });
            });
        </script>
    </body>
</html>