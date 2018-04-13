-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 13, 2018 at 05:02 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio2`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `ID` int(11) NOT NULL,
  `Text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`ID`, `Text`) VALUES
(1, '<div class=\"card ml-1 col-md-3\">\r\n            <img id=\"DCHeroes\" class=\"card-img-top mx-auto\"  src=\"img/DCheroes.png\">\r\n              <div class=\"card-body align-text-bottom card-test-body\">\r\n                <h5 class=\"card-title\">DC Heroes</h5>\r\n                <p class=\"card-text\">DC Heroes is a databse filled with heroes.<br /> I used PHP and HTML for this with Some Database knowledge <br /> Categories: Front and backEnd</p>\r\n              </div>\r\n            </div>'),
(2, '                <div class=\"card ml-1 col-md-3\">\r\n              <img id=\"GameWorld\" class=\"card-img-top mx-auto\"  src=\"img/GameWorld.png\">\r\n                <div class=\"card-body card-test-body\">\r\n                  <h5 class=\"card-title\">GameWorld</h5>\r\n                  <p class=\"card-text\">GameWorld is a Online webshop where you can buy games <br /> i used PHP and HTML for this with also some Database knowledge<br /> Categories: Front and backend</p>\r\n                </div>\r\n              </div>'),
(3, '              <div class=\"card ml-1 col-md-3\">\r\n                <img id=\"RadioGaga\" class=\"card-img-top mx-auto\" src=\"img/mytuner.png\" id=\"radiogaga\">\r\n                  <div class=\"card-body\">\r\n                    <h5 class=\"card-title\">Radio Gaga</h5>\r\n                    <p class=\"card-text \">Radio gaga is basicly a radio filled with some music <br />I used PHP and HTML and a little bit of JavaScript <br /> Categories: Front and Back end</p>\r\n                  </div>\r\n                </div>\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `images` text NOT NULL,
  `Text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`images`, `Text`) VALUES
('\'img/me.png\'', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cards`
--
ALTER TABLE `cards`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
