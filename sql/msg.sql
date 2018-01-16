-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2018-01-12 15:10:52
-- 服务器版本： 5.7.17-log
-- PHP Version: 5.6.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robot`
--

-- --------------------------------------------------------

--
-- 表的结构 `msg`
--

CREATE TABLE `msg` (
  `id` int(6) NOT NULL,
  `me` char(30) DEFAULT NULL,
  `robot` char(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `msg`
--

INSERT INTO `msg` (`id`, `me`, `robot`) VALUES
(1, '你好', '你也好'),
(2, '你叫什么', '我叫小云'),
(3, '唱首歌吧', '你要听什么歌啊？？？'),
(4, '明天天气', '正在查询，请等我...'),
(5, '你的主人是谁', '这家伙是重邮的一个家伙'),
(6, '哈哈', '呵呵'),
(7, '瑶瑶是谁', '美女猪头'),
(8, '很烦', '高兴'),
(9, '亲亲', '爱你'),
(10, '陈昆容', '笨蛋'),
(11, '喝水', '自己去拿'),
(12, '讲笑话', '自己去百度'),
(13, '嘿嘿', '傻笑干嘛！！！'),
(14, '付黄是谁', '阿黄'),
(15, '陈昆容是谁', '阿昆'),
(16, '那你明白什么', '我明白你爱的人'),
(17, '你的数据哪里来的', '数据库导入的'),
(20, '123', '321');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `msg`
--
ALTER TABLE `msg`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
