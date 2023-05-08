-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 08, 2023 at 11:57 AM
-- Server version: 5.7.42
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `devigiapp_afrebay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userId` bigint(20) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `profile` varchar(255) NOT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `edited` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` smallint(6) DEFAULT '1' COMMENT '1(Active), 0(Deactive)'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userId`, `name`, `username`, `email`, `password`, `profile`, `created`, `edited`, `status`) VALUES
(1, 'Super Admin', 'admin', 'test@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '', '2018-06-19 02:01:31', '2021-12-07 00:49:51', 1);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_scheduling`
--

CREATE TABLE `appointment_scheduling` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `event_date` date NOT NULL,
  `start_time` time DEFAULT NULL,
  `end_time` time DEFAULT NULL,
  `description` text NOT NULL,
  `event_color` varchar(50) NOT NULL,
  `event_icon` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointment_scheduling`
--

INSERT INTO `appointment_scheduling` (`id`, `user_id`, `event_name`, `event_date`, `start_time`, `end_time`, `description`, `event_color`, `event_icon`, `created_date`, `update_date`) VALUES
(1, 18, 'Birthday', '2021-11-19', '00:00:00', '00:00:00', 'Hello world', 'fc-bg-default', 'circle', '2021-11-19 12:03:16', '2021-11-19 06:33:16'),
(2, 18, 'Test GOIGI', '2021-11-30', '00:00:00', '00:00:00', 'Testing appoinment', 'fc-bg-blue', 'group', '2021-11-19 12:13:11', '2021-11-19 06:43:11'),
(3, 18, 'Justin Dawson', '2021-11-27', '00:00:00', '00:00:00', 'Aut est maiores exe', 'fc-bg-lightgreen', 'calendar', '2021-11-19 12:37:33', '2021-11-19 07:07:33'),
(4, 18, 'Metting', '2021-11-06', '06:30:00', '08:30:00', '', 'fc-bg-default', 'circle', '2021-11-19 13:10:10', '2021-11-19 07:40:10'),
(5, 18, 'Video calling', '2021-11-22', '15:07:00', '09:07:00', '', 'fc-bg-default', 'circle', '2021-11-20 09:38:26', '2021-11-20 04:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `heading`, `image`, `status`, `created_date`, `update_date`) VALUES
(1, 'Header Banner', '8859_2523_01.jpg', 'Active', '2022-01-06 10:10:26', '2023-04-29 13:11:02'),
(2, 'Search Result', '9049_mslider3.jpg', 'Active', '2022-01-06 10:24:31', '2022-01-06 04:54:31'),
(3, 'About us', '9847_mslider1.jpg', 'Active', '2022-01-06 10:26:55', '2022-01-06 05:30:28'),
(4, 'contact us', '6143_mslider3.jpg', 'Active', '2022-01-06 10:29:11', '2022-01-06 04:59:11'),
(5, 'Employer', '3124_mslider1.jpg', 'Active', '2022-01-06 10:32:19', '2022-01-06 05:02:19'),
(6, 'Worker', '5348_mslider3.jpg', 'Active', '2022-01-06 10:32:56', '2022-01-06 05:02:56'),
(7, 'Our job', '3755_mslider1.jpg', 'Active', '2022-01-06 10:35:48', '2022-01-06 05:05:48'),
(8, 'Post job', '5570_mslider1.jpg', 'Active', '2022-01-06 10:36:54', '2022-01-06 05:06:54'),
(9, 'Login', '259_mslider1.jpg', 'Active', '2022-01-06 10:37:43', '2022-01-06 05:07:43'),
(10, 'Sign up', '6373_mslider3.jpg', 'Active', '2022-01-06 10:38:19', '2022-01-06 05:08:19'),
(11, 'pricing', '536_mslider1.jpg', 'Active', '2022-01-06 10:39:31', '2022-01-06 05:09:31'),
(12, 'Privacy policy', '3353_mslider1.jpg', 'Active', '2022-01-06 10:40:46', '2022-01-06 05:10:46'),
(13, 'Term and conditions', '9710_mslider3.jpg', 'Active', '2022-01-06 10:42:13', '2022-01-06 05:12:13'),
(14, 'Post Detail', '2800_mslider3.jpg', 'Active', '2022-01-06 10:46:55', '2022-01-06 05:16:55'),
(15, 'Employer Detail', '9892_mslider1.jpg', 'Active', '2022-01-06 10:47:32', '2022-01-06 05:17:32'),
(16, 'Worker Detail', '7704_mslider3.jpg', 'Active', '2022-01-06 10:48:06', '2022-01-06 05:18:06');

-- --------------------------------------------------------

--
-- Table structure for table `career_tips`
--

CREATE TABLE `career_tips` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` enum('Active','inactive') NOT NULL DEFAULT 'Active',
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `career_tips`
--

INSERT INTO `career_tips` (`id`, `title`, `image`, `description`, `status`, `created_date`, `update_date`) VALUES
(1, 'Attract More Attention Sales And Profits', '1651_b1.jpg', '<p>A job is a regular activity performed in exchange becoming an employee, volunteering,</p>\r\n', 'Active', '2021-12-15 10:18:18', '2021-12-15 03:48:18'),
(2, '11 Tips to Help You Get New Clients', '8143_b2.jpg', '<p>A job is a regular activity performed in exchange becoming an employee, volunteering, A job is a regular activity performed in exchange becoming an employee, volunteering,</p>\r\n', 'Active', '2021-12-15 10:19:27', '2021-12-15 03:49:27'),
(3, 'An Overworked Newspaper Editor45', '6730_b3.jpg', '<p>A job is a regular activity performed in exchange becoming an employee, volunteering,</p>\r\n', 'Active', '2021-12-15 10:21:21', '2021-12-15 03:56:23');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_image` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_date` datetime DEFAULT NULL,
  `update_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `category_image`, `status`, `created_date`, `update_date`) VALUES
(1, 'Residential', '', 'Active', '2021-10-04 13:35:40', '2021-10-04 08:05:40'),
(2, 'Commercial', '', 'Active', '2021-10-04 13:35:55', '2021-10-04 08:05:55'),
(3, 'Virtual', '', 'Active', '2021-10-04 13:36:02', '2021-10-04 08:06:02'),
(4, 'Services', '', 'Active', '2021-10-04 13:36:11', '2021-10-04 08:06:11'),
(5, 'Demo', '', 'Active', '2023-04-29 13:05:41', '2023-04-29 13:05:41');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `userfrom_id` int(11) NOT NULL,
  `userto_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `attachment` text NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `userfrom_id`, `userto_id`, `message`, `attachment`, `created_date`) VALUES
(2, 18, 11, 'hello wolrd', '', '2021-11-22 13:32:39'),
(3, 18, 11, 'how are you', '', '2021-11-22 13:34:01'),
(4, 18, 11, 'hhsad', '', '2021-11-23 05:07:20'),
(11, 11, 18, 'hello sir', '', '2021-11-23 09:15:14'),
(12, 11, 18, 'hello', '', '2021-11-24 04:53:36'),
(13, 18, 11, 'What about the project', '', '2021-11-24 04:54:13'),
(14, 11, 18, 'i am working on that', '', '2021-11-24 04:54:36'),
(15, 18, 11, 'bhfds', '', '2021-11-24 12:15:52'),
(16, 18, 11, 'bdhsbf', '', '2021-11-24 12:15:54'),
(17, 18, 11, 'hfhff', '', '2021-11-24 12:50:55'),
(18, 18, 11, 'hasnnfs', '', '2021-11-24 13:11:57'),
(19, 32, 31, 'Hello', '', '2023-05-03 09:46:36'),
(20, 31, 32, 'Hi', '', '2023-05-03 09:46:42');

-- --------------------------------------------------------

--
-- Table structure for table `company_logo`
--

