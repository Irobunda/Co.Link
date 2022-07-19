-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 04:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET latin1 NOT NULL,
  `email` varchar(30) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(15) CHARACTER SET latin1 NOT NULL,
  `seat` varchar(20) CHARACTER SET latin1 NOT NULL,
  `from` varchar(50) CHARACTER SET latin1 NOT NULL,
  `to` varchar(50) CHARACTER SET latin1 NOT NULL,
  `time` varchar(50) CHARACTER SET latin1 NOT NULL,
  `date` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `seat`, `from`, `to`, `time`, `date`) VALUES
(20, 'maureen', 'nci.projectemail@gmail.com', '', '5', 'Heuston Station', 'Meath ', '1pm', '04/25/2022'),
(21, 'uche', 'nci.projectemail@gmail.com', '', '1', 'Bachelors Walk ', 'Meath ', '', '04/25/2022'),
(22, 'uche', 'nci.projectemail@gmail.com', '', '1', 'Bachelors Walk ', 'Meath ', '', '04/25/2022'),
(23, 'uche', 'nci.projectemail@gmail.com', '123', '1', 'Bachelors Walk ', 'Meath ', '', '04/25/2022'),
(24, 'uche', 'nci.projectemail@gmail.com', '123', '1', 'Bachelors Walk ', 'Meath ', '', '04/25/2022'),
(25, 'etst', 'nci.projectemail@gmail.com', '123', '1', 'Connolly Station', 'Mullingar', '', '04/17/2022'),
(26, 'etst', 'nci.projectemail@gmail.com', '123', '1', 'Connolly Station', 'Mullingar', '', '04/17/2022'),
(27, 'test', 'nci.projectemail@gmail.com', '123', '123', 'Bachelors Walk ', 'kilcock', '', '04/12/2022'),
(28, 'young', 'nci.projectemail@gmail.com', '', '', 'Bachelors Walk ', 'Meath ', '5pm', ''),
(29, 'test ', 'nci.projectemail@gmail.com', '', '', 'Connolly Station', 'kilcock', '6am', '04/25/2022'),
(30, 'burna', 'nci.projectemail@gmail.com', '123', '1', 'Bachelors Walk ', 'kilcock', '', '04/25/2022'),
(31, 'uche', 'irobundauche@yahoo.com', '111', '1', 'Bachelors Walk ', 'Meath ', '', '04/25/2022'),
(32, 'kpe', 'irobundauche@gmail.com', '111', '1', 'Bachelors Walk ', 'Mullingar', '', '04/24/2022'),
(33, 'kpe', 'irobundauche@gmail.com', '111', '1', 'Bachelors Walk ', 'Mullingar', '', '04/24/2022'),
(34, 'semd', 'iskaba@g.com', '111', '1', 'Connolly Station', 'kilcock', '', '04/25/2022'),
(35, 'my way', 'way@g.com', '111', '1', 'Connolly Station', 'Meath ', '', '04/26/2022'),
(36, 'uche', 'nci.projectemail@gmail.com', '1223', '2', 'Bachelors Walk ', 'Meath ', '', '04/04/2022'),
(37, 'hat', 'nci.projectemail@gmail.com', '1111', '3', 'Bachelors Walk ', 'kilcock', '', '04/24/2022'),
(38, 'uche', 'nci.projectemail@gmail.com', '11', '1', 'Bachelors Walk ', 'kilcock', '', '04/18/2022'),
(39, 'demola', 'nci.projectemail@gmail.com', '1111', '1', 'Bachelors Walk ', 'kilcock', '', '04/10/2022'),
(40, 'uche', 'nci.projectemail@gmail.com', '11111', '1', 'Bachelors Walk ', 'Meath ', '', '04/17/2022'),
(41, 'Third', 'nci.projectemail@gmail.com', '2', '2', 'Connolly Station', 'Mullingar', '', '04/25/2022'),
(42, 'uche', 'ncippp@gan.com', '111', '1', 'Connolly Station', 'Mullingar', '', '04/24/2022'),
(43, 'uche', 'ncippp@gan.com', '111', '1', 'Connolly Station', 'Mullingar', '', '04/24/2022'),
(44, 'uche', 'ncippp@gan.com', '111', '1', 'Connolly Station', 'Mullingar', '', '04/24/2022'),
(45, 'uche', 'ncippp@gan.com', '111', '1', 'Connolly Station', 'Mullingar', '', '04/24/2022'),
(46, 'uche', 'ncippp@gan.com', '111', '1', 'Connolly Station', 'Mullingar', '', '04/24/2022'),
(47, 'uche', 'ncippp@gan.com', '111', '1', 'Connolly Station', 'Mullingar', '', '04/24/2022'),
(48, 'uche', 'ncippp@gan.com', '111', '1', 'Connolly Station', 'Mullingar', '', '04/24/2022'),
(49, 'uche', 'ncippp@gan.com', '111', '1', 'Connolly Station', 'Mullingar', '', '04/24/2022'),
(50, 'uche', 'ncippp@gan.com', '111', '1', 'Connolly Station', 'Mullingar', '', '04/24/2022'),
(51, 'bb', 'b@f.com', '1', '22', 'Heuston Station', 'Mullingar', '', '04/04/2022');

