-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2025 at 05:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ac`
--

CREATE TABLE `ac` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ac`
--

INSERT INTO `ac` (`id`, `name`, `price`, `image`) VALUES
('QZT3xNdvYjtG9WfTu1GC', 'Hitachi 1.5 Ton ice Clean Xpandable Plus AC', '44790', 'Uqf7wbuZ6plslOOe9ZlD.jpg'),
('ieclzuClzuzprnpfCIUV', 'Whirlpool 3D Cool Xtreme HD Split AC(1.5 Ton)', '44990', 'RUjkGhHlqzlUcdJrFJUq.avif'),
('kxq1oRXkWaaq5zh5uP7X', 'LLOYD Stellar 6 in 1 Convertible 1.5 Ton 5 Star AC', '59990', 'cMlK40UAsVLZCnFGi0zr.webp'),
('pHmVBnvDfSvcf6mCcqrQ', 'Mitsubishi 1.5 Ton, Inverter Type Split AC MSY-GN ', '55660', 'yOLz8dYjkqFVbX1Qsp6r.webp'),
('MyrkxoKwXGb68McfCL35', 'Voltas 1.5 Ton 5 Star (2017) Split AC(185 EYR red)', '40000', 'IMcAz1BrOIbBTzJbruTo.jpg'),
('jnZrSBwpJUCvgGWo5lJL', 'BLUE STAR HEAVY DUTY INVERTER AC D SERIES 1.5 TON ', '52990', 'VhdWhm0gRrRu4xRrBWQX.webp'),
('0dgoFGqFskweP9LtERPr', 'LG 5 Star (1.5), Split AC, Art Cool , 2024 Model', '45000', 'YHBz4amj7nW30io8koA9.avif'),
('lj1jNQj5Pxt4OebrxoAo', 'Onida MAJESTIC 1.5 Ton 3 Star Inverter AC', '32899', 'r4Bnhd362HGbeFjMjJFn.webp'),
('U2EHmJCh3a5rrS0psNhW', 'Samsung AR18FC3EAPW Split AC (1.5 Ton 3 Star)', '40000', 'qfwaWm3KgM2ITbYBDf14.jpg'),
('oursY3iN3eEExY6ZM3GP', 'Panasonic 1.5 Ton  Wi-Fi Inverter Smart Split AC', '44890', 'HNnDZ0RcC3xIDqcUKxky.jpg'),
('EbrVss4g6VMpWKr4JovC', 'Godrej 1 Ton 5 Star Split AC(Copper GSC 12 FG red)', '50000', 'sKHmsEYN5zyiA8WmdKS6.jpg'),
('ZwBPfh4S2VecoaPPCM5n', '220-440 V 50-60 Hz Lloyd Split Air Conditioner', '30000', '8bYNTGWHU80QjYu4olsl.webp');

-- --------------------------------------------------------

--
-- Table structure for table `burds`
--

CREATE TABLE `burds` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `burds`
--

