
 <?php            
    header('Content-Type: application/json');             
    include "../php/bd.php";

    switch($_GET['accion']){
        case 'listar':
            $datos=mysqli_query($conexion, " select id_cita,
            servicio as title,
            fecha as start
            from ms_cita");
            $resultado=mysqli_fetch_all($datos, MYSQLI_ASSOC);
            echo json_encode($resultado);

           // $sql =" SELECT servicio as title ,start_datetime as start FROM citas";
            // Ejecutar consulta
           // $result = mysqli_query($conexion, $sql);
            // Convertir resultados en formato JSON
           // $events = array();
           // while ($row = mysqli_fetch_assoc($result)) {
            //    $events[] = $row;
           // }
          //  // Cerrar conexión
          //  mysqli_close($conexion);
            // Enviar eventos en formato JSON
           // echo json_encode($events);
        break;
    }
      
?>
  