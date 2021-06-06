-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3316
-- 產生時間： 2021-06-06 16:49:09
-- 伺服器版本： 10.4.17-MariaDB
-- PHP 版本： 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `租車申請`
--

-- --------------------------------------------------------

--
-- 資料表結構 `rentform`
--

CREATE TABLE `rentform` (
  `取車地點` varchar(10) NOT NULL,
  `還車地點` varchar(10) NOT NULL,
  `車輛選擇` varchar(30) NOT NULL,
  `取車日期` varchar(10) NOT NULL,
  `取車時間` varchar(11) NOT NULL,
  `還車日期` varchar(10) NOT NULL,
  `還車時間` varchar(11) NOT NULL,
  `姓名` varchar(12) NOT NULL,
  `電話` int(20) NOT NULL,
  `備註` varchar(50) NOT NULL,
  `總金額` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `rentform`
--

INSERT INTO `rentform` (`取車地點`, `還車地點`, `車輛選擇`, `取車日期`, `取車時間`, `還車日期`, `還車時間`, `姓名`, `電話`, `備註`, `總金額`) VALUES
('東吳大學', '劍潭捷運站', 'rav4', '2021-06-13', '10:48', '2021-06-20', '22:48', '黃紹丞', 968056539, '', 21000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
