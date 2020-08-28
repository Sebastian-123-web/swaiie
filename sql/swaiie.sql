-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-08-2020 a las 06:00:19
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `swaiie`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `antivirus`
--

CREATE TABLE `antivirus` (
  `id_antivirus` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `antivirus` varchar(250) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `antivirus`
--

INSERT INTO `antivirus` (`id_antivirus`, `antivirus`) VALUES
('GD', 'GData');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `id_area` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `area` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`id_area`, `area`) VALUES
('AD', 'Administracion'),
('ALM', 'Almacen'),
('CNA', 'Carga Nacional Aérea'),
('CNT', 'Carga Nacional Terrestre'),
('COB', 'Cobranzas'),
('CON', 'Contabilidad'),
('EX', 'Exportaciones'),
('FAC', 'Facturacion'),
('HSE', 'Salud, seguridad y Medio Ambiente'),
('IM', 'Importaciones'),
('REP', 'Recepción'),
('RH', 'Recursos Humanos'),
('SEG', 'Seguridad'),
('SIS', 'Sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cpu` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `ram` int(2) NOT NULL,
  `disk_hard` int(3) NOT NULL,
  `id_mm` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `id_tipo` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `id_os` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `id_antivirus` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `id_software` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `id_user` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `id_ubicacion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `mantenimiento` text COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_equipo`, `cpu`, `ram`, `disk_hard`, `id_mm`, `id_tipo`, `id_os`, `id_antivirus`, `id_software`, `id_user`, `id_ubicacion`, `mantenimiento`) VALUES
