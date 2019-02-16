-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-02-2019 a las 19:05:20
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `estadias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acesor_empresarial`
--

CREATE TABLE `acesor_empresarial` (
  `Id_AEmpresarial` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Id_Empresa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `acesor_empresarial`
--

INSERT INTO `acesor_empresarial` (`Id_AEmpresarial`, `Nombre`, `Telefono`, `Correo`, `Id_Empresa`) VALUES
(1, 'David', '9981348327', 'ghost@gmail.com', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `MatriculaA` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `ApellidoP` varchar(50) DEFAULT NULL,
  `ApellidoM` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alumno`
--

INSERT INTO `alumno` (`MatriculaA`, `Nombre`, `ApellidoP`, `ApellidoM`, `Correo`, `Password`) VALUES
(1, 'David Alejandro', 'Salas', 'Romero', 'dasa.19983@gmail.com', 'davidsalas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `MatriculaD` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `ApellidoP` varchar(50) DEFAULT NULL,
  `ApellidoM` varchar(50) DEFAULT NULL,
  `Especialidad` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Password` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `docente`
--

INSERT INTO `docente` (`MatriculaD`, `Nombre`, `ApellidoP`, `ApellidoM`, `Especialidad`, `Correo`, `Password`) VALUES
(1, 'Mario', 'Lopez', 'Flores', 'Tic area sistemas', 'Mlopez@gmail.com', 'mario123');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `Id_Documentos` int(11) NOT NULL,
  `Id_Proyecto` int(11) DEFAULT NULL,
  `Doc_1` tinyint(4) DEFAULT NULL,
  `Doc_2` tinyint(4) DEFAULT NULL,
  `Doc_3` tinyint(4) DEFAULT NULL,
  `Doc_4` tinyint(4) DEFAULT NULL,
  `Doc_5` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `Id_Empresa` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Telefono` varchar(50) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`Id_Empresa`, `Nombre`, `Direccion`, `Telefono`, `Correo`) VALUES
(4, 'David', 'Tulum', '9981348327', 'dasa.19983@gmail.com'),
(5, 'Test 2', 'Test', '981348327', 'f@gmail.com'),
(6, 'Empresa Fantasma', 'Cancun', '9981348327', 'ghost@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto`
--

CREATE TABLE `proyecto` (
  `Id_Proyecto` int(11) NOT NULL,
  `Id_AEmpresarial` int(11) DEFAULT NULL,
  `NProyecto` varchar(50) DEFAULT NULL,
  `Descripcion` text,
  `Fecha_In` date DEFAULT NULL,
  `Fecha_Fin` date DEFAULT NULL,
  `MatriculaD` int(11) DEFAULT NULL,
  `MatriculaA` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acesor_empresarial`
--
ALTER TABLE `acesor_empresarial`
  ADD PRIMARY KEY (`Id_AEmpresarial`),
  ADD KEY `FK_acesor_empresarial_empresa` (`Id_Empresa`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`MatriculaA`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`MatriculaD`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`Id_Documentos`),
  ADD KEY `FK_documentos_proyecto` (`Id_Proyecto`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`Id_Empresa`);

--
-- Indices de la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`Id_Proyecto`),
  ADD KEY `FK_proyecto_acesor_empresarial` (`Id_AEmpresarial`),
  ADD KEY `FK_proyecto_docente` (`MatriculaD`),
  ADD KEY `FK_proyecto_alumno` (`MatriculaA`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acesor_empresarial`
--
ALTER TABLE `acesor_empresarial`
  MODIFY `Id_AEmpresarial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `alumno`
--
ALTER TABLE `alumno`
  MODIFY `MatriculaA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `docente`
--
ALTER TABLE `docente`
  MODIFY `MatriculaD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `Id_Documentos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `Id_Empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acesor_empresarial`
--
ALTER TABLE `acesor_empresarial`
  ADD CONSTRAINT `FK_acesor_empresarial_empresa` FOREIGN KEY (`Id_Empresa`) REFERENCES `empresa` (`Id_Empresa`);

--
-- Filtros para la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD CONSTRAINT `FK_documentos_proyecto` FOREIGN KEY (`Id_Proyecto`) REFERENCES `proyecto` (`Id_Proyecto`);

--
-- Filtros para la tabla `proyecto`
--
ALTER TABLE `proyecto`
  ADD CONSTRAINT `FK_proyecto_acesor_empresarial` FOREIGN KEY (`Id_AEmpresarial`) REFERENCES `acesor_empresarial` (`Id_AEmpresarial`),
  ADD CONSTRAINT `FK_proyecto_alumno` FOREIGN KEY (`MatriculaA`) REFERENCES `alumno` (`MatriculaA`),
  ADD CONSTRAINT `FK_proyecto_docente` FOREIGN KEY (`MatriculaD`) REFERENCES `docente` (`MatriculaD`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
