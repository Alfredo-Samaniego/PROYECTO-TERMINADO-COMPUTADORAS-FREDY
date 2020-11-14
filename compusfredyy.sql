-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2020 a las 23:40:38
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `compusfredyy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `adm`
--

INSERT INTO `adm` (`id`, `nombre`, `apellido`, `direccion`, `telefono`) VALUES
(1, 'Alfredo', 'Samaniego', 'velardeña ', '8715655601'),
(2, 'jose', 'samaniego', 'av campos 35810', '6711027348');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE `almacen` (
  `id` int(11) NOT NULL,
  `idadm` int(11) NOT NULL,
  `idprovedor` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `precio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `preciov` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `recibio` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `almacen`
--

INSERT INTO `almacen` (`id`, `idadm`, `idprovedor`, `idproducto`, `nombre`, `cantidad`, `precio`, `preciov`, `fecha`, `recibio`) VALUES
(1, 1, 1, 2, '1-Antivirus McAfee ', '100', '100', '200', '2020-11-13', 'alfredo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre`, `apellido`, `direccion`, `telefono`) VALUES
(1, 'Alfredo', 'Samaniego', 'velardeña', '8714346798');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `cantidad` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `precio` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `subtotal` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `idproducto`, `descripcion`, `cantidad`, `precio`, `subtotal`) VALUES
(1, 2, '1-Antivirus McAfee ', '1', '200', '200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `correo` varchar(123) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `clave` varchar(200) NOT NULL
) ENGINE=MEMORY DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id`, `correo`, `usuario`, `clave`) VALUES
(1, 'alfredo@gmail.com', 'jose', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `precio` decimal(9,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `descripcion`, `precio`) VALUES
(2, '2-Antivirus McAfee ', '200'),
(3, '3-Antivirus McAfee ', '250'),
(4, '4-Antivirus McAfee Plus', '300'),
(5, '5-computadora mini ASUS', '5000'),
(6, '6-computadora HP', '8000'),
(7, '7-computadora mini HP', '6000'),
(8, '8-Xtreme PC Gamer RTX ', '15000'),
(9, '9-Xtreme PC Gamer AMD', '15500'),
(10, '10-Xtreme PC Gamer Geforce', '20000'),
(11, '11-Xtreme PC Gamer AMD', '22000'),
(12, '12-Xtreme PC Gamer Geforce', '25000'),
(13, '13-Xtreme PC Gamer Radeon', '25500'),
(14, '14-Tablet iPAD7', '10000'),
(15, '15-Tablet Samsung', '68000'),
(16, '16-Tablet Vorago', '7200'),
(17, '17-All in one Lenovo', '5000'),
(18, '18-All in one GHIA', '6800'),
(19, '19-All in one GHIA', '8500'),
(20, '20-All in one ASUS', '9200'),
(21, '21-Procesador AMD RYZEN', '35000'),
(22, '22-Procesador AMD RYZEN 9', '12000'),
(23, '23-Procesador INTEL CORE i9', '12500'),
(24, '24-Procesador INTEL CORE i9', '12000'),
(25, '25-Procesador INTEL CORE i7', '10800'),
(26, '26-Memoria RAM DDR4 64GB', '5500'),
(27, '27-Memoria RAM DDR4 32GB', '4200'),
(28, '28-Memoria RAM DDR4 32GB', '4000'),
(29, '29-Memoria RAM DDR4 16GB', '3680'),
(30, '30-Memoria RAM DDR4 16GB', '3580'),
(31, '31-Disco Duro Interno 1TB', '4500'),
(32, '32-Disco Duro Solido 512GB', '2500'),
(33, '33-Disco Duro Externo 2TB', '5800'),
(34, '34-Tarjeta Madre AORUS', '5000'),
(35, '35-Tarjeta Madre ASUS', '5800'),
(36, '36-Tarjeta Madre AORUS', '6500'),
(37, '37-Tarjeta Madre AORUS ULTRA', '6800'),
(38, '38-Tarjeta Madre BIOSTAR', '8000'),
(39, '39-Tarejta De Video EVGA 2070', '10800'),
(40, '40-Tarejta De Video EVGA 2080', '12000'),
(41, '41-Tarejta De Video  RTX 2080', '12000'),
(42, '42-Tarejta De Video GIGABYTE 2060', '11500'),
(43, '43-Tarejta De Video ASUS RX 5700', '20000'),
(44, '44-Gabinete EAGLE WARRIOR', '2500'),
(45, '45-Gabinete GAMDIAS TALOS', '2500'),
(46, '46-Gabinete ACTECK ULTRON', '2500'),
(47, '47-Gabinete HYUDAI', '2500'),
(48, '48-Gabinete THERMALTAKE', '2500'),
(49, '49-Teclado Gamer COUGAR', '1800'),
(50, '50-Teclado Mecanico Gamer', '1650'),
(51, '51-Teclado Mecanico Gamer COOLER', '1250'),
(52, '52-Mouse Gamer ', '500'),
(53, '53-RG45', '35'),
(54, '54-Cable UTP CAT6', '600'),
(55, '55-Cable Red CAT6', '650'),
(56, '56-Camara Web', '900'),
(57, '57-Camara Demo ', '1200'),
(58, '58-Camara Deportiva', '2600'),
(59, '59-Mochila GAMER', '1500'),
(60, '60-Mochila Laptop', '1800'),
(61, '61-Mochila Laptop', '2200'),
(62, '62-Mousepad GAMER', '600'),
(63, '63-KitGamer Mouse', '1200'),
(64, '64-Kit GAMER', '1600'),
(65, '65-Funda Teclado', '800'),
(66, '66-Funda iPAD', '500');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `provedores`
--

CREATE TABLE `provedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `empresa` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `provedores`
--

INSERT INTO `provedores` (`id`, `nombre`, `empresa`, `direccion`, `telefono`) VALUES
(1, 'Alfredo', 'hp mexico', 'mexico,mexico', '5544487910');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `idcliente` int(11) NOT NULL,
  `idproducto` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `producto` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `idcliente`, `idproducto`, `nombre`, `producto`, `direccion`, `telefono`) VALUES
(1, 1, 2, 'Alfredo', '1-Antivirus McAfee ', 'velardeña calle 121', '8715655601');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idadm` (`idadm`,`idprovedor`,`idproducto`),
  ADD KEY `idprovedor` (`idprovedor`),
  ADD KEY `idproducto` (`idproducto`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idproducto` (`idproducto`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `provedores`
--
ALTER TABLE `provedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idcliente` (`idcliente`,`idproducto`),
  ADD KEY `idproducto` (`idproducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `almacen`
--
ALTER TABLE `almacen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `provedores`
--
ALTER TABLE `provedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `almacen`
--
ALTER TABLE `almacen`
  ADD CONSTRAINT `almacen_ibfk_1` FOREIGN KEY (`idprovedor`) REFERENCES `provedores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `almacen_ibfk_2` FOREIGN KEY (`idadm`) REFERENCES `adm` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `almacen_ibfk_3` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`idcliente`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_2` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