('665SGR64AD', 'Intel(R) Core(T) i5-2150', 4, 500, 'hpc8200', 'D', 'W7', 'GD', 'MO2013', 'rbañagasta', 'CAL', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(8) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`) VALUES
('E1', 'Abierto'),
('E2', 'Pendient'),
('E3', 'Resuelto'),
('E4', 'Cerrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca_modelo`
--

CREATE TABLE `marca_modelo` (
  `id_mm` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `marca_modelo` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marca_modelo`
--

INSERT INTO `marca_modelo` (`id_mm`, `marca_modelo`) VALUES
('hpc6300', 'HP Compaq 6300'),
('hpc8200', 'HP Compaq 8200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensaje`
--

CREATE TABLE `mensaje` (
  `id_mensaje` int(250) NOT NULL,
  `id_user` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `id_sala` int(250) NOT NULL,
  `texto` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mensaje`
--

INSERT INTO `mensaje` (`id_mensaje`, `id_user`, `id_sala`, `texto`, `fecha`) VALUES
(1, 'bflores', 1, 'Hola Equipo de Sistemas! ...', '2020-08-22 01:14:24'),
(2, 'rbañagasta', 1, 'Buenas tardes! En unos minutos ...', '2020-08-22 01:15:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `os`
--

CREATE TABLE `os` (
  `id_os` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `os` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `os`
--

INSERT INTO `os` (`id_os`, `os`) VALUES
('W10', 'Windows 10'),
('W7', 'Windows 7'),
('W8', 'Windows 8'),
('W8.1', 'Windows 8.1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pertenece`
--

CREATE TABLE `pertenece` (
  `id_user` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `id_sala` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pertenece`
--

INSERT INTO `pertenece` (`id_user`, `id_sala`) VALUES
('bflores', 1),
('rbañagasta', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prioridad`
--

CREATE TABLE `prioridad` (
  `id_prioridad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `prioridad` varchar(8) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `prioridad`
--

INSERT INTO `prioridad` (`id_prioridad`, `prioridad`) VALUES
('P1', 'Bajo'),
('P2', 'Medio'),
('P3', 'Alto'),
('P4', 'Urgente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sala`
--

CREATE TABLE `sala` (
  `id_sala` int(250) NOT NULL,
  `denominacion` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `sala`
--

INSERT INTO `sala` (`id_sala`, `denominacion`) VALUES
(1, 'SIDIGE - Permisos'),
(2, 'Soporte Técnico - Mensaje de Error');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `software`
--

CREATE TABLE `software` (
  `id_software` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `software` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `software`
--

INSERT INTO `software` (`id_software`, `software`) VALUES
('MO2013', 'Microsoft Office 2013'),
('MO2016', 'Microsoft Office 2016');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(250) NOT NULL,
  `de` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descr` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `fech_inicio` datetime NOT NULL,
  `fech_fin` datetime NOT NULL,
  `id_estado` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_prioridad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_user` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `id_equipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `de`, `tipo`, `descr`, `imagen`, `fech_inicio`, `fech_fin`, `id_estado`, `id_prioridad`, `id_user`, `id_equipo`) VALUES
(1, 'SIDIGE', 'Permisos', 'Pro favor otorgarme permisos en el tablero de RQIS para aprobar unos requerimientos, ya lo aprobó el Gerente, atento a sus comentarios gracias.', '', '2020-08-27 22:40:40', '0000-00-00 00:00:00', 'E1', 'P2', 'bflores', '665SGR64AD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(8) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `tipo`) VALUES
('D', 'DESKTOP'),
('I', 'PRINTER'),
('L', 'LAPTOP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id_ubicacion` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `ubicacion` varchar(250) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id_ubicacion`, `ubicacion`) VALUES
('CAL', 'Callao'),
('IN', 'Independencia'),
('SI', 'San Isidro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `nom_user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `ape_user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `mail_user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_area` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `lvl_permisos` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `nom_user`, `ape_user`, `mail_user`, `id_area`, `lvl_permisos`) VALUES
('bflores', 'Brisa', 'Flores', 'bflores@gmail.com', '', 0),
('eparedes', 'Edison', 'Paredes', 'eparedes@transberperu.com', '', 0),
('jguerrero', 'Javier', 'Guerrero', 'jguerrero@transberperu.com', '', 1),
('rbañagasta', 'Rodrigo', 'Bañagasta', 'rbanagasta@transberperu.com', '', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `antivirus`
--
ALTER TABLE `antivirus`
  ADD PRIMARY KEY (`id_antivirus`);

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo`),
  ADD KEY `id_mm` (`id_mm`),
  ADD KEY `id_tipo` (`id_tipo`),
  ADD KEY `id_os` (`id_os`),
  ADD KEY `id_antivirus` (`id_antivirus`),
  ADD KEY `id_software` (`id_software`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_ubicacion` (`id_ubicacion`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `marca_modelo`
--
ALTER TABLE `marca_modelo`
  ADD PRIMARY KEY (`id_mm`);

--
-- Indices de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD PRIMARY KEY (`id_mensaje`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_sala` (`id_sala`);

--
-- Indices de la tabla `os`
--
ALTER TABLE `os`
  ADD PRIMARY KEY (`id_os`);

--
-- Indices de la tabla `pertenece`
--
ALTER TABLE `pertenece`
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_sala` (`id_sala`);

--
-- Indices de la tabla `prioridad`
--
ALTER TABLE `prioridad`
  ADD PRIMARY KEY (`id_prioridad`);

--
-- Indices de la tabla `sala`
--
ALTER TABLE `sala`
  ADD PRIMARY KEY (`id_sala`);

--
-- Indices de la tabla `software`
--
ALTER TABLE `software`
  ADD PRIMARY KEY (`id_software`);

--
-- Indices de la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_equipo` (`id_equipo`),
  ADD KEY `id_estado` (`id_estado`),
  ADD KEY `id_prioridad` (`id_prioridad`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id_ubicacion`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_area` (`id_area`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mensaje`
--
ALTER TABLE `mensaje`
  MODIFY `id_mensaje` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sala`
--
ALTER TABLE `sala`
  MODIFY `id_sala` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `equipo_ibfk_1` FOREIGN KEY (`id_mm`) REFERENCES `marca_modelo` (`id_mm`) ON UPDATE CASCADE,
  ADD CONSTRAINT `equipo_ibfk_2` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id_tipo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `equipo_ibfk_3` FOREIGN KEY (`id_os`) REFERENCES `os` (`id_os`) ON UPDATE CASCADE,
  ADD CONSTRAINT `equipo_ibfk_4` FOREIGN KEY (`id_antivirus`) REFERENCES `antivirus` (`id_antivirus`) ON UPDATE CASCADE,
  ADD CONSTRAINT `equipo_ibfk_5` FOREIGN KEY (`id_software`) REFERENCES `software` (`id_software`) ON UPDATE CASCADE,
  ADD CONSTRAINT `equipo_ibfk_6` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `equipo_ibfk_7` FOREIGN KEY (`id_ubicacion`) REFERENCES `ubicacion` (`id_ubicacion`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `mensaje`
--
ALTER TABLE `mensaje`
  ADD CONSTRAINT `mensaje_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `mensaje_ibfk_2` FOREIGN KEY (`id_sala`) REFERENCES `sala` (`id_sala`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `pertenece`
--
ALTER TABLE `pertenece`
  ADD CONSTRAINT `pertenece_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `pertenece_ibfk_2` FOREIGN KEY (`id_sala`) REFERENCES `sala` (`id_sala`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`id_prioridad`) REFERENCES `prioridad` (`id_prioridad`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_4` FOREIGN KEY (`id_equipo`) REFERENCES `equipo` (`id_equipo`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