INSERT INTO `burds` (`id`, `name`, `price`, `image`) VALUES
('DXp8xjU2eHzncNkzBGrL', 'boAt Immortal Airspeed Pro', '2000', '0uv1CyIagcqTkMoHd9st.webp'),
('sAFJwvBMG4HLKoUfdlZR', 'boAt Immortal 171', '3000', 'XdMvQwlRkCp99LqmVqUK.webp'),
('X2pYquVrUoOr0DMGchsS', 'boAt Immortal Katana Blade 2.0', '4000', '6gGabeypjSRfGhNkZloc.webp'),
('CJlbm2KEGe6Jp4KYvWQn', 'Apple Airpods 4', '25000', 'dJHjUZOkzKNc4a34jsSR.jpeg'),
('YiGvqx3tHL7bEvGaNXeK', 'Apple Airpods 2nd Gen', '15000', 'ZjrxukbLSWmILuUdHNSD.avif'),
('r3rIpey5nPqRp0FgoOwE', 'Noise Combat X Ear Truly Wireless Gaming Earbuds', '3000', '6zsMlJ7YkbQ9zgFGhaap.jpg'),
('018EXH8bgX8mbjv5D3W7', 'OnePlus Buds 3 TWS in Ear Earbuds (Splendid Blue)', '8000', '894Ufw1c6g2xqczRPCOH.jpg'),
('1IMPDXJEhwk1A2ajojjr', 'REDMI Buds 6 Pro “Trendy Edition”', '9000', 'mpQX5MSph9HfwoMHsjgq.jpg'),
('bEJm292qEos7U8OGxttu', 'Xiaomi Buds 4 Pro Moon Star Gold', '14000', '2noxlvbvskdHviQoXvc4.jpg'),
('Uycy9roSjKuEcCfjsp6N', 'realme Buds Air 5 Pro ', '5000', 'SlHGG5pNCivRrjNa491p.jpg'),
('wrQS3Vi8CxTIIbYfReww', 'Galaxy Buds Live Mystic Red True Wireless Earbuds', '15990', 'RqJDowhgMEK9JP8rf9Nz.jpg'),
('soT6myedCZjI9MNGG521', 'Mivi Commando X9 TWS Ear Gaming Earbuds', '5000', 'bdrWzPi97n1GcnT5XfQn.webp');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `price`, `qty`) VALUES
('fXtZnwyNst7KogDcLEOi', 'glpXmik9R4bNHMhtzKbR', 'BhNPrcvq3Iw02JrP3tN2', '170000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `cart_ac`
--

CREATE TABLE `cart_ac` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_burds`
--

CREATE TABLE `cart_burds` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_cm`
--

CREATE TABLE `cart_cm` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_laptop`
--

CREATE TABLE `cart_laptop` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_rf`
--

CREATE TABLE `cart_rf` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_tab`
--

CREATE TABLE `cart_tab` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_tab`
--

INSERT INTO `cart_tab` (`id`, `user_id`, `product_id`, `price`, `qty`) VALUES
('U8QZhajbh2sDM533kecs', 'kjF9pAmew1UkbLIKlYJT', 'T2XC9h8dwxnuUEy2sYWl', '39484', '2');

-- --------------------------------------------------------

--
-- Table structure for table `cart_tv`
--

CREATE TABLE `cart_tv` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_watch`
--

CREATE TABLE `cart_watch` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_wm`
--

CREATE TABLE `cart_wm` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cm`
--

CREATE TABLE `cm` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cm`
--

INSERT INTO `cm` (`id`, `name`, `price`, `image`) VALUES
('in6Asxm6LkbMBVYWMDYX', 'Canon EOS R7 32.5MP Mirrorless Camera', '155999', 'FT5OpOzcIhRXBT4hVs5g.webp'),
('pewxZGi4RpEadBS9gGAq', 'Nikon COOLPIX P1000 Digital Camera', '106000', 'lMrHsgEzTTD3yRx5zSNN.jpg'),
('QDrZBdIOcGB0jgC6yIqE', 'Sony Alpha ILCE 6000Y 24.3MP Mirrorless SLR Camera', '53990', 'kNyPxPiSJPRfu8rwZfdC.webp'),
('sbPATYT4QwJIxJddxC68', 'FUJIFILM X-T5 Mirrorless Camera Lens', '179900', '5DifGx3iGvVFICPJGJOe.webp'),
('XVBjVvLrQQuKXvPzY711', 'Panasonic Lumix DC-ZS200 4K Wi-Fi Digital Camera', '84146', 'H3381vRWG5nSsbDbLhdk.avif'),
('ziAjjgPrTEd0Vp7aLOUI', 'Olympus OM-D E-M10 Mark IV Mirrorless Digital Came', '87999', 'CzZ9JNX7qcW8j8znGJdU.webp'),
('Sg7KrTjcsFFkMSEV6OCC', 'Leica C-Lux Midnight Blue Digital Camera', '320000', 'VpjEPFPTPx9QpkhyKHfN.jpg'),
('Plckqz01L2wdAjZUlE6D', 'Hasselblad 503CW Gold Supreme Kit - Camera', '451523', 'QuU3Mxlkq6Al8PS6Z0An.webp'),
('MSa6pZpm4S8VlMV1FYeF', 'Phase One XF 100MP Medium Format Camera', '48990', 'ZuSo282qZ1RYPurOmBxR.jpg'),
('OPdlYBArUYZbETbirAc2', 'PENTAX K-1 Mark II - DSLR Camera Refurbished', '302887', 'u1KxmLX1AgA4KJLKjFTC.webp'),
('L7XPEnXxnxk8NHfkhwEI', ' Qty: 1 +- Pre-order Add to wishlist Add to compar', '267740', 'g73J5Aea25OV83g4yRvM.png'),
('JIwxumHExWHcTkDO0xlT', 'Sinar p3-df View Camera', '634039', 'SVVLpcnxfXvf4YioD0Oi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id`, `name`, `price`, `image`) VALUES
('qXSoQcp7fZpcJe5IpThB', 'ASUS ROG Zephyrus Gaming Laptop', '100000', 'AlBn8qAbADJzlZRPohkR.jpg'),
('6rIVyhE8UwbhuB8dYRzZ', 'HP Pavilion Gaming 11th Gen Laptop', '70000', 'S4QNsbLLcVoSa9bAFjbo.jpg'),
('8mKZnEAz8mGHzKvYalQk', 'HP Victus Gaming Laptop AMD Ryzen™ 7 7840HS', '80000', 'R0UtJPRwRnn8OCdwwpJr.jpg'),
('skW645Q8fSMZaOoVcpGe', 'Dell G16 Gaming Laptop', '70000', 'ipouSzalI01fv6gNKbf1.avif'),
('BuNGWaMFkeTpm2eoE9v8', 'Apple MacBook Pro M4 ', '120000', '5Q6b9sKzOUISCWBmkhNd.jpeg'),
('JPujX54vdyzQv6su8drv', 'Micromax Neo Pentium 6th Gen 14-inch Laptop', '50000', 'IjvZS8qdv7wuNmFsK23X.jpg'),
('YVHsuQ4HMfunHwYEvlYx', 'Samsung Unveils New High-End Gaming Laptop', '70000', 'yXsI0DP5HHaPLDW2oUwn.jpg'),
('OZcE0vzeTnTA9IbR1AEt', 'Microsoft Surface Laptop', '80000', 'kghi6wVaCYCty1uzJW4r.avif'),
('sKBd6rUMqTUSk6vNfwLI', 'Lenovo Legion 5 Pro Laptop', '90000', 'jebV43vxsNysVZJEZjGE.avif'),
('aJpiaAzICRnWxOis7JVw', 'Acer Nitro 5 gaming laptop', '80000', 'pJRdxzBiz01CeGdFAtiQ.png'),
('zq1LWniMcoC7UUXCa5dT', 'MSI Pulse 15 15.6&#34; FHD 144Hz Gaming Laptop', '100000', '58GhpwKyJkyd4elJDj5z.jpg'),
('77nNjSTriPupU8aI0rfE', 'LG unveils UltraGear 17G90Q Gaming Laptop', '60000', 'zsmDNF9MopNXPO6ffhM3.webp');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address_type` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'in progess'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `number`, `email`, `address`, `address_type`, `method`, `product_id`, `price`, `qty`, `date`, `status`) VALUES
('lNp0wodDXhw5rpz7NbGS', '8swlFAqDsakTTL0lLfax', 'dipsun patel', '7862041942', 'dipsunp@gmail.com', '16 krishna residency, kamrej, surat, india - 123456', 'home', 'cash on delivery', 'fsjNWbe515ky1Ia0vOW3', '170000', '1', '2025-05-08', 'in progess'),
('15WmFho9PtOShaJcmxfr', '8swlFAqDsakTTL0lLfax', 'dipsun patel', '7862041942', 'dipsunpatel1845@gmail.com', '16 krishna residency, surat, surat, india - 123456', 'home', 'Razorpay', 'fsjNWbe515ky1Ia0vOW3', '170000', '1', '2025-05-08', 'in progess'),
('CgWuvxJHupLooL893wnH', '8swlFAqDsakTTL0lLfax', 'dipsun patel', '7862041942', 'dipsunpatel1845@gmail.com', '16 krishna residency, surat, surat, india - 123456', 'home', 'Razorpay', 'GsHGEnxYwjKlHw08U9zM', '100000', '1', '2025-05-08', 'in progess');

-- --------------------------------------------------------

--
-- Table structure for table `orders_ac`
--

CREATE TABLE `orders_ac` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address_type` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'in progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_ac`
--

INSERT INTO `orders_ac` (`id`, `user_id`, `name`, `number`, `email`, `address`, `address_type`, `method`, `product_id`, `price`, `qty`, `date`, `status`) VALUES
('7pgeecRxLsIW50RSQCTL', '8swlFAqDsakTTL0lLfax', 'dipsun patel', '7862041942', 'dipsunp@gmail.com', '16 krishna residency, kamrej, surat, india - 123456', 'home', 'cash on delivery', 'QZT3xNdvYjtG9WfTu1GC', '44790', '1', '2025-05-08', 'in progress');

-- --------------------------------------------------------

--
-- Table structure for table `orders_burds`
--

CREATE TABLE `orders_burds` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address_type` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'in progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_burds`
--

INSERT INTO `orders_burds` (`id`, `user_id`, `name`, `number`, `email`, `address`, `address_type`, `method`, `product_id`, `price`, `qty`, `date`, `status`) VALUES
('h7DFjejy0QQQujzNnejg', '8swlFAqDsakTTL0lLfax', 'dipsun patel', '7862041942', 'dipsunp@gmail.com', '16 krishna residency, kamrej, surat, india - 123456', 'home', 'Razorpay', '1IMPDXJEhwk1A2ajojjr', '9000', '1', '2025-05-08', 'in progress'),
('DgtBgNhILIn406lMJZzB', '8swlFAqDsakTTL0lLfax', 'dipsun patel', '7862041942', 'dipsunp@gmail.com', '16 krishna residency, kamrej, surat, india - 123456', 'home', 'Razorpay', 'DXp8xjU2eHzncNkzBGrL', '2000', '1', '2025-05-08', 'in progress');

-- --------------------------------------------------------

--
-- Table structure for table `orders_cm`
--

CREATE TABLE `orders_cm` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address_type` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'in progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_cm`
--

INSERT INTO `orders_cm` (`id`, `user_id`, `name`, `number`, `email`, `address`, `address_type`, `method`, `product_id`, `price`, `qty`, `date`, `status`) VALUES
('0BtQqkGrEKUHftb0o1DT', '8swlFAqDsakTTL0lLfax', 'dipsun patel', '7862041942', 'dipsunp@gmail.com', '16 krishna residency, surat, surat, india - 123456', 'home', 'Razorpay', 'Plckqz01L2wdAjZUlE6D', '451523', '1', '2025-05-08', 'in progress');

-- --------------------------------------------------------

--
-- Table structure for table `orders_laptop`
--

CREATE TABLE `orders_laptop` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address_type` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'in progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_laptop`
--

INSERT INTO `orders_laptop` (`id`, `user_id`, `name`, `number`, `email`, `address`, `address_type`, `method`, `product_id`, `price`, `qty`, `date`, `status`) VALUES
('HzelZid2SA6vjdeV1zwx', '8swlFAqDsakTTL0lLfax', 'dipsun patel', '7862041942', 'dipsunp@gmail.com', '16 krishna residency, kamrej, surat, india - 123456', 'home', 'Razorpay', 'qXSoQcp7fZpcJe5IpThB', '100000', '1', '2025-05-08', 'in progress');

-- --------------------------------------------------------

--
-- Table structure for table `orders_rf`
--

CREATE TABLE `orders_rf` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address_type` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'in progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_rf`
--

INSERT INTO `orders_rf` (`id`, `user_id`, `name`, `number`, `email`, `address`, `address_type`, `method`, `product_id`, `price`, `qty`, `date`, `status`) VALUES
('5c8VbeH84krJ3twvmvME', '8swlFAqDsakTTL0lLfax', 'dipsun patel', '7862041942', 'dipsunp@gmail.com', '16 krishna residency, kamrej, surat, india - 123456', 'home', 'cash on delivery', 'p1qNxu1mb9wmLE9AjIre', '150000', '1', '2025-05-08', 'in progress');

-- --------------------------------------------------------

--
-- Table structure for table `orders_tab`
--

CREATE TABLE `orders_tab` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address_type` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'in progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_tab`
--

INSERT INTO `orders_tab` (`id`, `user_id`, `name`, `number`, `email`, `address`, `address_type`, `method`, `product_id`, `price`, `qty`, `date`, `status`) VALUES
('3IA8a5oDHg1qRk0RZCfi', '8swlFAqDsakTTL0lLfax', 'dipsun patel', '7862041942', 'dipsunp@gmail.com', '16 krishna residency, kamrej, surat, india - 123456', 'home', 'Razorpay', 'aK056anWmriMOEN9NLAn', '90000', '1', '2025-05-08', 'in progress');

-- --------------------------------------------------------

--
-- Table structure for table `orders_tv`
--

CREATE TABLE `orders_tv` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address_type` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'in progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_tv`
--

INSERT INTO `orders_tv` (`id`, `user_id`, `name`, `number`, `email`, `address`, `address_type`, `method`, `product_id`, `price`, `qty`, `date`, `status`) VALUES
('pbWC386hn9bGyQMiEf6k', '8swlFAqDsakTTL0lLfax', 'dipsun', '7862041942', 'dipsunpatel1845@gmail.com', 'krishna residency, surat, surat, india - 123456', 'home', 'Razorpay', 'hdkzEIJIsvYiHjs6rmKh', '50000', '1', '2025-05-08', 'in progress'),
('pomoXZVQKjWkHTcKOawJ', '8swlFAqDsakTTL0lLfax', 'dipsun', '7862041942', 'dipsunpatel1845@gmail.com', 'krishna residency, surat, surat, india - 123456', 'home', 'Razorpay', 'BMH7UsjROhRgHDozJb53', '50000', '1', '2025-05-08', 'in progress'),
('8a4kCbLmXa2M88cb1OK3', '8swlFAqDsakTTL0lLfax', 'dipsun', '7862041942', 'dipsunpatel1845@gmail.com', 'krishna residency, surat, surat, india - 123456', 'home', 'Razorpay', '4lkjbx6wQ7bKpsWRBqIV', '80000', '1', '2025-05-08', 'in progress');

-- --------------------------------------------------------

--
-- Table structure for table `orders_watch`
--

CREATE TABLE `orders_watch` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address_type` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'in progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_watch`
--

INSERT INTO `orders_watch` (`id`, `user_id`, `name`, `number`, `email`, `address`, `address_type`, `method`, `product_id`, `price`, `qty`, `date`, `status`) VALUES
('lhWvlyjvQU2PUd8tIaGT', '8swlFAqDsakTTL0lLfax', 'dipsun patel', '7862041942', 'dipsunp@gmail.com', '16 krishna residency, kamrej, surat, india - 123456', 'home', 'cash on delivery', 'zlElnPPGk34snpoBY5zI', '70000', '1', '2025-05-08', 'in progress'),
('1cww9GKCGdCpdWk4ZTeW', '8swlFAqDsakTTL0lLfax', 'dipsun patel', '7862041942', 'dipsunp@gmail.com', '16 krishna residency, kamrej, surat, india - 123456', 'home', 'cash on delivery', 'Ms6HRUb7pHWipwjVxy5I', '59999', '1', '2025-05-08', 'in progress');

-- --------------------------------------------------------

--
-- Table structure for table `orders_wm`
--

CREATE TABLE `orders_wm` (
  `id` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address_type` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'in progress'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_wm`
--

INSERT INTO `orders_wm` (`id`, `user_id`, `name`, `number`, `email`, `address`, `address_type`, `method`, `product_id`, `price`, `qty`, `date`, `status`) VALUES
('xPl5coiNLiXSl1d2C6rx', '8swlFAqDsakTTL0lLfax', 'dipsun patel', '7862041942', 'dipsunp@gmail.com', '16 krishna residency, surat, surat, india - 123456', 'home', 'cash on delivery', 'EznAdqWlRDGUkBlHvEPQ', '32500', '1', '2025-05-08', 'in progress');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
('owP4giT2oXrGWkXK44Lk', 'Iphone 16 Pro Max', '160000', 'NTKbO24KoYqtDPKkMiuO.webp'),
('fsjNWbe515ky1Ia0vOW3', 'Samsung S24 Ultra', '170000', 'nqfRZdP7lB9BXcJ22BAv.jpg'),
('GsHGEnxYwjKlHw08U9zM', 'Oneplus 13R 512GB Phone', '100000', '0TCwcoFCclht5n14p4GB.png'),
('jSNKd8fHv3GO6haen4Pp', 'OPPO FIND X7 Ultra', '60000', 'qyu4h5h4OkG4lcOzvQkx.jpg'),
('WCiciFc3xhkjsvmWm9FR', 'Motorola Edge 40 Neo', '40000', 'z0f7cDUpRQhN7xREVDT3.webp'),
('18qNFgbsul4fhtGbXz5z', 'Vivo X100 ultra pro', '50000', 'Ffk6re3nsFfHbboykG2s.jpg'),
('mNYiugQ7hxdbdynHUKXb', 'Google Pixel 9 Pro', '70000', 'JlBo5iRwDwyhxtm7o2NY.webp'),
('vwsnHNngvLTSjnOrIZ26', 'Redmi Note 14 Pro+', '40000', 'cqbnP1LSvUjGORHNwETK.webp'),
('aeoFPy58QBFqBcFgZPHC', 'Realme 14 Pro 5G', '40000', 'YWvzXJqRD8aBZNu0s818.webp'),
('96M4jNpZTYHz1IfBkCOf', 'Samsung Galaxy Z Flip6', '40000', 'JQQOX7VYUi3D9xQAtUCZ.webp'),
('NkpOSOOJBo8ZyEqHuyKW', 'SAMSUNG GALAXY Z FOLD 6', '170000', 'SYt92s03HFnsBZIsPh7b.jpg'),
('jfl5njoG9oLy74WilhhI', 'Nothing Phone (2)', '40000', 'HTya6X3We0C9ly83YpT6.webp');

-- --------------------------------------------------------

--
-- Table structure for table `rf`
--

CREATE TABLE `rf` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rf`
--

INSERT INTO `rf` (`id`, `name`, `price`, `image`) VALUES
('BESSKfzjxl9LP3gfNDbM', 'Samsung 809 L Side by Side Refrigerator', '374990', 'ASGaWKuees589Iyjcjzv.avif'),
('p1qNxu1mb9wmLE9AjIre', ' LG 36 in. Side-by-Side InstaView Refrigerator', '150000', 'YfQIAaHJtyTqWvMnLxN5.webp'),
('RDXM2KtWk0rJE0oV0iie', 'Whirlpool - 21.4 Cu. Ft. Side-by-Side Refrigerator', '150000', 'ROm1BVGz3KMU5G2jBchn.webp'),
('zR6JUwEsZly8CkrxfBOD', 'Haier 602 L , 3 Star Side by Side Refrigerator', '72990', 'XrpGHipjCL1nvCZcfumh.jpg'),
('lMXW9ufQNaVEKoFX7kuF', 'panasonic 260 L Double Door 2 Star Refrigerator', '25000', 'PSyBuYDxU1HolKV7H82S.jpg'),
('FnbRCED0h88pVKVTDGSv', 'Hitachi 563 L Frost Free Multi-Door Refrigerator', '51990', 'vhGoarM7RAMmxKfRuuRE.jpg'),
('9EGbx66Ares2pPWotTck', 'RC2D550N (BLUE STAR), Capacity: 500 L Refrigerator', '50000', 'C1Usja2djsgU6FhBHdct.jpg'),
('lAaJoB46MdXbreBy4TtH', 'Godrej Side By Side Refrigerator RS EONVELVET 579 ', '59990', 'LvKRa1dp5VOpoi0Bt9lm.jpg'),
('zjKOczIu0tPGIuBanR6A', 'Bosch Series 6 Free Standing Refrigerator ', '40000', 'tbz1faIzaKm95D9BOBR9.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tab`
--

CREATE TABLE `tab` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tab`
--

INSERT INTO `tab` (`id`, `name`, `price`, `image`) VALUES
('aK056anWmriMOEN9NLAn', 'Samsung Galaxy Tab S10 Plus', '90000', 'riPgneNHS641uyoxouZq.webp'),
('T2XC9h8dwxnuUEy2sYWl', 'Samsung Galaxy Tab S9 FE+ 31.50 cm 128 gb', '39484', '9JG9OVtXvzHe1ouIKXJa.jpg'),
('ZmPOoHAGCURKQd406tfh', 'Lenovo Tab Plus with Octa JBL Hi-Fi Speakers| 8 GB', '19999', 'OfD3rbEG3u38dWQBoOiJ.jpg'),
('gBEnSKSLenfC7nwYSQI2', 'Dell Venue 8 Pro Tablet (64GB, WiFi, 3G), Black', '10000', 'a5GkHNikMGlJZX14gTOB.jpg'),
('jo3ciBifjlTF4oimOfsm', 'Sony Xperia Z3 Tablet Compact', '10000', 'efFIrn6go0ERqs1OxzEG.jpeg'),
('RtzDhNcPxBkoAVDfEWCo', 'REALME Pad 2 4G (6GB RAM, 128GB Storage)', '19999', 'm5vSFNdrwasBnmPMI565.jpg'),
('NlyRoKe3YTwsr8TGBdMX', 'Redmi Pad Pro Wi-Fi+5G Android Tablet (8GB Ram)', '24999', 'CLsiQrDZxMt2OfygFRcY.webp'),
('VWByfWbq5NL9S2XQNtGF', 'OnePlus Pad 2-12GB RAM + 256GB Storage ', '36000', 'ZQaikkAKEm7ojIEl0Yxv.jpg'),
('T3orZHyRlhXVwUdx0DNC', 'OPPO Pad 2 5G Tablet 8GB RAM + 256GB ROM - Grey', '38984', 'MOvQ67SrSR6Mz3VYzOSo.webp'),
('ibeh1IzXZglciyPuirOo', 'Vivo Pad 3 Pro Tablet 16GB+512GB 11500mAh Battery', '30000', 'mBKs5mAZAfJDG6dL4aAi.avif'),
('tx1D8nWElbLiytenPZUh', 'SAMSUNG Galaxy Tab S8 Ultra 12 GB RAM 256 GB', '75000', 'J4ZS40tNQkC89Jea4tas.webp'),
('kVEmKSMNt0QpZwWuImu8', 'ASUS T3300KA-LQ121WS Windows Tablet 128 GB', '15000', 'wxvEZItTZvkTRrRFVQtI.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tv`
--

CREATE TABLE `tv` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tv`
--

INSERT INTO `tv` (`id`, `name`, `price`, `image`) VALUES
('hdkzEIJIsvYiHjs6rmKh', 'LG UQ75 55 (139cm) TV', '50000', 'kd80uZOJIC7JfNeyRF9m.jpeg'),
('BMH7UsjROhRgHDozJb53', 'Sony Bravia 139 cm (55 inches) TV', '50000', 'IesvS1aJmFSCWxEgk2LC.jpg'),
('4lkjbx6wQ7bKpsWRBqIV', 'TCL C655 109.22 cm TV', '80000', 'ceGKQ73JtxDP7QhbH5I1.webp'),
('OaAC8PO45EYMH8Sp0l9x', 'Samsung Crystal Vision 4K TV', '50000', 'ysLygMrW4RYBsucXKAn5.jpg'),
('3oForiJcVCwfL6kd4Mis', 'Panasonic Smart LED Google TV TH32MS660DX', '45000', '99VoNOPCoemHLGcSi0fd.jpg'),
('U2fdTmiqlch4Y8TdbWql', 'Xiaomi X Series Pro Model TV', '50000', 'ZJkPYaJuhQFXzSNeGFG2.jpg'),
('uxNnTeyLbB803vBbCISZ', 'Mi (75 inches) Q1 Series TV', '40000', 'yqn3T3bNea2PFyVqqKn6.jpg'),
('wvtpitePRKmE4uObIGTN', 'Haier 108cm (43) Google TV ', '31490', '54IQTHkAMb3ZAFpFOlYZ.webp'),
('dsswh6YkdSINWSDUiu7v', 'Sony Bravia 139 cm (55 inches) XR Series TV', '194000', 'eTR5ictYu7u7XJMWwRi2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `watch`
--

CREATE TABLE `watch` (
  `id` varchar(255) NOT NULL,
  `name` varchar(400) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `watch`
--

INSERT INTO `watch` (`id`, `name`, `price`, `image`) VALUES
('zlElnPPGk34snpoBY5zI', 'Apple Watch Series 10', '70000', 'nGIsBoywpnSpXCzBAwnt.jpeg'),
('4qKzdwCCNx4MXZSV0Doq', 'Apple Watch Series 9', '50000', 'CtLyBDw2scL2AlQv2bNI.jpeg'),
('PVifuCnCRCzrWlHMw5Rl', 'Apple Watch Series 8', '50000', 'EMKF9Hz3vq33abePj21V.jpg'),
('jMzQ2WiTZT9mhaE6XQVI', 'boAt Newly Launched Lunar Pro LTE Smart Watch ', '8000', 'o7qemSl7gJmYD0yhX5FJ.webp'),
('saHzZbdhw3b8JJYQBcAI', 'Fire-Bolt Dagger Luxe AMOLED Display SmartWatch', '21000', 'pEgW06BezKix5Acrtn7H.jpeg'),
('wdtTNS8XqjaE5NyShSOT', 'Noise ColorFit Ultra 3 BluetoothCalling SmartWatch', '14733', 'l6AkrJUbouGGcL8jp71F.jpg'),
('Ms6HRUb7pHWipwjVxy5I', 'Samsung Galaxy Watch Ultra Smart Watch', '59999', 'uzDD56dyIisZ7wsbpuWV.webp'),
('lhXHgimBZy5uOonFcTEj', 'OnePlus Watch 2 with Wear OS 4 SmartWatch', '19999', '2t1N9DK6uzGLbiUB36Hd.jpg'),
('LRJfDH1O4qaMr7v2ADxO', '  realme smart watch 2 pro ', '3000', 'V8bsaB784K6Oy7YQhrQA.jpg'),
('DEvwmVgqmpLMnBuZl4T2', 'Redmi Watch 4 Silver Gray', '9099', 'aZjCowjhps4lebdAHd2E.webp'),
('OKk5SkSplKE0Ztz2KM7G', 'Fastrack Radiant FX4 Premium Metal Smartwatch', '5495', 'LOcOSQAAKmyTSujwhSN8.webp'),
('Va0Y8iZFmYvg51m9pUNG', 'Xiaomi Amazfit GTR 47mm Stainless Steel Smartwatch', '46887', 'O6ynYYUxBuSOTTzAZFuM.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wm`
--

CREATE TABLE `wm` (
  `id` varchar(255) NOT NULL,
  `name` varchar(500) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wm`
--

INSERT INTO `wm` (`id`, `name`, `price`, `image`) VALUES
('KSAi5PcJceWRWEiGQvHq', 'LG 7KG Front Load Washing Machine', '34191', 'jY60AfZSe1yghdAQAzPh.avif'),
('EznAdqWlRDGUkBlHvEPQ', 'WOA956S1IN Automatic 9.5 Kg Bosch Washing Machine', '32500', 'tnyuIss6QkUS0UKoia4v.jpg'),
('wU7A4VsFdPI5I4qnf0zv', 'Samsung 12 kg Front Loading Washing Machine', '51490', '8uHe4BS0VfYaa5Ssvtbi.webp'),
('nPXjgWoi3zkRWnRj1Q3c', 'Whirlpool XpertCare 8kg Front Load Washing Machine', '25990', 'zUTZlIpifzVUJjkfVFr2.webp'),
('OoX8PYqAtKlBqLW8iq5y', 'Panasonic 8 kg NA-F80X10CRB  Washing Machine', '25790', 'FwmYVShiYqua2ASghxXD.png'),
('XKSvmSsYJmDf2fWqR6Qe', 'Sony ES W85TWXT SA Washing Machine', '40000', 'g2bKCk6guVingDN7YpQg.jpg'),
('7FDBiMuPzQKXMenYYP2N', 'HITACHI SF-160TCV Top Loading Washing Machine', '25000', 'dKWkQwyZZAsSZtwODgus.jpg'),
('RWmPd4uGr5KOEOo3JWda', 'Voltas Beko, A Tata Product 6.5 Kg Washing Machine', '14000', 'gYaog4Z1bZaBzCtsxsYU.jpg'),
('iKJ4gCSzuhBhOy2ubzxJ', '7.0 Kg WA70A4022FS Samsung Washing Machine', '20000', '5pf768eweRyAVIskYUvH.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
