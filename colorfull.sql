-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 23 2017 г., 00:03
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

CREATE TABLE IF NOT EXISTS `categories_db` (
  `id_cat` int(11) NOT NULL,
  `categories` varchar(100) NOT NULL,
  `cat_name` text NOT NULL,
  `info` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories_db`
--

INSERT INTO `categories_db` (`id_cat`, `categories`, `cat_name`, `info`) VALUES
(4, '404\r\n', '', 'Страница не существует'),
(5, 'main', 'Colorfull gallery', 'Colorfull gallery'),
(8, 'sport', 'Спорт', ''),
(15, 'oruzhie', 'Оружие', '');

-- --------------------------------------------------------

--
-- Структура таблицы `images_db`
--

CREATE TABLE IF NOT EXISTS `images_db` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `img1920x1080` text NOT NULL,
  `img1024x768` text NOT NULL,
  `img960x800` text NOT NULL,
  `img600x800` varchar(200) NOT NULL,
  `about` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images_db`
--

INSERT INTO `images_db` (`id`, `url`, `img1920x1080`, `img1024x768`, `img960x800`, `img600x800`, `about`, `name`) VALUES
(19, 'sport', 'img/img/categories/sport/img1920x108058850eedb4603.jpg', 'img/img/categories/sport/img1024x76858850eedb4603.jpg', 'img/img/categories/sport/img960x80058850eedb4603.jpg', 'img/img/categories/sport/img600x80058850eedb4603.jpg', 'Фитоняшка', '58850eedb4603'),
(20, 'sport', 'img/img/categories/sport/img1920x1080588510e7a40aa.jpg', 'img/img/categories/sport/img1024x768588510e7a40aa.jpg', 'img/img/categories/sport/img960x800588510e7a40aa.jpg', 'img/img/categories/sport/img600x800588510e7a40aa.jpg', 'Фитоняшка', '588510e7a40aa'),
(41, 'oruzhie', 'img/img/categories/oruzhie/img1920x10805885183b47485.jpg', 'img/img/categories/oruzhie/img1024x7685885183b47485.jpg', 'img/img/categories/oruzhie/img960x8005885183b47485.jpg', 'img/img/categories/oruzhie/img600x8005885183b47485.jpg', 'Авиация флот м16', '5885183b47485'),
(42, 'oruzhie', 'img/img/categories/oruzhie/img1920x10805885183c80b44.jpg', 'img/img/categories/oruzhie/img1024x7685885183c80b44.jpg', 'img/img/categories/oruzhie/img960x8005885183c80b44.jpg', 'img/img/categories/oruzhie/img600x8005885183c80b44.jpg', 'Авиация флот м16', '5885183c80b44'),
(43, 'oruzhie', 'img/img/categories/oruzhie/img1920x10805885183d9b368.jpg', 'img/img/categories/oruzhie/img1024x7685885183d9b368.jpg', 'img/img/categories/oruzhie/img960x8005885183d9b368.jpg', 'img/img/categories/oruzhie/img600x8005885183d9b368.jpg', 'Авиация флот м16', '5885183d9b368'),
(44, 'oruzhie', 'img/img/categories/oruzhie/img1920x10805885183e99e96.jpg', 'img/img/categories/oruzhie/img1024x7685885183e99e96.jpg', 'img/img/categories/oruzhie/img960x8005885183e99e96.jpg', 'img/img/categories/oruzhie/img600x8005885183e99e96.jpg', 'Авиация флот м16', '5885183e99e96');

-- --------------------------------------------------------

--
-- Структура таблицы `users_db`
--

CREATE TABLE IF NOT EXISTS `users_db` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

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
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `images_db`
--
ALTER TABLE `images_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT для таблицы `users_db`
--
ALTER TABLE `users_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
