-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2020 at 04:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

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
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `f_id` varchar(50) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `p_id` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `l_id` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `p_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `leader` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `t_no` varchar(50) NOT NULL,
  `t_name` varchar(50) NOT NULL,
  `t_deadline` varchar(50) NOT NULL,
  `t_priority` varchar(50) NOT NULL,
  `t_status` varchar(50) NOT NULL,
  `l_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `task_user`
--

CREATE TABLE `task_user` (
  `tu_id` varchar(50) NOT NULL,
  `t_id` varchar(50) NOT NULL,
  `u_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` varchar(50) NOT NULL,
  `u_name` varchar(50) NOT NULL,
  `u_pass` varchar(50) NOT NULL,
  `u_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_project`
--

CREATE TABLE `user_project` (
  `up_id` varchar(50) NOT NULL,
  `p_id` varchar(50) NOT NULL,
  `u_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`l_id`),
  ADD KEY `p_id` (`p_id`);

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
  ADD KEY `l_id` (`l_id`);

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
  ADD KEY `p_id` (`p_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `file`
--
ALTER TABLE `file`
  ADD CONSTRAINT `file_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `project` (`p_id`);

--
-- Constraints for table `list`
--
ALTER TABLE `list`
  ADD CONSTRAINT `list_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `project` (`p_id`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`leader`) REFERENCES `user` (`u_id`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`l_id`) REFERENCES `list` (`l_id`);

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
  ADD CONSTRAINT `user_project_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `project` (`p_id`),
  ADD CONSTRAINT `user_project_ibfk_2` FOREIGN KEY (`u_id`) REFERENCES `user` (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
