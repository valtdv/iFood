<!DOCTYPE html>
<html>
  <head>
    <title>iFood - Registrar restaurante</title>
    <link rel="stylesheet" href="styles.css" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <script src="./sign-log-in.js"></script>
  </head>
  <body class="pattern">
    <section id="form" class="d-flex justify-content-center">
      <form class="bg-light" id="formulario" action='php/set_restaurante.php' method='post'>
        <div class="form-group">
          <h1>Registra tu restaurante</h1>
        </div>
        <div class="form-group">
          <label for="email">Correo electrónico</label>
          <input type="email" class="form-control" id="email" name='email' required>
        </div>
        <div class='form-group'>
          <label for='nombre'>Nombre del restaurante</label>
          <input type='text' class='form-control' id='nombre' name='nombre' required>
        </div>
        <div class='form-group'>
          <label for='direccion'>Dirección</label>
          <input type='text' class='form-control' id='direccion' name='direccion' required>
        </div>
        <div class='form-group'>
          <label for='telefono'>Telefono</label>
          <input type='text' class='form-control' id='telefono'  name='telefono' required>
        </div>
        <button type="submit" class="btn btn-danger" >Registrar</button>
      </form>
      </section>


    </section>

    
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
            <h6 class="text-uppercase mb-4 font-weight-bold">iFood</h6>
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
