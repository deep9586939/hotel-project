-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2025 at 07:50 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `checked`
--

CREATE TABLE `checked` (
  `id` int(30) NOT NULL,
  `ref_no` varchar(100) NOT NULL,
  `room_id` int(30) NOT NULL,
  `name` text NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `date_in` datetime NOT NULL,
  `date_out` datetime NOT NULL,
  `booked_cid` int(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = pending, 1=checked in , 2 = checked out',
  `date_updated` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `checked`
--

INSERT INTO `checked` (`id`, `ref_no`, `room_id`, `name`, `contact_no`, `date_in`, `date_out`, `booked_cid`, `status`, `date_updated`) VALUES
(4, '0000\n', 1, 'John Smith', '+14526-5455-44', '2020-09-19 11:48:09', '2020-09-22 11:48:09', 0, 2, '2020-09-19 13:11:34'),
(5, '9564082520\n', 1, 'John Smith', '+14526-5455-44', '2020-09-19 11:48:33', '2020-09-22 11:48:33', 0, 2, '2020-09-19 13:12:19'),
(6, '2765813481\n', 1, 'asdasd asdas as', '8747808787', '2020-09-19 13:16:00', '2020-09-24 13:16:00', 0, 2, '2020-09-19 13:43:21'),
(10, '6479004224\n', 1, 'John Smith', '+14526-5455-44', '2020-09-23 10:31:00', '2020-09-29 10:31:00', 3, 2, '2025-08-30 15:12:03'),
(11, '6247622003\n', 1, 'deep', '9586939760', '2025-08-30 07:00:00', '2025-08-31 07:00:00', 2, 2, '2025-09-02 12:50:24'),
(12, '1940782753\n', 0, 'uttam', '8659352634', '2025-09-01 11:40:00', '2025-10-01 11:40:00', 3, 0, '2025-08-30 15:10:49'),
(13, '5453822321\n', 1, 'uttam', '8659352634', '2025-08-30 11:42:00', '2025-08-31 11:42:00', 0, 1, '2025-08-30 15:12:55'),
(14, '734825318\n', 4, 'shital', '9978711846', '2025-09-03 13:00:00', '2025-10-03 13:00:00', 4, 1, '2025-08-30 15:31:46'),
(15, '7442112530\n', 0, 'ansh', '9824227009', '2025-09-05 16:00:00', '2025-09-06 16:00:00', 2, 2, '2025-09-08 08:58:31'),
(16, '3681413462\n', 3, 'ansh', '9824227009', '2025-09-04 15:53:00', '2025-09-05 15:53:00', 0, 2, '2025-09-04 19:24:02'),
(17, '9672670446\n', 5, 'meet', '9978711846', '2025-09-08 05:21:00', '2025-09-11 05:21:00', 6, 1, '2025-09-08 08:52:12');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(30) NOT NULL,
  `room` varchar(30) NOT NULL,
  `category_id` int(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 = Available , 1= Unvailables'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `room`, `category_id`, `status`) VALUES
(1, 'Room-101', 3, 0),
(3, 'Room-102', 2, 0),
(4, 'room-103', 4, 0),
(5, 'room-104', 6, 1),
(6, 'room-105', 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `room_categories`
--

CREATE TABLE `room_categories` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `price` float NOT NULL,
  `cover_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_categories`
--

INSERT INTO `room_categories` (`id`, `name`, `price`, `cover_img`) VALUES
(2, 'Deluxe Room', 500, '1600480260_4.jpg'),
(3, 'Single Room', 120, '1600480680_2.jpg'),
(4, 'Family Room', 350, '1600480680_room-1.jpg'),
(6, 'Twin Bed Room', 200, '1600482780_3.jpg'),
(7, 'ultra deluxe room', 1000, '1756994100_4.png');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `hotel_name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `hotel_name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'DH hotel', 'ask.dh_hotel@gmail.com', '+91-9586939760', '1756620540_4.png', '&lt;h3 data-start=&quot;78&quot; data-end=&quot;90&quot; style=&quot;text-align: center;&quot;&gt;&lt;b&gt;&lt;u&gt;About Us&lt;/u&gt;&lt;/b&gt;&lt;/h3&gt;Welcome to &lt;b data-start=&quot;103&quot; data-end=&quot;115&quot; style=&quot;margin: 0px 0px 0px 40px; border: none; padding: 0px;&quot;&gt;DH Hotel&lt;/b&gt;, where comfort meets luxury in the heart of the city. Our mission is to offer every guest a unique and unforgettable experience with impeccable service, exceptional amenities, and a welcoming atmosphere.&lt;br&gt;Nestled in a prime location, DH Hotel is more than just a place to stay&mdash;it&amp;#x2019;s a destination in itself. Whether you&amp;#x2019;re here for business, leisure, or a little of both, we&rsquo;ve designed our hotel to cater to your every need, ensuring you feel right at home from the moment you step through our doors.&lt;br&gt;Our modern, stylish rooms are equipped with all the comforts you need for a relaxing stay, while our dedicated team is always on hand to provide personalized service that exceeds expectations. From our on-site restaurant serving delicious, locally-inspired cuisine to our tranquil wellness center, every aspect of DH Hotel is designed to make your stay a memorable one.&lt;br&gt;At DH Hotel, we believe in creating meaningful connections, not just with our guests, but with our community. Through our sustainable practices and partnerships with local artisans, we strive to make a positive impact on both your experience and the world around us.&lt;br&gt;&lt;p data-start=&quot;1257&quot; data-end=&quot;1331&quot; style=&quot;text-align: left;&quot;&gt;Thank you for choosing &lt;b data-start=&quot;1280&quot; data-end=&quot;1292&quot;&gt;DH Hotel&lt;/b&gt;&mdash;we look forward to welcoming you soon!&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;/p&gt;&lt;h2 style=&quot;text-align: center; font-size: 28px; background: transparent; position: relative;&quot;&gt;&lt;b style=&quot;text-align: center; font-size: 28px; background: transparent; position: relative;&quot;&gt;&lt;u style=&quot;text-align: center; font-size: 28px; background: transparent; position: relative;&quot;&gt;Where does it come from?&lt;/u&gt;&lt;/b&gt;&lt;/h2&gt;&lt;p style=&quot;text-align: left; margin-bottom: 15px; padding: 0px; color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: 400;&quot;&gt;Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of &quot;de Finibus Bonorum et Malorum&quot; (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, &quot;Lorem ipsum dolor sit amet..&quot;, comes from a line in section 1.10.32.&lt;/p&gt;&lt;p&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 2 COMMENT '1=admin , 2 = staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Administrator', 'admin', 'deep', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `checked`
--
ALTER TABLE `checked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_categories`
--
ALTER TABLE `room_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `checked`
--
ALTER TABLE `checked`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `room_categories`
--
ALTER TABLE `room_categories`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
