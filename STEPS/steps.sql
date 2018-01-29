-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2018 at 04:25 PM
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
(15, '26d03db4d63c9e3739af14f7708842a5b0fcab6fd6e4-josephvillacorta', '26d03db4d63c9e3739af14f7708842a5b0fcab6fd6e4-josephvillacorta', 'Joseph', 'A', 'Villacorta', 'josephvillacorta', '5f4dcc3b5aa765d61d8327deb882cf99', 'joseph_villacorta@mail.com', '1234567890', 'Guidance Office', 'Department Head', 'January-1-1994', 'BSCS, MIT, BSBA', 'CIT University', '2018-01-17 09:36:55', '2018-01-17 09:36:55'),
(16, '7e7e61491ef26672641d9bad3fc73dbe6f9b08a63e5e-johnwick', '7e7e61491ef26672641d9bad3fc73dbe6f9b08a63e5e-johnwick', 'John', 'A', 'Wick', 'johnwick', '5f4dcc3b5aa765d61d8327deb882cf99', 'john.a.wick@mail.com', '0987654321', 'Office of Academic Scholarship', 'Working Staff', 'January-1-1990', 'MIT, BSBA', 'University Of Cebu', '2018-01-25 05:16:06', '2018-01-25 05:16:06');

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
(16, 'cdac3054c2ddb1914a04d5d8e11464exam', 'd69cab11467883411a6090aa9eca9d91edb01ea7fb78-sami', 'guidance', '', 'true', '2018-01-04 22:34:32', '2018-01-25 21:23:29'),
(17, 'e80f4659d33b4333692bbbd914b2f9exam', '5b2c9193e530520c99bc212efe2e007a751c3fa58d5c-sammilby', '', '', 'false', '2018-01-08 06:27:30', '2018-01-08 06:27:30'),
(18, '359f4135b864f2fac7627897fd68aaexam', 'a24209bcc85b506f99d65a2dfef06789bf0b08fc85dc-barbs', '', '', 'false', '2018-01-11 22:42:49', '2018-01-11 22:42:49'),
(19, '0a5507bc20820fbbd49ca237a9a093exam', 'fd159c263c7d3143b59dcd164f62cb9e71821fdcc9b5-braun', 'guidance', '', 'true', '2018-01-17 09:53:09', '2018-01-17 09:55:51'),
(20, '0a4c6ffb19cca4ce25d8b868b6d787exam', '9d6b333096207fc2aa0a20509475465ee62f0ed8d3fb-bigshow', 'guidance', '', 'true', '2018-01-17 09:57:24', '2018-01-17 09:59:07'),
(21, 'b58b421b2c9d2533481a9b637d7232exam', '8e29385c287e150c8a4c56ff0270f05a9fa27b86f2a2-maryabiabi', 'guidance', '', 'true', '2018-01-25 04:46:59', '2018-01-25 04:52:00'),
(22, 'f671f1c4d0231fe92dfd96156aa454exam', '95132d5d108ae41ae57cf4d40bfe50413cc3ad0723f1-adamcole', 'guidance', '', 'true', '2018-01-25 05:24:39', '2018-01-25 05:37:05'),
(23, '0f71021ccecbf326b0beec970effacexam', 'f85f77a1b438def890ae9eb675a41ec2c5c9f3b6135d-johnnywrestling', 'guidance', '', 'true', '2018-01-25 05:41:24', '2018-01-25 05:48:46'),
(24, '2e8f21a55e850d946e7aa9daaf40c6exam', '559dd2a8caf23740a5ce7be14ec35814f8101a89dec2-paullaviste', 'guidance', '', 'true', '2018-01-25 21:25:04', '2018-01-25 21:38:24'),
(25, 'dbaf98986160d0da3e74b768afe2e3exam', '772f31293d83d34db81575b9b29853ccf46ff9c0fd04-petergriffin', 'guidance', '', 'true', '2018-01-26 03:59:57', '2018-01-26 04:11:49'),
(26, '2668accf96059daedebf3d0a0ac977exam', 'a12cce1d2197dd0cc421fa4d0dee64f38b02868d507c-loisgriffin', 'guidance', '', 'true', '2018-01-26 04:16:48', '2018-01-26 04:25:12'),
(27, 'c65b262c9f2c78276b0eedebedff54exam', '3dbda33211a4066fdec980760f2d5eacc76e29bae926-aceace', 'guidance', '', 'true', '2018-01-28 05:41:18', '2018-01-28 06:02:53'),
(28, '2e730d18f3fecd5881de8ccd6cdaf5exam', '10ee086e4d26f76d4d7e0ab10e19c2f661c5f53b1e6e-cesaradora', 'guidance', '', 'true', '2018-01-28 06:08:23', '2018-01-28 06:12:47'),
(29, '8375b57de13f6b42a6f53485b61ef2exam', 'ceb9ba9f5ef56ebcfc44bede0e7da21a4a3d49c4b2bb-sampinto', 'guidance', '', 'true', '2018-01-28 06:25:36', '2018-01-28 06:29:42'),
(31, '551f110356e6a22efacdb1f5ee093fexam', '17b0d1b3de4f4073e6f72ca8578ac067059c335da30e-rogerpinto', 'guidance', '', 'true', '2018-01-28 06:46:54', '2018-01-28 06:49:21'),
(32, 'c43e5d70829ef83217552fc7f9885eexam', '63cde4b11cedaa367347add2281132626c07d557ffc6-kendalljenner', 'guidance', '', 'true', '2018-01-28 06:54:22', '2018-01-28 07:03:29'),
(33, '5b2b1706a2e0ece9b18f257ba9405cexam', '2672639228799a1b2b4196a124138cff3be259d877db-kyliejenner', 'guidance', '', 'true', '2018-01-28 06:56:03', '2018-01-28 07:02:02'),
(34, '4919dcb41e39e4d107eedd929038b5exam', 'f3546039e3ddd87adc687c6ad059709a5e08b2c6d191-marksantos', 'guidance', '', 'true', '2018-01-28 07:09:35', '2018-01-28 07:13:46'),
(35, '8cce831fa70bc81e493df34af32412exam', '1a0aafc85001512e7cbd8c8e9a884dc4aa63fcb22dd5-michaelsantos', 'guidance', '', 'true', '2018-01-28 07:15:33', '2018-01-28 07:17:41'),
(36, 'ede27c2c53ca6485ebd31ab8847215exam', '43cdab974ecff9cbedf34ad4f2eb4812b19192ceae0a-alexsantos', 'guidance', '', 'true', '2018-01-28 07:21:54', '2018-01-28 07:28:16'),
(37, 'b0e864ba25c4b7612add86624a510bexam', 'de17e862ad2cbcf947285534a1706968348f587fdefa-alvinsantos', 'guidance', '', 'true', '2018-01-28 07:21:54', '2018-01-28 07:28:16'),
(38, 'a694c9481cd0b50d83bb6c7366f160exam', 'c844f9534d475d5b006a57630991337ee399a90992d7-markstafford', 'guidance', '', 'true', '2018-01-29 01:05:27', '2018-01-29 01:38:49'),
(39, '6c7cdc25b213bf7a45d378dfe79254exam', '4f0417eef7a88faf8baab379b353a5ec3131002432d6-mattstafford', 'guidance', '', 'true', '2018-01-29 01:40:35', '2018-01-29 01:42:38'),
(40, '02f273f3607bcffd9cfe882d6cbc38exam', 'e8a783f0eeda2d62e0bdcbe206886232c5e03d14534d-melvin', 'guidance', '', 'true', '2018-01-29 01:53:56', '2018-01-29 01:56:50'),
(41, '4f3f3277f9c2503e1a8ba83d02131aexam', 'b10433472df5c4f0bc21aabc6c3b9ae774e9b41da9fa-ronanbarredo', 'guidance', '', 'true', '2018-01-29 01:58:19', '2018-01-29 02:00:39'),
(42, '569ae966530c83becc670945f6c603exam', '8eb10b51b32b170a95d4544288ced2a1faf9ae6e696c-alex123', 'guidance', '', 'true', '2018-01-29 06:54:27', '2018-01-29 07:12:53'),
(43, '040934fb557f7f62b02b5c05255a73exam', '5897ad779b67e1ca7e15327842853978c54f8f3fc3e0-albert123', 'josephvillacorta', '', 'true', '2018-01-29 06:56:08', '2018-01-29 07:12:53');

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
(8, '68058a4343a7c6d75f27510e9c27b7evaluation', 'a24209bcc85b506f99d65a2dfef06789bf0b08fc85dc-barbs', 'ralphlaviste', 'Bachelors of Science in Information Technology', 'College of Computer Science', 'true', 'Good to proceed but need to know exam results first.', '2018-01-11 22:42:48', '2018-01-11 23:53:41'),
(9, '8ae90cce1f5d7e0e3fd3622e830977evaluation', 'fd159c263c7d3143b59dcd164f62cb9e71821fdcc9b5-braun', 'larmie', 'Bachelors of Science in Information Technology', 'College of Computer Studies', 'true', 'Good to go!!!', '2018-01-17 09:53:08', '2018-01-17 09:53:43'),
(10, '760797fada684df71f7c2b44957eb2evaluation', '8e29385c287e150c8a4c56ff0270f05a9fa27b86f2a2-maryabiabi', 'ralphlaviste', 'Bachelors of Science in Information Technology', 'College of Computer Studies', 'true', 'Good to proceed!', '2018-01-25 04:46:59', '2018-01-25 04:47:49'),
(11, 'c93958e000d1c6a61651eeec389552evaluation', 'f85f77a1b438def890ae9eb675a41ec2c5c9f3b6135d-johnnywrestling', 'larmie', 'Bachelors of Science in Computer Science', 'College of Computer Studies', 'true', 'Good to proceed! Next Step!', '2018-01-25 05:41:23', '2018-01-25 05:45:36'),
(12, 'f1e2186e1a2c74556b9320b8e810d7evaluation', '559dd2a8caf23740a5ce7be14ec35814f8101a89dec2-paullaviste', 'ralphlaviste', 'Bachelors of Science in Information Technology', 'College of Computer Studies', 'true', 'Good to proceed!', '2018-01-25 21:25:04', '2018-01-25 21:26:24'),
(13, '69d44ad1c42887d820b9830d4e28fbevaluation', 'a12cce1d2197dd0cc421fa4d0dee64f38b02868d507c-loisgriffin', 'larmie', 'Bachelors of Science in Information Technology', 'College of Computer Studies', 'true', 'Good!', '2018-01-26 04:16:48', '2018-01-26 04:18:24'),
(14, '51b21774cf87ea6287882949ca3ebbevaluation', 'f3546039e3ddd87adc687c6ad059709a5e08b2c6d191-marksantos', 'ralphlaviste', 'Bachelors of Science in Information Technology', 'College of Computer Studies', 'true', 'Good to proceed!!!', '2018-01-28 07:09:34', '2018-01-28 07:10:28'),
(15, '8832bb72998ea1e4576918717c698bevaluation', '1a0aafc85001512e7cbd8c8e9a884dc4aa63fcb22dd5-michaelsantos', 'ralphlaviste', 'Bachelors of Science in Information Technology', 'College of Computer Studies', 'true', 'Good to proceed!!!!!!', '2018-01-28 07:15:32', '2018-01-28 07:16:12'),
(16, 'db007b832ccb87a98a31c2b7fc9152evaluation', 'e8a783f0eeda2d62e0bdcbe206886232c5e03d14534d-melvin', 'larmie', 'Bachelors of Science in Computer Science', 'College of Computer Studies', 'true', 'Good to proceed!!!', '2018-01-29 01:53:55', '2018-01-29 01:54:44'),
(17, '9936d28b33118ed648315ea48e32bbevaluation', 'b10433472df5c4f0bc21aabc6c3b9ae774e9b41da9fa-ronanbarredo', 'larmie', 'Bachelors of Science in Information Technology', 'College of Computer Studies', 'true', 'Good to proceed!', '2018-01-29 01:58:19', '2018-01-29 01:58:50'),
(18, '57d1796a46a84a06113b06aa3850fbevaluation', '8eb10b51b32b170a95d4544288ced2a1faf9ae6e696c-alex123', 'larmie', 'Bachelors of Science in Information Technology', 'College of Computer Studies', 'true', 'Good to proceed', '2018-01-29 06:54:27', '2018-01-29 07:00:22'),
(19, 'f0a47e97c19058d9e25fc61fadb5ffevaluation', '5897ad779b67e1ca7e15327842853978c54f8f3fc3e0-albert123', 'ralphlaviste', 'Bachelors of Science in Information Technology', 'College of Computer Studies', 'true', 'good to proceed', '2018-01-29 06:56:08', '2018-01-29 07:00:23');

