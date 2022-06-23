-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2022 at 01:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uos`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(255) NOT NULL,
  `course_name` varchar(255) NOT NULL,
  `course_desc` varchar(255) NOT NULL,
  `course_price` varchar(255) NOT NULL,
  `course_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`, `course_desc`, `course_price`, `course_image`) VALUES
(1, 'Software Engineering', 'As computers only continue to become more necessary in our society, those equipped with skills to spur this growth onward will be prepared for high-demand careers.', '35000', 'assets/images/pic1.jpg'),
(2, 'Media study', 'As computers only continue to become more necessary in our society, those equipped with skills to spur this growth onward will be prepared for high-demand careers.', '30000', 'assets/images/pic2.jpg'),
(3, 'Computer science', 'As computers only continue to become more necessary in our society, those equipped with skills to spur this growth onward will be prepared for high-demand careers.', '45000', 'assets/images/pic3.jpg'),
(4, 'Medical study', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur asperiores ea, adipisci possimus laboriosam repellendus ullam fuga sequi voluptatem, autem omnis numquam aliquid!\r\n', '50000', 'assets/images/pic4.jpg'),
(5, 'veterinary science', 'veterinary medicine, also called veterinary science, medical specialty concerned with the prevention, control, diagnosis, and treatment of diseases affecting the health of domestic and wild animals and with the prevention of transmission of animal disease', '35000', 'assets/images/5.jpg'),
(6, 'Iqbal studies', 'The Department of Iqbal Studies established at the faculty of Arts and Languages in January 2021. The main focus of the Department of Iqbal Studies is to teach and research regarding Sir Dr. Allama Mohammad Iqbal, the great poet, philosopher and thinker o', '20000', 'assets/images/5.jpg'),
(10, 'Bacholar in Information Technology', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, iusto odio officiis accusamus expedita nobis vitae. Modi voluptatibus quaerat expedita, rem consequatur culpa necessitatibus aperiam natus neque. Consectetur repellendus explicabo vero, aperi', '43000', '62b4296fad2421.63588676.jpg'),
(11, 'Bachelor in Business', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, iusto odio officiis accusamus expedita nobis vitae. Modi voluptatibus quaerat expedita, rem consequatur culpa necessitatibus aperiam natus neque. Consectetur repellendus explicabo vero, aperi', '35000', '62b429b7b8e658.12410838.jpg'),
(12, 'Bachelor in Journalist', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, iusto odio officiis accusamus expedita nobis vitae. Modi voluptatibus quaerat expedita, rem consequatur culpa necessitatibus aperiam natus neque. Consectetur repellendus explicabo vero, aperi', '50000', '62b42a64de0792.19532723.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `enrollments`
--

CREATE TABLE `enrollments` (
  `enr_id` int(255) NOT NULL,
  `enr_course_id` varchar(255) NOT NULL,
  `enr_user_id` varchar(255) NOT NULL,
  `enr_completed` varchar(255) NOT NULL,
  `enr_created` varchar(255) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrollments`
--

INSERT INTO `enrollments` (`enr_id`, `enr_course_id`, `enr_user_id`, `enr_completed`, `enr_created`) VALUES
(1, '1', '2', '0', 'current_timestamp()'),
(2, '2', '33', '0', 'current_timestamp()'),
(3, '6', '0', '0', 'current_timestamp()');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` int(255) NOT NULL,
  `student_fname` varchar(255) NOT NULL,
  `student_email` varchar(255) NOT NULL,
  `student_password` varchar(255) NOT NULL,
  `student_pic` varchar(255) NOT NULL,
  `student_role` varchar(255) NOT NULL,
  `student_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_fname`, `student_email`, `student_password`, `student_pic`, `student_role`, `student_created`) VALUES
(71, 'Noman', 'noman@mail.com', '$2y$10$0Bz0J3jwQf61Mgcy2IDzheGhwkqa7LEgnUMTrLYR7Smylu/RZumTW', '62b40135dc20e2.20484809.jpg', '0', '2022-06-23 05:59:17'),
(72, 'Shahzad Farooq', 'crindalwalt@mail.com', '$2y$10$qbu3OFuBV3UfO6oxD4SYAutBY86ZGzo0I69GdsdDkbKfUzGS8kOH2', '62b40151052b94.80994644.jpg', '0', '2022-06-23 05:59:45'),
(74, 'saif ul allah', 'saif@mail.com', '$2y$10$1bDfoH7CKRs3/cdbIfoVpuSW5V4j10346ymKbHJeAqMT2Ze/zX1EW', '62b4112936b141.56069372.jpg', '0', '2022-06-23 07:07:21'),
(78, 'Muhammad Umair', 'umair@gmail.com', '$2y$10$LnGkQraPwD8jQu0y3JbBM.6OMrzw4vvr11mhpHXT4jy8z9I/jEISi', '62b417accb3ba0.34981977.jpeg', '1', '2022-06-23 07:35:08'),
(79, 'Muhammad Abdullah', 'abdullah@gmail.com', '$2y$10$TeXhcaad0vVsLjG/tFouEOw4wWTNe2kBNVG0XRRoYQ5jvSfeKfizK', '62b41ce6ee4185.51781417.jpg', '0', '2022-06-23 07:57:27'),
(80, 'Muhammad Umar', 'umar@mail.com', '$2y$10$NGrO6lYhRQtKBcd2jpwGhuE4qDpQL912tMTiLktQwtwsQum32Vqre', '62b41d5fef2845.80114910.jpg', '0', '2022-06-23 07:59:28'),
(81, 'Muhammad Uzair', 'uzair@mail.com', '$2y$10$mjqeD0BRbGERls4../5uu.tobe5E7Qp.vpi3BOl5wFkMlj/vtkUA2', '62b41df98ea940.61499656.jpg', '0', '2022-06-23 08:02:01'),
(82, 'Muhammad Ahad', 'ahad@mail.com', '$2y$10$53ZhPrZpybZOHwhKx07x4OFhHo.lau1J2tCDpvsqHZgdJHCqGTw7S', '62b41e66ad3d04.58458234.jpg', '0', '2022-06-23 08:03:50'),
(84, 'Muhammad Saad ', 'saad@mail.com', '$2y$10$jIOmnMDTtrKMkwWmhxBPvO9B5LejVinRfTcCCu7Bf6MjiF33N4ihW', '62b41eac6dcff5.61810268.jpg', '0', '2022-06-23 08:05:00'),
(85, 'Muhammad Rehan', 'rehan@mail.com', '$2y$10$63Puaue3lThSU45M1KPGCeHndoat0hLETtrJTNGFGoJgRaqVsBhPy', '62b42c545484e2.10309313.jpg', '0', '2022-06-23 09:03:16'),
(86, 'Shahzad Farooq', 'crindalwalt2@mail.com', '$2y$10$AyB0YIlfvk5AkuQdBS7P3.T4FtTHovVF1VC9sVjr6vscSwjjUaGz.', '62b44b5c8c8068.22719033.jpg', '0', '2022-06-23 11:15:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `enrollments`
--
ALTER TABLE `enrollments`
  ADD PRIMARY KEY (`enr_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `course_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `enrollments`
--
ALTER TABLE `enrollments`
  MODIFY `enr_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
