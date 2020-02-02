-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 30 2020 г., 11:55
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testing`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `ID` int(10) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`ID`, `title`, `desc`, `price`) VALUES
(1, 'good1', 'desc1', 'price1'),
(2, 'good2', 'desc2', 'price2'),
(3, 'good3', 'desc3', 'price3'),
(4, 'good4', 'desc4', 'price4'),
(5, 'good5', 'desc5', 'price5'),
(6, 'good6', 'desc6', 'price6'),
(7, 'good7', 'desc7', 'price7'),
(8, 'good8', 'desc8', 'price8'),
(9, 'good9', 'desc9', 'price9'),
(10, 'good10', 'desc10', 'price10'),
(11, 'good11', 'desc11', 'price11'),
(12, 'good12', 'desc12', 'price12'),
(13, 'good13', 'desc13', 'price13'),
(14, 'good14', 'desc14', 'price14'),
(15, 'good15', 'desc15', 'price15'),
(16, 'good16', 'desc16', 'price16'),
(17, 'good17', 'desc17', 'price17'),
(18, 'good18', 'desc18', 'price18'),
(19, 'good19', 'desc19', 'price19'),
(20, 'good20', 'desc20', 'price20'),
(21, 'good21', 'desc21', 'price21'),
(22, 'good22', 'desc22', 'price22'),
(23, 'good23', 'desc23', 'price23'),
(24, 'good24', 'desc24', 'price24'),
(25, 'good25', 'desc25', 'price25'),
(26, 'good26', 'desc26', 'price26'),
(27, 'good27', 'desc27', 'price27'),
(28, 'good28', 'desc28', 'price28'),
(29, 'good29', 'desc29', 'price29'),
(30, 'good30', 'desc30', 'price30'),
(31, 'good31', 'desc31', 'price31'),
(32, 'good32', 'desc32', 'price32'),
(33, 'good33', 'desc33', 'price33'),
(34, 'good34', 'desc34', 'price34'),
(35, 'good35', 'desc35', 'price35'),
(36, 'good36', 'desc36', 'price36'),
(37, 'good37', 'desc37', 'price37'),
(38, 'good38', 'desc38', 'price38'),
(39, 'good39', 'desc39', 'price39'),
(40, 'good40', 'desc40', 'price40'),
(41, 'good41', 'desc41', 'price41'),
(42, 'good42', 'desc42', 'price42'),
(43, 'good43', 'desc43', 'price43'),
(44, 'good44', 'desc44', 'price44'),
(45, 'good45', 'desc45', 'price45'),
(46, 'good46', 'desc46', 'price46'),
(47, 'good47', 'desc47', 'price47'),
(48, 'good48', 'desc48', 'price48'),
(49, 'good49', 'desc49', 'price49'),
(50, 'good50', 'desc50', 'price50');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
