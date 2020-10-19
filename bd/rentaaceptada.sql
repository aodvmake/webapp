-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2020 a las 00:30:28
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
-- Estructura de tabla para la tabla `rentaaceptada`
--

CREATE TABLE `rentaaceptada` (
  `IDrenta_a` int(11) NOT NULL,
  `IDrenta` int(11) NOT NULL,
  `fecha_i` date NOT NULL,
  `fecha_f` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rentaaceptada`
--

INSERT INTO `rentaaceptada` (`IDrenta_a`, `IDrenta`, `fecha_i`, `fecha_f`) VALUES
(4, 11, '2020-04-17', '2020-10-17'),
(5, 13, '2020-09-17', '2020-10-17'),
(6, 12, '2020-10-19', '2021-10-19'),
(7, 15, '2020-10-19', '2021-10-19'),
(8, 17, '2020-10-19', '2022-07-19');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `rentaaceptada`
--
ALTER TABLE `rentaaceptada`
  ADD PRIMARY KEY (`IDrenta_a`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `rentaaceptada`
--
ALTER TABLE `rentaaceptada`
  MODIFY `IDrenta_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
