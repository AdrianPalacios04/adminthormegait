-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-05-2021 a las 18:51:49
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_thorjuego`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tc_thorpaga`
--

CREATE TABLE `tc_thorpaga` (
  `i_id` int(11) NOT NULL,
  `t_nombre` tinytext NOT NULL,
  `t_pregunta1` text NOT NULL,
  `t_respuesta1` tinytext NOT NULL,
  `t_pregunta2` text NOT NULL,
  `t_respuesta2` tinytext NOT NULL,
  `t_pregunta3` text NOT NULL,
  `t_respuesta3` tinytext NOT NULL,
  `t_llave1` tinytext NOT NULL,
  `t_llave2` tinytext NOT NULL,
  `t_llave3` tinytext NOT NULL,
  `pistas_Ax` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tc_thorpaga`
--

INSERT INTO `tc_thorpaga` (`i_id`, `t_nombre`, `t_pregunta1`, `t_respuesta1`, `t_pregunta2`, `t_respuesta2`, `t_pregunta3`, `t_respuesta3`, `t_llave1`, `t_llave2`, `t_llave3`, `pistas_Ax`) VALUES
(3, 'nombre', 'pregunta 1', 'respuesta 2', 'pregunta 2', 'respuesta 2', 'pregunta 3', 'respuesta 3', 'llave 1', 'llave 2', 'llave 3', 'llaves todas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tc_thorticket`
--

CREATE TABLE `tc_thorticket` (
  `i_id` int(11) NOT NULL,
  `t_nombre` tinytext NOT NULL,
  `t_pregunta1` text NOT NULL,
  `t_respuesta1` tinytext NOT NULL,
  `t_pregunta2` text NOT NULL,
  `t_respuesta2` tinytext NOT NULL,
  `t_pregunta3` text NOT NULL,
  `t_respuesta3` tinytext NOT NULL,
  `t_llave1` tinytext NOT NULL,
  `t_llave2` tinytext NOT NULL,
  `t_llave3` tinytext NOT NULL,
  `pistas_Ax` varchar(500) NOT NULL,
  `i_uso` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tc_thorticket`
--

INSERT INTO `tc_thorticket` (`i_id`, `t_nombre`, `t_pregunta1`, `t_respuesta1`, `t_pregunta2`, `t_respuesta2`, `t_pregunta3`, `t_respuesta3`, `t_llave1`, `t_llave2`, `t_llave3`, `pistas_Ax`, `i_uso`) VALUES
(2, 'nombre', 'pregunta 1', 'respuesta 2', 'pregunta 2', 'respuesta 2', 'pregunta 3', 'respuesta 3', 'llave 1', 'llave 2', 'llave 3', 'llaves todas', 1),
(3, 'nombre', 'pregunta 1', 'respuesta 2', 'pregunta 2', 'respuesta 2', 'pregunta 3', 'respuesta 3', 'llave 1', 'llave 2', 'llave 3', 'llaves todas', 1),
(4, 'nombre', 'pregunta 1', 'respuesta 2', 'pregunta 2', 'respuesta 2', 'pregunta 3', 'respuesta 3', 'llave 1', 'llave 2', 'llave 3', 'llaves todas', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tc_thorpaga`
--
ALTER TABLE `tc_thorpaga`
  ADD PRIMARY KEY (`i_id`);

--
-- Indices de la tabla `tc_thorticket`
--
ALTER TABLE `tc_thorticket`
  ADD PRIMARY KEY (`i_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tc_thorpaga`
--
ALTER TABLE `tc_thorpaga`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tc_thorticket`
--
ALTER TABLE `tc_thorticket`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
