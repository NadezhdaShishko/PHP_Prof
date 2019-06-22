-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 19 2019 г., 16:39
-- Версия сервера: 5.6.43
-- Версия PHP: 7.1.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop_php2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `session_id` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `session_id`, `product_id`, `quantity`) VALUES
(2, 'skihi2p7odue7ehaet1hrf6pfccf7p59', 1, 0),
(3, 'skihi2p7odue7ehaet1hrf6pfccf7p59', 2, 0),
(4, 'skihi2p7odue7ehaet1hrf6pfccf7p59', 5, 0),
(5, 'skihi2p7odue7ehaet1hrf6pfccf7p59', 7, 0),
(6, 'skihi2p7odue7ehaet1hrf6pfccf7p59', 1, 0),
(7, 'skihi2p7odue7ehaet1hrf6pfccf7p59', 4, 0),
(8, 'skihi2p7odue7ehaet1hrf6pfccf7p59', 5, 0),
(9, 'skihi2p7odue7ehaet1hrf6pfccf7p59', 3, 0),
(10, 'skihi2p7odue7ehaet1hrf6pfccf7p59', 1, 0),
(11, 'skihi2p7odue7ehaet1hrf6pfccf7p59', 1, 0),
(12, 'skihi2p7odue7ehaet1hrf6pfccf7p59', 3, 0),
(13, 'skihi2p7odue7ehaet1hrf6pfccf7p59', 4, 0),
(14, 'skihi2p7odue7ehaet1hrf6pfccf7p59', 1, 0),
(15, 'skihi2p7odue7ehaet1hrf6pfccf7p59', 4, 0),
(16, 'skihi2p7odue7ehaet1hrf6pfccf7p59', 3, 0),
(17, 'diba096jtsvtkg51u6tq8hiqrihf0gf4', 2, 0),
(18, 'ouc6kujaccku2lfjrv9g3akj05gfqkh0', 3, 0),
(19, '64a4s6ouugig0dt8lqakrofvfat785pk', 4, 0),
(20, 'cgpoufbomgh1aeuvcalfc7jvvt2un7gs', 2, 0),
(21, '65eqh13oqr6fhiedi14k9vo8v09rtr3q', 1, 0),
(22, 'nrgttbv47auf8vgoho4sr86nbvg0crri', 2, 0),
(23, 'gsto4u71unp5a758br3opvfsmjp76m7f', 1, 0),
(24, 'gsto4u71unp5a758br3opvfsmjp76m7f', 2, 0),
(25, 'gsto4u71unp5a758br3opvfsmjp76m7f', 3, 0),
(26, 'c0gvqslov6hdqabfufug9lqa0read42m', 1, 0),
(27, 'c0gvqslov6hdqabfufug9lqa0read42m', 2, 0),
(28, 'c0gvqslov6hdqabfufug9lqa0read42m', 3, 0),
(36, 'uhmi8pmc567jnq730vsgom4q2bdmfqq3', 1, 0),
(37, 'uhmi8pmc567jnq730vsgom4q2bdmfqq3', 2, 0),
(38, 'uhmi8pmc567jnq730vsgom4q2bdmfqq3', 3, 0),
(40, '4eo5v4jgkl6qioes2s7akm3c141lc5rm', 2, 0),
(41, '4eo5v4jgkl6qioes2s7akm3c141lc5rm', 1, 0),
(49, 'hnp7m5corfjvp6jld6a8del709kmiq5h', 0, 0),
(58, '47die0fe1njt04s3kq2rp8v33i2rm5lg', 1, 0),
(59, '47die0fe1njt04s3kq2rp8v33i2rm5lg', 2, 0),
(60, '47die0fe1njt04s3kq2rp8v33i2rm5lg', 3, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `price` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`) VALUES
(1, 'Гамбургер', 'Булка с котлетой из говядины', 75),
(2, 'Чизбургер', 'Булка с котлетой из говядины и сыром', 85),
(3, 'Чикенбургер', 'Булка с куриной котлетой', 70),
(4, 'Фишбургер', 'Булка с котлетой из рыбы', 90),
(5, 'Картофель фри', 'Картофель брусочками, жареный во фритюре.', 45),
(6, 'Картофель по-домашнему', 'Картофель дольками.', 52),
(7, 'Пепси', 'Напиток газированный', 60),
(15, 'Кола', 'Напиток газированный', 60),
(16, 'Фанта', 'Напиток газированный', 60),
(17, 'Лимонад', 'Напиток газированный', 60),
(18, '7Up', 'Напиток газированный', 60),
(19, 'Mountain Dew', 'Напиток газированный', 60);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(64) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `hash` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `hash`) VALUES
(1, 'admin', 'admin', '0'),
(2, 'Люси', 'gavGav123', '0');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
