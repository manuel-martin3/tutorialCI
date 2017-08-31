<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo base_url();?>clogin/ingresar" method="POST">
		<table>
			<tr>
				<td><label for="">Usuario</label></td>
				<td><input type="text" name="txt_usuario"></td>
			</tr>
			<tr>
				<td><label for="">Contraseña</label></td>
				<td><input type="password" name="txt_clave"></td>
			</tr>	
			<tr>
				<td><input type="submit" value="Ingresar"></td>			
			</tr>		
		</table>
	</form>
	<?php echo $mensaje; ?>
</body>
</html>