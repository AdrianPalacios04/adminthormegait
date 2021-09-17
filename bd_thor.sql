-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2021 a las 18:50:08
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

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `crear_cuenta` (IN `dni` CHAR(10), IN `nombre` VARCHAR(50), IN `apellidos` VARCHAR(100), IN `nacimiento` DATE, IN `sexo` CHAR(2), IN `username` VARCHAR(50), IN `pass` VARCHAR(100), IN `correo` VARCHAR(200), IN `celular` VARCHAR(20), IN `fechcreacion` DATETIME(6), IN `autorizo` BOOLEAN, IN `acepto` BOOLEAN, IN `validacorreo` BOOLEAN, IN `validacelular` BOOLEAN)  NO SQL
BEGIN
DECLARE credit int DEFAULT 0;

DECLARE EXIT HANDLER FOR SQLEXCEPTION
BEGIN
	ROLLBACK;
END;

START TRANSACTION;
INSERT INTO tc_persona(c_dniper, t_nombreper, t_apellidoper, d_nacimientoper, c_sexoper)
	VALUES (dni, nombre, apellidos, nacimiento, sexo);
    INSERT INTO tc_usuario(t_username, t_password,t_correoper, n_celular, d_fechcreacion, b_autorizo,b_acepto, b_validacorreo, b_validacelular, i_idpersona)
    VALUES (username, pass, correo, celular, fechcreacion, autorizo, acepto, validacorreo, validacelular, LAST_INSERT_ID());
    

    SELECT i_cantidad INTO credit
	FROM tc_ticketsinicio
	WHERE (CURRENT_DATE() 
       		BETWEEN d_dateinicio AND d_datefinal);
           
   IF credit > 0 THEN
   	INSERT INTO ti_monedero (i_ticketyellow, i_ticketgreen, i_premio, i_billete, i_idusuario)
    VALUES (credit, 0, 0, 0, LAST_INSERT_ID());
    ELSE
    	INSERT INTO ti_monedero (i_ticketyellow, i_ticketgreen, i_premio, i_billete, i_idusuario)
    VALUES (0, 0, 0, 0, LAST_INSERT_ID());
   END IF;
   
  SELECT u.i_idusuario, u.t_password, u.t_username, u.t_correoper 
  FROM tc_usuario u
  WHERE t_username collate utf8mb4_unicode_ci =username;
COMMIT;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_i_registrarusuario` (IN `c_dni` CHAR(10) CHARSET utf8mb4, IN `t_nombreper` VARCHAR(50) CHARSET utf8mb4, IN `t_apellidoper` VARCHAR(100) CHARSET utf8mb4, IN `t_correoper` VARCHAR(200) CHARSET utf8mb4, IN `d_nacimientoper` DATE, IN `c_sexoper` CHAR(2) CHARSET utf8mb4, IN `t_username` VARCHAR(200) CHARSET utf8mb4, IN `t_password` VARCHAR(200) CHARSET utf8mb4, IN `b_autorizo` BOOLEAN, IN `n_celular` INT(11), IN `b_acepto` BOOLEAN, IN `b_validacorreo` BOOLEAN, IN `b_validacelular` BOOLEAN, OUT `b_result` BOOLEAN, OUT `t_message` VARCHAR(4000) CHARSET utf8mb4)  BEGIN
DECLARE credit int DEFAULT 0;

DECLARE EXIT HANDLER FOR SQLEXCEPTION
BEGIN
	ROLLBACK;
    GET DIAGNOSTICS CONDITION 1 
    @sqlstate = RETURNED_SQLSTATE 
   , @errno = MYSQL_ERRNO
   , @text = MESSAGE_TEXT;
   
	SET b_result = 0;
    SET t_message = CONCAT ("ERROR", @errno , "(", @sqlstate , "):", @text ); 
END;
    
START TRANSACTION;
	INSERT INTO tc_persona(c_dniper, t_nombreper, t_apellidoper, d_nacimientoper, c_sexoper)
	VALUES (c_dni, t_nombreper, t_apellidoper, d_nacimientoper, c_sexoper);
    INSERT INTO tc_usuario(t_username, t_password,t_correoper, b_autorizo, n_celular,b_acepto, b_validacorreo, b_validacelular, i_idpersona)
    VALUES (t_username, t_password, t_correoper, b_autorizo,n_celular, b_acepto, b_validacorreo, b_validacelular, LAST_INSERT_ID());
    

    SELECT i_cantidad INTO credit
	FROM tc_ticketsinicio
	WHERE (CURRENT_DATE() 
       		BETWEEN d_dateinicio AND d_datefinal);
           
   IF credit > 0 THEN
   	INSERT INTO ti_monedero (i_ticketyellow, i_ticketgreen, i_premio, i_billete, i_idusuario)
    VALUES (credit, 0, 0, 0, LAST_INSERT_ID());
    ELSE
    	INSERT INTO ti_monedero (i_ticketyellow, i_ticketgreen, i_premio, i_billete, i_idusuario)
    VALUES (0, 0, 0, 0, LAST_INSERT_ID());
   END IF;
SET b_result = 1;
SET t_message = 'Registro exitoso'; 
COMMIT;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `categoria` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
(1, 'PRODUCTO'),
(2, 'SERVICIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codegen`
--

