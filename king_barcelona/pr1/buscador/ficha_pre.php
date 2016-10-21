<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<!-- saved from url=(0032)http://www.kingbarcelona.com/es/ -->
<meta charset="utf-8">
<html dir="LTR" lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title>Buscador de bicicletas</title>
  
<!-- añadimos nuestros propios estilos -->
  <link rel="stylesheet" type="text/css" href="./search_css.css">
<!-- EOF: Generated Meta Tags -->


<link rel="shortcut icon" href="http://www.kingbarcelona.com/favicon.ico" type="image/x-icon">
<link rel="icon" href="http://www.kingbarcelona.com/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="../../kingbarcelona_files/tableft_ie.css"><meta name="author" content="Ferran Espel">
<meta name="robots" content="index, follow">
<!--<base href="http://www.kingbarcelona.com/">--><base href=".">
<link rel="stylesheet" type="text/css" href="../../kingbarcelona_files/stylesheet.css">
<link rel="stylesheet" type="text/css" href="../../kingbarcelona_files/stylesheet_10_12.css">
<link href="../../kingbarcelona_files/css" rel="stylesheet" type="text/css">
<!-- Start WOWSlider.com HEAD section -->
  <link rel="stylesheet" type="text/css" href="../../kingbarcelona_files/style.css">
  <link rel="stylesheet" type="text/css" href="../../kingbarcelona_files/cookie_style.css">
<!-- End WOWSlider.com HEAD section -->
   
    </head>
<body>


<!-- header //-->


<table border="0" width="1060px" cellspacing="0" cellpadding="0" align="center">
	<tbody><tr>
  		<td align="center">
			<table align="center" border="0" width="1060" cellspacing="0" cellpadding="0">
            <tbody><tr bgcolor="white">
              <td colspan="2">
                <div class="container_head">
                  <div style="float: left; width:340px;"><a href="http://www.kingbarcelona.com/es/index.php"><img src="../../kingbarcelona_files/king-barcelona.png" alt="Tienda ciclismo. Componentes Shimano y Campagnolo. Más de 2000 productos."></a></div>
                  <div style="float: left; width: 510px;margin-top:5px;">
                  <img src="../../kingbarcelona_files/telefono-compras_zdsx.gif" border="0" alt="Teléfono de compras telefónicas kingbarcelona.com" title="Teléfono de compras telefónicas kingbarcelona.com">
                  </div>
                  <div style="float: left; width:155px;margin-top:5px;margin-left:0px;"><a href="http://kingbarcelona.zendesk.com/account/dropboxes/20279223" class="large button_head green" onclick="script: Zenbox.show(); return false;">Soporte Online</a>
                  </div>
                  <div style="float: left; width: 510px;margin-top:0px;">
                    <form name="quick_find" action="http://www.kingbarcelona.com/advanced_search_result.php" method="get" class="form-wrapper cf"><input type="text" name="keywords" onfocus="if(this.value == &#39;El buscador de millones de ciclistas...&#39;) { this.value = &#39;&#39;; }" placeholder="El buscador de millones de ciclistas..."><input type="hidden" name="osCsid" value="4a61a7ff2100ac53bfb4ea24490a533f"><button type="submit"></button>                    </form>
                  </div>
                  <div style="float: left; width:155px;margin-top:0px;margin-left:0px;">
                    <a href="https://www.kingbarcelona.com/account.php" class="large button_head blue icon_guy"><span>Tu Cuenta</span></a>                  </div>
                  <div style="float: left; width:670px;margin-top:0px;margin-left:0px;">
                    <ul class="header_language_menu">
                      <li class="first_li">
                        <span class="3flags"><a href="http://www.kingbarcelona.com/en/"><img src="../../kingbarcelona_files/button_icon_english_flag.gif" border="0" alt="Select english language" title="Select english language"></a>
                        <a href="http://www.kingbarcelona.com/es/index.php"><img src="../../kingbarcelona_files/button_icon_spanish_flag.gif" border="0" alt="Seleciona idioma español" title="Seleciona idioma español"></a>
                        <a href="http://www.kingbarcelona.com/fr/"><img src="../../kingbarcelona_files/button_icon_french_flag2.gif" border="0" alt="Choisir la langue française" title="Choisir la langue française"></a></span>
                      </li>
                        <li><span class="menu_new_account"><a href="https://www.kingbarcelona.com/nuevo_cliente.php">Crear Cuenta</a></span></li><li><span class="menu_checkout"><a href="https://www.kingbarcelona.com/fcheckout_shipping.php">Realizar Pedido</a></span></li><li><span class="menu_cart clean_border"><a href="http://www.kingbarcelona.com/shopping_cart.php">Ver Cesta</a></span></li>                    </ul>
                  </div>
                </div>
              </td>
            </tr>
      			<tr>
              <td height="30" colspan="2" bgcolor="#ffffff" style="font-family:Helvetica, Arial, Verdana; font-weight:lighter; font-size:17px; color:#000000; padding-left:10px;"><a href="http://www.kingbarcelona.com/" class="headerNavigation">Inicio</a> - <a href="http://www.kingbarcelona.com/es/index.php" class="headerNavigation">Catálogo</a></td>
            </tr>

    		</tbody>
        </table>
        <a href="http://kingbarcelona.zendesk.com/account/dropboxes/20279223" target="_new" id="fdbk_tab_support_espanol" class="fdbk_tab_right" style="background-color: #77b91d;">Soporte</a>
