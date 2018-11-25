-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 26 2018 г., 00:01
-- Версия сервера: 10.1.36-MariaDB
-- Версия PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vapour`
--

-- --------------------------------------------------------

--
-- Структура таблицы `stations`
--

CREATE TABLE `stations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `power` float DEFAULT NULL,
  `open` int(11) DEFAULT NULL,
  `container` int(11) DEFAULT NULL,
  `installation` int(11) DEFAULT NULL,
  `shipping` int(11) DEFAULT NULL,
  `scheme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `stations`
--

INSERT INTO `stations` (`id`, `name`, `power`, `open`, `container`, `installation`, `shipping`, `scheme`) VALUES
(1, 'JMS208', 330, 200000, 50000, 5000, 6000, 'dwg/JMS208.dwg'),
(2, 'JMS312', 635, 230000, 60000, 5000, 7000, 'dwg/JMS312.dwg'),
(3, 'JMS316', 851, 250000, 70000, 5000, 8000, 'dwg/JMS316.dwg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `stations`
--
ALTER TABLE `stations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `stations`
--
ALTER TABLE `stations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
