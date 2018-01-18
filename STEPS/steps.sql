-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2018 at 06:45 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `steps`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `education` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pastuniversity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `userid`, `adminid`, `firstname`, `middlename`, `lastname`, `username`, `password`, `email`, `contact`, `department`, `position`, `birthdate`, `education`, `pastuniversity`, `created_at`, `updated_at`) VALUES
(1, '976b013f7e36aed500b1b72c3531cbe6b117cd99eee7-larmie', '976b013f7e36aed500b1b72c3531cbe6b117cd99eee7-larmie', 'Larmie', 'A', 'Feliscuzo', 'larmie', '5f4dcc3b5aa765d61d8327deb882cf99', 'larmie_feliscuzo@mail.com', '1234567890', 'College of Computer Studies', 'College Chairperson', 'January-1-1990', 'MIT', 'Cebu Institute Of Technology University', '2017-12-17 20:41:11', '2017-12-17 20:41:11'),
(2, 'dd959dd9305121642f25cbaa47cf9e2ca5050948372c-sao', 'dd959dd9305121642f25cbaa47cf9e2ca5050948372c-sao', 'saofirstname', 'saomiddlename', 'saolastname', 'sao', '5f4dcc3b5aa765d61d8327deb882cf99', 'sao@cit.edu.ph', '123456790', 'Student Affairs Office', 'Department Secretary', 'January-1-1990', 'MBA', 'Cebu Institute Of Technology University', '2017-12-17 20:42:37', '2018-01-12 08:18:19'),
(3, '5fa3db58e927f350efd88897f8aebc9bff02b697dc02-oas', '5fa3db58e927f350efd88897f8aebc9bff02b697dc02-oas', 'oas', 'oas', 'oas', 'oas', '5f4dcc3b5aa765d61d8327deb882cf99', 'oas@cit.edu.ph', '1234567890', 'Office of Academic Scholarship', 'Department Assistant', 'January-1-1990', 'BSBA', 'Cebu Institute Of Technology University', '2017-12-17 20:43:32', '2017-12-17 20:43:32'),
(4, 'a3c93e0d998f5ec336eb107fe1b2bb661329b3e818b3-guidance', 'a3c93e0d998f5ec336eb107fe1b2bb661329b3e818b3-guidance', 'guidance', 'guidance', 'guidance', 'guidance', '5f4dcc3b5aa765d61d8327deb882cf99', 'guidance@cit.edu.ph', '1234567890', 'Guidance Office', 'Department Assistant', 'January-1-1990', 'MBA', 'Cebu Institute Of Technology University', '2017-12-17 20:44:20', '2017-12-17 20:44:20'),
(5, '9ec5b7e195f525e28d149346ac910412f2df47e30133-masteradmin', '9ec5b7e195f525e28d149346ac910412f2df47e30133-masteradmin', 'Juan', 'Velasco', 'Degamo', 'masteradmin', '9f706ab85924bd1aa5f9b3c79f7490bd', 'juan_tamad2000@mail.com', '09320123456', 'STEPS', 'Master Administrator', 'January-1-1980', 'MIT, BSIT', 'CIT University', '2018-01-07 00:36:23', '2018-01-07 00:36:23'),
(9, 'b7f29f6d30cd561daf494415a8b55333784f053a4f6a-mannypacquiao', 'b7f29f6d30cd561daf494415a8b55333784f053a4f6a-mannypacquiao', 'Manny', 'Dapigran', 'Pacquiao', 'mannypacquiao', '5f4dcc3b5aa765d61d8327deb882cf99', 'manny_pacquiao@gmail.com', '1234567890', 'Student Affairs Office', 'Working Staff', 'January-1-1994', 'MIT, BSIT', 'Cebu Institute Of Technology University', '2018-01-08 06:11:11', '2018-01-08 06:11:11'),
(11, '5075193458f9dceb7c84e2b8d3bb197f0d737514840e-ralphlaviste', '5075193458f9dceb7c84e2b8d3bb197f0d737514840e-ralphlaviste', 'Ralph', 'A', 'Laviste', 'ralphlaviste', '5f4dcc3b5aa765d61d8327deb882cf99', 'rlaviste@gmail.com', '1234567890', 'College of Computer Studies', 'Faculty', 'January-1-1970', 'BSCS, MIT', 'CIT University', '2018-01-11 23:52:52', '2018-01-11 23:52:52'),
(13, 'efc33f26c938bcd4ac845aada41528370dc5ee0433c8-eugine', 'efc33f26c938bcd4ac845aada41528370dc5ee0433c8-eugine', 'Eugene', 'A', 'Busico', 'eugine', '5f4dcc3b5aa765d61d8327deb882cf99', 'eugene_busico@mail.com', '1234567890', 'College of Computer Studies', 'Faculty', 'January-1-1980', 'BSCS, MIT', 'Cebu Technological University', '2018-01-12 06:24:29', '2018-01-12 07:43:09'),
(14, '1447c1ee6b4a75baec9120d8650f4e48a618075e5e1b-greg', '1447c1ee6b4a75baec9120d8650f4e48a618075e5e1b-greg', 'Greg Victor', 'A', 'Gabison', 'greg', '5f4dcc3b5aa765d61d8327deb882cf99', 'greg_gabison@mail.com', '1234567890', 'STEPS', 'Master Administrator', 'January-1-1970', 'BSCS, MIT, BSBA', 'Cebu Institute Of Technology University', '2018-01-12 08:27:08', '2018-01-12 08:27:08'),
(15, '26d03db4d63c9e3739af14f7708842a5b0fcab6fd6e4-josephvillacorta', '26d03db4d63c9e3739af14f7708842a5b0fcab6fd6e4-josephvillacorta', 'Joseph', 'A', 'Villacorta', 'josephvillacorta', '5f4dcc3b5aa765d61d8327deb882cf99', 'joseph_villacorta@mail.com', '1234567890', 'Guidance Office', 'Department Head', 'January-1-1994', 'BSCS, MIT, BSBA', 'CIT University', '2018-01-17 09:36:55', '2018-01-17 09:36:55');

