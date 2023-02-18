<?php 
	
	session_start();

	include 'bd.php';

	$correo = $_POST['correo'];
    $contraseña = $_POST['pass'];



    $validar_login=mysqli_query($conexion,"SELECT * FROM clientes WHERE EMAIL_CLI='$correo' and PASS_CLIENTE='$contraseña'");
	
	
	
    if(mysqli_num_rows($validar_login)>0){
		$result= mysqli_query($conexion,"SELECT ID_CLIENTE FROM clientes WHERE EMAIL_CLI='$correo'");
			if($result->num_rows>0){
				while($consulta= $result->fetch_assoc()){
					$id=$consulta['ID_CLIENTE'];
					$_SESSION['correosesion'] = $id;
					header("location:../logeado_cliente/inicio_cliente.php");
				}
			}   			 	
    	exit;
    }else{
    	echo'
    		<script>
    			alert("Usuario no existe, Favor de verificar los datos introducidos");
    			window.location= "../logincliente.php";
    		</script>
    	';
    	exit;
    }
?>