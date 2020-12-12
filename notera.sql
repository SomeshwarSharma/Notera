-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 06:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notera`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`, `status`) VALUES
(1, 3, 2, 'heyy', '2020-09-26 13:07:47', 0),
(2, 1, 2, 'how are you doing? ?', '2020-09-27 06:30:37', 1),
(3, 2, 3, 'asdas', '2020-09-27 06:37:12', 0),
(4, 3, 2, 'how are you', '2020-09-27 06:37:58', 0),
(5, 3, 2, 'ssup?', '2020-09-28 17:50:21', 0);

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `p_id` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`f_id`, `f_name`, `p_id`, `location`) VALUES
(7, 'dash demo1.txt', '2', 'C:xampp	mpphp9BEA.tmp'),
(8, 'ieee 802.4.txt', '70', 'C:xampp	mpphpD9D3.tmp'),
(9, 'lecturer.txt', '2', 'C:xampp	mpphp674D.tmp'),
(10, 'ideas.txt', '53', 'C:xampp	mpphpBAAA.tmp');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_phone` varchar(255) NOT NULL,
  `j_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `username`, `password`, `u_email`, `u_phone`, `j_desc`) VALUES
(1, 'Someshwar', '$2y$10$24ABadGM7/a/yZvmrMeYO.NXNlUNliMPwQJczv8d06uJp66NUbfwO', 'm@gmail.com', '7986451320', 'DEV/OPS'),
(2, 'Mrudula', '$2y$10$EmUUcwP3pad4f/1BdirsrOF4RrL8/wpnMJCdfQJ4rhvflfaP7AjYS', 'sss@gmail.com', '8764055535', 'DEV/OPS'),
(3, 'Kemmy', '$2y$10$O/7nTKXGsMJKp0N93bqc/OLY7WxrdfFlsb6umrJZ8xuEk.14Vasja', 'k@gmail.com', '04651320987', 'director'),
(4, 'shasuat', '$2y$10$gULe7qDv8.VkV/bPjfj6cueuPfIvYWNzfZBWeLyCmURbaS7F3wxf6', 'st@gmail.com', '84651988879', 'ceo'),
(7, 'pa', '$2y$10$pzamPIB9QvhNs3nz5LgQN.nsDI8gvxWtCyq1f5.SzsYFbHpNN.yiq', 'p@gmail.com', '1234567890', 'teacher'),
(8, 'userfinal', '$2y$10$EGFRe2fO3QPkaUXXic8FYuAJZVxSDmU5kF8MDmB0lfZesT.YPQ/Bm', 'u@gmail.com', '1234567890', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `login_details_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_type` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`login_details_id`, `user_id`, `last_activity`, `is_type`) VALUES
(1, 2, '2020-09-27 06:36:38', 'no'),
(2, 2, '2020-09-27 06:36:38', 'no'),
(3, 2, '2020-09-27 06:36:38', 'no'),
(4, 1, '2020-09-27 06:36:38', 'no'),
(5, 2, '2020-09-27 06:36:38', 'no'),
(6, 3, '2020-09-27 06:36:38', 'no'),
(7, 1, '2020-09-27 06:36:38', 'no'),
(8, 1, '2020-09-27 06:36:38', 'no'),
(9, 1, '2020-09-27 06:36:38', 'no'),
(10, 1, '2020-09-27 06:36:38', 'no'),
(11, 1, '2020-09-27 06:36:38', 'no'),
(12, 1, '2020-09-27 06:36:38', 'no'),
(13, 1, '2020-09-27 06:36:38', 'no'),
(14, 1, '2020-09-27 06:36:38', 'no'),
(15, 1, '2020-09-27 06:36:38', 'no'),
(16, 1, '2020-09-27 06:36:38', 'no'),
(17, 2, '2020-09-27 06:36:38', 'no'),
(18, 2, '2020-09-27 06:36:38', 'no'),
(19, 2, '2020-09-27 06:36:38', 'no'),
(20, 4, '2020-09-27 06:36:38', 'no'),
(21, 2, '2020-09-27 06:36:38', 'no'),
(22, 2, '2020-09-27 06:36:38', 'no'),
(23, 2, '2020-09-27 06:36:38', 'no'),
(24, 2, '2020-09-27 06:36:38', 'no'),
(25, 2, '2020-09-27 06:36:38', 'no'),
(26, 2, '2020-09-27 06:36:38', 'no'),
(27, 2, '2020-09-27 06:36:38', 'no'),
(28, 3, '2020-09-27 06:36:38', 'no'),
(29, 2, '2020-09-27 06:36:38', 'no'),
(30, 1, '2020-09-27 06:36:38', 'no'),
(31, 2, '2020-09-27 06:36:38', 'no'),
(32, 2, '2020-09-27 06:36:38', 'no'),
(33, 3, '2020-09-27 06:36:38', 'no'),
(34, 2, '2020-09-27 07:29:46', 'no'),
(35, 2, '2020-09-27 08:08:13', 'no'),
(36, 2, '2020-09-27 10:53:12', 'no'),
(37, 2, '2020-09-27 12:32:50', 'no'),
(38, 2, '2020-09-27 13:33:07', 'no'),
(39, 2, '2020-09-27 17:16:56', 'no'),
(40, 2, '2020-09-27 17:20:47', 'no'),
(41, 2, '2020-09-27 18:04:18', 'no'),
(42, 2, '2020-09-28 08:55:55', 'no'),
(43, 2, '2020-09-28 12:12:38', 'no'),
(44, 2, '2020-09-28 17:51:41', 'no'),
(45, 3, '2020-09-28 17:51:29', 'no'),
(46, 2, '2020-09-28 18:22:28', 'no'),
(47, 2, '2020-09-29 08:03:02', 'no'),
(48, 2, '2020-10-09 16:10:33', 'no'),
(49, 2, '2020-10-09 16:59:36', 'no'),
(50, 1, '2020-10-09 17:58:29', 'no'),
(51, 2, '2020-10-09 18:06:54', 'no'),
(52, 1, '2020-10-10 04:17:05', 'no'),
(53, 1, '2020-10-10 05:22:52', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `p_id` varchar(50) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `deadline` varchar(50) NOT NULL,
  `priority` varchar(50) NOT NULL,
  `p_status` varchar(50) NOT NULL,
  `leader` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`p_id`, `p_name`, `deadline`, `priority`, `p_status`, `leader`) VALUES
