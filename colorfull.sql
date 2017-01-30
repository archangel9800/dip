-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 30 2017 г., 09:48
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
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories_db`
--

INSERT INTO `categories_db` (`id_cat`, `categories`, `cat_name`, `info`) VALUES
(4, '404\r\n', '', 'Страница не существует'),
(5, 'main', 'Colorfull gallery', 'Colorfull gallery'),
(32, 'sdsd', 'sdsd', ''),
(35, 'khkhk', 'khkhk', '');

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
  `about` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=248 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images_db`
--

INSERT INTO `images_db` (`id`, `url`, `img1920x1080`, `img1024x768`, `img960x800`, `img600x800`, `about`) VALUES
(216, 'sdsd', '588dc4d8064a9588dc4d8064b3588dc4d8064b7img1920x1080.jpg', '588dc4d8064a9588dc4d8064b3588dc4d8064b7img1024x768.jpg', '588dc4d8064a9588dc4d8064b3588dc4d8064b7img960x800.jpg', '588dc4d8064a9588dc4d8064b3588dc4d8064b7img600x800.jpg', 'sdsd'),
(217, 'sdsd', '588dc4d907a63588dc4d907a6b588dc4d907a6fimg1920x1080.jpg', '588dc4d907a63588dc4d907a6b588dc4d907a6fimg1024x768.jpg', '588dc4d907a63588dc4d907a6b588dc4d907a6fimg960x800.jpg', '588dc4d907a63588dc4d907a6b588dc4d907a6fimg600x800.jpg', 'sdsd'),
(219, 'sdsd', '588dcdabc39ab588dcdabc39ba588dcdabc39c0img1920x1080.jpg', '588dcdabc39ab588dcdabc39ba588dcdabc39c0img1024x768.jpg', '588dcdabc39ab588dcdabc39ba588dcdabc39c0img960x800.jpg', '588dcdabc39ab588dcdabc39ba588dcdabc39c0img600x800.jpg', 'рор'),
(222, 'khkhk', '588de6382752c588de63827537588de6382753dimg1920x1080.jpg', '588de6382752c588de63827537588de6382753dimg1024x768.jpg', '588de6382752c588de63827537588de6382753dimg960x800.jpg', '588de6382752c588de63827537588de6382753dimg600x800.jpg', 'hgh'),
(223, 'khkhk', '588de6393ad69588de6393ad71588de6393ad75img1920x1080.jpg', '588de6393ad69588de6393ad71588de6393ad75img1024x768.jpg', '588de6393ad69588de6393ad71588de6393ad75img960x800.jpg', '588de6393ad69588de6393ad71588de6393ad75img600x800.jpg', 'hgh'),
(224, 'khkhk', '588df535b798e588df535b7996588df535b799bimg1920x1080.jpg', '588df535b798e588df535b7996588df535b799bimg1024x768.jpg', '588df535b798e588df535b7996588df535b799bimg960x800.jpg', '588df535b798e588df535b7996588df535b799bimg600x800.jpg', 'яяч'),
(225, 'khkhk', '588df536c1910588df536c1919588df536c191eimg1920x1080.jpg', '588df536c1910588df536c1919588df536c191eimg1024x768.jpg', '588df536c1910588df536c1919588df536c191eimg960x800.jpg', '588df536c1910588df536c1919588df536c191eimg600x800.jpg', 'яяч'),
(226, 'khkhk', '588df537be609588df537be611588df537be616img1920x1080.jpg', '588df537be609588df537be611588df537be616img1024x768.jpg', '588df537be609588df537be611588df537be616img960x800.jpg', '588df537be609588df537be611588df537be616img600x800.jpg', 'яяч'),
(227, 'khkhk', '588df538be429588df538be42e588df538be431img1920x1080.jpg', '588df538be429588df538be42e588df538be431img1024x768.jpg', '588df538be429588df538be42e588df538be431img960x800.jpg', '588df538be429588df538be42e588df538be431img600x800.jpg', 'яяч'),
(228, 'khkhk', '588df539bbe34588df539bbe3e588df539bbe43img1920x1080.jpg', '588df539bbe34588df539bbe3e588df539bbe43img1024x768.jpg', '588df539bbe34588df539bbe3e588df539bbe43img960x800.jpg', '588df539bbe34588df539bbe3e588df539bbe43img600x800.jpg', 'яяч'),
(229, 'khkhk', '588df53ab94f3588df53ab94fc588df53ab9501img1920x1080.jpg', '588df53ab94f3588df53ab94fc588df53ab9501img1024x768.jpg', '588df53ab94f3588df53ab94fc588df53ab9501img960x800.jpg', '588df53ab94f3588df53ab94fc588df53ab9501img600x800.jpg', 'яяч'),
(230, 'khkhk', '588df54ba3e14588df54ba3e1d588df54ba3e21img1920x1080.jpg', '588df54ba3e14588df54ba3e1d588df54ba3e21img1024x768.jpg', '588df54ba3e14588df54ba3e1d588df54ba3e21img960x800.jpg', '588df54ba3e14588df54ba3e1d588df54ba3e21img600x800.jpg', 'счсчсч'),
(231, 'khkhk', '588df54cba79f588df54cba7a7588df54cba7abimg1920x1080.jpg', '588df54cba79f588df54cba7a7588df54cba7abimg1024x768.jpg', '588df54cba79f588df54cba7a7588df54cba7abimg960x800.jpg', '588df54cba79f588df54cba7a7588df54cba7abimg600x800.jpg', 'счсчсч'),
(232, 'khkhk', '588df54db8795588df54db879e588df54db87a2img1920x1080.jpg', '588df54db8795588df54db879e588df54db87a2img1024x768.jpg', '588df54db8795588df54db879e588df54db87a2img960x800.jpg', '588df54db8795588df54db879e588df54db87a2img600x800.jpg', 'счсчсч'),
(233, 'khkhk', '588df54ebc3d6588df54ebc3de588df54ebc3e2img1920x1080.jpg', '588df54ebc3d6588df54ebc3de588df54ebc3e2img1024x768.jpg', '588df54ebc3d6588df54ebc3de588df54ebc3e2img960x800.jpg', '588df54ebc3d6588df54ebc3de588df54ebc3e2img600x800.jpg', 'счсчсч'),
(234, 'khkhk', '588df54fbf6e6588df54fbf6ee588df54fbf6f3img1920x1080.jpg', '588df54fbf6e6588df54fbf6ee588df54fbf6f3img1024x768.jpg', '588df54fbf6e6588df54fbf6ee588df54fbf6f3img960x800.jpg', '588df54fbf6e6588df54fbf6ee588df54fbf6f3img600x800.jpg', 'счсчсч'),
(235, 'khkhk', '588df550c0f31588df550c0f37588df550c0f39img1920x1080.jpg', '588df550c0f31588df550c0f37588df550c0f39img1024x768.jpg', '588df550c0f31588df550c0f37588df550c0f39img960x800.jpg', '588df550c0f31588df550c0f37588df550c0f39img600x800.jpg', 'счсчсч'),
(236, 'khkhk', '588df55ff1297588df55ff12a0588df55ff12a5img1920x1080.jpg', '588df55ff1297588df55ff12a0588df55ff12a5img1024x768.jpg', '588df55ff1297588df55ff12a0588df55ff12a5img960x800.jpg', '588df55ff1297588df55ff12a0588df55ff12a5img600x800.jpg', 'вавапвасчсмчсм'),
(237, 'khkhk', '588df5612863c588df56128643588df56128648img1920x1080.jpg', '588df5612863c588df56128643588df56128648img1024x768.jpg', '588df5612863c588df56128643588df56128648img960x800.jpg', '588df5612863c588df56128643588df56128648img600x800.jpg', 'вавапвасчсмчсм'),
(238, 'khkhk', '588df56254d54588df56254d5b588df56254d60img1920x1080.jpg', '588df56254d54588df56254d5b588df56254d60img1024x768.jpg', '588df56254d54588df56254d5b588df56254d60img960x800.jpg', '588df56254d54588df56254d5b588df56254d60img600x800.jpg', 'вавапвасчсмчсм'),
(239, 'khkhk', '588df5635dc45588df5635dc4c588df5635dc51img1920x1080.jpg', '588df5635dc45588df5635dc4c588df5635dc51img1024x768.jpg', '588df5635dc45588df5635dc4c588df5635dc51img960x800.jpg', '588df5635dc45588df5635dc4c588df5635dc51img600x800.jpg', 'вавапвасчсмчсм'),
(240, 'khkhk', '588df56465fc1588df56465fc8588df56465fcdimg1920x1080.jpg', '588df56465fc1588df56465fc8588df56465fcdimg1024x768.jpg', '588df56465fc1588df56465fc8588df56465fcdimg960x800.jpg', '588df56465fc1588df56465fc8588df56465fcdimg600x800.jpg', 'вавапвасчсмчсм'),
(241, 'khkhk', '588df56566f96588df56566f9e588df56566fa2img1920x1080.jpg', '588df56566f96588df56566f9e588df56566fa2img1024x768.jpg', '588df56566f96588df56566f9e588df56566fa2img960x800.jpg', '588df56566f96588df56566f9e588df56566fa2img600x800.jpg', 'вавапвасчсмчсм'),
(242, 'khkhk', '588df5751e5fe588df5751e60b588df5751e60fimg1920x1080.jpg', '588df5751e5fe588df5751e60b588df5751e60fimg1024x768.jpg', '588df5751e5fe588df5751e60b588df5751e60fimg960x800.jpg', '588df5751e5fe588df5751e60b588df5751e60fimg600x800.jpg', 'чсмчм'),
(243, 'khkhk', '588df576327b0588df576327b9588df576327bdimg1920x1080.jpg', '588df576327b0588df576327b9588df576327bdimg1024x768.jpg', '588df576327b0588df576327b9588df576327bdimg960x800.jpg', '588df576327b0588df576327b9588df576327bdimg600x800.jpg', 'чсмчм'),
(244, 'khkhk', '588df57740963588df5774096b588df5774096fimg1920x1080.jpg', '588df57740963588df5774096b588df5774096fimg1024x768.jpg', '588df57740963588df5774096b588df5774096fimg960x800.jpg', '588df57740963588df5774096b588df5774096fimg600x800.jpg', 'чсмчм'),
(245, 'khkhk', '588df57844fef588df57844ff4588df57844ff7img1920x1080.jpg', '588df57844fef588df57844ff4588df57844ff7img1024x768.jpg', '588df57844fef588df57844ff4588df57844ff7img960x800.jpg', '588df57844fef588df57844ff4588df57844ff7img600x800.jpg', 'чсмчм'),
(246, 'khkhk', '588df5794ae11588df5794ae19588df5794ae1dimg1920x1080.jpg', '588df5794ae11588df5794ae19588df5794ae1dimg1024x768.jpg', '588df5794ae11588df5794ae19588df5794ae1dimg960x800.jpg', '588df5794ae11588df5794ae19588df5794ae1dimg600x800.jpg', 'чсмчм'),
(247, 'khkhk', '588df57a4d972588df57a4d97a588df57a4d97fimg1920x1080.jpg', '588df57a4d972588df57a4d97a588df57a4d97fimg1024x768.jpg', '588df57a4d972588df57a4d97a588df57a4d97fimg960x800.jpg', '588df57a4d972588df57a4d97a588df57a4d97fimg600x800.jpg', 'чсмчм');

-- --------------------------------------------------------

--
-- Структура таблицы `users_db`
--

CREATE TABLE IF NOT EXISTS `users_db` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `isadmin` tinyint(1) unsigned NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_db`
--

INSERT INTO `users_db` (`id`, `user`, `password`, `isadmin`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 0);

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
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT для таблицы `images_db`
--
ALTER TABLE `images_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=248;
--
-- AUTO_INCREMENT для таблицы `users_db`
--
ALTER TABLE `users_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