-- --------------------------------------------------------

--
-- Table structure for table `entranceexam`
--

CREATE TABLE `entranceexam` (
  `id` int(10) UNSIGNED NOT NULL,
  `entranceexamid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guidance_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schedule` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `entranceexam`
--

INSERT INTO `entranceexam` (`id`, `entranceexamid`, `userid`, `guidance_username`, `schedule`, `status`, `created_at`, `updated_at`) VALUES
(7, 'd953d1d93e39217eb4fb02aecae3b5exam', '769300f9f0615af18fa0fa985d8805e569f3acdbfcbe-madmax', 'guidance', '', 'true', '2017-12-28 04:05:57', '2017-12-28 04:11:48'),
(8, 'c60685aa1fd1c73714c934d7de2a1eexam', 'f7ad4a06b96c6cc277d747830946a1d539957931b111-rian', 'guidance', '', 'true', '2017-12-28 04:18:48', '2017-12-28 04:23:01'),
(9, '5561e7c567e5bd252723e612ffed17exam', '22e974aec3ff861b21521ea87ded4ae0f55947317143-jeffreyang', 'guidance', '', 'true', '2017-12-28 05:50:52', '2017-12-28 06:30:34'),
(11, '55ff7a12cb1b33ac4439880556cc6dexam', 'a8d0e1d72bbc1c7e34c3e9b48d16d3637b2af97d355a-irvin', 'guidance', '', 'true', '2017-12-28 07:20:01', '2017-12-28 07:24:55'),
(12, '7a0eb7a439109d383c7517fc685967exam', '2d4aa9fad5d8faef0239dbe63619d7b32e72d2be1d5d-johncena', 'guidance', '', 'true', '2017-12-28 07:27:14', '2017-12-28 07:31:51'),
(16, 'cdac3054c2ddb1914a04d5d8e11464exam', 'd69cab11467883411a6090aa9eca9d91edb01ea7fb78-sami', '', '', 'false', '2018-01-04 22:34:32', '2018-01-04 22:34:32'),
(17, 'e80f4659d33b4333692bbbd914b2f9exam', '5b2c9193e530520c99bc212efe2e007a751c3fa58d5c-sammilby', '', '', 'false', '2018-01-08 06:27:30', '2018-01-08 06:27:30'),
(18, '359f4135b864f2fac7627897fd68aaexam', 'a24209bcc85b506f99d65a2dfef06789bf0b08fc85dc-barbs', '', '', 'false', '2018-01-11 22:42:49', '2018-01-11 22:42:49');

-- --------------------------------------------------------

--
-- Table structure for table `evaluation`
--

CREATE TABLE `evaluation` (
  `id` int(10) UNSIGNED NOT NULL,
  `evaluationid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `evaluator_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `evaluation`
--

INSERT INTO `evaluation` (`id`, `evaluationid`, `userid`, `evaluator_name`, `course`, `department`, `status`, `comment`, `created_at`, `updated_at`) VALUES
(2, 'e092ea828c567f4a2ecee4aecf8057evaluation', '769300f9f0615af18fa0fa985d8805e569f3acdbfcbe-madmax', 'larmie', 'Bachelors of Science in Information Technology', 'College of Computer Science', 'true', 'Good to go! Please submit requirements on time.', '2017-12-28 04:05:57', '2017-12-28 04:09:27'),
(3, 'ba40e745f3d5f9bc3e0abb3ae8f0efevaluation', '22e974aec3ff861b21521ea87ded4ae0f55947317143-jeffreyang', 'larmie', 'Bachelors of Science in Information Technology', 'College of Computer Science', 'true', 'Good to proceed to the next step', '2017-12-28 05:50:52', '2017-12-28 05:51:33'),
(5, 'd0c88a91aea197d88f2f6cc4c28aaeevaluation', 'a8d0e1d72bbc1c7e34c3e9b48d16d3637b2af97d355a-irvin', 'larmie', 'Bachelors of Science in Computer Science', 'College of Computer Science', 'true', 'Good to go!', '2017-12-28 07:20:00', '2017-12-28 07:20:38'),
(6, '75957dfb7b8c9127e641be496aad91evaluation', '2d4aa9fad5d8faef0239dbe63619d7b32e72d2be1d5d-johncena', 'larmie', 'Bachelors of Science in Information Technology', 'College of Computer Science', 'true', 'Good to proceed!', '2017-12-28 07:27:13', '2017-12-28 07:27:47'),
(7, 'e2e7503091a1d64760a9027e430367evaluation', '5b2c9193e530520c99bc212efe2e007a751c3fa58d5c-sammilby', '', 'Bachelors of Science in Information Technology', 'College of Computer Science', 'false', '', '2018-01-08 06:27:30', '2018-01-08 06:27:30'),
(8, '68058a4343a7c6d75f27510e9c27b7evaluation', 'a24209bcc85b506f99d65a2dfef06789bf0b08fc85dc-barbs', 'ralphlaviste', 'Bachelors of Science in Information Technology', 'College of Computer Science', 'true', 'Good to proceed but need to know exam results first.', '2018-01-11 22:42:48', '2018-01-11 23:53:41');

-- --------------------------------------------------------

--
-- Table structure for table `examschedule`
--

CREATE TABLE `examschedule` (
  `id` int(10) UNSIGNED NOT NULL,
  `examscheduleid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schedule` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `examschedule`
--

INSERT INTO `examschedule` (`id`, `examscheduleid`, `userid`, `schedule`, `created_at`, `updated_at`) VALUES
(7, 'd9ce33761528ced4d73d4ef9611196examschedule', '769300f9f0615af18fa0fa985d8805e569f3acdbfcbe-madmax', '03/27/17 01:00PM-03:00PM', '2017-12-28 04:05:57', '2017-12-28 04:11:15'),
(8, 'f25011ec1ad6cc96b6638c4ec526bcexamschedule', 'f7ad4a06b96c6cc277d747830946a1d539957931b111-rian', '03/27/17 03:00AM-05:00PM', '2017-12-28 04:18:48', '2017-12-28 04:22:27'),
(9, 'b9fe23fad4e9f08ce64bfc9adba86fexamschedule', '22e974aec3ff861b21521ea87ded4ae0f55947317143-jeffreyang', '03/27/17 09:00AM-11:00PM', '2017-12-28 05:50:52', '2017-12-28 06:29:54'),
(11, 'c6d6ddc14d8bb82f52c78c8ded2514examschedule', 'a8d0e1d72bbc1c7e34c3e9b48d16d3637b2af97d355a-irvin', '03/27/17 01:00PM-03:00PM', '2017-12-28 07:20:01', '2017-12-28 07:24:24'),
(12, '673118c538b2c5a2910717bde40d00examschedule', '2d4aa9fad5d8faef0239dbe63619d7b32e72d2be1d5d-johncena', '03/27/17 01:00PM-03:00PM', '2017-12-28 07:27:13', '2017-12-28 07:31:04'),
(16, '60e369ae6b03a241816282257e32c8examschedule', 'd69cab11467883411a6090aa9eca9d91edb01ea7fb78-sami', '', '2018-01-04 22:34:32', '2018-01-04 22:34:32'),
(17, '9f7be85154f2cc35add263ee21139fexamschedule', '5b2c9193e530520c99bc212efe2e007a751c3fa58d5c-sammilby', '', '2018-01-08 06:27:30', '2018-01-08 06:27:30'),
(18, '5e706021e8d6979cd91d782eed9f73examschedule', 'a24209bcc85b506f99d65a2dfef06789bf0b08fc85dc-barbs', '', '2018-01-11 22:42:48', '2018-01-11 22:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `examschedulelist`
--

CREATE TABLE `examschedulelist` (
  `id` int(10) UNSIGNED NOT NULL,
  `scheduleid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schedule_day` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schedule_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schedule_time` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `facilitator` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guidance_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `freshmen`
--

CREATE TABLE `freshmen` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `highschool` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tocourse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `freshmen`
--

INSERT INTO `freshmen` (`id`, `userid`, `highschool`, `tocourse`, `created_at`, `updated_at`) VALUES
(9, 'f7ad4a06b96c6cc277d747830946a1d539957931b111-rian', 'Cebu Institute of Technology University', 'Bachelors of Science in Information Technology', '2017-12-28 04:18:48', '2017-12-28 04:18:48'),
(13, 'd69cab11467883411a6090aa9eca9d91edb01ea7fb78-sami', 'Cebu Cherish School', 'Bachelors of Science in Information Technology', '2018-01-04 22:34:32', '2018-01-04 22:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `freshmen_requirements`
--

CREATE TABLE `freshmen_requirements` (
  `id` int(10) UNSIGNED NOT NULL,
  `requirementsid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oas_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `highschoolcard` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GM` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NSO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NCAE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `requirements_comment` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `freshmen_requirements`
--

INSERT INTO `freshmen_requirements` (`id`, `requirementsid`, `userid`, `oas_username`, `highschoolcard`, `GM`, `NSO`, `NCAE`, `requirements_comment`, `status`, `created_at`, `updated_at`) VALUES
(6, 'a60b83907d0f52809437f3a2338ddefreshmenrequirements', 'f7ad4a06b96c6cc277d747830946a1d539957931b111-rian', 'oas', 'true', 'true', 'true', 'true', 'Good to proceed to accounting!', 'true', '2017-12-28 04:18:48', '2017-12-28 04:21:16'),
(10, 'bac656a32fc27393ac9b6d14df7abdfreshmenrequirements', 'd69cab11467883411a6090aa9eca9d91edb01ea7fb78-sami', 'oas', 'true', 'true', 'true', 'true', 'blablabla', 'true', '2018-01-04 22:34:32', '2018-01-04 22:35:52');

-- --------------------------------------------------------

--
-- Table structure for table `identification`
--

CREATE TABLE `identification` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oas_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `getIdentification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `identification`
--

INSERT INTO `identification` (`id`, `userid`, `oas_username`, `getIdentification`, `created_at`, `updated_at`) VALUES
(7, '769300f9f0615af18fa0fa985d8805e569f3acdbfcbe-madmax', 'oas', 'true', '2017-12-28 04:05:57', '2017-12-28 04:10:54'),
(8, 'f7ad4a06b96c6cc277d747830946a1d539957931b111-rian', 'oas', 'true', '2017-12-28 04:18:48', '2017-12-28 04:21:46'),
(9, '22e974aec3ff861b21521ea87ded4ae0f55947317143-jeffreyang', 'oas', 'true', '2017-12-28 05:50:52', '2017-12-28 06:29:44'),
(11, 'a8d0e1d72bbc1c7e34c3e9b48d16d3637b2af97d355a-irvin', 'oas', 'true', '2017-12-28 07:20:01', '2017-12-28 07:24:14'),
(12, '2d4aa9fad5d8faef0239dbe63619d7b32e72d2be1d5d-johncena', 'oas', 'true', '2017-12-28 07:27:13', '2017-12-28 07:30:45'),
(16, 'd69cab11467883411a6090aa9eca9d91edb01ea7fb78-sami', '', 'false', '2018-01-04 22:34:32', '2018-01-04 22:34:32'),
(17, '5b2c9193e530520c99bc212efe2e007a751c3fa58d5c-sammilby', '', 'false', '2018-01-08 06:27:30', '2018-01-08 06:27:30'),
(18, 'a24209bcc85b506f99d65a2dfef06789bf0b08fc85dc-barbs', '', 'false', '2018-01-11 22:42:48', '2018-01-11 22:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `id` int(10) UNSIGNED NOT NULL,
  `interviewid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schedule` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sao_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `interview_comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`id`, `interviewid`, `userid`, `schedule`, `sao_username`, `status`, `interview_comment`, `created_at`, `updated_at`) VALUES
(7, 'f1c85ee8be3faf6421778b0f89dc98interview', '769300f9f0615af18fa0fa985d8805e569f3acdbfcbe-madmax', '', 'sao', 'true', 'Proceed to enrollment of subjects! Complete!', '2017-12-28 04:05:57', '2017-12-28 04:12:24'),
(8, 'e332e8dfc291cc9c9e7ad58e0bc7a4interview', 'f7ad4a06b96c6cc277d747830946a1d539957931b111-rian', '', 'oas', 'true', 'Good to proceed!', '2017-12-28 04:18:48', '2017-12-28 04:23:29'),
(9, '5225eb7b959b4db7c28b02a1e5b12ainterview', '22e974aec3ff861b21521ea87ded4ae0f55947317143-jeffreyang', '', 'sao', 'true', 'Good to proceed to enrollment!', '2017-12-28 05:50:52', '2017-12-28 06:39:50'),
(11, '5d52a53118291e4f12f83e0d2911d2interview', 'a8d0e1d72bbc1c7e34c3e9b48d16d3637b2af97d355a-irvin', '', 'sao', 'true', 'Good to proceed to enrollment of subjects!', '2017-12-28 07:20:01', '2017-12-28 07:25:51'),
(12, '060ab18e883f473ceb42671f78194cinterview', '2d4aa9fad5d8faef0239dbe63619d7b32e72d2be1d5d-johncena', '', 'sao', 'true', 'Very Good!', '2017-12-28 07:27:14', '2017-12-28 07:32:39'),
(16, '40a6ac386e2e2120288becf971a3bcinterview', 'd69cab11467883411a6090aa9eca9d91edb01ea7fb78-sami', '', '', 'false', '', '2018-01-04 22:34:33', '2018-01-04 22:34:33'),
(17, '75211368d5d815d47a50f222187df9interview', '5b2c9193e530520c99bc212efe2e007a751c3fa58d5c-sammilby', '', '', 'false', '', '2018-01-08 06:27:31', '2018-01-08 06:27:31'),
(18, '251c60d0f7ceecee8ec7ff5b0a49c8interview', 'a24209bcc85b506f99d65a2dfef06789bf0b08fc85dc-barbs', '', '', 'false', '', '2018-01-11 22:42:49', '2018-01-11 22:42:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2017_03_05_145320_create_student_table', 1),
('2017_03_11_043634_admin', 1),
('2017_03_11_043653_evaluation', 1),
('2017_03_11_043816_payment', 1),
('2017_03_11_043840_identification', 1),
('2017_03_11_043933_examschedule', 1),
('2017_03_11_044012_entranceexam', 1),
('2017_03_11_044049_results', 1),
('2017_03_11_044110_interview', 1),
('2017_03_14_100538_examschedulelist', 1),
('2017_12_17_121334_freshmen', 1),
('2017_12_17_121411_transferee', 1),
('2017_12_18_041211_freshmenrequirements', 1),
('2017_12_18_043642_transferee_requirements', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) UNSIGNED NOT NULL,
  `paymentid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oas_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paymentreceiptnum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `receivedpayment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `paymentid`, `userid`, `oas_username`, `paymentreceiptnum`, `receivedpayment`, `created_at`, `updated_at`) VALUES
(7, 'e520c26d7ab989032eabbdd1e39ce2payment', '769300f9f0615af18fa0fa985d8805e569f3acdbfcbe-madmax', 'oas', '1234512345', 'true', '2017-12-28 04:05:57', '2017-12-28 04:10:40'),
(8, '32e05bb0f8aef238f5e52a9c328f0epayment', 'f7ad4a06b96c6cc277d747830946a1d539957931b111-rian', 'oas', '1234567890', 'true', '2017-12-28 04:18:48', '2017-12-28 04:21:35'),
(9, 'f254522af771a41419cbc1d9b86815payment', '22e974aec3ff861b21521ea87ded4ae0f55947317143-jeffreyang', 'oas', '1234567890', 'true', '2017-12-28 05:50:52', '2017-12-28 06:29:34'),
(11, '93ec6302773e7b2e9017afffff2dbbpayment', 'a8d0e1d72bbc1c7e34c3e9b48d16d3637b2af97d355a-irvin', 'oas', '121212', 'true', '2017-12-28 07:20:01', '2017-12-28 07:24:00'),
(12, '3dfe37d1909bd648f88f7dadea0335payment', '2d4aa9fad5d8faef0239dbe63619d7b32e72d2be1d5d-johncena', 'oas', '1234567890', 'true', '2017-12-28 07:27:13', '2017-12-28 07:30:28'),
(16, '53cafb28402efc6f665c57e44a02b8payment', 'd69cab11467883411a6090aa9eca9d91edb01ea7fb78-sami', '', '', 'false', '2018-01-04 22:34:32', '2018-01-04 22:34:32'),
(17, 'fccd18217060b479ac7dbb067cc377payment', '5b2c9193e530520c99bc212efe2e007a751c3fa58d5c-sammilby', '', '', 'false', '2018-01-08 06:27:30', '2018-01-08 06:27:30'),
(18, '66a1f5619262a9be6a6c1bb3c03043payment', 'a24209bcc85b506f99d65a2dfef06789bf0b08fc85dc-barbs', '', '', 'false', '2018-01-11 22:42:48', '2018-01-11 22:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(10) UNSIGNED NOT NULL,
  `resultid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guidance_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `IQTest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MathTest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EnglishTest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `resultid`, `userid`, `guidance_username`, `IQTest`, `MathTest`, `EnglishTest`, `status`, `created_at`, `updated_at`) VALUES
(7, '5d5787271fbd61a25fcf8da82d0faaresults', '769300f9f0615af18fa0fa985d8805e569f3acdbfcbe-madmax', 'guidance', 'Average', 'Average', 'Average', 'true', '2017-12-28 04:05:57', '2017-12-28 04:11:47'),
(8, '3a5562847ad29f2d2d46f1cb783060results', 'f7ad4a06b96c6cc277d747830946a1d539957931b111-rian', 'guidance', 'Above Average', 'Above Average', 'Above Average', 'true', '2017-12-28 04:18:48', '2017-12-28 04:23:01'),
(9, '8cebf2878b71a594b8fdefd7d972d2results', '22e974aec3ff861b21521ea87ded4ae0f55947317143-jeffreyang', 'guidance', 'Average', 'Average', 'Average', 'true', '2017-12-28 05:50:52', '2017-12-28 06:30:34'),
(11, 'f5be1c272d3ca25f6b3e38c93a251dresults', 'a8d0e1d72bbc1c7e34c3e9b48d16d3637b2af97d355a-irvin', 'guidance', 'Above Average', 'Above Average', 'Average', 'true', '2017-12-28 07:20:01', '2017-12-28 07:24:55'),
(12, '472cd553cabe0d7e4ff60ea10bf72eresults', '2d4aa9fad5d8faef0239dbe63619d7b32e72d2be1d5d-johncena', 'guidance', 'Average', 'Average', 'Average', 'true', '2017-12-28 07:27:14', '2017-12-28 07:31:51'),
(16, '4e7a703f2c7e8ba3fa08c2ed4d47c3results', 'd69cab11467883411a6090aa9eca9d91edb01ea7fb78-sami', '', '', '', '', 'false', '2018-01-04 22:34:32', '2018-01-04 22:34:32'),
(17, '8d9212ab75d3abb0971e5e616386b5results', '5b2c9193e530520c99bc212efe2e007a751c3fa58d5c-sammilby', '', '', '', '', 'false', '2018-01-08 06:27:30', '2018-01-08 06:27:30'),
(18, 'cc2ac097077cfcd5f8f85a956d5e15results', 'a24209bcc85b506f99d65a2dfef06789bf0b08fc85dc-barbs', '', '', '', '', 'false', '2018-01-11 22:42:49', '2018-01-11 22:42:49');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `studentid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birthplace` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `civilstatus` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `homeaddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `provincialaddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schoolyear` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `studenttype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `steps_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `step_number` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `userid`, `studentid`, `firstname`, `middlename`, `lastname`, `username`, `email`, `password`, `birthdate`, `birthplace`, `gender`, `civilstatus`, `contact`, `homeaddress`, `provincialaddress`, `schoolyear`, `semester`, `department`, `studenttype`, `steps_status`, `step_number`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, '769300f9f0615af18fa0fa985d8805e569f3acdbfcbe-madmax', '17-7155-665', 'Lauren Brian', 'Lao', 'Sy', 'madmax', 'brian.maxispeed@gmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'May-27-1994', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Transferee', 'Officially Enrolled', 8, NULL, '2017-12-28 04:05:57', '2017-12-28 04:28:15'),
(9, 'f7ad4a06b96c6cc277d747830946a1d539957931b111-rian', '18-1000-000', 'Rian', 'Fiel', 'Segarra', 'rian', 'rian_segarra@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'August-18-1997', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Freshmen', 'Officially Enrolled', 7, NULL, '2017-12-28 04:18:48', '2017-12-28 04:23:29'),
(10, '22e974aec3ff861b21521ea87ded4ae0f55947317143-jeffreyang', '17-4557-176', 'Jeffrey', 'A', 'Ang', 'jeffreyang', 'jeffrey_ang@mail.com', '7c6a180b36896a0a8c02787eeafb0e4c', 'January-1-1994', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Transferee', 'Officially Enrolled', 8, NULL, '2017-12-28 05:50:52', '2017-12-28 06:39:50'),
(12, 'a8d0e1d72bbc1c7e34c3e9b48d16d3637b2af97d355a-irvin', '18-1111-100', 'Irvin', 'A', 'Abellanosa', 'irvin', 'irvin_abellanosa@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'January-1-1994', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Transferee', 'Officially Enrolled', 8, NULL, '2017-12-28 07:20:01', '2017-12-28 07:25:51'),
(13, '2d4aa9fad5d8faef0239dbe63619d7b32e72d2be1d5d-johncena', '18-2121-200', 'John', 'A', 'Cena', 'johncena', 'john_cena@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'January-1-1994', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Transferee', 'Officially Enrolled', 8, NULL, '2017-12-28 07:27:14', '2018-01-12 08:16:43'),
(17, 'd69cab11467883411a6090aa9eca9d91edb01ea7fb78-sami', '12-2222-222', 'Sami', 'A', 'Zayn', 'sami', 'sami_zayn@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'January-1-1994', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Freshmen', 'payment', 2, NULL, '2018-01-04 22:34:33', '2018-01-04 22:35:52'),
(18, '5b2c9193e530520c99bc212efe2e007a751c3fa58d5c-sammilby', '', 'Sam', 'A', 'Milby', 'sammilby', 'sam_milby@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'January-1-1994', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Transferee', 'evaluation', 1, NULL, '2018-01-08 06:27:31', '2018-01-08 06:27:31'),
(19, 'a24209bcc85b506f99d65a2dfef06789bf0b08fc85dc-barbs', '', 'Barbs', 'A', 'Fisher', 'barbs', 'barbs_fisher@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'January-1-1980', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Transferee', 'requirements', 2, NULL, '2018-01-11 22:42:49', '2018-01-11 23:53:41');

-- --------------------------------------------------------

--
-- Table structure for table `transferee`
--

CREATE TABLE `transferee` (
  `id` int(10) UNSIGNED NOT NULL,
  `userid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tocourse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fromcourse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fromschool` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transferee`
--

INSERT INTO `transferee` (`id`, `userid`, `tocourse`, `fromcourse`, `fromschool`, `created_at`, `updated_at`) VALUES
(2, '769300f9f0615af18fa0fa985d8805e569f3acdbfcbe-madmax', 'Bachelors of Science in Information Technology', 'Bachelors of Science in Information Technology', 'University Of San Jose Recoletos', '2017-12-28 04:05:57', '2017-12-28 04:28:15'),
(3, '22e974aec3ff861b21521ea87ded4ae0f55947317143-jeffreyang', 'Bachelors of Science in Information Technology', 'Bachelors of Science in Information Technology', 'University Of San Jose Recoletos', '2017-12-28 05:50:52', '2017-12-28 05:50:52'),
(5, 'a8d0e1d72bbc1c7e34c3e9b48d16d3637b2af97d355a-irvin', 'Bachelors of Science in Computer Science', 'Bachelors of Science in Computer Science', 'University Of San Carlos', '2017-12-28 07:20:00', '2017-12-28 07:20:00'),
(6, '2d4aa9fad5d8faef0239dbe63619d7b32e72d2be1d5d-johncena', 'Bachelors of Science in Information Technology', 'Bachelors of Science in Information Technology', 'University Of Cebu', '2017-12-28 07:27:13', '2018-01-12 08:16:43'),
(7, '5b2c9193e530520c99bc212efe2e007a751c3fa58d5c-sammilby', 'Bachelors of Science in Information Technology', 'Bachelors of Science in Information Technology', 'University Of San Jose Recoletos', '2018-01-08 06:27:30', '2018-01-08 06:27:30'),
(8, 'a24209bcc85b506f99d65a2dfef06789bf0b08fc85dc-barbs', 'Bachelors of Science in Information Technology', 'Bachelors of Science in Information Technology', 'University Of San Jose Recoletos', '2018-01-11 22:42:48', '2018-01-11 22:42:48');

-- --------------------------------------------------------

--
-- Table structure for table `transferee_requirements`
--

CREATE TABLE `transferee_requirements` (
  `id` int(10) UNSIGNED NOT NULL,
  `requirementsid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `userid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sao_username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NSO` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `COT` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GM` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TOR` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `RF` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `requirements_comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transferee_requirements`
--

INSERT INTO `transferee_requirements` (`id`, `requirementsid`, `userid`, `sao_username`, `NSO`, `COT`, `GM`, `TOR`, `RF`, `requirements_comment`, `status`, `created_at`, `updated_at`) VALUES
(2, 'c93e9e44fcc482bc02bf2dd51dc9d0transfereerequirements', '769300f9f0615af18fa0fa985d8805e569f3acdbfcbe-madmax', 'sao', 'true', 'true', 'true', 'true', 'true', 'Submission complete! Good job!', 'true', '2017-12-28 04:05:57', '2017-12-28 04:10:13'),
(3, 'e375762bf356ebab712181c02e45b6transfereerequirements', '22e974aec3ff861b21521ea87ded4ae0f55947317143-jeffreyang', 'sao', 'true', 'true', 'true', 'true', 'true', 'Good to proceed! Successfully submitted requirements!', 'true', '2017-12-28 05:50:52', '2017-12-28 06:25:21'),
(5, '50d99b8ed60119e921dcf1c378bbebtransfereerequirements', 'a8d0e1d72bbc1c7e34c3e9b48d16d3637b2af97d355a-irvin', 'sao', 'true', 'true', 'true', 'true', 'true', 'Good to proceed to payment!', 'true', '2017-12-28 07:20:01', '2017-12-28 07:25:30'),
(6, '9c36ed747f3172e69a7779421b0cb3transfereerequirements', '2d4aa9fad5d8faef0239dbe63619d7b32e72d2be1d5d-johncena', 'sao', 'true', 'true', 'true', 'true', 'true', 'Good to proceed!', 'true', '2017-12-28 07:27:13', '2017-12-28 07:32:23'),
(7, '3dc9945967ea0e81abc9135863afa1transfereerequirements', '5b2c9193e530520c99bc212efe2e007a751c3fa58d5c-sammilby', '', 'false', 'false', 'false', 'false', 'false', '', 'false', '2018-01-08 06:27:30', '2018-01-08 06:27:30'),
(8, '500f5c5857beef8d94b3201a5fdc17transfereerequirements', 'a24209bcc85b506f99d65a2dfef06789bf0b08fc85dc-barbs', '', 'false', 'false', 'false', 'false', 'false', '', 'false', '2018-01-11 22:42:48', '2018-01-11 22:42:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entranceexam`
--
ALTER TABLE `entranceexam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `evaluation`
--
ALTER TABLE `evaluation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examschedule`
--
ALTER TABLE `examschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examschedulelist`
--
ALTER TABLE `examschedulelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freshmen`
--
ALTER TABLE `freshmen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `freshmen_requirements`
--
ALTER TABLE `freshmen_requirements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `identification`
--
ALTER TABLE `identification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transferee`
--
ALTER TABLE `transferee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transferee_requirements`
--
ALTER TABLE `transferee_requirements`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `entranceexam`
--
ALTER TABLE `entranceexam`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `examschedule`
--
ALTER TABLE `examschedule`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `examschedulelist`
--
ALTER TABLE `examschedulelist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `freshmen`
--
ALTER TABLE `freshmen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `freshmen_requirements`
--
ALTER TABLE `freshmen_requirements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `identification`
--
ALTER TABLE `identification`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `interview`
--
ALTER TABLE `interview`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `transferee`
--
ALTER TABLE `transferee`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `transferee_requirements`
--
ALTER TABLE `transferee_requirements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
