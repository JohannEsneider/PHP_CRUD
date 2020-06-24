CREATE DATABASE IF NOT EXISTS taller_php;
USE mvc;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE `libros` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `autor` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `numCapitulos` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

ALTER TABLE `libros`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

  