<a id="fdbk_tab_about_espanol" class="fdbk_tab_right" style="background-color: #005e85;" href="http://www.kingbarcelona.com/es/acerca_de.php">Acerca de</a>
<a href="http://kingbarcelona.zendesk.com/account/dropboxes/20279223" target="_new"  id="fdbk_tab_support_espanol" class="fdbk_tab_right" style="background-color: #77b91d;">Soporte</a>
<!-- montamos codigo php-->
  <table border width="100%">

  <?php
  
    //Conectamos a la base de datos
    $mysqli = new mysqli("localhost", "root", "", "projecte_1");
    if ($mysqli->connect_errno) {
     echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    $con  = "SELECT * FROM `anunci` WHERE `anu_id`=".$_GET['id']."";
    $result = mysqli_query($mysqli,$con);
    //echo $con;die;
 
    while ($fila = mysqli_fetch_row($result)) 
    {
         echo "<tr>";
           echo "<td colspan='4' name='title' class='s_title'>$fila[1]</td>";
         echo "</tr>";
         echo "<tr>";
          echo "<td class='s_ind'>Fecha de publicación</td>";
          echo "<td s_content'>$fila[2]</td>";
          echo "<td class='s_ind'>Fecha del robo</td>";
           echo "<td s_content'>$fila[3]</td>";
         echo "<tr>";
       if(file_exists("../../bicis/".$fila[12])){
               echo  "<td style='max-width: 25px;'><img src='../../bicis/"  . $fila[12]  . "' style='width: 100%;' /> </td>";
             
            }
             else
            {
                echo "<td style='max-width: 25px;'><img src='../../bicis/nodisponible.jpg' ' style='width: 100%;'></td>";
            }
          //echo "<td style='max-width: 25px;'><img src='../../bicis/"  . $fila[5]  . "' style='width: 100%;' />
        //</td>";
        echo "<td colspan='3'>  $fila[5]</td>";
      echo "<tr>";
          echo "<td class='s_content'>Marca: $fila[6]</td>";
           echo "<td class='s_content'>Modelo: $fila[7]</td>";
            echo "<td class='s_content'>color: $fila[8]</td>";
             echo "<td class='s_content'>Antiguedad: $fila[9] años</td>";
      echo "</tr>";
      echo "<tr>";
        echo "<td colspan='4' class='s_content'> $fila[10]</td>";
      echo "</tr>";
      echo "<tr>";
        if(empty($fila[11]))
        {
          echo "<td > Sin número de serie </td>";
        }
        else
        {
          echo "<td > Número de série: $fila[11] </td>";
        }
        echo "<td colspan='2'> Ubicación: $fila[4]</td>";
        echo "<td colspan='3'> Color: $fila[8]</td>";
      echo "</tr>";
      }
  
  ?>
</table>



</body>
</html>
