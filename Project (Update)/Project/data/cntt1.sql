-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2022 at 06:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cntt1`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text COLLATE utf8_unicode_ci NOT NULL,
  `post_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_content` text COLLATE utf8_unicode_ci NOT NULL,
  `categories` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_author`, `post_date`, `post_image`, `post_title`, `post_content`, `categories`) VALUES
(1, 'N.X.Dat', '2022-06-10', 'post_img_2.jpg', 'Ứng dụng AI, giải pháp nhận dạng chữ viết SmartOCR có độ chính xác trên 97%', 'Hồi tháng 10/2021, giải pháp SmartOCR cùng với các giải pháp khác trong hệ sinh thái “One-stop Solutions” như SmartRPA - Robot tự động hóa nghiệp vụ, SmartKYC - Định danh khách hàng điện tử, SmartStore - Bán lẻ thông minh, SmartGift - Khuyến mại thông minh…, đã góp đưa GMO-Z.com RUNSYSTEM lọt Top 10 Doanh nghiệp CNTT cung cấp giải pháp, dịch vụ chuyển đổi số tiêu biểu, trong lễ vinh danh Top 10 Doanh nghiệp CNTT Việt Nam năm 2021 do Hiệp hội Phần mềm và Dịch vụ CNTT Việt Nam (VINASA) tổ chức.', 'Viện hàn lâm');
(2, 'N.D.Long', '2022-06-11', 'post_img_1.jpg', 'AI sẽ đóng vai trò gì để giảm thiểu khí thải?', 'Các chuyên gia cho rằng, ứng dụng công nghệ và những gì AI có thể làm được để giải quyết các vấn đề biến đổi khí hậu. Tuy nhiên, đây là vấn đề rất mới đối với Việt Nam. Biến đổi khí hậu được coi là một trong những thách thức lớn nhất trên toàn cầu trong thời điểm hiện nay. Trong đó Việt Nam là một trong những nước chịu ảnh hưởng nặng nề.
Chia sẻ trên trang tin của FPT, PGS.TS Trần Thế Truyền, Đại học Deakin - Australia đã đưa ra một số nguyên nhân chính gây tác động tiêu cực đến môi trường gồm điện năng, nông nghiệp và giao thông: "Vẫn biết những ông lớn của thế giới như Anh, Mỹ, Trung Quốc, Nga là những tác nhân chính gây biến đổi khí hậu, thế nhưng, không vì thế mà Việt Nam chúng ta vô can. Vì vậy Việt Nam cần phải hành động ngay thời điểm này.', 'Viện công nghệ thông tin');
(3, 'N.X.Dat', '2022-06-12', 'post_img_3.jpg', 'Trí tuệ nhân tạo: Hóa giải thách thức lớn nhất trong nghiên cứu sinh học', 'Hơn một nửa thế kỷ qua, giới khoa học vẫn đau đầu tìm cách dự đoán một cách chính xác và nhanh chóng chức năng của protein bằng cách phân tích chuỗi amino acid hình thành nên protein. Đầu tháng 12, một chương trình Trí tuệ nhân tạo (AI) có tên là AlphaFold của Công ty DeepMind - cùng thuộc sở hữu của tập đoàn Alphabet giống như Google - hầu như đã giải quyết được thách thức này, dự báo cách hình thành các cấu trúc không gian 3 chiều của protein.', 'Ngành công nghệ thông tin');


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_email`) VALUES
(1, 'longnd', '123', 'longnd@gmail.com'),
(2, 'datnx', '123', 'datnx@gmail.com'),
(4, '11231123123', '123123', '1@1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
