-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-02-2018 a las 16:09:39
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_speed`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buzon`
--

CREATE TABLE `buzon` (
  `idbuzon` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `plan` varchar(45) DEFAULT NULL,
  `comentario` varchar(200) DEFAULT NULL,
  `idnotification` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `buzon`
--

INSERT INTO `buzon` (`idbuzon`, `nombre`, `apellido`, `telefono`, `direccion`, `plan`, `comentario`, `idnotification`) VALUES
(1, 'usuario web ', 'apellido', '99889989', 'nose 223 ', '30', '34534', 5),
(6, 'Aldair', 'Meza Perales', '989898989', 'Dirección sin numero ñaña', '5', 'Deseo la instalacion del internet  deseo la mas rapida asitenacia tecnioa', 8),
(7, 'Pable', 'Neruda Palacios', '9978798979', '7856t8g76f76f76f', '2', 'fgfnjgsgbh gjn uggu u g7 g7 8mh 8 9jff', 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificaciones`
--

CREATE TABLE `notificaciones` (
  `idnotificaciones` int(11) NOT NULL,
  `persona_idpersona` int(11) DEFAULT NULL,
  `reclamo` varchar(200) DEFAULT NULL,
  `comentario` varchar(45) DEFAULT NULL,
  `view` char(2) NOT NULL DEFAULT 'no',
  `typenoti` varchar(50) NOT NULL,
  `resp_admin` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notificaciones`
--

INSERT INTO `notificaciones` (`idnotificaciones`, `persona_idpersona`, `reclamo`, `comentario`, `view`, `typenoti`, `resp_admin`) VALUES
(2, 4, 'E l internet esta un poco lento ', NULL, 'no', '2', ''),
(4, 2, 'cambiar clave ', NULL, 'si', '1', ''),
(5, NULL, 'consulta de internet ', NULL, 'si', '3', ''),
(8, NULL, 'Deseo la instalacion del internet  deseo la mas rapida asitenacia tecnioa', NULL, 'si', '3', NULL),
(9, NULL, 'fgfnjgsgbh gjn uggu u g7 g7 8mh 8 9jff', NULL, 'no', '3', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagos`
--

CREATE TABLE `pagos` (
  `idpagos` int(11) NOT NULL,
  `mes` varchar(45) DEFAULT NULL,
  `monto` varchar(45) DEFAULT NULL,
  `comentario` varchar(45) DEFAULT NULL,
  `persona_idpersona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pagos`
--

INSERT INTO `pagos` (`idpagos`, `mes`, `monto`, `comentario`, `persona_idpersona`) VALUES
(1, '3', '3', 'pago del mes de Marzo adelantado', 4),
(2, '4', '2', 'pago del mes de Abril', 3),
(3, '5', '3', 'pago del mes de Mayo', 4),
(4, '1', '2', 'el pago fue realizado', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paquetes`
--

CREATE TABLE `paquetes` (
  `idpaquetes` int(11) NOT NULL,
  `img` varchar(45) DEFAULT NULL,
  `descripcion` varchar(300) DEFAULT NULL,
  `precio` varchar(45) DEFAULT NULL,
  `megas` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `paquetes`
--

INSERT INTO `paquetes` (`idpaquetes`, `img`, `descripcion`, `precio`, `megas`) VALUES
(1, 'img/M5.jpg', 'Al Contratar este Plan usted tendra 1Mbs de Velocidad adicionalmente 1 Antena y un Router Wi-Fi en modo Prestamo. Recuerde al termino de su contrato los equipos Brindados seran debueltos si usted desea este Plan porfavor llene el formulario de abajo o llamenos a los telefonos de la descripcion', '35', '1'),
(2, 'img/M5.jpg', 'Al Contratar este Plan usted tendra 2Mbs de Velocidad adicionalmente 1 Antena y un Router Wi-Fi en modo Prestamo. Recuerde al termino de su contrato los equipos Brindados seran debueltos si usted desea este Plan porfavor llene el formulario de abajo o llamenos a los telefonos de la descripcion', '40', '2'),
(3, 'img/M5.jpg', 'Al Contratar este Plan usted tendra 3Mbs de Velocidad adicionalmente 1 Antena y un Router Wi-Fi en modo Prestamo. Recuerde al termino de su contrato los equipos Brindados seran debueltos si usted desea este Plan porfavor llene el formulario de abajo o llamenos a los telefonos de la descripcion', '50', '3'),
(4, 'img/M5.jpg', 'Al Contratar este Plan usted tendra 4Mbs de Velocidad adicionalmente 1 Antena y un Router Wi-Fi en modo Prestamo. Recuerde al termino de su contrato los equipos Brindados seran debueltos si usted desea este Plan porfavor llene el formulario de abajo o llamenos a los telefonos de la descripcion', '60', '4'),
(5, 'img/M5.jpg', 'Al Contratar este Plan usted tendra 5Mbs de Velocidad adicionalmente 1 Antena y un Router Wi-Fi en modo Prestamo. Recuerde al termino de su contrato los equipos Brindados seran debueltos si usted desea este Plan porfavor llene el formulario de abajo o llamenos a los telefonos de la descripcion', '70', '5'),
(8, 'img/M5.jpg', 'Al Contratar este Plan usted tendra 5Mbs de Velocidad adicionalmente 1 Antena y un Router Wi-Fi en modo Prestamo. Recuerde al termino de su contrato los equipos Brindados seran debueltos si usted desea este Plan porfavor llene el formulario de abajo o llamenos a los telefonos de la descripcion', '80', '5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `idpersona` int(11) NOT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `finicio` date DEFAULT NULL,
  `router` varchar(45) DEFAULT NULL,
  `antena` varchar(45) DEFAULT NULL,
  `tantena` varchar(45) DEFAULT NULL,
  `plan` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `usuario_idusuario` int(11) NOT NULL,
  `typeuser` varchar(45) DEFAULT NULL COMMENT '1 = admin  0 =  cliente',
  `idreferido` int(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`idpersona`, `direccion`, `telefono`, `finicio`, `router`, `antena`, `tantena`, `plan`, `estado`, `usuario_idusuario`, `typeuser`, `idreferido`, `email`) VALUES
(1, 'Huaycan 2222222', '22222222', '2018-02-12', '45555555', '555555', '55555555', '55555555', '1', 1, '1', 0, 'jytd5@jhn.com'),
(2, 'Alameda 23323', '333333', '2018-02-12', '45555555', '555555', '55555555', '55555555', '1', 2, '0', 1, 'ggrs3@gmail.com'),
(3, 'Desconosod 23 n4', '33333333', '2018-02-20', '3333333', '333333', '3333333', '333333', '1', 3, '0', 1, '2213@gmail.com'),
(4, 'Alameda ñaña', '998999998', '2018-01-15', '192.34.43', '196.123.23', '1', '3', 'on', 4, '0', 1, 'hsdf@gmail.com'),
(5, NULL, '9989989898', '2018-02-18', NULL, NULL, NULL, NULL, NULL, 5, '1', 1, 'sssy@gmail.com'),
(6, 'Vitarte', '999998878', '2018-02-01', '192.134.23.234', '1988.2.321.2', '1', '2', 'on', 6, '0', 5, 'matias23@exmplae.com'),
(8, 'bh76gc5sdcg7g', '324324234', '2018-02-06', '324324324', '234324324', '1', '1', 'on', 9, '0', 1, 'huamedfjhordy@gmail.com'),
(9, '234324324', '234324', '2018-02-03', '234324324', '3243243', '1', '1', 'on', 10, '0', 5, '23234432342'),
(10, '345345', '34534', '2018-02-08', '345345', '345345345', '1', '1', 'on', 11, '0', 5, '765445474'),
(11, NULL, '658758673', '2018-02-20', NULL, NULL, NULL, NULL, NULL, 12, '1', 5, 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`) VALUES
(1, 'home', '<div class=\"row\">\r\n<div class=\"col m4 s12\">\r\n<div class=\"card small\">\r\n<div class=\"card-image\"><img src=\"http://webonise.co.uk/images/philosophy.png\" /> My Philosophy</div>\r\n\r\n<div class=\"card-content\">\r\n<p>I always focusing on the performance and My goal is to create user-friendly and timeless websites that attract human eyes.</p>\r\n\r\n<p>Reading and trying out new ideas is how I have furthered my knowledge, keeping up to date with the latest technologies.</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col m4 s12\">\r\n<div class=\"card small\">\r\n<div class=\"card-image\"><img src=\"http://webonise.co.uk/images/mission.jpg\" /> My Mission</div>\r\n\r\n<div class=\"card-content\">\r\n<p>I am highly motivated, enthusiastic and a very reliable developer with a &#39;can do&#39; attitude. I am always looking to increase my knowledge and learn new technologies and skills.</p>\r\n\r\n<p>I love developing cross-platform iOS and Android applications.</p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col m4 s12\">\r\n<div class=\"card small\">\r\n<div class=\"card-image\"><img src=\"http://webonise.co.uk/images/process.jpg\" /> My Process</div>\r\n\r\n<div class=\"card-content\">\r\n<p>When I undertake a project, I don&#39;t just complete it, I go the extra mile and make it better than requested.</p>\r\n\r\n<ul>\r\n	<li>Planning</li>\r\n	<li>Design</li>\r\n	<li>Data Architecture</li>\r\n	<li>Development</li>\r\n	<li>Launch &amp; Support</li>\r\n</ul>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '2018-02-01 05:00:00', '2018-02-20 09:54:50'),
(2, '', '<table border=\"0\" cellpadding=\"1\" cellspacing=\"1\">\r\n	<tbody>\r\n		<tr>\r\n			<td><a href=\"https://olo.com.pe/planes-y-servicios/paquetes-lte-a-la-medida\"><img alt=\"Paquetes LTE a la medida\" src=\"https://olo.com.pe/static/sprites/core/planes/lte-medida-active.png?v=3060a\" /></a>\r\n			<h4>Paquetes LTE<br />\r\n			a la medida</h4>\r\n			</td>\r\n			<td>\r\n			<h4><a href=\"https://olo.com.pe/planes-y-servicios/paquetes-lte-ilimitado\"><img alt=\"Paquetes LTE Ilimitado\" src=\"https://olo.com.pe/static/sprites/core/planes/lte.png?v=ce539\" /></a><br />\r\n			Paquetes LTE<br />\r\n			Ilimitado</h4>\r\n			</td>\r\n			<td>\r\n			<p><a href=\"https://olo.com.pe/planes-y-servicios/planes-wimax\"><img alt=\"Planes WiMax\" src=\"https://olo.com.pe/static/sprites/core/planes/otros.png?v=db32b\" /></a></p>\r\n\r\n			<h4>Planes<br />\r\n			WiMax</h4>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<h3>&nbsp;</h3>', NULL, '2018-02-20 09:52:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `dni` varchar(45) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `remember_token` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `dni`, `password`, `nombre`, `apellido`, `remember_token`) VALUES
(1, '77058361', '$2y$10$HSXoWm549lSaeIz2w.VB2uxt/5G0W6D0wUq8823qq6zKI0e70mele', 'Jhordy', 'Huaman Ollero', 'QvSiXn8qjsAfgn6LPmly1Tb4XNmLICnuJAWPK10Z8SRxDSXsx1yT1yZxjvC4'),
(2, '77777777', '$2y$10$4DhDUjn1PHT0xlj8DlPK3.YcAurDgEnLqHHZiZrdYPZQBvVlLgOSi', 'Juan ', 'Huartado Maotaro', 'lO8UzlEnKCb7EaKIKKk9GmZmONR8Kehy43WYqzAfyhex6Y7oBl7UK5ZfWQ9j'),
(3, '88888888', '13245678', 'Ramires', 'Solorzano aliaga', NULL),
(4, '99999999', '$2y$10$BrWgrrmGORx4ssSW3.yqrO3DjpmKHL2tabO9OIX6BlYdxi4O5LMbq', 'Andres', 'Oloritga motolla', 'ekFfhEfwJy3sa04CD2nhrP7RbjIKgat9yLCfVa4979UK3wUROiw0DSa6xtNy'),
(5, '11111111', '$2y$10$wMwrPQ7n/L/Zlo4mBVgqXufY0z264Owpjd2daNWVjHHwK6o38VnZC', 'Pedro', 'Montollas Aliaga', 'dT3EsJ5NT22eLYsmtLd8r7WBiQKklCxKBiLS6WPqm1Y8vIvGcqHa92WY5ku7'),
(6, '22222222', '$2y$10$bq914TJFFfd47vEh7JL7gO2WYFcHwf3tkJW7rjJiCiKuVBqG7vz7q', 'Matias', 'Lopez Leopoldo', NULL),
(9, '345678765', '$2y$10$tuSLqLqsOMd3ldePL2.cR.6Tuy9ZjiaruetXPAobo35t4itawoAIu', 'miguek', 'arturo casas', NULL),
(10, '324423423', '$2y$10$WCbWgFT2seWwmrX7.Uufa.VJI8z8SpsWYgO2N3y2rI9xxukBO4Vmi', 'sadas', 'asdsad', NULL),
(11, '435345', '$2y$10$q1eFUkAIzUEMUC8Ecb0ROOqImv3n5OYXotPiXvWHrO.EPwi8LfEQy', 'ewdfwe', 'rewrewr', NULL),
(12, '33333333', '$2y$10$cCIWkpLYCmIedmEcDl9tCuuNlNGlvVBsQIZEYaPh5TyboGpczUjoy', 'admin', 'admin', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `buzon`
--
ALTER TABLE `buzon`
  ADD PRIMARY KEY (`idbuzon`),
  ADD KEY `pf_noty_idx` (`idnotification`);

--
-- Indices de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD PRIMARY KEY (`idnotificaciones`),
  ADD KEY `fk_notificaciones_persona1_idx` (`persona_idpersona`);

--
-- Indices de la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD PRIMARY KEY (`idpagos`),
  ADD KEY `fk_pagos_persona1_idx` (`persona_idpersona`);

--
-- Indices de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`idpaquetes`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`idpersona`),
  ADD KEY `fk_persona_usuario_idx` (`usuario_idusuario`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD UNIQUE KEY `dni_UNIQUE` (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `buzon`
--
ALTER TABLE `buzon`
  MODIFY `idbuzon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  MODIFY `idnotificaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `pagos`
--
ALTER TABLE `pagos`
  MODIFY `idpagos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `paquetes`
--
ALTER TABLE `paquetes`
  MODIFY `idpaquetes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `idpersona` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `buzon`
--
ALTER TABLE `buzon`
  ADD CONSTRAINT `pf_notify` FOREIGN KEY (`idnotification`) REFERENCES `notificaciones` (`idnotificaciones`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `notificaciones`
--
ALTER TABLE `notificaciones`
  ADD CONSTRAINT `fk_notificaciones_persona1` FOREIGN KEY (`persona_idpersona`) REFERENCES `persona` (`idpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `pagos`
--
ALTER TABLE `pagos`
  ADD CONSTRAINT `fk_pagos_persona1` FOREIGN KEY (`persona_idpersona`) REFERENCES `persona` (`idpersona`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_persona_usuario` FOREIGN KEY (`usuario_idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
