-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-10-2018 a las 04:48:35
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
-- Estructura de tabla para la tabla `puesto`
--

CREATE TABLE `puesto` (
  `codigoPuesto` int(11) NOT NULL,
  `codigoNombre` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `usuarioContraseña` varchar(30) NOT NULL,
  `usuarioNombre` varchar(30) NOT NULL,
  `usuarioApellido` varchar(30) NOT NULL,
  `usuarioHabilitado` int(11) NOT NULL,
  `usuario_NaveCodigo` int(11) NOT NULL,
  `capitan_UsuarioCodigo` int(11) NOT NULL,
  `capitan_UsuarioInvitacion` int(11) NOT NULL,
  `usuarioLogIn` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
