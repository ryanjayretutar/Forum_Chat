-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 28, 2019 at 01:06 AM
-- Server version: 10.1.34-MariaDB-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum_chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'RPG'),
(2, 'Mixed RPG'),
(3, 'Indie RPG'),
(4, 'Heavy RPG'),
(5, 'Light RPG'),
(6, 'Heavy Non-RPG'),
(7, 'Light Non-RPG');

-- --------------------------------------------------------

--
-- Table structure for table `chat_message`
--

CREATE TABLE `chat_message` (
  `chat_message_id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_message`
--

INSERT INTO `chat_message` (`chat_message_id`, `to_user_id`, `from_user_id`, `chat_message`, `timestamp`) VALUES
(1, 1, 2, 'Hello there. How are you doing?', '2019-01-27 06:14:14'),
(2, 1, 2, 'Aren\'t you going to reply?', '2019-01-27 11:31:24'),
(3, 2, 1, 'Yes. Im fine. Why?', '2019-01-27 11:31:52'),
(4, 2, 1, 'Sorry for the late reply', '2019-01-27 11:32:22'),
(5, 2, 1, 'Yes?', '2019-01-27 12:42:25'),
(6, 1, 2, 'No', '2019-01-27 12:40:25'),
(7, 1, 2, 'No', '2019-01-27 12:42:26'),
(8, 2, 1, 'Yes', '2019-01-27 12:42:27'),
(9, 1, 2, 'Hey', '2019-01-27 17:17:05'),
(10, 1, 2, 'What do you want\n', '2019-01-27 17:17:15'),
(11, 1, 2, 'Hello', '2019-01-27 17:17:58'),
(12, 1, 2, 'hi', '2019-01-27 17:18:16'),
(13, 2, 2, 'Hello\n', '2019-01-27 17:18:23'),
(14, 2, 2, 'Hello\n', '2019-01-27 17:18:26'),
(15, 4, 2, 'hi', '2019-01-27 17:18:33'),
(16, 4, 2, 'hello', '2019-01-27 17:19:00'),
(17, 4, 2, 'bakit di nagsave kanina', '2019-01-27 17:19:08'),
(18, 4, 2, 'hello', '2019-01-27 17:20:35'),
(19, 4, 2, 'hello', '2019-01-27 17:20:43'),
(20, 4, 2, 'hello', '2019-01-27 17:20:57'),
(21, 4, 2, 'asdas\n', '2019-01-27 17:21:56'),
(22, 4, 2, 'asd', '2019-01-27 17:23:06'),
(23, 4, 2, 'gumagana na', '2019-01-27 17:23:13'),
(24, 4, 2, '', '2019-01-27 17:23:13'),
(25, 1, 2, 'Hi\n', '2019-01-28 01:35:57'),
(26, 2, 4, 'kjsdasjd\n', '2019-01-28 01:43:51'),
(27, 2, 4, 'asdfasdf', '2019-01-28 01:43:54'),
(28, 2, 4, 'asdfsdf', '2019-01-28 01:43:56'),
(29, 2, 4, 'adfsdf', '2019-01-28 01:43:57'),
(30, 4, 2, 'asdasdasd', '2019-01-28 02:02:13'),
(31, 4, 2, 'sadasd', '2019-01-28 02:02:14'),
(32, 4, 2, 'asdasd', '2019-01-28 02:02:15'),
(33, 4, 2, 'dafsfdasdfsdfsadfadsfsdfjkasdkfhkjsdhfksadhfjhasdkfhskadhfksdhfkhsdfkhaskdjfhkashdfkhakdsjfhkashdfjkhasdkfhkjsadfhhsadkfhaksdhfkjasdfkhasdkjfhkjasdhfkhasdkfkjsahdfkjhsadkfjhkjsdahfkhasdfkjhskjadfhkjsadhfkjhsadkjf', '2019-01-28 02:02:27'),
(34, 1, 2, 'asdhasjkdhkjashdkjhaskjdhaksjdhkjashdkjhaskdjhkjasdhkjashdkjhaskjdhkjasdhjkashdkjhasjkdhkjashdkjhaskjdhkjashdkjahsdkjhajksdhkjashdkjhaksdhjasjdksajkdhkjashdkjhaskd', '2019-01-28 02:09:00'),
(35, 5, 2, 'asdasd', '2019-01-28 03:08:55'),
(36, 5, 2, 'asdasd', '2019-01-28 03:08:58'),
(37, 0, 2, 'asdasd', '2019-01-28 03:23:21'),
(38, 0, 2, 'asd', '2019-01-28 03:23:31'),
(39, 0, 2, 'asd', '2019-01-28 03:23:34'),
(40, 1, 2, 'asd', '2019-01-28 04:03:01'),
(41, 4, 2, 'asd', '2019-01-28 04:03:05'),
(42, 4, 2, 'asd', '2019-01-28 04:03:09'),
(43, 9, 2, 'asdasjkd', '2019-01-28 07:52:54'),
(44, 9, 2, 'asdasd', '2019-01-28 07:52:56'),
(45, 11, 2, 'asd', '2019-01-28 07:54:48'),
(46, 11, 2, 'asd', '2019-01-28 07:55:02'),
(47, 2, 4, 'asd\n', '2019-01-28 07:56:42'),
(48, 4, 2, 'asd', '2019-01-28 07:56:56'),
(49, 2, 4, 'asd', '2019-01-28 07:57:01'),
(50, 4, 2, 'asd', '2019-01-28 07:57:03'),
(51, 4, 2, 'Juan', '2019-01-28 07:57:18'),
(52, 2, 4, 'John', '2019-01-28 07:57:23');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `content` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `thread_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `content`, `created_at`, `thread_id`, `user_id`, `status`) VALUES
(1, '<span style=\"color:rgb(255,255,255);font-family: &quot;Trebuchet MS&quot;, Trebuchet, sans-serif; font-size: 13px; background-color: rgb(0, 0, 0);\"><span style=\"font-size:16px;color: rgb(255, 255, 255); font-family: &quot;Trebuchet MS&quot;, Trebuchet, sans-serif; background-color: rgb(0, 0, 0);\"><span style=\"font-size:16px;color: rgb(255, 255, 255); font-family: &quot;Trebuchet MS&quot;, Trebuchet, sans-serif; background-color: rgb(0, 0, 0);\">The number of Knights in the guild is the defining factor of the guild strength. The only viable build for the class is Bowling Bash regardless of stat allocation. Bowling Bash in unison can break defenses and at the same time it can also be defensive skill. The more knights a guild has the more it can defend and attack opposing guilds.</span></i></span><span style=\"font-size:16px;color: rgb(255, 255, 255); font-family: &quot;Trebuchet MS&quot;, Trebuchet, sans-serif; background-color: rgb(0, 0, 0);\"><br style=\"color: rgb(255, 255, 255); font-family: &quot;Trebuchet MS&quot;, Trebuchet, sans-serif; font-size: 16px; background-color: rgb(0, 0, 0);\"></span></i></span><h3><span style=\"color:rgb(255,255,255);font-family: &quot;Trebuchet MS&quot;, Trebuchet, sans-serif; font-size: 13px; background-color: rgb(0, 0, 0);\"><span style=\"font-size:16px;color: rgb(255, 255, 255); font-family: &quot;Trebuchet MS&quot;, Trebuchet, sans-serif; background-color: rgb(0, 0, 0);\"><span style=\"color: rgb(255, 255, 255); font-family: &quot;Trebuchet MS&quot;, Trebuchet, sans-serif; background-color: rgb(0, 0, 0); font-size: 16px;\">Monks are the best damaging character in-game and the second defining factor of the guild strength. They can one shot anyone with Guillotine Fist except for Ghostring armo<span style=\"font-size: 16px; color: rgb(255, 255, 255); font-family: &quot;Trebuchet MS&quot;, Trebuchet, sans-serif; background-color: rgb(0, 0, 0);\">&nbsp;</span>red charaActers. They can easily pass through pre-cast thanks to their Body Relocation skill.</span></i></span></h3></h3>', '2019-01-27 06:12:32', 1, 2, 'Waiting for Approval'),
(2, 'asdasdasd', '2019-01-28 06:50:56', 1, 4, 'Comment'),
(3, '<span style=\"font-size:24px;height: 300px;\"><h3 style=\"font-size: 24px;\"><b style=\"height: 300px; font-size: 24px;\"><i style=\"height: 300px; font-size: 24px;\">asdasdasdasdfsadfasdfsadfasdfasdfsadfsadfsadf</i></b></h3><p style=\"font-size: 24px;\"><b style=\"height: 300px; font-size: 24px;\"><i style=\"height: 300px; font-size: 24px;\"><br style=\"font-size: 24px;\"></i></b></p><p style=\"font-size: 24px;\"><b style=\"height: 300px; font-size: 24px;\"><i style=\"height: 300px; font-size: 24px;\"><br style=\"font-size: 24px;\"></i></b></p><p style=\"font-size: 24px;\"><b style=\"height: 300px; font-size: 24px;\"><i style=\"height: 300px; font-size: 24px;\">asdasdfsdfasdfasdfsadf<span style=\"font-size:24px;height: 300px;\">&nbsp;</span></i></b></p></span><p></p>', '2019-01-28 06:51:22', 1, 4, 'Comment'),
(4, '<ea-subheading type=\"ordered\" layout=\"small\" text-align=\"left\" text-color=\"light\" eyebrow-text=\"ADVENTURE TOGETHER\" title-text=\"TRIUMPH AS ONE\" spacing-top=\"small\" spacing-bottom=\"none\" style=\"color: var(--ea-light-color) ; font-family: zanzinger; font-size: 18px; -webkit-font-smoothing: antialiased; line-height: var(--ea-theme-body-line-height-tablet-landscape) ; display: block; text-shadow: var(--ea-theme-subheading-text-shadow) ; max-width: calc((var(--ea-column-tablet-landscape-with-rail) * 10) + (var(--ea-gutter-tablet-landscape) * 9)) ; margin-top: var(--ea-small-component-space-tablet-landscape) ; margin-bottom: var(--ea-small-component-space-tablet-landscape);\"><h2 class=\"eapl-subheading__eyebrow h4 h4-light\" style=\"text-align: center; transition: opacity var(--ea-interface-expansion) ; font-size: var(--ea-theme-h4-font-size-tablet-landscape); letter-spacing: var(--ea-theme-h4-letter-spacing-tablet-landscape); line-height: var(--ea-theme-h4-line-height-tablet-landscape) ; margin-bottom: 0px; color: var(--ea-light-color) ;\"><b style=\"text-align: center; transition: opacity var(--ea-interface-expansion) ; font-size: var(--ea-theme-h4-font-size-tablet-landscape); letter-spacing: var(--ea-theme-h4-letter-spacing-tablet-landscape); line-height: var(--ea-theme-h4-line-height-tablet-landscape) ; margin-bottom: 0px; color: var(--ea-light-color) ;\">ADVENTURE TOGETHER</b></h2><h3 class=\"eapl-subheading__title d4 d4-light\" style=\"text-align: center; transition: opacity var(--ea-interface-expansion) ; font-size: var(--ea-theme-d4-font-size-tablet-landscape); font-weight: var(--ea-theme-d4-font-weight); letter-spacing: var(--ea-theme-d4-letter-spacing-tablet-landscape); line-height: var(--ea-theme-d4-line-height-tablet-landscape) ; margin-top: var(--ea-theme-d4-after-h4-margin-top-tablet-portrait) ; margin-bottom: 0px; font-family: var(--ea-theme-typographic-headings-font-family); text-transform: uppercase; color: var(--ea-light-color) ;\"><i style=\"transition: opacity var(--ea-interface-expansion) ; font-size: var(--ea-theme-d4-font-size-tablet-landscape); font-weight: var(--ea-theme-d4-font-weight); letter-spacing: var(--ea-theme-d4-letter-spacing-tablet-landscape); line-height: var(--ea-theme-d4-line-height-tablet-landscape) ; margin-top: var(--ea-theme-d4-after-h4-margin-top-tablet-portrait) ; margin-bottom: 0px; font-family: var(--ea-theme-typographic-headings-font-family); text-transform: uppercase; color: var(--ea-light-color) ;\">TRIUMPH AS ONE</i></h3></ea-subheading><ea-text slot=\"text\" text-color=\"light\" style=\"color: var(--ea-light-color) ; font-family: zanzinger; font-size: 18px; -webkit-font-smoothing: antialiased; line-height: var(--ea-theme-body-line-height-tablet-landscape) ;\"><slot><p style=\"text-align: center;\">Team with up to three other players in cooperative adventures that reward both combined effort and individual skill. Each player’s choice of javelin exosuit will shape their contribution and strategic role. As you explore, you will discover a gripping story filled with unique and memorable characters. Seamless and intelligent matchmaking will ensure you can quickly and easily find other players to adventure alongside.</p><p style=\"text-align: center;\"><br></p><p style=\"text-align: center;\"><br class=\"Apple-interchange-newline\">Team with up to three other players in cooperative adventures that reward both combined effort and individual skill. Each player’s choice of javelin exosuit will shape their contribution and strategic role. As you explore, you will discover a gripping story filled with unique and memorable characters. Seamless and intelligent matchmaking will ensure you can quickly and easily find other players to adventure alongside.<br></p></slot></ea-text>', '2019-01-28 08:10:15', 2, 2, 'Waiting for Approval'),
(5, '<ea-subheading type=\"ordered\" layout=\"small\" text-align=\"left\" text-color=\"dark\" eyebrow-text=\"THE ULTIMATE ARMOR\" title-text=\"SUIT UP WITH JAVELINS\" spacing-top=\"small\" spacing-bottom=\"none\" style=\"color: rgb(22, 22, 22); font-family: zanzinger; font-size: 18px; -webkit-font-smoothing: antialiased; line-height: var(--ea-theme-body-line-height-tablet-landscape) ; display: block; text-shadow: var(--ea-theme-subheading-text-shadow) ; max-width: calc((var(--ea-column-tablet-landscape-with-rail) * 10) + (var(--ea-gutter-tablet-landscape) * 9)) ; margin-top: var(--ea-small-component-space-tablet-landscape) ; margin-bottom: var(--ea-small-component-space-tablet-landscape);\"><h1 style=\"color: rgb(22, 22, 22); font-family: zanzinger; font-size: 18px; -webkit-font-smoothing: antialiased; line-height: var(--ea-theme-body-line-height-tablet-landscape) ; display: block; text-shadow: var(--ea-theme-subheading-text-shadow) ; max-width: calc((var(--ea-column-tablet-landscape-with-rail) * 10) + (var(--ea-gutter-tablet-landscape) * 9)) ; margin-top: var(--ea-small-component-space-tablet-landscape) ; margin-bottom: var(--ea-small-component-space-tablet-landscape);\"><p style=\"text-align: center;\"><span style=\"text-align: center;\">THE ULTIMATE ARMOR</span></p><h1 style=\"color: rgb(22, 22, 22); font-family: zanzinger; font-size: 18px; -webkit-font-smoothing: antialiased; line-height: var(--ea-theme-body-line-height-tablet-landscape) ; display: block; text-shadow: var(--ea-theme-subheading-text-shadow) ; max-width: calc((var(--ea-column-tablet-landscape-with-rail) * 10) + (var(--ea-gutter-tablet-landscape) * 9)) ; margin-top: var(--ea-small-component-space-tablet-landscape) ; margin-bottom: var(--ea-small-component-space-tablet-landscape);\"><p style=\"text-align: center;\"><span style=\"color: rgb(22, 22, 22); font-family: zanzinger; font-size: 18px;\">SUIT UP WITH JAVELINS</span></p><p style=\"text-align: center;\"><span style=\"color: rgb(22, 22, 22); font-family: zanzinger; font-size: 18px;\">Every time you enter the world as a Freelancer, you’ll select a powerful javelin exosuit – armor designed to provide its pilot with incredible offensive and defensive capabilities. Move at incredible speed, rocket across the skies, or safely roam watery depths. As you play, you will constantly progress both your own abilities as a javelin pilot and the combat and traversal capabilities of your growing collection of exosuits</span></p></h1></h1></ea-subheading>', '2019-01-28 08:11:18', 2, 2, 'Comment'),
(6, '<ea-subheading type=\"ordered\" layout=\"small\" text-align=\"left\" text-color=\"dark\" eyebrow-text=\"ALWAYS A NEW DANGER\" title-text=\"EXPLORE AN EVOLVING WORLD\" spacing-top=\"small\" spacing-bottom=\"none\" style=\"color: rgb(22, 22, 22); font-family: zanzinger; font-size: 18px; -webkit-font-smoothing: antialiased; line-height: var(--ea-theme-body-line-height-tablet-landscape) ; display: block; text-shadow: var(--ea-theme-subheading-text-shadow) ; max-width: calc((var(--ea-column-tablet-landscape-with-rail) * 10) + (var(--ea-gutter-tablet-landscape) * 9)) ; margin-top: var(--ea-small-component-space-tablet-landscape) ; margin-bottom: var(--ea-small-component-space-tablet-landscape);\"><h1 style=\"color: rgb(22, 22, 22); font-family: zanzinger; font-size: 18px; -webkit-font-smoothing: antialiased; line-height: var(--ea-theme-body-line-height-tablet-landscape) ; display: block; text-shadow: var(--ea-theme-subheading-text-shadow) ; max-width: calc((var(--ea-column-tablet-landscape-with-rail) * 10) + (var(--ea-gutter-tablet-landscape) * 9)) ; margin-top: var(--ea-small-component-space-tablet-landscape) ; margin-bottom: var(--ea-small-component-space-tablet-landscape);\"><p style=\"text-align: center;\"><span style=\"text-align: center;\">&nbsp; ALWAYS A NEW DANGER</span></p><p style=\"text-align: center;\"><span style=\"color: rgb(22, 22, 22); font-family: zanzinger; font-size: 18px;\">EXPLORE AN EVOLVING WORLD</span></p><p style=\"text-align: center;\"><ul><li>Anthem’s vast, ever-changing world features unpredictable conditions, hazards, and enemies. Over time, Anthem will develop and expand – introducing unique stories, challenges, and world-shaking events. This world is both beautiful and deadly – and will test you on each expedition you embark on with your Freelancer team.<br></li></ul></p></h1></ea-subheading>', '2019-01-28 08:13:20', 2, 4, 'Comment'),
(7, 'dsfsdf', '2019-01-28 08:41:26', 2, 4, 'Comment'),
(8, 'asdasd', '2019-01-28 09:02:51', 2, 4, 'Comment'),
(9, 'asdasd', '2019-01-28 09:04:17', 2, 4, 'Comment');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `content` longtext NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id`, `subject`, `category`, `created_at`, `user_id`) VALUES
(1, 'Ragnarok Mobile', 'Indie RPG', '2019-01-27 06:12:32', 2),
(2, 'The anthem', 'Indie RPG', '2019-01-28 08:10:15', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_login` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `title`, `status`, `created_at`, `last_login`) VALUES
(1, 'Roan', '202cb962ac59075b964b07152d234b70', 'RETUTAR@gmail.com', 'newbie', 'inactive', '2019-01-25 15:03:46', '0000-00-00 00:00:00'),
(2, 'Rai', '06f8488cf29f54d204817121fd8db6fe', 'raintakeshix@gmail.com', 'newbie', 'inactive', '2019-01-27 06:09:34', '0000-00-00 00:00:00'),
(4, 'Raian', 'f6fdffe48c908deb0f4c3bd36c032e72', 'tsunasky14@gmail.com', 'newbie', 'inactive', '2019-01-27 13:27:52', '0000-00-00 00:00:00'),
(5, 'Ra2an', 'f6fdffe48c908deb0f4c3bd36c032e72', 'jobsuarez@gmail.com', 'newbie', 'inactive', '2019-01-28 02:10:51', '0000-00-00 00:00:00'),
(7, 'Kirito', 'b608a839b35320905908508e1d267678', 'rai@gmail.com', 'newbie', 'inactive', '2019-01-28 07:20:20', '0000-00-00 00:00:00'),
(8, 'asdasd', 'a3dcb4d229de6fde0db5686dee47145d', 'asdasd@gmail.com', 'newbie', 'inactive', '2019-01-28 07:28:16', '0000-00-00 00:00:00'),
(9, 'Ra4an', 'f6fdffe48c908deb0f4c3bd36c032e72', 'ra4an@gmail.com', 'newbie', 'inactive', '2019-01-28 07:30:00', '0000-00-00 00:00:00'),
(10, 'Ra5an', '4f5cec75c744bd39b5126debbb7cffb8', 'rasda@gmail.com', 'newbie', 'inactive', '2019-01-28 07:31:46', '0000-00-00 00:00:00'),
(11, 'ra6an', '4f5cec75c744bd39b5126debbb7cffb8', 'jhovelsuarez_26@yahoo.com', 'newbie', 'inactive', '2019-01-28 07:34:37', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `birth_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `user_id`, `first_name`, `last_name`, `birth_date`) VALUES
(1, 1, 'Ryan Jay', 'Retutar', '2018-12-31 00:00:00'),
(2, 2, 'John', 'Doe', '1999-01-28 00:00:00'),
(4, 4, 'Juan', 'Dela Cruz', '2019-01-07 00:00:00'),
(5, 5, 'Jobelle ', 'Suarez', '1997-01-16 00:00:00'),
(7, 7, 'Kirito', '123', '2018-11-07 00:00:00'),
(8, 8, 'Kirito', 'Suarez', '1996-01-16 00:00:00'),
(9, 9, 'Jobelle ', 'ASDA', '1996-01-30 00:00:00'),
(10, 10, 'Ryan Jay', 'Retutar', '1996-02-14 00:00:00'),
(11, 11, 'Jobelle ', 'Suarez', '2008-01-08 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `up_count` int(11) NOT NULL,
  `down_count` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_message`
--
ALTER TABLE `chat_message`
  ADD PRIMARY KEY (`chat_message_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `chat_message`
--
ALTER TABLE `chat_message`
  MODIFY `chat_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `votes`
--
ALTER TABLE `votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
