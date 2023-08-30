-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 30 2023 г., 11:04
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `register`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `company` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `phone_1` varchar(255) NOT NULL,
  `phone_2` varchar(255) NOT NULL,
  `phone_3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `company`, `position`, `phone_1`, `phone_2`, `phone_3`) VALUES
(3, 'Harry ', 'Adamson', 'Adamson@gmail.com', 'apple', 'manager', '546768907', '7666666', '122344'),
(4, 'Oliver ', 'Smith', 'Smith@gmail.com', 'Amazon', 'manager', '547969765', '68790796', '54567598756'),
(5, 'Johny', 'Walker', 'Walker@gmail.com', 'Pied paper', 'Chef', '49478298235', '934258201', '29234835'),
(6, 'Grace ', 'Davis', 'Davis@gmail.com', 'JP Morgan', 'Manager', '5986597589', '578957333678670980', '765487899'),
(7, 'Lucy ', 'Lewis', 'Lewis@gmail.com', 'Pixar', 'Producer', '322535356', '3452452', '2353747'),
(8, 'Jack ', 'Brown', 'Brown@gmail.com', 'UFC', 'Fighter', '2345636', '354312', '243'),
(9, 'Katie ', 'Taylor', 'Taylor@gmail.com', 'Home', 'Housewife', '43545', '3454376', '77754433'),
(10, 'Harley ', 'Queen', 'queen@gmail.com', 'DC', 'Henchwoman', '324243234', '', ''),
(11, 'William', 'King', 'King@gmail.com', 'Home', 'Writer', '547892387', '37357', '737367'),
(12, 'Mia ', 'Moore', 'Moore@gmail.com', 'BMW', 'Manager', '34564', '895444', ''),
(13, 'John', 'Young', 'Young@gmail.com', 'Google', 'manager', '4383282', '', ''),
(14, 'Michael ', 'Scott', 'Michael@gmail.com', 'Office', 'Actor', '1234433', '', ''),
(15, 'Кот', 'Матроскин', 'cat@cat.com', 'Home', 'cat', '342534', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
