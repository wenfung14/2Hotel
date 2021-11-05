-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2021 at 05:58 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `covid19_sup`
--

CREATE TABLE `covid19_sup` (
  `id_country` int(11) NOT NULL,
  `cont_Name` varchar(128) NOT NULL,
  `cont_Restricted` tinyint(1) NOT NULL,
  `cont_Quarantine` int(100) NOT NULL,
  `cont_HDocument` varchar(128) NOT NULL,
  `cont_HDocumentAV` tinyint(1) NOT NULL,
  `cont_HTesting` tinyint(1) NOT NULL,
  `cont_Mask` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid19_sup`
--

INSERT INTO `covid19_sup` (`id_country`, `cont_Name`, `cont_Restricted`, `cont_Quarantine`, `cont_HDocument`, `cont_HDocumentAV`, `cont_HTesting`, `cont_Mask`) VALUES
(1, 'Malaysia', 0, 14, 'Modatory health document is require', 1, 0, 1),
(2, 'Singapore', 0, 14, 'My Travel Pass is Require before arrival in Malaysia', 1, 1, 1),
(4, 'Canada', 0, 14, 'Mandatory proof of vaccination', 1, 1, 1),
(5, 'UK', 1, 10, 'Mandatory passenger locator form', 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_list`
--

CREATE TABLE `hotel_list` (
  `hotel_Id` int(11) NOT NULL,
  `hotel_Name` varchar(128) NOT NULL,
  `hotel_Address` varchar(128) NOT NULL,
  `hotel_Country` varchar(128) NOT NULL,
  `hotel_State` varchar(128) NOT NULL,
  `hotel_Price` int(128) NOT NULL,
  `hotel_Vacc` tinyint(1) NOT NULL,
  `Facilities1` varchar(128) NOT NULL,
  `Facilities2` varchar(128) NOT NULL,
  `Facilities3` varchar(128) NOT NULL,
  `Facilities4` varchar(128) NOT NULL,
  `Facilities5` varchar(128) NOT NULL,
  `hotel_button` varchar(255) DEFAULT NULL,
  `hotel_Img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_list`
--

INSERT INTO `hotel_list` (`hotel_Id`, `hotel_Name`, `hotel_Address`, `hotel_Country`, `hotel_State`, `hotel_Price`, `hotel_Vacc`, `Facilities1`, `Facilities2`, `Facilities3`, `Facilities4`, `Facilities5`, `hotel_button`, `hotel_Img`) VALUES
(1, 'Flamingo Hotel ', 'Jalan Tanjung Bungah, 11200 Tanjung Bungah, Pulau Pinang', 'Malaysia', 'Penang', 212, 1, 'Breakfast', '', '', 'Pool', 'Gym\r\n', '1AflamingoH.php', 'img/Hotel A - 100_/Malaysia/Flamingo Hotel Penang/flaHotel_album_rs.png'),
(2, 'Gurney Gold Coast', '184 Persiaran Gurney, 10250 George Town, Malaysia', 'Malaysia', 'Penang', 137, 1, 'Tub', 'Breakfast', 'Beach', 'Pool', 'Gym', '1AGurneyH.php', 'img/Hotel A - 100_/Malaysia/Gurney Coast by Sky Hive/hotel_album1_resize.png'),
(3, 'Ink Hotel - Siam Road George Town ', '43 Jalan Siam, 10400 George Town, Malaysia', 'Malaysia', 'Penang', 98, 1, 'Beach', 'Tub', 'Breakfast', 'Gym', 'Pool', '1AInkH.php', 'img/Hotel A - 100_/Malaysia/Ink Hotel Penang/InkHotel_album_rs.png'),
(4, 'M summit 191 Executive Hotel Suites', '191 Jalan magazine, 10300 George Town , Malaysia', 'Malaysia', 'Penang', 278, 1, 'Pool', 'Beach', 'Gym', 'Breakfast', 'Tub', '1AMSummitH.php', 'img/Hotel A - 100_/Malaysia/M Summit Penang/MHotel_album3_rs.png'),
(5, 'WOW Hotel Penang', '406 Jalan Penang, 10000 George Town, Malaysia', 'Malaysia', 'Penang', 57, 1, 'Gym', 'Pool', 'Tub', 'Beach', 'Breakfast', '1AWOWH.php', 'img/Hotel A - 100_/Malaysia/WOW Hotel Penang/WowHotel_Album11_rs.png'),
(6, 'Alpine Inn & Suites', '1120 Hall Mines Road, V1L 1G6 Nelson, Canada ', 'Canada', 'Nelson', 434, 1, 'Beach', 'Gym', 'Breakfast', 'Tub', 'Pool', '1AAlpineH.php', 'img/Hotel A - 100_/Canada/Alpine Inn _ Suites/AlpineHotel_album1_rs.png'),
(7, 'PARKROYAL COLLECTION Pickering SGClean and Staycation Approved ', '1120 Hall Mines Road, V1L 1G6 Nelson, Canada ', 'Singapore', 'Chinatown', 264, 1, 'Gym', 'Pool', 'Tub', 'Breakfast', 'Beach', '1AParkH.php', 'img/Hotel A - 100_/Singpore/Parkroyal Singapore/ParkHotel_album1_rs.png'),
(8, 'The Scarlet Singapore (SG Clean, Staycation Approved) ', ' 33 Erskine Road, Chinatown, 069333 Singapore, Singapore ', 'Singapore', 'Chinatown', 519, 1, 'Breakfast', 'Tub', 'Beach', 'Gym', 'Pool', '1AScarletH.php', 'img/Hotel A - 100_/Singpore/The Scarlet Singapore/ScarleHotel_album2_rs.png'),
(9, 'ST Signature Bugis Beach (SG Clean, Staycation Approved) ', '85 Beach Rd, 189694 Singapore, Singapore ', 'Singapore', 'Chinatown', 386, 1, 'Tub', 'Beach', 'Breakfast', 'Gym', 'Pool', '1ABugisH.php', 'img/Hotel A - 100_/Singpore/ST Signature Bugis Beach/STHotel_album1_rs.png'),
(10, 'Similkameen Wild re-Treat Winery', '306 Sumac Road, Cawston, Canada', 'Canada', 'Cawston', 632, 1, 'Gym', 'Beach', 'Breakfast', 'Tub', 'Pool', '1ASimilH.php', 'img/Hotel A - 100_/Canada/Similkameen Wild/SimHotel_album1_rs.png'),
(11, 'Grange Clarendon Hotel ', '34-37 Bedford Place, Bloomsbury, Camden, London, WC1B 5JR, United Kingdom ', 'United Kingdom', 'London', 1191, 1, 'Breakfast', 'Tub', 'Beach', 'Pool', 'Gym', '1AGrangeH.php', 'img/Hotel A - 100_/United Kingdom/Grange Clarendon/GrangeHotel_album_rs.png'),
(12, 'Mercure London Park Hotel', '8-14 Talbot Sq, Paddington, Westminster Borough, London, W2 1TS, United Kingdom ', 'United Kingdom', 'London', 865, 1, 'Pool', 'Gym', 'Tub', 'Breakfast', 'Beach', '1AMercureH.php', 'img/Hotel A - 100_/United Kingdom/Mercure Hotel/MercureHotel_album.png'),
(13, 'Lotus Hotel Masjid India ', 'No.45, Jalan Melayu, 50100 Kuala Lumpur, Malaysia', 'Malaysia', 'Kuala Lumpur', 114, 0, 'Breakfast', 'Beach', 'Tub', 'Pool', 'Gym', '2BLotusH.php', 'img/Hotel B - 20_/Malaysia/Lotus Hotel/HHotel_album2_rs.png'),
(14, 'OYO 193 City Kuchai Hotel ', 'Located at City Kuchai Hotel #25, Jalan 2/115A, Taman Pagar Ruoyong, 58200 Kuala Lumpur,', 'Malaysia', 'Kuala Lumpur', 176, 0, 'Breakfast', 'Tub', 'Beach', 'Pool', 'Gym', '2BOYOH.php', 'img/Hotel B - 20_/Malaysia/OYO 193 City Kuchai Hotel/OYOHotel_album1_rs.png'),
(15, 'New Horizon Motel ', '2037 Hunter Frontage Road (Highway 3), V0H 1E2 Christina Lake, Canada ', 'Canada', 'Christina Lake', 317, 0, 'Gym', 'Tub', 'Beach', 'Pool', 'Breakfast', '2BHorizonH.php', 'img/Hotel B - 20_/Canada/New Horizon/horHotel_album3_rs.png'),
(16, 'Widus Inn ', '1180 6th Avenue NE, S9H 3T7 Swift Current, Canada	', 'Canada', 'Swift Current', 264, 0, 'Gym', 'Beach', 'Tub', 'Pool', 'Breakfast', '2BWindusH.php', 'img/Hotel B - 20_/Canada/Windus Inn/winHotel_album1_rs.png'),
(17, 'Hotel 81 Changi - SG Clean ', '428 Changi Road, 419871 Singapore, Singapore', 'Singapore', 'Jurong', 233, 0, 'Gym', 'Beach', 'Breakfast', 'Tub', 'Pool', '2BChangiH.php', 'img/Hotel B - 20_/Singapore/Hotel 81 Changi/ChanHotel_album2_rs.png'),
(18, 'Hotel 81 Sakura - SG Clean ', '181 Joo Chiat Road, Katong, 427452 Singapore, Singapore ', 'Singapore', 'Jurong', 157, 0, 'Gym', 'Beach', 'Tub', 'Pool', 'Breakfast', '2BSakuraH.php', 'img/Hotel B - 20_/Singapore/Hotel 81 Sakura/SaHotel_album2_rs.png'),
(19, 'Avonmore Hotel ', '57 Cartwright Gardens, Camden, London, WC1H 9EL, United Kingdom ', 'United Kingdom', 'London', 480, 0, 'Beach', 'Gym', 'Breakfast', 'Tub', 'Pool', '2BAvH.php', 'img/Hotel B - 20_/United Kingdom/Avonmore Hotel/AvHotel_album1_rs.png'),
(20, 'Royal London Hotel By Saba ', '43 Shepherds Bush Road, Hammersmith and Fulham, London, W6 7LU, United Kingdom ', 'United Kingdom', 'London', 368, 0, 'Pool', 'Beach', 'Breakfast', 'Tub', 'Gym', '2BRoyalH.php', 'img/Hotel B - 20_/United Kingdom/Royal London/RoyalHotel_album1_rs.png');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_room_list`
--

CREATE TABLE `hotel_room_list` (
  `roomId` int(11) NOT NULL,
  `roomType` varchar(128) NOT NULL,
  `roomImg` varchar(255) NOT NULL,
  `roomPeople` varchar(128) NOT NULL,
  `roomPrice` varchar(128) NOT NULL,
  `roomName` varchar(128) DEFAULT NULL,
  `roomDesc` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_room_list`
--

INSERT INTO `hotel_room_list` (`roomId`, `roomType`, `roomImg`, `roomPeople`, `roomPrice`, `roomName`, `roomDesc`) VALUES
(1, 'Deluex Room', 'img/Hotel A - 100_/Malaysia/Flamingo Hotel Penang/flaHotel_album_delux_room1.png', '3-5/Unit', 'RM219', 'FlamingoH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(2, 'Queen Deluxe', 'img/Hotel A - 100_/Malaysia/Gurney Coast by Sky Hive/Hotel_album4_Queen_Delux.png', '2-3/Unit', 'RM137', 'GurneyGCH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock Cabinet Free_toiletries'),
(3, 'Standard Double', 'img/Hotel A - 100_/Malaysia/Gurney Coast by Sky Hive/standard_double_bed.png', '2/Unit', 'RM108', 'GurneyGCH', 'Attached_Bathroom Flat_screen_TV Safey_Lock'),
(5, 'Deluxe Double', 'img/Hotel A - 100_/Malaysia/Ink Hotel Penang/InkHotel_album_deluxe_double4.png', '3/Unit', 'RM95', 'InkH', 'Attached_Bathroom Safey_Lock Flat_TV Cabin Tourist_Area_View'),
(6, 'Superior Double', 'img/Hotel A - 100_/Malaysia/Ink Hotel Penang/InkHotel_album_superior_double1.png', '2/Unit', 'RM80', 'InkH', 'Attached_Bathroom Safey_Lock'),
(7, 'Deluxe Suite', 'img/Hotel A - 100_/Malaysia/M Summit Penang/MHotel_album5.png', '4-5/Unite', 'RM276', 'MSummitH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(8, 'Serena Suite', 'img/Hotel A - 100_/Malaysia/M Summit Penang/MHotel_album6_baroque_suite.png', '5/Unite', 'RM286', 'MSummitH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(9, 'Baroque Suite', 'img/Hotel A - 100_/Malaysia/M Summit Penang/MHotel_album7_serene_suite3.png', '6-7/Unite', 'RM325', 'MSummitH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(10, 'Standard Double', 'img/Hotel A - 100_/Malaysia/WOW Hotel Penang/WowHotel_Album6_standard_twin_double.png', '2/Unit', 'RM57', 'WOWH', '\r\nAttached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(11, 'Superior Double', 'img/Hotel A - 100_/Malaysia/WOW Hotel Penang/WowHotel_Album7_superior_double.png', '3/Unit', 'RM106', 'WOWH', '\r\nAttached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(12, 'Queen Room', 'img/Hotel A - 100_/Canada/Alpine Inn _ Suites/AlpineHotel_album_King_Room2.png', '4-5/Unit', 'RM434', 'AlpineH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(13, 'King Room', 'img/Hotel A - 100_/Canada/Alpine Inn _ Suites/AlpineHotel_album_Queen_Room4.png', '4-5/Unit', 'RM632', 'AlpineH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock Bath_Tub Outdoor_View'),
(14, 'Queen Room', 'img/Hotel A - 100_/Canada/Similkameen Wild/SimHotel_album_King_Room1.png', '4-5/Unit', 'RM632', 'SimilH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(15, 'King Room', 'img/Hotel A - 100_/Canada/Similkameen Wild/SimHotel_album_Queen_Room1.png', '5-6/Unit', 'RM732', 'SimilH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(16, 'Signature Room', 'img/Hotel A - 100_/Singpore/Parkroyal Singapore/ParkHotel_album_signature_room3.png', '3/Unit', 'RM1190', 'ParkH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock Tourist_View Bath_Tub'),
(17, 'Urban Junior', 'img/Hotel A - 100_/Singpore/Parkroyal Singapore/ParkHotel_album_urban_junior1.png', '3/Unit', 'RM1426', 'ParkH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock Tourist_View Bath_Tub Free_Toiletry'),
(18, 'Cabin Room', 'img/Hotel A - 100_/Singpore/ST Signature Bugis Beach/STHotel_album_Cabin1.png', '3/Unit', 'RM386', 'BugisH', 'Attached_Bathroom Flat_screen_TV Beach_View Safey_Lock'),
(19, 'CabinXL Room ', 'img/Hotel A - 100_/Singpore/ST Signature Bugis Beach/STHotel_album_CabinXL1.png', '3-4/Unit', 'RM405', 'BugisH', 'Attached_Bathroom Flat_screen_TV Beach_View Safey_Lock Kitchen '),
(20, 'DELUXE DOUBLE', 'img/Hotel A - 100_/Singpore/The Scarlet Singapore/ScarleHotel_album_deluxe_double2.png', '3-4/Unit', 'RM519', 'ScarH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(21, 'EXECUTIVE DOUBLE', 'img/Hotel A - 100_/Singpore/The Scarlet Singapore/ScarleHotel_album_executive_double2.png', '3-4/Unit', 'RM579', 'ScarH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(22, 'Double Room', 'img/Hotel A - 100_/United Kingdom/Grange Clarendon/GrangeHotel_album_double_room2.png', '2/Unit', 'RM1191', 'GrangeH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(23, 'Double Room', 'img/Hotel A - 100_/United Kingdom/Grange Clarendon/Mercure Hotel/MHotel_album_double_room1.png', '2/Unit', 'RM865', 'MercureH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(24, 'Superior Double', 'img/Hotel B - 20_/Malaysia/Lotus Hotel/HHotel_album_superior_double1.png', '2-3/Unit', 'RM114', 'LotusH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(25, 'Double Room', 'img/Hotel B - 20_/Malaysia/OYO 193 City Kuchai Hotel/OYOHotel_album_double2.png', '2/Unit', 'RM176', 'OYOH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(26, 'Family Room', 'img/Hotel B - 20_/Malaysia/OYO 193 City Kuchai Hotel/OYOHotel_album_family2.png', '3-5/Unit', 'RM233', 'OYOH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(27, 'Queen Room ', 'img/Hotel B - 20_/Canada/New Horizon/horHotel_album_Queen_Roomo 2.png', '2-3/Unit', 'RM317', 'HorizonH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(28, 'Deluxe Double Room ', 'img/Hotel B - 20_/Canada/Windus Inn/winHotel_album_delux_double3.png', '2/Unit', 'RM264', 'WinH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(31, 'Superior Double', 'img/Hotel B - 20_/Singapore/Hotel 81 Changi/ChanHotel_album_Superior_doble1.png', '2/Unit', 'RM233', 'ChangiH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(34, 'Superior Double Room', 'img/Hotel B - 20_/Singapore/Hotel 81 Sakura/SaHotel_album_double_room3.png', '2/Unit', 'RM157', 'SakuraH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(35, 'Single Room', 'img/Hotel B - 20_/United Kingdom/Avonmore Hotel/AvHotel_album_single2.png', '1/Unit', 'RM480', 'AvonH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock'),
(36, 'Twin Single Room', 'img/Hotel B - 20_/United Kingdom/Royal London/RoyalHotel_album_Twin3.png', '2/Unit', 'RM423', 'RoyalH', 'Attached_Bathroom Flat_screen_TV Mini_Bar Beach_View Safey_Lock');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userId` int(11) NOT NULL,
  `userName` varchar(128) NOT NULL,
  `userEmail` varchar(128) NOT NULL,
  `userUid` varchar(128) NOT NULL,
  `userPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `userName`, `userEmail`, `userUid`, `userPwd`) VALUES
(3, 'Kross', 'kross@gmail.com', 'Kross12', '$2y$10$j03WQikyP2cEFQRRjhTHOeVKsRb3dSyrbwFyN83uzbWA3stRmwd0a'),
(4, 'Lee Wen Fung', 'wenfung14@gmail.com', 'Frank', '$2y$10$W4teuT.Me5UUhTBrXXVO7.4AhwKFWa8ZHDX/JwVPnMmIOayQCyMZm'),
(5, 'wenfung', 'wenfung12@gmail.com', 'wenfung', '$2y$10$U/glkqgv5hZBGAiOxT.FF.tC9BdslXfA1VycRwUiKDxskmr7IoIxm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `covid19_sup`
--
ALTER TABLE `covid19_sup`
  ADD PRIMARY KEY (`id_country`);

--
-- Indexes for table `hotel_list`
--
ALTER TABLE `hotel_list`
  ADD PRIMARY KEY (`hotel_Id`);

--
-- Indexes for table `hotel_room_list`
--
ALTER TABLE `hotel_room_list`
  ADD PRIMARY KEY (`roomId`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `covid19_sup`
--
ALTER TABLE `covid19_sup`
  MODIFY `id_country` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hotel_list`
--
ALTER TABLE `hotel_list`
  MODIFY `hotel_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `hotel_room_list`
--
ALTER TABLE `hotel_room_list`
  MODIFY `roomId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
