-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2023 a las 06:13:11
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `constructora`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_permisos`
--

CREATE TABLE `detalle_permisos` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_permiso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `detalle_permisos`
--

INSERT INTO `detalle_permisos` (`id`, `id_usuario`, `id_permiso`) VALUES
(429, 3, 1),
(430, 3, 2),
(431, 3, 3),
(432, 3, 4),
(433, 3, 5),
(434, 3, 6),
(435, 3, 7),
(436, 3, 8),
(437, 3, 9),
(438, 3, 10),
(439, 3, 11),
(440, 3, 12),
(441, 3, 13),
(442, 3, 14),
(443, 3, 15),
(444, 3, 16),
(445, 3, 17),
(446, 3, 18),
(447, 3, 19),
(448, 3, 20),
(449, 3, 21),
(450, 3, 22),
(451, 3, 23),
(452, 3, 24);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `elementos`
--

CREATE TABLE `elementos` (
  `id_elemento` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `elementos`
--

INSERT INTO `elementos` (`id_elemento`, `nombre`) VALUES
(1, 'Piso'),
(2, 'Techo'),
(3, 'Pared');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE `historial` (
  `id` int(11) NOT NULL,
  `idElemento` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `nomMaterial` varchar(150) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioBajoMate` decimal(10,2) NOT NULL,
  `precioMedioMate` decimal(10,2) NOT NULL,
  `precioAltoMate` decimal(10,2) NOT NULL,
  `precioBajoT` decimal(10,2) NOT NULL,
  `precioMedioT` decimal(10,2) NOT NULL,
  `precioAltoT` decimal(10,2) NOT NULL,
  `fechaEnv` datetime NOT NULL,
  `manoObra` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `historial`
--

