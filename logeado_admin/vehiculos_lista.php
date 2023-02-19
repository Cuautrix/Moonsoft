<?php
    session_start();
    if(!isset($_SESSION['correosesion_admin'])){
        echo'
            <script>
                alert("Por favor debes iniciar sesion");
                window.location = "../index.html";
            </script>
        ';
        
        session_destroy();
        die();
    }
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <title>CheckHuapilla</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="../estilos/estilos_c.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>
  <body >

    <!-- Example Code -->
    
    <nav class="navbar navbar-dark bg- fixed-top" style="background-color:#002463;">
      <div class="container-fluid">
        <a class="navbar-brand me-auto" href="inicio_admin.php">CheckHuapilla Admin</a>
        
        <button class="navbar-toggler pe-2" onclick="window.location.href='./perfil_admin.php'" type="button"   aria-controls="offcanvasDarkNavbar">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
        </button>
        <button class="navbar-toggler pe-2"  onclick="window.location.href='../php/cerrar.php'" type="button"  aria-controls="offcanvasDarkNavbar" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
              <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
            </svg>
        </button>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        </mat-toolbar>
        <div class="offcanvas offcanvas-end text-bg-" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel"  style="background-color:#002463;"> 
          <div class="offcanvas-header" style="background-color: #01112e">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel" style="color:white">OPCIONES</h5>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="d">
                <a class="nav-link active" aria-current="page" href="citas_lista.php">CITAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="clientes_lista.php">CLIENTES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="mecanicos_lista.php">MECANICOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="vehiculos_lista.php">VEHICULOS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="admins_lista.php">ADMINISTRADORES</a>
              </li>
              
            </ul>
            
          </div>
        </div>
      </div>
    </nav>
    
    <!-- End Example Code -->
    <br>
    <br>
    <br>
    <br>

   

<!--Titulo de la Tabla-->
    <div fxFlex="auto" style="display: flex; justify-content: center;" >
            <h2 > Vehiculos</h2>
    </div>
    <br>
    <br>
    
    <div class="fondotabla">
    <!--Table-->
    <table class="table table-hover table-fixed">
<!--Table head-->
                <thead>
                    <tr>                       
                        <th > ID CLIENTE</th>
                        <th > NO.PLACAS</th>
                        <th > MODELO</th>
                        <th > MARCA </th>                       
                        <th > COLOR </th>
                    
                    </tr>
                </thead>
                <tbody >
      <?php
    include "../php/bd.php";
    $buscar =" SELECT * FROM  ms_vehiculo";
    $resultado=mysqli_query($conexion,$buscar);
    while($filas=mysqli_fetch_array($resultado))
    {
                        echo "<tr>";
                        echo "<td>"; echo $filas ['id_cliente']; echo "</td>";
                        echo "<td>"; echo $filas ['placas']; echo "</td>";
                        echo "<td>"; echo $filas ['modelo']; echo "</td>";
                        echo "<td>"; echo $filas ['marca']; echo "</td>";
                        echo "<td>"; echo $filas ['color']; echo "</td>";

                        echo "</tr>";
                        
    }
    ?>
                </tbody>
<!--Table body-->
  </table>
</div>
</body>
</html>