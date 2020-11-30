-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-11-2020 a las 14:09:42
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `crm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre2` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `nombre2`) VALUES
(1, 'Fase Pi Group'),
(2, 'Intetron'),
(3, 'MegafonÃ­a'),
(4, 'Intetron Servicios'),
(12, 'Miguel'),
(13, ''),
(14, ''),
(15, ''),
(16, ''),
(17, 'sddsdsdsdsd'),
(18, 'Localizacion');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precontacto`
--

CREATE TABLE IF NOT EXISTS `precontacto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gender` varchar(15) DEFAULT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL,
  `principal` int(11) DEFAULT NULL,
  `celular` int(11) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `origen` varchar(50) NOT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `departamento` varchar(100) DEFAULT NULL,
  `ciudad` varchar(100) DEFAULT NULL,
  `pagina` varchar(100) DEFAULT NULL,
  `empresa` varchar(100) DEFAULT NULL,
  `industria` varchar(100) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `ps` varchar(200) DEFAULT NULL,
  `buscadormarca` varchar(100) DEFAULT NULL,
  `buscadorvivo` varchar(100) DEFAULT NULL,
  `precontacto` varchar(50) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `fechamod` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcado de datos para la tabla `precontacto`
--

INSERT INTO `precontacto` (`id`, `gender`, `nombre`, `apellido`, `principal`, `celular`, `cargo`, `origen`, `pais`, `departamento`, `ciudad`, `pagina`, `empresa`, `industria`, `direccion`, `ps`, `buscadormarca`, `buscadorvivo`, `precontacto`, `descripcion`, `fecha`, `fechamod`) VALUES
(1, 'Sr', 'Miguel', 'Osorio', 66666, 45454654, 'Desarrollador Web', '', 'Colombia', 'Dr', 'Dr', 'http://localhost/php-ajax-master/CRM/index.php', 'Fase Pi Group', 'Sr', 'Barrio Castilla', 'Sr', 'Fase Pi Group', 'MiguelOsorio', 'Nuevo', 'Nuevo ingreso. si', '2020-11-23', '0000-00-00'),
(3, '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '0', '0', '', '', '2020-11-23', '0000-00-00'),
(5, '', '', '', 0, 0, '', '', 'Srita', '', '', '', '', '', '', '', '', '', '', '', '2020-11-25', '0000-00-00'),
(11, 'Sra', 'Miguel', 'Medina', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(12, '', '', '', 0, 0, '', 'Web', '', '', '', '', '', '', '', '', '', '', '', '', '2020-11-25', '0000-00-00'),
(13, 'Sr', '', '', 123456456, 123123456, 'Desarrollador Web', 'Rusia', 'Colombia', 'Sra', 'Sr', 'http://localhost/FasePiGroup/CRM/', 'Fase Pi Group', 'Srita', 'Bogota', 'Intetron', 'Intetron', 'FelipeÂ Medina', 'Nuevo', 'fsdfsdfsdfs', '2020-11-27', '0000-00-00'),
(14, '', '', '', 0, 0, '', 'Mexico', '', '', '', '', '', '', '', '', '', '', '', '', '2020-11-27', '0000-00-00'),
(15, '', '', '', 0, 0, '', 'Referido', '', '', '', '', '', '', '', '', '', '', '', '', '2020-11-27', '0000-00-00'),
(16, '', '', '', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-11-27', '0000-00-00'),
(17, 'Sra', 'Miguel', 'Osorio', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-11-27', '0000-00-00'),
(18, 'Sr', 'Jaime', 'Ochoa', 789789, 78978, 'Web', 'Base de Datos', 'Mexico', 'Srita', 'Srita', 'http://localhost/php-ajax-master/CRM/index.php', 'Fase Pi Group', 'Srita', 'fdgdfgdfg', 'Intetron', 'Intetron', 'JuanÂ Medina', 'Intentando Contactar', 'gdfgdfgd', '2020-11-27', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `codigo` int(11) DEFAULT NULL,
  `precio` decimal(10,0) DEFAULT NULL,
  `iva` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `proveedor` varchar(100) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `name`, `codigo`, `precio`, `iva`, `cantidad`, `categoria`, `proveedor`, `foto`) VALUES
(1, '', 45645, '456', 19, 50, 'Hardware', 'Fase Pi ', 'C:fakepathcomputer-icons-avatar-user-login-avatar.jpg'),
(2, '', 213312, '323', 23, 23, 'Software', 'Fase Pi ', 'C:fakepathFirma miguel (1).jpg'),
(3, '', 3233, '23233', 32, 2323, 'Hardware', 'Fase Pi ', 'C:fakepathFirma miguel (1).jpg'),
(4, '', 0, '0', 0, 0, '', '', ''),
(5, '', 32, '12', 15, 50, 'Software', 'Fase Pi ', 'C:fakepathcomputer-icons-avatar-user-login-avatar.jpg'),
(6, '', 0, '0', 0, 0, '', '', ''),
(7, '', 465, '12', 19, 60, 'Software', 'Fase Pi ', 'C:fakepathcomputer-icons-avatar-user-login-avatar.jpg'),
(8, '', 0, '0', 0, 0, '', '', ''),
(9, '', 0, '0', 0, 0, '', '', ''),
(10, '', 0, '0', 0, 0, '', '', ''),
(11, '', 323, '232', 32, 23, 'Hardware', 'Fase Pi ', ''),
(12, '', 33, '32', 3, 23, 'Software', 'Fase Pi ', 'C:fakepathcomputer-icons-avatar-user-login-avatar.jpg'),
(13, '', 999, '99', 9, 99, 'Software', 'Fase Pi ', 'C:fakepathcomputer-icons-avatar-user-login-avatar.jpg'),
(14, 'Fasepi', 33, '3', 3, 3, 'Hardware', 'Fase Pi ', ''),
(15, 'Fasepi', 999, '99', 99, 9, 'Software', 'Fase Pi ', 'C:fakepathcomputer-icons-avatar-user-login-avatar.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre3` varchar(20) DEFAULT NULL,
  `apellido3` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre3`, `apellido3`) VALUES
(1, 'Miguel', 'Osorio'),
(2, 'Juan', 'Perez'),
(3, 'Felipe', 'Medina'),
(5, 'Juan', 'Medina'),
(7, 'Maria', 'Gomez'),
(9, 'Laura', 'Gamez'),
(10, 'pepe', 'perez'),
(12, 'Fase Pi Group', 'fdfdfd'),
(13, 'Juan', 'Peralta'),
(14, 'ggg', 'ggg'),
(15, 'Alex', 'Gonzalez'),
(16, 'Miguel', 'Miguel');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
