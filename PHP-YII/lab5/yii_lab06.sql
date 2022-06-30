-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 20 2021 г., 22:04
-- Версия сервера: 10.3.13-MariaDB
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
-- База данных: `yii_lab06`
--

-- --------------------------------------------------------

--
-- Структура таблицы `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('Admin', '1', 1619457871),
('Employee', '3', 1619457871),
('Employee', '4', 1619457871),
('Employee', '6', 1619467242),
('Manager', '2', 1619457871);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('Admin', 1, NULL, NULL, NULL, 1619457871, 1619457871),
('Employee', 1, NULL, NULL, NULL, 1619457869, 1619457869),
('employeeOwnProjectPermission', 2, NULL, 'OwnProjectRule', NULL, 1621366315, 1621366315),
('employeeOwnTaskPermission', 2, NULL, 'OwnTaskRule', NULL, 1621366345, 1621366345),
('employeeProjectPermission', 2, NULL, NULL, NULL, 1621366313, 1621366313),
('employeeProjectsTaskPermission', 2, NULL, 'OwnProjectTaskRule', NULL, 1621366345, 1621366345),
('employeeProjectWithOwnTaskPermission', 2, NULL, NULL, NULL, 1621366315, 1621366315),
('employeeTaskPermission', 2, NULL, NULL, NULL, 1621366343, 1621366343),
('employeeUpdate', 2, NULL, NULL, NULL, 1619461368, 1619461368),
('employeeUpdateOwnDepartment', 2, NULL, 'OwnDepartmentRule', NULL, 1619461368, 1619461368),
('employeeUpdateOwnProfile', 2, NULL, 'OwnProfileRule', NULL, 1619461368, 1619461368),
('Manager', 1, NULL, NULL, NULL, 1619457871, 1619457871);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Admin', 'employeeProjectPermission'),
('Admin', 'employeeTaskPermission'),
('Admin', 'employeeUpdate'),
('Admin', 'Manager'),
('Employee', 'employeeOwnTaskPermission'),
('Employee', 'employeeProjectWithOwnTaskPermission'),
('Employee', 'employeeUpdateOwnProfile'),
('employeeOwnProjectPermission', 'employeeProjectPermission'),
('employeeOwnTaskPermission', 'employeeTaskPermission'),
('employeeProjectsTaskPermission', 'employeeTaskPermission'),
('employeeProjectWithOwnTaskPermission', 'employeeProjectPermission'),
('employeeUpdateOwnDepartment', 'employeeUpdate'),
('employeeUpdateOwnProfile', 'employeeUpdate'),
('Manager', 'Employee'),
('Manager', 'employeeOwnProjectPermission'),
('Manager', 'employeeProjectsTaskPermission'),
('Manager', 'employeeUpdateOwnDepartment');

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_rule`
--

INSERT INTO `auth_rule` (`name`, `data`, `created_at`, `updated_at`) VALUES
('OwnDepartmentRule', 0x4f3a32393a22636f6d6d6f6e5c726261635c4f776e4465706172746d656e7452756c65223a333a7b733a343a226e616d65223b733a31373a224f776e4465706172746d656e7452756c65223b733a393a22637265617465644174223b693a313631393531373536363b733a393a22757064617465644174223b693a313631393531373536363b7d, 1619517566, 1619517566),
('OwnProfileRule', 0x4f3a32363a22636f6d6d6f6e5c726261635c4f776e50726f66696c6552756c65223a333a7b733a343a226e616d65223b733a31343a224f776e50726f66696c6552756c65223b733a393a22637265617465644174223b693a313631393436343632363b733a393a22757064617465644174223b693a313631393436343632363b7d, 1619464626, 1619464626),
('OwnProjectRule', 0x4f3a32363a22636f6d6d6f6e5c726261635c4f776e50726f6a65637452756c65223a333a7b733a343a226e616d65223b733a31343a224f776e50726f6a65637452756c65223b733a393a22637265617465644174223b693a313632313336363331353b733a393a22757064617465644174223b693a313632313336363331353b7d, 1621366315, 1621366315),
('OwnProjectTaskRule', 0x4f3a33303a22636f6d6d6f6e5c726261635c4f776e50726f6a6563745461736b52756c65223a333a7b733a343a226e616d65223b733a31383a224f776e50726f6a6563745461736b52756c65223b733a393a22637265617465644174223b693a313632313336363334353b733a393a22757064617465644174223b693a313632313336363334353b7d, 1621366345, 1621366345),
('OwnTaskRule', 0x4f3a32333a22636f6d6d6f6e5c726261635c4f776e5461736b52756c65223a333a7b733a343a226e616d65223b733a31313a224f776e5461736b52756c65223b733a393a22637265617465644174223b693a313632313336363334353b733a393a22757064617465644174223b693a313632313336363334353b7d, 1621366345, 1621366345);

