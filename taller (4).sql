-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-11-2022 a las 14:20:56
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
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
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
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `nombre`, `ape_p`, `ape_m`, `direccion`, `email_admin`, `pass_admin`, `tel`) VALUES
(1, 'Alejandro', 'Ramirez', 'Contreras', 'Tlacotlapilco', 'ale123@hotmail.com', '123', '7712848547');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID_CLIENTE` int(7) NOT NULL,
  `NOMBRE` varchar(20) DEFAULT NULL,
  `APE_P` varchar(20) DEFAULT NULL,
  `APE_M` varchar(20) DEFAULT NULL,
  `DIRECCION` varchar(150) NOT NULL,
  `TEL_CLI` varchar(10) DEFAULT NULL,
  `EMAIL_CLI` varchar(45) DEFAULT NULL,
  `PASS_CLIENTE` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`ID_CLIENTE`, `NOMBRE`, `APE_P`, `APE_M`, `DIRECCION`, `TEL_CLI`, `EMAIL_CLI`, `PASS_CLIENTE`) VALUES
(2, 'Carlos Cuautemoc', 'Martin', 'Chavez', 'Av. Buena Vista, Centro A, Santa Ana Batha, Chilcuautla, Hidalgo.', '7713905509', 'hptablet098@gmail.com', '123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mecanico`
--

CREATE TABLE `mecanico` (
  `id_mec` int(7) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `ape_p` varchar(60) NOT NULL,
  `ape_m` varchar(60) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `email_mec` varchar(60) NOT NULL,
  `pass_mec` varchar(60) NOT NULL,
  `tel` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `placas` varchar(10) NOT NULL,
  `modelo` varchar(60) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `color` varchar(60) NOT NULL,
  `fecha_ent` datetime NOT NULL,
  `hora_ent` datetime NOT NULL,
  `mec` varchar(10) NOT NULL,
  `ID_CLIENTE` varchar(5) DEFAULT NULL,
  `id_mec` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`placas`, `modelo`, `marca`, `color`, `fecha_ent`, `hora_ent`, `mec`, `ID_CLIENTE`, `id_mec`) VALUES
('123456', 'coche', 'amarillo', 'rojo', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '2', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID_CLIENTE`);

--
-- Indices de la tabla `mecanico`
--
ALTER TABLE `mecanico`
  ADD PRIMARY KEY (`id_mec`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`placas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID_CLIENTE` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `mecanico`
--
ALTER TABLE `mecanico`
  MODIFY `id_mec` int(7) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
