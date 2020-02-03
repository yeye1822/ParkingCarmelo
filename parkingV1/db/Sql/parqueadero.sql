-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-06-2018 a las 16:54:04
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parqueadero`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colorcarro`
--

CREATE TABLE `colorcarro` (
  `idColor` int(11) NOT NULL,
  `descripcionColor` varchar(100) NOT NULL,
  `fechaColor` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `colorcarro`
--

INSERT INTO `colorcarro` (`idColor`, `descripcionColor`, `fechaColor`) VALUES
(1, 'Arena', '0000-00-00 00:00:00'),
(82, 'negro', '2018-05-24 00:04:01'),
(83, 'rojo', '2018-06-13 20:12:52'),
(84, 'Amarillo', '2018-05-24 00:45:30'),
(86, 'cafe', '2018-06-13 20:11:58'),
(87, 'Sin color', '2018-06-15 18:35:14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conceptoparq`
--

CREATE TABLE `conceptoparq` (
  `idParq` int(11) NOT NULL,
  `descripcionParq` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `conceptoparq`
--

INSERT INTO `conceptoparq` (`idParq`, `descripcionParq`) VALUES
(1, 'Sin Concepto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcacarro`
--

CREATE TABLE `marcacarro` (
  `idMarca` int(11) NOT NULL,
  `descripcionMarca` varchar(100) NOT NULL,
  `fechaEmblema` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marcacarro`
--

INSERT INTO `marcacarro` (`idMarca`, `descripcionMarca`, `fechaEmblema`) VALUES
(1, 'Abarth', '0000-00-00 00:00:00'),
(2, 'Alfa Romeo', '0000-00-00 00:00:00'),
(3, 'Aro', '0000-00-00 00:00:00'),
(4, 'Asia', '0000-00-00 00:00:00'),
(5, 'Asia Motors', '0000-00-00 00:00:00'),
(6, 'Aston Martin', '0000-00-00 00:00:00'),
(7, 'Audi', '0000-00-00 00:00:00'),
(8, 'Austin', '0000-00-00 00:00:00'),
(9, 'Auverland', '0000-00-00 00:00:00'),
(10, 'Bentley', '0000-00-00 00:00:00'),
(11, 'Bertone', '0000-00-00 00:00:00'),
(12, 'Bmw', '0000-00-00 00:00:00'),
(13, 'Cadillac', '0000-00-00 00:00:00'),
(14, 'Chevrolet', '0000-00-00 00:00:00'),
(15, 'Chrysler', '0000-00-00 00:00:00'),
(16, 'Citroen', '0000-00-00 00:00:00'),
(17, 'Corvette', '0000-00-00 00:00:00'),
(18, 'Dacia', '0000-00-00 00:00:00'),
(19, 'Daewoo', '0000-00-00 00:00:00'),
(20, 'Daf', '0000-00-00 00:00:00'),
(21, 'Daihatsu', '0000-00-00 00:00:00'),
(22, 'Daimler', '0000-00-00 00:00:00'),
(23, 'Dodge', '0000-00-00 00:00:00'),
(24, 'Ferrari', '0000-00-00 00:00:00'),
(25, 'Fiat', '0000-00-00 00:00:00'),
(26, 'Ford', '0000-00-00 00:00:00'),
(27, 'Galloper', '0000-00-00 00:00:00'),
(28, 'Gmc', '0000-00-00 00:00:00'),
(29, 'Honda', '0000-00-00 00:00:00'),
(30, 'Hummer', '0000-00-00 00:00:00'),
(31, 'Hyundai', '0000-00-00 00:00:00'),
(32, 'Infiniti', '0000-00-00 00:00:00'),
(33, 'Innocenti', '0000-00-00 00:00:00'),
(34, 'Isuzu', '0000-00-00 00:00:00'),
(35, 'Iveco', '0000-00-00 00:00:00'),
(36, 'Iveco-pegaso', '0000-00-00 00:00:00'),
(37, 'Jaguar', '0000-00-00 00:00:00'),
(38, 'Jeep', '0000-00-00 00:00:00'),
(39, 'Kia', '0000-00-00 00:00:00'),
(40, 'Lada', '0000-00-00 00:00:00'),
(41, 'Lamborghini', '0000-00-00 00:00:00'),
(42, 'Lancia', '0000-00-00 00:00:00'),
(43, 'Land-rover', '0000-00-00 00:00:00'),
(44, 'Ldv', '0000-00-00 00:00:00'),
(45, 'Lexus', '0000-00-00 00:00:00'),
(46, 'Lotus', '0000-00-00 00:00:00'),
(47, 'Mahindra', '0000-00-00 00:00:00'),
(48, 'Maserati', '0000-00-00 00:00:00'),
(49, 'Maybach', '0000-00-00 00:00:00'),
(50, 'Mazda', '2018-06-16 18:44:55'),
(51, 'Mercedes-benz', '0000-00-00 00:00:00'),
(52, 'Mg', '0000-00-00 00:00:00'),
(53, 'Mini', '0000-00-00 00:00:00'),
(54, 'Mitsubishi', '0000-00-00 00:00:00'),
(55, 'Morgan', '0000-00-00 00:00:00'),
(56, 'Nissan', '0000-00-00 00:00:00'),
(57, 'Opel', '0000-00-00 00:00:00'),
(58, 'Peugeot', '0000-00-00 00:00:00'),
(59, 'Pontiac', '0000-00-00 00:00:00'),
(60, 'Porsche', '0000-00-00 00:00:00'),
(61, 'Renault', '0000-00-00 00:00:00'),
(62, 'Rolls-royce', '0000-00-00 00:00:00'),
(63, 'Rover', '0000-00-00 00:00:00'),
(64, 'Saab', '0000-00-00 00:00:00'),
(65, 'Santana', '0000-00-00 00:00:00'),
(66, 'Seat', '0000-00-00 00:00:00'),
(67, 'Skoda', '0000-00-00 00:00:00'),
(68, 'Smart', '0000-00-00 00:00:00'),
(69, 'Ssangyong', '0000-00-00 00:00:00'),
(70, 'Subaru', '0000-00-00 00:00:00'),
(71, 'Suzuki', '0000-00-00 00:00:00'),
(72, 'Talbot', '0000-00-00 00:00:00'),
(73, 'Tata', '0000-00-00 00:00:00'),
(74, 'Toyota', '0000-00-00 00:00:00'),
(75, 'Umm', '0000-00-00 00:00:00'),
(76, 'Vaz', '0000-00-00 00:00:00'),
(77, 'Volkswagen', '0000-00-00 00:00:00'),
(78, 'Volvo', '0000-00-00 00:00:00'),
(79, 'Wartburg', '0000-00-00 00:00:00'),
(81, 'Sin Emblema', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagoscarro`
--

CREATE TABLE `pagoscarro` (
  `intPago` int(11) NOT NULL,
  `placaPagoFK` int(11) NOT NULL,
  `fechaPago` varchar(25) NOT NULL,
  `fechaReal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parqcarros`
--

CREATE TABLE `parqcarros` (
  `idCarro` int(11) NOT NULL,
  `idUsuarioFK` int(11) NOT NULL,
  `placaCarro` varchar(20) NOT NULL,
  `fechaCarro` datetime NOT NULL,
  `valorCarro` int(11) NOT NULL,
  `fechapagoCarro` int(11) NOT NULL,
  `tipopagoCarroPK` int(11) NOT NULL,
  `marcaCarroPK` int(11) DEFAULT NULL,
  `colorCarroPK` int(11) DEFAULT NULL,
  `tipoCarroPK` int(11) NOT NULL,
  `estadoCarroPK` int(11) NOT NULL,
  `lineaCarro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parqcarros`
--

INSERT INTO `parqcarros` (`idCarro`, `idUsuarioFK`, `placaCarro`, `fechaCarro`, `valorCarro`, `fechapagoCarro`, `tipopagoCarroPK`, `marcaCarroPK`, `colorCarroPK`, `tipoCarroPK`, `estadoCarroPK`, `lineaCarro`) VALUES
(1, 1, 'FCX353', '2018-05-14 05:18:11', 18, 5, 1, 50, 1, 6, 1, 0),
(2, 7, '000000', '2018-06-15 18:36:29', 20, 0, 5, 81, 87, 9, 1, 5046);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parqestado`
--

CREATE TABLE `parqestado` (
  `idEstado` int(11) NOT NULL,
  `descripcionEstado` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parqestado`
--

INSERT INTO `parqestado` (`idEstado`, `descripcionEstado`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parqpassword`
--

CREATE TABLE `parqpassword` (
  `idPassword` int(11) NOT NULL,
  `idUsuarioFK` int(11) NOT NULL,
  `PasswordP` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parqpassword`
--

INSERT INTO `parqpassword` (`idPassword`, `idUsuarioFK`, `PasswordP`) VALUES
(2, 6, 'da13ab58f3759b6bbdad8880cd5d15bb'),
(3, 7, '56018323b921dd2c5444f98fb45509de');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parqusuarios`
--

CREATE TABLE `parqusuarios` (
  `idUsuario` int(11) NOT NULL,
  `cedulaUsuario` int(11) NOT NULL,
  `nombreUsuario` varchar(100) NOT NULL,
  `apllidoUsuario` varchar(100) NOT NULL,
  `correoUsuario` varchar(150) DEFAULT NULL,
  `fechaUsuario` datetime NOT NULL,
  `estadoUsuarioPK` int(11) NOT NULL,
  `contactoUsuario` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `parqusuarios`
--

INSERT INTO `parqusuarios` (`idUsuario`, `cedulaUsuario`, `nombreUsuario`, `apllidoUsuario`, `correoUsuario`, `fechaUsuario`, `estadoUsuarioPK`, `contactoUsuario`) VALUES
(1, 1128392854, 'John James', 'Alvarez Taborda', 'alvareztaborda@hotmail.com', '2018-05-14 09:21:19', 1, 3005267339),
(6, 1234567890, 'Root', 'Administrador', 'prueba@carmelo.com', '2018-05-24 22:54:14', 1, 0),
(7, 0, 'Usuario', 'Varios', 'xxxxx@xxxxx', '2018-06-15 18:33:24', 1, 3000000000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referenciacarro`
--

CREATE TABLE `referenciacarro` (
  `idReferencia` int(11) NOT NULL,
  `descripcionReferencia` varchar(100) NOT NULL,
  `fkReferencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `referenciacarro`
--

INSERT INTO `referenciacarro` (`idReferencia`, `descripcionReferencia`, `fkReferencia`) VALUES
(4033, '500', 1),
(4034, 'Grande Punto', 1),
(4035, 'Punto Evo', 1),
(4036, '500c', 1),
(4037, '695', 1),
(4038, 'Punto', 1),
(4039, '155', 2),
(4040, '156', 2),
(4041, '159', 2),
(4042, '164', 2),
(4043, '145', 2),
(4044, '147', 2),
(4045, '146', 2),
(4046, 'Gtv', 2),
(4047, 'Spider', 2),
(4048, '166', 2),
(4049, 'Gt', 2),
(4050, 'Crosswagon', 2),
(4051, 'Brera', 2),
(4052, '90', 2),
(4053, '75', 2),
(4054, '33', 2),
(4055, 'Giulietta', 2),
(4056, 'Sprint', 2),
(4057, 'Mito', 2),
(4058, 'Expander', 3),
(4059, '10', 3),
(4060, '24', 3),
(4061, 'Dacia', 3),
(4062, 'Rocsta', 4),
(4063, 'Rocsta', 5),
(4064, 'Db7', 6),
(4065, 'V8', 6),
(4066, 'Db9', 6),
(4067, 'Vanquish', 6),
(4068, 'V8 Vantage', 6),
(4069, 'Vantage', 6),
(4070, 'Dbs', 6),
(4071, 'Volante', 6),
(4072, 'Virage', 6),
(4073, 'Vantage V8', 6),
(4074, 'Vantage V12', 6),
(4075, 'Rapide', 6),
(4076, 'Cygnet', 6),
(4077, '80', 7),
(4078, 'A4', 7),
(4079, 'A6', 7),
(4080, 'S6', 7),
(4081, 'Coupe', 7),
(4082, 'S2', 7),
(4083, 'Rs2', 7),
(4084, 'A8', 7),
(4085, 'Cabriolet', 7),
(4086, 'S8', 7),
(4087, 'A3', 7),
(4088, 'S4', 7),
(4089, 'Tt', 7),
(4090, 'S3', 7),
(4091, 'Allroad Quattro', 7),
(4092, 'Rs4', 7),
(4093, 'A2', 7),
(4094, 'Rs6', 7),
(4095, 'Q7', 7),
(4096, 'R8', 7),
(4097, 'A5', 7),
(4098, 'S5', 7),
(4099, 'V8', 7),
(4100, '200', 7),
(4101, '100', 7),
(4102, '90', 7),
(4103, 'Tts', 7),
(4104, 'Q5', 7),
(4105, 'A4 Allroad Quattro', 7),
(4106, 'Tt Rs', 7),
(4107, 'Rs5', 7),
(4108, 'A1', 7),
(4109, 'A7', 7),
(4110, 'Rs3', 7),
(4111, 'Q3', 7),
(4112, 'A6 Allroad Quattro', 7),
(4113, 'S7', 7),
(4114, 'Sq5', 7),
(4115, 'Mini', 8),
(4116, 'Montego', 8),
(4117, 'Maestro', 8),
(4118, 'Metro', 8),
(4119, 'Mini Moke', 8),
(4120, 'Diesel', 9),
(4121, 'Brooklands', 10),
(4122, 'Turbo', 10),
(4123, 'Continental', 10),
(4124, 'Azure', 10),
(4125, 'Arnage', 10),
(4126, 'Continental Gt', 10),
(4127, 'Continental Flying Spur', 10),
(4128, 'Turbo R', 10),
(4129, 'Mulsanne', 10),
(4130, 'Eight', 10),
(4131, 'Continental Gtc', 10),
(4132, 'Continental Supersports', 10),
(4133, 'Freeclimber Diesel', 11),
(4134, 'Serie 3', 12),
(4135, 'Serie 5', 12),
(4136, 'Compact', 12),
(4137, 'Serie 7', 12),
(4138, 'Serie 8', 12),
(4139, 'Z3', 12),
(4140, 'Z4', 12),
(4141, 'Z8', 12),
(4142, 'X5', 12),
(4143, 'Serie 6', 12),
(4144, 'X3', 12),
(4145, 'Serie 1', 12),
(4146, 'Z1', 12),
(4147, 'X6', 12),
(4148, 'X1', 12),
(4149, 'Seville', 13),
(4150, 'Sts', 13),
(4151, 'El Dorado', 13),
(4152, 'Cts', 13),
(4153, 'Xlr', 13),
(4154, 'Srx', 13),
(4155, 'Escalade', 13),
(4156, 'Bls', 13),
(4157, 'Corvette', 14),
(4158, 'Blazer', 14),
(4159, 'Astro', 14),
(4160, 'Nubira', 14),
(4161, 'Evanda', 14),
(4162, 'Trans Sport', 14),
(4163, 'Camaro', 14),
(4164, 'Matiz', 14),
(4165, 'Alero', 14),
(4166, 'Tahoe', 14),
(4167, 'Tacuma', 14),
(4168, 'Trailblazer', 14),
(4169, 'Kalos', 14),
(4170, 'Aveo', 14),
(4171, 'Lacetti', 14),
(4172, 'Epica', 14),
(4173, 'Captiva', 14),
(4174, 'Hhr', 14),
(4175, 'Cruze', 14),
(4176, 'Spark', 14),
(4177, 'Orlando', 14),
(4178, 'Volt', 14),
(4179, 'Malibu', 14),
(4180, 'Vision', 15),
(4181, '300m', 15),
(4182, 'Grand Voyager', 15),
(4183, 'Viper', 15),
(4184, 'Neon', 15),
(4185, 'Voyager', 15),
(4186, 'Stratus', 15),
(4187, 'Sebring', 15),
(4188, 'Sebring 200c', 15),
(4189, 'New Yorker', 15),
(4190, 'Pt Cruiser', 15),
(4191, 'Crossfire', 15),
(4192, '300c', 15),
(4193, 'Le Baron', 15),
(4194, 'Saratoga', 15),
(4195, 'Xantia', 16),
(4196, 'Xm', 16),
(4197, 'Ax', 16),
(4198, 'Zx', 16),
(4199, 'Evasion', 16),
(4200, 'C8', 16),
(4201, 'Saxo', 16),
(4202, 'C2', 16),
(4203, 'Xsara', 16),
(4204, 'C4', 16),
(4205, 'Xsara Picasso', 16),
(4206, 'C5', 16),
(4207, 'C3', 16),
(4208, 'C3 Pluriel', 16),
(4209, 'C1', 16),
(4210, 'C6', 16),
(4211, 'Grand C4 Picasso', 16),
(4212, 'C4 Picasso', 16),
(4213, 'Ccrosser', 16),
(4214, 'C15', 16),
(4215, 'Jumper', 16),
(4216, 'Jumpy', 16),
(4217, 'Berlingo', 16),
(4218, 'Bx', 16),
(4219, 'C25', 16),
(4220, 'Cx', 16),
(4221, 'Gsa', 16),
(4222, 'Visa', 16),
(4223, 'Lna', 16),
(4224, '2cv', 16),
(4225, 'Nemo', 16),
(4226, 'C4 Sedan', 16),
(4227, 'Berlingo First', 16),
(4228, 'C3 Picasso', 16),
(4229, 'Ds3', 16),
(4230, 'Czero', 16),
(4231, 'Ds4', 16),
(4232, 'Ds5', 16),
(4233, 'C4 Aircross', 16),
(4234, 'Celysee', 16),
(4235, 'Corvette', 17),
(4236, 'Contac', 18),
(4237, 'Logan', 18),
(4238, 'Sandero', 18),
(4239, 'Duster', 18),
(4240, 'Lodgy', 18),
(4241, 'Nexia', 19),
(4242, 'Aranos', 19),
(4243, 'Lanos', 19),
(4244, 'Nubira', 19),
(4245, 'Compact', 19),
(4246, 'Nubira Compact', 19),
(4247, 'Leganza', 19),
(4248, 'Evanda', 19),
(4249, 'Matiz', 19),
(4250, 'Tacuma', 19),
(4251, 'Kalos', 19),
(4252, 'Lacetti', 19),
(4253, 'Applause', 21),
(4254, 'Charade', 21),
(4255, 'Rocky', 21),
(4256, 'Feroza', 21),
(4257, 'Terios', 21),
(4258, 'Sirion', 21),
(4259, 'Serie Xj', 22),
(4260, 'Xj', 22),
(4261, 'Double Six', 22),
(4262, 'Six', 22),
(4263, 'Series Iii', 22),
(4264, 'Viper', 23),
(4265, 'Caliber', 23),
(4266, 'Nitro', 23),
(4267, 'Avenger', 23),
(4268, 'Journey', 23),
(4269, 'F355', 24),
(4270, '360', 24),
(4271, 'F430', 24),
(4272, 'F512 M', 24),
(4273, '550 Maranello', 24),
(4274, '575m Maranello', 24),
(4275, '599', 24),
(4276, '456', 24),
(4277, '456m', 24),
(4278, '612', 24),
(4279, 'F50', 24),
(4280, 'Enzo', 24),
(4281, 'Superamerica', 24),
(4282, '430', 24),
(4283, '348', 24),
(4284, 'Testarossa', 24),
(4285, '512', 24),
(4286, '355', 24),
(4287, 'F40', 24),
(4288, '412', 24),
(4289, 'Mondial', 24),
(4290, '328', 24),
(4291, 'California', 24),
(4292, '458', 24),
(4293, 'Ff', 24),
(4294, 'Croma', 25),
(4295, 'Cinquecento', 25),
(4296, 'Seicento', 25),
(4297, 'Punto', 25),
(4298, 'Grande Punto', 25),
(4299, 'Panda', 25),
(4300, 'Tipo', 25),
(4301, 'Coupe', 25),
(4302, 'Uno', 25),
(4303, 'Ulysse', 25),
(4304, 'Tempra', 25),
(4305, 'Marea', 25),
(4306, 'Barchetta', 25),
(4307, 'Bravo', 25),
(4308, 'Stilo', 25),
(4309, 'Brava', 25),
(4310, 'Palio Weekend', 25),
(4311, '600', 25),
(4312, 'Multipla', 25),
(4313, 'Idea', 25),
(4314, 'Sedici', 25),
(4315, 'Linea', 25),
(4316, '500', 25),
(4317, 'Fiorino', 25),
(4318, 'Ducato', 25),
(4319, 'Doblo Cargo', 25),
(4320, 'Doblo', 25),
(4321, 'Strada', 25),
(4322, 'Regata', 25),
(4323, 'Talento', 25),
(4324, 'Argenta', 25),
(4325, 'Ritmo', 25),
(4326, 'Punto Classic', 25),
(4327, 'Qubo', 25),
(4328, 'Punto Evo', 25),
(4329, '500c', 25),
(4330, 'Freemont', 25),
(4331, 'Panda Classic', 25),
(4332, '500l', 25),
(4333, 'Maverick', 26),
(4334, 'Escort', 26),
(4335, 'Focus', 26),
(4336, 'Mondeo', 26),
(4337, 'Scorpio', 26),
(4338, 'Fiesta', 26),
(4339, 'Probe', 26),
(4340, 'Explorer', 26),
(4341, 'Galaxy', 26),
(4342, 'Ka', 26),
(4343, 'Puma', 26),
(4344, 'Cougar', 26),
(4345, 'Focus Cmax', 26),
(4346, 'Fusion', 26),
(4347, 'Streetka', 26),
(4348, 'Cmax', 26),
(4349, 'Smax', 26),
(4350, 'Transit', 26),
(4351, 'Courier', 26),
(4352, 'Ranger', 26),
(4353, 'Sierra', 26),
(4354, 'Orion', 26),
(4355, 'Pick Up', 26),
(4356, 'Capri', 26),
(4357, 'Granada', 26),
(4358, 'Kuga', 26),
(4359, 'Grand Cmax', 26),
(4360, 'Bmax', 26),
(4361, 'Tourneo Custom', 26),
(4362, 'Exceed', 27),
(4363, 'Santamo', 27),
(4364, 'Super Exceed', 27),
(4365, 'Accord', 29),
(4366, 'Civic', 29),
(4367, 'Crx', 29),
(4368, 'Prelude', 29),
(4369, 'Nsx', 29),
(4370, 'Legend', 29),
(4371, 'Crv', 29),
(4372, 'Hrv', 29),
(4373, 'Logo', 29),
(4374, 'S2000', 29),
(4375, 'Stream', 29),
(4376, 'Jazz', 29),
(4377, 'Frv', 29),
(4378, 'Concerto', 29),
(4379, 'Insight', 29),
(4380, 'Crz', 29),
(4381, 'H2', 30),
(4382, 'H3', 30),
(4383, 'H3t', 30),
(4384, 'Lantra', 31),
(4385, 'Sonata', 31),
(4386, 'Elantra', 31),
(4387, 'Accent', 31),
(4388, 'Scoupe', 31),
(4389, 'Coupe', 31),
(4390, 'Atos', 31),
(4391, 'H1', 31),
(4392, 'Atos Prime', 31),
(4393, 'Xg', 31),
(4394, 'Trajet', 31),
(4395, 'Santa Fe', 31),
(4396, 'Terracan', 31),
(4397, 'Matrix', 31),
(4398, 'Getz', 31),
(4399, 'Tucson', 31),
(4400, 'I30', 31),
(4401, 'Pony', 31),
(4402, 'Grandeur', 31),
(4403, 'I10', 31),
(4404, 'I800', 31),
(4405, 'Sonata Fl', 31),
(4406, 'Ix55', 31),
(4407, 'I20', 31),
(4408, 'Ix35', 31),
(4409, 'Ix20', 31),
(4410, 'Genesis', 31),
(4411, 'I40', 31),
(4412, 'Veloster', 31),
(4413, 'G', 32),
(4414, 'Ex', 32),
(4415, 'Fx', 32),
(4416, 'M', 32),
(4417, 'Elba', 33),
(4418, 'Minitre', 33),
(4419, 'Trooper', 34),
(4420, 'Pick Up', 34),
(4421, 'D Max', 34),
(4422, 'Rodeo', 34),
(4423, 'Dmax', 34),
(4424, 'Trroper', 34),
(4425, 'Daily', 35),
(4426, 'Massif', 35),
(4427, 'Daily', 36),
(4428, 'Duty', 36),
(4429, 'Serie Xj', 37),
(4430, 'Serie Xk', 37),
(4431, 'Xj', 37),
(4432, 'Stype', 37),
(4433, 'Xf', 37),
(4434, 'Xtype', 37),
(4435, 'Wrangler', 38),
(4436, 'Cherokee', 38),
(4437, 'Grand Cherokee', 38),
(4438, 'Commander', 38),
(4439, 'Compass', 38),
(4440, 'Wrangler Unlimited', 38),
(4441, 'Patriot', 38),
(4442, 'Sportage', 39),
(4443, 'Sephia', 39),
(4444, 'Sephia Ii', 39),
(4445, 'Pride', 39),
(4446, 'Clarus', 39),
(4447, 'Shuma', 39),
(4448, 'Carnival', 39),
(4449, 'Joice', 39),
(4450, 'Magentis', 39),
(4451, 'Carens', 39),
(4452, 'Rio', 39),
(4453, 'Cerato', 39),
(4454, 'Sorento', 39),
(4455, 'Opirus', 39),
(4456, 'Picanto', 39),
(4457, 'Ceed', 39),
(4458, 'Ceed Sporty Wagon', 39),
(4459, 'Proceed', 39),
(4460, 'K2500 Frontier', 39),
(4461, 'K2500', 39),
(4462, 'Soul', 39),
(4463, 'Venga', 39),
(4464, 'Optima', 39),
(4465, 'Ceed Sportswagon', 39),
(4466, 'Samara', 40),
(4467, 'Niva', 40),
(4468, 'Sagona', 40),
(4469, 'Stawra 2110', 40),
(4470, '214', 40),
(4471, 'Kalina', 40),
(4472, 'Serie 2100', 40),
(4473, 'Priora', 40),
(4474, 'Gallardo', 41),
(4475, 'Murcielago', 41),
(4476, 'Aventador', 41),
(4477, 'Delta', 42),
(4478, 'K', 42),
(4479, 'Y10', 42),
(4480, 'Dedra', 42),
(4481, 'Lybra', 42),
(4482, 'Z', 42),
(4483, 'Y', 42),
(4484, 'Ypsilon', 42),
(4485, 'Thesis', 42),
(4486, 'Phedra', 42),
(4487, 'Musa', 42),
(4488, 'Thema', 42),
(4489, 'Zeta', 42),
(4490, 'Kappa', 42),
(4491, 'Trevi', 42),
(4492, 'Prisma', 42),
(4493, 'A112', 42),
(4494, 'Ypsilon Elefantino', 42),
(4495, 'Voyager', 42),
(4496, 'Range Rover', 43),
(4497, 'Defender', 43),
(4498, 'Discovery', 43),
(4499, 'Freelander', 43),
(4500, 'Range Rover Sport', 43),
(4501, 'Discovery 4', 43),
(4502, 'Range Rover Evoque', 43),
(4503, 'Maxus', 44),
(4504, 'Ls400', 45),
(4505, 'Ls430', 45),
(4506, 'Gs300', 45),
(4507, 'Is200', 45),
(4508, 'Rx300', 45),
(4509, 'Gs430', 45),
(4510, 'Gs460', 45),
(4511, 'Sc430', 45),
(4512, 'Is300', 45),
(4513, 'Is250', 45),
(4514, 'Rx400h', 45),
(4515, 'Is220d', 45),
(4516, 'Rx350', 45),
(4517, 'Gs450h', 45),
(4518, 'Ls460', 45),
(4519, 'Ls600h', 45),
(4520, 'Ls', 45),
(4521, 'Gs', 45),
(4522, 'Is', 45),
(4523, 'Sc', 45),
(4524, 'Rx', 45),
(4525, 'Ct', 45),
(4526, 'Elise', 46),
(4527, 'Exige', 46),
(4528, 'Bolero Pickup', 47),
(4529, 'Goa Pickup', 47),
(4530, 'Goa', 47),
(4531, 'Cj', 47),
(4532, 'Pikup', 47),
(4533, 'Thar', 47),
(4534, 'Ghibli', 48),
(4535, 'Shamal', 48),
(4536, 'Quattroporte', 48),
(4537, '3200 Gt', 48),
(4538, 'Coupe', 48),
(4539, 'Spyder', 48),
(4540, 'Gransport', 48),
(4541, 'Granturismo', 48),
(4542, '430', 48),
(4543, 'Biturbo', 48),
(4544, '228', 48),
(4545, '224', 48),
(4546, 'Grancabrio', 48),
(4547, 'Maybach', 49),
(4548, 'Xedos 6', 50),
(4550, '121', 50),
(4551, 'Xedos 9', 50),
(4552, '323', 50),
(4553, 'Mx3', 50),
(4554, 'Rx7', 50),
(4555, 'Mx5', 50),
(4556, 'mazda3', 50),
(4557, 'Mpv', 50),
(4558, 'Demio', 50),
(4559, 'Premacy', 50),
(4560, 'Tribute', 50),
(4561, 'Mazda6', 50),
(4562, 'Mazda2', 50),
(4563, 'Rx8', 50),
(4564, 'Mazda5', 50),
(4565, 'Cx7', 50),
(4566, 'Serie B', 50),
(4567, 'B2500', 50),
(4568, 'Bt50', 50),
(4569, 'Mx6', 50),
(4570, '929', 50),
(4571, 'Cx5', 50),
(4572, 'Clase C', 51),
(4573, 'Clase E', 51),
(4574, 'Clase Sl', 51),
(4575, 'Clase S', 51),
(4576, 'Clase Cl', 51),
(4577, 'Clase G', 51),
(4578, 'Clase Slk', 51),
(4579, 'Clase V', 51),
(4580, 'Viano', 51),
(4581, 'Clase Clk', 51),
(4582, 'Clase A', 51),
(4583, 'Clase M', 51),
(4584, 'Vaneo', 51),
(4585, 'Slklasse', 51),
(4586, 'Slr Mclaren', 51),
(4587, 'Clase Cls', 51),
(4588, 'Clase R', 51),
(4589, 'Clase Gl', 51),
(4590, 'Clase B', 51),
(4591, '100d', 51),
(4592, '140d', 51),
(4593, '180d', 51),
(4594, 'Sprinter', 51),
(4595, 'Vito', 51),
(4596, 'Transporter', 51),
(4597, '280', 51),
(4598, '220', 51),
(4599, '200', 51),
(4600, '190', 51),
(4601, '600', 51),
(4602, '400', 51),
(4603, 'Clase Sl R129', 51),
(4604, '300', 51),
(4605, '500', 51),
(4606, '420', 51),
(4607, '260', 51),
(4608, '230', 51),
(4609, 'Clase Clc', 51),
(4610, 'Clase Glk', 51),
(4611, 'Sls Amg', 51),
(4612, 'Mgf', 52),
(4613, 'Tf', 52),
(4614, 'Zr', 52),
(4615, 'Zs', 52),
(4616, 'Zt', 52),
(4617, 'Ztt', 52),
(4618, 'Mini', 52),
(4619, 'Countryman', 52),
(4620, 'Paceman', 52),
(4621, 'Montero', 54),
(4622, 'Galant', 54),
(4623, 'Colt', 54),
(4624, 'Space Wagon', 54),
(4625, 'Space Runner', 54),
(4626, 'Space Gear', 54),
(4627, '3000 Gt', 54),
(4628, 'Carisma', 54),
(4629, 'Eclipse', 54),
(4630, 'Space Star', 54),
(4631, 'Montero Sport', 54),
(4632, 'Montero Io', 54),
(4633, 'Outlander', 54),
(4634, 'Lancer', 54),
(4635, 'Grandis', 54),
(4636, 'L200', 54),
(4637, 'Canter', 54),
(4638, '300 Gt', 54),
(4639, 'Asx', 54),
(4640, 'Imiev', 54),
(4641, '44', 55),
(4642, 'Plus 8', 55),
(4643, 'Aero 8', 55),
(4644, 'V6', 55),
(4645, 'Roadster', 55),
(4646, '4', 55),
(4647, 'Plus 4', 55),
(4648, 'Terrano Ii', 56),
(4649, 'Terrano', 56),
(4650, 'Micra', 56),
(4651, 'Sunny', 56),
(4652, 'Primera', 56),
(4653, 'Serena', 56),
(4654, 'Patrol', 56),
(4655, 'Maxima Qx', 56),
(4656, '200 Sx', 56),
(4657, '300 Zx', 56),
(4658, 'Patrol Gr', 56),
(4659, '100 Nx', 56),
(4660, 'Almera', 56),
(4661, 'Pathfinder', 56),
(4662, 'Almera Tino', 56),
(4663, 'Xtrail', 56),
(4664, '350z', 56),
(4665, 'Murano', 56),
(4666, 'Note', 56),
(4667, 'Qashqai', 56),
(4668, 'Tiida', 56),
(4669, 'Vanette', 56),
(4670, 'Trade', 56),
(4671, 'Vanette Cargo', 56),
(4672, 'Pickup', 56),
(4673, 'Navara', 56),
(4674, 'Cabstar E', 56),
(4675, 'Cabstar', 56),
(4676, 'Maxima', 56),
(4677, 'Camion', 56),
(4678, 'Prairie', 56),
(4679, 'Bluebird', 56),
(4680, 'Np300 Pick Up', 56),
(4681, 'Qashqai2', 56),
(4682, 'Pixo', 56),
(4683, 'Gtr', 56),
(4684, '370z', 56),
(4685, 'Cube', 56),
(4686, 'Juke', 56),
(4687, 'Leaf', 56),
(4688, 'Evalia', 56),
(4689, 'Astra', 57),
(4690, 'Vectra', 57),
(4691, 'Calibra', 57),
(4692, 'Corsa', 57),
(4693, 'Omega', 57),
(4694, 'Frontera', 57),
(4695, 'Tigra', 57),
(4696, 'Monterey', 57),
(4697, 'Sintra', 57),
(4698, 'Zafira', 57),
(4699, 'Agila', 57),
(4700, 'Speedster', 57),
(4701, 'Signum', 57),
(4702, 'Meriva', 57),
(4703, 'Antara', 57),
(4704, 'Gt', 57),
(4705, 'Combo', 57),
(4706, 'Movano', 57),
(4707, 'Vivaro', 57),
(4708, 'Kadett', 57),
(4709, 'Monza', 57),
(4710, 'Senator', 57),
(4711, 'Rekord', 57),
(4712, 'Manta', 57),
(4713, 'Ascona', 57),
(4714, 'Insignia', 57),
(4715, 'Zafira Tourer', 57),
(4716, 'Ampera', 57),
(4717, 'Mokka', 57),
(4718, 'Adam', 57),
(4719, '306', 58),
(4720, '605', 58),
(4721, '106', 58),
(4722, '205', 58),
(4723, '405', 58),
(4724, '406', 58),
(4725, '806', 58),
(4726, '807', 58),
(4727, '407', 58),
(4728, '307', 58),
(4729, '206', 58),
(4730, '607', 58),
(4731, '308', 58),
(4732, '307 Sw', 58),
(4733, '206 Sw', 58),
(4734, '407 Sw', 58),
(4735, '1007', 58),
(4736, '107', 58),
(4737, '207', 58),
(4738, '4007', 58),
(4739, 'Boxer', 58),
(4740, 'Partner', 58),
(4741, 'J5', 58),
(4742, '604', 58),
(4743, '505', 58),
(4744, '309', 58),
(4745, 'Bipper', 58),
(4746, 'Partner Origin', 58),
(4747, '3008', 58),
(4748, '5008', 58),
(4749, 'Rcz', 58),
(4750, '508', 58),
(4751, 'Ion', 58),
(4752, '208', 58),
(4753, '4008', 58),
(4754, 'Trans Sport', 59),
(4755, 'Firebird', 59),
(4756, 'Trans Am', 59),
(4757, '911', 60),
(4758, 'Boxster', 60),
(4759, 'Cayenne', 60),
(4760, 'Carrera Gt', 60),
(4761, 'Cayman', 60),
(4762, '928', 60),
(4763, '968', 60),
(4764, '944', 60),
(4765, '924', 60),
(4766, 'Panamera', 60),
(4767, '918', 60),
(4768, 'Megane', 61),
(4769, 'Safrane', 61),
(4770, 'Laguna', 61),
(4771, 'Clio', 61),
(4772, 'Twingo', 61),
(4773, 'Nevada', 61),
(4774, 'Espace', 61),
(4775, 'Spider', 61),
(4776, 'Scenic', 61),
(4777, 'Grand Espace', 61),
(4778, 'Avantime', 61),
(4779, 'Vel Satis', 61),
(4780, 'Grand Scenic', 61),
(4781, 'Clio Campus', 61),
(4782, 'Modus', 61),
(4783, 'Express', 61),
(4784, 'Trafic', 61),
(4785, 'Master', 61),
(4786, 'Kangoo', 61),
(4787, 'Mascott', 61),
(4788, 'Master Propulsion', 61),
(4789, 'Maxity', 61),
(4790, 'R19', 61),
(4791, 'R25', 61),
(4792, 'R5', 61),
(4793, 'R21', 61),
(4794, 'R4', 61),
(4795, 'Alpine', 61),
(4796, 'Fuego', 61),
(4797, 'R18', 61),
(4798, 'R11', 61),
(4799, 'R9', 61),
(4800, 'R6', 61),
(4801, 'Grand Modus', 61),
(4802, 'Kangoo Combi', 61),
(4803, 'Koleos', 61),
(4804, 'Fluence', 61),
(4805, 'Wind', 61),
(4806, 'Latitude', 61),
(4807, 'Grand Kangoo Combi', 61),
(4808, 'Siver Dawn', 62),
(4809, 'Silver Spur', 62),
(4810, 'Park Ward', 62),
(4811, 'Silver Seraph', 62),
(4812, 'Corniche', 62),
(4813, 'Phantom', 62),
(4814, 'Touring', 62),
(4815, 'Silvier', 62),
(4816, '800', 63),
(4817, '600', 63),
(4818, '100', 63),
(4819, '200', 63),
(4820, 'Coupe', 63),
(4821, '400', 63),
(4822, '45', 63),
(4823, 'Cabriolet', 63),
(4824, '25', 63),
(4825, 'Mini', 63),
(4826, '75', 63),
(4827, 'Streetwise', 63),
(4828, 'Sd', 63),
(4829, '900', 64),
(4830, '93', 64),
(4831, '9000', 64),
(4832, '95', 64),
(4833, '93x', 64),
(4834, '94x', 64),
(4835, '300', 65),
(4836, '350', 65),
(4837, 'Anibal', 65),
(4838, 'Anibal Pick Up', 65),
(4839, 'Ibiza', 66),
(4840, 'Cordoba', 66),
(4841, 'Toledo', 66),
(4842, 'Marbella', 66),
(4843, 'Alhambra', 66),
(4844, 'Arosa', 66),
(4845, 'Leon', 66),
(4846, 'Altea', 66),
(4847, 'Altea Xl', 66),
(4848, 'Altea Freetrack', 66),
(4849, 'Terra', 66),
(4850, 'Inca', 66),
(4851, 'Malaga', 66),
(4852, 'Ronda', 66),
(4853, 'Exeo', 66),
(4854, 'Mii', 66),
(4855, 'Felicia', 67),
(4856, 'Forman', 67),
(4857, 'Octavia', 67),
(4858, 'Octavia Tour', 67),
(4859, 'Fabia', 67),
(4860, 'Superb', 67),
(4861, 'Roomster', 67),
(4862, 'Scout', 67),
(4863, 'Pickup', 67),
(4864, 'Favorit', 67),
(4865, '130', 67),
(4866, 'S', 67),
(4867, 'Yeti', 67),
(4868, 'Citigo', 67),
(4869, 'Rapid', 67),
(4870, 'Smart', 68),
(4871, 'Citycoupe', 68),
(4872, 'Fortwo', 68),
(4873, 'Cabrio', 68),
(4874, 'Crossblade', 68),
(4875, 'Roadster', 68),
(4876, 'Forfour', 68),
(4877, 'Korando', 69),
(4878, 'Family', 69),
(4879, 'K4d', 69),
(4880, 'Musso', 69),
(4881, 'Korando Kj', 69),
(4882, 'Rexton', 69),
(4883, 'Rexton Ii', 69),
(4884, 'Rodius', 69),
(4885, 'Kyron', 69),
(4886, 'Actyon', 69),
(4887, 'Sports Pick Up', 69),
(4888, 'Actyon Sports Pick Up', 69),
(4889, 'Kodando', 69),
(4890, 'Legacy', 70),
(4891, 'Impreza', 70),
(4892, 'Svx', 70),
(4893, 'Justy', 70),
(4894, 'Outback', 70),
(4895, 'Forester', 70),
(4896, 'G3x Justy', 70),
(4897, 'B9 Tribeca', 70),
(4898, 'Xt', 70),
(4899, '1800', 70),
(4900, 'Tribeca', 70),
(4901, 'Wrx Sti', 70),
(4902, 'Trezia', 70),
(4903, 'Xv', 70),
(4904, 'Brz', 70),
(4905, 'Maruti', 71),
(4906, 'Swift', 71),
(4907, 'Vitara', 71),
(4908, 'Baleno', 71),
(4909, 'Samurai', 71),
(4910, 'Alto', 71),
(4911, 'Wagon R', 71),
(4912, 'Jimny', 71),
(4913, 'Grand Vitara', 71),
(4914, 'Ignis', 71),
(4915, 'Liana', 71),
(4916, 'Grand Vitara Xl7', 71),
(4917, 'Sx4', 71),
(4918, 'Splash', 71),
(4919, 'Kizashi', 71),
(4920, 'Samba', 72),
(4921, 'Tagora', 72),
(4922, 'Solara', 72),
(4923, 'Horizon', 72),
(4924, 'Telcosport', 73),
(4925, 'Telco', 73),
(4926, 'Sumo', 73),
(4927, 'Safari', 73),
(4928, 'Indica', 73),
(4929, 'Indigo', 73),
(4930, 'Grand Safari', 73),
(4931, 'Tl Pick Up', 73),
(4932, 'Xenon Pick Up', 73),
(4933, 'Vista', 73),
(4934, 'Xenon', 73),
(4935, 'Aria', 73),
(4936, 'Carina E', 74),
(4937, '4runner', 74),
(4938, 'Camry', 74),
(4939, 'Rav4', 74),
(4940, 'Celica', 74),
(4941, 'Supra', 74),
(4942, 'Paseo', 74),
(4943, 'Land Cruiser 80', 74),
(4944, 'Land Cruiser 100', 74),
(4945, 'Land Cruiser', 74),
(4946, 'Land Cruiser 90', 74),
(4947, 'Corolla', 74),
(4948, 'Auris', 74),
(4949, 'Avensis', 74),
(4950, 'Picnic', 74),
(4951, 'Yaris', 74),
(4952, 'Yaris Verso', 74),
(4953, 'Mr2', 74),
(4954, 'Previa', 74),
(4955, 'Prius', 74),
(4956, 'Avensis Verso', 74),
(4957, 'Corolla Verso', 74),
(4958, 'Corolla Sedan', 74),
(4959, 'Aygo', 74),
(4960, 'Hilux', 74),
(4961, 'Dyna', 74),
(4962, 'Land Cruiser 200', 74),
(4963, 'Verso', 74),
(4964, 'Iq', 74),
(4965, 'Urban Cruiser', 74),
(4966, 'Gt86', 74),
(4967, '100', 75),
(4968, '121', 75),
(4969, '214', 76),
(4970, '110 Stawra', 76),
(4971, '111 Stawra', 76),
(4972, '215', 76),
(4973, '112 Stawra', 76),
(4974, 'Passat', 77),
(4975, 'Golf', 77),
(4976, 'Vento', 77),
(4977, 'Polo', 77),
(4978, 'Corrado', 77),
(4979, 'Sharan', 77),
(4980, 'Lupo', 77),
(4981, 'Bora', 77),
(4982, 'Jetta', 77),
(4983, 'New Beetle', 77),
(4984, 'Phaeton', 77),
(4985, 'Touareg', 77),
(4986, 'Touran', 77),
(4987, 'Multivan', 77),
(4988, 'Caddy', 77),
(4989, 'Golf Plus', 77),
(4990, 'Fox', 77),
(4991, 'Eos', 77),
(4992, 'Caravelle', 77),
(4993, 'Tiguan', 77),
(4994, 'Transporter', 77),
(4995, 'Lt', 77),
(4996, 'Taro', 77),
(4997, 'Crafter', 77),
(4998, 'California', 77),
(4999, 'Santana', 77),
(5000, 'Scirocco', 77),
(5001, 'Passat Cc', 77),
(5002, 'Amarok', 77),
(5003, 'Beetle', 77),
(5004, 'Up', 77),
(5005, 'Cc', 77),
(5006, '440', 78),
(5007, '850', 78),
(5008, 'S70', 78),
(5009, 'V70', 78),
(5010, 'V70 Classic', 78),
(5011, '940', 78),
(5012, '480', 78),
(5013, '460', 78),
(5014, '960', 78),
(5015, 'S90', 78),
(5016, 'V90', 78),
(5017, 'Classic', 78),
(5018, 'S40', 78),
(5019, 'V40', 78),
(5020, 'V50', 78),
(5021, 'V70 Xc', 78),
(5022, 'Xc70', 78),
(5023, 'C70', 78),
(5024, 'S80', 78),
(5025, 'S60', 78),
(5026, 'Xc90', 78),
(5027, 'C30', 78),
(5028, '780', 78),
(5029, '760', 78),
(5030, '740', 78),
(5031, '240', 78),
(5032, '360', 78),
(5033, '340', 78),
(5034, 'Xc60', 78),
(5035, 'V60', 78),
(5036, 'V40 Cross Country', 78),
(5037, '353', 79),
(5038, 'Mini', 53),
(5039, 'Countryman', 53),
(5040, 'Paceman', 53),
(5042, '626', 50),
(5043, '3', 50),
(5044, 'james', 50),
(5045, '445', 50),
(5046, 'Sin Linea', 81),
(5047, 'john', 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrocarro`
--

CREATE TABLE `registrocarro` (
  `idRegistro` int(11) NOT NULL,
  `fechaRegistro` datetime NOT NULL,
  `idCarroPK` int(11) NOT NULL,
  `idSecuencia` int(11) NOT NULL,
  `Inusual` varchar(25) NOT NULL,
  `placaInusual` varchar(6) NOT NULL,
  `idConceptoFK` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secuenciacarro`
--

CREATE TABLE `secuenciacarro` (
  `intSecuencia` int(11) NOT NULL,
  `descripcionSecuencia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `secuenciacarro`
--

INSERT INTO `secuenciacarro` (`intSecuencia`, `descripcionSecuencia`) VALUES
(1, 'Salida'),
(2, 'Entrada'),
(3, 'Visitantes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarifacarro`
--

CREATE TABLE `tarifacarro` (
  `intTarifa` int(11) NOT NULL,
  `valorTarifa` int(11) NOT NULL,
  `estadoTarifa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tarifacarro`
--

INSERT INTO `tarifacarro` (`intTarifa`, `valorTarifa`, `estadoTarifa`) VALUES
(1, 130000, 1),
(2, 120000, 1),
(3, 85000, 1),
(4, 105000, 1),
(5, 150000, 1),
(6, 130000, 1),
(7, 135000, 1),
(8, 100000, 1),
(9, 90000, 1),
(10, 125000, 1),
(11, 140000, 1),
(12, 95000, 1),
(13, 75000, 1),
(15, 300000, 1),
(16, 67500, 1),
(17, 105000, 1),
(18, 110000, 1),
(19, 13500, 1),
(20, 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipocarro`
--

CREATE TABLE `tipocarro` (
  `idTipo` int(11) NOT NULL,
  `descripcionTipo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipocarro`
--

INSERT INTO `tipocarro` (`idTipo`, `descripcionTipo`) VALUES
(1, 'Camioneta'),
(2, 'Camión'),
(3, 'bus'),
(4, 'Busetón'),
(5, 'Taxi'),
(6, 'Particular'),
(7, 'Buseta'),
(8, 'Camioneta'),
(9, 'Inusual'),
(10, 'Sin carroceria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipopagocarro`
--

CREATE TABLE `tipopagocarro` (
  `idTipopago` int(11) NOT NULL,
  `descripcionTipopago` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipopagocarro`
--

INSERT INTO `tipopagocarro` (`idTipopago`, `descripcionTipopago`) VALUES
(1, 'Mensual'),
(2, 'Quinsenal'),
(3, 'Semanal'),
(4, 'Diario'),
(5, 'Pago por horas');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colorcarro`
--
ALTER TABLE `colorcarro`
  ADD PRIMARY KEY (`idColor`);

--
-- Indices de la tabla `conceptoparq`
--
ALTER TABLE `conceptoparq`
  ADD PRIMARY KEY (`idParq`);

--
-- Indices de la tabla `marcacarro`
--
ALTER TABLE `marcacarro`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indices de la tabla `pagoscarro`
--
ALTER TABLE `pagoscarro`
  ADD PRIMARY KEY (`intPago`),
  ADD KEY `placaPagoFK` (`placaPagoFK`);

--
-- Indices de la tabla `parqcarros`
--
ALTER TABLE `parqcarros`
  ADD PRIMARY KEY (`idCarro`),
  ADD KEY `idUsuarioFK` (`idUsuarioFK`),
  ADD KEY `tipoCarroPK` (`tipoCarroPK`),
  ADD KEY `valorCarro` (`valorCarro`),
  ADD KEY `tipopagoCarroPK` (`tipopagoCarroPK`),
  ADD KEY `marcaCarroPK` (`marcaCarroPK`),
  ADD KEY `colorCarroPK` (`colorCarroPK`),
  ADD KEY `estadoCarroPK` (`estadoCarroPK`),
  ADD KEY `idUsuarioFK_2` (`idUsuarioFK`);

--
-- Indices de la tabla `parqestado`
--
ALTER TABLE `parqestado`
  ADD PRIMARY KEY (`idEstado`);

--
-- Indices de la tabla `parqpassword`
--
ALTER TABLE `parqpassword`
  ADD PRIMARY KEY (`idPassword`),
  ADD UNIQUE KEY `idUsuarioFK` (`idUsuarioFK`);

--
-- Indices de la tabla `parqusuarios`
--
ALTER TABLE `parqusuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `estadoUsuarioPK` (`estadoUsuarioPK`);

--
-- Indices de la tabla `referenciacarro`
--
ALTER TABLE `referenciacarro`
  ADD PRIMARY KEY (`idReferencia`),
  ADD KEY `fkReferencia` (`fkReferencia`);

--
-- Indices de la tabla `registrocarro`
--
ALTER TABLE `registrocarro`
  ADD PRIMARY KEY (`idRegistro`),
  ADD KEY `idCarroPK` (`idCarroPK`),
  ADD KEY `idSecuencia` (`idSecuencia`),
  ADD KEY `idConceptoFK` (`idConceptoFK`);

--
-- Indices de la tabla `secuenciacarro`
--
ALTER TABLE `secuenciacarro`
  ADD PRIMARY KEY (`intSecuencia`);

--
-- Indices de la tabla `tarifacarro`
--
ALTER TABLE `tarifacarro`
  ADD PRIMARY KEY (`intTarifa`),
  ADD KEY `estadoTarifa` (`estadoTarifa`);

--
-- Indices de la tabla `tipocarro`
--
ALTER TABLE `tipocarro`
  ADD PRIMARY KEY (`idTipo`);

--
-- Indices de la tabla `tipopagocarro`
--
ALTER TABLE `tipopagocarro`
  ADD PRIMARY KEY (`idTipopago`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `colorcarro`
--
ALTER TABLE `colorcarro`
  MODIFY `idColor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT de la tabla `conceptoparq`
--
ALTER TABLE `conceptoparq`
  MODIFY `idParq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `marcacarro`
--
ALTER TABLE `marcacarro`
  MODIFY `idMarca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT de la tabla `pagoscarro`
--
ALTER TABLE `pagoscarro`
  MODIFY `intPago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `parqcarros`
--
ALTER TABLE `parqcarros`
  MODIFY `idCarro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `parqestado`
--
ALTER TABLE `parqestado`
  MODIFY `idEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `parqpassword`
--
ALTER TABLE `parqpassword`
  MODIFY `idPassword` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `parqusuarios`
--
ALTER TABLE `parqusuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `referenciacarro`
--
ALTER TABLE `referenciacarro`
  MODIFY `idReferencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5048;

--
-- AUTO_INCREMENT de la tabla `registrocarro`
--
ALTER TABLE `registrocarro`
  MODIFY `idRegistro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `secuenciacarro`
--
ALTER TABLE `secuenciacarro`
  MODIFY `intSecuencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tarifacarro`
--
ALTER TABLE `tarifacarro`
  MODIFY `intTarifa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `tipocarro`
--
ALTER TABLE `tipocarro`
  MODIFY `idTipo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `tipopagocarro`
--
ALTER TABLE `tipopagocarro`
  MODIFY `idTipopago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pagoscarro`
--
ALTER TABLE `pagoscarro`
  ADD CONSTRAINT `pagoscarro_ibfk_1` FOREIGN KEY (`placaPagoFK`) REFERENCES `parqcarros` (`idCarro`);

--
-- Filtros para la tabla `parqcarros`
--
ALTER TABLE `parqcarros`
  ADD CONSTRAINT `parqcarros_ibfk_1` FOREIGN KEY (`idUsuarioFK`) REFERENCES `parqusuarios` (`idUsuario`),
  ADD CONSTRAINT `parqcarros_ibfk_2` FOREIGN KEY (`tipoCarroPK`) REFERENCES `tipocarro` (`idTipo`),
  ADD CONSTRAINT `parqcarros_ibfk_3` FOREIGN KEY (`marcaCarroPK`) REFERENCES `marcacarro` (`idMarca`),
  ADD CONSTRAINT `parqcarros_ibfk_4` FOREIGN KEY (`colorCarroPK`) REFERENCES `colorcarro` (`idColor`),
  ADD CONSTRAINT `parqcarros_ibfk_5` FOREIGN KEY (`tipopagoCarroPK`) REFERENCES `tipopagocarro` (`idTipopago`),
  ADD CONSTRAINT `parqcarros_ibfk_6` FOREIGN KEY (`valorCarro`) REFERENCES `tarifacarro` (`intTarifa`) ON UPDATE CASCADE,
  ADD CONSTRAINT `parqcarros_ibfk_7` FOREIGN KEY (`estadoCarroPK`) REFERENCES `parqestado` (`idEstado`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `parqpassword`
--
ALTER TABLE `parqpassword`
  ADD CONSTRAINT `parqpassword_ibfk_1` FOREIGN KEY (`idUsuarioFK`) REFERENCES `parqusuarios` (`idUsuario`);

--
-- Filtros para la tabla `parqusuarios`
--
ALTER TABLE `parqusuarios`
  ADD CONSTRAINT `parqusuarios_ibfk_1` FOREIGN KEY (`estadoUsuarioPK`) REFERENCES `parqestado` (`idEstado`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `referenciacarro`
--
ALTER TABLE `referenciacarro`
  ADD CONSTRAINT `referenciacarro_ibfk_1` FOREIGN KEY (`fkReferencia`) REFERENCES `marcacarro` (`idMarca`);

--
-- Filtros para la tabla `registrocarro`
--
ALTER TABLE `registrocarro`
  ADD CONSTRAINT `registrocarro_ibfk_1` FOREIGN KEY (`idCarroPK`) REFERENCES `parqcarros` (`idCarro`),
  ADD CONSTRAINT `registrocarro_ibfk_2` FOREIGN KEY (`idSecuencia`) REFERENCES `secuenciacarro` (`intSecuencia`),
  ADD CONSTRAINT `registrocarro_ibfk_3` FOREIGN KEY (`idConceptoFK`) REFERENCES `conceptoparq` (`idParq`);

--
-- Filtros para la tabla `tarifacarro`
--
ALTER TABLE `tarifacarro`
  ADD CONSTRAINT `tarifacarro_ibfk_1` FOREIGN KEY (`estadoTarifa`) REFERENCES `parqestado` (`idEstado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
