-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2021 a las 18:50:01
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
-- Base de datos: `bd_equilicua`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_i_registrarnuevojuego` (IN `i_idusuario` INT, IN `i_estado` TINYINT, IN `d_utimavez` DATE)  NO SQL
BEGIN

	IF NOT EXISTS (SELECT ue.i_estado FROM ti_usuarioequi ue WHERE ue.i_idusuario = i_idusuario) THEN
	INSERT INTO ti_usuarioequi(i_idusuario, i_estado, d_utimavez)
   	VALUES (i_idusuario, i_estado, CURRENT_DATE);
    ELSE
    	UPDATE ue,ti_usuarioequi
        SET	ue.i_estado = 1,
        	ue.d_utimavez = CURRENT_DATE()
        WHERE ue.i_idusuario = i_idusuario;
	END IF;

END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tc_equilicua`
--

CREATE TABLE `tc_equilicua` (
  `i_id` int(11) NOT NULL,
  `t_pregunta` text NOT NULL,
  `t_respuesta` tinytext NOT NULL,
  `t_pista` varchar(200) DEFAULT NULL,
  `t_kword1` varchar(200) DEFAULT NULL,
  `t_kword2` varchar(200) DEFAULT NULL,
  `t_kword3` varchar(200) DEFAULT NULL,
  `i_uso` tinyint(4) DEFAULT NULL,
  `b_estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tc_equilicua`
--

INSERT INTO `tc_equilicua` (`i_id`, `t_pregunta`, `t_respuesta`, `t_pista`, `t_kword1`, `t_kword2`, `t_kword3`, `i_uso`, `b_estado`) VALUES
(1, '1-¿Sabías que la Copa Davis comenzó en 1900 y hoy es la competición por equipos más grande del mundo? Si ingresas a su página oficial y revisas su historia conocerás a las naciones que la dominaron en sus primeros años. Aquel país que acabó con dicho periodo te dejará avanzar.', 'UNO', NULL, NULL, NULL, NULL, 1, 1),
(2, '2-Sigue la antorcha que arde cada cuatro años para comenzar esta aventura. Tu punto de partida será el primero de dieciocho hoyos olympics.com/tokyo-2020/es/deportes/golf/. ¡Rápido! Un misterioso hombre te espera, descubre quién es y guarda su nombre. Si acudes al que todo lo sabe en busca de él obtendrás la respuesta que estás buscando. La ciudad donde nació te dejará avanzar. ', 'DOS', NULL, NULL, NULL, NULL, 0, 1),
(3, '3-¡Prepárate para una aventura medieval! Ingresa a https://cutt.ly/1voN22g y descubre diez joyas arquitectónicas de antaño. Una vez encuentres la fortaleza de los tres eruditos, tendrás que acudir al que todo lo sabe para buscar la ciudad donde se ubica. ¡No desesperes! Un enlace de kayak.com.pe te guiará por el camino indicado. ¿Qué esperas? El nombre de la ciudad a la que hace referencia su apelativo te dejará avanzar. ', 'TRES', NULL, NULL, NULL, NULL, 0, 1),
(4, '4-¡Rápido! Visita el siguiente enlace https://cutt.ly/LcAwu9x y bucea entre los acuarios más grandes del mundo. Tendrás que encontrar aquel que se ubica en el medio de un hotel y con la ayuda del gran sabio del internet buscar la ciudad donde que lo alberga. ¡No te preocupes! Un enlace de Wikipedia esconde la respuesta que estás buscando. ¿Qué esperas? La primera palabra elevada al cuadrado te dejará avanzar. ', 'CUATRO', NULL, NULL, NULL, NULL, 0, 1),
(5, '5-¡Los juegos olímpicos más esperados están a la vuelta de la esquina! Para empezar el partido tendrás que ingresar a olympics.com/tokyo-2020/es/deportes/baloncesto-3-3/ en busca del panorama que te espera. ¡No pierdas más tiempo! El nombre sin espacios del número uno del mundo te dejará avanzar. ', 'CINCO', NULL, NULL, NULL, NULL, 0, 1),
(6, '6-¿Sabías que George Lucas bromeó durante un tiempo con la posibilidad de titular al Episodio II: La gran aventura de Jar Jar? Ingresa a https://bit.ly/3a5Yhoi y descubre más datos que quizás no conozcas sobre Star Wars. Una vez encuentres al personaje que iba a tener voz, tendrás que acudir al gran sabio del internet para averiguar más sobre él. ¡No pierdas más tiempo! Un enlace de starwars.fandom.com esconde tu respuesta. Para avanzar tendrás que encontrar su mundo natal. ', 'SEIS', NULL, NULL, NULL, NULL, 0, 1),
(7, '7-Para comenzar el acertijo ingresa a https://bit.ly/3rfWu5s y descubre quince leyendas africanas que te dejarán enseñanzas de vida. Busca la historia que menciona cocodrilos dorados y guarda el lugar de donde proviene. ¡No te falta nada! Acude al gran sabio del internet para buscar su lengua oficial, esa es tu respuesta final.', 'SIETE', NULL, NULL, NULL, NULL, 0, 1),
(8, '8-Para iniciar el acertijo tendrás que ingresar a https://bit.ly/36juPZs y descubrir a doce de los más relevantes dioses griegos. Te bastará con leer un poco para encontrar al hijo mayor de Cronos, si le prestas atención a su descripción encontrarás a un dios entre dos paréntesis. ¡No pierdas más tiempo! ¡Recuerda que compites contra el reloj! Para terminar tendrás que correr a su “.mx”, el año que se encuentra a la diestra de aquel dios es tu respuesta final.', 'OCHO', NULL, NULL, NULL, NULL, 0, 1),
(9, '9-¿Sabes dónde se encuentra el monte Vesubio? Si la respuesta es no tendrás que averiguarlo en tu buscador. ¿Qué esperas? Navega al “.net” de la ciudad donde se encuentra y con la ayuda de su guía descubre sus atracciones. El nombre del lugar que te muestra un ángel caído es tu respuesta final.', 'NUEVE', NULL, NULL, NULL, NULL, 0, 1),
(10, '10-Para comenzar el acertijo ingresa a https://bit.ly/3rfWu5s y descubre quince leyendas africanas que te dejarán enseñanzas de vida. Busca la historia que menciona cocodrilos dorados y guarda el lugar de donde proviene. ¡No te falta nada! Acude al gran sabio del internet para buscar su lengua oficial, esa es tu respuesta final.', 'DIEZ', NULL, NULL, NULL, NULL, 0, 1),
(11, '11-Para comenzar el acertijo ingresa a https://bit.ly/3rfWu5s y descubre quince leyendas africanas que te dejarán enseñanzas de vida. Busca la historia que menciona cocodrilos dorados y guarda el lugar de donde proviene. ¡No te falta nada! Acude al gran sabio del internet para buscar su lengua oficial, esa es tu respuesta final.', 'ONCE', NULL, NULL, NULL, NULL, 0, 1),
(12, '12-¿Sabías que George Lucas bromeó durante un tiempo con la posibilidad de titular al Episodio II: La gran aventura de Jar Jar? Ingresa a https://bit.ly/3a5Yhoi y descubre más datos que quizás no conozcas sobre Star Wars. Una vez encuentres al personaje que iba a tener voz, tendrás que acudir al gran sabio del internet para averiguar más sobre él. ¡No pierdas más tiempo! Un enlace de starwars.fandom.com esconde tu respuesta. Para avanzar tendrás que encontrar su mundo natal. ', 'DOCE', NULL, NULL, NULL, NULL, 0, 1),
(16, '14-¿Sabías que George Lucas bromeó durante un tiempo con la posibilidad de titular al Episodio II: La gran aventura de Jar Jar? Ingresa a https://bit.ly/3a5Yhoi y descubre más datos que quizás no conozcas sobre Star Wars. Una vez encuentres al personaje que iba a tener voz, tendrás que acudir al gran sabio del internet para averiguar más sobre él. ¡No pierdas más tiempo! Un enlace de starwars.fandom.com esconde tu respuesta. Para avanzar tendrás que encontrar su mundo natal. ', 'CATORCE', NULL, NULL, NULL, NULL, 1, NULL),
(17, '15-¿Sabías que George Lucas bromeó durante un tiempo con la posibilidad de titular al Episodio II: La gran aventura de Jar Jar? Ingresa a https://bit.ly/3a5Yhoi y descubre más datos que quizás no conozcas sobre Star Wars. Una vez encuentres al personaje que iba a tener voz, tendrás que acudir al gran sabio del internet para averiguar más sobre él. ¡No pierdas más tiempo! Un enlace de starwars.fandom.com esconde tu respuesta. Para avanzar tendrás que encontrar su mundo natal. ', 'QUINCE', NULL, NULL, NULL, NULL, 1, NULL),
(18, '20-¡Rápido! Visita el siguiente enlace https://cutt.ly/LcAwu9x y bucea entre los acuarios más grandes del mundo. Tendrás que encontrar aquel que se ubica en el medio de un hotel y con la ayuda del gran sabio del internet buscar la ciudad donde que lo alberga. ¡No te preocupes! Un enlace de Wikipedia esconde la respuesta que estás buscando. ¿Qué esperas? La primera palabra elevada al cuadrado te dejará avanzar. ', 'VEINTE', NULL, NULL, NULL, NULL, 1, NULL),
(19, '21-¡Rápido! Visita el siguiente enlace https://cutt.ly/LcAwu9x y bucea entre los acuarios más grandes del mundo. Tendrás que encontrar aquel que se ubica en el medio de un hotel y con la ayuda del gran sabio del internet buscar la ciudad donde que lo alberga. ¡No te preocupes! Un enlace de Wikipedia esconde la respuesta que estás buscando. ¿Qué esperas? La primera palabra elevada al cuadrado te dejará avanzar. ', 'VEINTIUNO', 'veinte1', '20', '19', '18', 1, NULL),
(20, 'FRANCIA-¿Sabías que la Copa Davis comenzó en 1900 y hoy es la competición por equipos más grande del mundo? Si ingresas a su página oficial y revisas su historia conocerás a las naciones que la dominaron en sus primeros años. Aquel país que acabó con dicho periodo te dejará avanzar.', 'FRANCIA', NULL, NULL, NULL, NULL, NULL, NULL),
(21, '3938-¿Tienes idea de que significa el www que sueles leer en tu navegador? Ingresa https://bit.ly/3sUEP50 y conoce el origen de este término. ¿Qué esperas? Te bastará con leer un poco para encontrar varios años escondidos en los párrafos, la suma de aquellos que no se repiten es tu respuesta final.', '3938', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tc_equilicua_x`
--

CREATE TABLE `tc_equilicua_x` (
  `i_id` int(11) NOT NULL,
  `t_pregunta` text NOT NULL,
  `t_respuesta` tinytext NOT NULL,
  `t_pista` varchar(200) DEFAULT NULL,
  `t_kword1` varchar(200) DEFAULT NULL,
  `t_kword2` varchar(200) DEFAULT NULL,
  `t_kword3` varchar(200) DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `i_uso` tinyint(4) DEFAULT 1,
  `b_estado` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tc_equilicua_x`
--

INSERT INTO `tc_equilicua_x` (`i_id`, `t_pregunta`, `t_respuesta`, `t_pista`, `t_kword1`, `t_kword2`, `t_kword3`, `user_id`, `i_uso`, `b_estado`) VALUES
(9, 'Para empezar el acertijo tendrás que acudir al gran sabio del Internet y preguntarle dónde se encuentra el cuadro “El Grito”. Una vez conozcas la respuesta deberás buscar aquel lugar en Google maps. ¡Rápido! Guardar el nombre de la calle donde se encuentra, el masculino del animal que se esconde al final te dejará avanzar.', 'GATO', '', 'ARTE', 'MAPA', 'ANIMALES', 3, 0, NULL),
(10, '¿Sabias que el lagarto Basilisco puede caminar sobre el agua? Ingresa a https://bit.ly/3iHqxjG y descubre cómo. Guarda el nombre por el que lo suelen llamar y navega a su “.org” para continuar. ¡No te desesperes! Antes de todo deberás traducir tu página al español, el nombre sin espacios del libro que se menciona más de una vez en el menú es tu respuesta final.', 'LABIBLIA', '', 'ANIMALES', 'LITERATURA', 'RELIGION', 3, 0, NULL),
(11, '¿Tienes idea de que significa el www que sueles leer en tu navegador? Ingresa https://bit.ly/3sUEP50 y conoce el origen de este término. ¿Qué esperas? Te bastará con leer un poco para encontrar varios años escondidos en los párrafos, la suma de aquellos que no se repiten es tu respuesta final.', '3938', '', 'CURIOSIDADES', 'CIENCIA', 'HISTORIA', 3, 1, NULL),
(12, '¿Sabías que la narcolepsia es un trastorno crónico del sueño que se caracteriza por una somnolencia extrema durante el día y ataques repentinos de sueño? Ingresa a https://mayocl.in/2KMJhBH y prepárate para contar. Encuentra el tercero de sus síntomas y guarda la vigesimoséptima palabra de su segundo párrafo. Si la buscas en tu navegador el gran sabio del internet te mostrará una famosa banda de rock, el año en el que se fundó es tu respuesta final.', '1980', '', 'CIENCIA', '', '', 3, 0, NULL),
(13, '¿Sabías que Dalí tiene su propio museo? Ingresa a https://bit.ly/3rAKKLm para recorrer su tour virtual y descubrir la obra de este de este fascinante autor. ¡Rápido! Corre hacia al centro del patio y encontrarás un clásico del Siglo XX. Tendrás que ponerte a contar cuantas modelos intentan señalar el cielo, una vez tengas el número correcto viaja a su “.com”. ¡No te falta nada! La casta a la que pertenece es tu respuesta final.', 'ESPADAS', '', 'ARTE', 'CURIOSIDADES', 'VRT', 3, 0, NULL),
(14, '¿Sabías que uno de los más grandes exponentes del surrealismo tiene su propio museo? Ingresa a https://bit.ly/3rAKKLm para descubrir de quien estamos hablando y recorrer su tour virtual. Una vez llegues a la cúpula que esconde su tumba, descubrirás en el ojo de qué animal se inspiró. ¿Qué esperas? Su plural te dejará avanzar. ', 'MOSCAS', '', 'ARTE', 'CURIOSIDADES', 'VRT', 3, 0, NULL),
(15, 'Para empezar el acertijo tendrás que ingresar a https://bit.ly/3rAKKLm y recorrer los pasillos del tour virtual más fascinante que verás. ¡Recuerda que compites contra el reloj! Utiliza los atajos que sean necesarios, tu destino es un pequeño salón rojo que alberga grandes tesoros. ¡No pierdas más tiempo! Tendrás que contar cuantas joyas contiene aquel joyero, si multiplicas aquel número por el año en el que falleció su autor, obtendrás como resultado tu respuesta final.', '29835', '', 'ARTE', 'CURIOSIDADES', 'VRT', 3, 0, NULL),
(16, 'Para resolver este acertijo tendrás que acudir al gran sabio del internet y preguntarle qué se celebra en España el último miércoles de agosto. Cuando te muestren tu respuesta deberás viajar a la página oficial de aquella festividad. ¡Revisa todas sus pestañas! El nombre sin espacios del reportero que la dio a conocer es tu respuesta final.', 'JAVIERBASILIO', '', 'ESPAÑA', '', '', 3, 0, NULL),
(17, '¡Rápido! Ingresa a https://bit.ly/2Y32e63 y descubre las visitas ineludibles de la Costa Azul. Tendrás que leer un poco para encontrar el segundo pueblo medieval que mencionan. Guarda su nombre y con la ayuda de Google maps recorre dicha ciudad. ¿Qué esperas? Aquella corriente que la cruza te dejará avanzar.', 'CAGNE', '', 'MAPA', 'FRANCIA', 'TURISMO', 3, 0, NULL),
(18, '¿Tienes idea de en qué provincia se encuentra la ciudad de Elche? Si no conoces la respuesta le puedes preguntar a tu buscador. ¡Rápido! Corre a la página oficial de su ayuntamiento, encuentra el número de contacto y suma todos los dígitos para avanzar.', '53', '', 'ESPAÑA', '', '', 3, 0, NULL),
(19, '¿Sabías que las moscas tienen 15 mil papilas gustativas repartidas por todas sus patas? Ingresa a https://bit.ly/367cPl5 y descubre más características de estos pequeños insectos. Guarda el número que se esconde al final del primer párrafo y corre a https://bit.ly/3iPpeiH para descifrar el misterio de aquella cifra. ¿Qué esperas? La respuesta a la pregunta que has tenido en mente te dejará avanzar.', 'SI', '', 'ANIMALES', '', '', 3, 0, NULL),
(20, '¿Sabes quién escribió “Platero y yo”? Si conoces el nombre del autor estarás en ventaja. Si lo buscas en tu navegador un enlace de cervantes.es te mostrará lo que estás buscando. ¡No te falta nada! El poeta que marcó la primera de sus etapas es tu respuesta final.', 'BECQUER', '', 'LITERATURA', '', '', 3, 0, NULL),
(21, '¿Sabías que las manchas de las jirafas tienen una función? Ingresa a https://bit.ly/3pktfOH y descubre cual es. Te bastará con leer un poco para conocer a quien lideró aquel estudio, si guardas su apellido y saltas a su “.org” unos signos te recibirán. Presta atención, dependiendo de la pantalla desde donde los ves algunos volverán a aparecer. ¡No pierdas más tiempo! Cuenta cuantos no se repiten, ese número es tu respuesta final.', '5', '', 'ANIMALES', 'CURIOSIDADES', 'CIENCIA', 3, 0, NULL),
(22, '¿Conoces a Pete Townshend? Es el guitarrista de una famosa banda. Para iniciar el acertijo tendrás que buscar la página oficial de la banda a la que pertenece y averiguar sobre el. ¡No te desesperes! Podrás utilizar tu traductor. Si leíste el relato hasta el final seguro recordarás una palabra en particular, sus diez letras y sonido singular te ayudarán a ganar.', 'YAGGERDANG', '', 'MUSICA', '', '', 3, 0, NULL),
(23, '¿Conoces las reglas básicas del Quidditch de Salón? Si la respuesta es no, el siguiente documento te las mostrará https://bit.ly/3ooK8pP. ¿Qué esperas? El nombre sin espacios de quien no lleva una escoba es tu respuesta final.', 'SNITCHRUNNER', '', 'DEPORTE', '', '', 3, 0, NULL),
(24, '¿Sabes en qué ciudad se encuentra el museo San Telmo? Si no conoces la respuesta le puedes consultar a tu buscador. ¿Qué esperas? Corre al “festival.com” de dicha ciudad y con la ayuda del mapa que ves en el menú revisa sus puntos de encuentro. ¡No te falta nada! El género que tocan en uno de ellos es tu respuesta final.', 'JAZZ', '', 'MEPA', 'MUSICA', 'ESPAÑA', 3, 0, NULL),
(25, 'Para resolver este acertijo tendrás que buscar la capital de Hawaí en Google maps. Si te fijas con atención te darás cuenta que un número primo la divide. ¡Rápido! Si miras de cerca el inicio de aquella ruta el jardín de una reina aparecerá, su nombre es tu respuesta final.', 'EMMA', '', 'HAWAI', 'MAPA', '', 3, 0, NULL),
(26, '¿Alguna vez visitaste la Cueva del Milodón? Si la buscas en tu navegador un enlace de conaf.cl te mostrará sus distintos accesos. ¡Rápido! Guarda el nombre del último puerto que menciona y con la ayuda de Google maps revisa su localidad para poder ganar. Uno de sus campos verdes esconde tu respuesta, si los revisas con atención tres nombres te saludaran. El segundo de ellos es tu respuesta final. ', 'MARIA', '', 'MAPA', 'CHILE', 'TURISMO', 3, 0, NULL),
(27, '¿Tienes idea de donde queda el puente de Angostura? Para resolver el acertijo tendrás que buscarlo en Google maps y guardar el nombre del río sobre el que se encuentra. ¿Qué esperas? Si acudes al gran sabio del internet en busca del número que aparece su longitud podrás avanzar. ', '2250', '', 'VENEZUELA', '', '', 3, 0, NULL),
(28, 'Si te gusta viajar por el mundo este acertijo te encantará. Si buscas la capital de Nueva Zelanda en tu navegador un enlace de newzealand.com aparecerá, dale clic si piensas que puedes avanzar. ¿Qué esperas? Si estás en el lugar correcto será fácil revisar sus pueblos, guarda el nombre de quien te muestra una caída blanca y corre a su “.org” para terminar con el acertijo. La palabra que viste de amarillo es tu respuesta final.', 'FRITCH', '', 'TURISMO', '', '', 3, 0, NULL),
(29, 'Si eres fan de Guns \"N\" Roses este acertijo es para ti. Será necesario que averigües el nombre de su vocalista e ingrese a www.buenamusica.com para revisar su biografía, historia y legado musical. Recuerda el lugar donde tocaba el piano y sin perder más tiempo salta a su “.org”. Si al llegar saludaste al gran vicario estas en el sitio indicado. ¿Qué esperas? Visita el enlace que te muestran para llegar al destino indicado. El nombre sin espacios del lugar en el que te encuentras es tu respuesta final.', 'LASANTASEDE', '', 'MUSICA', 'RELIGION', 'HISTORIA', 3, 0, NULL),
(30, 'Ingresa a https://bit.ly/3t4dbmb para conocer el asombroso origen de uno de los juegos más icónicos de los ochenta. Te bastará con leer un poco para conocer a su creador y saber en qué país lo patentó. Guarda aquella nación y con la ayuda de tu navegador encuentra su capital. ¡No pierdas más tiempo! Para la siguiente búsqueda te recomiendo usar Google maps, el nombre de quien divide la ciudad es tu respuesta final.', 'DANUBIO', '', 'HISTORIA', 'JUEGO', 'MAPA', 3, 0, NULL),
(31, '¿Tienes idea de cuál fue la primera película de Walt Disney? Ingresa a https://bit.ly/2Mox1YB y descubre este famoso largometraje. Te bastará con leer un poco para conocer a los autores del cuento en el que se inspiró, si los buscas en tu navegador un enlace de biografiasyvidas.com te ayudará. ¡No te pierdas en el texto! Uno de los párrafos acaba en un número en particular, ese año es tu respuesta final.', '1960', '', 'DISNEY', 'PELICULA', 'HISTORIA', 3, 0, NULL),
(32, '¿Tienes idea de cuál es el nombre real del cantante Bruno Mars? Tendrás que acudir al que todo lo sabe para obtener esta respuesta. ¡Rápido! Guarda el más corto de sus apellidos y corre a www.heraldicafamiliar.com para buscar su origen. ¡No pierdas más tiempo! Para resolver el acertijo tendrás que guardar la inicial de los lugares donde lo puedes encontrar, aquel código es tu respuesta final. ', 'BLTBGCVAZM', '', 'MUSICA', '', '', 3, 0, NULL),
(33, '¿Sabes dónde se encuentra el monte Vesubio? Si la respuesta es no tendrás que averiguarlo en tu buscador. ¿Qué esperas? Navega al “.net” de la ciudad donde se encuentra y con la ayuda de su guía descubre sus atracciones. El nombre del lugar que te muestra un ángel caído es tu respuesta final.', 'POMPEYA', '', 'ITALIA', 'TURISMO', '', 3, 0, NULL),
(34, '¿Conoces la historia de la Pompeya? Si ingresas a https://bit.ly/36hbdoY podrás descubrir la historia de esta ciudad atrapada en el tiempo. Guarda el año exacto en el que iniciaron las excavaciones e ingresa a https://bit.ly/3psyvj9 para descifrar el mensaje que esconde aquel número. ¡No pierdas más tiempo! Si leíste el enunciado con atención, la respuesta a la siguiente pregunta te dejará avanzar. ¿Qué dejará de avanzar?', 'PROCESOS', '', 'HISTORIA', '', '', 3, 0, NULL),
(35, '¿Alguna vez oíste hablar de Turkmenistán? Si ingresas a https://bit.ly/2YhiEYM podrás conocer al gran desconocido de Asia Central. ¡Rápido! Tendrás que revisar la página con rapidez, recuerda que compites contra el reloj. Guarda el nombre de quien lleva varias décadas ardiendo y con la ayuda de Wikipedia revisa su información. La cantidad de grados que llega a alcanzar su interior es tu respuesta final.', '400', '', 'ASIA', 'CURIOSIDADES', 'CIENCIA', 3, 0, NULL),
(36, 'Para comenzar el acertijo tendrás que ingresar a https://bit.ly/2M7NiBi y descubrir seis volcanes españoles que seguramente desconocías. Guarda el nombre del que contiene una pequeña capilla en su interior y con la ayuda de tu buscador encuentra su elevación. ¡Rápido! La suma de sus cifras es tu respuesta final.', '22', '', 'ESPAÑA', 'MAPA', 'CIENCIA', 3, 1, NULL),
(37, '¿Tiene idea de cuál es la patrona de la ciudad de Zaragoza? Si le preguntas a tu buscador un enlace de almamatermuseum.com te ayudará a avanzar. ¡No te pierdas en el texto! Si no eres bueno en matemáticas te recomiendo usar tu calculadora. ¿Qué esperas? Si sumas todos los años que encuentras en su bibliografía podrás avanzar.', '12020', '', 'ESPAÑA', '', '', 3, 0, NULL),
(38, '¿Sabes que país es considerado \"la tierra de los mil lagos\"? Si ingresas al siguiente enlace lo descubrirás https://bit.ly/36kGkzT. Te bastará con leer un poco para encontrar el corazón de la región. ¡No pierdas más tiempo! Si navegas a su “.com” un portal de noticias te acogerá, los dos grandes grafemas que reposan en el inicio del encabezado son tu respuesta final.', 'WN', '', 'TURISMO', '', '', 3, 0, NULL),
(39, 'Si te gustan las matemáticas el siguiente acertijo te encantará. Para empezar tendrás que ingresar al siguiente enlace https://bit.ly/2Yp9J7Q y guardar los tres últimos dígitos que esconde el extenso irracional. ¡Rápido! ¡Recuerda que compites contra el reloj! Si corres a su “.net” un idioma extranjero te recibirá. ¡No te desesperes! Con la ayuda de tu traductor revisa su información, el prefijo que debes marcar para comunicarte con ellos es tu respuesta final.', '852', '', 'CIENCIA', '', '', 3, 0, NULL),
(40, '¿Sabías que la topografía es la ciencia que estudia el conjunto de principios y procedimientos que tienen por objeto la representación gráfica de la superficie de la Tierra? Ingresa a https://bit.ly/3qWV0wY y descubre más sobre esta fascinante carrera. Te bastará con leer un poco para encontrar sus campos de acción, si guardas el segundo en la lista y navegas a su “.com” te acercarás al final. ¿Qué esperas? El nombre del símbolo que no deja de girar sobre su eje te dejará avanzar.', 'ARROBA', '', 'CIENCIA', '', '', 3, 0, NULL),
(41, '¿Te has preguntado alguna vez cuales son los animales más venenosos del mundo? Ingresa a https://bit.ly/2NJKyux y conoce a los diez más letales. Encuentra al pequeño amarillo y con un clic en su nombre sigue su enlace. ¡No pierdas más tiempo! Con la ayuda del índice salta a su alimentación, el singular del último animal en la lista es tu respuesta final. ', 'ESCARABAJO', '', 'ANIMALES', '', '', 3, 0, NULL),
(42, '¿Sabías que el café más caro del mundo procede de excrementos de civeta? Un pequeño mamífero de apariencia felina. Si ingresas al siguiente enlace https://bit.ly/3iX9fio podrás conocer este peculiar procedimiento. ¿Qué esperas? Encuentra el link que esconde uno de sus párrafos y visítalo cuanto antes. Para avanzar tendrás que buscar a un famoso compositor, deslizate hasta el final y lo verás. Su nombre es tu dejará avanzar. ', 'AMADEUS', '', 'GASTRONOMIA', 'ANIMALES', 'MUSICA', 3, 0, NULL),
(43, '¿Sabías que el tití gris es el pequeño mono colombiano que se resiste a desaparecer? Para comenzar el acertijo tendrás que conocer más sobre él. Búscalo en la página oficial del Zoológico de Santacruz (Colombia) y guarda el último mes que mencionan en su descripción. ¡No te falta nada! Si le restas sus consonantes y corres a su “.org” un plano ovalado te recibirá. ¡Rápido! La cifra encasillada es tu respuesta final.', '69138', '', 'ANIMALES', '', '', 3, 0, NULL),
(44, '¿Sabías que según la hipótesis más aceptada, la Luna nació a partir de la colisión entre la Tierra y Tea, un antiguo astro con un tamaño comprendido entre el de la Luna y Marte? Ingresa a https://bit.ly/3iXCgLe y descubre esta compleja historia. ¡Rápido! Encuentra la mitología que mencionan en más de un párrafo y acude al que todo lo sabe para conocer a sus dioses. El nombre de quien suele ser representado sujetando una lira es tu respuesta final.', 'APOLO', '', 'ESPACIO', 'CIENCIA', 'MITOLOGIA', 3, 0, NULL),
(45, 'Para comenzar el acertijo tendrás que ingresar a https://bit.ly/36juPZs y conocer a doce de los más relevantes dioses griegos. Una vez encuentres al gran mensajero, tendrás que recordar el lugar donde nació, si le agregas un artículo determinado y viajas a su “.com” llegarás al lugar indicado. ¡Rápido! ¡Recuerda que compites contra el reloj! El nombre del príncipe que espera sentado es tu respuesta final. ', 'PARIS', '', 'MITOLOGIA', '', '', 3, 0, NULL),
(46, '¡Si te gusta la mitología griega este acertijo te encantará! Tendrás que ingresar a https://bit.ly/36juPZs y conocer a doce de sus dioses más relevantes. Una vez encuentres a la melliza de Apolo tendrás que buscar en su descripción el nombre de una constelación. ¿Qué esperas? Si navegas a su “.org” y utilizas tu traductor pronto podrás acabar. ¡Rápido! ¡Ponte a contar! La quinta palabra rodeada de comillas es tu respuesta final. ', 'ESTRELLA', '', 'MITOLOGIA', 'HISTORIA', 'ESPACIO', 3, 0, NULL),
(47, 'Para iniciar el acertijo tendrás que ingresar a https://bit.ly/36juPZs y descubrir a doce de los más relevantes dioses griegos. Te bastará con leer un poco para encontrar al hijo mayor de Cronos, si le prestas atención a su descripción encontrarás a un dios entre dos paréntesis. ¡No pierdas más tiempo! ¡Recuerda que compites contra el reloj! Para terminar tendrás que correr a su “.mx”, el año que se encuentra a la diestra de aquel dios es tu respuesta final.', '1988', '', 'MITOLOGIA', '', '', 3, 0, NULL),
(48, '¿Sabías que la mitología griega es una de las más populares en la cultura occidental? Si ingresas a https://bit.ly/36juPZs podrás descubrir a sus doce dioses más relevantes. Una vez encuentres a la diosa con el nombre más corto en la lista, tendrás que guardar la fiesta que la honra. ¿Qué esperas? Si navegas a su “.info” varias lenguas te recibirán. ¡Rápido! La palabra en vasco es tu respuesta final.', 'KAIXO', '', 'MITOLOGIA', 'HISTORIA', 'IDIOMAS', 3, 0, NULL),
(49, '¿Sabías que a través de la historia, diversas epidemias han acabado con la vida de millones de personas en todo el mundo? Ingresa a https://bit.ly/3pzdSlA y descubre las diez más letales. Una vez encuentres la enfermedad que en un solo año acabó con cerca de 50 millones de personas, tendrás que guardar el país donde empezó. ¿Qué esperas? Si viajas a su “.com” un gran mapa te recibirá, el símbolo que separa a las tres grandes iniciales es tu respuesta final. ', 'ESTRELLA', '', 'CIENCIA', 'HISTORIA', 'PAISES', 3, 0, NULL),
(50, 'Para empezar el acertijo tendrás que ingresar a https://bit.ly/3pzdSlA y conocer las diez epidemias más letales de la historia. Una vez encuentres a la primera enfermedad en la lista que afectó al Imperio Romano, tendrás que guardar la segunda palabra de su nombre. ¡No pierdas más tiempo! Si navegas a su “.com” llegarás a un colorido portal, su idioma original es tu respuesta final.', 'PORTUGUES', '', 'CIENCIA', 'HISTORIA', 'IDIOMAS', 3, 0, NULL),
(51, '¿Sabías que la gripe española acabó en un solo año con cerca de 50 millones de personas? Ingresa a https://bit.ly/3pzdSlA y descubre esta y otras letales epidemias. Una vez encuentres a la que es considerada la última gran crisis sanitaria del siglo XX, tendrás que recordar el año en el que empezó. ¡Recuerda que compites contra el reloj! Corre a https://bit.ly/2MARzNA e ingresa el número que guardaste para leer un mensaje. El artículo que se repite dos veces es tu respuesta final. ', 'LO', '', 'CIENCIA', 'HISTORIA', 'ESPAÑA', 3, 0, NULL),
(52, 'Si eres amante del chocolate este acertijo te encantará. Para comenzar tendrás que ingresar a https://bit.ly/2MCisR8 y descubrir siete de los mejores del mundo. Encuentra aquel que muestra su nombre partido y guarda la última ciudad que mencionan en su descripción. ¡Rápido! Si navegas a su “.com” y te deslizas hasta el final, una pregunta te esperará. Si la escribes sin espacios y signos podrás avanzar.', 'WECANHELPYOU', '', 'GASTRONOMIA', '', '', 3, 0, NULL),
(53, 'Si te encanta el chocolate ingresa https://bit.ly/2MCisR8 para conocer cuales son los mejores del mundo. Una vez encuentres a aquellos que son pintados a mano, tendrás que guardar el nombre de su creador. ¿Qué esperas? Para continuar el acertijo tendrás que viajar a su “.com” y utilizar tu traductor. El estado en el que produce chocolates desde el 2001 es tu respuesta final.', 'FLORIDA', '', 'GASTRONOMIA', '', '', 3, 0, NULL),
(54, 'Para comenzar el acertijo tendrás que ingresar al siguiente enlace https://bit.ly/2MCisR8 y descubrir siete de los mejores chocolates del mundo. Una vez encuentres al proveedor oficial de una familia real, tendrás que guardar la ciudad de donde surgió. ¡No pierdas más tiempo! Si saltas a su “.net” el corazón de una gran guía te esperará, el nombre sin espacios de una colorida plaza es tu respuesta final.', 'GRANDPLACE', '', 'GASTRONOMIA', '', '', 3, 0, NULL),
(55, '¿Sabías que América Latina es una región especialmente expuesta a terremotos por su ubicación cercana a placas tectónicas en movimiento? Ingresa a https://bbc.in/36kQmB9 y descubre los más potentes y mortíferos terremotos de la historia. Encuentra el país que se despertó una madrugada de 1976 y sin perder el tiempo busca su escudo en tu navegador. ¿Qué esperas? La primera palabra del pergamino es tu respuesta final.', 'LIBERTAD', '', 'CIENCIA', 'PAISES', 'AMERICASUR', 3, 0, NULL),
(56, 'Para iniciar el acertijo tendrás que ingresar a https://bbc.in/36kQmB9 y revisar una lista de los terremotos de mayor magnitud. Una vez encuentres aquel que sacudió Chile durante cuatro minutos, tendrás que guardar el día en el que ocurrió. ¡Rápido! ¡Recuerda que compites contra el reloj! Ingresa a www.billboard.com/charts/hot-100 y encuentra qué canciones lideraron el ranking aquella fecha, el resultado de la segunda en la lista es tu respuesta final.', '69', '', 'CIENCIA', 'CHILE', 'MUSICA', 3, 0, NULL),
(57, '¿Sabías que el terremoto de mayor magnitud registrado en el mundo tuvo lugar en Valdivia, Chile, en 1960? Ingresa a https://bbc.in/36kQmB9 y conoce más sobre este y otros potentes terremotos. Guarda la ciudad que se destruyó un 31 de mayo y viaja a su “.info” para avanzar. ¡No te desesperes! Podrás utilizar tu traductor. La palabra más larga que esconde una gran pregunta es tu respuesta final.', 'DIABETICOS', '', 'PERU', 'GASTRONOMIA', 'CIENCIA', 3, 0, NULL),
(58, '¿Sabías que el hombre más alto del mundo alcanza los ocho pies de altura? Ingresa a https://bit.ly/3t2Z80e y descubre su asombrosa historia. Una vez encuentres con quien se caso, tendrás que ponerte a restar. La cantidad de centímetros que le lleva a su esposa es tu respuesta final.', '76', '', 'CURIOSIDADES', '', '', 3, 0, NULL),
(59, '¿Sabías que William James Sidis casi doblaba el cociente intelectual de Albert Einstein? Ingresa a https://bit.ly/3oALI8b y conoce a quien es considerado el hombre más inteligente de la historia. Una vez encuentres el idioma que inventó, tendrás que buscarlo en tu navegador. ¡No pierdas más tiempo! Un enlace de Wikipedia te ayudará. Si cuentas cuántas letras tiene el nombre de dicha lengua y escribes aquel número en el mismo idioma podrás avanzar.', 'ECEM', '', 'CURIOSIDADES', 'IDIOMAS', 'CIENCIA', 3, 0, NULL),
(60, '¿Tienes idea de quién fue el hombre más inteligente de toda la historia? Ingresa https://bit.ly/3oALI8b y descúbrelo. Si revisas el artículo con atención encontrarás el enlace de una web. ¿Qué esperas? Tendrás que saltar esa dirección. ¡Rápido! El nombre sin espacios del primer libro en lista es tu respuesta final.', 'THEANIMATEANDTHEINANIMATE', '', 'CURIOSIDADES', 'HISTORIA', 'CIENCIA', 3, 0, NULL),
(61, '¿Sabías que William James Sidis es considerado el hombre más inteligente de la historia? Ingresa a https://bit.ly/3oALI8b y conoce más sobre este genio. Una vez encuentres la universidad donde su padre le encontró trabajo, tendrás que guardar el nombre de la ciudad donde se ubica. ¡No pierdas más tiempo! El año de su fundación es tu respuesta final.', '1837', '', 'CURIOSIDADES', 'HISTORIA', 'CIENCIA', 3, 0, NULL),
(62, 'Si te gusta el arte este acertijo te encantará. Explora la página oficial del Museo de Arte Latinoamericano y revisa su colección. ¡Rápido! Guarda el nombre de quien pintó un azul partido y corre a www.biografiasyvidas.com para leer su biografiá. ¿Qué esperas? Tendrás que ponerte a contar, el nombre de la serie que mencionan en el tercer párrafo es tu respuesta final.', 'PAVANGOLES', '', 'ARTE', '', '', 3, 0, NULL),
(63, 'Para comenzar el acertijo tendrás que visitar la página oficial del Museo de Arte Latinoamericano y explorar su colección. Te bastará con deslizarte un poco para encontrar una frondosa ciudad. ¡Rápido! Si navegas a su “.org” verde paisajes te recibirán, el número que sostiene una santa cruz es tu respuesta final.', '250', '', 'ARTE', '', '', 3, 0, NULL),
(64, 'Si eres amante de la gastronomía este acertijo te encantará. Ingresa a https://bit.ly/3rblaw3 y descubre quince de los platos más exquisitos de la comida mexicana. Te bastará con leer un poco para encontrar al que suele estar presente en el menú del día, si guardas el nombre de la ciudad donde se celebra su festival estarás a un paso de terminar. ¿Qué esperas? Tendrás que buscar el escudo de aquel lugar, no te preocupes un enlace de Wikipedia ayudará, el número de huellas que lleva sobre él es tu respuesta final.', '20', '', 'GASTRONOMIA', '', '', 3, 0, NULL),
(65, 'Para comenzar el acertijo ingresa al siguiente enlace https://bit.ly/3rblaw3 y descubre quince platos que no puedes dejar de comer en México. Una vez encuentres al acompañante ideal, tendrás que guardar el nombre de una isla del caribe. ¡No pierdas más tiempo! Su capital es tu respuesta final.', 'KINGSTON', '', 'GASTRONOMIA', 'MEXICO', 'JAMAICA', 3, 0, NULL),
(66, '¿Sabías que África cuenta con una riqueza cultural basta y llena de sabiduría? Ingresa a https://bit.ly/3rfWu5s y descubre el significado de algunas de sus grandes leyendas. Cuando encuentres aquella que habla de un lago sagrado, tendrás que guardar la isla de donde proviene. ¡Rápido! Si corres a IMDb y buscas aquel lugar en tu buscador una película del 2005 aparecerá. ¡No te queda mucho tiempo! Si cuentas las fotos de su galería podrás avanzar.', '139', '', 'AFRICA', 'LEYENDAS', 'PELICULA', 3, 0, NULL),
(67, 'Para comenzar el acertijo ingresa a https://bit.ly/3rfWu5s y descubre quince leyendas africanas que te dejarán enseñanzas de vida. Busca la historia que menciona cocodrilos dorados y guarda el lugar de donde proviene. ¡No te falta nada! Acude al gran sabio del internet para buscar su lengua oficial, esa es tu respuesta final.', 'INGLES', '', 'AFRICA', 'LEYENDAS', 'IDIOMAS', 3, 0, NULL),
(68, 'Si eres amante del arte este acertijo te encantará. Ingresa a https://bit.ly/2LtIK82 y descubre los datos más curiosos de Salvador Dalí, el excéntrico maestro surrealista. Te bastará con leer un poco para saber de donde lo expulsaron, Para acercarte a la respuesta final, tendrás que guardar el nombre de aquel lugar y buscarlo en Google maps. ¿Qué esperas? Mira con atención y podrás encontrar la salida con facilidad. ¡Te queda poco tiempo! Si te retiraste a pie, a tu siniestra encontrarás un gran contador, su nombre sin espacios te dejará avanzar.', 'RELOJCARRILLON', '', 'ARTE', 'CURIOSIDADES', '', 3, 0, NULL),
(69, '¿Sabías que Dalí creía que era la reencarnación de su hermano difunto? Ingresa a https://bit.ly/2LtIK82 y descubre más datos surrealistas sobre este excéntrico artista. Una vez encuentres a quien veía como una hechicera, tendrás que buscarla en biografiasyvidas.com. ¡No pierdas más tiempo! La ciudad que acaba con uno de los párrafos es tu respuesta final.', 'LIVERPOOL', '', 'ARTE', 'CURIOSIDADES', '', 3, 0, NULL),
(70, 'Para empezar el acertijo tendrás que ingresar a https://bit.ly/2LtIK82 y descubrir dieciocho de los datos más curiosos de Salvador Dalí. Guarda el nombre del escritor que convocó una reunión y sin perder más tiempo salta a su “.fr”. ¡Rápido! Un gran muro esconde tu respuesta, el gran código alfanumérico enmarcado entre aros te dejará avanzar.', 'LHOOQ', '', 'ARTE', 'CURIOSIDADES', '', 3, 0, NULL),
(71, 'Si eres amante del arte este acertijo te encantará. Ingresa a https://bit.ly/2LtIK82 y descubre los datos más curiosos de Salvador Dalí, el excéntrico maestro surrealista. Te bastará con leer un poco para encontrar la primera obra que realizó. ¡Atento! Tendrás que saltar a su enlace para avanzar. Si utilizas tu traductor y lees su historia de exposición, un año par te dejará avanzar. ', '1982', '', 'ARTE', 'CURIOSIDADES', '', 3, 0, NULL),
(72, '¿Sabías que Dalí tuvo un matrimonio poco convencional? Ingresa a https://bit.ly/2LtIK82 y descubre más sobre este excéntrico artista. Guarda el nombre de la película animada en la que trabajó y salta a su “.org” para continuar. ¡Rápido! ¡Recuerda que compites contra el reloj! Si revisas su historia el futuro te deslumbrará, su última palabra es tu respuesta final.', 'DIOS', '', 'ARTE', 'CURIOSIDADES', '', 3, 0, NULL),
(73, 'Para empezar el acertijo tendrás que ingresar a https://bit.ly/3aPNPAt y descubrir dieciocho de los datos más curiosos de Salvador Dalí. Una vez encuentres a la diseñadora con quien trabajó, tendrás que navegar al “.es” del lugar donde nació. ¡No pierdas más tiempo! La ciudad del primero de los amigos es tu respuesta final.', 'VENECIA', '', 'ARTE', 'CURIOSIDADES', '', 3, 0, NULL),
(74, '¿Sabías que Dalí diseñó el logo de Chupa Chups? Ingresar a https://bit.ly/3aPNPAt y descubre más sobre la vida de este fascinante autor. ¿Qué esperas? Busca al músico que admiró y mira el video de su encuentro. ¡Recuerda que compites contra el reloj! Salta algunos segundos de ser necesario, tu respuesta final se esconde a lo largo de un cuerpo partido.', 'SDA', '', 'ARTE', 'CURIOSIDADES', '', 3, 0, NULL),
(75, 'Para empezar el acertijo tendrás que ingresar al siguiente enlace https://bit.ly/3rAKKLm para recorrer el tour virtual de uno de los más grandes exponentes del surrealismo. ¡No pierdas más tiempo! Sube al último de sus pisos y encuentra el salón de una famosa actriz, su ojo derecho esconde tu próximo destino. Si corres al “.com” de la ciudad donde se encuentra y utilizas tu traductor te acercarás al final. La tercera opción del menú te dejará avanzar. ', 'CULTURA', '', 'ARTE', 'CURIOSIDADES', 'VRT', 3, 0, NULL),
(76, 'Si eres amante del arte este acertijo te encantará. ¿Qué esperas? Navega a https://bit.ly/3rAKKLm y recorre uno de los más fascinantes tours virtuales que conocerás. Si ingresas por el vestíbulo y recorres el pasillo de la derecha, un gigantesco plumífero te recibirá. El nombre sin espacio de quienes la donaron es tu respuesta final.', 'XIQUETSDEVALLS', '', 'ARTE', 'CURIOSIDADES', 'VRT', 3, 0, NULL),
(77, 'Si eres fan de Dalí este acertijo te encantará. ¿Qué esperas? Navega a https://bit.ly/3rAKKLm y encuentra su tour virtual, sus pasillos te deslumbrarán. Para avanzar simplemente tendrás que pedir un taxi, si no te molesta compartir uno ingresa al que se encuentra bajo la lluvia. ¡Rápido! Cuanta cuantos caracoles lleva uno de los pasajeros y navega al “.pe” de aquel número. ¡No te falta nada! La última opción del menú es tu respuesta final.', 'ARCHIVO', '', 'ARTE', 'CURIOSIDADES', 'VRT', 3, 0, NULL),
(78, 'Si eres fan de Star Wars este acertijo te encantará. Ingresa a https://bit.ly/3a5Yhoi y descubre algunas curiosidades de su universo que tal vez no conozcas. Te bastará con leer un poco para encontrar a quien se desmayó en el desierto. ¿Qué esperas? Si visitas su página oficial y revisas su galería lo podrás encontrar bajo un gran paraguas. ¡Rápido! La palabra que se esconde detrás, sin signos de puntuación, es tu respuesta final.', 'BBIRD', '', 'STARWARS', '', '', 3, 0, NULL),
(79, '¿Sabías que la inspiración del compañero de aventuras de Han Solo, Chewbacca, fue el propio perro de George Lucas? Ingresa a https://bit.ly/3a5Yhoi y descubre más datos que quizás no conozcas sobre Star Wars. Una vez encuentres al personaje que interpretó su creador, tendrás que acudir al gran sabio del internet para averiguar a qué planeta pertenece. ¡No te desesperes! Un enlace de starwars.fandom.com te ayudará.', 'PANTORA', '', 'STARWARS', '', '', 3, 0, NULL),
(80, 'Para empezar el acertijo tendrás que ingresar a https://bit.ly/3a5Yhoi y descubrir veintiocho de los datos más curiosos de Star Wars. Guarda el nombre de quien protagonizó el cameo más famoso y corre a IMDb para ver su tráiler. ¡No pierdas más tiempo! La respuesta que buscas se esconde al inicio del video. El número de ruedas que viajan al sol te dejará avanzar. ', '10', '', 'STARWARS', '', '', 3, 0, NULL),
(81, 'Si eres fan de Star Wars este acertijo te encantará. Ingresa a https://bit.ly/3a5Yhoi y descubre datos de la saga que tal vez no conozcas. Te bastará con leer un poco para encontrar a quien solían golpear con un martillo. ¿Qué esperas? Si guardas su nombre y lo buscas en tu navegador, un enlace de Wikipedia te ayudará. El nombre sin espacios de la película que viste de rojo es tu respuesta final.', 'WOMBLINGFREE', '', 'STARWARS', '', '', 3, 0, NULL),
(82, '¿Sabías que George Lucas bromeó durante un tiempo con la posibilidad de titular al Episodio II: La gran aventura de Jar Jar? Ingresa a https://bit.ly/3a5Yhoi y descubre más datos que quizás no conozcas sobre Star Wars. Una vez encuentres al personaje que iba a tener voz, tendrás que acudir al gran sabio del internet para averiguar más sobre él. ¡No pierdas más tiempo! Un enlace de starwars.fandom.com esconde tu respuesta. Para avanzar tendrás que encontrar su mundo natal. ', 'NABOO', '', 'STARWARS', '', '', 3, 1, NULL),
(83, 'Para empezar el acertijo tendrás que ingresar a https://bit.ly/3a5Yhoi y descubrir veintiocho de los datos más curiosos de Star Wars. Guarda el nombre del famoso titiritero que manejó al gran maestro y corre a su “.com” para leer un mensaje. ¡Tendrás que utilizar tu traductor! El lugar sin signos donde puedes averiguar que sucede en su vida es tu respuesta final.', 'THEFRANKOZJAM', '', 'STARWARS', '', '', 3, 0, NULL),
(84, 'Para empezar el acertijo tendrás que ingresar a https://bit.ly/3a4Uck8 y descubrir algunos planetas muy importantes de Star Wars que no aparecen en las películas. Te bastará con leer un poco para encontrar aquel que cuenta con una atmósfera altamente tóxica. ¿Qué esperas? Tendrás que navegar a www.swgalaxymap.com y buscar dicho lugar, la cuadrícula a la que pertenece es tu respuesta final.', 'M17', '', 'STARWARS', '', '', 3, 0, NULL),
(85, 'Si eres fan de Star Wars este acertijo te encantará. Ingresa a https://bit.ly/3a4Uck8 y descubre algunos planetas que tal vez no conozcas. Guarda el nombre de aquel que encuentras dentro de la fuerza y acude al gran maestro del internet para averiguar más de él. ¡No desesperes! Un enlace de starwars.fandom.com esconde tu respuesta. ¡Rápido! El nombre sin espacio de la región a la que pertenece te dejará avanzar.', 'ESPACIOSALVAJE', '', 'STARWARS', '', '', 3, 0, NULL),
(86, '¿Sabías que existen planetas de Star Wars que jamás han visto la luz en las películas? Ingresa a https://bit.ly/3a4Uck8 y descubre cuales son. Una vez encuentres el lugar al que pertenecen los Syndulla, tendrás que navegar a www.swgalaxymap.com para descubrir su sector. ¿Qué esperas? ¡Si lo escribes podrás avanzar!', 'GAULUS', '', 'STARWARS', '', '', 3, 0, NULL),
(87, 'Para empezar el acertijo tendrás que ingresar a https://bit.ly/3a4Uck8 y descubrir algunos planetas de Star Wars que jamás han visto la luz en las películas. Una vez encuentres el mundo de guerreros, tendrás que correr a su “.com”. ¡No pierdas más tiempo! ¡Ponte a contar! La cantidad de libros guarda en su librería es tu respuesta final.', '120', '', 'STARWARS', '', '', 3, 0, NULL),
(88, 'Para empezar el acertijo tendrás que ingresar a https://cutt.ly/kcTtXfG y descubrir a las cinco mujeres más influyentes de la historia según la BBC. Una vez encuentres el año en el que nació la poderosa oradora, tendrás que acudir al que todo lo sabe para revisar sus acontecimientos más importantes. ¡No desesperes! Un enlace de Wikipedia te ayudará. El apellido materno del militar que asumió una presidencia en la víspera de Navidad es tu respuesta final.', 'PEZUELA', '(Emmeline Pankhurst)(1858)(Pezuela)', 'HISTORIA', '', '', 3, 0, NULL),
(89, '¿Sabías que La revista BBC History publicó una artículo homenajeando a las cinco mujeres más influyentes de la historia? Ingresa al siguiente enlace https://cutt.ly/kcTtXfG y descubre dicha lista. Te bastará con abrir los ojos para encontrar a quien lleva un collar de perlas. ¿Qué esperas? Busca en Google maps el barrio donde nació y con la ayuda del gran sabio del internet responde en que año se inauguró el palacio que logras ver al sur.', '1605', '( Rosalind Franklin)(Notting Hill)(Palacio de Kensington)(1605)', 'HISTORIA', '', '', 3, 0, NULL),
(90, 'Para empezar el acertijo tendrás que ingresar a https://bit.ly/3a4Uck8 y descubrir a cinco de las mujeres más influyentes de la historia según la BBC. Te bastará con leer un poco para encontrar a quien nació en Varsovia. ¿Qué esperas? Tendrás que guardar el año de su deceso y encontrar al campeón de la Copa Mundial de Fútbol que se celebró el mismo año. ¡Rápido! La ciudad donde se encuentra su primer puerto es tu respuesta final.', 'GENOVA', '(Marie Curie)(1934)(Italia)(Génova)', 'HISTORIA', '', '', 3, 0, NULL),
(91, 'Para empezar el acertijo tendrás que ingresar a https://cutt.ly/LcAwu9x y visitar los ocho acuarios más grandes del mundo. Una vez encuentres aquel que simula la forma de un barco hundido, tendrás que buscar en Google maps la ciudad donde se ubica. ¿Qué esperas? El nombre sin espacios del río que bordea su norte te dejará avanzar.', 'UMGENIRIVER', '(Acuario Ushaka Marine World)(Durban)(UmgeniRiver)', 'TURISMO', '', '', 3, 1, NULL),
(92, '¿Sabías que existen muchos acuarios que se destacan por su belleza y modernidad? Visita el siguiente enlace https://cutt.ly/LcAwu9x y conoce los más grandes del mundo. Una vez encuentres aquel que alberga a tres gigantes, tendrás que guardar la ciudad donde se ubica. ¡No pierdas más tiempo! Navega a su “.com” y revisa las opciones del menú, la segunda es la respuesta que estás buscando.', 'TRAVEL', '(Okinawa)(Travel)', 'TURISMO', '', '', 3, 0, NULL),
(93, '¡Rápido! Visita el siguiente enlace https://cutt.ly/LcAwu9x y bucea entre los acuarios más grandes del mundo. Tendrás que encontrar aquel que se ubica en el medio de un hotel y con la ayuda del gran sabio del internet buscar la ciudad donde que lo alberga. ¡No te preocupes! Un enlace de Wikipedia esconde la respuesta que estás buscando. ¿Qué esperas? La primera palabra elevada al cuadrado te dejará avanzar. ', 'EUROSTAT', '(Acuario AquaDom)(Berlín)(Eurostat)', 'TURISMO', '', '', 3, 0, NULL),
(94, '¿Sabías que el bingo más grande del mundo contó con 122 mil participantes? Ingresa al siguiente enlace https://cutt.ly/zvyShv1 y descubre esta curiosa historia. Una vez encuentres el lugar donde ocurrió, tendrás que abrir tu mapa y visitarlo. ¿Qué esperas? Recorre sus rincones en busca de un festival, el número que se esconde en su nombre es tu respuesta final. ', '108', '(Simón Bolívar)(Wanderlust 108 Colombia)(108)', 'MAPA', 'TURISMO', 'CURIOSIDADES', 3, 0, NULL),
(95, '¡Prepárate para una aventura pintoresca! Navega al siguiente enlace https://cutt.ly/fvtH1n5 y descubre el significado y curiosidades de los colores. Una vez encuentres aquel que encarna la riqueza, tendrás que navegar a su “.com” para continuar. ¡No pierdas más tiempo! Sin utilizar tu traductor, guarda la primera opción del menú. Si escribes sus letras en orden alfabético podrás avanzar.', 'ENSW', '(Amarillo)(News)(ENSW)', 'CURIOSIDADES', '', '', 3, 0, NULL),
(96, '¡Prepárate para una aventura medieval! Ingresa a https://cutt.ly/1voN22g y descubre diez joyas arquitectónicas de antaño. Una vez encuentres la fortaleza de los tres eruditos, tendrás que acudir al que todo lo sabe para buscar la ciudad donde se ubica. ¡No desesperes! Un enlace de kayak.com.pe te guiará por el camino indicado. ¿Qué esperas? El nombre de la ciudad a la que hace referencia su apelativo te dejará avanzar. ', 'ROMA', '(Castillo de los Tres Reyes Magos del Morro)(La Habana)(Roma)', 'TURISMO', '', '', 3, 0, NULL),
(97, '¿Alguna vez has visitado La Habana? Ingresa al siguiente enlace https://cutt.ly/svdNRT8 y descubre las verdaderas joyas de la capital cubana. Una vez encuentres el barrio de Guanabacoa, tendrás que guardar el nombre de quien pronunció su primer discurso en el Liceo. ¡Deprisa! Si lo buscas en tu navegador, un enlace de poemas-del-alma.com te mostrará algunos de sus versos. El palíndromo en la lista es tu respuesta final.', 'EMMA', '(José Martí)(Emma)', 'TURISMO', '', '', 3, 0, NULL),
(98, '¡Prepárate para un acertijo mortal! Ingresa al siguiente enlace https://cutt.ly/uvlO2mm y sin dejarte envolver por el veneno descubre las picaduras más letales del mundo. Una vez encuentres al octavo signo dorado, tendrás que guardar la nación a la que hace referencia uno de sus nombres. ¡Deprisa! Si navegas a su “.com” y utilizas tu traductor, podrás conocer sus festividades. ¡No pierdas más tiempo! El nombre de la bebida que homenajean es la respuesta que estás buscando.', 'VINO', '(Escorpión dorado)(Israel)(Vino)', 'ANIMALES', '', '', 3, 0, NULL),
(99, '¿Sabías que la cobra real asiática es uno de los más potentes reptiles y una de las serpientes más venenosas del mundo? Ingresa a https://cutt.ly/uvlO2mm y descubre a quienes pertenecen las picaduras más letales del mundo. Busca a quien resplandece bajo el mar y recuerda el lugar donde suele nadar. ¡Deprisa! El país al que pertenece es tu próximo destino, si navegas a su “.com” te acercarás al final. ¿Qué esperas? El nombre de los animales que se abrazan te dejará avanzar. ', 'KOALA', '(Avispa de mar)(Australia)(Koala)', 'ANIMALES', '', '', 3, 0, NULL),
(100, '¡Los juegos olímpicos más esperados están a la vuelta de la esquina! Para empezar el siguiente acertijo tendrás que ingresar a olympics.com/tokyo-2020/es/deportes/atletismo/ y alistarte para la carrera. ¡En sus marcas, listos, ya! Encabezando las postas, un río se esconde al final del video, su nombre te dejará avanzar.', 'HUDSON', '', 'OLIMPIADAS', '', '', 3, 0, NULL),
(101, 'Sigue la antorcha que arde cada cuatro años para comenzar esta aventura. Tu punto de partida será olympics.com/tokyo-2020/es/deportes/badminton/ un encuadre cenital captura la disputa del oro. ¡Deprisa! El nombre del país que golpea la pluma es la respuesta que estás buscando.', 'ESPAÑA', '', 'OLIMPIADAS', '', '', 3, 0, NULL),
(102, 'Cada cuatro años los cinco anillos entrelazados empiezan a brillar en algún rincón del mundo. Para comenzar el acertijo tendrás que navegar a olympics.com/tokyo-2020/es/deportes/baloncesto/ y encontrar la respuesta a su gran trivia. ¿Qué esperas? El nombre sin espacios de la última estrella en mención es la clave para avanzar.', 'CHARLESBARKLEY', '', 'OLIMPIADAS', '', '', 3, 0, NULL),
(103, '¡Los juegos olímpicos más esperados están a la vuelta de la esquina! Para empezar el partido tendrás que ingresar a olympics.com/tokyo-2020/es/deportes/baloncesto-3-3/ en busca del panorama que te espera. ¡No pierdas más tiempo! El nombre sin espacios del número uno del mundo te dejará avanzar. ', 'DUŠANBULUT', '', 'OLIMPIADAS', '', '', 3, 0, NULL),
(104, '¡Preparate para un viaje extraordinario! La mistifica antorcha que ardió en Grecia hace más de dos mil años te llevará por los rincones del oriente asiático. Para comenzar el acertijo tendrás que navegar a olympics.com/tokyo-2020/es/deportes/balonmano/. ¡No te pierdas en el texto! En tan solo un minuto aprenderás las reglas del juego. Una vez encuentres la gran barrera que aguanta el ataque francés, tendrás que escribir sus números de izquierda a derecha para avanzar.', '19517', '', 'OLIMPIADAS', '', '', 3, 0, NULL),
(105, '¡Los juegos olímpicos más esperados están a la vuelta de la esquina! Para empezar el siguiente acertijo tendrás que ingresar a olympics.com/tokyo-2020/es/deportes/beisbol-softbol/ en busca de un video. ¡Escucha con atención! Guarda el número que aparece tras el tronar de unos dedos y multiplícalo por año en el que aquel deporte se admitió en la competición. ¡Deprisa! El resultado de dicha operación te dejará continuar.', '87648', '(44)(1992)(87648)', 'OLIMPIADAS', '', '', 3, 0, NULL),
(106, 'Sigue la antorcha que arde cada cuatro años para comenzar esta aventura. Tu punto de partida será olympics.com/tokyo-2020/es/deportes/boxeo/. ¿Listo para un round de un minuto? Dos colores se enfrentan a lo largo del video, pero solo uno señala al cielo. ¡No pierdas más tiempo! El nombre de la nación que lleva sobre el corazón es la respuesta que estás buscando.', 'JAPON', '', 'OLIMPIADAS', '', '', 3, 0, NULL),
(107, 'Cada cuatro años los cinco anillos entrelazados empiezan a brillar en algún rincón del mundo. Para comenzar el acertijo tendrás que navegar a olympics.com/tokyo-2020/es/deportes/ciclismo-bmx-freestyle/ en busca de increíbles acrobacias. Te bastará con ver el inicio del video para encontrar a quienes van de la mano. ¿Qué esperas? Guarda el país al que representan, su capital te dejará avanzar.', 'WELLINGTON', '(Nueva Zelanda)(Wellington)', 'OLIMPIADAS', '', '', 3, 0, NULL),
(108, '¡Preparate para un viaje extraordinario! La mistifica antorcha que ardió en Grecia hace más de dos mil años te llevará por los rincones del oriente asiático. Para comenzar el acertijo tendrás que navegar a olympics.com/tokyo-2020/es/deportes/ciclismo-bmx-racing/. ¡Deprisa! Río desde el cielo te muestra cinco sombras tenebrosas. Si guardas el número que encabeza la marcha y lo multiplicas por el año en el que dicho deporte debutó en los Juegos Olímpicos, tendrás como resultado la clave que estás buscando.', '98392', '(49)(2008)(98392)', 'OLIMPIADAS', '', '', 3, 0, NULL),
(109, '¡Los juegos olímpicos más esperados están a la vuelta de la esquina! Para empezar el siguiente acertijo tendrás que ingresar a olympics.com/tokyo-2020/es/deportes/ciclismo-de-montana/ y recorrer sus montañas. Sobre piedras encontrarás a la canadiense, guarda su nombre y acude al que todo lo sabe en busca de la ciudad donde empezó la carrera de su vida. ¡Rápido! Aquel lugar te dejará continuar.', 'FREDERICTON', '(catharine pendrel)(Fredericton)', 'OLIMPIADAS', '', '', 3, 0, NULL),
(110, 'Sigue la antorcha que arde cada cuatro años para comenzar esta aventura. Tu punto de partida será olympics.com/tokyo-2020/es/deportes/ciclismo-en-pista/. 120 años de historia regresarán a Tokio 2020, deslízate hasta el final para encontrar la respuesta a la gran pregunta. ¿Qué esperas? La última palabra de aquel párrafo te dejará avanzar.', 'PEDAL', '', 'OLIMPIADAS', '', '', 3, 0, NULL),
(111, 'Cada cuatro años los cinco anillos entrelazados empiezan a brillar en algún rincón del mundo. Un viaje sobre dos ruedas te espera, para empezar la carrera tendrás que navegar a olympics.com/tokyo-2020/es/deportes/ciclismo-en-ruta/. ¡No pierdas más tiempo! La línea de meta esconda tu respuesta, su nombre sin espacios te dejará avanzar. ', 'FUJIINTERNATIONALSPEEDWAY', '', 'OLIMPIADAS', '', '', 3, 0, NULL),
(112, '¡Preparate para un viaje extraordinario! La mistifica antorcha que ardió en Grecia hace más de dos mil años te llevará por los rincones del oriente asiático. Tendrás que navegar a olympics.com/tokyo-2020/es/deportes/escalada-deportiva/ en busca del primero en alcanzar el oro. Entre los candidatos encontrarás a una joven eslovena, el año en el que nació te dejará continuar.', '1999', '(Janja Garnbret)(1999)', 'OLIMPIADAS', '', '', 3, 0, NULL),
(113, '¡Los juegos olímpicos más esperados están a la vuelta de la esquina! Tu respuesta se esconde a lo largo de un video, tendrás que ingresar a olympics.com/tokyo-2020/es/deportes/esgrima/ en busca de lo que aparenta ser una noche estrellada. ¿Qué esperas? Dos espadas desenvainadas luchan bajo sus luces, el nombre del país que ganó aquel enfrentamiento te dejará avanzar. ', 'ITALIA', '', 'OLIMPIADAS', '', '', 3, 0, NULL),
(114, 'Sigue la antorcha que arde cada cuatro años para comenzar esta aventura. Tu punto de partida será olympics.com/tokyo-2020/es/deportes/futbol/. Nueve miembros de un equipo esperan tu llegada a lo largo de un video. ¡Deprisa! Si multiplicas los sus dos números más altos, obtendrás como resultado la respuesta que estás buscando.', '272', '', 'OLIMPIADAS', '', '', 3, 0, NULL),
(115, 'Cada cuatro años los cinco anillos entrelazados empiezan a brillar en algún rincón del mundo, esta vez dos de ellos te recibirán al llegar olympics.com/tokyo-2020/es/deportes/gimnasia-artistica/. ¡No pierdas más tiempo! Un gran salto te espera al final del camino, su nombre sin espacios te dejará avanzar.', 'SALTOMORTALLUNAR', '', 'OLIMPIADAS', '', '', 3, 0, NULL),
(116, '¡Preparate para un viaje extraordinario! La mistifica antorcha que ardió en Grecia hace más de dos mil años te llevará por los rincones del oriente asiático. Empieza tu carrera en olympics.com/tokyo-2020/es/deportes/gimnasia-ritmica/ y no pares hasta encontrar cinco soles rojos. ¡Deprisa! Recuerda que compites contra el reloj, el nombre del país al que representan te dejará continuar. ', 'ITALIA', '', 'OLIMPIADAS', '', '', 3, 0, NULL),
(117, '¡Los juegos olímpicos más esperados están a la vuelta de la esquina! Tendrás que saltar sin parar, el siguiente enlace olympics.com/tokyo-2020/es/deportes/gimnasia-trampolin/ te ayudará. ¡No pierdas el equilibrio! El inicio del segundo milenio recibió a los primeros campeones, el más largo de sus apellidos te dejará avanzar.', 'MOSKALENKO', '', 'OLIMPIADAS', '', '', 3, 0, NULL),
(118, 'Sigue la antorcha que arde cada cuatro años para comenzar esta aventura. Tu punto de partida será el primero de dieciocho hoyos olympics.com/tokyo-2020/es/deportes/golf/. ¡Rápido! Un misterioso hombre te espera, descubre quién es y guarda su nombre. Si acudes al que todo lo sabe en busca de él obtendrás la respuesta que estás buscando. La ciudad donde nació te dejará avanzar. ', 'GOTEMBURGO', '(henrik stenson)(Gotemburgo)', 'OLIMPIADAS', '', '', 3, 0, NULL);
INSERT INTO `tc_equilicua_x` (`i_id`, `t_pregunta`, `t_respuesta`, `t_pista`, `t_kword1`, `t_kword2`, `t_kword3`, `user_id`, `i_uso`, `b_estado`) VALUES
(119, 'Cada cuatro años los cinco anillos entrelazados empiezan a brillar en algún rincón del mundo, búscalos en el siguiente enlace olympics.com/tokyo-2020/es/deportes/halterofilia/ al lado de un disco rojo. ¿Qué esperas? El número que los acompaña es la respuesta que estás buscando.', '25', '', 'OLIMPIADAS', '', '', 3, 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ti_preguntasmostratas`
--

CREATE TABLE `ti_preguntasmostratas` (
  `i_id` int(11) NOT NULL,
  `i_idusuario` int(11) NOT NULL,
  `i_posicion` tinyint(4) NOT NULL,
  `t_pregunta` text NOT NULL,
  `t_respuesta` tinytext NOT NULL,
  `b_completa` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ti_preguntasmostratas`
--

INSERT INTO `ti_preguntasmostratas` (`i_id`, `i_idusuario`, `i_posicion`, `t_pregunta`, `t_respuesta`, `b_completa`) VALUES
(3, 8, 1, '1', 'uno', 0),
(4, 8, 2, '2', 'dos', 0),
(5, 8, 3, '3', 'tres', 0),
(6, 8, 4, '4', 'cuatro', 0),
(7, 8, 5, '5', 'cinco', 0),
(8, 8, 6, '6', 'seis', 0),
(9, 8, 7, '7', 'siete', 0),
(10, 8, 8, '8', 'ocho', 0),
(11, 8, 9, '9', 'nueve', 0),
(12, 8, 10, '10', 'diez', 0),
(13, 9, 1, '1', 'uno', 1),
(14, 9, 2, '2', 'dos', 1),
(15, 9, 3, '3', 'tres', 1),
(16, 9, 4, '4', 'cuatro', 0),
(17, 9, 5, '5', 'cinco', 0),
(18, 9, 6, '6', 'seis', 0),
(19, 9, 7, '7', 'siete', 0),
(20, 9, 8, '8', 'ocho', 0),
(21, 9, 9, '9', 'nueve', 0),
(22, 9, 10, '10', 'diez', 0),
(23, 7, 1, '1', 'uno', 1),
(24, 7, 2, '2', 'dos', 1),
(25, 7, 3, '3', 'tres', 1),
(26, 7, 4, '4', 'cuatro', 1),
(27, 7, 5, '5', 'cinco', 1),
(28, 7, 6, '6', 'seis', 1),
(29, 7, 7, '7', 'siete', 1),
(30, 7, 8, '8', 'ocho', 0),
(31, 7, 9, '9', 'nueve', 0),
(32, 7, 10, '10', 'diez', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ti_usuarioequi`
--

CREATE TABLE `ti_usuarioequi` (
  `i_id` int(11) NOT NULL,
  `i_idusuario` int(11) NOT NULL,
  `i_estado` int(11) NOT NULL,
  `d_utimavez` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tc_equilicua`
--
ALTER TABLE `tc_equilicua`
  ADD PRIMARY KEY (`i_id`);

--
-- Indices de la tabla `tc_equilicua_x`
--
ALTER TABLE `tc_equilicua_x`
  ADD PRIMARY KEY (`i_id`),
  ADD KEY `fk_tc_usuario_tc_equilicua` (`user_id`);

--
-- Indices de la tabla `ti_preguntasmostratas`
--
ALTER TABLE `ti_preguntasmostratas`
  ADD PRIMARY KEY (`i_id`);

--
-- Indices de la tabla `ti_usuarioequi`
--
ALTER TABLE `ti_usuarioequi`
  ADD PRIMARY KEY (`i_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tc_equilicua`
--
ALTER TABLE `tc_equilicua`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tc_equilicua_x`
--
ALTER TABLE `tc_equilicua_x`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT de la tabla `ti_preguntasmostratas`
--
ALTER TABLE `ti_preguntasmostratas`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `ti_usuarioequi`
--
ALTER TABLE `ti_usuarioequi`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
