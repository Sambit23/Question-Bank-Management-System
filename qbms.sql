-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 04:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `branch` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `branch`) VALUES
(218875, 'CSE'),
(218876, 'Mca'),
(218880, 'EEE'),
(218881, 'Physics'),
(218882, 'Agriculture'),
(218883, 'Computer Science'),
(218884, 'Chemistry'),
(218885, 'Mathematics'),
(218886, 'Mechanical Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(11) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `course`) VALUES
(218876, 'Mca'),
(218878, 'BSc'),
(218879, 'B. Tech'),
(218881, 'M.tech');

-- --------------------------------------------------------

--
-- Table structure for table `mcq_questions`
--

CREATE TABLE `mcq_questions` (
  `q_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `question` varchar(2555) NOT NULL,
  `op1` varchar(255) NOT NULL,
  `op2` varchar(255) NOT NULL,
  `op3` varchar(255) NOT NULL,
  `op4` varchar(255) NOT NULL,
  `correct_option` varchar(255) NOT NULL,
  `explanation` varchar(5000) NOT NULL,
  `uploaded_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mcq_questions`
--

INSERT INTO `mcq_questions` (`q_id`, `subject`, `question`, `op1`, `op2`, `op3`, `op4`, `correct_option`, `explanation`, `uploaded_by`) VALUES
(8, 'JAVA', 'Which of the following option leads to the portability and security of Java?', 'Bytecode is executed by JVM', 'The applet makes the Java code secure and portable', 'Use of exception handling', 'Dynamic binding between objects', '(a)', 'The output of the Java compiler is bytecode, which leads to the security and portability of the Java code.\r\nIt is a highly developed set of instructions that are designed to be executed by the Java runtime system known as Java Virtual Machine (JVM).\r\nThe Java programs executed by the JVM that makes the code portable and secure.\r\nBecause JVM prevents the code from generating its side effects. \r\nThe Java code is portable, as the same byte code can run on any platform.\r\n\r\nHence, the correct answer is option (a).', 'sambit'),
(12, 'JAVA', 'Which of the following is not a Java features?', 'Dynamic\r\n', 'Architecture Neutral\r\n', 'Use of pointers\r\n', 'Object-oriented', '(c)', 'The Java language does not support pointers; some of the major reasons are listed below:\r\n\r\nOne of the major factors of not using pointers in Java is security concerns. \r\nDue to pointers, most of the users consider C-language very confusing and complex.\r\nThis is the reason why Green Team (Java Team members) has not introduced pointers in Java.\r\nJava provides an effective layer of abstraction to the developers by not using pointers in Java.\r\nJava is dynamic, architecture-neutral, and object-oriented programming language.\r\n\r\nHence, the correct answer is option (c).', 'sambit'),
(13, 'JAVA', 'The \\u0021 article referred to as a', 'Unicode escape sequence\r\n', 'Octal escape\r\n', 'Hexadecimal\r\n', 'Line feed', '(a)', 'In Java, Unicode characters can be used in string literals, comments, and commands, and are expressed by Unicode Escape Sequences. \r\nA Unicode escape sequence is made up of the following articles:\r\n\r\n1.A backslash \'\\\' (ASCII character 92)\r\n2.A \'u\' (ASCII 117)\r\n3.One or more additional \'u\' characters that are optional.\r\n4.A four hexadecimal digits (a character from 0 - 9 or a-f or A-F)\r\n\r\n\r\nHence, the correct answer is the option (a).', 'sambit'),
(14, 'Python', 'What is the maximum possible length of an identifier?', '16', '32', '64', 'None of these above', '(d)', ' The maximum possible length of an identifier is not defined in the python language. It can be of any number.', 'sambit'),
(15, 'Python', 'Who developed the Python language?', 'Zim Den', 'Guido van Rossum', 'Niene Stom', 'Wick van Rossum', '(b)', ' Python language was developed by Guido van Rossum in the Netherlands.', 'sambit'),
(16, 'C programming', 'What is the 16-bit compiler allowable range for integer constants?', '-3.4e38 to 3.4e38', '-32767 to 32768', '-32668 to 32667', '-32768 to 32767', '(d)', 'In a 16-bit C compiler, we have 2 bytes to store the value.\r\n\r\n1.The range for signed integers is -32768 to 32767.\r\n2.The range for unsigned integers is 0 to 65535.\r\n3.The range for unsigned character is 0 to 255.', 'sambit');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `fname`, `lname`, `email`, `mobile`, `gender`, `DOB`, `address`, `username`, `password`) VALUES
(1821, 'Sambit', 'Pattanaik', 'dr.sambit14@gmail.com', '08763736359', 'male', '2021-04-16', 'Cooperative  colony 2nd lane', 'Sambit', '$2y$10$Mc7xdqoqzWcZ82cin788v.Wy.0eiqQO2gvZl2Rj7sB50Mz6zr0W2.');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `gender`, `email`, `mobile`, `img`, `username`, `password`) VALUES
(55621, 'Tom', 'jerry', 'Male', 'tom12@gmail.com', '98756151611', 'student-profile/tom12@gmail.com/98756151611/Tom//tom.jpg', 'Tom', '$2y$10$KO7zkCNwK8LMZpholtdxxulrCVvpo3w.5WNXNX01Ik1N39MFRqwP2'),
(55626, 'Sambit', 'Pattanaik', 'Male', 'dr.sambit14@gmail.com', '08763736359', '', 'Sambit', '$2y$10$NGO1JQDqovKv6kAYZMEwxuF/ebjhg6UNnyr3gLGjnSOE6IGtavbT6');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject`) VALUES
(2, 'Python'),
(4, 'JAVA'),
(5, 'C programming'),
(6, 'CPP'),
(7, 'Engineering Economics'),
(8, 'Data Structures'),
(9, 'Math');

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `id` int(11) NOT NULL,
  `universityname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`id`, `universityname`, `city`, `state`) VALUES
(16, 'BPUT', 'Rourkela', 'Odisha'),
(19, 'Berhampur University', 'Berhampur', 'Odisha'),
(21, 'Utkal University', 'Bhubaneswar', 'Odisha');

-- --------------------------------------------------------

--
-- Table structure for table `university_questions`
--

CREATE TABLE `university_questions` (
  `id` int(11) NOT NULL,
  `universityname` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `uploaded_by` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `approved` varchar(255) NOT NULL,
  `date_uploaded` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `university_questions`
--

INSERT INTO `university_questions` (`id`, `universityname`, `course`, `branch`, `subject`, `year`, `semester`, `uploaded_by`, `file_path`, `approved`, `date_uploaded`) VALUES
(39, 'Berhampur University', 'Mca', 'Computer Science', 'C programming', '2015', '1 ST', '1821', 'added_question/Berhampur University/Mca/Computer Science/C programming/2015/1 ST//Sambitpattanaik.pdf', '1', '2021-04-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `mcq_questions`
--
ALTER TABLE `mcq_questions`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `universityname` (`universityname`);

--
-- Indexes for table `university_questions`
--
ALTER TABLE `university_questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218889;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=218882;

--
-- AUTO_INCREMENT for table `mcq_questions`
--
ALTER TABLE `mcq_questions`
  MODIFY `q_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1822;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55627;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `university`
--
ALTER TABLE `university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `university_questions`
--
ALTER TABLE `university_questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
