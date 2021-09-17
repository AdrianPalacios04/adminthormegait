-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2021 a las 18:50:15
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
  `pistas` varchar(500) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `answered` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tc_thorpaga`
--

INSERT INTO `tc_thorpaga` (`i_id`, `t_nombre`, `t_pregunta1`, `t_respuesta1`, `t_pregunta2`, `t_respuesta2`, `t_pregunta3`, `t_respuesta3`, `t_llave1`, `t_llave2`, `t_llave3`, `pistas`, `user_id`, `answered`) VALUES
(4, 'días de la semana', 'Día 1', 'LUNES', 'Día 2', 'MARTES', 'Día 3', 'MIERCOLES', 'llave 2', 'llave 3', 'llave 3', 'llaves todas', 2, 0),
(5, 'las vocales', 'primera vocal', 'a', 'segunda vocal', 'e', 'tercera vocal', 'c', '', '', '', '', 2, 0),
(6, 'los números del 1 al 3', '1', 'uno', '2', 'dos', '3', 'tres', '', '', '', '', 2, 0),
(7, 'los números del 4 al 6', '4', 'cuatro', '5', 'cinco', '6', 'seis', '', '', '', '', 2, 0),
(8, 'los números del 10 al 12', '10', 'diez', '11', 'once', '12', 'doce', '', '', '', '', 2, 0),
(9, 'los números del 13 al 15', '13', 'trece', '14', 'catorce', '15', 'quince', '', '', '', '', 2, 0),
(11, 'los números del 19 al 21', '19', 'diecinueve', '20', 'veinte', '21', 'veintiuno', '', '', '', '', 2, 0),
(12, 'los números del 22 al 24', '22', 'veintidos', '23', 'veintitres', '24', 'veinticuatro', '', '', '', '', 2, 0),
(13, 'los números del 25 al 27', '25', 'veinticinco', '26', 'veintiseis', '27', 'veintisiete', '', '', '', '', 2, 0),
(14, 'los números del 28 al 30', '28', 'veintiocho', '29', 'veintinueve', '30', 'treinta', '', '', '', '', 2, 0),
(414, 'SAD', 'sad', 'SAD', 'sad', 'SAD', 'sad', 'SAD', 'SAD', 'SAD', 'SAD', 'sad', 3, 0);

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
  `user_id` bigint(20) NOT NULL,
  `old_id` int(11) NOT NULL,
  `i_uso` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tc_thorticket`
--

