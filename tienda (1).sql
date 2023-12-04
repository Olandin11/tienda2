-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-12-2023 a las 02:08:05
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
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `numcontrol` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`nombre`, `apellido`, `username`, `ciudad`, `estado`, `numcontrol`) VALUES
('Carlos Daniel', 'Palafox Retana', 'carlospalafox345@gmail.com', 'Guanajuato', 'Michoacan', '18111268'),
('Carlos Daniel', 'Palafox Retana', 'carlospalafox345@gmail.com', 'Guanajuato', 'Jalisco', '18111268'),
('Carlos Daniel', 'Palafox Retana', 'carlospalafox345@gmail.com', 'Guanajuato', 'Queretaro', '18111268'),
('Carlos Daniel', 'Palafox Retana', 'carlospalafox345@gmail.com', 'Guanajuato', 'Guanajuato', '18111268');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Marca` varchar(50) NOT NULL,
  `Unidades` int(11) NOT NULL,
  `Codigo_barras` int(11) NOT NULL,
  `Precio_Compra` float NOT NULL,
  `Precio_venta` float NOT NULL,
  `Foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `Nombre`, `Marca`, `Unidades`, `Codigo_barras`, `Precio_Compra`, `Precio_venta`, `Foto`) VALUES
(3, 'Llave de presion', 'Stanley', 1, 0, 450, 500, 'stanley.jpg'),
(4, 'Llave perica', 'Still', 10, 0, 340, 360, 'perica.jpg\r\n\r\n'),
(5, 'Coples CPVC 1/2\'', 'Bricomark', 2, 0, 6, 10, 'cpvc.jpg'),
(6, 'Martillo de uña', 'Truper', 10, 0, 450, 480, 'martillo.png'),
(7, 'Cinta aislar', 'Trupper', -3, 0, 35, 40, 'caislar.jpg'),
(8, 'Desbrozadora honda', 'Honda', 4, 36237, 8000, 5600, 'honda.jpg'),
(9, 'Desarmador Kusky', 'Husky', 4, 90384934, 500, 450, 'husky.jpg'),
(10, 'Taladro Milwake', 'Milwake', 3, 897934, 4400, 3890, 'taladro.jpg'),
(11, 'Desbrozadora husky', 'Husky', 4, 36237, 7000, 5600, 'caislar.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Password` smallint(10) NOT NULL,
  `Rol` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `Nombre`, `Correo`, `Password`, `Rol`) VALUES
(1, 'Carlos', 'correo', 1234, 1),
(2, 'Juan', 'correo@juan.com', 1234, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
