-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 04:03 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_registro_civil`
--

-- --------------------------------------------------------

--
-- Table structure for table `abuelo`
--

CREATE TABLE `abuelo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abuelo`
--

INSERT INTO `abuelo` (`id`, `nombre`, `apellido1`, `apellido2`) VALUES
(9, 'asdasd', 'asdasd', 'asdasda'),
(10, 'frida', 'medrano', 'ort'),
(12, 'teresa', 'chow', 'q'),
(13, 'teresa', 'chow', 'q'),
(14, 'pedro', 'banuelos', 'aguilar'),
(15, 'pedro', 'banuelos', 'aguilar');

-- --------------------------------------------------------

--
-- Table structure for table `acta_datos`
--

CREATE TABLE `acta_datos` (
  `id` int(11) NOT NULL,
  `libro` int(11) NOT NULL,
  `acta` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `fecha_registro` date NOT NULL,
  `folio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acta_datos`
--

INSERT INTO `acta_datos` (`id`, `libro`, `acta`, `anio`, `fecha_registro`, `folio`) VALUES
(1, 1, 77, 222, '0888-08-09', 4),
(2, 1, 77, 222, '0888-08-09', 4);

-- --------------------------------------------------------

--
-- Table structure for table `padre`
--

CREATE TABLE `padre` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) NOT NULL,
  `nacionalidad` varchar(20) NOT NULL,
  `edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `padre`
--

INSERT INTO `padre` (`id`, `nombre`, `apellido1`, `apellido2`, `nacionalidad`, `edad`) VALUES
(3, 'brayan amado', 'hernandez', 'ortiz', 'mexicana', 44),
(4, 'brayan amado', 'hernandez', 'ortiz', 'mexicana', 44),
(5, 'brayan amado', 'hernandez', 'ortiz', 'mexicana', 44);

-- --------------------------------------------------------

--
-- Table structure for table `registrado`
--

CREATE TABLE `registrado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `lugar_nacimiento` varchar(40) NOT NULL,
  `genero` varchar(20) NOT NULL,
  `presentado` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `registro_civil`
--

CREATE TABLE `registro_civil` (
  `id` int(11) NOT NULL,
  `entidad` varchar(50) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `juzgado` int(11) NOT NULL,
  `juez` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registro_civil`
--

INSERT INTO `registro_civil` (`id`, `entidad`, `municipio`, `juzgado`, `juez`) VALUES
(2, 'mexico', 'neza', 9, 'Lic Ninguno'),
(4, 'mexico', 'neza', 9, 'Lic Ninguno'),
(5, 'mexico', 'neza', 9, 'Lic Ninguno'),
(6, 'mexico', 'neza', 9, 'Lic Ninguno'),
(7, 'sonora', 'nogales', 2, 'lic nuevo'),
(8, 'mexico', 'jtown', 97, 'lic nuevo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abuelo`
--
ALTER TABLE `abuelo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acta_datos`
--
ALTER TABLE `acta_datos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `padre`
--
ALTER TABLE `padre`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrado`
--
ALTER TABLE `registrado`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registro_civil`
--
ALTER TABLE `registro_civil`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abuelo`
--
ALTER TABLE `abuelo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `acta_datos`
--
ALTER TABLE `acta_datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `padre`
--
ALTER TABLE `padre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registrado`
--
ALTER TABLE `registrado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registro_civil`
--
ALTER TABLE `registro_civil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
