-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2025 at 07:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eduqr`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_feedback`
--

CREATE TABLE `course_feedback` (
  `c_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `liked_content` varchar(50) NOT NULL,
  `disliked_content` varchar(50) NOT NULL,
  `relevance` varchar(50) NOT NULL,
  `instructor_knowledge` varchar(50) NOT NULL,
  `instructor_engagement` varchar(50) NOT NULL,
  `liked_instructor` varchar(50) NOT NULL,
  `disliked_instructor` varchar(50) NOT NULL,
  `training_satisfaction` varchar(50) NOT NULL,
  `terms_accepted` tinyint(1) NOT NULL,
  `feedback_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_feedback`
--

INSERT INTO `course_feedback` (`c_id`, `r_id`, `liked_content`, `disliked_content`, `relevance`, `instructor_knowledge`, `instructor_engagement`, `liked_instructor`, `disliked_instructor`, `training_satisfaction`, `terms_accepted`, `feedback_date`) VALUES
(4, 11, 'cdc ', 'deke ckv', 'on', 'on', 'on', 'cddfg befrf', '', 'on', 1, '2024-04-25 13:15:45'),
(5, 11, 'good', 'good', 'on', 'on', 'on', 'goood', '', 'on', 1, '2024-04-25 13:15:45'),
(8, 11, 'WSDEFGRTHYU', 'SFGFG', 'on', 'on', 'on', 'SF', '', 'on', 1, '2024-04-25 13:15:45'),
(9, 11, 'WSDEFGRTHYU', 'SFGFG', 'on', 'on', 'on', 'SF', '', 'on', 1, '2024-04-25 13:15:45'),
(10, 11, 'WSDEFGRTHYU', 'SFGFG', 'on', 'on', 'on', 'SF', '', 'on', 1, '2024-04-25 13:15:45'),
(11, 11, 'sdfghj', 'sfegyju', 'Extremely relevant', 'on', 'on', 'adsfdgfjh', '', 'on', 1, '2024-04-25 13:15:45'),
(12, 11, 'cdc ', 'deke ckv', 'on', 'on', 'on', 'cddfg befrf', '', 'on', 1, '2024-04-25 13:15:45'),
(13, 11, 'xvcbnm', 'fgbgnhmj', 'Moderately relevant', 'Slightly knowledgeable', 'Slightly engaging', 'asdfghj', '', 'Neither satisfied nor dissatisfied', 1, '2024-04-25 13:15:45'),
(14, 11, 'I found the course content to be comprehensive and', 'Lack of depth in certain topics or areas.', 'Slightly relevant', 'Slightly knowledgeable', 'Slightly engaging', 'Clear communication: The instructor effectively co', '', 'Somewhat dissatisfied', 1, '2024-04-25 15:11:02'),
(15, 12, 'gfvhjbn', 'hgjbhnm', 'Slightly relevant', 'Slightly knowledgeable', 'Not engaging at all', 'cyuvbjnk', '', 'Somewhat dissatisfied', 1, '2024-04-26 17:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `event_feedback`
--

CREATE TABLE `event_feedback` (
  `e_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `recommend_likelihood` varchar(100) NOT NULL,
  `event_expectations` varchar(255) NOT NULL,
  `enjoyable_aspects` varchar(255) NOT NULL,
  `value_for_investment` varchar(255) NOT NULL,
  `impactful_sessions` varchar(255) NOT NULL,
  `overall_quality_rating` varchar(20) NOT NULL,
  `marketing_rating` varchar(20) NOT NULL,
  `networking_opportunities` varchar(5) NOT NULL,
  `agreed_terms` tinyint(1) NOT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_feedback`
--

INSERT INTO `event_feedback` (`e_id`, `r_id`, `event_name`, `recommend_likelihood`, `event_expectations`, `enjoyable_aspects`, `value_for_investment`, `impactful_sessions`, `overall_quality_rating`, `marketing_rating`, `networking_opportunities`, `agreed_terms`, `submission_date`) VALUES
(1, 11, 'Kirti', 'scvvvv', 'dxbfgnhmj,', 'ertfgyui', 'Excellent', 'sfgfhghj', 'Average', 'Excellent', 'No', 127, '2024-04-25 13:58:55');

-- --------------------------------------------------------

--
-- Table structure for table `facility_feedback`
--

CREATE TABLE `facility_feedback` (
  `f_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `lacking_resources` varchar(255) NOT NULL,
  `computer_labs_equipment` varchar(255) NOT NULL,
  `facility_issues` varchar(255) NOT NULL,
  `cleanliness_rating` varchar(20) NOT NULL,
  `library_facility_rating` varchar(20) NOT NULL,
  `overall_cleanliness_rating` varchar(20) NOT NULL,
  `suggested_changes` varchar(255) NOT NULL,
  `recommended_resources` varchar(255) NOT NULL,
  `safety_feeling` varchar(5) NOT NULL,
  `agreed_to_terms_and_conditions` tinyint(1) NOT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facility_feedback`
--

INSERT INTO `facility_feedback` (`f_id`, `r_id`, `lacking_resources`, `computer_labs_equipment`, `facility_issues`, `cleanliness_rating`, `library_facility_rating`, `overall_cleanliness_rating`, `suggested_changes`, `recommended_resources`, `safety_feeling`, `agreed_to_terms_and_conditions`, `submission_date`) VALUES
(1, 11, 'sefgrfthgjk', 'sfergtfgy', 'ASFDFGHJKJ', 'Clean', 'Good', 'Clean', 'EFRGJUK', 'WERGTH', 'Yes', 1, '2024-04-25 14:19:46');

-- --------------------------------------------------------

--
-- Table structure for table `instructor_feedback`
--

CREATE TABLE `instructor_feedback` (
  `i_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `engagement_rating` varchar(20) NOT NULL,
  `improvement_areas` varchar(255) NOT NULL,
  `fairness_feedback` varchar(255) NOT NULL,
  `effectiveness_rating` varchar(20) NOT NULL,
  `learning_environment` varchar(5) NOT NULL,
  `liked_about` varchar(255) NOT NULL,
  `disliked_about` varchar(255) NOT NULL,
  `logistics_satisfaction` varchar(20) NOT NULL,
  `agreed_to_terms` tinyint(1) NOT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructor_feedback`
--

INSERT INTO `instructor_feedback` (`i_id`, `r_id`, `engagement_rating`, `improvement_areas`, `fairness_feedback`, `effectiveness_rating`, `learning_environment`, `liked_about`, `disliked_about`, `logistics_satisfaction`, `agreed_to_terms`, `submission_date`) VALUES
(1, 11, 'Not engaging at all', 'zsxdgjhjk', 'sgdhtfgjhkjlj', 'Slightly relevant', 'No', 'setrytfuyiuoi', 'rftgykuhl', 'Very dissatisfied', 1, '2024-04-25 14:30:52'),
(2, 11, 'Not engaging at all', 'fghj,k', 'hjk.m', 'Moderately relevant', 'No', 'xcfbgnhmb', 'dgfhgjhj', 'Very dissatisfied', 1, '2024-04-25 14:31:21');

-- --------------------------------------------------------

--
-- Table structure for table `program_feedback`
--

CREATE TABLE `program_feedback` (
  `p_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `career_services_satisfaction` varchar(20) NOT NULL,
  `course_variety_rating` varchar(20) NOT NULL,
  `collaboration_opportunities` varchar(5) NOT NULL,
  `career_opportunities_rating` varchar(20) NOT NULL,
  `academic_support` varchar(5) NOT NULL,
  `career_preparation_feedback` varchar(255) NOT NULL,
  `overall_career_services_satisfaction` varchar(20) NOT NULL,
  `agreed_to_terms` tinyint(1) NOT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `program_feedback`
--

INSERT INTO `program_feedback` (`p_id`, `r_id`, `career_services_satisfaction`, `course_variety_rating`, `collaboration_opportunities`, `career_opportunities_rating`, `academic_support`, `career_preparation_feedback`, `overall_career_services_satisfaction`, `agreed_to_terms`, `submission_date`) VALUES
(1, 11, 'asdfgh', 'sdfdghj', 'Yes', 'Excellent', 'Yes', 'sfdghj', 'Very satisfied', 1, '2024-04-25 14:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `r_id` int(11) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `course_title` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`r_id`, `f_name`, `email`, `password`, `course_title`, `reg_date`) VALUES
(1, '', '', '', '', '2024-04-22 12:16:26'),
(2, 'Trupti', 'trupti@gmail.com', 'Trupti', '', '2024-04-22 12:17:07'),
(7, 'Harshida', 'harshida@gmail.com', 'harshida', '', '2024-04-22 17:39:39'),
(8, 'Mitali', 'mitali@gmail.com', 'mitali', '', '2024-04-22 18:07:47'),
(9, 'Savita', 'savita@gmail.com', 'savita', '', '2024-04-23 15:48:09'),
(10, 'Kadilkar Trupti Madanbhai', 'trupti123@gmail.com', '$2y$10$w0MUfTqHJ3yik', 'B.Tech', '2024-04-25 11:10:39'),
(11, 'Harshida123', 'harshida123@gmail.com', 'harshida123', 'B.Tech', '2024-04-25 11:13:31'),
(12, 'Savita Chaudhary', 'savita123@gmail.com', 'savita', 'B.Tech', '2024-04-26 17:12:07');

-- --------------------------------------------------------

--
-- Table structure for table `student_feedback`
--

CREATE TABLE `student_feedback` (
  `s_id` int(11) NOT NULL,
  `r_id` int(11) NOT NULL,
  `expectations` varchar(255) NOT NULL,
  `likelihood_to_recommend` varchar(255) NOT NULL,
  `tutoring_rating` varchar(20) NOT NULL,
  `utilized_services` varchar(255) NOT NULL,
  `impactful_sessions` varchar(255) NOT NULL,
  `success_contribution` varchar(5) NOT NULL,
  `advising_rating` varchar(20) NOT NULL,
  `additional_requested` varchar(5) NOT NULL,
  `agreed_terms` tinyint(1) NOT NULL,
  `submission_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_feedback`
--

INSERT INTO `student_feedback` (`s_id`, `r_id`, `expectations`, `likelihood_to_recommend`, `tutoring_rating`, `utilized_services`, `impactful_sessions`, `success_contribution`, `advising_rating`, `additional_requested`, `agreed_terms`, `submission_date`) VALUES
(1, 11, 'sfgfhgjhk', 'efrtghyjuhk', 'Good', 'rtghyui', 'ffghjkl', 'Yes', '', 'Good', 1, '2024-04-25 15:05:05'),
(2, 11, 'sfgfhgjhk', 'efrtghyjuhk', 'Good', 'rtghyui', 'ffghjkl', 'Yes', '', 'Good', 1, '2024-04-25 15:07:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_feedback`
--
ALTER TABLE `course_feedback`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `event_feedback`
--
ALTER TABLE `event_feedback`
  ADD PRIMARY KEY (`e_id`),
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `facility_feedback`
--
ALTER TABLE `facility_feedback`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `instructor_feedback`
--
ALTER TABLE `instructor_feedback`
  ADD PRIMARY KEY (`i_id`),
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `program_feedback`
--
ALTER TABLE `program_feedback`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`r_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `student_feedback`
--
ALTER TABLE `student_feedback`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `r_id` (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_feedback`
--
ALTER TABLE `course_feedback`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `event_feedback`
--
ALTER TABLE `event_feedback`
  MODIFY `e_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `facility_feedback`
--
ALTER TABLE `facility_feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `instructor_feedback`
--
ALTER TABLE `instructor_feedback`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `program_feedback`
--
ALTER TABLE `program_feedback`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student_feedback`
--
ALTER TABLE `student_feedback`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_feedback`
--
ALTER TABLE `course_feedback`
  ADD CONSTRAINT `course_feedback_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `signup` (`r_id`);

--
-- Constraints for table `event_feedback`
--
ALTER TABLE `event_feedback`
  ADD CONSTRAINT `event_feedback_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `signup` (`r_id`);

--
-- Constraints for table `facility_feedback`
--
ALTER TABLE `facility_feedback`
  ADD CONSTRAINT `facility_feedback_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `signup` (`r_id`);

--
-- Constraints for table `instructor_feedback`
--
ALTER TABLE `instructor_feedback`
  ADD CONSTRAINT `instructor_feedback_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `signup` (`r_id`);

--
-- Constraints for table `program_feedback`
--
ALTER TABLE `program_feedback`
  ADD CONSTRAINT `program_feedback_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `signup` (`r_id`);

--
-- Constraints for table `student_feedback`
--
ALTER TABLE `student_feedback`
  ADD CONSTRAINT `student_feedback_ibfk_1` FOREIGN KEY (`r_id`) REFERENCES `signup` (`r_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
