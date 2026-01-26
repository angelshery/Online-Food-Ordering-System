-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2022 at 03:59 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `Id` int(10) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`Id`, `Username`, `Password`) VALUES
(1, 'admin', 'foodizone');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `food_table`
--

CREATE TABLE `food_table` (
  `Fid` int(10) NOT NULL,
  `Fname` varchar(25) NOT NULL,
  `Price` int(10) NOT NULL,
  `Description` text NOT NULL,
  `Rid` int(10) NOT NULL,
  `Image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food_table`
--

INSERT INTO `food_table` (`Fid`, `Fname`, `Price`, `Description`, `Rid`, `Image`) VALUES
(6, 'Belgian Waffle', 180, 'Classic crispy waffle with melted Belgian dark chocolate.', 2, 0x776166666c652e6a7067),
(7, 'Cappuccino', 120, 'a coffee drink prepared with espresso, topped with hot milk or cream and foamed milk.', 2, 0x63617070756363696e6f2e6a666966),
(8, 'French Fries', 150, ' long, thin pieces of potato fried in oil and served with sauce.', 2, 0x66726965732e6a666966),
(9, 'Virgin Mojito', 150, 'refreshing drink, made of lemon juice,mint leaves,sugar, salt, ice and sprite', 2, 0x6d6f6a69746f2e6a666966),
(10, 'Chicken Pasta', 300, 'Penne pasta with lot of spices, carrots, beans, celery and chilli flakes loaded with shredded cheese and chicken.', 2, 0x636869636b656e5f70617374612e6a666966),
(11, 'Chicken Noodles', 160, 'classic Indo-chinese style noodles prepared by tossing cooked noodles with boiled chicken and veggies.', 3, 0x6e6f6f646c65732e6a7067),
(12, 'Chicken Fried rice', 200, 'a dish of boiled or steamed rice,stir-fried with soy sauce,chopped chicken and veggies.', 3, 0x667269656420726963652e6a7067),
(13, 'Pizza', 190, 'made with Italian sauce, chicken and organic vegetables.', 4, 0x6d656e752d70697a7a612e6a706567),
(15, 'Masala Dosa', 75, 'Crepe like thin dosa stuffed with mashed potato filling and served with hot sambar and coconut chutney', 4, 0x6d6173616c615f646f73612e6a666966),
(16, 'Chicken Burger', 280, 'with a minced chicken patty placed in between the burger buns with amazing sauces and lettuce.', 2, 0x6d656e752d6275726765722e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `Oid` int(10) NOT NULL,
  `Fid` int(10) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Price` int(25) NOT NULL,
  `Quantity` int(20) NOT NULL,
  `Total` int(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`Oid`, `Fid`, `Name`, `Price`, `Quantity`, `Total`, `Username`, `Date`) VALUES
(8, 15, 'Masala Dosa', 75, 1, 75, 'jaimol', '2022-02-20'),
(9, 12, 'Chicken Fried rice', 200, 2, 400, 'angel', '2022-02-20'),
(10, 7, 'Cappuccino', 120, 1, 120, 'angel', '2022-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_register`
--

CREATE TABLE `restaurant_register` (
  `Rid` int(10) NOT NULL,
  `Rname` varchar(25) NOT NULL,
  `Remail` varchar(25) NOT NULL,
  `Rcontact` int(20) NOT NULL,
  `Place` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant_register`
--

INSERT INTO `restaurant_register` (`Rid`, `Rname`, `Remail`, `Rcontact`, `Place`, `Password`) VALUES
(2, 'Tonico Cafe', 'tonicocafe@yahoo.com', 123456789, 'Kochi', 'abcd1'),
(3, 'KoCo', 'kottayamcompany@gmail.com', 2147483647, 'Kottayam', 'kott123'),
(4, 'Astoria', 'astoria_rest@gmail.com', 2147483647, 'Ettumanoor', 'astoria001');

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `Uid` int(10) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Contact` int(20) NOT NULL,
  `Place` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`Uid`, `Username`, `Email`, `Contact`, `Place`, `Password`) VALUES
(2, 'jaimol', 'jaimoljoy2001@gmail.com', 123456789, 'pala', '1234'),
(3, 'angel', 'angelshery2001@gmail.com', 2147483647, 'Kottayam', 'abcd123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Name`);

--
-- Indexes for table `food_table`
--
ALTER TABLE `food_table`
  ADD PRIMARY KEY (`Fid`),
  ADD KEY `Rid` (`Rid`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`Oid`);

--
-- Indexes for table `restaurant_register`
--
ALTER TABLE `restaurant_register`
  ADD PRIMARY KEY (`Rid`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`Uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food_table`
--
ALTER TABLE `food_table`
  MODIFY `Fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `Oid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `restaurant_register`
--
ALTER TABLE `restaurant_register`
  MODIFY `Rid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `Uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food_table`
--
ALTER TABLE `food_table`
  ADD CONSTRAINT `food_table_ibfk_1` FOREIGN KEY (`Rid`) REFERENCES `restaurant_register` (`Rid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
