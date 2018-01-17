-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2016-10-18 14:58:04
-- 服务器版本： 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- 表的结构 `connects`
--

CREATE TABLE `connects` (
  `ID` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `connect` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `connects`
--

INSERT INTO `connects` (`ID`, `orderid`, `connect`) VALUES
(1, 37, '1763083159'),
(2, 37, '1763083159'),
(4, 38, '1763083159'),
(5, 38, '123456'),
(6, 38, '1234567'),
(7, 28, '123456'),
(8, 37, '123456'),
(9, 29, '54321'),
(10, 37, '54321');

-- --------------------------------------------------------

--
-- 表的结构 `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  `detailed` text NOT NULL,
  `tel` varchar(20) NOT NULL,
  `subject` varchar(80) NOT NULL,
  `timepay` text NOT NULL,
  `want` text NOT NULL,
  `time` datetime NOT NULL,
  `connect` varchar(200) NOT NULL,
  `succeed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `orders`
--

INSERT INTO `orders` (`ID`, `name`, `grade`, `gender`, `address`, `detailed`, `tel`, `subject`, `timepay`, `want`, `time`, `connect`, `succeed`) VALUES
(28, 'Mary', '六年级', '女生', '秦淮区', '乌衣巷口夕阳斜乌衣巷口夕阳斜乌衣巷口夕阳斜乌衣巷口夕阳斜乌衣巷口夕阳斜，乌衣巷口夕阳斜', '18551412373', '小学数学,高中数学,其它', '每小时40元每小时40元每小时40元每小时40元每小时40元每小时40元每小时40元', '男女不限男女不限男女不限男女不限男女不限男女不限', '0000-00-00 00:00:00', '', 0),
(29, '张春花', '一年级', '女生', '玄武区', '孝陵卫200号', '18551412373', '小学语文,高中语文,高中数学', '每小时40元', '南理工学生', '0000-00-00 00:00:00', '', 0),
(30, '李小萌', '一年级', '男生', '白下区', '紫金东路东', '18551412373', '小学语文', '时薪45元', '有家教经验', '0000-00-00 00:00:00', '', 0),
(31, 'hello', '一年级', '男生', '玄武区', '', '187', '', '', '', '0000-00-00 00:00:00', '', 0),
(32, 'hello', '一年级', '男生', '玄武区', '', '187', '', '', '', '2016-07-18 20:01:45', '', 0),
(33, 'hello', '一年级', '男生', '玄武区', '', '187', '', '', '', '2016-07-18 20:14:58', '', 0),
(34, 'hello', '一年级', '男生', '玄武区', '', '187', '', '', '', '2016-07-18 20:15:24', '', 0),
(35, 'hello', '一年级', '男生', '玄武区', '夫子庙', '18551412373', '高中化学', 'hello', '无', '2016-07-18 20:58:38', '', 0),
(36, 'hello', '一年级', '男生', '玄武区', '夫子庙', '18551412373', '高中化学', 'hello', '无', '2016-07-18 20:58:43', '', 0),
(37, 'hello', '一年级', '男生', '玄武区', '夫子庙', '18551412373', '高中化学', 'hello', '无', '2016-07-18 20:58:46', '1763083159', 0),
(38, '张小菱', '一年级', '女生', '玄武区', '孝陵卫200号', '18551412373', '小学语文,小学英语', '每小时40元', '有经验', '2016-07-18 23:29:35', '', 0),
(39, '张小菱', '一年级', '女生', '玄武区', '孝陵卫200号', '18551412373', '小学语文,小学英语', '每小时40元', '有经验', '2016-07-18 23:30:30', '', 1),
(40, '张大话', '一年级', '男生', '玄武区', '孝陵卫', '18565', '高中物理', '时薪20', '无', '2016-07-20 11:33:51', '', 0),
(41, '出门了', '一年级', '男生', '玄武区', '', '145', '', '', '', '2016-07-20 13:06:14', '', 0),
(42, '出门了', '一年级', '男生', '玄武区', '', '145', '', '', '', '2016-07-20 13:06:21', '', 0);

-- --------------------------------------------------------

--
-- 表的结构 `registrants`
--

CREATE TABLE `registrants` (
  `ID` int(11) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `school` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `major` varchar(20) NOT NULL,
  `subject` varchar(80) NOT NULL,
  `aboutme` text NOT NULL,
  `push` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `registrants`
--

INSERT INTO `registrants` (`ID`, `user`, `pass`, `name`, `gender`, `school`, `grade`, `major`, `subject`, `aboutme`, `push`) VALUES
(35, '1763083159', '930310', '崔', '男生', '南京大学', '大四', '机械工程', '小学语文,小学数学,高中数学,初中物理', '我非常的靠谱！', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `connects`
--
ALTER TABLE `connects`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `registrants`
--
ALTER TABLE `registrants`
  ADD PRIMARY KEY (`ID`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `connects`
--
ALTER TABLE `connects`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- 使用表AUTO_INCREMENT `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
--
-- 使用表AUTO_INCREMENT `registrants`
--
ALTER TABLE `registrants`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
