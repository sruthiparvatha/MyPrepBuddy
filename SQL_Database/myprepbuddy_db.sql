-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2020 at 05:01 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myprepbuddy_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `aptitude_table`
--

CREATE TABLE `aptitude_table` (
  `A_id` varchar(4) NOT NULL,
  `Question` varchar(5000) NOT NULL,
  `Option_1` varchar(1500) NOT NULL,
  `Option_2` varchar(1500) NOT NULL,
  `Option_3` varchar(1500) NOT NULL,
  `Option_4` varchar(1500) NOT NULL,
  `Answer` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aptitude_table`
--

INSERT INTO `aptitude_table` (`A_id`, `Question`, `Option_1`, `Option_2`, `Option_3`, `Option_4`, `Answer`) VALUES
('A001', 'A train running at the speed of 60 km/hr crosses a pole in 9 seconds. What is the length of the train?', '120 metres', '180 metres', '324 metres', '150 metres', '150 metres'),
('A002', 'A train 125 m long passes a man, running at 5 km/hr in the same direction in which the train is going, in 10 seconds. The speed of the train is:', '45 km/hr', '50 km/hr', '54 km/hr', '55 km/hr', '50 km/hr'),
('A003', 'A person crosses a 600 m long street in 5 minutes. What is his speed in km per hour?', '3.6', '7.2', '8.4', '10', '7.2'),
('A004', '	\r\nAn aeroplane covers a certain distance at a speed of 240 kmph in 5 hours. To cover the same distance in 1 hours, it must travel at a speed of:', '300', '360', '620', '720', '720'),
('A005', 'A bank offers 5% compound interest calculated on half-yearly basis. A customer deposits Rs. 1600 each on 1st January and 1st July of a year. At the end of the year, the amount he would have gained by way of interest is:', '1213', '122', '123', '120', '121'),
('A006', '	\r\nThe difference between simple and compound interests compounded annually on a certain sum of money for 2 years at 4% per annum is Re. 1. The sum (in Rs.) is:', '625', '640', '630', '620', '625'),
('A007', 'The cost price of 20 articles is the same as the selling price of x articles. If the profit is 25%, then the value of x is:', '25', '15', '18', '16', '16'),
('A008', 'In a certain store, the profit is 320% of the cost. If the cost increases by 25% but the selling price remains constant, approximately what percentage of the selling price is the profit?', '100%', '30%', '70%', '250%', '70%'),
('A009', '	\r\nFrom a group of 7 men and 6 women, five persons are to be selected to form a committee so that at least 3 men are there on the committee. In how many ways can it be done?', '645', '756', '543', '789', '756'),
('A010', 'In how many different ways can the letters of the word \'CORPORATION\' be arranged so that the vowels always come together?', '1440', '810', '50400', '2880', '50400');

-- --------------------------------------------------------

--
-- Table structure for table `logical_table`
--

CREATE TABLE `logical_table` (
  `L_id` varchar(4) NOT NULL,
  `Question` varchar(5000) NOT NULL,
  `Option_1` varchar(1500) NOT NULL,
  `Option_2` varchar(1500) NOT NULL,
  `Option_3` varchar(1500) NOT NULL,
  `Option_4` varchar(1500) NOT NULL,
  `Answer` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logical_table`
--

INSERT INTO `logical_table` (`L_id`, `Question`, `Option_1`, `Option_2`, `Option_3`, `Option_4`, `Answer`) VALUES
('L001', '	\r\nPointing to a photograph of a boy Suresh said, \"He is the son of the only son of my mother.\" How is Suresh related to that boy?', 'Brother', 'Uncle', 'Cousin', 'Father', 'Father'),
('L002', 'If A + B means A is the mother of B; A - B means A is the brother B; A % B means A is the father of B and A x B means A is the sister of B, which of the following shows that P is the maternal uncle of Q?', 'Q - N + M x P', 'Q - S % P', 'P - M + N x Q', 'P + S x N - Q', 'P - M + N x Q'),
('L003', '	\r\nA, P, R, X, S and Z are sitting in a row. S and Z are in the centre. A and P are at the ends. R is sitting to the left of A. Who is to the right of P ?', 'A', 'X', 'S', 'Z', 'Z'),
('L004', 'There are 8 houses in a line and in each house only one boy lives with the conditions as given below:\r\n\r\nJack is not the neighbour Siman.\r\nHarry is just next to the left of Larry.\r\nThere is at least one to the left of Larry.\r\nPaul lives in one of the two houses in the middle.\r\nMike lives in between Paul and Larry.\r\nIf at least one lives to the right of Robert and Harry is not between Taud and Larry, then which one of the following statement is not correct ?', 'Robert is not at the left end.', 'Robert is in between Simon and Taud.', 'Taud is in between Paul and Jack.', 'There are three persons to the right of Paul.', 'Taud is in between Paul and Jack.'),
('L005', '	\r\nA, B, C, D and E are sitting on a bench. A is sitting next to B, C is sitting next to D, D is not sitting with E who is on the left end of the bench. C is on the second position from the right. A is to the right of B and E. A and C are sitting together. In which position A is sitting ?', 'Between B and D', 'Between B and C', 'Between E and D', 'Between C and E', 'Between B and C'),
('L006', '	\r\nOne morning Udai and Vishal were talking to each other face to face at a crossing. If Vishal\'s shadow was exactly to the left of Udai, which direction was Udai facing?', 'East', 'North', 'West', 'South', 'North'),
('L007', 'Rahul put his timepiece on the table in such a way that at 6 P.M. hour hand points to North. In which direction the minute hand will point at 9.15 P.M. ?', 'North', 'South-East', 'South', 'West', 'West'),
('L008', 'Each of the following questions is based on the following information:\r\nSix flats on a floor in two rows facing North and South are allotted to P, Q, R, S, T and U.\r\nQ gets a North facing flat and is not next to S.\r\nS and U get diagonally opposite flats.\r\nR next to U, gets a south facing flat and T gets North facing flat. \r\n	\r\nIf the flats of P and T are interchanged then whose flat will be next to that of U?', 'P', 'Q', 'R', 'T', 'R'),
('L009', '	\r\n589654237, 89654237, 8965423, 965423, ?', '58965', '65423', '89654', '96542', '96542'),
('L010', 'In the series 2, 6, 18, 54, ...... what will be the 8th term ?', '4370', '7443', '4374', '7434', '4374');

-- --------------------------------------------------------

--
-- Table structure for table `technical_table`
--

CREATE TABLE `technical_table` (
  `T_id` varchar(4) NOT NULL,
  `Question` varchar(5000) NOT NULL,
  `Option_1` varchar(1500) NOT NULL,
  `Option_2` varchar(1500) NOT NULL,
  `Option_3` varchar(1500) NOT NULL,
  `Option_4` varchar(1500) NOT NULL,
  `Answer` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `technical_table`
--

INSERT INTO `technical_table` (`T_id`, `Question`, `Option_1`, `Option_2`, `Option_3`, `Option_4`, `Answer`) VALUES
('T001', 'How long is an IPv6 address?', '32 bits', '128 bytes', '64 bits', '128 bits', '128 bits'),
('T002', 'You have 10 users plugged into a hub running 10Mbps half-duplex. There is a server connected to the switch running 10Mbps half-duplex as well. How much bandwidth does each host have to the server?', '1 Mbps', '2 Mbps', '100 kbps', '10 Mbps', '10 Mbps'),
('T003', 'What type of join is needed when you wish to include rows that do not have matching values?', 'Equi-join', 'Natural join', 'Outer join', 'All of the above.', 'Outer join'),
('T004', 'Which of the following statements is true concerning routines and triggers?', 'Both consist of procedural code.', 'Both have to be called to operate.', 'Both run automatically.', 'Both are stored in the database', 'Both consist of procedural code.'),
('T005', 'class Boo \r\n{\r\n    Boo(String s) { }\r\n    Boo() { }\r\n}\r\nclass Bar extends Boo \r\n{\r\n    Bar() { }\r\n    Bar(String s) {super(s);}\r\n    void zoo() \r\n    {\r\n    // insert code here\r\n    }\r\n}\r\nwhich one create an anonymous inner class from within class Bar?', 'Boo f = new Boo(24) { };', 'Boo f = new Bar() { };', 'Bar f = new Boo(String s) { };', 'Boo f = new Boo.Bar(String s) { };', 'Boo f = new Bar() { };'),
('T006', 'Which constructs an anonymous inner class instance?', 'Runnable r = new Runnable() { };', 'Runnable r = new Runnable(public void run() { });', 'Runnable r = new Runnable { public void run(){}};', 'System.out.println(new Runnable() {public void run() { }});', 'System.out.println(new Runnable() {public void run() { }});'),
('T007', 'What will be the output of the program ?\r\n\r\n#include<stdio.h>\r\n\r\nint main()\r\n{\r\n    union a\r\n    {\r\n        int i;\r\n        char ch[2];\r\n    };\r\n    union a u;\r\n    u.ch[0]=3;\r\n    u.ch[1]=2;\r\n    printf(\"%d, %d, %d\\n\", u.ch[0], u.ch[1], u.i);\r\n    return 0;\r\n}', '3, 2, 515', '3, 2, 5', '515, 515, 4', '515, 2, 3', '3, 2, 515'),
('T008', 'What will be the output of the program ?\r\n\r\n#include<stdio.h>\r\n\r\nint main()\r\n{\r\n    struct value\r\n    {\r\n        int bit1:1;\r\n        int bit3:4;\r\n        int bit4:4;\r\n    }bit={1, 2, 13};\r\n\r\n    printf(\"%d, %d, %d\\n\", bit.bit1, bit.bit3, bit.bit4);\r\n    return 0;\r\n}', '1, 2, 13', '1, 4, 4', '-1, 2, -3', '-1, -2, -13', '-1, 2, -3'),
('T009', 'What will be the output of the program in 16 bit platform (Turbo C under DOS) ?\r\n\r\n#include<stdio.h>\r\n\r\nint main()\r\n{\r\n    struct value\r\n    {\r\n        int bit1:1;\r\n        int bit3:4;\r\n        int bit4:4;\r\n    }bit;\r\n    printf(\"%d\\n\", sizeof(bit));\r\n    return 0;\r\n}', '1', '2', '4', '9', '2'),
('T010', 'What will be the output of the program ?\r\n\r\n#include<stdio.h>\r\n\r\nint main()\r\n{\r\n    enum days {MON=-1, TUE, WED=6, THU, FRI, SAT};\r\n    printf(\"%d, %d, %d, %d, %d, %d\\n\", MON, TUE, WED, THU, FRI, SAT);\r\n    return 0;\r\n}', '-1, 0, 1, 2, 3, 4', '-1, 2, 6, 3, 4, 5', '-1, 0, 6, 2, 3, 4', '-1, 0, 6, 7, 8, 9', '-1, 0, 6, 7, 8, 9');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `register_date` date NOT NULL,
  `last_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `phno`, `register_date`, `last_login`) VALUES
(7, 'test2', 'test2@gmail.com', '$2y$08$L.Fp0GcwmfGQCo47WYOaped.PwRMovZ8rvz6.ABpGvIRoYTKBN8VG', '1234567890', '2020-09-24', '2020-09-24 08:09:16'),
(8, 'test3', 'test3@gmail.com', '$2y$08$n.Phg5NX1o4F5e0ePXJEpub6o3pJRZE/rhf0X5wUrYRtFzFvVyEb.', '1234567890', '2020-09-24', '2020-09-24 08:09:03'),
(11, 'test4', 'test4@gmail.com', '$2y$08$i1eculFD7e9Rz.WV/6kV9ekA7Q3YhCUJH3TRRsX2njpVJALtZ4D/e', '1234567890', '2020-09-24', '2020-09-24 09:09:04'),
(12, 'test1', 'test1@gmail.com', '$2y$08$0/yV8nRQZxOa3ZM5tIm78.GzfVSTGMsf78k/N.rnT1CGObBJRsdy.', '1234567890', '2020-09-24', '2020-09-24 09:09:14'),
(14, 'Sruthi', 'sruthi@gmail.com', '$2y$08$3X1tHKInOFsWUgF89YMki.rcvgLjTa.OiwW/UWKoghZZroJSBsNc2', '1234567890', '2020-09-24', '2020-09-24 09:09:29');

-- --------------------------------------------------------

--
-- Table structure for table `verbal_table`
--

CREATE TABLE `verbal_table` (
  `V_id` varchar(4) NOT NULL,
  `Question` varchar(5000) NOT NULL,
  `Option_1` varchar(1500) NOT NULL,
  `Option_2` varchar(1500) NOT NULL,
  `Option_3` varchar(1500) NOT NULL,
  `Option_4` varchar(1500) NOT NULL,
  `Answer` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verbal_table`
--

INSERT INTO `verbal_table` (`V_id`, `Question`, `Option_1`, `Option_2`, `Option_3`, `Option_4`, `Answer`) VALUES
('V001', 'Synonym of ENORMOUS', 'Soft', 'Average', 'Tiny', 'Weak', 'Tiny'),
('V002', 'Synonym of EXODUS', 'Influx', 'Home-coming', 'Return', 'Restoration', 'Influx'),
('V003', 'Synonym of CORPULENT', 'Lean', 'Obese', 'Gaunt', 'Emaciated', 'Obese'),
('V004', 'When he\r\nP :	did not know\r\nQ :	he was nervous and\r\nR :	heard the hue and cry at midnight\r\nS :	what to do\r\nThe Proper sequence should be:', 'RQPS', 'QSPR', 'SQPR', 'PQRS', 'RQPS'),
('V005', 'Since the beginning of history\r\nP :	have managed to catch\r\nQ :	the Eskimos and Red Indians\r\nR :	by a very difficulty method\r\nS :	a few specimens of this aquatic animal\r\nThe Proper sequence should be:', 'SQPR', 'SQRP', 'QRPS', 'QPSR', 'QPSR'),
('V006', 'Even if it rains I shall come means ......', 'if it rains I shall not come', 'if I come it will not rain', 'I will certainly come whether it rains or not', 'I am less likely to come if it rains', 'I will certainly come whether it rains or not'),
('V007', 'With great efforts his son succeeded in convincing him not to donate his entire wealth to an orphanage ......', 'but to a home for the forsaken children', 'and lead the life of a wealthy merchant', 'as the orphanage needed a lot of donations', 'and make an orphan of himself', 'and make an orphan of himself'),
('V008', 'It was an extremely pleasant surprise for the hutment-dweller when the Government officials told him that ......', 'he would be arrested for wrongfully encroaching on the pavement outside his dwelling', 'he had been gifted with a furnished apartment in a multi-storeyed building', 'they had received the orders from the court to take possession of all his belongings', 'they would not accede to his request', 'he had been gifted with a furnished apartment in a multi-storeyed building'),
('V009', 'Choose the correct meaning of proverb/idiom To catch a tartar:', 'To trap wanted criminal with great difficulty', 'To catch a dangerous person', 'To deal with a person who is more than one\'s match', 'To meet with disaster', 'To catch a dangerous person'),
('V010', 'Choose the correct meaning of proverb/idiom\r\nTo hit the nail right on the head', 'To do the right thing', 'To destroy one\'s reputation', 'To announce one\'s fixed views', 'To teach someone a lesson', 'To do the right thing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aptitude_table`
--
ALTER TABLE `aptitude_table`
  ADD PRIMARY KEY (`A_id`);

--
-- Indexes for table `logical_table`
--
ALTER TABLE `logical_table`
  ADD PRIMARY KEY (`L_id`);

--
-- Indexes for table `technical_table`
--
ALTER TABLE `technical_table`
  ADD PRIMARY KEY (`T_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verbal_table`
--
ALTER TABLE `verbal_table`
  ADD PRIMARY KEY (`V_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
