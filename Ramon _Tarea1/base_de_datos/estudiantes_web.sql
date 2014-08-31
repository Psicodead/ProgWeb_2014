-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-08-2014 a las 21:30:52
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `estudiantes_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantenotas`
--

CREATE TABLE IF NOT EXISTS `estudiantenotas` (
  `idNota` int(255) NOT NULL,
  `codigoEstudiante` text COLLATE utf8_spanish_ci NOT NULL,
  `valorNota` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estudiantenotas`
--

INSERT INTO `estudiantenotas` (`idNota`, `codigoEstudiante`, `valorNota`) VALUES
(1, '12112009', 4),
(2, '12112009', 5),
(1, '12112011', 5),
(2, '12112011', 5),
(3, '12112011', 3),
(1, '12112005', 5),
(2, '12112005', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE IF NOT EXISTS `estudiantes` (
  `codigo` text COLLATE utf8_spanish_ci NOT NULL,
  `nombres` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `correo` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`codigo`, `nombres`, `apellido`, `correo`) VALUES
('11212023', 'Natalia', 'Ayala', 'natalia.ayala@correo.icesi.edu.co'),
('12112009', 'Andrea', 'Castañeda', 'andreacastan@hotmail.com'),
('11104017', 'Kammil', 'Carranza', 'kaescavi94@gmail.com'),
('12112011', 'Juan', 'Ramon', 'peperamon1993@hotmail.com'),
('11221122', 'julian', 'hernandez', 'julian@correo'),
('12112005', 'paula', 'lopez', 'paulalo145@hotmail.com'),
('121120022', 'hector', 'dadad', 'paul2225@hotmail.com'),
('11445522', 'sebastian', 'vasquez', 'vasquez@hotmail.com'),
('12112222', 'camilo', 'Polo', 'polo@hotmail.com'),
('22334455', 'Alberto', 'Jimenez', 'allberto@correo'),
('11111111', 'Alejandro', 'Marin', 'marin@correo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE IF NOT EXISTS `notas` (
  `idNota` int(255) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(1000) COLLATE utf8_spanish_ci NOT NULL,
  `porcentaje` int(255) NOT NULL,
  PRIMARY KEY (`idNota`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`idNota`, `nombre`, `porcentaje`) VALUES
(1, 'Taller 1', 20),
(2, 'Taller 2', 25),
(3, 'Taller 3', 25),
(4, 'Taller 4', 30);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
