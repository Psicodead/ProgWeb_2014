-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2014 a las 11:13:12
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `taller_3`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `locales`
--

CREATE TABLE IF NOT EXISTS `locales` (
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo` text COLLATE utf8_spanish_ci NOT NULL,
  `latitud` double DEFAULT NULL,
  `longitud` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `locales`
--

INSERT INTO `locales` (`nombre`, `tipo`, `latitud`, `longitud`) VALUES
('Sushi-Green', 'restaurante', 3.455093, -76.536353),
('Platillos voladores', 'restaurante', 3.453508, -76.537619),
('La tomateria', 'restaurante', 3.450253, -76.538349),
('Jorge Isaac', 'teatro', 3.452502, -76.534615),
('Teatro Municipal', 'teatro', 3.451549, -76.539422),
('La mascara', 'teatro', 3.449921, -76.538038),
('Museo la tertulia', 'museo', 3.452127, -76.535355),
('Museo La Merced', 'museo', 3.450521, -76.537115),
('Museo del oro', 'museo', 3.451795, -76.537844);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
