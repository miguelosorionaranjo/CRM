-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 05-12-2020 a las 16:29:48
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
-- Estructura de tabla para la tabla `campana`
--

CREATE TABLE IF NOT EXISTS `campana` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombrec` varchar(100) DEFAULT NULL,
  `buscadorvivo` varchar(50) DEFAULT NULL,
  `tipoc` varchar(50) DEFAULT NULL,
  `webc` varchar(100) DEFAULT NULL,
  `estadoc` varchar(20) DEFAULT NULL,
  `descripcionc` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `campana`
--

INSERT INTO `campana` (`id`, `nombrec`, `buscadorvivo`, `tipoc`, `webc`, `estadoc`, `descripcionc`) VALUES
(1, 'Ontabebe', '', 'Relaciones Publicas', 'http://localhost/FasePiGroup/CRM/', 'Activa', 'http://localhost/FasePiGroup/CRM/'),
(2, 'Ontabebe', 'Fase Pi GroupÂ fdfdfd', 'Webinar', 'http://localhost/FasePiGroup/CRM/', 'Inactiva', 'http://localhost/FasePiGroup/CRM/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE IF NOT EXISTS `marca` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre2` varchar(50) DEFAULT NULL,
  `estadom` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id`, `nombre2`, `estadom`) VALUES
(1, 'Fase Pi Group', NULL),
(2, 'Intetron', NULL),
(3, 'MegafonÃ­a', NULL),
(4, 'Intetron Servicios', NULL),
(12, 'Miguel', NULL),
(18, 'Localizacion', NULL),
(19, 'Localizacion', 'Inactiva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oportunidad`
--

CREATE TABLE IF NOT EXISTS `oportunidad` (
  `id_opor` int(11) NOT NULL AUTO_INCREMENT,
  `nombreopor` varchar(50) DEFAULT NULL,
  `nombreorg` varchar(100) DEFAULT NULL,
  `nombrecon` varchar(100) DEFAULT NULL,
  `importe` int(11) DEFAULT NULL,
  `tipoopor` varchar(20) DEFAULT NULL,
  `fechac` date DEFAULT NULL,
  `origenpc` varchar(50) DEFAULT NULL,
  `co` varchar(100) DEFAULT NULL,
  `fv` varchar(50) DEFAULT NULL,
  `pro` int(11) DEFAULT NULL,
  `buscadorvivo2` varchar(100) DEFAULT NULL,
  `sp` varchar(50) DEFAULT NULL,
  `descrip_o` varchar(200) DEFAULT NULL,
  `fechaco` date DEFAULT NULL,
  `eo` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_opor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `oportunidad`
--

INSERT INTO `oportunidad` (`id_opor`, `nombreopor`, `nombreorg`, `nombrecon`, `importe`, `tipoopor`, `fechac`, `origenpc`, `co`, `fv`, `pro`, `buscadorvivo2`, `sp`, `descrip_o`, `fechaco`, `eo`) VALUES
(1, 'Hola Mundo', 'Hola Mundo', 'SrÂ AlexÂ Gonzalez', 54, 'Nuevo Negocio', '2020-12-07', 'Sitio Web', 'Hola Mundo', 'Negocio Existente', 4, 'CaroÂ Barato', 'Cerrar Compra', '454545', '2020-12-05', 'Activa'),
(2, 'Hola Mundo2', 'Hola Mundo2', 'SrÂ JaimeÂ Ochoa', 32, 'Nuevo Negocio', '2020-12-12', 'Base de Datos', 'Hola Mundo', 'Cerrada-Ganada', 52, 'MiguelÂ Osorio', 'Enviar CotizaciÃ³n', 'Hola mundo', '2020-12-05', 'Activa'),
(3, 'HakunaMatata', 'TimÃ³n y Pumba', 'SrÂ MiguelÂ Osorio', 43, 'Negocio Existente', '2020-12-08', 'Sitio Web', 'Hola Mundo', 'Cerrada-Ganada', 4, 'CaroÂ Barato', 'Enviar CotizaciÃ³n', '44', '2020-12-05', 'Activa');

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
  `celular` varchar(15) DEFAULT NULL,
  `correop` varchar(50) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcado de datos para la tabla `precontacto`
--

INSERT INTO `precontacto` (`id`, `gender`, `nombre`, `apellido`, `principal`, `celular`, `correop`, `cargo`, `origen`, `pais`, `departamento`, `ciudad`, `pagina`, `empresa`, `industria`, `direccion`, `ps`, `buscadormarca`, `buscadorvivo`, `precontacto`, `descripcion`, `fecha`, `fechamod`) VALUES
(1, 'Sr', 'Miguel', 'Osorio', 66666, '45454654', '', 'Desarrollador Web', '', 'Colombia', 'Dr', 'Dr', 'http://localhost/php-ajax-master/CRM/index.php', 'Fase Pi Group', 'Sr', 'Barrio Castilla', 'Sr', 'Fase Pi Group', 'MiguelOsorio', 'Nuevo', 'Nuevo ingreso. si', '2020-11-23', '0000-00-00'),
(11, 'Sra', 'Miguel', 'Medina', 0, '0', '', 'Hola', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00'),
(13, 'Sr', 'Alex', 'Gonzalez', 123456456, '123123456', '', 'Desarrollador Web', 'Rusia', 'Colombia', 'Sra', 'Sr', 'http://localhost/FasePiGroup/CRM/', 'Fase Pi Group', 'Srita', 'Bogota', 'Intetron', 'Intetron', 'FelipeÂ Medina', 'Nuevo', 'fsdfsdfsdfs', '2020-11-27', '0000-00-00'),
(18, 'Sr', 'Jaime', 'Ochoa', 789789, '78978', '', 'Web', 'Base de Datos', 'Mexico', 'Srita', 'Srita', 'http://localhost/php-ajax-master/CRM/index.php', 'Fase Pi Group', 'Srita', 'fdgdfgdfg', 'Intetron', 'Intetron', 'JuanÂ Medina', 'Intentando Contactar', 'gdfgdfgd', '2020-11-27', '0000-00-00'),
(19, 'Sra.', '', '', 0, '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-12-04', '0000-00-00'),
(20, 'Sra.', 'Miguel', 'fdfdfd', 66666, '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-12-04', '0000-00-00'),
(21, 'Sra.', 'Miguel', 'fdfdfd', 315245, '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2020-12-04', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `codigo` int(11) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `iva` int(11) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `proveedor` varchar(100) DEFAULT NULL,
  `imagen` longblob,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `name`, `codigo`, `precio`, `iva`, `cantidad`, `categoria`, `proveedor`, `imagen`) VALUES
(1, '', 0, 0, 0, 0, '', '', 0x313630363832393531392e),
(2, '', 0, 0, 0, 0, '', '', 0x313630363832393636352e),
(3, '', 0, 0, 0, 0, '', '', 0x313630363932383336372e);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre3` varchar(20) DEFAULT NULL,
  `apellido3` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre3`, `apellido3`) VALUES
(1, 'nombre1', 'apellido1'),
(2, 'nombre2', 'apellido12'),
(3, 'nombre3', 'apellido3'),
(4, 'nombre123', 'apellido1'),
(5, 'Miguel', 'Osorio'),
(6, 'pepe', 'pepepe'),
(7, 'Caro', 'Barato'),
(8, '', ''),
(9, '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
