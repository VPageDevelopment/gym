-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2017 at 12:50 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `description`, `image`, `video`, `createdAt`) VALUES
(11, 'Dipa Karmakar', 'Dipa Karmakar, India''s first female gymnast at the Olympics, may have just lost out on a medal but she won the hearts of a nation with her vaulting performance.\r\nShe finished fourth in the women''s vault gymnastics event on Sunday with a score of 15.966, just 0.15 points behind the bronze winner.\r\nIndia has yet to win an Olympics medal at the Rio 2016 games', '1489586156_1000.jpg', 'https://www.youtube.com/embed/O6Xo21L0ybE', '2017-03-16 11:43:48'),
(12, 'Dipa Karmakar 1', 'Dipa Karmakar, India''s first female gymnast at the Olympics, may have just lost out on a medal but she won the hearts of a nation with her vaulting performance.\r\nShe finished fourth in the women''s vault gymnastics event on Sunday with a score of 15.966, just 0.15 points behind the bronze winner.\r\nIndia has yet to win an Olympics medal at the Rio 2016 games', '1489586175_1000.jpg', 'https://www.youtube.com/embed/O6Xo21L0ybE', '2017-03-16 10:51:11'),
(13, 'Dipa Karmakar 2', 'Dipa Karmakar, India''s first female gymnast at the Olympics, may have just lost out on a medal but she won the hearts of a nation with her vaulting performance.\r\nShe finished fourth in the women''s vault gymnastics event on Sunday with a score of 15.966, just 0.15 points behind the bronze winner.\r\nIndia has yet to win an Olympics medal at the Rio 2016 games', '1489586190_1000.jpg', 'https://www.youtube.com/embed/O6Xo21L0ybE', '2017-03-16 10:51:25'),
(14, 'Dipa Karmakar 4', 'Dipa Karmakar, India''s first female gymnast at the Olympics, may have just lost out on a medal but she won the hearts of a nation with her vaulting performance.\r\nShe finished fourth in the women''s vault gymnastics event on Sunday with a score of 15.966, just 0.15 points behind the bronze winner.\r\nIndia has yet to win an Olympics medal at the Rio 2016 games', '1489586206_1000.jpg', 'https://www.youtube.com/embed/O6Xo21L0ybE', '2017-03-16 10:51:40'),
(15, 'Event 5 title', 'Event 5 description', '1489647048_1000.jpg', 'https://www.youtube.com/embed/O6Xo21L0ybE', '2017-03-16 10:51:56'),
(16, 'event 6', 'event 6 des', '1489650688_1000.jpg', 'https://www.youtube.com/embed/O6Xo21L0ybE', '2017-03-16 10:52:12'),
(17, 'Event 7', 'Event 7 des', '1489664143_1000.jpg', 'https://www.youtube.com/embed/O6Xo21L0ybE', '2017-03-16 11:35:43'),
(18, 'Event 8 ', 'Event 8 description', '1489650773_1000.jpg', 'https://www.youtube.com/embed/O6Xo21L0ybE', '2017-03-16 10:52:40');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`) VALUES
(1, 'cga@admin.com', 'cgapass@123', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
