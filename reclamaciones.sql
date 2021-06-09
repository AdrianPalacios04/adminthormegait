-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2021 a las 18:09:36
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
-- Base de datos: `bd_thor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamaciones`
--

CREATE TABLE `reclamaciones` (
  `id_reclamaciones` int(5) UNSIGNED ZEROFILL NOT NULL,
  `nombres` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `celular` int(11) NOT NULL,
  `telefono_casa` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `pais` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fecha_nac` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `sexo` char(1) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contestar` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `domicilio` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `tienda_compra` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `monto_reclamado` double NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `pedido` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `detalle` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_registro` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `reclamaciones`
--

INSERT INTO `reclamaciones` (`id_reclamaciones`, `nombres`, `apellidos`, `celular`, `telefono_casa`, `dni`, `pais`, `fecha_nac`, `sexo`, `contestar`, `email`, `domicilio`, `tienda_compra`, `id_tipo`, `monto_reclamado`, `id_categoria`, `pedido`, `detalle`, `id_usuario`, `fecha_registro`) VALUES
(00001, 'maria carmen', 'mendoza maza', 2147483647, 4753612, 73312224, 'Peru', '03-05-2009', 'M', 'Email', 'marjorieynumarivera@gmail.com', 'Lima\r\n', 'Tienda Online', 1, 1200, 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 27, '2021-06-07');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reclamaciones`
--
ALTER TABLE `reclamaciones`
  ADD PRIMARY KEY (`id_reclamaciones`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reclamaciones`
--
ALTER TABLE `reclamaciones`
  MODIFY `id_reclamaciones` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
