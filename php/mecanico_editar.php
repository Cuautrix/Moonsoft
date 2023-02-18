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
    $query  =  sprintf("UPDATE mecanico SET id_mec='".$id."',nombre='".$nombre."', ape_p='".$apellido_p."',ape_m='".$apellido_m."',direccion='".$direccion."',tel='".$cel."',email_mec='".$correo."',pass_mec='".$pass."' WHERE id_mec='".$id."'",
                trim($_REQUEST['id']), trim($_REQUEST["id"]));
$result=mysqli_query($conexion, $query);                        
    if(mysqli_affected_rows($conexion)){
     echo'
            <script>
                alert("Los Datos se han Modificado exitosamente");
                window.location = "../logeado_mecanico/inicio_mecanico.php";
            </script>
        ';
    } 
    else {
         echo'
            <script>
                alert("no);
                window.location = "../logeado_mecanico/perfil_mec.php";
            </script>
        ';
    } 
 echo json_encode(array("data"=>$respuesta)); 
?>