('1', 'Notera', '2020-10-24', 'high', 'incomplete', 1),
('10', 'final project', '2020-10-23', 'high', 'incomplete', 2),
('11', 'spacex', '2020-10-24', 'medium', 'incomplete', 2),
('2', 'tesla', '2019-10-08', 'medium', 'incomplete', 2),
('3', 'kiaaa', '2020-09-24', 'high', 'incomplete', 1),
('53', 'final', '2020-10-25', 'medium', 'incomplete', 2),
('70', 'DBMS', '2020-10-11', 'high', 'incomplete', 3);

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `t_no` varchar(50) NOT NULL,
  `t_name` varchar(50) DEFAULT NULL,
  `t_deadline` date DEFAULT NULL,
  `t_priority` varchar(50) DEFAULT NULL,
  `t_status` varchar(50) DEFAULT NULL,
  `t_aname` varchar(255) DEFAULT NULL,
  `t_desc` varchar(50) DEFAULT NULL,
  `p_id` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`t_no`, `t_name`, `t_deadline`, `t_priority`, `t_status`, `t_aname`, `t_desc`, `p_id`) VALUES
('1', 'asdasd', '2020-09-19', 'medium', 'doing', 'Mrudula', '12312312', '2'),
('10', 'stafing', '2020-09-29', 'low', 'done ', 'someshwar', 'staff the members', '2'),
('11', 'editing', '2020-10-11', 'high', 'doing', 'Mrudula', 'edit the data', '2'),
('12', 'reviewing', '2020-10-10', 'medium', 'to-do', 'Mrudula', 'plan to the depth', '2'),
('13', 'posting', '2021-12-27', 'medium', 'to-do', 'Mrudula', 'delete the task', '3'),
('14', 'Directing', '2020-10-10', 'medium', 'to-do', 'Mrudula', 'direct and manage them', '2'),
('15', 'china', '2020-09-26', 'medium', 'done ', 'Mrudula', '2345678', '3'),
('17', 'final', '2020-09-30', 'medium', 'to-do', 'Mrudula', 'final check', '3'),
('18 ', 'modify', '2020-10-25', 'medium', 'doing', 'someshwar', 'modify the project', '3'),
('19', 'table', '2020-10-24', 'high', 'to-do', 'someshwar', 'add tables', '10'),
('2', 'adding', '2020-10-12', 'high', 'doing', 'someshwar', 'add data ', '2'),
('3', 'editing', '2020-10-11', 'medium', 'done ', 'someshwar', 'edit the data', '3'),
('4', 'Planning', '2020-10-10', 'medium', 'to-do', 'someshwar', 'plan to the depth', '2'),
('5', 'deleting', '2021-12-27', 'medium', 'to-do', 'someshwar', 'delete the task', '3'),
('6', 'nelson', '2020-09-25', 'medium', 'to-do', 'someshwar', 'description', '2'),
('7', 'tushar', '2020-09-18', 'medium', 'to-do', 'someshwar', '12456786', '2'),
('9', 'Create', '2020-10-11', 'medium', 'done ', 'someshwar', 'Create a Project and plan', '2');

