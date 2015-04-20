-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2015 a las 17:17:58
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
  `estado` tinyint(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

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
MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
