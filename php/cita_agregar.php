<?php
    session_start();
    if(!isset($_SESSION['correosesion'])){
        echo'
            <script>
                alert("Por favor debes iniciar sesion");
                window.location = "../index.php";
            </script>
        ';
        
        session_destroy();
        die();
    }

    include 'bd.php';

    //llegada de datos del form
    $vehiculo = $_POST['vehiculo'];
    $servicio = $_POST['servicio'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $comentario =$_POST['comentario'];
    $correo = $_SESSION['correosesion'];
    //consulta para buscar el nombre del cliente
    $result= mysqli_query($conexion,"SELECT NOMBRE FROM clientes WHERE ID_CLIENTE='$correo'");
			if($result->num_rows>0){
				while($consulta= $result->fetch_assoc()){
					$nom=$consulta['NOMBRE'];
                    $nombre = $nom;
            	}
			}   
    
    //consulta para insertar los datos de la cita
    $query = "INSERT INTO  citas (id_cliente,nombre_cliente,vehiculo, servicio,comentario,start_datetime, end_datetime,estado,nombre_mecanico) 
                VALUES('$correo','$nombre','$vehiculo','$servicio','$comentario','$fecha_inicio','Pendiente','Pendiente','Pendiente')";
    
 
    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {echo' 
        <script>
            alert("Cita agendada correctamente");
            window.location = "../logeado_cliente/lista_citas.php";
        </script>
    ';} else {echo'
        <script>
        alert("no);
      
        </script>
    ';}
   
    

    echo $vehiculo;
    echo $servicio;
    echo $fecha_inicio;
    echo $comentario ;
    echo $correo;
    echo $nombre;
    
?>