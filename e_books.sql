-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2019 at 07:29 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_books`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `b_id` int(10) UNSIGNED NOT NULL,
  `b_nm` varchar(500) NOT NULL DEFAULT '',
  `b_no` int(11) NOT NULL,
  `b_author` varchar(100) NOT NULL DEFAULT '',
  `b_publisher` varchar(100) DEFAULT '',
  `b_desc` varchar(1000) DEFAULT '',
  `b_price` varchar(100) NOT NULL DEFAULT '',
  `b_path` varchar(500) NOT NULL DEFAULT '',
  `category` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Having Info of books';

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`b_id`, `b_nm`, `b_no`, `b_author`, `b_publisher`, `b_desc`, `b_price`, `b_path`, `category`) VALUES
(1, 'Dune Messiah', 500, 'Frank Herbert', 'Galaxy Magazine', '0', '379', 'Dune_Messiah.jpg', NULL),
(2, 'The Dragon in the Sea', 500, 'Frank Herbert', 'Doubleday & Company', '0', '1189', 'The_Dragon_in_the_Sea.jpg', NULL),
(3, 'The Eyes of Heisenberg', 500, 'Frank Herbert', 'Berkley Books', '0', '830', 'The_Eyes_of_Heisenberg.jpg', NULL),
(4, 'Hellstrom\'s Hive', 500, 'Frank Herbert', 'Doubleday', '0', '1389', 'Hellstrom\'s_Hive.jpg', NULL),
(5, 'The Urth of the New Sun: The sequel to \'The Book of the New Sun\'', 200, 'Gene Wolfe', 'Gollancz (UK) Tor Books (US)', '0', '2799', 'The_Book_of_the_New_Sun.jpg', NULL),
(6, 'The Book of the Long Sun', 300, 'Gene Wolfe', 'Tor & Tom Doherty', '0', '1490', 'the_book_of_the_long_sun.jpg', NULL),
(7, 'The Book of the Short Sun', 450, 'Gene Wolfe', 'Tor Books', '0', '1599', 'The_Book_of_the_Short_Sun.jpg', NULL),
(8, 'The Fifth Head of Cerberus', 350, 'Gene Wolfe', 'Charles Scribner\'s Sons', '0', '977', 'The_Fifth_Head_of_Cerberus.jpg', NULL),
(9, 'Putting the Science in Fiction', 110, 'Dan Koboldt', 'F&W Publications Inc', 'This book brings together scientists, physicians, engineers, and other experts to help you:', '1109', 'Putting_the_Science_in_Fiction.jpg', NULL),
(10, 'THE WIVES OF HENRY VIII ', 201, 'ANTONIA FRASER', ' Vintage', 'The New York Times bestselling history of the legendary six wives of Henry VIII--from the acclaimed author of  Marie Antoinette.  Under Antonia Fraser\'s intent scrutiny, Catherine of Aragon emerges as a scholar-queen who steadfastly refused to grant a divorce to her royal husband; Anne Boleyn is absolved of everything but a sharp tongue and an inability to produce a male heir; and Catherine Parr is revealed as a religious reformer with the good sense to tack with the treacherous winds of the Tudor court.  And we gain fresh understanding of Jane Seymour\'s circumspect wisdom, the touching dignity of Anna of Cleves, and the youthful naivete that led to Katherine Howard\'s fatal indiscretions.  The Wives of Henry VIII interweaves passion and power, personality and politics, into a superb work of history. ', '1277', 'The_Wives_of_Henry_VIII.jpg', NULL),
(11, 'mrs. robinsonâ€™s disgrace: the private diary of a ', 500, 'kate summerscale', 'Bloomsbury USA', 'Kate Summerscale brilliantly recreates the Victorian world, chronicling in exquisite and compelling detail the life of Isabella Robinson, wherein the longings of a frustrated wife collided with a society clinging to rigid ideas about sanity, the boundaries of privacy, the institution of marriage, and female sexuality', '1638', 'The_Private_Diary_of_a_Victorian_Lady.jpg', NULL),
(19, 'Totally_Mumbai', 50, ' Pereena Lamba,Miel Sahgal', 'Blue Spectacles; First edition (2017)', 'An insider’s guide to India’s main metropolis, Mumbai. For travellers and locals of all ages, children and young adults can read this fact-filled guidebook on nature, culture, art, history, tourism and more. An educational family favourite, the book brings the city alive for parents and kids looking for things to do in Mumbai, or for teachers in schools. Discover secret Mumbai stories today!', '396', 'Totally_Mumbai.jpg', 'kids,children,childrens'),
(20, 'Diary of a Wimpy Kid - 6(Cabin Fever)', 25, 'Jeff Kinney ', 'Penguin UK; 1 edition (31 January 2013)', 'The book, \'Diary of a Wimpy Kid: Cabin Fever’ is the sixth book in the \'Diary of a Wimpy Kid\' book series. This series revolves around a kid named Greg who is writing his life experiences in a journal. It is authored by Jeff Kinney and is one of the most popular children books of all times.', '236', 'Diary of a Wimpy Kid - 6(Cabin Fever).jpg', 'kids,children,childrens'),
(21, 'Diary of a Wimpy Kid(The Ugly Truth)', 24, 'Jeff Kinney ', 'Penguin UK; 2000 edition (24 May 2012)', 'The most hotly anticipated children\'s book of the year is here - Diary of a Wimpy Kid (The Big Issue)', '210', 'Diary of a Wimpy Kid(The Ugly Truth).jpg', 'kids,children'),
(22, 'Diary of a Wimpy Kid The Last Straw', 31, 'Jeff Kinney', 'Penguin UK; Latest edition (6 October 2009)', 'The book series revolves around the kid Greg Heffley who is naughty, honest and charming in his own way.', '190', 'Diary of a Wimpy Kid The Last Straw.jpg', 'kids,children,childrens'),
(23, 'Diary of a Wimpy Kid Dog Days', 23, 'Jeff Kinney', 'Penguin UK; Latest edition (19 July 2011)', 'The book series revolves around the kid Greg Heffley who is naughty, honest and charming in his own way.', '180', 'Diary of a Wimpy Kid Dog Days.jpg', 'kids,children,childrens'),
(24, 'Diary of a Wimpy Kid Rodrick Rules', 21, 'Jeff Kinney', ' Penguin UK; Reprint edition (5 February 2009)', ' The story rotates around an 8th grader Gregory Heffley who is facing some problems which usually is not faced by a mid-school child.', '217', 'Diary of a Wimpy Kid Rodrick Rules.jpg', 'kids,children,childrens'),
(25, 'Diary of a Wimpy Kid Dog Days', 15, 'Jeff Kinney', ' Penguin UK; Reprint edition (5 February 2009)', ' The story rotates around an 8th grader Gregory Heffley who is facing some problems which usually is not faced by a mid-school child.', '180', 'Diary of a Wimpy Kid Dog Days.jpg', 'kids,children'),
(26, 'The Magic of the Lost Temple', 20, 'Sudha Murty', 'Penguin Books India; Latest edition (11 November 2015)', ' Nooni is a city girl who is very surprised at the unexpected pace of life in her grandparent’s village in the state of Karnataka.', '149', 'The Magic of the Lost Temple.jpg', 'kids,children'),
(27, 'The Ugly Duckling', 12, 'Wonder House Books', 'Wonder House Books; First edition (25 November 2018)', 'Ugly Duckling is rejected by his family. He travels far to find a new family who will accept him. Will he find his true identity?', '69', 'The Ugly Duckling.jpg', 'kids,children'),
(28, 'Moral Tales From Panchtantra Timeless Stories For Children From Ancient India', 15, ' Wonder House Books', ' Wonder House Books; First edition (2 July 2019)', 'Panchatantra has been a part of the Indian folklore for many centuries and continues to enchant young readers even today. The moral Stories from Panchatantra is a wonderful collection of six tales that aim to guide the young readers about the wise conduct of life, understanding human nature and attaining success in life. ', '199', 'Moral Tales From Panchtantra Timeless Stories For Children From Ancient India.jpg', 'kids,children');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `login_id` varchar(60) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `login_id`, `book_id`) VALUES
(77, 'mohdf078@gmail.com', 28),
(78, 'mohdf078@gmail.com', 19),
(79, 'mohdf078@gmail.com', 19),
(80, 'mohdf078@gmail.com', 20),
(81, 'mohdf078@gmail.com', 19),
(82, 'mohdf078@gmail.com', 26);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` varchar(20) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `DOB` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `password`, `fname`, `lname`, `number`, `address`, `DOB`) VALUES
('faizan@4053', 'hgkhsgkjsgh', 'faizan', 'kjfkfkasjhfk', '', NULL, NULL),
('hadkjhdkjdsd@gmail.c', 'fkdgfdkjafgfjdh', 'mohd', 'faizan', '745646546', NULL, NULL),
('mohdf078@gmail.com', '1202', 'Mohammad', 'Faizan', '2147483647', '263/H/1st Factory estate, o.c.f near veer abdul hameed chaurah', '1997-07-10'),
('mohdf456@gmail.com', '759645', 'Mohammad', 'Faizan', '4654841231', NULL, NULL),
('yashgmail.com', '4djhfjk', 'yash', 'badsiwal', '89652355', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `login_id` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `order_price` int(11) NOT NULL,
  `order_date` int(11) NOT NULL,
  `path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`login_id`, `order_id`, `order_price`, `order_date`, `path`) VALUES
('mohdf078@gmail.com', '1', 3, 45, './image/dictonary.jpg'),
('mohdf078@gmail.com', '2', 2, 3, './image/dictonary.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `returns`
--

CREATE TABLE `returns` (
  `login_id` varchar(255) NOT NULL,
  `b_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `b_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
