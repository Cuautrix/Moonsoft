<?php
    include 'bd.php';
    $placas=$_GET['placas'];

    $eliminar_vehiculo=" DELETE FROM  vehiculo WHERE placas= '".$placas."'";

    $ejecutar = mysqli_query($conexion, $eliminar_vehiculo);

    if (mysqli_affected_rows($conexion)) {echo' 
        <script>
            alert("Vehiculo eliminado exitosamente");
            window.location = "../logeado_cliente/vehiculo_lista.php";
        </script>
    ';} else {echo'
        <script>
        alert("no);
            window.location = "../logeado_cliente/vehiculo_lista.php";
        </script>
    ';}
?>