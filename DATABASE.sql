-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Авг 30 2017 г., 15:24
-- Версия сервера: 5.6.31-log
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sibers`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `fam` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `datet` varchar(255) NOT NULL,
  `pol` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `fam`, `login`, `password`, `datet`, `pol`, `email`, `remember_token`, `created_at`, `updated_at`) VALUES
(52, 'Нурлан', 'Тюлькубаев', 'bambuk', '$2y$10$Q7d/eX0kRovTSjkhVqT9y.5RCFeR7..cHA3sWIcr.29QZoTrDY5f.', '08-02-1991', 'Мужской', 'adante91@mail.ru', 'F1QjjxQiJwqOpMU6lZo4ZW00vmhJcAE5ZWijsf3AIE3oZDJaAII4W8W7t9f5', '2017-08-29 18:10:21', '2017-08-29 18:10:21'),
(53, 'Alvaro', 'Morata', 'morata', '$2y$10$KXGUKwtQeDFY4IFtyvmCremmM2Oh.NPDKvkWkQ.niAK7.lJubWTIC', '08-29-1991', 'Мужской', 'ada@mail.ru', NULL, '2017-08-29 18:11:38', '2017-08-29 18:12:53'),
(54, 'Marcos', 'Alonso', 'alonso', '$2y$10$Udn/Z8K98H5ceSL/2XuYdevqgNijhYTtnzr7vR4jUmb.462y4icCy', '08-23-1985', 'Мужской', 'alonso@gmail.com', NULL, '2017-08-29 18:16:09', '2017-08-29 18:16:09'),
(55, 'Cesc', 'Fabregas', 'fabregas', '$2y$10$Vx6jGeZUim.nRlu.aRMmSel6OFA5LUHrPZfzc/9Y0wqdypmFrto7O', '08-22-1982', 'Мужской', 'cesc@gmail.com', NULL, '2017-08-29 18:17:05', '2017-08-29 18:17:05'),
(56, 'Валентина', 'Шевченко', 'shevchenko', '$2y$10$paPSZ6rDmkYOSUrlkfHEF.r.exFYOVr2Vz9RODfpPnFxtzAB6g61q', '08-28-1989', 'Женский', 'ada@mail.ru', NULL, '2017-08-29 18:22:37', '2017-08-29 18:22:37'),
(57, 'Amanda', 'Nunes', 'nunes', '$2y$10$JkSelFnnls6HSx6N5xjT5OwBTwLsd7VXVj7ZLZ1W/0f0g44cGTuMe', '08-04-1989', 'Женский', 'amanda@gmail.com', 'Uow76QwMdGQrIzor04UyTmmeM8K4a8HSsZEKyD4xiH5nE56ioOw6I8qyEzCl', '2017-08-29 18:24:14', '2017-08-29 18:24:54');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=59;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
