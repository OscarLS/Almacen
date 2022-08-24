<!DOCTYPE html>
<html>
	<head> <!-- Cabeza de la página -->
		<title>ALMACEN</title>
		<link rel="stylesheet" href="estilos/styleLogin.css">  <!-- Link del estilo de la página -->
		<link rel="shortcut icon" href="Img/Almacen.png"> <!-- Icono de la página -->
		<meta charset="utf-8"> <!-- Caracter especial -->
	</head>
	<body>
		<div class="contenedor">
			<div class="login">
				<div class="IS">
					<h2>INICIAR SESIÓN</h2>
					<form action="Validar.php" method="post">
						<label>
							USUARIO
						</label>
						<input type="text" name="usuario" autocomplete="off">
						<br>
						<label>
							CONTRASEÑA
						</label>
						<input type="password" name="clave">
						<br><br>
						<input type="submit"  class="enviar" name="entrar" value="INGRESAR AL SISTEMA">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>