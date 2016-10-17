-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2016 a las 20:01:53
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `anunci`
--

INSERT INTO `anunci` (`anu_id`, `anu_titol`, `anu_data_anunci`, `anu_data_robatori`, `anu_ubicacio_robatori`, `anu_descripcio_robatori`, `anu_marca`, `anu_model`, `anu_color`, `anu_antiguitat`, `anu_descripcio`, `anu_numero_serie`, `anu_foto`, `anu_compensacio`) VALUES
(1, 'Bici robada en Hospitalet de Llobregat', '2016-10-17', '2016-10-17', 'Hospitalet de Llobregat', 'La bici me la han robado en el aparcabicis del instituto Jesuites Bellvitge esta mañana.', 'Connor', 'Lady 20''''', 'Blanca y naranja', '5', 'Mi bici es de color blanco y naranja con 5 velocidades, cesta, portabotella, y refectantes en las ruedas.', NULL, 'connorlady.jpg', '50.00'),
(2, 'Shimano robada', '2016-10-02', '2016-10-01', 'Barcelona', 'robada en el rabal, viernes noche.', 'Shimano', 'Moma', 'Negra', '1', 'Bici electrica de paseo full equip.', NULL, 'moma.jpg', NULL),
(3, 'Mountain bike robada', '2016-08-23', '2016-08-26', 'Puigcerdà', 'Bici robada mientras desayunabamos en Puigcerdà', 'Bianchi', '', 'Negra y roja', '10', 'Mountain bike negra y roja con ruedas y frenos nuevos.', NULL, 'bianchi.jpg', '25.00'),
(4, 'Bici robada', '2016-10-04', '2016-10-04', 'Cornellà', 'Empujaron a mi hijo 3 niños de unos 13 o 14 años con muy malas pintas, lo tiraron al suelo y se llevaron la bici corriendo.', 'Peugeot', 'Olimpique de Lyon oficial', 'azul', '3', 'Bicicleta oficial de niño del equipo del Olimpique de Lyon, muy importante por ser regalo de los abuelos franceses.', NULL, 'ol.jpg', NULL),
(5, 'Bicicleta robada en Esparreguera', '2016-07-05', '2016-07-05', 'Esparreguera', 'Bicicleta robada a primera hora de la mañana delante de la Pasió de Esparreguera', 'Fixie', 'Cuadro Hi-Ten', 'gris', '12', 'Bicicleta de piñon fijo sin marchas, con llantas de aluminio de doble pared y perfil de 43mm.\r\nLas ruedas son flip-flop de piñon fijo o libre\r\nTalla XL', NULL, 'fixie.jpg', '99.99');

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
MODIFY `anu_id` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
