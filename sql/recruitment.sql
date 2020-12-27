-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 27, 2020 at 10:33 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recruitment`
--

-- --------------------------------------------------------

--
-- Table structure for table `forminput`
--

CREATE TABLE `forminput` (
  `id` int(255) NOT NULL,
  `inputJob` varchar(50) NOT NULL,
  `inputName` varchar(50) NOT NULL,
  `inputGender` varchar(10) NOT NULL,
  `inputEmail` varchar(50) NOT NULL,
  `inputNumber` varchar(20) NOT NULL,
  `inputAddress` varchar(500) NOT NULL,
  `uploadCV` varchar(50) NOT NULL,
  `uploadPhoto` varchar(50) NOT NULL,
  `inputPitch` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `forminput`
--

INSERT INTO `forminput` (`id`, `inputJob`, `inputName`, `inputGender`, `inputEmail`, `inputNumber`, `inputAddress`, `uploadCV`, `uploadPhoto`, `inputPitch`) VALUES
(1, 'Designer', 'Hadi Yusuf Alghifari', 'male', 'hadiyusufalghifari@gmail.com', '0812090909090', 'Jl Sesama', 'cv/Hadi Yusuf AlghifariDocument.docx', 'applicantphoto/Hadi Yusuf Alghifaridesigner.png', 'PITCH!');

-- --------------------------------------------------------

--
-- Table structure for table `joblist`
--

CREATE TABLE `joblist` (
  `id` int(255) NOT NULL,
  `jobDate` date NOT NULL,
  `jobName` varchar(50) NOT NULL,
  `jobLocation` varchar(50) NOT NULL,
  `jobExp` varchar(20) NOT NULL,
  `jobNature` varchar(20) NOT NULL,
  `jobDesc` text NOT NULL,
  `jobSalary` varchar(50) NOT NULL,
  `jobImg` varchar(255) NOT NULL,
  `jobStatus` enum('1') NOT NULL COMMENT '1-inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `joblist`
--

INSERT INTO `joblist` (`id`, `jobDate`, `jobName`, `jobLocation`, `jobExp`, `jobNature`, `jobDesc`, `jobSalary`, `jobImg`, `jobStatus`) VALUES
(8, '2020-12-18', 'Designer', 'office1', 'Fresh Graduate', 'Full-time', '<div class=\"panel-pane pane-entity-field pane-node-field-abstract abstract\" style=\"font-style: inherit; font-variant: inherit; border: 0px; font-weight: 600; font-stretch: inherit; font-size: 22.4px; line-height: 1.5; font-family: Montserrat, Helvetica, Arial, sans-serif; vertical-align: baseline; margin: 0.5em 0px; padding: 0px; color: rgb(6, 47, 79);\"><div class=\"pane-content\" style=\"border: 0px; font: inherit; vertical-align: baseline; margin: 0px; padding: 0px;\"><div class=\"field field-name-field-abstract field-type-text-long field-label-hidden\" style=\"border: 0px; font: inherit; vertical-align: baseline; margin: 0px; padding: 0px;\"><div class=\"field-items\" style=\"border: 0px; font: inherit; vertical-align: baseline; margin: 0px; padding: 0px;\"><div class=\"field-item even\" property=\"\" style=\"border: 0px; font: inherit; vertical-align: baseline; margin: 0px; padding: 0px;\">Working from agreed design briefs, graphic designers use text and images to communicate information and ideas.</div></div></div></div></div><div class=\"panel-separator\" style=\"color: rgb(0, 0, 0); font: inherit; border: 0px; vertical-align: baseline; margin: 0px 0px 1em; padding: 0px;\"></div><div class=\"panel-pane pane-node-body\" style=\"color: rgb(0, 0, 0); font: inherit; border: 0px; vertical-align: baseline; margin: 0px; padding: 0px;\"><div class=\"pane-content\" style=\"border: 0px; font: inherit; vertical-align: baseline; margin: 0px; padding: 0px;\"><div class=\"field field-name-body field-type-text-with-summary field-label-hidden\" style=\"border: 0px; font: inherit; vertical-align: baseline; margin: 0px; padding: 0px;\"><div class=\"field-items\" style=\"border: 0px; font: inherit; vertical-align: baseline; margin: 0px; padding: 0px;\"><div class=\"field-item even\" property=\"content:encoded\" style=\"border: 0px; font: inherit; vertical-align: baseline; margin: 0px; padding: 0px;\"><blockquote class=\"quote\" sites=\"\" all=\"\" themes=\"\" targetjobs=\"\" images=\"\" quote.svg\")=\"\" 0%=\"\" 25%=\"\" no-repeat=\"\" transparent;=\"\" color:=\"\" rgb(6,=\"\" 47,=\"\" 79);\"=\"\" style=\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: 700; font-stretch: inherit; font-size: 20.8px; line-height: inherit; font-family: Montserrat, Helvetica, Arial, sans-serif; vertical-align: baseline; margin-bottom: 1em; margin-left: 1em; padding: 85px 0px 0px; quotes: none; float: right; width: 246.391px; background: url(&quot;&quot;);\"><p style=\"border: 0px; font: inherit; vertical-align: baseline; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\">Gain relevant experience, build up a portfolio and become familiar with relevant industry software.</p></blockquote><p style=\"border: 0px; font: inherit; vertical-align: baseline; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><span style=\"border: 0px; font-style: inherit; font-variant: inherit; font-weight: 600; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: Montserrat, Helvetica, Arial, sans-serif; vertical-align: baseline; margin: 0px; padding: 0px;\">What does a graphic designer do?</span></p><p style=\"border: 0px; font: inherit; vertical-align: baseline; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\">Graphic designers/artists design graphics for use in media products such as magazines, labels, advertising and signage. Typical activities include:</p><ul style=\"border: 0px; font: inherit; vertical-align: baseline; margin-right: 0px; margin-bottom: 1em; margin-left: 1.2em; padding: 0px; list-style-position: outside; list-style-image: initial;\"><li style=\"border: 0px; font: inherit; vertical-align: baseline; margin: 0px 0px 0.5em; padding: 0px;\">liaising with clients to determine their requirements and budget</li><li style=\"border: 0px; font: inherit; vertical-align: baseline; margin: 0px 0px 0.5em; padding: 0px;\">managing client proposals from typesetting through to design, print and production</li><li style=\"border: 0px; font: inherit; vertical-align: baseline; margin: 0px 0px 0.5em; padding: 0px;\">working with clients, briefing and advising them with regard to design style, format, print production and timescales</li><li style=\"border: 0px; font: inherit; vertical-align: baseline; margin: 0px 0px 0.5em; padding: 0px;\">developing concepts, graphics and layouts for product illustrations, company logos and websites</li><li style=\"border: 0px; font: inherit; vertical-align: baseline; margin: 0px 0px 0.5em; padding: 0px;\">determining size and arrangement of copy and illustrative material, as well as font style and size</li><li style=\"border: 0px; font: inherit; vertical-align: baseline; margin: 0px 0px 0.5em; padding: 0px;\">preparing rough drafts of material based on an agreed brief</li><li style=\"border: 0px; font: inherit; vertical-align: baseline; margin: 0px 0px 0.5em; padding: 0px;\">reviewing final layouts and suggesting improvements if required</li><li style=\"border: 0px; font: inherit; vertical-align: baseline; margin: 0px 0px 0.5em; padding: 0px;\">liaising with external printers on a regular basis to ensure deadlines are met and material is printed to the highest quality.</li></ul><p style=\"border: 0px; font: inherit; vertical-align: baseline; margin-right: 0px; margin-bottom: 1em; margin-left: 0px; padding: 0px;\"><span style=\"color: rgb(41, 40, 40); font-family: Montserrat, Helvetica, Arial, sans-serif;\">Graphic designers work mainly nine-to-five, but deadlines may require working additional hours. Opportunities for graphic designers exist in cities throughout the country, although freelance designers can work from home.</span></p></div></div></div></div></div>', '4.000.000', 'featuredimg/Designerdesigner.png', '1'),
(9, '2020-12-17', 'Accounting', 'office2', 'Experienced', 'Part-time', '<p>Accounting</p>', '3.000.000', 'featuredimg/Accountingcalculations.png', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forminput`
--
ALTER TABLE `forminput`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `joblist`
--
ALTER TABLE `joblist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forminput`
--
ALTER TABLE `forminput`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `joblist`
--
ALTER TABLE `joblist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
