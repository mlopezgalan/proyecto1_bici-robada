<meta charse="utf-8">
<table border width="90%">
<?php
	$mysqli = new mysqli("localhost", "root", "", "projecte_1");
	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	$con 	=	"SELECT * FROM `anunci` ";

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
     	  echo "<td style='max-width: 25px;''><img src='../../bicis/"	.	$fila[12]	. "' style='width: 100%;' />
			</td>";
			echo "<td colspan='3'> $fila[5]</td>";
		echo "<tr>";
			if(empty($fila[13])){
				echo "<td colspan='4'><center></center>Sin recompensa</td>";
			}
			else{
				echo "<td colspan='4'><center>$fila[13]</center></td>";
			}
		echo "</tr>";
    }

		echo "hola <a href='../../indice.html'> Pulsa aquí para volver</a>";
   ?>
</table>






