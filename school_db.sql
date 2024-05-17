-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2024 at 11:51 AM
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
-- Database: `school_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `student_id` bigint(20) NOT NULL,
  `comment` text DEFAULT NULL,
  `date` date DEFAULT NULL,
  `news` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `student_id`, `comment`, `date`, `news`) VALUES
(2, 811970524865, 'Second comment', '2024-05-10', 'NULL'),
(3, 811970524865, 'This is the third comment', '2024-05-10', 'NULL'),
(6, 4618149489, 'Tunaomba mtuambie tarehe sahihi ya kikao cha wazazi', '2024-05-10', 'NULL'),
(7, 4618149489, 'Nawapenda wote', '2024-05-11', ''),
(8, 811970524865, 'Siwapendi', '2024-05-11', ''),
(9, 811970524865, 'Siwapendi', '2024-05-11', ''),
(10, 811970524865, 'Siwapendi', '2024-05-11', ''),
(11, 811970524865, 'Hi there', '2024-05-16', '');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) NOT NULL,
  `student_id` bigint(20) NOT NULL,
  `class` varchar(10) NOT NULL,
  `stream` varchar(3) NOT NULL,
  `year` varchar(20) NOT NULL,
  `term` varchar(10) NOT NULL,
  `exam_type` varchar(30) NOT NULL,
  `exam_date` varchar(20) NOT NULL,
  `mathematics` decimal(10,0) NOT NULL,
  `kiswahili` decimal(10,0) NOT NULL,
  `civics_and_moral_education` decimal(10,0) NOT NULL,
  `english` decimal(10,0) NOT NULL,
  `social_studies` decimal(10,0) NOT NULL,
  `science` decimal(10,0) NOT NULL,
  `vocation_skills` decimal(10,0) NOT NULL,
  `religion` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `average` decimal(10,0) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `student_id`, `class`, `stream`, `year`, `term`, `exam_type`, `exam_date`, `mathematics`, `kiswahili`, `civics_and_moral_education`, `english`, `social_studies`, `science`, `vocation_skills`, `religion`, `total`, `average`, `position`) VALUES
(99, 4618149489, 'KGT 1', 'A', '2024', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(100, 811970524865, 'STD 3', 'A', '2024', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(101, 4618149489, 'KGT 1', 'A', '2024', 'term1', 'weeklytest', '2024-05-01', 20, 20, 20, 20, 20, 20, 20, 20, 160, 20, 0),
(104, 811970524865, 'STD 3', 'A', '2024', 'term1', 'weeklytest', '2024-05-01', 64, 50, 40, 30, 98, 90, 90, 90, 552, 69, 0),
(105, 811970524865, 'STD 4', 'A', '2025', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(106, 811970524865, 'STD 4', 'A', '2025', 'term1', 'weeklytest', '2024-05-02', 45, 45, 45, 45, 45, 45, 45, 45, 488, 61, 0),
(107, 811970524865, 'STD 3', 'A', '2024', 'term2', 'monthlytest', '2024-05-07', 0, 0, 0, 0, 0, 0, 0, 0, 488, 61, 0),
(108, 811970524865, 'STD 3', 'A', '2024', 'term1', 'monthlytest', '2024-05-04', 0, 0, 0, 0, 0, 0, 0, 0, 488, 61, 0),
(109, 811970524865, 'STD 3', 'A', '2024', 'term1', 'weeklytest', '2024-05-10', 0, 0, 0, 0, 0, 0, 0, 0, 488, 61, 0),
(110, 811970524865, 'STD 3', 'A', '2024', 'term2', 'weeklytest', '2024-05-04', 0, 0, 0, 0, 0, 0, 0, 0, 488, 61, 0),
(111, 811970524865, 'STD 4', 'A', '2025', 'term2', 'weeklytest', '2024-05-01', 0, 0, 0, 0, 0, 0, 0, 0, 488, 61, 0),
(112, 811970524865, 'STD 4', 'A', '2025', 'term1', 'monthlytest', '2024-05-17', 0, 0, 0, 0, 0, 0, 0, 0, 488, 61, 0),
(113, 811970524865, 'STD 4', 'A', '2025', 'term2', 'weeklytest', '2024-05-25', 0, 0, 0, 0, 0, 0, 0, 0, 488, 61, 0),
(114, 811970524865, 'STD 5', 'A', '2026', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(115, 811970524865, 'STD 5', 'A', '2026', 'term1', 'midterm1', '2024-05-01', 0, 0, 0, 0, 0, 0, 0, 0, 488, 61, 0),
(116, 811970524865, 'STD 3', 'A', '2024', 'term2', 'midterm2', '2024-05-01', 60, 70, 80, 50, 0, 0, 0, 0, 488, 61, 0),
(117, 811970524865, 'STD 7', 'B', '2027', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(118, 4618149489, 'STD 3', 'A', '2024', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(119, 811970524865, 'STD 3', 'A', '2024', 'term1', 'monthlytest', '2024-05-10', 34, 75, 45, 85, 57, 83, 34, 90, 503, 63, 0),
(120, 4618149489, 'STD 3', 'A', '2024', 'term1', 'monthlytest', '2024-05-10', 45, 78, 86, 48, 73, 84, 74, 80, 568, 71, 0),
(121, 4618149489, 'KGT 2', 'A', '2024', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(122, 4618149489, 'KGT 2', 'A', '2024', 'term1', 'weeklytest', '2024-05-10', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(123, 7941, 'STD 3', 'A', '2024', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(127, 7941, 'STD 3', 'A', '2024', 'term1', 'monthlytest', '2024-05-10', 89, 89, 68, 87, 57, 100, 97, 94, 681, 85, 0),
(128, 37967848, 'STD 3', 'A', '2024', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(129, 37967848, 'STD 3', 'A', '2024', 'term1', 'monthlytest', '2024-05-10', 76, 98, 86, 87, 98, 87, 78, 76, 686, 86, 0);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) NOT NULL,
  `student_id` bigint(20) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `midllename` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `classs` varchar(7) NOT NULL,
  `yearr` varchar(5) NOT NULL,
  `image` varchar(100) NOT NULL DEFAULT '0',
  `password` varchar(40) NOT NULL,
  `guardian_name` varchar(30) NOT NULL,
  `guardian_lastname` varchar(30) NOT NULL,
  `guardian_type` varchar(20) NOT NULL,
  `guardian_contact` varchar(10) NOT NULL,
  `guardian_image` varchar(100) NOT NULL,
  `enrolled_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_id`, `firstname`, `midllename`, `surname`, `date_of_birth`, `gender`, `classs`, `yearr`, `image`, `password`, `guardian_name`, `guardian_lastname`, `guardian_type`, `guardian_contact`, `guardian_image`, `enrolled_date`) VALUES
(13, 4618149489, 'HAMIDU', 'MOSHI', 'HUSSEIN', '2001-08-09', 'male', 'KGT 1', '2024', 'students_images/IMG-20221030-WA0006.jpg', 'HUSSEIN', 'HAWA', 'SHABANI', 'MOTHER', '0755059972', 'guardians_images/20221110_100224.jpg', '2024-05-05'),
(14, 811970524865, 'ANNAFRIDA', 'JOSEPH', 'NZALI', '2002-12-22', 'female', 'STD 3', '2024', 'students_images/20221104_124131 - Copy.jpg', 'NZALI', 'JOSEPH', 'NZALI', 'FATHER', '0786453217', 'guardians_images/20220813_153335.jpg', '2024-05-05'),
(15, 7941, 'HAWA', 'SHABANI', 'YAGA', '1969-12-06', 'female', 'STD 3', '2024', '0', 'YAGA', 'MOSHI', 'SHABANI', 'FATHER', '0755059972', '', '2024-05-11'),
(16, 37967848, 'ISMAIL', 'MOSHI', 'HUSSEIN', '2024-05-04', 'male', 'STD 3', '2024', '0', 'HUSSEIN', 'HAWA', 'SHABANI', 'MOTHER', '0755059972', '', '2024-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) NOT NULL,
  `teacher_id` int(20) NOT NULL,
  `teacher_name` varchar(30) NOT NULL,
  `teacher_lastname` varchar(30) NOT NULL,
  `teacher_email` varchar(60) NOT NULL,
  `teacher_contacts` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `usertype` varchar(12) NOT NULL,
  `status` varchar(5) NOT NULL,
  `year` varchar(5) NOT NULL,
  `teacher_password` varchar(20) NOT NULL,
  `teacher_image` varchar(50) NOT NULL DEFAULT '0',
  `enrolled_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `teacher_id`, `teacher_name`, `teacher_lastname`, `teacher_email`, `teacher_contacts`, `gender`, `usertype`, `status`, `year`, `teacher_password`, `teacher_image`, `enrolled_date`) VALUES
