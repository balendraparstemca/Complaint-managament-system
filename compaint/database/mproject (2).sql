-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 06:58 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `updationDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `updationDate`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251', '18-10-2016 04:18:16');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE IF NOT EXISTS `blogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(190) NOT NULL,
  `tags` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `photo` varchar(1555) NOT NULL,
  `posted` varchar(40) NOT NULL,
  `date` date DEFAULT NULL,
  `author` varchar(40) DEFAULT NULL,
  `category` varchar(40) NOT NULL,
  `udate` datetime DEFAULT NULL,
  `nstatus` int(2) NOT NULL,
  `ustatus` int(2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `tags`, `content`, `photo`, `posted`, `date`, `author`, `category`, `udate`, `nstatus`, `ustatus`) VALUES
(1, '', '', '', '63560400_1524778647.jpg', 'draft', NULL, NULL, '1', '2019-04-10 08:44:29', 0, 0),
(2, 'Benefits of livig in this world', 'life,life tips', 'While being a writer has major advantages, it also has its own challenges. Anything without challenges is boring because challenges mould and train us. Some challenges can drain the life out of us, though, which is why it is good to enlist help from others when we experience them. Below are some of the major challenges writers experience and my solutions to them.\r\n\r\n\r\nThis is what you feel when you find it difficult to write. You just don’t know what to write, you’re not in the mood, and you don’t know when you will be in the mood.\r\n\r\nWriter’s block can be very dangerous, especially if you don’t deal with it quickly. Below are some quick solutions to overcoming writer’s block.\r\n\r\n\r\n\r\n\r\nAt ‘Writers in Charge’ our philosophy is that you, the writer, should be in charge – not your client or anybody/anything else, but you.  Our only goal here at this blog is to help you become the person in charge. Every content released here will be focused on helping you achieve this goal.\r\n\r\nThis blog has been founded and is run by Bamidele Onibalusi and a team of writers from different parts of the world.', '19292400_1524780270.jpg', 'publish', '2018-04-27', 'admin', '2', '2019-04-03 10:49:59', 0, 0),
(3, 'The future of web developement on earth', 'web,development,earth', 'While being a writer has major advantages, it also has its own challenges. Anything without challenges is boring because challenges mould and train us. Some challenges can drain the life out of us, though, which is why it is good to enlist help from others when we experience them. Below are some of the major challenges writers experience and my solutions to them.\r\n\r\n\r\nThis is what you feel when you find it difficult to write. You just don’t know what to write, you’re not in the mood, and you don’t know when you will be in the mood.\r\n\r\nWriter’s block can be very dangerous, especially if you don’t deal with it quickly. Below are some quick solutions to overcoming writer’s block.\r\n\r\n\r\n\r\n\r\nAt ‘Writers in Charge’ our philosophy is that you, the writer, should be in charge – not your client or anybody/anything else, but you.  Our only goal here at this blog is to help you become the person in charge. Every content released here will be focused on helping you achieve this goal.\r\n\r\nThis blog has been founded and is run by Bamidele Onibalusi and a team of writers from different parts of the world.', '46981800_1524780339.jpg', 'publish', '2018-04-27', 'admin', '3', '2019-04-03 10:49:59', 1, 0),
(4, 'The subtle art of not giving a fuck-Mark Manson', 'books,reading,novels', 'While being a writer has major advantages, it also has its own challenges. Anything without challenges is boring because challenges mould and train us. Some challenges can drain the life out of us, though, which is why it is good to enlist help from others when we experience them. Below are some of the major challenges writers experience and my solutions to them.\r\n\r\n\r\nThis is what you feel when you find it difficult to write. You just don’t know what to write, you’re not in the mood, and you don’t know when you will be in the mood.\r\n\r\nWriter’s block can be very dangerous, especially if you don’t deal with it quickly. Below are some quick solutions to overcoming writer’s block.\r\n\r\n\r\n\r\n\r\nAt ‘Writers in Charge’ our philosophy is that you, the writer, should be in charge – not your client or anybody/anything else, but you.  Our only goal here at this blog is to help you become the person in charge. Every content released here will be focused on helping you achieve this goal.\r\n\r\nThis blog has been founded and is run by Bamidele Onibalusi and a team of writers from different parts of the world.', '98308700_1524790852.jpg', 'publish', '2018-04-27', 'admin', '2', '2019-04-03 10:49:59', 1, 0),
(5, 'The challanges of being a writter', 'witting,blogging', 'While being a writer has major advantages, it also has its own challenges. Anything without challenges is boring because challenges mould and train us. Some challenges can drain the life out of us, though, which is why it is good to enlist help from others when we experience them. Below are some of the major challenges writers experience and my solutions to them.\r\n\r\n\r\nThis is what you feel when you find it difficult to write. You just don’t know what to write, you’re not in the mood, and you don’t know when you will be in the mood.\r\n\r\nWriter’s block can be very dangerous, especially if you don’t deal with it quickly. Below are some quick solutions to overcoming writer’s block.\r\n\r\n\r\n\r\n\r\nAt ‘Writers in Charge’ our philosophy is that you, the writer, should be in charge – not your client or anybody/anything else, but you.  Our only goal here at this blog is to help you become the person in charge. Every content released here will be focused on helping you achieve this goal.\r\n\r\nThis blog has been founded and is run by Bamidele Onibalusi and a team of writers from different parts of the world.', '57894000_1524856026.jpg', 'publish', '2018-04-27', 'etemesi', '4', '2019-04-03 10:49:59', 1, 0),
(6, 'Why i ventured into writting as a proffesion', 'witting,blogging', 'While being a writer has major advantages, it also has its own challenges. Anything without challenges is boring because challenges mould and train us. Some challenges can drain the life out of us, though, which is why it is good to enlist help from others when we experience them. Below are some of the major challenges writers experience and my solutions to them.\r\n\r\n\r\nThis is what you feel when you find it difficult to write. You just don’t know what to write, you’re not in the mood, and you don’t know when you will be in the mood.\r\n\r\nWriter’s block can be very dangerous, especially if you don’t deal with it quickly. Below are some quick solutions to overcoming writer’s block.\r\n\r\n\r\n\r\n\r\nAt ‘Writers in Charge’ our philosophy is that you, the writer, should be in charge – not your client or anybody/anything else, but you.  Our only goal here at this blog is to help you become the person in charge. Every content released here will be focused on helping you achieve this goal.\r\n\r\nThis blog has been founded and is run by Bamidele Onibalusi and a team of writers from different parts of the world.', '30278600_1524856225.jpg', 'draft', '2018-04-27', 'etemesi', '4', '2019-04-03 10:49:59', 1, 0),
(7, 'b alu.', 'website', '&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;b&gt;While being a writer has major advantages, it also has its own challenges. Anything without challenges is boring because challenges mould and train us. Some challenges can drain the life out of us, though, which is why it is good to enlist help from others when we experience them. Below are some of the major challenges writers experience and my solutions to them.&lt;/b&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;b&gt;&lt;br&gt;&lt;/b&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;b&gt;&lt;br&gt;&lt;/b&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;b&gt;This is what you feel when you find it difficult to write. You just don&rsquo;t know what to write, you&rsquo;re not in the mood, and you don&rsquo;t know when you will be in the mood.&lt;/b&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;b&gt;&lt;br&gt;&lt;/b&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;b&gt;Writer&rsquo;s block can be very dangerous, especially if you don&rsquo;t deal with it quickly. Below are some quick solutions to overcoming writer&rsquo;s block.&lt;/b&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;b&gt;&lt;br&gt;&lt;/b&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;b&gt;&lt;br&gt;&lt;/b&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;b&gt;&lt;br&gt;&lt;/b&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;b&gt;&lt;br&gt;&lt;/b&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;b&gt;At &lsquo;Writers in Charge&rsquo; our philosophy is that you, the writer, should be in charge &ndash; not your client or anybody/anything else, but you.&amp;nbsp; Our only goal here at this blog is to help you become the person in charge. Every content released here will be focused on helping you achieve this goal.&lt;/b&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;b&gt;&lt;br&gt;&lt;/b&gt;&lt;/div&gt;&lt;div style=&quot;text-align: justify;&quot;&gt;&lt;b&gt;This blog has been founded and is run by Bamidele Onibalusi and a team of writers from different parts of the world.&lt;/b&gt;&lt;/div&gt;', '20842041_1430143437070679_8375213039246859214_n.jpg', 'publish', '0000-00-00', 'b@gmail.com', '1', '2019-04-10 09:13:05', 1, 0),
(8, 'balu.', 'websitte', '&lt;div&gt;While being a writer has major advantages, it also has its own challenges. Anything without challenges is boring because challenges mould and train us. Some challenges can drain the life out of us, though, which is why it is good to enlist help from others when we experience them. Below are some of the major challenges writers experience and my solutions to them.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;This is what you feel when you find it difficult to write. You just don&rsquo;t know what to write, you&rsquo;re not in the mood, and you don&rsquo;t know when you will be in the mood.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Writer&rsquo;s block can be very dangerous, especially if you don&rsquo;t deal with it quickly. Below are some quick solutions to overcoming writer&rsquo;s block.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;At &lsquo;Writers in Charge&rsquo; our philosophy is that you, the writer, should be in charge &ndash; not your client or anybody/anything else, but you.&amp;nbsp; Our only goal here at this blog is to help you become the person in charge. Every content released here will be focused on helping you achieve this goal.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;This blog has been founded and is run by Bamidele Onibalusi and a team of writers from different parts of the world.&lt;/div&gt;', '20842041_1430143437070679_8375213039246859214_n.jpg', 'publish', '0000-00-00', 'b@gmail.com', '3', '2019-04-10 09:19:09', 1, 0),
(10, 'balu', 'website', '&lt;div&gt;While being a writer has major advantages, it also has its own challenges. Anything without challenges is boring because challenges mould and train us. Some challenges can drain the life out of us, though, which is why it is good to enlist help from others when we experience them. Below are some of the major challenges writers experience and my solutions to them.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;This is what you feel when you find it difficult to write. You just don&rsquo;t know what to write, you&rsquo;re not in the mood, and you don&rsquo;t know when you will be in the mood.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;Writer&rsquo;s block can be very dangerous, especially if you don&rsquo;t deal with it quickly. Below are some quick solutions to overcoming writer&rsquo;s block.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;At &lsquo;Writers in Charge&rsquo; our philosophy is that you, the writer, should be in charge &ndash; not your client or anybody/anything else, but you.&amp;nbsp; Our only goal here at this blog is to help you become the person in charge. Every content released here will be focused on helping you achieve this goal.&lt;/div&gt;&lt;div&gt;&lt;br&gt;&lt;/div&gt;&lt;div&gt;This blog has been founded and is run by Bamidele Onibalusi and a team of writers from different parts of the world.&lt;/div&gt;', 'my2.jpg', 'publish', '2019-04-10', 'b@gmail.com', '2', NULL, 0, 0),
(11, 'b alu', 'website', 'fjufgyjugfhy', '20842041_1430143437070679_8375213039246859214_n.jpg', 'publish', '2019-04-10', 'b@gmail.com', '1', NULL, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`) VALUES
(1, 'tricks'),
(2, 'hacks'),
(3, 'offers'),
(4, 'promotion'),
(5, 'devices'),
(6, 'entertainment');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(255) NOT NULL,
  `categoryDescription` longtext NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(1, 'E-commerce', 'E-commerce', '2017-03-28 07:10:55', ''),
(2, 'general', 'dsdas', '2017-06-11 10:54:06', '');

-- --------------------------------------------------------

--
-- Table structure for table `complaintremark`
--

CREATE TABLE IF NOT EXISTS `complaintremark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `complaintNumber` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `remark` mediumtext NOT NULL,
  `remarkDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `complaintremark`
--

INSERT INTO `complaintremark` (`id`, `complaintNumber`, `status`, `remark`, `remarkDate`) VALUES
(1, 2, 'in process', 'Hi this for demo', '2017-04-01 17:29:19'),
(2, 9, 'in process', 'hiiiiiiiiiiiiiiiiiiii', '2017-04-01 18:37:59'),
(3, 3, 'in process', 'test', '2017-05-02 15:57:43'),
(4, 19, 'closed', 'case solved', '2017-06-11 11:18:33');

-- --------------------------------------------------------

--
-- Table structure for table `ctrack`
--

CREATE TABLE IF NOT EXISTS `ctrack` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `varified` datetime NOT NULL,
  `inprocess` datetime NOT NULL,
  `closed` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `facebook` varchar(40) DEFAULT NULL,
  `twitter` varchar(40) DEFAULT NULL,
  `googleplus` varchar(40) DEFAULT NULL,
  `pinterest` varchar(40) DEFAULT NULL,
  `dribble` varchar(40) DEFAULT NULL,
  `comments_script` text,
  `sharing_script` text,
  `email` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `website_name` varchar(255) NOT NULL,
  `googlemap` varchar(1555) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `facebook`, `twitter`, `googleplus`, `pinterest`, `dribble`, `comments_script`, `sharing_script`, `email`, `icon`, `phone`, `website_name`, `googlemap`) VALUES
(1, 'http://www.facebook.com', 'http://www.twitter.com', 'http://www.plus.google.com', 'http://www.pinterest.com', 'http://www.dribble.com', '<div class="fb-comments container" data-href="http://www.uoecu.org/newsview.php?id=<?php echo $row[''id''];?>" data-numposts="20" width="100%"></div>', '<div class="addthis_sharing_toolbox"></div>', 'balendrabcaigntu@gmail.com', 'puducherry.png', '9424703403', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `membership_users`
--

CREATE TABLE IF NOT EXISTS `membership_users` (
  `memberID` varchar(20) NOT NULL,
  `passMD5` varchar(40) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `signupDate` date DEFAULT NULL,
  `groupID` int(10) unsigned DEFAULT NULL,
  `isBanned` tinyint(4) DEFAULT NULL,
  `isApproved` tinyint(4) DEFAULT NULL,
  `custom1` text,
  `custom2` text,
  `custom3` text,
  `custom4` text,
  `comments` text,
  `pass_reset_key` varchar(100) DEFAULT NULL,
  `pass_reset_expiry` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`memberID`),
  KEY `groupID` (`groupID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `membership_users`
--

INSERT INTO `membership_users` (`memberID`, `passMD5`, `email`, `signupDate`, `groupID`, `isBanned`, `isApproved`, `custom1`, `custom2`, `custom3`, `custom4`, `comments`, `pass_reset_key`, `pass_reset_expiry`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'ronniengoda@gmail.com', '2018-04-26', 2, 0, 1, NULL, NULL, NULL, NULL, 'Admin member created automatically on 2018-04-26\nRecord updated automatically on 2018-04-27', NULL, NULL),
('etemesi', '827ccb0eea8a706c4c34a16891f84e7b', 'etemesi@gmail.com', '2018-04-27', 3, 0, 1, 'philiiip etemesi', 'nairobi,kenya', 'nairobi', 'kenya', 'member signed up through the registration form.', NULL, NULL),
('guest', NULL, NULL, '2018-04-26', 1, 0, 1, NULL, NULL, NULL, NULL, 'Anonymous member created automatically on 2018-04-26', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `page_hits`
--

CREATE TABLE IF NOT EXISTS `page_hits` (
  `page` varchar(255) NOT NULL,
  `count` int(11) DEFAULT NULL,
  PRIMARY KEY (`page`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_hits`
--

INSERT INTO `page_hits` (`page`, `count`) VALUES
('', 2),
('b alu', 2),
('b alu.', 2),
('Benefits of livig in this world', 13),
('Newest Blog and content management', 5),
('The challanges of being a writter', 32),
('The future of web developement on earth', 22),
('The subtle art of not giving a fuck-Mark Manson', 47),
('Why i ventured into writting as a proffesion', 20);

-- --------------------------------------------------------

--
-- Table structure for table `placed`
--

CREATE TABLE IF NOT EXISTS `placed` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `pname` varchar(255) NOT NULL,
  `pdisc` varchar(22555) NOT NULL,
  `imgone` varchar(255) NOT NULL,
  `imgtwo` varchar(255) NOT NULL,
  `imgthree` varchar(255) NOT NULL,
  `root` varchar(255) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `placed`
--

INSERT INTO `placed` (`pid`, `pname`, `pdisc`, `imgone`, `imgtwo`, `imgthree`, `root`) VALUES
(1, 'Paradise Beach', 'Pondicherry, also known as Puducherry and commonly referred as just Pondy, is one of the seven Union Territories of India. is often famously referred to as the French Riviera of the East, and it is indeed one of the most charming and mesmerising places to\r\n\r\nThe beach is extremely attractive as the sands are very clean and the water is crystal clear. The Paradise Beach is situated close to Cuddalore main road and it houses the famous Chunnambar resort.\r\n\r\nVisitors have to cross the Chunnambar backwaters by boat to reach Paradise Beach. These boats leave from Chunnambar boathouse around 6 km from Pondicherry. The beach has shelters and palm trees for shade and protection from the sun and rain. There is one small bar which serves soft drinks and snacks. The tides at the beach are strong at times and it is not advisable to go deeper into the sea. This beach is famed for its lovely sunbathing options and resting under the cool breeze of palm trees.\r\n\r\nBeach volleyball, water sports equipment, beach umbrellas, nets and fishing rods are also available at this beach for tourists.\r\n\r\nThe cost of a boat ride to the beach is Rs. 75 per person.\r\n\r\nBoat Timings to Beach: 9 AM - 4 PM', 'beach.jpg', 'beach.jpg', 'beach.jpg', ''),
(2, 'Auroville Ashram', 'Conceived as the ''Universal Town'', the Auroville Ashram is an experimental township - the idea is to create a city where people from across the world of all cultures and traditions come and live together in peace. Founded in 1926 by Sri Aurobindo and a di\r\n\r\nAt a distance of 13 km from Pondicherry, Auroville (City of Dawn) is an experimental township in Villupuram district of Tamil Nadu. It lies on the East Coast Road and was founded by Mirra Alfassa in 1968 and was designed by the French architect Roger Anger. The word Auroville essentially means a universal town, where people can live peacefully, irrespective of nationality, colour, caste and creed. The purpose of Auroville, Pondicherry was to emphasize human unity, promoting message of the founder of Auroville, Mirra Alfassa. It is one of the best Pondicherry places to visit .\r\n\r\nAuroville was officially inaugurated on 28th February, 1968 and was endorsed by UNESCO and the Government of India. During its inauguration, soil from over 124 countries was placed and mixed inside a lotus shaped urn, symbolizing universal oneness. Auroville was built to welcome people from all over the world to live together and explore scientific, educational, cultural and spiritual pursuits as per the Auroville charter.\r\n\r\nThe town houses the Matrimandir (Temple of the Divine Mother) at the center. It is a one hundred foot high spherical structure with the lotus bud shaped foundation. Its outer walls are decorated by gold-encased discs. The structure has an exquisite meditation chamber of white marble floor and walls. Daylight entering from the roof is directed to a huge crystal globe which illuminates mysteriously providing a focus for meditation. It has around twelve gardens, lakes and an amphitheater.\r\n\r\nThe Visitors Center provides a pass to the Matrimandir. There is also an art gallery at Visitors Center along with a video theatre (Timings: 10.30 AM, 11.30 AM, 2.30 PM, 3 PM & 3.30 PM). There is also a cafeteria and some boutiques offering shopping opportunities.\r\n\r\nTiming for issue of passes: Weekdays: 9.30 AM to 12.30 PM and 1.45 PM to 4 PM. Sundays: 9.30 AM to 12.30 PM.\r\n', 'auroville.jpg', 'auroville.jpg', 'auroville.jpg', ''),
(3, 'Aurobindo Ashram', 'Aurobindo Ashram has been named after its creator- Sri Aurobindo Ghosh. The foundation of this ashram was laid on 24th November in the year 1926 when he was surrounded by his disciples all over after he retired from politics and settled in Pondicherry. Th', 'beach.jpg', 'beach.jpg', 'beach.jpg', ''),
(4, 'Pondicherry Museum', 'Located in the Bharathi Park, Pondicherry Museum houses a fantastic collection of sculptures. It has the remains of the archeological findings from the Arikamedu Roman settlement.\r\n\r\nBronze sculptures of god and goddess, a wide gathering of temple lamps, ', 'auroville.jpg', 'auroville.jpg', 'auroville.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stateName` varchar(255) NOT NULL,
  `stateDescription` tinytext NOT NULL,
  `postingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `stateName`, `stateDescription`, `postingDate`, `updationDate`) VALUES
(3, 'abcd', '', '2016-10-18 11:35:02', ''),
(4, 'BTL', 'pbPB', '2016-10-18 11:35:58', '28-03-2017 03:40:02 PM'),
(5, 'CTW', 'CTW', '2017-03-28 07:20:36', ''),
(6, 'fsdfs', 'fsdf', '2017-06-11 10:54:12', '');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categoryid` int(11) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `categoryid`, `subcategory`, `creationDate`, `updationDate`) VALUES
(1, 1, 'Online SHopping', '2017-03-28 07:11:07', ''),
(2, 1, 'E-wllaet', '2017-03-28 07:11:20', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblcomplaints`
--

CREATE TABLE IF NOT EXISTS `tblcomplaints` (
  `complaintNumber` int(11) NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `subcategory` varchar(255) NOT NULL,
  `complaintType` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `noc` varchar(255) NOT NULL,
  `complaintDetails` mediumtext NOT NULL,
  `complaintFile` varchar(255) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) DEFAULT NULL,
  `lastUpdationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `nstatus` int(2) NOT NULL,
  `ustatus` int(2) NOT NULL,
  PRIMARY KEY (`complaintNumber`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tblcomplaints`
--

INSERT INTO `tblcomplaints` (`complaintNumber`, `userId`, `category`, `subcategory`, `complaintType`, `state`, `noc`, `complaintDetails`, `complaintFile`, `regDate`, `status`, `lastUpdationDate`, `nstatus`, `ustatus`) VALUES
(1, 1, 1, 'Online SHopping', '', 'abcd', 'test demofbv', 'test demo test demo test demotest&lt;div&gt;?]/.]&quot;&amp;gt;: demotest demotest demotest demotest demotest demotest demotest demo&lt;/div&gt;', '20522778.pdf', '2017-03-30 16:52:40', 'in process', '2019-04-10 10:08:16', 0, 0),
(2, 1, 1, 'Online SHopping', 'General Query', 'BTL', 'testing', 'sample text for demo', '', '2017-03-30 17:05:56', 'in process', '2017-04-01 17:29:19', 0, 0),
(3, 1, 1, 'Online SHopping', ' Complaint', 'BTL', 'ferwekt lwentgwewt', 'wetwetwe', '', '2017-03-30 17:07:51', 'in process', '2019-04-10 09:44:30', 1, 0),
(4, 1, 1, 'E-wllaet', 'General Query', 'CTW', 'lkdlsfklsdf', 'fdsf,msd,f  f f', '2. Compendium Selected Paper.doc', '2017-03-30 17:13:14', 'closed', '2019-04-10 09:44:28', 1, 0),
(5, 1, 1, 'E-wllaet', ' Complaint', 'BTL', 'bgfhfgh', 'hfghfgh', '1 (3).jpg', '2017-03-30 17:14:55', NULL, '2019-04-10 09:44:26', 1, 0),
(6, 1, 1, 'E-wllaet', ' Complaint', 'BTL', 'bgfhfgh', 'hfghfgh', '1 (3).jpg', '2017-03-30 17:20:16', NULL, '2019-04-10 09:44:24', 1, 0),
(7, 1, 1, 'E-wllaet', ' Complaint', 'BTL', 'bgfhfgh', 'hfghfgh', '1 (3).jpg', '2017-03-30 17:20:56', NULL, '2019-04-10 09:44:20', 1, 0),
(8, 1, 1, 'E-wllaet', ' Complaint', 'BTL', 'bgfhfgh', 'hfghfgh', '1 (3).jpg', '2017-03-30 17:23:05', NULL, '2019-04-10 09:44:18', 1, 0),
(9, 1, 1, 'E-wllaet', ' Complaint', 'BTL', 'bgfhfgh', 'hfghfgh', '1 (3).jpg', '2017-03-30 17:25:09', 'in process', '2019-04-10 09:44:16', 1, 0),
(10, 1, 1, 'E-wllaet', ' Complaint', 'BTL', 'bgfhfgh', 'hfghfgh', '1 (3).jpg', '2017-03-30 17:27:24', NULL, '2019-04-10 09:44:14', 1, 0),
(11, 1, 1, 'Online SHopping', 'General Query', 'CTW', 'dsflsdlflsdf', 'fsdfsdfsdf', 'avatar-1.jpg.png', '2017-03-30 17:36:32', NULL, '2019-04-10 09:44:12', 1, 0),
(12, 1, 1, 'Online SHopping', 'General Query', 'CTW', 'dsflsdlflsdf', 'fsdfsdfsdf', 'avatar-1.jpg.png', '2017-03-30 17:37:09', NULL, '2019-04-10 09:44:10', 1, 0),
(13, 1, 1, 'Online SHopping', 'General Query', 'CTW', 'dsflsdlflsdf', 'fsdfsdfsdf', 'avatar-1.jpg.png', '2017-03-30 17:39:57', NULL, '2019-04-10 09:42:04', 1, 0),
(14, 1, 1, 'Online SHopping', ' Complaint', 'CTW', 'vcxvxcvxcv', 'cvcx', 'doctorslog.sql', '2017-03-30 17:41:19', NULL, '2019-04-10 09:42:07', 1, 0),
(15, 1, 1, 'E-wllaet', 'General Query', 'BTL', 'dsfsd', 'fsdfsdf', '', '2017-03-30 17:42:38', NULL, '2019-04-10 09:42:01', 1, 0),
(16, 1, 1, 'E-wllaet', 'General Query', 'BTL', 'dsfsd', 'fsdfsdf', '', '2017-03-31 01:54:07', NULL, '2019-04-10 09:42:00', 1, 0),
(17, 5, 1, 'E-wllaet', ' Complaint', 'fsdfs', 'regarding refund', 'test test', '', '2017-06-11 10:57:49', NULL, '2019-04-10 09:41:58', 1, 0),
(18, 5, 1, 'Online SHopping', ' Complaint', 'abcd', 'yhytr', 'rtytry', 'About Us.docx', '2017-06-11 11:08:47', NULL, '2019-04-10 09:41:56', 1, 0),
(19, 6, 1, 'Online SHopping', ' Complaint', 'abcd', 'regarding refund', 'Test@123 dfds fsd fs gs gsd g sg g g sgstwerwe ewtw tw', 'About Us.docx', '2017-06-11 11:15:24', 'closed', '2019-04-10 09:41:52', 1, 0),
(20, 1, 1, 'Online SHopping', 'General Query', 'abcd', 'balendra kumar paraste', 'bn,hb,ghkjgkujtgfutruyjrtuyruru', 'cms.sql', '2019-03-29 14:23:42', NULL, '2019-04-10 09:41:49', 1, 0),
(21, 1, 1, 'Online SHopping', 'General Query', 'abcd', 'balendra kumar paraste', 'hiiiipkokopkopkpokj', 'Balu initials.docx', '2019-04-04 11:57:59', NULL, '2019-04-10 09:41:47', 1, 0),
(22, 1, 1, 'Online SHopping', 'General Query', 'abcd', 'balendra kumar paraste', 'iujbhgihuilhbuil', 'b.jpg', '2019-04-10 09:11:54', NULL, '2019-04-10 09:41:45', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE IF NOT EXISTS `titles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `website_name` varchar(40) DEFAULT NULL,
  `tagline` varchar(40) DEFAULT NULL,
  `icon` varchar(40) DEFAULT NULL,
  `keywords` varchar(220) DEFAULT NULL,
  `short_description` varchar(200) DEFAULT NULL,
  `bannertext1` varchar(150) DEFAULT NULL,
  `bannertext2` varchar(150) DEFAULT NULL,
  `bannertext3` varchar(150) DEFAULT NULL,
  `bannertext4` varchar(150) DEFAULT NULL,
  `detailed_description` text,
  `address` varchar(40) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `phone` varchar(40) DEFAULT NULL,
  `googlemap` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `website_name`, `tagline`, `icon`, `keywords`, `short_description`, `bannertext1`, `bannertext2`, `bannertext3`, `bannertext4`, `detailed_description`, `address`, `email`, `phone`, `googlemap`) VALUES
(1, 'Responsive Blog', 'Blogging For Passion', '95401600_1524766758.jpg', 'blog,tech blog,tricks,hacks,technology news,fantastic blog', 'This is a blog and content management system,You can easily setup your blog and customize it according to your needs.This is a short description of your blog.You can change this', 'Create a lifestyle <span>you desire</span>', 'Engaging Purposeful <span>and Creative</span>', 'Create the lifestyle <span>you desire</span>', 'Engaging Purposeful <span>and Creative</span>', 'This is a blog and content management system,You can easily setup your blog and customize it according to your needs.It is easy to use and manage.Multiple users can signup and be able contribute content.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'Nairobi,Kenya', 'info@fantasticblog.com', '0708344101', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d100949.24429313939!2d-122.44206553967531!3d37.75102885910819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80859a6d00690021%3A0x4a501367f076adff!2sSan+Francisco%2C+CA%2C+USA!5e0!3m2!1sen!2sin!4v1');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE IF NOT EXISTS `userlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userip` binary(16) NOT NULL,
  `loginTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `logout` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `uid`, `username`, `userip`, `loginTime`, `logout`, `status`) VALUES
(1, 1, 'b@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2019-04-04 04:31:14', '', 1),
(2, 0, 'codeprojects@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2019-04-07 08:49:37', '', 0),
(3, 1, 'b@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2019-04-07 09:23:05', '', 1),
(4, 1, 'b@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2019-04-08 14:41:18', '', 1),
(5, 1, 'b@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2019-04-09 09:52:33', '', 1),
(6, 1, 'b@gmail.com', '::1\0\0\0\0\0\0\0\0\0\0\0\0\0', '2019-04-10 05:05:58', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `contactNo` bigint(11) DEFAULT NULL,
  `address` tinytext,
  `State` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `pincode` int(6) DEFAULT NULL,
  `userImage` varchar(255) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `email`, `password`, `contactNo`, `address`, `State`, `country`, `pincode`, `userImage`, `regDate`, `updationDate`, `status`) VALUES
(1, 'balendra', 'b@gmail.com', '12356', 9999857860, 'Shakarpur', 'abcd', 'UAE', 110092, NULL, '2017-03-28 11:44:52', '2019-04-01 06:29:39', 1),
(2, 'Amit', 'amit@gmail.com', 'f925916e2754e5e03f75dd58a5733251', 8888888888, NULL, NULL, NULL, NULL, NULL, '2017-03-28 16:58:04', '0000-00-00 00:00:00', 1),
(3, 'Teste', 'test@test.com', 'f925916e2754e5e03f75dd58a5733251', 1212121212, NULL, NULL, NULL, NULL, NULL, '2017-03-28 16:59:14', '0000-00-00 00:00:00', 1),
(4, 'demo', 'test@gm.com', 'ceb6c970658f31504a901b89dcd3e461', 9999999999, NULL, NULL, NULL, NULL, NULL, '2017-06-11 10:48:35', '0000-00-00 00:00:00', 1),
(5, 'ABC', 'abc@abc.com', '5c428d8875d2948607f3e3fe134d71b4', 9999857868, 'fdgfdgdf', 'abcd', 'UAE', 110092, NULL, '2017-06-11 10:56:05', '2017-06-11 10:58:28', 1),
(6, 'XYZ', 'xyz@xyz.com', 'f925916e2754e5e03f75dd58a5733251', 1111111111, 'test', 'fsdfs', 'UAE', 110092, NULL, '2017-06-11 11:13:05', '2019-03-29 18:02:12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `visitor_info`
--

CREATE TABLE IF NOT EXISTS `visitor_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(255) DEFAULT NULL,
  `user_agent` varchar(255) DEFAULT NULL,
  `time_accessed` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=146 ;

--
-- Dumping data for table `visitor_info`
--

INSERT INTO `visitor_info` (`id`, `ip_address`, `user_agent`, `time_accessed`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:26:52'),
(2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:27:01'),
(3, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:27:40'),
(4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:27:55'),
(5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:01'),
(6, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:12'),
(7, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:19'),
(8, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:22'),
(9, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:29'),
(10, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:32'),
(11, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:35'),
(12, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:28:38'),
(13, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:05'),
(14, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:09'),
(15, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:18'),
(16, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:25'),
(17, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:28'),
(18, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:51'),
(19, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:29:57'),
(20, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:30:00'),
(21, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:30:07'),
(22, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:30:15'),
(23, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:39:41'),
(24, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:40:41'),
(25, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 16:41:27'),
(26, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:26:10'),
(27, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:27:34'),
(28, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:28:20'),
(29, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:28:42'),
(30, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:26'),
(31, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:38'),
(32, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:41'),
(33, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:43'),
(34, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:45'),
(35, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:48'),
(36, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:51'),
(37, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:53'),
(38, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:56'),
(39, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:30:59'),
(40, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:32:02'),
(41, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:32:05'),
(42, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:32:07'),
(43, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 17:32:10'),
(44, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 19:08:04'),
(45, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 19:08:14'),
(46, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 21:43:06'),
(47, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 21:47:01'),
(48, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 21:47:08'),
(49, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 21:48:58'),
(50, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 21:49:18'),
(51, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-27 22:22:28'),
(52, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-28 01:41:41'),
(53, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-28 01:43:58'),
(54, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.117 Safari/537.36', '2018-04-28 01:46:23'),
(55, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 05:51:22'),
(56, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 05:51:32'),
(57, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 14:03:37'),
(58, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 14:03:47'),
(59, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 14:03:52'),
(60, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 14:03:57'),
(61, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 14:04:12'),
(62, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 17:23:26'),
(63, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 17:23:42'),
(64, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 19:51:21'),
(65, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 19:58:24'),
(66, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 20:00:01'),
(67, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 20:00:20'),
(68, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 20:00:53'),
(69, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 20:01:32'),
(70, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 20:02:14'),
(71, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 20:02:28'),
(72, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 20:08:46'),
(73, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 20:09:34'),
(74, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 20:10:38'),
(75, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 20:12:48'),
(76, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 20:15:20'),
(77, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 20:16:00'),
(78, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 20:16:07'),
(79, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 20:16:52'),
(80, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 20:17:45'),
(81, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 20:18:46'),
(82, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-29 20:26:42'),
(83, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-30 04:58:48'),
(84, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-30 04:59:47'),
(85, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-30 05:00:49'),
(86, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-30 05:03:32'),
(87, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-30 05:04:03'),
(88, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-30 05:09:27'),
(89, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-30 06:43:53'),
(90, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-30 06:47:01'),
(91, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 05:24:54'),
(92, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 15:50:42'),
(93, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 15:51:36'),
(94, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 15:52:09'),
(95, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 16:17:41'),
(96, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 16:19:05'),
(97, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 16:22:28'),
(98, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 16:24:04'),
(99, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 16:24:39'),
(100, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 16:26:30'),
(101, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 16:27:39'),
(102, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 16:29:53'),
(103, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 16:30:53'),
(104, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 16:31:54'),
(105, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 16:32:35'),
(106, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 16:32:55'),
(107, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 16:33:48'),
(108, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 16:36:43'),
(109, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 17:07:48'),
(110, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 17:08:36'),
(111, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 17:10:13'),
(112, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 17:13:18'),
(113, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-03-31 17:13:24'),
(114, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-01 04:22:52'),
(115, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-01 04:23:05'),
(116, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-01 04:23:38'),
(117, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-01 04:24:38'),
(118, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-01 04:25:12'),
(119, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-01 04:27:47'),
(120, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-01 04:28:09'),
(121, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-01 04:33:12'),
(122, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-01 04:33:12'),
(123, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-01 06:24:57'),
(124, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-01 06:25:56'),
(125, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-01 06:52:08'),
(126, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-01 09:31:38'),
(127, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-01 09:32:55'),
(128, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-01 09:33:05'),
(129, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-01 09:33:12'),
(130, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-01 10:08:23'),
(131, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-01 10:09:26'),
(132, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-01 10:39:07'),
(133, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-01 10:50:26'),
(134, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-02 03:58:03'),
(135, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-02 04:00:26'),
(136, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-02 04:01:05'),
(137, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-02 04:30:49'),
(138, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-02 06:03:38'),
(139, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-06 05:38:53'),
(140, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-06 05:43:09'),
(141, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-06 05:43:32'),
(142, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-10 07:14:53'),
(143, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-10 07:15:07'),
(144, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-11 04:44:37'),
(145, '::1', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.86 Safari/537.36', '2019-04-11 04:45:06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
