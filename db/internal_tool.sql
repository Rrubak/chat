-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2016 at 06:20 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internal_tool`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(10) NOT NULL,
  `tasks_completed` varchar(255) NOT NULL,
  `user_id` int(30) NOT NULL,
  `date_time` datetime NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `tasks_completed`, `user_id`, `date_time`, `date`) VALUES
(25, 'Kishorekumar has completed the following tasks <ol><li>Sudhakar give a task to create a logo....That using in PSD</li></ol>', 6, '0000-00-00 00:00:00', '0000-00-00'),
(26, 'veeramani has completed the following tasks <ol><li>to create a logo in psd</li></ol>', 12, '0000-00-00 00:00:00', '0000-00-00'),
(27, 'divya has completed the following tasks <ol><li>login page design using bootstrap</li></ol>', 7, '0000-00-00 00:00:00', '0000-00-00'),
(28, 'sriyeshvanthra has completed the following tasks <ol><li>analysis about Automatic EB bill product & collect the components for designing a product</li></ol>', 11, '0000-00-00 00:00:00', '0000-00-00'),
(29, 'Nithya has completed the following tasks <ol><li>Adobe Muse cc</li></ol>', 3, '0000-00-00 00:00:00', '0000-00-00'),
(30, 'Priyanka has completed the following tasks <ol><li>create a  login page and validate to next page by using html</li></ol>', 5, '0000-00-00 00:00:00', '0000-00-00'),
(31, 'saranya.v has completed the following tasks <ol><li>Analysis the EB bill product and identify the components for that product.</li></ol>', 10, '0000-00-00 00:00:00', '0000-00-00'),
(32, 'meena has completed the following tasks <ol><li>table form task coverting pdf file learnig</li></ol>', 4, '0000-00-00 00:00:00', '0000-00-00'),
(33, 'arun has completed the following tasks <ol><li>designed user interface for web page</li></ol>', 8, '0000-00-00 00:00:00', '0000-00-00'),
(34, 'ganesh has completed the following tasks <ol><li>design for web page  using psd</li></ol>', 2, '0000-00-00 00:00:00', '0000-00-00'),
(35, 'rubak has completed the following tasks <ol><li>implemented the internal tool</li></ol>', 1, '0000-00-00 00:00:00', '0000-00-00'),
(36, 'vignesh has completed the following tasks <ol><li>i am doing a circuit connection for my project</li></ol>', 13, '0000-00-00 00:00:00', '0000-00-00'),
(38, 'rubak has completed the following tasks <ol><li>rework on internal tool</li></ol>', 1, '0000-00-00 00:00:00', '0000-00-00'),
(41, 'arun has completed the following tasks <ol><li>rework on login Page</li></ol>', 8, '0000-00-00 00:00:00', '0000-00-00'),
(42, 'ganesh has completed the following tasks <ol><li>design for home page</li></ol>', 2, '0000-00-00 00:00:00', '0000-00-00'),
(43, '<b>Rubak</b> has completed the following tasks <ol><li><b>worked on quiz application</b></li></ol>', 1, '0000-00-00 00:00:00', '0000-00-00'),
(44, '<b>Arun</b> has completed the following tasks <ol><li><b>designed front page for quiz application</b></li></ol>', 8, '0000-00-00 00:00:00', '0000-00-00'),
(45, '<b>Ganesh</b> has completed the following tasks <ol><li><b>added content to webpage</b></li></ol>', 2, '0000-00-00 00:00:00', '0000-00-00'),
(46, '<b>Sriyeshvanthra</b> has completed the following tasks <ol><li><b>placed an order for GSM module</b></li><li><b>written PMR test for two hours in NIIT</b></li></ol>', 11, '0000-00-00 00:00:00', '0000-00-00'),
(60, '<b>Rubak</b> has completed the following tasks <ol><li><b>created application for quiz</b></li></ol>', 1, '0000-00-00 00:00:00', '0000-00-00'),
(61, '<b>Gobi</b> has completed the following tasks <ol><li><b>Searching Coding for how to connect incognito window in web page</b></li><li><b>Half of the coding was Developed</b></li></ol>', 9, '0000-00-00 00:00:00', '0000-00-00'),
(62, '<b>Ganesh</b> has completed the following tasks <ol><li><b>designed signup form </b></li></ol>', 2, '0000-00-00 00:00:00', '0000-00-00'),
(63, '<b>Arun</b> has completed the following tasks <ol><li><b>rewoked on symposium quiz application</b></li></ol>', 8, '0000-00-00 00:00:00', '0000-00-00'),
(64, '<b>Sriyeshvanthra</b> has completed the following tasks <ol><li><b>placed an order for GSM module</b></li><li><b>verifying about energy meter& looking for circuit diagram</b></li><li><b>written java test</b></li></ol>', 11, '0000-00-00 00:00:00', '0000-00-00'),
(65, '<b>Saranya.v</b> has completed the following tasks <ol><li><b>To analysis the digital energy meter circuit diagram in myproject..</b></li><li><b>written online test for placement..</b></li></ol>', 10, '0000-00-00 00:00:00', '0000-00-00'),
(66, '<b>Saranya.v</b> has completed the following tasks <ol><li><b>html</b></li></ol>', 10, '0000-00-00 00:00:00', '0000-00-00'),
(67, '<b>Kishorekumar</b> has completed the following tasks <ol><li><b>Preparing The logo in nautical manner</b></li></ol>', 6, '0000-00-00 00:00:00', '0000-00-00'),
(69, '<b>Saranya.v</b> has completed the following tasks <ol><li><b>Analyzed the digital energy meter reading,driver,& microcontroller.</b></li><li><b>Learned how to interface the reading in LCD dispaly..</b></li></ol>', 10, '2016-08-12 17:49:00', '2016-08-12'),
(73, '<b>Kishorekumar</b> has completed the following tasks <ol><li><b>Download the psd templete and work on it..</b></li><li><b>And also converting that into html</b></li></ol>', 6, '2016-08-12 18:02:00', '2016-08-12'),
(74, '<b>Saraswathi</b> has completed the following tasks <ol><li><b>completing the life cycle picture</b></li><li><b>search about gsm,gprs,cdma,iss</b></li><li><b>search about url</b></li></ol>', 14, '2016-08-12 06:35:00', '2016-08-12'),
(76, '<b>Saipriya</b> has completed the following tasks <ol><li><b>did the life cycle chart</b></li><li><b>know about iss,spacex</b></li><li><b>search url</b></li></ol>', 19, '2016-08-12 06:36:00', '2016-08-12'),
(77, '<b>saranyaraju</b> has completed the following tasks <ol><li><b>completed  introduction to php</b></li></ol>', 22, '2016-08-12 06:39:00', '2016-08-12'),
(78, '<b>Rushitha</b> has completed the following tasks <ol><li><b>Discussed about my life cycle</b></li><li><b>discussed project on automatic eb code in that i learned gsm and cdma</b></li><li><b>searching sensor  for our project,</b></li></ol>', 17, '2016-08-12 06:44:00', '2016-08-12'),
(79, '<b>Saranya jeeva</b> has completed the following tasks <ol><li><b>created my life cycle</b></li><li><b>Discussed about project</b></li><li><b>searching sensor for our project</b></li></ol>', 20, '2016-08-12 06:44:00', '2016-08-12'),
(80, '<b>Rubak</b> has completed the following tasks <ol><li><b>created user account for new candidates</b></li></ol>', 1, '2016-08-12 06:54:00', '2016-08-12'),
(81, '<b>Rubak</b> has completed the following tasks <ol><li><b>send mail configure </b></li></ol>', 1, '2016-08-23 17:59:00', '2016-08-23'),
(82, '<b>Arun</b> has completed the following tasks <ol><li><b>rework On the6 app</b></li></ol>', 8, '2016-08-23 18:06:00', '2016-08-23'),
(83, '<b>kathir</b> has completed the following tasks <ol><li><b>create angular projectsetup</b></li></ol>', 23, '2016-08-23 18:12:00', '2016-08-23'),
(84, '<b>Rushitha</b> has completed the following tasks <ol><li><b>learned CURD in sql</b></li><li><b>executed CURD in sql</b></li><li><b>going to learn php </b></li></ol>', 17, '2016-08-23 06:54:00', '2016-08-23'),
(85, '<b>Saranya jeeva</b> has completed the following tasks <ol><li><b>learned CURD in SQL</b></li><li><b>exicuted CURD in sql</b></li><li><b>going to learn php</b></li></ol>', 20, '2016-08-23 06:55:00', '2016-08-23'),
(86, '<b>Saranya jeeva</b> has completed the following tasks <ol><li><b>learned CURD in SQL</b></li><li><b>exicuted CURD in sql</b></li><li><b>going to learn php</b></li></ol>', 20, '2016-08-23 06:55:00', '2016-08-23'),
(87, '<b>Saraswathi</b> has completed the following tasks <ol><li><b>learning html</b></li><li><b>learned about curd</b></li><li><b>learning about creation of login page</b></li></ol>', 14, '2016-08-23 08:49:00', '2016-08-23'),
(88, '<b>Manimegalai</b> has completed the following tasks <ol><li><b>learning about CURD</b></li><li><b>learning about if loops in php</b></li><li><b>learning about variables</b></li></ol>', 18, '2016-08-23 09:08:00', '2016-08-23'),
(90, '<b>Saranya jeeva</b> has completed the following tasks <ol><li><b>learning html and php</b></li><li><b>watching some php tutorial videos</b></li><li><b>executing php  programs</b></li></ol>', 20, '2016-08-29 06:35:00', '2016-08-29'),
(91, '<b>Rushitha</b> has completed the following tasks <ol><li><b>watched 7 video tutorials in html</b></li><li><b>executed all basic operations till now  i have watched</b></li><li><b>going to learn next level in html</b></li></ol>', 17, '2016-08-29 06:38:00', '2016-08-29'),
(92, '<b>Saraswathi</b> has completed the following tasks <ol><li><b>creating login page</b></li><li><b>learned about html color pickers</b></li><li><b>learning transformation and transitions in html</b></li></ol>', 14, '2016-08-29 06:41:00', '2016-08-29'),
(93, '<b>saranyaraju</b> has completed the following tasks <ol><li><b>learning php</b></li></ol>', 22, '2016-08-29 06:44:00', '2016-08-29'),
(94, '<b>Manimegalai</b> has completed the following tasks <ol><li><b>learning about file handling in php</b></li><li><b>excuting  codings in file include</b></li><li><b>finding errors and correct them</b></li></ol>', 18, '2016-08-29 06:44:00', '2016-08-29'),
(95, '<b>Rubak</b> has completed the following tasks <ol><li><b>rework on billing application</b></li></ol>', 1, '2016-08-29 07:26:00', '2016-08-29'),
(96, '<b>Arun</b> has completed the following tasks <ol><li><b>worked on THE6 app admin_panel</b></li></ol>', 8, '2016-08-29 07:30:00', '2016-08-29'),
(97, '<b>Rubak</b> has completed the following tasks <ol><li><b>test</b></li><li><b>test</b></li><li><b>test</b></li></ol>', 1, '2016-08-30 10:30:00', '2016-08-30'),
(98, '<b>Saranya jeeva</b> has completed the following tasks <ol><li><b>learn php and html</b></li><li><b>watched 20 php tutorial</b></li><li><b>creating login page</b></li></ol>', 20, '2016-08-31 06:44:00', '2016-08-31'),
(99, '<b>Arun</b> has completed the following tasks <ol><li><b>worked on billing app</b></li></ol>', 8, '2016-08-31 08:47:00', '2016-08-31'),
(100, '<b>Saraswathi</b> has completed the following tasks <ol><li><b>learning about mediaqueries</b></li><li><b>solving two example programs in media queries</b></li><li><b>implementing media queries in login page</b></li></ol>', 14, '2016-08-31 08:48:00', '2016-08-31'),
(101, '<b>Manimegalai</b> has completed the following tasks <ol><li><b>learn about database in php</b></li><li><b>listen tutorial videos related to db in php</b></li><li><b>doing codings and correcting errors</b></li></ol>', 18, '2016-08-31 08:51:00', '2016-08-31'),
(102, '<b>Arun</b> has completed the following tasks <ol><li><b>worked on the6 App</b></li></ol>', 8, '2016-09-01 18:00:00', '2016-09-01'),
(103, '<b>Rubak</b> has completed the following tasks <ol><li><b>worked on the6 app database connection</b></li></ol>', 1, '2016-09-01 18:01:00', '2016-09-01'),
(104, '<b>Kishorekumar</b> has completed the following tasks <ol><li><b>Converting PSD to HTML</b></li></ol>', 6, '2016-09-01 18:05:00', '2016-09-01'),
(105, '<b>Sriyeshvanthra</b> has completed the following tasks <ol><li><b>learned about GUVI</b></li><li><b>writing techgig exam</b></li></ol>', 11, '2016-09-01 18:05:00', '2016-09-01'),
(106, '<b>Saranya.v</b> has completed the following tasks <ol><li><b>learning about guvi</b></li><li><b>writing techgig exam</b></li></ol>', 10, '2016-09-01 18:06:00', '2016-09-01'),
(107, '<b>kathir</b> has completed the following tasks <ol><li><b>creating admin panel for my task</b></li></ol>', 23, '2016-09-01 18:06:00', '2016-09-01'),
(108, '<b>Gobi</b> has completed the following tasks <ol><li><b>Learning Angular js</b></li></ol>', 9, '2016-09-01 18:21:00', '2016-09-01'),
(109, '<b>Ganesh</b> has completed the following tasks <ol><li><b>work for truck web page</b></li><li><b>-</b></li><li><b>-</b></li></ol>', 2, '2016-09-01 18:21:00', '2016-09-01'),
(110, '<b>saranyaraju</b> has completed the following tasks <ol><li><b>learning php</b></li></ol>', 22, '2016-09-01 08:32:00', '2016-09-01'),
(111, '<b>Saraswathi</b> has completed the following tasks <ol><li><b>learning mediaqueries</b></li><li><b>creating login page using media queries</b></li><li><b>listening html&css tutorials</b></li></ol>', 14, '2016-09-02 18:03:00', '2016-09-02'),
(112, '<b>Manimegalai</b> has completed the following tasks <ol><li><b>learn updata the database in php</b></li><li><b>listening  tutorial videos and do codings</b></li><li><b>learn about biling app queries</b></li></ol>', 18, '2016-09-02 18:06:00', '2016-09-02'),
(113, '<b>kathir</b> has completed the following tasks <ol><li><b>coding for my miniproject backhand</b></li></ol>', 23, '2016-09-02 18:08:00', '2016-09-02'),
(114, '<b>Rubak</b> has completed the following tasks <ol><li><b>Rework on billing application</b></li></ol>', 1, '2016-09-02 18:15:00', '2016-09-02'),
(115, '<b>Ganesh</b> has completed the following tasks <ol><li><b>developed project module for venture city</b></li></ol>', 2, '2016-09-02 18:19:00', '2016-09-02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Rubak', '14cse11@gmail.com', 'ezrubak'),
(2, 'Ganesh', 'ganeshmoorthyit96@gmail.com', '123456'),
(6, 'Kishorekumar', 'kishoreking234@gmail.com', 'kishore'),
(8, 'Arun', 'afm447@gmail.com', 'arun1'),
(9, 'Gobi', 'gobi1529@gmail.com', 'Gobi$007'),
(10, 'Saranya.v', 'saranyavenkatece@gmail.com', '1234'),
(11, 'Sriyeshvanthra', 'sriyeshvanthra@gmail.com', '1005'),
(14, 'Saraswathi', 'saraswathiec24@gmail.com', 'saraswathi'),
(15, 'Ajitha', 'ajitha24397@gmail.com', '9865057803'),
(16, 'Mownika', 'emownika@gmail.com', 'anumowni'),
(17, 'Rushitha', 'rushithaece2014@gmail.com', 'rushiteju'),
(18, 'Manimegalai', 'manimegalaik28@gmail.com', 'mohanappu'),
(19, 'Saipriya', 'saipriyav30@gmail.com', 'viswanathan'),
(20, 'Saranya jeeva', 'saranyajeevaece@gmail.com', 'pradeep1004'),
(21, 'Anusri', 'srianuradha8@gmail.com', 'palanivel'),
(22, 'saranyaraju', 'saranyadharani121@gmail.com', 'saranya'),
(23, 'kathir', 'prabhakarankathir64@gmail.com', 'nerupuda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
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
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
