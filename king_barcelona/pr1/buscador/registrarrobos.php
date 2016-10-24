<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<meta charset="utf-8">
<html dir="LTR" lang="es"><head>
  <title>Tienda ciclismo y MTB. Comprar bicicletas. Componentes Shimano y Sram</title>
  <meta name="Description" content="Componentes shimano, campagnolo y otras marcas de competición. Bicicletas para niños. Primeras marcas: ktm, trek, ditec, massi.">
  <meta name="Keywords" content="shimano, mountain bike, bici, bicis, deore, ciclismo, bicicletas, trek, klein, ktm, campagnolo, jamis usa, gary fisher, abarth, ruedas, horquillas, frenos disco, cambios, desviadores, bujes, spinning, ciclismo, financiación, suspensiones, amortiguadores.">
 <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<!-- EOF: Generated Meta Tags -->



<link rel="shortcut icon" href="https://www.kingbarcelona.com/favicon.ico" type="image/x-icon">
<link rel="icon" href="https://www.kingbarcelona.com/favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="Insercionmotos_files/tableft_ie.css">

<meta name="author" content="Ferran Espel">
<meta name="robots" content="noindex, nofollow">
<!--base href="https://www.kingbarcelona.com/"-->
<link rel="stylesheet" type="text/css" href="Insercionmotos_files/stylesheet.css">
<!--script  src="jquery.js" type="text/javascript"></script -->
<script async="" src="Insercionmotos_files/analytics.js"></script><script src="Insercionmotos_files/jquery-1.js" type="text/javascript"></script>



<script type="text/javascript" src="Insercionmotos_files/jquery_008.js"></script>
<script type="text/javascript" src="Insercionmotos_files/jquery_002.js"></script>
<script type="text/javascript" src="Insercionmotos_files/thickbox-compressed.js"></script>
<script type="text/javascript" src="Insercionmotos_files/jquery_004.js"></script>
<script type="text/javascript" src="Insercionmotos_files/localdata.js"></script>



	<script type="text/javascript" src="Insercionmotos_files/jquery.js"></script>
	<script type="text/javascript" src="Insercionmotos_files/jquery_007.js"></script>
	<script type="text/javascript" src="Insercionmotos_files/jquery_009.js"></script>
	<script type="text/javascript" src="Insercionmotos_files/jquery_006.js"></script>
	<script type="text/javascript" src="Insercionmotos_files/jquery_003.js"></script>


<link rel="stylesheet" type="text/css" href="Insercionmotos_files/jquery_002.css">



<script type="text/javascript">
 $().ready(function() {
function log(event, data, formatted) {
		$("<li>").html( !data ? "No match!" : "Selected: " + data).appendTo("#result");
	}
  	$(":text, textarea").result(log).next().click(function() {
		$(this).prev().search();
	});

});

</script>

<script language="javascript"><!--
function rowOverEffect(object) {
  document.create_account.elements[object].parentNode.parentNode.className = 'moduleRowOver';
}

function rowOutEffect(object) {
  if (document.create_account.elements[object].checked) {
    document.create_account.elements[object].parentNode.parentNode.className = 'moduleRowSelected';
  } else {
    document.create_account.elements[object].parentNode.parentNode.className = 'moduleRow';
  }
}

function checkboxRowEffect(object) {
  document.create_account.elements[object].checked = !document.create_account.elements[object].checked;
  if(document.create_account.elements[object].checked) {
    document.create_account.elements[object].parentNode.parentNode.className = 'moduleRowSelected';
  } else {
    document.create_account.elements[object].parentNode.parentNode.className = 'moduleRowOver';
  }
}

function check_form_wrapper(formname) {
  if (check_form(formname)) {
    if (formname.elements['agree'].checked) {
      return true;
    } else {
      alert('Por favor lee y confirma nuestras condiciones de uso.');
      submitted = false;
      return false;
    }
  } else {
    formname.elements['agree'].checked = false;
    return false;
  }
}
var win = null;

function NewWindow(mypage,myname,w,h,scroll){
LeftPosition = (screen.width) ? (screen.width-w)/2 : 0;
TopPosition = (screen.height) ? (screen.height-h)/2 : 0;
settings = 'height='+h+',width='+w+',top='+TopPosition+',left='+LeftPosition+',scrollbars='+scroll+',resizable';
win = window.open(mypage,myname,settings);
}
--></script>


<script src="Insercionmotos_files/jquery_005.js" type="text/javascript"></script>