INSERT INTO `historial` (`id`, `idElemento`, `idUser`, `nomMaterial`, `cantidad`, `precioBajoMate`, `precioMedioMate`, `precioAltoMate`, `precioBajoT`, `precioMedioT`, `precioAltoT`, `fechaEnv`, `manoObra`) VALUES
(9, 1, 1, 'bolsa de clavos', 100, 5400.00, 17500.00, 22500.00, 5500.00, 17600.00, 22600.00, '2023-05-18 21:58:23', 100.00),
(10, 1, 1, 'bolsa cemento ', 4, 68.00, 72.00, 80.00, 5568.00, 17672.00, 22680.00, '2023-05-18 21:58:23', 100.00),
(11, 1, 1, 'bolsa de clavos', 100, 5400.00, 17500.00, 22500.00, 5500.00, 17600.00, 22600.00, '2023-05-18 22:12:14', 100.00),
(12, 1, 1, 'bolsa cemento ', 4, 68.00, 72.00, 80.00, 5568.00, 17672.00, 22680.00, '2023-05-18 22:12:14', 100.00),
(13, 3, 1, 'cementos bolsa', 30, 750.00, 900.00, 1500.00, 750.00, 900.00, 1500.00, '2023-05-18 22:16:35', 0.00),
(14, 3, 1, 'cementos bolsa', 30, 750.00, 900.00, 1500.00, 1500.00, 1800.00, 3000.00, '2023-05-18 22:16:35', 0.00),
(15, 3, 1, 'ladrillos', 150, 6000.00, 6900.00, 7500.00, 7500.00, 8700.00, 10500.00, '2023-05-18 22:16:35', 0.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `id_medida` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `precioBajo` decimal(10,2) NOT NULL,
  `precioMedio` decimal(10,2) NOT NULL,
  `precioAlto` decimal(10,2) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1,
  `id_elemento` int(11) NOT NULL,
  `totalBajo` decimal(10,2) NOT NULL,
  `totalMedio` decimal(10,2) NOT NULL,
  `totalAlto` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id`, `nombre`, `id_medida`, `cantidad`, `precioBajo`, `precioMedio`, `precioAlto`, `estado`, `id_elemento`, `totalBajo`, `totalMedio`, `totalAlto`) VALUES
(1, 'bolsa de clavos', 1, 50, 54.00, 175.00, 225.00, 1, 1, 27.00, 87.50, 112.50),
(2, 'cementos bolsa', 1, 10, 25.00, 30.00, 50.00, 1, 3, 2.50, 3.00, 5.00),
(3, 'calaminas', 1, 5, 25.00, 30.00, 32.00, 1, 2, 1.25, 1.50, 1.60),
(7, 'bolsa cemento ', 1, 2, 17.00, 18.00, 20.00, 1, 1, 0.34, 0.36, 0.40),
(8, 'losas amarillas', 1, 2, 17.00, 25.00, 30.00, 1, 1, 0.34, 0.50, 0.60),
(9, 'foco', 1, 2, 17.00, 20.00, 22.00, 1, 2, 0.34, 0.40, 0.44),
(10, 'concreto', 2, 20, 52.00, 60.00, 62.00, 1, 1, 10.40, 12.00, 12.40),
(11, 'ladrillos', 1, 50, 40.00, 46.00, 50.00, 1, 3, 20.00, 23.00, 25.00),
(12, 'miller', 2, 1, 200.00, 300.00, 400.00, 1, 3, 2.00, 3.00, 4.00),
(13, 'sdfg', 2, 5465, 156.00, 516.00, 5163.00, 1, 3, 8525.40, 28199.40, 282157.95),
(14, 'zxfc', 2, 564, 564.00, 654.00, 6546.00, 1, 1, 3180.96, 3688.56, 36919.44),
(15, 'mmmmmmmmmmm', 2, 515, 5261.00, 4132.00, 1563.00, 1, 1, 27094.15, 21279.80, 8049.45),
(16, 'mmmmmm', 2, 65, 3.00, 65.00, 56.00, 1, 3, 1.95, 42.25, 36.40),
(17, 'ghj', 2, 65, 3.00, 23.00, 12.00, 1, 1, 1.95, 14.95, 7.80),
(18, 'dfg', 1, 654, 65.00, 65.00, 41.00, 1, 2, 425.10, 425.10, 268.14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medidas`
--

CREATE TABLE `medidas` (
  `id` int(11) NOT NULL,
  `medida` varchar(50) NOT NULL,
  `diminutivo` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `medidas`
--

INSERT INTO `medidas` (`id`, `medida`, `diminutivo`, `estado`) VALUES
(1, 'Metros', 'm', 1),
(2, 'Kilo Gramos', 'Kg', 1),
(3, 'Jhens', 'Papi Rey', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `permiso` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `permiso`) VALUES
(1, 'usuarios'),
(2, 'Material_Piso'),
(3, 'Material_Pared'),
(4, 'Material_Techo'),
(5, 'Registrar_Usuario'),
(6, 'Registrar_Material_Piso'),
(7, 'Registrar_Material_Pared'),
(8, 'Registrar_Material_Techo'),
(9, 'Editar_Usuario'),
(10, 'Editar_Material_Piso'),
(11, 'Editar_Material_Pared'),
(12, 'Editar_Material_Techo'),
(13, 'Eliminar_Usuario'),
(14, 'Eliminar_Material_Piso'),
(15, 'Eliminar_Material_Pared'),
(16, 'Eliminar_Material_Techo'),
(17, 'Reingresar_Usuario'),
(18, 'Reingresar_Material_Piso'),
(19, 'Reingresar_Material_Pared'),
(20, 'Reingresar_Material_Techo'),
(21, 'Asignar_Permisos'),
(22, 'Ver_Piso_Inactivo'),
(23, 'Ver_Pared_Inactivo'),
(24, 'Ver_Techo_Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `rol` varchar(150) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `rol`, `estado`) VALUES
(1, 'Administrador', 1),
(2, 'Arquitecto', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `clave`, `id_rol`, `estado`) VALUES
(1, 'admin', 'admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 1, 1),
(2, 'jhens', 'jhens', '7e040973efd95446b9ba8cabc7da2bd0dc176da84fc0aa744e27a2d6c2259e8a', 2, 1),
(3, 'ghost ', 'ghost XDsafd', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 2, 1),
(15, 'miller', 'miller', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 2, 1),
(16, 'miller12', 'safsdf', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 2, 1),
(17, 'xD', 'sxafsdaf', '0ffe1abd1a08215353c233d6e009613e95eec4253832a761af28ff37ac5a150c', 2, 1),
(18, 'vcdxxzcv', 'xvcdsfa', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3', 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_permisos`
--
ALTER TABLE `detalle_permisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`,`id_permiso`),
  ADD KEY `id_permiso` (`id_permiso`);

--
-- Indices de la tabla `elementos`
--
ALTER TABLE `elementos`
  ADD PRIMARY KEY (`id_elemento`);

--
-- Indices de la tabla `historial`
--
ALTER TABLE `historial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idElemento` (`idElemento`,`idUser`),
  ADD KEY `idUser` (`idUser`);

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_elemento` (`id_elemento`),
  ADD KEY `id_medida` (`id_medida`),
  ADD KEY `id_medida_2` (`id_medida`);

--
-- Indices de la tabla `medidas`
--
ALTER TABLE `medidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_permisos`
--
ALTER TABLE `detalle_permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=453;

--
-- AUTO_INCREMENT de la tabla `elementos`
--
ALTER TABLE `elementos`
  MODIFY `id_elemento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `historial`
--
ALTER TABLE `historial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `medidas`
--
ALTER TABLE `medidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_permisos`
--
ALTER TABLE `detalle_permisos`
  ADD CONSTRAINT `detalle_permisos_ibfk_1` FOREIGN KEY (`id_permiso`) REFERENCES `permisos` (`id`),
  ADD CONSTRAINT `detalle_permisos_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `historial`
--
ALTER TABLE `historial`
  ADD CONSTRAINT `historial_ibfk_1` FOREIGN KEY (`idElemento`) REFERENCES `materiales` (`id`),
  ADD CONSTRAINT `historial_ibfk_2` FOREIGN KEY (`idUser`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD CONSTRAINT `materiales_ibfk_1` FOREIGN KEY (`id_elemento`) REFERENCES `elementos` (`id_elemento`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_rol`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
