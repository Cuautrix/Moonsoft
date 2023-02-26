<?php
    session_start();
    if(!isset($_SESSION['correosesion'])){
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
    <link href="../estilos/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  </head>
  <body >

    <!-- Example Code -->
    
    <nav class="navbar navbar-dark bg- fixed-top" style="background-color:#002463;">
      <div class="container-fluid">
        <a class="navbar-brand me-auto" href="inicio_cliente.php">CheckHuapilla</a>
        
        <?php 
          include "../php/bd.php";
          $id=$_SESSION['correosesion'];
          $buscar =" SELECT nombre FROM  ms_cliente WHERE id_cliente='$id'";
          $resultado=mysqli_query($conexion,$buscar);
          while($filas=mysqli_fetch_array($resultado))
          {
            $nombre= $filas['nombre'];
          }
        ?>
        <a class="navbar-brand me-auto" ><?php echo $nombre?></a>

        <button class="navbar-toggler pe-2" onclick="window.location.href='./perfil_cliente.php'" type="button" style="left: 85%; position: absolute;"  aria-controls="offcanvasDarkNavbar">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
        </button>
        <button class="navbar-toggler pe-2"  onclick="window.location.href='../php/cerrar.php'" type="button" style="left: 90%; position: absolute;"  aria-controls="offcanvasDarkNavbar" >
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
                <a class="nav-link active" aria-current="page" href="crear_cita.php">CITAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="lista_citas.php">HISTORIAL DE CITAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="vehiculo_lista.php">MIS VEHICULOS</a>
              </li>
              
            </ul>
            
          </div>
        </div>
      </div>
    </nav>
    
    <br>
    <br>
    <!-- MENNU DE CITAS EN GENERAL-->
    <nav class="navbar navbar-expand navbar-light bg-light" style="display: flex; justify-content: center;">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link" style="color: black;" href="lista_citas.php" >Tus Citas</a>
            <a class="nav-item nav-link" style="color: black;" href="crear_cita.php" >Agendar una Cita</a>
        </div>
    </nav>
    <!--Titulo de la Pagina-->
    <div fxFlex="auto" style="display: flex; justify-content: center;" >
            <h2 >Especificaciones de la Cita</h2>
    </div>

<!-- CONSULTA PARA TRAER DATOS-->
<?php
      include "../php/bd.php";
      $id_cita=$_GET['id_cita'];

      $buscar =" SELECT * FROM  ms_cita WHERE id_cita='".$id_cita."'";
      $resultado=mysqli_query($conexion,$buscar);
      if ($row = mysqli_fetch_array($resultado)) {
        $id_cita= $row['id_cita'];
        $nombre_cliente= $row['nombre_cliente'];
        $vehiculo= $row['vehiculo'];
        $servicio= $row['servicio'];
        $comentario= $row['comentario'];
        $fecha= $row['fecha'];
        $hora= $row['hora'];
        $estado= $row['estado'];
        $nombre_mec= $row['nombre_mec'];
    }
?>
<!-- FIN DE LA CONSULTA PARA TRAER DATOS-->
<!-- IMPRESION DE DATOS-->
<div class="modal-body">   
     <p class="card-text"> El Id de cliente:<?php echo $id_cita;?> </p>
     <p class="card-text">El vehiculo elegido:<?php echo  $vehiculo;?></p> 
     <p class="card-text">Servicio:<?php echo  $servicio;?></p> 
     <p class="card-text">Comentario:<?php echo $comentario?></p>
     <p class="card-text">Fecha  Programada:<?php echo $fecha?></p>  
     <p class="card-text">Hora Programada:<?php echo $hora?></p>  
     <p class="card-text">Estado de la cita:<?php echo $estado;?></p> 
     <p class="card-text">Nombre del mecanico asignado:<?php echo $nombre_mec?></p> 
 </div>
<!-- FIN DE  IMPRESION DE DATOS-->
<!--Titulo de la Tabla-->
<div fxFlex="auto" style="display: flex; justify-content: center;" >
            <h2 >Detalles de la Cita</h2>
 </div>
 <div class="fondotabla">
    <!--Table-->
    <table class="table table-hover table-fixed">
    <!--Table head-->
                <thead>
                    <tr>                   
                        <th > Descripcion</th>
                        <th > Precio</th>
                        <th > Cantidad </th>    
                        <th > Detalle total </th>                       
                    </tr>
                </thead>
                <tbody >
    <?php
    include "../php/bd.php";
    $id_cita=$_GET['id_cita'];
    $buscar =" SELECT * FROM  dt_detalle WHERE id_cita='$id_cita'";
    $resultado=mysqli_query($conexion,$buscar);
    while($filas=mysqli_fetch_array($resultado))
    {
                        echo "<tr>";
                        echo "<td>"; echo $filas ['descripcion']; echo "</td>";
                        echo "<td>"; echo "$"; echo $filas ['precio']; echo "</td>";
                        echo "<td>"; echo $filas ['cantidad']; echo "</td>";      
                        echo "<td>"; echo "$"; echo $filas ['total']; echo "</td>";                               
    }
    ?>
    </tbody>
    <?php
    $id_cita=$_GET['id_cita'];
    $buscar =mysqli_query($conexion," SELECT SUM(total) FROM  dt_detalle WHERE id_cita='$id_cita'");
    $total=mysqli_fetch_array($buscar);
    ?>
    
<!--Table body-->
    </table>
    <p class="card-text">Total:<?php echo "$"; echo $total[0]?></p>
    
    
</div>


 