<?php
    include 'bd.php';


    $nombre = $_POST['nombre'];
    $ap_p = $_POST['apellido_p'];
    $ap_m = $_POST['apellido_m'];
    $direccion =$_POST['direccion'];
    $correo = $_POST['correo'];
    $contraseña = $_POST['pass'];
    $cel = $_POST['cel'];
    
 


    $query = "INSERT INTO  dt_administrador(nombre, ape_p, ape_m,direccion,email_admin,pass_admin,tel) 
                VALUES('$nombre','$ap_p','$ap_m','$direccion','$correo','$contraseña','$cel')";

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM dt_administrador WHERE email_admin='$correo'");

    if(mysqli_num_rows($verificar_correo)>0){
        echo'
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location="../logeado_admin/admin_agregar.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {echo' 
        <script>
            alert("Usuario almacenado correctamente");
            window.location="../logeado_admin/admin_agregar.php";
        </script>
    ';} else {echo'
        <script>
        alert("no);
        window.location="../logeado_admin/admin_agregar.php";
        </script>
    ';}

?>