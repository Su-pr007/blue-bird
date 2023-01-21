-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: mysql
-- Время создания: Янв 16 2023 г., 17:52
-- Версия сервера: 8.0.31
-- Версия PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `blue_bird`
--
CREATE DATABASE IF NOT EXISTS blue_bird;
CREATE USER IF NOT EXISTS 'user'@'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON blue_bird.* TO 'user'@'%';

use blue_bird;

-- --------------------------------------------------------

--
-- Структура таблицы `offers`
--


CREATE TABLE `offers` (
  `id` int NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `offers`
--

INSERT INTO `offers` (`id`, `url`, `label`, `color`) VALUES
(1, 'icon/offers/1.jpg', 'Голубь', ''),
(2, 'icon/offers/2.jpg', 'Сова', ''),
(3, 'icon/offers/3.jpg', 'Павлин', 'black'),
(4, 'icon/offers/4.jpg', 'Пин', ''),
(5, 'icon/offers/5.jpg', '', ''),
(6, 'icon/offers/6.jpg', 'Воробушек', ''),
(7, 'icon/offers/7.jpg', 'Тукан', '');

-- --------------------------------------------------------

--
-- Структура таблицы `order_call`
--

CREATE TABLE `order_call` (
  `id` int NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `number` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `order_call`
--

INSERT INTO `order_call` (`id`, `name`, `number`) VALUES
(100, 'Андрей', '89524513936'),
(101, 'Андрей', '89524513936'),
(102, 'Андрей', '89524513936');

-- --------------------------------------------------------

--
-- Структура таблицы `order_product`
--

CREATE TABLE `order_product` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `order_product`
--

INSERT INTO `order_product` (`id`, `email`, `product`, `message`) VALUES
(10, 'shiniaiev00@mail.ru', 'Курица', 'Хочу зелёную курицу'),
(11, 'shiniaiev00@mail.ru', 'Курица', 'Хочу зелёную курицу'),
(12, 'shiniaiev00@mail.ru', 'Курица', 'Хочу зелёную курицу'),
(13, 'shiniaiev00@mail.ru', 'Курица', 'Хочу зелёную курицу'),
(14, 'shiniaiev00@mail.ru', 'Курица', 'Хочу зелёную курицу');

-- --------------------------------------------------------

--
-- Структура таблицы `popular`
--

CREATE TABLE `popular` (
  `id` int NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `prise` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `popular`
--

INSERT INTO `popular` (`id`, `url`, `label`, `quantity`, `prise`) VALUES
(1, 'icon/popular/green_bird.jpg', 'Зелёная птичка', 1, 300),
(2, 'icon/popular/purple_bird.jpg', 'Фиолетовая птичка', 7, 301),
(3, 'icon/popular/blue_bird.jpg', 'Синяя птичка', 0, 299),
(4, 'icon/popular/yellow_bird.jpg', 'Желтая птичка', 4, 333),
(5, 'icon/popular/red_bird.jpg', 'Красная птичка', 0, 444);

-- --------------------------------------------------------

--
-- Структура таблицы `review`
--

CREATE TABLE `review` (
  `id` int NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `stars` float DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `text` varchar(1255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `review`
--

INSERT INTO `review` (`id`, `url`, `stars`, `label`, `name`, `text`) VALUES
(1, 'icon/review/1.jpg', 1, 'Голубь', 'Витя', 'Меня клюнул голубь'),
(4, 'icon/review/2.jpg', 3.3, 'Изумрудный тукан', 'Оля', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, autembeatae eius esse est et expedita fugiat illo iure laboriosam nisi non nullaquia repellendus repudiandae voluptatem voluptatibus? Obcaecati,perspiciatisDeleniti illo nemo placeat provident quos repellat vero? Ad distinctiodolorem doloremque minima nobis reiciendis sint totam! Alias aspernatur beatae delectus dignissimos harum ipsum magnam, maiores, praesentium quae quibusdam voluptatibus!\r\nDeleniti illo nemo placeat provident quos repellat vero? Ad distinctio dolorem doloremque minima nobis reiciendis sint totam! Alias aspernaturbeatae delectus dignissimos harum ipsum magnam, maiores, praesentium quae\r\n                                        quibusdam voluptatibus! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, autem\r\n                                        beatae eius esse est et expedita fugiat illo iure laboriosam nisi non nulla\r\n                                        quia repellendus repudiandae voluptatem voluptatibus? Obcaecati,\r\n                                        perspiciatis!'),
(5, 'icon/review/3.jpg', 4.5, 'Воробушек', 'Кеша', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, autem\r\n                                        beatae eius esse est et expedita fugiat illo iure laboriosam nisi non nulla\r\n                                        quia repellendus repudiandae voluptatem voluptatibus? Obcaecati,\r\n                                        perspiciatis!\r\n\r\n                                        Deleniti illo nemo placeat provident quos repellat vero? Ad distinctio\r\n                                        dolorem doloremque minima nobis reiciendis sint totam! Alias aspernatur\r\n                                        beatae delectus dignissimos harum ipsum magnam, maiores, praesentium quae\r\n                                        quibusdam voluptatibus!\r\n\r\n                                        Deleniti illo nemo placeat provident quos repellat vero? Ad distinctio\r\n                                        dolorem doloremque minima nobis reiciendis sint totam! Alias aspernatur\r\n                                        beatae delectus dignissimos harum ipsum magnam, maiores, praesentium quae\r\n                                        quibusdam voluptatibus!'),
(6, 'icon/review/4.jpg', 2.5, 'Фиолетовая птичка', 'Антон', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, autem beatae eius esse est et expedita fugiat illo iure laboriosam nisi non nulla quia repellendus repudiandae voluptatem voluptatibus? Obcaecati, perspiciatis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. '),
(7, 'icon/review/5.jpg', 5, 'Красная птичка', 'Сергей', ' Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi, autem\r\n                                        beatae eius esse est et expedita fugiat illo iure laboriosam nisi non nulla\r\n                                        quia repellendus repudiandae voluptatem voluptatibus? Obcaecati,\r\n                                        perspiciatis!');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_call`
--
ALTER TABLE `order_call`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `order_product`
--
ALTER TABLE `order_product`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `popular`
--
ALTER TABLE `popular`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `order_call`
--
ALTER TABLE `order_call`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT для таблицы `order_product`
--
ALTER TABLE `order_product`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `popular`
--
ALTER TABLE `popular`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `review`
--
ALTER TABLE `review`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
