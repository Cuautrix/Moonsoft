<?php
include 'bd.php';
    $datos=$_POST['datos'];
    $buscar=" SELECT ms_horario.apertura
    FROM ms_horario
    WHERE (((ms_horario.Id_horario) Not In (SELECT Id_horario
                                        FROM ms_cita
                                        WHERE ms_cita.fecha = '".$datos."')))";
    $resultado=mysqli_query($conexion,$buscar);
    echo "<select class='form-control' name='hora'>";
    while($filas=mysqli_fetch_array($resultado))
                          {               
                             echo "<option>"; echo $filas ['apertura']; echo"</option>";                         
                          };
    echo "</select>";
?>