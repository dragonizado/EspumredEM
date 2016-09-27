-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2014 a las 09:02:23
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `proyectodespacho`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cartaremisora`
--

CREATE TABLE IF NOT EXISTS `cartaremisora` (
  `id` varchar(45) NOT NULL,
  `idArticulo` varchar(45) DEFAULT NULL,
  `idCliente` varchar(45) DEFAULT NULL,
  `idUsuario` varchar(45) DEFAULT NULL,
  `Direccion` varchar(45) DEFAULT NULL,
  `Telefono` int(11) DEFAULT NULL,
  `Ciudad` varchar(45) DEFAULT NULL,
  `Flete_Pagadero` varchar(45) DEFAULT NULL,
  `Numero_Factura` varchar(45) DEFAULT NULL,
  `Cantidad_Articulo` int(11) DEFAULT NULL,
  `Valor_Unitario_Articulo` int(11) DEFAULT NULL,
  `Valor_Total` int(11) DEFAULT NULL,
  `Numero_Bultos` varchar(45) DEFAULT NULL,
  `Fecha_Creacion` datetime DEFAULT NULL,
  `Fecha_Modificacion` datetime DEFAULT NULL,
  `descripcion` varchar(10000) DEFAULT NULL,
  `consecutivo` int(11) DEFAULT NULL,
  `Empresa` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_idArticulo_idx` (`idArticulo`),
  KEY `Fk_idCliente_idx` (`idCliente`),
  KEY `Fk_idUsuario_idx` (`idUsuario`),
  KEY `Fk_ciudad_idx` (`Ciudad`),
  KEY `Fk_empresa_idx` (`Empresa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cartaremisora`
--

INSERT INTO `cartaremisora` (`id`, `idArticulo`, `idCliente`, `idUsuario`, `Direccion`, `Telefono`, `Ciudad`, `Flete_Pagadero`, `Numero_Factura`, `Cantidad_Articulo`, `Valor_Unitario_Articulo`, `Valor_Total`, `Numero_Bultos`, `Fecha_Creacion`, `Fecha_Modificacion`, `descripcion`, `consecutivo`, `Empresa`) VALUES
('2249c3c4-6f61-72f6-5462-5ce794eadd55', '22241179-958d-2773-82da-5421a65ee855', 'd4adb4f2-42a5-6cf7-6e47-fd7ce55636f8', '24c79c90-37bb-73ab-bb7e-2d11a031eec6', 'CALLE JUAN DEL CORRAL ENSEGUIDA DE EDATEL', 8256886, '276', 'esp.med', '9-137245', NULL, NULL, 275734, '2', '2014-08-04 14:46:08', '2014-08-04 14:46:08', 'COL ECO LINE D-18 100X190X20 JAC E COLOR-2-137867#', 4, '7'),
('5495fbfc-6fdb-2666-9d54-e0b300e55ab2', '70002661', 'f2aa1c08-4217-cd45-80cf-9fc28ff70e6b', '24c79c90-37bb-73ab-bb7e-2d11a031eec6', 'CRA 21 # 18-37', 8871478, '1090', 'esp.med', '9-138281  9-138385  80761167', NULL, NULL, 2110624, '8', '2014-08-06 12:42:42', '2014-08-06 12:42:42', 'COL SPECIAL LIFE FIRME 140X190X22-4-383180#COL ECO LINE D-26 120X190X20 JAC E-2-198352#PROTECTOR COLCHON BANDA LISA 140x190-4-25900#ALMUHADA ROYAL-8-9700#', 10, '4'),
('59aebab7-7b5a-8f31-b748-5b2fe701392a', 'c294c9c6-94a1-3a71-7422-94ab2e382df2', '2292464d-a1db-1952-f371-71157ecbf950', '24c79c90-37bb-73ab-bb7e-2d11a031eec6', 'CRA 17 # 24-46 APTO 402 ED. FADIA', 2147483647, '175', 'esp.med', '5-17080', NULL, NULL, 602680, '2', '2014-08-06 13:20:05', '2014-08-06 13:20:05', 'COL SENSAF C30 PLUS 140X190X25 JAC-1-344800#COL SENSAF C30 120X190X22 JAC LDOR-1-257880#', 11, 'd34d8457-584e-c298-565b-c492d869df5d'),
('862fefef-8245-68c7-e2cb-cbde1bd81a8d', '10000172', 'b411e16c-e681-6f11-3da5-e6a9a14855f6', '24c79c90-37bb-73ab-bb7e-2d11a031eec6', 'CR 40', 26588771, '1070', '15000', 'ASDAS', NULL, NULL, 30000, '5', '2014-08-05 15:34:09', '2014-08-05 15:37:22', 'TELA ALM MICROVELOUR LFY-2-15000#', 8, '13b19db4-3d97-61a9-498d-41b1c69af8fd'),
('9cf6cffc-1e60-9168-0325-e494a2c1c633', '80003046', '9e56ad65-e92b-fb6b-9ffc-d5135e89ab35', '24c79c90-37bb-73ab-bb7e-2d11a031eec6', 'CRA 50 # 2-143', 2147483647, '452', 'esp.med', '9-138058', NULL, NULL, 839400, '3', '2014-08-04 18:21:24', '2014-08-04 18:21:24', 'LAM EX 120,0x190,0x005,0-24-34975#', 6, '13b19db4-3d97-61a9-498d-41b1c69af8fd'),
('beb52ac3-4787-af80-80c0-6185df6b03ee', '10002247', 'c32ed17b-0c72-047e-987d-db94e2e0ec31', '24c79c90-37bb-73ab-bb7e-2d11a031eec6', 'cr 48 89-87', 8523641, 'dc22fc44-caeb-b94c-6de0-44012db80584', '15000', 'sdf5545', NULL, NULL, 280000, '2', '2014-07-30 15:02:36', '2014-07-30 15:03:16', 'TELA ALGODON COLORES 132 HILOS COLHONES-5-56000#', 1, '13b19db4-3d97-61a9-498d-41b1c69af8fd'),
('c5c84349-96be-c0eb-48ab-1a3c609d3969', '80006150', 'd845ba3c-9b68-ec31-fa8a-18a7874083b8', '24c79c90-37bb-73ab-bb7e-2d11a031eec6', 'CRA10# 11-54', 8494569, 'ea8b8e08-24f6-cd43-9c8e-4a7be62391e7', 'esp.med', '900137395', NULL, NULL, 375648, '2', '2014-07-30 15:16:53', '2014-08-01 15:14:37', 'LAM SF 100,0x200,0x002,0 RS-48-7826#', 2, '13b19db4-3d97-61a9-498d-41b1c69af8fd'),
('cbafcc08-d197-0f57-94a8-5d2e31257044', '90052719', '5cc108c8-4c68-e554-8a33-c14fd9ab1d5b', '24c79c90-37bb-73ab-bb7e-2d11a031eec6', 'CALLE 11 # 10-63', 8304295, 'a9949734-fa5c-cbc5-b3c1-c83ef19d7f50', 'esp.med', '9-137784', NULL, NULL, 292320, '12', '2014-08-01 15:12:44', '2014-08-01 15:13:58', 'CTA TSE 100X190X10 ALG COLORES SENCILLO-12-24360#', 3, 'c2408ed2-10d7-6477-0a3f-0da546448ab2'),
('d76e2f13-6495-1f3b-781a-a915c51579c6', '08c52e9d-92ba-937c-3200-05af6301f06c', '5556231b-fc18-383a-055c-5f91eb1f21ed', '24c79c90-37bb-73ab-bb7e-2d11a031eec6', 'CALLE 10 # 4-24', 8533023, '883', 'E', '9-138205  9-137939', NULL, NULL, 724500, '2', '2014-08-05 15:31:47', '2014-08-05 15:31:47', 'COL SENSAF C-30 140X190X22 JAC LDOR-2-362250#', 7, '7'),
('de43255a-4a59-dc4f-09c2-cd1d105b04a2', '90054937', '9e56ad65-e92b-fb6b-9ffc-d5135e89ab35', '24c79c90-37bb-73ab-bb7e-2d11a031eec6', 'CRA 50 # 2-143', 2147483647, '452', 'esp.med', '9-138277', NULL, NULL, 202272, '4', '2014-08-06 12:36:06', '2014-08-06 12:36:06', 'CTA SF 100X190X14 ALG COLORES SENCILLO-2-46057#CTA SF 120X180X14 ALG COLORES SENCILLA-2-055079#', 9, '13b19db4-3d97-61a9-498d-41b1c69af8fd'),
('ff04545f-772f-240b-abff-ae40236ead09', '6739a9f8-10b9-93ae-f6c0-d4ee020c6eba', 'f87cf679-04f5-4054-7e99-4f5d40c9c947', '24c79c90-37bb-73ab-bb7e-2d11a031eec6', 'CALLE 20 # 21-47', 8538714, '1090', 'esp.med', '9-138111', NULL, NULL, 1122840, '10', '2014-08-04 17:21:59', '2014-08-04 17:21:59', 'LAM SF 090X190X16 RS-30-37428#', 5, '4');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cartaremisora`
--
ALTER TABLE `cartaremisora`
  ADD CONSTRAINT `Fk_idArticulo` FOREIGN KEY (`idArticulo`) REFERENCES `articulos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Fk_idCliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Fk_idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Fk_ciudad` FOREIGN KEY (`Ciudad`) REFERENCES `ciudad` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Fk_empresa` FOREIGN KEY (`Empresa`) REFERENCES `empresa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
