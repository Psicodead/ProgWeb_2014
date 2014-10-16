-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-10-2014 a las 20:44:36
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `taller_2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrocompras`
--

CREATE TABLE IF NOT EXISTS `carrocompras` (
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `producto` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `carrocompras`
--

INSERT INTO `carrocompras` (`usuario`, `producto`, `fecha`) VALUES
('camilo', 'cuaderno 1', '2014-10-17'),
('ramon', 'cuaderno 1', '2014-12-17'),
('ramon', 'cuaderno 2', '2014-12-17'),
('paula', 'cuaderno 2', '2014-12-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comprausuario`
--

CREATE TABLE IF NOT EXISTS `comprausuario` (
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `articulo` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `comprausuario`
--

INSERT INTO `comprausuario` (`usuario`, `articulo`, `fecha`) VALUES
('ramon', 'cuaderno 1', '2014-10-16'),
('ramon', 'cuaderno 2', '2014-10-16'),
('ramon', 'cuaderno 2', '2014-10-10'),
('ramon', 'cuaderno 2', '2014-10-10'),
('ramon', 'cuaderno 2', '2014-10-10'),
('ramon', 'cuaderno 2', '2014-10-10'),
('ramon', 'cuaderno 2', '2014-10-10'),
('ramon', 'cuaderno 1', '2011-12-14'),
('ramon', 'cuaderno 2', '2011-12-14'),
('paula', 'cuaderno 2', '2014-12-17'),
('paula', 'cuaderno 1', '2014-12-17'),
('paula', 'cuaderno 1', '2014-12-17'),
('paula', 'cuaderno 1', '2014-12-17'),
('paula', 'cuaderno 1', '2014-12-17'),
('paula', 'cuaderno 1', '2014-12-17'),
('paula', 'cuaderno 1', '2014-12-17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `producto` text COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `precio` int(255) NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `cantComprada` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`producto`, `descripcion`, `precio`, `imagen`, `cantComprada`) VALUES
('cuaderno 1', 'Cuaderno a rayas con lomo rojo oscuro.', 10000, 'img/cuad_1.jpg', 8),
('cuaderno 2', 'Cuaderno en blanco\r\ntexturizado de arbol, portada negra.', 5000, 'img/cuad_2.jpg', 8),
('cuaderno 3', 'Cuaderno edicion limitada hojas cuadriculadas ', 8000, 'img/cuad_3.jpg', 0),
('cuaderno 4', 'Cuaderno edicion limitada hojas cuadriculadas ', 5000, 'img/cuad_4.jpg', 0),
('cuaderno 5', 'Cuaderno personalizado de edicion limitada con hojas a rayas', 7500, 'img/cuad_5.jpg', 0),
('cuaderno 6', 'Cuaderno personalizado de edicion limitada con hojas a rayas', 4000, 'img/cuad_6.jpg', 0),
('cuaderno 7', 'Cuaderno personalizado de edicion limitada con hojas a rayas con portada roja y banda elastica', 11000, 'img/cuad_7.jpg', 0),
('cuaderno 8', 'Cuaderno con portada de madera con motivos decorativos y hojas en blanco.', 12000, 'img/cuad_8.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` text COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `correo`, `contrasena`) VALUES
('camilo', 'camilo@correo.com', 'camilo123'),
('ramon', 'ramon@correo.com', 'ramon123'),
('julian', 'julian@correo.com', 'contrasena'),
('andres', 'andres@correo.com', '12345'),
('fabio', 'fabio.correo', '123'),
('paula', 'paula@correo.com', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
