-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2022 a las 06:18:25
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `vuelos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito_usuarios`
--

CREATE TABLE `carrito_usuarios` (
  `id_sesion` varchar(255) NOT NULL,
  `id_producto` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelos`
--

CREATE TABLE `vuelos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `codigovuelo` varchar(255) NOT NULL,
  `origen` varchar(255) NOT NULL,
  `destino` varchar(255) NOT NULL,
  `fechasalida` varchar(255) NOT NULL,
  `fecharegreso` varchar(255) NOT NULL DEFAULT '-',
  `horasalida` varchar(255) NOT NULL,
  `horallegada` varchar(255) NOT NULL,
  `precio` decimal(9,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vuelos`
--

INSERT INTO `vuelos` (`id`, `codigovuelo`, `origen`, `destino`, `fechasalida`, `fecharegreso`, `horasalida`, `horallegada`, `precio`) VALUES
(1, 'AIR2937', 'La Paz', 'Santa Cruz', '08-08-2022', '09-08-2022', '03:34', '04:34', '200.00'),
(3, 'AIR6302', 'Potosi', 'Cochabamba', '12-08-2022', '14-08-2022', '10:39', '11:39', '500.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito_usuarios`
--
ALTER TABLE `carrito_usuarios`
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito_usuarios`
--
ALTER TABLE `carrito_usuarios`
  ADD CONSTRAINT `carrito_usuarios_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `vuelos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
