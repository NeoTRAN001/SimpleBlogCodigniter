-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2020 a las 08:03:55
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `blog`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `slug`, `created_at`) VALUES
(1, 'This is a Test Blog', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ac dapibus turpis, ac consectetur felis. Fusce et purus quis lectus feugiat finibus. Pellentesque vel vestibulum leo, non ullamcorper quam. Nulla pellentesque, massa sed semper mollis, enim lectus dapibus nunc, id sollicitudin nulla leo at neque. In hac habitasse platea dictumst. Ut sit amet eros quis justo scelerisque tempor ut in erat. Vivamus fermentum velit eget libero sagittis euismod. In sed enim nec diam imperdiet dictum ac ac nulla. Aliquam sed purus ac diam gravida suscipit id quis mauris. Maecenas imperdiet sit amet tortor et convallis. Aenean nibh enim, viverra ac tellus maximus, dictum egestas odio. Phasellus quis ante mattis, mollis massa a, pellentesque turpis. Nullam vulputate urna urna, convallis semper est porttitor lacinia.', 'Este-es-un-blog-de-prueba', '2020-07-05 00:59:36');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
