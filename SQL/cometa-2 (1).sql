-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-11-2018 a las 03:34:20
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
  `naveStatus` int(11) NOT NULL,
  `nave_usuarioCodigo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
(2, 'Ingenieria', 'Ingenieria.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto`
--

CREATE TABLE `puesto` (
  `codigoPuesto` int(11) NOT NULL,
  `codigoNombre` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `puesto`
--

INSERT INTO `puesto` (`codigoPuesto`, `codigoNombre`) VALUES
(1, '1'),
(2, '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `reportesCodigo` int(11) NOT NULL,
  `reportesFechaInicio` date NOT NULL,
  `reportesFechafin` date NOT NULL,
  `reportesDescripcion` varchar(30) NOT NULL,
  `reportes_usuarioCodigo` int(11) NOT NULL
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
  `usuarioContrasena` varchar(30) NOT NULL,
  `usuarioNombre` varchar(30) NOT NULL,
  `usuarioApellido` varchar(30) NOT NULL,
  `usuarioHabilitado` varchar(35) NOT NULL,
  `usuario_NaveCodigo` int(11) DEFAULT NULL,
  `capitan_UsuarioCodigo` int(11) DEFAULT NULL,
  `capitan_UsuarioInvitacion` int(11) DEFAULT NULL,
  `usuarioLogIn` varchar(30) NOT NULL,
  `usuarioFnacimiento` date DEFAULT NULL,
  `usuarioFoto` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuarioCodigo`, `usuarioContrasena`, `usuarioNombre`, `usuarioApellido`, `usuarioHabilitado`, `usuario_NaveCodigo`, `capitan_UsuarioCodigo`, `capitan_UsuarioInvitacion`, `usuarioLogIn`, `usuarioFnacimiento`, `usuarioFoto`) VALUES
(1, '5656', 'Brenda', 'Avila', '1', 1, 2, 1, 'BrendaSamant', '1970-01-01', '26198264_10156075507395152_8703556990294131697_o.jpg'),
(2, 'carlos', 'Carlos Alejandro', 'Rosales Celis', '1', 1, 1, 1, 'carlos', '1997-11-26', 'defecto'),
(3, '1', '2', '3', '4', NULL, NULL, NULL, '5', '1950-01-01', NULL),
(4, '0', '20', '20', 'habilitado', NULL, NULL, NULL, '2', '1970-01-01', NULL),
(5, '123456', 'diana', 'camacho', 'habilitado', NULL, NULL, NULL, 'user2', '1970-01-01', NULL);

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
  ADD PRIMARY KEY (`codigoPuesto`);

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
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuarioCodigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
