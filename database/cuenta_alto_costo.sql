-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2022 a las 02:09:41
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `cuenta_alto_costo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad`
--

CREATE TABLE `actividad` (
  `id_actividad` int(11) NOT NULL,
  `actividad` varchar(200) NOT NULL,
  `descripcion` varchar(60) DEFAULT NULL,
  `codigo_maestro` varchar(10) NOT NULL,
  `prioridad` varchar(10) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `actividad`
--

INSERT INTO `actividad` (`id_actividad`, `actividad`, `descripcion`, `codigo_maestro`, `prioridad`, `estado`) VALUES
(1, 'CONSULTA POR MEDICINA GENERAL', 'N/A', '1900', 'Media\r\n', 'activo'),
(2, 'CONSULTA INTEGRAL DE CONTROL O DE SEGUIMIENTO POR ESPECIALISTA EN MEDICINA INTERNA', 'N/A', '1901', 'Media\r\n', 'activo'),
(3, 'CONSULTA INTEGRAL DE CONTROL O DE SEGUIMIENTO POR ESPECIALISTA EN OFTALMOLOGIA', 'N/A', '1902', 'Media\r\n', 'activo'),
(4, 'CONSULTA INTEGRAL DE CONTROL O DE SEGUIMIENTO POR ESPECIALISTA EN NEFROLOGIA', 'N/A', '1903', 'Media\r\n', 'activo'),
(5, 'CONSULTA DE CONTROL O DE SEGUIMIENTO POR ENFERMERIA', 'N/A', '1904', 'Media\r\n', 'activo'),
(6, 'SEGUIMIENTO POR AUXILIAR DE ENFERMERIA', 'N/A', '1905', 'Media\r\n', 'activo'),
(7, 'CONSULTA NUTRICION', 'N/A', '1906', 'Media\r\n', 'activo'),
(8, 'CONSULTA DE CONTROL O DE SEGUIMIENTO POR PSICOLOGIA', 'N/A', '1907', 'Media\r\n', 'activo'),
(9, 'UROANALISIS', 'N/A', '1908', 'Media\r\n', 'activo'),
(10, 'HEMOGRAMA I (HEMOGLOBINA HEMATOCRITO Y LEUCOGRAMA) MANUAL', 'N/A', '1909', 'Media\r\n', 'activo'),
(11, 'CREATININA EN SUERO U OTROS FLUIDOS', 'N/A', '1910', 'Media\r\n', 'activo'),
(12, 'CREATININA EN ORINA PARCIAL (CREATINURIA)', 'N/A', '1911', 'Media\r\n', 'activo'),
(13, 'ALBUMINURIA', 'N/A', '1912', 'Media\r\n', 'activo'),
(14, 'NITROGENO UREICO', 'N/A', '1913', 'Media\r\n', 'activo'),
(15, 'COLESTEROL TOTAL', 'N/A', '1914', 'Media\r\n', 'activo'),
(16, 'COLESTEROL DE BAJA DENSIDAD SEMIAUTOMATIZADO', 'N/A', '1915', 'Media\r\n', 'activo'),
(17, 'COLESTEROL DE ALTA DENSIDAD', 'N/A', '1916', 'Media\r\n', 'activo'),
(18, 'TRIGLICERIDOS', 'N/A', '1917', 'Media\r\n', 'activo'),
(19, 'HEMOGLOBINA GLICOSILADA', 'N/A', '1918', 'Media\r\n', 'activo'),
(20, 'HEMOGLOBINA GLICOSILADA AUTOMATIZADA 7.5 o menos', 'N/A', '1919', 'Media\r\n', 'activo'),
(21, 'CALCIO SEMIAUTOMATIZADO', 'N/A', '1920', 'Media\r\n', 'activo'),
(22, 'FERRITINA', 'N/A', '1921', 'Media\r\n', 'activo'),
(23, 'FOSFORO EN ORINA PARCIAL', 'N/A', '1922', 'Media\r\n', 'activo'),
(24, 'HORMONA PARATIROIDEA', 'N/A', '1923', 'Media\r\n', 'activo'),
(25, 'POTASIO EN ORINA PARCIAL', 'N/A', '1924', 'Media\r\n', 'activo'),
(26, 'SATURACION DE TRANSFERRINA', 'N/A', '1925', 'Media\r\n', 'activo'),
(27, 'FOSFORO', 'N/A', '1926', 'Media\r\n', 'activo'),
(28, 'SODIO EN ORINA PARCIAL', 'N/A', '1927', 'Media\r\n', 'activo'),
(29, 'ELECTROCARDIOGRAMA', 'N/A', '1928', 'Media\r\n', 'activo'),
(30, 'ECOCARDIOGRAMA MODO M Y BIDIMENSIONAL CON DOPPLER', 'N/A', '1929', 'Media\r\n', 'activo'),
(31, 'VACUNA INFLUENZA (APLICACIÓN)', 'N/A', '1930', 'Media\r\n', 'activo'),
(32, 'VACUNA NEUMOCOCO CONJUGADA Y POLISACARIDA (APLICACIÓN A PACIENTES CON ESQUEMA INCOMPLETO)', 'N/A', '1931', 'Media\r\n', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anualidad`
--

CREATE TABLE `anualidad` (
  `id_anual` int(11) NOT NULL,
  `periodo` int(11) DEFAULT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `anualidad`
--

INSERT INTO `anualidad` (`id_anual`, `periodo`, `estado`) VALUES
(21, 2021, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `id_departamento` int(11) NOT NULL,
  `departamento` varchar(500) NOT NULL,
  `codigo_dane` int(11) NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`id_departamento`, `departamento`, `codigo_dane`, `estado`) VALUES
(1, 'Amazonas', 91, 'activo'),
(2, 'Antioquia', 5, 'activo'),
(3, 'Arauca', 81, 'activo'),
(4, 'Archipiélago de San Andrés, Providencia y Santa Catalina', 88, 'activo'),
(5, 'Atlántico', 8, 'activo'),
(6, 'Bogotá D.C.', 11, 'activo'),
(7, 'Bolívar', 13, 'activo'),
(8, 'Boyacá', 15, 'activo'),
(9, 'Caldas', 17, 'activo'),
(10, 'Caquetá', 18, 'activo'),
(11, 'Casanare', 85, 'activo'),
(12, 'Cauca', 19, 'activo'),
(13, 'Cesar', 20, 'activo'),
(14, 'Chocó', 27, 'activo'),
(15, 'Córdoba', 23, 'activo'),
(16, 'Cundinamarca', 25, 'activo'),
(17, 'Guainía', 94, 'activo'),
(18, 'Guaviare', 95, 'activo'),
(19, 'Huila', 41, 'activo'),
(20, 'La Guajira', 44, 'activo'),
(21, 'Magdalena', 47, 'activo'),
(22, 'Meta', 50, 'activo'),
(23, 'Nariño', 52, 'activo'),
(24, 'Norte de Santander', 54, 'activo'),
(25, 'Putumayo', 86, 'activo'),
(26, 'Quindío', 63, 'activo'),
(27, 'Risaralda', 66, 'activo'),
(28, 'Santander', 68, 'activo'),
(29, 'Sucre', 70, 'activo'),
(30, 'Tolima', 73, 'activo'),
(31, 'Valle del Cauca', 76, 'activo'),
(32, 'Vaupés', 97, 'activo'),
(33, 'Vichada', 99, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostico`
--

CREATE TABLE `diagnostico` (
  `id_diagnostico` int(11) NOT NULL,
  `cie_10` varchar(5) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `id_paciente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `diagnostico`
--

INSERT INTO `diagnostico` (`id_diagnostico`, `cie_10`, `descripcion`, `estado`, `id_paciente`) VALUES
(1, 'E109', 'Diabetes Mellitus', 'activo', 1),
(2, 'I10X', 'Hipertensión Arterial', 'activo', 2),
(3, 'Z321', 'Embarazo Confirmado', 'activo', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(30) DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `soporte` blob DEFAULT NULL,
  `categoria` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`, `fecha_fin`, `soporte`, `categoria`) VALUES
(1, 'Activo', NULL, NULL, 1),
(2, 'Inactivo', NULL, NULL, 1),
(3, 'Pendiente', NULL, NULL, 2),
(4, 'Finalizado', NULL, NULL, 2),
(5, 'Pendiente asignar', NULL, NULL, 2),
(6, 'Gestión uno', NULL, NULL, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `etnia`
--

CREATE TABLE `etnia` (
  `id_etnia` int(11) NOT NULL,
  `etnia` varchar(30) NOT NULL,
  `descripcion` varchar(40) NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `etnia`
--

INSERT INTO `etnia` (`id_etnia`, `etnia`, `descripcion`, `estado`) VALUES
(1, 'Normal', 'Normal', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `frecuencia`
--

CREATE TABLE `frecuencia` (
  `id_frecuencia` int(11) NOT NULL,
  `frecuencia` varchar(20) NOT NULL,
  `mes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `frecuencia`
--

INSERT INTO `frecuencia` (`id_frecuencia`, `frecuencia`, `mes`) VALUES
(1, 'Una por Año', 1),
(2, 'Dos por Año', 2),
(3, 'Tres por año', 3),
(4, 'Cuatro por Año', 4),
(5, 'Cinco por Año', 5),
(6, 'Seis por Año', 6),
(7, 'Siete por Año', 7),
(8, 'Ocho por Año', 8),
(9, 'Nueve por Año', 9),
(10, 'Diez por Año', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ips`
--

CREATE TABLE `ips` (
  `id_ips` int(11) NOT NULL,
  `ips` varchar(150) NOT NULL,
  `nit` varchar(11) NOT NULL,
  `red` varchar(10) DEFAULT NULL,
  `id_municipio` int(11) NOT NULL,
  `estado` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ips`
--

INSERT INTO `ips` (`id_ips`, `ips`, `nit`, `red`, `id_municipio`, `estado`) VALUES
(1, 'EUSALUD S.A', '800227072', 'Privada', 169, 'activo'),
(2, 'FUNDACION JAVERIANA DE SERV MEDICOS ODONTOLOGICOS INTERUNIVERSITARIOS CARLOS MARQUEZ VILLEGAS JAVESALUD', '830018305', 'Privada', 169, 'activo'),
(3, 'CENTRO DE INVESTIGACIONES ONCOLOGICAS CLINICA SAN DIEGO CIOSAD SAS', '830099212', 'Privada', 169, 'activo'),
(4, 'REMY IPS S.A.S', '900589178', 'Privada', 169, 'activo'),
(5, 'AUDIOCOM IPS', '814003448', 'Privada', 169, 'activo'),
(6, 'ASOCIACION DE AMIGOS CONTRA EL CANCER PROSEGUIR', '830090073', 'Privada', 169, 'activo'),
(7, 'HOGAR SALUD MARIANA S.A.S', '901230560', 'Privada', 169, 'activo'),
(8, 'ALBERGUE SUKURAME S.A.S.', '900565371', 'Pública', 169, 'activo'),
(9, 'SERVICIO LOGISTICO FARMACEUTICO SAS', '900451902', 'Privada', 169, 'activo'),
(10, 'DAVITA S.A.S', '900532504', 'Privada', 169, 'activo'),
(11, 'RED HUMANA S.A.S.', '900769549', 'Privada', 169, 'activo'),
(12, 'EVE DISTRIBUCIONES S.A.S EVEDISA', '891409291', 'Privada', 169, 'activo'),
(13, 'FUNDACION CARDIO INFANTIL INSTITUTO DE CARDIOLOGIA', '860035992', 'Privada', 169, 'activo'),
(14, 'HEALTHUMANA SAS', '900751323', 'Privada', 169, 'activo'),
(15, 'ASOCIACION PROBIENESTAR DE LA FAMILIA COLOMBIANA PROFAMILIA', '860013779', 'Privada', 169, 'activo'),
(16, 'CLINICA CHIA S.A.', '800200789', 'Privada', 602, 'activo'),
(17, 'E.S.E. HOSPITAL SAN MARTIN DE PORRES DE CHOCONTA ', '860024766', 'Pública', 602, 'activo'),
(18, 'PSQ S.A.S', '900536325', 'Privada', 602, 'activo'),
(19, 'E.S.E CENTRO DE SALUD DE RICAURTE', '900058218', 'Pública', 602, 'activo'),
(20, 'CORVESALUD S.A.S', '830007229', 'Privada', 602, 'activo'),
(21, 'E.S.E. HOSPITAL MARIO GAITAN YANGUAS DE SOACHA', '800006850', 'Pública', 602, 'activo'),
(22, 'AUDIFARMA S.A.', '816001182', 'Privada', 602, 'activo'),
(23, 'OPTIFAM OPTICA FAMILIAR SAS', '900741367', 'Privada', 602, 'activo'),
(24, 'RTS S.A.S', '805011262', 'Privada', 602, 'activo'),
(25, 'EMPRESA DE SALUD - EMPRESA SOCIAL DEL ESTADO DEL MUNICIPIO DE SOACHA', '832001794', 'Pública', 602, 'activo'),
(26, 'CLINICA METROPOLITANA CMO IPS SAS', '808000252', 'Privada', 602, 'activo'),
(27, 'PROCARDIO SERVICIOS MEDICOS INTEGRALES LTDA/Hospital Cardiovascular de Cundinamarca', '800210375', 'Privada', 602, 'activo'),
(28, 'ESE HOSPITAL LA SAMARITANA', '899999032', 'Pública', 602, 'activo'),
(29, 'MIOCARDIO SAS/ RED HUMANA', '900328323', 'Privada', 602, 'activo'),
(30, 'ASOCIACION MEDICA PARA LA ATENCION INTEGRAL S.A.S CLINICA NUEVO MONTERREY ', '901292442', 'Privada', 602, 'activo'),
(31, 'FUNDACION SANTA FE DE BOGOTA', '860037950', 'Privada', 602, 'activo'),
(32, 'DUMIAN MÉDICAL S.A.S', '805027743', 'Privada', 602, 'activo'),
(33, 'PROCARDIO SERVICIOS MEDICOS INTEGRALES LTDA', '800210375', 'Privada', 602, 'activo'),
(34, 'IPS CLINICA PROSEGUIR SAS', '900095253', 'Privada', 602, 'activo'),
(35, 'HOSPITAL MARIA AUXILIADORA EMPRESA SOCIAL DEL ESTADO DEL MUNICIPIO DE MOSQUERA', '832010436', 'Pública', 602, 'activo'),
(36, 'SERVICIOS MEDICOS FAMEDIC SAS', '900405505', 'Privada', 740, 'activo'),
(37, 'CENTROS DE CONSULTA S.A.S.', '900502267', 'Privada', 740, 'activo'),
(38, 'CENTRO HOSPITALARIO DEL META S.A.S', '900470909', 'Privada', 740, 'activo'),
(39, 'ENLACE-DOS S.A.S', '900541158', 'Privada', 740, 'activo'),
(40, 'CLINISONRISA ODONTOLOGIA S.A.S', '901054282', 'Privada', 740, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio`
--

CREATE TABLE `municipio` (
  `id_municipio` int(11) NOT NULL,
  `municipio` varchar(400) NOT NULL,
  `codigo_dane` int(11) DEFAULT NULL,
  `id_departamento` int(11) NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `municipio`
--

INSERT INTO `municipio` (`id_municipio`, `municipio`, `codigo_dane`, `id_departamento`, `estado`) VALUES
(1, 'Leticia', 91001, 1, 'activo'),
(2, 'El Encanto', 91263, 1, 'activo'),
(3, 'La Chorrera', 91405, 1, 'activo'),
(4, 'La Pedrera', 91407, 1, 'activo'),
(5, 'La Victoria', 9143, 1, 'activo'),
(6, 'Puerto Arica', 91536, 1, 'activo'),
(7, 'Puerto Nariño', 9154, 1, 'activo'),
(8, 'Puerto Santander', 91669, 1, 'activo'),
(9, 'Tarapacá', 91798, 1, 'activo'),
(10, 'Puerto Alegría', 9153, 1, 'activo'),
(11, 'Miriti Paraná', 9146, 1, 'activo'),
(12, 'Medellín', 5001, 2, 'activo'),
(13, 'Abejorral', 5002, 2, 'activo'),
(14, 'Abriaquí', 5004, 2, 'activo'),
(15, 'Alejandría', 5021, 2, 'activo'),
(16, 'Amagá', 503, 2, 'activo'),
(17, 'Amalfi', 5031, 2, 'activo'),
(18, 'Andes', 5034, 2, 'activo'),
(19, 'Angelópolis', 5036, 2, 'activo'),
(20, 'Angostura', 5038, 2, 'activo'),
(21, 'Anorí', 504, 2, 'activo'),
(22, 'Anza', 5044, 2, 'activo'),
(23, 'Apartadó', 5045, 2, 'activo'),
(24, 'Arboletes', 5051, 2, 'activo'),
(25, 'Argelia', 5055, 2, 'activo'),
(26, 'Armenia', 5059, 2, 'activo'),
(27, 'Barbosa', 5079, 2, 'activo'),
(28, 'Bello', 5088, 2, 'activo'),
(29, 'Betania', 5091, 2, 'activo'),
(30, 'Betulia', 5093, 2, 'activo'),
(31, 'Ciudad Bolívar', 5101, 2, 'activo'),
(32, 'Briceño', 5107, 2, 'activo'),
(33, 'Buriticá', 5113, 2, 'activo'),
(34, 'Cáceres', 512, 2, 'activo'),
(35, 'Caicedo', 5125, 2, 'activo'),
(36, 'Caldas', 5129, 2, 'activo'),
(37, 'Campamento', 5134, 2, 'activo'),
(38, 'Cañasgordas', 5138, 2, 'activo'),
(39, 'Caracolí', 5142, 2, 'activo'),
(40, 'Caramanta', 5145, 2, 'activo'),
(41, 'Carepa', 5147, 2, 'activo'),
(42, 'Carolina', 515, 2, 'activo'),
(43, 'Caucasia', 5154, 2, 'activo'),
(44, 'Chigorodó', 5172, 2, 'activo'),
(45, 'Cisneros', 519, 2, 'activo'),
(46, 'Cocorná', 5197, 2, 'activo'),
(47, 'Concepción', 5206, 2, 'activo'),
(48, 'Concordia', 5209, 2, 'activo'),
(49, 'Copacabana', 5212, 2, 'activo'),
(50, 'Dabeiba', 5234, 2, 'activo'),
(51, 'Don Matías', 5237, 2, 'activo'),
(52, 'Ebéjico', 524, 2, 'activo'),
(53, 'El Bagre', 525, 2, 'activo'),
(54, 'Entrerrios', 5264, 2, 'activo'),
(55, 'Envigado', 5266, 2, 'activo'),
(56, 'Fredonia', 5282, 2, 'activo'),
(57, 'Giraldo', 5306, 2, 'activo'),
(58, 'Girardota', 5308, 2, 'activo'),
(59, 'Gómez Plata', 531, 2, 'activo'),
(60, 'Guadalupe', 5315, 2, 'activo'),
(61, 'Guarne', 5318, 2, 'activo'),
(62, 'Guatapé', 5321, 2, 'activo'),
(63, 'Heliconia', 5347, 2, 'activo'),
(64, 'Hispania', 5353, 2, 'activo'),
(65, 'Itagui', 536, 2, 'activo'),
(66, 'Ituango', 5361, 2, 'activo'),
(67, 'Belmira', 5086, 2, 'activo'),
(68, 'Jericó', 5368, 2, 'activo'),
(69, 'La Ceja', 5376, 2, 'activo'),
(70, 'La Estrella', 538, 2, 'activo'),
(71, 'La Pintada', 539, 2, 'activo'),
(72, 'La Unión', 54, 2, 'activo'),
(73, 'Liborina', 5411, 2, 'activo'),
(74, 'Maceo', 5425, 2, 'activo'),
(75, 'Marinilla', 544, 2, 'activo'),
(76, 'Montebello', 5467, 2, 'activo'),
(77, 'Murindó', 5475, 2, 'activo'),
(78, 'Mutatá', 548, 2, 'activo'),
(79, 'Nariño', 5483, 2, 'activo'),
(80, 'Necoclí', 549, 2, 'activo'),
(81, 'Nechí', 5495, 2, 'activo'),
(82, 'Olaya', 5501, 2, 'activo'),
(83, 'Peñol', 5541, 2, 'activo'),
(84, 'Peque', 5543, 2, 'activo'),
(85, 'Pueblorrico', 5576, 2, 'activo'),
(86, 'Puerto Berrío', 5579, 2, 'activo'),
(87, 'Puerto Nare', 5585, 2, 'activo'),
(88, 'Puerto Triunfo', 5591, 2, 'activo'),
(89, 'Remedios', 5604, 2, 'activo'),
(90, 'Retiro', 5607, 2, 'activo'),
(91, 'Rionegro', 5615, 2, 'activo'),
(92, 'Sabanalarga', 5628, 2, 'activo'),
(93, 'Sabaneta', 5631, 2, 'activo'),
(94, 'Salgar', 5642, 2, 'activo'),
(95, 'San Francisco', 5652, 2, 'activo'),
(96, 'San Jerónimo', 5656, 2, 'activo'),
(97, 'San Luis', 566, 2, 'activo'),
(98, 'San Pedro', 5664, 2, 'activo'),
(99, 'San Rafael', 5667, 2, 'activo'),
(100, 'San Roque', 567, 2, 'activo'),
(101, 'San Vicente', 5674, 2, 'activo'),
(102, 'Santa Bárbara', 5679, 2, 'activo'),
(103, 'Santo Domingo', 569, 2, 'activo'),
(104, 'El Santuario', 5697, 2, 'activo'),
(105, 'Segovia', 5736, 2, 'activo'),
(106, 'Sopetrán', 5761, 2, 'activo'),
(107, 'Támesis', 5789, 2, 'activo'),
(108, 'Tarazá', 579, 2, 'activo'),
(109, 'Tarso', 5792, 2, 'activo'),
(110, 'Titiribí', 5809, 2, 'activo'),
(111, 'Toledo', 5819, 2, 'activo'),
(112, 'Turbo', 5837, 2, 'activo'),
(113, 'Uramita', 5842, 2, 'activo'),
(114, 'Urrao', 5847, 2, 'activo'),
(115, 'Valdivia', 5854, 2, 'activo'),
(116, 'Valparaíso', 5856, 2, 'activo'),
(117, 'Vegachí', 5858, 2, 'activo'),
(118, 'Venecia', 5861, 2, 'activo'),
(119, 'Yalí', 5885, 2, 'activo'),
(120, 'Yarumal', 5887, 2, 'activo'),
(121, 'Yolombó', 589, 2, 'activo'),
(122, 'Yondó', 5893, 2, 'activo'),
(123, 'Zaragoza', 5895, 2, 'activo'),
(124, 'San Pedro de Uraba', 5665, 2, 'activo'),
(125, 'Santafé de Antioquia', 5042, 2, 'activo'),
(126, 'Santa Rosa de Osos', 5686, 2, 'activo'),
(127, 'San Andrés de Cuerquía', 5647, 2, 'activo'),
(128, 'Vigía del Fuerte', 5873, 2, 'activo'),
(129, 'San José de La Montaña', 5658, 2, 'activo'),
(130, 'San Juan de Urabá', 5659, 2, 'activo'),
(131, 'El Carmen de Viboral', 5148, 2, 'activo'),
(132, 'San Carlos', 5649, 2, 'activo'),
(133, 'Frontino', 5284, 2, 'activo'),
(134, 'Granada', 5313, 2, 'activo'),
(135, 'Jardín', 5364, 2, 'activo'),
(136, 'Sonsón', 5756, 2, 'activo'),
(137, 'Arauquita', 81065, 3, 'activo'),
(138, 'Cravo Norte', 8122, 3, 'activo'),
(139, 'Fortul', 813, 3, 'activo'),
(140, 'Puerto Rondón', 81591, 3, 'activo'),
(141, 'Saravena', 81736, 3, 'activo'),
(142, 'Tame', 81794, 3, 'activo'),
(143, 'Arauca', 81001, 3, 'activo'),
(144, 'Providencia', 88564, 4, 'activo'),
(145, 'San Andrés', 88001, 4, 'activo'),
(146, 'Barranquilla', 8001, 5, 'activo'),
(147, 'Baranoa', 8078, 5, 'activo'),
(148, 'Candelaria', 8141, 5, 'activo'),
(149, 'Galapa', 8296, 5, 'activo'),
(150, 'Luruaco', 8421, 5, 'activo'),
(151, 'Malambo', 8433, 5, 'activo'),
(152, 'Manatí', 8436, 5, 'activo'),
(153, 'Piojó', 8549, 5, 'activo'),
(154, 'Polonuevo', 8558, 5, 'activo'),
(155, 'Sabanagrande', 8634, 5, 'activo'),
(156, 'Sabanalarga', 8638, 5, 'activo'),
(157, 'Santa Lucía', 8675, 5, 'activo'),
(158, 'Santo Tomás', 8685, 5, 'activo'),
(159, 'Soledad', 8758, 5, 'activo'),
(160, 'Suan', 877, 5, 'activo'),
(161, 'Tubará', 8832, 5, 'activo'),
(162, 'Usiacurí', 8849, 5, 'activo'),
(163, 'Juan de Acosta', 8372, 5, 'activo'),
(164, 'Palmar de Varela', 852, 5, 'activo'),
(165, 'Campo de La Cruz', 8137, 5, 'activo'),
(166, 'Repelón', 8606, 5, 'activo'),
(167, 'Puerto Colombia', 8573, 5, 'activo'),
(168, 'Ponedera', 856, 5, 'activo'),
(169, 'Bogotá D.C.', 11001, 6, 'activo'),
(170, 'Achí', 13006, 7, 'activo'),
(171, 'Arenal', 13042, 7, 'activo'),
(172, 'Arjona', 13052, 7, 'activo'),
(173, 'Arroyohondo', 13062, 7, 'activo'),
(174, 'Calamar', 1314, 7, 'activo'),
(175, 'Cantagallo', 1316, 7, 'activo'),
(176, 'Cicuco', 13188, 7, 'activo'),
(177, 'Córdoba', 13212, 7, 'activo'),
(178, 'Clemencia', 13222, 7, 'activo'),
(179, 'El Guamo', 13248, 7, 'activo'),
(180, 'Magangué', 1343, 7, 'activo'),
(181, 'Mahates', 13433, 7, 'activo'),
(182, 'Margarita', 1344, 7, 'activo'),
(183, 'Montecristo', 13458, 7, 'activo'),
(184, 'Mompós', 13468, 7, 'activo'),
(185, 'Morales', 13473, 7, 'activo'),
(186, 'Norosí', 1349, 7, 'activo'),
(187, 'Pinillos', 13549, 7, 'activo'),
(188, 'Regidor', 1358, 7, 'activo'),
(189, 'Río Viejo', 136, 7, 'activo'),
(190, 'San Estanislao', 13647, 7, 'activo'),
(191, 'San Fernando', 1365, 7, 'activo'),
(192, 'San Juan Nepomuceno', 13657, 7, 'activo'),
(193, 'Santa Catalina', 13673, 7, 'activo'),
(194, 'Santa Rosa', 13683, 7, 'activo'),
(195, 'Simití', 13744, 7, 'activo'),
(196, 'Soplaviento', 1376, 7, 'activo'),
(197, 'Talaigua Nuevo', 1378, 7, 'activo'),
(198, 'Tiquisio', 1381, 7, 'activo'),
(199, 'Turbaco', 13836, 7, 'activo'),
(200, 'Turbaná', 13838, 7, 'activo'),
(201, 'Villanueva', 13873, 7, 'activo'),
(202, 'Barranco de Loba', 13074, 7, 'activo'),
(203, 'Santa Rosa del Sur', 13688, 7, 'activo'),
(204, 'Hatillo de Loba', 133, 7, 'activo'),
(205, 'El Carmen de Bolívar', 13244, 7, 'activo'),
(206, 'San Martín de Loba', 13667, 7, 'activo'),
(207, 'Altos del Rosario', 1303, 7, 'activo'),
(208, 'San Jacinto del Cauca', 13655, 7, 'activo'),
(209, 'San Pablo de Borbur', 1367, 7, 'activo'),
(210, 'San Jacinto', 13654, 7, 'activo'),
(211, 'El Peñón', 13268, 7, 'activo'),
(212, 'Cartagena', 13001, 7, 'activo'),
(213, 'María la Baja', 13442, 7, 'activo'),
(214, 'San Cristóbal', 1362, 7, 'activo'),
(215, 'Zambrano', 13894, 7, 'activo'),
(216, 'Tununguá', 15832, 8, 'activo'),
(217, 'Motavita', 15476, 8, 'activo'),
(218, 'Ciénega', 15189, 8, 'activo'),
(219, 'Tunja', 15001, 8, 'activo'),
(220, 'Almeida', 15022, 8, 'activo'),
(221, 'Aquitania', 15047, 8, 'activo'),
(222, 'Arcabuco', 15051, 8, 'activo'),
(223, 'Berbeo', 1509, 8, 'activo'),
(224, 'Betéitiva', 15092, 8, 'activo'),
(225, 'Boavita', 15097, 8, 'activo'),
(226, 'Boyacá', 15104, 8, 'activo'),
(227, 'Briceño', 15106, 8, 'activo'),
(228, 'Buena Vista', 15109, 8, 'activo'),
(229, 'Busbanzá', 15114, 8, 'activo'),
(230, 'Caldas', 15131, 8, 'activo'),
(231, 'Campohermoso', 15135, 8, 'activo'),
(232, 'Cerinza', 15162, 8, 'activo'),
(233, 'Chinavita', 15172, 8, 'activo'),
(234, 'Chiquinquirá', 15176, 8, 'activo'),
(235, 'Chiscas', 1518, 8, 'activo'),
(236, 'Chita', 15183, 8, 'activo'),
(237, 'Chitaraque', 15185, 8, 'activo'),
(238, 'Chivatá', 15187, 8, 'activo'),
(239, 'Cómbita', 15204, 8, 'activo'),
(240, 'Coper', 15212, 8, 'activo'),
(241, 'Corrales', 15215, 8, 'activo'),
(242, 'Covarachía', 15218, 8, 'activo'),
(243, 'Cubará', 15223, 8, 'activo'),
(244, 'Cucaita', 15224, 8, 'activo'),
(245, 'Cuítiva', 15226, 8, 'activo'),
(246, 'Chíquiza', 15232, 8, 'activo'),
(247, 'Chivor', 15236, 8, 'activo'),
(248, 'Duitama', 15238, 8, 'activo'),
(249, 'El Cocuy', 15244, 8, 'activo'),
(250, 'El Espino', 15248, 8, 'activo'),
(251, 'Firavitoba', 15272, 8, 'activo'),
(252, 'Floresta', 15276, 8, 'activo'),
(253, 'Gachantivá', 15293, 8, 'activo'),
(254, 'Gameza', 15296, 8, 'activo'),
(255, 'Garagoa', 15299, 8, 'activo'),
(256, 'Guacamayas', 15317, 8, 'activo'),
(257, 'Guateque', 15322, 8, 'activo'),
(258, 'Guayatá', 15325, 8, 'activo'),
(259, 'Güicán', 15332, 8, 'activo'),
(260, 'Iza', 15362, 8, 'activo'),
(261, 'Jenesano', 15367, 8, 'activo'),
(262, 'Jericó', 15368, 8, 'activo'),
(263, 'Labranzagrande', 15377, 8, 'activo'),
(264, 'La Capilla', 1538, 8, 'activo'),
(265, 'La Victoria', 15401, 8, 'activo'),
(266, 'Macanal', 15425, 8, 'activo'),
(267, 'Maripí', 15442, 8, 'activo'),
(268, 'Miraflores', 15455, 8, 'activo'),
(269, 'Mongua', 15464, 8, 'activo'),
(270, 'Monguí', 15466, 8, 'activo'),
(271, 'Moniquirá', 15469, 8, 'activo'),
(272, 'Muzo', 1548, 8, 'activo'),
(273, 'Nobsa', 15491, 8, 'activo'),
(274, 'Nuevo Colón', 15494, 8, 'activo'),
(275, 'Oicatá', 155, 8, 'activo'),
(276, 'Otanche', 15507, 8, 'activo'),
(277, 'Pachavita', 15511, 8, 'activo'),
(278, 'Páez', 15514, 8, 'activo'),
(279, 'Paipa', 15516, 8, 'activo'),
(280, 'Pajarito', 15518, 8, 'activo'),
(281, 'Panqueba', 15522, 8, 'activo'),
(282, 'Pauna', 15531, 8, 'activo'),
(283, 'Paya', 15533, 8, 'activo'),
(284, 'Pesca', 15542, 8, 'activo'),
(285, 'Pisba', 1555, 8, 'activo'),
(286, 'Puerto Boyacá', 15572, 8, 'activo'),
(287, 'Quípama', 1558, 8, 'activo'),
(288, 'Ramiriquí', 15599, 8, 'activo'),
(289, 'Ráquira', 156, 8, 'activo'),
(290, 'Rondón', 15621, 8, 'activo'),
(291, 'Saboyá', 15632, 8, 'activo'),
(292, 'Sáchica', 15638, 8, 'activo'),
(293, 'Samacá', 15646, 8, 'activo'),
(294, 'San Eduardo', 1566, 8, 'activo'),
(295, 'San Mateo', 15673, 8, 'activo'),
(296, 'Santana', 15686, 8, 'activo'),
(297, 'Santa María', 1569, 8, 'activo'),
(298, 'Santa Sofía', 15696, 8, 'activo'),
(299, 'Sativanorte', 1572, 8, 'activo'),
(300, 'Sativasur', 15723, 8, 'activo'),
(301, 'Siachoque', 1574, 8, 'activo'),
(302, 'Soatá', 15753, 8, 'activo'),
(303, 'Socotá', 15755, 8, 'activo'),
(304, 'Socha', 15757, 8, 'activo'),
(305, 'Sogamoso', 15759, 8, 'activo'),
(306, 'Somondoco', 15761, 8, 'activo'),
(307, 'Sora', 15762, 8, 'activo'),
(308, 'Sotaquirá', 15763, 8, 'activo'),
(309, 'Soracá', 15764, 8, 'activo'),
(310, 'Susacón', 15774, 8, 'activo'),
(311, 'Sutamarchán', 15776, 8, 'activo'),
(312, 'Sutatenza', 15778, 8, 'activo'),
(313, 'Tasco', 1579, 8, 'activo'),
(314, 'Tenza', 15798, 8, 'activo'),
(315, 'Tibaná', 15804, 8, 'activo'),
(316, 'Tinjacá', 15808, 8, 'activo'),
(317, 'Tipacoque', 1581, 8, 'activo'),
(318, 'Toca', 15814, 8, 'activo'),
(319, 'Tópaga', 1582, 8, 'activo'),
(320, 'Tota', 15822, 8, 'activo'),
(321, 'Turmequé', 15835, 8, 'activo'),
(322, 'Tutazá', 15839, 8, 'activo'),
(323, 'Umbita', 15842, 8, 'activo'),
(324, 'Ventaquemada', 15861, 8, 'activo'),
(325, 'Viracachá', 15879, 8, 'activo'),
(326, 'Zetaquira', 15897, 8, 'activo'),
(327, 'Togüí', 15816, 8, 'activo'),
(328, 'Villa de Leyva', 15407, 8, 'activo'),
(329, 'Paz de Río', 15537, 8, 'activo'),
(330, 'Santa Rosa de Viterbo', 15693, 8, 'activo'),
(331, 'San Pablo de Borbur', 15681, 8, 'activo'),
(332, 'San Luis de Gaceno', 15667, 8, 'activo'),
(333, 'San José de Pare', 15664, 8, 'activo'),
(334, 'San Miguel de Sema', 15676, 8, 'activo'),
(335, 'Tuta', 15837, 8, 'activo'),
(336, 'Tibasosa', 15806, 8, 'activo'),
(337, 'La Uvita', 15403, 8, 'activo'),
(338, 'Belén', 15087, 8, 'activo'),
(339, 'Manizales', 17001, 9, 'activo'),
(340, 'Aguadas', 17013, 9, 'activo'),
(341, 'Anserma', 17042, 9, 'activo'),
(342, 'Aranzazu', 1705, 9, 'activo'),
(343, 'Belalcázar', 17088, 9, 'activo'),
(344, 'Chinchiná', 17174, 9, 'activo'),
(345, 'Filadelfia', 17272, 9, 'activo'),
(346, 'La Dorada', 1738, 9, 'activo'),
(347, 'La Merced', 17388, 9, 'activo'),
(348, 'Manzanares', 17433, 9, 'activo'),
(349, 'Marmato', 17442, 9, 'activo'),
(350, 'Marulanda', 17446, 9, 'activo'),
(351, 'Neira', 17486, 9, 'activo'),
(352, 'Norcasia', 17495, 9, 'activo'),
(353, 'Pácora', 17513, 9, 'activo'),
(354, 'Palestina', 17524, 9, 'activo'),
(355, 'Pensilvania', 17541, 9, 'activo'),
(356, 'Riosucio', 17614, 9, 'activo'),
(357, 'Risaralda', 17616, 9, 'activo'),
(358, 'Salamina', 17653, 9, 'activo'),
(359, 'Samaná', 17662, 9, 'activo'),
(360, 'San José', 17665, 9, 'activo'),
(361, 'Supía', 17777, 9, 'activo'),
(362, 'Victoria', 17867, 9, 'activo'),
(363, 'Villamaría', 17873, 9, 'activo'),
(364, 'Viterbo', 17877, 9, 'activo'),
(365, 'Marquetalia', 17444, 9, 'activo'),
(366, 'Florencia', 18001, 10, 'activo'),
(367, 'Albania', 18029, 10, 'activo'),
(368, 'Curillo', 18205, 10, 'activo'),
(369, 'El Doncello', 18247, 10, 'activo'),
(370, 'El Paujil', 18256, 10, 'activo'),
(371, 'Morelia', 18479, 10, 'activo'),
(372, 'Puerto Rico', 18592, 10, 'activo'),
(373, 'Solano', 18756, 10, 'activo'),
(374, 'Solita', 18785, 10, 'activo'),
(375, 'Valparaíso', 1886, 10, 'activo'),
(376, 'San José del Fragua', 1861, 10, 'activo'),
(377, 'Belén de Los Andaquies', 18094, 10, 'activo'),
(378, 'Cartagena del Chairá', 1815, 10, 'activo'),
(379, 'Milán', 1846, 10, 'activo'),
(380, 'La Montañita', 1841, 10, 'activo'),
(381, 'San Vicente del Caguán', 18753, 10, 'activo'),
(382, 'Yopal', 85001, 11, 'activo'),
(383, 'Aguazul', 8501, 11, 'activo'),
(384, 'Chámeza', 85015, 11, 'activo'),
(385, 'Hato Corozal', 85125, 11, 'activo'),
(386, 'La Salina', 85136, 11, 'activo'),
(387, 'Monterrey', 85162, 11, 'activo'),
(388, 'Pore', 85263, 11, 'activo'),
(389, 'Recetor', 85279, 11, 'activo'),
(390, 'Sabanalarga', 853, 11, 'activo'),
(391, 'Sácama', 85315, 11, 'activo'),
(392, 'Tauramena', 8541, 11, 'activo'),
(393, 'Trinidad', 8543, 11, 'activo'),
(394, 'Villanueva', 8544, 11, 'activo'),
(395, 'San Luis de Gaceno', 85325, 11, 'activo'),
(396, 'Paz de Ariporo', 8525, 11, 'activo'),
(397, 'Nunchía', 85225, 11, 'activo'),
(398, 'Maní', 85139, 11, 'activo'),
(399, 'Támara', 854, 11, 'activo'),
(400, 'Orocué', 8523, 11, 'activo'),
(401, 'Popayán', 19001, 12, 'activo'),
(402, 'Almaguer', 19022, 12, 'activo'),
(403, 'Argelia', 1905, 12, 'activo'),
(404, 'Balboa', 19075, 12, 'activo'),
(405, 'Bolívar', 191, 12, 'activo'),
(406, 'Buenos Aires', 1911, 12, 'activo'),
(407, 'Cajibío', 1913, 12, 'activo'),
(408, 'Caldono', 19137, 12, 'activo'),
(409, 'Caloto', 19142, 12, 'activo'),
(410, 'Corinto', 19212, 12, 'activo'),
(411, 'El Tambo', 19256, 12, 'activo'),
(412, 'Florencia', 1929, 12, 'activo'),
(413, 'Guachené', 193, 12, 'activo'),
(414, 'Guapi', 19318, 12, 'activo'),
(415, 'Inzá', 19355, 12, 'activo'),
(416, 'Jambaló', 19364, 12, 'activo'),
(417, 'La Sierra', 19392, 12, 'activo'),
(418, 'La Vega', 19397, 12, 'activo'),
(419, 'López', 19418, 12, 'activo'),
(420, 'Mercaderes', 1945, 12, 'activo'),
(421, 'Miranda', 19455, 12, 'activo'),
(422, 'Morales', 19473, 12, 'activo'),
(423, 'Padilla', 19513, 12, 'activo'),
(424, 'Patía', 19532, 12, 'activo'),
(425, 'Piamonte', 19533, 12, 'activo'),
(426, 'Piendamó', 19548, 12, 'activo'),
(427, 'Puerto Tejada', 19573, 12, 'activo'),
(428, 'Puracé', 19585, 12, 'activo'),
(429, 'Rosas', 19622, 12, 'activo'),
(430, 'Santa Rosa', 19701, 12, 'activo'),
(431, 'Silvia', 19743, 12, 'activo'),
(432, 'Sotara', 1976, 12, 'activo'),
(433, 'Suárez', 1978, 12, 'activo'),
(434, 'Sucre', 19785, 12, 'activo'),
(435, 'Timbío', 19807, 12, 'activo'),
(436, 'Timbiquí', 19809, 12, 'activo'),
(437, 'Toribio', 19821, 12, 'activo'),
(438, 'Totoró', 19824, 12, 'activo'),
(439, 'Villa Rica', 19845, 12, 'activo'),
(440, 'Santander de Quilichao', 19698, 12, 'activo'),
(441, 'San Sebastián', 19693, 12, 'activo'),
(442, 'Páez', 19517, 12, 'activo'),
(443, 'Valledupar', 20001, 13, 'activo'),
(444, 'Aguachica', 20011, 13, 'activo'),
(445, 'Agustín Codazzi', 20013, 13, 'activo'),
(446, 'Astrea', 20032, 13, 'activo'),
(447, 'Becerril', 20045, 13, 'activo'),
(448, 'Bosconia', 2006, 13, 'activo'),
(449, 'Chimichagua', 20175, 13, 'activo'),
(450, 'Chiriguaná', 20178, 13, 'activo'),
(451, 'Curumaní', 20228, 13, 'activo'),
(452, 'El Copey', 20238, 13, 'activo'),
(453, 'El Paso', 2025, 13, 'activo'),
(454, 'Gamarra', 20295, 13, 'activo'),
(455, 'González', 2031, 13, 'activo'),
(456, 'La Gloria', 20383, 13, 'activo'),
(457, 'Manaure', 20443, 13, 'activo'),
(458, 'Pailitas', 20517, 13, 'activo'),
(459, 'Pelaya', 2055, 13, 'activo'),
(460, 'Pueblo Bello', 2057, 13, 'activo'),
(461, 'La Paz', 20621, 13, 'activo'),
(462, 'San Alberto', 2071, 13, 'activo'),
(463, 'San Diego', 2075, 13, 'activo'),
(464, 'San Martín', 2077, 13, 'activo'),
(465, 'Tamalameque', 20787, 13, 'activo'),
(466, 'Río de Oro', 20614, 13, 'activo'),
(467, 'La Jagua de Ibirico', 204, 13, 'activo'),
(468, 'Istmina', 27361, 14, 'activo'),
(469, 'Quibdó', 27001, 14, 'activo'),
(470, 'Acandí', 27006, 14, 'activo'),
(471, 'Alto Baudo', 27025, 14, 'activo'),
(472, 'Atrato', 2705, 14, 'activo'),
(473, 'Bagadó', 27073, 14, 'activo'),
(474, 'Bahía Solano', 27075, 14, 'activo'),
(475, 'Bajo Baudó', 27077, 14, 'activo'),
(476, 'Bojaya', 27099, 14, 'activo'),
(477, 'Cértegui', 2716, 14, 'activo'),
(478, 'Condoto', 27205, 14, 'activo'),
(479, 'Juradó', 27372, 14, 'activo'),
(480, 'Lloró', 27413, 14, 'activo'),
(481, 'Medio Atrato', 27425, 14, 'activo'),
(482, 'Medio Baudó', 2743, 14, 'activo'),
(483, 'Medio San Juan', 2745, 14, 'activo'),
(484, 'Nóvita', 27491, 14, 'activo'),
(485, 'Nuquí', 27495, 14, 'activo'),
(486, 'Río Iro', 2758, 14, 'activo'),
(487, 'Río Quito', 276, 14, 'activo'),
(488, 'Riosucio', 27615, 14, 'activo'),
(489, 'Sipí', 27745, 14, 'activo'),
(490, 'Unguía', 278, 14, 'activo'),
(491, 'El Litoral del San Juan', 2725, 14, 'activo'),
(492, 'El Cantón del San Pablo', 27135, 14, 'activo'),
(493, 'El Carmen de Atrato', 27245, 14, 'activo'),
(494, 'San José del Palmar', 2766, 14, 'activo'),
(495, 'Belén de Bajira', 27086, 14, 'activo'),
(496, 'Carmen del Darien', 2715, 14, 'activo'),
(497, 'Tadó', 27787, 14, 'activo'),
(498, 'Unión Panamericana', 2781, 14, 'activo'),
(499, 'San Bernardo del Viento', 23675, 15, 'activo'),
(500, 'Montería', 23001, 15, 'activo'),
(501, 'Ayapel', 23068, 15, 'activo'),
(502, 'Buenavista', 23079, 15, 'activo'),
(503, 'Canalete', 2309, 15, 'activo'),
(504, 'Cereté', 23162, 15, 'activo'),
(505, 'Chimá', 23168, 15, 'activo'),
(506, 'Chinú', 23182, 15, 'activo'),
(507, 'Cotorra', 233, 15, 'activo'),
(508, 'Lorica', 23417, 15, 'activo'),
(509, 'Los Córdobas', 23419, 15, 'activo'),
(510, 'Momil', 23464, 15, 'activo'),
(511, 'Moñitos', 235, 15, 'activo'),
(512, 'Planeta Rica', 23555, 15, 'activo'),
(513, 'Pueblo Nuevo', 2357, 15, 'activo'),
(514, 'Puerto Escondido', 23574, 15, 'activo'),
(515, 'Purísima', 23586, 15, 'activo'),
(516, 'Sahagún', 2366, 15, 'activo'),
(517, 'San Andrés Sotavento', 2367, 15, 'activo'),
(518, 'San Antero', 23672, 15, 'activo'),
(519, 'San Pelayo', 23686, 15, 'activo'),
(520, 'Tierralta', 23807, 15, 'activo'),
(521, 'Tuchín', 23815, 15, 'activo'),
(522, 'Valencia', 23855, 15, 'activo'),
(523, 'San José de Uré', 23682, 15, 'activo'),
(524, 'Ciénaga de Oro', 23189, 15, 'activo'),
(525, 'San Carlos', 23678, 15, 'activo'),
(526, 'Montelíbano', 23466, 15, 'activo'),
(527, 'La Apartada', 2335, 15, 'activo'),
(528, 'Puerto Libertador', 2358, 15, 'activo'),
(529, 'Anapoima', 25035, 16, 'activo'),
(530, 'Arbeláez', 25053, 16, 'activo'),
(531, 'Beltrán', 25086, 16, 'activo'),
(532, 'Bituima', 25095, 16, 'activo'),
(533, 'Bojacá', 25099, 16, 'activo'),
(534, 'Cabrera', 2512, 16, 'activo'),
(535, 'Cachipay', 25123, 16, 'activo'),
(536, 'Cajicá', 25126, 16, 'activo'),
(537, 'Caparrapí', 25148, 16, 'activo'),
(538, 'Caqueza', 25151, 16, 'activo'),
(539, 'Chaguaní', 25168, 16, 'activo'),
(540, 'Chipaque', 25178, 16, 'activo'),
(541, 'Choachí', 25181, 16, 'activo'),
(542, 'Chocontá', 25183, 16, 'activo'),
(543, 'Cogua', 252, 16, 'activo'),
(544, 'Cota', 25214, 16, 'activo'),
(545, 'Cucunubá', 25224, 16, 'activo'),
(546, 'El Colegio', 25245, 16, 'activo'),
(547, 'El Rosal', 2526, 16, 'activo'),
(548, 'Fomeque', 25279, 16, 'activo'),
(549, 'Fosca', 25281, 16, 'activo'),
(550, 'Funza', 25286, 16, 'activo'),
(551, 'Fúquene', 25288, 16, 'activo'),
(552, 'Gachala', 25293, 16, 'activo'),
(553, 'Gachancipá', 25295, 16, 'activo'),
(554, 'Gachetá', 25297, 16, 'activo'),
(555, 'Girardot', 25307, 16, 'activo'),
(556, 'Granada', 25312, 16, 'activo'),
(557, 'Guachetá', 25317, 16, 'activo'),
(558, 'Guaduas', 2532, 16, 'activo'),
(559, 'Guasca', 25322, 16, 'activo'),
(560, 'Guataquí', 25324, 16, 'activo'),
(561, 'Guatavita', 25326, 16, 'activo'),
(562, 'Guayabetal', 25335, 16, 'activo'),
(563, 'Gutiérrez', 25339, 16, 'activo'),
(564, 'Jerusalén', 25368, 16, 'activo'),
(565, 'Junín', 25372, 16, 'activo'),
(566, 'La Calera', 25377, 16, 'activo'),
(567, 'La Mesa', 25386, 16, 'activo'),
(568, 'La Palma', 25394, 16, 'activo'),
(569, 'La Peña', 25398, 16, 'activo'),
(570, 'La Vega', 25402, 16, 'activo'),
(571, 'Lenguazaque', 25407, 16, 'activo'),
(572, 'Macheta', 25426, 16, 'activo'),
(573, 'Madrid', 2543, 16, 'activo'),
(574, 'Manta', 25436, 16, 'activo'),
(575, 'Medina', 25438, 16, 'activo'),
(576, 'Mosquera', 25473, 16, 'activo'),
(577, 'Nariño', 25483, 16, 'activo'),
(578, 'Nemocón', 25486, 16, 'activo'),
(579, 'Nilo', 25488, 16, 'activo'),
(580, 'Nimaima', 25489, 16, 'activo'),
(581, 'Nocaima', 25491, 16, 'activo'),
(582, 'Venecia', 25506, 16, 'activo'),
(583, 'Pacho', 25513, 16, 'activo'),
(584, 'Paime', 25518, 16, 'activo'),
(585, 'Pandi', 25524, 16, 'activo'),
(586, 'Paratebueno', 2553, 16, 'activo'),
(587, 'Pasca', 25535, 16, 'activo'),
(588, 'Puerto Salgar', 25572, 16, 'activo'),
(589, 'Pulí', 2558, 16, 'activo'),
(590, 'Quebradanegra', 25592, 16, 'activo'),
(591, 'Quetame', 25594, 16, 'activo'),
(592, 'Quipile', 25596, 16, 'activo'),
(593, 'Apulo', 25599, 16, 'activo'),
(594, 'Ricaurte', 25612, 16, 'activo'),
(595, 'San Bernardo', 25649, 16, 'activo'),
(596, 'San Cayetano', 25653, 16, 'activo'),
(597, 'San Francisco', 25658, 16, 'activo'),
(598, 'Sesquilé', 25736, 16, 'activo'),
(599, 'Sibaté', 2574, 16, 'activo'),
(600, 'Silvania', 25743, 16, 'activo'),
(601, 'Simijaca', 25745, 16, 'activo'),
(602, 'Soacha', 25754, 16, 'activo'),
(603, 'Subachoque', 25769, 16, 'activo'),
(604, 'Suesca', 25772, 16, 'activo'),
(605, 'Supatá', 25777, 16, 'activo'),
(606, 'Susa', 25779, 16, 'activo'),
(607, 'Sutatausa', 25781, 16, 'activo'),
(608, 'Tabio', 25785, 16, 'activo'),
(609, 'Tausa', 25793, 16, 'activo'),
(610, 'Tena', 25797, 16, 'activo'),
(611, 'Tenjo', 25799, 16, 'activo'),
(612, 'Tibacuy', 25805, 16, 'activo'),
(613, 'Tibirita', 25807, 16, 'activo'),
(614, 'Tocaima', 25815, 16, 'activo'),
(615, 'Tocancipá', 25817, 16, 'activo'),
(616, 'Topaipí', 25823, 16, 'activo'),
(617, 'Ubalá', 25839, 16, 'activo'),
(618, 'Ubaque', 25841, 16, 'activo'),
(619, 'Une', 25845, 16, 'activo'),
(620, 'Útica', 25851, 16, 'activo'),
(621, 'Vianí', 25867, 16, 'activo'),
(622, 'Villagómez', 25871, 16, 'activo'),
(623, 'Villapinzón', 25873, 16, 'activo'),
(624, 'Villeta', 25875, 16, 'activo'),
(625, 'Viotá', 25878, 16, 'activo'),
(626, 'Zipacón', 25898, 16, 'activo'),
(627, 'San Juan de Río Seco', 25662, 16, 'activo'),
(628, 'Villa de San Diego de Ubate', 25843, 16, 'activo'),
(629, 'Guayabal de Siquima', 25328, 16, 'activo'),
(630, 'San Antonio del Tequendama', 25645, 16, 'activo'),
(631, 'Agua de Dios', 25001, 16, 'activo'),
(632, 'Carmen de Carupa', 25154, 16, 'activo'),
(633, 'Vergara', 25862, 16, 'activo'),
(634, 'Albán', 25019, 16, 'activo'),
(635, 'Anolaima', 2504, 16, 'activo'),
(636, 'Chía', 25175, 16, 'activo'),
(637, 'El Peñón', 25258, 16, 'activo'),
(638, 'Sopó', 25758, 16, 'activo'),
(639, 'Gama', 25299, 16, 'activo'),
(640, 'Sasaima', 25718, 16, 'activo'),
(641, 'Yacopí', 25885, 16, 'activo'),
(642, 'Fusagasugá', 2529, 16, 'activo'),
(643, 'Zipaquirá', 25899, 16, 'activo'),
(644, 'Facatativá', 25269, 16, 'activo'),
(645, 'Inírida', 94001, 17, 'activo'),
(646, 'Barranco Minas', 94343, 17, 'activo'),
(647, 'Mapiripana', 94663, 17, 'activo'),
(648, 'San Felipe', 94883, 17, 'activo'),
(649, 'Puerto Colombia', 94884, 17, 'activo'),
(650, 'La Guadalupe', 94885, 17, 'activo'),
(651, 'Cacahual', 94886, 17, 'activo'),
(652, 'Pana Pana', 94887, 17, 'activo'),
(653, 'Morichal', 94888, 17, 'activo'),
(654, 'Calamar', 95015, 18, 'activo'),
(655, 'San José del Guaviare', 95001, 18, 'activo'),
(656, 'Miraflores', 952, 18, 'activo'),
(657, 'El Retorno', 95025, 18, 'activo'),
(658, 'Neiva', 41001, 19, 'activo'),
(659, 'Acevedo', 41006, 19, 'activo'),
(660, 'Agrado', 41013, 19, 'activo'),
(661, 'Aipe', 41016, 19, 'activo'),
(662, 'Algeciras', 4102, 19, 'activo'),
(663, 'Altamira', 41026, 19, 'activo'),
(664, 'Baraya', 41078, 19, 'activo'),
(665, 'Campoalegre', 41132, 19, 'activo'),
(666, 'Colombia', 41206, 19, 'activo'),
(667, 'Elías', 41244, 19, 'activo'),
(668, 'Garzón', 41298, 19, 'activo'),
(669, 'Gigante', 41306, 19, 'activo'),
(670, 'Guadalupe', 41319, 19, 'activo'),
(671, 'Hobo', 41349, 19, 'activo'),
(672, 'Iquira', 41357, 19, 'activo'),
(673, 'Isnos', 41359, 19, 'activo'),
(674, 'La Argentina', 41378, 19, 'activo'),
(675, 'La Plata', 41396, 19, 'activo'),
(676, 'Nátaga', 41483, 19, 'activo'),
(677, 'Oporapa', 41503, 19, 'activo'),
(678, 'Paicol', 41518, 19, 'activo'),
(679, 'Palermo', 41524, 19, 'activo'),
(680, 'Palestina', 4153, 19, 'activo'),
(681, 'Pital', 41548, 19, 'activo'),
(682, 'Pitalito', 41551, 19, 'activo'),
(683, 'Rivera', 41615, 19, 'activo'),
(684, 'Saladoblanco', 4166, 19, 'activo'),
(685, 'Santa María', 41676, 19, 'activo'),
(686, 'Suaza', 4177, 19, 'activo'),
(687, 'Tarqui', 41791, 19, 'activo'),
(688, 'Tesalia', 41797, 19, 'activo'),
(689, 'Tello', 41799, 19, 'activo'),
(690, 'Teruel', 41801, 19, 'activo'),
(691, 'Timaná', 41807, 19, 'activo'),
(692, 'Villavieja', 41872, 19, 'activo'),
(693, 'Yaguará', 41885, 19, 'activo'),
(694, 'San Agustín', 41668, 19, 'activo'),
(695, 'Riohacha', 44001, 20, 'activo'),
(696, 'Albania', 44035, 20, 'activo'),
(697, 'Barrancas', 44078, 20, 'activo'),
(698, 'Dibula', 4409, 20, 'activo'),
(699, 'Distracción', 44098, 20, 'activo'),
(700, 'El Molino', 4411, 20, 'activo'),
(701, 'Fonseca', 44279, 20, 'activo'),
(702, 'Hatonuevo', 44378, 20, 'activo'),
(703, 'Maicao', 4443, 20, 'activo'),
(704, 'Manaure', 4456, 20, 'activo'),
(705, 'Uribia', 44847, 20, 'activo'),
(706, 'Urumita', 44855, 20, 'activo'),
(707, 'Villanueva', 44874, 20, 'activo'),
(708, 'La Jagua del Pilar', 4442, 20, 'activo'),
(709, 'San Juan del Cesar', 4465, 20, 'activo'),
(710, 'Santa Marta', 47001, 21, 'activo'),
(711, 'Algarrobo', 4703, 21, 'activo'),
(712, 'Aracataca', 47053, 21, 'activo'),
(713, 'Ariguaní', 47058, 21, 'activo'),
(714, 'Cerro San Antonio', 47161, 21, 'activo'),
(715, 'Chivolo', 4717, 21, 'activo'),
(716, 'Concordia', 47205, 21, 'activo'),
(717, 'El Banco', 47245, 21, 'activo'),
(718, 'El Piñon', 47258, 21, 'activo'),
(719, 'El Retén', 47268, 21, 'activo'),
(720, 'Fundación', 47288, 21, 'activo'),
(721, 'Guamal', 47318, 21, 'activo'),
(722, 'Nueva Granada', 4746, 21, 'activo'),
(723, 'Pedraza', 47541, 21, 'activo'),
(724, 'Pivijay', 47551, 21, 'activo'),
(725, 'Plato', 47555, 21, 'activo'),
(726, 'Remolino', 47605, 21, 'activo'),
(727, 'Salamina', 47675, 21, 'activo'),
(728, 'San Zenón', 47703, 21, 'activo'),
(729, 'Santa Ana', 47707, 21, 'activo'),
(730, 'Sitionuevo', 47745, 21, 'activo'),
(731, 'Tenerife', 47798, 21, 'activo'),
(732, 'Zapayán', 4796, 21, 'activo'),
(733, 'Zona Bananera', 4798, 21, 'activo'),
(734, 'San Sebastián de Buenavista', 47692, 21, 'activo'),
(735, 'Sabanas de San Angel', 4766, 21, 'activo'),
(736, 'Pijiño del Carmen', 47545, 21, 'activo'),
(737, 'Santa Bárbara de Pinto', 4772, 21, 'activo'),
(738, 'Pueblo Viejo', 4757, 21, 'activo'),
(739, 'Ciénaga', 47189, 21, 'activo'),
(740, 'Villavicencio', 50001, 22, 'activo'),
(741, 'Acacias', 50006, 22, 'activo'),
(742, 'Cabuyaro', 50124, 22, 'activo'),
(743, 'Cubarral', 50223, 22, 'activo'),
(744, 'Cumaral', 50226, 22, 'activo'),
(745, 'El Calvario', 50245, 22, 'activo'),
(746, 'El Castillo', 50251, 22, 'activo'),
(747, 'El Dorado', 5027, 22, 'activo'),
(748, 'Granada', 50313, 22, 'activo'),
(749, 'Guamal', 50318, 22, 'activo'),
(750, 'Mapiripán', 50325, 22, 'activo'),
(751, 'Mesetas', 5033, 22, 'activo'),
(752, 'La Macarena', 5035, 22, 'activo'),
(753, 'Uribe', 5037, 22, 'activo'),
(754, 'Lejanías', 504, 22, 'activo'),
(755, 'Puerto Concordia', 5045, 22, 'activo'),
(756, 'Puerto Gaitán', 50568, 22, 'activo'),
(757, 'Puerto López', 50573, 22, 'activo'),
(758, 'Puerto Lleras', 50577, 22, 'activo'),
(759, 'Puerto Rico', 5059, 22, 'activo'),
(760, 'Restrepo', 50606, 22, 'activo'),
(761, 'San Juanito', 50686, 22, 'activo'),
(762, 'San Martín', 50689, 22, 'activo'),
(763, 'Vista Hermosa', 50711, 22, 'activo'),
(764, 'Barranca de Upía', 5011, 22, 'activo'),
(765, 'Fuente de Oro', 50287, 22, 'activo'),
(766, 'San Carlos de Guaroa', 5068, 22, 'activo'),
(767, 'San Juan de Arama', 50683, 22, 'activo'),
(768, 'Castilla la Nueva', 5015, 22, 'activo'),
(769, 'Santacruz', 52699, 23, 'activo'),
(770, 'Pasto', 52001, 23, 'activo'),
(771, 'Albán', 52019, 23, 'activo'),
(772, 'Aldana', 52022, 23, 'activo'),
(773, 'Ancuyá', 52036, 23, 'activo'),
(774, 'Barbacoas', 52079, 23, 'activo'),
(775, 'Colón', 52203, 23, 'activo'),
(776, 'Consaca', 52207, 23, 'activo'),
(777, 'Contadero', 5221, 23, 'activo'),
(778, 'Córdoba', 52215, 23, 'activo'),
(779, 'Cuaspud', 52224, 23, 'activo'),
(780, 'Cumbal', 52227, 23, 'activo'),
(781, 'Cumbitara', 52233, 23, 'activo'),
(782, 'El Charco', 5225, 23, 'activo'),
(783, 'El Peñol', 52254, 23, 'activo'),
(784, 'El Rosario', 52256, 23, 'activo'),
(785, 'El Tambo', 5226, 23, 'activo'),
(786, 'Funes', 52287, 23, 'activo'),
(787, 'Guachucal', 52317, 23, 'activo'),
(788, 'Guaitarilla', 5232, 23, 'activo'),
(789, 'Gualmatán', 52323, 23, 'activo'),
(790, 'Iles', 52352, 23, 'activo'),
(791, 'Imués', 52354, 23, 'activo'),
(792, 'Ipiales', 52356, 23, 'activo'),
(793, 'La Cruz', 52378, 23, 'activo'),
(794, 'La Florida', 52381, 23, 'activo'),
(795, 'La Llanada', 52385, 23, 'activo'),
(796, 'La Tola', 5239, 23, 'activo'),
(797, 'La Unión', 52399, 23, 'activo'),
(798, 'Leiva', 52405, 23, 'activo'),
(799, 'Linares', 52411, 23, 'activo'),
(800, 'Los Andes', 52418, 23, 'activo'),
(801, 'Magüí', 52427, 23, 'activo'),
(802, 'Mallama', 52435, 23, 'activo'),
(803, 'Mosquera', 52473, 23, 'activo'),
(804, 'Nariño', 5248, 23, 'activo'),
(805, 'Olaya Herrera', 5249, 23, 'activo'),
(806, 'Ospina', 52506, 23, 'activo'),
(807, 'Francisco Pizarro', 5252, 23, 'activo'),
(808, 'Policarpa', 5254, 23, 'activo'),
(809, 'Potosí', 5256, 23, 'activo'),
(810, 'Providencia', 52565, 23, 'activo'),
(811, 'Puerres', 52573, 23, 'activo'),
(812, 'Pupiales', 52585, 23, 'activo'),
(813, 'Ricaurte', 52612, 23, 'activo'),
(814, 'Roberto Payán', 52621, 23, 'activo'),
(815, 'Samaniego', 52678, 23, 'activo'),
(816, 'Sandoná', 52683, 23, 'activo'),
(817, 'San Bernardo', 52685, 23, 'activo'),
(818, 'San Lorenzo', 52687, 23, 'activo'),
(819, 'San Pablo', 52693, 23, 'activo'),
(820, 'Santa Bárbara', 52696, 23, 'activo'),
(821, 'Sapuyes', 5272, 23, 'activo'),
(822, 'Taminango', 52786, 23, 'activo'),
(823, 'Tangua', 52788, 23, 'activo'),
(824, 'Túquerres', 52838, 23, 'activo'),
(825, 'Yacuanquer', 52885, 23, 'activo'),
(826, 'San Pedro de Cartago', 52694, 23, 'activo'),
(827, 'El Tablón de Gómez', 52258, 23, 'activo'),
(828, 'Buesaco', 5211, 23, 'activo'),
(829, 'San Andrés de Tumaco', 52835, 23, 'activo'),
(830, 'Belén', 52083, 23, 'activo'),
(831, 'Chachagüí', 5224, 23, 'activo'),
(832, 'Arboleda', 52051, 23, 'activo'),
(833, 'Silos', 54743, 24, 'activo'),
(834, 'Cácota', 54125, 24, 'activo'),
(835, 'Toledo', 5482, 24, 'activo'),
(836, 'Mutiscua', 5448, 24, 'activo'),
(837, 'El Zulia', 54261, 24, 'activo'),
(838, 'Salazar', 5466, 24, 'activo'),
(839, 'Cucutilla', 54223, 24, 'activo'),
(840, 'Puerto Santander', 54553, 24, 'activo'),
(841, 'Gramalote', 54313, 24, 'activo'),
(842, 'El Tarra', 5425, 24, 'activo'),
(843, 'Teorama', 548, 24, 'activo'),
(844, 'Arboledas', 54051, 24, 'activo'),
(845, 'Lourdes', 54418, 24, 'activo'),
(846, 'Bochalema', 54099, 24, 'activo'),
(847, 'Convención', 54206, 24, 'activo'),
(848, 'Hacarí', 54344, 24, 'activo'),
(849, 'Herrán', 54347, 24, 'activo'),
(850, 'Tibú', 5481, 24, 'activo'),
(851, 'San Cayetano', 54673, 24, 'activo'),
(852, 'San Calixto', 5467, 24, 'activo'),
(853, 'La Playa', 54398, 24, 'activo'),
(854, 'Chinácota', 54172, 24, 'activo'),
(855, 'Ragonvalia', 54599, 24, 'activo'),
(856, 'La Esperanza', 54385, 24, 'activo'),
(857, 'Villa del Rosario', 54874, 24, 'activo'),
(858, 'Chitagá', 54174, 24, 'activo'),
(859, 'Sardinata', 5472, 24, 'activo'),
(860, 'Abrego', 54003, 24, 'activo'),
(861, 'Los Patios', 54405, 24, 'activo'),
(862, 'Ocaña', 54498, 24, 'activo'),
(863, 'Bucarasica', 54109, 24, 'activo'),
(864, 'Santiago', 5468, 24, 'activo'),
(865, 'Labateca', 54377, 24, 'activo'),
(866, 'Cachirá', 54128, 24, 'activo'),
(867, 'Villa Caro', 54871, 24, 'activo'),
(868, 'Durania', 54239, 24, 'activo'),
(869, 'Pamplona', 54518, 24, 'activo'),
(870, 'Pamplonita', 5452, 24, 'activo'),
(871, 'Cúcuta', 54001, 24, 'activo'),
(872, 'El Carmen', 54245, 24, 'activo'),
(873, 'Mocoa', 86001, 25, 'activo'),
(874, 'Colón', 86219, 25, 'activo'),
(875, 'Orito', 8632, 25, 'activo'),
(876, 'Puerto Caicedo', 86569, 25, 'activo'),
(877, 'Puerto Guzmán', 86571, 25, 'activo'),
(878, 'Leguízamo', 86573, 25, 'activo'),
(879, 'Sibundoy', 86749, 25, 'activo'),
(880, 'San Francisco', 86755, 25, 'activo'),
(881, 'San Miguel', 86757, 25, 'activo'),
(882, 'Santiago', 8676, 25, 'activo'),
(883, 'Valle de Guamez', 86865, 25, 'activo'),
(884, 'Puerto Asís', 86568, 25, 'activo'),
(885, 'Villagarzón', 86885, 25, 'activo'),
(886, 'Armenia', 63001, 26, 'activo'),
(887, 'Buenavista', 63111, 26, 'activo'),
(888, 'Circasia', 6319, 26, 'activo'),
(889, 'Córdoba', 63212, 26, 'activo'),
(890, 'Filandia', 63272, 26, 'activo'),
(891, 'La Tebaida', 63401, 26, 'activo'),
(892, 'Montenegro', 6347, 26, 'activo'),
(893, 'Pijao', 63548, 26, 'activo'),
(894, 'Quimbaya', 63594, 26, 'activo'),
(895, 'Salento', 6369, 26, 'activo'),
(896, 'Calarcá', 6313, 26, 'activo'),
(897, 'Génova', 63302, 26, 'activo'),
(898, 'Pereira', 66001, 27, 'activo'),
(899, 'Apía', 66045, 27, 'activo'),
(900, 'Balboa', 66075, 27, 'activo'),
(901, 'Dosquebradas', 6617, 27, 'activo'),
(902, 'Guática', 66318, 27, 'activo'),
(903, 'La Celia', 66383, 27, 'activo'),
(904, 'La Virginia', 664, 27, 'activo'),
(905, 'Marsella', 6644, 27, 'activo'),
(906, 'Mistrató', 66456, 27, 'activo'),
(907, 'Pueblo Rico', 66572, 27, 'activo'),
(908, 'Quinchía', 66594, 27, 'activo'),
(909, 'Santuario', 66687, 27, 'activo'),
(910, 'Santa Rosa de Cabal', 66682, 27, 'activo'),
(911, 'Belén de Umbría', 66088, 27, 'activo'),
(912, 'Puerto Wilches', 68575, 28, 'activo'),
(913, 'Puerto Parra', 68573, 28, 'activo'),
(914, 'Bucaramanga', 68001, 28, 'activo'),
(915, 'Aguada', 68013, 28, 'activo'),
(916, 'Albania', 6802, 28, 'activo'),
(917, 'Aratoca', 68051, 28, 'activo'),
(918, 'Barbosa', 68077, 28, 'activo'),
(919, 'Barichara', 68079, 28, 'activo'),
(920, 'Barrancabermeja', 68081, 28, 'activo'),
(921, 'Betulia', 68092, 28, 'activo'),
(922, 'Bolívar', 68101, 28, 'activo'),
(923, 'Cabrera', 68121, 28, 'activo'),
(924, 'California', 68132, 28, 'activo'),
(925, 'Carcasí', 68152, 28, 'activo'),
(926, 'Cepitá', 6816, 28, 'activo'),
(927, 'Cerrito', 68162, 28, 'activo'),
(928, 'Charalá', 68167, 28, 'activo'),
(929, 'Charta', 68169, 28, 'activo'),
(930, 'Chipatá', 68179, 28, 'activo'),
(931, 'Cimitarra', 6819, 28, 'activo'),
(932, 'Concepción', 68207, 28, 'activo'),
(933, 'Confines', 68209, 28, 'activo'),
(934, 'Contratación', 68211, 28, 'activo'),
(935, 'Coromoro', 68217, 28, 'activo'),
(936, 'Curití', 68229, 28, 'activo'),
(937, 'El Guacamayo', 68245, 28, 'activo'),
(938, 'El Playón', 68255, 28, 'activo'),
(939, 'Encino', 68264, 28, 'activo'),
(940, 'Enciso', 68266, 28, 'activo'),
(941, 'Florián', 68271, 28, 'activo'),
(942, 'Floridablanca', 68276, 28, 'activo'),
(943, 'Galán', 68296, 28, 'activo'),
(944, 'Gambita', 68298, 28, 'activo'),
(945, 'Girón', 68307, 28, 'activo'),
(946, 'Guaca', 68318, 28, 'activo'),
(947, 'Guadalupe', 6832, 28, 'activo'),
(948, 'Guapotá', 68322, 28, 'activo'),
(949, 'Guavatá', 68324, 28, 'activo'),
(950, 'Güepsa', 68327, 28, 'activo'),
(951, 'Jesús María', 68368, 28, 'activo'),
(952, 'Jordán', 6837, 28, 'activo'),
(953, 'La Belleza', 68377, 28, 'activo'),
(954, 'Landázuri', 68385, 28, 'activo'),
(955, 'La Paz', 68397, 28, 'activo'),
(956, 'Lebríja', 68406, 28, 'activo'),
(957, 'Los Santos', 68418, 28, 'activo'),
(958, 'Macaravita', 68425, 28, 'activo'),
(959, 'Málaga', 68432, 28, 'activo'),
(960, 'Matanza', 68444, 28, 'activo'),
(961, 'Mogotes', 68464, 28, 'activo'),
(962, 'Molagavita', 68468, 28, 'activo'),
(963, 'Ocamonte', 68498, 28, 'activo'),
(964, 'Oiba', 685, 28, 'activo'),
(965, 'Onzaga', 68502, 28, 'activo'),
(966, 'Palmar', 68522, 28, 'activo'),
(967, 'Páramo', 68533, 28, 'activo'),
(968, 'Piedecuesta', 68547, 28, 'activo'),
(969, 'Pinchote', 68549, 28, 'activo'),
(970, 'Puente Nacional', 68572, 28, 'activo'),
(971, 'Rionegro', 68615, 28, 'activo'),
(972, 'San Andrés', 68669, 28, 'activo'),
(973, 'San Gil', 68679, 28, 'activo'),
(974, 'San Joaquín', 68682, 28, 'activo'),
(975, 'San Miguel', 68686, 28, 'activo'),
(976, 'Santa Bárbara', 68705, 28, 'activo'),
(977, 'Simacota', 68745, 28, 'activo'),
(978, 'Socorro', 68755, 28, 'activo'),
(979, 'Suaita', 6877, 28, 'activo'),
(980, 'Sucre', 68773, 28, 'activo'),
(981, 'Suratá', 6878, 28, 'activo'),
(982, 'Tona', 6882, 28, 'activo'),
(983, 'Vélez', 68861, 28, 'activo'),
(984, 'Vetas', 68867, 28, 'activo'),
(985, 'Villanueva', 68872, 28, 'activo'),
(986, 'Zapatoca', 68895, 28, 'activo'),
(987, 'Palmas del Socorro', 68524, 28, 'activo'),
(988, 'San Vicente de Chucurí', 68689, 28, 'activo'),
(989, 'San José de Miranda', 68684, 28, 'activo'),
(990, 'Santa Helena del Opón', 6872, 28, 'activo'),
(991, 'Sabana de Torres', 68655, 28, 'activo'),
(992, 'El Carmen de Chucurí', 68235, 28, 'activo'),
(993, 'Valle de San José', 68855, 28, 'activo'),
(994, 'San Benito', 68673, 28, 'activo'),
(995, 'Hato', 68344, 28, 'activo'),
(996, 'Chimá', 68176, 28, 'activo'),
(997, 'Capitanejo', 68147, 28, 'activo'),
(998, 'El Peñón', 6825, 28, 'activo'),
(999, 'Sincelejo', 70001, 29, 'activo'),
(1000, 'Buenavista', 7011, 29, 'activo'),
(1001, 'Caimito', 70124, 29, 'activo'),
(1002, 'Coloso', 70204, 29, 'activo'),
(1003, 'Coveñas', 70221, 29, 'activo'),
(1004, 'Chalán', 7023, 29, 'activo'),
(1005, 'El Roble', 70233, 29, 'activo'),
(1006, 'Galeras', 70235, 29, 'activo'),
(1007, 'Guaranda', 70265, 29, 'activo'),
(1008, 'La Unión', 704, 29, 'activo'),
(1009, 'Los Palmitos', 70418, 29, 'activo'),
(1010, 'Majagual', 70429, 29, 'activo'),
(1011, 'Morroa', 70473, 29, 'activo'),
(1012, 'Ovejas', 70508, 29, 'activo'),
(1013, 'Palmito', 70523, 29, 'activo'),
(1014, 'San Benito Abad', 70678, 29, 'activo'),
(1015, 'San Marcos', 70708, 29, 'activo'),
(1016, 'San Onofre', 70713, 29, 'activo'),
(1017, 'San Pedro', 70717, 29, 'activo'),
(1018, 'Sucre', 70771, 29, 'activo'),
(1019, 'Tolú Viejo', 70823, 29, 'activo'),
(1020, 'San Luis de Sincé', 70742, 29, 'activo'),
(1021, 'San Juan de Betulia', 70702, 29, 'activo'),
(1022, 'Santiago de Tolú', 7082, 29, 'activo'),
(1023, 'Sampués', 7067, 29, 'activo'),
(1024, 'Corozal', 70215, 29, 'activo'),
(1025, 'Alpujarra', 73024, 30, 'activo'),
(1026, 'Alvarado', 73026, 30, 'activo'),
(1027, 'Ambalema', 7303, 30, 'activo'),
(1028, 'Armero', 73055, 30, 'activo'),
(1029, 'Ataco', 73067, 30, 'activo'),
(1030, 'Cajamarca', 73124, 30, 'activo'),
(1031, 'Chaparral', 73168, 30, 'activo'),
(1032, 'Coello', 732, 30, 'activo'),
(1033, 'Coyaima', 73217, 30, 'activo'),
(1034, 'Cunday', 73226, 30, 'activo'),
(1035, 'Dolores', 73236, 30, 'activo'),
(1036, 'Espinal', 73268, 30, 'activo'),
(1037, 'Falan', 7327, 30, 'activo'),
(1038, 'Flandes', 73275, 30, 'activo'),
(1039, 'Fresno', 73283, 30, 'activo'),
(1040, 'Guamo', 73319, 30, 'activo'),
(1041, 'Herveo', 73347, 30, 'activo'),
(1042, 'Honda', 73349, 30, 'activo'),
(1043, 'Icononzo', 73352, 30, 'activo'),
(1044, 'Mariquita', 73443, 30, 'activo'),
(1045, 'Melgar', 73449, 30, 'activo'),
(1046, 'Murillo', 73461, 30, 'activo'),
(1047, 'Natagaima', 73483, 30, 'activo'),
(1048, 'Ortega', 73504, 30, 'activo'),
(1049, 'Palocabildo', 7352, 30, 'activo'),
(1050, 'Piedras', 73547, 30, 'activo'),
(1051, 'Planadas', 73555, 30, 'activo'),
(1052, 'Prado', 73563, 30, 'activo'),
(1053, 'Purificación', 73585, 30, 'activo'),
(1054, 'Rio Blanco', 73616, 30, 'activo'),
(1055, 'Roncesvalles', 73622, 30, 'activo'),
(1056, 'Rovira', 73624, 30, 'activo'),
(1057, 'Saldaña', 73671, 30, 'activo'),
(1058, 'Santa Isabel', 73686, 30, 'activo'),
(1059, 'Venadillo', 73861, 30, 'activo'),
(1060, 'Villahermosa', 7387, 30, 'activo'),
(1061, 'Villarrica', 73873, 30, 'activo'),
(1062, 'Valle de San Juan', 73854, 30, 'activo'),
(1063, 'Carmen de Apicala', 73148, 30, 'activo'),
(1064, 'San Luis', 73678, 30, 'activo'),
(1065, 'San Antonio', 73675, 30, 'activo'),
(1066, 'Casabianca', 73152, 30, 'activo'),
(1067, 'Anzoátegui', 73043, 30, 'activo'),
(1068, 'Ibagué', 73001, 30, 'activo'),
(1069, 'Líbano', 73411, 30, 'activo'),
(1070, 'Lérida', 73408, 30, 'activo'),
(1071, 'Suárez', 7377, 30, 'activo'),
(1072, 'El Dovio', 7625, 31, 'activo'),
(1073, 'Roldanillo', 76622, 31, 'activo'),
(1074, 'Argelia', 76054, 31, 'activo'),
(1075, 'Sevilla', 76736, 31, 'activo'),
(1076, 'Zarzal', 76895, 31, 'activo'),
(1077, 'El Cerrito', 76248, 31, 'activo'),
(1078, 'Cartago', 76147, 31, 'activo'),
(1079, 'Caicedonia', 76122, 31, 'activo'),
(1080, 'El Cairo', 76246, 31, 'activo'),
(1081, 'La Unión', 764, 31, 'activo'),
(1082, 'Restrepo', 76606, 31, 'activo'),
(1083, 'Dagua', 76233, 31, 'activo'),
(1084, 'Guacarí', 76318, 31, 'activo'),
(1085, 'Ansermanuevo', 76041, 31, 'activo'),
(1086, 'Bugalagrande', 76113, 31, 'activo'),
(1087, 'La Victoria', 76403, 31, 'activo'),
(1088, 'Ginebra', 76306, 31, 'activo'),
(1089, 'Yumbo', 76892, 31, 'activo'),
(1090, 'Obando', 76497, 31, 'activo'),
(1091, 'Bolívar', 761, 31, 'activo'),
(1092, 'Cali', 76001, 31, 'activo'),
(1093, 'San Pedro', 7667, 31, 'activo'),
(1094, 'Guadalajara de Buga', 76111, 31, 'activo'),
(1095, 'Calima', 76126, 31, 'activo'),
(1096, 'Andalucía', 76036, 31, 'activo'),
(1097, 'Pradera', 76563, 31, 'activo'),
(1098, 'Yotoco', 7689, 31, 'activo'),
(1099, 'Palmira', 7652, 31, 'activo'),
(1100, 'Riofrío', 76616, 31, 'activo'),
(1101, 'Alcalá', 7602, 31, 'activo'),
(1102, 'Versalles', 76863, 31, 'activo'),
(1103, 'El Águila', 76243, 31, 'activo'),
(1104, 'Toro', 76823, 31, 'activo'),
(1105, 'Candelaria', 7613, 31, 'activo'),
(1106, 'La Cumbre', 76377, 31, 'activo'),
(1107, 'Ulloa', 76845, 31, 'activo'),
(1108, 'Trujillo', 76828, 31, 'activo'),
(1109, 'Vijes', 76869, 31, 'activo'),
(1110, 'Tuluá', 76834, 31, 'activo'),
(1111, 'Florida', 76275, 31, 'activo'),
(1112, 'Jamundí', 76364, 31, 'activo'),
(1113, 'Buenaventura', 76109, 31, 'activo'),
(1114, 'Mitú', 97001, 32, 'activo'),
(1115, 'Caruru', 97161, 32, 'activo'),
(1116, 'Pacoa', 97511, 32, 'activo'),
(1117, 'Taraira', 97666, 32, 'activo'),
(1118, 'Papunaua', 97777, 32, 'activo'),
(1119, 'Yavaraté', 97889, 32, 'activo'),
(1120, 'Puerto Carreño', 99001, 33, 'activo'),
(1121, 'La Primavera', 99524, 33, 'activo'),
(1122, 'Santa Rosalía', 99624, 33, 'activo'),
(1123, 'Cumaribo', 99773, 33, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id_persona` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(60) NOT NULL,
  `documento` int(11) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int(11) NOT NULL,
  `rh` varchar(3) NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `id_regimen` int(11) NOT NULL,
  `id_tipo_documento` int(11) NOT NULL,
  `id_municipio` int(11) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_estado` int(11) NOT NULL,
  `id_pertenencia_etnica` int(11) DEFAULT NULL,
  `id_grupo_poblacional` int(11) DEFAULT NULL,
  `id_ips` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id_persona`, `nombre`, `apellido`, `documento`, `telefono`, `direccion`, `fecha_nacimiento`, `edad`, `rh`, `sexo`, `id_regimen`, `id_tipo_documento`, `id_municipio`, `id_usuario`, `id_estado`, `id_pertenencia_etnica`, `id_grupo_poblacional`, `id_ips`) VALUES
(1, 'Carol Omaira', 'Peña', 1001982882, '3218829910', 'Coosalud EPS', '1995-09-12', 0, 'O+', 'F', 0, 3, 169, 1, 1, NULL, NULL, NULL),
(2, 'Fernando', 'Daza', 1982772809, '3188292910', 'Coosalud EPS', '1999-02-08', 0, 'A+', 'M', 0, 3, 169, 2, 1, NULL, NULL, NULL),
(3, 'Daniel', 'Camacho', 1001095566, '3045484259', 'Suba', '2002-12-05', 1, 'O+', 'M', 0, 3, 169, 3, 1, NULL, NULL, NULL),
(4, 'Eduardo', 'Zarate', 1001928829, '3125678876', 'Fontibon', '2000-09-12', 1, 'O+', 'M', 0, 3, 169, 4, 1, NULL, NULL, NULL),
(5, 'Martha Stella', 'Garcia', 52342810, '3132276445', 'Rincon', '1978-05-24', 1, 'A+', 'F', 0, 3, 169, 5, 1, NULL, NULL, NULL),
(6, 'Jenny Lorena', 'Leon', 1099288299, '3129876567', 'Aures 2', '1999-01-30', 1, 'O-', 'F', 0, 3, 169, 6, 1, NULL, NULL, NULL),
(7, 'GERMAN', 'MARTINEZ', 2147483647, '5555', 'LA PLAZUELA', '1781-03-13', 1, '0', 'M', 1, 3, 86, 7, 1, NULL, NULL, NULL),
(10, 'Martha', 'Garcia', 52342811, '3132276345', 'Suba', '1986-04-25', 1, 'O+', 'F', 1, 3, 169, 10, 1, NULL, NULL, NULL),
(12, 'Jony', 'Beltran', 1000192838, '3010987653', 'Suba', '1996-09-09', 1, 'O+', 'M', 1, 3, 169, 12, 1, NULL, NULL, NULL),
(13, 'Carlos', 'Benavides', 1090929922, '3029929200', 'Chapinero', '1987-12-09', 1, 'O+', 'M', 2, 3, 169, 13, 1, NULL, NULL, NULL),
(14, 'David', 'Campos', 1001314976, '314646444', 'car 1', '2001-08-09', 1, 'O+', 'M', 1, 3, 12, 15, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plansemana`
--

CREATE TABLE `plansemana` (
  `id_plan` int(11) NOT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `id_semana` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `plansemana`
--

INSERT INTO `plansemana` (`id_plan`, `id_paciente`, `id_semana`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 1, 2),
(6, 2, 2),
(7, 3, 2),
(8, 4, 2),
(9, 1, 3),
(10, 2, 3),
(11, 3, 3),
(12, 4, 3),
(13, 1, 4),
(14, 2, 4),
(15, 3, 4),
(16, 4, 4),
(17, 1, 5),
(18, 2, 5),
(19, 3, 5),
(20, 4, 5),
(21, 1, 6),
(22, 2, 6),
(23, 3, 6),
(24, 4, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procedimiento`
--

CREATE TABLE `procedimiento` (
  `id_procedimiento` int(11) NOT NULL,
  `id_actividad` int(11) DEFAULT NULL,
  `id_frecuencia` int(11) DEFAULT NULL,
  `id_paciente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `procedimiento`
--

INSERT INTO `procedimiento` (`id_procedimiento`, `id_actividad`, `id_frecuencia`, `id_paciente`) VALUES
(1, 1, 2, 1),
(2, 6, 5, 1),
(3, 9, 2, 1),
(4, 14, 3, 1),
(5, 2, 4, 1),
(6, 15, 5, 1),
(7, 30, 2, 1),
(8, 1, 3, 2),
(9, 2, 2, 2),
(10, 5, 4, 2),
(11, 19, 3, 2),
(12, 30, 5, 2),
(13, 27, 2, 2),
(14, 3, 3, 2),
(15, 1, 3, 3),
(16, 9, 3, 3),
(17, 4, 5, 3),
(18, 28, 8, 3),
(19, 31, 3, 3),
(20, 7, 2, 3),
(21, 11, 6, 3),
(22, 1, 2, 4),
(23, 7, 3, 4),
(24, 18, 2, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa`
--

CREATE TABLE `programa` (
  `id_programa` int(11) NOT NULL,
  `programa` varchar(30) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programa`
--

INSERT INTO `programa` (`id_programa`, `programa`, `estado`, `descripcion`) VALUES
(1, 'Cardiovascular', 'activo', 'Término amplio para problemas con el corazón y los vasos sanguíneos.'),
(2, 'Enfermedad Renal Crónica', 'activo', 'Es la pérdida lenta de la función de los riñones con el tiempo.'),
(3, 'Materno Perinatal', 'activo', 'Período de tiempo comprendido entre la concepción y el nacimiento.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programacion`
--

CREATE TABLE `programacion` (
  `id_programacion` int(11) NOT NULL,
  `id_programa` int(11) DEFAULT NULL,
  `id_procedimiento` int(11) NOT NULL,
  `fecha_cita` date NOT NULL,
  `fecha_asiste` date DEFAULT NULL,
  `fecha_gestion` date DEFAULT NULL,
  `soporte` blob DEFAULT NULL,
  `comentario` varchar(100) DEFAULT NULL,
  `id_ips` int(11) DEFAULT NULL,
  `id_anual` int(11) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programacion`
--

INSERT INTO `programacion` (`id_programacion`, `id_programa`, `id_procedimiento`, `fecha_cita`, `fecha_asiste`, `fecha_gestion`, `soporte`, `comentario`, `id_ips`, `id_anual`, `id_estado`) VALUES
(1, 1, 1, '2022-03-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(2, 1, 1, '2022-09-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(3, 1, 2, '2021-11-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(4, 1, 2, '2022-01-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(5, 1, 2, '2022-03-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(6, 1, 2, '2022-05-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(7, 1, 2, '2022-07-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(8, 1, 3, '2022-03-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(9, 1, 3, '2022-09-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(10, 1, 4, '2022-01-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(11, 1, 4, '2022-05-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(12, 1, 4, '2022-09-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(13, 1, 5, '2021-12-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(14, 1, 5, '2022-03-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(15, 1, 5, '2022-06-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(16, 1, 5, '2022-09-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(17, 1, 6, '2021-11-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(18, 1, 6, '2022-01-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(19, 1, 6, '2022-03-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(20, 1, 6, '2022-05-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(21, 1, 6, '2022-07-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(22, 1, 7, '2022-03-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(23, 1, 7, '2022-09-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(24, 2, 8, '2021-12-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(25, 2, 8, '2022-04-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(26, 2, 8, '2022-08-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(27, 2, 9, '2022-02-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(28, 2, 9, '2022-08-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(29, 2, 10, '2021-11-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(30, 2, 10, '2022-02-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(31, 2, 10, '2022-05-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(32, 2, 10, '2022-08-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(33, 2, 11, '2021-12-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(34, 2, 11, '2022-04-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(35, 2, 11, '2022-08-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(36, 2, 12, '2021-10-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(37, 2, 12, '2021-12-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(38, 2, 12, '2022-02-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(39, 2, 12, '2022-04-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(40, 2, 12, '2022-06-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(41, 2, 13, '2022-02-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(42, 2, 13, '2022-08-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(43, 2, 14, '2021-12-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(44, 2, 14, '2022-04-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(45, 2, 14, '2022-08-25', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(46, 3, 1, '2022-03-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(47, 3, 1, '2022-09-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(48, 3, 2, '2021-11-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(49, 3, 2, '2022-01-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(50, 3, 2, '2022-03-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(51, 3, 2, '2022-05-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(52, 3, 2, '2022-07-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(53, 3, 3, '2022-03-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(54, 3, 3, '2022-09-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(55, 3, 4, '2022-01-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(56, 3, 4, '2022-05-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(57, 3, 4, '2022-09-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(58, 3, 5, '2021-12-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(59, 3, 5, '2022-03-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(60, 3, 5, '2022-06-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(61, 3, 5, '2022-09-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(62, 3, 6, '2021-11-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(63, 3, 6, '2022-01-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(64, 3, 6, '2022-03-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(65, 3, 6, '2022-05-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(66, 3, 6, '2022-07-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(67, 3, 7, '2022-03-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(68, 3, 7, '2022-09-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(69, 4, 15, '2021-12-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(70, 4, 15, '2022-04-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(71, 4, 15, '2022-08-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(72, 4, 16, '2021-12-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(73, 4, 16, '2022-04-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(74, 4, 16, '2022-08-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(75, 4, 17, '2021-10-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(76, 4, 17, '2021-12-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(77, 4, 17, '2022-02-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(78, 4, 17, '2022-04-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(79, 4, 17, '2022-06-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(80, 4, 18, '2021-10-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(81, 4, 18, '2021-12-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(82, 4, 18, '2022-02-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(83, 4, 18, '2022-04-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(84, 4, 18, '2022-06-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(85, 4, 18, '2022-08-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(86, 4, 18, '2022-10-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(87, 4, 18, '2022-12-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(88, 4, 19, '2021-12-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(89, 4, 19, '2022-04-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(90, 4, 19, '2022-08-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(91, 4, 20, '2022-02-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(92, 4, 20, '2022-08-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(93, 4, 21, '2021-10-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(94, 4, 21, '2021-12-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(95, 4, 21, '2022-02-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(96, 4, 21, '2022-04-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(97, 4, 21, '2022-06-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(98, 4, 21, '2022-08-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(99, 5, 8, '2021-12-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(100, 5, 8, '2022-04-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(101, 5, 8, '2022-08-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(102, 5, 9, '2022-02-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(103, 5, 9, '2022-08-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(104, 5, 10, '2021-11-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(105, 5, 10, '2022-02-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(106, 5, 10, '2022-05-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(107, 5, 10, '2022-08-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(108, 5, 11, '2021-12-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(109, 5, 11, '2022-04-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(110, 5, 11, '2022-08-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(111, 5, 12, '2021-10-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(112, 5, 12, '2021-12-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(113, 5, 12, '2022-02-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(114, 5, 12, '2022-04-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(115, 5, 12, '2022-06-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(116, 5, 13, '2022-02-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(117, 5, 13, '2022-08-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(118, 5, 14, '2021-12-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(119, 5, 14, '2022-04-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(120, 5, 14, '2022-08-26', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(121, 6, 22, '2022-03-17', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(122, 6, 22, '2022-09-17', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(123, 6, 23, '2022-01-17', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(124, 6, 23, '2022-05-17', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(125, 6, 23, '2022-09-17', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(126, 6, 24, '2022-03-17', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(127, 6, 24, '2022-09-17', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(128, 7, 8, '2021-12-31', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(129, 7, 8, '2022-05-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(130, 7, 8, '2022-09-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(131, 7, 9, '2022-03-03', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(132, 7, 9, '2022-09-03', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(133, 7, 10, '2021-12-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(134, 7, 10, '2022-03-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(135, 7, 10, '2022-06-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(136, 7, 10, '2022-09-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(137, 7, 11, '2021-12-31', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(138, 7, 11, '2022-05-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(139, 7, 11, '2022-09-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(140, 7, 12, '2021-10-31', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(141, 7, 12, '2021-12-31', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(142, 7, 12, '2022-03-03', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(143, 7, 12, '2022-05-03', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(144, 7, 12, '2022-07-03', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(145, 7, 13, '2022-03-03', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(146, 7, 13, '2022-09-03', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(147, 7, 14, '2021-12-31', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(148, 7, 14, '2022-05-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(149, 7, 14, '2022-09-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(150, 8, 22, '2022-03-03', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(151, 8, 22, '2022-09-03', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(152, 8, 23, '2022-01-03', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(153, 8, 23, '2022-05-03', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(154, 8, 23, '2022-09-03', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(155, 8, 24, '2022-03-03', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(156, 8, 24, '2022-09-03', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(157, 9, 1, '2022-02-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(158, 9, 1, '2022-08-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(159, 9, 2, '2021-10-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(160, 9, 2, '2021-12-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(161, 9, 2, '2022-02-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(162, 9, 2, '2022-04-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(163, 9, 2, '2022-06-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(164, 9, 3, '2022-02-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(165, 9, 3, '2022-08-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(166, 9, 4, '2021-12-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(167, 9, 4, '2022-04-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(168, 9, 4, '2022-08-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(169, 9, 5, '2021-11-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(170, 9, 5, '2022-02-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(171, 9, 5, '2022-05-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(172, 9, 5, '2022-08-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(173, 9, 6, '2021-10-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(174, 9, 6, '2021-12-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(175, 9, 6, '2022-02-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(176, 9, 6, '2022-04-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(177, 9, 6, '2022-06-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(178, 9, 7, '2022-02-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(179, 9, 7, '2022-08-12', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(180, 10, 22, '2022-01-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(181, 10, 22, '2022-07-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(182, 10, 23, '2021-11-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(183, 10, 23, '2022-03-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(184, 10, 23, '2022-07-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(185, 10, 24, '2022-01-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(186, 10, 24, '2022-07-28', '0000-00-00', NULL, NULL, NULL, NULL, 1, 1),
(187, 11, 1, '2022-02-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(188, 11, 1, '2022-08-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(189, 11, 2, '2021-10-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(190, 11, 2, '2021-12-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(191, 11, 2, '2022-02-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(192, 11, 2, '2022-04-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(193, 11, 2, '2022-06-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(194, 11, 3, '2022-02-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(195, 11, 3, '2022-08-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(196, 11, 4, '2021-12-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(197, 11, 4, '2022-04-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(198, 11, 4, '2022-08-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(199, 11, 5, '2021-11-01', '2021-09-23', '2021-09-12', NULL, '0', 7, 1, 4),
(200, 11, 5, '2022-02-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(201, 11, 5, '2022-05-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(202, 11, 5, '2022-08-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(203, 11, 6, '2021-10-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(204, 11, 6, '2021-12-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(205, 11, 6, '2022-02-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(206, 11, 6, '2022-04-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(207, 11, 6, '2022-06-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(208, 11, 7, '2022-02-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(209, 11, 7, '2022-08-01', '0000-00-00', NULL, NULL, NULL, NULL, 1, 3),
(210, 12, 1, '2022-01-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(211, 12, 1, '2022-07-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(212, 12, 2, '2021-09-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(213, 12, 2, '2021-11-30', '2021-09-17', '2021-09-12', NULL, 'Confirma cita', 1, 1, 4),
(214, 12, 2, '2022-01-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(215, 12, 2, '2022-03-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(216, 12, 2, '2022-05-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(217, 12, 3, '2022-01-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(218, 12, 3, '2022-07-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(219, 12, 4, '2021-11-30', '2021-09-10', '2021-09-12', NULL, '0', 10, 1, 6),
(220, 12, 4, '2022-03-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(221, 12, 4, '2022-07-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(222, 12, 5, '2021-10-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(223, 12, 5, '2022-01-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(224, 12, 5, '2022-04-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(225, 12, 5, '2022-07-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(226, 12, 6, '2021-09-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(227, 12, 6, '2021-11-30', '2021-09-23', '2021-09-16', NULL, 'Ok', 11, 1, 4),
(228, 12, 6, '2022-01-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(229, 12, 6, '2022-03-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(230, 12, 6, '2022-05-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(231, 12, 7, '2022-01-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(232, 12, 7, '2022-07-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(233, 13, 8, '2021-11-30', '2021-09-15', '2021-09-16', NULL, 'Queda pendiente asiganarle la cita', 11, 1, 4),
(234, 13, 8, '2022-03-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(235, 13, 8, '2022-07-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(236, 13, 9, '2022-01-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(237, 13, 9, '2022-07-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(238, 13, 10, '2021-10-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(239, 13, 10, '2022-01-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(240, 13, 10, '2022-04-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(241, 13, 10, '2022-07-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(242, 13, 11, '2021-11-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(243, 13, 11, '2022-03-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(244, 13, 11, '2022-07-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(245, 13, 12, '2021-09-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(246, 13, 12, '2021-11-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(247, 13, 12, '2022-01-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(248, 13, 12, '2022-03-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(249, 13, 12, '2022-05-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(250, 13, 13, '2022-01-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(251, 13, 13, '2022-07-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(252, 13, 14, '2021-11-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(253, 13, 14, '2022-03-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(254, 13, 14, '2022-07-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(255, 14, 15, '2021-11-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(256, 14, 15, '2022-03-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(257, 14, 15, '2022-07-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(258, 14, 16, '2021-11-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(259, 14, 16, '2022-03-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(260, 14, 16, '2022-07-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(261, 14, 17, '2021-09-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(262, 14, 17, '2021-11-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(263, 14, 17, '2022-01-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(264, 14, 17, '2022-03-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(265, 14, 17, '2022-05-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(266, 14, 18, '2021-09-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(267, 14, 18, '2021-11-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(268, 14, 18, '2022-01-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(269, 14, 18, '2022-03-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(270, 14, 18, '2022-05-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(271, 14, 18, '2022-07-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(272, 14, 18, '2022-09-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(273, 14, 18, '2022-11-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(274, 14, 19, '2021-11-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(275, 14, 19, '2022-03-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(276, 14, 19, '2022-07-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(277, 14, 20, '2022-01-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(278, 14, 20, '2022-07-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(279, 14, 21, '2021-09-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(280, 14, 21, '2021-11-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(281, 14, 21, '2022-01-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(282, 14, 21, '2022-03-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(283, 14, 21, '2022-05-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(284, 14, 21, '2022-07-30', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(285, 15, 8, '2022-07-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(286, 15, 8, '2022-11-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(287, 15, 8, '2023-03-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(288, 15, 9, '2022-09-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(289, 15, 9, '2023-03-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(290, 15, 10, '2022-06-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(291, 15, 10, '2022-09-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(292, 15, 10, '2022-12-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(293, 15, 10, '2023-03-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(294, 15, 11, '2022-07-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(295, 15, 11, '2022-11-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(296, 15, 11, '2023-03-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(297, 15, 12, '2022-05-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(298, 15, 12, '2022-07-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(299, 15, 12, '2022-09-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(300, 15, 12, '2022-11-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(301, 15, 12, '2023-01-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(302, 15, 13, '2022-09-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(303, 15, 13, '2023-03-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(304, 15, 14, '2022-07-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(305, 15, 14, '2022-11-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(306, 15, 14, '2023-03-24', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(307, 16, 22, '2022-09-03', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(308, 16, 22, '2023-03-03', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(309, 16, 23, '2022-07-03', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(310, 16, 23, '2022-11-03', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(311, 16, 23, '2023-03-03', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(312, 16, 24, '2022-09-03', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3),
(313, 16, 24, '2023-03-03', NULL, '0000-00-00', NULL, NULL, NULL, 1, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programapersona`
--

CREATE TABLE `programapersona` (
  `id_detalle` int(11) NOT NULL,
  `id_persona` int(11) DEFAULT NULL,
  `id_paciente` int(11) DEFAULT NULL,
  `fecha_diagnostico` date NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `soporte` blob DEFAULT NULL,
  `id_diagnostico` int(11) DEFAULT NULL,
  `id_asignado` int(11) DEFAULT NULL,
  `id_estado` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `programapersona`
--

INSERT INTO `programapersona` (`id_detalle`, `id_persona`, `id_paciente`, `fecha_diagnostico`, `fecha_ingreso`, `soporte`, `id_diagnostico`, `id_asignado`, `id_estado`) VALUES
(1, 3, 1, '2021-09-01', '2021-09-01', NULL, 1, 1, 1),
(2, 3, 2, '2021-08-25', '2021-08-25', NULL, 2, 1, 1),
(3, 4, 1, '2021-08-01', '2021-09-01', NULL, 1, 1, 1),
(4, 4, 3, '2021-07-28', '2021-08-28', NULL, 2, 1, 1),
(5, 5, 2, '2021-08-31', '2021-08-26', NULL, 2, 2, 1),
(6, 6, 4, '2021-09-01', '2021-09-17', NULL, 3, 1, 1),
(7, 6, 2, '2021-08-30', '2021-08-31', NULL, 3, 1, 1),
(8, 7, 4, '2021-09-03', '2021-09-03', NULL, 2, 1, 1),
(9, 10, 1, '2021-09-16', '2021-08-12', NULL, 1, 1, 1),
(10, 10, 4, '2021-09-08', '2021-07-28', NULL, 1, 1, 1),
(11, 12, 1, '2021-08-01', '2021-08-01', NULL, 1, 1, 1),
(12, 13, 1, '2021-09-11', '2021-07-30', NULL, 1, 2, 1),
(13, 13, 2, '2021-09-11', '2021-07-30', NULL, 1, 2, 1),
(14, 13, 3, '2021-09-11', '2021-07-30', NULL, 1, 2, 1),
(15, 14, 2, '2022-03-24', '2022-03-24', NULL, 2, 2, 1),
(16, 14, 4, '2022-03-24', '2022-03-03', NULL, 1, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regimen`
--

CREATE TABLE `regimen` (
  `id_regimen` int(11) NOT NULL,
  `regimen` varchar(15) NOT NULL,
  `estado` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `regimen`
--

INSERT INTO `regimen` (`id_regimen`, `regimen`, `estado`) VALUES
(1, 'Subsidiado', 'activo'),
(2, 'Contributivo', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `riesgo`
--

CREATE TABLE `riesgo` (
  `id_riesgo` int(11) NOT NULL,
  `riesgo` varchar(15) NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `riesgo`
--

INSERT INTO `riesgo` (`id_riesgo`, `riesgo`, `estado`) VALUES
(1, 'Alto', 'activo'),
(2, 'Medio', 'activo'),
(3, 'Bajo', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolpersona`
--

CREATE TABLE `rolpersona` (
  `id_rol` int(11) NOT NULL,
  `rol` varchar(30) NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rolpersona`
--

INSERT INTO `rolpersona` (`id_rol`, `rol`, `estado`) VALUES
(1, 'Administrador', 'activo'),
(2, 'Gestor', 'activo'),
(3, 'Afiliado', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `semana`
--

CREATE TABLE `semana` (
  `id_semana` int(11) NOT NULL,
  `numero_semana` varchar(15) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date NOT NULL,
  `id_anual` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `semana`
--

INSERT INTO `semana` (`id_semana`, `numero_semana`, `fecha_inicio`, `fecha_final`, `id_anual`) VALUES
(1, 'Semana 1', '2021-08-30', '2021-09-06', 21),
(2, 'Semana 2', '2021-09-13', '2021-09-17', 21),
(3, 'Semana 3', '2021-09-14', '2021-09-21', 21),
(4, 'Semana 4', '2021-09-08', '2021-09-22', 21),
(5, 'Semana 5', '2021-11-01', '2021-11-30', 21),
(6, 'Semana Semana 7', '2021-09-21', '2021-09-24', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipodocumento`
--

CREATE TABLE `tipodocumento` (
  `id_tipo` int(11) NOT NULL,
  `tipo` varchar(60) NOT NULL,
  `abreviado_tipo` varchar(5) NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipodocumento`
--

INSERT INTO `tipodocumento` (`id_tipo`, `tipo`, `abreviado_tipo`, `estado`) VALUES
(1, 'Registro Civil de Nacimiento', 'RC', 'activo'),
(2, 'Tarjeta de Identidad', 'TI', 'activo'),
(3, 'Cédula de Ciudadanía', 'CC', 'activo'),
(4, 'Tarjeta de Extranjería', 'TE', 'activo'),
(5, 'Pasaporte', 'PS', 'activo'),
(6, 'Tipo de Documento Extranjero', 'CE', 'activo'),
(7, 'Sin Identificación', 'NN', 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipopaciente`
--

CREATE TABLE `tipopaciente` (
  `id_paciente` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL DEFAULT '',
  `descripcion` varchar(400) NOT NULL,
  `id_riesgo` int(11) DEFAULT NULL,
  `id_programa` int(11) DEFAULT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipopaciente`
--

INSERT INTO `tipopaciente` (`id_paciente`, `nombre`, `descripcion`, `id_riesgo`, `id_programa`, `estado`) VALUES
(1, 'Diabetes', 'La diabetes es una enfermedad en la que los niveles de glucosa (azúcar) de la sangre están muy altos.', 2, 1, 'activo'),
(2, 'Hipertensión', 'Puede llevar a muchas afecciones médicas. Estas incluyen enfermedades del corazón, accidente cerebrovascular, insuficiencia renal, problemas en los ojos y otros problemas de salud.', 2, 1, 'activo'),
(3, ' Enfermedad Renal Crónica', 'La enfermedad renal crónica significa que sus riñones están dañados y no pueden filtrar la sangre como deberían. Este daño puede ocasionar que los desechos se acumulen en su cuerpo y causen otros problemas que podrían perjudicar su salud. La diabetes y la hipertensión arterial son las causas más comunes de enfermedad renal crónica.', 1, 2, 'activo'),
(4, 'Gestante', 'Período de tiempo comprendido entre la concepción y el nacimiento. Durante este tiempo, el bebé crece y se desarrolla dentro del útero de la madre.', 2, 3, 'activo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariopersona`
--

CREATE TABLE `usuariopersona` (
  `id_usuario` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `id_rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuariopersona`
--

INSERT INTO `usuariopersona` (`id_usuario`, `email`, `clave`, `id_rol`) VALUES
(1, 'capena@coosalud.com', '1001982882140', 2),
(2, 'fdaza@coosalud.com', '1982772809751', 2),
(3, 'decamacho66@gmail.com', '', 3),
(4, 'eduardozarate29@gmail.com', '', 3),
(5, 'marthagarcia52@gmail.com', '', 3),
(6, 'leonjenny25@gmail.com', '', 3),
(7, 'GMARTONEZ@COODSA.COM', '', 3),
(8, 'GMARTONEZ@COODSA.COM', '', 3),
(9, 'marta52@gmail.com', '', 3),
(10, 'martas52@gmail.com', '', 3),
(11, 'acamacho@gmail.com', '', 3),
(12, 'afcamacho@gmail.com', '', 3),
(13, 'carlos22@gmail.com', '', 3),
(14, '', '', 3),
(15, 'correof@gmail.com', '', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividad`
--
ALTER TABLE `actividad`
  ADD PRIMARY KEY (`id_actividad`),
  ADD UNIQUE KEY `actividad` (`actividad`),
  ADD UNIQUE KEY `codigo_maestro` (`codigo_maestro`);

--
-- Indices de la tabla `anualidad`
--
ALTER TABLE `anualidad`
  ADD PRIMARY KEY (`id_anual`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`id_departamento`);

--
-- Indices de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD PRIMARY KEY (`id_diagnostico`),
  ADD KEY `fk_diagnosticoxpaciente` (`id_paciente`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `etnia`
--
ALTER TABLE `etnia`
  ADD PRIMARY KEY (`id_etnia`),
  ADD UNIQUE KEY `etnia` (`etnia`);

--
-- Indices de la tabla `frecuencia`
--
ALTER TABLE `frecuencia`
  ADD PRIMARY KEY (`id_frecuencia`);

--
-- Indices de la tabla `ips`
--
ALTER TABLE `ips`
  ADD PRIMARY KEY (`id_ips`),
  ADD KEY `fk_id_municipioxips` (`id_municipio`);

--
-- Indices de la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD PRIMARY KEY (`id_municipio`),
  ADD KEY `fk_id_departamento` (`id_departamento`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id_persona`),
  ADD UNIQUE KEY `documento` (`documento`),
  ADD KEY `fk_id_municipio` (`id_municipio`),
  ADD KEY `fk_id_etnia` (`id_pertenencia_etnica`),
  ADD KEY `fk_id_tipo` (`id_tipo_documento`),
  ADD KEY `fk_id_usuario` (`id_usuario`),
  ADD KEY `fk_id_estado` (`id_estado`),
  ADD KEY `fk_id_ipsxpersona` (`id_ips`),
  ADD KEY `fk_persona_regimen` (`id_regimen`);

--
-- Indices de la tabla `plansemana`
--
ALTER TABLE `plansemana`
  ADD PRIMARY KEY (`id_plan`),
  ADD KEY `fk_id_semana` (`id_semana`),
  ADD KEY `fk_pacientexsemana` (`id_paciente`);

--
-- Indices de la tabla `procedimiento`
--
ALTER TABLE `procedimiento`
  ADD PRIMARY KEY (`id_procedimiento`),
  ADD KEY `fk_id_actividad` (`id_actividad`),
  ADD KEY `fk_id_frecuencia` (`id_frecuencia`),
  ADD KEY `fk_id_paciente` (`id_paciente`);

--
-- Indices de la tabla `programa`
--
ALTER TABLE `programa`
  ADD PRIMARY KEY (`id_programa`);

--
-- Indices de la tabla `programacion`
--
ALTER TABLE `programacion`
  ADD PRIMARY KEY (`id_programacion`),
  ADD KEY `fk_id_programacion` (`id_programa`),
  ADD KEY `fk_id_estado_programacion` (`id_estado`),
  ADD KEY `fk_programacionxprocedimiento` (`id_procedimiento`),
  ADD KEY `fk_id_ipsxprogramacion` (`id_ips`);

--
-- Indices de la tabla `programapersona`
--
ALTER TABLE `programapersona`
  ADD PRIMARY KEY (`id_detalle`),
  ADD KEY `fk_id_diagnostico` (`id_diagnostico`),
  ADD KEY `fk_id_persona` (`id_persona`),
  ADD KEY `fk_pacientexpersona` (`id_paciente`),
  ADD KEY `fk_estadoxprograma` (`id_estado`),
  ADD KEY `fk_asignadoxafiliado` (`id_asignado`);

--
-- Indices de la tabla `regimen`
--
ALTER TABLE `regimen`
  ADD PRIMARY KEY (`id_regimen`);

--
-- Indices de la tabla `riesgo`
--
ALTER TABLE `riesgo`
  ADD PRIMARY KEY (`id_riesgo`);

--
-- Indices de la tabla `rolpersona`
--
ALTER TABLE `rolpersona`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `semana`
--
ALTER TABLE `semana`
  ADD PRIMARY KEY (`id_semana`),
  ADD KEY `fk_id_anualidad_semana` (`id_anual`);

--
-- Indices de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `tipopaciente`
--
ALTER TABLE `tipopaciente`
  ADD PRIMARY KEY (`id_paciente`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD KEY `fk_id_riesgo` (`id_riesgo`),
  ADD KEY `fk_id_programa` (`id_programa`);

--
-- Indices de la tabla `usuariopersona`
--
ALTER TABLE `usuariopersona`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividad`
--
ALTER TABLE `actividad`
  MODIFY `id_actividad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `id_departamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  MODIFY `id_diagnostico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `etnia`
--
ALTER TABLE `etnia`
  MODIFY `id_etnia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `frecuencia`
--
ALTER TABLE `frecuencia`
  MODIFY `id_frecuencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `ips`
--
ALTER TABLE `ips`
  MODIFY `id_ips` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `municipio`
--
ALTER TABLE `municipio`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1124;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id_persona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `plansemana`
--
ALTER TABLE `plansemana`
  MODIFY `id_plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `procedimiento`
--
ALTER TABLE `procedimiento`
  MODIFY `id_procedimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `programa`
--
ALTER TABLE `programa`
  MODIFY `id_programa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `programacion`
--
ALTER TABLE `programacion`
  MODIFY `id_programacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=314;

--
-- AUTO_INCREMENT de la tabla `programapersona`
--
ALTER TABLE `programapersona`
  MODIFY `id_detalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `regimen`
--
ALTER TABLE `regimen`
  MODIFY `id_regimen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `riesgo`
--
ALTER TABLE `riesgo`
  MODIFY `id_riesgo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rolpersona`
--
ALTER TABLE `rolpersona`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `semana`
--
ALTER TABLE `semana`
  MODIFY `id_semana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tipodocumento`
--
ALTER TABLE `tipodocumento`
  MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tipopaciente`
--
ALTER TABLE `tipopaciente`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuariopersona`
--
ALTER TABLE `usuariopersona`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD CONSTRAINT `fk_diagnosticoxpaciente` FOREIGN KEY (`id_paciente`) REFERENCES `tipopaciente` (`id_paciente`);

--
-- Filtros para la tabla `ips`
--
ALTER TABLE `ips`
  ADD CONSTRAINT `fk_id_municipioxips` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id_municipio`);

--
-- Filtros para la tabla `municipio`
--
ALTER TABLE `municipio`
  ADD CONSTRAINT `fk_id_departamento` FOREIGN KEY (`id_departamento`) REFERENCES `departamento` (`id_departamento`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_id_estado` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`),
  ADD CONSTRAINT `fk_id_etnia` FOREIGN KEY (`id_pertenencia_etnica`) REFERENCES `etnia` (`id_etnia`),
  ADD CONSTRAINT `fk_id_ipsxpersona` FOREIGN KEY (`id_ips`) REFERENCES `ips` (`id_ips`),
  ADD CONSTRAINT `fk_id_municipio` FOREIGN KEY (`id_municipio`) REFERENCES `municipio` (`id_municipio`),
  ADD CONSTRAINT `fk_id_tipo` FOREIGN KEY (`id_tipo_documento`) REFERENCES `tipodocumento` (`id_tipo`),
  ADD CONSTRAINT `fk_id_usuario` FOREIGN KEY (`id_usuario`) REFERENCES `usuariopersona` (`id_usuario`),
  ADD CONSTRAINT `fk_persona_regimen` FOREIGN KEY (`id_regimen`) REFERENCES `regimen` (`id_regimen`);

--
-- Filtros para la tabla `plansemana`
--
ALTER TABLE `plansemana`
  ADD CONSTRAINT `fk_id_semana` FOREIGN KEY (`id_semana`) REFERENCES `semana` (`id_semana`),
  ADD CONSTRAINT `fk_pacientexsemana` FOREIGN KEY (`id_paciente`) REFERENCES `tipopaciente` (`id_paciente`);

--
-- Filtros para la tabla `procedimiento`
--
ALTER TABLE `procedimiento`
  ADD CONSTRAINT `fk_id_actividad` FOREIGN KEY (`id_actividad`) REFERENCES `actividad` (`id_actividad`),
  ADD CONSTRAINT `fk_id_frecuencia` FOREIGN KEY (`id_frecuencia`) REFERENCES `frecuencia` (`id_frecuencia`),
  ADD CONSTRAINT `fk_id_paciente` FOREIGN KEY (`id_paciente`) REFERENCES `tipopaciente` (`id_paciente`);

--
-- Filtros para la tabla `programacion`
--
ALTER TABLE `programacion`
  ADD CONSTRAINT `fk_id_estado_programacion` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`),
  ADD CONSTRAINT `fk_id_ipsxprogramacion` FOREIGN KEY (`id_ips`) REFERENCES `ips` (`id_ips`),
  ADD CONSTRAINT `fk_id_programacion` FOREIGN KEY (`id_programa`) REFERENCES `programapersona` (`id_detalle`),
  ADD CONSTRAINT `fk_programacionxprocedimiento` FOREIGN KEY (`id_procedimiento`) REFERENCES `procedimiento` (`id_procedimiento`);

--
-- Filtros para la tabla `programapersona`
--
ALTER TABLE `programapersona`
  ADD CONSTRAINT `fk_asignadoxafiliado` FOREIGN KEY (`id_asignado`) REFERENCES `persona` (`id_persona`),
  ADD CONSTRAINT `fk_estadoxprograma` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`),
  ADD CONSTRAINT `fk_id_diagnostico` FOREIGN KEY (`id_diagnostico`) REFERENCES `diagnostico` (`id_diagnostico`),
  ADD CONSTRAINT `fk_id_persona` FOREIGN KEY (`id_persona`) REFERENCES `persona` (`id_persona`),
  ADD CONSTRAINT `fk_pacientexpersona` FOREIGN KEY (`id_paciente`) REFERENCES `tipopaciente` (`id_paciente`);

--
-- Filtros para la tabla `semana`
--
ALTER TABLE `semana`
  ADD CONSTRAINT `fk_id_anualidad_semana` FOREIGN KEY (`id_anual`) REFERENCES `anualidad` (`id_anual`);

--
-- Filtros para la tabla `tipopaciente`
--
ALTER TABLE `tipopaciente`
  ADD CONSTRAINT `fk_id_programa` FOREIGN KEY (`id_programa`) REFERENCES `programa` (`id_programa`),
  ADD CONSTRAINT `fk_id_riesgo` FOREIGN KEY (`id_riesgo`) REFERENCES `riesgo` (`id_riesgo`);

--
-- Filtros para la tabla `usuariopersona`
--
ALTER TABLE `usuariopersona`
  ADD CONSTRAINT `fk_id_rol` FOREIGN KEY (`id_rol`) REFERENCES `rolpersona` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
