-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 13-01-2017 a las 21:14:00
-- Versión del servidor: 5.5.49-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `rifa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bankaccounts`
--

CREATE TABLE IF NOT EXISTS `bankaccounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_user` int(10) unsigned NOT NULL,
  `nro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banco` enum('Banesco','Provincial','Mercantil','Bicentenario','Venezuela') COLLATE utf8_unicode_ci NOT NULL,
  `tipo` enum('Ahorro','Corriente') COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `titular` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bankaccounts_id_user_foreign` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_12_15_000717_create_products_table', 1),
('2016_12_15_011047_create_purchases_table', 1),
('2016_12_16_002454_create_notifypayments_table', 1),
('2016_12_16_004401_create_bankaccounts_table', 1),
('2016_12_21_200129_create_slider_table', 1),
('2016_12_21_200259_create_notice_table', 1),
('2016_12_23_205813_create_thumbnails_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notice`
--

CREATE TABLE IF NOT EXISTS `notice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `notice`
--

INSERT INTO `notice` (`id`, `titulo`, `contenido`, `fecha`, `imagen`, `estatus`, `created_at`, `updated_at`) VALUES
(1, 'Todo un nuevo comienzo', 'Estamos iniciando con esta gran oportunidad, únete y síguenos en todas nuestras rifas y participa. \r\n\r\nAtt: Admin.', '2017-01-14', '19logo.png', 0, '2017-01-14 05:56:19', '2017-01-14 05:56:19'),
(2, 'Pronto Nuestro Lanzamiento!', 'Pronto estaremos operando. Esta atento, y se uno de los primeros en poder ganar uno de nuestros productos.', '2017-01-14', '16workflow-350x350-59.png', 0, '2017-01-14 05:58:16', '2017-01-14 05:58:16'),
(3, 'Dando Algunos Retoques!', 'Estamos finalizando la ultima etapa de diseño. Pronto anunciaremos el lanzamiento oficial de tusgananciasonline.com.ve\r\n\r\nAtt: Admin', '2017-01-14', '10com-350x350-41.png', 0, '2017-01-14 06:07:10', '2017-01-14 06:07:10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notifypayments`
--

CREATE TABLE IF NOT EXISTS `notifypayments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_purchase` int(10) unsigned NOT NULL,
  `nro_referencia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `monto` double(8,2) NOT NULL,
  `ci` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banco` enum('Banesco','Provincial','Mercantil','Bicentenario','Venezuela') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifypayments_id_purchase_foreign` (`id_purchase`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `serie` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `monto` double(8,2) NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numeroGanador` int(11) NOT NULL,
  `loteria` enum('Chance A','Chance B') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `purchases`
--

CREATE TABLE IF NOT EXISTS `purchases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_product` int(10) unsigned NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `nro` int(11) NOT NULL,
  `estatus` enum('Pagado','Por Pagar','Procesando','Perdido') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `purchases_id_product_foreign` (`id_product`),
  KEY `purchases_id_user_foreign` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `texto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estatus` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `slider`
--

INSERT INTO `slider` (`id`, `texto`, `imagen`, `estatus`, `created_at`, `updated_at`) VALUES
(1, 'Prueba Tu Oportunidad, que esperas? Únete!', '7coffee-923094-1920-1920x1280-16.jpg', 0, '2017-01-14 05:54:07', '2017-01-14 05:54:07'),
(2, 'A solo un Click! Entra y Participa!', '46macbook-926425-1920-1920x1279-92.jpg', 0, '2017-01-14 05:59:46', '2017-01-14 05:59:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `thumbnails`
--

CREATE TABLE IF NOT EXISTS `thumbnails` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `referido` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `saldo` double(15,2) NOT NULL,
  `type` enum('cliente','sistema','admin') COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `phone`, `referido`, `saldo`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sayagowilson92@gmail.com', '4O6Xo4ogUocFU', 'admin', '00000000', '', 0.00, 'admin', NULL, NULL, NULL);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bankaccounts`
--
ALTER TABLE `bankaccounts`
  ADD CONSTRAINT `bankaccounts_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `notifypayments`
--
ALTER TABLE `notifypayments`
  ADD CONSTRAINT `notifypayments_id_purchase_foreign` FOREIGN KEY (`id_purchase`) REFERENCES `purchases` (`id`);

--
-- Filtros para la tabla `purchases`
--
ALTER TABLE `purchases`
  ADD CONSTRAINT `purchases_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `purchases_id_product_foreign` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
