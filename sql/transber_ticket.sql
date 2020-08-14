-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2020 a las 20:03:16
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `transber_ticket`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `soli-tk`
--

CREATE TABLE `soli-tk` (
  `num-tk` int(100) NOT NULL,
  `nom` text COLLATE utf8_spanish_ci NOT NULL,
  `ape` text COLLATE utf8_spanish_ci NOT NULL,
  `mail` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `area` text COLLATE utf8_spanish_ci NOT NULL,
  `de` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo` text COLLATE utf8_spanish_ci NOT NULL,
  `descp` varchar(5000) COLLATE utf8_spanish_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `date-inicio` date NOT NULL,
  `date-fin` date NOT NULL,
  `estado` text COLLATE utf8_spanish_ci NOT NULL,
  `prioridad` text COLLATE utf8_spanish_ci NOT NULL,
  `hora` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nom_equipo` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `comen` varchar(5000) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `soli-tk`
--

INSERT INTO `soli-tk` (`num-tk`, `nom`, `ape`, `mail`, `area`, `de`, `tipo`, `descp`, `img`, `date-inicio`, `date-fin`, `estado`, `prioridad`, `hora`, `nom_equipo`, `comen`) VALUES
(1, 'Rodrigo', 'BaÃ±agasta', 'rbanagasta@transberperu.com', 'Sistemas', 'SIDIGE', 'Mensaje', 'Error', 'descarga.jpg', '2019-09-26', '0000-00-00', 'Cerrado', 'Bajo', '', 'TBGRGAFSI002', ''),
(2, 'Flor', 'De la Cruz', 'fdelacruz@transberperu.com', 'Expo', 'OUTLOOK', 'Mensaje', 'Error', 'hola.jpg', '2019-09-26', '0000-00-00', 'Abierto', 'Urgente', '', 'TBGRGCIEX008', 'PROBLEMA: demora en iniciar sesiÃ³n, lentitud es los software base, los software se congelan, problemas el imprimir.SOLUCIÃ“N: Se hizo mantenimiento fÃ­sico del equipo, se formateo y reinstalo el sistema operativo, software base.ESTADO: El equipo quedo operativo, se corrigieron los problemas de ImpresiÃ³n y lentitud'),
(3, 'Angel', 'Gil', 'agil@transberperu.com', 'Contabilidad', 'IMPRESORA', 'Toner', '2do Piso - Urgente', 'CP-XEROX-3655X.jpg', '2019-09-28', '0000-00-00', 'Cerrado', 'Medio', '', 'TBGRGAFCO008', 'PROBLEMA: El equipo presenta problemas al reconocer la impresora Xerox y la impresora Matricial fx-890, no pueden estar las dos instaladas porque crea conflicto.SOLUCIÃ“N: Se formateo y reinstalo el Sistema Operativo.ESTADO: El equipo imprime en las dos impresoras sin problema.'),
(4, 'Eduardo', 'Medina', 'emedina@transberperu.com', 'Contabilidad', 'SOPORTE', 'Mensaje', 'Mi equipo va muy lento, se pausa a cada rato', 'err01.jpg', '2019-09-28', '0000-00-00', 'Resuelto', 'Bajo', '', 'TBGRGAFCO005', 'PROBLEMA: Lentitud al ejecutar los software base.SOLUCIÃ“N: mantenimiento fÃ­sico, presentaba suciedad en los componentes internos.ESTADO: Equipo Operativo'),
(5, 'Jhony', 'Sanchez', 'jsanchez@transberperu.com', 'Expo e Impo', 'TCI', 'Mensaje', 'Estimados hay que actualizar el tci le llegara un correo con los link del servidor y clientes', '', '2019-09-28', '0000-00-00', 'Resuelto', 'Medio', '', 'TBGRGCIEX006', ''),
(6, 'Cecilia', 'Falcon', 'cfalcon@transberperu.com', 'Importaciones y Exportaciones', 'SOPORTE', 'Mensaje de Error', 'Buenas tarde al prender mi equipo me sale un mensaje de error diciendo que no tengo actualizado tal ', '', '0000-00-00', '0000-00-00', 'Abierto', 'Medio', '', 'TBGRGCIIM005', ''),
(7, 'Digna', 'Estada', 'destrada@transberperu.com', 'Contabilidad', 'IMPRESORA', 'Mensaje', 'La impresora esta pausada y no deja imprimir a nadie por favor revisarlo con usrgencia', 'hqdefault.jpg', '2019-09-28', '0000-00-00', 'Pendiente', 'Bajo', '', 'TBGRGAFCO007', ''),
(8, 'Luis', 'Canales', 'lcanales@transberperu.com', 'Cobranzas', 'OUTLOOK', 'Creacion correo', 'Correo para el nuevo personal Mariano Lujan\r\nmlujan@transberperu.com', '', '2019-09-28', '0000-00-00', 'Abierto', 'Bajo', '', 'TBGRGAFCO003', ''),
(9, 'Jorge', 'MadueÃ±o', 'jmadueno@transberperu.com', 'Recursos Humanos', 'SOPORTE', 'Creacion usuario', 'Buenas tardes Estimado Sistemas\r\npor favor preparar equipo para el nuevo personal Facundo Flores', '', '2019-09-28', '0000-00-00', 'Pendiente', 'Bajo', '', 'TBGRGRH006', ''),
(10, 'Rodrigo', 'BaÃ±agasta', 'rbanagasta@transberperu.com', 'Sistemas', 'SOPORTE', 'Mensaje', 'Por favor Estimados programar revision para mi equipo ya que esta presentando lentitud cada vez que ', 'Error-imagen-equipo-lenta.png', '2019-10-08', '0000-00-00', 'Abierto', 'Bajo', '22:30:18', 'TBGRGAFSI002', ''),
(11, 'Rodrigo', 'BaÃ±agasta', 'rbanagasta@transberperu.com', 'Sistemas', 'IMPRESORA', 'Toner', 'Por favor Estimados programar revision para mi equipo ya que esta presentando lentitud cada vez que ', 'Error-imagen-equipo-lenta.png', '2019-10-08', '0000-00-00', 'Abierto', 'Medio', '23:03:39', 'TBGRGAFSI002', 'El error fue solucionado, se actualizo el driver de audio'),
(12, 'Rodrigo', 'BaÃ±agasta', 'rbanagasta@transberperu.com', 'Sistemas', 'SIDIGE', 'Mensaje', 'h', '', '2019-10-08', '0000-00-00', 'Pendiente', 'Alto', '23:04:01', 'TBGRGAFSI002', ''),
(13, 'Rodrigo', 'BaÃ±agasta', 'rbanagasta@transberperu.com', 'Sistemas', 'SIDIGE', 'Mensaje', 'h', '', '2019-10-08', '0000-00-00', 'Abierto', 'Bajo', '23:14:39', 'TBGRGAFSI002', ''),
(14, 'Cecilia', 'Falcon', 'cfalcon@transberperu.com', 'Expo e Impo', 'TCI', '', 'Buenas tardes estimado sistemas\r\npor favor actualizar los CargoNet lo necesitamos con suma urgencia ', '', '2019-10-10', '0000-00-00', 'Pendiente', 'Bajo', '14:31:26', 'TBGRGCIIM005', ''),
(15, 'Digna', 'Estrada', 'destrada@transberperu.com', 'Contabilidad', 'SIDIGE', 'Mensaje', 'Tengo problemas con la base de datos me sale un mensaje de error por favor solucionarlo', '', '2019-10-10', '0000-00-00', 'Hola', 'Bajo', '14:36:52', 'TBGRGAFCO007', ''),
(16, 'Digna', 'Estrada', 'destrada@transberperu.com', 'Contabilidad', 'SIDIGE', 'Permisos', 'Estimados por favor habilitar el permiso para generar RQ lo antes porsible, gracias', 'sidige.PNG', '2019-10-21', '0000-00-00', 'Abierto', 'Medio', '14:52:47', 'TBGRGAFCO007', ''),
(17, 'Cecilia', 'Falcon', 'cfalcon@transberperu.com', 'Expo e Impo', 'TCI', 'Mensaje', 'Estimados, hay que actualizar el CargoNet, les llegara un correo de ellos con los actualizadores', '', '2019-10-21', '0000-00-00', 'Resuelto', 'Bajo', '16:00:17', 'TBGRGCIIM005', ''),
(18, 'Ober', 'Requejo', 'orequejo@transberperu.com', 'Multimodal', 'OUTLOOK', 'Vacaciones', 'Estimados, por favor poner auto-respuesta en mi correo, estarÃ© saliendo de vacaciones del 25/10 has', '', '2019-10-21', '0000-00-00', 'Pendiente', 'Bajo', '16:06:01', 'srv-terminal', ''),
(19, 'Karen', 'Bujaico', 'kbujaico@transberperu.com', 'Recursos Humanos', 'SOPORTE', 'Mensaje', 'Buenas tardes Estimado Sistemas\r\npor favor coordinar un dÃ­a para que revisen mi equipo ya que esta ', '', '2019-11-02', '0000-00-00', 'Cerrado', 'Medio', '12:51:03', '', ''),
(20, 'Karen', 'Bujaico', 'kbujaico@transberperu.com', 'Recursos Humanos', 'SOPORTE', 'Mensaje', 'Buenas tardes Estimado Sistemas\r\npor favor coordinar un dÃ­a para que revisen mi equipo ya que esta ', '', '2019-11-02', '0000-00-00', 'Abierto', 'Medio', '12:51:29', '', ''),
(21, 'Eduardo', 'Medina', 'emedina@transberperu.com', 'Contabilidad', 'TCI', 'Permisos', 'Estimados, por favor revisar mi equipo que no me llegan mis correos', '', '2019-11-04', '0000-00-00', 'Resuelto', 'Alto', '16:33:56', '', ''),
(22, 'Rosa', 'Campos', 'rcampos@transberperu.com', 'HSE', 'SOPORTE', 'Mensaje', 'Buenas tardes\r\nrevisar mi equipo presenta lentitud al guardar mis archivos, tambien para informar qu', '', '2019-11-05', '0000-00-00', 'Cerrado', 'Urgente', '16:33:52', '', ''),
(23, 'Rosa', 'Campos', 'rcampos@transberperu.com', 'HSE', 'IMPRESORA', 'Mensaje', 'La impresora esta presentando atasco de papel, por favor revisarlo para seguir imprimiendo con norma', '', '2019-11-05', '0000-00-00', 'Cerrado', 'Bajo', '16:42:18', '', ''),
(24, 'Rosa', 'Campos', 'rcampos@transberperu.com', 'HSE', 'SIDIGE', 'Permisos', 'Buenas tardes\r\npor favor otorgarme permisos en sidige para aprovar RQIS', '', '2019-11-05', '0000-00-00', 'Abierto', 'Urgente', '16:43:09', '', ''),
(25, 'Javier', 'Guerrero', 'jguerrero@transberperu.com', 'Sistemas', 'IMPRESORA', 'Toner', 'Toner vacio', '', '2019-11-07', '0000-00-00', 'Abierto', 'Medio', '11:17:22', '', ''),
(26, 'Javier', 'Guerrero', 'jguerrero@transberperu.com', 'Sistemas', 'OUTLOOK', 'Mensaje', 'Test', '', '2019-11-07', '0000-00-00', 'Resuelto', 'Urgente', '11:18:29', '', ''),
(27, 'Edison', 'Paredes', 'eparedes@transberperu.com', 'Almacen', 'IMPRESORA', 'Mensaje', 'Falta toner', '', '2019-11-15', '0000-00-00', 'Resuelto', 'Bajo', '10:59:16', '', ''),
(28, 'Fiorela', 'Garcia', 'fgarcia@transberperu.com', 'Expo e Impo', 'TCI', 'Mensaje', 'Actualizacion', '', '2019-11-15', '0000-00-00', 'Abierto', 'Urgente', '11:41:04', '', ''),
(29, 'Rodrigo', 'BaÃ±agasta', 'rbanagasta@transberperu.com', 'Sistemas', 'OUTLOOK', 'Mensaje', 'Actualizacion', 'outlook.jpg', '2019-11-22', '0000-00-00', 'Resuelto', 'Bajo', '14:29:25', 'TBGRGAFSI002', 'El problema se soluciono, pero estarÃ¡ en observaciÃ³n por algun error que pase en la semana'),
(30, 'Eduardo', 'Medina', 'emedina@transberperu.com', 'Contabilidad', 'SOPORTE', 'Mensaje', 'Tengo problemas con mi pc, el iniciar mi pc se demora en cargar y luego me aparece pantalla zaul con', 'askdjksfheiofudkh21657.jpg', '2019-11-23', '0000-00-00', 'Cerrado', 'Alto', '12:21:01', 'TBGRGAFSI002', 'El disco duro esta daÃ±ado, se reemplazo por otro disco de mas capacidad y se agrego mas memoria RAM(+2GB).'),
(31, 'Angel', 'Gil', 'agil@transberperu.com', 'Cobranzas', 'SOPORTE', 'Mensaje', 'Estimado Sistemas, mi equipo no prende, revise el cable poder pero aun asÃ­ no prende por favor necesito con urgencia que lo revisen.\r\ngracias', 'images.jpg', '2019-11-23', '0000-00-00', 'Abierto', 'Medio', '12:27:42', 'TBGRGAFSI002', 'Problema con el disco duro, el disco presenta sectores daÃ±ados que no dejan cargar el sistema operativo.'),
(32, 'Ivette', 'Rodriguez', 'irodriguez@transberperu.com', 'Carga Nacional Terrestre', 'SOPORTE', 'Mensaje', 'Mi equipo presenta lentitud al prenderlo, tambien se congela cuando abro Outlook u otro programa', '', '2019-12-02', '0000-00-00', 'Resuelto', 'Medio', '10:24:05', 'TBGRCNAPRV004', 'el equipo presentaba suciedad interna, se procediÃ³ a darle mantenimiento interno, presentaba archivos basura, se procediÃ³ a mantenimiento lÃ³gico del equipo.\nel equipo quedo operativo.'),
(33, 'Marianguelly', 'Gonzalez', 'mgonzalez@transberperu.com', 'OGM', 'OUTLOOK', 'Mensaje', 'Estimado Sistemas, por favor revisar mi equipo que no me cargan mis correos, pero si me cargan las paginas web', '', '2019-12-02', '0000-00-00', 'Resuelto', 'Medio', '13:29:38', 'TBGRGAFSI002', 'Se volviÃ³ a configurar el correo corporativo'),
(34, 'Pieron', 'Bellido', 'pbellido@transberperu.com', 'Peruvian', 'SOPORTE', '', 'La computadora no se conecta a la red', '', '2019-12-09', '0000-00-00', 'Abierto', 'Medio', '10:58:32', 'TBGRCNAPRV007', 'Problema: El adaptador de red integrado no esta funcionando.\nSoluciÃ³n: Instalar una tarjeta de interfaz de red.'),
(35, 'Fiorela', 'Garcia', 'fgarcia@transberperu.com', 'Expo e Impo', 'TCI', 'ActualizaciÃ³n', 'Estimado sistemas TCI enviara un correo para que descarguen la nueva actualizaciÃ³n', '', '2020-01-09', '0000-00-00', 'Abierto', 'Urgente', '11:31:54', 'TBGRCNA007', ''),
(36, 'Diana', 'Delgado', 'ddelgado@transberperu.com', 'Contabilidad', 'SIDIGE', 'Permisos', 'Habilitar RQIS', '', '2020-01-13', '0000-00-00', 'Cerrado', 'Medio', '15:41:03', '', ''),
(37, 'Carlos', 'Salinas', 'csalinas@transberperu.com', 'Carga Nacional Terrestre', 'Soporte', 'Otro', 'Buenas dÃ­as Sistemas, tengo problemas para instalar la impresora HP ubicada en Carga Nacional Terrestre', '', '2020-01-22', '0000-00-00', 'Abierto', 'Medio', '10:41:30', '', 'Problema: El Sistema Operativo presenta lentitud al abrir los software base y problemas de conectabilidad con las impresoras en red.\nSoluciÃ³n: Se Formateo y se cambio de Sistema Operativo de Windows 7 x64 por Windows 10 x64'),
(38, 'Andres', 'Guardamino', 'aguardamino', 'Carga Nacional Aerea', 'Soporte', 'Otro', 'La Laptop de apaga sola y esta demasiado caliente', '', '2020-01-28', '0000-00-00', 'Abierto', 'Urgente', '17:45:36', 'TBGRCNA007', 'PROBLEMA: Sobrecalentamiento de laptop, esto causa que se apague repentinamente.\nSOLUCIÃ“N: Limpieza interna, se recomienda usar un cooler externo para evitar que se vuelva apagar'),
(39, 'Rosa', 'Campos', 'rcampos@transberperu.com', 'HSE', 'Soporte', 'Otro', 'Lentitud al ejecutar programas como Outlook, SIDIGE, Excel, Word. Tampoco la imprime.', '', '2020-01-29', '0000-00-00', 'Cerrado', 'Bajo', '10:08:59', 'TBGRGCEHSE001', 'Problema con la Laptop se descarga, se sobre calienta muy rÃ¡pido y los programas demoran mucho.'),
(40, 'Erick', 'Arevalo', 'earevalo@transberperu.com', 'HSE', 'SOPORTE', 'Mensaje', 'Error', '', '2020-03-03', '0000-00-00', 'Resuelto', 'Medio', '17:51:39', 'TBGRGCEHSE004', 'PROBLEMA: El adaptador de red no esta funcionando, se conecta a la red pero le asigna otra direcciÃ³n IPv4.SOLUCIÃ“N: Se desinstalo el controlador del adaptador de red y se instalo uno mas actualizado.ESTADO: El equipo quedo operativo.'),
(41, 'Emily', 'Villegas', 'evillegas@transberperu.com', 'HSE', 'SOPORTE', 'Mensaje', 'Error', '', '2020-03-03', '0000-00-00', 'Resuelto', 'Medio', '17:59:29', 'TBGRGCEHSE005', 'PROBLEMA: Lentitud al cargar el usuario, los software base y en el sistema operativo. SOLUCIÃ“N: Se formateo y reinstalo el sistema operativo y los software base. ESTADO: El equipo quedo operativo.'),
(42, 'Rolando', 'Zarate', 'rzarate@transberperu.com', 'Carga Nacional Terrestre', 'SOPORTE', 'Mensaje', 'Error', '', '2020-03-03', '0000-00-00', 'Resuelto', 'Medio', '18:10:05', 'TBINCNT003', 'PROBLEMA: Lentitud al abrir cualquier software de Microsoft. SOLUCION: Se reinstalo el Microsoft Office 2013.ESTADO: El equipo quedo operativo.'),
(43, 'David', 'Sandoval', 'dsandoval@transberperu.com', 'Almacen', 'SOPORTE', 'Mensaje', 'Error', '', '2020-03-03', '0000-00-00', 'Cerrado', 'Urgente', '18:16:34', 'TBINCNT001', 'PROBLEMA: Se encripto la informacion de todo el equipo, ejemplo: documentos de word, excel, power point, pdf e imagenes. SOLUCIÃ“N: Se formateo y reinstalo el sistema operativo, la informacion encriptada no se recupero. ESTADO: El equipo quedo operativo.'),
(44, 'Pedro', 'Brito', 'pbrito@transberperu.com', 'Maquinarias', 'SOPORTE', 'Mensaje', 'Laptop Inoperativa', '', '2020-03-03', '0000-00-00', 'Resuelto', 'Medio', '18:29:25', 'TBINMAQ002', 'PROBLEMA: el sistema operativo no arranca.SOLUCIÃ“N: Formatear y reinstalar el sistema operativo e instalar los software base. ESTADO: El equipo quedo operativo'),
(45, 'Fernando', 'MuÃ±oz', 'fmunoz@transberperu.com', 'Contabilidad', 'Sidige', 'Mensaje de Error', 'Al ingresar al modulo 1.10 cualquier boton no me deja ingresar', '', '2020-03-09', '0000-00-00', 'Resuelto', 'Alto', '16:03:47', 'TBGRGAFCO002', 'PROBLEMA: No puede ingresar a ciertos mÃ³dulos del sidige, capacidad del disco 90% de informaciÃ³n. SOLUCIÃ“N: Se puso un disco de mayor capacidad, se instalo el sistema operativo y se instalo los software base. ESTADO: La PC quedo Operativa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
