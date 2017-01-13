-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 13 2017 г., 17:13
-- Версия сервера: 5.7.11
-- Версия PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `colorfull`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories_db`
--

CREATE TABLE `categories_db` (
  `id_cat` int(11) NOT NULL,
  `categories` varchar(100) NOT NULL,
  `cat_name` text NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories_db`
--

INSERT INTO `categories_db` (`id_cat`, `categories`, `cat_name`, `info`) VALUES
(1, 'material', 'Material', ''),
(2, 'cars', 'Автомобили', ''),
(3, 'nature', 'Природа', ''),
(4, '404\r\n', '', 'Страница не существует'),
(5, 'main', 'Colorfull gallery', 'Colorfull gallery');

-- --------------------------------------------------------

--
-- Структура таблицы `images_db`
--

CREATE TABLE `images_db` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `img1920x1080` text NOT NULL,
  `img1024x768` text NOT NULL,
  `img960x800` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images_db`
--

INSERT INTO `images_db` (`id`, `url`, `img1920x1080`, `img1024x768`, `img960x800`) VALUES
(1, 'cars', 'img/img/categories/cars/201235_1920.jpg', 'img/img/categories/cars/201235_1024.jpg', 'img/img/categories/cars/201235_960.jpg'),
(2, 'nature', 'img/img/categories/nature/201182_1920.jpg', '', ''),
(5, 'material', 'img/img/categories/material/Material_Design_Wallpaper_WALLPAPERDNA (2).png', '', ''),
(6, 'material', 'img/img/categories/material/Material_Design_Wallpaper_WALLPAPERDNA (3).png', '', ''),
(7, 'material', 'img/img/categories/material/Material_Design_Wallpaper_WALLPAPERDNA (26).png', '', ''),
(8, 'material', 'img/img/categories/material/Material_Design_Wallpaper_WALLPAPERDNA (1).png', '', ''),
(9, 'material', 'img/img/categories/material/material_design-wallpaper-3554x1999.jpg', '', ''),
(10, 'material', 'img/img/categories/material/Material-Design-17.jpg', '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `users_db`
--

CREATE TABLE `users_db` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_db`
--

INSERT INTO `users_db` (`id`, `user`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories_db`
--
ALTER TABLE `categories_db`
  ADD PRIMARY KEY (`id_cat`);

--
-- Индексы таблицы `images_db`
--
ALTER TABLE `images_db`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_db`
--
ALTER TABLE `users_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories_db`
--
ALTER TABLE `categories_db`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `images_db`
--
ALTER TABLE `images_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `users_db`
--
ALTER TABLE `users_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
