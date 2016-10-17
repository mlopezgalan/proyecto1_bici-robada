
<!DOCTYPE html>
<meta charset="utf-8">
<html>
<head>
	<title>Encuentra mi bici!</title>
	<link rel="stylesheet" type="text/css" href="../../kingbarcelona_files/style.css">
</head>
<body>

	<form action="busca_bici.php">
		<table class="login_box" border>
			<tr>
				<td>
					Titulo:
				</td>
				<td>
					<input type="textbox" name="title">
				</td>
			</tr>
			<tr>
				<td>
					Fecha:
				</td>
				<td>
					<input type="date" name="theft_date">
				</td>
			</tr>
		</table>
	</form>
	<?php
	$mysqli = new mysqli("localhost", "root", "", "projecte_1");
	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	$con 	=	"SELECT * FROM `anunci` ";
	$result	=	mysqli_query($mysqli,$con);
	/*$rows	=	mysqli_fetch_array($result);
	foreach ($rows as $key => $value) {
		echo $value . "<br/>";
	}*/
	while ($fila = mysqli_fetch_row($result)) {
        echo "id: "	.  $fila[0] . " titulo: " . $fila[1] . "<br/>";
    }

		//echo "hola <a href='../../indice.html'> Pulsa aquí para volver</a>";
	?>

</body>
</html>






