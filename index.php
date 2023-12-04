<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto final</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="icon" type="img/x-icon" href="img/logoempresa.png">
  <link href="css/stylee.css" rel="stylesheet">
</head>
<script>
  function confirmacion() {
  var respuesta = confirm("¿desea enviar estos datos?");
  if (respuesta == true) {
    return true;
  } else {
    return false;
  }
  }
</script>
<body>

  <nav class="navbar">
    <div class="container">
      <a class="navbar-brand" href="#">
        <div class="lol"><img src="img/logoempresa.png" alt="logoempresa"></div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <li class="nav-item dropdown">
        <a class="toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Contactos
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#la">Rellenar formulario</a></li>
          <li><a class="dropdown-item" id="ver" href="#lo">Mis redes sociales</a></li>
        </ul>
      </li>
      
  </nav>

  <center>
    <div class="lul">
      <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="img/compuescritorio.jpg" class="d-block lp" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="img/pcgamer.webp" class="lp" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/componentes.jpg" class="lp" alt="...">
          </div>
        </div>
        <button class="carousel-control" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden"></span>
        </button>
        <button class="carousel-control" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
      </div>
    </div>
  </center>

  <div class="container mt-5">
    <div class="row">

        <?php
      require_once "conexion.php";


        // Paso 2: Consultar los datos
        $consulta = "SELECT * FROM productos";
        $resultado = mysqli_query($sql, $consulta);

        // Paso 3: Iterar sobre los resultados y generar tarjetas de Bootstrap
        while ($fila = mysqli_fetch_assoc($resultado)) {
            ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?php echo $fila['foto']; ?>" id="notanlargo" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $fila['objeto']; ?></h5>
                        <h5 class="card-title"><?php echo $fila['detalle']; ?></h5>
                        <p class="card-text"><?php echo $fila['precio']; ?></p>
                    </div>
                </div>
            </div>
            <?php
        }

        // Paso 4: Cerrar la conexión
        mysqli_close($sql);
        ?>

    </div >
</div>
 <form class="responsivew" id="la">
     <h1>Formulario</h1>
     <label name="nombre">Nombre</label>
     <input type="text" name="nombre" placeholder="" required>
     
     <label name="apellido">Apellido</label>
     <input type="text" name="apellido" placeholder="" required>
     
     <label name="correo">Correo</label>
     <input type="email" name="nombre" placeholder="" required>
     <button type="submit" class="btn btn-primary"  onclick="return confirmacion()">Enviar</button>
 </form>

  <div id="lo">
    <h2>Me pueden contactar por los siguientes contactos</h2>
    <div class="leo">
      <img src="img/whatsapp.webp" alt="" class="w">
      <p>1098654321</p>
      <img src="img/Facebook.webp" alt="" class="f">
      <p>ElKeverLeo</p>
      <img src="img/instagram.png" alt="" class="i">
      <p>@ElKever</p>
    </div>
  </div>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function () {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
  </script>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
  integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
  integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>