-- --------------------------------------------------------

--
-- Структура таблицы `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `parent_id`, `type_id`) VALUES
(1, 'Рада директорів', NULL, 1),
(2, 'Головна виконавча рада', 1, 1),
(3, 'Операційний центр', 2, 2),
(4, 'Фінансовий центр', 2, 2),
(5, 'Центр розробки', 2, 2),
(6, 'Відділ кадрів', 3, 3),
(7, 'Відділ продажів', 3, 3),
(8, 'Маркетинговий центр', 2, 2),
(9, 'Відділ аудиту', 4, 3),
(10, 'Відділ податків', 4, 3),
(11, 'Казначейський відділ', 4, 3),
(12, 'Рекламний відділ', 8, 3),
(13, 'Відділ аналізу потреб споживачів', 8, 3),
(14, 'Відділ зв\'язків з громадськістю', 8, 3),
(15, 'Відділ розробки', 5, 3),
(16, 'Відділ досліджень', 5, 3),
(17, 'Відділ внутрішньої інфраструктури', 5, 3),
(18, 'Відділ статистики', 3, 3),
(19, 'Відділ ризиків', 4, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `department_type`
--

CREATE TABLE `department_type` (
  `type_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `department_type`
--

INSERT INTO `department_type` (`type_id`, `name`) VALUES
(1, 'Board'),
(2, 'Center'),
(3, 'Department');

-- --------------------------------------------------------

--
-- Структура таблицы `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `employee`
--

INSERT INTO `employee` (`employee_id`, `first_name`, `last_name`, `email`, `user_id`, `department_id`, `image`) VALUES
(1, 'Jane', 'Smith', 'jane@gmail.com', 1, 1, 'hsyC5Qp4P3YEXGeMdRqg-O8oyn7qu9iv.png'),
(2, 'John', 'Jones', 'john@gmail.com', 2, 3, 'QLWNpTA69nrsBj4kCAa5TgCT0k0OpEEc.png'),
(3, 'Alex', 'Wilson', 'alex@gmail.com', 3, 3, 'LLhu_vLZ3QqJ2c_9Wg80ikZD9ZW98B-P.png'),
(4, 'Peter', 'Williams', 'peter@gmail.com', 4, 6, 'MUZ_Bl0RsYjint5v01VZl8OGj0HqJ0ty.png');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1617457793),
('m130524_201442_init', 1617457798),
('m140506_102106_rbac_init', 1619455228),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1619455228),
('m180523_151638_rbac_updates_indexes_without_prefix', 1619455228),
('m190124_110200_add_verification_token_column_to_user_table', 1617457798),
('m200409_110543_rbac_update_mssql_trigger', 1619455228);

-- --------------------------------------------------------

--
-- Структура таблицы `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `project`
--

