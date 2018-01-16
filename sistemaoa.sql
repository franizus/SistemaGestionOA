-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2018 at 04:11 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

CREATE DATABASE sistemaoa;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistemaoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `objetoaprendizaje`
--

CREATE TABLE `objetoaprendizaje` (
  `id` int(11) NOT NULL,
  `ruta` varchar(200) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `autor` varchar(100) CHARACTER SET utf8 NOT NULL,
  `descripcion` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `p_clave` varchar(200) CHARACTER SET utf8 NOT NULL,
  `institucion` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `objetoaprendizaje`
--

INSERT INTO `objetoaprendizaje` (`id`, `ruta`, `nombre`, `autor`, `descripcion`, `fecha`, `p_clave`, `institucion`) VALUES
(1, 'oa/metodos_desarrollo/index.html', 'Metodos de Desarrollo', 'Francisco Izurieta', 'Los modelos de desarrollo de software son una representaci?n abstracta de una manera en particular. Realmente no representa c?mo se debe desarrollar el software, sino de un enfoque com?n.', '2018-01-09 22:29:10', 'metodos, desarrollo', 'Escuela Politecnica Nacional'),
(2, 'oa/patrones_diseno/index.html', 'Patrones de Diseño', 'Dario Herrera, Alexis Guerrero, Francisco Izurieta', 'En la ingeniería de software existen distintas técnicas para poder desarrollar programas funcionales. No se puede afirmar o decir cu?l es la mejor t?cnica para poder desarrollar software, ya que cada t?cnica se apega a una necesidad distinta dependiendo del desarrollador.', '2018-01-09 22:31:26', 'diseño, patrones', 'Escuela Politecnica Nacional'),
(3, 'oa/diseno_interfaces/index.html', 'Diseño de Interfaz de Usuario', 'Francisco Izurieta', 'El diseño de la interfaz de usuario crea un medio eficaz de comunicación entre los seres humanos y la computadora.', '2018-01-09 22:32:43', 'diseño, interfaz, usuario', 'Escuela Politecnica Nacional'),
(4, 'oa/diseno_arquitectura/index.html', 'Diseño arquitectónico del software', 'Graciela Moreno, Paola Guamani, Gabriel Macias', '', '2018-01-09 22:33:45', 'diseño, arquitectura, software', 'Escuela Politecnica Nacional'),
(5, 'oa/diseno_componentes/index.html', 'Diseño a nivel de componentes', 'Andrea Villacis, Carlos Gutierrez', 'El diseño en el nivel de componentes define las estructuras de datos, algoritmos, caracteristicas de la interfaz y mecanismos de comunicacion asignadas a cada componente.', '2018-01-09 22:34:27', 'diseño, componentes', 'Escuela Politecnica Nacional');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `objetoaprendizaje`
--
ALTER TABLE `objetoaprendizaje`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `objetoaprendizaje`
--
ALTER TABLE `objetoaprendizaje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
