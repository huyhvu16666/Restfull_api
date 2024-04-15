-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 15, 2024 lúc 07:30 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `api_php`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhoi`
--

CREATE TABLE `cauhoi` (
  `id_cauhoi` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cau_a` varchar(200) NOT NULL,
  `cau_b` varchar(200) NOT NULL,
  `cau_c` varchar(200) NOT NULL,
  `cau_d` varchar(200) NOT NULL,
  `cau_dung` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cauhoi`
--

INSERT INTO `cauhoi` (`id_cauhoi`, `title`, `cau_a`, `cau_b`, `cau_c`, `cau_d`, `cau_dung`) VALUES
(12, 'You would make better progress if you _____ class regularly.', 'attended', ' would attend', 'are attending', 'attend', 'a'),
(13, 'Generally _______, she’s quite a good student.', ' talking', 'speaking', 'saying', ' telling', 'b'),
(14, 'Study much harder_____.', ' if you will pass the exam', 'unless you pass the exam', 'or you won’t pass the exam', 'and you pass the exam', 'c'),
(15, 'We  intend to _______________with the old system as soon as we have developed a better one.', 'do up', 'do in', 'do away', 'do down', 'c'),
(16, 'St. Catherine’s Monastery Library in Egypt is the first in  the world ___________in the sixth century.', 'to be built', ' built', 'to built', ' to have built', 'a'),
(17, 'Put plants ............... a window so that they will get enough light.', 'near to', 'near of', ' next to', 'nearly', 'c'),
(18, 'He is having a lot of difficulties,       ?', 'doesn’t it', ' isn’t it', 'isn’t he', 'doesn’t he', 'c'),
(19, 'We wish _______ to college next year.', 'go', 'to go', 'going', 'shall go', 'b'),
(20, 'They agreed _______ us some more money.', 'lend', 'to lend', ' lending', ' lent', 'b'),
(21, 'He suggested _______ to France this summer time', ' travel', 'to travel', ' traveling', 'traveled', 'c');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`id_cauhoi`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `id_cauhoi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
