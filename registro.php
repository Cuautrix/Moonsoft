<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <title>CheckHuapilla</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link href="estilos/estilos.css" rel="stylesheet">
</head>

<body >
<!-- menu-->
<div class="header">
    <div class="container">
      <header class="d-flex justify-content-center py-3">
        <ul class="nav nav-pills">
          <li class="nav-item"><a href="index.html" class="nav-link ">Inicio</a></li>
          <li class="nav-item"><a href="servicios.html" class="nav-link">Servicios</a></li>
          <li class="nav-item"><a href="ubicacion.html" class="nav-link">Ubicacion</a></li>
          <li class="nav-item"><a href="citas.html" class="nav-link">Citas</a></li>
          <li class="nav-item"><a href="contacto.html" class="nav-link">Contacto</a></li>
          <div class="btn-group" >
            <button type="button" class="btn btn-danger " onclick="location.href='login.php'" aria-expanded="false">
              Iniciar Sesion
            </button>
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
      <h2>REGISTRATE</h2>
      <br>
      <br>
  
      <!-- Login Form -->
      <form action="php/registro_cliente.php" method="POST">
        <div class="fadeIn second">
          <input type="text" id="login"  name="nombre" placeholder="Nombre" required >
          <span class="material-symbols-outlined">person</span>
        </div>
        <div class="fadeIn second">
          <input type="text" id="login"  name="apellido_p" placeholder="Apellido Paterno" required >
          <span class="material-symbols-outlined">contact_mail</span>
        </div>
        <div class="fadeIn second">
          <input type="text" id="login"  name="apellido_m" placeholder="Apellido Materno" required >
          <span class="material-symbols-outlined">contact_mail</span>
        </div>
        
        <div class="fadeIn second">
          <input type="text" id="login"  name="direccion" placeholder="Direccion" required >
          <span class="material-symbols-outlined">room</span>
        </div>
        <div class="fadeIn second">
          <input type="email" id="login"  name="correo" placeholder="Correo Electronico" required >
          <span class="material-symbols-outlined">mail</span>
        </div>
        <div class="fadeIn third">
          <input type="password" id="password" class="fadeIn third" name="pass" placeholder="Contraseña" required>
          <span class="material-symbols-outlined">key</span>
        </div>
        <div class="fadeIn third">
          <input type="text" id="login"  name="cel" placeholder="Numero Telefonico" required >
          <span class="material-symbols-outlined">phone_iphone</span>
        </div>
        <br>
          <input type="submit" class="fadeIn fourth" value="Registrate">
        
      </form>
  
      <!-- Remind Passowrd -->
      
  
    </div>
</body>
</html>