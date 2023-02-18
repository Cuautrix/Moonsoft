<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <title>CheckHuapilla</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="estilos/estilos.css" rel="stylesheet">
</head>

<body >
  <div class="header">
    <div class="container">
      <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
          <li class="nav-item"><a href="index.html" class="nav-link ">Inicio</a></li>
          <li class="nav-item"><a href="servicios.html" class="nav-link">Servicios</a></li>
          <li class="nav-item"><a href="ubicacion.html" class="nav-link">Ubicacion</a></li>
          <li class="nav-item"><a href="citas.html" class="nav-link">Citas</a></li>
          <li class="nav-item"><a href="contacto.html" class="nav-link">Contacto</a></li>
          <div class="btn-group">
            <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              Iniciar Sesion
            </button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="logincliente.php">Clientes</a></li>
              <li><a class="dropdown-item" href="loginmecanico.php">Mecanicos</a></li>

            </ul>
          </div>
          <li class="nav-item"><a href="registro.php" class="nav-link">Registrarte</a></li>
        </ul>
      </header>
    </div>
  </div>
  <!--formulario-->
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <br>
      <!-- Tabs Titles -->
      <h2>INICIAR SESIÓN</h2>
      <h4>ADMIN</h4>
      <br>
      <br>
  
      <!-- Login Form -->
      <form action="php/admin_login.php" method="POST">
          <div class="fadeIn second">
              <input type="email" id="login"  name="correo" placeholder="Correo Electronico" required >
              <span class="material-symbols-outlined">mail</span>
          </div>
          <div class="fadeIn third">
              <input type="password" id="password" class="fadeIn third" name="pass" placeholder="Contraseña" required>
              <span class="material-symbols-outlined">key</span>
          </div>
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>
  
      <!-- Remind Passowrd -->
      
  
    </div>
</body>
</html>