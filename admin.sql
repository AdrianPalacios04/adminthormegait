-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2021 a las 00:48:59
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `admin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acertijos`
--

CREATE TABLE `acertijos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pregunta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `respuesta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `i_uso` tinyint(1) DEFAULT 1,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `acertijos`
--

INSERT INTO `acertijos` (`id`, `pregunta`, `respuesta`, `i_uso`, `user_id`, `created_at`, `updated_at`) VALUES
(6, '7', 'siete', 0, 2, '2021-05-17 19:37:30', '2021-06-10 19:33:07'),
(7, '8', 'ocho', 1, 1, '2021-05-18 01:26:15', '2021-06-09 03:19:32'),
(8, '¿Sabías que la Copa Davis comenzó en 1900 y hoy es la competición por equipos más grande del mundo? Si ingresas a su página oficial y revisas su historia conocerás', 'respuesta', 0, 1, '2021-05-18 01:45:19', '2021-06-09 03:41:57'),
(10, '1', 'uno', 1, 1, NULL, '2021-06-02 22:19:21'),
(11, '2', 'dos', 1, 1, NULL, NULL),
(12, '3', 'tres', 1, 1, NULL, '2021-06-03 02:16:57'),
(13, '4', 'cuatro', 1, 1, NULL, '2021-06-10 19:37:31'),
(14, '8', 'ocho', 1, 2, NULL, '2021-06-03 19:28:58'),
(15, '9', 'nueve', 1, 4, NULL, NULL),
(16, 'sadsad', 'asdasd', 1, 1, NULL, '2021-06-03 02:17:22'),
(17, 'asdasd', 'asdasd', 1, 1, NULL, NULL),
(18, '1', 'asdasd', 1, 2, NULL, NULL),
(19, 'alarif', 'alarif', 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id`, `name`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, 'asdasdasd', '2021-05-31', '2021-05-31', NULL, NULL),
(2, 'asdasdasdsad', '2021-05-31', '2021-05-31', NULL, NULL),
(3, 'asdasdasdsad', '2021-05-31', '2021-05-31', NULL, NULL),
(6, 'asdasdasdasd', '2021-04-29', '2021-04-30', '2021-06-01 02:02:00', '2021-06-01 02:02:00'),
(7, 'asdasdasdasd', '2021-04-29', '2021-04-30', '2021-06-01 02:02:02', '2021-06-01 02:02:02'),
(9, 'hola como estas', '2021-05-25', '2021-05-25', NULL, NULL),
(10, 'ASDASDAS', '2021-04-30', '2021-05-01', '2021-06-01 02:05:39', '2021-06-01 02:05:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `childrens`
--

CREATE TABLE `childrens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `childrens`
--

INSERT INTO `childrens` (`id`, `name`, `year`, `sex`, `created_at`, `updated_at`) VALUES
(1, 'admin123333', '12', 'Masculino', '2021-07-06 20:48:46', '2021-07-06 21:06:20'),
(2, '123', '213', 'Masculino', '2021-07-06 21:06:31', '2021-07-06 21:06:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codes`
--

CREATE TABLE `codes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codes` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_inicio` date NOT NULL,
  `f_final` date NOT NULL,
  `cantidad` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `origen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uso` int(11) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `codes`
--

INSERT INTO `codes` (`id`, `codes`, `f_inicio`, `f_final`, `cantidad`, `origen`, `uso`, `activo`, `id_tipo`) VALUES
(63, 'HxjtAU', '2021-07-14', '2021-07-14', '100', 'cocacola', 2, 1, 1),
(64, 'ZGYDge', '2021-07-14', '2021-07-14', '100', 'cocacola', 2, 1, 1);

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
  `duration` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `config_event_carreras`
--

INSERT INTO `config_event_carreras` (`id`, `cant_ax_cash`, `cant_ax_ticket`, `inicio`, `intervalo`, `duration`) VALUES
(1, 2, 2, '14:00:00', '02:00:00', '01:00:00');

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
(51, '2021-06-21 11:00:00', '2021-06-21 09:00:00', 9, 1, '30.00', '30.00', 4),
(52, '2021-06-21 10:30:00', '2021-06-21 11:30:00', 9, 2, '30.00', '30.00', 4),
(53, '2021-06-21 12:00:00', '2021-06-21 13:00:00', 6, 1, '30.00', '30.00', 4),
(54, '2021-06-21 13:30:00', '2021-06-21 14:30:00', 5, 2, '30.00', '30.00', 4),
(55, '2021-06-21 15:00:00', '2021-06-21 16:00:00', 7, 1, '30.00', '30.00', 4),
(56, '2021-06-21 16:30:00', '2021-06-21 17:30:00', 10, 1, '30.00', '30.00', 4),
(57, '2021-06-21 18:00:00', '2021-06-21 19:00:00', 2, 2, '30.00', '30.00', 4),
(58, '2021-06-21 19:30:00', '2021-06-21 20:30:00', 6, 2, '50.00', '50.00', 1),
(59, '2021-06-21 21:00:00', '2021-06-21 22:00:00', 4, 2, '30.00', '30.00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_publicidad`
--

CREATE TABLE `estado_publicidad` (
  `id` int(11) NOT NULL,
  `nom_estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado_publicidad`
--

INSERT INTO `estado_publicidad` (`id`, `nom_estado`) VALUES
(1, 'permanente'),
(2, 'rotatorio');

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
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `marcas` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `marcas`) VALUES
(1, 'panasonic'),
(2, 'thor'),
(3, 'dota');

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
(4, '2021_04_07_211249_create_acertijo_table', 1),
(8, '2021_05_04_194457_create_carreras_table', 3),
(15, '2021_06_07_144939_create_reclamo_table', 6),
(19, '2021_06_03_150135_create_codes_table', 7),
(22, '2021_06_21_211322_create_marcas_table', 9),
(24, '2021_02_25_202132_create_childrens_table', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orientacion`
--

CREATE TABLE `orientacion` (
  `id` int(11) NOT NULL,
  `t_orientacion` varchar(30) NOT NULL,
  `id_posicion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `orientacion`
--

INSERT INTO `orientacion` (`id`, `t_orientacion`, `id_posicion`) VALUES
(1, 'derecha', 1),
(2, 'izquierda', 1),
(3, 'arriba', 2),
(4, 'abajo', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina`
--

CREATE TABLE `pagina` (
  `id` int(11) NOT NULL,
  `nom_pagina` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pagina`
--

INSERT INTO `pagina` (`id`, `nom_pagina`) VALUES
(1, 'Carrera'),
(2, 'Monedero'),
(3, 'Partida'),
(4, 'Perfil'),
(5, 'Reclamaciones');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posicion`
--

CREATE TABLE `posicion` (
  `id` int(11) NOT NULL,
  `t_posicion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `posicion`
--

INSERT INTO `posicion` (`id`, `t_posicion`) VALUES
(1, 'horizontal'),
(2, 'vertical');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicidad`
--

CREATE TABLE `publicidad` (
  `id` int(11) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL,
  `f_inicio` date NOT NULL,
  `f_final` date NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_posicion` int(11) NOT NULL,
  `id_orientacion` int(11) NOT NULL,
  `id_pagina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `publicidad`
--

INSERT INTO `publicidad` (`id`, `imagen`, `nombre`, `link`, `f_inicio`, `f_final`, `id_estado`, `id_posicion`, `id_orientacion`, `id_pagina`) VALUES
(1, '1626883763.png', 'Publicidad', 'www.linkedin.com', '2021-07-21', '2021-07-21', 1, 1, 2, 2),
(3, '1626989749.png', 'monedero', 'link', '2021-07-22', '2021-07-22', 2, 2, 3, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamo`
--

CREATE TABLE `reclamo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tipo_tienda` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monto` double(8,2) NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pedido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detalle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reclamo`
--

INSERT INTO `reclamo` (`id`, `tipo_tienda`, `tipo`, `monto`, `categoria`, `pedido`, `detalle`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'asd', 'ad', 1.00, 'asd', 'asd', 'sad', 1, NULL, NULL);

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
-- Estructura de tabla para la tabla `tc_persona`
--

CREATE TABLE `tc_persona` (
  `i_idpersona` int(11) NOT NULL,
  `c_dniper` char(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `t_nombreper` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `t_apellidoper` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `d_nacimientoper` date NOT NULL,
  `c_sexoper` char(2) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tc_persona`
--

INSERT INTO `tc_persona` (`i_idpersona`, `c_dniper`, `t_nombreper`, `t_apellidoper`, `d_nacimientoper`, `c_sexoper`) VALUES
(1, '7331222478', 'Marjorie', 'Ynuma', '1996-11-16', 'M'),
(3, '7331222412', 'Marjorie', 'Ynuma', '1996-11-16', 'M'),
(6, '73312224', 'Marjorie', 'Ynuma', '1996-11-16', 'M'),
(25, '73312224', 'jnombre', 'japellido', '2009-05-03', 'M'),
(28, '73312224', 'maria', 'mendoza', '2009-05-03', 'M');

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
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `i_uso` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tc_thorticket`
--

INSERT INTO `tc_thorticket` (`i_id`, `t_nombre`, `t_pregunta1`, `t_respuesta1`, `t_pregunta2`, `t_respuesta2`, `t_pregunta3`, `t_respuesta3`, `t_llave1`, `t_llave2`, `t_llave3`, `pistas_Ax`, `user_id`, `i_uso`) VALUES
(1, 'Corazón de Bronce', '¡Los juegos olímpicos más esperados están a la vuelta de la esquina! Para empezar el siguiente acertijo tendrás que ingresar a olympics.com/tokyo-2020/es/ y adentrarte en sus deportes. ¡Más de cuaretna siluetas te esperan! Solo en una de ellas encontrarás más de un remo. ¡Deprisa! Síguelos y te mostrarán un video, espera hasta que tres equipos compartan la pantalla, un número de color cobrizo yace en el pecho de un competidor, escríbelo y podrás avanzar.', '361', '¡No pierdas más tiempo! Suma los dígitos de tu respuesta anterior y acude a tu navegador. Aquel resultado te llevará a una comedia romántica del setenta y nueve. ¡Rápido! Encuentra el tráiler que guarda IMDb y presta mucha atención. Escucharás tu próximo destino en una llamada tras las más altas montañas  y los océanos más profundos.', 'MEXICO', 'Te felicito, llegaste a la recta final. Si acudes al que todo lo sabe en busca de dicho lugar, un enlace de visitmexico.com te ayudará a continuar. ¿Qué esperas? Una de las opciones del menú te mostrará sus rutas más buscadas. Sigue a las dos copas de la lista y prepárate a contar, el nombre del pueblo mágico que descansa en el sexto párrafo es tu respuesta final.', 'YURIRIA', 'OLIMPIADAS', 'TURISMO', 'CINE', '\"(Remo)(361) (10)(México) (Ruta del vino)(Yuriria)\"', 1, 1),
(2, 'La gran captura', 'Los destinos con los que soñaste esperan por ti, ingresa a peru.travel/pe y revisa la sección de destinos en busca de sus hermosos valles. ¿Listo? Te bastará con un clic sobre “el ocaso de un imperio” para leer una breve historia sobre aquel lugar. ¡Deprisa! Dime a quién capturaron los españoles y podrás avanzar.', 'ATAHUALPA', '¡No pierdas más tiempo! Si buscas tu respuesta anterior en tu navegador, un enlace de biografiasyvidas.com te mostrará su historia. ¡Rápido! Guarda el nombre del fraile que se esconde en el cuarto párrafo y acude al que todo lo sabe en busca del municipio en el que nació. Aquel lugar te llevará a tu pista final.', 'OROPESA', '¡Felicidades! La meta se encuentra más cerca de lo que te imaginas. Espero recuerdes tu respuesta anterior, con la ayuda de Google maps deberás viajar a dicho lugar. ¡¡No te falta nada! Una vez encuentres su peculiar museo te acercarás al final, el nombre sin espacios del pasaje en el que se ubica es la respuesta que estás buscando.', 'CALLEMUSEO', 'LANZAMIENTO', 'TURISMO', 'PERU', '\"(Cajamarca)(Atahualpa) (Vicente de Valverde)(Oropesa) (Museo de Cerámica)(CalleMuseo)\"', 1, 1),
(4, 'El camino de la serpiente', 'Los destinos con los que soñaste esperan por ti, ingresa a peru.travel/pe y revisa la sección de destinos en busca de sus hermosos valles. ¿Listo? Te bastará con un clic sobre la “cuna de la civilización en Sudamérica” para leer sobre ella. ¡Deprisa! El nombre de la cultura que te recibe al llegar te dejará avanzar.', 'MOCHE', '¿Qué esperas? Con la ayuda de tu mapa viaja a Trujillo en busca de tu respuesta anterior. Tendrás que guardar el nombre de la Huaca que más se acerca al río. ¡Rápido! Si la buscas en tu navegador, un enlace de nmviajes.com te dará una breve descripción. Una vez encuentres a las deidades deberás prestar mucha atención, la primera en mención es la solución.', 'AIAPAEC', '¡Felicidades! La meta se encuentra más cerca de lo que te imaginas. Para terminar con el acertijo tendrás que acudir a Wikipedia en busca de tu respuesta anterior. ¡No te falta nada! Guarda el nombre del animal que se deja leer en azul y navega a es.glosbe.com/es/qu para descubrir su primera traducción. Recuerda omitir espacios y signos gramaticales.', 'MACHAQWAY', 'LANZAMIENTO', 'HISTORIA', 'PERU', '\"(Lambayeque)(Moche) (La Huaca del Sol)(Aiapaec) (serpiente)(Machaqway)\"', 1, 1),
(5, 'La laguna maldita', '¡Prepárate a poner a prueba tu intuición y razonamiento! Por todo el Perú podrás encontrar vestigios maravillosos que sorprenden al mundo entero, comienza ingresando a peru.travel/pe y revisa la sección de destinos en busca de sus desiertos. ¿Qué esperas? Te bastará con un clic sobre un cálido paisaje para leer sobre él. ¡Rápido! El nombre de la laguna que mencionan es tu próximo destino.', 'HUACACHINA', '¡No pierdas más tiempo! Tendrás que abrir Google maps para encontrar tu respuesta anterior. Muy cerca a la rotonda encontrarás dos locales, acércate lo más posible y los verás, uno de ellos esconde el nombre de un gran pintor. ¡Deprisa! Si lo buscas en tu navegador, un enlace de historia-arte.com te mostrará una breve biografía. El estilo que creó junto con un puñado de amigos te llevará a tu pista final.', 'POSTIMPRESIONISMO', '¡Felicidades! La meta se encuentra más cerca de lo que te imaginas. Para terminar con el acertijo tendrás que acudir al gran sabio del internet en busca de tu respuesta anterior. ¡No te falta nada! Un enlace de mymodernmet.com te ayudará a continuar. ¡No te pierdas en el texto! Dos felinos y un elefante se esconden entre la vegetación, guarda el nombre de su autor y regresa a tu buscador. La localidad en la que nació es tu respuesta final.', 'LAVAL', 'LANZAMIENTO', 'PERU', 'ARTE', '\"(Ica)(Huacachina) (van gogh)(postimpresionismo) (Henri Rousseau)(Laval)\"', 1, 1),
(6, 'El espejo andino', '¡Prepárate a poner a prueba tu intuición y razonamiento! Por todo el Perú podrás encontrar vestigios maravillosos que sorprenden al mundo entero, comienza ingresando a peru.travel/pe y revisa la sección de destinos en busca de sus  montañas. ¿Listo? Te bastará con un clic sobre “el espejo entre dos cordilleras” para leer sobre él. ¡Deprisa! El nombre de quien lidera sus montañas te dejará avanzar.', 'HUASCARAN', '¿Qué esperas? Si acudes al que todo lo sabe en busca de tu respuesta anterior, un enlace de patrimoniomundial.cultura.pe te ayudará a continuar. ¡Rápido! Guarda la primera provincia en mención y con la ayuda de Google maps visita su plaza central. Si utilizas la vista panorámica de Street View podrás contar los cisnes de su pileta, responde cuántos son y avanza a tu pista final.', '6', '¡Felicidades! La meta se encuentra más cerca de lo que te imaginas. Para terminar con el acertijo tendrás que ingresar dos veces tu respuesta anterior en el buscador, entre los resultados encontrarás el video oficial de una canción de Lil Yachty. ¡No pierdas más tiempo! Tu respuesta final es el número que se esconde en el pecho de quien sostiene la antorcha.', '424', 'LANZAMIENTO', 'PERU', 'MAPA', '\"(Áncash)(Huascarán) (Yungay)(6) (Lil Yachty - 66)(424)\"', 1, 1),
(7, 'La capilla del poeta', '¡Prepárate a poner a prueba tu intuición y razonamiento! Por todo el Perú podrás encontrar vestigios maravillosos que sorprenden al mundo entero, comienza ingresando a peru.travel/pe y revisa la sección de destinos en busca de sus  montañas. ¿Listo? Te bastará con un clic sobre la capilla dorada para leer sobre aquel lugar. ¡Deprisa! Una palabra de nueve letras se esconde en el primero de sus párrafos, responde cual es y avanza.', 'ARTESANOS', '¡Espero recuerdes tu respuesta anterior! Si buscas en tu navegador a los más famosos del mundo, un enlace de peru.info te mostrará sus más destacados exponentes. Tendrás que guardar el primer nombre del especialista en arcilla, esa es clave para encontrar destacado poeta romano. ¿Qué esperas? La ciudad en la que falleció es tu próximo destino.', 'BRINDISI', '¡Felicidades! La meta se encuentra más cerca de lo que te imaginas. Si acudes al gran sabio del internet en busca de tu respuesta anterior, un enlace de blog-italia.com te narrará su historia. ¡No te falta nada! Te bastará con leer un poco para toparte con una famosa novela, el año en el que nació su autor es tu respuesta final.', '1828', 'LANZAMIENTO', 'PERU', 'ARTE', '\"(Ayacucho)(artesanos) (Virgilio Oré)(Bríndisi) (La vuelta al mundo en ochenta días)(Julio Verne)(1828)\"', 1, 1),
(8, 'El corazón de los andes', '¡Prepárate a poner a prueba tu intuición y razonamiento! Por todo el Perú podrás encontrar vestigios maravillosos que sorprenden al mundo entero, comienza ingresando a peru.travel/pe y revisa la sección de destinos en busca de sus  montañas. ¿Qué esperas?  Te bastará con un clic sobre “el corazón de los andes” para leer sobre dicha ciudad. ¡Deprisa! El nombre del pueblo que mencionan es tu próximo destino.', 'YAULI', 'Para continuar con el acertijo tendrás que abrir Google maps en busca de tu respuesta anterior. ¡Rápido! Guarda el nombre del militar que se esconde en la calle que recorre su plaza principal y búscalo en biografiasyvidas.com para continuar. ¡No pierdas más tiempo! El año en el que fue designado ayudante del Estado Mayor General te dejará avanzar.', '1853', '¡No te confíes! Recuerda que compites contra el reloj. Si buscas tu respuesta anterior en tu navegador, un enlace de wikipedia.org te mostrará sus acontecimientos más importantes. ¡Deprisa! Un militar nació a finales de agosto de aquel año, guarda su nombre y búscalo en tu navegador. ¡No te falta nada! Si seguiste la ruta indicada, entre los resultados encontrarás un enlace de historiaperuana.pe. Tendrás que leer con mucha atención, el nombre del navío español es tu respuesta final.', 'MOCTEZUMA', 'LANZAMIENTO', 'PERU', 'HISTORIA', '\"(Huancavelica)(Yauli) (francisco bolognesi)(1853) (Leoncio Prado)(Moctezuma)\"', 1, 1),
(9, 'La maldición de los siete eternos', '¿Sabías que el Perú es uno de los países más variados del mundo? Ingresa a peru.travel/pe y empieza tu aventura. Tendrás que revisar la sección de destinos en busca de sus selvas, tan solo te bastará con un clic sobre el lugar “donde las ciudades se esconden entre la niebla” para conocer sus tesoros. ¡Deprisa! Entre la impresionante fortaleza y la imponente catarata encontrarás unos sorprendentes sarcófagos, responde a donde pertenecen y avanza a tu siguiente pista.', 'KARAJIA', '¿Qué esperas? Si acudes al que todo lo sabe en busca de tu respuesta anterior, un enlace de peru.info te revelará sus misterios. Una vez descubras el relato del octavo sarcófago, tendrás que guardar el año de su destrucción. ¡Rápido! La suma de sus dígitos te llevará a tu pista final.', 'CINCUENTA', '¡No te confíes! Recuerda que compites contra el reloj.  Espero te gusten los juegos de azar, si buscas tu respuesta anterior en tu navegador, entre los resultados encontrarás un film del 2008. ¡No pierdas más tiempo! Encuentra el tráiler que guarda sensacine.com y escucha con atención, el nombre sin espacios de la ciudad que les da la bienvenida es tu respuesta final.', 'LASVEGAS', 'LANZAMIENTO', 'PERU', 'TURISMO', '\"(Amazonas)(Karajía) (1928)(21) (21 blackjack)(LasVegas)\"', 1, 1),
(10, 'El ave escarlata', '¿Sabías que el Perú es uno de los países más variados del mundo? Ingresa a peru.travel/pe y empieza tu aventura. Tendrás que revisar la sección de destinos en busca de sus selvas, tan solo te bastará con un clic sobre el lugar “donde la biodiversidad se siente” para leer sobre él. ¡Deprisa! Sobre las copas de los árboles unas llamativas aves cantan sin cesar, responde quiénes son y podrás avanzar.', 'GUACAMAYOS', 'Si acudes al que todo lo sabe en busca de tu respuesta anterior, un enlace de peru.wcs.org te deslumbrará con sus colores. ¿Qué esperas? Salta hasta la lista de datos y guarda el nombre de su gran competidor. ¡No pierdas más tiempo! Tendrás que buscarlo en Wikipedia para continuar, una palabra elevada a cubo te dejará avanzar.', 'CALIFORNIA', '¡No te confíes! Recuerda que compites contra el reloj. Para continuar con el acertijo tendrás que navegar al “.com” de tu respuesta anterior. ¡No te desesperes! No será necesario que utilices tu traductor. Si te deslizas hasta el final un cálido atardecer te recibirá, el mensaje que se lee desde el cielo es tu respuesta final.', 'HOLLYWOOD', 'LANZAMIENTO', 'PERU', 'ANIMALES', '\"(Madre de Dios)(guacamayos) (abeja africanizada)(California) (Hollywood)\"', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tc_usuario`
--

CREATE TABLE `tc_usuario` (
  `i_idusuario` int(11) NOT NULL,
  `t_password` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `t_username` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `t_correoper` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `d_fechcreacion` date DEFAULT NULL,
  `b_autorizo` tinyint(1) NOT NULL,
  `b_acepto` int(11) NOT NULL,
  `b_validacorreo` tinyint(1) NOT NULL,
  `n_celular` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `i_idpais` int(11) DEFAULT NULL,
  `b_validacelular` int(11) NOT NULL,
  `i_idpersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tc_usuario`
--

INSERT INTO `tc_usuario` (`i_idusuario`, `t_password`, `t_username`, `t_correoper`, `d_fechcreacion`, `b_autorizo`, `b_acepto`, `b_validacorreo`, `n_celular`, `i_idpais`, `b_validacelular`, `i_idpersona`) VALUES
(1, '123@abc', 'mynuma1', 'marjorie@gmail.com', NULL, 1, 1, 1, '923731609', 15, 1, 1),
(3, '123@abc', 'mynuma2', 'marjorie1@gmail.com', NULL, 1, 1, 1, '923731606', 179, 1, 3),
(6, '123@abc', 'mynuma3', 'marjorie2@gmail.com', NULL, 1, 1, 1, '923731607', 179, 0, 6),
(24, '12345678', 'j', 'jcorreo@gmail.com', NULL, 1, 1, 1, '214748364', 179, 1, 25),
(27, '987654321', 'maria', 'marjorieynumarivera@gmail.com', NULL, 1, 1, 1, '2147483647', 179, 1, 28);

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
-- Estructura de tabla para la tabla `user_codes`
--

CREATE TABLE `user_codes` (
  `id` int(11) NOT NULL,
  `users` int(11) NOT NULL,
  `codes` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acertijos`
--
ALTER TABLE `acertijos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `acertijos_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `childrens`
--
ALTER TABLE `childrens`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tipo` (`id_tipo`);

--
-- Indices de la tabla `config_event_carreras`
--
ALTER TABLE `config_event_carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `config_races_day`
--
ALTER TABLE `config_races_day`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_publicidad`
--
ALTER TABLE `estado_publicidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orientacion`
--
ALTER TABLE `orientacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_posicion` (`id_posicion`);

--
-- Indices de la tabla `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `posicion`
--
ALTER TABLE `posicion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_estado` (`id_estado`),
  ADD KEY `fk_posicion_publicidad` (`id_posicion`),
  ADD KEY `fk_orientacion_publicidad` (`id_orientacion`),
  ADD KEY `fk_pagina_publicidad` (`id_pagina`);

--
-- Indices de la tabla `reclamo`
--
ALTER TABLE `reclamo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `state_races`
--
ALTER TABLE `state_races`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tc_persona`
--
ALTER TABLE `tc_persona`
  ADD PRIMARY KEY (`i_idpersona`);

--
-- Indices de la tabla `tc_thorticket`
--
ALTER TABLE `tc_thorticket`
  ADD PRIMARY KEY (`i_id`),
  ADD UNIQUE KEY `t_nombre` (`i_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `tc_usuario`
--
ALTER TABLE `tc_usuario`
  ADD PRIMARY KEY (`i_idusuario`),
  ADD UNIQUE KEY `t_correoper` (`t_correoper`),
  ADD UNIQUE KEY `celular` (`n_celular`),
  ADD KEY `i_idpersona` (`i_idpersona`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `user_codes`
--
ALTER TABLE `user_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users` (`users`),
  ADD KEY `fk_codes` (`codes`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acertijos`
--
ALTER TABLE `acertijos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `childrens`
--
ALTER TABLE `childrens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `codes`
--
ALTER TABLE `codes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `config_event_carreras`
--
ALTER TABLE `config_event_carreras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `config_races_day`
--
ALTER TABLE `config_races_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT de la tabla `estado_publicidad`
--
ALTER TABLE `estado_publicidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `orientacion`
--
ALTER TABLE `orientacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `pagina`
--
ALTER TABLE `pagina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `posicion`
--
ALTER TABLE `posicion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `publicidad`
--
ALTER TABLE `publicidad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `reclamo`
--
ALTER TABLE `reclamo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `state_races`
--
ALTER TABLE `state_races`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tc_persona`
--
ALTER TABLE `tc_persona`
  MODIFY `i_idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `tc_thorticket`
--
ALTER TABLE `tc_thorticket`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tc_usuario`
--
ALTER TABLE `tc_usuario`
  MODIFY `i_idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `user_codes`
--
ALTER TABLE `user_codes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acertijos`
--
ALTER TABLE `acertijos`
  ADD CONSTRAINT `acertijos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `orientacion`
--
ALTER TABLE `orientacion`
  ADD CONSTRAINT `fk_posicion` FOREIGN KEY (`id_posicion`) REFERENCES `posicion` (`id`);

--
-- Filtros para la tabla `publicidad`
--
ALTER TABLE `publicidad`
  ADD CONSTRAINT `fk_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado_publicidad` (`id`),
  ADD CONSTRAINT `fk_orientacion_publicidad` FOREIGN KEY (`id_orientacion`) REFERENCES `orientacion` (`id`),
  ADD CONSTRAINT `fk_pagina_publicidad` FOREIGN KEY (`id_pagina`) REFERENCES `pagina` (`id`),
  ADD CONSTRAINT `fk_posicion_publicidad` FOREIGN KEY (`id_posicion`) REFERENCES `posicion` (`id`);

--
-- Filtros para la tabla `user_codes`
--
ALTER TABLE `user_codes`
  ADD CONSTRAINT `fk_codes` FOREIGN KEY (`codes`) REFERENCES `codes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_users` FOREIGN KEY (`users`) REFERENCES `tc_usuario` (`i_idusuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
