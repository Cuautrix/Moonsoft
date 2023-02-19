<?php
    include 'bd.php';


    $nombre = $_POST['nombre'];
    $ap_p = $_POST['apellido_p'];
    $ap_m = $_POST['apellido_m'];
    $direccion =$_POST['direccion'];
    $correo =  $_POST['correo'];
    $contraseña =$_POST['pass'];
    $cel = $_POST['cel'];
    
 


    $query = "INSERT INTO  ms_cliente (nombre, ape_p, ape_m,direccion,email_cli,pass_cliente,tel_cli) 
                VALUES('$nombre','$ap_p','$ap_m','$direccion','$correo','$contraseña','$cel')";

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM ms_cliente WHERE email_cli='$correo'");

    if(mysqli_num_rows($verificar_correo)>0){
        echo'
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location="../registro.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {echo' 
        <script>
            alert("Usuario almacenado correctamente");
            window.location = "../logincliente.php";
        </script>
    ';} else {echo'
        <script>
        alert("no);
        window.location = "login.php";
        </script>
    ';}

?>