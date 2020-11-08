-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3310
-- Tiempo de generación: 17-10-2020 a las 16:39:36
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `desarrollo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area_rh`
--

CREATE TABLE `area_rh` (
  `ID_areaRH` int(11) NOT NULL,
  `area` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID_categoria` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`ID_categoria`, `categoria`) VALUES
(1, 'Audio\r\n'),
(2, 'Telefonia\r\n'),
(3, 'Juego de video\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ID_cliente` int(11) NOT NULL,
  `Cliente` varchar(150) NOT NULL,
  `Apellido` varchar(150) NOT NULL,
  `Nit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dat_ingreso`
--

CREATE TABLE `dat_ingreso` (
  `ID_dat` int(11) NOT NULL,
  `Correo` varchar(200) NOT NULL,
  `Contrasenia` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `dat_ingreso`
--

INSERT INTO `dat_ingreso` (`ID_dat`, `Correo`, `Contrasenia`) VALUES
(1, 'Mackgeryla@outlook.com', 'Mc0511'),
(2, 'Max@gmail.com', 'Mx0511');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_us`
--

CREATE TABLE `detalle_us` (
  `ID_det` int(11) NOT NULL,
  `ID_usuario` int(11) NOT NULL,
  `ID_puesto` int(11) NOT NULL,
  `ID_Modulo` int(11) NOT NULL,
  `Salario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle_us`
--

INSERT INTO `detalle_us` (`ID_det`, `ID_usuario`, `ID_puesto`, `ID_Modulo`, `Salario`) VALUES
(1, 3, 2, 1, 3500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `ID_factura` int(11) NOT NULL,
  `ID_cliente` int(11) NOT NULL,
  `ID_empleado` int(11) NOT NULL,
  `ID_producto` int(11) NOT NULL,
  `Precio` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `ID_modulo` int(11) NOT NULL,
  `Modulo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`ID_modulo`, `Modulo`) VALUES
(1, 'Contabilidad'),
(2, 'RRHH\r\n'),
(3, 'Ventas\r\n'),
(4, 'Inventariios\r\n'),
(5, 'Cuentas por pagar\r\n'),
(6, 'Cuentas por cobrar\r\n'),
(7, 'Gestion de usuarios\r\n');

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `muestra_usuarios`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `muestra_usuarios` (
`ID_det` int(11)
,`ID_usuario` int(11)
,`ID_puesto` int(11)
,`ID_modulo` int(11)
,`Salario` int(11)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_rh`
--

CREATE TABLE `personal_rh` (
  `ID_RH` int(11) NOT NULL,
  `ID_puesto` int(11) NOT NULL,
  `ID_areaRH` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_ventas`
--

CREATE TABLE `personal_ventas` (
  `ID_empleado` int(11) NOT NULL,
  `ID_puesto` int(11) NOT NULL,
  `Nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `postulantes`
--

CREATE TABLE `postulantes` (
  `ID_postulante` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ID_producto` int(11) NOT NULL,
  `Producto` varchar(100) NOT NULL,
  `ID_categoria` int(11) NOT NULL,
  `Precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`ID_producto`, `Producto`, `ID_categoria`, `Precio`) VALUES
(1, 'Audifonos\r\n', 1, 100),
(2, 'Bocina\r\n', 1, 450),
(3, 'Cargador\r\n', 2, 75),
(4, 'Funda\r\n', 2, 50),
(5, 'Peach Castle\r\n', 3, 300),
(6, 'Pokemon rubi', 3, 450),
(7, 'Pokemon safiro', 3, 450),
(8, 'vidrio templado', 2, 40);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `productos`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `productos` (
`ID_producto` int(11)
,`Producto` varchar(100)
,`categoria` varchar(100)
,`Precio` int(11)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puestos`
--

CREATE TABLE `puestos` (
  `ID_puesto` int(11) NOT NULL,
  `Nombre_pues` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `puestos`
--

INSERT INTO `puestos` (`ID_puesto`, `Nombre_pues`) VALUES
(1, 'Tecnico\r\n'),
(2, 'Supervisor\r\n'),
(3, 'Administrador\r\n'),
(4, 'Operador contable\r\n'),
(5, 'Personal RRHH\r\n'),
(6, 'Vendedor\r\n'),
(7, 'Auditor\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tramite_rh`
--

CREATE TABLE `tramite_rh` (
  `ID_tramite` int(11) NOT NULL,
  `ID_puesto` int(11) NOT NULL,
  `ID_RH` int(11) NOT NULL,
  `ID_areaRH` int(11) NOT NULL,
  `asociado` varchar(100) NOT NULL,
  `postulante` varchar(100) NOT NULL,
  `detalle` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_usuario` int(11) NOT NULL,
  `ID_dat` int(11) NOT NULL,
  `Usuario` varchar(150) NOT NULL,
  `Nombre` varchar(150) NOT NULL,
  `Apellido` varchar(150) NOT NULL,
  `Correo` varchar(150) NOT NULL,
  `Contrasenia` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID_usuario`, `ID_dat`, `Usuario`, `Nombre`, `Apellido`, `Correo`, `Contrasenia`) VALUES
(1, 1, 'Mack05\r\n', 'Mackgery\r\n', 'Lopez\r\n', 'Mackgeryla@outlook.com\r\n', 'Mc0511\r\n'),
(2, 2, 'Max11\r\n', 'Madickson\r\n', 'Lopez\r\n', 'Max@gmail.com\r\n', 'Mx0511\r\n'),
(3, 0, 'Andy03', 'Andy', 'Vela', 'Andy@outlook.com', '54321'),
(4, 0, 'AngelCast', 'Angel', 'Castañeda', 'AngelCas@gmail.com', 'nv0112'),
(5, 0, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura para la vista `muestra_usuarios`
--
DROP TABLE IF EXISTS `muestra_usuarios`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `muestra_usuarios`  AS  select `detalle_us`.`ID_det` AS `ID_det`,`detalle_us`.`ID_usuario` AS `ID_usuario`,`detalle_us`.`ID_puesto` AS `ID_puesto`,`detalle_us`.`ID_Modulo` AS `ID_modulo`,`detalle_us`.`Salario` AS `Salario` from `detalle_us` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `productos`
--
DROP TABLE IF EXISTS `productos`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `productos`  AS  select `producto`.`ID_producto` AS `ID_producto`,`producto`.`Producto` AS `Producto`,`c`.`categoria` AS `categoria`,`producto`.`Precio` AS `Precio` from (`producto` join `categoria` `c` on(`producto`.`ID_categoria` = `c`.`ID_categoria`)) ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area_rh`
--
ALTER TABLE `area_rh`
  ADD PRIMARY KEY (`ID_areaRH`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID_categoria`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID_cliente`);

--
-- Indices de la tabla `dat_ingreso`
--
ALTER TABLE `dat_ingreso`
  ADD PRIMARY KEY (`ID_dat`);

--
-- Indices de la tabla `detalle_us`
--
ALTER TABLE `detalle_us`
  ADD PRIMARY KEY (`ID_det`),
  ADD KEY `ID_puesto` (`ID_puesto`),
  ADD KEY `ID_Modulo` (`ID_Modulo`),
  ADD KEY `ID_usuario` (`ID_usuario`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`ID_factura`),
  ADD KEY `ID_cliente` (`ID_cliente`),
  ADD KEY `ID_empleado` (`ID_empleado`),
  ADD KEY `ID_producto` (`ID_producto`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`ID_modulo`);

--
-- Indices de la tabla `personal_rh`
--
ALTER TABLE `personal_rh`
  ADD PRIMARY KEY (`ID_RH`),
  ADD KEY `ID_puesto` (`ID_puesto`),
  ADD KEY `ID_areaRH` (`ID_areaRH`);

--
-- Indices de la tabla `personal_ventas`
--
ALTER TABLE `personal_ventas`
  ADD PRIMARY KEY (`ID_empleado`),
  ADD KEY `ID_puesto` (`ID_puesto`);

--
-- Indices de la tabla `postulantes`
--
ALTER TABLE `postulantes`
  ADD PRIMARY KEY (`ID_postulante`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ID_producto`),
  ADD KEY `ID_categoria` (`ID_categoria`);

--
-- Indices de la tabla `puestos`
--
ALTER TABLE `puestos`
  ADD PRIMARY KEY (`ID_puesto`);

--
-- Indices de la tabla `tramite_rh`
--
ALTER TABLE `tramite_rh`
  ADD PRIMARY KEY (`ID_tramite`),
  ADD KEY `ID_puesto` (`ID_puesto`),
  ADD KEY `ID_RH` (`ID_RH`),
  ADD KEY `ID_areaRH` (`ID_areaRH`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_usuario`),
  ADD KEY `ID_dat` (`ID_dat`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area_rh`
--
ALTER TABLE `area_rh`
  MODIFY `ID_areaRH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `dat_ingreso`
--
ALTER TABLE `dat_ingreso`
  MODIFY `ID_dat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalle_us`
--
ALTER TABLE `detalle_us`
  MODIFY `ID_det` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `ID_factura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `ID_modulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `personal_rh`
--
ALTER TABLE `personal_rh`
  MODIFY `ID_RH` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `personal_ventas`
--
ALTER TABLE `personal_ventas`
  MODIFY `ID_empleado` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `postulantes`
--
ALTER TABLE `postulantes`
  MODIFY `ID_postulante` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ID_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `puestos`
--
ALTER TABLE `puestos`
  MODIFY `ID_puesto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tramite_rh`
--
ALTER TABLE `tramite_rh`
  MODIFY `ID_tramite` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_us`
--
ALTER TABLE `detalle_us`
  ADD CONSTRAINT `detalle_us_ibfk_1` FOREIGN KEY (`ID_puesto`) REFERENCES `puestos` (`ID_puesto`),
  ADD CONSTRAINT `detalle_us_ibfk_2` FOREIGN KEY (`ID_Modulo`) REFERENCES `modulos` (`ID_modulo`),
  ADD CONSTRAINT `detalle_us_ibfk_3` FOREIGN KEY (`ID_usuario`) REFERENCES `usuarios` (`ID_usuario`);

--
-- Filtros para la tabla `factura`
--
ALTER TABLE `factura`
  ADD CONSTRAINT `factura_ibfk_1` FOREIGN KEY (`ID_cliente`) REFERENCES `cliente` (`ID_cliente`),
  ADD CONSTRAINT `factura_ibfk_2` FOREIGN KEY (`ID_empleado`) REFERENCES `personal_ventas` (`ID_empleado`),
  ADD CONSTRAINT `factura_ibfk_3` FOREIGN KEY (`ID_producto`) REFERENCES `producto` (`ID_producto`);

--
-- Filtros para la tabla `personal_rh`
--
ALTER TABLE `personal_rh`
  ADD CONSTRAINT `personal_rh_ibfk_1` FOREIGN KEY (`ID_areaRH`) REFERENCES `area_rh` (`ID_areaRH`),
  ADD CONSTRAINT `personal_rh_ibfk_2` FOREIGN KEY (`ID_puesto`) REFERENCES `puestos` (`ID_puesto`);

--
-- Filtros para la tabla `personal_ventas`
--
ALTER TABLE `personal_ventas`
  ADD CONSTRAINT `personal_ventas_ibfk_1` FOREIGN KEY (`ID_puesto`) REFERENCES `puestos` (`ID_puesto`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`ID_categoria`) REFERENCES `categoria` (`ID_categoria`);

--
-- Filtros para la tabla `tramite_rh`
--
ALTER TABLE `tramite_rh`
  ADD CONSTRAINT `tramite_rh_ibfk_1` FOREIGN KEY (`ID_RH`) REFERENCES `personal_rh` (`ID_RH`),
  ADD CONSTRAINT `tramite_rh_ibfk_2` FOREIGN KEY (`ID_puesto`) REFERENCES `puestos` (`ID_puesto`),
  ADD CONSTRAINT `tramite_rh_ibfk_3` FOREIGN KEY (`ID_areaRH`) REFERENCES `area_rh` (`ID_areaRH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
