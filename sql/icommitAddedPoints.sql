-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2018 at 02:40 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `icommit`
--

-- --------------------------------------------------------

--
-- Table structure for table `pledges`
--

CREATE TABLE `pledges` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `pledgeText` text NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'False',
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `completion_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pledges`
--

INSERT INTO `pledges` (`id`, `username`, `category`, `pledgeText`, `status`, `creation_date`, `completion_date`) VALUES
(22, 'swarnim1994', 'politics', 'Convince people to vote for an honest and a just politician/law', 'True', '2018-06-03 21:12:16', '2018-06-03 21:16:41'),
(23, 'test', 'politics', 'Call state senators about issues you care about.', 'True', '2018-06-03 21:12:47', '2018-06-03 21:15:52'),
(24, 'swarnim1994', 'politics', 'Use reusable plates instead of plastic or paper plates.', 'True', '2018-06-03 21:14:40', '2018-06-19 19:33:47'),
(25, 'check', 'politics', 'Cut back on dairy consumption.', 'Incomplete', '2018-06-03 21:14:49', NULL),
(26, 'swarnim1994', 'food', 'Minimize additives and preservatives in your food consumption.', 'True', '2018-06-03 21:19:31', '2018-06-03 21:19:41'),
(27, 'swarnim1994', 'transport', 'Convince your parents to not take unnecessary trips with their car.', 'True', '2018-06-03 21:23:42', '2018-06-19 19:39:11'),
(28, 'check', 'shopping', 'Support small clothing businesses whenever you can.', 'Incomplete', '2018-06-03 21:24:56', NULL),
(29, 'testuser', 'politics', 'Line dry your clothes whenever possible.', 'Incomplete', '2018-06-03 21:26:01', NULL),
(30, 'testuser', 'food', 'Compost food that you would otherwise throw in the trash.', 'Incomplete', '2018-06-03 22:06:05', NULL),
(31, 'swarnim1994', 'shopping', 'Stay away from all Canada Goose jackets. They kill coyotes for fur.', 'Incomplete', '2018-06-19 19:33:36', NULL),
(32, 'swarnim1994', 'food', 'Avoid styrofoam packaged food (a chemical in styrofoam causes cancer).', 'Incomplete', '2018-06-19 19:38:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pledges_list`
--

CREATE TABLE `pledges_list` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `pledgeText` text NOT NULL,
  `blurb` text,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pledges_list`
--

INSERT INTO `pledges_list` (`id`, `category`, `pledgeText`, `blurb`, `points`) VALUES
(1, 'politics', 'Call state senators about issues you care about.', NULL, 80),
(2, 'politcs', 'Participate in a protest or a rally for a cause.', NULL, 0),
(3, 'politics', 'Call representatives about issues you care about', NULL, 80),
(4, 'politics', 'Convince people to vote for a certain law/person', NULL, 70),
(5, 'politics', 'Make flyers to raise awareness about global warming (or other causes)', NULL, 55),
(6, 'politics', 'Get on email lists for unbiased newspapers to stay informed. The Washington Post and the Wall Street Journal are usually good at being neutral', NULL, 30),
(7, 'politics', 'Before voting for candidates (in any election.) make sure that they are environmentally friendly', NULL, 30),
(8, 'politics', 'Send a letter to a local politician and ask for tighter regulations on carbon emissions.', NULL, 45),
(9, 'food', 'Cook 1 meal per week at home.', 'http://www.slate.com/articles/health_and_science/the_green_lantern/2008/11/an_order_of_lo_mein_with_a_side_of_guilt.html', 30),
(10, 'food', 'Cook one local week at home.', 'Challenge yourself to cook one meal a week (or month) that is composed completely of local ingredients.', 50),
(11, 'food', 'Buy soy, lactose free or almond milk instead of dairy for a month', 'https://www.whitelies.org.uk/health-nutrition/dairy-vs-plant-based-alternatives', 70),
(12, 'food', 'Buy in bulk', 'While it may seem easier to get individually wrapped snacks and beverages, that convenience is adding to the over 60 million tons of paper, plastic, and glass packaging thrown away in the U.S. every year. So instead look for products with the smallest amount of packaging. Items like pasta, soap, chips, and juice can be bought in bulk then repackage at home in reusable containers you can throw in the cupboard, a lunch bag, or the freezer.', 100),
(13, 'food', ' Avoid all pre-washed items.', 'Many people like the convenience of pre-washed items like lettuce or salad mixes. While these items can be fairly convenient, they also cost a little bit more and can hurt the environment. Instead of buying produce that is packaged in plastic, just buy regular produce and wash it at home.', 50),
(14, 'food', 'Eat vegetarian for a month.', 'https://www.scientificamerican.com/article/meat-and-environment/', 250),
(16, 'food', 'Shop at your local farmer\'s market once a week.', 'https://www.huffingtonpost.com/kimberly-snyder/farmers-market_b_1118572.html', 75),
(17, 'food', 'Buy organic dairy products for a month', NULL, 75),
(23, 'transport', 'Take public transit instead of driving once a week', NULL, 35),
(24, 'transport', 'Carpool once a week to school or afterschool activity.', NULL, 25),
(25, 'transport', 'Make a youtube video about the efficiency of carpooling and public transit.', NULL, 100),
(26, 'transport', 'Ride your bike to school once per week.', NULL, 30),
(27, 'transport', 'Ask your school (or other place you go regularly) to add bike racks or increase the number of bike racks.', NULL, 75),
(28, 'transport', 'Research hybrid cars and electric cars, and present your research to your parents.', NULL, 50),
(29, 'transport', 'Convince your family to take a local vacation rather than flying or driving long distance.', NULL, 125),
(30, 'transport', 'Walk/bike to your destination five times a week.', NULL, 80),
(31, 'shopping', 'Stay away from all Canada Goose jackets. They kill coyotes for fur.', 'https://www.peta.org/features/coyotes-killed-for-canada-goose/', 60),
(32, 'shopping', 'Support small clothing businesses whenever you can.Figure out how much different solar or things help the environment compared to what you have and see what changes you can make.', NULL, 40),
(33, 'shopping', 'Avoid polyester and nylon clothes as they are treated with toxic chemicals.', 'https://bodyecology.com/articles/top_6_fabrics_you_should_avoid_wearing.php', 50),
(34, 'shopping', 'Buy durable products that will last.', NULL, 50),
(35, 'shopping', 'Set a budget for weekly shopping', NULL, 75),
(36, 'shopping', 'Buy from reputably ethical companies that treat workers with respect.', NULL, 70),
(37, 'shopping', 'Convince your parents to use their car as much as possible before the buy a new one', NULL, 30),
(38, 'shopping', 'When you need to replace your car, buy used, or purchase a new fuel-efficient/electric option', NULL, 110),
(39, 'shopping', 'Plan a date once a month to donate your old clothes to a second-hand store or save them for future generations', NULL, 70),
(40, 'house', 'Recycle.', NULL, 50),
(41, 'house', 'Figure out what you are allowed to recycle and then recycle it. EPA estimates show that we could be recycling 75% of the waste stream could be recycled, but we only recycle about 30% of it.', ' https://www.dosomething.org/us/facts/11-facts-about-recycling', 50),
(42, 'house', 'Take short showers instead of baths.', '', 75),
(43, 'house', 'Turn off the tap in the sink while brushing teeth.', NULL, 25),
(44, 'house', 'Minimize heat and cooling system usage: turn your heat or cooling system off or low while you are gone.', NULL, 45),
(45, 'house', 'Rent books from the library and sell/give away books you don’t want.', NULL, 125),
(46, 'house', 'Turn off lights when you are done with them.', NULL, 25),
(47, 'house', 'Buy three LED lights.', NULL, 125),
(48, 'house', 'Put down rain barrels to store water for watering your garden, or for washing your car. There are other uses for rain barrels too.', NULL, 50),
(49, 'house', 'Wash your clothes in cold water, because it uses energy to heat up hot water.', NULL, 50),
(50, 'house', 'Reuse newspaper bags for picking up dog poop or buy eco friendly options.', NULL, 35),
(51, 'house', 'Upgrade to a eco friendly toilet or fill a plastic water bottle and place it in the tank of your current toilet', NULL, 100),
(52, 'house', 'Use reusable plates, napkins and utensils', NULL, 35),
(53, 'house', 'Line dry your clothes', NULL, 50),
(54, 'food', 'Cook 3 meal per week at home.', 'http://www.slate.com/articles/health_and_science/the_green_lantern/2008/11/an_order_of_lo_mein_with_a_side_of_guilt.html', 50),
(55, 'food', 'Cook 6 meals per week at home.', 'http://www.slate.com/articles/health_and_science/the_green_lantern/2008/11/an_order_of_lo_mein_with_a_side_of_guilt.html', 100),
(56, 'food', 'Drink tap water at restaurants', NULL, 20),
(57, 'food', 'Join a CSA', NULL, 65),
(58, 'food', 'Start a mini garden in your backyard or windowsill.', NULL, 75),
(59, 'food', 'Eat more produce than any other food.', 'https://www.scientificamerican.com/article/meat-and-environment/', 40),
(60, 'food', 'Eat only 5 meat meals per week.', 'https://www.scientificamerican.com/article/meat-and-environment/', 75),
(61, 'food', 'Eat only 3 meat meals per week.', 'https://www.scientificamerican.com/article/meat-and-environment/', 100),
(62, 'food', 'Buy local meat once a week.', 'https://www.scientificamerican.com/article/meat-and-environment/', 150),
(63, 'food', 'Plan five meals a week so you don’t over shop.', 'Studies estimate that Americans throw away between 25% and 40% of the groceries they purchase. This is not only a waste of food but also represents a waste of other resources like energy and water. Cut down on the amount of food you discard by planning your shopping trips in advance to avoid buying more than you need.', 125),
(64, 'food', 'Eat one leftover meal per week (70 points).', NULL, 70),
(65, 'food', 'Look for the label. ', 'Figure out how to buy sustainable seafood. “Wild caught” doesn’t always mean it’s               environmentally friendly, after all, even though some farmed fish are. Look for the label of the Marine Stewardship Council, which makes sure that a product has met requirements for sustainability.', 25),
(66, 'transport', 'Take public transit instead of driving three times per week.', NULL, 65),
(67, 'transport', 'Take public transit instead of driving five times per week.', NULL, 100),
(68, 'transport', 'Carpool two times a week to school or afterschool activity.', NULL, 50),
(69, 'transport', 'Carpool five times a week to school or afterschool activity.', NULL, 75),
(70, 'transport', 'Ride your bike to school 3 days per week.', NULL, 60),
(71, 'transport', 'Ride your bike to school five times a week.', NULL, 90),
(72, 'transport', 'Start a club in your school to encourage more kids to walk and ride their bikes to school.', NULL, 125),
(73, 'transport', 'Meet with a city counselor or other official from your town to ask about more sustainable transportation options in your city.', NULL, 150),
(74, 'transport', 'Install a stationary bike in your house that is connected to a fuel cell.', NULL, 300),
(75, 'transport', 'Plan a day of running errands for your family that minimizes the number of miles you need to drive.', NULL, 40),
(76, 'transport', 'Find a way to take public transportation on vacations.', NULL, 70),
(77, 'transport', 'Advocate for bike lanes in your city.', NULL, 75),
(78, 'transport', 'Go hiking and biking once a month to improve your fitness so you don’t need to drive so often.', NULL, 60),
(79, 'transport', 'Join an environmental club in your town.', NULL, 150),
(80, 'transport', 'Spend 30 minutes reading about alternative transportation problems.', NULL, 70),
(81, 'transport', 'Convince your family to walk/bike to their destination 5 times a week.', NULL, 75),
(82, 'politics', 'Go to a protest or a rally!', NULL, 65),
(83, 'politics', 'Start your own rally!', NULL, 500),
(84, 'politics', 'Search many news sites for info, not just one.', NULL, 30),
(85, 'transport', 'Write in your school newspaper about environmental issues and how to conserve resources.', NULL, 40),
(86, 'politics', 'Go door to door supporting politicians in elections.', NULL, 70),
(87, 'politics', 'Join a political campaign (If you’re old enough.)', NULL, 100),
(88, 'politics', 'Run for school elections and make environmentally friendly decisions.', NULL, 50),
(89, 'politics', 'Donate to environmentally friendly political candidates.', NULL, 30),
(90, 'politics', 'Engage in a friendly conversation with a person who disagrees with you politically.', NULL, 30),
(91, 'transport', 'Hang up environmentally friendly posters.', NULL, 50),
(92, 'transport', 'Check the news at least one a day.', NULL, 15),
(93, 'politics', 'Be sure to spend time in nature to remember what you’re fighting for.', NULL, 20),
(94, 'politics', 'Go to local town hall meetings.', NULL, 35),
(95, 'politics', 'Get off the internet and actually go do something instead of just browsing online.', NULL, 20),
(96, 'politics', 'Do a survey and share the results with friends and family. ', NULL, 45),
(97, 'politics', 'Write letters to big corporations urging for more environmentally friendly products/ production.', NULL, 35),
(98, 'politics', 'Ask your parents to vote for certain candidates.', NULL, 20),
(99, 'politics', 'Join a voting league (if you’re old enough).', NULL, 75),
(100, 'politics', 'Talk to your teachers and ask them to teach about environmental subjects.', NULL, 50),
(101, 'politics', 'Send thank you letters if any of your requests to senators, reps or companies get implemented.', NULL, 100),
(102, 'politics', 'Ask your parents to do all this as well.', NULL, 75),
(103, 'shopping', 'Go faux for a month.', NULL, 60),
(104, 'shopping', 'Convince your parents to buy a battery powered Lawn mower.', NULL, 150),
(105, 'shopping', 'Shop organically at supermarkets (or convince your parents to do so).', NULL, 125),
(106, 'shopping', 'Buy reusable water bottles instead of disposable plastic water bottles.', NULL, 80),
(107, 'shopping', 'Buy reusable straws.', NULL, 90),
(108, 'shopping', 'Don’t buy plastic items for a week.', NULL, 50),
(109, 'shopping', 'Don’t buy plastic water bottles for a month.', NULL, 100),
(110, 'shopping', 'Use eco-friendly cleaning products on your furniture, dishes, and clothes.', NULL, 150),
(111, 'shopping', 'Shop at Costco because Costco puts most of its products in bulk.', NULL, 75),
(112, 'shopping', 'Don\'t eat at Mcdonalds, they abuse their animals.', NULL, 100),
(113, 'shopping', 'Don’t buy fur coats, leather shoes, or other clothes made by killing animals.', NULL, 250),
(114, 'house', 'Use a compost barrel for uneaten compostable foods.', NULL, 60),
(115, 'house', 'Don’t use Styrofoam for a month.', NULL, 30),
(116, 'house', 'Use reusable water bottles for a month.', NULL, 30);

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
(3, 'keval', 'kevalk@gmail.com', NULL, NULL, NULL, '123456', '2018-04-07 21:31:26'),
(4, 'testuser', 'testuser@test.com', NULL, NULL, NULL, '1234', '2018-04-28 20:54:40'),
(6, 'check', 'check@gmail.com', NULL, 'Boston', NULL, '1234', '2018-04-28 21:49:40'),
(7, 'fangshi', 'fangshi123@gmail.com', NULL, NULL, NULL, '1234', '2018-04-28 21:50:45'),
(10, 'test', 'test@test.com', NULL, NULL, NULL, '$2y$10$5P4V.q5j0SQgA8lnHzzPXe.rjCsqefQ3O21Kpet2HB157l9iYosFq', '2018-07-14 22:44:17'),
(11, 'swarnim1994', 'swarnimsinha1994@gmail.com', NULL, NULL, NULL, '$2y$10$czvJAVqYE/yyl1jaIBkfA.mvt2TXWSjTT0BHiWha3bcBy9oZ2IETu', '2018-07-14 22:52:08');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `pledges_list`
--
ALTER TABLE `pledges_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
