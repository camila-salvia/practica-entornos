-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2023 a las 23:10:09
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `compras`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE `catalogo` (
  `id` int(11) NOT NULL,
  `producto` varchar(100) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`id`, `producto`, `precio`) VALUES
(1, 'Caramelos', 59),
(2, 'chupetines', 12),
(3, 'Cámara Fotográfica Canon EOS', 900),
(4, 'Smartphone Samsung Galaxy', 700),
(5, 'Laptop HP Pavilion', 1199),
(6, 'Televisor LG 4K', 600),
(7, 'Reloj Inteligente Apple Watch', 349),
(8, 'Auriculares Inalámbricos Sony', 200),
(9, 'Impresora Multifunción Epson', 300),
(10, 'Tablet Samsung Galaxy Tab', 450),
(11, 'Altavoces Bluetooth JBL', 99),
(12, 'Teclado Mecánico Gaming', 119),
(13, 'Silla de Oficina Ergonómica', 200),
(14, 'Cafetera Nespresso', 149),
(15, 'Aspiradora Robot iRobot Roomba', 500),
(16, 'Batidora de Mano KitchenAid', 180),
(17, 'Mochila Porta Laptop SwissGear', 80),
(18, 'Horno Eléctrico Whirlpool', 249),
(19, 'Juego de Sartenes Antiadherentes', 90),
(20, 'Cepillo Eléctrico Oral-B', 70),
(21, 'Juego de Toallas de Baño', 39),
(22, 'Set de Tazas de Café de Porcelana', 49);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `catalogo`
--
ALTER TABLE `catalogo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
