<html>
	<head>
		<meta charset="utf-8">
		<title>busca mi bici</title>
	</head>
	<body>
<table border width="90%">
<?php
	extract($_POST)
	
	$mysqli = new mysqli("localhost", "root", "", "projecte_1");
	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	$con 	=	"SELECT `anu_id`,`anu_titol`,`anu_data_anunci`,`anu_data_robatori`,`anu_descripcio_robatori`,`anu_foto`,`anu_compensacio`
		FROM `anunci` WHERE 1";
	//	echo $con;die;
	$result	=	mysqli_query($mysqli,$con);

	while ($fila = mysqli_fetch_row($result)) {
       echo "<tr>";
      	 echo "<td colspan='4' name='title'><a href='ficha.php?id=".$fila[0]."'target='_blank'>$fila[1]</a></td>";
       echo "</tr>";
       echo "<tr>";
     	  echo "<td>Fecha de publicación</td>";
     	  echo "<td>$fila[2]</td>";
     	  echo "<td>Fecha del robo</td>";
      	 echo "<td>$fila[3]</td>";
       echo "<tr>";
     	  echo "<td style='max-width: 25px;'><img src='../../bicis/"	.	$fila[5]	. "' style='width: 100%;' />
			</td>";
			echo "<td colspan='3'> $fila[4]</td>";
		echo "<tr>";
			if(empty($fila[6])){
				echo "<td colspan='4'><center>Sin recompensa</center></td>";
			}
			else{
				echo "<td colspan='4'><center>Recomensa: $fila[6]€</center></td>";
			}
		echo "</tr>";
    }

		//echo "hola <a href='../../indice.html'> Pulsa aquí para volver</a>";
   ?>
	</table>
</body>
</html>





