-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 07:56 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sound`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'administrator6915@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `img` varchar(100) NOT NULL,
  `audio` varchar(100) NOT NULL,
  `video` varchar(100) NOT NULL,
  `singer` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `album` varchar(50) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `name`, `img`, `audio`, `video`, `singer`, `year`, `album`, `genre`, `type`) VALUES
(2, 'Left Right', 'leftright.jpg', 'Left-And-Right(PaglaSongs).mp3', 'Charlie Puth Left And Right feat Jung Ko (You2Audio.Com).mp4', 'charlie puth & jungkook', '2018', '-', 'Folk Music', 'english'),
(3, 'Sajan Das Na', 'sajan.jpg', 'Sajan Das Na - Atif Aslam .mp3', 'Coke Studio Season 14 Sajan Das Na Atif  (You2Audio.Com).mp4', 'Atif Aslam and Momina Mustehsan', '2019', 'coke studio', 'pop Music', 'regional'),
(7, 'Bikhra', 'bikhra.jpg', 'Bikhra Song Abdul Hannan.mp3', 'Rovalio Abdul Hannan Bikhra Official Vid (You2Audio.Com).mp4', 'Abdul Hannan and Rovalio', '2017', 'Abdul hannan', 'Hip-Hop Music', 'regional'),
(8, 'Pasoori', 'pasoori.jpg', 'Pasoori - Ali Sethi _ Shae Gill_.mp3', 'Coke Studio Season 14 Pasoori Ali Sethi  (You2Audio.Com).mp4', 'Ali Sethi , Shae Gill', '2022', 'coke studio', 'Sad Pop Music', 'Regional'),
(9, 'Iraaaday', 'iraday.jpg', '  Iraaday - Abdul Hannan and Rovalio _.mp3', 'Abdul hannan Iraaday lyrics Rovalio (You2Audio.Com).mp4', 'Abdul hannan & Rovalio', '2020', 'Abdul Hannan', 'Hip-Hop Music', 'Regional'),
(10, 'let me down slowly', 'alec.jpg', 'Let Me Down Slowly New English Song Download 2021(SongsZilla.Net).mp3', 'Alec Benjamin Let Me Down Slowly Officia (You2Audio.Com).mp4', 'Alec Benjamin', '2016', '-', 'jazz Music', 'english'),
(11, 'Ghalat Fehmi', 'Galat.jpg.jpg', 'Ghalat-Fehmi(PaglaSongs).mp3', 'Ghalat Fehmi Song _ Superstar _ Mahira Khan _ Bilal Ashraf _ Asim & Zenab _ Azaan & Saad.mp4', 'Asim Azhar', '2016', '-', 'Classical Music', 'Regional'),
(12, 'Double Take', 'double.jpg', 'dhruv - double take (Lyrics).mp3', 'dhruv - double take (Lyrics).mp4', 'Dhruv', '2019', '-', 'Classical Music', 'English'),
(13, 'As It Was', 'harry.jpg', 'Harry_Styles_As_It_Was.mp3', 'Harry Styles - As It Was (Lyrics).mp4', 'Harry Styles', '2017', '-', 'Folk Music', 'English');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `img` varchar(250) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `img`, `name`, `email`, `address`, `password`, `status`) VALUES
(1001, '1.png', 'Asal Fatima', ' asalfatima2005@gmail.com', 'Karachi', '456', 'InActive'),
(1002, '1.png', 'Fizza', ' fizzazehra@gmail.com', 'Karachi', '1', 'InActive');

-- --------------------------------------------------------

--
-- Table structure for table `singer`
--

CREATE TABLE `singer` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `singer`
--

INSERT INTO `singer` (`id`, `name`, `img`, `email`) VALUES
(10003, 'Abdul Hannan ', 'abdul.jpg', 'abdulhanan254@gmail.com'),
(10005, 'Atif Aslam', 'atif.jpg', 'atifaslam@gmail.com'),
(10006, 'Rovalio', 'rovalio.jpg', 'ravolio@gmail.com'),
(10007, 'Harry Styles', 'harry.jpg', 'harry@gmail.com'),
(10008, 'Glass Animal', 'glassanimal.jpg', 'glassanimal@gmail.com'),
(10009, 'Jungkook', 'jungkook.jpg', 'jk@gmail.com'),
(10010, 'Charlie puth', 'charlie.jpg', 'charliep@gmail.com'),
(10011, 'Alec Benjamin', 'alec.jpg', 'alec@gmail.com'),
(10013, 'Momina Mustehsan', 'momina.jpg', 'momina@gmail.com'),
(10015, 'Selena Gomez', 'selena.jpg', 'selena@gmail.com'),
(10016, 'Ali Sethi', 'ali.jpg', 'ali@gmail.com'),
(10017, 'Shae Gill', 'Shae.jpg', 'shaegill@gmail.com'),
(10018, 'Asim Azhar', 'asim.jpg', 'asminazhar@gmail.com'),
(10020, 'Dhruv', 'dhruv.jpg', 'dhruv@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `singer`
--
ALTER TABLE `singer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1005;

--
-- AUTO_INCREMENT for table `singer`
--
ALTER TABLE `singer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10021;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
