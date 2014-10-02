-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2014 a las 18:39:50
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `photography`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dislikes`
--

CREATE TABLE IF NOT EXISTS `dislikes` (
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `post` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `favoritos`
--

CREATE TABLE IF NOT EXISTS `favoritos` (
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `post` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`usuario`, `post`) VALUES
('2', 1),
('2', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `post` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `likes`
--

INSERT INTO `likes` (`usuario`, `post`) VALUES
('1', 1),
('1', 2),
('2', 1),
('3', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE IF NOT EXISTS `publicaciones` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `contenido` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` text COLLATE utf8_spanish_ci NOT NULL,
  `titulo` text COLLATE utf8_spanish_ci NOT NULL,
  `idAutor` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`id`, `contenido`, `imagen`, `titulo`, `idAutor`) VALUES
(1, 'este es el primer articulo que voy a crear, es algo muy chevere y no importa que pase siempre estara lleno, wooooooooooooooo, y ahora crtl+c, crtl+v, crtl+c, crtl+v, crtl+c, crtl+v, crtl+c, crtl+v, crtl+c, crtl+v, crtl+c, crtl+v, crtl+c, crtl+v, crtl+c, crtl+v, crtl+c, crtl+v, crtl+c, crtl+v, crtl+c, crtl+v,', 'img/article_image.png	', 'My primer articulo', 4),
(2, 'este es el segundo articulo que voy a crear, es algo muy chevere y no importa que pase siempre estara lleno, wooooooooooooooo, y ahora este si es corto', 'img/article_image.png', 'My segundo Articulo', 1),
(3, 'este es el primer articulo que voy a crear, es algo muy chevere y no importa que pase siempre estara lleno, wooooooooooooooo, y ahora crtl+c, crtl+v, crtl+c, crtl+v, crtl+c, crtl+v, crtl+c, crtl+v, crtl+c, crtl+v, crtl+c, crtl+v, crtl+c, crtl+v, crtl+c, crtl+v, crtl+c, crtl+v, crtl+c, crtl+v, crtl+c, crtl+v,', 'img/article_image.png	', 'My primer articulo', 2),
(4, 'este es el segundo articulo que voy a crear, es algo muy chevere y no importa que pase siempre estara lleno, wooooooooooooooo, y ahora este si es corto', 'img/article_image.png', 'My segundo Articulo', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` text COLLATE utf8_spanish_ci NOT NULL,
  `idUsuario` int(255) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `contrasena`, `idUsuario`) VALUES
('camilo', '11111', 1),
('andres', '2121', 2),
('mi usuario 3', 'aaaaa', 3),
('otro usuario', 'asdad', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
