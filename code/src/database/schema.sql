DROP TABLE IF EXISTS admin;
DROP TABLE IF EXISTS comment;
DROP TABLE IF EXISTS userimages;
DROP TABLE IF EXISTS users;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `web_sample`
--

-- --------------------------------------------------------




--
-- Table structure for table `admin`


CREATE TABLE `admin` (
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `cid` int(25) NOT NULL AUTO_INCREMENT,
  `body` varchar(400) NOT NULL,
  `postid` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `commentdate` datetime NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userName` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `picture` bit NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `users` ADD `userID` INT NOT NULL AUTO_INCREMENT , ADD UNIQUE (`userID`); 
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userName`, `firstName`, `lastName`, `email`, `password`) VALUES
('kenneth', 'Ken', 'Mewling', 'KMewling@gmail.com', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userName`),
  ADD UNIQUE KEY `email` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

-- --------------------------------------------------------

-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userName`);
INSERT INTO `admin` (`userName`, `password`) VALUES  ('admin', 'password'),('admin1','password'),('admin2','password'),('admin3','password');
--

--
ALTER TABLE `comment` ADD CONSTRAINT `postid` FOREIGN KEY (`postid`) REFERENCES `trails` (`trailId`) ON DELETE CASCADE ON UPDATE CASCADE;
-- ALTER TABLE `comment` ADD  `cid` INT NOT NULL AUTO_INCREMENT, ADD UNIQUE (`cid`);

-- Table structure for table `userimages`
--

CREATE TABLE `userimages` (
  `userID` int(11) NOT NULL,
  `contentType` varchar(255) NOT NULL,
  `image` blob NOT NULL,
  `destination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--



--
-- Indexes for table `userimages`
--
ALTER TABLE `userimages`
  ADD PRIMARY KEY (`userID`),
  ADD KEY `userID` (`userID`);

--
-- Constraints for dumped tables

--
-- Constraints for table `userimages`
--
ALTER TABLE `userimages`
  ADD CONSTRAINT `userimages_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;