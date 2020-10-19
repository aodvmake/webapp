-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2020 a las 05:21:57
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
(1, 'Jorge', 'col', 92, 'mun', 'est', 'EMSAIT', 'Jorge', 123),
(3, 'Nombre', 'Col', 1234, 'Muni', 'Estado', 'Empresa de la empresa', 'Nombre de la persona', 862163),
(4, 'Calle empresas', 'Zona empresarial', 213, 'Saltillo', 'Coahuila', 'Prueba', 'Juan Perez Maldoman', 2147483647),
(5, 'Prueba', 'Prueba', 213, 'Saltillo', 'Coahuila', 'CESEHSA Saltillo', 'Emilio', 2147483647);

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
(29, 'Samsung', 'MFP MultiXpress SL-M5360RX', '../Imagen/QRL/1.png', 300, '../Imagen/Productos/1SamsungM5360.JPG', 'Trabaje de forma más inteligente con un Centro Smart UX intuitivo\r\nEl Centro Smart UX agiliza sus flujos de trabajo\r\nPanel táctil fácil de usar con una capacidad de respuesta excepcional\r\nImprima más en menos tiempo con precisión y velocidad\r\nImprima documentos de alto gramaje rápidamente con una CPU de cuatro\r\nnúcleos (1.5 GHz)\r\nMejore su texto y sus imágenes con la tecnología ReCP\r\nMejore la productividad con opciones variables'),
(30, 'HP', 'LaserJet Enterprise 700 M775', '../Imagen/QRL/30.png', 280, '../Imagen/Productos/30hp700.jpg', 'Incremente las capacidades de impresión en color con tamaños de soporte de hasta A3\r\npara obtener impresionantes materiales de marketing y mucho más.\r\nImprima con negrita y color suave y obtenga el resultado en color que usted tenía\r\nprevisto con coincidencia Pantone®.\r\nVaya desde el principio hasta el final, con este equipo multifunción: impresión, copia,\r\nescaneado y fax1 desde la pantalla táctil grande.\r\nImprima desde su smartphone o tablet, desde casi cualquier lugar, con'),
(31, 'Samsung', ' ProXpress SL-M4020ND', '../Imagen/QRL/31.png', 320, '../Imagen/Productos/31SamsungM4020D.JPG', 'Crea documentos profesionales rápidamente\r\nReduce los costes operativos con sus económicas funciones y soluciones\r\nDiseñada para un uso intuitivo\r\nMejora la productividad gracias a la versatilidad de sus funciones'),
(32, 'Xerox', 'WorkCentre 3025', '../Imagen/QRL/32.png', 282, '../Imagen/Productos/32Xerox3025.JPG', 'Rendimiento confiable. La Phaser 3020\r\ny la WorkCentre 3025 manejan grandes\r\ncargas de trabajo con facilidad.\r\nMenos tiempo de espera. La velocidad\r\nde impresión de 21 páginas por minuto le\r\npermite pasar más tiempo con sus clientes y\r\nmenos tiempo esperando.\r\nAlto impacto. Precio accesible. Cuando elige\r\nuna impresora o impresora multifunción con\r\nUSB, Ethernet (WorkCentre 3025NI) y Wi-Fi\r\nincorporada, obtiene resultados increíbles y\r\nun gran conjunto de funciones estándar.'),
(33, 'HP', 'Neverstop Laser 1000a', '../Imagen/QRL/33.png', 367, '../Imagen/Productos/33hp.JPG', 'Hasta 10 veces más la cantidad de páginas que las impresoras láser HP de su categoría5\r\n\r\nSe diseñó para imprimir en gran volumen. Obtenga tóner para imprimir 5,000 páginas de inmediato.1\r\nObtenga velocidades de impresión de hasta 20 ppm A4 / 21 ppm carta.\r\n3\r\nImprima fácilmente y con rapidez directamente desde el panel de control.\r\nCambie el papel con menos frecuencia con una bandeja de papel con capacidad para 150 hojas.');

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
(3, 1),
(4, 3),
(5, 1);

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
(1, 'prueba1@gmail.com', '202cb962ac59075b964b07152d234b70', 'vacio', b'1'),
(3, 'alan@gmail.com', '202cb962ac59075b964b07152d234b70', 'vacio', b'1'),
(4, 'prueba2@gmail.com', '202cb962ac59075b964b07152d234b70', 'vacio', b'1'),
(5, 'emilio@gmail.com', '202cb962ac59075b964b07152d234b70', 'vacio', b'1');

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
-- Indices de la tabla `renta`
--
ALTER TABLE `renta`
  ADD PRIMARY KEY (`IDrenta`);

--
-- Indices de la tabla `rentaaceptada`
--
ALTER TABLE `rentaaceptada`
  ADD PRIMARY KEY (`IDrenta_a`);

--
-- Indices de la tabla `reportes`
--
ALTER TABLE `reportes`
  ADD PRIMARY KEY (`IDreporte`);

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
  MODIFY `IDusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `IDproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `puesto`
--
ALTER TABLE `puesto`
  MODIFY `IDusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `IDpuesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `renta`
--
ALTER TABLE `renta`
  MODIFY `IDrenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `rentaaceptada`
--
ALTER TABLE `rentaaceptada`
  MODIFY `IDrenta_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `reportes`
--
ALTER TABLE `reportes`
  MODIFY `IDreporte` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `IDusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
