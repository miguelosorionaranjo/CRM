-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 22-10-2020 a las 16:35:33
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tasks-app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fuec` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `apellido` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `contratante` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `objetocontrato` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cc` int(11) DEFAULT NULL,
  `origen` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `recorrido` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `activa` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `task`
--

INSERT INTO `task` (`id`, `fuec`, `name`, `apellido`, `description`, `contratante`, `objetocontrato`, `cc`, `origen`, `recorrido`, `fecha`, `activa`) VALUES
(1, '', '', '', '', '', '', 0, '', '', '0000-00-00 00:00:00', 'Aprobado'),
(3, '4546', '4545', '4545', '4546', 'Miguel', '45454', 4545, '4545', '4545', '0000-00-00 00:00:00', 'Aprobado'),
(4, '252525', '25252', '52525', '252525', '25252', '5252', 5252, '5252', '5252', '0000-00-00 00:00:00', 'Aprobado'),
(5, '020202', '0202', '0202', '02020', '20202', '02020', 2020, '202020', '2020', '0000-00-00 00:00:00', 'Aprobado'),
(6, '333666', '333', '333', '333', '333', '333', 333, '333', '333', '0000-00-00 00:00:00', 'No Aprobado'),
(7, '123', '123', '123', '123', '123', '123', 123, '123', '232', '0000-00-00 00:00:00', 'No Aprobado'),
(8, '123456789', 'Fasepi ', '123456', '123456', 'Fasepi Group', 'Desarrollo', 123456789, 'BogotÃ¡ ', 'Largo', '0000-00-00 00:00:00', 'No Aprobado'),
(9, 'Hola123', 'Prueba 01', '232323', '123', 'pedro', 'si', 321, 'cali', 'largo', '0000-00-00 00:00:00', 'Aprobado'),
(10, '3456676', 'Prueba 02', '232323', '123', 'pepe', 'si', 123456, 'cali', 'Corto', '0000-00-00 00:00:00', 'Aprobado'),
(11, '01', 'Prueba 03', '123456', '123', '12312', '123121', 321321, '321321', '2132131', '2020-10-22 16:19:34', 'No Aprobado'),
(12, '2', 'Prueba 04', '3', '3', 'pedro', 'si', 123456, 'cali', 'largo', '2020-10-22 16:26:59', 'Aprobado');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
