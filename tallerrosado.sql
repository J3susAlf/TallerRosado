-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2023 a las 22:12:25
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tallerrosado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `Id_Empleado` int(50) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Apellido` varchar(50) NOT NULL,
  `Telefono` bigint(20) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Salario` int(10) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Contraseña` varchar(50) NOT NULL,
  `Id_Roll` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Id_Empleado`, `Nombre`, `Apellido`, `Telefono`, `Correo`, `Salario`, `Direccion`, `Contraseña`, `Id_Roll`) VALUES
(1, 'Alfredo', 'Magaña', 9988911111, 'al06777@gmail.com', 1000, 'Ex Hacienda', '1230', 1),
(2, 'Kevin', 'Chan', 9821318833, 'aguilar2023@gmail.com', 1000, 'Mercado', '93425', 2),
(3, 'Jesus', 'Guzman', 982131882, 'asdf@gmail.com', 9000, 'Mercado', '120400', 1),
(4, 'Alfredo', 'Magaña', 9821318824, 'aguilar20O3@gmail.com', 500, 'Mercado', '34090', 5),
(5, 'Jesus', 'Magaña', 9821318824, 'aguilar2023@gmail.com', 1000, 'Merc', '5581', 1),
(6, 'Miguel', 'Manrero', 1232341111, 'aguilar20O3@gmail.com', 500, 'pedro sainz', '31201', 4),
(7, 'Migueñ', 'Dzib', 4343123456, 'aguilar2023@gmail.com', 345, 'Santa Ana', '15088', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `Id_Marca` int(100) NOT NULL,
  `Nombre_de_Marca` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`Id_Marca`, `Nombre_de_Marca`) VALUES
(1, 'Castrol'),
(2, 'Civic'),
(3, 'Empi'),
(4, 'Pirelli'),
(5, 'City');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id_Producto` int(100) NOT NULL,
  `Nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id_Producto`, `Nombre`) VALUES
(8, 'Aceites'),
(9, 'Faros'),
(10, 'Salpicaderas'),
(11, 'Llantas'),
(12, 'Cajuelas'),
(13, 'Llantas'),
(14, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `Id_Roll` int(100) NOT NULL,
  `Tipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`Id_Roll`, `Tipo`) VALUES
(1, 'Administrador'),
(2, 'Cajero'),
(3, 'Gerente'),
(4, 'Limpieza'),
(5, 'Limpieza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uniones`
--

CREATE TABLE `uniones` (
  `Id_Union` int(100) NOT NULL,
  `Id_Producto` int(100) NOT NULL,
  `Id_Marca` int(100) NOT NULL,
  `Cantidad` int(100) NOT NULL,
  `Precio` int(100) NOT NULL,
  `Descripcion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `uniones`
--

INSERT INTO `uniones` (`Id_Union`, `Id_Producto`, `Id_Marca`, `Cantidad`, `Precio`, `Descripcion`) VALUES
(1, 8, 1, 10, 500, '4 tiempos'),
(2, 9, 2, 10, 500, 'Automóviles '),
(3, 10, 3, 1200, 1200, 'Automóviles '),
(4, 11, 4, 1, 1200, 'Rin 18 y Rin 2.75'),
(5, 12, 5, 5, 1500, 'Automóviles ');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Id_Empleado`),
  ADD KEY `Id_Roll` (`Id_Roll`),
  ADD KEY `Id_Roll_2` (`Id_Roll`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`Id_Marca`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id_Producto`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Id_Roll`);

--
-- Indices de la tabla `uniones`
--
ALTER TABLE `uniones`
  ADD PRIMARY KEY (`Id_Union`),
  ADD KEY `Id_Producto` (`Id_Producto`),
  ADD KEY `Id_Marca` (`Id_Marca`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `Id_Empleado` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `Id_Marca` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id_Producto` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `Id_Roll` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `uniones`
--
ALTER TABLE `uniones`
  MODIFY `Id_Union` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`Id_Roll`) REFERENCES `roles` (`Id_Roll`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `uniones`
--
ALTER TABLE `uniones`
  ADD CONSTRAINT `uniones_ibfk_1` FOREIGN KEY (`Id_Marca`) REFERENCES `marca` (`Id_Marca`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `uniones_ibfk_2` FOREIGN KEY (`Id_Producto`) REFERENCES `productos` (`Id_Producto`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
