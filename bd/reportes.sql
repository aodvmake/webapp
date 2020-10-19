-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2020 a las 00:30:37
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
-- Estructura de tabla para la tabla `reportes`
--

CREATE TABLE `reportes` (
  `IDreporte` int(11) NOT NULL,
  `IDrenta` int(11) NOT NULL,
  `seriales` text NOT NULL,
  `img` varchar(256) NOT NULL,
  `texto` text NOT NULL,
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `reportes`
--

INSERT INTO `reportes` (`IDreporte`, `IDrenta`, `seriales`, `img`, `texto`, `estatus`) VALUES
(1, 11, '2321-2312-1236-67212', '../Imagen/Reporte/1hp.JPG', 'Este es un ejemplo de un reporte \r\nNo funciona la impresora las hojas no las toma \r\nEl no detecta el tóner ', 0),
(2, 13, '2123-123123-32123-213123', '../Imagen/Reporte/2Xerox3025.JPG', 'Otro ejemplo de un reporte\r\nLas bisagras no toman las hojas', 1),
(3, 15, '123-12312-1231-3123', '../Imagen/Reporte/3hp.JPG', 'Ejemplo de un reporte\r\nEste cuenta con varios errores', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`IDreporte`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `IDreporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
