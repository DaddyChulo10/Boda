-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 22, 2022 at 04:00 AM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id18459673_boda`
--
CREATE DATABASE IF NOT EXISTS `id18459673_boda` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id18459673_boda`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `contraseña` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nombre`, `usuario`, `contraseña`) VALUES
(1, 'Administrador Pro', 'admin', '$2y$10$/eDvbC/H1/a1lmQW1wXb9ONJ1nqf0fgrdkBh90LAB2NkygJL9RmlO');

-- --------------------------------------------------------

--
-- Table structure for table `invitados`
--

CREATE TABLE `invitados` (
  `id` int(11) NOT NULL,
  `foa` varchar(255) NOT NULL,
  `familia` varchar(255) NOT NULL,
  `novios` varchar(255) NOT NULL,
  `invitados` int(11) NOT NULL,
  `niños` int(11) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `estatus` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `hora` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invitados`
--

INSERT INTO `invitados` (`id`, `foa`, `familia`, `novios`, `invitados`, `niños`, `codigo`, `estatus`, `fecha`, `hora`) VALUES
(31, 'familia', 'Torres Pablo', 'Por Ivone', 2, 2, '1456c95179e54962be5c', 'Invitado', '0000-00-00', 'Sin hora'),
(32, 'familia', 'Torres Hernández ', 'Por Ivone', 3, 1, '3c6a3155ba5f478087de', 'Invitado', '0000-00-00', 'Sin hora'),
(33, 'familia', 'González Torres ', 'Por Ivone', 4, 0, '90cb05aecbbe17c34415', 'Invitado', '0000-00-00', 'Sin hora'),
(34, 'familia', 'Armenta Torres ', 'Por Ivone', 3, 0, '6e8189d40b79cd7720ad', 'Invitado', '0000-00-00', 'Sin hora'),
(35, 'familia', 'Pablo Perez', 'Por Ivone', 2, 2, '3e4897d2b56eaa4b1a77', 'Invitado', '0000-00-00', 'Sin hora'),
(36, 'familia', 'Pablo Cuaya', 'Por Ivone', 2, 0, '4f3e36e4f8cbade038e2', 'Invitado', '0000-00-00', 'Sin hora'),
(37, 'familia', 'Cirne Castillo', 'Por Ivone', 3, 0, '5e8d9b80cfbb13c39e52', 'Invitado', '0000-00-00', 'Sin hora'),
(38, 'familia', 'Pastrana Castellanos', 'Por Ivone', 6, 1, 'd862f3401ff01ee60e88', 'Invitado', '0000-00-00', 'Sin hora'),
(40, 'amigos', 'Maria Pina Rodriguez Sanchez y familia', 'Por Javier', 3, 0, '363d3619cbd28c300d19', 'Invitado', '0000-00-00', 'Sin hora'),
(41, 'amigos', 'Miguel Rodriguez Sanchez y familia ', 'Por Javier', 5, 2, '6fbe07da70f7e27917cc', 'Invitado', '0000-00-00', 'Sin hora'),
(44, 'familia', 'Juarez Jimenez', 'Por Javier', 4, 1, '59d1530572b2515f9acd', 'Invitado', '0000-00-00', 'Sin hora'),
(45, 'familia', 'Sanchez Juarez ', 'Por Javier', 4, 0, '8c626ad1fef974fd4671', 'Invitado', '0000-00-00', 'Sin hora'),
(47, 'familia', ' Medellín Rodriguez', 'Por Javier', 3, 0, '308961f0e5814a6be835', 'Invitado', '0000-00-00', 'Sin hora'),
(48, 'familia', 'Xochitemol Sanchez ', 'Por Javier', 4, 0, 'f368fe9bc34c64d0c308', 'Invitado', '0000-00-00', 'Sin hora'),
(49, 'familia', 'Gonzalez Lopez', 'Por Ivone', 2, 2, 'da5661a640856b8c19a9', 'Invitado', '0000-00-00', 'Sin hora'),
(51, 'familia', 'Ayometzi Banda', 'Por Javier', 4, 0, 'f4d58170796f4cecfdc9', 'Invitado', '0000-00-00', 'Sin hora'),
(52, 'familia', 'Pérez Ayometzi', 'Por Javier', 2, 0, 'e7c444150e1b26eb3b1f', 'Invitado', '0000-00-00', 'Sin hora'),
(53, 'familia', 'Martinez Salamanca', 'Por Ivone', 2, 0, 'c457570bd136f6d733cf', 'Invitado', '0000-00-00', 'Sin hora'),
(56, 'familia', 'Martinez Cruz', 'Por Ivone', 4, 0, '68d2d36bfeba4f8b02b7', 'Invitado', '0000-00-00', 'Sin hora'),
(58, 'familia', 'Martinez Ramos', 'Por Ivone', 3, 0, 'e79b37e5f88a3f3f533e', 'Invitado', '0000-00-00', 'Sin hora'),
(59, 'familia', 'Salamanca Aguilar', 'Por Ivone', 3, 2, 'db9a7e1d81b0de84f825', 'Invitado', '0000-00-00', 'Sin hora'),
(61, 'familia', 'Rodriguez Lopez ', 'Por Javier', 8, 1, 'fe0cf9e4b46a8821b1fe', 'Invitado', '0000-00-00', 'Sin hora'),
(64, 'familia', 'Salamanca Reyes', 'Por Ivone', 2, 0, 'cae7291bb48f2b29518b', 'Invitado', '0000-00-00', 'Sin hora'),
(65, 'familia', 'Cruz Salamanca', 'Por Ivone', 4, 1, 'fbd09c9ee23446b4691a', 'Invitado', '0000-00-00', 'Sin hora'),
(66, 'amigos', 'Gabriela Rodriguez Carvajal ', 'Por Ivone', 1, 1, '37e184bdfac42398ace2', 'Invitado', '0000-00-00', 'Sin hora'),
(68, 'familia', 'Ramirez Bautista', 'Por Ivone', 3, 0, 'cc11de77f00489b75198', 'Invitado', '0000-00-00', 'Sin hora'),
(69, 'amigos', 'Verónica Castillo Sanchez', 'Por Ivone', 3, 1, '45c7c797485b6062b045', 'Invitado', '0000-00-00', 'Sin hora'),
(70, 'familia', 'Rodriguez Cuamatzi', 'Por Javier', 2, 0, 'f8f797d7f19911fd9f91', 'Invitado', '0000-00-00', 'Sin hora'),
(72, 'familia', 'Sánchez Hernández', 'Por Ivone', 5, 0, 'b762183c497975ec0c33', 'Invitado', '0000-00-00', 'Sin hora'),
(73, 'amigos', 'Ricardo Hernándes López', 'Por Ivone', 2, 0, 'd44c0c0f4a8e121fc95f', 'Invitado', '0000-00-00', 'Sin hora'),
(74, 'amigos', 'Beatriz López ', 'Por Ivone', 2, 0, '2b3eb204ba78c2111ef3', 'Invitado', '0000-00-00', 'Sin hora'),
(75, 'familia', 'López Pérez', 'Por Ivone', 3, 0, 'b639e3f7c70c386d38da', 'Invitado', '0000-00-00', 'Sin hora'),
(76, 'familia', 'Pérez Salamanca', 'Por Ivone', 2, 0, '9abff1cebf27c80d1a8a', 'Invitado', '0000-00-00', 'Sin hora'),
(77, 'familia', 'Morales Hernández', 'Por Ivone', 7, 0, '4678a880a435b44ce66a', 'Invitado', '0000-00-00', 'Sin hora'),
(78, 'amigos', 'Martín Hernández López', 'Por Ivone', 2, 0, 'cea892f5d844bb4fad63', 'Invitado', '0000-00-00', 'Sin hora'),
(79, 'amigos', 'Angélica Martinez Spindola', 'Por Ivone', 2, 0, 'ccfe22a7b02589f40886', 'Invitado', '0000-00-00', 'Sin hora'),
(80, 'familia', 'Meneses López', 'Por Ivone', 2, 2, 'b8a1562d11e6d31d3473', 'Invitado', '0000-00-00', 'Sin hora'),
(81, 'amigos', 'Mario Benitez López y familia', 'Por Ivone', 2, 1, '427e61d23e4fce6c30a2', 'Invitado', '0000-00-00', 'Sin hora'),
(84, 'familia', 'De la Fuente Ayometzi', 'Por Javier', 5, 1, 'b8a4d71a5dd972aa33aa', 'Invitado', '0000-00-00', 'Sin hora'),
(85, 'familia', 'Juarez Reyes', 'Por Javier', 4, 0, '3c08ee946542bf4a083e', 'Invitado', '0000-00-00', 'Sin hora'),
(86, 'amigos', 'Josefina Yvette Orozco Martinez', 'Por Javier', 2, 1, '60d79e0a340643b4b7f6', 'Invitado', '0000-00-00', 'Sin hora'),
(87, 'familia', 'Xochitemol Tzompantzi', 'Por Javier', 5, 0, '5f7b493d03dc5cfb17d9', 'Invitado', '0000-00-00', 'Sin hora'),
(88, 'familia', 'Xolocotzi Muñoz', 'Por Javier', 10, 1, '9d49c68d6a5071c456e3', 'Invitado', '0000-00-00', 'Sin hora'),
(89, 'amigos', 'Daniel Jiménez Hernández', 'Por Ivone', 2, 0, 'f8463c3926fbc7e9216e', 'Invitado', '0000-00-00', 'Sin hora'),
(90, 'familia', 'Benitez López', 'Por Ivone', 5, 0, '29b7181293e7171a6a2c', 'Invitado', '0000-00-00', 'Sin hora'),
(91, 'amigos', 'Bernardino Hernández López', 'Por Ivone', 4, 0, '7c8ef7fe667b32c764b0', 'Invitado', '0000-00-00', 'Sin hora'),
(92, 'familia', 'Perez Saviñon', 'Por Ivone', 10, 0, '286c297c2f49b1b623fc', 'Invitado', '0000-00-00', 'Sin hora'),
(93, 'familia', 'Victoria Esteves ', 'Por Ivone', 18, 2, 'f194047bd0ec95677579', 'Invitado', '0000-00-00', 'Sin hora'),
(95, 'familia', 'Rojas Castillo ', 'Por Javier', 2, 1, '70452b34d3a4a4ef08ec', 'Invitado', '0000-00-00', 'Sin hora'),
(97, 'familia', 'Rendón Vega ', 'Por Javier', 2, 0, 'c1dd004be1510f69806b', 'Invitado', '0000-00-00', 'Sin hora'),
(98, 'familia', 'González Cervantes', 'Por Javier', 2, 0, 'b63a8488b59801b47b45', 'Invitado', '0000-00-00', 'Sin hora'),
(100, 'familia', 'Sanchez Rodriguez', 'Por Javier', 4, 0, 'd041d8193b12f17c77a2', 'Invitado', '0000-00-00', 'Sin hora'),
(102, 'familia', 'Corona Flores', 'Por Javier', 3, 2, '98f7651e7d3973f0fbe8', 'Invitado', '0000-00-00', 'Sin hora'),
(103, 'familia', 'Ramirez Torres ', 'Por Javier', 4, 0, '0ed41e13dad6be3949a2', 'Invitado', '0000-00-00', 'Sin hora'),
(104, 'familia', 'Laura Marcela Obaldía García y Familia', 'Por Javier', 2, 0, '8657713c14d29657468b', 'Invitado', '0000-00-00', 'Sin hora'),
(106, 'familia', 'López Salamanca', 'Por Ivone', 4, 0, 'b5b89acbc8d998b6b995', 'Invitado', '0000-00-00', 'Sin hora'),
(107, 'familia', 'Nezahualcóyotl Rodriguez', 'Por Javier', 4, 1, 'b60420374b25fb314c6a', 'Invitado', '0000-00-00', 'Sin hora'),
(109, 'familia', 'Urbina Romano ', 'Por Javier', 3, 0, 'da7ed69d3854252d25cc', 'Invitado', '0000-00-00', 'Sin hora'),
(111, 'familia', 'Aguilar Romano ', 'Por Javier', 2, 0, 'ed44548dbc7a5695f903', 'Invitado', '0000-00-00', 'Sin hora'),
(114, 'amigos', 'José Francisco López y Familia', 'Por Ivone', 4, 2, '788f2e754cc0c2e8b444', 'Invitado', '0000-00-00', 'Sin hora'),
(115, 'familia', 'Rodríguez, Nuñez', 'Por Ivone', 3, 1, '30cad556f14b73eeaa45', 'Invitado', '0000-00-00', 'Sin hora'),
(116, 'amigos', 'Monica Romano Rodriguez', 'Por Javier', 2, 0, '4e5a028b0d54c0c2575b', 'Invitado', '0000-00-00', 'Sin hora'),
(117, 'familia', 'Xolocotzi  Silva', 'Por Ivone', 4, 1, '38ad0591065d658fd4f5', 'Invitado', '0000-00-00', 'Sin hora'),
(118, 'familia', 'Salamanca Barrales', 'Por Ivone', 2, 0, 'baa72739667852bf1f71', 'Invitado', '0000-00-00', 'Sin hora'),
(119, 'amigos', 'José Juan González Carvajal y Familia', 'Por Ivone', 4, 0, '107852a9927048bc1565', 'Invitado', '0000-00-00', 'Sin hora'),
(122, 'amigos', 'Ethel Romero Nezahualcóyotl', 'Por Javier', 4, 0, 'ccbfa4e4e86bf5206108', 'Invitado', '0000-00-00', 'Sin hora'),
(123, 'familia', 'Esperanza Rodriguez Sanchez y Familia ', 'Por Javier', 6, 0, '6d8aa9d4bb1046b92897', 'Invitado', '0000-00-00', 'Sin hora'),
(124, 'familia', 'Hernández Silva', 'Por Ivone', 6, 0, 'b3d1b3be71447fc108ea', 'Invitado', '0000-00-00', 'Sin hora');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invitados`
--
ALTER TABLE `invitados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invitados`
--
ALTER TABLE `invitados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
