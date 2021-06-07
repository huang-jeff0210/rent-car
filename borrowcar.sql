-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3316
-- 產生時間： 2021-06-07 06:30:10
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
-- 資料庫： `愛車租借`
--

-- --------------------------------------------------------

--
-- 資料表結構 `borrowcar`
--

CREATE TABLE `borrowcar` (
  `提供車輛種類` varchar(20) NOT NULL,
  `車輛提供地點` varchar(10) NOT NULL,
  `提供車輛起始日期` varchar(12) NOT NULL,
  `起始時間` varchar(12) NOT NULL,
  `提供車輛結束日期` varchar(12) NOT NULL,
  `結束時間` varchar(12) NOT NULL,
  `姓名` varchar(10) NOT NULL,
  `電話` varchar(20) NOT NULL,
  `備註` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
