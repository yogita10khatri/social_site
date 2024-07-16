-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Jun 14, 2024 at 04:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_media`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentername` varchar(25) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment_text` varchar(200) NOT NULL,
  `time_stamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`commentername`, `comment_id`, `post_id`, `comment_text`, `time_stamp`) VALUES
('yogita20', 1, 3, 'us\r\n', '2024-05-16 09:54:43'),
('eddy', 2, 3, 'nicee\r\n', '2024-05-16 09:55:49');

-- --------------------------------------------------------

--
-- Table structure for table `followings`
--

CREATE TABLE `followings` (
  `username` varchar(25) NOT NULL,
  `following` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `followings`
--

INSERT INTO `followings` (`username`, `following`) VALUES
('eddy', 'yogita20'),
('yogita20', 'eddy'),
('yogita20', 'krishna');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `post_id` int(11) NOT NULL,
  `likername` varchar(25) NOT NULL,
  `time_stamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`post_id`, `likername`, `time_stamp`) VALUES
(3, 'eddy', '2024-05-16 09:55:40');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `photo` blob NOT NULL,
  `description` varchar(100) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT 0,
  `comments` int(11) NOT NULL DEFAULT 0,
  `time_stamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `username`, `photo`, `description`, `likes`, `comments`, `time_stamp`) VALUES
(1, 'yogita20', 0x70686f746f732f736869766a692e6a7067, 'Shiv Ji', 0, 0, '2024-05-15 23:49:58'),
(2, 'yogita20', 0x70686f746f732f496e53686f745f32303233303830335f3136333831313836302e6a7067, 'US ', 0, 0, '2024-05-15 23:51:14'),
(3, 'yogita20', 0x70686f746f732f57494e5f32303234303330385f31315f32345f34385f50726f2e6a7067, 'FRIENDS', 1, 2, '2024-05-15 23:59:15'),
(4, 'eddy', 0x70686f746f732f736869765f706172766174692e6a7067, 'kdfjdl', 0, 0, '2024-05-16 09:48:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `profile_name` varchar(25) NOT NULL,
  `profile_picture` blob NOT NULL,
  `followings` int(11) NOT NULL DEFAULT 0,
  `followers` int(11) NOT NULL DEFAULT 0,
  `posts` int(11) NOT NULL DEFAULT 0,
  `email` varchar(50) NOT NULL,
  `bio` varchar(1000) NOT NULL,
  `time_stamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `profile_name`, `profile_picture`, `followings`, `followers`, `posts`, `email`, `bio`, `time_stamp`) VALUES
('eddy', '1234', 'eddy', 0x70686f746f732f736869765f706172766174692e6a7067, 1, 1, 1, 'khatripradeep74@gmail.com', 'Nahi bataunga', '2024-05-16 09:45:42'),
('keshav', '1234', 'kn', 0x70686f746f732f736869766a692e6a7067, 0, 0, 0, 'pradeepkhatri140@gmail.com', 'hii', '2024-05-16 09:56:44'),
('krishna', '1234', 'kk', 0x70686f746f732f32303232303632355f3138323132372e6a7067, 0, 1, 0, 'kkhatri.1991@gmail.com', 'zdfds', '2024-05-26 00:29:22'),
('root', 'sk30', 'SANJU', 0x70686f746f732f494d4732303232303132343230323630382e6a7067, 0, 0, 0, 'khatripradeep74@gmail.com', 'glowing and growing', '2024-05-26 00:25:59'),
('sangeeta', 'khatri12', 'sk12', 0x70686f746f732f32303233303232325f3137323234315f30312e6a7067, 0, 0, 0, 'khatripradeep57@gmail.com', 'shinning', '2024-05-26 00:19:28'),
('yogita20', '1234', 'yk', 0x70686f746f732f736869765f706172766174692e6a7067, 2, 1, 3, 'yogita20khatri@gmail.com', 'dfvgsefg', '2024-05-15 23:34:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `foreign_key` (`post_id`);

--
-- Indexes for table `followings`
--
ALTER TABLE `followings`
  ADD PRIMARY KEY (`following`),
  ADD KEY `fk_followings_user` (`username`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `foreign key` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `foreign_key` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `followings`
--
ALTER TABLE `followings`
  ADD CONSTRAINT `fk_followings_user` FOREIGN KEY (`username`) REFERENCES `users` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`post_id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `foreign key` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
