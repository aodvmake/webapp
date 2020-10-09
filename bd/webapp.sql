-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-10-2020 a las 00:14:45
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datosgenerales`
--

CREATE TABLE `datosgenerales` (
  `IDusuario` int(11) NOT NULL,
  `domicilio` varchar(50) NOT NULL,
  `colonia` varchar(50) NOT NULL,
  `numero` int(4) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `name_e` varchar(50) NOT NULL,
  `name_p` varchar(50) NOT NULL,
  `telefono` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datosgenerales`
--

INSERT INTO `datosgenerales` (`IDusuario`, `domicilio`, `colonia`, `numero`, `municipio`, `estado`, `name_e`, `name_p`, `telefono`) VALUES
(1, 'dom', 'col', 92, 'mun', 'est', 'Empresa', 'Jorge', 123),
(2, 'dom', 'col', 92, 'mun', 'est', 'Empresa', 'Jorge', 123),
(3, 'Dom', 'Col', 1234, 'Muni', 'Estado', 'Empresa', 'Nombre', 862163);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `IDproducto` int(11) NOT NULL,
  `nombre_p` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `direccion_qrl` varchar(256) NOT NULL,
  `cantidad` int(5) NOT NULL,
  `documentoproducto` varchar(250) NOT NULL,
  `detalles` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`IDproducto`, `nombre_p`, `modelo`, `direccion_qrl`, `cantidad`, `documentoproducto`, `detalles`) VALUES
(16, 'Hp', 'DJHAOQ', '../Imagen/QRL/1.png', 56, '../Imagen/Productos/1Captura.PNG', 'Este es un producto'),
(17, 'Zebra', 'x432', '../Imagen/QRL/17.png', 21, '../Imagen/Productos/17Sin tÃ­tulo.png', 'Este es otro producto a sido actualizado:\nmas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puesto`
--

CREATE TABLE `puesto` (
  `IDusuario` int(11) NOT NULL,
  `IDpuesto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `puesto`
--

INSERT INTO `puesto` (`IDusuario`, `IDpuesto`) VALUES
(1, 3),
(2, 3),
(3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `IDpuesto` int(11) NOT NULL,
  `nombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`IDpuesto`, `nombre`) VALUES
(1, 'King'),
(2, 'Administrador'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `IDusuario` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(256) NOT NULL,
  `foto` varchar(256) NOT NULL,
  `estatus` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`IDusuario`, `email`, `pass`, `foto`, `estatus`) VALUES
(1, 't@gmail.com', '202cb962ac59075b964b07152d234b70', '', b'1'),
(2, 'o@gmail.com', '123', '', b'1'),
(3, 'aodv.seven@gmail.com', '202cb962ac59075b964b07152d234b70', '', b'1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datosgenerales`
--
ALTER TABLE `datosgenerales`
  ADD PRIMARY KEY (`IDusuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`IDproducto`);

--
-- Indices de la tabla `puesto`
--
ALTER TABLE `puesto`
  ADD PRIMARY KEY (`IDusuario`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`IDpuesto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`IDusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datosgenerales`
--
ALTER TABLE `datosgenerales`
  MODIFY `IDusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `IDproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `puesto`
--
ALTER TABLE `puesto`
  MODIFY `IDusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `IDpuesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IDusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