INSERT INTO `tc_thorticket` (`i_id`, `t_nombre`, `t_pregunta1`, `t_respuesta1`, `t_pregunta2`, `t_respuesta2`, `t_pregunta3`, `t_respuesta3`, `t_llave1`, `t_llave2`, `t_llave3`, `pistas_Ax`, `user_id`, `old_id`, `i_uso`) VALUES
(2, 'Días de la semana parte II', 'Día 4 - ¡Los juegos olímpicos más esperados están a la vuelta de la esquina! Para empezar el siguiente acertijo tendrás que ingresar a olympics.com/tokyo-2020/es/ y adentrarte en sus deportes. ¡Más de cuaretna siluetas te esperan! Solo en una de ellas encontrarás más de un remo. ¡Deprisa! Síguelos y te mostrarán un video, espera hasta que tres equipos compartan la pantalla, un número de color cobrizo yace en el pecho de un competidor, escríbelo y podrás avanzar.', 'JUEVES', 'Día 5', 'VIERNES', 'Día 6', 'SABADO', 'llave 1', 'llave 2', 'llave 3', 'llaves todas', 1, 0, 1),
(3, 'nombre', 'pregunta a -¡Los juegos olímpicos más esperados están a la vuelta de la esquina! Para empezar el siguiente acertijo tendrás que ingresar a olympics.com/tokyo-2020/es/ y adentrarte en sus deportes. ¡Más de cuaretna siluetas te esperan! Solo en una de ellas encontrarás más de un remo. ¡Deprisa! Síguelos y te mostrarán un video, espera hasta que tres equipos compartan la pantalla, un número de color cobrizo yace en el pecho de un competidor, escríbelo y podrás avanzar.', 'A', 'pregunta 2', 'respuesta 2', 'pregunta 3', 'respuesta 3', 'llave 1', 'llave 2', 'llave 3', 'llaves todas', 1, 0, 1),
(4, 'nombre', 'pregunta 1 - ¡Los juegos olímpicos más esperados están a la vuelta de la esquina! Para empezar el siguiente acertijo tendrás que ingresar a olympics.com/tokyo-2020/es/ y adentrarte en sus deportes. ¡Más de cuaretna siluetas te esperan! Solo en una de ellas encontrarás más de un remo. ¡Deprisa! Síguelos y te mostrarán un video, espera hasta que tres equipos compartan la pantalla, un número de color cobrizo yace en el pecho de un competidor, escríbelo y podrás avanzar.', 'respuesta 1', 'pregunta 2', 'respuesta 2', 'pregunta 3', 'respuesta 3', 'llave 1', 'llave 2', 'llave 3', 'llaves todas', 1, 0, 1),
(5, 'LAS VOCALES CON TÍLDES ÁÉÍÓÚ áéíóú', 'primera vocal', 'A', 'segunda vocal', 'E', 'tercera vocal', 'C', '', '', '', '', 1, 0, 1),
(6, 'LOS NÚMEROS DEL 1 AL 3', '1 - ¡Los juegos olímpicos más esperados están a la vuelta de la esquina! Para empezar el siguiente acertijo tendrás que ingresar a olympics.com/tokyo-2020/es/ y adentrarte en sus deportes. ¡Más de cuaretna siluetas te esperan! Solo en una de ellas encontrarás más de un remo. ¡Deprisa! Síguelos y te mostrarán un video, espera hasta que tres equipos compartan la pantalla, un número de color cobrizo yace en el pecho de un competidor, escríbelo y podrás avanzar.', 'UNO', '2 - ¡Los juegos olímpicos más esperados están a la vuelta de la esquina! Para empezar el siguiente acertijo tendrás que ingresar a olympics.com/tokyo-2020/es/ y adentrarte en sus deportes. ¡Más de cuaretna siluetas te esperan! Solo en una de ellas encontrarás más de un remo. ¡Deprisa! Síguelos y te mostrarán un video, espera hasta que tres equipos compartan la pantalla, un número de color cobrizo yace en el pecho de un competidor, escríbelo y podrás avanzar.', 'DOS', '3 - ¡Los juegos olímpicos más esperados están a la vuelta de la esquina! Para empezar el siguiente acertijo tendrás que ingresar a olympics.com/tokyo-2020/es/ y adentrarte en sus deportes. ¡Más de cuaretna siluetas te esperan! Solo en una de ellas encontrarás más de un remo. ¡Deprisa! Síguelos y te mostrarán un video, espera hasta que tres equipos compartan la pantalla, un número de color cobrizo yace en el pecho de un competidor, escríbelo y podrás avanzar.', 'TRES', '', '', '', '', 1, 0, 1),
(7, 'LOS NÚMEROS DEL 4 AL 6', '4 - picos más esperados están a la vuelta de la esquina! Para empezar el siguiente acertijo tendrás que ingresar a olympics.com/tokyo-2020/es/ y adentrarte en sus deportes. ¡Más de cuaretna siluetas te esperan! Solo en una de ellas encontrarás más de un remo. ¡Deprisa! Síguelos y te mostrarán un video, espera hasta que tres equipos compartan la pantalla, un número de color cobrizo yace en el pecho de un competidor, escríbelo y podrás avanzar.', 'CUATRO', '5', 'CINCO', '6', 'SEIS', '', '', '', '', 1, 0, 1),
(8, 'los números del 10 al 12', '10', 'diez', '11', 'once', '12', 'doce', '', '', '', '', 1, 0, 1),
(9, 'los números del 13 al 15', '13 - ¡Los juegos olímpicos más esperados están a la vuelta de la esquina! Para empezar el siguiente acertijo tendrás que ingresar a olympics.com/tokyo-2020/es/ y adentrarte en sus deportes. ¡Más de cuaretna siluetas te esperan! Solo en una de ellas encontrarás más de un remo. ¡Deprisa! Síguelos y te mostrarán un video, espera hasta que tres equipos compartan la pantalla, un número de color cobrizo yace en el pecho de un competidor, escríbelo y podrás avanzar.', 'TRECE', '14', 'CATORCE', '15', 'QUINCE', '', '', '', '', 1, 0, 1),
(10, 'los números del 16 al 18', '16', 'dieciseis', '17', 'diecisiete', '18', 'dieciocho', '', '', '', '', 1, 0, 1),
(11, 'los números del 19 al 21', '19', 'diecinueve', '20', 'veinte', '21', 'veintiuno', '', '', '', '', 1, 0, 1),
(12, 'los números del 22 al 24', '22', 'veintidos', '23', 'veintitres', '24', 'veinticuatro', '', '', '', '', 1, 0, 0),
(13, 'los números del 25 al 27', '25', 'VEINTICINCO', '26', 'VEINTISEIS', '27', 'VEINTISIETE', '', '', '', '', 1, 0, 1),
(14, 'los números del 28 al 30', '28', 'VEINTIOCHO', '29', 'VEINTINUEVE', '30', 'TREINTA', '', '', '', '', 1, 0, 1),
(17, 'asdasd', 'asdasd', 'ASD', 'asd', 'ASD', 'asd', 'ASD', 'asd', 'asd', 'asd', 'asd', 2, 0, 1),
(21, 'nombr', 'pregunta 1', 'respuesta 1', 'pregunta 2', 'respuesta 2', 'pregunta 3', 'respuesta 3', 'llave 1', 'llave 2', 'llave 3', 'llaves todas', 1, 3, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tc_thorpaga`
--
ALTER TABLE `tc_thorpaga`
  ADD PRIMARY KEY (`i_id`),
  ADD UNIQUE KEY `t_nombre` (`t_nombre`) USING HASH,
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `tc_thorticket`
--
ALTER TABLE `tc_thorticket`
  ADD PRIMARY KEY (`i_id`),
  ADD KEY `old_id` (`old_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tc_thorpaga`
--
ALTER TABLE `tc_thorpaga`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=415;

--
-- AUTO_INCREMENT de la tabla `tc_thorticket`
--
ALTER TABLE `tc_thorticket`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
