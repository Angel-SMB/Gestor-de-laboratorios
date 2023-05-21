-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2023 a las 23:32:10
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `proyecto_laboratorios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacitacion`
--

CREATE TABLE `capacitacion` (
  `id_capacitacion` int(11) NOT NULL,
  `nombre_capacitacion` varchar(100) NOT NULL,
  `duracion_capacitacion` int(11) NOT NULL,
  `nombre_instructor` varchar(100) NOT NULL,
  `tipo_capacitacion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `capacitacion`
--

INSERT INTO `capacitacion` (`id_capacitacion`, `nombre_capacitacion`, `duracion_capacitacion`, `nombre_instructor`, `tipo_capacitacion`) VALUES
(1, 'Seguridad industrial I', 4, 'Por asignar', 'Manejo de herramientas'),
(2, 'Hidráulica', 4, 'Por asignar', 'Manejo de herramientas'),
(3, 'Neumatica', 4, 'Por asignar', 'Manejo de herramientas'),
(4, 'Metrológia Eléctrica', 4, 'Por asignar', 'Manejo de herramientas'),
(5, 'Herramientas Manuales', 4, 'Por asignar', 'Manejo de herramientas'),
(6, 'Maquinas convencionales', 4, 'Por asignar', 'Manejo de herramientas'),
(7, 'Soldadura', 4, 'Por asignar', 'Manejo de herramientas'),
(8, 'Prototipado', 4, 'Por asignar', 'Manejo de herramientas'),
(9, 'Equipos de medición Eléctrica', 4, 'Por asignar', 'Manejo de herramientas'),
(10, 'Prototipado digital', 4, 'Por asignar', 'Manejo de herramientas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrera`
--

CREATE TABLE `carrera` (
  `id_carrera` int(11) NOT NULL,
  `nombre_carrera` varchar(200) NOT NULL,
  `sede_carrera` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `carrera`
--

INSERT INTO `carrera` (`id_carrera`, `nombre_carrera`, `sede_carrera`) VALUES
(1, 'Licenciatura en Ingeniería en Sistemas y Tecnologías de la Información Industrial', 'San José Chiapa'),
(2, 'Licenciatura en Ingeniería en Procesos y Gestión Industrial', 'San José Chiapa'),
(3, 'Licenciatura en Ingeniería en Automatización y Autotrónica', 'San José Chiapa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id_equipo` int(20) NOT NULL,
  `nombre_equipo` varchar(150) NOT NULL,
  `marca_equipo` varchar(15) NOT NULL,
  `modelo_equipo` varchar(45) NOT NULL,
  `tipo_equipo` varchar(100) NOT NULL,
  `descripcion_equipo` varchar(200) NOT NULL,
  `riesgo_equipo` varchar(20) NOT NULL,
  `id_laboratorio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id_equipo`, `nombre_equipo`, `marca_equipo`, `modelo_equipo`, `tipo_equipo`, `descripcion_equipo`, `riesgo_equipo`, `id_laboratorio`) VALUES
(1, 'Computadora 1', 'Dell', 'DDR4', 'Equipo de computo', 'Equipo con monitor, pantalla y mouse.', 'Bajo', 1),
(2, 'Cortadora laser', 'Sculpfun', 'S9', 'Maquina de grabado', 'Cortadora laser de alta precisión', 'Alto', 1),
(3, 'Pistola de soldadura', 'Brave', 'BVSLD-01', 'Soldadura', 'Pistola para soldar', 'Medio', 2),
(4, 'Computadora', 'HP', 'HP-465', 'Equipo de computo', 'Computadora de escritorio, con 8 GB de RAM, 1 TB de disco duro y un procesador Intel i3 de 11° Gen.', 'Bajo', 4),
(5, 'Laptop', 'Lenovo', 'C20-00', 'Computo', 'Equipo portatil de computo', 'Bajo', 3),
(6, 'Ninguno', '.', '.', '.', '.', '.', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo_capacitacion`
--

CREATE TABLE `equipo_capacitacion` (
  `id_equipo_capacitacion` int(11) NOT NULL,
  `id_equipo` int(11) NOT NULL,
  `id_capacitacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `equipo_capacitacion`
--

INSERT INTO `equipo_capacitacion` (`id_equipo_capacitacion`, `id_equipo`, `id_capacitacion`) VALUES
(4, 1, 9),
(1, 2, 1),
(2, 2, 5),
(5, 2, 8),
(3, 3, 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorio`
--

CREATE TABLE `laboratorio` (
  `id_laboratorio` int(11) NOT NULL,
  `nombre_laboratorio` varchar(100) NOT NULL,
  `ubicacion_laboratorio` varchar(150) NOT NULL,
  `nombre_responsable` varchar(150) NOT NULL,
  `observacion_laboratorio` varchar(400) NOT NULL,
  `tipo_laboratorio` varchar(45) NOT NULL,
  `estado_laboratorio` enum('Disponible','No disponible','Dañado','En revisión') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `laboratorio`
--

INSERT INTO `laboratorio` (`id_laboratorio`, `nombre_laboratorio`, `ubicacion_laboratorio`, `nombre_responsable`, `observacion_laboratorio`, `tipo_laboratorio`, `estado_laboratorio`) VALUES
(1, 'Cómputo básico', 'Chiapa 2 #224', 'Luis Martínez', 'Ninguna', 'Cómputo', 'Disponible'),
(2, 'Cómputo intermedio', 'Chiapa 2 #226', 'Luis Martínez', 'Ninguna', 'Cómputo', 'En revisión'),
(3, 'Makers', 'Chiapa 2 #229', 'Luis Martínez', 'Ninguna', 'Impresiones 3D', 'Dañado'),
(4, 'Laboratorio avanzado', 'Chiapa 2 #227', 'Luis Martínez', 'Ninguna', 'Soldadura', 'Disponible'),
(7, 'Prueba', 'Chiapa 2 #226', 'Juan Trujillo', 'En buen estado', 'Investigación', 'Disponible'),
(8, 'Prueba 3', '|a', 'as', '', '56', 'No disponible');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

CREATE TABLE `prestamo` (
  `id_prestamo` int(11) NOT NULL,
  `fecha_prestamo` date NOT NULL,
  `hora_inicio_prestamo` time NOT NULL,
  `hora_fin_prestamo` time NOT NULL,
  `observacion_prestamo` varchar(250) NOT NULL,
  `id_laboratorio` int(11) NOT NULL,
  `id_equipo` int(11) DEFAULT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `prestamo`
--

INSERT INTO `prestamo` (`id_prestamo`, `fecha_prestamo`, `hora_inicio_prestamo`, `hora_fin_prestamo`, `observacion_prestamo`, `id_laboratorio`, `id_equipo`, `id_usuario`) VALUES
(1, '2023-05-08', '08:00:00', '10:00:00', '', 1, 1, 8),
(2, '2023-05-17', '08:00:00', '10:00:00', 'Ninguna', 4, 4, 8),
(3, '2023-05-15', '10:00:00', '12:00:00', 'Encontre un equipo dañado', 2, 4, 8),
(4, '2023-05-18', '10:00:00', '09:00:00', '', 1, 1, 12),
(6, '2023-05-18', '10:00:00', '12:00:00', 'Requiero que los equipos cuenten con python 3.0 instalado', 1, 6, 12),
(9, '2023-05-24', '10:00:00', '12:00:00', '', 1, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `matricula` varchar(11) NOT NULL,
  `nombre_usuario` varchar(30) NOT NULL,
  `apellidos_usuario` varchar(30) NOT NULL,
  `correo_usuario` varchar(45) NOT NULL,
  `telefono_usuario` varchar(10) NOT NULL,
  `password_usuario` varchar(60) NOT NULL,
  `nss_usuario` varchar(12) NOT NULL,
  `id_carrera` int(11) NOT NULL,
  `rol` enum('0','1','2','3') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `matricula`, `nombre_usuario`, `apellidos_usuario`, `correo_usuario`, `telefono_usuario`, `password_usuario`, `nss_usuario`, `id_carrera`, `rol`) VALUES
(1, '202267533', 'Diego Angel', 'San Martín Gómez', 'diego.sanmarting@alumno.buap.mx', '2212535186', '$2y$10$3UkjMwW3alhq4zXe90ypaeaJYPFlsHktmDzLe/lvNH8z.deKaOj1K', '9489561', 1, '0'),
(2, '202223895', 'Ernesto', 'Hernández Velázquez', 'ernestoH@ernesto', '221321564', '$2y$10$Peppfrhd.SL/u1di89i22eo9ykHlgSVgV4mgIK6TW4QiVPYOpD7Hq', '89465156', 1, '2'),
(3, '202244929', 'Diana Sandra', 'Morales García', 'diana@diana', '2221356456', '1234', '99987863', 1, '3'),
(4, '202224664', 'Ernesto', 'Arroyo Reyes', 'ernestoA@ernestoA', '222135786', '1234', '99984743', 1, '3'),
(5, '202253071', 'María Zacil', 'Sánchez Juárez', 'Zacil@zacil', '221595644', '1234', '99987383', 1, '2'),
(6, '202238868', 'David', 'Flores Jerónimo', 'david@david', '222139846', '1234', '99936163', 2, '2'),
(8, '201907831', 'Diego', 'San Martin', 'diego.sanmartin@alumno.buap', '2221568798', '$2y$10$M/1I9RHTK92w9544FaIsBudTD3thuE/IMbLTongykintRokRlTOOy', '98765435', 1, '3'),
(10, 'admin', 'Admin', 'istrador', 'admin@admin', '2212515687', '$2y$10$5MfDmQruug30BivgM76JCeuX2Ri9z.ZZAjj9iINpUsK.SkxHinfSG', '', 1, '0'),
(11, 'Encargado', 'Encargado', 'prueba', 'encargado@prueba', '2212558694', '$2y$10$H783uSp8NfIz52GImtCwxuHKi8FGgX.yp9haPDOp1uf2HJoaDPdOm', '', 1, '1'),
(12, 'NSS529640', 'Diana Ivone', 'Tapia López', 'ivone.tapia@correo.buap.mx', '2224860704', '$2y$10$uJirFZxDnf8J1Tt2CD4H7uoA0kH5LK/NA80hoDs6l54QWeFdFMwf2', '8745634', 1, '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_capacitacion`
--

CREATE TABLE `usuario_capacitacion` (
  `id_usuario_capacitacion` int(11) NOT NULL,
  `fecha_fin_capacitacion` date NOT NULL,
  `tiempo_valido_capacitacion` int(3) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_capacitacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuario_capacitacion`
--

INSERT INTO `usuario_capacitacion` (`id_usuario_capacitacion`, `fecha_fin_capacitacion`, `tiempo_valido_capacitacion`, `id_usuario`, `id_capacitacion`) VALUES
(1, '2023-04-12', 1, 5, 9),
(3, '2023-05-31', 8, 3, 7),
(4, '2023-05-26', 2, 1, 7),
(6, '2023-05-17', 3, 8, 2),
(7, '2023-05-01', 2, 8, 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `capacitacion`
--
ALTER TABLE `capacitacion`
  ADD PRIMARY KEY (`id_capacitacion`);

--
-- Indices de la tabla `carrera`
--
ALTER TABLE `carrera`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id_equipo`),
  ADD KEY `id_laboratorio` (`id_laboratorio`);

--
-- Indices de la tabla `equipo_capacitacion`
--
ALTER TABLE `equipo_capacitacion`
  ADD PRIMARY KEY (`id_equipo_capacitacion`),
  ADD KEY `id_equipo` (`id_equipo`,`id_capacitacion`),
  ADD KEY `id_capacitación` (`id_capacitacion`),
  ADD KEY `id_capacitacion` (`id_capacitacion`);

--
-- Indices de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  ADD PRIMARY KEY (`id_laboratorio`);

--
-- Indices de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD PRIMARY KEY (`id_prestamo`),
  ADD KEY `id_equipo` (`id_equipo`,`id_usuario`),
  ADD KEY `id_laboratorio` (`id_laboratorio`,`id_equipo`,`id_usuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `id_carrera` (`id_carrera`);

--
-- Indices de la tabla `usuario_capacitacion`
--
ALTER TABLE `usuario_capacitacion`
  ADD PRIMARY KEY (`id_usuario_capacitacion`),
  ADD KEY `id_usuario` (`id_usuario`,`id_capacitacion`),
  ADD KEY `id_capacitacion` (`id_capacitacion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `capacitacion`
--
ALTER TABLE `capacitacion`
  MODIFY `id_capacitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `carrera`
--
ALTER TABLE `carrera`
  MODIFY `id_carrera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id_equipo` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `equipo_capacitacion`
--
ALTER TABLE `equipo_capacitacion`
  MODIFY `id_equipo_capacitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `laboratorio`
--
ALTER TABLE `laboratorio`
  MODIFY `id_laboratorio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `prestamo`
--
ALTER TABLE `prestamo`
  MODIFY `id_prestamo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuario_capacitacion`
--
ALTER TABLE `usuario_capacitacion`
  MODIFY `id_usuario_capacitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD CONSTRAINT `equipo_ibfk_1` FOREIGN KEY (`id_laboratorio`) REFERENCES `laboratorio` (`id_laboratorio`);

--
-- Filtros para la tabla `equipo_capacitacion`
--
ALTER TABLE `equipo_capacitacion`
  ADD CONSTRAINT `equipo_capacitacion_ibfk_1` FOREIGN KEY (`id_equipo`) REFERENCES `equipo` (`id_equipo`),
  ADD CONSTRAINT `equipo_capacitacion_ibfk_2` FOREIGN KEY (`id_capacitacion`) REFERENCES `capacitacion` (`id_capacitacion`);

--
-- Filtros para la tabla `prestamo`
--
ALTER TABLE `prestamo`
  ADD CONSTRAINT `prestamo_ibfk_4` FOREIGN KEY (`id_laboratorio`) REFERENCES `laboratorio` (`id_laboratorio`),
  ADD CONSTRAINT `prestamo_ibfk_5` FOREIGN KEY (`id_equipo`) REFERENCES `equipo` (`id_equipo`),
  ADD CONSTRAINT `prestamo_ibfk_6` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`id_carrera`) REFERENCES `carrera` (`id_carrera`);

--
-- Filtros para la tabla `usuario_capacitacion`
--
ALTER TABLE `usuario_capacitacion`
  ADD CONSTRAINT `usuario_capacitacion_ibfk_1` FOREIGN KEY (`id_capacitacion`) REFERENCES `capacitacion` (`id_capacitacion`),
  ADD CONSTRAINT `usuario_capacitacion_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
