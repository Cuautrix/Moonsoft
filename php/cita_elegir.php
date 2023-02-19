<?php
    session_start();
    if(!isset($_SESSION['id_session_mec'])){
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
    $id=$_GET['id_cita'];
    $correo = $_SESSION['id_session_mec'];
    //consulta para buscar el nombre_mec del mecanico
    $result= mysqli_query($conexion,"SELECT nombre_mec FROM dt_mecanico WHERE id_mec='$correo'");
			if($result->num_rows>0){
				while($consulta= $result->fetch_assoc()){
					$nom=$consulta['nombre_mec'];
                    $nombre_mec = $nom;
            	}
			}
     //consulta para insertar el nombre_mec del mecanico en la tabla
     $update="UPDATE ms_cita SET nombre_mec=TRIM('".$nombre_mec."') WHERE id_cita='".$id."'";

   $ejecutar = mysqli_query($conexion, $update);
   if ($ejecutar) {echo' 
    <script>
        alert("Cita Seleccionada  correctamente");
        window.location = "../logeado_mecanico/citas_realizadas.php";
    </script>
';} else {echo'
    <script>
    alert("no);
  
    </script>
';}