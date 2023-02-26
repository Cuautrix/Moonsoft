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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- JQUERY PARA DATEPICKER -->
    <script src="../libs/jquery.js" charset="utf-8"> </script> 
     <!-- PAQUETERIA BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>CheckHuapilla</title>
    <!-- ESTILOS DEL MENU-->
    <link href="../estilos/estilos_c.css" rel="stylesheet">
    <!-- LIBRERIA DE ICONOS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- DATEPICKER JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script src="../libs/date-picker/js/bootstrap-datepicker.min.js" charset="utf-8"> </script>  
    <!-- DATEPICKER CSS-->
    <link href="../libs/date-picker/css/bootstrap-datepicker.css" rel="stylesheet">
    <!-- FULL CALENDAR CSS-->
    <link href="fullcaldendar/main.css" rel="stlesheet">
    <link rel="stylesheet" href="../estilos/bootstrap-clockpicker.min.css">
    <!--SCRIPT FULL CALENDAR-->
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js'></script>
    <script src='../js/popper.min.js'></script>
    <script src='../js/bootstrap-clockpicker.min.js'></script>
    <script src='../js/moment-with-locales.js'></script>
    
    <style>
       /*  ESTILOS PARA EL FORMULARIO  */
        :root {
            --bs-success-rgb: 71, 222, 152 !important;
        }

        html,
        

        .btn-info.text-light:hover,
        .btn-info.text-light:focus {
            background: #000;
        }
        table, tbody, td, tfoot, th, thead, tr {
            border-color: #ededed !important;
            border-style: solid;
            border-width: 1px !important;
        }
      /*  FIN DE LOS ESTILOS PARA EL FORMULARIO   */
    </style>
  </head>
  <body >
    <!-- INICIO MENU -->  
    <nav class="navbar navbar-dark bg- fixed-top" style="background-color:#002463;">
      <div class="container-fluid">
        <a class="navbar-brand me-auto" href="#">CheckHuapilla</a>
        
        <button class="navbar-toggler pe-2" onclick="window.location.href='./perfil_cliente.php'" type="button"   aria-controls="offcanvasDarkNavbar">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
        </button>
        <button class="navbar-toggler pe-2"  onclick="window.location.href='../php/cerrar.php'" type="button"   aria-controls="offcanvasDarkNavbar" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
              <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
            </svg>
        </button>
        <button class="navbar-toggler pe-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
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
    <!-- FINAL MENU -->
    <br>
    <br>
    <!-- INICIO MENU -->
    <nav class="navbar navbar-expand navbar-light bg-light" style="display: flex; justify-content: center;">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link" style="color: black;" href="lista_citas.php" >Tus Citas</a>
            <a class="nav-item nav-link" style="color: black;" href="crear_cita.php" >Agendar una Cita</a>
        </div>
    </nav>
    <!-- FINAL MENU -->
    <br>

    <!-- OPCIONES SCRIPT DE FULL CALENDAR  -->
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale:"es",
          headerToolbar:{
            left:'today',
            center:'title',
            right:'prev,next'
          },
          events:'load.php?accion=listar'   
        });
        calendar.render();
      });
    </script>   
    <!-- FIN DE LAS OPCIONES SCRIPT DE FULL CALENDAR  -->  
    <!--TITULO CREAR CITA-->
    <div fxFlex="auto" style="display: flex; justify-content: center;" >
      <h2 >Crear Cita</h2>
    </div>
    <div class="contenedor" > 
      <div class="izquierda" >
        <!-- CONTENEDOR DE FULL CALENDAR  -->   
        <div class="container" >
          <div class="col-md-8 offset-md-2">
            <!-- INVOCACION DE FULL CALENDAR  --> 
            <div id='calendar'></div>
            <!-- FIN DE LA INVOCACION DE FULL CALENDAR  -->  
          </div>
        </div>
      </div>
      <!-- FIN DEL CONTENEDOR  DE FULL CALENDAR  --> 
      <!---FORMULARIO PARA AGENDAR CITAS--->
      <div class="derecha" >
        <div class="container py-5" id="page-container" >
          <div class="row" >                      
            <div class="col-md-3 offset-md-5">
              <div class="cardt rounded-0 shadow">
                <div class="card-header bg-gradient bg-primary text-light">
                  <h5 class="card-title">Datos de la cita</h5>
                </div>
                <div class="card-body">
                  <div class="container-fluid">
                    <!---INICIO DEL FORMULARIO PARA AGENDAR LA CITA-->    
                    <form action="../php/cita_agregar.php" method="post" id="schedule-form">
                      <div class="form-group">
                        <br>
                        <label for="exampleFormControlSelect1">Elije tu vehiculo</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="vehiculo">
                          <!---CONSULTA PARA MONSTRAR LOS VEHICULOS--->
                          <?php                           
                          include "../php/bd.php";
                          $id=$_SESSION['correosesion'];
                          $buscar =" SELECT * FROM  ms_vehiculo WHERE id_cliente='$id'";
                          $resultado=mysqli_query($conexion,$buscar);
                          while($filas=mysqli_fetch_array($resultado))
                          {   
                                                echo "<option>"; echo $filas ['modelo']; echo"</option>";
                          }
                          ?>
                          <!---FIN DE LA CONSULTA PARA MONSTRAR LOS VEHICULOS--->
                        </select>
                        <br>                    
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Elije el servicio</label>
                          <select class="form-control" id="exampleFormControlSelect1" name="servicio">
                          <!---CONSULTA PARA MONSTRAR LOS SERVICIOS--->
                          <?php                           
                          include "../php/bd.php";
                          $id=$_SESSION['correosesion'];
                          $buscar =" SELECT * FROM  dt_servicio ";
                          $resultado=mysqli_query($conexion,$buscar);
                          while($filas=mysqli_fetch_array($resultado))
                          {   
                                                echo "<option>"; echo $filas ['servicio']; echo"</option>";
                          }
                          ?>
                          <!---FIN DE LA CONSULTA PARA MONSTRAR LOS SERVICIOS--->
                          </select>
                      </div>   
                      <!---DATE PICKER PARA SELECCIONAR LA FECHA--->                      
                      <div class="form-group mb-2">
                        <label for="start_datetime" class="control-label">Dia </label>
                          <div class="input-group date cc-date">
                            <input type="search" class="form-control" id="search" name="fecha_inicio" require><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                            <button class="btn btn-primary "type="button"  id="btn1" >Buscar Horarios </button>
                          </div>
                      </div>
                       <!--- FIN DATE PICKER PARA SELECCIONAR LA FECHA--->  
                       <!---MUESTRA LOS HORARIOS DISPONIBLES DE LA FECHA--->  
                      <label for="exampleFormControlSelect1">Hora</label>       
                      <div id="seccion" name="hora"></div> 
                      <!--- FIN DE LA MUESTRA LOS HORARIOS DISPONIBLES DE LA FECHA--->                      
                      <div class="form-group mb-2">
                        <label for="description" class="control-label">Comentario</label>
                        <textarea rows="3" class="form-control form-control-sm rounded-0" name="comentario" id="description" required></textarea>
                      </div>
                    </form>
                  </div>
                </div>
                <br>
                <br>
                <div class="card-footer">
                  <div class="text-center">
                    <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i class="fa fa-save"></i> Agendar cita</button>         
                  </div>
                </div>
                 <!-- FIN DEL FORMULARIO PARA AGENDAR LA CITA-->
                <br>
                <!---LABEL PARA AGREGAR VEHICULO--->
                <label for="exampleFormControlSelect1">¿Aun no agregas tu vehiculo?</label>
                <br>
                <!-- BUTTON PARA AGREGAR VEHICULO-->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Agregar vehiculo
                </button>
                <!-- FIN DEL BUTTON PARA AGREGAR VEHICULO-->
                <!-- MODAL -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Agrega tu vehiculo</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <!-- FORMULARIO PARA REGISTRAR VEHICULO -->
                        <form action="../php/vehiculo_agregar_modal.php" method="POST">           
                          <div class="fadeIn second">
                            <input type="text" id="login"  name="placas" placeholder="Placas" required >
                            <span class="material-symbols-outlined">payments</span>
                          </div>                                  
                          <div class="fadeIn second">
                            <input type="text" id="login"  name="modelo" placeholder="Modelo" required >
                            <span class="material-symbols-outlined">contact_mail</span>
                          </div>
                          <div class="fadeIn second">
                            <input type="text" id="login"  name="marca" placeholder="Marca" required >
                            <span class="material-symbols-outlined">directions_car</span>
                          </div>
                          <div class="fadeIn second">
                            <input type="text" id="login"  name="color" placeholder="Color" required >
                            <span class="material-symbols-outlined">invert_colors</span>
                          </div>                                                                             
                          <br>
                          <input type="submit" class="fadeIn fourth" value="Agregar">
                        </form>
                        <!-- FIN FORMULARIO PARA REGISTRAR VEHICULO -->
                        <br>
                      </div>
                    </div>
                  </div> 
                </div>
                <!-- FIN MODAL -->
              </div>
            </div>
          </div>
        </div> 
    </div>
    <!---FIN DEL FORMULARIO PARA AGENDAR CITAS--->
  </body>
<!--Script js para el DatePicker del formulario-->
<script src="../libs/app.js" charset="utf-8"> </script> 
</html>