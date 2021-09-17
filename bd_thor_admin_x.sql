-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2021 a las 18:50:28
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
-- Estructura de tabla para la tabla `config_event_carreras`
--

CREATE TABLE `config_event_carreras` (
  `id` int(11) NOT NULL,
  `cant_ax_cash` int(11) NOT NULL,
  `cant_ax_ticket` int(11) NOT NULL,
  `inicio` time NOT NULL,
  `intervalo` time NOT NULL,
  `duration` time NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `config_event_carreras`
--

INSERT INTO `config_event_carreras` (`id`, `cant_ax_cash`, `cant_ax_ticket`, `inicio`, `intervalo`, `duration`, `precio`) VALUES
(1, 1, 8, '10:00:00', '01:00:00', '01:00:00', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config_races`
--

CREATE TABLE `config_races` (
  `id` int(11) NOT NULL,
  `inicio` datetime NOT NULL,
  `final` datetime NOT NULL,
  `precio` int(11) NOT NULL,
  `id_ax` int(11) NOT NULL,
  `id_px` int(11) NOT NULL,
  `px_1` decimal(5,2) NOT NULL,
  `px_2` decimal(5,2) NOT NULL,
  `race_state` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `config_races`
--

INSERT INTO `config_races` (`id`, `inicio`, `final`, `precio`, `id_ax`, `id_px`, `px_1`, `px_2`, `race_state`) VALUES
(69, '2021-09-06 09:00:00', '2021-09-06 10:20:00', 3, 2, 1, '30.00', '30.00', 4),
(70, '2021-09-06 10:30:00', '2021-09-06 11:58:00', 3, 3, 2, '30.00', '30.00', 4),
(71, '2021-09-06 12:19:00', '2021-09-06 13:25:00', 3, 4, 2, '30.00', '30.00', 2),
(72, '2021-09-06 13:30:00', '2021-09-06 14:30:00', 3, 3, 2, '50.00', '30.00', 1),
(73, '2021-09-06 14:45:00', '2021-09-06 16:25:00', 1, 6, 1, '30.00', '30.00', 1),
(74, '2021-09-06 16:30:00', '2021-09-06 17:30:00', 3, 2, 1, '30.00', '30.00', 1),
(75, '2021-09-06 17:35:00', '2021-09-06 19:00:00', 3, 2, 1, '30.00', '30.00', 1),
(76, '2021-09-06 19:30:00', '2021-09-06 20:30:00', 3, 2, 1, '30.00', '30.00', 1),
(77, '2021-09-06 21:00:00', '2021-09-06 22:00:00', 3, 5, 1, '100.00', '100.00', 1),
(83, '2021-09-06 10:00:00', '2021-09-06 11:00:00', 3, 2, 1, '30.00', '30.00', 4),
(84, '2021-09-06 11:00:00', '2021-09-06 12:00:00', 3, 17, 1, '30.00', '30.00', 4),
(85, '2021-09-06 12:00:00', '2021-09-06 13:00:00', 3, 11, 1, '30.00', '30.00', 2),
(86, '2021-09-06 13:00:00', '2021-09-06 14:00:00', 3, 6, 1, '30.00', '30.00', 1),
(87, '2021-09-06 14:00:00', '2021-09-06 15:00:00', 3, 10, 1, '30.00', '30.00', 1),
(88, '2021-09-06 15:00:00', '2021-09-06 16:00:00', 3, 13, 1, '30.00', '30.00', 1),
(89, '2021-09-06 16:00:00', '2021-09-06 17:00:00', 3, 14, 1, '30.00', '30.00', 1),
(90, '2021-09-06 17:00:00', '2021-09-06 18:00:00', 3, 9, 1, '30.00', '30.00', 1),
(91, '2021-09-06 18:00:00', '2021-09-06 19:00:00', 3, 8, 2, '100.00', '100.00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `config_races_day`
--

CREATE TABLE `config_races_day` (
  `id` int(11) NOT NULL,
  `inicio` datetime NOT NULL,
  `final` datetime NOT NULL,
  `precio` int(11) NOT NULL DEFAULT 3,
  `id_ax` int(11) NOT NULL,
  `id_px` int(11) NOT NULL,
  `px_1` decimal(5,2) NOT NULL,
  `px_2` decimal(5,2) NOT NULL,
  `race_state` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `config_races_day`
--

INSERT INTO `config_races_day` (`id`, `inicio`, `final`, `precio`, `id_ax`, `id_px`, `px_1`, `px_2`, `race_state`) VALUES
(92, '2021-09-17 10:00:00', '2021-09-17 11:00:00', 3, 13, 1, '30.00', '30.00', 4),
(93, '2021-09-16 11:00:00', '2021-09-16 12:00:00', 3, 10, 1, '30.00', '30.00', 4),
(94, '2021-09-16 12:00:00', '2021-09-16 13:00:00', 3, 6, 1, '30.00', '30.00', 4),
(95, '2021-09-16 13:00:00', '2021-09-16 14:00:00', 3, 11, 1, '30.00', '30.00', 4),
(96, '2021-09-16 14:00:00', '2021-09-16 10:01:23', 3, 17, 1, '30.00', '30.00', 4),
(97, '2021-09-16 15:00:00', '2021-09-16 00:00:00', 3, 9, 1, '30.00', '30.00', 4),
(98, '2021-09-16 18:00:00', '2021-09-16 19:00:00', 3, 3, 1, '30.00', '30.00', 1),
(99, '2021-09-16 19:00:00', '2021-09-16 20:00:00', 3, 5, 1, '30.00', '30.00', 1),
(100, '2021-09-16 20:00:00', '2021-09-16 21:00:00', 3, 4, 2, '100.00', '100.00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(6, '2020_05_21_100000_create_teams_table', 2),
(7, '2020_05_21_200000_create_team_user_table', 2),
(8, '2020_05_21_300000_create_team_invitations_table', 2),
(9, '2021_04_16_150953_create_sessions_table', 2),
(10, '2021_04_26_203512_create_usuarios_table', 3),
(11, '2021_04_26_220545_create_permission_tables', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('marjorieynumarivera@gmail.com', '$2y$10$L6lkytrTV0fJr3Lfo6/fxucH/3UAF0MQuk4GkQ0iLncmKAFsOhlom', '2021-04-29 04:34:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `premio_x_puesto`
--

CREATE TABLE `premio_x_puesto` (
  `id` int(11) NOT NULL,
  `inicio_puesto` int(11) NOT NULL,
  `final_puesto` int(11) NOT NULL,
  `premio` decimal(5,2) NOT NULL,
  `id_tipopremio` int(11) NOT NULL,
  `id_race` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `premio_x_puesto`
--

INSERT INTO `premio_x_puesto` (`id`, `inicio_puesto`, `final_puesto`, `premio`, `id_tipopremio`, `id_race`) VALUES
(1, 2, 10, '3.00', 3, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pruebas`
--

CREATE TABLE `pruebas` (
  `id` int(11) NOT NULL,
  `prueba` text DEFAULT NULL,
  `premio` int(11) DEFAULT NULL,
  `tiempo` time DEFAULT NULL,
  `axid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pruebas`
--

INSERT INTO `pruebas` (`id`, `prueba`, `premio`, `tiempo`, `axid`) VALUES
(1, NULL, 11, NULL, 1),
(2, NULL, 6, NULL, 2),
(3, NULL, 9, NULL, 3),
(4, NULL, 12, NULL, 4),
(5, NULL, 4, NULL, 5),
(6, NULL, 14, NULL, 0),
(7, NULL, 8, NULL, 1),
(8, NULL, 13, NULL, 2),
(9, NULL, 7, NULL, 3),
(10, NULL, 3, NULL, 4),
(11, NULL, 10, NULL, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamaciones`
--

CREATE TABLE `reclamaciones` (
  `id_reclamaciones` int(11) NOT NULL,
  `correlativo` char(6) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `telefono_casa` char(9) NOT NULL,
  `id_medioComunica` int(11) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `domicilio` varchar(200) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `monto_reclamado` double DEFAULT NULL,
  `id_categoria` int(11) NOT NULL,
  `pedido` text NOT NULL,
  `detalle` text NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `pdf_enviado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reclamaciones`
--

INSERT INTO `reclamaciones` (`id_reclamaciones`, `correlativo`, `id_usuario`, `telefono_casa`, `id_medioComunica`, `correo`, `domicilio`, `id_tipo`, `monto_reclamado`, `id_categoria`, `pedido`, `detalle`, `fecha_registro`, `estado`, `pdf_enviado`) VALUES
(1, '00001', 27, 'ssssss', 1, 'marjorieynumarivera@gmail.com', 'ddddddddddd', 1, NULL, 1, 'MI pedido es', 'Detalle del reclamo o queja:', '2021-08-25 00:00:00', 1, NULL),
(2, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'ddddddddddd', 1, NULL, 1, 'Pedido:', 'Detalle del reclamo o queja:', '2021-08-25 00:00:00', 1, NULL),
(3, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'ddddddddddd', 1, NULL, 1, 'Pedido', 'etalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(4, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'ddddddddddd', 1, NULL, 1, 'Pedido', 'etalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(5, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'ddddddddddd', 1, NULL, 1, 'Pedido', 'etalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(6, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'ddddddddddd', 1, NULL, 1, 'Pedido', 'etalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(7, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'ddddddddddd', 1, NULL, 1, 'Pedido:', 'Detalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(8, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'ddddddddddd', 1, NULL, 1, 'Pedido:', 'Detalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(9, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'ddddddddddd', 1, NULL, 1, 'Pedido:', 'Detalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(10, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'ddddddddddd', 1, NULL, 1, 'Pedido:', 'Detalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(11, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'ddddddddddd', 1, NULL, 1, 'Pedido:', 'Detalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(12, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'ddddddddddd', 1, NULL, 1, 'Pedido:', 'Detalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(13, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'ddddddddddd', 1, NULL, 1, 'Pedido:', 'Detalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(14, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'ddddddddddd', 1, NULL, 1, 'Pedido:', 'Detalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(15, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'ddddddddddd', 1, NULL, 1, 'Pedido:', 'Detalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(16, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'fvdgvfdg', 1, NULL, 1, 'Pedido:', '\r\nPedido:\r\nDetalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(17, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'fvdgvfdg', 1, NULL, 1, 'Pedido:', '\r\nPedido:\r\nDetalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(18, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'fvdgvfdg', 1, NULL, 1, 'Pedido:', 'Detalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(19, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'fvdgvfdg', 1, NULL, 1, 'Pedido:', 'Detalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(20, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'fvdgvfdg', 1, NULL, 1, 'Pedido:', 'Detalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(21, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'fvdgvfdg', 1, NULL, 1, 'Pedido:', 'Detalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(22, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'ddddddddddd', 1, NULL, 1, 'Pedido:', '\r\nDetalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(23, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'ddddddddddd', 1, NULL, 1, 'Pedido:', 'Detalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL),
(24, '00002', 27, '1234566', 1, 'marjorieynumarivera@gmail.com', 'ddddddddddd', 1, NULL, 1, 'Pedido:', 'Detalle del reclamo o queja:', '2021-08-26 00:00:00', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('PZ7Yvj5yzTWEqWVOvBOhEPX54g0iaR4dWpJg7XW0', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiQ3pQaGJYNko3OW9UcWtkYUFvYmhBMjgyNG5HVUNSNzZvMndMeXJtYiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM1OiJodHRwOi8vYXBwX3Rob3JfYWRtaW4udGVzdC91c3VhcmlvcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCQuSmpYeWFWaFBQYkpLQzg0ZUNSTlRPaW9VbUttaVFtTGpWS3cwYzdTdzV5a1VIdzdWMGMzTyI7fQ==', 1619742994),
('Sdk8wPJ90JQBE1UHiFYphwGn1O27WaroSoEauj03', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiSVBuU0RORkcyVEdHMjRhYVBEaThDRVBvN3RNN1pacWNoYUFXRThBdCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM1OiJodHRwOi8vYXBwX3Rob3JfYWRtaW4udGVzdC91c3VhcmlvcyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCQuSmpYeWFWaFBQYkpLQzg0ZUNSTlRPaW9VbUttaVFtTGpWS3cwYzdTdzV5a1VIdzdWMGMzTyI7fQ==', 1619722893);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `state_races`
--

CREATE TABLE `state_races` (
  `id` int(11) NOT NULL,
  `codigo` tinytext NOT NULL,
  `state_race` tinytext NOT NULL,
  `state` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `state_races`
--

INSERT INTO `state_races` (`id`, `codigo`, `state_race`, `state`) VALUES
(1, 'P', 'en proceso', 1),
(2, 'E', 'en ejecución', 1),
(3, 'R', 'resuelta', 1),
(4, 'F', 'finalizada', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'Marjorie\'s Team', 1, '2021-04-16 21:41:51', '2021-04-16 21:41:51'),
(2, 3, 'Rosa\'s Team', 1, '2021-04-29 23:01:55', '2021-04-29 23:01:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipe_premio`
--

CREATE TABLE `tipe_premio` (
  `id` int(11) NOT NULL,
  `tipo` tinytext NOT NULL,
  `premio` decimal(5,2) NOT NULL,
  `state` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipe_premio`
--

INSERT INTO `tipe_premio` (`id`, `tipo`, `premio`, `state`) VALUES
(1, 'TICKETS AMARILLOS', '30.00', 1),
(2, 'USD', '100.00', 1),
(3, 'TICKETS VERDES', '30.00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_categoria_reclamo`
--

CREATE TABLE `tipo_categoria_reclamo` (
  `id` int(11) NOT NULL,
  `tipo_categoria` varchar(20) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_categoria_reclamo`
--

INSERT INTO `tipo_categoria_reclamo` (`id`, `tipo_categoria`, `estado`) VALUES
(1, 'Producto', 1),
(2, 'Servicio', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_medio_comunica`
--

CREATE TABLE `tipo_medio_comunica` (
  `id` int(11) NOT NULL,
  `medio_comunica` varchar(20) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_medio_comunica`
--

INSERT INTO `tipo_medio_comunica` (`id`, `medio_comunica`, `estado`) VALUES
(1, 'Correo Electrónico', 1),
(2, 'Domicilio', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_reclamo`
--

CREATE TABLE `tipo_reclamo` (
  `id` int(11) NOT NULL,
  `tipo_reclamo` varchar(20) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_reclamo`
--

INSERT INTO `tipo_reclamo` (`id`, `tipo_reclamo`, `estado`) VALUES
(1, 'Queja', 1),
(2, 'Reclamo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `email_verified_at`, `password`, `role`, `estado`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'palacios', 'admin@admin.com', NULL, '$2y$10$n.NvpzcERlq2T7QSY7JO5.cwQqKg9lxTL0bdaGBBAreMiGCPEFcN6', 'admin', 1, NULL, '2021-05-13 03:57:50', '2021-05-13 03:57:50'),
(2, 'alarif', 'vilca', 'alarif@gmail.com', NULL, '$2y$10$vgKd03Xtb8WZPposAIV7tOgk3t07aGEG4FexoyZBjoqSUtE5Cr1nm', 'acertijero', 0, NULL, '2021-05-13 04:35:07', '2021-05-15 02:25:05'),
(3, 'adrian', 'adrian', 'adrian@gmail.com', NULL, '$2y$10$mpSte2Ibt2GW5esgA0J/ou75RoPPVy/yBVLmefSeZ2lvSatUX3rL.', 'acertijero', 1, NULL, '2021-05-14 01:21:36', '2021-05-14 01:21:36'),
(4, 'omar', 'palacios', 'omar@gmail.com', NULL, '$2y$10$Jkv.wKc72.ekYk0CW1mEaOF86Hy5y5rAs6NUzpD5k9cfbzzWs0uuK', 'supacertijero', 1, NULL, '2021-05-15 02:03:23', '2021-05-15 02:03:23'),
(6, 'publicidad', 'publicidad', 'publicidad@publicidad.com', NULL, '$2y$10$9FlbxpXon3BFAofxNC2uieZMmCq7.wckrE/ETdEiQ9lMn724YbS/W', 'adminpublicidad', 1, NULL, '2021-05-27 20:10:15', '2021-05-27 20:10:15'),
(7, 'usuario', 'usuario', 'usuario@usuario.com', NULL, '$2y$10$Lk.9N9yTCP2wALIUzdF3T.AV.yTNDPwRR60BRjhAC6I5Wb.20yqj.', 'adminusuario', 1, NULL, '2021-06-04 21:51:39', '2021-06-04 21:51:39'),
(8, 'codigo', 'codigo', 'codigo@codigo.com', NULL, '$2y$10$fyBiGUgPlCZNc2Gi.aoTgOmYmQyePn4fMYQqSODIoyAmO.M8Gey8a', 'adminticket', 1, NULL, '2021-06-04 22:03:21', '2021-06-04 22:03:21'),
(9, 'reclamo', 'reclamo', 'reclamo@reclamo.com', NULL, '$2y$10$Ff4Qyts0yAuhotsywDoWZ.LATQt8M5WuT/EkH6j8FQMMSgOoulONu', 'adminreclamo', 1, NULL, '2021-06-05 00:36:39', '2021-06-05 00:36:39'),
(10, 'supcarrera', 'supcarrera', 'supcarrera@supcarrera.com', NULL, '$2y$10$OX0zq0yA5qDDM3aRWZpy.ecfvosrHnV3X7oRjktlnho2.SEQvJmPu', 'supcarrera', 1, NULL, '2021-06-05 00:37:10', '2021-06-05 00:37:10'),
(13, 'carrera', 'carrera', 'carrera@carrera.com', NULL, '$2y$10$QODbIKdQ/E0x/Z9q/SpV5.j5BQy17j0RoGoyfabrajFVUdup0HN9S', 'admincarrera', 1, NULL, '2021-06-11 02:20:59', '2021-06-11 02:20:59'),
(15, 'atencion', 'atencion', 'atencion@atencion.com', NULL, '$2y$10$yQ2c022V0VPRxt4WlJLyEujkxnECTRS9u0MVVOpGZu.KVHyoG8Vxy', 'acliente', 0, NULL, '2021-06-24 21:39:22', '2021-06-24 21:39:22'),
(16, 'lara', 'lara', 'lara@gmail.com', NULL, '$2y$10$F/6MKkOT3w9XJ4ZlXZsT3OL97k/bHlN5u6I.o2K4vMdTZrDa.n1j2', 'acertijero', 0, NULL, '2021-07-16 21:56:16', '2021-07-16 22:02:42');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `config_event_carreras`
--
ALTER TABLE `config_event_carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `config_races`
--
ALTER TABLE `config_races`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ax` (`id_ax`);

--
-- Indices de la tabla `config_races_day`
--
ALTER TABLE `config_races_day`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `premio_x_puesto`
--
ALTER TABLE `premio_x_puesto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tipepremio_premioxpuesto` (`id_tipopremio`);

--
-- Indices de la tabla `pruebas`
--
ALTER TABLE `pruebas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reclamaciones`
--
ALTER TABLE `reclamaciones`
  ADD PRIMARY KEY (`id_reclamaciones`),
  ADD UNIQUE KEY `correlativo` (`id_reclamaciones`),
  ADD KEY `fk_reclamaciones_usuario` (`id_usuario`),
  ADD KEY `fk_reclamaciones_medio` (`id_medioComunica`),
  ADD KEY `fk_reclamaciones_tipo` (`id_tipo`),
  ADD KEY `fk_reclamaciones_categoria` (`id_categoria`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `state_races`
--
ALTER TABLE `state_races`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indices de la tabla `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Indices de la tabla `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indices de la tabla `tipe_premio`
--
ALTER TABLE `tipe_premio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_categoria_reclamo`
--
ALTER TABLE `tipo_categoria_reclamo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_medio_comunica`
--
ALTER TABLE `tipo_medio_comunica`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_reclamo`
--
ALTER TABLE `tipo_reclamo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `config_event_carreras`
--
ALTER TABLE `config_event_carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `config_races_day`
--
ALTER TABLE `config_races_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `premio_x_puesto`
--
ALTER TABLE `premio_x_puesto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pruebas`
--
ALTER TABLE `pruebas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `reclamaciones`
--
ALTER TABLE `reclamaciones`
  MODIFY `id_reclamaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `state_races`
--
ALTER TABLE `state_races`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipe_premio`
--
ALTER TABLE `tipe_premio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_categoria_reclamo`
--
ALTER TABLE `tipo_categoria_reclamo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_medio_comunica`
--
ALTER TABLE `tipo_medio_comunica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_reclamo`
--
ALTER TABLE `tipo_reclamo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `premio_x_puesto`
--
ALTER TABLE `premio_x_puesto`
  ADD CONSTRAINT `fk_tipepremio_premioxpuesto` FOREIGN KEY (`id_tipopremio`) REFERENCES `tipe_premio` (`id`);

--
-- Filtros para la tabla `reclamaciones`
--
ALTER TABLE `reclamaciones`
  ADD CONSTRAINT `fk_reclamaciones_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `tipo_categoria_reclamo` (`id`),
  ADD CONSTRAINT `fk_reclamaciones_medio` FOREIGN KEY (`id_medioComunica`) REFERENCES `tipo_medio_comunica` (`id`),
  ADD CONSTRAINT `fk_reclamaciones_tipo` FOREIGN KEY (`id_tipo`) REFERENCES `tipo_reclamo` (`id`),
  ADD CONSTRAINT `fk_reclamaciones_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `bd_thor`.`tc_usuario` (`i_idusuario`);

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;

DELIMITER $$
--
-- Eventos
--
CREATE DEFINER=`root`@`localhost` EVENT `e_config_races` ON SCHEDULE EVERY 1 DAY STARTS '2021-09-06 12:57:00' ENDS '2021-12-31 23:59:59' ON COMPLETION PRESERVE ENABLE DO BEGIN
DECLARE ax int DEFAULT 0;
DECLARE tipo int;
DECLARE i int DEFAULT 0;
DECLARE hx datetime;

INSERT INTO bd_thor.usuario_carreras (id, idUsuario, idCarrera, resulto_hora, puesto)
SELECT id, idUsuario, idCarrera, resulto_hora, puesto FROM bd_thor.usuario_carreras_day
WHERE EXISTS(SELECT id FROM bd_thor.usuario_carreras_day);

DELETE FROM bd_thor.usuario_carreras_day;

INSERT INTO config_races(id,inicio, final, precio, id_ax, id_px, px_1, px_2, race_state) 
SELECT id,inicio, final, precio, id_ax, id_px, px_1, px_2, race_state FROM config_races_day
WHERE EXISTS (SELECT id FROM config_races_day);

DELETE FROM config_races_day;

INSERT INTO bd_thorjuego.tc_thorticket (t_nombre,t_pregunta1,t_respuesta1,t_pregunta2,t_respuesta2,   t_pregunta3,t_respuesta3,t_llave1,t_llave2,t_llave3,pistas_Ax, user_id,old_id) 
SELECT t_nombre,t_pregunta1,t_respuesta1,t_pregunta2,t_respuesta2, t_pregunta3,t_respuesta3,t_llave1,t_llave2,t_llave3,pistas_Ax, user_id,i_id
FROM bd_thorjuego.tc_thorpaga WHERE answered = 1;

DELETE FROM bd_thorjuego.tc_thorpaga WHERE answered = 1;

SELECT
@cant_ax_cash:= cec.cant_ax_cash,
@cant_ax_ticket:= cec.cant_ax_ticket,
@inicio:= cec.inicio,
@intervalo:= cec.intervalo,
@duration:= cec.duration,
@precio:= cec.precio
FROM config_event_carreras AS cec;

SET hx = (SELECT TIMESTAMP(DATE(NOW()),@inicio));

SET tipo = 1;
SELECT @premio:= premio
FROM tipe_premio
WHERE id = tipo;

WHILE i < @cant_ax_ticket DO
SET ax = 0;
WHILE ax = 0 OR ax IS NULL  DO
SET ax = (SELECT tp.i_id
FROM bd_thorjuego.tc_thorticket AS tp 
JOIN (SELECT CEIL(RAND() * (
    SELECT MAX(btp.i_id) 
    FROM bd_thorjuego.tc_thorticket AS btp)) AS id) AS r 
WHERE tp.i_id = r.id AND tp.i_uso = 1);
END WHILE;

IF NOT EXISTS (
    SELECT id FROM config_races_day 
    where id_ax = ax AND id_px = tipo)
THEN
SET @hfinal = (SELECT TIMESTAMP(hx,@duration));
	INSERT INTO config_races_day (inicio, final, precio, id_ax, id_px, px_1, px_2, race_state)
    SELECT hx, @hfinal, @precio, ax, tipo, @premio, @premio, 1;
    
    SET hx = (SELECT TIMESTAMP(hx,@intervalo));
    SET i = i + 1;
END IF;
END WHILE;

SET i = 0;
SET tipo = 2;
SELECT @premio:= premio
FROM tipe_premio
WHERE id = tipo;

WHILE i < @cant_ax_cash DO
SET ax = 0;

WHILE ax = 0 OR ax IS NULL  DO
SET ax = (SELECT tp.i_id
FROM bd_thorjuego.tc_thorpaga AS tp 
JOIN (SELECT CEIL(RAND() * (
    SELECT MAX(btp.i_id) 
    FROM bd_thorjuego.tc_thorpaga AS btp)) AS id) AS r 
WHERE tp.i_id = r.id);
END WHILE;

IF NOT EXISTS (
    SELECT id FROM config_races_day 
    where id_ax = ax AND id_px = tipo)
THEN
	SET @hfinal = (SELECT TIMESTAMP(hx,@duration));
	INSERT INTO config_races_day (inicio, final, precio, id_ax, id_px, px_1, px_2, race_state)
    SELECT hx, @hfinal, @precio, ax, tipo, @premio, @premio, 1;
    SET hx = (SELECT TIMESTAMP(hx,@intervalo)); 
    SET i = i + 1;
END IF;
END WHILE;
END$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
