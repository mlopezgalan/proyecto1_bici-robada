
<!-- saved from url=(0032)http://www.kingbarcelona.com/es/ -->
<meta charset="utf-8">
<html dir="LTR" lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title>Buscador de bicicletas</title>
  

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
    <script>
    //Funcion para validar  el formulario 
    function validar()
    {
      
      var error="";
      
      if(document.getElementById("theft_date").value!="")
      {
        var m = document.getElementById("theft_date").value;
        //alert(m);
        var rgexp = /^([0][1-9]|[12][0-9]|3[01])(\/|-)([0][1-9]|[1][0-2])\2(\d{4})$/;

        if(rgexp.test(m)==false)
        {
           error+="Error, el formato de la fecha no es correcto \n"
        }
       
      }
      if(document.getElementById("brand").value==0)
      {
        error+="Error, la marca es obligatoria \n";
        document.getElementById("brand").style.borderColor="red";
      }
      if(document.getElementById("color").value==0)
      {
        error+="Error, el color es obligatorio \n";
        document.getElementById("color").style.borderColor="red";
      }
      if(error!="")
      {
        alert(error);
        return false;
      }
      else{
        return true;
      }
    }
    //END VALIDAR()

    //Funcion para la caja otro color.
    function habilitar(){
        // Comprobamos que hemos puesto un color previamente
        if(document.getElementById('color').value=="0")
        {

          alert("Debes seleccionar un color antes!");
          document.getElementById('other').checked = 0;
        }
        //Comprobamos que hemos chequeado el textbox
        else if( document.getElementById('other').checked)
        {
          
            document.getElementById("color2").style.display = "block";
        }
        //Lo ocultamos, por si el usuario desechequea el textbox
        else
        {
          document.getElementById("color2").value=0;
          document.getElementById("color2").style.display = "none";
        }
        
      }
    </script>
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

    		</tbody></table>
        <a href="http://kingbarcelona.zendesk.com/account/dropboxes/20279223" target="_new" id="fdbk_tab_support_espanol" class="fdbk_tab_right" style="background-color: #77b91d;">Soporte</a>
