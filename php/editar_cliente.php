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
    $query  =  sprintf("UPDATE ms_cliente SET id_cliente='".$id."',nombre='".$nombre."', ape_p='".$apellido_p."',ape_m='".$apellido_m."',direccion='".$direccion."',tel_cli='".$cel."',email_cli='".$correo."',pass_cliente='".$pass."' where id_cliente='".$id."'"
                );
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