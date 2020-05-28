<!DOCTYPE html>
<html>

<head>
  <title>MyFood - Inicio</title>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="./css/styles.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <script src="./js/sesion_cliente.js"></script>
</head>

<body>
  <!-- NAVBAR CON LOGO Y BARRA DE BUSQUEDA -->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top">
      <a class="navbar-brand text-white" href="#">iFood</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="#rest">Crear pedido<span class="sr-only">(current)</span></a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar..." aria-label="Search" />
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">
            Buscar
          </button>
        </form>
      </div>
    </nav>
  </header>
  <!-- BANNER -->
  <section>
    <img src="./img/Tieneshambre.png" class="img-fluid" alt="Imagen de comida" />
  </section>
  <!--  CREAR PEDIDO -->
  <section id="rest">
    <h1 class="d-flex justify-content-center display-3">Crea tu pedido</h1>
    <form id="pedidos" action='set_pedido.php' method='post' >
      <div class="form-group">
        <label for="pedido">Nombre del pedido</label>
        <input type="text" class="form-control" id="pedido" name = "pedido" required>
      </div>
      <div class="form-group">
        <label for="ingredientes">Escoge tu plato</label>
        <select class="form-control" id="ingredientes" name="categoria" onchange="detallesDelPedido()" required>
          <option value="sin-escoger">---</option>
          <option value="comida-arabe">Comida arabe - Shawarma</option>
          <option value="comida-italiana">Comida italiana - Pizza</option>
          <option value="comida-rapida">Comida rapida - Hamburguesa</option>
          <option value="comida-mexicana">Comida mexicana - Tacos</option>
          <option value="comida-colombiana">Comida colombiana - Bandeja Paisa</option>
          <option value="comida-asiatica">Comida asiatica - Ramen</option>
        </select>
      </div>
      <div class="form-group" id="checkbox-ingredientes"></div>
      <div class="form-group">
        <label for="metodo-pago">Metodo de pago</label>
        <select class="form-control" id="metodo-de-pago" onchange="metodoDePago()" required>
          <option value="sin-escoger">---</option>
          <option value="efectivo">Efectivo</option>
          <option value="credito">Tarjeta de crédito</option>
          <option value="debito">Tarjeta debito</option>
        </select>
      </div>
      <div class="form-group" id="metodopago"></div>
      <div>
        <button type="submit" class="btn btn-danger d-flex justify-content-center">Siguiente</button>
      </div>
    </form>
  </section>
  <!-- INFORMACION DE LA EMPRESA -->
  <footer class="bg-light page-footer font-small mdb-color pt-4">
    <div class="container text-center text-md-left">
      <div class="row text-center text-md-left mt-3 pb-3">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Vadiposoft</h6>
          <p>
            Somos una compañía enfocada en el desarrollo web, con un gran
            enfoque en el diseño UI/UX y la satisfación al cliente.
          </p>
        </div>
        <hr class="w-100 clearfix d-md-none" />
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold">Contactanos</h6>
          <p>valeriaosorio@uninorte.edu.co</p>
          <p>daalbor@uninorte.edu.co</p>
          <p>lpotte@uninorte.edu.co</p>
          <p></p>
        </div>
      </div>
      <hr />
      <div class="row d-flex align-items-center">
        <div class="col-md-7 col-lg-8">
          <p class="text-center text-md-left">© 2020 Copyright</p>
        </div>
        <div class="col-md-5 col-lg-4 ml-lg-0">
          <div class="text-center text-md-right">
            <ul class="list-unstyled list-inline">
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-google-plus-g"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>
