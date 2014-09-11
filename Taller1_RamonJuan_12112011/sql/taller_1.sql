-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2014 a las 19:19:42
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `taller_1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE IF NOT EXISTS `tareas` (
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `creacion` date NOT NULL,
  `finalizacion` date NOT NULL,
  `prioridad` int(255) NOT NULL,
  `idtarea` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`descripcion`, `creacion`, `finalizacion`, `prioridad`, `idtarea`) VALUES
('Tarea prueba 1', '2014-09-10', '2014-09-11', 2, 1),
('Tarea prueba 2', '2014-09-10', '2014-09-11', 2, 1),
('tarea urgente', '2014-09-10', '2014-09-13', 1, 1),
('tarea misma fecha prioridad', '2014-09-10', '2014-09-13', 1, 1),
('la tarea asignada', '2014-09-11', '0000-00-00', 0, 2),
('la otra tarea asignada', '2014-09-11', '0000-00-00', 0, 2),
('tarea asignada', '2014-09-11', '2014-09-12', 1, 2),
('Hacer taller web', '2014-09-04', '2014-09-10', 1, 3),
('Revisar el codigo', '2014-09-11', '2014-09-12', 3, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `contrasena` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `contrasena`) VALUES
(1, 'usuario', 'password'),
(2, 'otrousuario', 'pass'),
(3, 'camilo', 'camilo01'),
(4, 'ramon', 'ramon123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
