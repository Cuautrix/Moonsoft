<?php
    include 'bd.php';
    $id_cita=$_POST['id'];
    $estado=$_POST['estado'];
    $comentario=$_POST['comentario'];
    $end_datetime=$_POST['end_datetime'];


    echo $estado;
    echo $comentario;
    echo $end_datetime;


$respuesta = new stdClass();
    $query  =  sprintf("UPDATE citas SET comentario='".$comentario."', end_datetime='".$end_datetime."',estado='".$estado."' WHERE id='".$id_cita."'",
                trim($_REQUEST['comentario']), trim($_REQUEST["comentario"]));
$result=mysqli_query($conexion, $query);                        
    if(mysqli_affected_rows($conexion)){
     echo'
            <script>
                alert("Los Datos se han Modificado exitosamente");
                window.location = "../logeado_mecanico/citas_realizadas.php";
            </script>
        ';
    } 
    else {
         echo'
            <script>
                alert("no);
                window.location = "../logeado_mecanico/citas_realizadas.php";
            </script>
        ';
    } 
 echo json_encode(array("data"=>$respuesta)); 
?>