CREATE TABLE `company_logo` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `created_date` datetime NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company_logo`
--

INSERT INTO `company_logo` (`id`, `name`, `logo`, `created_date`, `status`, `update_date`) VALUES
(1, 'webteck', '7634_cc1.jpg', '2021-12-15 08:50:14', 'Active', '2021-12-15 02:20:14'),
(2, 'infiteck', '2908_cc2.jpg', '2021-12-15 08:54:00', 'Active', '2021-12-15 02:24:00'),
(3, 'coffes', '4550_cc3.jpg', '2021-12-15 08:54:22', 'Active', '2021-12-15 02:24:22'),
(4, 'ovals', '2730_cc4.jpg', '2021-12-15 08:54:43', 'Active', '2021-12-15 02:24:43'),
(5, 'symmtek4', '5172_cc5.jpg', '2021-12-15 08:55:07', 'Active', '2021-12-15 02:37:42');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `created_date`, `update_date`) VALUES
(1, 'Amit', 'test@gmail.com', 'Test Demo', '', NULL, '2021-09-22 06:04:18'),
(2, 'Suresh', 'suru@gmail.comm', 'Demo', '', NULL, '2021-09-22 06:07:27'),
(3, 'Test', 'tset34@gmail.com', 'ffgfh', 'gyutyghg', NULL, '2021-09-22 06:10:35'),
(4, 'Amit', 'maskareamit@gmail.com', 'Test', 'Hello', NULL, '2021-09-22 07:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `email_template`
--

CREATE TABLE `email_template` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `signature` varchar(50) NOT NULL,
  `creaded_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email_template`
--

INSERT INTO `email_template` (`id`, `title`, `description`, `signature`, `creaded_date`, `update_date`) VALUES
(1, 'Add user', '<h3>{logo}</h3>\n\n<p>Login Details</p>\n\n<p>Hello {client_name},</p>\n\n<p>We have created new account for you to manage your quotations and orders from our website.</p>\n\n<p>Your credentials are:</p>\n\n<pre>\nSite Link: {site_link}\nUsername: {email}\nPassword: {password}\n</pre>\n\n<p> </p>\n\n<p>Best regards,<br>\n{site_name}</p>\n', 'Thanks and Regards', '2022-01-03 15:45:18', '2022-01-04 01:50:39'),
(2, 'Forgot password', '<h3>{logo}</h3>\n\n<p>Forgot Password?</p>\n\n<p>Hello {user_name},</p>\n\n<p>We have received the request to reset your password of {email} for {site_name} and have created the reset password link.</p>\n\n<p>{reset_password_link}</p>\n\n<p>Please click the above link to reset your password. If you have not requested the reset. Please ignore this email.</p>\n\n<p>Best regards,<br>\n{site_name}</p>\n', '', '2022-01-03 15:45:18', '2022-01-04 01:25:39'),
(3, 'Payment', '<h3>{logo}</h3>\n\n<p>Payment Details</p>\n\n<p>Hello {contact_person} ({company}),</p>\n\n<p>Payment for order ({reference_number}) has been added. Please visit {site_link} to manage your orders.</p>\n\n<p>Best regards,<br>\n{site_name}</p>\n', 'Thanks', '2022-01-03 15:47:03', '2022-01-04 01:50:48');

-- --------------------------------------------------------

--
-- Table structure for table `employer_profile`
--

CREATE TABLE `employer_profile` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `location` varchar(100) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `type` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employer_rating`
--

