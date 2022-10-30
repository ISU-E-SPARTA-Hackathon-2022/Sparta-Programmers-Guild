-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2022 at 11:50 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparta`
--

-- --------------------------------------------------------

--
-- Table structure for table `agriculture`
--

CREATE TABLE `agriculture` (
  `id` int(11) NOT NULL,
  `year` date DEFAULT NULL,
  `barangay_id` int(11) DEFAULT NULL,
  `agri` int(11) DEFAULT NULL,
  `livestock` int(11) DEFAULT NULL,
  `fishing` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `barangay`
--

CREATE TABLE `barangay` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `household` int(11) DEFAULT NULL,
  `population_male` int(11) DEFAULT NULL,
  `population_female` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `calamity`
--

CREATE TABLE `calamity` (
  `id` int(11) NOT NULL,
  `year` date DEFAULT NULL,
  `barangay_id` int(11) DEFAULT NULL,
  `flood` int(11) DEFAULT NULL,
  `droughts` int(11) DEFAULT NULL,
  `water supply` int(11) DEFAULT NULL,
  `brownouts` int(11) DEFAULT NULL,
  `moving_out` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `demography_basic_education`
--

CREATE TABLE `demography_basic_education` (
  `id` int(11) NOT NULL,
  `year` date DEFAULT NULL,
  `barangay_id` int(11) DEFAULT NULL,
  `elem_6_11_male` int(11) DEFAULT NULL,
  `elem_6_11_female` int(11) DEFAULT NULL,
  `elem_6_12_male` int(11) DEFAULT NULL,
  `elem_6_12_female` int(11) DEFAULT NULL,
  `hs_12_15_male` int(11) DEFAULT NULL,
  `hs_12_15_female` int(11) DEFAULT NULL,
  `hs_13_16_male` int(11) DEFAULT NULL,
  `hs_13_16_female` int(11) DEFAULT NULL,
  `s_6_15_male` int(11) DEFAULT NULL,
  `s_6_15_female` int(11) DEFAULT NULL,
  `s_6_16_male` int(11) DEFAULT NULL,
  `s_6_16_female` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `demography_health_nutrition`
--

CREATE TABLE `demography_health_nutrition` (
  `id` int(11) NOT NULL,
  `year` date DEFAULT NULL,
  `barangay_id` int(11) DEFAULT NULL,
  `5_died_male` int(11) DEFAULT NULL,
  `5_died_female` int(11) DEFAULT NULL,
  `died_preg` int(11) DEFAULT NULL,
  `mal_0_5_male` int(11) DEFAULT NULL,
  `mal_0_5_female` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `demography_housing`
--

CREATE TABLE `demography_housing` (
  `id` int(11) NOT NULL,
  `year` date DEFAULT NULL,
  `barangay_id` int(11) DEFAULT NULL,
  `makeshift_male` int(11) DEFAULT NULL,
  `makeshift_female` int(11) DEFAULT NULL,
  `informal_settler_male` int(11) DEFAULT NULL,
  `informal_settler_female` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `demography_income_livelihood`
--

CREATE TABLE `demography_income_livelihood` (
  `id` int(11) NOT NULL,
  `year` date DEFAULT NULL,
  `barangay_id` int(11) DEFAULT NULL,
  `poverty_male` int(11) DEFAULT NULL,
  `poverty_female` int(11) DEFAULT NULL,
  `food_threshold_male` int(11) DEFAULT NULL,
  `food_threshold_female` int(11) DEFAULT NULL,
  `food_shortage_male` int(11) DEFAULT NULL,
  `food_shortage_female` int(11) DEFAULT NULL,
  `labor_force_male` int(11) DEFAULT NULL,
  `labor_force_female` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `demography_peace_order`
--

CREATE TABLE `demography_peace_order` (
  `id` int(11) NOT NULL,
  `year` date DEFAULT NULL,
  `barangay_id` int(11) DEFAULT NULL,
  `victims` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `demography_population`
--

CREATE TABLE `demography_population` (
  `id` int(11) NOT NULL,
  `year` date DEFAULT NULL,
  `barangay_id` int(11) DEFAULT NULL,
  `c_under1_male` int(11) DEFAULT NULL,
  `c_under1_female` int(11) DEFAULT NULL,
  `c_under5_male` int(11) DEFAULT NULL,
  `c_under5_female` int(11) DEFAULT NULL,
  `c_0_5_male` int(11) DEFAULT NULL,
  `c_0_5_female` int(11) DEFAULT NULL,
  `c_6_11_male` int(11) DEFAULT NULL,
  `c_6_11_female` int(11) DEFAULT NULL,
  `m_12_15_male` int(11) DEFAULT NULL,
  `m_12_15_female` int(11) DEFAULT NULL,
  `m_13_16_male` int(11) DEFAULT NULL,
  `m_13_16_female` int(11) DEFAULT NULL,
  `m_6_15_male` int(11) DEFAULT NULL,
  `m_6_15_female` int(11) DEFAULT NULL,
  `m_6_16_male` int(11) DEFAULT NULL,
  `m_6_16_female` int(11) DEFAULT NULL,
  `m_10_above_male` int(11) DEFAULT NULL,
  `m_10_above_female` int(11) DEFAULT NULL,
  `m_labor_force_male` int(11) DEFAULT NULL,
  `m_labor_force_female` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `demography_water_sanitation`
--

CREATE TABLE `demography_water_sanitation` (
  `id` int(11) NOT NULL,
  `year` date DEFAULT NULL,
  `barangay_id` int(11) DEFAULT NULL,
  `safe_water_male` int(11) DEFAULT NULL,
  `safe_water_female` int(11) DEFAULT NULL,
  `sanitation_male` int(11) DEFAULT NULL,
  `sanitation_female` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `entreprenurial`
--

CREATE TABLE `entreprenurial` (
  `id` int(11) NOT NULL,
  `year` date DEFAULT NULL,
  `barangay_id` int(11) DEFAULT NULL,
  `farming` int(11) DEFAULT NULL,
  `livestock` int(11) DEFAULT NULL,
  `fishing` int(11) DEFAULT NULL,
  `forestry` int(11) DEFAULT NULL,
  `wholesale_retail` int(11) DEFAULT NULL,
  `manufacturing` int(11) DEFAULT NULL,
  `community_social_personal` int(11) DEFAULT NULL,
  `trans_store_comm` int(11) DEFAULT NULL,
  `mining_quarry` int(11) DEFAULT NULL,
  `construction` int(11) DEFAULT NULL,
  `other` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `garbage_collection`
--

CREATE TABLE `garbage_collection` (
  `id` int(11) NOT NULL,
  `year` date DEFAULT NULL,
  `barangay_id` int(11) DEFAULT NULL,
  `collected` int(11) DEFAULT NULL,
  `burned` int(11) DEFAULT NULL,
  `composted` int(11) DEFAULT NULL,
  `recycled` int(11) DEFAULT NULL,
  `segregated` int(11) DEFAULT NULL,
  `dumped_closed_pit` int(11) DEFAULT NULL,
  `dumped_open_pit` int(11) DEFAULT NULL,
  `other` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ofw`
