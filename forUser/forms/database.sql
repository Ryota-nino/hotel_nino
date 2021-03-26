-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021 年 3 月 26 日 09:49
-- サーバのバージョン： 8.0.23
-- PHP のバージョン: 7.3.24-(to be removed in future macOS)
SET
  SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET
  time_zone = "+00:00";
  /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
  /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
  /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
  /*!40101 SET NAMES utf8mb4 */;
--
  -- データベース: `hotelnino`
  --
  -- --------------------------------------------------------
  --
  -- テーブルの構造 `employees`
  --
  CREATE TABLE `employees` (
    `employee_number` int NOT NULL,
    `first_name` varchar(20) NOT NULL,
    `last_name` varchar(20) NOT NULL,
    `gender` varchar(1) NOT NULL,
    `job_title` varchar(20) NOT NULL,
    `hire_date` varchar(15) NOT NULL,
    `salary` int NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
-- --------------------------------------------------------
  --
  -- テーブルの構造 `reservations`
  --
  CREATE TABLE `reservations` (
    `reservation_id` int NOT NULL,
    `user_id` int NOT NULL,
    `room_id` int NOT NULL,
    `check_in` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
    `check_out` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
    `number_of_people` int NOT NULL,
    `total` varchar(10) NOT NULL,
    `status` varchar(1) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
--
  -- テーブルのデータのダンプ `reservations`
  --
INSERT INTO
  `reservations` (
    `reservation_id`,
    `user_id`,
    `room_id`,
    `check_in`,
    `check_out`,
    `number_of_people`,
    `total`,
    `status`
  )
VALUES
  (
    3,
    1,
    101,
    '2021-03-25',
    '2021-03-26',
    2,
    '200$',
    '1'
  ),
  (
    4,
    1,
    102,
    '2021-03-30',
    '2021-03-23',
    2,
    '0$',
    '1'
  ),
  (
    5,
    1,
    103,
    '2021-03-19',
    '2021-03-20',
    2,
    '200$',
    '1'
  ),
  (
    6,
    1,
    104,
    '2021-03-19',
    '2021-03-20',
    2,
    '200$',
    '1'
  ),
  (
    7,
    1,
    105,
    '2021-03-19',
    '2021-03-20',
    2,
    '200$',
    '1'
  ),
  (
    8,
    1,
    106,
    '2021-03-19',
    '2021-03-20',
    2,
    '200$',
    '1'
  ),
  (
    9,
    1,
    107,
    '2021-03-11',
    '2021-03-01',
    2,
    '0$',
    '1'
  ),
  (
    10,
    1,
    301,
    '2021-03-13',
    '2021-03-02',
    2,
    '0$',
    '1'
  ),
  (
    11,
    1,
    302,
    '2021-03-13',
    '2021-03-02',
    12,
    '0$',
    '1'
  ),
  (
    12,
    1,
    201,
    '2021-03-26',
    '2021-03-27',
    2,
    '200$',
    '1'
  ),
  (
    13,
    1,
    202,
    '2021-03-26',
    '2021-03-27',
    2,
    '200$',
    '1'
  ),
  (
    14,
    5,
    303,
    '2021-03-30',
    '2021-03-31',
    3,
    '600$',
    '1'
  );
-- --------------------------------------------------------
  --
  -- テーブルの構造 `reviews`
  --
  CREATE TABLE `reviews` (
    `review_id` int NOT NULL,
    `contents` varchar(255) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
-- --------------------------------------------------------
  --
  -- テーブルの構造 `rooms`
  --
  CREATE TABLE `rooms` (
    `room_id` int NOT NULL,
    `room_type` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
    `room_charge` varchar(7) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
    `capacity` int NOT NULL,
    `status` int NOT NULL DEFAULT '1'
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
--
  -- テーブルのデータのダンプ `rooms`
  --
INSERT INTO
  `rooms` (
    `room_id`,
    `room_type`,
    `room_charge`,
    `capacity`,
    `status`
  )
VALUES
  (101, 'Standard Jack Room', '100', 2, 0),
  (102, 'Standard Jack Room', '100', 2, 0),
  (103, 'Standard Jack Room', '100', 2, 0),
  (104, 'Standard Jack Room', '100', 2, 0),
  (105, 'Standard Jack Room', '100', 2, 0),
  (106, 'Standard Jack Room', '100', 2, 0),
  (107, 'Standard Jack Room', '100', 2, 0),
  (201, 'Standard Queen Room', '100', 2, 0),
  (202, 'Standard Queen Room', '100', 2, 0),
  (203, 'Standard Queen Room', '100', 2, 1),
  (204, 'Standard Queen Room', '100', 2, 1),
  (205, 'Standard Queen Room', '100', 2, 1),
  (206, 'Standard Queen Room', '100', 2, 1),
  (207, 'Standard Queen Room', '100', 2, 1),
  (301, 'Superior Ace Room', '200', 4, 0),
  (302, 'Superior Ace Room', '200', 4, 0),
  (303, 'Superior Ace Room', '200', 4, 0),
  (304, 'Superior Ace Room', '200', 4, 1),
  (108, 'Joker Park Suite', '500', 6, 1),
  (109, 'Joker Park Suite', '500', 6, 1),
  (110, 'King Room Villa', '1000', 10, 1);
-- --------------------------------------------------------
  --
  -- テーブルの構造 `timecards`
  --
  CREATE TABLE `timecards` (
    `dates` varchar(10) NOT NULL,
    `employee_number` varchar(20) NOT NULL,
    `time_in` varchar(10) NOT NULL,
    `time_out` varchar(10) NOT NULL,
    `working_time` varchar(10) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
-- --------------------------------------------------------
  --
  -- テーブルの構造 `users`
  --
  CREATE TABLE `users` (
    `user_id` int NOT NULL,
    `first_name` varchar(20) NOT NULL,
    `last_name` varchar(20) NOT NULL,
    `email` varchar(40) NOT NULL,
    `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
    `phone_number` varchar(15) NOT NULL,
    `card_number` varchar(20) NOT NULL
  ) ENGINE = InnoDB DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci;
--
  -- テーブルのデータのダンプ `users`
  --
INSERT INTO
  `users` (
    `user_id`,
    `first_name`,
    `last_name`,
    `email`,
    `password`,
    `phone_number`,
    `card_number`
  )
VALUES
  (
    1,
    'test',
    'one',
    'test1-u@example.com',
    '$2y$10$KxYOhYmMHDw/3gTrgvtfiOdRgsaz1nuDwQmMREXRQDIEjDMGonhuW',
    '12345678910',
    '1234567812345678'
  ),
  (
    3,
    'test',
    'two',
    'test2-u@example.com',
    '$2y$10$vSkhxI4O6.Ecxidf5ITPLOcWGfvykyaYYoph60jWd2sf5T.kxz9Rq',
    '12345678910',
    '1234567812345678'
  ),
  (
    4,
    'koko',
    'dffs',
    'wre@example.com',
    '$2y$10$Rp7ZF34ziENBYd1f/OhRLObFg6yq6wJQ2O1dervr13AwEKYMaFh42',
    '1234567880',
    '1234567812345678'
  ),
  (
    5,
    'RYOTA',
    'NINOMIYA',
    'ryota@example.com',
    '$2y$10$89Xpug.j6k37ClF/crV5BOLN5sRRlLe/CERMSYtjwggRsoT147WnO',
    '12345678',
    '123456789'
  );
--
  -- ダンプしたテーブルのインデックス
  --
  --
  -- テーブルのインデックス `employees`
  --
ALTER TABLE
  `employees`
ADD
  PRIMARY KEY (`employee_number`);
--
  -- テーブルのインデックス `reservations`
  --
ALTER TABLE
  `reservations`
ADD
  PRIMARY KEY (`reservation_id`);
--
  -- テーブルのインデックス `reviews`
  --
ALTER TABLE
  `reviews`
ADD
  PRIMARY KEY (`review_id`);
--
  -- テーブルのインデックス `users`
  --
ALTER TABLE
  `users`
ADD
  PRIMARY KEY (`user_id`);
--
  -- ダンプしたテーブルの AUTO_INCREMENT
  --
  --
  -- テーブルの AUTO_INCREMENT `employees`
  --
ALTER TABLE
  `employees`
MODIFY
  `employee_number` int NOT NULL AUTO_INCREMENT;
--
  -- テーブルの AUTO_INCREMENT `reservations`
  --
ALTER TABLE
  `reservations`
MODIFY
  `reservation_id` int NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 15;
--
  -- テーブルの AUTO_INCREMENT `reviews`
  --
ALTER TABLE
  `reviews`
MODIFY
  `review_id` int NOT NULL AUTO_INCREMENT;
--
  -- テーブルの AUTO_INCREMENT `users`
  --
ALTER TABLE
  `users`
MODIFY
  `user_id` int NOT NULL AUTO_INCREMENT,
  AUTO_INCREMENT = 6;
COMMIT;
  /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
  /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
  /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;