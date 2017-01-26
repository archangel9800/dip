-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 26 2017 г., 18:57
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
(4, '404\r\n', '', 'Страница не существует'),
(5, 'main', 'Colorfull gallery', 'Colorfull gallery'),
(8, 'sport', 'Спорт', ''),
(15, 'oruzhie', 'Оружие', ''),
(16, 'abstrakciya', 'Абстракция', ''),
(22, 'test', 'test', '');

-- --------------------------------------------------------

--
-- Структура таблицы `images_db`
--

CREATE TABLE `images_db` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `img1920x1080` text NOT NULL,
  `img1024x768` text NOT NULL,
  `img960x800` text NOT NULL,
  `img600x800` varchar(200) NOT NULL,
  `about` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images_db`
--

INSERT INTO `images_db` (`id`, `url`, `img1920x1080`, `img1024x768`, `img960x800`, `img600x800`, `about`, `name`) VALUES
(41, 'oruzhie', 'img/img/categories/oruzhie/img1920x10805885183b47485.jpg', 'img/img/categories/oruzhie/img1024x7685885183b47485.jpg', 'img/img/categories/oruzhie/img960x8005885183b47485.jpg', 'img/img/categories/oruzhie/img600x8005885183b47485.jpg', 'Авиация флот м16', '5885183b47485'),
(42, 'oruzhie', 'img/img/categories/oruzhie/img1920x10805885183c80b44.jpg', 'img/img/categories/oruzhie/img1024x7685885183c80b44.jpg', 'img/img/categories/oruzhie/img960x8005885183c80b44.jpg', 'img/img/categories/oruzhie/img600x8005885183c80b44.jpg', 'Авиация флот м16', '5885183c80b44'),
(43, 'oruzhie', 'img/img/categories/oruzhie/img1920x10805885183d9b368.jpg', 'img/img/categories/oruzhie/img1024x7685885183d9b368.jpg', 'img/img/categories/oruzhie/img960x8005885183d9b368.jpg', 'img/img/categories/oruzhie/img600x8005885183d9b368.jpg', 'Авиация флот м16', '5885183d9b368'),
(44, 'oruzhie', 'img/img/categories/oruzhie/img1920x10805885183e99e96.jpg', 'img/img/categories/oruzhie/img1024x7685885183e99e96.jpg', 'img/img/categories/oruzhie/img960x8005885183e99e96.jpg', 'img/img/categories/oruzhie/img600x8005885183e99e96.jpg', 'Авиация флот м16', '5885183e99e96'),
(45, 'abstrakciya', 'img/img/categories/abstrakciya/img1920x108058861854ba83e.jpg', 'img/img/categories/abstrakciya/img1024x76858861854ba83e.jpg', 'img/img/categories/abstrakciya/img960x80058861854ba83e.jpg', 'img/img/categories/abstrakciya/img600x80058861854ba83e.jpg', 'Абстракция', '58861854ba83e'),
(46, 'abstrakciya', 'img/img/categories/abstrakciya/img1920x1080588618558fb91.jpg', 'img/img/categories/abstrakciya/img1024x768588618558fb91.jpg', 'img/img/categories/abstrakciya/img960x800588618558fb91.jpg', 'img/img/categories/abstrakciya/img600x800588618558fb91.jpg', 'Абстракция', '588618558fb91'),
(47, 'abstrakciya', 'img/img/categories/abstrakciya/img1920x10805886185645ba8.jpg', 'img/img/categories/abstrakciya/img1024x7685886185645ba8.jpg', 'img/img/categories/abstrakciya/img960x8005886185645ba8.jpg', 'img/img/categories/abstrakciya/img600x8005886185645ba8.jpg', 'Абстракция', '5886185645ba8'),
(48, 'abstrakciya', 'img/img/categories/abstrakciya/img1920x1080588618570e726.jpg', 'img/img/categories/abstrakciya/img1024x768588618570e726.jpg', 'img/img/categories/abstrakciya/img960x800588618570e726.jpg', 'img/img/categories/abstrakciya/img600x800588618570e726.jpg', 'Абстракция', '588618570e726'),
(49, 'abstrakciya', 'img/img/categories/abstrakciya/img1920x108058861857c1cb0.jpg', 'img/img/categories/abstrakciya/img1024x76858861857c1cb0.jpg', 'img/img/categories/abstrakciya/img960x80058861857c1cb0.jpg', 'img/img/categories/abstrakciya/img600x80058861857c1cb0.jpg', 'Абстракция', '58861857c1cb0'),
(50, 'abstrakciya', 'img/img/categories/abstrakciya/img1920x1080588618589c002.jpg', 'img/img/categories/abstrakciya/img1024x768588618589c002.jpg', 'img/img/categories/abstrakciya/img960x800588618589c002.jpg', 'img/img/categories/abstrakciya/img600x800588618589c002.jpg', 'Абстракция', '588618589c002'),
(51, 'abstrakciya', 'img/img/categories/abstrakciya/img1920x1080588618594dd36.jpg', 'img/img/categories/abstrakciya/img1024x768588618594dd36.jpg', 'img/img/categories/abstrakciya/img960x800588618594dd36.jpg', '', 'Абстракция', '588618594dd36'),
(60, 'sport', 'img/img/categories/sport/img1920x108058862e613fee3.jpg', 'img/img/categories/sport/img1024x76858862e613fee3.jpg', 'img/img/categories/sport/img960x80058862e613fee3.jpg', 'img/img/categories/sport/img600x80058862e613fee3.jpg', 'sport', '58862e613fee3'),
(61, 'sport', 'img/img/categories/sport/img1920x108058862e620116f.jpg', 'img/img/categories/sport/img1024x76858862e620116f.jpg', 'img/img/categories/sport/img960x80058862e620116f.jpg', 'img/img/categories/sport/img600x80058862e620116f.jpg', 'sport', '58862e620116f'),
(62, 'sport', 'img/img/categories/sport/img1920x108058862e62b2c39.jpg', 'img/img/categories/sport/img1024x76858862e62b2c39.jpg', 'img/img/categories/sport/img960x80058862e62b2c39.jpg', 'img/img/categories/sport/img600x80058862e62b2c39.jpg', 'sport', '58862e62b2c39'),
(63, 'sport', 'img/img/categories/sport/img1920x108058862e636b83d.jpg', 'img/img/categories/sport/img1024x76858862e636b83d.jpg', 'img/img/categories/sport/img960x80058862e636b83d.jpg', 'img/img/categories/sport/img600x80058862e636b83d.jpg', 'sport', '58862e636b83d'),
(64, 'sport', 'img/img/categories/sport/img1920x108058862e6439193.jpg', 'img/img/categories/sport/img1024x76858862e6439193.jpg', 'img/img/categories/sport/img960x80058862e6439193.jpg', 'img/img/categories/sport/img600x80058862e6439193.jpg', 'sport', '58862e6439193'),
(65, 'sport', 'img/img/categories/sport/img1920x108058862e64e2dce.jpg', 'img/img/categories/sport/img1024x76858862e64e2dce.jpg', 'img/img/categories/sport/img960x80058862e64e2dce.jpg', 'img/img/categories/sport/img600x80058862e64e2dce.jpg', 'sport', '58862e64e2dce'),
(66, 'sport', 'img/img/categories/sport/img1920x108058862e65b4ef2.jpg', 'img/img/categories/sport/img1024x76858862e65b4ef2.jpg', 'img/img/categories/sport/img960x80058862e65b4ef2.jpg', 'img/img/categories/sport/img600x80058862e65b4ef2.jpg', 'sport', '58862e65b4ef2'),
(67, 'sport', 'img/img/categories/sport/img1920x108058862e666f1b8.jpg', 'img/img/categories/sport/img1024x76858862e666f1b8.jpg', 'img/img/categories/sport/img960x80058862e666f1b8.jpg', 'img/img/categories/sport/img600x80058862e666f1b8.jpg', 'sport', '58862e666f1b8'),
(68, 'sport', 'img/img/categories/sport/img1920x108058862e6730e7f.jpg', 'img/img/categories/sport/img1024x76858862e6730e7f.jpg', 'img/img/categories/sport/img960x80058862e6730e7f.jpg', 'img/img/categories/sport/img600x80058862e6730e7f.jpg', 'sport', '58862e6730e7f'),
(69, 'sport', 'img/img/categories/sport/img1920x108058862e67e3def.jpg', 'img/img/categories/sport/img1024x76858862e67e3def.jpg', 'img/img/categories/sport/img960x80058862e67e3def.jpg', 'img/img/categories/sport/img600x80058862e67e3def.jpg', 'sport', '58862e67e3def'),
(70, 'sport', 'img/img/categories/sport/img1920x108058862e68a8a69.jpg', 'img/img/categories/sport/img1024x76858862e68a8a69.jpg', 'img/img/categories/sport/img960x80058862e68a8a69.jpg', 'img/img/categories/sport/img600x80058862e68a8a69.jpg', 'sport', '58862e68a8a69'),
(71, 'sport', 'img/img/categories/sport/img1920x108058862e69655e2.jpg', 'img/img/categories/sport/img1024x76858862e69655e2.jpg', 'img/img/categories/sport/img960x80058862e69655e2.jpg', 'img/img/categories/sport/img600x80058862e69655e2.jpg', 'sport', '58862e69655e2'),
(72, 'sport', 'img/img/categories/sport/img1920x108058862e6a19228.jpg', 'img/img/categories/sport/img1024x76858862e6a19228.jpg', 'img/img/categories/sport/img960x80058862e6a19228.jpg', 'img/img/categories/sport/img600x80058862e6a19228.jpg', 'sport', '58862e6a19228'),
(73, 'sport', 'img/img/categories/sport/img1920x108058862e6ac8c3f.jpg', 'img/img/categories/sport/img1024x76858862e6ac8c3f.jpg', 'img/img/categories/sport/img960x80058862e6ac8c3f.jpg', 'img/img/categories/sport/img600x80058862e6ac8c3f.jpg', 'sport', '58862e6ac8c3f'),
(74, 'sport', 'img/img/categories/sport/img1920x108058862e6b837a0.jpg', 'img/img/categories/sport/img1024x76858862e6b837a0.jpg', 'img/img/categories/sport/img960x80058862e6b837a0.jpg', 'img/img/categories/sport/img600x80058862e6b837a0.jpg', 'sport', '58862e6b837a0'),
(75, 'sport', 'img/img/categories/sport/img1920x108058862e6c3d909.jpg', 'img/img/categories/sport/img1024x76858862e6c3d909.jpg', 'img/img/categories/sport/img960x80058862e6c3d909.jpg', 'img/img/categories/sport/img600x80058862e6c3d909.jpg', 'sport', '58862e6c3d909'),
(76, 'sport', 'img/img/categories/sport/img1920x108058862e6d05b81.jpg', 'img/img/categories/sport/img1024x76858862e6d05b81.jpg', 'img/img/categories/sport/img960x80058862e6d05b81.jpg', 'img/img/categories/sport/img600x80058862e6d05b81.jpg', 'sport', '58862e6d05b81'),
(77, 'sport', 'img/img/categories/sport/img1920x108058862e6dba7f4.jpg', 'img/img/categories/sport/img1024x76858862e6dba7f4.jpg', 'img/img/categories/sport/img960x80058862e6dba7f4.jpg', 'img/img/categories/sport/img600x80058862e6dba7f4.jpg', 'sport', '58862e6dba7f4'),
(78, 'sport', 'img/img/categories/sport/img1920x108058862e6e766f5.jpg', 'img/img/categories/sport/img1024x76858862e6e766f5.jpg', 'img/img/categories/sport/img960x80058862e6e766f5.jpg', 'img/img/categories/sport/img600x80058862e6e766f5.jpg', 'sport', '58862e6e766f5'),
(106, 'test', 'img/img/categories/test/img1920x10805888e3f0c51bf.jpg', 'img/img/categories/test/img1024x7685888e3f0c51bf.jpg', 'img/img/categories/test/img960x8005888e3f0c51bf.jpg', 'img/img/categories/test/img600x8005888e3f0c51bf.jpg', 'test', '5888e3f0c51bf'),
(108, 'test', 'img/img/categories/test/img1920x10805888e3f256cd6.jpg', 'img/img/categories/test/img1024x7685888e3f256cd6.jpg', 'img/img/categories/test/img960x8005888e3f256cd6.jpg', 'img/img/categories/test/img600x8005888e3f256cd6.jpg', 'test', '5888e3f256cd6'),
(109, 'test', 'img/img/categories/test/img1920x10805888e3f30e583.jpg', 'img/img/categories/test/img1024x7685888e3f30e583.jpg', 'img/img/categories/test/img960x8005888e3f30e583.jpg', 'img/img/categories/test/img600x8005888e3f30e583.jpg', 'test', '5888e3f30e583'),
(110, 'test', 'img/img/categories/test/img1920x10805888e3f3b7b8c.jpg', 'img/img/categories/test/img1024x7685888e3f3b7b8c.jpg', 'img/img/categories/test/img960x8005888e3f3b7b8c.jpg', 'img/img/categories/test/img600x8005888e3f3b7b8c.jpg', 'test', '5888e3f3b7b8c'),
(111, 'test', 'img/img/categories/test/img1920x10805888e3f47e970.jpg', 'img/img/categories/test/img1024x7685888e3f47e970.jpg', 'img/img/categories/test/img960x8005888e3f47e970.jpg', 'img/img/categories/test/img600x8005888e3f47e970.jpg', 'test', '5888e3f47e970'),
(112, 'test', 'img/img/categories/test/img1920x10805888e3f532934.jpg', 'img/img/categories/test/img1024x7685888e3f532934.jpg', 'img/img/categories/test/img960x8005888e3f532934.jpg', 'img/img/categories/test/img600x8005888e3f532934.jpg', 'test', '5888e3f532934'),
(113, 'test', 'img/img/categories/test/img1920x10805888e3f5f1b15.jpg', 'img/img/categories/test/img1024x7685888e3f5f1b15.jpg', 'img/img/categories/test/img960x8005888e3f5f1b15.jpg', 'img/img/categories/test/img600x8005888e3f5f1b15.jpg', 'test', '5888e3f5f1b15'),
(114, 'test', 'img/img/categories/test/img1920x10805888e3f6a70b0.jpg', 'img/img/categories/test/img1024x7685888e3f6a70b0.jpg', 'img/img/categories/test/img960x8005888e3f6a70b0.jpg', 'img/img/categories/test/img600x8005888e3f6a70b0.jpg', 'test', '5888e3f6a70b0'),
(115, 'test', 'img/img/categories/test/img1920x10805888e3f763150.jpg', 'img/img/categories/test/img1024x7685888e3f763150.jpg', 'img/img/categories/test/img960x8005888e3f763150.jpg', 'img/img/categories/test/img600x8005888e3f763150.jpg', 'test', '5888e3f763150'),
(116, 'test', 'img/img/categories/test/img1920x10805888e3f81bc9a.jpg', 'img/img/categories/test/img1024x7685888e3f81bc9a.jpg', 'img/img/categories/test/img960x8005888e3f81bc9a.jpg', 'img/img/categories/test/img600x8005888e3f81bc9a.jpg', 'test', '5888e3f81bc9a'),
(117, 'test', 'img/img/categories/test/img1920x10805888e3f8d0fe0.jpg', 'img/img/categories/test/img1024x7685888e3f8d0fe0.jpg', 'img/img/categories/test/img960x8005888e3f8d0fe0.jpg', 'img/img/categories/test/img600x8005888e3f8d0fe0.jpg', 'test', '5888e3f8d0fe0'),
(118, 'test', 'img/img/categories/test/img1920x10805888e3f985f35.jpg', 'img/img/categories/test/img1024x7685888e3f985f35.jpg', 'img/img/categories/test/img960x8005888e3f985f35.jpg', 'img/img/categories/test/img600x8005888e3f985f35.jpg', 'test', '5888e3f985f35'),
(119, 'test', 'img/img/categories/test/img1920x10805888e3fa366df.jpg', 'img/img/categories/test/img1024x7685888e3fa366df.jpg', 'img/img/categories/test/img960x8005888e3fa366df.jpg', 'img/img/categories/test/img600x8005888e3fa366df.jpg', 'test', '5888e3fa366df'),
(120, 'test', 'img/img/categories/test/img1920x10805888e3fadca71.jpg', 'img/img/categories/test/img1024x7685888e3fadca71.jpg', 'img/img/categories/test/img960x8005888e3fadca71.jpg', 'img/img/categories/test/img600x8005888e3fadca71.jpg', 'test', '5888e3fadca71'),
(121, 'test', 'img/img/categories/test/img1920x10805888e3fb93af1.jpg', 'img/img/categories/test/img1024x7685888e3fb93af1.jpg', 'img/img/categories/test/img960x8005888e3fb93af1.jpg', 'img/img/categories/test/img600x8005888e3fb93af1.jpg', 'test', '5888e3fb93af1'),
(122, 'test', 'img/img/categories/test/img1920x10805888e3fc4c975.jpg', 'img/img/categories/test/img1024x7685888e3fc4c975.jpg', 'img/img/categories/test/img960x8005888e3fc4c975.jpg', 'img/img/categories/test/img600x8005888e3fc4c975.jpg', 'test', '5888e3fc4c975'),
(123, 'test', 'img/img/categories/test/img1920x10805888e3fd0b73a.jpg', 'img/img/categories/test/img1024x7685888e3fd0b73a.jpg', 'img/img/categories/test/img960x8005888e3fd0b73a.jpg', 'img/img/categories/test/img600x8005888e3fd0b73a.jpg', 'test', '5888e3fd0b73a'),
(124, 'test', 'img/img/categories/test/img1920x10805888e3fdbba40.jpg', 'img/img/categories/test/img1024x7685888e3fdbba40.jpg', 'img/img/categories/test/img960x8005888e3fdbba40.jpg', 'img/img/categories/test/img600x8005888e3fdbba40.jpg', 'test', '5888e3fdbba40'),
(125, 'test', 'img/img/categories/test/img1920x10805888e3fe73947.jpg', 'img/img/categories/test/img1024x7685888e3fe73947.jpg', 'img/img/categories/test/img960x8005888e3fe73947.jpg', 'img/img/categories/test/img600x8005888e3fe73947.jpg', 'test', '5888e3fe73947');

-- --------------------------------------------------------

--
-- Структура таблицы `users_db`
--

CREATE TABLE `users_db` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `isadmin` tinyint(1) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT для таблицы `images_db`
--
ALTER TABLE `images_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT для таблицы `users_db`
--
ALTER TABLE `users_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
