-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-10-2020 a las 21:39:54
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `diseno_sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora_mantenimiento`
--

CREATE TABLE `bitacora_mantenimiento` (
  `codbitacora` int(11) NOT NULL,
  `codmantenimiento` int(11) NOT NULL,
  `codequipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `codcliente` int(11) NOT NULL,
  `nombre` varchar(120) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `telefeno` varchar(20) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `experiencia` varchar(150) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipos`
--

CREATE TABLE `equipos` (
  `codequipo` int(11) NOT NULL,
  `codtipo_equipo` int(11) NOT NULL,
  `codpropietario` int(11) NOT NULL,
  `nombre` varchar(120) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento`
--

CREATE TABLE `mantenimiento` (
  `codmantenimiento` int(11) NOT NULL,
  `codtipo_mant` int(11) NOT NULL,
  `fecha` varchar(20) DEFAULT NULL,
  `valor_mantenimiento` varchar(20) DEFAULT NULL,
  `descripcion` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietario`
--

CREATE TABLE `propietario` (
  `codpropietario` int(11) NOT NULL,
  `nombre` varchar(120) DEFAULT NULL,
  `direccion` varchar(150) DEFAULT NULL,
  `telefeno` varchar(20) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `experiencia` varchar(150) DEFAULT NULL,
  `estado` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `propietario`
--

INSERT INTO `propietario` (`codpropietario`, `nombre`, `direccion`, `telefeno`, `fecha_nacimiento`, `experiencia`, `estado`) VALUES
(1, 'Miguel Tejada', 'Santiago, Villa Flores', '8098557878', '2018-07-09', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. ', 'A'),
(2, 'Alberto', 'La Vega', '809-573-4848', '1980-12-01', 'Es una prueba', 'I'),
(3, 'Juan', 'Primavera', '809555555', '2020-07-14', 'novato', 'I'),
(4, 'sdasd', 'sdasd', '', '2020-07-29', ' Descrisdasdpcion Experiencia ', 'I'),
(5, 'Angelo Lopez', 'La Vega', '809-573-4545', '2020-07-28', 'Es programador junior', 'A'),
(6, 'Carlo Diaz', 'La VEga', '809-242-4545', '2020-07-20', ' Ninguna ', 'A'),
(7, 'ssdf', 'sdfsdf', 'dsfsdfd', '2020-07-27', 'dfdsfsd', 'A'),
(8, 'ssdf', 'sdfsdf', 'dsfsdfd', '2020-07-27', 'dfdsfsd', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_equipo`
--

CREATE TABLE `tipo_equipo` (
  `codtipo_equipo` int(11) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL,
  `comentario` text NOT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_mantenimiento`
--

CREATE TABLE `tipo_mantenimiento` (
  `codtipo_mant` int(11) NOT NULL,
  `descripcion` varchar(20) DEFAULT NULL,
  `comentario` text NOT NULL,
  `estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_mantenimiento`
--

INSERT INTO `tipo_mantenimiento` (`codtipo_mant`, `descripcion`, `comentario`, `estado`) VALUES
(2, 'prueba  ', 'prueba', 'A'),
(3, 'prueba', 'prueba', 'A'),
(4, 'prueba', 'prueba', 'A'),
(8, 'PRUEBA 8.5', 'PRUEBA 8.5', 'A'),
(10, 'as', 'as', 'A'),
(11, 'a ', 'prueba', 'A'),
(12, 'a  ', 'prueba222', 'A'),
(14, 'asas', 'asasssa', 'A'),
(15, 'prueba', 'prueba', 'A'),
(16, 'asda', 'asdasasd', 'A'),
(18, 'Prueba 10', 'Ojo prueba 10', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tripulacion`
--

CREATE TABLE `tripulacion` (
  `codtribulacion` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `direccion` varchar(20) DEFAULT NULL,
  `telefeno` varchar(20) DEFAULT NULL,
  `num_horas` varchar(20) DEFAULT NULL,
  `valor_hora` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `codusuarios` int(11) NOT NULL,
  `NombreC` varchar(70) NOT NULL,
  `Correo` varchar(30) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `viajes`
--

CREATE TABLE `viajes` (
  `codviaje` int(11) NOT NULL,
  `valor_viaje` varchar(20) DEFAULT NULL,
  `ruta_viaje` varchar(20) DEFAULT NULL,
  `codcliente` int(11) NOT NULL,
  `codequipo` int(11) NOT NULL,
  `codtribulacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora_mantenimiento`
--
ALTER TABLE `bitacora_mantenimiento`
  ADD PRIMARY KEY (`codbitacora`),
  ADD KEY `codequipo` (`codequipo`),
  ADD KEY `codmantenimiento` (`codmantenimiento`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codcliente`);

--
-- Indices de la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD PRIMARY KEY (`codequipo`),
  ADD KEY `codpropietario` (`codpropietario`),
  ADD KEY `codtipo_equipo` (`codtipo_equipo`);

--
-- Indices de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD PRIMARY KEY (`codmantenimiento`),
  ADD KEY `codtipo_mant` (`codtipo_mant`);

--
-- Indices de la tabla `propietario`
--
ALTER TABLE `propietario`
  ADD PRIMARY KEY (`codpropietario`);

--
-- Indices de la tabla `tipo_equipo`
--
ALTER TABLE `tipo_equipo`
  ADD PRIMARY KEY (`codtipo_equipo`);

--
-- Indices de la tabla `tipo_mantenimiento`
--
ALTER TABLE `tipo_mantenimiento`
  ADD PRIMARY KEY (`codtipo_mant`);

--
-- Indices de la tabla `tripulacion`
--
ALTER TABLE `tripulacion`
  ADD PRIMARY KEY (`codtribulacion`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`codusuarios`);

--
-- Indices de la tabla `viajes`
--
ALTER TABLE `viajes`
  ADD PRIMARY KEY (`codviaje`),
  ADD KEY `codequipo` (`codequipo`),
  ADD KEY `codcliente` (`codcliente`),
  ADD KEY `codtribulacion` (`codtribulacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `codcliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `equipos`
--
ALTER TABLE `equipos`
  MODIFY `codequipo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  MODIFY `codmantenimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `propietario`
--
ALTER TABLE `propietario`
  MODIFY `codpropietario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tipo_equipo`
--
ALTER TABLE `tipo_equipo`
  MODIFY `codtipo_equipo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_mantenimiento`
--
ALTER TABLE `tipo_mantenimiento`
  MODIFY `codtipo_mant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `tripulacion`
--
ALTER TABLE `tripulacion`
  MODIFY `codtribulacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `codusuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `viajes`
--
ALTER TABLE `viajes`
  MODIFY `codviaje` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bitacora_mantenimiento`
--
ALTER TABLE `bitacora_mantenimiento`
  ADD CONSTRAINT `bitacora_mantenimiento_ibfk_1` FOREIGN KEY (`codequipo`) REFERENCES `equipos` (`codequipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `bitacora_mantenimiento_ibfk_2` FOREIGN KEY (`codmantenimiento`) REFERENCES `mantenimiento` (`codmantenimiento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `equipos`
--
ALTER TABLE `equipos`
  ADD CONSTRAINT `equipos_ibfk_1` FOREIGN KEY (`codpropietario`) REFERENCES `propietario` (`codpropietario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `equipos_ibfk_2` FOREIGN KEY (`codtipo_equipo`) REFERENCES `tipo_equipo` (`codtipo_equipo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD CONSTRAINT `mantenimiento_ibfk_1` FOREIGN KEY (`codtipo_mant`) REFERENCES `tipo_mantenimiento` (`codtipo_mant`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `viajes`
--
ALTER TABLE `viajes`
  ADD CONSTRAINT `viajes_ibfk_1` FOREIGN KEY (`codequipo`) REFERENCES `equipos` (`codequipo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `viajes_ibfk_2` FOREIGN KEY (`codcliente`) REFERENCES `clientes` (`codcliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `viajes_ibfk_3` FOREIGN KEY (`codtribulacion`) REFERENCES `tripulacion` (`codtribulacion`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
