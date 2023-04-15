-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 10:37 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `post_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `authorization` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `authorization`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `content` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `avatar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `content`, `post_id`, `avatar`) VALUES
(23, 'Gấu Ẩn Danh', 'Tại sao lại phải khổ như thế này? Nhưng môi trường có khắc nghiệt đến đâu thì tâm lý làm nhạc của bọ', 13, 'gau.png'),
(25, 'Tuần Lộc Ẩn Danh', 'Các bạn đã bắt đầu thực hiện album 99% như thế nào?', 13, 'tuanloc.png'),
(27, 'Vịt trắng Ẩn Danh', 'Thảo Điền bởi lần đầu bước vào, nó giống một cái kho', 13, 'vit.png'),
(28, 'Tuần Lộc Ẩn Danh', 'lest do it', 13, 'tuanloc.png'),
(29, 'Gấu Ẩn Danh', 'Hãy luôn tò mò để học như một đứa trẻ', 12, 'gau.png');

-- --------------------------------------------------------

--
-- Table structure for table `forum_comment`
--

CREATE TABLE `forum_comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) NOT NULL,
  `commentator` varchar(100) NOT NULL,
  `forum_posts_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_comment`
--

INSERT INTO `forum_comment` (`id`, `content`, `commentator`, `forum_posts_id`) VALUES
(6, 'Notice the WHERE clause in the DELETE syntax: The WHERE clause specifies which record or records tha', 'Nguyễn Tuấn Anh', 1),
(7, 'Notice the WHERE clause in the DELETE syntax: The WHERE clause specifies which record or records tha', 'Nguyễn Tuấn Anh', 1),
(9, 'aaa', 'Admin', 1),
(10, 'aaa', 'Admin', 1),
(11, 'Khi trở lại khu vực chiến đấu, UAV Nga tiếp tục phát hiện một kho đạn của Ukraine. Sau khi nhận được', 'SUNTORY', 4),
(12, 'Khi trở lại khu vực chiến đấu, UAV Nga tiếp tục phát hiện một kho đạn của Ukraine. Sau khi nhận được tọa độ mà UAV cung cấp', 'SUNTORY', 4),
(13, 'Trao đổi với các chuyên gia Nhật Bản tại công trình. Đến nay, tiến độ thi công toàn dự án metro số 1 (Bến Thành - Suối Tiên) đã đạt khoảng 95%.', 'Admin', 4);

-- --------------------------------------------------------

--
-- Table structure for table `forum_posts`
--

CREATE TABLE `forum_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` varchar(500) NOT NULL,
  `category` varchar(50) NOT NULL,
  `poster` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum_posts`
--

INSERT INTO `forum_posts` (`id`, `title`, `content`, `category`, `poster`, `date`) VALUES
(4, 'UAV Nga phối hợp pháo binh phá hủy loạt xe quân sự', 'Bộ Quốc phòng Nga đăng tải đoạn video ghi lại trận chiến ở khu vực Avdiivka, Donetsk. Theo đó, UAV t', 'Thư giãn', 'Người dùng thử đầu tiên', '2023-04-15 20:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `content`) VALUES
(8, 'Thủ tướng Phạm Minh Chính thị sát các công trình trọng điểm ở TPHCM', 'Buổi chạy thử nghiệm tàu đang nằm trong giai đoạn thử nghiệm số 5 (tích hợp tĩnh) và giai đoạn thử nghiệm số 6 (tích hợp động) trong quy trình thử nghiệm gồm 8 giai đoạn, được triển khai từ nhiều tháng nay. Theo thiết kế, đoạn trên cao có tốc độ tối đa là');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `img_title` varchar(100) NOT NULL,
  `content` varchar(10000) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `interact` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `img_title`, `content`, `date`, `interact`, `category`) VALUES
