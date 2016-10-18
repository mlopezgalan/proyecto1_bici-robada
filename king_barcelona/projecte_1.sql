-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-10-2016 a las 16:37:13
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `projecte_1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anunci`
--

CREATE TABLE IF NOT EXISTS `anunci` (
`anu_id` int(4) NOT NULL,
  `anu_titol` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `anu_data_anunci` date NOT NULL,
  `anu_data_robatori` date NOT NULL,
  `anu_ubicacio_robatori` varchar(35) COLLATE utf8_spanish_ci NOT NULL,
  `anu_descripcio_robatori` varchar(200) COLLATE utf8_spanish_ci NOT NULL,
  `anu_marca` varchar(15) COLLATE utf8_spanish_ci NOT NULL,
  `anu_model` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anu_color` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anu_antiguitat` varchar(25) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anu_descripcio` text COLLATE utf8_spanish_ci NOT NULL,
  `anu_numero_serie` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anu_foto` varchar(25) COLLATE utf8_spanish_ci NOT NULL,
  `anu_compensacio` decimal(4,2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `anunci`
--

INSERT INTO `anunci` (`anu_id`, `anu_titol`, `anu_data_anunci`, `anu_data_robatori`, `anu_ubicacio_robatori`, `anu_descripcio_robatori`, `anu_marca`, `anu_model`, `anu_color`, `anu_antiguitat`, `anu_descripcio`, `anu_numero_serie`, `anu_foto`, `anu_compensacio`) VALUES
(1, 'Bici robada en Hospitalet de Llobregat', '2016-10-17', '2016-10-17', 'Hospitalet de Llobregat', 'La bici me la han robado en el aparcabicis del instituto Jesuites Bellvitge esta mañana.', 'Connor', 'Lady 20''''', 'Blanca y naranja', '5', 'Mi bici es de color blanco y naranja con 5 velocidades, cesta, portabotella, y refectantes en las ruedas.', NULL, 'connorlady.jpg', '50.00'),
(2, 'Shimano robada', '2016-10-02', '2016-10-01', 'Barcelona', 'robada en el rabal, viernes noche.', 'Shimano', 'Moma', 'Negra', '1', 'Bici electrica de paseo full equip.', NULL, 'moma.jpg', NULL),
(3, 'Mountain bike robada', '2016-08-23', '2016-08-26', 'Puigcerdà', 'Bici robada mientras desayunabamos en Puigcerdà', 'Bianchi', '', 'Negra y roja', '10', 'Mountain bike negra y roja con ruedas y frenos nuevos.', NULL, 'bianchi.jpg', '25.00'),
(4, 'Bici robada', '2016-10-04', '2016-10-04', 'Cornellà', 'Empujaron a mi hijo 3 niños de unos 13 o 14 años con muy malas pintas, lo tiraron al suelo y se llevaron la bici corriendo.', 'Peugeot', 'Olimpique de Lyon oficial', 'azul', '3', 'Bicicleta oficial de niño del equipo del Olimpique de Lyon, muy importante por ser regalo de los abuelos franceses.', NULL, 'ol.jpg', NULL),
(5, 'Bicicleta robada en Esparreguera', '2016-07-05', '2016-07-05', 'Esparreguera', 'Bicicleta robada a primera hora de la mañana delante de la Pasió de Esparreguera', 'Fixie', 'Cuadro Hi-Ten', 'gris', '12', 'Bicicleta de piñon fijo sin marchas, con llantas de aluminio de doble pared y perfil de 43mm.\r\nLas ruedas son flip-flop de piñon fijo o libre\r\nTalla XL', NULL, 'fixie.jpg', '99.99'),
(6, 'Bici de carretera robada', '2016-09-07', '2016-09-08', 'Sitges', 'Robada supusadament el ahir, avui al vespre no hi es al garatge.', 'Willier', 'Triestina Escape', 'Negra', '15', 'Bicicleta de carretera de competicion Willier Triestina Escape de la talla 55 con componentes Shimano 105, llantas mavic y bujes Capagnolo aluminio y orquilla carbono.', NULL, 'willier.jpg', '70.00'),
(7, 'Triciclo robado en barcelona', '2016-09-03', '2016-09-03', 'Sants', 'Desaparecio cuando entre en el Forn Rovira de Sants para comprar el pan', 'Etnnic', 'Tribike', 'Amarillo', '2', 'Triciclo de color amarillo con cesta, timbre, candados antirrobo, mancha vertical de pie y bolsa de herramientas incluidos.', NULL, 'etnnictribike.jpg', '99.99'),
(8, 'Robada bici Orbea', '2016-10-15', '2016-10-15', 'Barcelona', 'Robada del trastero.', 'Orbea', 'Furia', 'Amarilla', '30', 'Bicicleta cn mucho valor setimental.', NULL, 'orbea.jpg', '99.99'),
(9, 'Robada bicicleta tandem', '2016-08-01', '2016-08-03', 'Barcelona', 'Robada en el Passeig Sant Joan al ser asaltados por unos desconocidos.', 'Torrot', 'Tandem', 'Violeta', '2', 'Bicicleta hecha a mano y a medida en valencia con dos bicicletas, es artesanal, toda recien restaurada.', NULL, 'tandem.jpg', '99.99'),
(10, 'Robada bici artesanal', '2016-10-01', '2016-10-01', 'Barcelona', 'Bici robada en el Moll de la Fusta', 'Rsch', 'RS21', 'Plateado', '1', '', NULL, 'rsch.jpg', '99.99'),
(11, 'Me han robado mi bicicleta', '2016-10-18', '2016-10-18', 'Hospitalet de llobregat', 'Robo producido en el mercado de Collblanch', 'Babboe', 'City cargo bike', 'negra', '5', 'bicicleta de 2 ruedas con gran capacidad de carga y cambio shimano nuevo de 7 velocidades', NULL, 'babboe.jpg', NULL),
(12, 'Robada la bicicleta de mi bisabuelo', '2016-08-18', '2016-08-18', 'vielha', 'Robo descubierto al llegar el viernes de barcelona', 'sin marca', 'sin modelo', 'negra', '150', 'bicicleta heredada de mi bisabuelo de un incalculable valor sentimental, es de las originales de 1800 con la rueda delantera grande y los pedales en el eje delantero, esta restaurada.', NULL, 'vieja.jpg', NULL),
(13, 'Cyclostatic mangada', '2016-07-29', '2016-10-15', 'Santa Coloma de Gramenet', 'Se la han llevado de la habitacion de los trastos', 'Cyclostatic', 'Cyclostatic', 'Blanca y azul', '40', 'Un mes despues de venir de vacaciones al ir a hacer mi sesion de radikalbike en casa me he dado cuenta de que mi estimada cyclostatic ha desaparecido, tuvo que ser a finales de julio.', NULL, 'cyclodtatic.jpg', NULL),
(14, 'Robada bicicleta de competicion', '2016-10-08', '2016-10-08', 'Nuria', 'Robada delante del bar de la estacion de nuria al acabar la sesion de entrenamiento', 'Evil', 'Insurgent', 'Amarillo', '1', 'Una de las mejores bicicletas que existen de competición, ruedas de 27,5,sistema Delta de cambio de posicion de enduro, blindaje de cadena, amotriguador ajustable, etc...', NULL, 'evil.jpg', NULL),
(15, 'Robada Meelam india', '2016-09-11', '2016-09-11', 'Barcelona', 'El dia de la diada al ir a dar una vuelta con nuestra bici tuc-tuc al bajarnos un momento fuimos asaltados', 'Neelam', 'Rickshaw', 'Negra', '50', 'Bicicleta de tres ruedas india tipica de las que se utilizan alli como taxi (tuc-tuc), original en piezas y cudado asiento trasero con lona pata el sol y la lluvia', NULL, 'rickshaw.jpg', NULL),
(16, 'Robado monociclo del circo', '2016-10-12', '2016-10-12', 'Barelona', 'Durante la actuacion de el circo ambulante Circ Al Carrer desaparecio el monociclo del malabarista', '', '', 'Plateado', '6', 'Monociclo perteneciente al malabarista del Circ Al Carrer, nada que destacar, monociclo tipico cromado plateado con una rueda, un sillin, y, dos pedales.', NULL, 'monociclo.jpg', NULL),
(17, 'Bicicleta Free Style ROBADA!!', '2016-09-11', '2016-09-11', 'Barcelona', 'En el parc del forum en la diada un grupo de fachas se metio con nosotros y nos quito las bicis', 'BMX', 'Free Style 360', 'Negra', '1', 'Bici acabada de estrenar, preparada para competicion free-style, vale un paston!', NULL, 'bmx.jpg', NULL),
(18, 'Robo de bici en el balcon', '2016-10-18', '2016-10-19', 'Bilbao', 'Me la robaron el miercoles por la noche, la tenia en el balcon de un 14!!!', 'Tucano', 'Electrica', 'Blanco', '2', 'Transmision cardan, 8 velocidades, 5 niveles de potencia, comprada a finales de 2014.', NULL, 'tucano.jpg', '50.00'),
(19, 'Bici robada en Leon', '2016-10-02', '2016-10-02', 'Leon', 'Bici plegable robada en la estacion de renfe de Leon dentro del tren', 'Moma', '6v aluminio', 'Negra', '5', 'Bicicleta Moma 6v aluminio en perfecto estado', NULL, 'moma6v.jpg', NULL),
(20, 'robo de bici en Ourense', '2016-08-01', '2016-08-01', 'Ourense', 'Me la han robado en la puerta de la oficina donde trabajo', 'Shimano', 'Electrica', 'Blanca', '3', 'Bici electrica con cuadro de aluminio, motor Brushless 250w, sistema de pedal asistido, display lcd, muchas mas caracteristicas.', NULL, 'shimanoblanca.jpg', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `anunci`
--
ALTER TABLE `anunci`
 ADD PRIMARY KEY (`anu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anunci`
--
ALTER TABLE `anunci`
MODIFY `anu_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
