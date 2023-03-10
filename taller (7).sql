-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-02-2023 a las 06:21:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taller`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dt_administrador`
--

CREATE TABLE `dt_administrador` (
  `id_admin` int(7) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `ape_p` varchar(60) NOT NULL,
  `ape_m` varchar(60) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `email_admin` varchar(60) NOT NULL,
  `pass_admin` varchar(60) NOT NULL,
  `tel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dt_administrador`
--

INSERT INTO `dt_administrador` (`id_admin`, `nombre`, `ape_p`, `ape_m`, `direccion`, `email_admin`, `pass_admin`, `tel`) VALUES
(0, 'jessica', 'Martin', 'Martin', 'dasdasdasd', 'jessica123@gmail.com', '123', '745121231'),
(1, 'Carlos', 'Martin ', 'Chavez', 'Av. Buena Vista', 'carlosmartin03@hotmail.com', '123', '7713905509');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dt_detalle`
--

CREATE TABLE `dt_detalle` (
  `descripcion` varchar(150) NOT NULL,
  `precio` float DEFAULT NULL,
  `cantidad` int(8) DEFAULT NULL,
  `total` int(8) DEFAULT NULL,
  `id_cita` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dt_detalle`
--

INSERT INTO `dt_detalle` (`descripcion`, `precio`, `cantidad`, `total`, `id_cita`) VALUES
('dasdasdas', 55, 2, NULL, 4),
('dasdasdas', 55, 2, 110, 4),
('dasdasdas', 55, 2, 110, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dt_mecanico`
--

CREATE TABLE `dt_mecanico` (
  `id_mec` int(7) NOT NULL,
  `nombre_mec` varchar(60) NOT NULL,
  `ape_p` varchar(60) NOT NULL,
  `ape_m` varchar(60) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `email_mec` varchar(60) NOT NULL,
  `pass_mec` varchar(60) NOT NULL,
  `tel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dt_mecanico`
--

INSERT INTO `dt_mecanico` (`id_mec`, `nombre_mec`, `ape_p`, `ape_m`, `direccion`, `email_mec`, `pass_mec`, `tel`) VALUES
(0, 'Ale', 'Perez', 'Perez', 'Av. Buena Vista, Centro A, Santa Ana Batha, Chilcuautla, Hid', 'ale123@hotmail.com', '123', '7894512');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dt_servicio`
--

CREATE TABLE `dt_servicio` (
  `id_servicio` int(7) NOT NULL,
  `codigo_servicio` int(10) DEFAULT NULL,
  `servicio` varchar(60) NOT NULL,
  `id_cita` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dt_servicio`
--

INSERT INTO `dt_servicio` (`id_servicio`, `codigo_servicio`, `servicio`, `id_cita`) VALUES
(111, 1234, 'Balatas', NULL),
(222, 1235, 'reparacion de marcha', NULL),
(333, 12346, 'reparacion de alternadores', NULL),
(444, 12347, 'sistema electrico', NULL),
(555, 12348, 'electricidad automotriz', NULL),
(666, NULL, 'revison del sistema de ignicion', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ms_cita`
--

CREATE TABLE `ms_cita` (
  `id_cita` int(7) NOT NULL,
  `nombre_cliente` varchar(60) NOT NULL,
  `vehiculo` varchar(60) NOT NULL,
  `servicio` varchar(60) NOT NULL,
  `comentario` varchar(150) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `nombre_mec` varchar(60) DEFAULT NULL,
  `id_cliente` int(7) DEFAULT NULL,
  `id_servicio` int(7) DEFAULT NULL,
  `id_horario` mediumint(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ms_cita`
--

INSERT INTO `ms_cita` (`id_cita`, `nombre_cliente`, `vehiculo`, `servicio`, `comentario`, `fecha`, `hora`, `estado`, `nombre_mec`, `id_cliente`, `id_servicio`, `id_horario`) VALUES
(4, 'Carlos Cuautemoc', 'March', 'Balatas', '', '2023-02-24', '08:10:00', 'Pendiente', 'Ale', 3, 111, 27),
(5, 'Carlos Cuautemoc', 'March', 'Balatas', 'sdsd', '2023-02-24', '08:30:00', 'Pendiente', 'Ale', 3, 111, 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ms_cliente`
--

CREATE TABLE `ms_cliente` (
  `id_cliente` int(7) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `ape_p` varchar(20) DEFAULT NULL,
  `ape_m` varchar(20) DEFAULT NULL,
  `direccion` varchar(150) NOT NULL,
  `tel_cli` varchar(10) DEFAULT NULL,
  `email_cli` varchar(45) DEFAULT NULL,
  `pass_cliente` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ms_cliente`
--

INSERT INTO `ms_cliente` (`id_cliente`, `nombre`, `ape_p`, `ape_m`, `direccion`, `tel_cli`, `email_cli`, `pass_cliente`) VALUES
(3, 'Carlos Cuautemoc', 'Martin', 'Chavez', 'Av. Buena Vista, Centro A, Santa Ana Batha, Chilcuautla, Hidalgo.', '7713905509', 'hptablet098@gmail.com', '123'),
(4, 'Marcelino', 'Martin', 'Martin', 'Av. Buena Vista, Centro A, Santa Ana Batha, Chilcuautla, Hidalgo.', '7713905508', 'marchelo45@hotmail.com', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ms_horario`
--

CREATE TABLE `ms_horario` (
  `id_horario` mediumint(9) NOT NULL,
  `apertura` time NOT NULL,
  `cierre` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ms_horario`
--

INSERT INTO `ms_horario` (`id_horario`, `apertura`, `cierre`) VALUES
(25, '08:00:00', '20:00:00'),
(27, '08:10:00', '20:00:00'),
(28, '08:20:00', '20:00:00'),
(29, '08:30:00', '20:00:00'),
(30, '08:40:00', '20:00:00'),
(31, '08:50:00', '20:00:00'),
(32, '09:00:00', '20:00:00'),
(33, '09:10:00', '20:00:00'),
(34, '09:20:00', '20:00:00'),
(35, '09:30:00', '20:00:00'),
(36, '09:40:00', '20:00:00'),
(37, '09:50:00', '20:00:00'),
(38, '10:00:00', '20:00:00'),
(39, '10:10:00', '20:00:00'),
(40, '10:20:00', '20:00:00'),
(41, '10:30:00', '20:00:00'),
(42, '10:40:00', '20:00:00'),
(43, '10:50:00', '20:00:00'),
(44, '11:00:00', '20:00:00'),
(45, '11:10:00', '20:00:00'),
(46, '11:20:00', '20:00:00'),
(47, '11:30:00', '20:00:00'),
(48, '11:40:00', '20:00:00'),
(49, '11:50:00', '20:00:00'),
(50, '12:00:00', '20:00:00'),
(51, '12:10:00', '20:00:00'),
(52, '12:20:00', '20:00:00'),
(53, '12:30:00', '20:00:00'),
(54, '12:40:00', '20:00:00'),
(55, '12:50:00', '20:00:00'),
(56, '13:00:00', '20:00:00'),
(57, '13:10:00', '20:00:00'),
(58, '13:20:00', '20:00:00'),
(59, '13:30:00', '20:00:00'),
(60, '13:40:00', '20:00:00'),
(61, '13:50:00', '20:00:00'),
(62, '14:00:00', '20:00:00'),
(63, '14:10:00', '20:00:00'),
(64, '14:20:00', '20:00:00'),
(65, '14:30:00', '20:00:00'),
(66, '14:40:00', '20:00:00'),
(67, '14:50:00', '20:00:00'),
(68, '15:00:00', '20:00:00'),
(69, '15:10:00', '20:00:00'),
(70, '15:20:00', '20:00:00'),
(71, '15:30:00', '20:00:00'),
(72, '15:40:00', '20:00:00'),
(73, '15:50:00', '20:00:00'),
(74, '16:00:00', '20:00:00'),
(75, '16:10:00', '20:00:00'),
(76, '16:20:00', '20:00:00'),
(77, '16:30:00', '20:00:00'),
(78, '16:40:00', '20:00:00'),
(79, '16:50:00', '20:00:00'),
(80, '17:00:00', '20:00:00'),
(81, '17:10:00', '20:00:00'),
(82, '17:20:00', '20:00:00'),
(83, '17:30:00', '20:00:00'),
(84, '17:40:00', '20:00:00'),
(85, '17:50:00', '20:00:00'),
(86, '18:00:00', '20:00:00'),
(87, '18:10:00', '20:00:00'),
(88, '18:20:00', '20:00:00'),
(89, '18:30:00', '20:00:00'),
(90, '18:40:00', '20:00:00'),
(91, '18:50:00', '20:00:00'),
(92, '19:00:00', '20:00:00'),
(93, '19:10:00', '20:00:00'),
(94, '19:20:00', '20:00:00'),
(95, '19:30:00', '20:00:00'),
(96, '19:40:00', '20:00:00'),
(97, '19:50:00', '20:00:00'),
(98, '20:00:00', '20:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ms_vehiculo`
--

CREATE TABLE `ms_vehiculo` (
  `id_vehiculo` mediumint(9) NOT NULL,
  `placas` varchar(10) NOT NULL,
  `modelo` varchar(60) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `color` varchar(60) NOT NULL,
  `id_cliente` int(7) DEFAULT NULL,
  `id_mec` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `ms_vehiculo`
--

INSERT INTO `ms_vehiculo` (`id_vehiculo`, `placas`, `modelo`, `marca`, `color`, `id_cliente`, `id_mec`) VALUES
(99, '54678132', 'March', 'Nissan', 'Rojo', 3, NULL),
(100, '456asd1as', 'Fiesta', 'nissan', 'azul', 4, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `dt_administrador`
--
ALTER TABLE `dt_administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `dt_detalle`
--
ALTER TABLE `dt_detalle`
  ADD KEY `dt_detalls_ibfk_1` (`id_cita`);

--
-- Indices de la tabla `dt_mecanico`
--
ALTER TABLE `dt_mecanico`
  ADD PRIMARY KEY (`id_mec`);

--
-- Indices de la tabla `dt_servicio`
--
ALTER TABLE `dt_servicio`
  ADD PRIMARY KEY (`id_servicio`),
  ADD KEY `id_cita` (`id_cita`);

--
-- Indices de la tabla `ms_cita`
--
ALTER TABLE `ms_cita`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_servicio` (`id_servicio`),
  ADD KEY `id_horario` (`id_horario`);

--
-- Indices de la tabla `ms_cliente`
--
ALTER TABLE `ms_cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `ms_horario`
--
ALTER TABLE `ms_horario`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indices de la tabla `ms_vehiculo`
--
ALTER TABLE `ms_vehiculo`
  ADD PRIMARY KEY (`id_vehiculo`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_mec` (`id_mec`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ms_cita`
--
ALTER TABLE `ms_cita`
  MODIFY `id_cita` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `ms_cliente`
--
ALTER TABLE `ms_cliente`
  MODIFY `id_cliente` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ms_horario`
--
ALTER TABLE `ms_horario`
  MODIFY `id_horario` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT de la tabla `ms_vehiculo`
--
ALTER TABLE `ms_vehiculo`
  MODIFY `id_vehiculo` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `dt_detalle`
--
ALTER TABLE `dt_detalle`
  ADD CONSTRAINT `dt_detalls_ibfk_1` FOREIGN KEY (`id_cita`) REFERENCES `ms_cita` (`id_cita`);

--
-- Filtros para la tabla `dt_servicio`
--
ALTER TABLE `dt_servicio`
  ADD CONSTRAINT `dt_servicio_ibfk_1` FOREIGN KEY (`id_cita`) REFERENCES `ms_cita` (`id_cita`);

--
-- Filtros para la tabla `ms_cita`
--
ALTER TABLE `ms_cita`
  ADD CONSTRAINT `ms_cita_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `ms_cliente` (`id_cliente`),
  ADD CONSTRAINT `ms_cita_ibfk_2` FOREIGN KEY (`id_servicio`) REFERENCES `dt_servicio` (`id_servicio`),
  ADD CONSTRAINT `ms_cita_ibfk_3` FOREIGN KEY (`id_horario`) REFERENCES `ms_horario` (`id_horario`);

--
-- Filtros para la tabla `ms_cliente`
--
ALTER TABLE `ms_cliente`
  ADD CONSTRAINT `ms_cliente_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `ms_vehiculo` (`id_cliente`);

--
-- Filtros para la tabla `ms_vehiculo`
--
ALTER TABLE `ms_vehiculo`
  ADD CONSTRAINT `ms_vehiculo_ibfk_1` FOREIGN KEY (`id_mec`) REFERENCES `dt_mecanico` (`id_mec`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
