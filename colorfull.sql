-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Янв 26 2017 г., 21:22
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
(26, 'priroda', 'Природа', ''),
(27, 'igry', 'Игры', ''),
(28, 'avtomobili', 'Автомобили', ''),
(29, 'test', 'Тест', '');

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
(130, 'priroda', 'img/img/categories/priroda/img1920x1080588a2e172df19.jpg', 'img/img/categories/priroda/img1024x768588a2e172df19.jpg', 'img/img/categories/priroda/img960x800588a2e172df19.jpg', 'img/img/categories/priroda/img600x800588a2e172df19.jpg', 'природа', '588a2e172df19'),
(131, 'priroda', 'img/img/categories/priroda/img1920x1080588a2ed223c9f.jpg', 'img/img/categories/priroda/img1024x768588a2ed223c9f.jpg', 'img/img/categories/priroda/img960x800588a2ed223c9f.jpg', 'img/img/categories/priroda/img600x800588a2ed223c9f.jpg', 'природа', '588a2ed223c9f'),
(132, 'priroda', 'img/img/categories/priroda/img1920x1080588a2ed2cb0c3.jpg', 'img/img/categories/priroda/img1024x768588a2ed2cb0c3.jpg', 'img/img/categories/priroda/img960x800588a2ed2cb0c3.jpg', 'img/img/categories/priroda/img600x800588a2ed2cb0c3.jpg', 'природа', '588a2ed2cb0c3'),
(133, 'priroda', 'img/img/categories/priroda/img1920x1080588a2ed38e84c.jpg', 'img/img/categories/priroda/img1024x768588a2ed38e84c.jpg', 'img/img/categories/priroda/img960x800588a2ed38e84c.jpg', 'img/img/categories/priroda/img600x800588a2ed38e84c.jpg', 'природа', '588a2ed38e84c'),
(134, 'priroda', 'img/img/categories/priroda/img1920x1080588a2ed442e2d.jpg', 'img/img/categories/priroda/img1024x768588a2ed442e2d.jpg', 'img/img/categories/priroda/img960x800588a2ed442e2d.jpg', 'img/img/categories/priroda/img600x800588a2ed442e2d.jpg', 'природа', '588a2ed442e2d'),
(135, 'priroda', 'img/img/categories/priroda/img1920x1080588a2ed510a7e.jpg', 'img/img/categories/priroda/img1024x768588a2ed510a7e.jpg', 'img/img/categories/priroda/img960x800588a2ed510a7e.jpg', 'img/img/categories/priroda/img600x800588a2ed510a7e.jpg', 'природа', '588a2ed510a7e'),
(136, 'priroda', 'img/img/categories/priroda/img1920x1080588a2ed5c7cbe.jpg', 'img/img/categories/priroda/img1024x768588a2ed5c7cbe.jpg', 'img/img/categories/priroda/img960x800588a2ed5c7cbe.jpg', 'img/img/categories/priroda/img600x800588a2ed5c7cbe.jpg', 'природа', '588a2ed5c7cbe'),
(137, 'priroda', 'img/img/categories/priroda/img1920x1080588a2ed689d63.jpg', 'img/img/categories/priroda/img1024x768588a2ed689d63.jpg', 'img/img/categories/priroda/img960x800588a2ed689d63.jpg', 'img/img/categories/priroda/img600x800588a2ed689d63.jpg', 'природа', '588a2ed689d63'),
(138, 'priroda', 'img/img/categories/priroda/img1920x1080588a2ed750a0e.jpg', 'img/img/categories/priroda/img1024x768588a2ed750a0e.jpg', 'img/img/categories/priroda/img960x800588a2ed750a0e.jpg', 'img/img/categories/priroda/img600x800588a2ed750a0e.jpg', 'природа', '588a2ed750a0e'),
(139, 'priroda', 'img/img/categories/priroda/img1920x1080588a2ed806441.jpg', 'img/img/categories/priroda/img1024x768588a2ed806441.jpg', 'img/img/categories/priroda/img960x800588a2ed806441.jpg', 'img/img/categories/priroda/img600x800588a2ed806441.jpg', 'природа', '588a2ed806441'),
(140, 'priroda', 'img/img/categories/priroda/img1920x1080588a2ed8b6a24.jpg', 'img/img/categories/priroda/img1024x768588a2ed8b6a24.jpg', 'img/img/categories/priroda/img960x800588a2ed8b6a24.jpg', 'img/img/categories/priroda/img600x800588a2ed8b6a24.jpg', 'природа', '588a2ed8b6a24'),
(141, 'priroda', 'img/img/categories/priroda/img1920x1080588a2ed9806ab.jpg', 'img/img/categories/priroda/img1024x768588a2ed9806ab.jpg', 'img/img/categories/priroda/img960x800588a2ed9806ab.jpg', 'img/img/categories/priroda/img600x800588a2ed9806ab.jpg', 'природа', '588a2ed9806ab'),
(142, 'priroda', 'img/img/categories/priroda/img1920x1080588a2eda48015.jpg', 'img/img/categories/priroda/img1024x768588a2eda48015.jpg', 'img/img/categories/priroda/img960x800588a2eda48015.jpg', 'img/img/categories/priroda/img600x800588a2eda48015.jpg', 'природа', '588a2eda48015'),
(143, 'priroda', 'img/img/categories/priroda/img1920x1080588a2edb035aa.jpg', 'img/img/categories/priroda/img1024x768588a2edb035aa.jpg', 'img/img/categories/priroda/img960x800588a2edb035aa.jpg', 'img/img/categories/priroda/img600x800588a2edb035aa.jpg', 'природа', '588a2edb035aa'),
(144, 'priroda', 'img/img/categories/priroda/img1920x1080588a2edbba6f2.jpg', 'img/img/categories/priroda/img1024x768588a2edbba6f2.jpg', 'img/img/categories/priroda/img960x800588a2edbba6f2.jpg', 'img/img/categories/priroda/img600x800588a2edbba6f2.jpg', 'природа', '588a2edbba6f2'),
(145, 'priroda', 'img/img/categories/priroda/img1920x1080588a2edc76197.jpg', 'img/img/categories/priroda/img1024x768588a2edc76197.jpg', 'img/img/categories/priroda/img960x800588a2edc76197.jpg', 'img/img/categories/priroda/img600x800588a2edc76197.jpg', 'природа', '588a2edc76197'),
(146, 'priroda', 'img/img/categories/priroda/img1920x1080588a2edd325ec.jpg', 'img/img/categories/priroda/img1024x768588a2edd325ec.jpg', 'img/img/categories/priroda/img960x800588a2edd325ec.jpg', 'img/img/categories/priroda/img600x800588a2edd325ec.jpg', 'природа', '588a2edd325ec'),
(147, 'priroda', 'img/img/categories/priroda/img1920x1080588a2eddeba9e.jpg', 'img/img/categories/priroda/img1024x768588a2eddeba9e.jpg', 'img/img/categories/priroda/img960x800588a2eddeba9e.jpg', 'img/img/categories/priroda/img600x800588a2eddeba9e.jpg', 'природа', '588a2eddeba9e'),
(148, 'priroda', 'img/img/categories/priroda/img1920x1080588a2edea5d82.jpg', 'img/img/categories/priroda/img1024x768588a2edea5d82.jpg', 'img/img/categories/priroda/img960x800588a2edea5d82.jpg', 'img/img/categories/priroda/img600x800588a2edea5d82.jpg', 'природа', '588a2edea5d82'),
(149, 'priroda', 'img/img/categories/priroda/img1920x1080588a2edf5d2e0.jpg', 'img/img/categories/priroda/img1024x768588a2edf5d2e0.jpg', 'img/img/categories/priroda/img960x800588a2edf5d2e0.jpg', 'img/img/categories/priroda/img600x800588a2edf5d2e0.jpg', 'природа', '588a2edf5d2e0'),
(150, 'priroda', 'img/img/categories/priroda/img1920x1080588a2ee0153ed.jpg', 'img/img/categories/priroda/img1024x768588a2ee0153ed.jpg', 'img/img/categories/priroda/img960x800588a2ee0153ed.jpg', 'img/img/categories/priroda/img600x800588a2ee0153ed.jpg', 'природа', '588a2ee0153ed'),
(151, 'igry', 'img/img/categories/igry/img1920x1080588a2fa155929.jpg', 'img/img/categories/igry/img1024x768588a2fa155929.jpg', 'img/img/categories/igry/img960x800588a2fa155929.jpg', 'img/img/categories/igry/img600x800588a2fa155929.jpg', 'игры', '588a2fa155929'),
(152, 'igry', 'img/img/categories/igry/img1920x1080588a2fa22b8c7.png', 'img/img/categories/igry/img1024x768588a2fa22b8c7.png', 'img/img/categories/igry/img960x800588a2fa22b8c7.png', 'img/img/categories/igry/img600x800588a2fa22b8c7.png', 'игры', '588a2fa22b8c7'),
(153, 'igry', 'img/img/categories/igry/img1920x1080588a2fa4662fc.jpg', 'img/img/categories/igry/img1024x768588a2fa4662fc.jpg', 'img/img/categories/igry/img960x800588a2fa4662fc.jpg', 'img/img/categories/igry/img600x800588a2fa4662fc.jpg', 'игры', '588a2fa4662fc'),
(154, 'igry', 'img/img/categories/igry/img1920x1080588a2fa526cbb.jpg', 'img/img/categories/igry/img1024x768588a2fa526cbb.jpg', 'img/img/categories/igry/img960x800588a2fa526cbb.jpg', 'img/img/categories/igry/img600x800588a2fa526cbb.jpg', 'игры', '588a2fa526cbb'),
(155, 'igry', 'img/img/categories/igry/img1920x1080588a2fa5de619.jpg', 'img/img/categories/igry/img1024x768588a2fa5de619.jpg', 'img/img/categories/igry/img960x800588a2fa5de619.jpg', 'img/img/categories/igry/img600x800588a2fa5de619.jpg', 'игры', '588a2fa5de619'),
(156, 'igry', 'img/img/categories/igry/img1920x1080588a2fa69d1a6.jpg', 'img/img/categories/igry/img1024x768588a2fa69d1a6.jpg', 'img/img/categories/igry/img960x800588a2fa69d1a6.jpg', 'img/img/categories/igry/img600x800588a2fa69d1a6.jpg', 'игры', '588a2fa69d1a6'),
(157, 'igry', 'img/img/categories/igry/img1920x1080588a2fa751543.jpg', 'img/img/categories/igry/img1024x768588a2fa751543.jpg', 'img/img/categories/igry/img960x800588a2fa751543.jpg', 'img/img/categories/igry/img600x800588a2fa751543.jpg', 'игры', '588a2fa751543'),
(158, 'igry', 'img/img/categories/igry/img1920x1080588a2fa7f2f22.jpg', 'img/img/categories/igry/img1024x768588a2fa7f2f22.jpg', 'img/img/categories/igry/img960x800588a2fa7f2f22.jpg', 'img/img/categories/igry/img600x800588a2fa7f2f22.jpg', 'игры', '588a2fa7f2f22'),
(159, 'igry', 'img/img/categories/igry/img1920x1080588a2fa8b104c.jpg', 'img/img/categories/igry/img1024x768588a2fa8b104c.jpg', 'img/img/categories/igry/img960x800588a2fa8b104c.jpg', 'img/img/categories/igry/img600x800588a2fa8b104c.jpg', 'игры', '588a2fa8b104c'),
(160, 'igry', 'img/img/categories/igry/img1920x1080588a2fa98376a.jpg', 'img/img/categories/igry/img1024x768588a2fa98376a.jpg', 'img/img/categories/igry/img960x800588a2fa98376a.jpg', 'img/img/categories/igry/img600x800588a2fa98376a.jpg', 'игры', '588a2fa98376a'),
(161, 'igry', 'img/img/categories/igry/img1920x1080588a2faa37c22.jpg', 'img/img/categories/igry/img1024x768588a2faa37c22.jpg', 'img/img/categories/igry/img960x800588a2faa37c22.jpg', 'img/img/categories/igry/img600x800588a2faa37c22.jpg', 'игры', '588a2faa37c22'),
(162, 'igry', 'img/img/categories/igry/img1920x1080588a2faaf13e7.jpg', 'img/img/categories/igry/img1024x768588a2faaf13e7.jpg', 'img/img/categories/igry/img960x800588a2faaf13e7.jpg', 'img/img/categories/igry/img600x800588a2faaf13e7.jpg', 'игры', '588a2faaf13e7'),
(163, 'igry', 'img/img/categories/igry/img1920x1080588a2fabafaaa.jpg', 'img/img/categories/igry/img1024x768588a2fabafaaa.jpg', 'img/img/categories/igry/img960x800588a2fabafaaa.jpg', 'img/img/categories/igry/img600x800588a2fabafaaa.jpg', 'игры', '588a2fabafaaa'),
(164, 'igry', 'img/img/categories/igry/img1920x1080588a2fac61f15.jpg', 'img/img/categories/igry/img1024x768588a2fac61f15.jpg', 'img/img/categories/igry/img960x800588a2fac61f15.jpg', 'img/img/categories/igry/img600x800588a2fac61f15.jpg', 'игры', '588a2fac61f15'),
(165, 'igry', 'img/img/categories/igry/img1920x1080588a2fad1611f.jpg', 'img/img/categories/igry/img1024x768588a2fad1611f.jpg', 'img/img/categories/igry/img960x800588a2fad1611f.jpg', 'img/img/categories/igry/img600x800588a2fad1611f.jpg', 'игры', '588a2fad1611f'),
(166, 'igry', 'img/img/categories/igry/img1920x1080588a2fadc67ff.jpg', 'img/img/categories/igry/img1024x768588a2fadc67ff.jpg', 'img/img/categories/igry/img960x800588a2fadc67ff.jpg', 'img/img/categories/igry/img600x800588a2fadc67ff.jpg', 'игры', '588a2fadc67ff'),
(167, 'igry', 'img/img/categories/igry/img1920x1080588a2faea5677.jpg', 'img/img/categories/igry/img1024x768588a2faea5677.jpg', 'img/img/categories/igry/img960x800588a2faea5677.jpg', 'img/img/categories/igry/img600x800588a2faea5677.jpg', 'игры', '588a2faea5677'),
(168, 'igry', 'img/img/categories/igry/img1920x1080588a2faf72255.jpg', 'img/img/categories/igry/img1024x768588a2faf72255.jpg', 'img/img/categories/igry/img960x800588a2faf72255.jpg', 'img/img/categories/igry/img600x800588a2faf72255.jpg', 'игры', '588a2faf72255'),
(169, 'igry', 'img/img/categories/igry/img1920x1080588a2fb022687.jpeg', 'img/img/categories/igry/img1024x768588a2fb022687.jpeg', 'img/img/categories/igry/img960x800588a2fb022687.jpeg', 'img/img/categories/igry/img600x800588a2fb022687.jpeg', 'игры', '588a2fb022687'),
(170, 'igry', 'img/img/categories/igry/img1920x1080588a2fb0d0c01.jpg', 'img/img/categories/igry/img1024x768588a2fb0d0c01.jpg', 'img/img/categories/igry/img960x800588a2fb0d0c01.jpg', 'img/img/categories/igry/img600x800588a2fb0d0c01.jpg', 'игры', '588a2fb0d0c01'),
(171, 'avtomobili', 'img/img/categories/avtomobili/img1920x1080588a3099eb150.jpg', 'img/img/categories/avtomobili/img1024x768588a3099eb150.jpg', 'img/img/categories/avtomobili/img960x800588a3099eb150.jpg', 'img/img/categories/avtomobili/img600x800588a3099eb150.jpg', 'автомобиили', '588a3099eb150'),
(172, 'avtomobili', 'img/img/categories/avtomobili/img1920x1080588a309ab2dbc.jpg', 'img/img/categories/avtomobili/img1024x768588a309ab2dbc.jpg', 'img/img/categories/avtomobili/img960x800588a309ab2dbc.jpg', 'img/img/categories/avtomobili/img600x800588a309ab2dbc.jpg', 'автомобиили', '588a309ab2dbc'),
(173, 'avtomobili', 'img/img/categories/avtomobili/img1920x1080588a309b61bba.jpg', 'img/img/categories/avtomobili/img1024x768588a309b61bba.jpg', 'img/img/categories/avtomobili/img960x800588a309b61bba.jpg', 'img/img/categories/avtomobili/img600x800588a309b61bba.jpg', 'автомобиили', '588a309b61bba'),
(174, 'avtomobili', 'img/img/categories/avtomobili/img1920x1080588a309c1a611.jpg', 'img/img/categories/avtomobili/img1024x768588a309c1a611.jpg', 'img/img/categories/avtomobili/img960x800588a309c1a611.jpg', 'img/img/categories/avtomobili/img600x800588a309c1a611.jpg', 'автомобиили', '588a309c1a611'),
(175, 'avtomobili', 'img/img/categories/avtomobili/img1920x1080588a309cc94da.jpg', 'img/img/categories/avtomobili/img1024x768588a309cc94da.jpg', 'img/img/categories/avtomobili/img960x800588a309cc94da.jpg', 'img/img/categories/avtomobili/img600x800588a309cc94da.jpg', 'автомобиили', '588a309cc94da'),
(176, 'avtomobili', 'img/img/categories/avtomobili/img1920x1080588a309d807ae.jpg', 'img/img/categories/avtomobili/img1024x768588a309d807ae.jpg', 'img/img/categories/avtomobili/img960x800588a309d807ae.jpg', 'img/img/categories/avtomobili/img600x800588a309d807ae.jpg', 'автомобиили', '588a309d807ae'),
(177, 'avtomobili', 'img/img/categories/avtomobili/img1920x1080588a309e334a0.jpg', 'img/img/categories/avtomobili/img1024x768588a309e334a0.jpg', 'img/img/categories/avtomobili/img960x800588a309e334a0.jpg', 'img/img/categories/avtomobili/img600x800588a309e334a0.jpg', 'автомобиили', '588a309e334a0'),
(178, 'avtomobili', 'img/img/categories/avtomobili/img1920x1080588a309ed67f5.jpg', 'img/img/categories/avtomobili/img1024x768588a309ed67f5.jpg', 'img/img/categories/avtomobili/img960x800588a309ed67f5.jpg', 'img/img/categories/avtomobili/img600x800588a309ed67f5.jpg', 'автомобиили', '588a309ed67f5'),
(179, 'avtomobili', 'img/img/categories/avtomobili/img1920x1080588a309f8d79f.jpg', 'img/img/categories/avtomobili/img1024x768588a309f8d79f.jpg', 'img/img/categories/avtomobili/img960x800588a309f8d79f.jpg', 'img/img/categories/avtomobili/img600x800588a309f8d79f.jpg', 'автомобиили', '588a309f8d79f'),
(180, 'avtomobili', 'img/img/categories/avtomobili/img1920x1080588a30a03a412.jpg', 'img/img/categories/avtomobili/img1024x768588a30a03a412.jpg', 'img/img/categories/avtomobili/img960x800588a30a03a412.jpg', 'img/img/categories/avtomobili/img600x800588a30a03a412.jpg', 'автомобиили', '588a30a03a412'),
(181, 'avtomobili', 'img/img/categories/avtomobili/img1920x1080588a30a0e1271.jpg', 'img/img/categories/avtomobili/img1024x768588a30a0e1271.jpg', 'img/img/categories/avtomobili/img960x800588a30a0e1271.jpg', 'img/img/categories/avtomobili/img600x800588a30a0e1271.jpg', 'автомобиили', '588a30a0e1271'),
(182, 'avtomobili', 'img/img/categories/avtomobili/img1920x1080588a30a18d5f0.jpg', 'img/img/categories/avtomobili/img1024x768588a30a18d5f0.jpg', 'img/img/categories/avtomobili/img960x800588a30a18d5f0.jpg', 'img/img/categories/avtomobili/img600x800588a30a18d5f0.jpg', 'автомобиили', '588a30a18d5f0'),
(183, 'avtomobili', 'img/img/categories/avtomobili/img1920x1080588a30a254026.jpg', 'img/img/categories/avtomobili/img1024x768588a30a254026.jpg', 'img/img/categories/avtomobili/img960x800588a30a254026.jpg', 'img/img/categories/avtomobili/img600x800588a30a254026.jpg', 'автомобиили', '588a30a254026'),
(184, 'avtomobili', 'img/img/categories/avtomobili/img1920x1080588a30a309731.jpg', 'img/img/categories/avtomobili/img1024x768588a30a309731.jpg', 'img/img/categories/avtomobili/img960x800588a30a309731.jpg', 'img/img/categories/avtomobili/img600x800588a30a309731.jpg', 'автомобиили', '588a30a309731'),
(185, 'avtomobili', 'img/img/categories/avtomobili/img1920x1080588a30a3a2e73.jpg', 'img/img/categories/avtomobili/img1024x768588a30a3a2e73.jpg', 'img/img/categories/avtomobili/img960x800588a30a3a2e73.jpg', 'img/img/categories/avtomobili/img600x800588a30a3a2e73.jpg', 'автомобиили', '588a30a3a2e73'),
(186, 'avtomobili', 'img/img/categories/avtomobili/img1920x1080588a30a455c41.jpg', 'img/img/categories/avtomobili/img1024x768588a30a455c41.jpg', 'img/img/categories/avtomobili/img960x800588a30a455c41.jpg', 'img/img/categories/avtomobili/img600x800588a30a455c41.jpg', 'автомобиили', '588a30a455c41'),
(187, 'avtomobili', 'img/img/categories/avtomobili/img1920x1080588a30a511335.jpg', 'img/img/categories/avtomobili/img1024x768588a30a511335.jpg', 'img/img/categories/avtomobili/img960x800588a30a511335.jpg', 'img/img/categories/avtomobili/img600x800588a30a511335.jpg', 'автомобиили', '588a30a511335'),
(188, 'avtomobili', 'img/img/categories/avtomobili/img1920x1080588a30a5b97b9.jpg', 'img/img/categories/avtomobili/img1024x768588a30a5b97b9.jpg', 'img/img/categories/avtomobili/img960x800588a30a5b97b9.jpg', 'img/img/categories/avtomobili/img600x800588a30a5b97b9.jpg', 'автомобиили', '588a30a5b97b9'),
(189, 'avtomobili', 'img/img/categories/avtomobili/img1920x1080588a30a669eb3.jpeg', 'img/img/categories/avtomobili/img1024x768588a30a669eb3.jpeg', 'img/img/categories/avtomobili/img960x800588a30a669eb3.jpeg', 'img/img/categories/avtomobili/img600x800588a30a669eb3.jpeg', 'автомобиили', '588a30a669eb3'),
(190, 'avtomobili', 'img/img/categories/avtomobili/img1920x1080588a30a71a573.jpg', 'img/img/categories/avtomobili/img1024x768588a30a71a573.jpg', 'img/img/categories/avtomobili/img960x800588a30a71a573.jpg', 'img/img/categories/avtomobili/img600x800588a30a71a573.jpg', 'автомобиили', '588a30a71a573'),
(191, 'test', 'img/img/categories/test/img1920x1080588a374215dd5.jpg', 'img/img/categories/test/img1024x768588a374215dd5.jpg', 'img/img/categories/test/img960x800588a374215dd5.jpg', 'img/img/categories/test/img600x800588a374215dd5.jpg', 'test', '588a374215dd5'),
(192, 'test', 'img/img/categories/test/img1920x1080588a3742cf909.jpg', 'img/img/categories/test/img1024x768588a3742cf909.jpg', 'img/img/categories/test/img960x800588a3742cf909.jpg', 'img/img/categories/test/img600x800588a3742cf909.jpg', 'test', '588a3742cf909'),
(193, 'test', 'img/img/categories/test/img1920x1080588a37438f724.jpg', 'img/img/categories/test/img1024x768588a37438f724.jpg', 'img/img/categories/test/img960x800588a37438f724.jpg', 'img/img/categories/test/img600x800588a37438f724.jpg', 'test', '588a37438f724'),
(194, 'test', 'img/img/categories/test/img1920x1080588a374447231.jpg', 'img/img/categories/test/img1024x768588a374447231.jpg', 'img/img/categories/test/img960x800588a374447231.jpg', 'img/img/categories/test/img600x800588a374447231.jpg', 'test', '588a374447231'),
(195, 'test', 'img/img/categories/test/img1920x1080588a3745118f9.jpg', 'img/img/categories/test/img1024x768588a3745118f9.jpg', 'img/img/categories/test/img960x800588a3745118f9.jpg', 'img/img/categories/test/img600x800588a3745118f9.jpg', 'test', '588a3745118f9'),
(196, 'test', 'img/img/categories/test/img1920x1080588a3745b93e0.jpg', 'img/img/categories/test/img1024x768588a3745b93e0.jpg', 'img/img/categories/test/img960x800588a3745b93e0.jpg', 'img/img/categories/test/img600x800588a3745b93e0.jpg', 'test', '588a3745b93e0'),
(197, 'test', 'img/img/categories/test/img1920x1080588a374684256.jpg', 'img/img/categories/test/img1024x768588a374684256.jpg', 'img/img/categories/test/img960x800588a374684256.jpg', 'img/img/categories/test/img600x800588a374684256.jpg', 'test', '588a374684256'),
(198, 'test', 'img/img/categories/test/img1920x1080588a374738506.jpg', 'img/img/categories/test/img1024x768588a374738506.jpg', 'img/img/categories/test/img960x800588a374738506.jpg', 'img/img/categories/test/img600x800588a374738506.jpg', 'test', '588a374738506'),
(199, 'test', 'img/img/categories/test/img1920x1080588a3747ea001.jpg', 'img/img/categories/test/img1024x768588a3747ea001.jpg', 'img/img/categories/test/img960x800588a3747ea001.jpg', 'img/img/categories/test/img600x800588a3747ea001.jpg', 'test', '588a3747ea001'),
(200, 'test', 'img/img/categories/test/img1920x1080588a3748a5ebe.jpg', 'img/img/categories/test/img1024x768588a3748a5ebe.jpg', 'img/img/categories/test/img960x800588a3748a5ebe.jpg', 'img/img/categories/test/img600x800588a3748a5ebe.jpg', 'test', '588a3748a5ebe'),
(201, 'test', 'img/img/categories/test/img1920x1080588a374967d19.jpg', 'img/img/categories/test/img1024x768588a374967d19.jpg', 'img/img/categories/test/img960x800588a374967d19.jpg', 'img/img/categories/test/img600x800588a374967d19.jpg', 'test', '588a374967d19'),
(202, 'test', 'img/img/categories/test/img1920x1080588a374a2091e.jpg', 'img/img/categories/test/img1024x768588a374a2091e.jpg', 'img/img/categories/test/img960x800588a374a2091e.jpg', 'img/img/categories/test/img600x800588a374a2091e.jpg', 'test', '588a374a2091e'),
(203, 'test', 'img/img/categories/test/img1920x1080588a374ac6eac.jpg', 'img/img/categories/test/img1024x768588a374ac6eac.jpg', 'img/img/categories/test/img960x800588a374ac6eac.jpg', 'img/img/categories/test/img600x800588a374ac6eac.jpg', 'test', '588a374ac6eac'),
(204, 'test', 'img/img/categories/test/img1920x1080588a374b8089f.jpg', 'img/img/categories/test/img1024x768588a374b8089f.jpg', 'img/img/categories/test/img960x800588a374b8089f.jpg', 'img/img/categories/test/img600x800588a374b8089f.jpg', 'test', '588a374b8089f'),
(205, 'test', 'img/img/categories/test/img1920x1080588a374c37200.jpg', 'img/img/categories/test/img1024x768588a374c37200.jpg', 'img/img/categories/test/img960x800588a374c37200.jpg', 'img/img/categories/test/img600x800588a374c37200.jpg', 'test', '588a374c37200'),
(206, 'test', 'img/img/categories/test/img1920x1080588a374cf0214.jpg', 'img/img/categories/test/img1024x768588a374cf0214.jpg', 'img/img/categories/test/img960x800588a374cf0214.jpg', 'img/img/categories/test/img600x800588a374cf0214.jpg', 'test', '588a374cf0214'),
(207, 'test', 'img/img/categories/test/img1920x1080588a374dafab8.jpg', 'img/img/categories/test/img1024x768588a374dafab8.jpg', 'img/img/categories/test/img960x800588a374dafab8.jpg', 'img/img/categories/test/img600x800588a374dafab8.jpg', 'test', '588a374dafab8'),
(208, 'test', 'img/img/categories/test/img1920x1080588a374e6e9c8.jpg', 'img/img/categories/test/img1024x768588a374e6e9c8.jpg', 'img/img/categories/test/img960x800588a374e6e9c8.jpg', 'img/img/categories/test/img600x800588a374e6e9c8.jpg', 'test', '588a374e6e9c8');

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
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT для таблицы `images_db`
--
ALTER TABLE `images_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=209;
--
-- AUTO_INCREMENT для таблицы `users_db`
--
ALTER TABLE `users_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
