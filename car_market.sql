-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 14 2020 г., 21:12
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `car_market`
--
CREATE DATABASE IF NOT EXISTS `car_market` DEFAULT CHARACTER SET utf16 COLLATE utf16_bin;
USE `car_market`;

-- --------------------------------------------------------

--
-- Структура таблицы `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL COMMENT 'Номер',
  `year_of_issue` int(11) NOT NULL COMMENT 'Дата выпуска',
  `condition` varchar(100) NOT NULL COMMENT 'Состояние',
  `mileage` int(11) NOT NULL COMMENT '\r\nПробег',
  `fuel_type` varchar(100) NOT NULL COMMENT 'Тип топлива',
  `volume` int(11) NOT NULL COMMENT 'Объем л.',
  `color` varchar(100) NOT NULL COMMENT 'Цвет',
  `body_type` varchar(100) NOT NULL COMMENT 'Тип кузова',
  `transmission` varchar(100) NOT NULL COMMENT 'Тип коробки передач',
  `drive_unit` varchar(100) NOT NULL COMMENT 'Тип привода',
  `price` int(11) NOT NULL COMMENT 'Цена',
  `users_id` int(11) NOT NULL COMMENT 'Номер пользователя'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Структура таблицы `group`
--

CREATE TABLE `group` (
  `id` int(11) NOT NULL COMMENT '№',
  `name` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Имя',
  `cod` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Код'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `group`
--

INSERT INTO `group` (`id`, `name`, `cod`) VALUES
(1, 'Администратор', 'admin'),
(2, 'Пользователь', 'user');

-- --------------------------------------------------------

--
-- Структура таблицы `guestbook`
--

CREATE TABLE `guestbook` (
  `id` int(11) NOT NULL COMMENT '№',
  `text` text COLLATE utf16_bin NOT NULL COMMENT 'Текст',
  `phonenumber` varchar(50) COLLATE utf16_bin NOT NULL COMMENT 'Телефон',
  `email` varchar(50) COLLATE utf16_bin NOT NULL COMMENT 'Почта',
  `name` varchar(50) COLLATE utf16_bin NOT NULL COMMENT 'Имя'
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Дамп данных таблицы `guestbook`
--

INSERT INTO `guestbook` (`id`, `text`, `phonenumber`, `email`, `name`) VALUES
(1, 'aaa', 'dd', 'ff@mail.ru', 'dd');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL COMMENT '№',
  `login` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Пользователь',
  `password` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Пароль',
  `group_id` int(11) NOT NULL COMMENT 'Группа',
  `FIO` varchar(150) NOT NULL COMMENT 'ФИО',
  `city` varchar(100) NOT NULL COMMENT 'Город',
  `phone` varchar(100) NOT NULL COMMENT 'Номер телефона'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `group_id`, `FIO`, `city`, `phone`) VALUES
(2, 'Pavel', '929ccc52e633a637f8bf60e98ffc4b1f', 1, 'БОНДАРЕНКО ПАВЕЛ ВЛАДИМИРОВИЧ', '', ''),
(3, 'Vasya', '2836a7191f6a9e2455b763469ca4ec6d', 2, 'ПУПКИН ВАСИЛИЙ', '', ''),
(4, 'Ivan', '432f45b44c432414d2f97df0e5743818', 1, 'Иванов Иван Иванович', '', ''),
(5, 'Peter', '2b7c0e435a43e9c7453c8063b1ac2358', 1, 'Петров Петр Петрович', '', ''),
(6, 'Sidorov', '2836a7191f6a9e2455b763469ca4ec6d', 1, 'Сидоров', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `user_id` (`users_id`);

--
-- Индексы таблицы `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `guestbook`
--
ALTER TABLE `guestbook`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `group_id` (`group_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Номер', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `group`
--
ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `guestbook`
--
ALTER TABLE `guestbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '№', AUTO_INCREMENT=30;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
