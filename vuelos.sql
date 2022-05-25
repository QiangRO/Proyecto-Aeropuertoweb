-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-05-2022 a las 03:25:54
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aeropuerto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vuelos`
--

CREATE TABLE `vuelos` (
  `Operador` varchar(100) NOT NULL,
  `SubOP` varchar(100) NOT NULL,
  `Matricula` int(11) NOT NULL,
  `Empresa` varchar(100) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Origen` varchar(100) NOT NULL,
  `Destino` varchar(100) NOT NULL,
  `FechaSalida` varchar(100) NOT NULL,
  `FechaLlegada` varchar(100) NOT NULL,
  `Hora` varchar(100) NOT NULL,
  `Horario` varchar(100) NOT NULL,
  `TipoVuelo` varchar(100) NOT NULL,
  `ModoVuelo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vuelos`
--

INSERT INTO `vuelos`
(`Operador`, `SubOP`, `Matricula`, `Empresa`, `Precio`, `Origen`, `Destino`, `FechaSalida`, `FechaLlegada`, `Hora`, `Horario`, `TipoVuelo`, `ModoVuelo`) VALUES
('ABC', 'ABC', 32245346, 'Univalle', 300, 'La Paz', 'Oruro', '05/06/2022', '05/31/2022', '5:00 - 6:00', 'AM', 'Privado', 'Redondo'),
('EJEMPLO', 'EJEMPLO', 32543654, 'Univalle', 300, 'La Paz', 'Santa Cruz', '05/06/2022', '05/31/2022', '1:00 - 2:00', 'PM', 'Comercial', 'Redondo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `vuelos`
--
ALTER TABLE `vuelos`
  ADD PRIMARY KEY (`Matricula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