(1, 2147483647, 'HAMIDU', 'MOSHI', 'alex@gmail.com', '0657418296', 'male', 'KGT 1 C.Teac', 'ON', '2024', 'MOSHI', 'teachers_images/20230128_171451.jpg', '2024-04-16'),
(2, 80672, 'HAWA', 'JUMA', 'mwinyimasola@gmail.com', '0675256261', 'male', 'Academic', '', '2025', 'HAWA', 'teachers_images/IMG-20221024-WA0063.jpg', '2024-04-16'),
(4, 8011513, 'JUMA', 'KARIM', 'hammydax@gmail.com', '0657418291', 'male', 'STD 3 C.Teac', 'ON', '2024', 'KARIM', 'teachers_images/IMG-20221112-WA0017.jpg', '2024-04-22'),
(5, 214748364, 'ALEX', 'ALEX', 'alex@gmail.com', '0657418296', 'male', 'head_master', 'ON', '2024', 'ALEX', '0', '2024-05-16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_relation` (`student_id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gg` (`student_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`id`),
  ADD KEY `firstname` (`firstname`),
  ADD KEY `midllename` (`midllename`),
  ADD KEY `surname` (`surname`),
  ADD KEY `password` (`password`),
  ADD KEY `student_id_2` (`student_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `teacher_id_2` (`teacher_id`),
  ADD KEY `teacher_password` (`teacher_password`),
  ADD KEY `teacher_name` (`teacher_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comment_relation` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `gg` FOREIGN KEY (`student_id`) REFERENCES `students` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
