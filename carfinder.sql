-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 18 2023 г., 10:52
-- Версия сервера: 8.0.30
-- Версия PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `carfinder`
--

-- --------------------------------------------------------

--
-- Структура таблицы `car`
--

CREATE TABLE `car` (
  `id_car` bigint NOT NULL,
  `brand` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `year_car` int NOT NULL,
  `transmission` varchar(11) NOT NULL,
  `bodytype` varchar(11) NOT NULL,
  `size_engine` float NOT NULL,
  `fuel_consumption` float NOT NULL,
  `drive` varchar(20) NOT NULL,
  `number_of_seats` int NOT NULL,
  `engine_power` float NOT NULL,
  `type_engine` varchar(11) NOT NULL,
  `pricebefore` int NOT NULL,
  `priceafter` int NOT NULL,
  `country` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `newcar` varchar(250) NOT NULL,
  `oldcar` varchar(250) NOT NULL,
  `thicknesscar` varchar(250) NOT NULL,
  `video` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `wheel` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `car`
--

INSERT INTO `car` (`id_car`, `brand`, `model`, `year_car`, `transmission`, `bodytype`, `size_engine`, `fuel_consumption`, `drive`, `number_of_seats`, `engine_power`, `type_engine`, `pricebefore`, `priceafter`, `country`, `newcar`, `oldcar`, `thicknesscar`, `video`, `wheel`) VALUES
(1, 'Kia', 'Cerato', 2007, 'Механика', 'Седан', 1.6, 6.8, 'Передний', 5, 122, 'Бензин', 600000, 450000, 'Южная Корея', 'imgforcar/kianew.png', 'imgforcar/kiaold.png', 'imgforcar/kialkp.png', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/AqY-uZ0CXQ4?si=HJnPlex0ZGdtuwch\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Левый'),
(2, 'Skoda', 'Felicia', 1998, 'Механика', 'Хэтчбек', 1.3, 7.5, 'Передний', 5, 58, 'Бензин', 200000, 68000, 'Чехия', 'imgforcar/shnew.png', 'imgforcar/shold.png', 'imgforcar/shlkp.png', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/eX553Pg1pEs?si=zr9NFzfrFxFPyJjO\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Левый'),
(3, 'Nissan', 'Almera', 2014, 'Автомат', 'Седан', 1.6, 8.5, 'Передний', 5, 102, 'Бензин', 1000000, 900000, 'Япония', 'imgforcar/almeranew.png', 'imgforcar/almeraold.png', 'imgforcar/almeranew.png', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/4PAx3fzjDNw?si=X5QaSYcf_U3aKvqS\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Левый'),
(4, 'Lada (ВАЗ)', '2107', 2004, 'Механика', 'Седан', 1.6, 8.5, 'Задний', 5, 75, 'Бензин', 300000, 70000, 'Россия', 'imgforcar/2107new.png', 'imgforcar/2107old.png', 'imgforcar/2107new.png', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/jsO4wqk2F9g?si=RkaDnGF8wZxsRaox\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Левый'),
(5, 'Renault', 'Sandero Stepway', 2018, 'Механика', 'Хэтчбек', 1.6, 6.9, 'Передний', 5, 113, 'Бензин', 1200000, 900000, 'Франция', 'imgforcar/renonew.png', 'imgforcar/renoold.png', 'imgforcar/renonew.png', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/L16ZwZuX7Sw?si=9A6oyUPfoZKbahry\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Левый'),
(6, 'Chevrolet', 'Lanos', 2007, 'Механика', 'Хэтчбек', 1.5, 6.7, 'Передний', 5, 86, 'Бензин', 100000, 40000, 'США', 'imgforcar/lanosnew.png', 'imgforcar/lanosold.png', 'imgforcar/lanosnew.png', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/qOQ5E0cuPjE?si=Dg_P-_6wEeDYZ0Jt\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', 'Левый');

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id_comment` bigint NOT NULL,
  `id_discussions` bigint NOT NULL,
  `id_user` bigint NOT NULL,
  `text_comment` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id_comment`, `id_discussions`, `id_user`, `text_comment`) VALUES
(3, 1, 2, 'Проверь втягивающее'),
(4, 8, 2, 'Заряди, либо попроси подкурить кого-нибудь');

-- --------------------------------------------------------

--
-- Структура таблицы `discussions`
--

CREATE TABLE `discussions` (
  `id_discussions` bigint NOT NULL,
  `id_car` bigint NOT NULL,
  `theme` varchar(400) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `discussions`
--

INSERT INTO `discussions` (`id_discussions`, `id_car`, `theme`) VALUES
(1, 4, 'Не заводится, что делать?'),
(5, 1, 'Что можете сказать о данной модели?'),
(6, 2, 'Как включить заднюю'),
(7, 4, 'Как двигаться'),
(8, 4, 'Что делать, если сел аккум');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` bigint NOT NULL,
  `name` varchar(20) NOT NULL,
  `login` varchar(11) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `name`, `login`, `password`) VALUES
(1, 'Александр', '89152345454', 'fthxf'),
(2, 'Валерия', '89035605930', 'йцуке'),
(3, 'Maksim', '89192466400', 'йцуке'),
(4, 'аааа', '84564564577', 'qwert');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id_car`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_discussions` (`id_discussions`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `discussions`
--
ALTER TABLE `discussions`
  ADD PRIMARY KEY (`id_discussions`),
  ADD KEY `id_car` (`id_car`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `car`
--
ALTER TABLE `car`
  MODIFY `id_car` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `discussions`
--
ALTER TABLE `discussions`
  MODIFY `id_discussions` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_discussions`) REFERENCES `discussions` (`id_discussions`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ограничения внешнего ключа таблицы `discussions`
--
ALTER TABLE `discussions`
  ADD CONSTRAINT `discussions_ibfk_1` FOREIGN KEY (`id_car`) REFERENCES `car` (`id_car`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
