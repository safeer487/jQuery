-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-05-2014 a las 09:30:13
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `chat`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conversaciones`
--

CREATE TABLE IF NOT EXISTS `conversaciones` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `mensajes` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `conversaciones`
--

INSERT INTO `conversaciones` (`id`, `nombre`, `mensajes`, `fecha`) VALUES
(1, 'Andros', 'que hace', '2014-05-15 09:19:02'),
(2, 'Andros', 'Otro mÃ¡s', '2014-05-15 09:26:54'),
(3, 'Andros', 'Parece que va', '2014-05-15 09:36:18'),
(4, 'Sinforiano', 'Mi nombre mola mucho', '2014-05-15 09:36:28'),
(5, 'Gurdunfo', 'El mio es mejor', '2014-05-15 09:37:04'),
(6, 'Andros', 'Redimensiona la pagina', '2014-05-15 09:37:13'),
(7, 'samara morgan', 'os quedan 7 dias', '2014-05-15 09:37:15'),
(8, 'Andros', 'No saldrÃ©is vivos de la clase', '2014-05-15 09:37:27'),
(9, 'Alexandru', 'Os estoy hackeando', '2014-05-15 09:38:12'),
(10, 'asdasd', 'Vendo pollos con polea enmedio', '2014-05-15 09:41:17'),
(11, 'Andros', 'dfdfd', '2014-05-15 09:43:20');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
