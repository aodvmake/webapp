-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2020 a las 00:30:18
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
-- Estructura de tabla para la tabla `renta`
--

CREATE TABLE `renta` (
  `IDrenta` int(11) NOT NULL,
  `IDproducto` int(11) NOT NULL,
  `IDusuario` int(11) NOT NULL,
  `cantidad` int(4) NOT NULL,
  `meses` varchar(30) NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `estatu` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `renta`
--

INSERT INTO `renta` (`IDrenta`, `IDproducto`, `IDusuario`, `cantidad`, `meses`, `estatus`, `estatu`) VALUES
(11, 30, 1, 10, '6 meses', 1, 0),
(12, 33, 1, 23, '12 meses', 1, 0),
(13, 32, 1, 5, '1 meses', 1, 1),
(14, 33, 1, 10, '4 meses', 0, 0),
(15, 33, 4, 10, '12 meses', 1, 0),
(16, 31, 4, 5, '21 meses', 0, 0),
(17, 32, 4, 23, '21 meses', 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `renta`
--
ALTER TABLE `renta`
  ADD PRIMARY KEY (`IDrenta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `renta`
--
ALTER TABLE `renta`
  MODIFY `IDrenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
