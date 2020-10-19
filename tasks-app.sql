-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-10-2020 a las 14:06:05
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
  `activa` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `task`
--

INSERT INTO `task` (`id`, `fuec`, `name`, `apellido`, `description`, `contratante`, `objetocontrato`, `cc`, `origen`, `recorrido`, `activa`) VALUES
(1, '', '', '', '', '', '', 0, '', '', 'activo'),
(3, '4546', '4545', '4545', '4546', 'Miguel', '45454', 4545, '4545', '4545', 'activo'),
(4, '252525', '25252', '52525', '252525', '25252', '5252', 5252, '5252', '5252', 'inactivo'),
(5, '020202', '0202', '0202', '02020', '20202', '02020', 2020, '202020', '2020', 'inactivo'),
(6, '333666', '333', '333', '333', '333', '333', 333, '333', '333', 'inactivo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
