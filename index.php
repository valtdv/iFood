<!DOCTYPE html>
<html>
  <head>
    <title>MyFood</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
  </head>
  <body class="bg-light">
    <!-- BARRA DE NAVEGACIÓN -->
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-danger fixed-top">
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarTogglerDemo03"
          aria-controls="navbarTogglerDemo03"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand text-white" href="#">MyFood</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link text-white" href="#inicio"
                >Inicio <span class="sr-only">(current)</span></a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#info">¿Cómo funciona?</a>
            </li>
            <li class="nav-item">
              <a
                class="nav-link text-white"
                href="#prod"
                tabindex="-1"
                aria-disabled="true"
                >¿Qué productos ofrecemos?</a
              >
            </li>
          </ul>
          <div class="form-inline my-2 my-lg-0">
            <!-- class="nav-link text-white" href="./register-rest.php"
              >¡Registra tu restaurante!
              <span class="sr-only">(current)</span></a
              -->
            <button
              type="button"
              onclick="window.location.href='./sign-log-in.php'"
              class="btn btn-outline-light"
            >
              Inicia sesión
            </button>
          </div>
        </div>
      </nav>
    </header>
    <!-- CARRUSEL -->
    <section id="inicio">
      <div
        id="carouselExampleSlidesOnly"
        class="carousel slide"
        data-ride="carousel"
      >
        <ol class="carousel-indicators">
          <li
            data-target="#carouselExampleIndicators"
            data-slide-to="0"
            class="active"
          ></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="./img/ensalada-bowl.png"
              class="d-block w-100"
              alt="Imagen de ensalada"
            />
          </div>
          <div class="carousel-item">
            <img
              src="./img/pan-frutas.png"
              class="d-block w-100"
              alt="Imagen de ensalada"
            />
          </div>
          <div class="carousel-item">
            <img
              src="./img/ensalada.png"
              class="d-block w-100"
              alt="Imagen de pan y frutas"
            />
          </div>
        </div>
      </div>
    </section>
    <br />
    <!-- INFORMACIÓN DE QUE HACE LA EMPRESA -->
    <h2 class="d-flex justify-content-center display-3">¿Cómo funciona?</h2>
    <section id="info" class="d-flex justify-content-center">
      <article class="d-flex justify-content-center">
        <div class="row">
          <div class="col-lg-4">
            <img
              class="circulo"
              src="./img/registro.png"
              alt="confirmacion de contraseña"
            />
            <h3>1. Crea tu cuenta</h3>
            <p>En tan solo unos cuantos pasos podras empezar a usar MyFood</p>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img
              class="circulo"
              src="./img/escoger.png"
              alt="mujer escogiendo comida"
            />
            <h3>2. Escoge tu comida</h3>
            <p>
              ¡Escoge lo que quieras! En MyFood tenemos una gran variedad de
              productos de los mejores restaurantes del país
            </p>
          </div>
          <!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img
              class="circulo"
              src="./img/pedido.png"
              alt="monton de formularios"
            />
            <h3>3. Haz tu pedido</h3>
            <p>
              Decide los detalles de tu pedido, ¡y listo! tu cómida estará en
              camino.
            </p>
          </div>
          <!-- /.col-lg-4 -->
        </div>
        <!-- /.row -->
      </article>
    </section>
    <br />
    <!-- TARJETAS E INFORMACIÓN DE PRODUCTOS -->
    <section id="prod">
      <h2 class="d-flex justify-content-center display-3">
        ¿Qué productos ofrecemos?
      </h2>
      <article>
        <div class="card-group">
          <div class="card">
            <img src="./img/arabic.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Comida árabe</h5>
              <p class="card-text">
                ¡Delicioso! en MyFood puedes conseguir crear y ordenar variedades de
                comida árabe, en todas las presentaciones, ¿se te antoja?
              </p>
            </div>
          </div>
          <div class="card">
            <img src="./img/italian.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Comida italiana</h5>
              <p class="card-text">
                ¡Mamma mia! no hay nada como las deliciosas pastas o pizzas que
                puedes armar en MyFood ¡animate a pedir!
              </p>
            </div>
          </div>
          <div class="card">
            <img src="./img/rapida.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Comida rápida</h5>
              <p class="card-text">
                ¡Para otro día la dieta! si tienes antojo de una hamburguesa, un
                perro caliente o un chuzo ¡MyFood es lugar indicado para ti!
                escoge lo que quieras a precios excelente y en cálidad
                excelente, ¿qué esperas?
              </p>
            </div>
          </div>
        </div>
      </article>
      <article>
        <div class="card-group">
          <div class="card">
            <img src="./img/mexican.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Comida mexicana</h5>
              <p class="card-text">
                ¡Orale, wey! si no puedes ir a Mexico, ¡llevalo a tu estomago!
                pide en MyFood los más deliciosos platos de comida mexicana,
                ¡solo te tomara unos segundos!
              </p>
            </div>
          </div>
          <div class="card">
            <img src="./img/colombian.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Comida colombiana</h5>
              <p class="card-text">
                ¡No hay lugar como el lugar! esto, por supuesto, se extiende a
                la comida. Con MyFood puedes conseguir los más deliciosos platos
                típicos de país, enviados especialmente a tu domicilio, ¡qué
                rico!
              </p>
            </div>
          </div>
          <div class="card">
            <img src="./img/asian.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Comida asiatica</h5>
              <p class="card-text">
                ¡Nihao! preparada tal y como al otro lado del mundo, MyFood te
                ofrece una gran variedad de comida asiatica, deliciosa y lista
                para hacer una fiesta en tu boca. No esperes más, ¡Pidela!
              </p>
            </div>
          </div>
        </div>
      </article>
    </section>
    <!--INFORMACIÓN DE LA EMPRESA-->
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
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">MyFood</h6>
            <p>
              <a href="./register-rest.php">Registra tu restaurante</a>
            </p>
            <p>
              <a href="./sign-log-in.php">Inicia sesión</a>
            </p>
            <p>
              <a href="#!">¿Quienes somos?</a>
            </p>
            <p>
              <a href="#!">Ayuda</a>
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
    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
