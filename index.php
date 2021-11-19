<!DOCTYPE html>
<html>
<head>
	<title>Agencia de Autos Ford</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
		<h1>Alta de empleados</h1>
		<input type="text" name="name" placeholder="Nombre completo">
		<input type="email" name="email" placeholder="Correo electrónico">
		<input type="text" name="direccion" placeholder="Dirección">
		<input type="number" name="NoControl" placeholder="No. de control">
		<input type="text" name="turno" placeholder="Turno">
		<input type="submit" name="submit">
    </form>
        <?php 
        include("Empleado.php");
        ?>
</body>
</html>