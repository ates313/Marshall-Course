-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2023 at 06:24 PM
-- Server version: 8.0.30
-- PHP Version: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marshall_course`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `a_id` int NOT NULL,
  `a_title` varchar(250) NOT NULL,
  `a_desc` text NOT NULL,
  `a_img` varchar(250) NOT NULL,
  `a_status` text NOT NULL,
  `a_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`a_id`, `a_title`, `a_desc`, `a_img`, `a_status`, `a_date`) VALUES
(1, 'Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five cen', 'a20569a6e06e56256b0a399c04d1c096.jpg', 'Active', '2023-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'AtesK', '202cb962ac59075b964b07152d234b70'),
(2, 'Rza', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

CREATE TABLE `contact_message` (
  `cn_id` int NOT NULL,
  `cn_name` varchar(250) NOT NULL,
  `cn_surname` text NOT NULL,
  `cn_desc` varchar(600) NOT NULL,
  `cn_email` varchar(250) NOT NULL,
  `cn_phone` varchar(250) NOT NULL,
  `cn_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `c_id` int NOT NULL,
  `c_title` varchar(255) NOT NULL,
  `c_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `c_price` varchar(50) NOT NULL,
  `c_status` varchar(255) NOT NULL,
  `c_month` varchar(255) NOT NULL,
  `c_img` text NOT NULL,
  `c_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`c_id`, `c_title`, `c_desc`, `c_price`, `c_status`, `c_month`, `c_img`, `c_date`) VALUES
(1, 'Programming', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and', '200', 'Active', '6', '7faa28065b591dc13a2ab6be2de08c14.jpg', '2023-11-28'),
(2, 'English', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content', '80', 'Active', '9', 'ecc04caae180264ddce635144b0c38a1.jpg', '2023-11-28'),
(3, 'Russian', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance', '50', 'Active', '6', '52a10cb754c516ff0922f666945c62a8.jpg', '2023-11-28'),
(4, 'Painter', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '60', 'Active', '2', 'a0c6be21c6f00831e4435a676c4a49bd.jpg', '2023-11-28'),
(5, 'Chess', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.', '85', 'Active', '3', '9e02e74200b894a8b08cf96f68ae2274.jpg', '2023-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `directoria`
--

CREATE TABLE `directoria` (
  `d_id` int NOT NULL,
  `d_name` varchar(250) NOT NULL,
  `d_surname` varchar(250) NOT NULL,
  `d_desc` varchar(800) NOT NULL,
  `d_position` varchar(50) NOT NULL,
  `d_status` varchar(50) NOT NULL,
  `d_img` varchar(6666) NOT NULL,
  `d_instagram` varchar(250) NOT NULL,
  `d_facebook` varchar(250) NOT NULL,
  `d_gmail` varchar(250) NOT NULL,
  `d_twitter` varchar(250) NOT NULL,
  `d_birhtday` varchar(250) NOT NULL,
  `d_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `directoria`
--

INSERT INTO `directoria` (`d_id`, `d_name`, `d_surname`, `d_desc`, `d_position`, `d_status`, `d_img`, `d_instagram`, `d_facebook`, `d_gmail`, `d_twitter`, `d_birhtday`, `d_date`) VALUES
(1, 'Atesh', 'Kurbanov', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five cen', 'Drector', 'Active', '863c0cf86de7811954d2171371f60ab6.jpg', 'https://www.instagram.com/', 'https://www.facebook.com/', 'http://gmail.com/', 'https://twitter.com/login?lang=tr', '2006-07-03', '2023-11-28'),
(2, 'Ramil', 'Kerimov', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five cen', 'Manager', 'Active', 'b4f161586ecf0e4b2898c6a419b028c1.jpg', 'https://www.instagram.com/', 'https://www.facebook.com/', 'http://gmail.com/', 'https://twitter.com/login?lang=tr', '1999-06-09', '2023-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `footer_about`
--

CREATE TABLE `footer_about` (
  `f_id` int NOT NULL,
  `f_instagram` varchar(250) NOT NULL,
  `f_facebook` varchar(250) NOT NULL,
  `f_tweet` varchar(250) NOT NULL,
  `f_desc` text NOT NULL,
  `f_status` varchar(50) NOT NULL,
  `f_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `footer_about`
--

INSERT INTO `footer_about` (`f_id`, `f_instagram`, `f_facebook`, `f_tweet`, `f_desc`, `f_status`, `f_date`) VALUES
(3, 'https://www.instagram.com/', 'https://www.youtube.com/', '', 'Salam Menim Adim Ateshdir QWERTYUIO', 'Active', '2023-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `n_id` int NOT NULL,
  `n_status` varchar(50) NOT NULL,
  `n_desc` text NOT NULL,
  `n_img` varchar(255) NOT NULL,
  `n_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`n_id`, `n_status`, `n_desc`, `n_img`, `n_date`) VALUES
(1, 'Active', 'Programming course started!', '65a951c2c396d627cf8bfb8122f0f4a2.jpg', '2023-11-28'),
(2, 'Active', 'WELCOME! New English Learning teacher!', '1ac779f720d6e87a2cd7ca23f671fc59.jpg', '2023-11-28'),
(3, 'Active', 'Our student with the highest score in programming! Murad Gazymagemadov!\r\n', '3cc3c061888378a294c13179e8808ef1.jpg', '2023-11-28'),
(4, 'Active', 'Registration for our painting courses has started. Contact for registration.', 'a15c4df46e53b5b57c9ae705254ea152.jpg', '2023-11-28');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `p_id` int NOT NULL,
  `p_title` varchar(250) NOT NULL,
  `p_img` varchar(250) NOT NULL,
  `p_link` varchar(250) NOT NULL,
  `p_status` varchar(250) NOT NULL,
  `p_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `partners`
--

INSERT INTO `partners` (`p_id`, `p_title`, `p_img`, `p_link`, `p_status`, `p_date`) VALUES
(1, '', '50eb261ccbc187c49a2ff2d5559071ef.jpg', 'https://socar.az/socar/az/home/', 'Active', '2023-11-28'),
(2, '', '74e008808c0ff491569500b77c44f1d1.jpg', 'https://stimul.edu.az/', 'Active', '2023-11-28'),
(3, '', 'ec89de0648b665b2a1a6c69dc8170db0.png', 'https://turbo.az/', 'Active', '2023-11-28'),
(4, '', '9348b2bd5b6ffbd03105bb72a8c86ee6.jpg', 'https://hedef.edu.az/', 'Active', '2023-11-28'),
(6, '', '3450fbead385d8070ee95b27a5b0bb00.jpg', 'https://www.sirab.az/ru/', 'Active', '2023-12-07'),
(7, '', 'f0cd16b6742fcbe3d8b4d84caa84eb7a.png', 'https://www.kapitalbank.az/', 'Active', '2023-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `s_id` int NOT NULL,
  `s_title` varchar(255) NOT NULL,
  `s_desc` varchar(600) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `s_link` varchar(255) NOT NULL,
  `s_status` varchar(50) NOT NULL,
  `s_img` varchar(255) NOT NULL,
  `s_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`s_id`, `s_title`, `s_desc`, `s_link`, `s_status`, `s_img`, `s_date`) VALUES
(1, 'Programming', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', 'https://www.youtube.com/', 'Active', 'fb8d2609ab9d84577fe7c173e751ae35.jpg', '2023-11-29'),
(2, 'Russian language learning', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', 'https://www.youtube.com/', 'Active', '2248feb86aa43551a6b7b4f4677843e7.jpg', '2023-11-29'),
(3, 'Painter learning', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,  but also the leap into electronic typesetting, remaining essentially unchanged.', 'https://www.youtube.com/', 'Active', '336650b7087e19a60d3bec3f4b3cf9a2.jpg', '2023-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `t_id` int NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_surname` varchar(255) NOT NULL,
  `t_work` varchar(255) NOT NULL,
  `t_status` varchar(60) NOT NULL,
  `t_img` varchar(599) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`t_id`, `t_name`, `t_surname`, `t_work`, `t_status`, `t_img`) VALUES
(2, 'Atesh', 'Kurbanov', 'Web Developer', 'Active', 'a9f39255d7246f32da007de65f6e2753.jpg'),
(3, 'Gunel', 'Mammedova', 'English Teacher', 'Active', 'ee258d738dd47ce76775b77c53001f29.jpg'),
(4, 'Natasha', 'Aslanov', 'Russian Languag', 'Active', '44ec7aedf821cb3e2a1bdbf501f32292.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `contact_message`
--
ALTER TABLE `contact_message`
  ADD PRIMARY KEY (`cn_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `directoria`
--
ALTER TABLE `directoria`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `footer_about`
--
ALTER TABLE `footer_about`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`t_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `a_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact_message`
--
ALTER TABLE `contact_message`
  MODIFY `cn_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `c_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `directoria`
--
ALTER TABLE `directoria`
  MODIFY `d_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footer_about`
--
ALTER TABLE `footer_about`
  MODIFY `f_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partners`
--
ALTER TABLE `partners`
  MODIFY `p_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `s_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `t_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