-- --------------------------------------------------------

--
-- Table structure for table `task_user`
--

CREATE TABLE `task_user` (
  `tu_id` int(11) NOT NULL,
  `t_id` varchar(50) CHARACTER SET latin1 NOT NULL,
  `u_id` int(11) NOT NULL,
  `tu_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `task_user`
--

INSERT INTO `task_user` (`tu_id`, `t_id`, `u_id`, `tu_name`) VALUES
(2, '1', 2, 'adhaa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_pass` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL,
  `u_phone` varchar(50) NOT NULL,
  `j_desc` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_pass`, `u_email`, `u_phone`, `j_desc`) VALUES
(1, 'Mrudula', 'pass', 'muri@gmail.com', '8765432190', 'CEO'),
(2, 'Someshwar', 'pass', 'ss@gmail.com', '7654321890', 'Director'),
(3, 'Kemmy', 'pass', 'kem@gmail.com', '1234567890', 'agent'),
(4, 'shasuat', 'pass', 'sha@gmail.com ', '3456789012', 'President'),
(6, 'userfinal', '$2y$10$OEAP8VSSfsik1ZgY3lxEo.fdQkLSju9dlP274yPdSr6', 'u@gmail.com', '1234567890', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_project`
--

CREATE TABLE `user_project` (
  `up_id` int(50) NOT NULL,
  `p_id` varchar(50) NOT NULL,
  `u_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_project`
--

INSERT INTO `user_project` (`up_id`, `p_id`, `u_id`) VALUES
(11, '10', 1),
(12, '10', 3),
(13, '10', 4),
(23, '53', 1),
(24, '53', 2),
(25, '2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`),
  ADD KEY `from_user_id` (`from_user_id`),
  ADD KEY `to_user_id` (`to_user_id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_details_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `leader` (`leader`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`t_no`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `task_user`
--
ALTER TABLE `task_user`
  ADD PRIMARY KEY (`tu_id`),
  ADD KEY `t_id` (`t_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `user_project`
--
ALTER TABLE `user_project`
  ADD PRIMARY KEY (`up_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `p_id` (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `task_user`
--
ALTER TABLE `task_user`
  MODIFY `tu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_project`
--
ALTER TABLE `user_project`
  MODIFY `up_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD CONSTRAINT `chat_message_ibfk_1` FOREIGN KEY (`from_user_id`) REFERENCES `login` (`user_id`),
  ADD CONSTRAINT `chat_message_ibfk_2` FOREIGN KEY (`to_user_id`) REFERENCES `login` (`user_id`);

--
-- Constraints for table `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `project` (`p_id`);

--
-- Constraints for table `login_details`
--
ALTER TABLE `login_details`
  ADD CONSTRAINT `login_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `login` (`user_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`leader`) REFERENCES `user` (`u_id`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `project` (`p_id`);

--
-- Constraints for table `task_user`
--
ALTER TABLE `task_user`
  ADD CONSTRAINT `task_user_ibfk_1` FOREIGN KEY (`t_id`) REFERENCES `task` (`t_no`),
  ADD CONSTRAINT `task_user_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`);

--
-- Constraints for table `user_project`
--
ALTER TABLE `user_project`
  ADD CONSTRAINT `user_project_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`),
  ADD CONSTRAINT `user_project_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `project` (`p_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
