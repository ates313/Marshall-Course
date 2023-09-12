-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1:3306
-- Üretim Zamanı: 12 Eyl 2023, 16:08:29
-- Sunucu sürümü: 8.0.30
-- PHP Sürümü: 8.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `marshall_course`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `admin`
--

CREATE TABLE `admin` (
  `a_id` int NOT NULL,
  `a_UserName` varchar(255) NOT NULL,
  `a_Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `course`
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
-- Tablo döküm verisi `course`
--

INSERT INTO `course` (`c_id`, `c_title`, `c_desc`, `c_price`, `c_status`, `c_month`, `c_img`, `c_date`) VALUES
(8, 'fv', 'Random', 'fv', 'Active', '9 Month', '2e5a6759ce6baabc84b7a7e496fe0a93.png', '2023-09-12'),
(9, 'TEST', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler ', '54', 'Active', '6 Month', 'f3821c8a4fd21c7e4e617ec3238b6330.png', '2023-09-10');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `news`
--

CREATE TABLE `news` (
  `n_id` int NOT NULL,
  `n_status` varchar(50) NOT NULL,
  `n_desc` text NOT NULL,
  `n_img` varchar(255) NOT NULL,
  `n_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Tablo döküm verisi `news`
--

INSERT INTO `news` (`n_id`, `n_status`, `n_desc`, `n_img`, `n_date`) VALUES
(3, 'Active', 'Marshall', 'dec576a1c09980897d6e55a0987c1ae8.png', '2023-09-12'),
(4, 'Active', 'Inglis Dili Kurslarimizbasladi!', '4de501dfae363ba624661bdd4c6488b6.png', '2023-09-12'),
(5, 'Active', 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.\r\n\r\n', '9e2a824f7bcf1ea3ceed2cbb51988e41.png', '2023-09-12');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slider`
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
-- Tablo döküm verisi `slider`
--

INSERT INTO `slider` (`s_id`, `s_title`, `s_desc`, `s_link`, `s_status`, `s_img`, `s_date`) VALUES
(10, 'Jhon', 'Doe', '', 'Active', '9704e50fd31d86c82170f76f4b8a6178.png', '2023-09-10'),
(11, 'efr', 'frv', '', 'Active', '', '2023-09-09'),
(13, 'HGFGVJHBKNM', 'DFCGVHJBNKM', 'https://www.youtube.com/', 'Active', '9b33365ae4337c537296ea6b0d5a1d5d.png', '2023-09-10'),
(14, 'ESDRFTYGUHIJOUH', 'JGJHKDUYGEUY', 'https://www.youtube.com/', 'Active', 'a70510e39c520371a5ccf1818b59e768.png', '2023-09-09'),
(15, 'MarshallEDU Education School', 'dfvdswe', 'https://www.youtube.com/', 'Deactive', '0e42641f4a6a1d2c9501eb7a82252b7f.png', '2023-09-09'),
(16, 'wdefdv', 'dfbg', 'https://www.youtube.com/', 'Active', '7c713c3580160338e8d7e0969da1acc8.png', '2023-09-09');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Tablo için indeksler `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`c_id`);

--
-- Tablo için indeksler `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_id`);

--
-- Tablo için indeksler `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`s_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `course`
--
ALTER TABLE `course`
  MODIFY `c_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `news`
--
ALTER TABLE `news`
  MODIFY `n_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `slider`
--
ALTER TABLE `slider`
  MODIFY `s_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
