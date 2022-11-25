-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2022 at 04:14 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteca`
--

-- --------------------------------------------------------

--
-- Table structure for table `autor`
--

CREATE TABLE `autor` (
  `idautor` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `imagen` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `condicion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `autor`
--

INSERT INTO `autor` (`idautor`, `nombre`, `descripcion`, `imagen`, `condicion`) VALUES
(1, 'Paúl Kennedy', '', '', 1),
(2, 'Luis Joyanes Aguilar', '', '', 1),
(3, 'Montejo Raez Arturo', '', '', 1),
(4, 'María Pilar García', '', '', 1),
(5, 'Marialcira Quintero', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `editorial`
--

CREATE TABLE `editorial` (
  `ideditorial` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `condicion` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `editorial`
--

INSERT INTO `editorial` (`ideditorial`, `nombre`, `descripcion`, `condicion`) VALUES
(1, 'Anaya Multimedia', '', 1),
(2, 'IT', '', 1),
(3, 'La casa del programador', '', 1),
(4, 'Organización Panamericana de la Salud', '', 1),
(5, 'Organización Panamericana de la Salud Mundial', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ejemplar`
--

CREATE TABLE `ejemplar` (
  `id_estado` int(8) NOT NULL,
  `descripcion` varchar(15) DEFAULT NULL,
  `cod_material` int(8) DEFAULT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ejemplar`
--

INSERT INTO `ejemplar` (`id_estado`, `descripcion`, `cod_material`, `stock`) VALUES
(1, 'Prestado', 1, 0),
(2, 'asdasdasd', 12, 0),
(3, 'assssssssssssss', 453, 0);

-- --------------------------------------------------------

--
-- Table structure for table `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(8) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL,
  `cod_material` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `estado`
--

INSERT INTO `estado` (`id_estado`, `descripcion`, `cod_material`) VALUES
(1, 'Prestado', 12),
(2, 'Prestado', 12),
(3, 'Prestado', 12),
(4, 'Disponible', 12),
(5, 'Disponible', 12),
(6, 'Disponible', 12),
(7, 'Prestado', 12),
(8, 'Disponible', 12),
(9, 'Prestado', 453),
(10, 'Disponible', 453),
(11, 'Prestado', 453),
(12, 'Disponible', 12),
(13, 'Prestado', 12),
(14, 'Disponible', 453),
(15, 'Disponible', 453),
(16, 'Disponible', 453),
(69, 'Disponible', 453),
(77, 'Prestado', 453),
(89, 'Prestado', 453),
(99, 'Prestado', 12),
(100, 'Disponible', 12);

-- --------------------------------------------------------

--
-- Table structure for table `estudiante`
--

CREATE TABLE `estudiante` (
  `idestudiante` int(11) NOT NULL,
  `codigo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `dni` varchar(8) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `carrera` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `direccion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `condicion` tinyint(1) NOT NULL,
  `apellido` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `estudiante`
--

INSERT INTO `estudiante` (`idestudiante`, `codigo`, `dni`, `nombre`, `carrera`, `direccion`, `telefono`, `email`, `condicion`, `apellido`) VALUES
(1, '1', '43539795', 'Thiago Demian', 'Desarrollo de Software', 'Roca 1356', '03794512436', 'credgeyt@gmail.com', 1, 'Dominguez'),
(2, '2', '22270933', 'Claudio Javier', 'Mecanica', 'Riachuelo KM 12', '3434488982', 'flacodominguez3@gmail.com', 1, 'Dominguez'),
(3, '3', '22026684', 'Sandra Maria del Carmen', '????', 'Av. Ramirez y Moussy', '3434488102', 'sandra@gmail.com', 1, 'Almaraz');

-- --------------------------------------------------------

--
-- Table structure for table `libro`
--

CREATE TABLE `libro` (
  `num_inventario` int(8) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `iniciales_autor` varchar(30) DEFAULT NULL,
  `cod_inventario` int(8) DEFAULT NULL,
  `cod_material` int(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `libro`
--

INSERT INTO `libro` (`num_inventario`, `titulo`, `iniciales_autor`, `cod_inventario`, `cod_material`) VALUES
(1, 'Aprendiendo JavaScript ', 'Carlos Azaustre', 12, 12),
(11, '', 'MA', 31231, 12),
(1231, '', 'MA', 12312, 0),
(1243, '', 'Carlos Azaustre', 12, 12),
(1253, '', 'Carlos Azaustre', 12, 12),
(8899, '', 'Carlos Azaustre', 15, 12);

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `id_material` int(8) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`id_material`, `descripcion`, `fecha`) VALUES
(0, '', '0000-00-00'),
(1, 'Copia', '2022-11-02'),
(2, 'Original', '2022-11-24'),
(12, 'Copia', '2022-11-01'),
(453, 'Copia', '2022-11-30'),
(5443, 'Original', '2022-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `prestamo`
--

CREATE TABLE `prestamo` (
  `id_prestamo` int(8) NOT NULL,
  `id_socio` int(8) DEFAULT NULL,
  `id_material` int(8) DEFAULT NULL,
  `fecha_salida` date DEFAULT NULL,
  `fecha_devolucion` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestamo`
--

INSERT INTO `prestamo` (`id_prestamo`, `id_socio`, `id_material`, `fecha_salida`, `fecha_devolucion`) VALUES
(22270933, 22270933, 453, '2022-11-24', '2022-11-30'),
(43539795, 43539795, 12, '2022-11-01', '2022-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_socio`
--

CREATE TABLE `tipo_socio` (
  `id_socio` int(8) NOT NULL,
  `nombre` int(20) NOT NULL,
  `apellido` int(20) NOT NULL,
  `direccion` varchar(20) NOT NULL,
  `telefono` int(12) NOT NULL,
  `e-mail` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(8) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`) VALUES
(22026684, 'Sandra Maria del Car', 'Almaraz'),
(22270933, 'Claudio Javier', 'Dominguez'),
(43539795, 'Thiago Demian', 'Dominguez');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ejemplar`
--
ALTER TABLE `ejemplar`
  ADD PRIMARY KEY (`id_estado`),
  ADD KEY `cod_material` (`cod_material`);

--
-- Indexes for table `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`),
  ADD KEY `cod_material` (`cod_material`);

--
-- Indexes for table `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`idestudiante`);

--
-- Indexes for table `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`num_inventario`),
  ADD KEY `cod_material` (`cod_material`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`id_material`);

--
-- Indexes for table `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`id_prestamo`),
  ADD KEY `id_material` (`id_material`);

--
-- Indexes for table `tipo_socio`
--
ALTER TABLE `tipo_socio`
  ADD PRIMARY KEY (`id_socio`),
  ADD KEY `telefono` (`telefono`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ejemplar`
--
ALTER TABLE `ejemplar`
  MODIFY `id_estado` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `idestudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tipo_socio`
--
ALTER TABLE `tipo_socio`
  MODIFY `id_socio` int(8) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ejemplar`
--
ALTER TABLE `ejemplar`
  ADD CONSTRAINT `ejemplar_ibfk_1` FOREIGN KEY (`cod_material`) REFERENCES `material` (`id_material`);

--
-- Constraints for table `estado`
--
ALTER TABLE `estado`
  ADD CONSTRAINT `estado_ibfk_1` FOREIGN KEY (`cod_material`) REFERENCES `material` (`id_material`);

--
-- Constraints for table `libro`
--
ALTER TABLE `libro`
  ADD CONSTRAINT `libro_ibfk_1` FOREIGN KEY (`cod_material`) REFERENCES `material` (`id_material`);

--
-- Constraints for table `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `prestamo_ibfk_1` FOREIGN KEY (`id_material`) REFERENCES `material` (`id_material`),
  ADD CONSTRAINT `prestamo_ibfk_2` FOREIGN KEY (`id_prestamo`) REFERENCES `usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
