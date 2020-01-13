-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 18 2019 г., 23:53
-- Версия сервера: 5.6.37
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `Hotel22`
--

-- --------------------------------------------------------

--
-- Структура таблицы `allrooms`
--

CREATE TABLE `allrooms` (
  `id` int(11) NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `allrooms`
--

INSERT INTO `allrooms` (`id`, `type`, `photo`, `cost`) VALUES
(1, 'Люкс 1022', 'https://img.mebelok.com/image/cache/data/Svit-mebliv/obshie/obshie/svit-mebliv-spalnya-sofiya-belaya-lux-640x480.jpg', 15000),
(2, 'Люкс 1033', 'https://www.vimercatimeda.ru/sites/default/files/styles/fullscreen/public/immagine/furniture-luxury-bedroom-emperador-gold-397-931.jpg?itok=06oo7Oon', 15000),
(3, 'Люкс 1044', 'https://era-mebel.com/assets/images/katalog/spalni/Dzhokonda-krem-glyanec/_DSC6844.jpg', 15000),
(4, 'Эконом 843', 'https://thehermitagehotel.ru/wp-content/uploads/2014/02/suite-in-the-official-state-hermitage-hotel.jpg', 10000),
(5, 'Эконом 850', 'http://www.kievhotels.in.ua/images/hotels/pirosmani-hotel/pirosmani-nomer-11.jpg', 10000),
(6, 'Эконом 900', 'https://www.kievhotels.ru/images/hotels/bratislava-hotel/bratislava-nomer-lux.jpg', 10000),
(7, 'Семейный 508', 'http://royalmedgroup.com/inc/img2/p1046/Badrutt%20palace8.jpg', 8000),
(8, 'Семейный 510', 'https://cdn.ostrovok.ru/t/640x400/content/91/26/912674e8a59ea6fc1cf6eb48f3dec63c326518a4.jpeg', 8000),
(9, 'Семейный 514', 'http://royalmile.com.ua/wp-content/uploads/2016/10/13496952.jpg', 8000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `allrooms`
--
ALTER TABLE `allrooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `allrooms`
--
ALTER TABLE `allrooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
