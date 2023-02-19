<?php
    session_start();
    if(!isset($_SESSION['correosesion'])){
        echo'
            <script>
                alert("Por favor debes iniciar sesion");
                window.location = "../index.php";
            </script>
        ';
        
        session_destroy();
        die();
    }

    include 'bd.php';

  

    $placas = $_POST['placas'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $color =$_POST['color'];
    $correo = $_SESSION['correosesion'];
    
    
    
    
    $query = "INSERT INTO  ms_vehiculo (placas, modelo, marca,color,id_cliente) 
                VALUES('$placas','$modelo','$marca','$color','$correo')";

   
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM ms_vehiculo WHERE placas='$placas'");

    if(mysqli_num_rows($verificar_correo)>0){
        echo'
            <script>
                alert("Este Vehiculo ya esta registrado");
                window.location="../logeado_cliente/vehiculo_agregar.php";
            </script>
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if ($ejecutar) {echo' 
        <script>
            alert("Vehiculo registrado correctamente");
            window.location = "../logeado_cliente/vehiculo_lista.php";
        </script>
    ';} else {echo'
        <script>
        alert("no);
      
        </script>
    ';}

?>