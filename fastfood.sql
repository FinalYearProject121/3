-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 10:09 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fastfood`
--

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `cart_id` int(11) NOT NULL,
  `cart_quantity` int(11) NOT NULL,
  `cart_status` varchar(100) NOT NULL,
  `cust_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `order_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addtocart`
--

INSERT INTO `addtocart` (`cart_id`, `cart_quantity`, `cart_status`, `cust_id`, `food_id`, `order_id`) VALUES
(2, 1, 'yes', 2, 7, NULL),
(3, 1, 'yes', 2, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `cust_username` varchar(50) NOT NULL,
  `cust_phone` varchar(50) NOT NULL,
  `cust_email` varchar(100) NOT NULL,
  `cust_address` varchar(150) NOT NULL,
  `cust_password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_username`, `cust_phone`, `cust_email`, `cust_address`, `cust_password`) VALUES
(1, 'ZunairahAfandi', '0145376579', 'nurzunairahmohdafandi@gmail.com', 'Pasir Tumboh, 16150 Kota Bharu, kelantan', 'Zunairah98'),
(2, 'Zulkifle', '01126652121', 'kilifendy@gmail.com', 'Kota bharu, Kelantan', 'zul12345');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(11) NOT NULL,
  `food_name` varchar(50) NOT NULL,
  `food_price` varchar(50) NOT NULL,
  `food_image` varchar(100) NOT NULL,
  `food_description` varchar(150) NOT NULL,
  `food_status` varchar(50) NOT NULL,
  `food_discount` int(11) NOT NULL,
  `food_cals` varchar(20) DEFAULT NULL,
  `food_type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `food_name`, `food_price`, `food_image`, `food_description`, `food_status`, `food_discount`, `food_cals`, `food_type`) VALUES
(1, 'Meat Mania', 'RM20.00', 'images/menu-1.jpg', 'Meat Lovers, Get Ready To Meet Your Match! Loaded With Beef Pepperoni, Beef Sausages, Ground Beef, Chicken Potpourri Sausages And Ripe Olives.', 'yes', 0, '550 Cals', 'special'),
(2, 'Famous Star With Cheese', 'RM10.00', 'images/menu-2.jpg', 'Charbroiled All-Beef Patty, Melted American Cheese, Lettuce, Tomato, Sliced Onions, Dill Pickles, Special Sauce, And Mayonnaise On A Seeded Bun.', 'yes', 0, '670 Cals', 'special'),
(3, 'Dipndip Crepe', 'RM14.00', 'images/menu-3.jpg', 'Crepe, Served With A Selection Of Fresh Seasonal Fruits, Vanilla Bean Whipped Cream And Your Choice Of Chocolate Topping', 'yes', 0, '49 Cals', 'special'),
(4, 'Crunchy Speculoos Waffle', 'RM8.00', 'images/menu-4.jpg', 'Waffle, With Speculoos Spread And White Chocolate, Topped With Caramelized Biscuit Crunch, Served With Your Choice Of Ice Cream', 'yes', 0, '120 Cals', 'special'),
(5, 'Exotic Fruit Cake', 'RM15.00', 'images/menu-5.jpg', 'Light Vanilla Chiffon Adorned With Fresh Cream, Topped And Layered With Refreshing Fruits.', 'yes', 0, '200 Cals', 'special'),
(6, 'Cheesy Red Velvet', 'RM5.00', 'images/menu-6.jpg', 'Red Velvet Cake Filled With Cheese Topped With Blue Colour Of Cheese Cream Frosting.', 'yes', 0, '49 Cals', 'special'),
(7, 'Butterfly Pea Sweet Tea', 'RM5.00', 'images/menu-7.jpg', 'Our Butterfly Pea Cold Brew Tea Gets A Dash Of Lemony Syrup. Beautifully Refreshing.', 'yes', 0, '10 Cals', 'special'),
(8, 'Healthy Yogurt Bowl', 'RM10.00', 'images/menu-8.jpg', 'Greek Yogurt With Strawberry, Blueberry, Cornflakes And Honey.', 'yes', 0, '45 Cals', 'special'),
(9, 'Lemonade Cold Brew Tea', 'RM3.00', 'images/menu-9.jpg', 'Our Butterfly Pea Cold Brew Tea Gets A Dash Of Lemony Syrup. Beautifully Refreshing.', 'yes', 0, '10 Cals', 'special'),
(11, 'Famous Star With Cheese', 'RM10.00', 'images/dish-1.png', 'lalalalalalalalalala1', 'yes', 0, '550 Cals', 'main'),
(12, 'Spicy noodles', 'RM8.00', 'images/home-img-1.png', 'lalalalalalalalalala2', 'no', 0, '120 Cals', 'main'),
(13, 'Garlic herb butter Fried chicken', 'RM25.00', 'images/dish-3.png', 'lalalalalalalalalala3', 'yes', 0, '200 Cals', 'main'),
(14, 'Meat Mania', 'RM20.00', 'images/dish-4.png', 'lalalalalalalalalala4', 'yes', 0, '49 Cals', 'main'),
(15, 'Crunchy Speculoos Waffle', 'RM8.00', 'images/dish-5.png', 'lalalalalalalalalala5', 'yes', 0, '670 Cals', 'main'),
(16, 'Seasoning Fried Chicken', 'RM14.00', 'images/dish-6.png', 'lalalalalalalalalala6', 'yes', 0, '49 Cals', 'main');

-- --------------------------------------------------------

--
-- Table structure for table `ord`
--

CREATE TABLE `ord` (
  `ord_id` int(11) NOT NULL,
  `ord_total` double NOT NULL,
  `ord_status` varchar(100) NOT NULL,
  `ord_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rate_id` int(11) NOT NULL,
  `rate_star` varchar(50) NOT NULL,
  `rate_feedback` text NOT NULL,
  `ord_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `staff_name` varchar(50) NOT NULL,
  `staff_phone` varchar(50) NOT NULL,
  `staff_email` varchar(100) NOT NULL,
  `staff_address` varchar(150) NOT NULL,
  `staff_password` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `wish_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`wish_id`, `food_id`, `cust_id`) VALUES
(1, 11, 1),
(2, 5, 1),
(3, 15, 1),
(4, 4, 1),
(6, 8, 1),
(7, 15, 2),
(9, 6, 2),
(10, 14, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`);

--
-- Indexes for table `ord`
--
ALTER TABLE `ord`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wish_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ord`
--
ALTER TABLE `ord`
  MODIFY `ord_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
