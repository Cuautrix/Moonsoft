<?php
    include 'bd.php';
    
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $apellido_p=$_POST['apellido_p'];
    $apellido_m=$_POST['apellido_m'];
    $direccion=$_POST['direccion'];
    $correo=$_POST['correo'];
    $pass=$_POST['pass'];
    $cel=$_POST['cel'];



$respuesta = new stdClass();
    $query  =  sprintf("UPDATE clientes SET ID_CLIENTE='".$id."',NOMBRE='".$nombre."', APE_P='".$apellido_p."',APE_M='".$apellido_m."',DIRECCION='".$direccion."',TEL_CLI='".$cel."',EMAIL_CLI='".$correo."',PASS_CLIENTE='".$pass."' WHERE ID_CLIENTE='".$id."'",
                trim($_REQUEST['ID_CLIENTE']), trim($_REQUEST["ID_CLIENTE"]));
$result=mysqli_query($conexion, $query);                        
    if(mysqli_affected_rows($conexion)){
     echo'
            <script>
                alert("Los Datos se han Modificado exitosamente");
                window.location = "../logeado_cliente/inicio_cliente.php";
            </script>
        ';
    } 
    else {
         echo'
            <script>
                alert("no);
                window.location = "../logeado_cliente/perfil_cliente.php";
            </script>
        ';
    } 
 echo json_encode(array("data"=>$respuesta)); 
?>