INSERT INTO `project` (`project_id`, `title`, `user_id`) VALUES
(1, 'Весілля', 2),
(2, 'Фестиваль', 1),
(3, 'Свято', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `status`
--

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `status`
--

INSERT INTO `status` (`status_id`, `name`) VALUES
(1, 'ToDo'),
(2, 'InProgress'),
(3, 'ToVerify'),
(4, 'Completed');

-- --------------------------------------------------------

--
-- Структура таблицы `task`
--

CREATE TABLE `task` (
  `task_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start` date NOT NULL,
  `finish` date NOT NULL,
  `deadline` date NOT NULL,
  `status_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `task`
--

INSERT INTO `task` (`task_id`, `title`, `start`, `finish`, `deadline`, `status_id`, `project_id`) VALUES
(1, 'Серверування', '2021-05-02', '2021-05-18', '2021-05-10', 2, 1),
(2, 'Вінчання', '2021-05-18', '2021-05-20', '2021-06-22', 1, 1),
(5, 'Торт', '2021-05-18', '2021-05-19', '2021-07-01', 2, 1),
(7, 'Декор', '2021-05-18', '2021-05-19', '2021-06-18', 2, 1),
(8, 'Декор', '2021-05-19', '2021-05-20', '2021-06-22', 2, 3),
(9, 'Серверування', '2021-05-19', '2021-05-27', '2021-06-30', 2, 3),
(10, 'Подарунки', '2021-05-19', '2021-05-20', '2021-06-21', 1, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `task_employee`
--

CREATE TABLE `task_employee` (
  `task_employee_id` int(11) NOT NULL,
  `task_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `task_employee`
--

INSERT INTO `task_employee` (`task_employee_id`, `task_id`, `user_id`) VALUES
(1, 1, 2),
(2, 1, 3),
(3, 5, 3),
(4, 8, 3),
(5, 9, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'jane', 'UmkS_Zffnhxid2f2eXifVevHf6PdWG45', '$2y$13$kBbaNofEPoyG6AaIGzKz5OVJtMkwvEbC/2N6hQ8Kj/UBPzcc9Jnp.', NULL, 'jane@gmail.com', 10, 1619456611, 1619456611, 'iGz1wD9u8wyqzsYrrVCnz269Y9G1KR3P_1619456611'),
(2, 'john', 'imzxL_cqWUQMFAl08vU4Tso3XWb2kP7y', '$2y$13$lw8VCK3NjbtlBl3z1TABOuRar2rQUlqQ4VemNGLefodxBgSxxV12C', NULL, 'john@gmail.com', 10, 1619456682, 1619456682, 'WAgIGbPTN9Yaf7A8P1opaI24Ms_kbe_z_1619456682'),
(3, 'alex', 'gJ5RdlcIotCy3dUkNVBck8895ZsZPkDZ', '$2y$13$N62kMSm3HF/ziw.Zhskun.GP4av3XYL0PkLKJipUJ5Ni.Th3YWS52', NULL, 'alex@gmail.com', 10, 1619456718, 1619456718, '6NzZHBHYz_IMiUBDk6XR3EDAvF6tMNSC_1619456718'),
(4, 'peter', 'RpJIJMBG5WNPa5Tb31ovG8tD_GAUi5Et', '$2y$13$vhvb.bMKMJK9mICmff.SKesXvsD5ORy4YUnuieT9ZKuCzUjtUB8Wu', NULL, 'peter@gmail.com', 10, 1619456817, 1619456817, 'CXmjcz0Ywof005aQOv3XYAV_B5Rn6oH1_1619456817');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `idx-auth_assignment-user_id` (`user_id`);

--
-- Индексы таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Индексы таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Индексы таблицы `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Индексы таблицы `department_type`
--
ALTER TABLE `department_type`
  ADD PRIMARY KEY (`type_id`);

--
-- Индексы таблицы `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `email` (`email`) USING BTREE,
  ADD UNIQUE KEY `user_id` (`user_id`) USING BTREE,
  ADD KEY `department_id` (`department_id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Индексы таблицы `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Индексы таблицы `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`),
  ADD KEY `status_id` (`status_id`,`project_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Индексы таблицы `task_employee`
--
ALTER TABLE `task_employee`
  ADD PRIMARY KEY (`task_employee_id`),
  ADD KEY `task_id` (`task_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT для таблицы `department_type`
--
ALTER TABLE `department_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `status`
--
ALTER TABLE `status`
  MODIFY `status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `task_employee`
--
ALTER TABLE `task_employee`
  MODIFY `task_employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `department_type` (`type_id`);

--
-- Ограничения внешнего ключа таблицы `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `employee_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);

--
-- Ограничения внешнего ключа таблицы `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Ограничения внешнего ключа таблицы `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `task_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `project` (`project_id`);

--
-- Ограничения внешнего ключа таблицы `task_employee`
--
ALTER TABLE `task_employee`
  ADD CONSTRAINT `task_employee_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `task_employee_ibfk_2` FOREIGN KEY (`task_id`) REFERENCES `task` (`task_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
