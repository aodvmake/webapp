-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-10-2020 a las 00:29:24
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

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`IDproducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `IDproducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
