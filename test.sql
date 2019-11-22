-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2019 at 05:31 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_student`
--

CREATE TABLE `add_student` (
  `asid` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `center` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_student`
--

INSERT INTO `add_student` (`asid`, `sname`, `center`) VALUES
(1, 'Anju Mathew', 'Navajyothi College Cherupuzha'),
(2, 'select Catogory', 'select Center'),
(3, 'select Catogory', 'select Center'),
(4, 'select Catogory', 'select Center'),
(5, 'select Catogory', 'select Center');

-- --------------------------------------------------------

--
-- Table structure for table `add_teachers`
--

CREATE TABLE `add_teachers` (
  `aid` int(11) NOT NULL,
  `catogory` int(10) NOT NULL,
  `teacher` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_teachers`
--

INSERT INTO `add_teachers` (`aid`, `catogory`, `teacher`) VALUES
(1, 1, '2'),
(2, 2, '4'),
(3, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(11) NOT NULL,
  `qno` int(100) NOT NULL,
  `ans` varchar(100) NOT NULL,
  `userans` varchar(100) NOT NULL,
  `loginid` varchar(100) NOT NULL,
  `cat_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `qno`, `ans`, `userans`, `loginid`, `cat_id`) VALUES
(1, 1, 'None of these', 'If x is smaller than y, then A is greater than B.', '15', 2),
(2, 2, 'strnset()', 'strinit()', '16', 1),
(3, 3, '4% of a', '5% of a', '15', 2),
(5, 5, '12 hours', '10 hours', '15', 2),
(7, 6, 'strstr()', 'strstr()', '16', 1),
(8, 7, 'a program in execution', 'a job in secondary memory', '16', 1),
(9, 8, 'Host-to-Host', 'Host-to-Host', '16', 1),
(10, 9, 'Rs. 1190', 'Rs. 1090', '15', 2),
(11, 10, '9944', '9768', '15', 2),
(16, 11, 'Binomial coefficient', 'Recursion', '16', 1),
(17, 12, '1/4', '1/4', '15', 2),
(18, 13, 'O(1) ', 'O(log2 n) ', '15', 2),
(19, 14, 'queue ', ' stack ', '16', 1),
(20, 15, '4 years', '8 years', '15', 2),
(22, 16, 'Sunday', 'Thursday', '15', 2),
(23, 17, 'Saturday', 'Tuesday  ', '', 2),
(25, 18, 'soup', 'soup  ', '', 2),
(26, 19, 'Data record', 'Menu', '16', 1),
(27, 20, 'A tuple', 'A tuple', '16', 1),
(28, 21, 'Self Join', 'Outer Join', '16', 1),
(29, 22, 'Database Management System', '', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bid` int(11) NOT NULL,
  `loginid` int(100) NOT NULL,
  `tenins` varchar(100) NOT NULL,
  `tenper` int(100) NOT NULL,
  `tenyop` int(100) NOT NULL,
  `tenfile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bid`, `loginid`, `tenins`, `tenper`, `tenyop`, `tenfile`) VALUES
(1, 15, 'bb', 0, 0, 'photo/'),
(2, 16, 'GHSS Kannur', 89, 2013, 'photo/images (1).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `book2`
--

CREATE TABLE `book2` (
  `b2id` int(11) NOT NULL,
  `loginid` int(20) NOT NULL,
  `plusins` varchar(100) NOT NULL,
  `plusper` int(4) NOT NULL,
  `plusyop` int(4) NOT NULL,
  `plusfile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book2`
--

INSERT INTO `book2` (`b2id`, `loginid`, `plusins`, `plusper`, `plusyop`, `plusfile`) VALUES
(1, 15, '', 0, 0, 'photo/'),
(2, 16, 'GHSS Kannur', 83, 2015, 'photo/sslc.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `book3`
--

CREATE TABLE `book3` (
  `b3id` int(11) NOT NULL,
  `loginid` int(20) NOT NULL,
  `ugins` varchar(100) NOT NULL,
  `ugper` int(4) NOT NULL,
  `ugyop` int(4) NOT NULL,
  `ugfile` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book3`
--

INSERT INTO `book3` (`b3id`, `loginid`, `ugins`, `ugper`, `ugyop`, `ugfile`) VALUES
(1, 15, '', 0, 0, 'photo/'),
(2, 16, 'Govt.College Kannur', 78, 2018, 'photo/plustwo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `fee` int(10) NOT NULL,
  `status` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`cat_id`, `cat_name`, `fee`, `status`) VALUES
(1, 'Lateral Entry', 1000, 1),
(2, ' REGULAR', 1000, 1),
(33, 'REGULAR', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `center`
--

CREATE TABLE `center` (
  `cen_id` int(11) NOT NULL,
  `cen_name` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `seat` int(100) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `center`
--

INSERT INTO `center` (`cen_id`, `cen_name`, `place`, `code`, `seat`, `status`) VALUES
(1, 'Navajyothi College Cherupuzha', 'Kannur', 'NJC', 100, 1),
(2, 'Navajyothi College Cherupuzha', 'Kannur', 'NJC', 100, 1),
(6, 'gjgjhgjgj', 'ghghgjhghj', '123', 0, 0),
(7, 'gjgjhgjgj', 'ghghgjhghj', '123', 0, 0),
(8, 'Navajyothi College Cherupuzha', 'Kannur', 'NJC', 100, 0),
(9, 'Navajyothi College Cherupuzha', 'Kannur', 'NJC', 100, 0),
(10, 'Navajyothi College Cherupuzha', 'Kannur', 'NJC', 100, 0),
(11, 'Ajce', 'kottayam', 'mmmm', 87, 0);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(11) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `cname`) VALUES
(1, 'BCA'),
(2, 'BSC Comp.Science'),
(3, 'BSC IT');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `hid` int(100) NOT NULL,
  `loginid` int(100) NOT NULL,
  `rights` int(100) NOT NULL,
  `wrong` int(100) NOT NULL,
  `total` int(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`hid`, `loginid`, `rights`, `wrong`, `total`, `date`) VALUES
(1, 3, 5, 5, 10, '2019-11-12 23:42:33.690560'),
(7, 2, 3, 7, 2, '2019-11-12 23:51:55.475949'),
(11, 13, 5, 5, 10, '2019-11-19 15:54:11.854262');

-- --------------------------------------------------------

--
-- Table structure for table `like_table`
--

CREATE TABLE `like_table` (
  `fid` int(11) NOT NULL,
  `framework` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `like_table`
--

INSERT INTO `like_table` (`fid`, `framework`) VALUES
(1, 'Lateral Entry'),
(2, 'Lateral Entry,  REGULAR'),
(3, ' REGULAR'),
(4, 'Lateral Entry,  REGULAR'),
(5, ' REGULAR'),
(6, 'Lateral Entry'),
(7, 'Lateral Entry'),
(8, 'Lateral Entry'),
(9, 'Lateral Entry'),
(10, 'Lateral Entry'),
(11, 'Lateral Entry'),
(12, 'Lateral Entry'),
(13, 'Lateral Entry'),
(14, 'Lateral Entry'),
(15, 'Lateral Entry,  REGULAR'),
(16, 'Lateral Entry,  REGULAR'),
(17, 'Lateral Entry,  REGULAR'),
(18, 'Lateral Entry,  REGULAR');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(11) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `uname`, `pass`, `type`, `status`) VALUES
(1, 'admin', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'admin', 1),
(2, 'anjumathew', '8d5e3fa6d3e5c6c7e56b3ec1c37457d1', 'S', 1),
(3, 'sharon k', 'dbeed952938d67285523c8b75fc69d3a', 'S', 1),
(10, '', 'd41d8cd98f00b204e9800998ecf8427e', 'T', 0),
(11, 'thomas mathew', 'feb95e9d03aef33c0ca298e505aedc00', 'T', 1),
(12, 'remya s', '8a769674465fa862a271d55899f87c43', 'T', 0),
(13, 'anjali ps', '835e92332bc2b30b981157a17ef429f5', 'S', 0),
(14, 'anitta mol', 'c877cca30e6c237324ba1e6f51e28a48', 'S', 1),
(15, 'sruthi kumar', '808ce378777ff391127a66fa004de27f', 'S', 1),
(16, 'anupama kumar', '91dc9f0e1f06413dfa2cef12571ff746', 'S', 1),
(17, 'abyjo', '8d5e3fa6d3e5c6c7e56b3ec1c37457d1', 'S', 0),
(18, 'admin', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'admin', 0),
(19, 'admin', 'e64b78fc3bc91bcbc7dc232ba8ec59e0', 'admin', 1),
(20, 'username', 'dc8a782fd5dbe1477aecdd0cb6d1694a', 'S', 0),
(21, 'anjumathew', 'b5e06d6458aca8cb1ca5c69127d26d66', 'T', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pay`
--

CREATE TABLE `pay` (
  `pid` int(11) NOT NULL,
  `loginid` int(100) NOT NULL,
  `amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `pid` int(11) NOT NULL,
  `loginid` int(100) NOT NULL,
  `photos` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`pid`, `loginid`, `photos`) VALUES
(1, 0, 'photo/&&&&&&&.jpg'),
(2, 0, 'photo/&&&&&&&.jpg'),
(3, 1, 'photo/anjumathew.png');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `loginid` int(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `loginid`, `image`) VALUES
(1, 0, 'photo/&&&&&&&.jpg'),
(2, 19, 'photo/Anju_mathew (2).jpg'),
(3, 10, 'photo/'),
(4, 10, 'photo/'),
(5, 10, 'photo/'),
(6, 24, 'photo/'),
(7, 25, 'photo/'),
(8, 25, 'photo/'),
(9, 27, 'photo/');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qno` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `qn` varchar(100) NOT NULL,
  `o1` varchar(100) NOT NULL,
  `o2` varchar(100) NOT NULL,
  `o3` varchar(100) NOT NULL,
  `o4` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`qno`, `cat_id`, `qn`, `o1`, `o2`, `o3`, `o4`) VALUES
(1, 2, 'If A = x% of y and B = y% of x, then which of the following is true?', 'A is smaller than B.', 'A is greater than B', 'If x is smaller than y, then A is greater than B.', 'None of these'),
(2, 1, 'Which of the following function sets first n characters of a string to a given character?', 'strinit()', 'strnset()', 'strset()', 'strcset()'),
(3, 2, 'If 20% of a = b, then b% of 20 is the same as:', '4% of a', '5% of a', '20% of a', 'None of these'),
(5, 2, 'A can do a piece of work in 4 hours; B and C together can do it in 3 hours, while A and C together c', '8 hours', '10 hours', '12 hours', '24 hours'),
(6, 1, 'Which of the following function is used to find the first occurrence of a given string in another st', 'strchr()', 'strstr()', 'strrchr()', 'strnset()'),
(7, 1, 'Process is', 'contents of main memory', 'a program in execution', 'a job in secondary memory', 'None of the above'),
(8, 1, 'What layer in the TCP/IP stack is equivalent to the Transport layer of the OSI model?', 'Application', 'Host-to-Host', 'Internet', 'Network Access'),
(9, 2, 'A man buys a cycle for Rs. 1400 and sells it at a loss of 15%. What is the selling price of the cycl', 'Rs. 1090', 'Rs. 1160', 'Rs. 1190', 'Rs. 1202'),
(10, 2, 'The largest 4 digit number exactly divisible by 88 is:', '9944', '9768', '9988', '8888'),
(11, 1, 'Which of the following methods used to find the sum of first n natural numbers has the least time co', 'Recursion', 'Iteration', 'Binomial coefficient', 'All have equal time complexity'),
(12, 2, 'What is the value of c , If 8 is 4% of a, and 4 is 8% of b. c equals b/a', '12', '1/4', '0.155', 'None of these'),
(13, 2, 'Consider a linked list of n elements. What is the time taken to insert an element after an element p', 'O(1) ', 'O(log2 n) ', 'O(n) ', 'O(nlog2 n) '),
(14, 1, 'The data structure required for Breadth First Traversal on a graph is', 'queue ', ' stack ', 'array ', 'tree '),
(15, 2, 'The sum of ages of 5 children born at the intervals of 3 years each is 50 years. What is the age of ', '4 years', '8 years', '10 years', '	None of these'),
(16, 2, 'What was the day of the week on 28th May, 2006?', 'Thursday', 'Friday', 'Saturday', 'Sunday'),
(17, 2, 'Today is Monday. After 61 days, it will be:', 'Wednesday', 'Saturday', 'Tuesday', 'Thursday'),
(18, 2, '	\r\nCup is to coffee as bowl is to', 'dish', 'soup', 'spoon', 'food'),
(19, 1, 'Related fields in a database are grouped to form a', 'Data file', 'Data record', 'Menu', 'Bank'),
(20, 1, 'A relational database developer refers to a record as', 'A criteria', 'A relation', 'A tuple', 'An attribute'),
(21, 1, 'A table joined with itself is called', 'Join', 'Self Join', 'Outer Join', 'Equi Join'),
(22, 2, 'What is the full form of DBMS', 'Database Management System', 'Database  System', 'Database Management ', 'Data Management System');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `eid` int(11) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `correct` int(10) NOT NULL,
  `wrong` int(10) NOT NULL,
  `total` int(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`eid`, `cat_id`, `cat_name`, `correct`, `wrong`, `total`, `date`) VALUES
(1, 1, 'Lateral Entry', 3, 1, 10, '2019-11-13 06:40:26.845050'),
(2, 2, 'REGULAR', 3, 1, 10, '2019-11-13 06:40:39.558710');

-- --------------------------------------------------------

--
-- Table structure for table `rank`
--

CREATE TABLE `rank` (
  `rid` int(11) NOT NULL,
  `score` int(100) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `loginid` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `approve` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `loginid`, `name`, `email`, `mobile`, `approve`) VALUES
(1, '2', 'Anju Mathew', 'anju@gmail.com', '8756453423', 1),
(2, '3', 'Sharon Kurian', 'sharon@gmail.com', '8756453423', 1),
(10, '11', 'Thomas Mathew', 'thomas@gmail.com', '9756344534', 0),
(11, '12', 'Remya S', 'remya@gmail.com', '8756453423', 0),
(12, '13', 'Anjali ps', 'anjali@gmail.com', '9867453423', 1),
(13, '14', 'Anitta Chacko', 'anitta@gmail.com', '8756453423', 1),
(14, '15', 'Sruthi Kumar', 'sruthi@gmail.com', '9656453423', 1),
(15, '16', 'Anupama Kumar', 'anupama@gmail.com', '9876563423', 1),
(16, '17', 'aby', ' aby@gmail.com', '9876543212', 0),
(17, '20', 'oppppppppppppppppp', 'llll@yahoo.com', '8999999078', 0),
(18, '21', 'Anju Mathew', 'anju@gmail.com', '9867453421', 0);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` int(11) NOT NULL,
  `loginid` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `elig` varchar(100) NOT NULL,
  `center` varchar(100) NOT NULL,
  `cat_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `loginid`, `dob`, `elig`, `center`, `cat_id`) VALUES
(3, '2', '1997-11-05', '1', 'Navajyothi College Cherupuzha', 1),
(4, '3', '1997-11-05', '3', 'Navajyothi College Cherupuzha', 2),
(5, '13', '2013-11-04', '1', 'Navajyothi College Cherupuzha', 2),
(6, '14', '1992-11-04', '2', 'Navajyothi College Cherupuzha', 1),
(7, '15', '1998-11-23', '2', 'Navajyothi College Cherupuzha', 2),
(8, '16', '2016-11-06', '1', 'Navajyothi College Cherupuzha', 1),
(9, '17', '', '1', 'Navajyothi College Cherupuzha', 1),
(10, '20', '', '3', 'gjgjhgjgj', 1);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` int(11) NOT NULL,
  `loginid` varchar(100) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `col` varchar(100) NOT NULL,
  `file` varchar(100) NOT NULL,
  `approve` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `loginid`, `sub`, `col`, `file`, `approve`) VALUES
(6, '11', 'Web Programming', 'Govt. College Kollam', 'photo/images (1).jpg', 1),
(7, '12', 'DBMS', 'Govt.College Kottayam', 'photo/images (1).jpg', 1),
(8, '21', 'dbms', 'ajce', 'photo/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `unv`
--

CREATE TABLE `unv` (
  `uid` int(11) NOT NULL,
  `unv` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `status` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unv`
--

INSERT INTO `unv` (`uid`, `unv`, `place`, `status`) VALUES
(1, 'Kannur', 'Kannur', 1),
(2, 'Calicut', 'Calicut', 1),
(3, 'MG', 'Kottayam', 1),
(4, 'CUK', 'Kasaragod', 1),
(5, 'Kerala', 'Kerala', 1),
(8, 'Kerala', 'Kerala', 0),
(9, 'JNU', 'Delhi', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_student`
--
ALTER TABLE `add_student`
  ADD PRIMARY KEY (`asid`);

--
-- Indexes for table `add_teachers`
--
ALTER TABLE `add_teachers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `book2`
--
ALTER TABLE `book2`
  ADD PRIMARY KEY (`b2id`);

--
-- Indexes for table `book3`
--
ALTER TABLE `book3`
  ADD PRIMARY KEY (`b3id`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `center`
--
ALTER TABLE `center`
  ADD PRIMARY KEY (`cen_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `like_table`
--
ALTER TABLE `like_table`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `pay`
--
ALTER TABLE `pay`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qno`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `rank`
--
ALTER TABLE `rank`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `unv`
--
ALTER TABLE `unv`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_student`
--
ALTER TABLE `add_student`
  MODIFY `asid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `add_teachers`
--
ALTER TABLE `add_teachers`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book2`
--
ALTER TABLE `book2`
  MODIFY `b2id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book3`
--
ALTER TABLE `book3`
  MODIFY `b3id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `center`
--
ALTER TABLE `center`
  MODIFY `cen_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `hid` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `like_table`
--
ALTER TABLE `like_table`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `pay`
--
ALTER TABLE `pay`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rank`
--
ALTER TABLE `rank`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `unv`
--
ALTER TABLE `unv`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
