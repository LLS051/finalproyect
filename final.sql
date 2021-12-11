-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2021 a las 16:05:21
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articles`
--

CREATE TABLE `articles` (
  `id_articles` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `contents` text COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `date_pub` datetime DEFAULT current_timestamp(),
  `date_act_up` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `articles`
--

INSERT INTO `articles` (`id_articles`, `category`, `title`, `contents`, `image`, `date_pub`, `date_act_up`) VALUES
(49, 1, 'Adidas Originals', '<p style=\"margin: 0.5em 0px; color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">Es una línea de ropa deportiva casual, la línea heredada de la marca alemana de ropa deportiva Adidas especializada en zapatos, camisas, abrigos, bolsos, gafas de sol y otras prendas de accesorios</p><div><br></div>', '../frontend/views/images/adidas2964268038236.jpg', '2021-12-10 00:00:00', '2021-12-11 08:58:40'),
(50, 1, 'Adidas Performance', '<p><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">Firma dedicada a toda clase de indumentaria deportiva (camisetas, medias,&nbsp;</span><a href=\"https://es.wikipedia.org/wiki/Bot%C3%ADn\" class=\"mw-disambig\" title=\"Botín\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">botines</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">, pelotas, etc.). El logo está formado por tres tiras verticales que van de descendente a ascendente. Esta división reemplazó a Adidas Originals como logo para la indumentaria deportiva, aunque también se ven algunas prendas de vestir con este mismo logo.</span><br></p>', '../frontend/views/images/adidas59882219.jpg', '2021-12-11 00:00:00', '2021-12-11 08:59:09'),
(51, 2, 'Nike', '<p><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">Es uno de los mayores proveedores de material deportivo del mundo solamente bajo&nbsp;</span><a href=\"https://es.wikipedia.org/wiki/Adidas\" title=\"Adidas\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">Adidas</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">,</span><sup id=\"cite_ref-6\" class=\"reference separada\" style=\"line-height: 1em; unicode-bidi: isolate; white-space: nowrap; margin-right: 0.6ch; color: rgb(32, 33, 34); font-family: sans-serif;\"><a href=\"https://es.wikipedia.org/wiki/Nike#cite_note-6\" style=\"color: rgb(6, 69, 173); background-image: none; background-position: initial; background-size: initial; background-repeat: initial; background-attachment: initial; background-origin: initial; background-clip: initial;\">5</a></sup><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">​ con unos ingresos de más de 24,100 millones de&nbsp;</span><a href=\"https://es.wikipedia.org/wiki/D%C3%B3lares_estadounidenses\" class=\"mw-redirect\" title=\"Dólares estadounidenses\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">dólares estadounidenses</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;y un total en 2019 de unos 76.700 empleados. La&nbsp;</span><a href=\"https://es.wikipedia.org/wiki/Marca_(registro)\" title=\"Marca (registro)\" style=\"color: rgb(6, 69, 173); background: none rgb(255, 255, 255); font-family: sans-serif; font-size: 14px;\">marca</a><span style=\"color: rgb(32, 33, 34); font-family: sans-serif; font-size: 14px;\">&nbsp;por sí sola tiene un valor de 47,400 millones de dólares estadounidenses, lo que la convierte en la marca más valiosa entre las corporaciones deportivas.</span><br></p>', '../frontend/views/images/7f94a632c71eee51e78fb3356f241abc6591170834562194.jpg', '2021-12-11 00:00:00', '2021-12-11 08:59:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `description_category` varchar(100) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id_category`, `name_category`, `description_category`) VALUES
(1, 'Zapatos', NULL),
(2, 'Camisas', NULL),
(3, 'Pantalones', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolls_generals`
--

CREATE TABLE `rolls_generals` (
  `id_rolls` int(11) NOT NULL,
  `name_rolls` varchar(45) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `rolls_generals`
--

INSERT INTO `rolls_generals` (`id_rolls`, `name_rolls`) VALUES
(1, 'Administrador'),
(2, 'Editor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(100) NOT NULL,
  `fk_roll` int(11) DEFAULT 2,
  `nick_user` varchar(40) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `name_user` varchar(40) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `email_user` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `password_user` text COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `imagen_user` text COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `phone` int(10) DEFAULT NULL,
  `roll` varchar(15) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id_user`, `fk_roll`, `nick_user`, `name_user`, `email_user`, `password_user`, `imagen_user`, `status`, `phone`, `roll`) VALUES
(1, 1, 'admin', 'Administrador', 'admin@test.com', 'admin', 'views/dist/img/avatar5.png', 1, 87027327, 'administrador'),
(2, 1, 'luis', 'Luis Lopez', 'admin@gmail.com', 'admin', NULL, 1, 89898787, 'administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id_articles`),
  ADD KEY `category` (`category`);

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indices de la tabla `rolls_generals`
--
ALTER TABLE `rolls_generals`
  ADD PRIMARY KEY (`id_rolls`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_roll` (`fk_roll`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `articles`
--
ALTER TABLE `articles`
  MODIFY `id_articles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rolls_generals`
--
ALTER TABLE `rolls_generals`
  MODIFY `id_rolls` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
