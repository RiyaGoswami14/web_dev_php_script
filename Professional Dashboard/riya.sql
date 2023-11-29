-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2023 at 06:32 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riya`
--

-- --------------------------------------------------------

--
-- Table structure for table `myinfo`
--

CREATE TABLE `myinfo` (
  `id` int(13) NOT NULL,
  `about` varchar(999) NOT NULL,
  `skillset` varchar(999) NOT NULL,
  `project_detail` varchar(999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `myinfo`
--

INSERT INTO `myinfo` (`id`, `about`, `skillset`, `project_detail`) VALUES
(1, 'Hello, I am Riya Goswami. I am currently pursuing my Master\'s in Computer Applications (MCA), I completed my bachelor\'s from CZMG BCA College Jamnagar(Saurashtra University). As an MCA student, I am constantly driven by the desire to expand my knowledge and skills in the field of computer science.\r\n\r\nMy enthusiasm to learn and adapt to new challenges is my strongest asset. I am a dedicated and proactive individual who thrives on acquiring new skills and tackling complex problems. My academic journey in MCA has provided me with a solid foundation in various aspects of computer science, and I am eager to apply this knowledge in real-world scenarios.\r\n\r\nApart from the academic, I am an Ex NCC cadet , my rank was Senior Under Officer(SUO).I am a sports person and fitness freak too , back in my school days, I was a right forward player in the hockey team of ahemdabad region and participated in KVS National Sports Meet(Hockey ) for 4 times and in my bachelor\'s i went to gwalior for Inter Un', 'Programming Languages:\r\nPHP: Basic understanding of PHP for web development. C: Familiarity with C programming and basic software development. ASP.NET: Limited exposure to ASP.NET for web application development. SQL: Basic knowledge of SQL for database management. C++: Basic understanding of C++ programming for application development. HTML: Proficient in HTML for web content creation.\r\nMy Strength: I am a people person , i like to work in a team . I am a good communicator , as I worked at the post of RM in ICICI Bank , that role boosted my communication and public speaking skill. As I attended and handled many camps , it gave a good Leadership quality and multi-task performing capacity.I am a good listener.\r\nAdaptability:\r\nQuick learner with the ability to adapt to new things.\r\nProblem-Solving:\r\nProficient in identifying and solving basic technical and programming-related problems.\r\nWeb Development:\r\nBasic skills in web development, with the ability to create and maintain simple web', 'Shopping Application in asp.net for \"BOOK SHOP\" and Shoes store.\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myinfo`
--
ALTER TABLE `myinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myinfo`
--
ALTER TABLE `myinfo`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