CREATE TABLE `employer_rating` (
  `id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `review` text NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_rating`
--

INSERT INTO `employer_rating` (`id`, `worker_id`, `employer_id`, `rating`, `subject`, `review`, `created_date`, `update_date`) VALUES
(2, 9, 18, '2', 'gt', 'jhs', '2021-12-20 14:07:24', '2021-12-20 07:37:24'),
(3, 9, 18, '2', 'rating', 'cdfds', '2021-12-20 14:09:02', '2021-12-20 07:39:02'),
(4, 9, 18, '3', 'gtd', 'dsbdsa', '2021-12-20 14:09:22', '2021-12-20 07:39:22'),
(5, 10, 18, '4', 'ratd', 'sd', '2021-12-21 07:11:07', '2021-12-21 00:45:58'),
(6, 10, 18, '4', 'Test Demo', 'get', '2021-12-21 07:15:46', '2021-12-21 00:45:46'),
(7, 14, 18, '3', 'tey', 'dhdd', '2021-12-21 07:16:21', '2021-12-21 00:46:21'),
(8, 14, 18, '4', 'jghdghd', 'bhdghfd', '2021-12-21 07:16:31', '2021-12-21 00:46:31'),
(9, 14, 18, '2', 'hghghgf', 'hbwhbd', '2021-12-21 07:16:40', '2021-12-21 00:46:40'),
(10, 9, 18, '3', 'gvgd', 'dbhsbd', '2021-12-21 07:17:08', '2021-12-21 00:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `employer_services`
--

CREATE TABLE `employer_services` (
  `id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_services`
--

INSERT INTO `employer_services` (`id`, `employer_id`, `service_name`, `category_id`, `subcategory_id`, `description`, `created_date`, `modified_date`) VALUES
(2, 11, 'Plumbing', 1, 9, 'Hell world', '2021-10-12 14:38:11', '2021-10-12 07:08:11'),
(3, 18, 'Servicepaid', 1, 5, 'Description is the pattern of narrative development that aims to make vivid a place, object, character, or group. Description is one of four rhetorical modes, ', '2021-10-12 13:42:43', '2021-10-12 08:13:25'),
(5, 13, 'Computer', 1, 6, 'Hell', '2021-10-30 06:11:55', '2021-10-30 00:41:55'),
(6, 32, 'Demo Category', 5, 36, 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.', '2023-05-01 10:21:02', '2023-05-01 10:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `employer_subscription`
--

CREATE TABLE `employer_subscription` (
  `id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `subscription_id` int(11) NOT NULL,
  `name_of_card` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` float NOT NULL,
  `payment_status` enum('pending','succeeded') NOT NULL,
  `transaction_id` varchar(100) NOT NULL,
  `payment_date` datetime NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer_subscription`
--

INSERT INTO `employer_subscription` (`id`, `employer_id`, `subscription_id`, `name_of_card`, `email`, `amount`, `payment_status`, `transaction_id`, `payment_date`, `created_date`) VALUES
(5, 11, 1, '', '', 100, 'pending', '0', '0000-00-00 00:00:00', '2021-10-12 00:00:00'),
(6, 11, 3, '', '', 1000, 'pending', '0', '0000-00-00 00:00:00', '2021-10-12 00:00:00'),
(7, 11, 4, '', '', 4000, 'pending', '0', '0000-00-00 00:00:00', '2021-10-12 00:00:00'),
(8, 18, 1, '', '', 100, 'pending', '0', '0000-00-00 00:00:00', '2021-10-12 13:43:59'),
(9, 18, 2, '', '', 1000, 'pending', '0', '0000-00-00 00:00:00', '2021-11-03 05:52:52'),
(10, 2, 2, 'igi', 'igi@gmail.com', 2, 'succeeded', 'txn_3JtQDmHRpncDkqMX0LZTK3yE', '2021-11-08 05:16:43', '2021-11-08 05:16:43'),
(11, 18, 2, 'Amit Maskare', 'maskareamit@gmail.com', 2, 'succeeded', 'txn_3KET4wHRpncDkqMX1aCKiRIi', '2022-01-05 06:34:35', '2022-01-05 06:34:35'),
(12, 27, 2, 'Amit maskare', 'maskareamit@gmail.com', 2, 'succeeded', 'txn_3KEVrgHRpncDkqMX0CR367xg', '2022-01-05 09:33:05', '2022-01-05 09:33:05');

-- --------------------------------------------------------

--
-- Table structure for table `friends_video`
--

CREATE TABLE `friends_video` (
  `video_id` int(11) NOT NULL,
  `publisher_id` int(11) NOT NULL,
  `subscription_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends_video`
--

INSERT INTO `friends_video` (`video_id`, `publisher_id`, `subscription_id`, `status`, `created_date`) VALUES
(1, 18, 11, 1, '2021-12-28 13:43:20'),
(2, 18, 11, 1, '2021-12-28 13:49:34'),
(3, 18, 11, 1, '2021-12-28 14:00:40'),
(4, 18, 11, 0, '2021-12-29 13:26:18'),
(5, 18, 17, 0, '2021-12-29 13:26:37'),
(6, 18, 11, 0, '2022-01-10 10:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `job_bid`
--

CREATE TABLE `job_bid` (
  `id` int(11) NOT NULL,
  `postjob_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `bid_amount` float NOT NULL,
  `email` varchar(100) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `description` text NOT NULL,
  `bidding_status` varchar(30) NOT NULL DEFAULT 'Pending',
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_bid`
--

INSERT INTO `job_bid` (`id`, `postjob_id`, `user_id`, `bid_amount`, `email`, `duration`, `phone`, `description`, `bidding_status`, `status`, `created_date`) VALUES
(1, 1, 11, 0, '', '3 month', 25600, 'Description is the pattern of narrative development that aims to make vivid a place, object, character, or group. Description is one of four rhetorical modes, along with exposition, argumentation,', 'Accept', 'Active', '2021-11-08 09:52:53'),
(6, 1, 14, 25000, 'ak@gmail.com', '5 month', 8877445566, '', 'Pending', 'Active', '2021-11-24 10:28:02'),
(7, 5, 14, 456000, 'Amit@gmail.com', '8 month', 878784545, '', 'Pending', 'Active', '2021-11-24 11:28:39'),
(8, 7, 17, 1400, 'Suresh@gmail.com', '1 Month', 7758468941, 'specifies what to do with the top/bottom edges of the content.', 'Accept', 'Active', '2021-11-24 13:22:34'),
(3, 1, 14, 1000, 'atul@gmail.com', '3 month', 15000, 'I need to find the right person to work with and then I can give you more information', 'Reject', 'Active', '2021-11-17 11:34:54'),
(5, 1, 14, 2500, 'ak@gmail.com', '3 month', 25000, '', 'Pending', 'Active', '2021-11-24 06:01:58'),
(9, 7, 16, 15000, 'John@gmail.com', '1.6 Month', 7788994411, '', 'Reject', 'Active', '2021-11-24 13:36:52'),
(10, 11, 31, 20000, 'sayantan@gmail.com', '1', 9876543211, '', 'Pending', 'Active', '2023-05-01 10:06:10'),
(11, 11, 32, 20000, 'employers@gmail.com', '1', 9876543212, '', 'Pending', 'Active', '2023-05-01 10:22:40'),
(12, 13, 31, 10000, 'sayantan@gmail.com', '3 month', 7878787870, 'test', 'Accept', 'Active', '2023-05-03 09:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `live_videos`
--

CREATE TABLE `live_videos` (
  `liveId` bigint(20) NOT NULL,
  `sessionId` text COLLATE utf8mb4_unicode_ci,
  `tokenId` text COLLATE utf8mb4_unicode_ci,
  `broadcastNumber` text COLLATE utf8mb4_unicode_ci,
  `senderId` int(11) DEFAULT NULL,
  `receiverId` int(11) DEFAULT NULL,
  `videoUrl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `startSession` datetime DEFAULT NULL,
  `endSession` datetime DEFAULT NULL,
  `notification` tinyint(4) NOT NULL DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1-Active 0-Inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `live_videos`
--

INSERT INTO `live_videos` (`liveId`, `sessionId`, `tokenId`, `broadcastNumber`, `senderId`, `receiverId`, `videoUrl`, `startSession`, `endSession`, `notification`, `created`, `status`) VALUES
(1, '2_MX40NzM4NDM3MX5-MTY0MDU5ODU3NDQ5OX5NNG5PaGJuMW9TdUdCc2ZoSjdZQWRpV3V-fg', 'T1==cGFydG5lcl9pZD00NzM4NDM3MSZzaWc9N2E2ZTdhNzE3Yzk5NDg4YWFmOTE3MWU5MGNjMmMxZGFkYzBmZGFiYTpzZXNzaW9uX2lkPTJfTVg0ME56TTRORE0zTVg1LU1UWTBNRFU1T0RVM05EUTVPWDVOTkc1UGFHSnVNVzlUZFVkQ2MyWm9TamRaUVdScFYzVi1mZyZjcmVhdGVfdGltZT0xNjQwNTk4NTcxJnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NDA1OTg1NzEuMjQ5NjE4MjI0NTQ2NjkmZXhwaXJlX3RpbWU9MTY0MTIwMzM3MSZjb25uZWN0aW9uX2RhdGE9bmFtZSUzREpvaG5ueSZpbml0aWFsX2xheW91dF9jbGFzc19saXN0PWZvY3Vz', 'Gigwork3C4B8D98', 18, 11, NULL, '2021-12-27 09:49:31', NULL, 0, '2021-12-27 09:49:31', 1),
(2, '2_MX40NzM4NDM3MX5-MTY0MDU5ODYxOTM5OX5VcUlMM2M2azVUZVgrK2pNUHBpRUFXOVp-fg', 'T1==cGFydG5lcl9pZD00NzM4NDM3MSZzaWc9NmIzNjJjMjBmZDI2ZmE5NjY2MjcxMzc4ZTA4NzJmYjY3NjRiMTJmNjpzZXNzaW9uX2lkPTJfTVg0ME56TTRORE0zTVg1LU1UWTBNRFU1T0RZeE9UTTVPWDVWY1VsTU0yTTJhelZVWlZncksycE5VSEJwUlVGWE9WcC1mZyZjcmVhdGVfdGltZT0xNjQwNTk4NjE2JnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NDA1OTg2MTYuMTQ0OTExODA1OTEwMTkmZXhwaXJlX3RpbWU9MTY0MTIwMzQxNiZjb25uZWN0aW9uX2RhdGE9bmFtZSUzREpvaG5ueSZpbml0aWFsX2xheW91dF9jbGFzc19saXN0PWZvY3Vz', 'Gigwork4BC9DB57', 18, 11, NULL, '2021-12-27 09:50:16', NULL, 0, '2021-12-27 09:50:16', 1),
(3, '1_MX40NzM4NDM3MX5-MTY0MDU5OTU4NDEzMX5ySVZUSGVhNFRRWSs4SGoxQzJaajR4QVd-fg', 'T1==cGFydG5lcl9pZD00NzM4NDM3MSZzaWc9MGZkMGRlZjg2NWM5ODBhY2Q5MGQ1NzA2OGU0YzE1ZGQ5MzE0N2YxMjpzZXNzaW9uX2lkPTFfTVg0ME56TTRORE0zTVg1LU1UWTBNRFU1T1RVNE5ERXpNWDV5U1ZaVVNHVmhORlJSV1NzNFNHb3hRekphYWpSNFFWZC1mZyZjcmVhdGVfdGltZT0xNjQwNTk5NTgwJnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NDA1OTk1ODAuODMzNzIxMzA5MDEyMTEmZXhwaXJlX3RpbWU9MTY0MTIwNDM4MCZjb25uZWN0aW9uX2RhdGE9bmFtZSUzREpvaG5ueSZpbml0aWFsX2xheW91dF9jbGFzc19saXN0PWZvY3Vz', 'GigworkA8DD36B1', 18, 11, NULL, '2021-12-27 10:06:20', NULL, 0, '2021-12-27 10:06:20', 1),
(4, '1_MX40NzM4NDM3MX5-MTY0MDU5OTczNzMxM35JZVRSZHB1TWlMK3JIcFJ2U3ZTV3hxdkN-fg', 'T1==cGFydG5lcl9pZD00NzM4NDM3MSZzaWc9NzcyMjI5ODczMDFmZWYzOTkwMTUwZjVjYjNmOTkwZWE1NTg4MDIzMjpzZXNzaW9uX2lkPTFfTVg0ME56TTRORE0zTVg1LU1UWTBNRFU1T1Rjek56TXhNMzVKWlZSU1pIQjFUV2xNSzNKSWNGSjJVM1pUVjNoeGRrTi1mZyZjcmVhdGVfdGltZT0xNjQwNTk5NzM0JnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NDA1OTk3MzQuMDgyMjE5MzM0MjM0MjkmZXhwaXJlX3RpbWU9MTY0MTIwNDUzNCZjb25uZWN0aW9uX2RhdGE9bmFtZSUzREpvaG5ueSZpbml0aWFsX2xheW91dF9jbGFzc19saXN0PWZvY3Vz', 'Gigwork1D845C24', 18, 11, NULL, '2021-12-27 10:08:54', NULL, 0, '2021-12-27 10:08:54', 1),
(5, '1_MX40NzM4NDM3MX5-MTY0MDYwMDAyMzIxMn4rNTNsOFVFWmlYQTJHTjVmQjY1MDdGYyt-fg', 'T1==cGFydG5lcl9pZD00NzM4NDM3MSZzaWc9MDJmMGEwNzgyOTllOWYyOTIzZWVhZjc5ZDM5NTIyZTAwNDMzYTYzMDpzZXNzaW9uX2lkPTFfTVg0ME56TTRORE0zTVg1LU1UWTBNRFl3TURBeU16SXhNbjRyTlROc09GVkZXbWxZUVRKSFRqVm1RalkxTURkR1l5dC1mZyZjcmVhdGVfdGltZT0xNjQwNjAwMDE5JnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NDA2MDAwMTkuODk1Nzk2NzU5MjAyMyZleHBpcmVfdGltZT0xNjQxMjA0ODE5JmNvbm5lY3Rpb25fZGF0YT1uYW1lJTNESm9obm55JmluaXRpYWxfbGF5b3V0X2NsYXNzX2xpc3Q9Zm9jdXM=', 'Gigwork2B673BBA', 18, 11, NULL, '2021-12-27 10:13:39', NULL, 0, '2021-12-27 10:13:39', 1),
(6, '2_MX40NzM4NDM3MX5-MTY0MDYwMTU1MjU4Mn5VQ1Y3VVkxSHd5ckZZZGJ2bWI1TEIyTm5-fg', 'T1==cGFydG5lcl9pZD00NzM4NDM3MSZzaWc9ZWY3NTIzODAzMjgzZjAwNjY3ODM2ZTVjZGM2ODdlN2Q5YzYwYTVjYzpzZXNzaW9uX2lkPTJfTVg0ME56TTRORE0zTVg1LU1UWTBNRFl3TVRVMU1qVTRNbjVWUTFZM1ZWa3hTSGQ1Y2taWlpHSjJiV0kxVEVJeVRtNS1mZyZjcmVhdGVfdGltZT0xNjQwNjAxNTQ5JnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NDA2MDE1NDkuMjY3NDEzNzUzNCZleHBpcmVfdGltZT0xNjQxMjA2MzQ5JmNvbm5lY3Rpb25fZGF0YT1uYW1lJTNESm9obm55JmluaXRpYWxfbGF5b3V0X2NsYXNzX2xpc3Q9Zm9jdXM=', 'Gigwork515B652A', 18, 11, NULL, '2021-12-27 10:39:09', NULL, 0, '2021-12-27 10:39:09', 1),
(7, '2_MX40NzM4NDM3MX5-MTY0MDYwMjgzMDEzNH5uNjVXYkN2TzFXS1dKL2JZNGZQZW04VWR-fg', 'T1==cGFydG5lcl9pZD00NzM4NDM3MSZzaWc9Y2MxMDY0MDU5ZTU5NGFiZTUwNWUxYzFmZGMzOGVmZmIzOWZhZDMyZDpzZXNzaW9uX2lkPTJfTVg0ME56TTRORE0zTVg1LU1UWTBNRFl3TWpnek1ERXpOSDV1TmpWWFlrTjJUekZYUzFkS0wySlpOR1pRWlcwNFZXUi1mZyZjcmVhdGVfdGltZT0xNjQwNjAyODI2JnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NDA2MDI4MjYuNzYxNDY3MzI1OTQzNiZleHBpcmVfdGltZT0xNjQxMjA3NjI2JmNvbm5lY3Rpb25fZGF0YT1uYW1lJTNESm9obm55JmluaXRpYWxfbGF5b3V0X2NsYXNzX2xpc3Q9Zm9jdXM=', 'Gigwork4A577711', 18, 11, NULL, '2021-12-27 11:00:26', NULL, 0, '2021-12-27 11:00:26', 1),
(8, '1_MX40NzM4NDM3MX5-MTY0MDYwMzM1MzI3Nn5qbGZQTDVFbXd6d21rQVBiRm93Rnk0TjZ-fg', 'T1==cGFydG5lcl9pZD00NzM4NDM3MSZzaWc9YjQyZGYwMTA5NjhiZWI0MWMxMDc0MzFhN2RlNzgzNzliMzVkNDRkNDpzZXNzaW9uX2lkPTFfTVg0ME56TTRORE0zTVg1LU1UWTBNRFl3TXpNMU16STNObjVxYkdaUVREVkZiWGQ2ZDIxclFWQmlSbTkzUm5rMFRqWi1mZyZjcmVhdGVfdGltZT0xNjQwNjAzMzQ5JnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NDA2MDMzNDkuODAwNDE0NTQ5MTEzJmV4cGlyZV90aW1lPTE2NDEyMDgxNDkmY29ubmVjdGlvbl9kYXRhPW5hbWUlM0RKb2hubnkmaW5pdGlhbF9sYXlvdXRfY2xhc3NfbGlzdD1mb2N1cw==', 'Gigwork18327549', 18, 11, NULL, '2021-12-27 11:09:09', NULL, 0, '2021-12-27 11:09:09', 1),
(9, '2_MX40NzM4NDM3MX5-MTY0MDYwMzQwNDY1Nn5FUHljcmpjQ2tUL1ZNa0kxWWNjdjF3a3V-fg', 'T1==cGFydG5lcl9pZD00NzM4NDM3MSZzaWc9ZTZjMzZjMDAxYzE4NGU1ZGE4ZTM5ODM1Njg3MjI3MTY0NjU3ZmM5NzpzZXNzaW9uX2lkPTJfTVg0ME56TTRORE0zTVg1LU1UWTBNRFl3TXpRd05EWTFObjVGVUhsamNtcGpRMnRVTDFaTmEwa3hXV05qZGpGM2EzVi1mZyZjcmVhdGVfdGltZT0xNjQwNjAzNDAxJnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NDA2MDM0MDEuMTc4MTEwOTQ2OTkzNDEmZXhwaXJlX3RpbWU9MTY0MTIwODIwMSZjb25uZWN0aW9uX2RhdGE9bmFtZSUzREpvaG5ueSZpbml0aWFsX2xheW91dF9jbGFzc19saXN0PWZvY3Vz', 'Gigwork1B4281D8', 18, 11, NULL, '2021-12-27 11:10:01', NULL, 0, '2021-12-27 11:10:01', 1),
(10, '1_MX40NzM4NDM3MX5-MTY0MDYwMzU1NjA5OX5iWUdEa1ZXT2IxMEZFR0pqdUZHcjVMeGp-fg', 'T1==cGFydG5lcl9pZD00NzM4NDM3MSZzaWc9ZGI3OTkwOWExNWFjMTUyZWUyOWE2ZmNlMzQ3MWY2M2YwM2MyYWU0OTpzZXNzaW9uX2lkPTFfTVg0ME56TTRORE0zTVg1LU1UWTBNRFl3TXpVMU5qQTVPWDVpV1VkRWExWlhUMkl4TUVaRlIwcHFkVVpIY2pWTWVHcC1mZyZjcmVhdGVfdGltZT0xNjQwNjAzNTUyJnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NDA2MDM1NTIuNjE2NzE1Njk4MzExMTEmZXhwaXJlX3RpbWU9MTY0MTIwODM1MiZjb25uZWN0aW9uX2RhdGE9bmFtZSUzREpvaG5ueSZpbml0aWFsX2xheW91dF9jbGFzc19saXN0PWZvY3Vz', 'Gigwork79733489', 18, 11, NULL, '2021-12-27 11:12:32', NULL, 0, '2021-12-27 11:12:32', 1),
(11, '1_MX40NzM4NDM3MX5-MTY0MDY3NTA4MDA0NX5tRHRETVJIcUZuL3NreFF6NDZ5YjdpNFR-fg', 'T1==cGFydG5lcl9pZD00NzM4NDM3MSZzaWc9Nzg0YjZkOGMyMjAyM2NjZGYzNjcxYWJjZmZiYzQzNDMwMDU5MGYxNzpzZXNzaW9uX2lkPTFfTVg0ME56TTRORE0zTVg1LU1UWTBNRFkzTlRBNE1EQTBOWDV0UkhSRVRWSkljVVp1TDNOcmVGRjZORFo1WWpkcE5GUi1mZyZjcmVhdGVfdGltZT0xNjQwNjc1MDc3JnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NDA2NzUwNzcuOTIxNDE4NDc4NjM3NzgmZXhwaXJlX3RpbWU9MTY0MTI3OTg3NyZjb25uZWN0aW9uX2RhdGE9bmFtZSUzREpvaG5ueSZpbml0aWFsX2xheW91dF9jbGFzc19saXN0PWZvY3Vz', 'Gigwork32468D5D', 18, 11, NULL, '2021-12-28 07:04:37', NULL, 0, '2021-12-28 07:04:37', 1),
(12, '1_MX40NzM4NDM3MX5-MTY0MDY3NTE3Mjk1MH5zL3hETlkyTHRkMW05SkdBSjExbzE0MC9-fg', 'T1==cGFydG5lcl9pZD00NzM4NDM3MSZzaWc9NWE0MGJmOTBmOWZhMDFmNmE2YmVmYWE2NzE5Mjk2ZTlmNTE1YjNiNDpzZXNzaW9uX2lkPTFfTVg0ME56TTRORE0zTVg1LU1UWTBNRFkzTlRFM01qazFNSDV6TDNoRVRsa3lUSFJrTVcwNVNrZEJTakV4YnpFME1DOS1mZyZjcmVhdGVfdGltZT0xNjQwNjc1MTcwJnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NDA2NzUxNzAuODkwNjcxNzU3NDk4NiZleHBpcmVfdGltZT0xNjQxMjc5OTcwJmNvbm5lY3Rpb25fZGF0YT1uYW1lJTNESm9obm55JmluaXRpYWxfbGF5b3V0X2NsYXNzX2xpc3Q9Zm9jdXM=', 'GigworkA9CAC12A', 18, 11, NULL, '2021-12-28 07:06:10', NULL, 0, '2021-12-28 07:06:10', 1),
(13, '2_MX40NzM4NDM3MX5-MTY0MDY5OTAxMzY0NH5DV2QrcFNXWEtjdXVwNzM1YW1UeFZuTTV-fg', 'T1==cGFydG5lcl9pZD00NzM4NDM3MSZzaWc9NTcxOTVkYThlYTQzNmM2MWI3MjQ4OTlmYWM4MDdkZDEyYzFmOWJjNDpzZXNzaW9uX2lkPTJfTVg0ME56TTRORE0zTVg1LU1UWTBNRFk1T1RBeE16WTBOSDVEVjJRcmNGTlhXRXRqZFhWd056TTFZVzFVZUZadVRUVi1mZyZjcmVhdGVfdGltZT0xNjQwNjk5MDEwJnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NDA2OTkwMTAuMzkxNzEwODY5OTE4MTAmZXhwaXJlX3RpbWU9MTY0MTMwMzgxMCZjb25uZWN0aW9uX2RhdGE9bmFtZSUzREpvaG5ueSZpbml0aWFsX2xheW91dF9jbGFzc19saXN0PWZvY3Vz', 'Gigwork313B92B1', 18, 11, NULL, '2021-12-28 13:43:30', NULL, 0, '2021-12-28 13:43:30', 1),
(14, '2_MX40NzM4NDM3MX5-MTY0MDY5OTM4MzI1MH5jcUhkWUhVS2dwdHRiQjhtUnUwYlFyemt-fg', 'T1==cGFydG5lcl9pZD00NzM4NDM3MSZzaWc9OTdkNTcwY2QxNTI4NWMyNDg3ZTEyNTgwNzI1M2M4NWI4M2U3ZTA3MTpzZXNzaW9uX2lkPTJfTVg0ME56TTRORE0zTVg1LU1UWTBNRFk1T1RNNE16STFNSDVqY1Voa1dVaFZTMmR3ZEhSaVFqaHRVblV3WWxGeWVtdC1mZyZjcmVhdGVfdGltZT0xNjQwNjk5MzgwJnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NDA2OTkzODAuMDM2NDQ2NDkyOTg3MiZleHBpcmVfdGltZT0xNjQxMzA0MTgwJmNvbm5lY3Rpb25fZGF0YT1uYW1lJTNESm9obm55JmluaXRpYWxfbGF5b3V0X2NsYXNzX2xpc3Q9Zm9jdXM=', 'GigworkB27C855D', 18, 11, NULL, '2021-12-28 13:49:40', NULL, 0, '2021-12-28 13:49:40', 1),
(15, '1_MX40NzM4NDM3MX5-MTY0MDcwMDA1MjIyMn40ZFhYcEdzZjdNM0dOOHhtL25yUXdXVkR-fg', 'T1==cGFydG5lcl9pZD00NzM4NDM3MSZzaWc9NTg4ZmNiNDUyZjNjNGNiYzBjNzc0M2U3YTc0NzA1ZjI1YTJlZThhZTpzZXNzaW9uX2lkPTFfTVg0ME56TTRORE0zTVg1LU1UWTBNRGN3TURBMU1qSXlNbjQwWkZoWWNFZHpaamROTTBkT09IaHRMMjV5VVhkWFZrUi1mZyZjcmVhdGVfdGltZT0xNjQwNzAwMDQ4JnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NDA3MDAwNDguOTIyMTgzNTEzOTcwNSZleHBpcmVfdGltZT0xNjQxMzA0ODQ4JmNvbm5lY3Rpb25fZGF0YT1uYW1lJTNESm9obm55JmluaXRpYWxfbGF5b3V0X2NsYXNzX2xpc3Q9Zm9jdXM=', 'GigworkC7B4A7A5', 18, 11, NULL, '2021-12-28 14:00:48', NULL, 0, '2021-12-28 14:00:48', 1),
(16, '1_MX40NzM4NDM3MX5-MTY0MDc4NDM3OTUxNH4xdTlPZnF5RVpHN1hmQkR2K1JnMnRLUXZ-fg', 'T1==cGFydG5lcl9pZD00NzM4NDM3MSZzaWc9MzFmNzYzMjc4N2QwNjZjYjliMzcxNWVlNTRiMWE3ZWMzMzA1ODdjYzpzZXNzaW9uX2lkPTFfTVg0ME56TTRORE0zTVg1LU1UWTBNRGM0TkRNM09UVXhOSDR4ZFRsUFpuRjVSVnBITjFobVFrUjJLMUpuTW5STFVYWi1mZyZjcmVhdGVfdGltZT0xNjQwNzg0Mzc5JnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NDA3ODQzNzkuNTcyNzQyNDk3OTk3MSZleHBpcmVfdGltZT0xNjQxMzg5MTc5JmNvbm5lY3Rpb25fZGF0YT1uYW1lJTNESm9obm55JmluaXRpYWxfbGF5b3V0X2NsYXNzX2xpc3Q9Zm9jdXM=', 'Gigwork26446B6B', 18, 11, NULL, '2021-12-29 13:26:19', NULL, 0, '2021-12-29 13:26:19', 1),
(17, '2_MX40NzM4NDM3MX5-MTY0MDc4NDM5Nzg1M35ZQ0RSV29zWEZGaTBiTWY0b1BsUGZQVSt-fg', 'T1==cGFydG5lcl9pZD00NzM4NDM3MSZzaWc9NDI0ZWJiMzA0MjVlMTViZGM1MjM1NGE5YzIzYzc3ODIxZjYzY2ZjMTpzZXNzaW9uX2lkPTJfTVg0ME56TTRORE0zTVg1LU1UWTBNRGM0TkRNNU56ZzFNMzVaUTBSU1YyOXpXRVpHYVRCaVRXWTBiMUJzVUdaUVZTdC1mZyZjcmVhdGVfdGltZT0xNjQwNzg0Mzk3JnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NDA3ODQzOTcuODUzNzEzMjMxMDUyNDEmZXhwaXJlX3RpbWU9MTY0MTM4OTE5NyZjb25uZWN0aW9uX2RhdGE9bmFtZSUzREpvaG5ueSZpbml0aWFsX2xheW91dF9jbGFzc19saXN0PWZvY3Vz', 'Gigwork64882575', 18, 17, NULL, '2021-12-29 13:26:37', NULL, 0, '2021-12-29 13:26:37', 1),
(18, '2_MX40NzM4NDM3MX5-MTY0MTgxMTM5MzE5OX55cXlYNkFaSmtRQ0g5NFJrT3FVZ2FibUt-fg', 'T1==cGFydG5lcl9pZD00NzM4NDM3MSZzaWc9OWNhNWJmYWY3YTdiODNmMTlhNWJjNTM1MDBjM2M5YTljZTYzNTZlOTpzZXNzaW9uX2lkPTJfTVg0ME56TTRORE0zTVg1LU1UWTBNVGd4TVRNNU16RTVPWDU1Y1hsWU5rRmFTbXRSUTBnNU5GSnJUM0ZWWjJGaWJVdC1mZyZjcmVhdGVfdGltZT0xNjQxODExMzkwJnJvbGU9bW9kZXJhdG9yJm5vbmNlPTE2NDE4MTEzOTAuMjg5MjE2MjIwMzI2NjYmZXhwaXJlX3RpbWU9MTY0MjQxNjE5MCZjb25uZWN0aW9uX2RhdGE9bmFtZSUzREpvaG5ueSZpbml0aWFsX2xheW91dF9jbGFzc19saXN0PWZvY3Vz', 'GigworkAA77D4D2', 18, 11, NULL, '2022-01-10 10:43:10', NULL, 0, '2022-01-10 10:43:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `manage_cms`
--

CREATE TABLE `manage_cms` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_date` datetime DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manage_cms`
--

INSERT INTO `manage_cms` (`id`, `title`, `description`, `status`, `created_date`, `update_date`) VALUES
(1, 'Term and conditions', '<h2>1. Terms</h2>\r\n\r\n<p>By accessing this web site, you are agreeing to be bound by these web site Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this web site are protected by applicable copyright and trade mark law.</p>\r\n\r\n<h2>2. Limitations</h2>\r\n\r\n<p>Whilst we try to ensure that the standard of the Website remains high and to maintain the continuity of it, the internet is not an inherently stable medium, and errors, omissions, interruptions of service and delays may occur at any time. We do not accept any liability arising from any such errors, omissions, interruptions or delays or any ongoing obligation or responsibility to operate the Website (or any particular part of it) or to provide the service offered on the Website. We may vary the specification of this site from time to time without notice.</p>\r\n\r\n<h2>3. Revisions and Errata</h2>\r\n\r\n<p>You may only use the Website for lawful purposes when seeking employment or help with your career, when purchasing training courses or when recruiting staff. You must not under any circumstances seek to undermine the security of the Website or any information submitted to or available through it. In particular, but without limitation, you must not seek to access, alter or delete any information to which you do not have authorised access, seek to overload the system via spamming or flooding, take any action or use any device, routine or software to crash, delay, damage or otherwise interfere with the operation of the Website or attempt to decipher, disassemble or modify any of the software, coding or information comprised in the Website.</p>\r\n\r\n<h2>4. Site Terms of Use Modifications</h2>\r\n\r\n<p>Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered inset one echidna cassowary some parrot and much as goodness some froze the sullen much connected bat wonderfully on instantaneously. Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally.</p>\r\n', 'Active', '2021-09-22 12:08:25', '2021-11-03 07:35:17'),
(2, 'About Us', '<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered inset one echidna cassowary some parrot and much as goodness some froze the sullen much connected bat wonderfully on instantaneously eel valiantly petted this along across highhandedly much.</p>\r\n', 'Active', '2021-09-22 12:53:12', '2021-09-22 05:23:12'),
(3, 'privacy policy', '<h2>1. Privacy Policy</h2>\r\n\r\n<p>By accessing this web site, you are agreeing to be bound by these web site Terms and Conditions of Use, all applicable laws and regulations, and agree that you are responsible for compliance with any applicable local laws. If you do not agree with any of these terms, you are prohibited from using or accessing this site. The materials contained in this web site are protected by applicable copyright and trade mark law.</p>\r\n\r\n<h2>2. Limitations</h2>\r\n\r\n<p>Whilst we try to ensure that the standard of the Website remains high and to maintain the continuity of it, the internet is not an inherently stable medium, and errors, omissions, interruptions of service and delays may occur at any time. We do not accept any liability arising from any such errors, omissions, interruptions or delays or any ongoing obligation or responsibility to operate the Website (or any particular part of it) or to provide the service offered on the Website. We may vary the specification of this site from time to time without notice.</p>\r\n\r\n<h2>3. Revisions and Errata</h2>\r\n\r\n<p>You may only use the Website for lawful purposes when seeking employment or help with your career, when purchasing training courses or when recruiting staff. You must not under any circumstances seek to undermine the security of the Website or any information submitted to or available through it. In particular, but without limitation, you must not seek to access, alter or delete any information to which you do not have authorised access, seek to overload the system via spamming or flooding, take any action or use any device, routine or software to crash, delay, damage or otherwise interfere with the operation of the Website or attempt to decipher, disassemble or modify any of the software, coding or information comprised in the Website.</p>\r\n\r\n<h2>4. Site Terms of Use Modifications</h2>\r\n\r\n<p>Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally wow absolutely crud meretriciously hastily dalmatian a glowered inset one echidna cassowary some parrot and much as goodness some froze the sullen much connected bat wonderfully on instantaneously. Far much that one rank beheld bluebird after outside ignobly allegedly more when oh arrogantly vehement irresistibly fussy penguin insect additionally.</p>\r\n', 'Active', '2021-09-22 13:41:08', '2021-11-03 07:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `our_service`
--

CREATE TABLE `our_service` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `our_service`
--

INSERT INTO `our_service` (`id`, `category_id`, `image`, `icon`, `description`, `status`, `created_date`, `update_date`) VALUES
(1, 1, '', 'la la-bullhorn', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Active', '2021-12-17 10:07:44', '2021-12-17 03:37:44'),
(2, 2, '', 'la la-graduation-cap', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.', 'Active', '2021-12-17 10:09:20', '2021-12-17 03:39:20'),
(3, 3, '', 'la la-line-chart', 'Test In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.', 'Active', '2021-12-17 10:10:10', '2022-01-06 04:33:35'),
(4, 4, '', 'la la-phone', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content.', 'Active', '2021-12-17 10:11:17', '2021-12-17 03:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `postjob`
--

CREATE TABLE `postjob` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL,
  `post_title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `duration` varchar(100) NOT NULL,
  `charges` float NOT NULL,
  `location` text NOT NULL,
  `latitude` varchar(200) NOT NULL,
  `longitude` varchar(200) NOT NULL,
  `complete_address` varchar(255) NOT NULL,
  `appli_deadeline` date DEFAULT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_date` datetime DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_delete` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `postjob`
--

INSERT INTO `postjob` (`id`, `user_id`, `category_id`, `subcategory_id`, `post_title`, `description`, `duration`, `charges`, `location`, `latitude`, `longitude`, `complete_address`, `appli_deadeline`, `status`, `created_date`, `update_date`, `is_delete`) VALUES
(1, 18, 1, 1, 'Website devlopemnet', 'Description is the pattern of narrative development that aims to make vivid a place, object, character, or group. Description is one of four rhetorical modes, ', '2', 25000, 'Manish Market, Masjid Bandar West, Masjid Bandar, Mumbai, Maharashtra, India', '18.9523159', '72.8348065', 'Manish Market, Masjid Bandar West, Masjid Bandar, Mumbai, Maharashtra, India', '2021-10-05', 'Active', '2021-10-05 11:42:35', '2021-11-24 06:20:22', 1),
(2, 14, 1, 2, 'Digital marketing', 'Description is the pattern of narrative development that aims to make vivid a place, object, character, or group. Description is one of four rhetorical modes, ', '3', 15000, '', '26.8112695', '75.8066367', 'pratap nagar, Tonk Road, Maruti Nagar, Jaipur, Rajasthan, India', '2021-10-06', 'Active', '2021-10-05 11:43:34', '2021-10-05 06:13:34', 0),
(5, 13, 1, 4, 'Payment gatway using php', 'A Java developer is a specialized programmer who collaborates with software engineers and web developers to integrate Java into business software, applications, and websites', '3 month', 1200, 'Manila, Metro Manila, Philippines', '14.5995124', '120.9842195', '', '2021-10-30', 'Active', '2021-10-30 06:10:55', '2021-11-23 01:30:54', 0),
(6, 18, 4, 31, 'Project Manager', 'Numberfit is a Mathematics based Social Enterprise with the sole objective of combining Mathematics education with physical activity and mindfulness for children’s all round wellbeing.\r\n\r\nWe are looking for hands on support with a variety of remote project management, business and administration tasks. The ideal candidate would have high levels of attention to detail and flexibility to help in all areas of Numberfit. You would also need a high level of English. You do not need to have a high level of mathematics.\r\n\r\nFull training would be provided and no particular experience is necessary, just enthusiasm.\r\nWork Remotely\r\n\r\nJob Type: Full-time\r\n\r\nSalary: ₹25,000.00 per month\r\nBenefits:\r\n\r\nWork from home\r\nSchedule:\r\n\r\nUK shift\r\nLanguage:\r\n\r\nEnglish (Required)\r\nWork Remotely:\r\n\r\nYes\r\n30 days ago\r\nIs there a problem with this job?', '6 months', 25000, 'Durgapur, West Bengal, India', '23.5204443', '87.3119227', 'Durgapur, West Bengal, India', '2022-02-08', 'Active', '2021-11-24 04:47:07', '2021-11-23 23:17:07', 0),
(7, 18, 1, 1, 'Java Programmer', 'The overflow-x and overflow-y properties specifies whether to change the overflow of content just horizontally or vertically (or both):\r\n\r\noverflow-x specifies what to do with the left/right edges of the content.\r\noverflow-y specifies what to do with the top/bottom edges of the content.', '6 month', 14500, 'Nagpur, Maharashtra, India', '21.1458004', '79.0881546', '', '2021-11-24', 'Active', '2021-11-24 13:14:15', '2021-11-24 08:07:20', 1),
(8, 18, 2, 16, 'Css, Bootstrap', '  visible - Default. The overflow is not clipped. The content renders outside the element\'s box\r\n    hidden - The overflow is clipped, and the rest of the content will be invisible\r\n    scroll - The overflow is clipped, and a scrollbar is added to see the rest of the content\r\n    auto - Similar to scroll, but it adds scrollbars only when necessary\r\n', '2 month', 48000, 'Anisha Apartments, Yagna Nagar, Versova, Andheri West, Mumbai, Maharashtra, India', '19.1420022', '72.8101353', '', '2021-11-25', 'Active', '2021-11-24 13:15:50', '2021-11-24 07:45:50', 0),
(9, 10, 1, 1, 'php,Bootstrap,Ajax', 'This article will give you use of tags input in bootstrap 4. in this example i am simply add custom css to solved design issue. let\'s see the bellow example:', '6 month', 4500, 'Punta Cana, Dominican Republic', '18.5600761', '-68.372535', 'Punta Cana, Dominican Republic', '2021-12-29', 'Active', '2021-12-29 09:12:12', '2021-12-29 03:42:12', 0),
(10, 30, 2, 12, 'test', 'test', '1', 110000, 'Australia', '-25.7349684916223', '134.489562606981', '', '2023-04-29', 'Active', '2023-04-29 13:20:55', '2023-04-29 13:20:55', 0),
(11, 31, 4, 29, 'This is a test Job', 'This is a test JobThis is a test JobThis is a test JobThis is a test JobThis is a test JobThis is a test JobThis is a test JobThis is a test JobThis is a test JobThis is a test JobThis is a test JobThis is a test JobThis is a test JobThis is a test JobThis is a test JobThis is a test JobThis is a test JobThis is a test JobThis is a test JobThis is a test JobThis is a test JobThis is a test JobThis is a test JobThis is a test Job', '1', 100000, 'Australia', '-25.7349684916223', '134.489562606981', '', '2023-05-01', 'Active', '2023-05-01 09:56:26', '2023-05-01 09:56:26', 0),
(12, 31, 5, 36, 'Test Job Posted by Employers', 'Test Job Posted by EmployersTest Job Posted by EmployersTest Job Posted by EmployersTest Job Posted by EmployersTest Job Posted by EmployersTest Job Posted by EmployersTest Job Posted by EmployersTest Job Posted by EmployersTest Job Posted by EmployersTest Job Posted by EmployersTest Job Posted by EmployersTest Job Posted by EmployersTest Job Posted by EmployersTest Job Posted by EmployersTest Job Posted by Employers', '1', 100000, 'Australia', '-25.7349684916223', '134.489562606981', '', '2023-05-01', 'Active', '2023-05-01 10:23:39', '2023-05-01 10:23:39', 0),
(13, 32, 5, 36, 'This is test Job 2 posted by employers', 'This is test Job 2 posted by employersThis is test Job 2 posted by employersThis is test Job 2 posted by employersThis is test Job 2 posted by employersThis is test Job 2 posted by employersThis is test Job 2 posted by employers', '1', 100000, 'Australia', '-25.7349684916223', '134.489562606981', '', '2023-05-01', 'Active', '2023-05-01 10:40:09', '2023-05-03 09:45:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rating_type`
--

CREATE TABLE `rating_type` (
  `id` int(11) NOT NULL,
  `rating_type` varchar(100) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating_type`
--

INSERT INTO `rating_type` (`id`, `rating_type`, `status`, `created_date`, `update_date`) VALUES
(1, 'Good', 'Active', '2021-09-21 13:01:18', '2021-09-21 03:45:34'),
(2, 'Average', 'Active', '2021-09-21 13:01:28', '2021-09-21 08:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `website_name` varchar(100) NOT NULL,
  `copyright` varchar(100) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `fax` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alternate_email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `fabout` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `flogo` text NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `created_date` datetime DEFAULT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `website_name`, `copyright`, `phone`, `fax`, `email`, `alternate_email`, `address`, `fabout`, `logo`, `flogo`, `favicon`, `created_date`, `update_date`) VALUES
(1, 'Afrebay', 'Copyright © 2023 Afrebay. All rights reserved.', 9876543211, 0, 'info@afrebay.com', '', '208 Rue Saint Barts Youngsville, LA 705920', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s.', '1006_AfreBay-Logo(WB).jpg', '265_AfreBay-Logo(WB).jpg', '3397_favicon.png', '2021-11-03 18:14:59', '2023-05-03 09:35:17');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `subscription_name` varchar(100) NOT NULL,
  `subscription_amount` float NOT NULL,
  `subscription_duration` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription`
--

INSERT INTO `subscription` (`id`, `subscription_name`, `subscription_amount`, `subscription_duration`, `status`, `created_date`, `update_date`) VALUES
(1, 'FREE', 100, '2 month', '', '2021-11-03 11:11:26', '2023-05-05 10:26:41'),
(2, 'BASIC', 2, '1 month', '', '2021-11-03 11:11:43', '2023-05-05 10:26:39'),
(3, 'PRO', 1000, '1 month', '', '2021-11-03 11:11:54', '2023-05-05 10:26:36'),
(4, 'PRO+', 4000, '3 month', '', '2021-11-03 11:12:10', '2023-05-05 10:26:34'),
(5, 'Most waited', 2000, '3 month', '', '2021-09-25 15:01:36', '2023-05-05 10:26:31'),
(6, 'Gold', 3000, '3 month', '', '2023-05-05 07:48:43', '2023-05-05 07:48:43');

-- --------------------------------------------------------

--
-- Table structure for table `subscription_service`
--

CREATE TABLE `subscription_service` (
  `id` int(11) NOT NULL,
  `subscription_id` int(11) NOT NULL,
  `service` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscription_service`
--

INSERT INTO `subscription_service` (`id`, `subscription_id`, `service`, `created_date`) VALUES
(14, 3, 'Hostingss', '2021-11-03 11:11:54'),
(15, 4, '6 month expiration', '2021-11-03 11:11:10'),
(16, 4, 'Email', '2021-11-03 11:11:10'),
(17, 6, 'Test', '2023-05-05 07:05:43'),
(18, 6, 'demo', '2023-05-05 07:05:43'),
(19, 6, '2 option', '2023-05-05 07:05:43'),
(20, 6, '3 options', '2023-05-05 07:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category_id`, `sub_category_name`, `image`, `status`, `created_date`, `update_date`) VALUES
(1, 1, 'Handyman Services', '', 'Active', '2021-10-04 13:36:47', '2021-10-04 08:06:47'),
(2, 1, 'Appliance Repair', '', 'Active', '2021-10-04 13:36:58', '2021-10-04 08:06:58'),
(3, 1, 'Furniture Installation', '', 'Active', '2021-10-04 13:37:09', '2021-10-04 08:07:09'),
(4, 1, 'Home Improvement', '', 'Active', '2021-10-04 13:37:20', '2021-10-04 08:07:20'),
(5, 1, 'Cleanup', '', 'Active', '2021-10-04 13:37:31', '2021-10-04 08:07:31'),
(6, 1, 'Caregivers', '', 'Active', '2021-10-04 13:37:40', '2021-10-04 08:07:40'),
(7, 1, 'Errands', '', 'Active', '2021-10-04 13:37:58', '2021-10-04 08:07:58'),
(8, 1, 'Onsite Automotive Repair', '', 'Active', '2021-10-04 13:38:10', '2021-10-04 08:08:10'),
(9, 1, 'Yardwork', '', 'Active', '2021-10-04 13:38:19', '2021-10-04 08:08:19'),
(10, 1, 'Disaster Help', '', 'Active', '2021-10-04 13:38:32', '2021-10-04 08:08:32'),
(11, 1, 'Misc', '', 'Active', '2021-10-04 13:38:48', '2021-10-04 08:08:48'),
(12, 2, 'Restaurant Work', '', 'Active', '2021-10-04 13:39:01', '2021-10-04 08:09:01'),
(13, 2, 'Delivery Services', '', 'Active', '2021-10-04 13:39:16', '2021-10-04 08:09:16'),
(14, 2, 'Office Work', '', 'Active', '2021-10-04 13:39:29', '2021-10-04 08:09:29'),
(15, 2, 'Hospitality', '', 'Active', '2021-10-04 13:39:38', '2021-10-04 08:09:38'),
(16, 2, 'Janitorial', '', 'Active', '2021-10-04 13:39:54', '2021-10-04 08:09:54'),
(17, 2, 'Home Health Care', '', 'Active', '2021-10-04 13:40:05', '2021-10-04 08:10:05'),
(18, 2, 'Childcare', '', 'Active', '2021-10-04 13:40:17', '2021-10-04 08:10:17'),
(19, 2, 'Mechanic Work', '', 'Active', '2021-10-04 13:40:31', '2021-10-04 08:10:31'),
(20, 2, 'Retail', '', 'Active', '2021-10-04 13:40:44', '2021-10-04 08:10:44'),
(21, 2, 'Sales', '', 'Active', '2021-10-04 13:41:22', '2021-10-04 08:11:22'),
(22, 3, 'Remote Computer Repair', '', 'Active', '2021-10-04 13:49:12', '2021-10-04 08:19:12'),
(23, 3, 'Website Design', '', 'Active', '2021-10-04 13:52:25', '2021-10-04 08:22:25'),
(24, 3, 'Graphic Design', '', 'Active', '2021-10-04 13:58:08', '2021-10-04 08:28:08'),
(25, 3, 'Marketing Campaigns', '', 'Active', '2021-10-04 13:58:25', '2021-10-04 08:28:25'),
(26, 3, 'Virtual Office Work', '', 'Active', '2021-10-04 13:58:44', '2021-10-04 08:28:44'),
(27, 4, 'Plumbing', '', 'Active', '2021-10-04 13:58:58', '2021-10-04 08:28:58'),
(28, 4, 'Drain Cleaning', '', 'Active', '2021-10-04 13:59:13', '2021-10-04 08:29:13'),
(29, 4, 'Video/Photography', '', 'Active', '2021-10-04 13:59:28', '2021-10-04 08:29:28'),
(30, 4, 'Appliance Delivery', '', 'Active', '2021-10-04 13:59:42', '2021-10-04 08:29:42'),
(31, 4, 'Specialty Services', '', 'Active', '2021-10-04 14:00:00', '2021-10-04 08:30:00'),
(32, 4, 'Misc', '', 'Active', '2021-10-04 14:01:56', '2021-10-04 08:31:56'),
(33, 2, 'Misc', '', 'Active', '2021-10-04 14:02:14', '2021-10-04 08:32:14'),
(34, 1, 'Test', '', 'Active', '2023-04-29 09:36:18', '2023-04-29 09:36:18'),
(35, 1, 'test', '', 'Active', '2023-04-29 12:16:27', '2023-04-29 12:16:27'),
(36, 5, 'Demo Sub Category', '', 'Active', '2023-05-01 10:20:28', '2023-05-01 10:20:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(500) DEFAULT NULL,
  `email` varchar(500) DEFAULT NULL,
  `mobile` varchar(200) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL,
  `profilePic` varchar(255) NOT NULL,
  `userType` bigint(20) UNSIGNED DEFAULT NULL,
  `serviceType` varchar(30) DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` smallint(6) DEFAULT '1',
  `address` text,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `zip` varchar(90) DEFAULT NULL,
  `resume` varchar(255) NOT NULL,
  `additional_image` varchar(255) NOT NULL,
  `short_bio` text NOT NULL,
  `video` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `oauth_provider` enum('facebook','google') NOT NULL,
  `oauth_uid` varchar(50) NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `firstname`, `lastname`, `username`, `email`, `mobile`, `dob`, `password`, `profilePic`, `userType`, `serviceType`, `created`, `modified`, `status`, `address`, `latitude`, `longitude`, `zip`, `resume`, `additional_image`, `short_bio`, `video`, `gender`, `experience`, `qualification`, `skills`, `oauth_provider`, `oauth_uid`, `view_count`) VALUES
(10, 'Sen', 'Bet', 'sahne watson', 'watson@gmail.com', '9046537339', NULL, 'e10adc3949ba59abbe56e057f20f883e', '', 1, '2', '2021-09-15 22:17:55', '2023-05-03 06:58:01', 1, 'Nagpur, Maharashtra, India', 21.1458, 79.0882, '440011', '', '', '', '', 'Male', '1 year', 'Bachlor of engineering', 'php ,html,java', 'facebook', '', 9),
(11, '', '', 'harris', 'harris@gmail.com', '3243254352', NULL, 'e10adc3949ba59abbe56e057f20f883e', '', 2, '3', '2021-09-16 01:21:02', '2021-09-16 04:51:02', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 'facebook', '', 0),
(12, '', '', 'jack', 'jack@gmail.com', '2233244354', NULL, 'e10adc3949ba59abbe56e057f20f883e', '', 2, '2', '2021-09-16 01:44:57', '2022-01-09 19:01:11', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 'facebook', '', 3),
(13, '', '', 'amit', 'amit@gmail.com', '8798548965', NULL, 'e10adc3949ba59abbe56e057f20f883e', '', 2, '2', '2021-09-21 20:35:08', '2023-05-03 06:41:07', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 'facebook', '', 4),
(14, 'Amitkumatr', 'Maskare', 'amitkumar', 'test@gmail.com', '7854545454', NULL, 'e10adc3949ba59abbe56e057f20f883e', '675_nouser.jpg', 1, '1', '2021-09-21 22:16:00', '2023-05-05 02:17:27', 1, 'Nagpur', NULL, NULL, '440787', '', '', '', '', '', '', '', '', 'facebook', '', 8),
(16, '', '', 'iglobal', 'iglobal@gmail.com', '7854545459', NULL, 'e10adc3949ba59abbe56e057f20f883e', '', 1, '1', '2021-10-04 14:06:55', '2021-10-04 07:06:55', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 'facebook', '', 0),
(17, 'Iglobal', 'impact', 'demo', 'demo@gmail.com', '8785454545', NULL, 'e10adc3949ba59abbe56e057f20f883e', '', 1, '1', '2021-10-12 14:52:04', '2021-10-12 14:57:03', 1, 'Nagpur', NULL, NULL, '440011', '', '', '', '', '', '', '', '', 'facebook', '', 0),
(18, 'Atul', 'Panchal', 'iglobal', 'igi@gmail.com', '8754554545', '0000-00-00', 'e10adc3949ba59abbe56e057f20f883e', '', 2, '2', '2021-10-12 15:05:36', '2022-01-08 18:05:03', 1, 'Manizales, Caldas, Colombia', 5.06297, -75.5028, '440016', '4608_Dxampphtdocsdollar-discount_uploads_users_25-10-2021_orderid_6497.pdf', '8462_index.jpg', 'Test short', '0c63727a5b6592c048fbc5283a39298c.mp4', '', '', '', '', 'facebook', '', 12),
(27, '', '', 'Amit maskare', 'maskareamit@gmail.com', '8787454545', NULL, 'e10adc3949ba59abbe56e057f20f883e', '', 2, '1', '2022-01-05 07:26:31', '2023-04-29 04:45:02', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 'facebook', '', 12),
(28, '', '', 'kunulaxmi', 'igi8@goigi.in', '6556586585', NULL, 'e10adc3949ba59abbe56e057f20f883e', '', 2, '2', '2022-12-12 02:14:31', '2023-05-03 06:40:57', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 'facebook', '', 11),
(29, 'demo', 'worker', 'worker', 'worker@gmail.com', '9876543210', NULL, 'e10adc3949ba59abbe56e057f20f883e', '7791_Profile2 - Copy - Copy.jpg', 1, '1, 3, 4', '2023-04-29 03:47:21', '2023-05-05 08:52:17', 1, 'Los Angeles, California, United States', 34.0537, -118.243, '705920', '9098_ActivateGoogleLocationAPI.pdf', '9759_720.405.jpg', 'First-year college student pursuing a degree in English Literature. He grew up in Seattle, WA, where he developed a love for rainy days and good books. He is an avid reader and writer, and he spends much of his free time exploring the works of classic and contemporary authors. He is also a talented soccer player and has been playing competitively since he was six years old.', '', 'Male', '1', 'graduation', 'node', 'facebook', '', 0),
(30, 'demo', 'demo', 'worker', 'worker1@gmail.com', '9876543219', NULL, 'e10adc3949ba59abbe56e057f20f883e', '', 1, '1, 3, 5', '2023-04-29 07:46:12', '2023-04-29 08:01:41', 1, 'Indonesia', -6.17555, 106.827, '700033', '2612_4608_Dxampphtdocsdollar-discount_uploads_users_25-10-2021_orderid_6497.pdf', '9757_3714_15598721948.jpg', 'asd\\ad\\ad\\d', '', 'Male', '2', 'Graduate', 'android', 'facebook', '', 1),
(31, '', '', 'sayantan', 'sayantan@gmail.com', '9876543211', NULL, 'e10adc3949ba59abbe56e057f20f883e', '', 1, '1, 3', '2023-05-01 04:09:14', '2023-05-03 06:57:27', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 'facebook', '', 3),
(32, 'demo', 'employers', 'employers', 'employers@gmail.com', '9876543212', NULL, 'e10adc3949ba59abbe56e057f20f883e', '2472_6424_comments-2.jpg', 2, '1, 3', '2023-05-01 04:41:50', '2023-05-05 08:20:00', 1, '208 Rue Saint Barts Youngsville, LA 705920', 0, 0, '705920', '', '', 'First-year college student pursuing a degree in English Literature. He grew up in Seattle, WA, where he developed a love for rainy days and good books. He is an avid reader and writer, and he spends much of his free time exploring the works of classic and contemporary authors. He is also a talented soccer player and has been playing competitively since he was six years old.', '', 'Male', '1', 'graduation', 'PHP', 'facebook', '', 23),
(33, '', '', 'workerr', 'workerr@gmail.com', '8797897979', NULL, 'e10adc3949ba59abbe56e057f20f883e', '', 1, '2', '2023-05-03 06:15:17', '2023-05-03 11:45:17', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 'facebook', '', 0),
(34, '', '', 'workerrr', 'workerrr@gmail.com', '9999999999', NULL, 'e10adc3949ba59abbe56e057f20f883e', '', 1, '1', '2023-05-03 06:19:00', '2023-05-03 11:49:00', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 'facebook', '', 0),
(35, '', '', 'lsalaam', 'lsalaam@gmail.com', '3108638976', NULL, '2c36ee458337432f2ad16a059fb6dc1d', '', 2, '2', '2023-05-03 20:33:48', '2023-05-04 04:50:57', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 'facebook', '', 1),
(36, '', '', 'demo', 'sayantan@goigi.in', '1234567899', NULL, 'e10adc3949ba59abbe56e057f20f883e', '', 1, '1', '2023-05-05 05:56:03', '2023-05-05 11:26:03', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 'facebook', '', 0),
(37, '', '', 'student', 'demo3@gmail.com', '1213123123', NULL, 'e10adc3949ba59abbe56e057f20f883e', '', 2, '2', '2023-05-05 06:00:45', '2023-05-05 11:30:45', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 'facebook', '', 0),
(38, '', '', 'leylam.m.aliyeva@gmail.com', 'leylam.m.aliyeva@gmail.com', '5031590463', NULL, 'e10adc3949ba59abbe56e057f20f883e', '', 1, '1, 2, 3', '2023-05-07 14:47:11', '2023-05-07 20:17:11', 1, NULL, NULL, NULL, NULL, '', '', '', '', '', '', '', '', 'facebook', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_education`
--

CREATE TABLE `user_education` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `education` varchar(50) NOT NULL,
  `passing_of_year` varchar(50) NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `department` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_education`
--

INSERT INTO `user_education` (`id`, `user_id`, `education`, `passing_of_year`, `college_name`, `department`, `description`, `created_date`, `update_date`) VALUES
(1, 10, ' High School', '2008 - 2012', 'Tomms College', 'Bachlors in Fine Arts', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.', '2021-12-22 06:46:52', '2021-12-22 01:44:45'),
(3, 10, ' University', '2008 - 2012', 'Middle East Technical University', 'Computer Science', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.', '2021-12-22 08:13:41', '2021-12-22 01:43:41');

-- --------------------------------------------------------

--
-- Table structure for table `user_workexperience`
--

CREATE TABLE `user_workexperience` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_workexperience`
--

INSERT INTO `user_workexperience` (`id`, `user_id`, `designation`, `company_name`, `duration`, `description`, `created_date`, `update_date`) VALUES
(1, 10, 'CEO Founder ', 'Inwave Studio', '2008 - 2012', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.', '2021-12-22 08:02:05', '2021-12-22 01:46:16'),
(3, 10, 'Web Designer', 'Inwave Studio', '2008 - 2012', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin a ipsum tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus.', '2021-12-22 08:15:31', '2021-12-22 01:45:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `appointment_scheduling`
--
ALTER TABLE `appointment_scheduling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_tips`
--
ALTER TABLE `career_tips`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_logo`
--
ALTER TABLE `company_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_template`
--
ALTER TABLE `email_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_profile`
--
ALTER TABLE `employer_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_rating`
--
ALTER TABLE `employer_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_services`
--
ALTER TABLE `employer_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer_subscription`
--
ALTER TABLE `employer_subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends_video`
--
ALTER TABLE `friends_video`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `job_bid`
--
ALTER TABLE `job_bid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `live_videos`
--
ALTER TABLE `live_videos`
  ADD PRIMARY KEY (`liveId`);

--
-- Indexes for table `manage_cms`
--
ALTER TABLE `manage_cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_service`
--
ALTER TABLE `our_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postjob`
--
ALTER TABLE `postjob`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rating_type`
--
ALTER TABLE `rating_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription`
--
ALTER TABLE `subscription`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscription_service`
--
ALTER TABLE `subscription_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `user_education`
--
ALTER TABLE `user_education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_workexperience`
--
ALTER TABLE `user_workexperience`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `userId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment_scheduling`
--
ALTER TABLE `appointment_scheduling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `career_tips`
--
ALTER TABLE `career_tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `company_logo`
--
ALTER TABLE `company_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `email_template`
--
ALTER TABLE `email_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employer_profile`
--
ALTER TABLE `employer_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employer_rating`
--
ALTER TABLE `employer_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employer_services`
--
ALTER TABLE `employer_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employer_subscription`
--
ALTER TABLE `employer_subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `friends_video`
--
ALTER TABLE `friends_video`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job_bid`
--
ALTER TABLE `job_bid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `live_videos`
--
ALTER TABLE `live_videos`
  MODIFY `liveId` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `manage_cms`
--
ALTER TABLE `manage_cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `our_service`
--
ALTER TABLE `our_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `postjob`
--
ALTER TABLE `postjob`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `rating_type`
--
ALTER TABLE `rating_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscription`
--
ALTER TABLE `subscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subscription_service`
--
ALTER TABLE `subscription_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user_education`
--
ALTER TABLE `user_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_workexperience`
--
ALTER TABLE `user_workexperience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
