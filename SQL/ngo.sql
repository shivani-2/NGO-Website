-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jul 16, 2021 at 03:57 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_email`, `admin_pass`) VALUES
('nurturinglives@org.com', 'nurturing'),
('abc@d.com', 'abcde');

-- --------------------------------------------------------

--
-- Table structure for table `donation_amount`
--

CREATE TABLE `donation_amount` (
  `transaction_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total_amount` int(100) NOT NULL,
  `date_of_transaction` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donation_amount`
--

INSERT INTO `donation_amount` (`transaction_id`, `user_id`, `total_amount`, `date_of_transaction`) VALUES
(15, 8, 500, '2020-12-09'),
(16, 1, 1000, '2020-12-09'),
(17, 8, 1000, '2020-12-09'),
(18, 8, 100, '2020-12-09'),
(19, 8, 500, '2020-12-09'),
(20, 8, 101, '2020-12-09'),
(21, 9, 1000, '2020-12-10'),
(22, 9, 500, '2020-12-10'),
(23, 9, 5, '2020-12-10'),
(24, 1, 500, '2020-12-10'),
(26, 11, 420, '2020-12-18'),
(28, 12, 1000, '2020-12-19'),
(29, 12, 500, '2020-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `event_id` int(11) NOT NULL,
  `name_of_event` varchar(300) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `address` varchar(100) NOT NULL,
  `imageurl` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `name_of_event`, `description`, `date`, `address`, `imageurl`) VALUES
(7, 'Blood Donation Drive', 'Spare only 15 minutes and save one life.', '2021-01-21', 'Mumbai', 'https://images.unsplash.com/photo-1584452964155-ef139340f0db?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=774&q=80'),
(8, 'Book Donation', 'Donate your old books to an orphanage in your neighborhood. ', '2021-02-22', 'Sydney', 'https://images.unsplash.com/photo-1491899266767-3c25337d78b5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60'),
(10, 'Plant for the Future', 'A tree plantation event to save our nature.', '2020-12-25', 'Budapest', 'https://images.unsplash.com/photo-1566938064504-a379175168b3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60'),
(11, 'Each One Teach One', 'Teach the youth for a better future for your country.', '2021-01-05', 'Dublin', 'https://images.unsplash.com/photo-1583468982228-19f19164aee2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60\" class=\"card-img-top'),
(12, 'Beach Clean Up Drives', 'Clean the beach and help us save the oceans from plastic.', '2020-12-31', 'Venice', 'https://images.unsplash.com/photo-1566938042100-0a0d4f174269?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60'),
(13, 'Feed the Needy', 'A food donation drive to feed the ones in need.', '2021-02-14', 'Kolkata', 'https://images.unsplash.com/photo-1593113598332-cd288d649433?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60'),
(14, 'Art Exhibition', 'An art auction to support your local artists and craftsmen.', '2020-11-12', 'Mexico City', 'https://images.unsplash.com/photo-1559667327-cab91cdba6bd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60'),
(15, 'Bingo Night with Oldies', 'Spend time with senior citizens of a local old age home.', '2020-11-02', 'Vancouver', 'https://images.unsplash.com/photo-1553420865-459e30bd2477?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60'),
(16, 'Pinkathon', 'Run to spread awareness about breast cancer.', '2020-08-12', 'Greece', 'https://images.unsplash.com/photo-1552035509-b247fe8e5078?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60'),
(17, 'Medicaid for All', 'Event to raise affordable medi-care for all', '2020-09-13', 'Moscow', 'https://images.unsplash.com/photo-1505155485412-30b3a45080ec?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60'),
(18, 'Eye Checkup Clinic', 'Get your eyes checked for free by professionals.', '2020-10-21', 'Dublin', 'https://images.unsplash.com/photo-1576210117723-cd06449a467d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60'),
(19, 'Soup Kitchen', 'Serve food at the local soup kitchen to the needy.', '2020-04-26', 'Mumbai', 'https://images.unsplash.com/photo-1593113598332-cd288d649433?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60'),
(26, 'COVID Vaccine Drive', 'Free COVID vaccination for everyone above the age of 70.', '2021-09-05', 'Mumbai', 'https://images.unsplash.com/photo-1576765608866-5b51046452be?ixid=MXwxMjA3fDB8MHxzZWFyY2h8OXx8dmFjY2luZXxlbnwwfHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=600&q=60');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `dob`, `contact`) VALUES
(1, 'Shivani', 'Shenai', 'shivani@gmail.com', '$2y$10$3i43AkgXrdTJAz6nHLaHx.wBC3PWVhs9iwY8bFVdw5l/j6NPzUH1O', '2000-11-02', 2147483647),
(8, 'ab', 'cd', 'ab@cd.com', '$2y$10$LArajfsS1t8QsymenmjJUuyV4giYRYDrQTnhVM8bkOJXNHRPPhYK.', '1999-11-02', 2147483647),
(9, 'Harish', 'm', 'harish@gmail.com', '$2y$10$18MhoOuXfd2DNocPGD3Hw.bdu43O/GTAcXzr.cmqF5wm9ujByUqZW', '1997-08-12', 2147483647),
(10, 'Anmol', 'Devnani', 'anmol@gmail.com', '$2y$10$h8NzDnN9qONOW4U9vRWQfOprkp0PrFL9Gj4rxtOnlme57GdE/1/fy', '2000-12-12', 123456789),
(11, 'Maitraiyi', 'Dandekar', 'maitraiyi@gmail.com', '$2y$10$J9iG7P6cisNeJhJ5xbg44.BfB6wuS0jS40l9kBzuScJiTqVUnyoqO', '1999-09-13', 123456789),
(12, 'Shivani', 'Shenai', 'shivani.shenai@gmail.com', '$2y$10$YzIvUn27v9S1lCI2aZYPl.R.kQb0LXB1RvTBKvrknrBxHCreb/1jG', '2000-11-02', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `volunteers`
--

CREATE TABLE `volunteers` (
  `user_id` int(11) NOT NULL,
  `chapter` varchar(200) NOT NULL,
  `event_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteers`
--

INSERT INTO `volunteers` (`user_id`, `chapter`, `event_name`) VALUES
(8, 'Mumbai', 'Blood Donation Drive'),
(1, 'Barcelona', 'Each One Teach One'),
(1, 'Venice', 'Feed the Needy'),
(9, 'Barcelona', 'Beach Clean Up Drives'),
(9, 'Kolkata', 'Book Donation'),
(11, 'Greece', 'Each One Teach One'),
(11, 'Mumbai', 'Blood Donation Drive'),
(12, 'Mumbai', 'Beach Clean Up Drives'),
(12, 'Mexico City', 'Plant for the Future'),
(12, 'Venice', 'Blood Donation Drive'),
(12, 'Moscow', 'Blood Donation Drive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donation_amount`
--
ALTER TABLE `donation_amount`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `fk_user1` (`user_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `fk_chapter1` (`imageurl`(768));

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD KEY `fk_user2` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donation_amount`
--
ALTER TABLE `donation_amount`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donation_amount`
--
ALTER TABLE `donation_amount`
  ADD CONSTRAINT `fk_user1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `volunteers`
--
ALTER TABLE `volunteers`
  ADD CONSTRAINT `fk_user2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