CREATE TABLE `codegen` (
  `id` int(11) NOT NULL,
  `codes` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `codegen`
--

INSERT INTO `codegen` (`id`, `codes`) VALUES
(1, 'sce2Do'),
(2, 'W5Elv%'),
(3, 'TYKXmI'),
(4, 'A2m&d@'),
(5, '4l&e$4'),
(6, 'WX9F$8'),
(7, 'r5SwbT'),
(8, 'r5SwbT'),
(9, '4MlgJ9'),
(10, 'KORBcL'),
(11, 'Sp8@hr'),
(12, 'n8a92$'),
(13, 'ZcIOJJ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reclamaciones`
--

CREATE TABLE `reclamaciones` (
  `id_reclamaciones` int(5) UNSIGNED ZEROFILL NOT NULL,
  `telefono_casa` int(11) NOT NULL,
  `contestar` varchar(20) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `domicilio` text COLLATE utf8mb4_spanish_ci NOT NULL,
  `tienda_compra` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `id_tipo` varchar(11) COLLATE utf8mb4_spanish_ci NOT NULL,
  `monto_reclamado` double NOT NULL,
  `id_categoria` varchar(11) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pedido` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `detalle` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `estado` tinyint(1) NOT NULL DEFAULT 0,
  `correlativo` varchar(6) COLLATE utf8mb4_spanish_ci NOT NULL,
  `pdf_enviado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `reclamaciones`
--

INSERT INTO `reclamaciones` (`id_reclamaciones`, `telefono_casa`, `contestar`, `email`, `domicilio`, `tienda_compra`, `id_tipo`, `monto_reclamado`, `id_categoria`, `pedido`, `detalle`, `id_usuario`, `fecha_registro`, `estado`, `correlativo`, `pdf_enviado`) VALUES
(00001, 0, 'Domicilio', 'maria@gmail.com', '', 'Tienda Online', 'QUEJA', 0, 'PRODUCTO', 'qweqeewewqeq', 'ewewewqwqe', 1, '2021-07-26', 1, '00001', 1),
(00002, 0, 'Domicilio', 'maria@gmail.com', '', 'Tienda Online', 'QUEJA', 0, 'PRODUCTO', 'ewrwrqweqeeqweeqweewqeeqwee', 'qweqweqweqweqwewqe', 1, '2021-07-26', 1, '00002', 1),
(00003, 0, 'Domicilio', 'joseluisp1402@gmail.com', '', 'Tienda Online', 'QUEJA', 0, 'PRODUCTO', 'wqewqeqeqwewq', 'eqweqwewqeqweqweqwe', 1, '2021-07-26', 1, '00003', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tc_codigo`
--

CREATE TABLE `tc_codigo` (
  `i_idcodigo` int(11) NOT NULL,
  `t_codigo` tinytext COLLATE utf8mb4_spanish_ci NOT NULL,
  `d_valinicio` date NOT NULL,
  `d_valfin` date NOT NULL,
  `i_ticket` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tc_codigo`
--

INSERT INTO `tc_codigo` (`i_idcodigo`, `t_codigo`, `d_valinicio`, `d_valfin`, `i_ticket`) VALUES
(1, 'AB', '2021-03-26', '2021-03-28', 5),
(2, 'XY3', '2021-03-27', '2021-03-29', 10),
(3, 'mn1', '2021-03-28', '2021-03-30', 5),
(4, 'Ab12', '2021-03-29', '2021-03-31', 10),
(5, '#aB4$', '2021-03-30', '2021-04-01', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tc_mailenvio`
--

CREATE TABLE `tc_mailenvio` (
  `id` int(11) NOT NULL,
  `t_correo` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `t_codigogenerado` tinytext COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tc_mailenvio`
--

INSERT INTO `tc_mailenvio` (`id`, `t_correo`, `t_codigogenerado`) VALUES
(1, 'jcorreo@gmail.com', 'Et@9kQ'),
(2, 'marjorieynumarivera@gmail.com', 'cEs%2R'),
(3, 'marjorieynumarivera@gmail.com', 'LumoCX'),
(4, 'marjorieynumarivera@gmail.com', 'TgEiK&'),
(5, 'marjorieynumarivera@gmail.com', 'Rca2e8'),
(6, 'marjorieynumarivera@gmail.com', 'vOM1g$'),
(7, 'marjorie.mdyr@gmail.com', 'HqdADZ'),
(8, '', 'TLDZjE'),
(9, '', 'SIIHsQ'),
(10, '', 'SVtfCH'),
(11, '', 'XttmYg'),
(12, '', 'nLXzOs'),
(13, 'marjorie.mdyr@gmail.com', 'UUEQfq'),
(14, 'marjorieynumarivera@gmail.com', 'SKPzrv'),
(15, 'marjorieynumarivera@gmail.com', 'SYnUlV'),
(16, 'marjorieynumarivera@gmail.com', 'LqlpDV'),
(17, 'marjorieynumarivera@gmail.com', 'FZWVoC'),
(18, 'marjorieynumarivera@gmail.com', 'HwfZMd'),
(19, 'marjorieynumarivera@gmail.com', 'dMybXw'),
(20, 'marjorieynumarivera@gmail.com', 'ujaGpB'),
(21, 'marjorieynumarivera@gmail.com', 'lgIEzp');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tc_pais`
--

CREATE TABLE `tc_pais` (
  `i_idpais` int(11) NOT NULL,
  `c_codpais` char(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `t_pais` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `b_estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tc_pais`
--

INSERT INTO `tc_pais` (`i_idpais`, `c_codpais`, `t_pais`, `b_estado`) VALUES
(1, '+7', 'Abjasia', 0),
(2, '+93', 'Afganistan', 0),
(3, '+355', 'Albania', 0),
(4, '+49', 'Alemania', 1),
(5, '+376', 'Andorra', 0),
(6, '+244', 'Angola', 0),
(7, '+1264', 'Anguilla', 0),
(8, '+1268', 'Antigua y Barbuda', 0),
(9, '+599', 'Antillas Holandesas', 0),
(10, '+966', 'Arabia Saudita', 0),
(11, '+213', 'Argelia', 0),
(12, '+54', 'Argentina', 1),
(13, '+374', 'Armenia', 0),
(14, '+297', 'Aruba', 0),
(15, '+61', 'Australia', 0),
(16, '+43', 'Austria', 0),
(17, '+994', 'Azerbaiyan', 0),
(18, '+1242', 'Bahamas', 1),
(19, '+973', 'Bahrein', 0),
(20, '+880', 'Bangladesh', 0),
(21, '+1246', 'Barbados', 0),
(22, '+32', 'Belgica', 0),
(23, '+501', 'Belice', 0),
(24, '+229', 'Benin', 0),
(25, '+1441', 'Bermudas', 0),
(26, '+375', 'Bielorrusia', 0),
(27, '+591', 'Bolivia', 1),
(28, '+599', 'Bonaire', 0),
(29, '+387', 'Bosnia-Herzegovina', 0),
(30, '+267', 'Botswana', 0),
(31, '+55', 'Brasil', 1),
(32, '+673', 'Brunei Darussalam', 0),
(33, '+359', 'Bulgaria', 0),
(34, '+226', 'Burkina Faso', 0),
(35, '+257', 'Burundi', 0),
(36, '+975', 'Butan', 0),
(37, '+238', 'Cabo Verde', 0),
(38, '+855', 'Camboya', 0),
(39, '+237', 'Camerun', 0),
(40, '+1', 'Canada', 0),
(41, '+235', 'Chad', 0),
(42, '+56', 'Chile', 1),
(43, '+86', 'China', 0),
(44, '+357', 'Chipre', 0),
(45, '+57', 'Colombia', 1),
(46, '+269', 'Comores', 0),
(47, '+242', 'Congo', 0),
(48, '+243', 'Congo RD', 0),
(49, '+82', 'Corea', 0),
(50, '+850', 'Corea del Norte', 0),
(51, '+225', 'Costa de Marfil', 0),
(52, '+506', 'Costa Rica', 1),
(53, '+385', 'Croacia', 0),
(54, '	+53', 'Cuba', 1),
(55, '+599', 'Curacao', 0),
(56, '+45', 'Dinamarca', 0),
(57, '+1767', 'Dominica', 0),
(58, '+1', 'Dominicana, Republica', 1),
(59, '+593', 'Ecuador', 1),
(60, '+20', 'Egipto', 0),
(61, '+503', 'El Salvador', 0),
(62, '+971', 'Emiratos Árabes Unidos', 0),
(63, '+291', 'Eritrea', 0),
(64, '+421', 'Eslovaquia', 0),
(65, '+386', 'Eslovenia', 0),
(66, '+34', 'España', 1),
(67, '+1', 'Estados Unidos', 1),
(68, '+372', 'Estonia', 0),
(69, '+251', 'Etiopia', 0),
(70, '+679', 'Fiji', 0),
(71, '+63', 'Filipinas', 0),
(72, '+358', 'Finlandia', 0),
(73, '+33', 'Francia', 0),
(74, '+241', 'Gabon', 0),
(75, '+220', 'Gambia', 0),
(76, '+995', 'Georgia', 0),
(77, '+233', 'Ghana', 0),
(78, '+350', 'Gibraltar', 0),
(79, '+1473', 'Granada', 0),
(80, '+30', 'Grecia', 0),
(81, '+299', 'Groenlandia', 0),
(82, '+590', 'Guadalupe', 0),
(83, '+1671', 'Guam', 0),
(84, '+502', 'Guatemala', 1),
(85, '+594', 'Guayana frances', 1),
(86, '+44', 'Guernsey', 0),
(87, '+245', 'Guinea Bissau', 0),
(88, '+240', 'Guinea Ecuatorial', 0),
(89, '+592', 'Guyana', 1),
(90, '+509', 'Haiti', 0),
(91, '+504', 'Honduras', 1),
(92, '+852', 'Hong Kong', 0),
(93, '+36', 'Hungria', 0),
(94, '+91', 'India', 0),
(95, '+62', 'Indonesia', 0),
(96, '+98', 'Iran', 0),
(97, '+964', 'Iraq', 0),
(98, '+353', 'Irlanda', 0),
(99, '+247', 'Isla Ascension', 0),
(100, '+358', 'Isla de Aland', 0),
(101, '+44', 'Isla de Man', 0),
(102, '+61', 'Isla De Navidad, Isla Christmas', 0),
(103, '+672', 'Isla Norfolk', 0),
(104, '+699', 'Isla perifericas menores de Estados Unidos', 0),
(105, '+354', 'Islandia', 0),
(106, '+1345', 'Islas Caiman', 0),
(107, '+61', 'Islas Cocos', 0),
(108, '+682', 'Islas Cook', 0),
(109, '+298', 'Islas Feroe', 0),
(110, '+500', 'Islas Malvinas', 0),
(111, '+692', 'Islas Marshall', 0),
(112, '+872', 'Islas Pitcairn', 0),
(113, '+677', 'Islas Salomon', 0),
(114, '+1649', 'Islas Turcas y Caicos', 0),
(115, '+128', 'Islas Virgenes Britanicas', 0),
(116, '+134', 'Islas Virgenes de EE.UU.', 0),
(117, '+972', 'Israel', 0),
(118, '+39', 'Italia', 1),
(119, '+187', 'Jamaica', 1),
(120, '+81', 'Japon', 0),
(121, '+44', 'Jersey', 0),
(122, '+962', 'Jordania', 0),
(123, '+7', 'Kazajstan', 0),
(124, '+254', 'Kenia', 0),
(125, '+996', 'Kirguistan', 0),
(126, '+686', 'Kiribati', 0),
(127, '+383', 'Kosovo', 0),
(128, '+965', 'Kuwait', 0),
(129, '+856', 'Laos', 0),
(130, '+266', 'Lesotho', 0),
(131, '+371', 'Letonia', 0),
(132, '+961', 'Libano', 0),
(133, '+231', 'Liberia', 0),
(134, '+218', 'Libia', 0),
(135, '+423', 'Liechtenstein', 0),
(136, '+370', 'Lituania', 0),
(137, '+352', 'Luxemburgo', 0),
(138, '+853', 'Macao', 0),
(139, '+389', 'Macedonia', 0),
(140, '+261', 'Madagascar', 0),
(141, '+60', 'Malasia', 0),
(142, '+265', 'Malawi', 0),
(143, '+960', 'Maldivas', 0),
(144, '+223', 'Mali', 0),
(145, '+356', 'Malta', 0),
(146, '+1670', 'Marianas del Norte', 0),
(147, '+212', 'Marruecos', 0),
(148, '+596', 'Martinica', 0),
(149, '+230', 'Mauricio', 0),
(150, '+222', 'Mauritania', 0),
(151, '+262', 'Mayotte', 0),
(152, '+52', 'Mexico', 1),
(153, '+691', 'Micronesia', 0),
(154, '+373', 'Moldavia', 0),
(155, '+377', 'Monaco', 0),
(156, '+976', 'Mongolia', 0),
(157, '+382', 'Montenegro', 0),
(158, '+1664', 'Montserrat', 0),
(159, '+258', 'Mozambique', 0),
(160, '+95', 'Myanmar', 0),
(161, '+264', 'Namibia', 0),
(162, '+674', 'Nauru', 0),
(163, '+977', 'Nepal', 0),
(164, '+505', 'Nicaragua', 1),
(165, '+227', 'Niger', 0),
(166, '+234', 'Nigeria', 0),
(167, '+683', 'Niue', 0),
(168, '+47', 'Noruega', 1),
(169, '+687', 'Nueva Caledonia', 0),
(170, '+64', 'Nueva Zelanda', 1),
(171, '+968', 'Oman', 0),
(172, '+31', 'Paises Bajos, Holanda', 0),
(173, '+92', 'Pakistan', 0),
(174, '+680', 'Palau', 0),
(175, '+970', 'Palestina', 0),
(176, '+507', 'Panama', 1),
(177, '+675', 'Papua-Nueva Guinea', 0),
(178, '+595', 'Paraguay', 0),
(179, '+51', 'Peru', 1),
(180, '+689', 'Polinesia Francesa', 0),
(181, '+48', 'Polonia', 0),
(182, '+351', 'Portugal', 1),
(183, '+1', 'Puerto Rico', 1),
(184, '+974', 'Qatar', 0),
(185, '+44', 'Reino Unido', 0),
(186, '+236', 'Republica Centroafricana', 0),
(187, '+420', 'Republica Checa', 0),
(188, '+224', 'Republica Guinea', 0),
(189, '+262', 'Reunion', 0),
(190, '+250', 'Ruanda', 0),
(191, '+40', 'Rumania', 0),
(192, '+7', 'Rusia', 0),
(193, '+212', 'Sahara Occidental', 0),
(194, '+685', 'Samoa', 0),
(195, '+1684', 'Samoa Americana', 0),
(196, '+590', 'San Bartolomé (Francia)', 0),
(197, '+1869', 'San Cristobal y Nevis', 0),
(198, '+378', 'San Marino', 0),
(199, '+590', 'San Martin', 0),
(200, '+1721', 'San Martín (Países Bajos)', 0),
(201, '+508', 'San Pedro y Miquelon', 0),
(202, '+1784', 'San Vincente y Granadinas', 0),
(203, '+290', 'Santa Helena', 0),
(204, '+1758', 'Santa Lucia', 0),
(205, '+239', 'Santo Tome y Principe', 0),
(206, '+221', 'Senegal', 0),
(207, '+381', 'Serbia', 0),
(208, '+248', 'Seychelles', 0),
(209, '+232', 'Sierra Leona', 0),
(210, '+65', 'Singapur', 0),
(211, '+963', 'Siria', 0),
(212, '+252', 'Somalia', 0),
(213, '+252', 'Somalilandia', 0),
(214, '+94', 'Sri Lanka', 0),
(215, '+27', 'Sudafrica', 0),
(216, '+249', 'Sudan', 0),
(217, '+211', 'Sudan del Sur', 0),
(218, '+46', 'Suecia', 0),
(219, '+41', 'Suiza', 0),
(220, '+597', 'Surinam', 0),
(221, '+47', 'Svalbard y Jan Mayen', 0),
(222, '+268', 'Swazilandia', 0),
(223, '+992', 'Tadjikistan', 0),
(224, '+66', 'Tailandia', 0),
(225, '+886', 'Taiwan', 0),
(226, '+255', 'Tanzania', 0),
(227, '+246', 'Territorio Britanico del Oceano Indico', 0),
(228, '+262', 'Territorios Franceses del Sur', 0),
(229, '+670', 'Timor del Este', 0),
(230, '+228', 'Togo', 0),
(231, '+690', 'Tokelau', 0),
(232, '+676', 'Tonga', 0),
(233, '+1868', 'Trinidad y Tobago', 0),
(234, '+216', 'Tunez', 0),
(235, '+993', 'Turkmenistan', 0),
(236, '+90', 'Turquia', 0),
(237, '+688', 'Tuvalu', 0),
(238, '+380', 'Ucrania', 0),
(239, '+256', 'Uganda', 0),
(240, '+598', 'Uruguay', 1),
(241, '+998', 'Uzbekistan', 0),
(242, '+678', 'Vanuatu', 0),
(243, '+379', 'Vaticano', 0),
(244, '+58', 'Venezuela', 1),
(245, '+84', 'Vietnam', 0),
(246, '+681', 'Wallis y Futuna', 0),
(247, '+967', 'Yemen', 0),
(248, '+253', 'Yibuti', 0),
(249, '+260', 'Zambia', 0),
(250, '+263', 'Zimbabue', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tc_persona`
--

CREATE TABLE `tc_persona` (
  `i_idpersona` int(11) NOT NULL,
  `c_dniper` char(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_nombreper` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_apellidoper` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_nacimientoper` date NOT NULL,
  `c_sexoper` char(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tc_persona`
--

INSERT INTO `tc_persona` (`i_idpersona`, `c_dniper`, `t_nombreper`, `t_apellidoper`, `d_nacimientoper`, `c_sexoper`) VALUES
(25, '73312224', 'jnombre', 'japellido', '2009-05-03', 'M'),
(28, '73333333', 'maria carmen', 'mendoza maza', '2009-05-03', 'M'),
(29, '72505215', 'Rosa', 'Acevedo Lino', '1998-08-22', 'M'),
(30, '77283510', 'Adrian 1', 'Medrano Palacios', '2000-08-05', 'M'),
(31, '10483763', 'Jose', 'Paredes', '2013-02-14', 'M'),
(33, '77777777', 'nekolover', 'nekolover', '1996-07-16', 'M'),
(34, '14785236', 'Marjorie Daselee', 'Ynuma Rivera', '1996-11-16', 'H'),
(45, '10101010', 'neko1', 'Neko1 neko1', '1996-11-16', 'H');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tc_smsenvio`
--

CREATE TABLE `tc_smsenvio` (
  `i_id` int(11) NOT NULL,
  `t_celular` tinytext COLLATE utf8mb4_spanish_ci NOT NULL,
  `t_codigogenerado` tinytext COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tc_smsenvio`
--

INSERT INTO `tc_smsenvio` (`i_id`, `t_celular`, `t_codigogenerado`) VALUES
(1, '923731605', '245978'),
(2, '923731605', '470659'),
(3, '923731605', '235291'),
(4, '923731605', '101882'),
(5, '923731605', '459227'),
(6, '923731605', '163012'),
(7, '979370546', '346407'),
(8, '971124710', '405361'),
(9, '979370546', '356924'),
(10, '937266829', '454816'),
(11, '923731605', '192586'),
(12, '923731605', '162665'),
(13, '923731605', '125072'),
(14, '923731605', '139608'),
(15, '923731605', '351056'),
(16, '923731605', '276863'),
(17, '923731605', '194265'),
(18, '923731605', '412483'),
(19, '923731605', '116381'),
(20, '923731605', '332920'),
(21, '923731605', '273731'),
(22, '923731605', '167465'),
(23, '923731605', '292682'),
(24, '923731605', '151252'),
(25, '923731605', '164037'),
(26, '923731605', '169002'),
(27, '923731605', '208147'),
(28, '923731605', '287329'),
(29, '923731605', '837951'),
(30, '923731605', '116742'),
(31, '923731605', '821579'),
(32, '923731605', '818687');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tc_ticketsinicio`
--

CREATE TABLE `tc_ticketsinicio` (
  `i_idticketinicio` int(11) NOT NULL,
  `d_dateinicio` date NOT NULL,
  `d_datefinal` date NOT NULL,
  `i_cantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tc_ticketsinicio`
--

INSERT INTO `tc_ticketsinicio` (`i_idticketinicio`, `d_dateinicio`, `d_datefinal`, `i_cantidad`) VALUES
(1, '2021-05-27', '2021-05-31', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tc_usuario`
--

CREATE TABLE `tc_usuario` (
  `i_idusuario` int(11) NOT NULL,
  `t_password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_correoper` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_fechcreacion` datetime(6) NOT NULL,
  `b_autorizo` tinyint(1) NOT NULL,
  `b_acepto` int(11) NOT NULL,
  `b_validacorreo` tinyint(1) NOT NULL,
  `n_celular` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `i_idpais` int(11) DEFAULT NULL,
  `b_validacelular` int(11) NOT NULL,
  `i_idpersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tc_usuario`
--

INSERT INTO `tc_usuario` (`i_idusuario`, `t_password`, `t_username`, `t_correoper`, `d_fechcreacion`, `b_autorizo`, `b_acepto`, `b_validacorreo`, `n_celular`, `i_idpais`, `b_validacelular`, `i_idpersona`) VALUES
(24, '12345678', 'j', 'jcorreo@gmail.com', '2020-10-05 00:00:00.000000', 1, 1, 1, '214748364', 179, 1, 25),
(27, '$2y$10$3d0Rx3jCWgwRiMU3XwBCNuqNPaXht8JPhkXK6pewb3WjXWbUg0Bli', 'maria', 'marjorie@gmail.com', '2021-07-14 00:00:00.000000', 1, 1, 1, '2147483647', 179, 1, 28),
(28, '$2y$10$y2A6yYZ67h6BSXp3YFnqweNBUV5eyHja8ELVZ9MPyKeoUKktK7dw.', 'rosa', 'rosa@theonlinerace.co', '2020-08-10 00:00:00.000000', 1, 1, 1, '934176760', 179, 1, 29),
(29, 'adrianpalacios1', 'adrian', 'adrian@theonline.co', '2020-08-03 00:00:00.000000', 1, 1, 1, '937 266 829', 179, 1, 30),
(30, 'fujimori', 'jose', 'jose@theonlinerace.co', '2019-09-04 00:00:00.000000', 1, 1, 1, '979', 179, 1, 31),
(32, '$2y$10$ZnZV9oybYTznHsn.IDntxO8C7txSZOC39PU5FxIU/.AzbbKChZBKi', 'neko', 'neko@gmail.com', '2021-07-20 11:21:21.000000', 1, 1, 1, '+57901010101', NULL, 1, 33),
(33, '$2y$10$kdyS.czLiOgVvyXx/j3dnOHxFBTzJD72aSkKdYs5NgIAk0klg7w.K', 'mynuma', 'mynuma@gmail.com', '2021-08-11 17:30:18.000000', 1, 1, 1, '+1242963258741', NULL, 1, 34),
(44, '$2y$10$uLKIaCf7nK1HGHzwNh7mselRPbrDg.KXAJ1X8ns7g.jqHJj.GugYG', 'neko1', 'marjorieynumarivera@gmail.com', '2021-09-09 15:45:51.000000', 1, 1, 1, '+51923731605', NULL, 1, 45);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tc_validarcorreo`
--

CREATE TABLE `tc_validarcorreo` (
  `i_idvalida` int(11) NOT NULL,
  `i_idusuario` int(11) NOT NULL,
  `t_username` tinytext COLLATE utf8mb4_spanish_ci NOT NULL,
  `t_correo` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `t_codigovalide` tinytext COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ti_monedero`
--

CREATE TABLE `ti_monedero` (
  `i_idmonedero` int(11) NOT NULL,
  `i_idusuario` int(11) NOT NULL,
  `i_ticketyellow` int(11) NOT NULL,
  `i_ticketgreen` int(11) NOT NULL,
  `i_premio` int(11) NOT NULL,
  `i_billete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `ti_monedero`
--

INSERT INTO `ti_monedero` (`i_idmonedero`, `i_idusuario`, `i_ticketyellow`, `i_ticketgreen`, `i_premio`, `i_billete`) VALUES
(4, 15, 20, 0, 0, 0),
(8, 24, 11, 30, 0, 0),
(10, 27, 2530, 551, 120, 0),
(11, 28, 0, 0, 0, 50),
(12, 29, 0, 0, 0, 0),
(13, 30, 5660, 20, 0, 0),
(15, 32, 0, 0, 0, 0),
(16, 33, 0, 0, 0, 0),
(18, 44, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaction`
--

CREATE TABLE `transaction` (
  `id_transaction` int(6) UNSIGNED ZEROFILL NOT NULL,
  `numero_pedido` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `monto` double NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha_pedido` date NOT NULL DEFAULT current_timestamp(),
  `aceptacion_terminos` char(2) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `transaction`
--

INSERT INTO `transaction` (`id_transaction`, `numero_pedido`, `email`, `monto`, `id_usuario`, `fecha_pedido`, `aceptacion_terminos`) VALUES
(000002, '123232321', 'joseluisp1402@gmail.com', 150, 27, '2021-06-09', '1'),
(000003, '3412312689', 'as@gmail.com', 5, 27, '2021-06-22', '1'),
(000004, '3412312696', 'aa@gmail.com', 5, 27, '2021-06-22', '1'),
(000005, '3412312713', 'jj@gmail.com', 5, 27, '2021-06-22', '1'),
(000006, '3412312714', 'petete@gmail.com', 5, 27, '2021-06-22', '1'),
(000007, '3412312715', 'sa@gmail.com', 5, 27, '2021-06-22', '1'),
(000008, '3412312831', 'asdfg@gmail.com', 300, 30, '2021-06-22', '1'),
(000009, '3412312833', 'qa@gmail.com', 300, 30, '2021-06-22', '1'),
(000010, '3412312835', 'ws@gmail.com', 300, 30, '2021-06-22', '1'),
(000011, '3412312836', 'aasdf@gmail.com', 300, 30, '2021-06-22', '1'),
(000012, '3412312719', 'wa@gmail.com', 5, 27, '2021-06-22', '1'),
(000013, '3412312837', 'azs@gmail.com', 300, 30, '2021-06-22', '1'),
(000014, '3412312838', 'ad@gmail.com', 300, 30, '2021-06-22', '1'),
(000015, '3412312843', 'as@gmail.com', 300, 30, '2021-06-23', '1'),
(000016, '3412312848', 'rosa@theonlinerace.co', 5, 30, '2021-06-23', '1'),
(000017, '3412312850', 'adrianpalacios@gmail.com', 5, 30, '2021-06-23', '1'),
(000018, '3412312720', 'AS@GMAIL.COM', 5, 27, '2021-06-24', '1'),
(000019, '3412312721', 'AS@GMAIL.COM', 5, 27, '2021-06-24', '1'),
(000020, '3412312722', 'AS@GMAIL.COM', 5, 27, '2021-06-24', '1'),
(000021, '3412312725', 'a@gmail.com', 5, 27, '2021-07-09', '1'),
(000022, '3412312751', 'adrianpalaciosmedrano@gmail.com', 5, 27, '2021-08-27', '1'),
(000023, '3412312759', 'adrianpalaciosmedrano@gmail.com', 5, 27, '2021-08-27', '1'),
(000024, '3412312763', 'adrianpalaciosmedrano@gmail.com', 5, 27, '2021-08-27', '1'),
(000025, '3412312764', 'adrianpalaciosmedrano@gmail.com', 5, 27, '2021-08-27', '1'),
(000026, '3412312765', 'adrianpalaciosmedrano@gmail.com', 5, 27, '2021-08-28', '1'),
(000027, '3412312773', 'adrianpalaciosmedrano@gmail.com', 5, 27, '2021-08-28', '1'),
(000028, '34521599', 'marjorie@theonlinerace.co', 12, 27, '2021-08-28', '1'),
(000029, '34521600', 'marjorie@theonlinerace.co', 12, 27, '2021-08-28', '1'),
(000030, '34521602', 'marjorie@theonlinerace.co', 12, 27, '2021-09-02', '1'),
(000031, '34521605', 'marjorie@theonline.co', 12, 27, '2021-09-02', '1'),
(000032, '34521627', 'marjorie@gmail.com', 12, 27, '2021-09-10', '1'),
(000033, '34521629', 'marjorie@gmail.com', 975, 27, '2021-09-10', '1'),
(000034, '34521631', 'marjorie@gmail.com', 75, 27, '2021-09-10', '1'),
(000035, '34521633', 'marjorie@theonlinerace.co', 294, 27, '2021-09-13', '1'),
(000036, '34521634', 'marjorie@theonlinerace.co', 294, 27, '2021-09-13', '1'),
(000037, '34521635', 'marjorie@theonlinerace.co', 294, 27, '2021-09-13', '1'),
(000038, '34521636', 'marjorieynumarivera@gmail.com', 3, 27, '2021-09-13', '1'),
(000039, '34521637', 'marjorieynumarivera@gmail.com', 3, 27, '2021-09-13', '1'),
(000040, '34521638', 'marjorieynumarivera@gmail.com', 3, 27, '2021-09-13', '1'),
(000041, '34521639', 'marjorieynumarivera@gmail.com', 12, 27, '2021-09-13', '1'),
(000042, '34521640', 'marjorieynumarivera@gmail.com', 12, 27, '2021-09-13', '1'),
(000043, '34521641', 'marjorieynumarivera@gmail.com', 12, 27, '2021-09-13', '1'),
(000044, '34521642', 'marjorieynumarivera@gmail.com', 12, 27, '2021-09-13', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_carreras`
--

CREATE TABLE `usuario_carreras` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idCarrera` int(11) NOT NULL,
  `resulto_hora` datetime(6) DEFAULT NULL,
  `puesto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario_carreras`
--

INSERT INTO `usuario_carreras` (`id`, `idUsuario`, `idCarrera`, `resulto_hora`, `puesto`) VALUES
(1, 27, 70, '2021-09-07 17:39:41.557000', 1),
(2, 27, 70, NULL, 2),
(3, 27, 73, NULL, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_carreras_day`
--

CREATE TABLE `usuario_carreras_day` (
  `id` int(11) NOT NULL,
  `idUsuario` int(11) NOT NULL,
  `idCarrera` int(11) NOT NULL,
  `resulto_hora` datetime(6) DEFAULT NULL,
  `puesto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario_carreras_day`
--

INSERT INTO `usuario_carreras_day` (`id`, `idUsuario`, `idCarrera`, `resulto_hora`, `puesto`) VALUES
(5, 27, 98, NULL, NULL),
(6, 27, 99, NULL, NULL),
(7, 27, 100, NULL, NULL),
(8, 27, 94, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `codegen`
--
ALTER TABLE `codegen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reclamaciones`
--
ALTER TABLE `reclamaciones`
  ADD PRIMARY KEY (`id_reclamaciones`);

--
-- Indices de la tabla `tc_codigo`
--
ALTER TABLE `tc_codigo`
  ADD PRIMARY KEY (`i_idcodigo`);

--
-- Indices de la tabla `tc_mailenvio`
--
ALTER TABLE `tc_mailenvio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tc_pais`
--
ALTER TABLE `tc_pais`
  ADD PRIMARY KEY (`i_idpais`);

--
-- Indices de la tabla `tc_persona`
--
ALTER TABLE `tc_persona`
  ADD PRIMARY KEY (`i_idpersona`),
  ADD UNIQUE KEY `c_dniper` (`c_dniper`);

--
-- Indices de la tabla `tc_smsenvio`
--
ALTER TABLE `tc_smsenvio`
  ADD PRIMARY KEY (`i_id`);

--
-- Indices de la tabla `tc_ticketsinicio`
--
ALTER TABLE `tc_ticketsinicio`
  ADD PRIMARY KEY (`i_idticketinicio`);

--
-- Indices de la tabla `tc_usuario`
--
ALTER TABLE `tc_usuario`
  ADD PRIMARY KEY (`i_idusuario`),
  ADD UNIQUE KEY `t_correoper` (`t_correoper`),
  ADD UNIQUE KEY `celular` (`n_celular`),
  ADD UNIQUE KEY `username` (`t_username`),
  ADD KEY `i_idpersona` (`i_idpersona`);

--
-- Indices de la tabla `tc_validarcorreo`
--
ALTER TABLE `tc_validarcorreo`
  ADD PRIMARY KEY (`i_idvalida`);

--
-- Indices de la tabla `ti_monedero`
--
ALTER TABLE `ti_monedero`
  ADD PRIMARY KEY (`i_idmonedero`),
  ADD KEY `fk_ti_monedero_tc_usuario` (`i_idusuario`);

--
-- Indices de la tabla `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id_transaction`);

--
-- Indices de la tabla `usuario_carreras`
--
ALTER TABLE `usuario_carreras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario_carreras_day`
--
ALTER TABLE `usuario_carreras_day`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_idUsuario_idCarrera` (`idUsuario`,`idCarrera`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `codegen`
--
ALTER TABLE `codegen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `reclamaciones`
--
ALTER TABLE `reclamaciones`
  MODIFY `id_reclamaciones` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tc_codigo`
--
ALTER TABLE `tc_codigo`
  MODIFY `i_idcodigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tc_mailenvio`
--
ALTER TABLE `tc_mailenvio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tc_pais`
--
ALTER TABLE `tc_pais`
  MODIFY `i_idpais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT de la tabla `tc_persona`
--
ALTER TABLE `tc_persona`
  MODIFY `i_idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `tc_smsenvio`
--
ALTER TABLE `tc_smsenvio`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `tc_ticketsinicio`
--
ALTER TABLE `tc_ticketsinicio`
  MODIFY `i_idticketinicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tc_usuario`
--
ALTER TABLE `tc_usuario`
  MODIFY `i_idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `tc_validarcorreo`
--
ALTER TABLE `tc_validarcorreo`
  MODIFY `i_idvalida` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ti_monedero`
--
ALTER TABLE `ti_monedero`
  MODIFY `i_idmonedero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id_transaction` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT de la tabla `usuario_carreras_day`
--
ALTER TABLE `usuario_carreras_day`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tc_usuario`
--
ALTER TABLE `tc_usuario`
  ADD CONSTRAINT `fk_tc_persona_tc_usuario` FOREIGN KEY (`i_idpersona`) REFERENCES `tc_persona` (`i_idpersona`);

--
-- Filtros para la tabla `ti_monedero`
--
ALTER TABLE `ti_monedero`
  ADD CONSTRAINT `fk_tc_usuario_tc_monedero` FOREIGN KEY (`i_idusuario`) REFERENCES `tc_usuario` (`i_idusuario`);

DELIMITER $$
--
-- Eventos
--
CREATE DEFINER=`root`@`localhost` EVENT `e_insertcode` ON SCHEDULE EVERY 1 MINUTE STARTS '2021-05-21 16:24:00' ENDS '2021-05-21 16:30:00' ON COMPLETION PRESERVE DISABLE DO INSERT INTO codegen(codes, fecha) VALUES('Evento','23:59:59')$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
