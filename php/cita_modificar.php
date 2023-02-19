<?php
    include 'bd.php';
    $id_cita=$_POST['id'];
    $estado=$_POST['estado'];
    $comentario=$_POST['comentario'];



    echo $estado;
    echo $comentario;



$respuesta = new stdClass();
    $query  =  sprintf("UPDATE ms_cita SET comentario='".$comentario."',estado='".$estado."' WHERE id_cita='".$id_cita."'",
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