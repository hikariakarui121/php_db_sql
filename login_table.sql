-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 25, 2021 at 01:52 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login_kadai`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_table`
--

CREATE TABLE `login_table` (
  `id` int(12) NOT NULL,
  `name` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `naiyou` text COLLATE utf8_unicode_ci NOT NULL,
  `indate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `login_table`
--

INSERT INTO `login_table` (`id`, `name`, `title`, `naiyou`, `indate`) VALUES
(2, 'aaa', 'aaa', 'aaa', '2021-03-25'),
(3, 'みつき', 'たのしかった。', 'サーフィン初心者コースを実践をしましたが、\r\n立つことができました。\r\nまた、おすすめの陸トレもおそわり大満足です', '2021-03-25'),
(4, 'はなのまい', '湘南で体験', '友達と三人で参加。\r\n初サーフィンで立つことできました。これからどんどん練習していきたいです。', '2021-03-25'),
(5, 'しろうとサーファー', 'そろそろサーフィン時期', '今日はプロサーファーでのレッスンがはじめて！\r\nなんとリップができるようになりました。　もっと早くうければよかったです', '2021-03-25'),
(6, '40代のおっさん', 'もっと早くくればよかった', '40代からサーフィンで不安でしたが、今回初めてレッスンを受けてみました。\r\n\r\nかなり不安も多かったが、優しく丁寧なレッスンでとても楽しかったです。', '2021-03-25'),
(7, '30代女子', '初サーフィンで・・・', '初めてのサーフィンでとても楽しかった。2時間のレッスンで立てたのは驚き！！', '2021-03-25'),
(8, '地方のサーファー', 'サーファーコミュニティーに仲間入り', '今日はレッスンできましたが、他の人とも知り合えたり、同じレベルの人が多くて、とても楽しかったです。\r\nまた参加したいです。', '2021-03-25'),
(9, 'あのひさん', '一日サーフィン漬け', 'とても楽しくて、よかったです。', '2021-03-25'),
(10, 'こころのともだよ', 'アマチュアです', '波は今日は肩ぐらいのビックウェーブ！\r\nプロがいると安心です。', '2021-03-25'),
(11, 'ビックウェーブ乗りたい', '初めての中級コース', 'ああああああああああああああああああああああああああああああああああああああああああああああああああああ', '2021-03-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_table`
--
ALTER TABLE `login_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_table`
--
ALTER TABLE `login_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
