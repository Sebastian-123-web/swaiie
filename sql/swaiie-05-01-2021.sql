-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-01-2021 a las 18:12:00
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
  `id_antivirus` int(50) NOT NULL,
  `antivirus` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `antivirus`
--

INSERT INTO `antivirus` (`id_antivirus`, `antivirus`) VALUES
(1, 'Ninguno');

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
('NIN', 'Ninguno'),
('SIS', 'Sistemas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cpu`
--

CREATE TABLE `cpu` (
  `id_cpu` int(50) NOT NULL,
  `cpu` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cpu`
--

INSERT INTO `cpu` (`id_cpu`, `cpu`) VALUES
(1, 'Ninguno'),
(2, 'Core i3'),
(3, 'Core i5'),
(4, 'Core i7'),
(5, 'Core i9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nom_equipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `ram` int(2) NOT NULL,
  `disco` int(4) NOT NULL,
  `id_mm` int(50) NOT NULL,
  `id_os` int(50) NOT NULL,
  `id_cpu` int(50) NOT NULL,
  `id_tipo` int(50) NOT NULL,
  `id_antivirus` int(50) NOT NULL,
  `id_software` int(50) NOT NULL,
  `mantenimiento` text COLLATE utf8_spanish_ci NOT NULL,
  `id_user` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_equipo`, `nom_equipo`, `ram`, `disco`, `id_mm`, `id_os`, `id_cpu`, `id_tipo`, `id_antivirus`, `id_software`, `mantenimiento`, `id_user`) VALUES
('GEJM351F', 'TBGRGAFSI002', 6, 500, 2, 5, 4, 2, 1, 1, '', 'rbanagasta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `estado` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `estado`) VALUES
('1', 'Abierto'),
('2', 'Pendiente'),
('3', 'Resuelto'),
('4', 'Cerrado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `local`
--

CREATE TABLE `local` (
  `id_local` varchar(5) COLLATE utf8_spanish_ci NOT NULL,
  `local` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `local`
--

INSERT INTO `local` (`id_local`, `local`) VALUES
('CAL', 'Callao'),
('IN', 'Independencia'),
('LND', 'Linde'),
('NIN', 'Ninguno'),
('SI', 'San Isidro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca_modelo`
--

CREATE TABLE `marca_modelo` (
  `id_mm` int(50) NOT NULL,
  `mm` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `marca_modelo`
--

INSERT INTO `marca_modelo` (`id_mm`, `mm`) VALUES
(1, 'HP Compaq 8200'),
(2, 'HP Compaq 6200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `os`
--

CREATE TABLE `os` (
  `id_os` int(50) NOT NULL,
  `os` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `os`
--

INSERT INTO `os` (`id_os`, `os`) VALUES
(1, 'Ninguno'),
(2, 'Windows 7'),
(3, 'Windows 8'),
(4, 'Wndonws 8.1'),
(5, 'Windows 10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prioridad`
--

CREATE TABLE `prioridad` (
  `id_prioridad` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `prioridad` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `prioridad`
--

INSERT INTO `prioridad` (`id_prioridad`, `prioridad`) VALUES
('1', 'Bajo'),
('2', 'Medio'),
('3', 'Alto'),
('4', 'Urgente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `software`
--

CREATE TABLE `software` (
  `id_software` int(50) NOT NULL,
  `software` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `software`
--

INSERT INTO `software` (`id_software`, `software`) VALUES
(1, 'Ninguno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(250) NOT NULL,
  `de` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `descripcion` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen` mediumtext COLLATE utf8_spanish_ci NOT NULL,
  `fech_inicio` datetime NOT NULL,
  `fech_dia_i` int(2) NOT NULL,
  `fech_mes_i` int(2) NOT NULL,
  `fech_año_i` int(4) NOT NULL,
  `fech_fin` datetime NOT NULL,
  `id_estado` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `id_prioridad` varchar(2) COLLATE utf8_spanish_ci NOT NULL,
  `id_user` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id_tipo` int(50) NOT NULL,
  `tipo` varchar(10) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `tipo`) VALUES
(1, 'ALL-IN-ONE'),
(2, 'DESKTOP'),
(3, 'LAPTOP'),
(4, 'IMPRESORA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_user` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` int(1) NOT NULL,
  `id_area` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `id_local` varchar(5) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_user`, `password`, `nombre`, `apellido`, `mail`, `tipo_usuario`, `id_area`, `id_local`) VALUES
('nin', '', 'Ninguno', 'Ninguno', '--', 0, 'NIN', 'NIN'),
('rbanagasta', 'RB$2020-', 'Rodrigo', 'Bañagasta', 'rbanagasta@transberperu.com', 1, 'SIS', 'CAL');

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
-- Indices de la tabla `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`id_cpu`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_software` (`id_software`),
  ADD KEY `id_antivirus` (`id_antivirus`),
  ADD KEY `id_tipo` (`id_tipo`),
  ADD KEY `id_cpu` (`id_cpu`),
  ADD KEY `id_os` (`id_os`),
  ADD KEY `id_mm` (`id_mm`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `local`
--
ALTER TABLE `local`
  ADD PRIMARY KEY (`id_local`);

--
-- Indices de la tabla `marca_modelo`
--
ALTER TABLE `marca_modelo`
  ADD PRIMARY KEY (`id_mm`);

--
-- Indices de la tabla `os`
--
ALTER TABLE `os`
  ADD PRIMARY KEY (`id_os`);

--
-- Indices de la tabla `prioridad`
--
ALTER TABLE `prioridad`
  ADD PRIMARY KEY (`id_prioridad`);

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
  ADD KEY `id_estado` (`id_estado`),
  ADD KEY `id_prioridad` (`id_prioridad`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id_tipo`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_area` (`id_area`),
  ADD KEY `id_local` (`id_local`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `antivirus`
--
ALTER TABLE `antivirus`
  MODIFY `id_antivirus` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cpu`
--
ALTER TABLE `cpu`
  MODIFY `id_cpu` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `marca_modelo`
--
ALTER TABLE `marca_modelo`
  MODIFY `id_mm` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `os`
--
ALTER TABLE `os`
  MODIFY `id_os` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `software`
--
ALTER TABLE `software`
  MODIFY `id_software` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(250) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id_tipo` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `equipo_ibfk_10` FOREIGN KEY (`id_software`) REFERENCES `software` (`id_software`) ON UPDATE CASCADE,
  ADD CONSTRAINT `equipo_ibfk_11` FOREIGN KEY (`id_antivirus`) REFERENCES `antivirus` (`id_antivirus`) ON UPDATE CASCADE,
  ADD CONSTRAINT `equipo_ibfk_12` FOREIGN KEY (`id_tipo`) REFERENCES `tipo` (`id_tipo`) ON UPDATE CASCADE,
  ADD CONSTRAINT `equipo_ibfk_13` FOREIGN KEY (`id_mm`) REFERENCES `marca_modelo` (`id_mm`) ON UPDATE CASCADE,
  ADD CONSTRAINT `equipo_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `equipo_ibfk_8` FOREIGN KEY (`id_cpu`) REFERENCES `cpu` (`id_cpu`) ON UPDATE CASCADE,
  ADD CONSTRAINT `equipo_ibfk_9` FOREIGN KEY (`id_os`) REFERENCES `os` (`id_os`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id_user`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`id_estado`) REFERENCES `estado` (`id_estado`) ON UPDATE CASCADE,
  ADD CONSTRAINT `ticket_ibfk_3` FOREIGN KEY (`id_prioridad`) REFERENCES `prioridad` (`id_prioridad`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `area` (`id_area`) ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario_ibfk_2` FOREIGN KEY (`id_local`) REFERENCES `local` (`id_local`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
