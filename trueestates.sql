-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2025 at 03:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trueestates`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `fname` varchar(29) NOT NULL,
  `lname` varchar(26) NOT NULL,
  `email` varchar(26) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `previousJob` varchar(100) NOT NULL,
  `cv` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `fname`, `lname`, `email`, `phone`, `DOB`, `previousJob`, `cv`) VALUES
(10, 'Asad', 'B', 'asad.k541@gmail.com', '03251916216', '2024-02-14', 'njckz', ''),
(21, 'Muhammad', 'Usama', 'admin@rifah.pk', '03117549897', '2025-03-12', 'testing job', 'recepitscan2418971 (1) (1) (1).pdf');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `fname` varchar(15) NOT NULL,
  `lname` varchar(15) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(29) NOT NULL,
  `address` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `fname`, `lname`, `phone`, `email`, `address`, `zipcode`, `subject`, `description`) VALUES
(5, 'Muhammad', 'Usama', '07376481664', 'usama@gmail.com', 'P-129  St no. 6 Muhammad Ali park Jalvi Market Dhudiwala jaranwala Road Faisalabad, Pakistan', '38000', 'testing', 'this is dummy messege'),
(7, 'Muhammad', 'Usama', '03117549897', 'ahmedruf722@gmail.com', 'P-129  St no. 6 Muhammad Ali park Jalvi Market Dhudiwala jaranwala Road Faisalabad, Pakistan', '38000', 'this is dumy', 'final testings');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `dtitle` varchar(256) NOT NULL,
  `status` varchar(100) NOT NULL,
  `SecuirityDeposit` varchar(100) NOT NULL,
  `beds` varchar(100) NOT NULL,
  `baths` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `dcity` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `beginning` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `Fname` varchar(100) NOT NULL,
  `DOB` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `socialNo` varchar(100) NOT NULL,
  `drivingLicense` varchar(100) NOT NULL,
  `currentAddress` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `landlordName` varchar(100) NOT NULL,
  `ReasonOfMoving` varchar(100) NOT NULL,
  `currentRent` varchar(100) NOT NULL,
  `DateMovedIn` varchar(100) NOT NULL,
  `PreviousAddress` varchar(100) NOT NULL,
  `PreviousZipcode` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `PresentOccupation` varchar(100) NOT NULL,
  `EmployeeName` varchar(100) NOT NULL,
  `positionSalary` varchar(100) NOT NULL,
  `employeeInfo` varchar(100) NOT NULL,
  `dateEmployeFrom` varchar(100) NOT NULL,
  `OtherSrceOfIncome` varchar(100) NOT NULL,
  `VehicleInfo` varchar(100) NOT NULL,
  `LicenseNo` varchar(100) NOT NULL,
  `monthly` varchar(100) NOT NULL,
  `otherVehicle` varchar(100) NOT NULL,
  `HowknowRental` varchar(100) NOT NULL,
  `occupyingUnit` varchar(100) NOT NULL,
  `suedForRent` varchar(100) NOT NULL,
  `evictedFromRent` varchar(100) NOT NULL,
  `suedForDamage` varchar(100) NOT NULL,
  `brokeRentAgreement` varchar(100) NOT NULL,
  `bankruptcy` varchar(100) NOT NULL,
  `pets` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `notify` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `dtitle`, `status`, `SecuirityDeposit`, `beds`, `baths`, `category`, `area`, `dcity`, `country`, `location`, `beginning`, `price`, `Fname`, `DOB`, `phone`, `email`, `socialNo`, `drivingLicense`, `currentAddress`, `city`, `landlordName`, `ReasonOfMoving`, `currentRent`, `DateMovedIn`, `PreviousAddress`, `PreviousZipcode`, `type`, `PresentOccupation`, `EmployeeName`, `positionSalary`, `employeeInfo`, `dateEmployeFrom`, `OtherSrceOfIncome`, `VehicleInfo`, `LicenseNo`, `monthly`, `otherVehicle`, `HowknowRental`, `occupyingUnit`, `suedForRent`, `evictedFromRent`, `suedForDamage`, `brokeRentAgreement`, `bankruptcy`, `pets`, `description`, `notify`) VALUES
(4, '803 S Ellwood Ave UNIT 1, Balt', 'For Rent', '', ' bedrooms', ' Bathrooms', 'home', '78', 'Faisalabad', 'Pakistan', ', Housing Colony # 2 , street # 9, housing colony # 2', '2024-03-01', '', 'Muhammad Usama', '2024-02-28', '03117549897', 'admin@rifah.pk', '878665', '1234', 'P-129  St no. 6 Muhammad Ali park Jalvi Market Dhudiwala jaranwala Road Faisalabad, Pakistan', '38000', '765', 'no reason', '2230', '2024-03-16', 'no previous address', 'usa', 'Part Time', 'developer', 'usama', '2200', 'i am a develoepr', '2024-03-07', 'no other source of incomes', 'no vehical', '1234', '2200', 'no other vehical', 'I heard fron freudn', ' no occupying the unit', 'No', 'yes', 'yes', 'No', 'yes', 'yes', 'nooooooooooooooooooooooooooooo', 'notify'),
(5, '803 S Ellwood Ave UNIT 1, Balt', 'For Rent', '', ' bedrooms', ' Bathrooms', 'home', '', 'Faisalabad', 'Pakistan', ', Housing Colony # 2 , street # 9, housing colony # 2', '2024-09-10', '', 'Muhammad usman', '', '03117549897', 'admin@rifah.pk', '878665', '56565765', 'P-129  St no. 6 Muhammad Ali park Jalvi Market Dhudiwala jaranwala Road Faisalabad, Pakistan', 'Faisalabad', '03213386966', 'vvghf', '2230', '2024-10-04', 'P-129 St no. 6 Muhammad Ali park Jalvi Market Dhudiwala jaranwala Road Faisalabad, Pakist', '38000', 'Student', 'developer', 'ali', '2200', 'jkhkh', '2024-09-19', 'no other source of incomes', 'no vehical', '1234', '7897', 'no other vehical', 'I heard fron freudn', ' no occupying the unit', 'No', 'yes', 'No', 'yes', 'No', 'yes', 'hj', '');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `id` int(11) NOT NULL,
  `enquiry_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`id`, `enquiry_id`, `name`, `email`, `phone`, `description`) VALUES
