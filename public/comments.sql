-- phpMyAdmin SQL Dump
-- version 4.4.15.10
-- https://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 10 2017 г., 16:27
-- Версия сервера: 5.6.33-79.0
-- Версия PHP: 5.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `u0094289_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL,
  `ref` varchar(191) DEFAULT NULL,
  `title` varchar(191) DEFAULT NULL,
  `description` text,
  `media` varchar(191) DEFAULT NULL,
  `thumb` varchar(191) DEFAULT NULL,
  `name` varchar(191) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `published` int(11) DEFAULT NULL,
  `metatitle` varchar(191) DEFAULT NULL,
  `metakey` varchar(191) DEFAULT NULL,
  `metadesc` varchar(191) DEFAULT NULL,
  `metacanonical` varchar(191) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `ref`, `title`, `description`, `media`, `thumb`, `name`, `email`, `phone`, `published`, `metatitle`, `metakey`, `metadesc`, `metacanonical`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '<p>В пансионат я со своей мамой (89лет)попала можно сказать случайно Т.е. Мама после инсульта с переломом шейки бедра была назначена на выписку из госпиталя ветеранов войн. Я по состоянию своего здоровья( мне64 года), не могла обеспечить надлежащий домашний уход. Обратилась в пансионат &quot;Вишневый сад&quot; ( сеть домов пристарелых н1), головной офис в Москве у нас филиал в гостинице Москва . После согласования с администратором я вызвала платную машину для перевозки лежачих больных, хотя до этого меня убеждали что у них есть свой транспорт( это был первый обман), и нас отправили в П. Мичуринское 85км от СПб . По прибытии туда выяснилось что мест нет и не будет, телефонные переговоры ни к чему не привели, мы были оставлены на улице и передними закрыли дверь и наблюдали через окно как мы пытаемся решить этот вопрос по телефону ( ни до руководителя ни для любого другого сотрудника кто бы мог решить вопро Вы не дозвониться, а только девочки операторы). В отчаянии я позвонила знакомому врачу и она дала мне телефон пансионата &quot; Русский стиль&quot; . После тел разговора с ген директором мы отправились к ним в д. Энколово 10 км от СПб .Нас там ждали ген.директор Вадим Александрович,Нач.мед Татьяна Анатольевна,врач Галия Гайнуловна и сиделка Елена Евгеньевна.Вы знаете,такого отношения,внимания,заботы и ухода я еще не встречала.Огромное спасибо за теплоту и заботу.От всей души желаю им здоровья,оно им очень нужно в их нелегкой работе.Побольше бы таких людей и мы были бы спокойны за своих близких.Еще раз большое спасибо. С уважением Тамара Петровна.</p>', NULL, NULL, 'Тамара Петровна', 'Stamara1951@mail.ru', '9119059118', NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-09 07:51:17', '2015-10-16 08:33:00'),
(2, NULL, NULL, NULL, 'img/reviews/sidelka_otzyv.jpg', NULL, 'Ольга Захаровна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-01 08:29:25', '2015-11-01 08:29:25'),
(3, NULL, NULL, NULL, 'https://youtu.be/X0NQf9Z2aF4', NULL, 'Николай Павлович', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2015-11-05 12:34:17', '2015-11-05 12:34:17'),
(4, NULL, NULL, NULL, 'Геннадий Тахтаров', NULL, 'img/reviews/gt.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-02-15 08:34:25', '2016-02-15 08:34:25'),
(5, NULL, NULL, NULL, 'img/reviews/gov.jpg', NULL, 'Совет Депутатов', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2016-02-16 05:26:31', '2016-02-16 05:26:31'),
(6, NULL, NULL, '<p>Я, Костылева Римма Дмитриевна, проживающая вообще впервые в жизни в пансионате &quot;Русский Стиль&quot; с 14.06 по 25.06 2016года хочу выразить благодарность всему коллективу, в лице руководителя Бражник Вадими Александровича и врача Татьяны Анатольевны, общительной. Её приятно видеть всегда! за внимательно отношение и заботу к нам, пожилым людям. В пансионате сделан шикарный ремонт. Чисто, уютно, красиво, душа радуется. На кроватях новое чистое бельё. Персонал очень трудолюбивый, внимательный, все трудятся на УРА! Умницы! Внимательная, исполнительная, добросовестная сестричка Марина изумляет своей скромностью, добротой и в тоже время требовательностью к отдыхающим. Трудно работать с нами пожилыми людьми, нужна болльшая выдержка. &nbsp;Бойкая, внимательная, обходительная сиделка Валентина вникает по справедливости во все дела. Сиделочка моя замечательная, откликается на все мои просьбы. Спасибо ей! &nbsp;Сиделочка Александра содержит все помещение пансионата в идеальной чистоте. Все сотрудники вежливые. В пансионате всё прекрасно! Вадиму Александровичу и Татьяне Анатольевне хочется пожелать крепкого здоровья, а пансионату процветания на благое дело!<br />\r\nPS: Женскому коллективу хочу пожелать строчками из песни: &quot;А ну-ка женщин, ну красавицы, пускай поёт о Вас страна. И звонкой песнею пускай прославятся среди героев ваши имена!&quot;<br />\r\nБудьте все счастливы, да хранит всех Господь! Прощаемся НЕ навсегда!<br />\r\nС уважением, Римма Костылева. 25.06.2016г</p>', NULL, NULL, 'Костылева Римма Дмитриевна', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-09 08:00:46', '2016-06-27 12:37:00'),
(7, NULL, NULL, '<p>Мы вынуждены были привезти нашу тетю в пансионат &quot;Русский Стиль&quot;. Очень беспокоились о том, как Нина Федоровна адаптируется к новой обстановке, т.к. никогда не оставалась без нашего внимания. Но беспокойства оказались напрасными! Более домашней обстановки и представить нельзя. Забота, внимание и тепло персонала просто восхищают. Спасибо всем, кто ухаживает за нашей тетей, спасибо руководству пансионата. Благополучия и процветания этому светлому уголку - пансионату!</p>', NULL, NULL, 'Юлия', 'helen19912312@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-06-09 08:03:14', '2016-07-10 11:59:00');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