<script type="text/javascript">
	// extend the current rules with new groovy ones


	// this one requires the value to be the same as the first parameter
	$.validator.methods.equal = function(value, element, param) {
		return value == param;
	};

	$().ready(function() {
		var validator = $("#texttests").bind("invalid-form.validate", function() {

			$("#summary").html("Your form contains " + validator.numberOfInvalids() + " errors, see details below.");
		}).validate({

			debug: false,
			errorElement: "em",
			errorContainer: $("#warning, #summary"),
			errorPlacement: function(error, element) {

	      error.insertAfter(element);

			element.parent("td").next("td").removeClass().addClass('messagessssss');
			element.parent("td").next("td").text("");



		  	error.appendTo( element.parent("td").parent("td") );
			},

			success: function(label) {

				label.parent("td").next("td").removeClass().addClass("goooooood");
				label.parent("td").next("td").next("td").removeClass().addClass("goooooood");




				//label.parent("div").removeClass().addClass("goooooood");

				label.parent("td").next("td").text("");

				label.text("");
			},
			rules: {
				email_address: {
     				required: true,
      				email: true
    			},
				password: {
					required:true,
					minlength:5

				},
				firstname: {
					required:true,
					minlength:3

				},
				lastname: {
					required:true,
					minlength:3

				},
				telephone: {
					required:true,
					minlength:8

				},
				street_address: {
					required:true,
					minlength:6

				},
				postcode: {
					required:true,
					minlength:3

				},
				city: {
					required:true,
					minlength:2

				},
				state: {
					required:true,
					minlength:1

				},
				country: {
					required:true,
					minlength:1

				},
				combobox: {
					required:true,
					minlength: 8

				},

				agree: {
					required: true,
      				minlength: 1

					},

				math: {
					equal: 11
				}
			}
		});

	});




</script>

<style>

