<?php 
	
	session_start();

	include 'bd.php';

	$correo = $_POST['correo'];
    $contraseña = $_POST['pass'];



    $validar_login=mysqli_query($conexion,"SELECT * FROM mecanico WHERE email_mec='$correo' and pass_mec='$contraseña'");
	
	
	
    if(mysqli_num_rows($validar_login)>0){
		$result= mysqli_query($conexion,"SELECT id_mec FROM mecanico WHERE email_mec='$correo'");
			if($result->num_rows>0){
				while($consulta= $result->fetch_assoc()){
					$id=$consulta['id_mec'];
					$_SESSION['id_session_mec'] = $id;
					header("location:../logeado_mecanico/inicio_mecanico.php");
				}
			}   			 	
    	exit;
    }else{
    	echo'
    		<script>
    			alert("Mecanico no existente, Favor de verificar los datos introducidos");
    			window.location= "../loginmecanico.php";
    		</script>
    	';
    	exit;
    }
?>