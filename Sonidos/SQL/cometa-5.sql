-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2018 a las 03:26:59
-- Versión del servidor: 5.7.14
-- Versión de PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cometa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulos`
--

CREATE TABLE `articulos` (
  `articulosCodigo` int(11) NOT NULL,
  `articulosNombre` varchar(30) NOT NULL,
  `articulosTexto` text NOT NULL,
  `articulosFecha` date NOT NULL,
  `articulosCategoria` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `misiones`
--

CREATE TABLE `misiones` (
  `misionesCodigo` int(11) NOT NULL,
  `misionesFecha` date NOT NULL,
  `misionesDescripcion` text NOT NULL,
  `misionesStatus` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nave`
--

CREATE TABLE `nave` (
  `naveCodigo` int(11) NOT NULL,
  `naveAlias` varchar(30) NOT NULL,
  `naveDescripcion` text NOT NULL,
  `naveStatus` varchar(50) DEFAULT NULL COMMENT 'habilitada o No',
  `nave_usuarioCodigo` int(11) DEFAULT NULL,
  `EnMision` tinyint(1) DEFAULT '0' COMMENT 'Indica si esta en mision o no',
  `naveFoto` varchar(100) NOT NULL DEFAULT 'defecto'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nave`
--

INSERT INTO `nave` (`naveCodigo`, `naveAlias`, `naveDescripcion`, `naveStatus`, `nave_usuarioCodigo`, `EnMision`, `naveFoto`) VALUES
(1, 'La rapida', 'Especial para misiones de investigación, su gran rapidez permite aprovechar al maximo tiempo.', 'Habilitada', 1, 0, 'defecto'),
(2, 'Interstellar', 'Increible, rápida y confiable.\r\n', 'Averiada', 1, 0, 'defecto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nombrespuestos`
--

CREATE TABLE `nombrespuestos` (
  `Puestos_codigoPuesto` int(11) NOT NULL,
  `nombrePuestos` varchar(30) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nombrespuestos`
--

INSERT INTO `nombrespuestos` (`Puestos_codigoPuesto`, `nombrePuestos`, `link`) VALUES
(1, 'Capitan', 'Capitan.php'),
(2, 'Ingenieria', 'Ingenieria.php'),
(3, 'Comandante', 'Comandante.php'),
(4, 'Investigador', 'Investigador.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto`
--

CREATE TABLE `puesto` (
  `codigoPuesto` int(11) NOT NULL,
  `codigoUsuario` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puesto`
--

INSERT INTO `puesto` (`codigoPuesto`, `codigoUsuario`) VALUES
(1, '1'),
(1, '139'),
(1, '142'),
(2, '143'),
(2, '146'),
(2, '147'),
(2, '2'),
(3, '144'),
(3, '145'),
(5, '5'),
(25, '12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `reportesCodigo` int(11) NOT NULL,
  `reportesFechaInicio` date NOT NULL,
  `reportesFechafin` date DEFAULT NULL,
  `reportesDescripcion` varchar(30) NOT NULL,
  `reportes_usuarioCodigo` int(11) NOT NULL,
  `reportes_codigoNave` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `revision`
--

CREATE TABLE `revision` (
  `revisionAceptacion` int(11) NOT NULL,
  `revisionNotas` text NOT NULL,
  `revision_usuarioCodigo` int(11) NOT NULL,
  `revision_reportesCodigo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuarioCodigo` int(11) NOT NULL,
  `usuarioContrasena` varchar(30) NOT NULL COMMENT 'adsad',
  `usuarioNombre` varchar(30) NOT NULL,
  `usuarioApellido` varchar(30) NOT NULL,
  `usuarioGenero` varchar(15) NOT NULL,
  `contratacion` date DEFAULT NULL,
  `usuarioHabilitado` varchar(35) NOT NULL,
  `usuario_NaveCodigo` int(11) DEFAULT NULL COMMENT 'Codigo de la nave a la que pertenece',
  `capitan_UsuarioCodigo` int(11) DEFAULT NULL COMMENT 'codigo de su actual capitan',
  `capitan_UsuarioInvitacion` int(11) DEFAULT NULL COMMENT '0-No acepto invitacion 1-Acepto invitacion 2-EsperaRes',
  `usuarioLogIn` varchar(30) NOT NULL,
  `usuarioFnacimiento` date DEFAULT NULL,
  `usuarioFoto` varchar(100) DEFAULT 'defecto'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuarioCodigo`, `usuarioContrasena`, `usuarioNombre`, `usuarioApellido`, `usuarioGenero`, `contratacion`, `usuarioHabilitado`, `usuario_NaveCodigo`, `capitan_UsuarioCodigo`, `capitan_UsuarioInvitacion`, `usuarioLogIn`, `usuarioFnacimiento`, `usuarioFoto`) VALUES
(147, 'carlos2', 'Carlos', 'Cervera', 'Masculino', '2018-12-07', 'habilitado', NULL, NULL, NULL, 'carlos2', '2018-12-06', 'defecto'),
(146, 'carlos', 'Carlos', 'Rosales Celis', 'Masculino', '2015-06-25', 'habilitado', NULL, NULL, NULL, 'carlos', '1997-11-26', 'defecto'),
(145, 'Mor', 'IvÃ¡n', 'Morett', 'Masculino', '2018-12-07', 'habilitado', NULL, NULL, NULL, 'Mor', '2018-12-06', '19807613_1606883362656150_1879608504_o.jpg'),
(1, 'brenda', 'brenda', 'avila  de la Torre', 'Femenino', '2018-12-13', '1', NULL, NULL, NULL, 'BrendaSamant', '2018-05-13', '19866999_1609135329097620_858022904_o.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulos`
--
ALTER TABLE `articulos`
  ADD PRIMARY KEY (`articulosCodigo`);

--
-- Indices de la tabla `misiones`
--
ALTER TABLE `misiones`
  ADD PRIMARY KEY (`misionesCodigo`);

--
-- Indices de la tabla `nave`
--
ALTER TABLE `nave`
  ADD PRIMARY KEY (`naveCodigo`),
  ADD KEY `nave_usuarioCodigo` (`nave_usuarioCodigo`),
  ADD KEY `nave_usuarioCodigo_2` (`nave_usuarioCodigo`);

--
-- Indices de la tabla `puesto`
--
ALTER TABLE `puesto`
  ADD PRIMARY KEY (`codigoPuesto`,`codigoUsuario`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`reportesCodigo`);

--
-- Indices de la tabla `revision`
--
ALTER TABLE `revision`
  ADD PRIMARY KEY (`revisionAceptacion`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuarioCodigo`),
  ADD UNIQUE KEY `usuarioLogIn` (`usuarioLogIn`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `reportesCodigo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuarioCodigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
