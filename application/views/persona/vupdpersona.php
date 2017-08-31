<!DOCTYPE html>
<html>
<head>
		<title></title>
</head>
<body>
<form action="<?php echo base_url();?>cpersona/actualizarDatos" method="POST">
	<?php echo "Usuario: ".$this->session->userdata('s_usuario');?>

	<h3>Actualizar tus Datos</h3>

	<input type="text" name="txt_nombre" placeholder="Nombre"></input><br><br>
	<input type="text" name="txt_appaterno" placeholder="Apellido Paterno"></input><br><br>
	<input type="text" name="txt_apmaterno" placeholder="Apellido Materno"></input><br><br>
	<input type="text" name="txt_email" placeholder="Correo"></input><br><br>
	<input type="submit" value="Actualizar"></input>

</form>	
<form action="<?php echo base_url();?>cpersona/eliminarPersona" method="PoST">	
	<h3>Eliminar por id</h3>
	<input type="text" name="txt_idpersona" placeholder="ID"></imput><br><br>	
	<input type="submit" value="Eliminar">
</form>
</body>
</html>