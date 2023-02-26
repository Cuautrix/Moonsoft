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
     

    include 'bd.php';

    //llegada de datos del form
    $id_cita = $_POST['id'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
     
    $detalle_total= $precio*$cantidad;

    //consulta para insertar los datos del detalle
    $query = "INSERT INTO  dt_detalle (descripcion,precio, cantidad,total,id_cita) 
    VALUES('$descripcion','$precio','$cantidad','$detalle_total','$id_cita')";
    
 
    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {echo' 
        <script>
            alert("Detalle agendado correctamente");
            window.location = "../logeado_mecanico/citas_realizadas.php";
        </script>
    ';} else {echo'
        <script>
        alert("no);
      
        </script>
    ';}
   
    


    
?>