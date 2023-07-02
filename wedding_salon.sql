-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 29 2023 г., 12:55
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `wedding_salon`
--

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

CREATE TABLE `admin` (
  `id_admin` int NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `Price` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id_admin`, `name`, `Price`) VALUES
(1, 'Свадебное платье \"midi\"', 75000.00),
(2, 'Свадебное платье \"Mara\"', 75000.00),
(3, 'Свадебное платье \"kz\'', 59.00),
(4, 'хлебушек', 70.00),
(5, '1', 1.00),
(8, 'Свадебное платье \"Tini\"', 10000.00);

-- --------------------------------------------------------

--
-- Структура таблицы `celebrations`
--

CREATE TABLE `celebrations` (
  `id_celebrations` int NOT NULL,
  `Place_name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `description` varchar(40) DEFAULT NULL,
  `address` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `id_wedding_theme` int DEFAULT NULL,
  `id_places` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `celebrations`
--

INSERT INTO `celebrations` (`id_celebrations`, `Place_name`, `description`, `address`, `id_wedding_theme`, `id_places`) VALUES
(1, 'Seneshal', 'Seneshal', 'MO, г Солнечногорск, Тимоновское шоссе 3', 1, 1),
(2, 'Artiland', 'Artiland', 'МО, Балашиха, Новское шоссе 10', 2, 2),
(7, 'Barvikha Hotel', 'Barvikha Hotel', 'МО, СП Васильевское', 3, 3),
(8, 'Жан реми', 'Жан реми', 'МО, Минского шоссе, поселок Трувиль', 4, 3),
(9, 'Метрополь', 'Метрополь', 'Москва, Театральный пр-д2', 5, 5),
(10, 'Loft Hall', 'Loft Hall', 'Москва, ул. Ленинская слобода 26', 5, 4),
(11, 'Calton', 'Calton', 'Москва, Тверская ул 3', 6, 6),
(12, 'Усадьба Тайны Рублева', 'Усадьба Тайны Рублева', 'МО, Маслово 62', 10, 7),
(13, 'Hide', 'Hide', 'Мытищи, Хлебниковский лесопарк', 7, 8),
(14, 'Вилла Ротонда', 'Вилла Ротонда', 'МО, Одинцовский р-н, КП Довиль', 9, 10);

-- --------------------------------------------------------

--
-- Структура таблицы `client`
--

CREATE TABLE `client` (
  `id_client` int NOT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `surname` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `patronymic` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `e-mail_address` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `client`
--

INSERT INTO `client` (`id_client`, `name`, `surname`, `patronymic`, `e-mail_address`) VALUES
(1, 'Алиса', 'Горшкова', 'Ильинична', 'alisa1920g@mail.ru'),
(2, 'София', 'Рожкова', 'Львовна', 'sof223roj@mail.ru'),
(3, 'Надежда', 'Никольская', 'Артемовна', 'nady887nik@mail.ru'),
(4, 'Вера', 'Большакова', 'Ивановна', 'vera1945bol@mail.ru'),
(5, 'Андрей', 'Соколов', 'Михайлович', 'sokolov394@mail.ru'),
(6, 'Григорий', 'Орлов', 'Юрьевич', 'jor1839orl@mail.ru'),
(7, 'Владислав', 'Пушкевич', 'Владиславович', 'vlad653pu@mail.ru'),
(8, 'Милана', 'Пушкова', 'Дмитриевна', 'milana957@mail.ru'),
(9, 'Кристина', 'Мамаева', 'Дмитривена', 'kris84665@mail.ru'),
(10, 'Анна', 'Артемова', 'Александровна', 'anna6933@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `Fitting_status`
--

CREATE TABLE `Fitting_status` (
  `id_Fitting_status` int NOT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Fitting_status`
--

INSERT INTO `Fitting_status` (`id_Fitting_status`, `name`) VALUES
(1, 'в ожидании'),
(2, 'примеряли'),
(3, 'примеряли'),
(4, 'в ожидании'),
(5, 'в ожидании'),
(6, 'примеряли'),
(7, 'в ожидании'),
(8, 'примеряли'),
(9, 'примеряли'),
(10, 'в ожидании');

-- --------------------------------------------------------

--
-- Структура таблицы `Goods`
--

CREATE TABLE `Goods` (
  `id_goods` int NOT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `model` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `price` float(10,2) DEFAULT NULL,
  `quantity_in_stock` int DEFAULT NULL,
  `id_orders_for_wedding_dresses` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Goods`
--

INSERT INTO `Goods` (`id_goods`, `name`, `model`, `price`, `quantity_in_stock`, `id_orders_for_wedding_dresses`) VALUES
(1, 'Свадебное платье \"Ariel\"', 'Прямое', 56000.00, 3, 1),
(2, 'Свадебное платье \"Marina\"', 'Короткое', 60000.00, 4, 2),
(3, 'Свадебное платье \"Eva\"', 'Пышное', 80000.00, 5, 1),
(4, 'Свадебный костюм \"Cores\"', 'Тройка', 40000.00, 3, 5),
(5, 'Свадебный костюм \"Vivo\"', 'Тройка', 36000.00, 4, 3),
(6, 'Свадебный костюм \"007\"', 'Смокинг', 35000.00, 5, 4),
(7, 'Свадебный костюм \"Ares\"', 'Смокинг', 46000.00, 5, 7),
(8, 'Ободок для волос', 'С жемчугом', 5000.00, 5, 8),
(9, 'Мужской ремень', 'черный', 4000.00, 5, 10),
(10, 'Мужской ремень', 'синий', 5000.00, 4, 2),
(11, 'Гребень и серьги', 'серебряные', 7000.00, 7, 6),
(12, 'Тонкий золотистый ободок', 'золотой', 3000.00, 5, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `Orders_for_wedding_dresses`
--

CREATE TABLE `Orders_for_wedding_dresses` (
  `id_Orders_for_wedding_dresses` int NOT NULL,
  `order_date` date DEFAULT NULL,
  `id_client` int DEFAULT NULL,
  `id_celebrations` int DEFAULT NULL,
  `id_goods` int DEFAULT NULL,
  `id_status` int DEFAULT NULL,
  `id_order_status` int DEFAULT NULL,
  `summa` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Orders_for_wedding_dresses`
--

INSERT INTO `Orders_for_wedding_dresses` (`id_Orders_for_wedding_dresses`, `order_date`, `id_client`, `id_celebrations`, `id_goods`, `id_status`, `id_order_status`, `summa`) VALUES
(1, '2022-06-08', 1, 1, 1, 4, 1, 65000.00),
(2, '2023-06-09', 2, 2, 3, 5, 2, 100000.00),
(3, '2021-12-09', 3, 7, 4, 2, 1, 80000.00),
(4, '2023-05-09', 4, 10, 1, 3, 3, 90000.00),
(5, '2023-06-11', 5, 12, 5, 4, 3, 110000.00),
(6, '2023-09-15', 5, 10, 6, 7, 3, 150000.00),
(7, '2023-01-12', 6, 2, 7, 6, 2, 200000.00),
(8, '2023-04-19', 7, 13, 9, 8, 1, 250000.00),
(9, '2023-06-19', 4, 14, 12, 9, 2, 170000.00),
(10, '2023-08-12', 8, 8, 11, 10, 4, 500000.00);

-- --------------------------------------------------------

--
-- Структура таблицы `Order_status`
--

CREATE TABLE `Order_status` (
  `id_Order_status` int NOT NULL,
  `name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Order_status`
--

INSERT INTO `Order_status` (`id_Order_status`, `name`) VALUES
(1, 'оплачен'),
(2, 'подтвержден'),
(3, 'выполнен'),
(4, 'в ожидании');

-- --------------------------------------------------------

--
-- Структура таблицы `Places_for_celebrations`
--

CREATE TABLE `Places_for_celebrations` (
  `id_Places_for_celebrations` int NOT NULL,
  `address` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Places_for_celebrations`
--

INSERT INTO `Places_for_celebrations` (`id_Places_for_celebrations`, `address`) VALUES
(1, 'MO, г Солнечногорск, Тимоновское шоссе 3'),
(2, 'МО, Балашиха, Новское шоссе 10'),
(3, 'МО, СП Васильевское'),
(4, 'МО, Минского шоссе, поселок Трувиль'),
(5, 'Москва, Театральный пр-д2'),
(6, 'Москва, ул. Ленинская слобода 26'),
(7, 'Москва, Тверская ул 3'),
(8, 'МО, Маслово 62'),
(9, 'Мытищи, Хлебниковский лесопарк'),
(10, 'МО, Одинцовский р-н, КП Довиль');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `name` varchar(40) DEFAULT NULL,
  `surname` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`, `email`, `name`, `surname`) VALUES
(1, 'admin', '111', 'mail@mail.ru', 'Алиса', 'Никольская'),
(2, 'lal', '123', 'hsgjs@mail.ru', 'рита', 'Горшкова'),
(3, 'vivo', '1234', 'vivo@mail.ru', 'Юля', 'Пушкевич'),
(4, NULL, ' $2y$10$aysxXIOcI2T7heDsImpPiuzbvY2V5hvrCsJWlJPb5fO6qKIhQemGe', 'fgh', 'cvb', 'cvbnm,'),
(5, NULL, ' $2y$10$TNj.09dk6.f8f55GYOz8Pee4nhkCq0ZVIxkK0Gm4bKLH0khZlzYEC', 'isip_k.d.mamaeva@mpt.ru', 'vbn', 'cvbnm,'),
(6, NULL, ' $2y$10$DpzRziGqU.pfxQfZFAkbHOFXdn6KkzlXVyXfxDYTnj2E2H263CuCa', 'mamaeva0106kris@mail.ru', 'кристина', 'мамаева'),
(8, NULL, ' $2y$10$Fq0Y8OJZDZoPKWo22sOcZOvhFUqpbdvJh.BlrICOXMgS/VDYcB4V2', 'fghj@mail.ru', 'kat', 'kat'),
(9, NULL, ' $2y$10$VZXFGO.NpXlbO/zVk8dCJ.7IKb0fh7FLyLLL/yiC2qEXhOatOQeKi', 'fghj', 'ghj', 'fghjk'),
(10, NULL, ' $2y$10$qR4hexsqenOyhsSTGtpbsem6ttO.Hwz4DbV60xAXao.2YNx33DXaG', 'admin@mail.ru', 'kila', 'kila'),
(11, NULL, ' $2y$10$JaEWY2DrJARgLS5fY4eSee5XS46FiQPb6a0nAWd2LsUUN0fYJaCj6', 'mila123@mail.ru', 'Мила', 'Лимова');

-- --------------------------------------------------------

--
-- Структура таблицы `Wedding_salon_services`
--

CREATE TABLE `Wedding_salon_services` (
  `id_wedding_salon_services` int NOT NULL,
  `Services_name` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `price` float(10,2) DEFAULT NULL,
  `description` varchar(40) DEFAULT NULL,
  `id_goods` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Wedding_salon_services`
--

INSERT INTO `Wedding_salon_services` (`id_wedding_salon_services`, `Services_name`, `price`, `description`, `id_goods`) VALUES
(3, 'пошив платья', 16000.00, 'пошив платья', 1),
(4, 'отпаривание', 0.00, 'отпаривание', 4),
(5, 'химчистка', 0.00, 'химчистка', 2),
(6, 'консультация дизайнера', 0.00, 'консультация дизайнера', 2),
(7, 'выезд', 0.00, 'выезд', 7),
(8, 'корсет', 4000.00, 'корсет', 3),
(9, 'фата короткая/до спины/в пол', 6000.00, 'фата короткая/до спины/в пол', 1),
(10, 'Пошив костюма', 18000.00, 'Пошив костюма', 6);

-- --------------------------------------------------------

--
-- Структура таблицы `Wedding_theme`
--

CREATE TABLE `Wedding_theme` (
  `id_Wedding_theme` int NOT NULL,
  `subject_names` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `Wedding_theme`
--

INSERT INTO `Wedding_theme` (`id_Wedding_theme`, `subject_names`) VALUES
(1, 'винтажная'),
(2, 'эксцентричная'),
(3, 'современная'),
(4, 'рустик'),
(5, 'бохо'),
(6, 'арт-деко'),
(7, 'морской'),
(8, 'эко-френдли'),
(9, 'небесная'),
(10, 'тропическая');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Индексы таблицы `celebrations`
--
ALTER TABLE `celebrations`
  ADD PRIMARY KEY (`id_celebrations`),
  ADD KEY `id_places` (`id_places`),
  ADD KEY `id_wedding_theme` (`id_wedding_theme`);

--
-- Индексы таблицы `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Индексы таблицы `Fitting_status`
--
ALTER TABLE `Fitting_status`
  ADD PRIMARY KEY (`id_Fitting_status`);

--
-- Индексы таблицы `Goods`
--
ALTER TABLE `Goods`
  ADD PRIMARY KEY (`id_goods`),
  ADD KEY `id_orders_for_wedding_dresses` (`id_orders_for_wedding_dresses`);

--
-- Индексы таблицы `Orders_for_wedding_dresses`
--
ALTER TABLE `Orders_for_wedding_dresses`
  ADD PRIMARY KEY (`id_Orders_for_wedding_dresses`),
  ADD KEY `id_celebrations` (`id_celebrations`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_goods` (`id_goods`),
  ADD KEY `id_order_status` (`id_order_status`),
  ADD KEY `id_status` (`id_status`);

--
-- Индексы таблицы `Order_status`
--
ALTER TABLE `Order_status`
  ADD PRIMARY KEY (`id_Order_status`);

--
-- Индексы таблицы `Places_for_celebrations`
--
ALTER TABLE `Places_for_celebrations`
  ADD PRIMARY KEY (`id_Places_for_celebrations`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Индексы таблицы `Wedding_salon_services`
--
ALTER TABLE `Wedding_salon_services`
  ADD PRIMARY KEY (`id_wedding_salon_services`),
  ADD KEY `id_goods` (`id_goods`);

--
-- Индексы таблицы `Wedding_theme`
--
ALTER TABLE `Wedding_theme`
  ADD PRIMARY KEY (`id_Wedding_theme`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `celebrations`
--
ALTER TABLE `celebrations`
  MODIFY `id_celebrations` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `Fitting_status`
--
ALTER TABLE `Fitting_status`
  MODIFY `id_Fitting_status` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `Goods`
--
ALTER TABLE `Goods`
  MODIFY `id_goods` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `Orders_for_wedding_dresses`
--
ALTER TABLE `Orders_for_wedding_dresses`
  MODIFY `id_Orders_for_wedding_dresses` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `Order_status`
--
ALTER TABLE `Order_status`
  MODIFY `id_Order_status` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `Places_for_celebrations`
--
ALTER TABLE `Places_for_celebrations`
  MODIFY `id_Places_for_celebrations` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `Wedding_salon_services`
--
ALTER TABLE `Wedding_salon_services`
  MODIFY `id_wedding_salon_services` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `Wedding_theme`
--
ALTER TABLE `Wedding_theme`
  MODIFY `id_Wedding_theme` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `celebrations`
--
ALTER TABLE `celebrations`
  ADD CONSTRAINT `celebrations_ibfk_1` FOREIGN KEY (`id_places`) REFERENCES `Places_for_celebrations` (`id_Places_for_celebrations`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `celebrations_ibfk_2` FOREIGN KEY (`id_wedding_theme`) REFERENCES `Wedding_theme` (`id_Wedding_theme`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `Goods`
--
ALTER TABLE `Goods`
  ADD CONSTRAINT `goods_ibfk_1` FOREIGN KEY (`id_orders_for_wedding_dresses`) REFERENCES `Orders_for_wedding_dresses` (`id_Orders_for_wedding_dresses`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `Orders_for_wedding_dresses`
--
ALTER TABLE `Orders_for_wedding_dresses`
  ADD CONSTRAINT `orders_for_wedding_dresses_ibfk_1` FOREIGN KEY (`id_celebrations`) REFERENCES `celebrations` (`id_celebrations`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_for_wedding_dresses_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_for_wedding_dresses_ibfk_3` FOREIGN KEY (`id_goods`) REFERENCES `Goods` (`id_goods`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_for_wedding_dresses_ibfk_4` FOREIGN KEY (`id_order_status`) REFERENCES `Order_status` (`id_Order_status`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `orders_for_wedding_dresses_ibfk_5` FOREIGN KEY (`id_status`) REFERENCES `Fitting_status` (`id_Fitting_status`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `Wedding_salon_services`
--
ALTER TABLE `Wedding_salon_services`
  ADD CONSTRAINT `wedding_salon_services_ibfk_1` FOREIGN KEY (`id_goods`) REFERENCES `Goods` (`id_goods`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