-- --------------------------------------------------------

--
-- Table structure for table `examschedule`
--

CREATE TABLE `examschedule` (
  `id` int(10) UNSIGNED NOT NULL,
  `examscheduleid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `scheduleid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `userid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `schedule` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `examschedule`
--

INSERT INTO `examschedule` (`id`, `examscheduleid`, `scheduleid`, `userid`, `schedule`, `created_at`, `updated_at`) VALUES
(7, 'd9ce33761528ced4d73d4ef9611196examschedule', '', '769300f9f0615af18fa0fa985d8805e569f3acdbfcbe-madmax', '03/27/17 01:00PM-03:00PM', '2017-12-28 04:05:57', '2017-12-28 04:11:15'),
(8, 'f25011ec1ad6cc96b6638c4ec526bcexamschedule', '', 'f7ad4a06b96c6cc277d747830946a1d539957931b111-rian', '03/27/17 03:00AM-05:00PM', '2017-12-28 04:18:48', '2017-12-28 04:22:27'),
(9, 'b9fe23fad4e9f08ce64bfc9adba86fexamschedule', '', '22e974aec3ff861b21521ea87ded4ae0f55947317143-jeffreyang', '03/27/17 09:00AM-11:00PM', '2017-12-28 05:50:52', '2017-12-28 06:29:54'),
(11, 'c6d6ddc14d8bb82f52c78c8ded2514examschedule', '', 'a8d0e1d72bbc1c7e34c3e9b48d16d3637b2af97d355a-irvin', '03/27/17 01:00PM-03:00PM', '2017-12-28 07:20:01', '2017-12-28 07:24:24'),
(12, '673118c538b2c5a2910717bde40d00examschedule', '', '2d4aa9fad5d8faef0239dbe63619d7b32e72d2be1d5d-johncena', '03/27/17 01:00PM-03:00PM', '2017-12-28 07:27:13', '2017-12-28 07:31:04'),
(16, '60e369ae6b03a241816282257e32c8examschedule', '', 'd69cab11467883411a6090aa9eca9d91edb01ea7fb78-sami', '03/27/17 01:00PM-03:00PM', '2018-01-04 22:34:32', '2018-01-25 21:22:42'),
(17, '9f7be85154f2cc35add263ee21139fexamschedule', '', '5b2c9193e530520c99bc212efe2e007a751c3fa58d5c-sammilby', '', '2018-01-08 06:27:30', '2018-01-08 06:27:30'),
(18, '5e706021e8d6979cd91d782eed9f73examschedule', '', 'a24209bcc85b506f99d65a2dfef06789bf0b08fc85dc-barbs', '', '2018-01-11 22:42:48', '2018-01-11 22:42:48'),
(19, '3a10588a7b87a6b1aac9356a38bdafexamschedule', '', 'fd159c263c7d3143b59dcd164f62cb9e71821fdcc9b5-braun', '03/27/17 01:00PM-03:00PM', '2018-01-17 09:53:09', '2018-01-17 09:55:26'),
(20, '2731fee58fe137f716e4941eb7c53aexamschedule', '', '9d6b333096207fc2aa0a20509475465ee62f0ed8d3fb-bigshow', '03/27/17 03:00AM-05:00PM', '2018-01-17 09:57:24', '2018-01-17 09:58:46'),
(21, '15e963298525e2f1160c28b405d5e5examschedule', '', '8e29385c287e150c8a4c56ff0270f05a9fa27b86f2a2-maryabiabi', '03/27/17 03:00AM-05:00PM', '2018-01-25 04:46:59', '2018-01-25 04:51:13'),
(22, '364579abaababeb9b59060f26488fdexamschedule', '', '95132d5d108ae41ae57cf4d40bfe50413cc3ad0723f1-adamcole', '03/27/17 01:00PM-03:00PM', '2018-01-25 05:24:39', '2018-01-25 05:36:36'),
(23, '08d1272b537d873883512fd592e28dexamschedule', '', 'f85f77a1b438def890ae9eb675a41ec2c5c9f3b6135d-johnnywrestling', '03/27/17 01:00PM-03:00PM', '2018-01-25 05:41:24', '2018-01-25 05:48:11'),
(24, '9b1c44bcf7462ed90fbd2b7ce5c2bbexamschedule', '', '559dd2a8caf23740a5ce7be14ec35814f8101a89dec2-paullaviste', '03/27/17 03:00AM-05:00PM', '2018-01-25 21:25:04', '2018-01-25 21:38:08'),
(25, '6c91338488895992b85544fd5700e1examschedule', '', '772f31293d83d34db81575b9b29853ccf46ff9c0fd04-petergriffin', '03/27/17 01:00PM-03:00PM', '2018-01-26 03:59:57', '2018-01-26 04:11:08'),
(26, '7b9f2d3113047f0721edc1ab9c8a5aexamschedule', '', 'a12cce1d2197dd0cc421fa4d0dee64f38b02868d507c-loisgriffin', '03/27/17 03:00AM-05:00PM', '2018-01-26 04:16:48', '2018-01-26 04:24:18'),
(27, 'af05a4557bb90cb7b61e4597ec4e8fexamschedule', '', '3dbda33211a4066fdec980760f2d5eacc76e29bae926-aceace', '03/27/17 03:00AM-05:00PM', '2018-01-28 05:41:18', '2018-01-28 05:57:41'),
(28, 'd1621198f95ea6f1d016d07cb6b733examschedule', '', '10ee086e4d26f76d4d7e0ab10e19c2f661c5f53b1e6e-cesaradora', '03/27/17 03:00AM-05:00PM', '2018-01-28 06:08:22', '2018-01-28 06:12:23'),
(29, 'e4336779f4689e86500d0e6c057f9bexamschedule', '', 'ceb9ba9f5ef56ebcfc44bede0e7da21a4a3d49c4b2bb-sampinto', '03/27/17 01:00PM-03:00PM', '2018-01-28 06:25:36', '2018-01-28 06:29:13'),
(31, '30e0c10b9697ddd6ccc7c8b67f7c84examschedule', '', '17b0d1b3de4f4073e6f72ca8578ac067059c335da30e-rogerpinto', '03/27/17 01:00PM-03:00PM', '2018-01-28 06:46:54', '2018-01-28 06:48:53'),
(32, '1f0597f1ebd504bc2222fc9d6031bcexamschedule', '', '63cde4b11cedaa367347add2281132626c07d557ffc6-kendalljenner', '03/27/17 03:00AM-05:00PM', '2018-01-28 06:54:22', '2018-01-28 07:00:58'),
(33, '091113148aa012f29725edf4a809e8examschedule', '', '2672639228799a1b2b4196a124138cff3be259d877db-kyliejenner', '03/27/17 01:00PM-03:00PM', '2018-01-28 06:56:03', '2018-01-28 07:00:42'),
(34, '2d2e585afed28f605dca7bb5e6413cexamschedule', '', 'f3546039e3ddd87adc687c6ad059709a5e08b2c6d191-marksantos', '03/27/17 01:00PM-03:00PM', '2018-01-28 07:09:35', '2018-01-28 07:13:09'),
(35, '113b8e298e46ba8b2e7b272e32840eexamschedule', '', '1a0aafc85001512e7cbd8c8e9a884dc4aa63fcb22dd5-michaelsantos', '03/27/17 09:00AM-11:00PM', '2018-01-28 07:15:33', '2018-01-28 07:17:21'),
(36, 'ccc938c6a318faeba75c1a6d9b7861examschedule', '', '43cdab974ecff9cbedf34ad4f2eb4812b19192ceae0a-alexsantos', '03/27/17 01:00PM-03:00PM', '2018-01-28 07:21:54', '2018-01-28 07:27:13'),
(37, 'ee7750fd9e7d2101632e80e0cba5eeexamschedule', '', 'de17e862ad2cbcf947285534a1706968348f587fdefa-alvinsantos', '03/27/17 01:00PM-03:00PM', '2018-01-28 07:21:54', '2018-01-28 07:27:13'),
(38, 'f9f6b17c8761a378632c0d8ccc7320examschedule', '28abdffffe54db8364bbd12ada5f0317e58aefa2', 'c844f9534d475d5b006a57630991337ee399a90992d7-markstafford', 'Monday 01/29/2018 08:00AM-10:00AM', '2018-01-29 01:05:27', '2018-01-29 01:37:22'),
(39, '62606abb0234d0f4f7572b4b2350d0examschedule', '3156c8d4b55897de410537484a78901440f8c162', '4f0417eef7a88faf8baab379b353a5ec3131002432d6-mattstafford', 'Thursday 01/25/2018 01:00PM-03:00PM', '2018-01-29 01:40:35', '2018-01-29 01:42:11'),
(40, '3e4f1e926cfa998167d7d08cd8e080examschedule', '28abdffffe54db8364bbd12ada5f0317e58aefa2', 'e8a783f0eeda2d62e0bdcbe206886232c5e03d14534d-melvin', 'Monday 01/29/2018 08:00AM-10:00AM', '2018-01-29 01:53:56', '2018-01-29 01:56:24'),
(41, 'deeeb234b890639346ca23b400bd8fexamschedule', '2baedffb20d1fb0e954683b4e1ba664ee3ee4bde', 'b10433472df5c4f0bc21aabc6c3b9ae774e9b41da9fa-ronanbarredo', 'Wednesday 01/24/2018 03:00PM-05:00PM', '2018-01-29 01:58:19', '2018-01-29 02:00:12'),
(42, '8d74d607de625f02a8258d8b52f2e0examschedule', '28abdffffe54db8364bbd12ada5f0317e58aefa2', '8eb10b51b32b170a95d4544288ced2a1faf9ae6e696c-alex123', 'Monday 01/29/2018 08:00AM-10:00AM', '2018-01-29 06:54:27', '2018-01-29 07:11:02'),
(43, '477df5473202e6480dac7e74e3588eexamschedule', '28abdffffe54db8364bbd12ada5f0317e58aefa2', '5897ad779b67e1ca7e15327842853978c54f8f3fc3e0-albert123', 'Monday 01/29/2018 08:00AM-10:00AM', '2018-01-29 06:56:08', '2018-01-29 07:11:02');

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

--
-- Dumping data for table `examschedulelist`
--

INSERT INTO `examschedulelist` (`id`, `scheduleid`, `schedule_day`, `schedule_date`, `schedule_time`, `facilitator`, `guidance_username`, `created_at`, `updated_at`) VALUES
(1, '4cf9b17f4065796815cc8dd90a79493a2eb7ef89', 'Wednesday', '01/24/2018', '08:00AM-10:00AM', 'Joseph Villacorta', 'guidance', '2018-01-24 02:35:40', '2018-01-24 02:35:40'),
(2, '2ae4bd92606c49bac1567380633106958f2aff43', 'Wednesday', '01/24/2018', '10:00AM-12:00PM', 'Joseph Villacorta', 'guidance', '2018-01-24 02:35:49', '2018-01-24 02:35:49'),
(3, 'b0e4b3249fe7bd955da1afdb302110139420a407', 'Wednesday', '01/24/2018', '01:00PM-03:00PM', 'Joseph Villacorta', 'guidance', '2018-01-24 02:36:00', '2018-01-24 02:36:00'),
(4, '2baedffb20d1fb0e954683b4e1ba664ee3ee4bde', 'Wednesday', '01/24/2018', '03:00PM-05:00PM', 'Joseph Villacorta', 'guidance', '2018-01-24 02:36:08', '2018-01-24 02:36:08'),
(5, 'ebccea932c92d81e1504f5dc48179719baabfedd', 'Thursday', '01/25/2018', '08:00AM-10:00AM', 'guidance guidance', 'josephvillacorta', '2018-01-24 02:37:12', '2018-01-24 02:37:12'),
(6, '141d79d40dd50af2f30e4e77a0c43c7e5708a6bc', 'Thursday', '01/25/2018', '10:00AM-12:00PM', 'guidance guidance', 'josephvillacorta', '2018-01-24 02:37:21', '2018-01-24 02:37:21'),
(7, '3156c8d4b55897de410537484a78901440f8c162', 'Thursday', '01/25/2018', '01:00PM-03:00PM', 'guidance guidance', 'josephvillacorta', '2018-01-24 02:37:33', '2018-01-24 02:37:33'),
(8, '971011ec206937eca8ab43ef9c960ba13b8803a5', 'Thursday', '01/25/2018', '03:00PM-05:00PM', 'guidance guidance', 'josephvillacorta', '2018-01-24 02:37:41', '2018-01-24 02:37:41'),
(9, '28abdffffe54db8364bbd12ada5f0317e58aefa2', 'Monday', '01/29/2018', '08:00AM-10:00AM', 'Joseph Villacorta', 'guidance', '2018-01-28 06:01:57', '2018-01-28 06:01:57');

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
(13, 'd69cab11467883411a6090aa9eca9d91edb01ea7fb78-sami', 'Cebu Cherish School', 'Bachelors of Science in Information Technology', '2018-01-04 22:34:32', '2018-01-04 22:34:32'),
(14, '9d6b333096207fc2aa0a20509475465ee62f0ed8d3fb-bigshow', 'Cebu Cherish School', 'Bachelors of Science in Computer Science', '2018-01-17 09:57:23', '2018-01-17 09:57:23'),
(15, '95132d5d108ae41ae57cf4d40bfe50413cc3ad0723f1-adamcole', 'Cebu Cherish School', 'Bachelors of Science in Information Technology', '2018-01-25 05:24:39', '2018-01-25 05:24:39'),
(16, '772f31293d83d34db81575b9b29853ccf46ff9c0fd04-petergriffin', 'University of Cebu', 'Bachelors of Science in Information Technology', '2018-01-26 03:59:56', '2018-01-26 03:59:56'),
(17, '3dbda33211a4066fdec980760f2d5eacc76e29bae926-aceace', 'Sacred Heart School Cebu', 'Bachelors of Science in Computer Science', '2018-01-28 05:41:18', '2018-01-28 05:41:18'),
(18, '10ee086e4d26f76d4d7e0ab10e19c2f661c5f53b1e6e-cesaradora', 'Cebu Cherish School', 'Bachelors of Science in Information Technology', '2018-01-28 06:08:22', '2018-01-28 06:08:22'),
(19, 'ceb9ba9f5ef56ebcfc44bede0e7da21a4a3d49c4b2bb-sampinto', 'Cebu Cherish School', 'Bachelors of Science in Computer Science', '2018-01-28 06:25:36', '2018-01-28 06:25:36'),
(21, '17b0d1b3de4f4073e6f72ca8578ac067059c335da30e-rogerpinto', 'Cebu Cherish School', 'Bachelors of Science in Computer Science', '2018-01-28 06:46:53', '2018-01-28 06:46:53'),
(22, '63cde4b11cedaa367347add2281132626c07d557ffc6-kendalljenner', 'Cebu Cherish School', 'Bachelors of Science in Computer Science', '2018-01-28 06:54:21', '2018-01-28 06:54:21'),
(23, '2672639228799a1b2b4196a124138cff3be259d877db-kyliejenner', 'Cebu Cherish School', 'Bachelors of Science in Computer Science', '2018-01-28 06:56:03', '2018-01-28 06:56:03'),
(24, '43cdab974ecff9cbedf34ad4f2eb4812b19192ceae0a-alexsantos', 'Cebu Institute of Technology University', 'Bachelors of Science in Information Technology', '2018-01-28 07:21:53', '2018-01-28 07:21:53'),
(25, 'de17e862ad2cbcf947285534a1706968348f587fdefa-alvinsantos', 'Cebu Cherish School', 'Bachelors of Science in Computer Science', '2018-01-28 07:21:54', '2018-01-28 07:21:54'),
(26, 'c844f9534d475d5b006a57630991337ee399a90992d7-markstafford', 'Cebu Cherish School', 'Bachelors of Science in Computer Science', '2018-01-29 01:05:27', '2018-01-29 01:05:27'),
(27, '4f0417eef7a88faf8baab379b353a5ec3131002432d6-mattstafford', 'Cebu Cherish School', 'Bachelors of Science in Information Technology', '2018-01-29 01:40:34', '2018-01-29 01:40:34');

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
(10, 'bac656a32fc27393ac9b6d14df7abdfreshmenrequirements', 'd69cab11467883411a6090aa9eca9d91edb01ea7fb78-sami', 'oas', 'true', 'true', 'true', 'true', 'blablabla', 'true', '2018-01-04 22:34:32', '2018-01-04 22:35:52'),
(11, 'bf1e0231a4debcd0945f5785b989f5freshmenrequirements', '9d6b333096207fc2aa0a20509475465ee62f0ed8d3fb-bigshow', 'oas', 'true', 'true', 'true', 'true', 'Good to proceed!', 'true', '2018-01-17 09:57:23', '2018-01-17 09:59:26'),
(12, '2ecf15cebc26ce66947d526deeedd8freshmenrequirements', '95132d5d108ae41ae57cf4d40bfe50413cc3ad0723f1-adamcole', 'johnwick', 'true', 'true', 'true', 'true', 'Good to go!', 'true', '2018-01-25 05:24:39', '2018-01-25 05:25:52'),
(13, '699b89ed84fa8886b483bbf18d4452freshmenrequirements', '772f31293d83d34db81575b9b29853ccf46ff9c0fd04-petergriffin', 'oas', 'true', 'true', 'true', 'true', 'Good to proceed!', 'true', '2018-01-26 03:59:56', '2018-01-26 04:08:09'),
(14, '69d647e9496d6e11e4b08d87e60f1bfreshmenrequirements', '3dbda33211a4066fdec980760f2d5eacc76e29bae926-aceace', 'oas', 'true', 'true', 'true', 'true', 'Requirements Completed. Good to proceed to next step.', 'true', '2018-01-28 05:41:18', '2018-01-28 05:54:41'),
(15, '3daec71e8812c96c5c7a71ee92ec3afreshmenrequirements', '10ee086e4d26f76d4d7e0ab10e19c2f661c5f53b1e6e-cesaradora', 'oas', 'true', 'true', 'true', 'true', 'Good to proceed', 'true', '2018-01-28 06:08:22', '2018-01-28 06:10:25'),
(16, 'f50854063d11b9a2398c8905545667freshmenrequirements', 'ceb9ba9f5ef56ebcfc44bede0e7da21a4a3d49c4b2bb-sampinto', 'oas', 'true', 'true', 'true', 'true', 'Good to go!!!', 'true', '2018-01-28 06:25:36', '2018-01-28 06:28:28'),
(18, '71b0064f554f2b7c27091117058314freshmenrequirements', '17b0d1b3de4f4073e6f72ca8578ac067059c335da30e-rogerpinto', 'oas', 'true', 'true', 'true', 'true', 'Good to proceed but need to submit NCAE result!', 'true', '2018-01-28 06:46:53', '2018-01-28 06:49:37'),
(19, '2b3e7aecc008e4a27ec811df05da02freshmenrequirements', '63cde4b11cedaa367347add2281132626c07d557ffc6-kendalljenner', 'oas', 'true', 'true', 'true', 'true', 'Good to proceed!', 'true', '2018-01-28 06:54:21', '2018-01-28 06:57:18'),
(20, '00d263c846da64f88d6c4b77756ad6freshmenrequirements', '2672639228799a1b2b4196a124138cff3be259d877db-kyliejenner', 'oas', 'true', 'true', 'true', 'true', 'Good to proceed but need to submit Good moral Certificate', 'true', '2018-01-28 06:56:03', '2018-01-28 07:04:45'),
(21, '24e4ed46c400f1cb2a01f08e8a6e87freshmenrequirements', '43cdab974ecff9cbedf34ad4f2eb4812b19192ceae0a-alexsantos', 'oas', 'true', 'true', 'true', 'true', 'Good to go!', 'true', '2018-01-28 07:21:53', '2018-01-28 07:25:06'),
(22, 'b397f097425f9cd07c89236caec61afreshmenrequirements', 'de17e862ad2cbcf947285534a1706968348f587fdefa-alvinsantos', 'johnwick', 'true', 'true', 'true', 'true', 'Good to go!!!', 'true', '2018-01-28 07:21:54', '2018-01-28 07:28:59'),
(23, '1b1901974fc004d0c69578db3079adfreshmenrequirements', 'c844f9534d475d5b006a57630991337ee399a90992d7-markstafford', 'oas', 'true', 'true', 'true', 'true', 'Good to proceed!', 'true', '2018-01-29 01:05:27', '2018-01-29 01:06:29'),
(24, '77563e66fe76507b8f158d1c46ca20freshmenrequirements', '4f0417eef7a88faf8baab379b353a5ec3131002432d6-mattstafford', 'oas', 'true', 'true', 'true', 'true', 'Good to proceed!!!!', 'true', '2018-01-29 01:40:35', '2018-01-29 01:42:52');

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
(16, 'd69cab11467883411a6090aa9eca9d91edb01ea7fb78-sami', 'oas', 'true', '2018-01-04 22:34:32', '2018-01-25 21:22:31'),
(17, '5b2c9193e530520c99bc212efe2e007a751c3fa58d5c-sammilby', '', 'false', '2018-01-08 06:27:30', '2018-01-08 06:27:30'),
(18, 'a24209bcc85b506f99d65a2dfef06789bf0b08fc85dc-barbs', '', 'false', '2018-01-11 22:42:48', '2018-01-11 22:42:48'),
(19, 'fd159c263c7d3143b59dcd164f62cb9e71821fdcc9b5-braun', 'oas', 'true', '2018-01-17 09:53:09', '2018-01-17 09:55:14'),
(20, '9d6b333096207fc2aa0a20509475465ee62f0ed8d3fb-bigshow', 'oas', 'true', '2018-01-17 09:57:23', '2018-01-17 09:58:36'),
(21, '8e29385c287e150c8a4c56ff0270f05a9fa27b86f2a2-maryabiabi', 'oas', 'true', '2018-01-25 04:46:59', '2018-01-25 04:50:57'),
(22, '95132d5d108ae41ae57cf4d40bfe50413cc3ad0723f1-adamcole', 'johnwick', 'true', '2018-01-25 05:24:39', '2018-01-25 05:36:27'),
(23, 'f85f77a1b438def890ae9eb675a41ec2c5c9f3b6135d-johnnywrestling', 'oas', 'true', '2018-01-25 05:41:24', '2018-01-25 05:47:56'),
(24, '559dd2a8caf23740a5ce7be14ec35814f8101a89dec2-paullaviste', 'oas', 'true', '2018-01-25 21:25:04', '2018-01-25 21:37:58'),
(25, '772f31293d83d34db81575b9b29853ccf46ff9c0fd04-petergriffin', 'oas', 'true', '2018-01-26 03:59:57', '2018-01-26 04:10:27'),
(26, 'a12cce1d2197dd0cc421fa4d0dee64f38b02868d507c-loisgriffin', 'oas', 'true', '2018-01-26 04:16:48', '2018-01-26 04:23:45'),
(27, '3dbda33211a4066fdec980760f2d5eacc76e29bae926-aceace', 'oas', 'true', '2018-01-28 05:41:18', '2018-01-28 05:56:37'),
(28, '10ee086e4d26f76d4d7e0ab10e19c2f661c5f53b1e6e-cesaradora', 'oas', 'true', '2018-01-28 06:08:22', '2018-01-28 06:12:13'),
(29, 'ceb9ba9f5ef56ebcfc44bede0e7da21a4a3d49c4b2bb-sampinto', 'oas', 'true', '2018-01-28 06:25:36', '2018-01-28 06:28:58'),
(31, '17b0d1b3de4f4073e6f72ca8578ac067059c335da30e-rogerpinto', 'oas', 'true', '2018-01-28 06:46:54', '2018-01-28 06:48:42'),
(32, '63cde4b11cedaa367347add2281132626c07d557ffc6-kendalljenner', 'oas', 'true', '2018-01-28 06:54:21', '2018-01-28 07:00:26'),
(33, '2672639228799a1b2b4196a124138cff3be259d877db-kyliejenner', 'oas', 'true', '2018-01-28 06:56:03', '2018-01-28 07:00:08'),
(34, 'f3546039e3ddd87adc687c6ad059709a5e08b2c6d191-marksantos', 'oas', 'true', '2018-01-28 07:09:35', '2018-01-28 07:12:56'),
(35, '1a0aafc85001512e7cbd8c8e9a884dc4aa63fcb22dd5-michaelsantos', 'oas', 'true', '2018-01-28 07:15:33', '2018-01-28 07:17:12'),
(36, '43cdab974ecff9cbedf34ad4f2eb4812b19192ceae0a-alexsantos', 'oas', 'true', '2018-01-28 07:21:54', '2018-01-28 07:26:11'),
(37, 'de17e862ad2cbcf947285534a1706968348f587fdefa-alvinsantos', 'johnwick', 'true', '2018-01-28 07:21:54', '2018-01-28 07:26:11'),
(38, 'c844f9534d475d5b006a57630991337ee399a90992d7-markstafford', 'oas', 'true', '2018-01-29 01:05:27', '2018-01-29 01:06:51'),
(39, '4f0417eef7a88faf8baab379b353a5ec3131002432d6-mattstafford', 'oas', 'true', '2018-01-29 01:40:35', '2018-01-29 01:41:57'),
(40, 'e8a783f0eeda2d62e0bdcbe206886232c5e03d14534d-melvin', 'oas', 'true', '2018-01-29 01:53:56', '2018-01-29 01:56:13'),
(41, 'b10433472df5c4f0bc21aabc6c3b9ae774e9b41da9fa-ronanbarredo', 'oas', 'true', '2018-01-29 01:58:19', '2018-01-29 01:59:56'),
(42, '8eb10b51b32b170a95d4544288ced2a1faf9ae6e696c-alex123', 'johnwick', 'true', '2018-01-29 06:54:27', '2018-01-29 07:09:55'),
(43, '5897ad779b67e1ca7e15327842853978c54f8f3fc3e0-albert123', 'oas', 'true', '2018-01-29 06:56:08', '2018-01-29 07:09:55');

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
(16, '40a6ac386e2e2120288becf971a3bcinterview', 'd69cab11467883411a6090aa9eca9d91edb01ea7fb78-sami', '', 'oas', 'true', 'Good to go!!!!', '2018-01-04 22:34:33', '2018-01-25 21:23:51'),
(17, '75211368d5d815d47a50f222187df9interview', '5b2c9193e530520c99bc212efe2e007a751c3fa58d5c-sammilby', '', '', 'false', '', '2018-01-08 06:27:31', '2018-01-08 06:27:31'),
(18, '251c60d0f7ceecee8ec7ff5b0a49c8interview', 'a24209bcc85b506f99d65a2dfef06789bf0b08fc85dc-barbs', '', '', 'false', '', '2018-01-11 22:42:49', '2018-01-11 22:42:49'),
(19, '9c612db1fb3b4f157cde474e16795cinterview', 'fd159c263c7d3143b59dcd164f62cb9e71821fdcc9b5-braun', '', 'sao', 'true', 'Okay good!', '2018-01-17 09:53:09', '2018-01-17 09:56:11'),
(20, '2ab7a0da2bad955817624608b26467interview', '9d6b333096207fc2aa0a20509475465ee62f0ed8d3fb-bigshow', '', 'oas', 'true', 'Good to proceed!!!!!', '2018-01-17 09:57:24', '2018-01-17 09:59:44'),
(21, '3d887424cb03fe18bc713d8c4fdf97interview', '8e29385c287e150c8a4c56ff0270f05a9fa27b86f2a2-maryabiabi', '', 'sao', 'true', 'Good to proceed to enrollment!', '2018-01-25 04:46:59', '2018-01-25 04:52:45'),
(22, '6d789f1b388ba09daf6ac178920208interview', '95132d5d108ae41ae57cf4d40bfe50413cc3ad0723f1-adamcole', '', 'johnwick', 'true', 'good to proceed! Officially enrolled!!!', '2018-01-25 05:24:40', '2018-01-25 05:37:38'),
(23, '7ff96d087bc340204f0ec69051a865interview', 'f85f77a1b438def890ae9eb675a41ec2c5c9f3b6135d-johnnywrestling', '', 'sao', 'true', 'good to go!!! good luck', '2018-01-25 05:41:24', '2018-01-25 05:49:27'),
(24, '367214404b6e542f2db25c69591ad0interview', '559dd2a8caf23740a5ce7be14ec35814f8101a89dec2-paullaviste', '', 'sao', 'true', 'Good to proceed!!!', '2018-01-25 21:25:04', '2018-01-25 21:38:39'),
(25, '75ca5313961e8eab15c3ac20c969d7interview', '772f31293d83d34db81575b9b29853ccf46ff9c0fd04-petergriffin', '', 'oas', 'true', 'ok', '2018-01-26 03:59:57', '2018-01-26 04:12:25'),
(26, '83c278a4124559b89ceb700cb9979ainterview', 'a12cce1d2197dd0cc421fa4d0dee64f38b02868d507c-loisgriffin', '', 'sao', 'true', 'good', '2018-01-26 04:16:48', '2018-01-26 04:28:15'),
(27, 'e82ecba9f53b06dbcdc42b8e864ac1interview', '3dbda33211a4066fdec980760f2d5eacc76e29bae926-aceace', '', 'oas', 'true', 'Good to go!!!!', '2018-01-28 05:41:18', '2018-01-28 06:03:21'),
(28, 'e850c4513d19cdaa39ee4f16258b59interview', '10ee086e4d26f76d4d7e0ab10e19c2f661c5f53b1e6e-cesaradora', '', 'oas', 'true', 'Good to proceed!', '2018-01-28 06:08:23', '2018-01-28 06:13:06'),
(29, '43c5aff4818f0d35c3d9d81e5d386ainterview', 'ceb9ba9f5ef56ebcfc44bede0e7da21a4a3d49c4b2bb-sampinto', '', 'oas', 'true', 'Good to proceed!!!', '2018-01-28 06:25:37', '2018-01-28 06:30:15'),
(31, '864aac2bc2fa43cedd65e851de97a1interview', '17b0d1b3de4f4073e6f72ca8578ac067059c335da30e-rogerpinto', '', 'oas', 'true', 'Good to proceed!!!', '2018-01-28 06:46:54', '2018-01-28 06:49:44'),
(32, '89bd9b074a208097ad4806c021fbddinterview', '63cde4b11cedaa367347add2281132626c07d557ffc6-kendalljenner', '', 'oas', 'true', 'Good to go!', '2018-01-28 06:54:22', '2018-01-28 07:03:58'),
(33, 'dd90bd352d9c74924a28f7843f9ef6interview', '2672639228799a1b2b4196a124138cff3be259d877db-kyliejenner', '', 'oas', 'true', '', '2018-01-28 06:56:03', '2018-01-28 07:05:10'),
(34, '535e9afda918e0660e833fe01942bainterview', 'f3546039e3ddd87adc687c6ad059709a5e08b2c6d191-marksantos', '', 'sao', 'true', 'Good to go!!!', '2018-01-28 07:09:35', '2018-01-28 07:14:04'),
(35, '8a46811156b774650110bfaa66df83interview', '1a0aafc85001512e7cbd8c8e9a884dc4aa63fcb22dd5-michaelsantos', '', 'sao', 'true', 'Good to proceed gaw!', '2018-01-28 07:15:33', '2018-01-28 07:18:08'),
(36, '872734f5f166bcc0ae61b897a09cfdinterview', '43cdab974ecff9cbedf34ad4f2eb4812b19192ceae0a-alexsantos', '', 'oas', 'true', 'good to go!!!', '2018-01-28 07:21:54', '2018-01-28 07:29:06'),
(37, 'd20a0a09b9b45e8cde1b56f0b9fae5interview', 'de17e862ad2cbcf947285534a1706968348f587fdefa-alvinsantos', '', 'johnwick', 'true', 'Good to go!', '2018-01-28 07:21:54', '2018-01-28 07:29:06'),
(38, '959d8035ab89b6dac9412553af1c59interview', 'c844f9534d475d5b006a57630991337ee399a90992d7-markstafford', '', 'oas', 'true', 'Good to proceed to enrollment!', '2018-01-29 01:05:27', '2018-01-29 01:39:14'),
(39, 'df137c67479260e165ee02cd5e73f5interview', '4f0417eef7a88faf8baab379b353a5ec3131002432d6-mattstafford', '', 'oas', 'true', 'Good to proceed to enrollment!!!', '2018-01-29 01:40:35', '2018-01-29 01:43:05'),
(40, 'ed7f3b02de6d55efe9b200c64eb8fbinterview', 'e8a783f0eeda2d62e0bdcbe206886232c5e03d14534d-melvin', '', 'sao', 'true', 'Good to proceed!!!', '2018-01-29 01:53:56', '2018-01-29 01:57:11'),
(41, 'd2dbe4d1290782296042ca1770eda5interview', 'b10433472df5c4f0bc21aabc6c3b9ae774e9b41da9fa-ronanbarredo', '', 'sao', 'true', 'Good to proceed!', '2018-01-29 01:58:19', '2018-01-29 02:01:03'),
(42, '28422732e37f773ba9a5a30de465c5interview', '8eb10b51b32b170a95d4544288ced2a1faf9ae6e696c-alex123', '', 'mannypacquiao', 'true', 'Good to go!', '2018-01-29 06:54:28', '2018-01-29 07:14:45'),
(43, 'a19b4deb2fe87ae53f62cdd7b6410einterview', '5897ad779b67e1ca7e15327842853978c54f8f3fc3e0-albert123', '', 'sao', 'true', 'good', '2018-01-29 06:56:08', '2018-01-29 07:14:45');

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
(16, '53cafb28402efc6f665c57e44a02b8payment', 'd69cab11467883411a6090aa9eca9d91edb01ea7fb78-sami', 'oas', '1234567890', 'true', '2018-01-04 22:34:32', '2018-01-25 21:22:18'),
(17, 'fccd18217060b479ac7dbb067cc377payment', '5b2c9193e530520c99bc212efe2e007a751c3fa58d5c-sammilby', '', '', 'false', '2018-01-08 06:27:30', '2018-01-08 06:27:30'),
(18, '66a1f5619262a9be6a6c1bb3c03043payment', 'a24209bcc85b506f99d65a2dfef06789bf0b08fc85dc-barbs', '', '', 'false', '2018-01-11 22:42:48', '2018-01-11 22:42:48'),
(19, 'a280def93091ff1d454e7f1de54e2apayment', 'fd159c263c7d3143b59dcd164f62cb9e71821fdcc9b5-braun', 'oas', '090909090', 'true', '2018-01-17 09:53:09', '2018-01-17 09:55:00'),
(20, 'ef4cc80b73ce3b4d0aead0d072e2cdpayment', '9d6b333096207fc2aa0a20509475465ee62f0ed8d3fb-bigshow', 'oas', '1234567890', 'true', '2018-01-17 09:57:23', '2018-01-17 09:58:27'),
(21, 'b2b853d99978fbb27afbd93f04c0f5payment', '8e29385c287e150c8a4c56ff0270f05a9fa27b86f2a2-maryabiabi', 'oas', '1234567890', 'true', '2018-01-25 04:46:59', '2018-01-25 04:50:47'),
(22, '8a017f296ca44c63244f2a6c223aa7payment', '95132d5d108ae41ae57cf4d40bfe50413cc3ad0723f1-adamcole', 'johnwick', '1234567890', 'true', '2018-01-25 05:24:39', '2018-01-25 05:36:11'),
(23, 'e87179138efce713c5d40ffb158397payment', 'f85f77a1b438def890ae9eb675a41ec2c5c9f3b6135d-johnnywrestling', 'oas', '1234567890', 'true', '2018-01-25 05:41:24', '2018-01-25 05:47:31'),
(24, '96c43a216be5dcee4651197a2ba2b5payment', '559dd2a8caf23740a5ce7be14ec35814f8101a89dec2-paullaviste', 'oas', '0987654321', 'true', '2018-01-25 21:25:04', '2018-01-25 21:37:50'),
(25, '187bffd9928a1afb238679229ce43fpayment', '772f31293d83d34db81575b9b29853ccf46ff9c0fd04-petergriffin', 'oas', '123456', 'true', '2018-01-26 03:59:56', '2018-01-26 04:09:30'),
(26, '0868cd8f3ad31e5708305f1bcbbec6payment', 'a12cce1d2197dd0cc421fa4d0dee64f38b02868d507c-loisgriffin', 'oas', '123456', 'true', '2018-01-26 04:16:48', '2018-01-26 04:23:03'),
(27, '14127afe08bee964c4e39ebb108d04payment', '3dbda33211a4066fdec980760f2d5eacc76e29bae926-aceace', 'oas', '1234567890', 'true', '2018-01-28 05:41:18', '2018-01-28 05:56:18'),
(28, '289848d446190dd4b3fe02a3755840payment', '10ee086e4d26f76d4d7e0ab10e19c2f661c5f53b1e6e-cesaradora', 'oas', '1234567890', 'true', '2018-01-28 06:08:22', '2018-01-28 06:12:02'),
(29, '608215942a6ca84ac3e0a8682f773dpayment', 'ceb9ba9f5ef56ebcfc44bede0e7da21a4a3d49c4b2bb-sampinto', 'oas', '1234567890', 'true', '2018-01-28 06:25:36', '2018-01-28 06:28:48'),
(31, '6e73144d849de8a8fe27173ba14175payment', '17b0d1b3de4f4073e6f72ca8578ac067059c335da30e-rogerpinto', 'oas', '12345677880', 'true', '2018-01-28 06:46:53', '2018-01-28 06:48:33'),
(32, 'c2d796507e0353d7abe89f98369eb5payment', '63cde4b11cedaa367347add2281132626c07d557ffc6-kendalljenner', 'oas', '123456789', 'true', '2018-01-28 06:54:21', '2018-01-28 06:59:29'),
(33, '2cfdd737b0177bb405a6a62ee068d5payment', '2672639228799a1b2b4196a124138cff3be259d877db-kyliejenner', 'oas', '1234512345', 'true', '2018-01-28 06:56:03', '2018-01-28 06:59:52'),
(34, 'ee3fbe183fa8f6a04b6b61303d34b8payment', 'f3546039e3ddd87adc687c6ad059709a5e08b2c6d191-marksantos', 'oas', '1234567890', 'true', '2018-01-28 07:09:35', '2018-01-28 07:12:29'),
(35, '0ab79fea51ad5823d2a5cc8fce13f5payment', '1a0aafc85001512e7cbd8c8e9a884dc4aa63fcb22dd5-michaelsantos', 'oas', '1234567890', 'true', '2018-01-28 07:15:33', '2018-01-28 07:17:01'),
(36, 'bd0e73f7a7e4c65032cd652dac69b6payment', '43cdab974ecff9cbedf34ad4f2eb4812b19192ceae0a-alexsantos', 'oas', '1234567890', 'true', '2018-01-28 07:21:53', '2018-01-28 07:25:53'),
(37, '849ffa7bb83e9141856314a4919377payment', 'de17e862ad2cbcf947285534a1706968348f587fdefa-alvinsantos', 'johnwick', '1234567890', 'true', '2018-01-28 07:21:54', '2018-01-28 07:25:53'),
(38, '0e715ca260d7d7fa7145708de42ac0payment', 'c844f9534d475d5b006a57630991337ee399a90992d7-markstafford', 'oas', '0987654321', 'true', '2018-01-29 01:05:27', '2018-01-29 01:06:42'),
(39, '7dcbe3ef661966df736c7322e12b97payment', '4f0417eef7a88faf8baab379b353a5ec3131002432d6-mattstafford', 'oas', '0987654321', 'true', '2018-01-29 01:40:35', '2018-01-29 01:41:44'),
(40, '8d95f612780ac611150993a8eca519payment', 'e8a783f0eeda2d62e0bdcbe206886232c5e03d14534d-melvin', 'oas', '0987654321', 'true', '2018-01-29 01:53:56', '2018-01-29 01:56:05'),
(41, 'd0d146e645c611bc2f26a9093a2769payment', 'b10433472df5c4f0bc21aabc6c3b9ae774e9b41da9fa-ronanbarredo', 'oas', '1234567890', 'true', '2018-01-29 01:58:19', '2018-01-29 01:59:46'),
(42, 'd3d5e4738bd8f50b179eb43940077dpayment', '8eb10b51b32b170a95d4544288ced2a1faf9ae6e696c-alex123', 'oas', '1234512345', 'true', '2018-01-29 06:54:27', '2018-01-29 07:08:51'),
(43, '26935d38fd4279f0e89f19dfb74a5apayment', '5897ad779b67e1ca7e15327842853978c54f8f3fc3e0-albert123', 'johnwick', '1234567890', 'true', '2018-01-29 06:56:08', '2018-01-29 07:08:51');

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
(16, '4e7a703f2c7e8ba3fa08c2ed4d47c3results', 'd69cab11467883411a6090aa9eca9d91edb01ea7fb78-sami', 'guidance', 'Average', 'Average', 'Average', 'true', '2018-01-04 22:34:32', '2018-01-25 21:23:29'),
(17, '8d9212ab75d3abb0971e5e616386b5results', '5b2c9193e530520c99bc212efe2e007a751c3fa58d5c-sammilby', '', '', '', '', 'false', '2018-01-08 06:27:30', '2018-01-08 06:27:30'),
(18, 'cc2ac097077cfcd5f8f85a956d5e15results', 'a24209bcc85b506f99d65a2dfef06789bf0b08fc85dc-barbs', '', '', '', '', 'false', '2018-01-11 22:42:49', '2018-01-11 22:42:49'),
(19, '59a5d35790b8c16605fb621a66faeeresults', 'fd159c263c7d3143b59dcd164f62cb9e71821fdcc9b5-braun', 'guidance', 'Average', 'Average', 'Average', 'true', '2018-01-17 09:53:09', '2018-01-17 09:55:51'),
(20, 'f6a2be1632a58c913a0f9266a918d3results', '9d6b333096207fc2aa0a20509475465ee62f0ed8d3fb-bigshow', 'guidance', 'Above Average', 'Above Average', 'Above Average', 'true', '2018-01-17 09:57:24', '2018-01-17 09:59:07'),
(21, 'a522d7a645ba0f5f2316e7539934b6results', '8e29385c287e150c8a4c56ff0270f05a9fa27b86f2a2-maryabiabi', 'guidance', 'Average', 'Average', 'Average', 'true', '2018-01-25 04:46:59', '2018-01-25 04:52:00'),
(22, '56661905937e8cc209f5c8c70aac20results', '95132d5d108ae41ae57cf4d40bfe50413cc3ad0723f1-adamcole', 'guidance', 'Above Average', 'Above Average', 'Average', 'true', '2018-01-25 05:24:40', '2018-01-25 05:37:05'),
(23, '66207a94de2ce4a0d813eba68e98e7results', 'f85f77a1b438def890ae9eb675a41ec2c5c9f3b6135d-johnnywrestling', 'guidance', 'Average', 'Average', 'Average', 'true', '2018-01-25 05:41:24', '2018-01-25 05:48:45'),
(24, '89f7bae9f551dec3d980665b034442results', '559dd2a8caf23740a5ce7be14ec35814f8101a89dec2-paullaviste', 'guidance', 'Average', 'Average', 'Average', 'true', '2018-01-25 21:25:04', '2018-01-25 21:38:24'),
(25, '95cd274e1ad8559fc35f64cebcea87results', '772f31293d83d34db81575b9b29853ccf46ff9c0fd04-petergriffin', 'guidance', 'Average', 'Average', 'Average', 'true', '2018-01-26 03:59:57', '2018-01-26 04:11:49'),
(26, '46367cfc3a32c1ffc0f0b250115c4aresults', 'a12cce1d2197dd0cc421fa4d0dee64f38b02868d507c-loisgriffin', 'guidance', 'Average', 'Average', 'Average', 'true', '2018-01-26 04:16:48', '2018-01-26 04:25:12'),
(27, '15773c2d2425f48db354aa2d5f887eresults', '3dbda33211a4066fdec980760f2d5eacc76e29bae926-aceace', 'guidance', 'Above Average', 'Above Average', 'Above Average', 'true', '2018-01-28 05:41:18', '2018-01-28 06:02:53'),
(28, 'ad13d0d4bf415ed6d5a7b0dacd4fa5results', '10ee086e4d26f76d4d7e0ab10e19c2f661c5f53b1e6e-cesaradora', 'guidance', 'Average', 'Average', 'Average', 'true', '2018-01-28 06:08:23', '2018-01-28 06:12:47'),
(29, '4bbacfd7a28ecb0f2a6e46b1478fe1results', 'ceb9ba9f5ef56ebcfc44bede0e7da21a4a3d49c4b2bb-sampinto', 'guidance', 'Average', 'Average', 'Average', 'true', '2018-01-28 06:25:37', '2018-01-28 06:29:41'),
(31, '4a0280e782a016fca00491c52ad927results', '17b0d1b3de4f4073e6f72ca8578ac067059c335da30e-rogerpinto', 'guidance', 'Below Average', 'Above Average', 'Average', 'true', '2018-01-28 06:46:54', '2018-01-28 06:49:20'),
(32, '621d1f6ed231653bd1c4f2780a51e6results', '63cde4b11cedaa367347add2281132626c07d557ffc6-kendalljenner', 'guidance', 'Above Average', 'Above Average', 'Below Average', 'true', '2018-01-28 06:54:22', '2018-01-28 07:03:29'),
(33, 'e70f833f7fa4ad2bb4dce91f596c53results', '2672639228799a1b2b4196a124138cff3be259d877db-kyliejenner', 'guidance', 'Average', 'Average', 'Average', 'true', '2018-01-28 06:56:03', '2018-01-28 07:02:02'),
(34, 'e313441e95340811d98356e740f4earesults', 'f3546039e3ddd87adc687c6ad059709a5e08b2c6d191-marksantos', 'guidance', 'Average', 'Average', 'Average', 'true', '2018-01-28 07:09:35', '2018-01-28 07:13:45'),
(35, '762edefd891936aee2e321f3f75149results', '1a0aafc85001512e7cbd8c8e9a884dc4aa63fcb22dd5-michaelsantos', 'guidance', 'Average', 'Average', 'Average', 'true', '2018-01-28 07:15:33', '2018-01-28 07:17:41'),
(36, '95c7f94be7656bc78cfa4f41dfb42fresults', '43cdab974ecff9cbedf34ad4f2eb4812b19192ceae0a-alexsantos', 'guidance', 'Average', 'Average', 'Average', 'true', '2018-01-28 07:21:54', '2018-01-28 07:28:16'),
(37, 'f9b6573e2c1a06a36436620aefc00cresults', 'de17e862ad2cbcf947285534a1706968348f587fdefa-alvinsantos', 'guidance', 'Above Average', 'Average', 'Below Average', 'true', '2018-01-28 07:21:54', '2018-01-28 07:28:16'),
(38, 'd7ad914f66a7f93b09d13b59e07910results', 'c844f9534d475d5b006a57630991337ee399a90992d7-markstafford', 'guidance', 'Average', 'Average', 'Average', 'true', '2018-01-29 01:05:27', '2018-01-29 01:38:49'),
(39, 'f6f71cf7e5b0deb2660ce05a8c9284results', '4f0417eef7a88faf8baab379b353a5ec3131002432d6-mattstafford', 'guidance', 'Average', 'Average', 'Average', 'true', '2018-01-29 01:40:35', '2018-01-29 01:42:38'),
(40, 'b4837824487a4d3a98bd11576ff150results', 'e8a783f0eeda2d62e0bdcbe206886232c5e03d14534d-melvin', 'guidance', 'Average', 'Average', 'Average', 'true', '2018-01-29 01:53:56', '2018-01-29 01:56:50'),
(41, '13497e66e14cb70b38580c48db043eresults', 'b10433472df5c4f0bc21aabc6c3b9ae774e9b41da9fa-ronanbarredo', 'guidance', 'Average', 'Average', 'Average', 'true', '2018-01-29 01:58:19', '2018-01-29 02:00:39'),
(42, 'f4d784b54fc19f7e1b448816f96db3results', '8eb10b51b32b170a95d4544288ced2a1faf9ae6e696c-alex123', 'guidance', 'Average', 'Average', 'Average', 'true', '2018-01-29 06:54:28', '2018-01-29 07:12:53'),
(43, '8c636cc455fe3fc147796462ddb49bresults', '5897ad779b67e1ca7e15327842853978c54f8f3fc3e0-albert123', 'josephvillacorta', 'Above Average', 'Below Average', 'Average', 'true', '2018-01-29 06:56:08', '2018-01-29 07:12:53');

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
(13, '2d4aa9fad5d8faef0239dbe63619d7b32e72d2be1d5d-johncena', '18-2121-200', 'John', 'A', 'Cena', 'johncena', 'john_cena@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'January-1-1994', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Transferee', 'Officially Enrolled', 8, NULL, '2017-12-28 07:27:14', '2018-01-25 03:42:43'),
(17, 'd69cab11467883411a6090aa9eca9d91edb01ea7fb78-sami', '12-2222-222', 'Sami', 'A', 'Zayn', 'sami', 'sami_zayn@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'January-1-1994', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Freshmen', 'Officially Enrolled', 7, NULL, '2018-01-04 22:34:33', '2018-01-25 21:23:51'),
(18, '5b2c9193e530520c99bc212efe2e007a751c3fa58d5c-sammilby', '', 'Sam', 'A', 'Milby', 'sammilby', 'sam_milby@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'January-1-1994', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Transferee', 'evaluation', 1, NULL, '2018-01-08 06:27:31', '2018-01-08 06:27:31'),
(19, 'a24209bcc85b506f99d65a2dfef06789bf0b08fc85dc-barbs', '', 'Barbs', 'A', 'Fisher', 'barbs', 'barbs_fisher@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'January-1-1980', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Transferee', 'requirements', 2, NULL, '2018-01-11 22:42:49', '2018-01-11 23:53:41'),
(20, 'fd159c263c7d3143b59dcd164f62cb9e71821fdcc9b5-braun', '18-0000-001', 'Braun', 'A', 'Strowman', 'braun', 'braun_strowman@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'January-1-1980', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Transferee', 'Officially Enrolled', 8, NULL, '2018-01-17 09:53:09', '2018-01-17 09:56:11'),
(21, '9d6b333096207fc2aa0a20509475465ee62f0ed8d3fb-bigshow', '18-0000-002', 'Paul', 'A', 'Wright', 'bigshow', 'paul_wright@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'January-2-1994', 'Cebu City Cebu Philippines', 'Male', 'Single', '0987654321', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Freshmen', 'Officially Enrolled', 7, NULL, '2018-01-17 09:57:24', '2018-01-17 09:59:44'),
(22, '8e29385c287e150c8a4c56ff0270f05a9fa27b86f2a2-maryabiabi', '18-0011-123', 'Mary Heather', 'A', 'Abiabi', 'maryabiabi', 'mary.abiabi@mail.com', '7c6a180b36896a0a8c02787eeafb0e4c', 'January-1-1996', 'Cebu City Cebu Philippines', 'Female', 'Single', '0987654321', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Transferee', 'Officially Enrolled', 8, NULL, '2018-01-25 04:46:59', '2018-01-25 04:52:45'),
(23, '95132d5d108ae41ae57cf4d40bfe50413cc3ad0723f1-adamcole', '18-0101-100', 'Adam', 'A', 'Cole', 'adamcole', 'adam.cole@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'January-1-1996', 'Cebu City Cebu Philippines', 'Male', 'Single', '0987654321', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Freshmen', 'Officially Enrolled', 7, NULL, '2018-01-25 05:24:40', '2018-01-25 05:37:38'),
(24, 'f85f77a1b438def890ae9eb675a41ec2c5c9f3b6135d-johnnywrestling', '18-0000-002', 'Johnny', 'A', 'Gargano', 'johnnywrestling', 'johnny_gargano@mail.com', '7c6a180b36896a0a8c02787eeafb0e4c', 'January-1-1996', 'Cebu City Cebu Philippines', 'Male', 'Single', '0987654321', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Transferee', 'Officially Enrolled', 8, NULL, '2018-01-25 05:41:24', '2018-01-25 05:49:27'),
(25, '559dd2a8caf23740a5ce7be14ec35814f8101a89dec2-paullaviste', '19-0000-000', 'Paul', 'A', 'Laviste', 'paullaviste', 'paul_laviste@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'January-4-1994', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Transferee', 'Officially Enrolled', 8, NULL, '2018-01-25 21:25:04', '2018-01-25 21:38:39'),
(26, '772f31293d83d34db81575b9b29853ccf46ff9c0fd04-petergriffin', '19-0000-002', 'Peter', 'A', 'Griffin', 'petergriffin', 'peter_griffin@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'May-27-1994', 'Cebu City Cebu Philippines', 'Male', 'Single', '0987654321', 'Cebu city Cebu Philippines', 'Cebu city Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Freshmen', 'Officially Enrolled', 7, NULL, '2018-01-26 03:59:57', '2018-01-26 04:12:26'),
(27, 'a12cce1d2197dd0cc421fa4d0dee64f38b02868d507c-loisgriffin', '19-0000-003', 'Lois', 'A', 'Griffin', 'loisgriffin', 'lois_griffin@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'January-2-1994', 'Cebu City Cebu', 'Female', 'Single', '0987654321', 'Cebu City Cebu', 'Cebu City Cebu', '2018', '1st Semester', 'College of Computer Studies', 'Transferee', 'Officially Enrolled', 8, NULL, '2018-01-26 04:16:49', '2018-01-26 04:28:15'),
(28, '3dbda33211a4066fdec980760f2d5eacc76e29bae926-aceace', '19-0000-004', 'Ace', 'A', 'Adora', 'aceace', 'ace_adora@mail.com', '7c6a180b36896a0a8c02787eeafb0e4c', 'January-2-1990', 'Cebu City Cebu Philippines', 'Male', 'Single', '0987654321', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Freshmen', 'Officially Enrolled', 7, NULL, '2018-01-28 05:41:18', '2018-01-28 06:03:21'),
(29, '10ee086e4d26f76d4d7e0ab10e19c2f661c5f53b1e6e-cesaradora', '19-0000-004', 'Cesar', 'A', 'Adora', 'cesaradora', 'cesar_adora@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'January-4-1994', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Freshmen', 'Officially Enrolled', 7, NULL, '2018-01-28 06:08:23', '2018-01-28 06:13:06'),
(30, 'ceb9ba9f5ef56ebcfc44bede0e7da21a4a3d49c4b2bb-sampinto', '19-0000-005', 'Sam', 'A', 'Pinto', 'sampinto', 'sam_pinto@mail.com', '7c6a180b36896a0a8c02787eeafb0e4c', 'January-14-1990', 'Cebu City Cebu Philippines', 'Female', 'Single', '0987654321', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Freshmen', 'Officially Enrolled', 7, NULL, '2018-01-28 06:25:37', '2018-01-28 06:30:16'),
(32, '17b0d1b3de4f4073e6f72ca8578ac067059c335da30e-rogerpinto', '19-0000-006', 'Roger', 'A', 'Pinto', 'rogerpinto', 'roger_pinto@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Febuary-4-1994', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Freshmen', 'Officially Enrolled', 7, NULL, '2018-01-28 06:46:54', '2018-01-28 06:49:44'),
(33, '63cde4b11cedaa367347add2281132626c07d557ffc6-kendalljenner', '19-0000-007', 'Kendall', 'A', 'Jenner', 'kendalljenner', 'kendall_jenner@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Febuary-9-1994', 'cebu City Cebu Philippines', 'Female', 'Single', '1234512345', 'Cebu city cebu philippines', 'Cebu city cebu philippines', '2018', '1st Semester', 'College of Computer Studies', 'Freshmen', 'Officially Enrolled', 7, NULL, '2018-01-28 06:54:22', '2018-01-28 07:03:58'),
(34, '2672639228799a1b2b4196a124138cff3be259d877db-kyliejenner', '19-0000-008', 'Kylie', 'A', 'Jenner', 'kyliejenner', 'kylie12345@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'July-8-1994', 'Cebu City Cebu Philippines', 'Female', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Freshmen', 'Officially Enrolled', 7, NULL, '2018-01-28 06:56:03', '2018-01-28 07:05:10'),
(35, 'f3546039e3ddd87adc687c6ad059709a5e08b2c6d191-marksantos', '19-0000-100', 'Mark', 'A', 'Santos', 'marksantos', 'mark_santos@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Febuary-6-1990', 'Cebu City Cebu Philippines', 'Male', 'Single', '0987654321', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Transferee', 'Officially Enrolled', 8, NULL, '2018-01-28 07:09:35', '2018-01-28 07:14:04'),
(36, '1a0aafc85001512e7cbd8c8e9a884dc4aa63fcb22dd5-michaelsantos', '19-0000-101', 'Michael', 'A', 'Santos', 'michaelsantos', 'michael_santos@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'March-7-1980', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Transferee', 'Officially Enrolled', 8, NULL, '2018-01-28 07:15:33', '2018-01-28 07:18:08'),
(37, '43cdab974ecff9cbedf34ad4f2eb4812b19192ceae0a-alexsantos', '19-0000-102', 'Alex', 'A', 'Santos', 'alexsantos', 'alex_santos@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'July-9-1990', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Freshmen', 'Officially Enrolled', 7, NULL, '2018-01-28 07:21:54', '2018-01-28 07:29:06'),
(38, 'de17e862ad2cbcf947285534a1706968348f587fdefa-alvinsantos', '19-0000-103', 'Alvin', 'A', 'Santos', 'alvinsantos', 'alvin_santos@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Febuary-2-1996', 'Cebu City Cebu Philippines', 'Male', 'Single', '0987654321', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Freshmen', 'Officially Enrolled', 7, NULL, '2018-01-28 07:21:54', '2018-01-28 07:29:06'),
(39, 'c844f9534d475d5b006a57630991337ee399a90992d7-markstafford', '19-0000-009', 'Mark', 'A', 'Stafford', 'markstafford', 'mark_stafford@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'January-2-1990', 'Cebu City Cebu Philippines', 'Male', 'Single', '0987654321', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Freshmen', 'Officially Enrolled', 7, NULL, '2018-01-29 01:05:27', '2018-01-29 01:39:14'),
(40, '4f0417eef7a88faf8baab379b353a5ec3131002432d6-mattstafford', '19-0000-010', 'Matt', 'A', 'Stafford', 'mattstafford', 'matt_stafford@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'January-2-1996', 'Cebu City Cebu Philippines', 'Male', 'Single', '0987654321', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Freshmen', 'Officially Enrolled', 7, NULL, '2018-01-29 01:40:35', '2018-01-29 01:43:05'),
(41, 'e8a783f0eeda2d62e0bdcbe206886232c5e03d14534d-melvin', '19-0000-011', 'Melvin', 'A', 'Barredo', 'melvin', 'melvin_barredo@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'March-7-1994', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Transferee', 'Officially Enrolled', 8, NULL, '2018-01-29 01:53:56', '2018-01-29 01:57:11'),
(42, 'b10433472df5c4f0bc21aabc6c3b9ae774e9b41da9fa-ronanbarredo', '19-0000-012', 'Ronan', 'A', 'Barredo', 'ronanbarredo', 'ronan_barredo@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'Febuary-16-1990', 'Cebu City Cebu Philippines', 'Male', 'Single', '0987654321', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Transferee', 'Officially Enrolled', 8, NULL, '2018-01-29 01:58:19', '2018-01-29 02:01:03'),
(43, '8eb10b51b32b170a95d4544288ced2a1faf9ae6e696c-alex123', '19-0000-013', 'Alexander', 'A', 'Savilla', 'alex123', 'alex_savilla@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'June-6-1980', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Transferee', 'Officially Enrolled', 8, NULL, '2018-01-29 06:54:28', '2018-01-29 07:14:45'),
(44, '5897ad779b67e1ca7e15327842853978c54f8f3fc3e0-albert123', '19-0000-014', 'Albert', 'A', 'Savilla', 'albert123', 'albert_savilla@mail.com', '5f4dcc3b5aa765d61d8327deb882cf99', 'April-10-1994', 'Cebu City Cebu Philippines', 'Male', 'Single', '1234567890', 'Cebu City Cebu Philippines', 'Cebu City Cebu Philippines', '2018', '1st Semester', 'College of Computer Studies', 'Transferee', 'Officially Enrolled', 8, NULL, '2018-01-29 06:56:08', '2018-01-29 07:14:45');

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
(6, '2d4aa9fad5d8faef0239dbe63619d7b32e72d2be1d5d-johncena', 'Bachelors of Science in Information Technology', 'Bachelors of Science in Information Technology', 'University Of Cebu', '2017-12-28 07:27:13', '2018-01-25 03:42:43'),
(7, '5b2c9193e530520c99bc212efe2e007a751c3fa58d5c-sammilby', 'Bachelors of Science in Information Technology', 'Bachelors of Science in Information Technology', 'University Of San Jose Recoletos', '2018-01-08 06:27:30', '2018-01-08 06:27:30'),
(8, 'a24209bcc85b506f99d65a2dfef06789bf0b08fc85dc-barbs', 'Bachelors of Science in Information Technology', 'Bachelors of Science in Information Technology', 'University Of San Jose Recoletos', '2018-01-11 22:42:48', '2018-01-11 22:42:48'),
(9, 'fd159c263c7d3143b59dcd164f62cb9e71821fdcc9b5-braun', 'Bachelors of Science in Information Technology', 'Bachelors of Science in Information Technology', 'University Of San Jose Recoletos', '2018-01-17 09:53:08', '2018-01-17 09:53:08'),
(10, '8e29385c287e150c8a4c56ff0270f05a9fa27b86f2a2-maryabiabi', 'Bachelors of Science in Information Technology', 'Bachelors of Science in Information Technology', 'University Of San Jose Recoletos', '2018-01-25 04:46:59', '2018-01-25 04:46:59'),
(11, 'f85f77a1b438def890ae9eb675a41ec2c5c9f3b6135d-johnnywrestling', 'Bachelors of Science in Computer Science', 'Bachelors of Science in Computer Science', 'University Of Cebu', '2018-01-25 05:41:23', '2018-01-25 05:41:23'),
(12, '559dd2a8caf23740a5ce7be14ec35814f8101a89dec2-paullaviste', 'Bachelors of Science in Information Technology', 'Bachelors of Science in Information Technology', 'University Of San Jose Recoletos', '2018-01-25 21:25:04', '2018-01-25 21:25:04'),
(13, 'a12cce1d2197dd0cc421fa4d0dee64f38b02868d507c-loisgriffin', 'Bachelors of Science in Information Technology', 'Bachelors of Science in Information Technology', 'University of San Jose Recoletos', '2018-01-26 04:16:48', '2018-01-26 04:16:48'),
(14, 'f3546039e3ddd87adc687c6ad059709a5e08b2c6d191-marksantos', 'Bachelors of Science in Information Technology', 'Bachelors of Science in Information Technology', 'University Of Cebu', '2018-01-28 07:09:34', '2018-01-28 07:09:34'),
(15, '1a0aafc85001512e7cbd8c8e9a884dc4aa63fcb22dd5-michaelsantos', 'Bachelors of Science in Information Technology', 'Bachelors of Science in Information Technology', 'University Of San Jose Recoletos', '2018-01-28 07:15:32', '2018-01-28 07:15:32'),
(16, 'e8a783f0eeda2d62e0bdcbe206886232c5e03d14534d-melvin', 'Bachelors of Science in Computer Science', 'Bachelors of Science in Information Technology', 'University Of San Jose Recoletos', '2018-01-29 01:53:55', '2018-01-29 01:53:55'),
(17, 'b10433472df5c4f0bc21aabc6c3b9ae774e9b41da9fa-ronanbarredo', 'Bachelors of Science in Information Technology', 'Bachelors of Science in Information Technology', 'University Of Cebu', '2018-01-29 01:58:19', '2018-01-29 01:58:19'),
(18, '8eb10b51b32b170a95d4544288ced2a1faf9ae6e696c-alex123', 'Bachelors of Science in Information Technology', 'Bachelors of Science in Information Technology', 'Don Bosco University', '2018-01-29 06:54:27', '2018-01-29 06:54:27'),
(19, '5897ad779b67e1ca7e15327842853978c54f8f3fc3e0-albert123', 'Bachelors of Science in Information Technology', 'Bachelors of Science in Information Technology', 'Don Bosco University', '2018-01-29 06:56:08', '2018-01-29 06:56:08');

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
(8, '500f5c5857beef8d94b3201a5fdc17transfereerequirements', 'a24209bcc85b506f99d65a2dfef06789bf0b08fc85dc-barbs', '', 'false', 'false', 'false', 'false', 'false', '', 'false', '2018-01-11 22:42:48', '2018-01-11 22:42:48'),
(9, '4f3ec726028a47bb906b8da7aa56cctransfereerequirements', 'fd159c263c7d3143b59dcd164f62cb9e71821fdcc9b5-braun', 'sao', 'true', 'true', 'true', 'true', 'true', 'Good to proceed!', 'true', '2018-01-17 09:53:08', '2018-01-17 09:54:38'),
(10, '8e14f3138af503ed960b96c3fffbcftransfereerequirements', '8e29385c287e150c8a4c56ff0270f05a9fa27b86f2a2-maryabiabi', 'sao', 'true', 'true', 'true', 'true', 'true', 'Good to proceed to the next step. Please submit Good Moral Certificate on time!', 'true', '2018-01-25 04:46:59', '2018-01-25 04:52:34'),
(11, '01090208e4caaefbe02135648ea190transfereerequirements', 'f85f77a1b438def890ae9eb675a41ec2c5c9f3b6135d-johnnywrestling', 'sao', 'true', 'true', 'true', 'true', 'true', 'Good to go!!!', 'true', '2018-01-25 05:41:24', '2018-01-25 05:49:07'),
(12, '92ef9be1a8ba2a5c22a4d6773f87f1transfereerequirements', '559dd2a8caf23740a5ce7be14ec35814f8101a89dec2-paullaviste', 'sao', 'true', 'true', 'true', 'true', 'true', 'Good to proceed!', 'true', '2018-01-25 21:25:04', '2018-01-25 21:37:20'),
(13, '8665ed764883f4110f53bd57d23199transfereerequirements', 'a12cce1d2197dd0cc421fa4d0dee64f38b02868d507c-loisgriffin', 'sao', 'true', 'true', 'true', 'true', 'true', 'good!', 'true', '2018-01-26 04:16:48', '2018-01-26 04:21:17'),
(14, 'ed571a5995161d2a62b0bb9cefd09etransfereerequirements', 'f3546039e3ddd87adc687c6ad059709a5e08b2c6d191-marksantos', 'sao', 'true', 'true', 'true', 'true', 'true', 'Good to proceed!!!', 'true', '2018-01-28 07:09:35', '2018-01-28 07:11:55'),
(15, '3feb580c1521400931f422636a9683transfereerequirements', '1a0aafc85001512e7cbd8c8e9a884dc4aa63fcb22dd5-michaelsantos', 'sao', 'true', 'true', 'true', 'true', 'true', 'good to go lagi!!!', 'true', '2018-01-28 07:15:33', '2018-01-28 07:17:56'),
(16, 'c58dec238c7ef2af9eb1348b035d30transfereerequirements', 'e8a783f0eeda2d62e0bdcbe206886232c5e03d14534d-melvin', 'sao', 'true', 'true', 'true', 'true', 'true', 'Good to proceed!!!', 'true', '2018-01-29 01:53:55', '2018-01-29 01:55:45'),
(17, '3c9d401f610ee525cf8f6e2932dda6transfereerequirements', 'b10433472df5c4f0bc21aabc6c3b9ae774e9b41da9fa-ronanbarredo', 'sao', 'true', 'true', 'true', 'true', 'true', 'Good to go!', 'true', '2018-01-29 01:58:19', '2018-01-29 02:00:56'),
(18, '31ca318f9585e80ca53e0191456fd0transfereerequirements', '8eb10b51b32b170a95d4544288ced2a1faf9ae6e696c-alex123', 'mannypacquiao', 'true', 'true', 'true', 'true', 'true', 'Good to proceed! Please submit good moral cert', 'true', '2018-01-29 06:54:27', '2018-01-29 07:14:27'),
(19, 'c18303ded636db8590e991b70e913btransfereerequirements', '5897ad779b67e1ca7e15327842853978c54f8f3fc3e0-albert123', 'sao', 'true', 'true', 'true', 'true', 'true', 'Good', 'true', '2018-01-29 06:56:08', '2018-01-29 07:05:59');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `entranceexam`
--
ALTER TABLE `entranceexam`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `evaluation`
--
ALTER TABLE `evaluation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `examschedule`
--
ALTER TABLE `examschedule`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `examschedulelist`
--
ALTER TABLE `examschedulelist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `freshmen`
--
ALTER TABLE `freshmen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `freshmen_requirements`
--
ALTER TABLE `freshmen_requirements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `identification`
--
ALTER TABLE `identification`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `interview`
--
ALTER TABLE `interview`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `transferee`
--
ALTER TABLE `transferee`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `transferee_requirements`
--
ALTER TABLE `transferee_requirements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
