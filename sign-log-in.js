function signin(){
    document.title = "iFood - Registrarse";
    document.getElementById("form").innerHTML = "<form class='bg-light' id='formulario' action='php/set_usuario.php' method='post'>" +
    "<div class='form-group'><h1>Crea tu cuenta en iFood</h1></div>" +
    "<div class='form-group'>" +
      "<label for='nombre'>Nombre</label>" +
      "<input type='text' class='form-control' id='nombre' name='nombre' required />" +
    "</div>" +
    "<div class='form-group'>" +
      "<label for='apellido1'>Primer apellido</label>" +
      "<input type='text' class='form-control' id='apellido1' name='apellido1' required />" +
    "</div>" +
    "<div class='form-group'>" +
      "<label for='apellido2'>Segundo apellido</label>" +
      "<input type='text' class='form-control' id='apellido2' name='apellido2' required />" +
    "</div>" +
    "<div class='form-group'>" +
      "<label for='direccion'>Dirección</label>" +
      "<input type='text' class='form-control' id='direccion' name='direccion' required />" +
    "</div>" +
    "<div class='form-group'>" +
      "<label for='email1'>Correo electrónico</label>" +
      "<input type='email' class='form-control' id='email1' aria-describedby='emailHelp' name='email1' required/>" +
    "</div>" +
    "<div class='form-group'>" +
      "<label for='password1'>Contraseña</label>" +
      "<input type='password' class='form-control' id='password1' name='password1' required />" +
    "</div>" +
    "<div class='form-group'>" +
      "<label for='password1'>Confirma tu contraseña</label>" +
      "<input type='password' class='form-control' id='password1' name='password1' required />" +
    "</div>" +
    "<button type='submit' class='btn btn-danger'>Registrarse</button>" +
    "<a class='nav-link' onclick='login()'>¿Ya tienes una cuenta?</a>" +
  "</form>";
}

function login(){
    document.title = "iFood - Iniciar sesión";
    document.getElementById("form").innerHTML = "<form class='bg-light' id='formulario'>" +
    "<div class='form-group'><h1>Iniciar sesión en iFood</h1></div>" +
    "<div class='form-group'>" +
      "<label for='email1'>Correo electrónico</label>" +
      "<input" +
        "type='email'" +
        "class='form-control'" +
        "id='email1'" +
        "aria-describedby='emailHelp'" +
      "/>" +
    "</div>" +
    "<div class='form-group'>" +
      "<label for='password1'>Contraseña</label" +
      "><input type='password' class='form-control' id='password1' />" +
    "</div>" +
    "<button type='submit' class='btn btn-danger'>Iniciar sesión</button>" +
   "<a class='nav-link' onclick='signin()'>¡Crea tu cuenta!</a>" +
  "</form>";
}
