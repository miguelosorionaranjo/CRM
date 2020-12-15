-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 15-12-2020 a las 19:42:33
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
  `idc` int(11) NOT NULL AUTO_INCREMENT,
  `nombrec` varchar(100) DEFAULT NULL,
  `buscadorvivo` varchar(50) DEFAULT NULL,
  `tipoc` varchar(50) DEFAULT NULL,
  `webc` varchar(100) DEFAULT NULL,
  `estadoc` varchar(20) DEFAULT NULL,
  `descripcionc` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idc`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `campana`
--

INSERT INTO `campana` (`idc`, `nombrec`, `buscadorvivo`, `tipoc`, `webc`, `estadoc`, `descripcionc`) VALUES
(1, 'Ontabebe', '', 'Relaciones Publicas', 'http://localhost/FasePiGroup/CRM/', 'Inactiva', 'http://localhost/FasePiGroup/CRM/'),
(2, 'Ontabebe', 'Fase Pi GroupÂ fdfdfd', 'Webinar', 'http://localhost/FasePiGroup/CRM/', 'Activa', 'http://localhost/FasePiGroup/CRM/'),
(3, 'Ontabebe 2.0', 'nombre1Â apellido1', 'Feria', 'http://localhost/FasePiGroup/CRM/', 'Activa', 'dsdfsdfsdfs');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `oportunidad`
--

INSERT INTO `oportunidad` (`id_opor`, `nombreopor`, `nombreorg`, `nombrecon`, `importe`, `tipoopor`, `fechac`, `origenpc`, `co`, `fv`, `pro`, `buscadorvivo2`, `sp`, `descrip_o`, `fechaco`, `eo`) VALUES
(1, 'Hola Mundo', 'Hola Mundo', 'SrÂ AlexÂ Gonzalez', 54, 'Nuevo Negocio', '2020-12-07', 'Sitio Web', 'Hola Mundo', 'Negocio Existente', 4, 'CaroÂ Barato', 'Cerrar Compra', '454545', '2020-12-05', 'Activa'),
(2, 'Hola Mundo2', 'Hola Mundo2', 'SrÂ JaimeÂ Ochoa', 32, 'Nuevo Negocio', '2020-12-12', 'Base de Datos', 'Hola Mundo', 'Cerrada-Ganada', 52, 'MiguelÂ Osorio', 'Enviar CotizaciÃ³n', 'Hola mundo', '2020-12-05', 'Inactiva'),
(3, 'HakunaMatata', 'TimÃ³n y Pumba', 'SrÂ MiguelÂ Osorio', 43, 'Negocio Existente', '2020-12-08', 'Sitio Web', 'Hola Mundo', 'Cerrada-Ganada', 4, 'CaroÂ Barato', 'Enviar CotizaciÃ³n', '44', '2020-12-05', 'Activa'),
(4, 'HakunaMatata3', 'TimÃ³n y Pumba3', 'SrÂ JaimeÂ Ochoa', 4, 'Negocio Existente', '2020-12-18', 'Sitio Web', 'Hola Mundo', 'CotizaciÃ³n', 4, 'MiguelÂ Osorio', 'Enviar CotizaciÃ³n', '444', '2020-12-05', 'Activa');

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
  `buscadorp` varchar(100) DEFAULT NULL,
  `precontacto` varchar(50) DEFAULT NULL,
  `descripcion` varchar(200) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `fechamod` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Volcado de datos para la tabla `precontacto`
--

INSERT INTO `precontacto` (`id`, `gender`, `nombre`, `apellido`, `principal`, `celular`, `correop`, `cargo`, `origen`, `pais`, `departamento`, `ciudad`, `pagina`, `empresa`, `industria`, `direccion`, `ps`, `buscadormarca`, `buscadorp`, `precontacto`, `descripcion`, `fecha`, `fechamod`) VALUES
(1, 'Srita.', 'Carol', 'Gimenez', 54654654, '654654654', 'miguelosorionaranjo@gmail.com', 'Desarrollador Web', 'Pagina Web', 'Mexico', '', '', 'http://localhost/php-ajax-master/CRM/index.php', 'Fase Pi Group', 'Sra', 'Botoga', 'Intetron', 'Intetron', 'MiguelÂ Osorio', 'Contactados Chat', 'hola mundo', '2020-12-15', '2020-12-15'),
(11, 'Srita.', 'Miguel', 'Medina', 213230, '32320320', 'miguelosorionaranjo@gmail.com', 'Hola', 'Base de Datos', 'Mexico', 'Sra', 'Sra.', 'http://localhost/php-ajax-master/CRM/index.php', 'Fase Pi Group', 'Sra', '1615652651', 'Intetron', 'Intetron Servicios', 'CaroÂ Barato', 'No Interesado', '226226', '0000-00-00', '0000-00-00'),
(13, 'Sra.', 'Alex', 'Gonzalez', 123456456, '12312345', 'miguelosorionaranjo@gmail.com', 'Desarrollador Web', 'Base de Datos', 'Colombia', 'Sra', 'Sra.', 'http://localhost/FasePiGroup/CRM/', 'Fase Pi Group', 'Srita', 'Bogota', 'Intetron', 'Intetron', 'MiguelÂ Osorio', 'Nuevo', 'fsdfsdfsdfs', '2020-11-27', '2020-12-15'),
(18, 'Srita.', 'Jaime', 'Ochoa', 789789, '3334445212', 'miguelosorionaranjo@gmail.com', 'Web', 'Base de Datos', 'Mexico', 'Srita', 'Srita.', 'http://localhost/php-ajax-master/CRM/index.php', 'Fase Pi Group', 'Srita', 'fdgdfgdfg', 'Intetron', 'Intetron', '', 'Intentando Contactar', 'gdfgdfgd', '2020-11-27', '0000-00-00'),
(22, 'Sr.', 'Juan', 'Medina', 315245, '45454654', 'miguelosorionaranjo@gmail.com', 'Desarrollador Web', 'Sitio Web', 'Peru', 'Srita', 'Srita.', 'http://localhost/php-ajax-master/CRM/index.php', 'Fase Pi Group', 'Dr', 'colombia', 'Intetron', 'Intetron', '', 'No Interesado', 'sdsdssdsd', '2020-12-15', '2020-12-15'),
(23, 'Srita.', 'Jaime', 'Ochoa', 315245, '45454654', 'miguelosorionaranjo@gmail.com', 'Desarrollador Web', 'Base de Datos', 'Mexico', 'Srita', 'Srita.', 'http://localhost/php-ajax-master/CRM/index.php', 'Fase Pi Group', 'Sra', 'buscadorvivo', 'Intetron', 'Intetron', '', 'Contactados Chat', 'sdvsdvsd', '2020-12-15', '0000-00-00'),
(26, 'Ing.', 'Miguel', 'Osorio', 315245, '45454654', 'miguelosorionaranjo@gmail.com', 'Desarrollador Web', 'Sitio Web', 'Mexico', 'Srita', 'Sra.', 'http://localhost/php-ajax-master/CRM/index.php', 'Fase Pi Group', 'Sra', 'sdsdsdsd', 'Intetron', 'Intetron', 'MiguelÂ Osorio', 'No Interesado', 'ssdsdsdsdsds', '2020-12-15', '2020-12-15');

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
  `total` double NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `categoria` varchar(100) DEFAULT NULL,
  `proveedor` varchar(100) DEFAULT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `name`, `codigo`, `precio`, `iva`, `total`, `cantidad`, `categoria`, `proveedor`, `imagen`) VALUES
(1, '', 0, 0, 0, 0, 0, '', '', '1606829519.'),
(2, '', 0, 0, 0, 0, 0, '', '', '1606829665.'),
(3, '', 0, 0, 0, 0, 0, '', '', '1606928367.'),
(4, '5', 5, 5, 5, 0, 5, 'Software', 's', ''),
(5, '', 0, 0, 0, 0, 0, '', '', '1607719675.'),
(6, '3', 3, 3, 3, 0, 3, 'Software', '3', '1607719856.'),
(7, '', 0, 0, 0, 0, 0, '', '', '1607722080.'),
(8, '33', 33, 33, 33, 0, 33, 'Software', '33', '1607722210.'),
(9, '', 0, 0, 0, 0, 0, '', '', '1607722376.'),
(10, '', 0, 0, 0, 0, 0, '', '', '1607722423.'),
(11, '', 0, 0, 0, 0, 0, '', '', ''),
(12, '', 0, 0, 0, 0, 0, '', '', '1607722815.'),
(13, '', 0, 0, 0, 0, 0, '', '', '1607959104.'),
(14, '', 0, 0, 0, 0, 0, '', '', '1607959923.'),
(15, '', 0, 0, 0, 0, 0, '', '', '1607959994.'),
(16, '', 0, 0, 0, 0, 0, '', '', '1607960844.'),
(17, 'Fasepi', 999, 5, 99, 669, 99, 'Hardware', '3', '1607961205.'),
(18, '', 0, 0, 0, 0, 0, '', '', '1607961276.'),
(19, '', 0, 0, 0, 0, 0, '', '', '1607961326.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre3` varchar(20) DEFAULT NULL,
  `apellido3` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

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
(10, 'nombre23', 'apellido1'),
(11, 'nombre2', 'apellido23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
