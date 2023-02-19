<?php 
	
	session_start();

	include 'bd.php';

	$correo = $_POST['correo'];
    $contraseña = $_POST['pass'];



    $validar_login=mysqli_query($conexion,"SELECT * FROM ms_cliente WHERE email_cli='$correo' and pass_cliente='$contraseña'");
	
	
	
    if(mysqli_num_rows($validar_login)>0){
		$result= mysqli_query($conexion,"SELECT id_cliente FROM ms_cliente WHERE email_cli='$correo'");
			if($result->num_rows>0){
				while($consulta= $result->fetch_assoc()){
					$id=$consulta['id_cliente'];
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