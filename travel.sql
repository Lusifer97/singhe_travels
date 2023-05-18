-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2022 at 05:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `date` date NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `articals`
--

CREATE TABLE `articals` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `author` text NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL,
  `type` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Diving'),
(2, 'Camping'),
(3, 'Historical Places');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `descripton` text NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `adults` int(11) NOT NULL,
  `childs` int(11) NOT NULL,
  `prices` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `destinations`
--

CREATE TABLE `destinations` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `city` text NOT NULL,
  `district` text NOT NULL DEFAULT 'Galle',
  `distance` int(11) NOT NULL,
  `duration` text NOT NULL,
  `short_description` text NOT NULL,
  `description` text NOT NULL,
  `discount` int(11) DEFAULT 0,
  `price` int(11) NOT NULL,
  `max_people` int(11) NOT NULL DEFAULT 4,
  `categories_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinations`
--

INSERT INTO `destinations` (`id`, `name`, `city`, `district`, `distance`, `duration`, `short_description`, `description`, `discount`, `price`, `max_people`, `categories_id`, `image`, `status`, `map`) VALUES
(1, 'Discovery diving for beginners ', 'Unawatuna', 'Galle', 6, '1', 'For all wiling to dive, this is the perfect and safest opportunity. as first time in your life Unawatuna beach is good choice to have memorable experience. we are aspect to dive 10 m deep & discover ancient wrack ship. with beautiful fish and other animal will make your journey unforgettable. don\'t forget you are all ways with safe hands..', 'For all wiling to dive, this is the perfect and safest opportunity. as first time in your life Unawatuna beach is good choice to have memorable experience. we are aspect to dive 10 m deep & discover ancient wrack ship. with beautiful fish and other animal will make your journey unforgettable. don\'t forget you are all ways with safe hands..', 10, 65, 10, 1, '1.jpg', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.9027080433307!2d80.245605064192!3d6.008096080608348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae172eebc19a0dd%3A0x1bcfa16fa4ddf516!2sUnawatuna%20Beach!5e0!3m2!1sen!2slk!4v1660221445649!5m2!1sen!2slk'),
(2, 'Open Water Scuba Diving', 'Unawatuna', 'Galle', 6, '1', 'For all wiling to dive, this is the perfect and safest opportunity. Unawatuna beach is good choice to have memorable experience. we are aspect to dive 30 m deep & discover about beautiful under world. with beautiful fish and other animal will make your journey unforgettable. don\'t forget you are all ways with safe hands..', 'For all wiling to dive, this is the perfect and safest opportunity. Unawatuna beach is good choice to have memorable experience. we are aspect to dive 30 m deep & discover about beautiful under world. with beautiful fish and other animal will make your journey unforgettable. don\'t forget you are all ways with safe hands..', NULL, 200, 10, 1, '2.jpg', 0, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.9027080433307!2d80.245605064192!3d6.008096080608348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae172eebc19a0dd%3A0x1bcfa16fa4ddf516!2sUnawatuna%20Beach!5e0!3m2!1sen!2slk!4v1660221445649!5m2!1sen!2slk'),
(3, 'Advanced Water Scuba Diving', 'Unawatuna', 'Galle', 6, '1', 'For all wiling to dive, this is the perfect and safest opportunity. Unawatuna beach is good choice to have memorable experience. we are aspect to dive 65 m deep & discover about beautiful under world. with beautiful fish and other animal will make your journey unforgettable. don\'t forget you are all ways with safe hands..', 'For all wiling to dive, this is the perfect and safest opportunity. Unawatuna beach is good choice to have memorable experience. we are aspect to dive 65 m deep & discover about beautiful under world. with beautiful fish and other animal will make your journey unforgettable. don\'t forget you are all ways with safe hands..', NULL, 250, 10, 1, '3.jpg', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.9027080433307!2d80.245605064192!3d6.008096080608348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae172eebc19a0dd%3A0x1bcfa16fa4ddf516!2sUnawatuna%20Beach!5e0!3m2!1sen!2slk!4v1660221445649!5m2!1sen!2slk'),
(4, 'Test Water Scuba Diving', 'Unawatuna', 'Galle', 6, '1', 'For all wiling to dive, this is the perfect and safest opportunity. Unawatuna beach is good choice to have memorable experience. we are aspect to dive 65 m deep & discover about beautiful under world. with beautiful fish and other animal will make your journey unforgettable. don\'t forget you are all ways with safe hands..', 'For all wiling to dive, this is the perfect and safest opportunity. Unawatuna beach is good choice to have memorable experience. we are aspect to dive 65 m deep & discover about beautiful under world. with beautiful fish and other animal will make your journey unforgettable. don\'t forget you are all ways with safe hands..', NULL, 250, 10, 1, '3.jpg', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.9027080433307!2d80.245605064192!3d6.008096080608348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae172eebc19a0dd%3A0x1bcfa16fa4ddf516!2sUnawatuna%20Beach!5e0!3m2!1sen!2slk!4v1660221445649!5m2!1sen!2slk'),
(5, 'Test 02 Water Scuba Diving', 'Unawatuna', 'Galle', 6, '1', 'For all wiling to dive, this is the perfect and safest opportunity. Unawatuna beach is good choice to have memorable experience. we are aspect to dive 65 m deep & discover about beautiful under world. with beautiful fish and other animal will make your journey unforgettable. don\'t forget you are all ways with safe hands..', 'For all wiling to dive, this is the perfect and safest opportunity. Unawatuna beach is good choice to have memorable experience. we are aspect to dive 65 m deep & discover about beautiful under world. with beautiful fish and other animal will make your journey unforgettable. don\'t forget you are all ways with safe hands..', 0, 250, 10, 1, '3.jpg', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.9027080433307!2d80.245605064192!3d6.008096080608348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae172eebc19a0dd%3A0x1bcfa16fa4ddf516!2sUnawatuna%20Beach!5e0!3m2!1sen!2slk!4v1660221445649!5m2!1sen!2slk');

-- --------------------------------------------------------

--
-- Table structure for table `destinations_in_packages`
--

CREATE TABLE `destinations_in_packages` (
  `packages_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `destination_photos`
--

CREATE TABLE `destination_photos` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `destination_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destination_photos`
--

INSERT INTO `destination_photos` (`id`, `image`, `destination_id`) VALUES
(1, '1.jpg', 1),
(2, '2.jpg', 1),
(4, '4.jpg', 1),
(5, '5.jpg', 1),
(6, '6.jpg', 1),
(7, '7.jpg', 1),
(8, '8.jpg', 2),
(9, '9.jpg', 2),
(10, '10.jpg', 2),
(11, '11.jpg', 2),
(12, '12.jpg', 2),
(13, '13.jpg', 2),
(14, '14.jpg', 2),
(15, '15.jpg', 2),
(16, '16.jpg', 2),
(17, '17.jpg', 2),
(18, '18.jpg', 2),
(19, '19.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `destination_plan`
--

CREATE TABLE `destination_plan` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `title` text NOT NULL,
  `plan` text NOT NULL,
  `destination_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities`
--

INSERT INTO `facilities` (`id`, `name`, `icon`) VALUES
(1, 'WiFi', 'fa fa-wifi'),
(2, '24\" Flat TV', 'fa fa-television'),
(3, 'Sea View', 'fa fa-ship'),
(4, 'Balcony View', 'fa fa-building-o'),
(5, 'Bed', 'fa fa-bed'),
(6, 'Coffe', 'fa fa-coffee'),
(7, 'Locker', 'fa fa-get-pocket'),
(8, 'IDD Calls', 'fa fa-phone'),
(9, 'Laundry', 'fa fa-snowflake-o'),
(10, 'Sky Light', 'fa fa-sun-o'),
(11, 'Room Service', 'fa fa-user-circle'),
(12, 'Mini Bar', 'fa fa-beer');

-- --------------------------------------------------------

--
-- Table structure for table `facilities_in_destinations`
--

CREATE TABLE `facilities_in_destinations` (
  `facilities_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `facilities_in_packages`
--

CREATE TABLE `facilities_in_packages` (
  `packages_id` int(11) NOT NULL,
  `facilities_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `facilities_in_rooms`
--

CREATE TABLE `facilities_in_rooms` (
  `id` int(11) NOT NULL,
  `facility_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities_in_rooms`
--

INSERT INTO `facilities_in_rooms` (`id`, `facility_id`, `room_id`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 1),
(9, 9, 1),
(10, 11, 1),
(11, 12, 1),
(12, 10, 1),
(13, 1, 2),
(14, 2, 2),
(15, 3, 2),
(16, 4, 2),
(17, 5, 2),
(18, 7, 2),
(19, 8, 2),
(20, 9, 2),
(21, 10, 2),
(22, 11, 2),
(23, 12, 2),
(24, 1, 3),
(25, 2, 3),
(26, 3, 3),
(27, 4, 3),
(28, 5, 3),
(29, 7, 3),
(30, 8, 3),
(31, 9, 3),
(32, 10, 3),
(33, 11, 3),
(34, 12, 3),
(35, 1, 4),
(36, 2, 4),
(37, 3, 4),
(38, 4, 4),
(39, 5, 4),
(40, 7, 4),
(41, 8, 4),
(42, 9, 4),
(43, 10, 4),
(44, 11, 4),
(45, 12, 4);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `date` text NOT NULL,
  `feedback` text NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `destination_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `date`, `feedback`, `package_id`, `destination_id`, `status`) VALUES
(1, 'Deshan Bandara', 'deshan.bandara1997@gmail.com', '2022-08-01', 'Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry\'s standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero                                               ', NULL, 1, 1),
(2, 'Suneth Chanuka', 'deshan.bandara1997@gmail.com', '2022-08-01', 'Lorem Ipsum is simply dummy text of the printing andypesetting industry. Lorem ipsum a simple Lorem Ipsum has been the industry\'s standard dummy hic et quidem. Dignissimos maxime velit unde inventore quasi vero                                               ', NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `location` text NOT NULL,
  `image` text NOT NULL,
  `ratings` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `location`, `image`, `ratings`, `status`) VALUES
(1, 'Citrus', 'Waskaduwa', '1.jpg', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `inquries`
--

CREATE TABLE `inquries` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `date` date NOT NULL,
  `inqury` text NOT NULL,
  `reply` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `oders`
--

CREATE TABLE `oders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `peoples` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `c_in` date NOT NULL,
  `c_out` date NOT NULL,
  `pickup_location` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oders`
--

INSERT INTO `oders` (`id`, `user_id`, `peoples`, `d_id`, `c_in`, `c_out`, `pickup_location`, `total`, `status`) VALUES
(14, 2, 2, 1, '2022-08-26', '2022-08-28', 'Mathara', 126, 0),
(15, 2, 2, 1, '2022-08-28', '2022-08-29', 'Hambanthota', 135, 0),
(16, 2, 4, 1, '2022-08-11', '2022-08-28', 'Hambanthota', 252, 0);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `duration` text NOT NULL,
  `image` text NOT NULL,
  `price` int(11) NOT NULL,
  `status` text NOT NULL DEFAULT 'Regular',
  `discount` int(11) DEFAULT NULL,
  `map` text DEFAULT NULL,
  `categories_id` int(11) NOT NULL,
  `max_people` int(11) NOT NULL DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `description`, `duration`, `image`, `price`, `status`, `discount`, `map`, `categories_id`, `max_people`) VALUES
(1, 'Knuckles Mountain Range Exploration', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '5', '1.jpg', 250, 'Platinum', 10, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d53229.073955061!2d80.77058314770964!3d7.43481930752084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae35f659beee899%3A0x3bf7cc23068a888d!2sKnuckles!5e0!3m2!1sen!2slk!4v1660415589852!5m2!1sen!2slk', 2, 10),
(2, 'Baththalangunduwa Beach camping', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '4', '2.jpg', 250, 'Gold', 15, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17212.66733867181!2d79.76698346236724!3d8.497285214551702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afda3ffe2b6b8d1%3A0x542c3d06480bfa79!2sBaththalangunduwa%20Beach%20Camping!5e0!3m2!1sen!2slk!4v1660416227588!5m2!1sen!2slk', 2, 10),
(3, 'Anuradhapura Polonnaruwa Historical Exploration', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '6', '3.jpg', 250, 'Silver', 0, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126325.51579780296!2d80.33327247061838!3d8.335315565655495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afcf4f99360e159%3A0xc111fe9ebc6dcf0e!2sAnuradhapura!5e0!3m2!1sen!2slk!4v1660416518713!5m2!1sen!2slk', 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pickup_fee`
--

CREATE TABLE `pickup_fee` (
  `id` int(11) NOT NULL,
  `location` text NOT NULL,
  `fee` int(11) NOT NULL,
  `destinations_id` int(11) DEFAULT NULL,
  `packages_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pickup_fee`
--

INSERT INTO `pickup_fee` (`id`, `location`, `fee`, `destinations_id`, `packages_id`) VALUES
(1, 'Galle', 0, 1, NULL),
(2, 'Mathara', 10, 1, NULL),
(3, 'Hambanthota', 20, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `title` text NOT NULL,
  `plan` text NOT NULL,
  `package_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `plan_in_packages`
--

CREATE TABLE `plan_in_packages` (
  `plan_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(500) NOT NULL DEFAULT '1.jpg',
  `hotel_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `description`, `image`, `hotel_id`, `status`) VALUES
(1, 'Presidential Suite', 'As the name implies, our presidential suite is the ultimate in luxury and our Waskaduwa hotel’s most lavish room. Choose this suite for the perfect mix of luxury and residential-style features, such as a kitchenette, bar counter, dining room and lounge area, replete with all the amenities one could need for a truly pampered stay.', '1.jpg', 1, 1),
(2, 'Superior Suite', 'Our standard Citrus rooms are far from ‘basic’. The superior rooms offer a king sized bed and private balcony with an incredible sea view and many amenities to make your stay a delightful one. Each room provides stylish, contemporary accommodation with the Citrus flare, making it the ideal place for a fun vacation when looking for hotels near Kalutara beaches.', '2.jpg', 1, 1),
(3, 'Deluxe Suite', 'Experience the next level of luxury at one of the best Kalutara beach hotels with our deluxe rooms. Including all the amenities featured in our superior room, deluxe rooms also come with a Jacuzzi bathtub for a truly indulgent vacation.', '3.jpg', 1, 1),
(4, 'Executive Suite', 'The family deluxe suite is prime accommodation in our luxurious a hotel in Wadduwa, Sri Lanka, suitable for your whole family. Including a Jacuzzi bathtub, dining area, kitchenette, large private balcony and more, our family suite gives you home-like privacy when you need it.', '1.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `room_package`
--

CREATE TABLE `room_package` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `image` text NOT NULL,
  `room_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `room_package`
--

INSERT INTO `room_package` (`id`, `name`, `price`, `image`, `room_id`, `status`) VALUES
(1, 'Bed & Breakfast', 54, '1.jpg', 2, 0),
(2, 'Bed & Breakfast', 170, '1.jpg', 3, 0),
(3, 'Half board', 81, '1.jpg', 2, 0),
(4, 'Half board', 198, '1.jpg', 3, 0),
(5, 'Full Board', 109, '1.jpg', 2, 0),
(6, 'Full Board', 226, '1.jpg', 3, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `content`, `image`) VALUES
(1, 'Begin your adventure with us', 'Start your endless journey with most trusted travel agent in Sri Lanka', '1.jpg'),
(2, 'Make Your Trip Fun & Noted', 'Collect unforgettable memories that you never have any where else', '2.jpg'),
(3, 'Start Planning Your Dream Trip', 'Just plan your trip using our web site make everything easier to you ', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `c_code` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `c_code`, `status`) VALUES
(2, 'deshan', 'deshan.bandara1997@gmail.com', 'Luzifer', '4132', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articals`
--
ALTER TABLE `articals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations`
--
ALTER TABLE `destinations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinations_in_packages`
--
ALTER TABLE `destinations_in_packages`
  ADD PRIMARY KEY (`packages_id`,`destination_id`);

--
-- Indexes for table `destination_photos`
--
ALTER TABLE `destination_photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destination_plan`
--
ALTER TABLE `destination_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facilities_in_destinations`
--
ALTER TABLE `facilities_in_destinations`
  ADD PRIMARY KEY (`facilities_id`),
  ADD KEY `destination_id` (`destination_id`);

--
-- Indexes for table `facilities_in_packages`
--
ALTER TABLE `facilities_in_packages`
  ADD PRIMARY KEY (`packages_id`,`facilities_id`);

--
-- Indexes for table `facilities_in_rooms`
--
ALTER TABLE `facilities_in_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquries`
--
ALTER TABLE `inquries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oders`
--
ALTER TABLE `oders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pickup_fee`
--
ALTER TABLE `pickup_fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_in_packages`
--
ALTER TABLE `plan_in_packages`
  ADD PRIMARY KEY (`plan_id`,`package_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_package`
--
ALTER TABLE `room_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articals`
--
ALTER TABLE `articals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `destinations`
--
ALTER TABLE `destinations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `destination_photos`
--
ALTER TABLE `destination_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `destination_plan`
--
ALTER TABLE `destination_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `facilities_in_rooms`
--
ALTER TABLE `facilities_in_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquries`
--
ALTER TABLE `inquries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oders`
--
ALTER TABLE `oders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pickup_fee`
--
ALTER TABLE `pickup_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `room_package`
--
ALTER TABLE `room_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
