<html>
	<head>
		<meta charset="utf-8">
		<title>busca mi bici</title>
	</head>
	<body>
<table border width="90%">
<?php
	//Extraemos las variables que recibimos del formulario
	extract($_POST);
	//echo $color2;die;
	//Generamos una variable que nos dirá si ya hay una condición en la consulta previamente, o no.
	$condicion	=	0;
	$mysqli = new mysqli("localhost", "root", "", "projecte_1");
	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	$con 	=	"SELECT `anu_id`,`anu_titol`,`anu_data_anunci`,`anu_data_robatori`,`anu_descripcio_robatori`,`anu_foto`,`anu_compensacio`
		FROM `anunci`
		WHERE";
	//vamos montando la consulta conforme las variables recibidas y controlando si hemos tenido una condicion previa o no.

	//CONSULTA CON CONDICIONES

	//CONDICION TITULO
		if($title!="")
		{
			if($condicion>0){
				$con.=" AND (`anu_titol` = '$title')";
			}
			else{
				$condicion++;
				$con.=	" `anu_titol` = '$title'";
			}
		
	}
	//END CONDICION TITULO

		//CONDICION FECHA ROBO
		if($theft_date!="")
		{
			if($condicion>0){
				$con.=" AND (`anu_data_robatori` = '$theft_date')";
			}
			else
			{
				$condicion++;
				$con.=	"`anu_data_robatori` = '$theft_date'";
			}
		}
		//END CONDICION FECHA ROBO

		//CONDICION ROBO
		if($location!="")
		{
			if($condicion>0)
			{
				$con.=" AND (`anu_ubicacio_robatori` = '$location')";
			}
			else
			{
				$condicion++;
				$con.=	"`anu_ubicacio_robatori` = '$location'";
			}
		}
		//END CONDICION ROBO

		//CONDICION MARCA
		//echo $brand;die;
		if($brand!="")
		{
				if($condicion>0)
				{
					$con.=" AND (`anu_marca` = '$brand')";
				}
				else
				{
					$condicion++;
					$con.=	" `anu_marca` = '$brand'";
				}
		}
		//END CONDICION MARCA

		//CONDICION COLOR
		if($color!="0")
		{	
			//CONDICION COLOR2
			//Si el color 2 esta definido, lo sumamos a la variable color
			if($color2!="0")
			{
				$color.= " y " . $color2;
			}
			//CONDICION COLOR2

				if($condicion>0)
				{
					$con.=" AND (`anu_color` = '$color')";
				}
			
		else
			{
				$condicion++;
				$con.=	" `anu_color` = '$color'";
			}
		}
		//END CONDICION COLOR

		//Condicion modelo
		if($model!="")
			{
				if($condicion>0){
					$con.=" AND (`anu_model` = '$model')";
			}
		else
			{
				$condicion++;
				$con.=	" `anu_model` = '$model'";
			}
		}
		// END CONDICION MODELO

		//CONDICION COMPENSACION
		if($compensation!="")
			{
				if($condicion>0)
				{
					$con.=" AND (`anu_compensacio` = '$compensation')";
				}
		else
			{
				$condicion++;
				$con.=	"`anu_compensacio` = '$compensation'";
			}
		}
	//END CONDICION COMPENSACION
	//SI EL USUARIO, HA PUESTO TODOS LOS COLORES Y TODAS LAS MARCAS, MODIFICAMOS LA CONSULTA, PARA EXTRAER EL WHERE DE LA VARIABLE CONSULTA
		if($condicion ==	0)
		{
			$con 	=	"SELECT `anu_id`,`anu_titol`,`anu_data_anunci`,`anu_data_robatori`,`anu_descripcio_robatori`,`anu_foto`,`anu_compensacio`
		FROM `anunci`";
		}
	//END CONTROL WHERE
	//END CONSULTA SELECCION
		//echo $condicion;
		
		//echo $con;die;
	
	$result	=	mysqli_query($mysqli,$con);
	//echo $result;die;
	while ($fila = mysqli_fetch_row($result)) 
	{
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