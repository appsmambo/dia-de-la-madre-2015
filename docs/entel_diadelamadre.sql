-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-04-2015 a las 15:22:16
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `entel_diadelamadre`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `errores`
--

CREATE TABLE IF NOT EXISTS `errores` (
`id` bigint(20) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `dni` varchar(8) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `celular` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `mensaje` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `extension` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `error` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `errores`
--

INSERT INTO `errores` (`id`, `nombre`, `dni`, `email`, `celular`, `mensaje`, `imagen`, `extension`, `created_at`, `updated_at`, `ip`, `error`) VALUES
(2, 'algo aqui', '56456456', 'q@q.cm', '7895412', 'asd asd asd', 'd1a819182204889397358d7f86f51321749ebdac', '', '2015-04-18 22:18:21', '2015-04-18 22:18:21', '::1', 'Illuminate\\Support\\MessageBag Object(    [messages:protected] => Array        (            [dni] => Array                (                    [0] => El dni :value ya está registrado en nuestro sistema.                )            [email] => Array                (                    [0] => El email :value ya está registrado en nuestro sistema.                )        )    [format:protected] => :message)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `participante`
--

CREATE TABLE IF NOT EXISTS `participante` (
`id` bigint(20) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `dni` varchar(8) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `celular` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `mensaje` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `extension` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ip` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `estado` tinyint(4) NOT NULL,
  `video` varchar(5) COLLATE utf8_spanish2_ci NOT NULL,
  `flujo` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `participante`
--

INSERT INTO `participante` (`id`, `nombre`, `dni`, `email`, `celular`, `mensaje`, `imagen`, `extension`, `created_at`, `updated_at`, `ip`, `estado`, `video`, `flujo`) VALUES
(1, 'Juan', '56456456', 'q@q.cm', '24938989348934', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nisl elit, luctus sit amet augue a, venenatis semper elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris lacinia, nulla sed pretium ullamcorper, ligula libero varius tellus, quis luctus nisl libero at erat. Sed vel nisl ornare, aliquam urna sit amet, vulputate sem. Maecenas non odio ac mauris maximus pulvinar quis sed est. Maecenas pharetra erat urna, et fringilla tellus placerat ', '260399a7355ee420330488e1a69d2ef2392a25ec', 'png', '2015-04-18 08:38:59', '2015-04-18 08:38:59', '::1', 0, '', ''),
(2, 'Juan', '12345678', 'edyelbaby@gmail.com', '24938989348934', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis nisl elit, luctus sit amet augue a, venenatis semper elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Mauris lacinia, nulla sed pretium ullamcorper, ligula libero varius tellus, quis luctus nisl libero at erat. Sed vel nisl ornare, aliquam urna sit amet, vulputate sem. Maecenas non odio ac mauris maximus pulvinar quis sed est. Maecenas pharetra erat urna, et fringilla tellus placerat ', '2efdc2c2670afb0c145f128bfeba1bda6dc16f7b', 'jpg', '2015-04-18 09:06:21', '2015-04-18 09:06:21', '::1', 0, '', ''),
(3, 'Asd Asd', '65458745', 'q@q.com', '34543534535353535345', 'asñl asñdjasdjñasdj ñasdj ldfñ aklsefwejoqweu90 asdf ae agr dfhtheyju ywq34t23 ar twewe', '71f0f4f7bf1ea361aff0c9380bf07c001b015925', 'jpg', '2015-04-18 09:14:10', '2015-04-18 09:14:10', '::1', 0, '', ''),
(4, 'Algo', '12312321', 'qqq@asd.com', '7895412', 'asd asd asd asd asd asd asda asef wery wetw3t w34tqw34tqerq255y 346 45ue5hj rth ergh ryj awer gr ergqwergt ergwegt trhtrjy dgfhn xfgh', '196ce0248be6851f847238d8198023fa2282d897', 'jpg', '2015-04-18 09:19:14', '2015-04-18 09:19:14', '::1', 0, '', ''),
(5, 'Alex Sifuentes', '32165498', 'alex.pompin@gmail.com', '654987321', 'Mensaje para mi ama', '781ff993213196d35c6ce7448b15cd77925a8920', 'png', '2015-04-21 18:10:55', '2015-04-21 18:10:55', '::1', 0, 'mobil', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `errores`
--
ALTER TABLE `errores`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `dni` (`dni`,`email`);

--
-- Indices de la tabla `participante`
--
ALTER TABLE `participante`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `dni` (`dni`,`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `errores`
--
ALTER TABLE `errores`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `participante`
--
ALTER TABLE `participante`
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
