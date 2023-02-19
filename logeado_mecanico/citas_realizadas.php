<?php
    session_start();
    if(!isset($_SESSION['id_session_mec'])){
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
        <a class="navbar-brand me-auto" href="#">CheckHuapilla Mec</a>
        
        <button class="navbar-toggler pe-2" onclick="window.location.href='./perfil_mec.php'" type="button" style="left: 85%; position: absolute;"  aria-controls="offcanvasDarkNavbar">
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
                <a class="nav-link active" aria-current="page" href="citas_disponibles.php">CITAS DISPONIBLES</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="citas_realizadas.php">CITAS ELEGIDAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="citas_terminadas.php">HISTORIAL DE CITAS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="calendario.php">CALENDARIO</a>
              </li>
              
            </ul>
            
          </div>
        </div>
      </div>
    </nav>

    
    <br>
    <br>

    <br>

   

<!--Titulo de la Tabla-->
    <div fxFlex="auto" style="display: flex; justify-content: center;" >
            <h2 > Citas Elegidas</h2>
    </div>
    <br>
    <br>
    <div class="fondotabla">
    <!--Table-->
    <table class="table table-hover table-fixed">
<!--Table head-->
                <thead>
                    <tr>
                        <th > ID</th>
                        <th > CLIENTE</th>
                        <th > VEHICULO</th>
                        <th > SERVICIO</th>
                        <th > MECANICO </th>                       
                        <th > ESTATUS</th>
                        
                    
                    </tr>
                </thead>
                <tbody >
<?php
    include "../php/bd.php";
    $correo = $_SESSION['id_session_mec'];
    $result= mysqli_query($conexion,"SELECT nombre_mec FROM dt_mecanico WHERE id_mec='$correo'");
			if($result->num_rows>0){
				while($consulta= $result->fetch_assoc()){
					$nom=$consulta['nombre_mec'];
                    $nombre_mec = $nom;
            	}
			}
    $buscar =" SELECT * FROM  ms_cita WHERE nombre_mec='".$nombre_mec."'  EXCEPT select * from ms_cita where estado='Finalizado'";
    $resultado=mysqli_query($conexion,$buscar);
    while($filas=mysqli_fetch_array($resultado))
    {
                        echo "<tr>";
                        echo "<td>"; echo $filas ['id_cita']; echo "</td>";
                        echo "<td>"; echo $filas ['nombre_cliente']; echo "</td>";
                        echo "<td>"; echo $filas ['vehiculo']; echo "</td>";
                        echo "<td>"; echo $filas ['servicio']; echo "</td>";
                        echo "<td>"; echo $filas ['nombre_mec']; echo "</td>";
                        echo "<td>"; echo $filas ['estado']; echo "</td>";
                        ?>    

                        <div class="modal-footer rounded-0">
                                        <div class="text-end">
                                            <td><button type='button' class='btn btn-dark' style='background-color: #002463' data-bs-toggle="modal" data-bs-target="#view<?php echo $filas['id_cita'];?>">  Modificar</button></td>
                                        </div>
                                    </div>
                                    
                         <!-- Modal -->

                          <div class="modal fade" id="view<?php echo $filas['id_cita'];?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                              <div class="modal-header">
                                  <h1 class="modal-title fs-5" id="staticBackdropLabel"> ID DE LA CITA:<?php echo $filas ['id_cita'];?></h1>               
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">   
     
                                  <p class="card-text"> El Id de cliente:<?php echo $filas ['id_cliente'];?> </p>
                                  <p class="card-text">El vehiculo elegido:<?php echo $filas ['vehiculo'];?></p> 
                                  <p class="card-text">Servicio:<?php echo $filas ['servicio'];?></p> 
                                  <p class="card-text">Comentario:<?php echo $filas ['comentario'];?></p>
                                  <p class="card-text">Fecha  Programada:<?php echo $filas ['fecha'];?></p>  
                                  <p class="card-text">Hora Programada:<?php echo $filas ['hora'];?></p>  
                              </div>
                            <!--  Form -->
                                  <form action="../php/cita_modificar.php" method="POST">
                                  <div class="fadeIn second">
                                  <h1 class="modal-title fs-5" id="staticBackdropLabel"> ID DE LA CITA:</h1>
                                      <input type="text" id="login"  name="id" value="<?php echo $filas ['id_cita'];?>" readonly=»readonly» required >
                                  </div>  
                                  <div class="form-group">
                                          <label for="exampleFormControlSelect1">Estado de la cita</label>
                                          <select class="form-control" id="exampleFormControlSelect1" name="estado">
                                            <option>Pendiente</option>
                                            <option>Inicializado</option>
                                            <option>En Proceso</option>
                                            <option>Finalizado</option>
                                          </select>
                                      </div>
                                    <div class="form-group mb-2">
                                                <label for="description" class="control-label">Comentario</label>
                                                <textarea rows="3" class="form-control form-control-sm rounded-0" name="comentario" id="description"  value="<?php echo $filas ['comentario'];?>" required></textarea>
                                    </div>
                                    <br>
                                      <input type="submit" class="fadeIn fourth" value="Modificar">
                                      
                                  </form>
                              
                             
                              </div>
                          </div>
                          </div>
                    <?php }
                  ?>
                </tbody>
<!--Table body-->
  </table>
  </div>
    <!-- End Example Code -->

  </body>
</html>