(12, 'Nhà vô địch Bartender thế giới Adrián Michalčík: “Hãy luôn tò mò để học như một đứa trẻ”', '1680897411.jpg', '<h2 style=\"border: 0px solid rgb(229, 231, 235); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-size: 32px; font-weight: 600; margin: 0px auto 16px; font-family: Poppins-SVN, Kailasa, &quot;Noto Sans&quot;, sans-serif; line-height: 44px; color: rgb(41, 41, 41); max-width: 568px; background-color: rgb(248, 248, 248);\">Anh đến với nghề Bartender như thế nào?</h2><p style=\"border: 0px solid rgb(229, 231, 235); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: auto; margin-bottom: 20px; margin-left: auto; font-family: Merriweather; font-size: 18px; line-height: 32px; max-width: 568px; width: 568px; color: rgb(41, 41, 41); background-color: rgb(248, 248, 248);\">Nghe có vẻ kỳ lạ, nhưng xuất phát điểm tôi lại là… vận động viên khúc côn cầu. Đến khi cần nghề nghiệp ổn định, tôi mới quyết định học chuyên ngành Gastronomy trong Hospitality (ngành Ẩm thực trong Nhà Hàng Khách sạn) - một trong những nghề trọng điểm ở đất nước Na Uy lúc bấy giờ.</p><p style=\"border: 0px solid rgb(229, 231, 235); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: auto; margin-bottom: 20px; margin-left: auto; font-family: Merriweather; font-size: 18px; line-height: 32px; max-width: 568px; width: 568px; color: rgb(41, 41, 41); background-color: rgb(248, 248, 248);\"><img src=\"./img-uploads/1680897346.jpg\" style=\"width: 100%; float: none;\" class=\"\"></p><p style=\"border: 0px solid rgb(229, 231, 235); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: auto; margin-bottom: 20px; margin-left: auto; font-family: Merriweather; font-size: 18px; line-height: 32px; max-width: 568px; width: 568px; color: rgb(41, 41, 41); background-color: rgb(248, 248, 248);\">Văn hóa nightlife vốn luôn sôi nổi ở Na Uy. Mọi người thường đến bar để gặp gỡ sau giờ làm, cùng trải lòng giữa không gian trầm mặc với hương vị cocktail yêu thích. Dường như cả một thế giới nội tâm đa dạng, đa sắc đều tồn tại trước mắt người bartender phục vụ thực khách của họ.</p><p style=\"border: 0px solid rgb(229, 231, 235); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: auto; margin-bottom: 32px; margin-left: auto; font-family: Merriweather; font-size: 18px; line-height: 32px; max-width: 568px; width: 568px; color: rgb(41, 41, 41); background-color: rgb(248, 248, 248);\">Giây phút đó tôi biết mình đã thực sự “phải lòng” nghề bar.</p><h2 style=\"border: 0px solid rgb(229, 231, 235); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-size: 32px; font-weight: 600; margin: 0px auto 16px; font-family: Poppins-SVN, Kailasa, &quot;Noto Sans&quot;, sans-serif; line-height: 44px; color: rgb(41, 41, 41); max-width: 568px; background-color: rgb(248, 248, 248);\">Anh làm gì để lấy lại cảm hứng đi làm khi có những ngày mệt mỏi?</h2><p style=\"border: 0px solid rgb(229, 231, 235); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: auto; margin-bottom: 20px; margin-left: auto; font-family: Merriweather; font-size: 18px; line-height: 32px; max-width: 568px; width: 568px; color: rgb(41, 41, 41); background-color: rgb(248, 248, 248);\">Không thể phủ nhận sẽ có ngày bartender đi làm với tâm trạng trống rỗng hay cạn kiệt năng lượng. Nhưng bước qua ngưỡng cửa quán bar là lúc tôi tự “dọn dẹp” sạch sẽ suy nghĩ tiêu cực, để dành chỗ tập trung chỉ làm tốt công việc của mình.</p><p style=\"border: 0px solid rgb(229, 231, 235); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ', '2023-04-12 04:36:43', 1, 'Careers'),
(13, 'RPT MCK: Đi tìm ốc đảo trong sa mạc', '1680897629.jpeg', '<h3 style=\"border: 0px solid rgb(229, 231, 235); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-weight: 600; margin: 32px auto 16px; font-family: Poppins-SVN, Kailasa, &quot;Noto Sans&quot;, sans-serif; line-height: 32px; color: rgb(41, 41, 41); max-width: 568px; background-color: rgb(248, 248, 248);\">Các bạn đã bắt đầu thực hiện album 99% như thế nào?</h3><p style=\"border: 0px solid rgb(229, 231, 235); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: auto; margin-bottom: 20px; margin-left: auto; font-family: Merriweather; font-size: 18px; line-height: 32px; max-width: 568px; width: 568px; color: rgb(41, 41, 41); background-color: rgb(248, 248, 248);\"><span style=\"border: 0px solid rgb(229, 231, 235); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-weight: 600; line-height: 22px; margin-top: 0px; margin-bottom: 32px;\">Lope Phạm:&nbsp;</span>Khi bắt đầu thực hiện album, bọn em sống trong một căn phòng không có điều hoà, không có cả quạt luôn. Em nghĩ là do bọn em “ngáo” vì rõ ràng nhà có điều hoà mà không biết lắp và cũng không chịu gọi người đến lắp.</p><p style=\"border: 0px solid rgb(229, 231, 235); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: auto; margin-bottom: 20px; margin-left: auto; font-family: Merriweather; font-size: 18px; line-height: 32px; max-width: 568px; width: 568px; color: rgb(41, 41, 41); background-color: rgb(248, 248, 248);\">Tại sao lại phải khổ như thế này? Nhưng môi trường có khắc nghiệt đến đâu thì tâm lý làm nhạc của bọn em vẫn kiên định. Nếu mình chưa giải quyết được mặt tâm lý thì có ở khách sạn 5 sao hay penthouse vẫn không thể làm nhạc được.</p><p style=\"border: 0px solid rgb(229, 231, 235); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: auto; margin-bottom: 20px; margin-left: auto; font-family: Merriweather; font-size: 18px; line-height: 32px; max-width: 568px; width: 568px; color: rgb(41, 41, 41); background-color: rgb(248, 248, 248);\"><img src=\"./img-uploads/1680897595.jpeg\" style=\"width: 100%; float: none;\"></p><p style=\"border: 0px solid rgb(229, 231, 235); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; margin-right: auto; margin-bottom: 20px; margin-left: auto; font-family: Merriweather; font-size: 18px; line-height: 32px; max-width: 568px; width: 568px; color: rgb(41, 41, 41); background-color: rgb(248, 248, 248);\"><span style=\"border: 0px solid rgb(229, 231, 235); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rotate: ; --tw-invert: ; --tw-saturate: ; --tw-sepia: ; --tw-drop-shadow: ; --tw-backdrop-blur: ; --tw-backdrop-brightness: ; --tw-backdrop-contrast: ; --tw-backdrop-grayscale: ; --tw-backdrop-hue-rotate: ; --tw-backdrop-invert: ; --tw-backdrop-opacity: ; --tw-backdrop-saturate: ; --tw-backdrop-sepia: ; font-weight: 600; line-height: 22px; margin-top: 0px; margin-bottom: 32px;\">MCK:&nbsp;</span>Sống khổ khổ như thế làm nhạc nó mới hay. Bọn em gọi là Nhà Đá Thảo Điền bởi lần đầu bước vào, nó giống một cái kho. Căn nhà đó trống trơn chỉ có một chiếc sofa nhưng có đến tận 8 cái ghế. Không có bình nước nóng và những ngày đầu cũng không có Internet.</p><p style=\"border: 0px solid rgb(229, 231, 235); --tw-border-spacing-x:0; --tw-border-spacing-y:0; --tw-translate-x:0; --tw-translate-y:0; --tw-rotate:0; --tw-skew-x:0; --tw-skew-y:0; --tw-scale-x:1; --tw-scale-y:1; --tw-pan-x: ; --tw-pan-y: ; --tw-pinch-zoom: ; --tw-scroll-snap-strictness:proximity; --tw-ordinal: ; --tw-slashed-zero: ; --tw-numeric-figure: ; --tw-numeric-spacing: ; --tw-numeric-fraction: ; --tw-ring-inset: ; --tw-ring-offset-width:0px; --tw-ring-offset-color:#fff; --tw-ring-color:rgba(59,130,246,0.5); --tw-ring-offset-shadow:0 0 #0000; --tw-ring-shadow:0 0 #0000; --tw-shadow:0 0 #0000; --tw-shadow-colored:0 0 #0000; --tw-blur: ; --tw-brightness: ; --tw-contrast: ; --tw-grayscale: ; --tw-hue-rota', '2023-04-12 04:36:47', 34, 'Announcemer'),
(19, 'a', '1681274334.', '<p>a</p>', '2023-04-12 07:57:46', 0, 'bbb');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_comment`
--
ALTER TABLE `forum_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_posts`
--
ALTER TABLE `forum_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `forum_comment`
--
ALTER TABLE `forum_comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `forum_posts`
--
ALTER TABLE `forum_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
