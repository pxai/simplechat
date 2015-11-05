-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2015 a las 16:42:52
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `simplechat`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL,
  `who` varchar(30) NOT NULL,
  `message` varchar(255) NOT NULL,
  `msgdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `message`
--

INSERT INTO `message` (`id`, `who`, `message`, `msgdate`, `ip`) VALUES
(1, 'Juana', 'Hola chato', '2015-10-30 14:08:17', ''),
(2, 'Manolo', 'RT Si te gustas de mí', '2015-10-30 14:08:17', ''),
(3, 'asdas', 'dsdasd', '2015-10-30 14:40:12', ''),
(4, 'asdas', 'dsdasd', '2015-10-30 14:40:32', ''),
(5, 'asdas', 'dsdasd', '2015-10-30 14:40:43', ''),
(6, 'asdas', 'dsdasd', '2015-10-30 14:41:23', '::1'),
(7, 'sdfsdf', 'sadfasdfdf', '2015-10-30 14:41:28', '::1'),
(8, 'sdfgdf', 'dfgdfg', '2015-10-30 14:41:37', '::1'),
(9, 'sdfgdf', 'dfgdfg', '2015-10-30 14:42:41', '::1'),
(10, 'asdasd', 'asdasd', '2015-10-30 14:42:45', '::1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
