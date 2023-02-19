<?php 
	
	session_start();

	include 'bd.php';

	$correo = $_POST['correo'];
    $contraseña = $_POST['pass'];
    


    $validar_login=mysqli_query($conexion,"SELECT * FROM dt_administrador WHERE email_admin='$correo' and pass_admin='$contraseña'");

    if(mysqli_num_rows($validar_login)>0){
		$result= mysqli_query($conexion,"SELECT id_admin FROM dt_administrador WHERE email_admin='$correo'");
			if($result->num_rows>0){
				while($consulta= $result->fetch_assoc()){
					$id=$consulta['id_admin'];
					$_SESSION['correosesion_admin'] = $id;
					header("location:../logeado_admin/inicio_admin.php");
				}
			}   			 	
    	exit;
		}else{
    	echo'
    		<script>
    			alert("Administrador no existente, Favor de verificar los datos introducidos");
    			window.location= "../loginadmin.php";
    		</script>
    	';
    	exit;
    }
?>