<a id="fdbk_tab_about_espanol" class="fdbk_tab_right" style="background-color: #005e85;" href="http://www.kingbarcelona.com/es/acerca_de.php">Acerca de</a>
<a href="http://kingbarcelona.zendesk.com/account/dropboxes/20279223" target="_new"  id="fdbk_tab_support_espanol" class="fdbk_tab_right" style="background-color: #77b91d;">Soporte</a>
<!-- header_eof //-->
<!-- body //-->
<table border="1" width="100%" cellspacing="0" cellpadding="3" bgcolor="#ffffff">
  <tbody>
    <tr>
      <td width="25%" valign="top"><table border="1" width="220" cellspacing="0" cellpadding="2">
        <tbody>
          <tr>
            <td class="infoBox_left">
              <div class="urbangreymenu">
              <h1 class="headerbar">Buscador de bicis</h1>
                 <!--FORMULARIO DE BUSQUEDA-->

                    <form name="search" onsubmit="return validar();"  action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                        <ul>
                          <li>
                            Titulo:
                          </li>
                          <li>
                            <input type="textbox" name="title" id="title">
                          </li>
                        </ul>
                        <ul>
                          <li>
                            Fecha del robatorio:
                            <input type="textbox" name="theft_date" id="theft_date">
                          </li>
                        </ul>
                        <ul>
                          <li>
                            Ubicación:
                                <select name="location">
                                <option value='0'>(Seleccionar)</option>
                                <option value='alava'>Álava</option>
                                <option value='albacete'>Albacete</option>
                                <option value='alicante'>Alicante</option>
                                <option value='almeria'>Almería</option>
                                <option value='asturias'>Asturias</option>
                                <option value='avila'>Ávila</option>
                                <option value='badajoz'>Badajoz</option>
                                <option value='barcelona'>Barcelona</option>
                                <option value='burgos'>Burgos</option>
                                <option value='caceres'>Cáceres</option>
                                <option value='cadiz'>Cádiz</option>
                                <option value='cantabria'>Cantabria</option>
                                <option value='castellon'>Castellón</option>
                                <option value='ceuta'>Ceuta</option>
                                <option value='ciudad-real'>Ciudad Real</option>
                                <option value='Cordoba'>Córdoba</option>
                                <option value='Cuenca'>Cuenca</option>
                                <option value='Girona'>Girona</option>
                                <option value='las_palmas'>Las Palmas</option>
                                <option value='Granada'>Granada</option>
                                <option value='Guadalajara'>Guadalajara</option>
                                <option value='Guipuzcoa'>Guipúzcoa</option>
                                <option value='Huelva'>Huelva</option>
                                <option value='Huesca'>Huesca</option>
                                <option value='Balears'>Illes Balears</option>
                                <option value='Jaen'>Jaén</option>
                                <option value='Coruna'>A Coruña</option>
                                <option value='Rioja'>La Rioja</option>
                                <option value='Leon'>León</option>
                                <option value='Lleida'>Lleida</option>
                                <option value='Lugo'>Lugo</option>
                                <option value='Madrid'>Madrid</option>
                                <option value='Malaga'>Málaga</option>
                                <option value='Melilla'>Melilla</option>
                                <option value='Murcia'>Murcia</option>
                                <option value='Navarra'>Navarra</option>
                                <option value='Ourense'>Ourense</option>
                                <option value='Palencia'>Palencia</option>
                                <option value='Pontevedra'>Pontevedra</option>
                                <option value='Salamanca'>Salamanca</option>
                                <option value='Segovia'>Segovia</option>
                                <option value='Sevilla'>Sevilla</option>
                                <option value='Soria'>Soria</option>
                                <option value='Tarragona'>Tarragona</option>
                                <option value='santa-cruz-tenerife'>Santa Cruz de Tenerife</option>
                                <option value='Teruel'>Teruel</option>
                                <option value='Toledo'>Toledo</option>
                                <option value='Valencia'>Valéncia</option>
                                <option value='Valladolid'>Valladolid</option>
                                <option value='Vizcaya'>Vizcaya</option>
                                <option value='Zamora'>Zamora</option>
                                <option value='Zaragoza'>Zaragoza</option>
                              <option value='all'>Todas</option>
                              </select>
                          </li>
                        </ul>
                        <ul>
                          <li>
                            Marca:
                          </li>
                          <li>
                            <select name="brand" id="brand">
                                <option value='0' selected>(Seleccionar)</option>
                                <option value='Shimano'>Shimano</option>
                                <option value='Bianchi'>Bianchi</option>
                                <option value='Peugeot'>Peugeot</option>
                                <option value='Fixie'>Fixie</option>
                                <option value='Etnnic'>Etnnic</option>
                                <option value='Orbea'>Orbea</option>
                                <option value='Torrot'>Torrot</option>
                                <option value='Babboe'>Babboe</option>
                                <option value='Cyclostatic'>Cyclostatic</option>
                                <option value='Evil'>Evil</option>
                                <option value='Decathlon'>Decathlon</option>
                                <option value='Bicing'>Bicing</option>
                                <option value='BH'>BH</option>
                                <option value='otras'>Otras</option>
                                <option value='all'>Todas</option>
                            </select>
                          </li>
                        </ul>
                        <ul>
                          <li>
                            Modelo:
                            <input type="text" name="model" id="model">
                          </li>
                        </ul>
                        <ul>
                          <li>
                            Color:
                          </li>
                          <li>
                            <select name="color" id="color">
                              <option value="0" selected> Selecione un color</option>
                              <option value="blanca"> Blanco</option>
                              <option value="negra"> Negro</option>
                              <option value="rojo">Rojo</option>  
                              <option value="azul"> Azul</option>
                              <option value="verde"> Verde</option>
                              <option value="amarilla"> Amarillo</option>
                              <option value="naranja"> Naranja</option>
                              <option value="otro"> Otro</option>
                          </select>
                          </li>
                          </ul>
                          <ul>
                            <li>
                              <input type="checkbox" name="other" id="other" onclick="habilitar();">¿Otro color?
                              <select name="color2" id="color2" style="display: none;">
                                  <option value="0" selected> Selecione un color</option>
                                  <option value="blanca"> Blanco</option>
                                  <option value="negra"> Negro</option>
                                  <option value="roja">Rojo</option>  
                                  <option value="azul"> Azul</option>
                                  <option value="verde"> Verde</option>
                                  <option value="amarilla"> Amarillo</option>
                                  <option value="naranja"> Naranja</option>
                                  
                    
                              </select>
                            </li>
                        </ul>
                        <ul>
                          <li>Compensación
                          
                            <input type="textbox" name="compensation" id="compensation">
                          </li>
                        </ul>
                        <ul>
                          <li>
                          <input type="submit" name="submit" value="Encuentrala"></li>
                      
                    </form>
                    <!--END FORMULARIO BUSQUEDA-->
              </div>
            </td>
          </tr>
        </td>
      </tbody>
      </tr>
    </tbody>
  </table>
  <td width="75%" valign="top">
  <table align="right" valign="top" border="1" width="100%" cellspacing="0" cellpadding="5" class="infoBoxContent">
    <tbody>
      <tr>
        
        <?php
        if(isset($_POST['submit']))
        {
          unset($_POST['submit']);
          include("busca_bici.php");
         }
        ?>
      </tr>
    </tbody>
  </table>
</td>
</form>
</tbody>
</table>

<!-- footer //-->
</td></tr><tr><td colspan="3">
<center>
    <table border="0" width="1060px" cellspacing="0" cellpadding="1">
    <tbody><tr class="footer">
     <td class="footer">lunes 17 octubre, 2016</td>
     <td align="right" class="footer">&nbsp;&nbsp;278.934.827 peticiones desde jueves 01 junio, 2006&nbsp;&nbsp;</td>
    </tr>
    <tr><td class="subBar" align="center" colspan="2"><a href="https://www.confianzaonline.es/empresas/kingbarcelona.htm" target="_blank"><img src="../../kingbarcelona_files/sellomedianoanimado.gif" border="0" alt="Entidad adherida a Confianza Online"></a></td></tr>
    <tr><td class="subBar" align="center" colspan="2">King Barcelona S.L. - CIF B65238628 - Registro mercantil 163252/105430 | c/ Pau Muñoz i Castanyer 16 Local 4, 08174 Sant Cugat del Vallés (España)</td></tr>
  </tbody>
  </table>
  </center>

<div align="center">
<a href="http://validator.w3.org/check?uri=referer" target="_new"><img src="../../kingbarcelona_files/valid-html401-blue" alt="Valid HTML 4.01 Transitional" height="31" width="88" border="0"></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer" target="_new"><img style="border:0;width:88px;height:31px" src="../../kingbarcelona_files/vcss-blue" alt="�CSS V�lido!"></a>
</div>

 </td></tr>
</tbody></table>
</body></html>
