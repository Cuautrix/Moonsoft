<?php
    include 'bd.php';
    
    $placas=$_POST['placas'];
    $modelo=$_POST['modelo'];
    $marca=$_POST['marca'];
    $color=$_POST['color'];

    echo $placas;
    echo $modelo;
    echo $marca;
    echo $color;

$respuesta = new stdClass();
    $query  =  sprintf("UPDATE vehiculo SET modelo='".$modelo."', marca='".$marca."',color='".$color."' WHERE placas='".$placas."'",
                trim($_REQUEST['modelo']), trim($_REQUEST["modelo"]));
$result=mysqli_query($conexion, $query);                        
    if(mysqli_affected_rows($conexion)){
     echo'
            <script>
                alert("Los Datos se han Modificado exitosamente");
                window.location = "../logeado_cliente/vehiculo_lista.php";
            </script>
        ';
    } 
    else {
         echo'
            <script>
                alert("no);
                window.location = "../logeado_cliente/vehiculo_lista.php";
            </script>
        ';
    } 
 echo json_encode(array("data"=>$respuesta)); 
?>