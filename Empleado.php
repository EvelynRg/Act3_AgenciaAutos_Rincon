<?php
	include("con_db.php");
	
	if (isset($_POST['submit'])) {
		if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['direccion']) >= 1 &&
		strlen($_POST['NoControl']) >= 1 && strlen($_POST['turno']) >= 1) {
			$nombre = trim($_POST['name']);
			$email = trim($_POST['email']);
			$direccion = trim($_POST['direccion']);
			$NoControl = trim($_POST['NoControl']);
			$turno = trim($_POST['turno']);
			$consulta = "INSERT INTO empelados(Nombre, Correo, Direccion, NoDeControl, Turno) VALUES ('$nombre','$email','$direccion','$NoControl','$turno')";
			$resultado = mysqli_query($conex, $consulta);
			if ($resultado) {
			?>
				<h3 class="ok">¡Te has inscripto correctamente!</h3>
			<?php
			} else {
			?>
				<h3 class="bad">¡Ups ha ocurrido un error!</h3>
			<?php
			}
		} else {
		?>
			<h3 class="bad">¡Por favor complete los campos!</h3>
		<?php
		}
	}
?>