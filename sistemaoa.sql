-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2018 at 04:17 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

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
-- Table structure for table `administrador`
--

CREATE TABLE `administrador` (
  `idAdministrador` int(11) NOT NULL,
  `nombreAdmin` varchar(50) NOT NULL,
  `usuarioAdmin` varchar(15) NOT NULL,
  `pwAdmin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`idAdministrador`, `nombreAdmin`, `usuarioAdmin`, `pwAdmin`) VALUES
(1, 'Francisco Izurieta', 'admin', '$2y$10$nXfCxVyPD5M8nTsPR3Dk3.tBDBY2WZKrQqFuKXk7pGy/DjPkjNIKC');

-- --------------------------------------------------------

--
-- Table structure for table `carrera`
--

CREATE TABLE `carrera` (
  `idCarrera` int(11) NOT NULL,
  `nombreCarrera` varchar(100) NOT NULL,
  `idFacultad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carrera`
--

INSERT INTO `carrera` (`idCarrera`, `nombreCarrera`, `idFacultad`) VALUES
(1, 'Física', 1),
(2, 'Matemáticas', 1),
(3, 'Ingeniería Matemática', 1),
(4, 'Ingeniería en Ciencias Económicas y Financieras', 1),
(5, 'Maestría en Física', 1),
(6, 'Ingeniería Empresarial', 2),
(7, 'Ingeniería de la Producción', 2),
(8, 'Maestría en Sistemas de Gestión Integrados', 2),
(9, 'Maestría en Gestión de Talento Humano', 2),
(10, 'Ingeniería Civil', 3),
(11, 'Ingeniería Ambiental', 3),
(12, 'Ingeniería Eléctrica', 4),
(13, 'Ingeniería en Electrónica y Control', 4),
(14, 'Ingeniería en Electrónica y Redes de Información', 4),
(15, 'Ingeniería en Electrónica y Telecomunicaciones', 4),
(16, 'Maestría en Ciencias de Ingeniería Eléctrica', 4),
(17, 'Maestría en Conectividad y Redes de Telecomunicaciones', 4),
(18, 'Maestría en Automatización y Control Electrónico Industrial', 4),
(19, 'Maestría en Administración de Negocios Eléctricos', 4),
(20, 'Maestría en Ingeniería Eléctrica en Distribución', 4),
(21, 'Maestría en Redes Eléctricas Inteligentes', 4),
(22, 'Ingeniería en Geología', 5),
(23, 'Ingeniería en Petróleos', 5),
(24, 'Ingenieria Mecanica', 6),
(25, 'Maestria en Mecatronica y Robotica', 6),
(26, 'Maestria en Sistemas Automotrices', 6),
(27, 'Maestria en Diseño y Simulacion', 6),
(28, 'Programa Doctoral en Ciencias de la Mecanica', 6),
(29, 'Ingeniería Agroindustrial', 7),
(30, 'Ingeniería Química', 7),
(31, 'Ingeniería en Software', 8),
(32, 'Ingeniería en Computación', 8),
(33, 'Ingeniería en Sistemas Informaticos y de Computacion', 8),
(34, 'Maestría y Especialista en Gestión de las Comunicaciones y Tecnología de la Información', 8),
(35, 'Maestría en Ciencias de la Computación', 8),
(36, 'Maestría en Sistemas de Información', 8),
(37, 'Doctorado en Informática', 8),
(38, 'Tecnología en Electrónica y Telecomunicaciones', 9),
(39, 'Tecnología en Análisis de Sistemas Informáticos', 9),
(40, 'Tecnología en Electromecánica', 9),
(41, 'Tecnología en Agua y Saneamiento Ambiental', 9);


-- --------------------------------------------------------

--
-- Table structure for table `comentario`
--

CREATE TABLE `comentario` (
  `idComentario` int(11) NOT NULL,
  `detalleComent` text NOT NULL,
  `idOA` int(11) NOT NULL,
  `idProfesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comentario`
--

INSERT INTO `comentario` (`idComentario`, `detalleComent`, `idOA`, `idProfesor`) VALUES
(1, 'Muy buen Objeto de Aprendizaje', 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `departamento`
--

CREATE TABLE `departamento` (
  `idDepartamento` int(11) NOT NULL,
  `nombreDepartamento` varchar(100) NOT NULL,
  `idFacultad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `departamento`
--

INSERT INTO `departamento` (`idDepartamento`, `nombreDepartamento`, `idFacultad`) VALUES
(1, 'Departamento de Física (DF)', 1),
(2, 'Departamento de Matemática (DM)', 1),
(3, 'Departamento de Ciencias Administrativas (DEPCA)', 2),
(4, 'Departamento de Estudios Organizacionales Desarrollo Humano (DESODEH)', 2),
(5, 'Departamento de Ingeniería Civil y Ambiental (DICA)', 3),
(6, 'Departamento de Automatización y Control Industrial (DACI)', 4),
(7, 'Departamento de Energía Eléctrica (DEE)', 4),
(8, 'Departamento de Electrónica, Telecomunicaciones y Redes de Información (DETRI)', 4),
(9, 'Departamento de Geología (DG)', 5),
(10, 'Departamento de Petróleos (DP)', 5),
(11, 'Departamento de Ingenieria Mecanica (DIM)', 6),
(12, 'Departamento de Materiales (DMT)', 6),
(13, 'Departamento de Ingeniería Química (DIQ)', 7),
(14, 'Departamento de Ciencias de Alimentos y Biotecnología (DECAB)', 7),
(15, 'Departamento de Ciencias Nucleares (DCN)', 7),
(16, 'Departamento de Metalurgia Extractiva (DEMEX)', 7),
(17, 'Departamento de Informática y Ciencias de la Computación (DICC)', 8),
(18, 'Departamento de Formacion Basica (DFB)', 10),
(19, 'Instituto Geofisico', 10),
(20, 'Departamento de Ciencias Sociales', 10);

-- --------------------------------------------------------

--
-- Table structure for table `estudiante`
--

CREATE TABLE `estudiante` (
  `idEstudiante` int(11) NOT NULL,
  `cedulaEst` varchar(10) NOT NULL,
  `nombresEst` varchar(50) NOT NULL,
  `apellidosEst` varchar(50) NOT NULL,
  `correoEst` varchar(50) NOT NULL,
  `idCarrera` int(11) NOT NULL,
  `usuarioEst` varchar(15) NOT NULL,
  `pwEst` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Table structure for table `facultad`
--

CREATE TABLE `facultad` (
  `idFacultad` int(11) NOT NULL,
  `nombreFacultad` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `facultad`
--

INSERT INTO `facultad` (`idFacultad`, `nombreFacultad`) VALUES
(1, 'Facultad de Ciencias'),
(2, 'Facultad de Ciencias Administrativas'),
(3, 'Facultad de Ing. Civil y Ambiental'),
(4, 'Facultad de Ing. Electrica y Electronica'),
(5, 'Facultad de Geologia y Petroleos'),
(6, 'Facultad de Ing. Mecanica'),
(7, 'Facultad de Ing. Quimica y Agroindustria'),
(8, 'Facultad de Ing. de Sistemas'),
(9, 'Escuela de Formacion de Tecnologos'),
(10, 'Otros');

-- --------------------------------------------------------

--
-- Table structure for table `objetoaprendizaje`
--

CREATE TABLE `objetoaprendizaje` (
  `idOA` int(11) NOT NULL,
  `ruta` varchar(200) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 NOT NULL,
  `autor` varchar(100) CHARACTER SET utf8 NOT NULL,
  `descripcion` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `fecha` date NOT NULL,
  `p_clave` varchar(200) CHARACTER SET utf8 NOT NULL,
  `institucion` varchar(100) CHARACTER SET utf8 NOT NULL,
  `tamano` varchar(100) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `fecha_ing` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ruta_zip` varchar(200) NOT NULL,
  `idProfesor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `objetoaprendizaje`
--

INSERT INTO `objetoaprendizaje` (`idOA`, `ruta`, `nombre`, `autor`, `descripcion`, `fecha`, `p_clave`, `institucion`, `tamano`, `tipo`, `fecha_ing`, `ruta_zip`, `idProfesor`) VALUES
(2, '', 'Diseño de la arquitectura de software', 'Graciela Moreno, Paola Guamanì, Gabriel Macias', 'Crear un objeto de aprendizaje que ayude como material de apoyo, o como recurso para un aprendizaje autodidacta de los diseños de arquitectura de software.', '2017-12-12', 'diseño, arquitectura', 'Escuela Politecnica Nacional', '154226 bytes', 'WinRAR ZIP', '2018-01-28 20:08:09', 'diseno_arquitectura.zip', 3);

-- --------------------------------------------------------

--
-- Table structure for table `profesor`
--

CREATE TABLE `profesor` (
  `idProfesor` int(11) NOT NULL,
  `cedulaProf` varchar(10) NOT NULL,
  `nombresProf` varchar(50) NOT NULL,
  `apellidosProf` varchar(50) NOT NULL,
  `correoProf` varchar(50) NOT NULL,
  `idDepartamento` int(11) NOT NULL,
  `usuarioProf` varchar(15) NOT NULL,
  `pwProf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `profesor`
--

INSERT INTO `profesor` (`idProfesor`, `cedulaProf`, `nombresProf`, `apellidosProf`, `correoProf`, `idDepartamento`, `usuarioProf`, `pwProf`) VALUES
(8, '1723124564', 'Dario', 'Herrera', 'daro.wla@hotmail.es', 17, 'dario', '$2y$10$giPwvmBfUslrQRrpcjgEGOXpM5iQttdUozUCJG8Bad7aCbHbASIju'),
(10, '1725290343', 'Alexis', 'Guerrero', 'alexis.guerrero@epn.edu.ec', 19, 'alexis', '$2y$10$uQwP186XWpADxNAt/iC18e7Ku/WfiTsICuc5lySuOPb2lMD27X94u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`idAdministrador`);

--
-- Indexes for table `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`idCarrera`),
  ADD KEY `idFacultad` (`idFacultad`);

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`idComentario`),
  ADD KEY `idOA` (`idOA`),
  ADD KEY `idProfesor` (`idProfesor`);

--
-- Indexes for table `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`idDepartamento`),
  ADD KEY `idFacultad` (`idFacultad`);

--
-- Indexes for table `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`idEstudiante`),
  ADD KEY `idCarrera` (`idCarrera`);

--
-- Indexes for table `facultad`
--
ALTER TABLE `facultad`
  ADD PRIMARY KEY (`idFacultad`);

--
-- Indexes for table `objetoaprendizaje`
--
ALTER TABLE `objetoaprendizaje`
  ADD PRIMARY KEY (`idOA`),
  ADD KEY `idProfesor` (`idProfesor`);

--
-- Indexes for table `profesor`
--
ALTER TABLE `profesor`
  ADD PRIMARY KEY (`idProfesor`),
  ADD KEY `idDepartamento` (`idDepartamento`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrador`
--
ALTER TABLE `administrador`
  MODIFY `idAdministrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carrera`
--
ALTER TABLE `carrera`
  MODIFY `idCarrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
  MODIFY `idComentario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departamento`
--
ALTER TABLE `departamento`
  MODIFY `idDepartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `idEstudiante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `facultad`
--
ALTER TABLE `facultad`
  MODIFY `idFacultad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `objetoaprendizaje`
--
ALTER TABLE `objetoaprendizaje`
  MODIFY `idOA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profesor`
--
ALTER TABLE `profesor`
  MODIFY `idProfesor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

