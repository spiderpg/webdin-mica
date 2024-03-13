-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2024 a las 04:23:49
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clientes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Domicilio` varchar(40) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Correo` varchar(20) NOT NULL,
  `Comentarios` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes`(`ID`, `Nombre`, `Domicilio`, `Teléfono`, `Correo Electrónico`, `Comentarios`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')
(1, 'Gerardo Suarez', 'Valle de Magnolias 333 Col. Jardines del', '3333225588', 'gerasua@gmail.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in accumsan arcu, tempus placerat lorem. Nunc id sapien leo. Proin.'),
(2, 'Aldo Flores', 'Madero 1524 Col Centro', '5541254455', 'floresrinho@gmail.co', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in accumsan arcu, tempus placerat lorem. Nunc id sapien leo. Proin.'),
(3, 'Lorena Villafaña', 'Armando Soto Mz 32 Lt 12B Col. Jimenez G', '7225589654', 'lorechulis@outlook.c', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in accumsan arcu, tempus placerat lorem. Nunc id sapien leo. Proin.'),
(4, 'Lucía Fernanda Estre', 'Cielo Azul 100 Col. Paraiso', '6666666666', 'lucifer666@yahoo.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in accumsan arcu, tempus placerat lorem. Nunc id sapien leo. Proin.'),
(5, 'Erika Sánchez', 'Terranova 584 Col. Chapalita', '3312897565', 'erikucha3000@live.co', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut in accumsan arcu, tempus placerat lorem. Nunc id sapien leo. Proin.'),
(6, 'asd', 'as', '3322555555', 'loto@gmail.com', 'asdasdasd');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