-- --------------------------------------------------------

--
-- Table structure for table `failed_logins`
--

CREATE TABLE `failed_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(16) NOT NULL,
  `ip_address` int(11) UNSIGNED NOT NULL,
  `attempted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `test_driverdb`
--

CREATE TABLE `test_driverdb` (
  `id` int(255) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `token` varchar(50) DEFAULT NULL,
  `active` bit(1) NOT NULL DEFAULT b'0',
  `address` varchar(255) NOT NULL,
  `dob` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_driverdb`
--

INSERT INTO `test_driverdb` (`id`, `name`, `username`, `email`, `password`, `token`, `active`, `address`, `dob`) VALUES
(61, 'uche', 'demo', 'uche.demo@gmail.com', '$2y$10$OmPv4t/oWk0Z4v5UMg2O8OXdCGamQtRBtrAf4iDLnP63OwTxZfZSm', '1', b'0', '123', '04/18/2022'),
(60, 'Uche Irobunda', 'uche', 'uche.irobunda@gmail.com', '$2y$10$5io5i15GlipKr8cqDqnWUekwuoe9H2z84V0gOgjC1p0SIyKwrnl5.', '1', b'0', '12 ASO', '04/05/2022'),
(72, 'owner', 'boss', 'nci.projectemail@gmail.com', '$2y$10$1nOAs1cuAlaGLlLYbnTJCuds0CHdbVoGjtJVZi/KPluu0lsiOfvVC', '3cae275cc3', b'0', '123', '04/12/2022'),
(64, 'uche', 'eminem', 'irobundauche@yahoo.com', '$2y$10$QnUEnDTosG/dk4W6KRHtO.WxEHV7RIJDh9R/HCp75KK9BQxl9RpDu', '1', b'0', 'ne', '04/10/2022'),
(65, 'cofee', 'coffee', 'cofe@gmail.com', '$2y$10$B2P25J2aZ7sK.IARcreSO.I91QT897r6MpqjKc/OA1qDsiuKP.bRi', '0', b'0', '123', '04/10/2022');

-- --------------------------------------------------------

--
-- Table structure for table `test_usersdb`
--

CREATE TABLE `test_usersdb` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `active` datetime(6) NOT NULL,
  `token` varchar(50) NOT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_logins`
--
ALTER TABLE `failed_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `attempted_idx` (`attempted`);

--
-- Indexes for table `test_driverdb`
--
ALTER TABLE `test_driverdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_usersdb`
--
ALTER TABLE `test_usersdb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `failed_logins`
--
ALTER TABLE `failed_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_driverdb`
--
ALTER TABLE `test_driverdb`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `test_usersdb`
--
ALTER TABLE `test_usersdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
