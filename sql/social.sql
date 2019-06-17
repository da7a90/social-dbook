-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2016 at 03:17 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `social`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `comment` varchar(445) NOT NULL,
  `commenter` varchar(55) NOT NULL,
  `time` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `cid`, `comment`, `commenter`, `time`, `pid`, `uid`) VALUES
(2, 3, 'comment', 'sidahmed mohamed', 1474800405, 20, 3),
(3, 3, 'comment', 'sidahmed mohamed', 1474800698, 18, 3),
(4, 3, 'hoo hoo', 'sidahmed mohamed', 1474801332, 18, 3),
(5, 1, 'Aurther', 'Mike Tavish', 1474888444, 18, 1),
(6, 3, 'oii', 'sidahmed mohamed', 1478690756, 18, 3),
(7, 1, 't4', 'Mike Tavish', 1478859431, 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `dislikes`
--

CREATE TABLE IF NOT EXISTS `dislikes` (
  `dislikeid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`dislikeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `dislikes`
--

INSERT INTO `dislikes` (`dislikeid`, `uid`, `pid`) VALUES
(7, 1, 14),
(8, 1, 20),
(9, 1, 22);

-- --------------------------------------------------------

--
-- Table structure for table `hashtag`
--

CREATE TABLE IF NOT EXISTS `hashtag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tags` varchar(77) NOT NULL,
  `salt` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `hashtag`
--

INSERT INTO `hashtag` (`id`, `tags`, `salt`) VALUES
(8, 'truckcity', '1833581'),
(9, 'snipers', '13734007'),
(10, 'hoverbot', '13342989'),
(11, 'hdwallpaper', '14556991'),
(12, 'CustomBikes', '15112913'),
(13, 'avengers', '11224065'),
(16, 'SuperBuildings', '14032467'),
(17, 'paintings', '11748284'),
(18, 'photography', '14710726');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `likeid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`likeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`likeid`, `uid`, `pid`) VALUES
(38, 1, 9),
(39, 1, 11),
(40, 1, 13),
(41, 1, 15),
(45, 3, 20),
(46, 3, 19),
(47, 3, 18),
(49, 3, 9),
(50, 3, 10),
(54, 1, 12),
(63, 1, 18),
(67, 1, 19),
(68, 1, 21);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` int(11) NOT NULL,
  `reciver` int(11) NOT NULL,
  `message` varchar(545) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender`, `reciver`, `message`, `time`) VALUES
(4, 1, 2, 'hi chella kutty ðŸ˜š', 1474815589),
(5, 1, 3, 'hi chella kutty ðŸ˜š', 1474815721),
(6, 3, 1, 'enaa daaaðŸ˜¡', 1474815741),
(7, 1, 3, 'Ounm ila poooooo DA pani &lt;script&gt;', 1474815767);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `nid` int(11) NOT NULL AUTO_INCREMENT,
  `salt` int(11) NOT NULL,
  `data` varchar(555) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `read` varchar(55) NOT NULL DEFAULT 'no',
  `time` int(11) NOT NULL,
  `noter` int(11) NOT NULL,
  `datafor` varchar(55) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`nid`, `salt`, `data`, `pid`, `uid`, `read`, `time`, `noter`, `datafor`) VALUES
(25, 0, '&nbsp;sidahmed mohamed liked  your  &nbsp;photo', 20, 1, 'read', 1474800171, 3, 'like'),
(26, 0, '&nbsp;sidahmed mohamed liked  your  &nbsp;post', 19, 1, 'read', 1474800221, 3, 'like'),
(27, 0, '&nbsp;sidahmed mohamed&nbsp; commented your &nbsp;photo', 20, 1, 'read', 1474800405, 3, 'comment'),
(28, 0, '&nbsp;sidahmed mohamed liked  your  &nbsp;photo', 18, 1, 'read', 1474800631, 3, 'like'),
(29, 0, '&nbsp;sidahmed mohamed&nbsp; commented your &nbsp;photo', 18, 1, 'read', 1474800698, 3, 'comment'),
(30, 0, '&nbsp;sidahmed mohamed&nbsp; commented your &nbsp;photo', 18, 1, 'read', 1474801332, 3, 'comment'),
(31, 0, '&nbsp;sidahmed mohamed liked  your  &nbsp;post', 9, 1, 'read', 1474815396, 3, 'like'),
(32, 0, '&nbsp;sidahmed mohamed liked  your  &nbsp;post', 10, 1, 'read', 1474815443, 3, 'like'),
(33, 0, '&nbsp;Mike Tavish liked  your  &nbsp;post', 21, 3, 'no', 1478690632, 1, 'like'),
(34, 0, '&nbsp;sidahmed mohamed&nbsp; commented your &nbsp;photo', 18, 1, 'no', 1478690756, 3, 'comment');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `text` varchar(555) NOT NULL,
  `poster` varchar(55) NOT NULL,
  `time` int(11) NOT NULL,
  `data` varchar(55) NOT NULL,
  `salt` int(11) NOT NULL,
  `device` varchar(55) NOT NULL,
  `postcat` varchar(55) NOT NULL DEFAULT 'post',
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`pid`, `uid`, `text`, `poster`, `time`, `data`, `salt`, `device`, `postcat`) VALUES
(9, 1, 'check post', 'Mike Tavish', 1474792012, '', 1861846, 'Windows 10', 'post'),
(10, 1, 'I &lt;3 #truckcity game', 'Mike Tavish', 1474792544, '', 1833581, 'Windows 10', 'post'),
(11, 1, 'I â¤ #snipers', 'Mike Tavish', 1474793071, '', 13734007, 'Windows 10', 'post'),
(12, 1, 'I play ðŸŽ® #hoverbot', 'Mike Tavish', 1474793132, '', 13342989, 'Windows 10', 'post'),
(13, 1, '#hdwallpaper', 'Mike Tavish', 1474793522, '232868407920986209_lyk.jpg', 14556991, 'Windows 10', 'photo'),
(14, 1, 'I Want to Create a Custombike ðŸ  #CustomBikes', 'Mike Tavish', 1474793610, '', 15112913, 'Windows 10', 'post'),
(15, 1, 'I watch The Avenger Movie ðŸŽ¥ #avengers', 'Mike Tavish', 1474793692, '', 11224065, 'Windows 10', 'post'),
(18, 1, '#SuperBuildings see the graph', 'Mike Tavish', 1474793944, '280259279920868962_lyk.jpg', 14032467, 'Windows 10', 'photo'),
(19, 1, '#paintings is a art ðŸ–Œ of creating the massive creature of human ðŸ˜œ<br />\r\n', 'Mike Tavish', 1474794137, '', 11748284, 'Windows 10', 'post'),
(20, 1, '#photography ', 'Mike Tavish', 1474794320, '271873426633363666_lyk.jpg', 14710726, 'Windows 10', 'photo'),
(21, 3, 'Oiii', 'sidahmed mohamed', 1478690541, '', 32563458, 'Windows 10', 'post'),
(22, 1, 'hi<br />\r\n', 'Mike Tavish', 1478859420, '', 13143574, 'Windows 10', 'post');