(2, 0, 'Asad B', 'asad.k541@gmail.com', '03251916216', 'lmk l;nklMZM\"'),
(3, 6, 'Asad B', 'asad.k541@gmail.com', '03251916216', 'Hemlo');

-- --------------------------------------------------------

--
-- Table structure for table `maintenanceapplication`
--

CREATE TABLE `maintenanceapplication` (
  `id` int(11) NOT NULL,
  `Address` varchar(256) NOT NULL,
  `city` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `enterPermission` varchar(100) NOT NULL,
  `haveAlram` varchar(100) NOT NULL,
  `alarmCode` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `RequiredAttention` varchar(10) NOT NULL,
  `pets` varchar(100) NOT NULL,
  `haveLock` varchar(100) NOT NULL,
  `lockCode` varchar(100) NOT NULL,
  `images` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maintenanceapplication`
--

INSERT INTO `maintenanceapplication` (`id`, `Address`, `city`, `name`, `email`, `phone`, `enterPermission`, `haveAlram`, `alarmCode`, `description`, `RequiredAttention`, `pets`, `haveLock`, `lockCode`, `images`) VALUES
(8, ', Housing Colony # 2 , street # 9, housing colony # 2', 'Toba Tek Singh', 'Asad B', 'admin@gmail.com', '03251916216', 'yes', 'yes', '1122', 'nzcxj/xklznvxvlbnblknxkl', 'yes', 'yes', 'yes', '', '65e8c395394f1_14-4.jpg,65e8c39539746_8-4.jpg,65e8c39539988_7-5.jpg,65e8c39539d6c_5-5.jpg,65e8c39539f97_4-5.jpg,65e8c3953a31e_3-5.jpg,65e8c3953a520_2-5.jpg,65e8c3953a737_1-5.jpg'),
(9, 'p-129 st#6 M. Ali park dhudiwala jalvi market fsd', 'Faisalabad', 'Muhammad Usama', 'alviu027@gmail.com', '03213386966', 'No', 'No', '', 'sadas', 'No', 'yes', 'No', '32', '65ecd653ea4f7_Usama Awan.png,65ecd653ea6ad_WhatsApp Image 2024-03-08 at 00.31.44_a016a3ac.jpg'),
(10, 'p-129 st#6 M. Ali park dhudiwala jalvi market fsd', 'Faisalabad', 'Muhammad Usama', 'alviu027@gmail.com', '03213386966', 'No', 'No', '', 'sadas', 'No', 'yes', 'No', '32', '65ecd655732e3_Usama Awan.png,65ecd6557345a_WhatsApp Image 2024-03-08 at 00.31.44_a016a3ac.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL,
  `beds` varchar(100) NOT NULL,
  `baths` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `listedDate` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `state_id` varchar(100) NOT NULL,
  `map` varchar(256) NOT NULL,
  `video` varchar(1000) NOT NULL,
  `featureImg` varchar(256) NOT NULL,
  `images` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `amenities` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`id`, `title`, `category`, `status`, `beds`, `baths`, `area`, `listedDate`, `zipcode`, `city`, `address`, `country`, `state_id`, `map`, `video`, `featureImg`, `images`, `description`, `amenities`) VALUES
(8, 'Directly in the Middle of Cant', 'home', 'For Rent', '2', '2', '1012 sq ft', '2024-03-02', '0900', 'Canton Square', '1027 S Curley Street, 21224', '', '7', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3085.9009336188305!2d-76.44530728813614!3d39.33582997151547!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c7fd44efa3e463%3A0x61409c498b17763c!2s1538%20Dornton%20Ave%2C%20Middle%20Ri', 'https://my.matterport.com/show/?m=BRTi963xPRM', '27-6.jpg', '27-6.jpg,26-6.jpg,25-6.jpg,24-8.jpg,23-10.jpg,22-10.jpg,21-11.jpg,20-13.jpg,19-13.jpg,17-16.jpg,18-14.jpg,16-17.jpg,15-17.jpg,14-19.jpg,13-19.jpg,12-19.jpg,11-19.jpg,10-19.jpg', 'About the property\r\nLOCATION IS EVERYTHING!! This home is walking distance to all the shops, playgrounds and restaurants. This beautiful, bright renovated property offers hardwood flooring throughout the home. This home has built-in cabinetry, a chef station, granite counters. exposed beam ceilings, exposed brick, stainless steel appliances, glass inlays in cabinetry and a main level half bath. This home is made for entertaining with a gated garden patio, a mud room with cultured marble tops. 3 blocks from Safeway, 3 blocks from the water, Easy access to highways. The life style you have been waiting for is HERE!!! Discount for longer term leases!!\r\nLease summary\r\n12 -36 months lease available. Discounts for two year leases\r\nPlease call today for showing schedule.\r\n', 'Ac,Hardwood floor,Off-street parking,Dining room,Living room,Master bath,Yard,Additional Storage,Air Conditioning,Cable Ready,Dishwasher,Disposal,Range/Oven,Wired,'),
(9, '105 Decker Avenue, Baltimore, ', 'home', 'For Rent', '2', '2', '1000ft', '2021-06-07', '', '', '105 Decker Avenue, Baltimore, MD 21224', '', '7', '', ' https://my.matterport.com/show/?m=or9UCuxk5cB&sm=2&sr=-2.3,.64,2.55&sp=35.34,42.02,-35.68', '15-16.jpg', '15-16.jpg,16-16.jpg,14-18.jpg,13-18.jpg,12-18.jpg,10-18.jpg,6-21.jpg,5-21.jpg,4-21.jpg,3-21.jpg,2-21.jpg,1-21.jpg', 'About the property\r\nHuge GOURMET KITCHEN space leading to 2-LEVEL PATIO AND DECK AREA. Dishwasher, lots of counter space! Fresh HARDWOOD FLOORS throughout entire home. Warm brick exposure throughout home. FRESH NEUTRAL AND WARM COLOR PAINT THROUGHOUT HOME! Central heating and AC. MODERN & WARM!! Pets allowed!! Walking distance to Patterson Park with pools, tennis courts and running paths. JHU connector walking distance! AVAILABLE JULY 1st, 2020! GET DISCOUNT FOR 2 YEAR LEASE AVAILABLE!\r\n\r\nLease summary\r\n1-3 YEARS LEASE TERMS. DISCOUNT FOR THOSE WHO SIGN A TWO YEAR LEASE!', 'Hardwood Floor,Additional Storage,Balcony, Deck,Patio, Basement,Cable Ready,Dining room,Dishwasher,Disposal,Fenced Yard,Freezer,Granite countertop,Jacuzzi / Whirlpool,Living room,Master bath,Microwave,Range/Oven,Refrigerator,Stainless steel appliances,Walk-in closet'),
(10, '12 1/2 N Decker Avenue, Baltim', 'home', 'For Rent', '2', '2', '912 sq ft', '2024-03-12', '', '', '12 1/2 N Decker Avenue, Baltimore, MD 21224', '', '7', '  ', '   ', '6-21.jpg', 'uploads/12-18.jpg', 'About the property\r\nGet a great off season price for a beautiful and central located home!! BEAUTIFULLY REMODELED-MODERN 2BR/2BA. 1 Large Master Bedroom with Master Bath including LARGE STANDALONE TUB & Shower. New GRANITE countertops, stainless steel appliances in ready to entertain kitchen. Large Patio Area & CARPORT!! 1 Block from Patterson Park (dog park, tennis courts, swimming pool) and minutes from Canton and Fells Point Area. Safe and Quiet Street with Ample Parking Available! Minutes from JHU!\r\n\r\nLease summary\r\nSeeking 2 Year Lease Tenant If possible– DISCOUNTS AVAILABLE. Showings on 7/25/15 call for Appointments', 'Hardwood Floor,Balcony or deck,Ceiling fans,range oven,disposal freezer,steel appliances,internet'),
(11, '120 N Decker Ave Baltimore, MD', 'home', 'For Rent', '2', '3', '1000 sq ft', '', '', '', '120 N Decker Ave Baltimore, MD 21224', '', '7', '', ' ', '2.jpg', '1.jpg,2.jpg,3.jpg,4.jpg,5.jpg,6.jpg,7.jpg,8.jpg,9.jpg,10.jpg,11.jpg,12.jpg,13.jpg,14.jpg,15.jpg,16.jpg,17 (1).jpg,17.jpg,18.jpg', 'About the property\r\nStylish, sophisticated & centrally located near Patterson Park. This gorgeous renovated home has everything from a beautiful kitchen w granite counters & stainless appliances, stunning stone gas fireplace, modern wood floors, tray ceilings & crown molding throughout, to the interior entrance to the roof top deck, new roof, floating stairs & off-street parking. Possible 3rd BR in LL w/ full BA.', 'Ac,Hardwood Floor,Balcony or deck,Ceiling fans,Off-street Parking,Deck, or Patio,Ceiling fans,Dishwasher, Disposal,Stainless steel appliances,Vaulted Ceiling, Walk-in close'),
(12, '132 N Decker Ave , Baltimore, ', 'Apartment', 'For Rent', '2', '', '960 sq ft', '', '', '', '', '', '7', '  ', '   ', '5-2.jpg', 'uploads/5-2.jpg,uploads/13-2.jpg,uploads/12-2.jpg,uploads/11-2.jpg,uploads/10-2.jpg,uploads/9-2.jpg,uploads/8-2.jpg,uploads/7-2.jpg,uploads/6-2.jpg,uploads/4-2.jpg,uploads/3-2.jpg,uploads/2-2.jpg,uploads/1-2.jpg', 'About the property\r\nSteps from Paterson Park! Beautiful newly renovated townhouse on Decker Avenue, Modern cabinetry and furnishings embedded in the home, new stainless steel kitchen equipment, deck, parking pad, and gorgeous walnut hardwood flooring throughout the home.', 'Ac,Hardwood Floor,Oven,Balcony or deck,Ceiling fans,Stainless steel appliances'),
(13, '154 N Decker Ave Baltimore MD ', 'home', 'For Rent', '2', '3', '960f', '', '', '', '154 N Decker Ave Baltimore MD 21224', '', '7', '', ' https://my.matterport.com/show/?m=qvSx47BgEVm&sm=2&sr=-.68,-.22,-.18&sp=-12.2,24.48,27.55', '6-1.jpg', '1-1.jpg,2-1.jpg,3-1.jpg,4-1.jpg,5-1.jpg,6-1.jpg,7-1.jpg,8-1.jpg,9-1.jpg,10-1.jpg,11-1.jpg,12-1.jpg,13-1.jpg,14-1.jpg,15-1.jpg,16-1.jpg,17-1.jpg,18-1.jpg,19-1.jpg', 'About the property\r\nBeautiful well kept home in the Patterson Park Community. Large closets with Berber carpet on the upper level. Move in ready with all the bells and whistles. 2 bedroom 2 1/2 bath with a full finished basement and full bath in basement. Hardwood floors, sand exposed brick on first floor, stainless appliances, large kitchen, privacy fenced rear yard, high efficiency forced hot air furnace with central air, berber carpet on second floor and basement, ceramic tile in the bathrooms! CALL TODAY FOR SHOWING APPOINTMENT, THIS HOME WILL GO FAST\r\n\r\nLease summary\r\n1-3 LEASE TERMS.', 'Ac,Hardwood Floor,Balcony or deck,Ceiling fans,fenced yard,nicrowave range,jetted Bathtub,basement,Stainless steel appliances,'),
(14, '2200 Eastern Ave #A, Baltimore', 'home', 'For Rent', '2', '', '950 sq ft', '2024-03-02', '', '', '2200 Eastern Ave #A, Baltimore, MD 21231', '', '7', '  ', '  https://my.matterport.com/show/?m=mWKBJJj2Heu ', '2-10.jpg', 'uploads/14-7.jpg,uploads/13-7.jpg,uploads/12-7.jpg,uploads/11-7 (1).jpg,uploads/11-7.jpg,uploads/10-7.jpg,uploads/9-8.jpg,uploads/8-9.jpg,uploads/7-10.jpg,uploads/6-10.jpg,uploads/5-10.jpg,uploads/4-10.jpg,uploads/3-10.jpg,uploads/2-10.jpg,uploads/1-10.jpg', 'About the property\r\nGorgeous and freshly new built home in the heart of Fells Point! This 2Br/2Ba has gorgeous finishings, brand new kitchen, brand new SST appliances and closet space. Kitchen has Quartz countertops for a sit up dining experience. Be the first person to cook and entertain in this home! Walking distance to Fells Point Waterfront. Minutes from Canton s O Donell Square. Nearby is Safeway and all Local Highways. Enjoy a newly built home in the center of Baltimore City!\r\n\r\nLease summary\r\n1-2 year lease terms', 'Ac,Hardwood Floor,Balcony or deck,Ceiling fans'),
(15, '2200 Eastern Ave #B, Baltimore', '', 'For Rent', '1', '1', '550 sq ft', '2024-03-01', '', '', '2200 Eastern Ave #B, Baltimore, MD 21231', '', '7', '', ' https://my.matterport.com/show/?m=mWKBJJj2Heu', '6-8.jpg', '4-8 (1).jpg,3-8 (1).jpg,2-8 (1).jpg,1-8 (1).jpg,9-6.jpg,8-7.jpg,7-8.jpg,6-8.jpg,5-8.jpg,4-8.jpg,3-8.jpg,2-8.jpg,1-8.jpg', 'About the property\r\nGorgeous and freshly new built home in the heart of Fells Point! This Luxury Junior Studio has gorgeous finishings, brand new kitchen, brand new SST appliances and a WALK IN CLOSET! Ample natural light. Kitchen has Quartz countertops. Be the first person to cook and entertain in this home! Walking distance to Fells Point Waterfront. Minutes from Canton s O Donell Square. Nearby is Safeway and all Local Highways. Enjoy a newly built home in the center of Baltimore City! Make this a breathtaking apartment yours today!\r\n\r\nLease summary\r\n1-2 years lease options', 'Ac,Hardwood Floor'),
(16, '238 S Wolfe Street, Baltimore,', 'home', 'For Rent', '2', '2', '1256 sq ft', '2024-03-01', '', '', '238 S Wolfe Street, Baltimore, MD 21231', '', '7', '', ' ', '1-8.jpg', '4-8 (1).jpg,3-8 (1).jpg,2-8 (1).jpg,1-8 (1).jpg,9-6.jpg,8-7.jpg,7-8.jpg,6-8.jpg,5-8.jpg,4-8.jpg,3-8.jpg,2-8.jpg,1-8.jpg', 'About the property\r\nEnjoy This Perfect 2 HUGE BEDROOMS, 2 Full Bathrooms, 1 Of A Kind Fells Point Renovated Home w/ HW Floors, New Carpet, Fresh Paint, Two Tier Deck Great For Entertaining! NEW Gourmet kitchen w/ SS appliances, Granite Counter Top, Custom Cabinets, Custom Tile & Glass Baths, Exposed Brick & Beams, Cathedral Ceiling In Master BR, Spacious Rooms, Private Courtyard W/ Paves & A Separate Large Storage Shed. Great location! Showings available daily by appointments,\r\n\r\nLease summary\r\nOne Or Two Years, Tenant Responsible For BGE And Water', 'Ac,Hardwood Floor,Balcony or deck,Ceiling fans,Additional Storage,Cable Ready,Dishwasher,Family Room,Heat:forced,Loft Layout,Microwave,Stainless steel appliances'),
(17, '234 S Duncan St, Baltimore, MD', '', 'For Rent', '2', '', '1150 sq ft', '2024-03-01', '', '', '234 S Duncan St, Baltimore, MD 21231', '', '7\r\n', '  ', '  https://my.matterport.com/show/?m=MVhwbH5AxoP ', '2-5.jpg', 'uploads/11-4.jpg,uploads/10-4.jpg,uploads/9-4.jpg,uploads/8-4.jpg,uploads/7-5.jpg,uploads/6-5.jpg,uploads/5-5.jpg,uploads/4-5.jpg,uploads/3-5.jpg,uploads/2-5.jpg,uploads/1-5.jpg', 'About the property\r\nShowing this Sunday 2/7 from 1-2pm:\r\n\r\nNewly constructed 2br/2ba town home in upper fells point neighborhood!! the open floor plan boasts a lot of natural light and perfect for entertaining! the gourmet kitchen, which has never been used, has SST appliances and quartz counter tops. the walls have a fresh neutral gray paint to enable a clean decorating slate. both bedrooms have walk in closets. the master bedroom has a terrace, which is perfect for the afternoon breeze. home is close to Hopkins, the park, shops and the dog park! all you need to do with this gorgeous brand new beauty is to move right in!\r\n\r\nLease summary\r\n1-2 years lease available, discount for 2 years lease, can be rented per room with private bathroom.', 'Balcony or deck,Hardwood Floor,Ac'),
(18, '311 S Madeira Street, Baltimor', '', 'For Rent', '2', '1', '950 sq ft', '2024-03-01', '', '', '311 S Madeira Street, Baltimore, MD 21231', '', '7', '', ' ', '1-20.jpg', '17-15.jpg,16-15.jpg,15-15.jpg,14-17.jpg,13-17.jpg,11-17.jpg,10-17.jpg,9-18.jpg,8-19.jpg,7-20.jpg,6-20.jpg,5-20.jpg,4-20.jpg,3-20.jpg,2-20.jpg,1-20.jpg', 'About the property\r\nBeautifully quaint 2Br/1Bath home in Fells Point. Blocks from the Waterfront. Steps away from park with pool, tennis and dog park. QUAINT, FULLY RENOVATED AND SUN FILLED HOME! NEW APPLIANCES, BRAND NEW CENTRAL A/C SYSTEM\r\nAMAZING LOCATION, WALKING DISTANCE TO PARK, CANTON, WATERFRONT. GREAT NEIGHBORHOOD! 2BR/1BA (BA ON MAIN LEVEL). THIS IS YOUR NEXT HOME!!\r\n\r\nLease summary\r\n1-2 years', 'Ac,Balcony or deck,Hardwood Floor'),
(19, '519 S Milton Avenue, Baltimore', '', 'For Rent', '4', '', '1728 sq ft', '2024-03-01', '', '', '519 S Milton Avenue, Baltimore, MD 21224', '', '7', '    ', '     ', '1-18.jpg', 'uploads/16-13.jpg,uploads/15-13.jpg,uploads/14-15.jpg,uploads/13-15.jpg,uploads/10-15.jpg,uploads/9-16.jpg,uploads/8-17.jpg,uploads/7-18.jpg,uploads/6-18.jpg,uploads/5-18.jpg,uploads/4-18.jpg,uploads/3-18.jpg,uploads/2-18.jpg,uploads/1-18.jpg', 'About the property\r\nBeautifully renovated Canton home with CARPORT and ample street parking. 2-Tier Roof Top Decks including private balconies from bedrooms- AMAZING CANTON VIEWS! Gorgeous kitchen including Granite counters, stainless appls, gourmet kitchen, HARDWOOD FLRS throughout ENTIRE HOME! MASTER BR includes private WETBAR & SITTING AREA! Master Bathroom w/sep shower and jetted tub, ceramic tile, private wetbar and sitting area. Great dining area including a cozy Fireplace (steps from kitchen). 4 levels of finsihed space & STORAGE! 3 large bedrooms w closet space. Den in lower level. Steps from park, Canton Square and great coffee shop. Make this home YOURS TODAY!\r\n\r\nLease summary\r\nLEASE TODAY! Longer term lease = discounted rate per month', 'Ac,Hardwood Floor,Balcony or deck,Ceiling fans,basement,porch'),
(20, '418 S Madeira St, Baltimore, M', 'Apartment', 'For Rent', '2', '', '1000 sq ft', '2024-03-01', '', '', '418 S Madeira St, Baltimore, MD 21231', '', '7', '  ', '  https://my.matterport.com/show/?m=bQreQdviR85&sm=2&sr=-2.13,.83,2.27&sp=33.62,27.05,-14.39 ', '1-11.jpg', 'uploads/21-5.jpg,uploads/20-7.jpg,uploads/19-7.jpg,uploads/18-7.jpg,uploads/17-7.jpg,uploads/16-7.jpg,uploads/15-7.jpg,uploads/14-8.jpg,uploads/13-8.jpg,uploads/12-8.jpg,uploads/11-8.jpg,uploads/10-8.jpg,uploads/9-9.jpg,uploads/8-10.jpg,uploads/7-11.jpg,uploads/6-11.jpg,uploads/5-11.jpg,uploads/4-11.jpg,uploads/3-11.jpg', 'About the property\r\nTURN KEY HOME!! Fully furnished and fully renovated property is ready for you to just walk in with your suitcase!! Amazing location in between Canton and Fells Point!! Like living in a 5 Star hotel!! Walking distance to everything! Cable and internet is completely set up! Gorgeous bedrooms, great for entertaining! Let this gem be your home. Available NOW! Seeking longer term tenants. (1+ years).\r\n\r\nLease summary\r\n1 year minimum, 2 year lease w possible discount! Apply Today!', 'Ac,Hardwood Floor,Balcony or deck,Ceiling fans,basement'),
(21, '602 S Port St, Baltimore, MD 2', '', 'For Rent', '3', '3', '1500 sq ft', '2024-03-01', '', '', '602 S Port St, Baltimore, MD 21224', '', '7', '', ' https://my.matterport.com/show/?m=Mg4HZSSsAvb&sm=2&sr=-.69,.61,.46&sp=31.79,26.81,26.09', '1-6.jpg', '15-5.jpg,13-5.jpg,12-5.jpg,11-5.jpg,10-5.jpg,9-5.jpg,8-5.jpg,7-6.jpg,6-6.jpg,5-6.jpg,4-6.jpg,3-6.jpg,2-6.jpg,1-6.jpg', 'About the property\r\nNEWLY CONSTRUCTED HOME IN CANTON NEIGHBORHOOD!! THE OPEN FLOOR PLAN BOASTS A LOT OF NATURAL LIGHT AND IT’S GREAT FOR ENTERTAINING! THE GOURMET KITCHEN, WHICH HAS NEVER BEEN USED, HAS SST APPLIANCES AND QUARTZ COUNTERTOPS. A WINE CABINET IS CENTRALLY LOCATED IN THE KITCHEN. THE WALLS HAVE FRESH NEUTRAL GRAY PAINT TO ENABLE A CLEAN DECORATING SLATE. A LARGE OUTDOOR PATIO PERFECT FOR BBQ SET. CLOSE PROXIMITY TO HIGHWAY AND ENTERTAINMENT! ALL YOU NEED TO DO WITH THIS GORGEOUS NEW BEAUTY IS TO MOVE RIGHT IN!\r\n\r\nLease summary\r\n12 -24 month leases options available', 'Brand new Construction,Wine Cabnet,Balcony or deck,Hardwood Floor,Ac,street parking'),
(22, '803 S Ellwood Ave UNIT #2, Bal', 'home', 'For Rent', '2', '', '1000sqft', '2024-03-01', '', '', '803 S Ellwood Ave UNIT #2, Baltimore, MD 21224', '', '7', '', ' ', '12-5.jpg', '15-5.jpg,13-5.jpg,12-5.jpg,11-5.jpg,10-5.jpg,9-5.jpg,8-5.jpg,7-6.jpg,6-6.jpg,5-6.jpg,4-6.jpg,3-6.jpg,2-6.jpg,1-6.jpg', 'About the property\r\nPRICE REDUCED!! LOCATION! LOCATION! LOCATION! Price significantly reduced! This home is a duplex. This 2BR/1Ba home has brand new flooring, very high ceilings, large windows, new washer and dryer, great kitchen area for cooking gourmet meals. Loads of natural light! The freshly painted gray walls are ready for your creative design! SMALL CARPORT in back!!! Ample street parking is available too. Unfinished basement is available for extra storage. All this place needs is for you to move in!\r\n\r\nLease summary\r\n1 year or more lease term, discount available on 2 years lease.', 'Ac,Hardwood Floor,Balcony or deck,off-street parking'),
(23, '803 S Ellwood Ave UNIT 1, Balt', 'home', 'For Rent', '', '', '', '2024-03-13', '36070', 'Toba Tek Singh', ', Housing Colony # 2 , street # 9, housing colony # 2', 'Pakistan', '7', '      ', '      ', 'project.jpg', 'uploads/1-5.jpg', 'jhbjblkb', ''),
(29, 'dummy property', 'house', 'For Rent', '2', '3', '23', '2025-03-05', '3443', 'aberdeen', '87 menzies road', 'United Kingdom', '5', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1702829.7498542645!2d75.26496015!3d33.5315621!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e1092499ffa89d%3A0x6567a6d4697e7f1!2sJammu%20and%20Kashmir!5e0!3m2!1sen!2s!4v169106343052', 'https://my.matterport.com/show/?m=or9UCuxk5cB&sm=2&sr=-2.3,.64,2.55&sp=35.34,42.02,-35.68', 'download (1).jpeg', '460554268_507459145550183_7890418118673743324_n.jpg,460665234_1551410059139643_2936097360299149068_n.jpg,460190095_1051749150015605_1061990777395731260_n.jpg,459775038_523789116901453_519311217607446009_n.jpg,459711175_2201816046851001_7407736599847686306_n.jpg', 'this is testing property', 'parking,garden,security cameras'),
(30, '87 victoria road', 'home', 'For Rent', '1', '1', '23', '2025-03-20', '38000', 'Faisalabad', 'p-129 st#6 M. Ali park', 'United Kingdom', '7', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6498.272841471127!2d72.58482843954944!3d35.47616837775106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dcfb9bd8ddfc7d%3A0x8bddbaff43540773!2sNew%20Honey%20Moon%20Hotel%20%26%20Rest', 'https://my.matterport.com/show/?m=or9UCuxk5cB&sm=2&sr=-2.3,.64,2.55&sp=35.34,42.02,-35.68', 'download (4).jpeg', 'download (5).jpeg,download (4).jpeg,download (2).jpeg,download (1).jpeg', 'this is testing property', ''),
(31, 'rgu', 'home', 'For Rent', '2', '2', '76', '2025-03-21', '119', 'aberdeen', 'garthe road', 'scotland', '5', '', 'https://my.matterport.com/show/?m=or9UCuxk5cB&sm=2&sr=-2.3,.64,2.55&sp=35.34,42.02,-35.68', '459711175_2201816046851001_7407736599847686306_n.jpg', '9cebfc83297c2f635dcf9aa772f46d52.webp,5a55c5ffdd702a489f008ea790ef0c69.webp,febc6e61-200a-4cc8-8c48-d4166b41b34c.webp,34663a4d9cc1dfa768d841c352563113.webp,9de3ed672f04934ddf52f6a216ca299d.webp,e54a6d96d61193736da88fcb4c1a369b.webp', 'this is dummy property\r\n', '');

-- --------------------------------------------------------

--
-- Table structure for table `rentapplication`
--

CREATE TABLE `rentapplication` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(15) NOT NULL,
  `address` varchar(400) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `nameOfProperty` varchar(500) NOT NULL,
  `bedrooms` int(11) NOT NULL,
  `bathrooms` int(11) NOT NULL,
  `area` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rentapplication`
--

INSERT INTO `rentapplication` (`id`, `name`, `email`, `phone`, `address`, `description`, `nameOfProperty`, `bedrooms`, `bathrooms`, `area`) VALUES
(3, 'fsdfsdh', 'usafasjhkf@gmail.com', 789789, 'fhasdjkfhkasdhfk', 'jafhasjkfh', 'jkhjkh', 78678, 78678, 'jkhjk'),
(8, 'ahmed', 'alviu027@gmail.com', 304938947, 'fjkasdhfjkasd', 'testing', 'rgu', 2, 2, '76');

-- --------------------------------------------------------

--
-- Table structure for table `slidercontent`
--

CREATE TABLE `slidercontent` (
  `id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `location` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slidercontent`
--

INSERT INTO `slidercontent` (`id`, `title`, `location`, `price`, `image`) VALUES
(2, 'Bautiful 4 Lvl Canton home & CARPORT! 2-Tier Rf top Decks!', '519 S Milton Ave, Baltimore, MD 21224', '2,625', '8-1.jpg'),
(4, ' Two Blocks From Patterson Park, Move In Ready With All The Bells And Whistles. Beautiful well kept a home in the Patterson Park Community. ', '154 N Decker Ave Baltimore MD 21224', '1495', '3-18.jpg'),
(5, 'BEAUTIFUL 2BR, 2BA with DECK & PATIO!! GOURMET KITCHEN', '105 N Decker Ave, Baltimore, MD 21224', '1,715', '3.jpg'),
(6, 'Enjoy This Perfect 2 HUGE BEDROOMS, 2 Full Bathrooms, 1 Of A Kind Fells Point', '238 S Wolfe Street Baltimore Maryland 21231', '1,900', '10-14.jpg'),
(7, 'GREAT LOCATION IN FELLS POINT & FULLY RENOVATED', '311 S Madeira St, Baltimore, MD 21231', '1,425', '4.jpg'),
(8, 'Renovated 2BR, 2BA with Parking Pad, Patterson Park!', '12 1/2 N Decker Ave, Baltimore, MD 21224', '1,595', '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `state` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `property` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state`, `image`, `property`) VALUES
(5, 'New York', 'city-1.jpg', '15'),
(6, 'Washington Dc', 'city-5.jpg', '10'),
(7, 'MarryLand', 'city-4.jpg', '21'),
(8, 'Los angles', 'city-3.jpg', '21'),
(9, 'Texas', 'city-2.jpg', '15');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `featureImg` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `designation`, `featureImg`) VALUES
(4, 'Thomas Stine', 'COO', 'team-02.jpg'),
(5, 'Dawn Richardson', 'Marketing Head', 'team-03.jpg'),
(6, 'Belva Gonzalez', 'Designer', 'team-04.jpg'),
(7, 'Willie Cropper', 'Developer', 'team-05.jpg'),
(8, 'Maria Steinke', 'Lead Developer', 'team-06.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `image` varchar(256) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `name` varchar(26) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `image`, `description`, `name`) VALUES
(3, 'avatar-01.jpg', 'Shopping online has never been more satisfying! [E-commerce Website] has an intuitive interface, making it easy to find and order exactly what I need. The diverse product range, secure transactions, and prompt delivery make it my go-to destination for all my shopping needs. A seamless online shopping experience that keeps me coming back for more!\"', 'joen doe'),
(6, 'avatar-12.jpg', '\\\"As a social media enthusiast, [Social Networking Site] has become my online haven. The interactive features, easy sharing options, and a vibrant community make connecting with friends and discovering new content a breeze. The user interface is sleek and modern, providing an enjoyable platform for sharing life\\\'s moments. Truly the best in the social media landscape!\\\"', 'Dawn Richardson'),
(10, 'siddhi-new-1.jpeg', 'Sales agent in California', 'Riya singh'),
(12, 'download (2).jpeg', 'dummy review', 'adnan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(0, 'admin@gmail.com', 'admin@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenanceapplication`
--
ALTER TABLE `maintenanceapplication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentapplication`
--
ALTER TABLE `rentapplication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slidercontent`
--
ALTER TABLE `slidercontent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `maintenanceapplication`
--
ALTER TABLE `maintenanceapplication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `rentapplication`
--
ALTER TABLE `rentapplication`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `slidercontent`
--
ALTER TABLE `slidercontent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