--

CREATE TABLE `ofw` (
  `id` int(11) NOT NULL,
  `year` date DEFAULT NULL,
  `barangay_id` int(11) DEFAULT NULL,
  `all_population_male` int(11) DEFAULT NULL,
  `all_population_female` int(11) DEFAULT NULL,
  `ofw_male` int(11) DEFAULT NULL,
  `ofw_female` int(11) DEFAULT NULL,
  `non_working` int(11) DEFAULT NULL,
  `employed` int(11) DEFAULT NULL,
  `unemployed` int(11) DEFAULT NULL,
  `underemployed` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `special_case`
--

CREATE TABLE `special_case` (
  `id` int(11) NOT NULL,
  `year` date DEFAULT NULL,
  `barangay_id` int(11) DEFAULT NULL,
  `pwd_male` int(11) DEFAULT NULL,
  `pwd_female` int(11) DEFAULT NULL,
  `senior_male` int(11) DEFAULT NULL,
  `senior_female` int(11) DEFAULT NULL,
  `solo_parent_male` int(11) DEFAULT NULL,
  `solo_parent_female` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `toilet_facility`
--

CREATE TABLE `toilet_facility` (
  `id` int(11) NOT NULL,
  `year` date DEFAULT NULL,
  `barangay_id` int(11) DEFAULT NULL,
  `sewer_single_family` int(11) DEFAULT NULL,
  `sewer_multiple_family` int(11) DEFAULT NULL,
  `depo_single_family` int(11) DEFAULT NULL,
  `depo_multiple_family` int(11) DEFAULT NULL,
  `closed_pit` int(11) DEFAULT NULL,
  `open_pit` int(11) DEFAULT NULL,
  `others` int(11) DEFAULT NULL,
  `none` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agriculture`
--
ALTER TABLE `agriculture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `barangay`
--
ALTER TABLE `barangay`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calamity`
--
ALTER TABLE `calamity`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `demography_basic_education`
--
ALTER TABLE `demography_basic_education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `demography_health_nutrition`
--
ALTER TABLE `demography_health_nutrition`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `demography_housing`
--
ALTER TABLE `demography_housing`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `demography_income_livelihood`
--
ALTER TABLE `demography_income_livelihood`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `demography_peace_order`
--
ALTER TABLE `demography_peace_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `demography_population`
--
ALTER TABLE `demography_population`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `demography_water_sanitation`
--
ALTER TABLE `demography_water_sanitation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `entreprenurial`
--
ALTER TABLE `entreprenurial`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `garbage_collection`
--
ALTER TABLE `garbage_collection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `ofw`
--
ALTER TABLE `ofw`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `special_case`
--
ALTER TABLE `special_case`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- Indexes for table `toilet_facility`
--
ALTER TABLE `toilet_facility`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barangay_id` (`barangay_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agriculture`
--
ALTER TABLE `agriculture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `barangay`
--
ALTER TABLE `barangay`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `calamity`
--
ALTER TABLE `calamity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `demography_basic_education`
--
ALTER TABLE `demography_basic_education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `demography_health_nutrition`
--
ALTER TABLE `demography_health_nutrition`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `demography_housing`
--
ALTER TABLE `demography_housing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `demography_income_livelihood`
--
ALTER TABLE `demography_income_livelihood`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `demography_peace_order`
--
ALTER TABLE `demography_peace_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `demography_population`
--
ALTER TABLE `demography_population`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `demography_water_sanitation`
--
ALTER TABLE `demography_water_sanitation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `entreprenurial`
--
ALTER TABLE `entreprenurial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `garbage_collection`
--
ALTER TABLE `garbage_collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ofw`
--
ALTER TABLE `ofw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `special_case`
--
ALTER TABLE `special_case`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `toilet_facility`
--
ALTER TABLE `toilet_facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agriculture`
--
ALTER TABLE `agriculture`
  ADD CONSTRAINT `agriculture_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `calamity`
--
ALTER TABLE `calamity`
  ADD CONSTRAINT `calamity_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `demography_basic_education`
--
ALTER TABLE `demography_basic_education`
  ADD CONSTRAINT `demography_basic_education_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `demography_health_nutrition`
--
ALTER TABLE `demography_health_nutrition`
  ADD CONSTRAINT `demography_health_nutrition_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `demography_housing`
--
ALTER TABLE `demography_housing`
  ADD CONSTRAINT `demography_housing_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `demography_income_livelihood`
--
ALTER TABLE `demography_income_livelihood`
  ADD CONSTRAINT `demography_income_livelihood_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `demography_peace_order`
--
ALTER TABLE `demography_peace_order`
  ADD CONSTRAINT `demography_peace_order_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `demography_population`
--
ALTER TABLE `demography_population`
  ADD CONSTRAINT `demography_population_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `demography_water_sanitation`
--
ALTER TABLE `demography_water_sanitation`
  ADD CONSTRAINT `demography_water_sanitation_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `entreprenurial`
--
ALTER TABLE `entreprenurial`
  ADD CONSTRAINT `entreprenurial_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `garbage_collection`
--
ALTER TABLE `garbage_collection`
  ADD CONSTRAINT `garbage_collection_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ofw`
--
ALTER TABLE `ofw`
  ADD CONSTRAINT `ofw_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `special_case`
--
ALTER TABLE `special_case`
  ADD CONSTRAINT `special_case_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `toilet_facility`
--
ALTER TABLE `toilet_facility`
  ADD CONSTRAINT `toilet_facility_ibfk_1` FOREIGN KEY (`barangay_id`) REFERENCES `barangay` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
