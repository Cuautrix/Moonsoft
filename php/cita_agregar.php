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
    $hora = $_POST['hora'];
    $comentario =$_POST['comentario'];
    $correo = $_SESSION['correosesion'];
    //consulta para buscar el nombre del cliente
    $result= mysqli_query($conexion,"SELECT nombre FROM ms_cliente WHERE id_cliente='$correo'");
			if($result->num_rows>0){
				while($consulta= $result->fetch_assoc()){
					$nom=$consulta['nombre'];
                    $nombre = $nom;
            	}
			}   
    //consulta para buscar el id del servicio 
    $result= mysqli_query($conexion,"SELECT id_servicio FROM dt_servicio WHERE servicio='$servicio'");
			if($result->num_rows>0){
				while($consulta= $result->fetch_assoc()){
					$idservicio=$consulta['id_servicio'];                  
            	}
			}   
    //consulta para buscar el id del horario
    $result= mysqli_query($conexion,"SELECT id_horario FROM ms_horario WHERE apertura='$hora'");
			if($result->num_rows>0){
				while($consulta= $result->fetch_assoc()){
					$id_horario=$consulta['id_horario'];
                    echo $id_horario;
            	}
			}   
    //consulta para insertar los datos de la cita
    $query = "INSERT INTO  ms_cita (nombre_cliente,vehiculo, servicio,comentario,fecha,hora,estado,nombre_mec,id_cliente,id_servicio,id_horario) 
                VALUES('$nombre','$vehiculo','$servicio','$comentario','$fecha_inicio','$hora','Pendiente','Pendiente','$correo','$idservicio','$id_horario')";
    
 
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
   
    


    
?>