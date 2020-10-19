-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2020 a las 01:04:46
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `curso_laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expenses`
--

CREATE TABLE `expenses` (
  `id` int(10) UNSIGNED NOT NULL,
  `expense_report_id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `expenses`
--

INSERT INTO `expenses` (`id`, `expense_report_id`, `description`, `amount`, `created_at`, `updated_at`) VALUES
(1, 2, 'rear', '100.00', NULL, NULL),
(2, 2, 'er', '100.00', '2020-10-20 02:14:01', '2020-10-20 02:14:01'),
(3, 2, 'xomer', '200.00', '2020-10-20 02:14:24', '2020-10-20 02:14:24'),
(4, 6, 'Comida', '50.00', '2020-10-20 03:12:44', '2020-10-20 03:12:44'),
(5, 7, 'Gastos de pasaje', '100.00', '2020-10-20 03:47:05', '2020-10-20 03:47:05'),
(6, 7, 'Gastos en taxi', '200.00', '2020-10-20 03:48:50', '2020-10-20 03:48:50'),
(7, 8, 'Compra de verduras', '20.00', '2020-10-20 03:54:54', '2020-10-20 03:54:54'),
(8, 8, 'Compra de carnes', '50.00', '2020-10-20 03:55:13', '2020-10-20 03:55:13'),
(9, 9, 'Fiesta en la playa', '500.00', '2020-10-20 03:55:32', '2020-10-20 03:55:32'),
(10, 9, 'Paseo en el bosque', '200.00', '2020-10-20 03:55:52', '2020-10-20 03:55:52'),
(11, 10, 'Pago de la Habitación', '400.00', '2020-10-20 03:56:26', '2020-10-20 03:56:26'),
(12, 10, 'Internet', '100.00', '2020-10-20 03:56:46', '2020-10-20 03:56:46');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
