-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql106.epizy.com
-- Generation Time: Jan 30, 2018 at 04:57 PM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epiz_21410845_sistemaoa`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `idAdministrador` int(11) NOT NULL AUTO_INCREMENT,
  `nombreAdmin` varchar(50) NOT NULL,
  `usuarioAdmin` varchar(15) NOT NULL,
  `pwAdmin` varchar(255) NOT NULL,
  PRIMARY KEY (`idAdministrador`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`idAdministrador`, `nombreAdmin`, `usuarioAdmin`, `pwAdmin`) VALUES
(1, 'Francisco Izurieta', 'admin', '$2y$10$nXfCxVyPD5M8nTsPR3Dk3.tBDBY2WZKrQqFuKXk7pGy/DjPkjNIKC');

-- --------------------------------------------------------

--
-- Table structure for table `carrera`
--

CREATE TABLE IF NOT EXISTS `carrera` (
  `idCarrera` int(11) NOT NULL AUTO_INCREMENT,
  `nombreCarrera` varchar(100) NOT NULL,
  `idFacultad` int(11) NOT NULL,
  PRIMARY KEY (`idCarrera`),
  KEY `idFacultad` (`idFacultad`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `carrera`
--

INSERT INTO `carrera` (`idCarrera`, `nombreCarrera`, `idFacultad`) VALUES
(1, 'Física', 1),
(2, 'Matemáticas', 1),
(3, 'Ingeniería Matemática', 1),
(4, 'Ingeniería en Ciencias Económicas y Financieras', 1),
(5, 'Ingeniería Empresarial', 2),
(6, 'Ingeniería de la Producción', 2),
(7, 'Ingeniería Civil', 3),
(8, 'Ingeniería Ambiental', 3),
(9, 'Ingeniería Eléctrica', 4),
(10, 'Ingeniería en Electrónica y Control', 4),
(11, 'Ingeniería en Electrónica y Redes de Información', 4),
(12, 'Ingeniería en Electrónica y Telecomunicaciones', 4),
(13, 'Ingeniería en Geología\r\n', 5),
(14, 'Ingeniería en Petróleos', 5),
(15, 'Ingenieria Mecanica', 6),
(16, 'Ingeniería Agroindustrial', 7),
(17, 'Ingeniería Química', 7),
(18, 'Ingeniería en Software', 8),
(19, 'Ingeniería en Computación', 8),
(20, 'Ingeniería en Sistemas Informaticos y de Computacion', 8),
(21, 'Tecnología en Electrónica y Telecomunicaciones', 9),
(22, 'Tecnología en Análisis de Sistemas Informáticos', 9),
(23, 'Tecnología en Electromecánica', 9),
(24, 'Tecnología en Agua y Saneamiento Ambiental', 9),
(25, 'Maestría en Física', 1),
(26, 'Maestría en Sistemas de Gestión Integrados', 2),
(27, 'Maestría en Gestión de Talento Humano', 2),
(28, 'Maestría en Ciencias de Ingeniería Eléctrica', 4),
(29, 'Maestría en Conectividad y Redes de Telecomunicaciones', 4),
(30, 'Maestría en Automatización y Control Electrónico Industrial', 4),
(31, 'Maestría en Administración de Negocios Eléctricos', 4),
(32, 'Maestría en Ingeniería Eléctrica en Distribución', 4),
(33, 'Maestría en Redes Eléctricas Inteligentes', 4),
(34, 'Maestria en Mecatronica y Robotica', 6),
(35, 'Maestria en Sistemas Automotrices', 6),
(36, 'Maestria en Diseño y Simulacion', 6),
(37, 'Programa Doctoral en Ciencias de la Mecanica', 6),
(38, 'Maestría y Especialista en Gestión de las Comunicaciones y Tecnología de la Información', 8),
(39, 'Maestría en Ciencias de la Computación', 8),
(40, 'Maestría en Sistemas de Información', 8),
(41, 'Doctorado en Informática', 8);

-- --------------------------------------------------------

--
-- Table structure for table `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
  `idComentario` int(11) NOT NULL AUTO_INCREMENT,
  `detalleComent` text NOT NULL,
  `idOA` int(11) NOT NULL,
  `idProfesor` int(11) NOT NULL,
  PRIMARY KEY (`idComentario`),
  KEY `idOA` (`idOA`),
  KEY `idProfesor` (`idProfesor`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `comentario`
--

INSERT INTO `comentario` (`idComentario`, `detalleComent`, `idOA`, `idProfesor`) VALUES
(1, 'Muy buen Objeto de Aprendizaje', 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `departamento`
--

CREATE TABLE IF NOT EXISTS `departamento` (
  `idDepartamento` int(11) NOT NULL AUTO_INCREMENT,
  `nombreDepartamento` varchar(100) NOT NULL,
  `idFacultad` int(11) NOT NULL,
  PRIMARY KEY (`idDepartamento`),
  KEY `idFacultad` (`idFacultad`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

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

CREATE TABLE IF NOT EXISTS `estudiante` (
  `idEstudiante` int(11) NOT NULL AUTO_INCREMENT,
  `cedulaEst` varchar(10) NOT NULL,
  `nombresEst` varchar(50) NOT NULL,
  `apellidosEst` varchar(50) NOT NULL,
  `correoEst` varchar(50) NOT NULL,
  `idCarrera` int(11) NOT NULL,
  `usuarioEst` varchar(15) NOT NULL,
  `pwEst` varchar(255) NOT NULL,
  PRIMARY KEY (`idEstudiante`),
  KEY `idCarrera` (`idCarrera`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `facultad`
--

CREATE TABLE IF NOT EXISTS `facultad` (
  `idFacultad` int(11) NOT NULL AUTO_INCREMENT,
  `nombreFacultad` varchar(100) NOT NULL,
  PRIMARY KEY (`idFacultad`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

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

CREATE TABLE IF NOT EXISTS `objetoaprendizaje` (
  `idOA` int(11) NOT NULL AUTO_INCREMENT,
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
  `idProfesor` int(11) NOT NULL,
  PRIMARY KEY (`idOA`),
  KEY `idProfesor` (`idProfesor`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `objetoaprendizaje`
--

INSERT INTO `objetoaprendizaje` (`idOA`, `ruta`, `nombre`, `autor`, `descripcion`, `fecha`, `p_clave`, `institucion`, `tamano`, `tipo`, `fecha_ing`, `ruta_zip`, `idProfesor`) VALUES
(2, 'oa/diseno_arquitectura/index.html', 'Diseño de la arquitectura de software', 'Graciela Moreno, Paola Guamanì, Gabriel Macias', 'Crear un objeto de aprendizaje que ayude como material de apoyo, o como recurso para un aprendizaje autodidacta de los diseños de arquitectura de software.', '2017-12-12', 'diseño, arquitectura', 'Escuela Politecnica Nacional', '154226 bytes', 'WinRAR ZIP', '2018-01-28 20:08:09', 'diseno_arquitectura.zip', 8);

-- --------------------------------------------------------

--
-- Table structure for table `profesor`
--

CREATE TABLE IF NOT EXISTS `profesor` (
  `idProfesor` int(11) NOT NULL AUTO_INCREMENT,
  `cedulaProf` varchar(10) NOT NULL,
  `nombresProf` varchar(50) NOT NULL,
  `apellidosProf` varchar(50) NOT NULL,
  `correoProf` varchar(50) NOT NULL,
  `idDepartamento` int(11) NOT NULL,
  `usuarioProf` varchar(15) NOT NULL,
  `pwProf` varchar(255) NOT NULL,
  PRIMARY KEY (`idProfesor`),
  KEY `idDepartamento` (`idDepartamento`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `profesor`
--

INSERT INTO `profesor` (`idProfesor`, `cedulaProf`, `nombresProf`, `apellidosProf`, `correoProf`, `idDepartamento`, `usuarioProf`, `pwProf`) VALUES
(8, '1723124564', 'Dario', 'Herrera', 'daro.wla@hotmail.es', 17, 'dario', '$2y$10$giPwvmBfUslrQRrpcjgEGOXpM5iQttdUozUCJG8Bad7aCbHbASIju'),
(10, '1725290343', 'Alexis', 'Guerrero', 'alexis.guerrero@epn.edu.ec', 19, 'alexis', '$2y$10$uQwP186XWpADxNAt/iC18e7Ku/WfiTsICuc5lySuOPb2lMD27X94u');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
