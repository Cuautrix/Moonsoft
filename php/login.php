<?php 
	
	session_start();

	include 'bd.php';
	$rol=$_POST['rol'];
	$correo = $_POST['correo'];
    $contraseña = $_POST['pass'];

	if($rol == 'Cliente'){
	
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
					alert("Usuario no existente, Favor de verificar los datos introducidos");
					window.location= "../login.php";
				</script>
			';
			exit;
		}
	}
	if($rol == 'Administrador'){
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
					window.location= "../login.php";
				</script>
			';
			exit;
		}
	}
if($rol == 'Mecanico'){
	$validar_login=mysqli_query($conexion,"SELECT * FROM dt_mecanico WHERE email_mec='$correo' and pass_mec='$contraseña'");
	
	
	
    if(mysqli_num_rows($validar_login)>0){
		$result= mysqli_query($conexion,"SELECT id_mec FROM dt_mecanico WHERE email_mec='$correo'");
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
    			window.location= "../login.php";
    		</script>
    	';
    	exit;
    }
}
else{
    	echo'
    		<script>
    			alert("Usuario no existe, Favor de verificar los datos introducidos");
    			window.location= "../login.php";
    		</script>
    	';
    	exit;
    }
	//window.location= "../logincliente.php";
?>