-- --------------------------------------------------------

--
-- Table structure for table `recent`
--

CREATE TABLE IF NOT EXISTS `recent` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `salt` int(11) NOT NULL,
  `data` varchar(555) NOT NULL,
  `pid` int(11) NOT NULL,
  `time` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=125 ;

--
-- Dumping data for table `recent`
--

INSERT INTO `recent` (`rid`, `salt`, `data`, `pid`, `time`, `uid`) VALUES
(80, 0, '&nbsp;sidahmed mohamed liked Mike Tavish&nbsp;photo', 20, 1474800171, 3),
(81, 0, '&nbsp;sidahmed mohamed liked Mike Tavish&nbsp;post', 19, 1474800221, 3),
(82, 0, '&nbsp;sidahmed mohamed commented &nbsp;Mike Tavish&nbsp;photo', 20, 1474800405, 3),
(83, 0, '&nbsp;sidahmed mohamed liked Mike Tavish&nbsp;photo', 18, 1474800631, 3),
(84, 0, '&nbsp;sidahmed mohamed commented &nbsp;Mike Tavish&nbsp;photo', 18, 1474800698, 3),
(85, 0, '&nbsp;sidahmed mohamed commented &nbsp;Mike Tavish&nbsp;photo', 18, 1474801332, 3),
(87, 0, '&nbsp;sidahmed mohamed liked Mike Tavish&nbsp;post', 9, 1474815396, 3),
(88, 0, '&nbsp;sidahmed mohamed liked Mike Tavish&nbsp;post', 10, 1474815443, 3),
(95, 0, '&nbsp;Mike Tavish liked Mike Tavish&nbsp;post', 12, 1474855540, 1),
(109, 0, '&nbsp;Mike Tavish liked Mike Tavish&nbsp;photo', 18, 1474944423, 1),
(115, 0, '&nbsp;Mike Tavish disliked Mike Tavish post', 14, 1474969097, 1),
(116, 0, '&nbsp;Mike Tavish liked Mike Tavish&nbsp;post', 19, 1474991754, 1),
(117, 0, '&nbsp;Mike Tavish disliked Mike Tavish photo', 20, 1475170441, 1),
(118, 32563458, '&nbsp;sidahmed mohamed a posted Post', 0, 1478690541, 3),
(119, 0, '&nbsp;Mike Tavish liked sidahmed mohamed&nbsp;post', 21, 1478690632, 1),
(120, 0, '&nbsp;sidahmed mohamed commented &nbsp;Mike Tavish&nbsp;photo', 18, 1478690756, 3),
(121, 13143574, '&nbsp;Mike Tavish a posted Post', 0, 1478859420, 1),
(123, 0, '&nbsp;Mike Tavish disliked Mike Tavish post', 22, 1478859427, 1),
(124, 0, '&nbsp;Mike Tavish commented &nbsp;Mike Tavish&nbsp;post', 22, 1478859431, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `profilepic` varchar(55) NOT NULL,
  `coverpic` varchar(55) NOT NULL,
  `location` varchar(55) NOT NULL,
  `lastlogon` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `profilepic`, `coverpic`, `location`, `lastlogon`, `username`) VALUES
(1, 'Mike Tavish', 'mike@mike.com', 'mike', 'mike.jpg', 'cover.jpg', 'California, USA', 1478859454, 'mike_tavish'),
(2, 'Morwin Case', 'moun@moun.com', 'moun', 'moun.jpg', 'mouncover.jpg', 'Berlin, GR', 1474800509, 'moun_case'),
(3, 'sidahmed mohamed', 'sidahmed@sidahmed.com', 'sidahmed', 'lewis.jpg', 'lewiscover.jpg', 'Newyork,USA', 1478690838, 'lewis_kelent');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
