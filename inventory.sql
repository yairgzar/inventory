-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 08:04 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
CREATE DATABASE inventory;
USE inventory;

-- --------------------------------------------------------

--
-- Table structure for table `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(75) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `color` varchar(20) NOT NULL,
  `material` VARCHAR(20),
  `serie` varchar(35) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `usuario_responsable` VARCHAR(35 NOT NULL,
  `no_etiqueta` VARCHAR(45),
  `categorias` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table structure for table `user`
--
ñ
CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `password` varchar(16) DEFAULT NULL,
  `matricula` INT(15) DEFAULT NULL,
  `registro` timestamp NULL DEFAULT current_timestamp() COMMENT 'CURRENT_TIMESTAMP'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nombre`, `password`, `matricula`, `registro`) VALUES
(1, 'Yair Gonzalez Salazar', '123456', '210256', '2023-08-10 17:08:46');
--

--
-- Dumping data for table `user`
--
--
INSERT INTO `productos` (`id`, `nombre`, `marca`, `color`, `material`, `serie`, `estado`, `usuario_responsable`, `no_etiqueta`, `categorias`) VALUES 
('2', 'SILLA ACOJINADA ', 'SIN MARCA', 'NEGRO', 'TEXTIL METAL ', 'SIN SERIE ', 'FUNCIONAL', 'FRANCISCO GARCIA ROMERO', '51100061990UXJ061', 'DIRECCIÓN'), 
('3', 'TECLADO INALAMBRICO', 'LOGITECH', 'NEGRO', 'PLASTICO', '1730SC101GW8', 'FUNCIONAL', 'FRANCISCO GARCIA ROMERO', 'PENDIENTE', 'DIRECCIÓN');

-- Indexes for table `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `matricula` (`matricula`);


--
-- AUTO_INCREMENT for table `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
