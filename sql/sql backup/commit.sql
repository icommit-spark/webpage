-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2018 at 04:19 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `commit`
--

-- --------------------------------------------------------

--
-- Table structure for table `pledges`
--

CREATE TABLE `pledges` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `pledge` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'False',
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `completion_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pledges`
--

INSERT INTO `pledges` (`id`, `username`, `category`, `pledge`, `status`, `creation_date`, `completion_date`) VALUES
(1, 'swarnim1994', 'Home', 'I will make sure that none of the lights are switched on when not in use.', 'True', '2018-05-15 06:22:39', '2018-05-16 15:01:30'),
(2, 'swarnim1994', 'Home', 'I won\'t waste water', 'True', '2018-05-15 06:35:21', '2018-05-24 06:09:07');

-- --------------------------------------------------------

--
-- Table structure for table `pledges_list`
--

CREATE TABLE `pledges_list` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `pledgeText` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pledges_list`
--

INSERT INTO `pledges_list` (`id`, `category`, `pledgeText`) VALUES
(1, 'politics', 'Call state senators about issues you care about.'),
(2, 'politcs', 'Participate in a protest or a rally for a cause.'),
(3, 'politics', 'Call representatives about issues you care about'),
(4, 'politics', 'Convince people to vote for an honest and a just politician/law'),
(5, 'politics', 'Distribute flyers to raise awareness about society\'s issues.'),
(6, 'politics', 'Participate in school/local elections and raise concerns.'),
(7, 'politics', 'Send a letter to a local politician and ask for tighter restrictions on carbon emissions.'),
(8, 'politics', 'Engage in friendly conversations with people who have different opinions about issues in the society.'),
(9, 'food', 'Cook more meals at home.'),
(10, 'food', 'Eat local food.'),
(11, 'food', 'Cut back on dairy consumption.'),
(12, 'food', 'Avoid styrofoam packaged food (a chemical in styrofoam causes cancer).'),
(13, 'food', 'Use reusable plates instead of plastic or paper plates.'),
(14, 'food', 'Compost food that you would otherwise throw in the trash.'),
(15, 'food', 'Minimize additives and preservatives in your food consumption.'),
(16, 'food', 'Buy from your local farmer\'s market once a week.'),
(17, 'food', 'Get organic dairy products.'),
(18, 'food', 'Grow your own vegetables.'),
(19, 'food', 'Buy locally grown produce.'),
(20, 'food', 'Eat less meat (26% of the earth is used for livestock grazing. After their grazing, the land is damaged and useless)'),
(21, 'food', 'Do not waste food.'),
(22, 'food', 'Know where the fish and meat you eat comes from.'),
(23, 'transport', 'Use public transit at least three times a week or whenever possible.'),
(24, 'transport', 'Try carpooling with people in your neighborhood.'),
(25, 'transport', 'Make videos about the importance of public transit and carpooling.'),
(26, 'transport', 'Use a bicycle and ask about bicycle racks at your destination.'),
(27, 'transport', 'Ask about installing a bike rack in your neighborhood.'),
(28, 'transport', 'Research and talk to your parents about alternative environment-friendly car options.'),
(29, 'transport', 'Convince your parents to not take unnecessary trips with their car.'),
(30, 'transport', 'Walk/bike to your destination whenever possible.'),
(31, 'shopping', 'Stay away from all Canada Goose jackets. They kill coyotes for fur.'),
(32, 'shopping', 'Support small clothing businesses whenever you can.'),
(33, 'shopping', 'Avoid polyester and nylon clothes as they are treated with toxic chemicals.'),
(34, 'shopping', 'Eco-friendly clothes are comparatively expensive, so buy second-hand at places like Goodwill.'),
(35, 'shopping', 'Buy durable clothes that will last longer.'),
(36, 'shopping', 'Set a budget for shopping of clothes.'),
(37, 'shopping', 'Instead of throwing away your old clothes, donate them to a second-hand store.'),
(38, 'shopping', 'Get to know the eco-friendly brands of clothing and try to buy your clothes from them.'),
(39, 'shopping', 'Avoid wool, fur and leather products and buy their alternatives such as cotton, linen, rubber, etc.'),
(40, 'house', 'Use paper less and recycle more.'),
(41, 'house', 'Research about the things in your trash that can be recycled and then recycle them.'),
(42, 'house', 'Take showers instead of baths (As long as your showers are ten minutes or less, they will use lesser water than baths)'),
(43, 'house', 'Turn off the tap in the sink while brushing teeth.'),
(44, 'house', 'To save water while washing your hands, turn off the tap while you are scrubbing your hands with the soap.'),
(45, 'house', 'Turn off the heating/cooling system whenever possible to cut down on energy consumption.'),
(46, 'house', 'Purchase CFL bulbs instead of regular incandescent light bulbs (CFL bulbs last more than five times longer and use much less electricity)'),
(47, 'house', 'Rent/borrow books or any other products whenever possible.'),
(48, 'house', 'Use cloth over paper for cleaning purposes.'),
(49, 'house', 'Always sell/donate the things that you no longer need.'),
(50, 'house', 'Use rain barrels to store water for watering your garden or for washing your car or for any other purposes.'),
(51, 'house', 'Reuse newspaper bags for picking up dog poop or buy other eco-friendly options.'),
(52, 'house', 'Line dry your clothes whenever possible.'),
(53, 'house', 'Use canvas bags instead of plastic when shopping for grocery.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `bio` text,
  `location` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email_address`, `bio`, `location`, `gender`, `password`, `last_login`) VALUES
(1, 'swarnim1994', 'swarnimsinha1994@gmail.com', 'testasdafafajk', 'SF', 'Male', '123456', '2018-04-07 19:26:30'),
(3, 'keval', 'kevalk@gmail.com', NULL, NULL, NULL, '123456', '2018-04-07 21:31:26'),
(4, 'testuser', 'testuser@test.com', NULL, NULL, NULL, '1234', '2018-04-28 20:54:40'),
(5, 'test', 'test@gmail.com', NULL, NULL, NULL, 'test123', '2018-04-28 21:16:14'),
(6, 'check', 'check@gmail.com', NULL, NULL, NULL, '1234', '2018-04-28 21:49:40'),
(7, 'fangshi', 'fangshi123@gmail.com', NULL, NULL, NULL, '1234', '2018-04-28 21:50:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pledges`
--
ALTER TABLE `pledges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pledges_list`
--
ALTER TABLE `pledges_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email_address` (`email_address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pledges`
--
ALTER TABLE `pledges`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pledges_list`
--
ALTER TABLE `pledges_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
