-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-06-2021 a las 17:43:29
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
-- Base de datos: `bd_thor_admin_x`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config_races_day`
--

CREATE TABLE `config_races_day` (
  `id` int(11) NOT NULL,
  `inicio` datetime NOT NULL,
  `final` datetime NOT NULL,
  `id_ax` int(11) NOT NULL,
  `id_px` int(11) NOT NULL,
  `px_1` decimal(5,2) NOT NULL,
  `px_2` decimal(5,2) NOT NULL,
  `race_state` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `config_races_day`
--

INSERT INTO `config_races_day` (`id`, `inicio`, `final`, `id_ax`, `id_px`, `px_1`, `px_2`, `race_state`) VALUES
(8, '2021-06-07 01:00:00', '2021-06-07 03:00:00', 12, 2, '100.00', '100.00', 4),
(9, '2021-06-07 04:00:00', '2021-06-07 05:00:00', 3, 1, '30.00', '30.00', 4),
(10, '2021-06-07 07:00:00', '2021-06-07 08:00:00', 6, 1, '30.00', '30.00', 4),
(11, '2021-06-07 10:00:00', '2021-06-07 11:00:00', 7, 1, '30.00', '30.00', 4),
(12, '2021-06-07 12:06:00', '2021-06-07 14:00:00', 2, 1, '30.00', '30.00', 4),
(13, '2021-06-07 17:25:00', '2021-06-07 17:35:00', 5, 1, '30.00', '30.00', 4),
(14, '2021-06-07 19:00:00', '2021-06-07 20:00:00', 4, 1, '30.00', '30.00', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `config_races_day`
--
ALTER TABLE `config_races_day`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `config_races_day`
--
ALTER TABLE `config_races_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