button{ border:0; background-color:#f3f6ea; cursor:pointer;}
.messagessssss{background:url("images/unchecked.gif") no-repeat 0px 0px;
  padding-left: 16px;}
.goooooood{background:url("images/checked.gif") no-repeat 0px 0px;
  padding-left: 16px;}
em.error {
  background: no-repeat 0px 0px;
  padding-left: 0px;font-family:Helvetica; font-size:15px; vertical-align:bottom;
  color:#ff0000;
}
.space_v{ height:20px;}
.newfield{float: left;height: 32px;margin: 0;width: 374px;line-height: 1.3em;padding: 4px 3px 3px; vertical-align:top;}
.newfield{color:#cfdfe2;font-family:Helvetica;font-size:20px;line-height: 1.3em;padding: 4px 3px 3px;}
.newfield2{float: left;height: 32px;margin: 0;width: 374px;}
.newfield2{color:#cfdfe2;font-family:Helvetica;font-size:20px;line-height: 1.3em;padding: 4px 3px 3px;color:#000;}

.checkbox_rules{width: 100px; margin-left:-110px; float:left;}


@font-face {
    font-family: 'BlackRoseRegular';
    src: url('fonts/blackr-webfont.eot');
    src: url('fonts/blackr-webfont.eot?#iefix') format('embedded-opentype'),
         url('blackr-webfont.woff') format('woff'),
         url('fonts/blackr-webfont.ttf') format('truetype'),
         url('fonts/blackr-webfont.svg#BlackRoseRegular') format('svg');
    font-weight: normal;
    font-style: normal;
}


.main_table {
width: 824px;
height: 800px;
margin-left: auto;
margin-right: auto;
table-layout: fixed;
}
	.left_main{ width:186px; background-image:url(images/bg_left_main.png); background-repeat:repeat-y;}
	.center_main{ width:650px;height:80px; background-color:#000;font-family: Helvetica; font-size:35px; color:#ff5e00; text-align:center; line-height:45px; margin-top:0px;  font-weight:lighter;}

	.center_main strong{ font-size:65px; font-weight:lighter;}
	.right_main{width:188px; background-image:url(images/bg_right_main.png); background-repeat:repeat-y;}

	.content_body{ background-color:#f3f6ea;}
	.registration_call_txt {font-family: 'Helvetica'; font-size:45px; color:#146db4; height:45px;}
	.registration_call_txt strong {font-size:75px; font-weight:normal;}
	.registration_call_txt2 { position:relative; font-family:Helvetica;font-size:14px; color:#000; margin-top:0px;}
	.imput_text { width:160px; height:75px; font-family:Helvetica;font-size:20px; color:#146db4; text-align:right; letter-spacing:1px; padding-top:8px;}
	.input_td{ width:375px;}
	.obligatory_note { width:120px; font-family:Helvetica;font-size:40px; color:#ff0000; padding-top:10px;}
	.form_title{font-family:Helvetica;font-size:22px; font-style:italic; color:#000; line-height:35px; letter-spacing:1px;}

	.left_bottom{ width:186px; background-image:url(images/bg_left_main.png); background-repeat:repeat-y;}
	.center_bottom{ width:650px;height:35px; background-color:#000;}
	.right_bottom{width:188px; background-image:url(images/bg_right_main.png); background-repeat:repeat-y;}

	.obligatory_legend { font-family:Helvetica;font-size:16px; color:#ff0000; padding-top:10px;}
	.obligatory_legend strong{ font-size:40px; font-style:normal; margin-top:-15px;  vertical-align:top;}

	.checkbox_txt{font-family:Helvetica;font-size:16px; color:#0000;}
	.checkbox_txt_link {color:blue; text-decoration:underline;}

/* FORM BUTTON */

.signup-header-link {
    background-color: #698C2E !important;
    background-image: -moz-linear-gradient(center top , #A7CF62, #698C2E) !important;
	background: -webkit-gradient(linear, left top, left bottom, from(#A7CF62), to(#698C2E));
    border-bottom: 0 solid #344616;
    border-radius: 8px 8px 8px 8px;
    border-style: solid;
    border-top: 1px solid #C6F17A;
    border-width: 1px 0 0;
    box-shadow: 0 0 8px #15181B;
    color: #FFFFFF !important;
    cursor: pointer;
    float: left;
    font-family: 'HelveticaNeue-Light','Helvetica Neue Light','Helvetica Neue',sans-serif;
    font-weight: bold;
    letter-spacing: 1px;
    line-height: 2.4em;
    margin-bottom: 5px;
    padding: 0 !important;
    text-align: center;
    text-shadow: 0 1px 2px #393939;
    text-transform: uppercase;
	font-size: 30px !important;
    line-height: 2.2em;
    padding: 0 0 5px !important;
    width: 368px;
	margin-left:130px;
}
.small-button-text {
    color: #363636;
    display: block;
    font-family: Arial,sans-serif;
    font-weight: normal;
    line-height: 0.5em;
    text-shadow: 0 1px 0 #A3C95E;
    text-transform: uppercase;
}
a:link, a:visited, a:active {

    text-decoration: none;
}
.small-button-text {
    font-size: 11px;
    margin: -13px 0 17px;
}
.small-button-text {
    color: #363636;
    display: block;
    font-family: Arial,sans-serif;
    font-weight: normal;
    line-height: 0.5em;
    text-shadow: 0 1px 0 #A3C95E;
    text-transform: uppercase;
}


/* END FORM BUTTON */


</style>

	<link rel="stylesheet" href="Insercionmotos_files/jquery.css">

	<link rel="stylesheet" href="Insercionmotos_files/demos.css">
	<style>



	.ui-combobox {
		position: relative;
		display: inline-block;
		top:1px;
	}

	@media screen and (-webkit-min-device-pixel-ratio:0) {
		.ui-combobox {
			 top:1px;
		}
	}

	.ui-combobox-toggle {
    bottom: 0;
    margin-left: -1px;
    padding: 0;
    top: 0;
 display:none;
}
	.ui-combobox-input {
		margin: 0;
		padding: 0.3em;
	}
	.select_out{
		z-index:-1;
		position:absolute;
		left:-7000px;;

		}
	</style>
<!--[if IE]>
	<link rel="stylesheet" type="text/css" href="all-ie-only.css" />
<![endif]-->
	<script type="text/javascript">
	(function( $ ) {
		$.widget( "ui.combobox", {
			_create: function() {
				var input,
					self = this,
					select = this.element.show(),
					xxxx = this.element.css("visibility","hidden"),


					selected = select.children( ":selected" ),
					value = selected.val() ? selected.text() : "",
					wrapper = this.wrapper = $( "<span>" )
						.addClass( "ui-combobox" )
						.insertAfter( select );

				input = $( "<input>" )
					.appendTo( wrapper )
					.val( value )
					.addClass( "ui-state-default ui-combobox-input" )
					.autocomplete({
						delay: 0,
						minLength: 0,
						source: function( request, response ) {
							var matcher = new RegExp( $.ui.autocomplete.escapeRegex(request.term), "i" );
							response( select.children( "option" ).map(function() {
								var text = $( this ).text();
								if ( this.value && ( !request.term || matcher.test(text) ) )
									return {
										label: text.replace(
											new RegExp(
												"(?![^&;]+;)(?!<[^<>]*)(" +
												$.ui.autocomplete.escapeRegex(request.term) +
												")(?![^<>]*>)(?![^&;]+;)", "gi"
											), "<strong>$1</strong>" ),
										value: text,
										option: this
									};
							}) );
						},
						select: function( event, ui ) {
							ui.item.option.selected = true;
							self._trigger( "selected", event, {
								item: ui.item.option
							});
						},
						change: function( event, ui ) {



							if ( ui.item ) {
							//	alert('item!');


								   select.parent("td").next("td").removeClass().addClass("goooooood");

								   select.parent("td").next("td").text("");
								   select.next("em").text("");


								if(select.attr('name') == 'country'){
									decide_state_field('selected');
								}else{

									state_err('success');

								}



							}


							if ( !ui.item ) {
							//		alert('no!');
								var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( $(this).val() ) + "$", "i" ),
									valid = false;
								select.children( "option" ).each(function() {
									if ( $( this ).text().match( matcher ) ) {
										this.selected = valid = true;
										if(select.attr('name') == 'country'){
											decide_state_field('found');
										}else{

											state_err('success');

										}
										 select.parent("td").next("td").removeClass().addClass("goooooood");
								   	     select.parent("td").next("td").text("");

										return false;
									}
								});
								if ( !valid ) {
							//			alert('not valid!');
									// remove invalid value, as it didn't match anything
									$( this ).val( "" );
									select.val( "" );
									input.data( "autocomplete" ).term = "";
									if(select.attr('name') == 'country'){
										decide_state_field('invalid');
									}else{

									state_err('failed');

										}
									select.parent("td").next("td").removeClass().addClass('messagessssss');
									select.parent("td").next("td").text("");

									return false;
								}
							}
						}
					})
					.addClass( "ui-widget ui-widget-content ui-corner-left" );

				input.data( "autocomplete" )._renderItem = function( ul, item ) {
					return $( "<li></li>" )
						.data( "item.autocomplete", item )
						.append( "<a>" + item.label + "</a>" )
						.appendTo( ul );
				};

				$( "<a>" )
					.attr( "tabIndex", -1 )
					.attr( "title", "Show All Items" )
					.appendTo( wrapper )
					.button({
						icons: {
							primary: "ui-icon-triangle-1-s"
						},
						text: false
					})
					.removeClass( "ui-corner-all" )
					.addClass( "ui-corner-right ui-combobox-toggle" )
					.click(function() {
						// close if already visible
						if ( input.autocomplete( "widget" ).is( ":visible" ) ) {
							input.autocomplete( "close" );
							return;
						}

						// work around a bug (likely same cause as #5265)
						$( this ).blur();

						// pass empty string as value to search for, displaying all results
						input.autocomplete( "search", "" );
						input.focus();
					});
			},

			destroy: function() {
				this.wrapper.remove();
				this.element.show();
				$.Widget.prototype.destroy.call( this );
			}
		});
	})( jQuery );

	$(function() {
		$( "#country" ).combobox();
		$( "#state" ).combobox();

		$( "#toggle" ).click(function() {
			$( "#country" ).toggle();
			$( "#state" ).toggle();

		});
	});

function state_err(vartype){
//alert(vartype);
if(vartype == 'success'){
document.getElementById("stateobl").className = 'goooooood';
document.getElementById("stateobl").innerHTML = '&nbsp;';
} else {

	document.getElementById("stateobl").className = 'messagessssss';
	document.getElementById("stateobl").innerHTML = '&nbsp;';

}
}

function city_err(vartype){
//alert(vartype);
if(vartype == 'success'){
document.getElementById("cityobl").className = 'goooooood';
document.getElementById("cityobl").innerHTML = '&nbsp;';
} else {

	document.getElementById("cityobl").className = 'messagessssss';
	document.getElementById("cityobl").innerHTML = '&nbsp;';

}
}

function country_err(vartype){
//alert(vartype);
if(vartype == 'success'){
document.getElementById("countryobl").className = 'goooooood';
document.getElementById("countryobl").innerHTML = '&nbsp;';
} else {

	document.getElementById("countryobl").className = 'messagessssss';
	document.getElementById("countryobl").innerHTML = '&nbsp;';

}
}


function decide_state_field(chosenitem){
		//alert("#"+ids);

		var choice=(chosenitem ==  undefined)?'':chosenitem;
		var country=(document.getElementById("country").value ==  undefined)?'':document.getElementById("country").value;
		var city=(document.getElementById("city").value ==  undefined)?'':document.getElementById("city").value;
		var postcode=(document.getElementById("postcode").value ==  undefined)?'':document.getElementById("postcode").value;

		var class_postcode=(document.getElementById("postcode").className ==  undefined)?'':document.getElementById("postcode").className;
		var class_city=(document.getElementById("city").className ==  undefined)?'':document.getElementById("city").className;

		$.ajax({
			type: "POST",
			url: "nuevo_cliente_ajax_decide_state.php",
			data: 	"chosenitem=" + choice +
			"&country_id=" + country+
			"&city=" + city+
			"&postalcode=" + postcode+



			"&classname[postalcode]=" + class_postcode+


			"&classname[city]=" + class_city,

			success: function(html){
				$("#state_bubble").html(html);
				//$( "#state" ).combobox();
			}
		});



		}


function decide_city_field(chosenitem){
		//alert("#"+ids);

		var choice=(chosenitem ==  undefined)?'':chosenitem;
		var country=(document.getElementById("country").value ==  undefined)?'':document.getElementById("country").value;
		var city=(document.getElementById("city").value ==  undefined)?'':document.getElementById("city").value;
		var postcode=(document.getElementById("postcode").value ==  undefined)?'':document.getElementById("postcode").value;

		var class_postcode=(document.getElementById("postcode").className ==  undefined)?'':document.getElementById("postcode").className;
		var class_city=(document.getElementById("city").className ==  undefined)?'':document.getElementById("city").className;

		$.ajax({
			type: "POST",
			url: "nuevo_cliente_ajax_decide_city.php",
			data: 	"chosenitem=" + choice +
			"&country_id=" + country+
			"&city=" + city+
			"&postalcode=" + postcode+

			"&classname[postalcode]=" + class_postcode+


			"&classname[city]=" + class_city,

			success: function(html){
			 //	$("#city_bubble").html(html);
			// alert(html.length);
			 if(html.length > 0){
				document.getElementById("city").value = html;
				document.getElementById("city").className = 'newfield2';
				city_err('success');
				}

				//$( "#state" ).combobox();
			}
		});



		}



	</script>
     <!-- BRAINSINS INIT CODE-->
<script type="text/javascript">
     brainsins_token = "BS-7013536032-1";
     brainsins_api_mode="B";
</script>
<script type="text/javascript" async="" src="Insercionmotos_files/brainsins.js">
</script>
    <!-- END BRAINSINS INIT CODE-->
<script type="text/javascript" src="Insercionmotos_files/data.php"></script></head>
<body onload="javascript:decide_state_field('initializing');">

<!-- header //-->

<script type="text/javascript">
var revert = new Array();
var inames = new Array("ciclismo-cuenta","ciclismo-pedido","ciclismo-cesta", "ciclismo-tu-cuenta", "ciclismo-soporte", "logout");
// Preload
if (document.images) {
  var flipped = new Array();
  for(i=0; i< inames.length; i++) {
    flipped[i] = new Image();
    flipped[i].src = "https://dhpewisgpg8i8.cloudfront.net/img/lang/espanol/images/design/"+inames[i]+"1.gif";
  }
}
function over(num) {
  if(document.images) {
    revert[num] = document.images[inames[num]].src;
    document.images[inames[num]].src = flipped[num].src;
  }
}
function out(num) {
  if(document.images) document.images[inames[num]].src = revert[num];
}
</script>
<table width="1060px" cellspacing="0" cellpadding="0" border="0" align="center">
	<tbody><tr>
  		<td align="center">
			<table width="1060" cellspacing="0" cellpadding="0" border="0" align="center">
            <tbody><tr bgcolor="white">
              <td colspan="2">
                <div class="container_head">
                  <div style="float: left; width:340px;"><a href="http://www.kingbarcelona.com/es/index.php"><img src="Insercionmotos_files/king-barcelona.png" alt="Tienda ciclismo. Componentes Shimano y Campagnolo. Más de 2000 productos."></a></div>
                  <div style="float: left; width: 510px;margin-top:5px;">
                  <img src="Insercionmotos_files/telefono-compras_zdsx.gif" alt="Teléfono de compras telefónicas kingbarcelona.com" title="Teléfono de compras telefónicas kingbarcelona.com" border="0">
                  </div>
                  <div style="float: left; width:155px;margin-top:5px;margin-left:0px;"><a href="http://kingbarcelona.zendesk.com/account/dropboxes/20279223" class="large button_head green" onclick="script: Zenbox.show(); return false;">Soporte Online</a>
                  </div>
                  <div style="float: left; width: 510px;margin-top:0px;">
                    <form name="quick_find" action="http://www.kingbarcelona.com/advanced_search_result.php" method="get" class="form-wrapper cf"><input name="keywords" onfocus="if(this.value == 'El buscador de millones de ciclistas...') { this.value = ''; }" placeholder="El buscador de millones de ciclistas..." type="text"><button type="submit"></button>                    </form>
                  </div>
                  <div style="float: left; width:155px;margin-top:0px;margin-left:0px;">
                    <a href="https://www.kingbarcelona.com/account.php" class="large button_head blue icon_guy"><span>Tu Cuenta</span></a>                  </div>
                  <div style="float: left; width:670px;margin-top:0px;margin-left:0px;">
                    <ul class="header_language_menu">
                      <li class="first_li">
                        <span class="3flags"><a href="https://www.kingbarcelona.com/en/"><img src="Insercionmotos_files/button_icon_english_flag.gif" alt="Select english language" title="Select english language" border="0"></a>
                        <a href="https://www.kingbarcelona.com/es/index.php"><img src="Insercionmotos_files/button_icon_spanish_flag.gif" alt="Seleciona idioma español" title="Seleciona idioma español" border="0"></a>
                        <a href="https://www.kingbarcelona.com/fr/"><img src="Insercionmotos_files/button_icon_french_flag2.gif" alt="Choisir la langue française" title="Choisir la langue française" border="0"></a></span>
                      </li>
                        <li><span class="menu_new_account"><a href="https://www.kingbarcelona.com/nuevo_cliente.php">Crear Cuenta</a></span></li><li><span class="menu_checkout"><a href="https://www.kingbarcelona.com/fcheckout_shipping.php">Realizar Pedido</a></span></li><li><span class="menu_cart clean_border"><a href="http://www.kingbarcelona.com/shopping_cart.php">Ver Cesta</a></span></li>                    </ul>
                  </div>
                </div>
              </td>
            </tr>
      			<tr>
              <td colspan="2" style="font-family:Helvetica, Arial, Verdana; font-weight:lighter; font-size:17px; color:#000000; padding-left:10px;" bgcolor="#ffffff" height="30"><a href="http://www.kingbarcelona.com/" class="headerNavigation">Inicio</a> - <a href="http://www.kingbarcelona.com/es/index.php" class="headerNavigation">Catálogo</a> - <a href="https://www.kingbarcelona.com/registrarbicis.php" class="headerNavigation">Registro de robos</a></td>
            </tr>
      			<tr>
        			<td colspan="2" align="center">
                              </td>
      			</tr>
    		</tbody></table>
        <a href="http://kingbarcelona.zendesk.com/account/dropboxes/20279223" target="_new" onclick="script: Zenbox.show(); return false;" id="fdbk_tab_support_espanol" class="fdbk_tab_right" style="background-color: #77b91d;">Soporte</a>
<a id="fdbk_tab_about_espanol" class="fdbk_tab_right" style="background-color: #005e85;" href="http://www.kingbarcelona.com/es/acerca_de.php">Acerca de</a>
<!-- header_eof //-->

<!-- CODIGO DE FORMULARIO //-->
 <form name="create_account" action="https://www.kingbarcelona.com/nuevo_cliente.php" method="post" class="cmxform" id="texttests" autocomplete="off" novalidate="novalidate"><input name="action" value="process" type="hidden">
<table class="main_table" cellspacing="0" cellpadding="0" border="0">
	<tbody>
    <tr>
    	<td class="left_main" valign="top"><img src="Insercionmotos_files/left_black_corner.png" width="186" border="0" height="80"></td>
        <td class="center_main">Si te han robado la bici<br>Estás el sitio correcto.</td>
        <td class="right_main" valign="top"><img src="Insercionmotos_files/right_black_corner.png" width="188" border="0" height="80"></td>
	  </tr>
    <tr>
    	<td class="left_main"></td>
    	<td class="content_body" valign="top">
        	<table cellspacing="15" cellpadding="0" border="0">
            	<tbody><tr>
                	<td colspan="3" valign="top">
                    <div class="registration_call_txt"><h4 style="font-weight:lighter;margin:0;">Registra tu robo</h4></div></br>
						        <div class="registration_call_txt2">Solo tardarás 2 minutos en realizarlo.</div>
                  </td>
                </tr>
                <tr>
                	<td colspan="3" class="space_v"> </td>
                </tr>
                <tr>
                	<td class="imput_text" valign="top" height="75px"><label for="title"></label>Titulo del Robo</td>
                    <td valign="top"> <input name="title" class="newfield" id="title" value="Robo de bici en..." onfocus="if(this.value == 'Robo de bici en...' &amp;&amp; this.className == 'newfield' ) { this.value = ''; };this.className = 'newfield2';" title="Por favor introduce un titulo de menos de 50 carácteres." type="text"></td>
                    <td class="obligatory_note" valign="top">*</td>
                </tr>
                <tr>
                	<td class="imput_text" valign="top" height="75px"><label for="date">Fecha del anuncio</label></td>
                    <td valign="top"> <input name="date" class="newfield" id="date" value="dd/mm/aaaa" onfocus="if(this.value == 'dd/mm/aaaa' &amp;&amp; this.className == 'newfield' ) { this.value = ''; };this.className = 'newfield2';" title="Por favor introduce una fecha correcta. Ej 01/01/2016" type="text"></td>
                    <td class="obligatory_note" valign="top">*</td>
                </tr>
                <tr>
                	<td class="imput_text" valign="top" height="75px"><label for="date">Fecha del robo</label></td>
                    <td valign="top"> <input name="date" class="newfield" id="date" value="dd/mm/aaaa" onfocus="if(this.value == 'dd/mm/aaaa' &amp;&amp; this.className == 'newfield' ) { this.value = ''; };this.className = 'newfield2';" title="Por favor introduce una fecha correcta. Ej 01/01/2016" type="text"></td>
                    <td class="obligatory_note" valign="top">*</td>
                </tr>
                <tr>
                	<td class="imput_text" valign="top" height="75px"><label for="title">Ubicación del robo</label></td>
                    <td valign="top"> <input name="tittle" class="newfield" id="title" value="Barcelona" onfocus="if(this.value == 'Barcelona' &amp;&amp; this.className == 'newfield' ) { this.value = ''; };this.className = 'newfield2';" title="Por favor introduce una hubicación de menos de 35 carácteres." type="password"></td>
                  <td class="obligatory_note" valign="top">*</td>
                  <tr>
                  	<td class="imput_text" valign="top" height="75px"><label for="title">Descripción del robo</label></td>
                      <td valign="top"> <input name="title" class="newfield" id="title" value="Me han robado la bici ..." onfocus="if(this.value == 'Me han robado la bici ...' &amp;&amp; this.className == 'newfield' ) { this.value = ''; };this.className = 'newfield2';" title="Por favor introduce una descripcion de menos de 200 carácteres." type="title"></td>
                    <td class="obligatory_note" valign="top">*</td>
                  </tr>
                  <tr>
                  	<td class="imput_text">Marca</td>
                      <td><input name="title" id="title" class="newfield" onfocus="if(this.value == 'BH' &amp;&amp; this.className == 'newfield' ) { this.value = ''; };this.className = 'newfield2';" value="BH" type="text"></td>
                      <td class="obligatory_note">  </td>
                  </tr>
                  <tr>
                  	<td class="imput_text">Modelo</td>
                      <td><input name="title" id="title" class="newfield" onfocus="if(this.value == 'California' &amp;&amp; this.className == 'newfield' ) { this.value = ''; };this.className = 'newfield2';" value="California" type="text"></td>
                      <td class="obligatory_note">  </td>
                  </tr>
                  <tr>
                  	<td class="imput_text">Color</td>
                      <td><input name="title" id="title" class="newfield" onfocus="if(this.value == 'Azul' &amp;&amp; this.className == 'newfield' ) { this.value = ''; };this.className = 'newfield2';" value="Azul" type="text"></td>
                      <td class="obligatory_note">  </td>
                  </tr>
                  <tr>
                  	<td class="imput_text">Antiguedad</td>
                      <td><input name="title" id="title" class="newfield" onfocus="if(this.value == '10' &amp;&amp; this.className == 'newfield' ) { this.value = ''; };this.className = 'newfield2';" value="10" type="text"></td>
                      <td class="obligatory_note">  </td>
                  </tr>

                  <!-- INTRODUCIR AQUI EL CODIGO DE EL CAMPO DE TEXTO DE LA DESCRIPCION //-->

                  <tr>
                  	<td class="imput_text" valign="top" height="75px"><label for="title">Número de serie</label></td>
                      <td valign="top"> <input name="title" class="newfield" id="title" value="FAG2304K-2008-P" onfocus="if(this.value == 'FAG2304K-2008-P' &amp;&amp; this.className == 'newfield' ) { this.value = ''; };this.className = 'newfield2';" title="Por favor introduce un número de serie de menos de 15 carácteres." type="title"></td>
                    <td class="obligatory_note" valign="top">*</td>
                  </tr>

                  <!-- INTRODUCIR AQUI EL CODIGO DE EL CAMPO DE LA FOTO //-->

                  <tr>
                  	<td class="imput_text" valign="top" height="75px"><label for="title">Compensación</label></td>
                      <td valign="top"> <input name="title" class="newfield" id="title" value="Me han robado la bici ..." onfocus="if(this.value == 'se43naka90' &amp;&amp; this.className == 'newfield' ) { this.value = ''; };this.className = 'newfield2';" title="Por favor introduce una cantidad numérica correcta." type="title"></td>
                    <td class="obligatory_note" valign="top">*</td>
                  </tr>
                  <tr>
                    <td onclick="window.document.create_account.agree.checked = !window.document.create_account.agree.checked;" class="imput_text" valign="top" height="75px"><label for="agree">&nbsp;</label></td>
                    <td valign="top" align="left"><input name="agree" value="true" id="agree" title="&nbsp;" class="checkbox_rules" type="checkbox">
                    Marca esta casilla si no deseas recibir nuestras notificaciones.<br></td>
                  </tr>
                  <tr>
                	  <td onclick="window.document.create_account.agree.checked = !window.document.create_account.agree.checked;" class="imput_text" valign="top" height="75px"><label for="agree">&nbsp;</label></td>
                    <td valign="top" align="left"><input name="agree" value="true" id="agree" title="&nbsp;" class="checkbox_rules" type="checkbox">
                    Mediante el envío de mis datos personales confirmo que he leído y acepto las condiciones de uso de esta web.<br>
                      <a class="checkbox_txt_link" href="javascript:void(0);" style="color:blue;text-decoration:underline;" onclick="NewWindow('','tech','850','600','yes');return false">Nuestras condiciones de uso.</a>
                    </td>
                    <td class="obligatory_note" valign="top">*</td>
                </tr>
                <tr>
                	<td colspan="3" class="space_v"> </td>
                </tr>
                <tr>
                	<td colspan="3">
                <button id="submit" type="submit" onmousedown="
                if(document.getElementById('title').value == 'Robo de bici en...' &amp;&amp; document.getElementById('title').className == 'newfield' ) { document.getElementById('title').value = ''; };document.getElementById('title').className = 'newfield2';

                if(document.getElementById('date').value == 'dd/mm/aaaa' &amp;&amp; document.getElementById('date').className == 'newfield' ) { document.getElementById('date').value = ''; };document.getElementById('date').className = 'newfield2';

                if(document.getElementById('date').value == 'dd/mm/aaaa' &amp;&amp; document.getElementById('date').className == 'newfield' ) { document.getElementById('date').value = ''; };document.getElementById('date').className = 'newfield2';


                if(document.getElementById('title').value == 'Barcelona' &amp;&amp; document.getElementById('title').className == 'newfield' ) { document.getElementById('title').value = ''; };document.getElementById('title').className = 'newfield2';


                if(document.getElementById('title').value == 'Me han robado la bici ...' &amp;&amp; document.getElementById('title').className == 'newfield' ) { document.getElementById('title').value = ''; };document.getElementById('title').className = 'newfield2';


                if(document.getElementById('street_address').value == 'Avenida Diagonal 354, 4� 3�' &amp;&amp; document.getElementById('street_address').className == 'newfield' ) { document.getElementById('street_address').value = '';};document.getElementById('street_address').className = 'newfield2';


                if(document.getElementById('postcode').value == '08020' &amp;&amp; document.getElementById('postcode').className == 'newfield' ) { document.getElementById('postcode').value = '';};document.getElementById('postcode').className = 'newfield2';

                if(document.getElementById('city').value == 'Barcelona' &amp;&amp; document.getElementById('city').className == 'newfield' ) { document.getElementById('city').value = '';};document.getElementById('city').className = 'newfield2';

                if(document.getElementById('company').value == 'King Barcelona S.L.' &amp;&amp; document.getElementById('company').className == 'newfield' ) { document.getElementById('company').value = '';};document.getElementById('company').className = 'newfield2';

                if(document.getElementById('uniqid').value == 'B65238628' &amp;&amp; document.getElementById('uniqid').className == 'newfield' ) { document.getElementById('uniqid').value = '';};document.getElementById('uniqid').className = 'newfield2';



                if(document.getElementById('state').value == 'Barcelona' &amp;&amp; document.getElementById('state').className == 'newfield' ) { document.getElementById('state').value = '';};document.getElementById('state').className = 'newfield2';



                if(document.getElementById('state').value == '') { state_err('failed') } else  { state_err('success') } ;



if(document.getElementById('country').value == 'Barcelona' &amp;&amp; document.getElementById('country').className == 'newfield' ) { document.getElementById('country').value = '';};document.getElementById('country').className = 'newfield2';
                ">

                    	<div class="signup-button-header">
							<a class="signup-header-link">
								Encuentra tu bici								<span class="small-button-text"> </span>
							</a>
						</div>
                        </button>
                    </td>
                </tr>
                <tr>
                	<td colspan="3" class="space_v">

                     </td>
                </tr>
                <tr>
                	<td colspan="3" class="space_v">  </td>
                </tr>
            </tbody></table>
        </td>
    	<td class="right_main"></td>
    </tr>
    <tr>
    	<td class="left_bottom" valign="top"> </td>
        <td class="center_bottom"> </td>
        <td class="right_bottom" valign="top"> </td>
	</tr>
    <tr>
      	<td colspan="3" class="space_v"> </td>
    </tr>
    <tr>
      	<td colspan="3" class="obligatory_legend" align="center"><strong>*</strong> Datos obligatorios para registrar tu bici robada en kingbarcelona.com</td>
    </tr>
</tbody></table>
</form>
<script type="text/javascript">
country_err('success');
</script>
<script type="text/javascript">
$('#texttests').attr('novalidate', 'novalidate');
</script>
<!-- footer //-->
</td></tr><tr><td colspan="3">
<table width="100%" cellspacing="0" cellpadding="1" border="0">
  <tbody><tr class="footer">
    <td class="footer">&nbsp;&nbsp;jueves 20 octubre, 2016&nbsp;&nbsp;</td>
    <td class="footer" align="right">&nbsp;&nbsp;279.320.479 peticiones desde jueves 01 junio, 2006&nbsp;&nbsp;</td>
  </tr>
  <tr><td class="subBar" colspan="2" align="center"><a href="https://www.confianzaonline.es/empresas/kingbarcelona.htm" target="_blank"><img src="Insercionmotos_files/sellomedianoanimado.gif" alt="Entidad adherida a Confianza Online" border="0"></a></td></tr>
  <tr><td class="subBar" colspan="2" align="center">King Barcelona S.L. -
 CIF B65238628 - Registro mercantil 163252/105430 | c/ Pau Muñoz i
Castanyer 16 Local 4, 08174 Sant Cugat del Vallés (España)</td></tr>
</tbody></table>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-423399-1', 'auto');
  ga('send', 'pageview');

</script><script type="text/javascript"> var cbarProtocol = (("https:" == document.location.protocol) ? "https://" : "http://");document.write(unescape("%3Cscript src='" + cbarProtocol + "s3.amazonaws.com/cdn.barilliance.com/kingbarcelona.com/cbar.js.php'  type='text/javascript'%3E%3C/script%3E"));    </script><script src="Insercionmotos_files/cbar.php" type="text/javascript"></script>


 </td></tr>
</tbody></table>
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1066180377;
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="Insercionmotos_files/conversion.js">
</script><iframe name="google_conversion_frame" title="Google conversion frame" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/1066180377/?random=1476970092152&amp;cv=8&amp;fst=1476970092152&amp;num=1&amp;fmt=1&amp;guid=ON&amp;u_h=864&amp;u_w=1536&amp;u_ah=824&amp;u_aw=1536&amp;u_cd=24&amp;u_his=3&amp;u_tz=120&amp;u_java=true&amp;u_nplug=13&amp;u_nmime=205&amp;frm=0&amp;url=https%3A%2F%2Fwww.kingbarcelona.com%2Fnuevo_cliente.php&amp;ref=http%3A%2F%2Fwww.kingbarcelona.com%2Fes%2F&amp;tiba=Tienda%20ciclismo%20y%20MTB.%20Comprar%20bicicletas.%20Componentes%20Shimano%20y%20Sram" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no" width="300" height="13" frameborder="0"></iframe>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1066180377/?value=0&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<script type="text/javascript" src="Insercionmotos_files/zenbox.js"></script>
<style type="text/css" media="screen, projection">
  @import url(//assets.zendesk.com/external/zenbox/v2.6/zenbox.css);
</style>
<script type="text/javascript">
  if (typeof(Zenbox) !== "undefined") {
    Zenbox.init({
      dropboxID:   "20277343",
      url:         "https://kingbarcelona.zendesk.com",
      tabTooltip:  "Soporte",
      tabImageURL: "https://kingbarcelona.com/images/zendesk/tab_es_support.png",
      tabColor:    "#77b91d",
      tabPosition: "Left",
      hide_tab:   "true"
    });
  }
</script><div id="zenbox_tab" href="#" style="display: none;"></div><div id="zenbox_overlay" style="display: none;"><div id="zenbox_container">  <div class="zenbox_header"><img id="zenbox_close" src="Insercionmotos_files/close_big.png"></div>  <iframe id="zenbox_body" scrolling="auto" allowtransparency="true" src="Insercionmotos_files/loading.htm" frameborder="0"></iframe></div><div id="zenbox_scrim">&nbsp;</div></div>
<!-- footer_eof //-->
<br>


<ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none;"></ul><script id="BrainSINS_jsonpRequest_BrainSINSTracker.trackingCallback" src="Insercionmotos_files/tracker.php" type="text/javascript"></script><ul class="ui-autocomplete ui-menu ui-widget ui-widget-content ui-corner-all" role="listbox" aria-activedescendant="ui-active-menuitem" style="z-index: 1; top: 0px; left: 0px; display: none;"></ul></body></html>
