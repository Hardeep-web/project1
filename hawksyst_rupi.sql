-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 23, 2021 at 07:04 AM
-- Server version: 10.3.25-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hawksyst_rupi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(100) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(500) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`, `date`) VALUES
(1, 'admin', 'admin123', '2021-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_camp`
--

CREATE TABLE `tb_camp` (
  `camp_id` int(10) NOT NULL,
  `camp_name` varchar(200) NOT NULL,
  `camp_desc` varchar(1000) NOT NULL,
  `camp_by` varchar(10) NOT NULL,
  `camp_photo` varchar(30) NOT NULL,
  `camp_status` varchar(50) NOT NULL,
  `camp_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_camp`
--

INSERT INTO `tb_camp` (`camp_id`, `camp_name`, `camp_desc`, `camp_by`, `camp_photo`, `camp_status`, `camp_date`) VALUES
(2, 'Sexual Harassment', 'Sexual harassment is a type of harassment involving the use of explicit or implicit sexual overtones, including the unwelcome and inappropriate promise of rewards in exchange for sexual favors. Sexual harassment includes a range of actions from verbal transgressions to sexual abuse or assault.', '4', 'c5.jpeg', 'inactive', '2021-04-21'),
(3, 'Women Empowerment', 'Raising awareness around the causes of poor health and wellbeing that are related to gender. Empowering women and girls through water, sanitation and hygiene; health and nutrition; livelihoods training; and education programs to increase their opportunities and ability to reach their full potential.', '4', 'c8.jpeg', 'active', '2021-04-19'),
(4, 'Black Lives Matter', 'Do Black Lives Matter or do All Lives Matter? That question has been the cause of many debates and conversations across America recently. The All Lives Matter response was created to criticize the Black Lives Matter Movement and operates under the assumption that the movement isn’t needed in America because it is a post racial society. This thesis reviews race theories, racial formation in the United States and racist ideology in the pre- and post-Civil Rights era in order to show why the Black Lives Matter Movement is needed. It looks at the influence colorblindness has on the United States Criminal Justice System and the All Lives Matter response. Finally, this thesis explains why the Black Lives Matter Movement is important and suggest next steps that can be taken by the Black Lives Matter Movement to reach its goal of social justice for black lives.', '4', 'c1.jpeg', 'active', '2021-04-21'),
(5, 'Education is a Human right', 'Education is not a privilege. It is a human right. ... states have the obligation to protect, respect, and fulfil the right to education. there are ways to hold states accountable for violations or deprivations of the right to education.', '4', 'c7.jpeg', 'active', '2021-04-22'),
(6, 'Stop Hunger', 'Every day too many men and women across the globe struggle to feed their children a nutritious meal. In a world where we produce enough food to feed everyone, 690 million people still go to bed on an empty stomach each night. Acute food insecurity affected 135 million people in 55 countries in 2019. Even more – one in three – suffer from some form of malnutrition.', '4', 'c5.jpeg', 'active', '2021-04-04'),
(7, 'Stop Covid-19', 'Protect yourself and others around you by knowing the facts and taking appropriate precautions. Follow advice provided by your local health authority.', '4', 'c9.jpeg', 'active', '2021-04-20'),
(8, 'Quit Smoking', 'Smoking cessation, usually called quitting smoking or stopping smoking, is the process of discontinuing tobacco smoking. Tobacco smoke contains nicotine, which is addictive and can cause dependence. Nicotine withdrawal often makes the process of quitting difficult. ', '4', 'c10.jpeg', 'active', '2021-04-18'),
(9, 'Help Homeless', 'What can I do to help people who are homeless? Educate - help to dispel the stereotype of a homelessWhat can I do to help people who are homeless? Educate - help to dispel the stereotype of a homeless person! Respect - remember that people who are homeless are people too. Donate - you can donate a lot of things - money, toys, clothing or food.', '4', 'b3.jpeg', 'active', '2021-04-22'),
(10, 'DUMMY campaign', 'lorem ipsumlorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum', '4', 'c6.jpeg', 'active', '2021-04-22'),
(11, 'Hajakskdk', 'Jshdvdkeiebdldlkdhdkek', '14', '161906329138271893072498154631', 'inactive', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_follower`
--

CREATE TABLE `tb_follower` (
  `follow_id` int(10) NOT NULL,
  `follow_camp_id` int(20) NOT NULL,
  `follow_user_id` int(20) NOT NULL,
  `follow_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_follower`
--

INSERT INTO `tb_follower` (`follow_id`, `follow_camp_id`, `follow_user_id`, `follow_date`) VALUES
(3, 9, 4, '2021-04-22');

-- --------------------------------------------------------

--
-- Table structure for table `tb_post`
--

CREATE TABLE `tb_post` (
  `post_id` int(20) NOT NULL,
  `post_title` varchar(300) NOT NULL,
  `post_desc` varchar(1000) NOT NULL,
  `post_by` varchar(80) NOT NULL,
  `post_camp` varchar(80) NOT NULL,
  `post_date` date NOT NULL DEFAULT current_timestamp(),
  `post_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_post`
--

INSERT INTO `tb_post` (`post_id`, `post_title`, `post_desc`, `post_by`, `post_camp`, `post_date`, `post_status`) VALUES
(1, 'Take Precautions ', 'To prevent the spread of COVID-19: Clean', '4', '0', '0000-00-00', '0'),
(2, 'Social Distancing!', 'Social distancing, also called â€œphysic', '4', '0', '0000-00-00', '0'),
(4, 'abc', 'abc abc ', '4', '10', '2021-04-22', ''),
(5, 'Empower women ', 'Womens empowerment can be defined to promoting womens sense of self-worth, their ability to determine their own choices, and their right to influence social change for themselves and others. ... In Western countries, female empowerment is often associated with specific phases of the womens rights movement in history.', '4', '3', '2021-04-21', ''),
(6, 'Stop Eve Teasing', 'Eve teasing is a euphemism used throughout South Asia, which includes (but is not limited to) India, Pakistan, Bangladesh and Nepal, for public sexual harassment or sexual assault of women by men. The name \"Eve\" alludes to the Bibles creation story concerning Adam and Eve.', '4', '3', '2021-04-21', ''),
(7, 'Save your coins', 'Its easy as a housing professional to become insular, focusing on particular problems in our own communities and failing to look beyond the horizon for support. But there is much we can learn from the experience of other countries tackling the same issues.', '4', '9', '2021-04-21', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_register`
--

CREATE TABLE `tb_register` (
  `id` int(11) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `bio` varchar(500) NOT NULL,
  `status` int(100) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_register`
--

INSERT INTO `tb_register` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`, `bio`, `status`) VALUES
(4, 'Hardeep', 'Kaur', 'hardeep@gmail.com', '12345', '0476574636', 'hjdcvjhsdvcjs', 1),
(5, 'Hardeep', 'Kaur', 'hardeep11@gmail.com', '12345', '78468354723', 'jsdkfcbsdc', 1),
(7, 'Nidhi', 'Nidhi', 'Nidhinidhi113@gmail.com', 'jangra0000', '0416808034', 'myself nidhi i am intern of ACS wil project', 1),
(8, 'hardeep', 'sarao', 'hardeepsarao001@gmail.com', 'dfhj', '8778558586865', 'fdhghjgkjhk', 1),
(9, 'Navjot', 'Brar', 'navjotsingh00059@gmail.com', '12345', '8778558586865', 'abc', 1),
(10, 'hardeep', 'sarao', 'saraohardeep001@gmail.com', '12345', '8778558586865', 'abc', 1),
(11, 'Navi', 'Brar', 'Navibrar001@gmail.com', '12345', '3355656656', 'ahghdjs', 1),
(12, 'Guri', 'Kaur', 'gurikaur001@gmail.com', '12345', '34467', 'adfggfh', 1),
(13, 'Mmmk', 'Kk', 'jsjsjsj@gamaiall.com', 'kdksksksk', '9383883i', 'Ksjsjejek', 1),
(14, 'Ksksksk', 'Mdndjdn', 'a@gmail.com', 'admin', '92i282727', 'Nsjsjs', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_camp`
--
ALTER TABLE `tb_camp`
  ADD PRIMARY KEY (`camp_id`);

--
-- Indexes for table `tb_follower`
--
ALTER TABLE `tb_follower`
  ADD PRIMARY KEY (`follow_id`);

--
-- Indexes for table `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_camp`
--
ALTER TABLE `tb_camp`
  MODIFY `camp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_follower`
--
ALTER TABLE `tb_follower`
  MODIFY `follow_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `post_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_register`
--
ALTER TABLE `tb_register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
