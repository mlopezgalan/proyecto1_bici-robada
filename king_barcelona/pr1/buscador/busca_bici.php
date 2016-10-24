<html>
	<head>
		<meta charset="utf-8">
		<title>busca mi bici</title>
		<link rel="stylesheet" type="text/css" href="./search_css.css">
	</head>
	<body>
<table border width="100%" height="100%">
<?php
	//Extraemos las variables que recibimos del formulario
	extract($_POST);
	//en caso de que nos hayan introducido una fecha la convertimos la fecha en formato americano
	if($theft_date!=""){
		//echo $theft_date;
		$theft_date	=	str_replace('/', '-', $theft_date);
		$theft_date	=	date("Y/m/d",strtotime($theft_date));
		//echo " " .$theft_date;die;
	}
	//Si la bicicleta tiene un color compuesto, lo agregamos a la variable color
	if($color2!="0")
			{
				$r_color	=	$color2 . " y " . $color;
				//echo $r_color;
				$color.= " y " . $color2;
			}
	
	//Generamos una variable que nos dirá si ya hay una condición en la consulta previamente, o no.
	$condicion	=	0;
	$mysqli = new mysqli("localhost", "root", "", "projecte_1");
	//formateamos el campo fecha, para que siga el estandar americano

	if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	if($color2!="0")
	{
		$con 	=	"SELECT `anu_id`,`anu_titol`,`anu_data_anunci`,`anu_data_robatori`,`anu_descripcio_robatori`,`anu_foto`,`anu_compensacio`
		FROM `anunci`
		WHERE `anu_color`LIKE '%$color%' OR `anu_color`LIKE '%$r_color%'  ";
	}
	else
	{

		$con 	=	"SELECT `anu_id`,`anu_titol`,`anu_data_anunci`,`anu_data_robatori`,`anu_descripcio_robatori`,`anu_foto`,`anu_compensacio`
		FROM `anunci`
		WHERE `anu_color`LIKE '%$color%'";
	
	}
	
	//vamos montando la consulta conforme las variables recibidas y controlando si hemos tenido una condicion previa o no.

	//CONSULTA CON CONDICIONES

	//CONDICION TITULO
		if($title!="")
		{
			
			$con.=" AND (`anu_titol` = '$title')";
		
		}
	//END CONDICION TITULO

		//CONDICION FECHA ROBO
		if($theft_date!="")
		{
			$con.=" AND (`anu_data_robatori` = '$theft_date')";
		}
		//END CONDICION FECHA ROBO

		//CONDICION UBICACION
		if($location!="" AND $location!=0)
		{
			$con.=" AND (`anu_ubicacio_robatori` = '$location')";
		}
		//END CONDICION ROBO

		//CONDICION MARCA
		//echo $brand;die;
		if($brand!=0 OR $brand!="all")
		{
			$con.=" AND (`anu_marca` = '$brand')";
		}
		//END CONDICION MARCA

		//CONDICION COLOR
		/*if($color!="0")
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
					$con.=" AND (`anu_color` LIKE '%$color%')";
				}
			
		else
			{
				$condicion++;
				$con.=	" `anu_color`LIKE '%$color%'";
			}
		}*/
		//END CONDICION COLOR

		//Condicion modelo
		if($model!="")
		{
			$con.=" AND (`anu_model` = '$model')";
		}
		
		// END CONDICION MODELO

		//CONDICION COMPENSACION
		if($compensation!="")
			{
				$con.=" AND (`anu_compensacio` = '$compensation')";
			}
	//END CONDICION COMPENSACION
	//SI EL USUARIO,  TODAS LAS MARCAS, MODIFICAMOS LA CONSULTA, PARA EXTRAER EL WHERE DE LA VARIABLE CONSULTA
		
	//END CONTROL WHERE
	//END CONSULTA SELECCION
		//echo $condicion;
		
		//echo $con;die;
	
	$result	=	mysqli_query($mysqli,$con);
	$total  = mysqli_num_rows($result); 
  	if($total!=0)

	{
	
		while ($fila = mysqli_fetch_row($result)) 
		{
			//Formateamos las fechas al estilo europeo
			$newTheftDate	=	date("d-m-Y",strtotime($fila[3]));
			$newPublicDate	=	date("d-m-Y",strtotime($fila[2]));
			//echo $newDate;die;
	       echo "<tr>";
	      	 echo "<td colspan='4' name='title' class='s_title'><a href='ficha.php?id=".$fila[0]."'target='_blank'>$fila[1]</a></td>";
	       echo "</tr>";
	       echo "<tr>";
	     	  echo "<td class='s_ind'>Fecha de publicación</td>";
	     	  echo "<td class='s_content'>$newPublicDate</td>";
	     	  echo "<td class='s_ind'>Fecha del robo</td>";
	      	 echo "<td class='s_content'>$newTheftDate</td>";
	       echo "<tr>";
	        if(file_exists("../../bicis/".$fila[5])){
	        		 echo  "<td style='max-width: 25px;'><img src='../../bicis/"  . $fila[5]  . "' style='width: 100%;' /> </td>";
        		 
       		  }
      		   else
       		  {
      			    echo "<td style='max-width: 25px;'><img src='../../bicis/nodisponible.jpg' ' style='width: 100%;'></td>";
       		  }
       		  echo "<td colspan='3'class='s_content'>" . $fila[4] . "</td>";
       		 echo "</tr>";
			echo "<tr>";
				if(empty($fila[6])){
					echo "<td colspan='4' class='s_content'>Sin recompensa</td>";
				}
				else{
					echo "<td colspan='4' class='s_content'>Recompensa: $fila[6]€</td>";
				}
			echo "</tr>";
	    }
    }
    else
    {
    	echo "<tr><td class='not_found'>Lo siento, no hemos podido encontrar tu bicicleta :( </td></tr>";
    }

		//echo "hola <a href='../../indice.html'> Pulsa aquí para volver</a>";
   ?>
	</table>
</body>
</html>