-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-04-2017 a las 06:26:20
-- Versión del servidor: 5.6.26
-- Versión de PHP: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `erp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE IF NOT EXISTS `acceso` (
  `Id_A` int(11) NOT NULL,
  `AccesoUsuario` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Usuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `Contrasenia` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Tipo_Usuario` varchar(40) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `acceso`
--

INSERT INTO `acceso` (`Id_A`, `AccesoUsuario`, `Usuario`, `Contrasenia`, `Tipo_Usuario`) VALUES
(0, 'gerente', 'gerente@book', '1234', 'gerente'),
(1, 'auxiliar', 'auxiliar@book', '1234', 'auxiliar'),
(3, 'coordinador', 'coordinador@book', '1234', 'coordinador'),
(4, 'proveedor', 'porrua@book', '1234', 'proveedor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `checadorentrada`
--

CREATE TABLE IF NOT EXISTS `checadorentrada` (
  `idchecadorEntrada` int(11) NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL,
  `matricula` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `checadorentrada`
--

INSERT INTO `checadorentrada` (`idchecadorEntrada`, `hora`, `fecha`, `matricula`) VALUES
(1, '08:00:00', '2017-04-07', 100),
(2, '08:05:00', '2017-04-07', 101),
(15, '08:05:00', '2017-04-07', 102),
(16, '16:24:35', '2017-04-07', 105),
(17, '18:30:29', '2017-04-07', 107);

--
-- Disparadores `checadorentrada`
--
DELIMITER $$
CREATE TRIGGER `checadorentrada_AFTER_INSERT` AFTER INSERT ON `checadorentrada`
 FOR EACH ROW BEGIN
	IF(TIME_TO_SEC(TIME(NEW.hora)) > TIME_TO_SEC(cast('08:05:00' as time))) THEN
		UPDATE retardos SET numero = numero+1 WHERE matricula= NEW.matricula;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `checadorsalida`
--

CREATE TABLE IF NOT EXISTS `checadorsalida` (
  `idchecadorSalida` int(11) NOT NULL,
  `hora` time NOT NULL,
  `fecha` date NOT NULL,
  `matricula` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `checadorsalida`
--

INSERT INTO `checadorsalida` (`idchecadorSalida`, `hora`, `fecha`, `matricula`) VALUES
(1, '16:00:00', '2017-04-07', 100),
(2, '16:00:00', '2017-04-07', 101),
(3, '16:25:36', '2017-04-07', 105),
(4, '18:30:43', '2017-04-07', 107);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE IF NOT EXISTS `compras` (
  `Id_C` int(11) NOT NULL,
  `NombrePrC` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `CostoVentaPrC` decimal(10,0) NOT NULL,
  `CantidadPrC` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`Id_C`, `NombrePrC`, `CostoVentaPrC`, `CantidadPrC`) VALUES
(1, 'Silence', '300', 5),
(2, '¿Como programar en java?', '240', 3),
(3, 'Metro 274', '320', 6),
(4, 'El hábito de pensar', '165', 3),
(5, 'Rexa Guenas', '100', 1),
(7, 'Odisea', '100', 5),
(8, 'Divina comedia', '120', 5),
(9, 'Las mil y una noches', '160', 4),
(10, 'Don quijote de la mancha', '200', 4),
(11, 'Luna Nueva', '250', 6),
(12, 'Eclipse', '250', 6),
(13, 'Amanecer', '300', 5),
(14, 'Lestat el vampiro', '250', 5),
(15, 'La reina de los condenados', '250', 6),
(16, 'El ladrón de cuerpos', '300', 6),
(31, 'laa', '123', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `Id_Empleado` int(4) NOT NULL,
  `NombreE` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `DepartamentoE` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `PuestoE` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `EstudiosE` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `EdadE` int(11) NOT NULL,
  `DomicilioE` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `SueldoDiarioE` decimal(10,0) NOT NULL,
  `Sueldo_Semanal` decimal(10,2) NOT NULL,
  `Status` varchar(30) COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'Activo'
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`Id_Empleado`, `NombreE`, `DepartamentoE`, `PuestoE`, `EstudiosE`, `EdadE`, `DomicilioE`, `SueldoDiarioE`, `Sueldo_Semanal`, `Status`) VALUES
(100, 'Josue Saldivar ', 'Gerencia', 'Director ', 'Licenciatura', 38, 'Las Misiones de Peuelas', '80', '0.00', 'Activo'),
(101, 'Luis Alberto Gallegos Salgado', 'Ventas', 'Gerente de Ventas', 'Licenciatura', 20, 'La piedad', '40', '0.00', 'Activo'),
(102, 'Maleny Vianey Vazquez Sandoval', 'Auxiliar', 'Gerente Auxiliar', 'Licenciatura', 24, 'Los arcos', '30', '0.00', 'Activo'),
(105, 'Dulce Carolina Santiago Bick', 'Sistemas', 'Sistemas y mercadotecnia', 'Licenciatura', 20, 'Las Misiones', '40', '0.00', 'Activo'),
(106, 'Jose Omar Ugalde Lopez', 'Sistemas', 'Programador', 'Licenciatura', 21, 'San pedro lejos', '40', '0.00', 'Activo'),
(107, 'Maria Veronica ', 'Mercadotecnia', 'Gerente de Mercadotecnia', 'Licenciatura', 21, 'El cimatario', '10', '0.00', 'Activo'),
(108, 'Jorge Villanueva', 'Sistemas', 'Asistente', 'Licenciatura', 25, 'Los coyotes de san juan', '20', '0.00', 'Inactivo'),
(109, 'Ivan', 'Sistemas', 'Barrendero', 'Licenciatura', 30, 'Las Misiones', '5', '0.00', 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `faltas`
--

CREATE TABLE IF NOT EXISTS `faltas` (
  `idfaltas` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `matricula` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `faltas`
--

INSERT INTO `faltas` (`idfaltas`, `numero`, `matricula`) VALUES
(1, 2, 100),
(2, 0, 101),
(3, 0, 102),
(4, 0, 105),
(5, 0, 106),
(6, 0, 107),
(7, 0, 108);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE IF NOT EXISTS `inventario` (
  `Id_I` int(11) NOT NULL,
  `CantTotalPrVe` int(11) NOT NULL,
  `CantTotalPrCo` int(11) NOT NULL,
  `ProductoVen` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `ProductoCo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `NoSeriePrIn` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`Id_I`, `CantTotalPrVe`, `CantTotalPrCo`, `ProductoVen`, `ProductoCo`, `NoSeriePrIn`) VALUES
(1, 3, 2, 'Hush hush', 'Cresendo', 123),
(2, 1, 2, 'El truco mas difícil del mundo', 'Romeo & Julieta', 124),
(3, 2, 1, 'Sueños de una noche de verano', 'El psicoanalíta', 125),
(4, 1, 2, 'Los cuatro acuerdos', 'Crepúsculo', 126),
(5, 1, 4, 'Silence', 'Entrevista con el vampiro', 127),
(6, 3, 2, 'Hush hush', 'Cresendo', 123),
(7, 1, 2, 'El truco mas difícil del mundo', 'Romeo & Julieta', 124),
(8, 2, 1, 'Sueños de una noche de verano', 'El psicoanalíta', 125),
(9, 1, 2, 'Los cuatro acuerdos', 'Crepúsculo', 126),
(10, 1, 4, 'Silence', 'Entrevista con el vampiro', 127);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `Id_p` int(11) NOT NULL,
  `NombreP` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `NoSerieP` int(10) NOT NULL,
  `CantidadP` int(10) NOT NULL,
  `CostoVentaP` decimal(10,0) NOT NULL,
  `CostoCompraP` decimal(10,0) NOT NULL,
  `FechaIngreso` date NOT NULL,
  `FechaSalidaP` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id_p`, `NombreP`, `NoSerieP`, `CantidadP`, `CostoVentaP`, `CostoCompraP`, `FechaIngreso`, `FechaSalidaP`) VALUES
(32, 'Choque de Reyes', 8574, 49, '250', '350', '2017-03-06', '2017-04-07'),
(33, 'Festin de Cuervos', 8758, 37, '250', '350', '2017-03-06', '2017-04-07'),
(34, 'Tromenta de Espadas', 8765, 58, '250', '350', '2017-03-06', '2017-04-07'),
(35, 'Los tres puerquitos', 777777, 5, '200', '500', '2017-04-07', '0000-00-00');

--
-- Disparadores `productos`
--
DELIMITER $$
CREATE TRIGGER `actualizar` BEFORE UPDATE ON `productos`
 FOR EACH ROW SET @CantidaP = @CantidaP + 5
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `id_proveedor` int(4) NOT NULL,
  `Serie` int(6) NOT NULL,
  `NombreLibro` varchar(50) COLLATE latin1_spanish_ci NOT NULL,
  `PrecioLibro` float(11,0) NOT NULL,
  `CantidadLib` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `Serie`, `NombreLibro`, `PrecioLibro`, `CantidadLib`) VALUES
(2, 145875, 'Revelaciones Sol', 321, 300),
(3, 446588, 'Jueces', 359, 800),
(4, 542185, 'La biblia de los caidos Tomo 0', 159, 894),
(5, 254832, 'La biblia de los caidos: El libro de Sombra Tomo 1', 265, 968),
(6, 415598, 'La biblia de los caidos: El libro del Gris Tomo 1', 241, 993),
(7, 745896, 'La biblia de los caidos: El libro de Mad Tomo 1', 254, 938),
(8, 985214, 'La biblia de los caidos: El libro de Nilia Tomo 1', 125, 997),
(9, 458762, 'La biblia de los caidos: El libro del Gris Tomo 2', 321, 998),
(10, 452198, 'La biblia de los caidos: El libro de Jon Tomo 1', 145, 998),
(11, 458712, 'El señor de los anillos:La comunidad del anillo', 369, 998),
(12, 754158, 'El señor de los anillos:El retorno del rey', 350, 1000),
(13, 145741, 'El señor de los anillos:Las dos torres', 259, 1000),
(14, 254852, 'La divina comedia:Infierno', 321, 1000),
(15, 245715, 'La divina comedia:Purgatorio', 299, 1000),
(16, 695421, 'La divina comedia:Paraiso', 321, 1000),
(17, 124051, 'Cazadores de sombras: Ciudad de Hueso', 125, 1000),
(18, 254785, 'Cazadores de sombras: Ciudad de Ceniza', 185, 1000),
(19, 652148, 'Cazadores de sombras: Ciudad de Cristal', 195, 1000),
(20, 475125, 'Cazadores de sombras: Ciudad de los Angeles caidos', 175, 1000),
(21, 954215, 'Cazadores de sombras: Ciudad de las Almas perdidas', 174, 1000),
(22, 154685, 'Cazadores de sombras: Ciudad del Fuego celestial', 254, 1000),
(23, 487514, 'Amar, comer y reza', 241, 1000),
(24, 154852, 'Uno siempre cambia al amor de su vida ', 123, 1000),
(25, 365472, 'Casa de muñecas', 218, 1000),
(26, 415742, 'Edipo rey', 35, 1000),
(27, 164485, 'Heroes de Grecia', 24, 1000),
(28, 965225, 'La iliada', 58, 1000),
(29, 954485, 'La odisea', 69, 1000),
(30, 457741, 'Ramayana', 15, 1000),
(31, 774581, 'Las mil y una noches', 129, 1000),
(32, 441221, 'Historias de la selva', 41, 1000),
(33, 225412, 'Cien años de soledad', 100, 1000),
(34, 621235, 'Lagrimas de un Angel', 124, 1000),
(35, 774589, 'El perfume', 203, 1000),
(36, 441552, 'V for Vendetta', 326, 1000),
(37, 662125, 'Hush, Hush', 121, 1000),
(38, 123321, 'Hush, Hush: Crescendo', 129, 1000),
(39, 456658, 'Hush, Hush: Silence', 154, 1000),
(40, 951456, 'Hush, Hush Finale', 169, 1000),
(41, 789512, 'Hush, Hush: Calabozos de Langeais', 188, 1000),
(42, 854695, 'Oscuros', 174, 1000),
(43, 654236, 'Oscuros: El poder de las sombras', 196, 1000),
(44, 741589, 'Oscuros: La trampa del amor', 166, 1000),
(45, 965245, 'Oscuros: La primera maldición', 184, 1000),
(46, 458752, 'Oscuros: Unforgiven', 210, 1000),
(47, 451256, 'Oscuros: La eternidad y un día', 199, 1000),
(48, 748574, 'Orgullo y Prejuicio', 350, 1000),
(49, 852585, 'Mujercitas', 126, 1000),
(50, 485623, 'El otro lado de la puerta', 36, 1000),
(51, 435621, 'Ghostgirl:CanciÃ³n de Cuna', 432, 1002),
(53, 666666, 'Ghostgirl: Loca por amor', 530, 1000),
(54, 888888, 'Dulce', 89, 100);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `retardos`
--

CREATE TABLE IF NOT EXISTS `retardos` (
  `idretardos` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `matricula` int(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `retardos`
--

INSERT INTO `retardos` (`idretardos`, `numero`, `matricula`) VALUES
(1, 4, 100),
(2, 0, 101),
(3, 0, 102),
(4, 1, 105),
(5, 0, 106),
(6, 1, 107),
(7, 0, 108);

--
-- Disparadores `retardos`
--
DELIMITER $$
CREATE TRIGGER `retardos_AFTER_UPDATE` AFTER UPDATE ON `retardos`
 FOR EACH ROW BEGIN
	IF(mod(NEW.numero,2) = 0) THEN
			UPDATE faltas SET numero = numero+1 WHERE matricula= OLD.matricula;
	END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendidos`
--

CREATE TABLE IF NOT EXISTS `vendidos` (
  `idvendidos` int(11) NOT NULL,
  `CantidadVend` int(11) DEFAULT NULL,
  `Fecha_Salid` date DEFAULT NULL,
  `matricula` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `vendidos`
--

INSERT INTO `vendidos` (`idvendidos`, `CantidadVend`, `Fecha_Salid`, `matricula`) VALUES
(1, 1, '2017-04-07', 8765),
(2, 1, '2017-04-07', 8574),
(3, 1, '2017-04-07', 8758),
(4, 1, '2017-04-07', 8758),
(5, 1, '2017-04-07', 8765);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE IF NOT EXISTS `venta` (
  `id_Venta` int(11) NOT NULL,
  `CantidadV` int(11) DEFAULT NULL,
  `NoSerie` int(11) DEFAULT NULL,
  `Fecha_Salida` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `Id_V` int(11) NOT NULL,
  `FechaSalidaPrV` date NOT NULL,
  `CostoVentaPrV` decimal(10,0) NOT NULL,
  `NombrePrV` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `CantidadPrV` int(11) NOT NULL,
  `NoSeriePrV` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`Id_V`, `FechaSalidaPrV`, `CostoVentaPrV`, `NombrePrV`, `CantidadPrV`, `NoSeriePrV`) VALUES
(2, '2017-02-01', '259', 'Hush hush', 1, 1),
(3, '2017-01-25', '150', 'Sueños de una noche de verano', 1, 3),
(4, '2017-02-16', '100', 'Cumbres borrascosas', 1, 2),
(5, '2017-01-31', '259', 'Hush hush', 1, 1),
(6, '2017-02-24', '100', 'El truco mas difícil del mundo', 1, 5),
(12, '2017-03-02', '300', 'Merick', 1, 7),
(13, '2017-01-02', '300', 'Menmoch el diablo', 1, 6),
(14, '2017-01-01', '1', 'Sangre y oro', 300, 8),
(15, '2017-02-02', '1', 'Sangre y oro', 300, 8),
(16, '2017-03-01', '1', 'El santurario', 300, 9),
(17, '2017-02-14', '1', 'Cántico de sangre', 300, 10),
(18, '2017-02-28', '1', 'Cántico de sangre', 300, 10),
(19, '2017-01-16', '1', 'El príncipe Lestat', 300, 11),
(20, '2017-02-04', '1', 'Metro 2033', 295, 13),
(21, '2017-03-02', '2', 'Final', 250, 15),
(22, '2017-03-02', '300', 'Merick', 1, 7),
(23, '2017-01-02', '300', 'Menmoch el diablo', 1, 6),
(24, '2017-01-01', '1', 'Sangre y oro', 300, 8),
(25, '2017-02-02', '1', 'Sangre y oro', 300, 8),
(26, '2017-03-01', '1', 'El santurario', 300, 9),
(27, '2017-02-14', '1', 'Cántico de sangre', 300, 10),
(28, '2017-02-28', '1', 'Cántico de sangre', 300, 10),
(29, '2017-01-16', '1', 'El príncipe Lestat', 300, 11),
(30, '2017-02-04', '1', 'Metro 2033', 295, 13),
(31, '2017-03-02', '2', 'Final', 250, 15);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`Id_A`);

--
-- Indices de la tabla `checadorentrada`
--
ALTER TABLE `checadorentrada`
  ADD PRIMARY KEY (`idchecadorEntrada`),
  ADD KEY `matricula` (`matricula`);

--
-- Indices de la tabla `checadorsalida`
--
ALTER TABLE `checadorsalida`
  ADD PRIMARY KEY (`idchecadorSalida`),
  ADD KEY `matricula` (`matricula`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`Id_C`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`Id_Empleado`);

--
-- Indices de la tabla `faltas`
--
ALTER TABLE `faltas`
  ADD PRIMARY KEY (`idfaltas`),
  ADD KEY `matricula` (`matricula`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`Id_I`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id_p`),
  ADD UNIQUE KEY `NoSerieP` (`NoSerieP`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`),
  ADD UNIQUE KEY `Serie` (`Serie`),
  ADD UNIQUE KEY `NombreLibro` (`NombreLibro`);

--
-- Indices de la tabla `retardos`
--
ALTER TABLE `retardos`
  ADD PRIMARY KEY (`idretardos`),
  ADD KEY `matricula` (`matricula`);

--
-- Indices de la tabla `vendidos`
--
ALTER TABLE `vendidos`
  ADD PRIMARY KEY (`idvendidos`),
  ADD KEY `matricula3` (`matricula`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_Venta`),
  ADD KEY `NoSerie` (`NoSerie`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`Id_V`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acceso`
--
ALTER TABLE `acceso`
  MODIFY `Id_A` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `checadorentrada`
--
ALTER TABLE `checadorentrada`
  MODIFY `idchecadorEntrada` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `checadorsalida`
--
ALTER TABLE `checadorsalida`
  MODIFY `idchecadorSalida` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `Id_C` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `Id_Empleado` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=110;
--
-- AUTO_INCREMENT de la tabla `faltas`
--
ALTER TABLE `faltas`
  MODIFY `idfaltas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `Id_I` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id_p` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT de la tabla `retardos`
--
ALTER TABLE `retardos`
  MODIFY `idretardos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `vendidos`
--
ALTER TABLE `vendidos`
  MODIFY `idvendidos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_Venta` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `Id_V` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `checadorentrada`
--
ALTER TABLE `checadorentrada`
  ADD CONSTRAINT `matricula` FOREIGN KEY (`matricula`) REFERENCES `empleados` (`Id_Empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `checadorsalida`
--
ALTER TABLE `checadorsalida`
  ADD CONSTRAINT `matricula0` FOREIGN KEY (`matricula`) REFERENCES `empleados` (`Id_Empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `faltas`
--
ALTER TABLE `faltas`
  ADD CONSTRAINT `matricula2` FOREIGN KEY (`matricula`) REFERENCES `empleados` (`Id_Empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `retardos`
--
ALTER TABLE `retardos`
  ADD CONSTRAINT `matricula1` FOREIGN KEY (`matricula`) REFERENCES `empleados` (`Id_Empleado`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vendidos`
--
ALTER TABLE `vendidos`
  ADD CONSTRAINT `matricula3` FOREIGN KEY (`matricula`) REFERENCES `productos` (`NoSerieP`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
