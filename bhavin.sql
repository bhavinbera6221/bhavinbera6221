-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2022 at 12:45 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bhavin`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(3) NOT NULL,
  `city_name` varchar(20) NOT NULL,
  `state_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `state_id`) VALUES
(1, 'North and Middle And', '32'),
(2, 'South Andaman', '32'),
(3, 'Nicobar', '32'),
(4, 'Adilabad', '1'),
(5, 'Anantapur', '1'),
(6, 'Chittoor', '1'),
(7, 'East Godavari', '1'),
(8, 'Guntur', '1'),
(9, 'Hyderabad', '1'),
(10, 'Kadapa', '1'),
(11, 'Karimnagar', '1'),
(12, 'Khammam', '1'),
(13, 'Krishna', '1'),
(14, 'Kurnool', '1'),
(15, 'Mahbubnagar', '1'),
(16, 'Medak', '1'),
(17, 'Nalgonda', '1'),
(18, 'Nellore', '1'),
(19, 'Nizamabad', '1'),
(20, 'Prakasam', '1'),
(21, 'Rangareddi', '1'),
(22, 'Srikakulam', '1'),
(23, 'Vishakhapatnam', '1'),
(24, 'Vizianagaram', '1'),
(25, 'Warangal', '1'),
(26, 'West Godavari', '1'),
(27, 'Anjaw', '3'),
(28, 'Changlang', '3'),
(29, 'East Kameng', '3'),
(30, 'Lohit', '3'),
(31, 'Lower Subansiri', '3'),
(32, 'Papum Pare', '3'),
(33, 'Tirap', '3'),
(34, 'Dibang Valley', '3'),
(35, 'Upper Subansiri', '3'),
(36, 'West Kameng', '3'),
(37, 'Barpeta', '2'),
(38, 'Bongaigaon', '2'),
(39, 'Cachar', '2'),
(40, 'Darrang', '2'),
(41, 'Dhemaji', '2'),
(42, 'Dhubri', '2'),
(43, 'Dibrugarh', '2'),
(44, 'Goalpara', '2'),
(45, 'Golaghat', '2'),
(46, 'Hailakandi', '2'),
(47, 'Jorhat', '2'),
(48, 'Karbi Anglong', '2'),
(49, 'Karimganj', '2'),
(50, 'Kokrajhar', '2'),
(51, 'Lakhimpur', '2'),
(52, 'Marigaon', '2'),
(53, 'Nagaon', '2'),
(54, 'Nalbari', '2'),
(55, 'North Cachar Hills', '2'),
(56, 'Sibsagar', '2'),
(57, 'Sonitpur', '2'),
(58, 'Tinsukia', '2'),
(59, 'Araria', '4'),
(60, 'Aurangabad', '4'),
(61, 'Banka', '4'),
(62, 'Begusarai', '4'),
(63, 'Bhagalpur', '4'),
(64, 'Bhojpur', '4'),
(65, 'Buxar', '4'),
(66, 'Darbhanga', '4'),
(67, 'Purba Champaran', '4'),
(68, 'Gaya', '4'),
(69, 'Gopalganj', '4'),
(70, 'Jamui', '4'),
(71, 'Jehanabad', '4'),
(72, 'Khagaria', '4'),
(73, 'Kishanganj', '4'),
(74, 'Kaimur', '4'),
(75, 'Katihar', '4'),
(76, 'Lakhisarai', '4'),
(77, 'Madhubani', '4'),
(78, 'Munger', '4'),
(79, 'Madhepura', '4'),
(80, 'Muzaffarpur', '4'),
(81, 'Nalanda', '4'),
(82, 'Nawada', '4'),
(83, 'Patna', '4'),
(84, 'Purnia', '4'),
(85, 'Rohtas', '4'),
(86, 'Saharsa', '4'),
(87, 'Samastipur', '4'),
(88, 'Sheohar', '4'),
(89, 'Sheikhpura', '4'),
(90, 'Saran', '4'),
(91, 'Sitamarhi', '4'),
(92, 'Supaul', '4'),
(93, 'Siwan', '4'),
(94, 'Vaishali', '4'),
(95, 'Pashchim Champaran', '4'),
(96, 'Bastar', '36'),
(97, 'Bilaspur', '36'),
(98, 'Dantewada', '36'),
(99, 'Dhamtari', '36'),
(100, 'Durg', '36'),
(101, 'Jashpur', '36'),
(102, 'Janjgir-Champa', '36'),
(103, 'Korba', '36'),
(104, 'Koriya', '36'),
(105, 'Kanker', '36'),
(106, 'Kawardha', '36'),
(107, 'Mahasamund', '36'),
(108, 'Raigarh', '36'),
(109, 'Rajnandgaon', '36'),
(110, 'Raipur', '36'),
(111, 'Surguja', '36'),
(112, 'Diu', '29'),
(113, 'Daman', '29'),
(114, 'Central Delhi', '25'),
(115, 'East Delhi', '25'),
(116, 'New Delhi', '25'),
(117, 'North Delhi', '25'),
(118, 'North East Delhi', '25'),
(119, 'North West Delhi', '25'),
(120, 'South Delhi', '25'),
(121, 'South West Delhi', '25'),
(122, 'West Delhi', '25'),
(123, 'North Goa', '26'),
(124, 'South Goa', '26'),
(125, 'Ahmedabad', '5'),
(126, 'Amreli District', '5'),
(127, 'Anand', '5'),
(128, 'Banaskantha', '5'),
(129, 'Bharuch', '5'),
(130, 'Bhavnagar', '5'),
(131, 'Dahod', '5'),
(132, 'The Dangs', '5'),
(133, 'Gandhinagar', '5'),
(134, 'Jamnagar', '5'),
(135, 'Junagadh', '5'),
(136, 'Kutch', '5'),
(137, 'Kheda', '5'),
(138, 'Mehsana', '5'),
(139, 'Narmada', '5'),
(140, 'Navsari', '5'),
(141, 'Patan', '5'),
(142, 'Panchmahal', '5'),
(143, 'Porbandar', '5'),
(144, 'Rajkot', '5'),
(145, 'Sabarkantha', '5'),
(146, 'Surendranagar', '5'),
(147, 'Surat', '5'),
(148, 'Vadodara', '5'),
(149, 'Valsad', '5'),
(150, 'Ambala', '6'),
(151, 'Bhiwani', '6'),
(152, 'Faridabad', '6'),
(153, 'Fatehabad', '6'),
(154, 'Gurgaon', '6'),
(155, 'Hissar', '6'),
(156, 'Jhajjar', '6'),
(157, 'Jind', '6'),
(158, 'Karnal', '6'),
(159, 'Kaithal', '6'),
(160, 'Kurukshetra', '6'),
(161, 'Mahendragarh', '6'),
(162, 'Mewat', '6'),
(163, 'Panchkula', '6'),
(164, 'Panipat', '6'),
(165, 'Rewari', '6'),
(166, 'Rohtak', '6'),
(167, 'Sirsa', '6'),
(168, 'Sonepat', '6'),
(169, 'Yamuna Nagar', '6'),
(170, 'Palwal', '6'),
(171, 'Bilaspur', '7'),
(172, 'Chamba', '7'),
(173, 'Hamirpur', '7'),
(174, 'Kangra', '7'),
(175, 'Kinnaur', '7'),
(176, 'Kulu', '7'),
(177, 'Lahaul and Spiti', '7'),
(178, 'Mandi', '7'),
(179, 'Shimla', '7'),
(180, 'Sirmaur', '7'),
(181, 'Solan', '7'),
(182, 'Una', '7'),
(183, 'Anantnag', '8'),
(184, 'Badgam', '8'),
(185, 'Bandipore', '8'),
(186, 'Baramula', '8'),
(187, 'Doda', '8'),
(188, 'Jammu', '8'),
(189, 'Kargil', '8'),
(190, 'Kathua', '8'),
(191, 'Kupwara', '8'),
(192, 'Leh', '8'),
(193, 'Poonch', '8'),
(194, 'Pulwama', '8'),
(195, 'Rajauri', '8'),
(196, 'Srinagar', '8'),
(197, 'Samba', '8'),
(198, 'Udhampur', '8'),
(199, 'Bokaro', '34'),
(200, 'Chatra', '34'),
(201, 'Deoghar', '34'),
(202, 'Dhanbad', '34'),
(203, 'Dumka', '34'),
(204, 'Purba Singhbhum', '34'),
(205, 'Garhwa', '34'),
(206, 'Giridih', '34'),
(207, 'Godda', '34'),
(208, 'Gumla', '34'),
(209, 'Hazaribagh', '34'),
(210, 'Koderma', '34'),
(211, 'Lohardaga', '34'),
(212, 'Pakur', '34'),
(213, 'Palamu', '34'),
(214, 'Ranchi', '34'),
(215, 'Sahibganj', '34'),
(216, 'Seraikela and Kharsa', '34'),
(217, 'Pashchim Singhbhum', '34'),
(218, 'Ramgarh', '34'),
(219, 'Bidar', '9'),
(220, 'Belgaum', '9'),
(221, 'Bijapur', '9'),
(222, 'Bagalkot', '9'),
(223, 'Bellary', '9'),
(224, 'Bangalore Rural Dist', '9'),
(225, 'Bangalore Urban Dist', '9'),
(226, 'Chamarajnagar', '9'),
(227, 'Chikmagalur', '9'),
(228, 'Chitradurga', '9'),
(229, 'Davanagere', '9'),
(230, 'Dharwad', '9'),
(231, 'Dakshina Kannada', '9'),
(232, 'Gadag', '9'),
(233, 'Gulbarga', '9'),
(234, 'Hassan', '9'),
(235, 'Haveri District', '9'),
(236, 'Kodagu', '9'),
(237, 'Kolar', '9'),
(238, 'Koppal', '9'),
(239, 'Mandya', '9'),
(240, 'Mysore', '9'),
(241, 'Raichur', '9'),
(242, 'Shimoga', '9'),
(243, 'Tumkur', '9'),
(244, 'Udupi', '9'),
(245, 'Uttara Kannada', '9'),
(246, 'Ramanagara', '9'),
(247, 'Chikballapur', '9'),
(248, 'Yadagiri', '9'),
(249, 'Alappuzha', '10'),
(250, 'Ernakulam', '10'),
(251, 'Idukki', '10'),
(252, 'Kollam', '10'),
(253, 'Kannur', '10'),
(254, 'Kasaragod', '10'),
(255, 'Kottayam', '10'),
(256, 'Kozhikode', '10'),
(257, 'Malappuram', '10'),
(258, 'Palakkad', '10'),
(259, 'Pathanamthitta', '10'),
(260, 'Thrissur', '10'),
(261, 'Thiruvananthapuram', '10'),
(262, 'Wayanad', '10'),
(263, 'Alirajpur', '11'),
(264, 'Anuppur', '11'),
(265, 'Ashok Nagar', '11'),
(266, 'Balaghat', '11'),
(267, 'Barwani', '11'),
(268, 'Betul', '11'),
(269, 'Bhind', '11'),
(270, 'Bhopal', '11'),
(271, 'Burhanpur', '11'),
(272, 'Chhatarpur', '11'),
(273, 'Chhindwara', '11'),
(274, 'Damoh', '11'),
(275, 'Datia', '11'),
(276, 'Dewas', '11'),
(277, 'Dhar', '11'),
(278, 'Dindori', '11'),
(279, 'Guna', '11'),
(280, 'Gwalior', '11'),
(281, 'Harda', '11'),
(282, 'Hoshangabad', '11'),
(283, 'Indore', '11'),
(284, 'Jabalpur', '11'),
(285, 'Jhabua', '11'),
(286, 'Katni', '11'),
(287, 'Khandwa', '11'),
(288, 'Khargone', '11'),
(289, 'Mandla', '11'),
(290, 'Mandsaur', '11'),
(291, 'Morena', '11'),
(292, 'Narsinghpur', '11'),
(293, 'Neemuch', '11'),
(294, 'Panna', '11'),
(295, 'Rewa', '11'),
(296, 'Rajgarh', '11'),
(297, 'Ratlam', '11'),
(298, 'Raisen', '11'),
(299, 'Sagar', '11'),
(300, 'Satna', '11'),
(301, 'Sehore', '11'),
(302, 'Seoni', '11'),
(303, 'Shahdol', '11'),
(304, 'Shajapur', '11'),
(305, 'Sheopur', '11'),
(306, 'Shivpuri', '11'),
(307, 'Sidhi', '11'),
(308, 'Singrauli', '11'),
(309, 'Tikamgarh', '11'),
(310, 'Ujjain', '11'),
(311, 'Umaria', '11'),
(312, 'Vidisha', '11'),
(313, 'Ahmednagar', '12'),
(314, 'Akola', '12'),
(315, 'Amrawati', '12'),
(316, 'Aurangabad', '12'),
(317, 'Bhandara', '12'),
(318, 'Beed', '12'),
(319, 'Buldhana', '12'),
(320, 'Chandrapur', '12'),
(321, 'Dhule', '12'),
(322, 'Gadchiroli', '12'),
(323, 'Gondiya', '12'),
(324, 'Hingoli', '12'),
(325, 'Jalgaon', '12'),
(326, 'Jalna', '12'),
(327, 'Kolhapur', '12'),
(328, 'Latur', '12'),
(329, 'Mumbai City', '12'),
(330, 'Mumbai suburban', '12'),
(331, 'Nandurbar', '12'),
(332, 'Nanded', '12'),
(333, 'Nagpur', '12'),
(334, 'Nashik', '12'),
(335, 'Osmanabad', '12'),
(336, 'Parbhani', '12'),
(337, 'Pune', '12'),
(338, 'Raigad', '12'),
(339, 'Ratnagiri', '12'),
(340, 'Sindhudurg', '12'),
(341, 'Sangli', '12'),
(342, 'Solapur', '12'),
(343, 'Satara', '12'),
(344, 'Thane', '12'),
(345, 'Wardha', '12'),
(346, 'Washim', '12'),
(347, 'Yavatmal', '12'),
(348, 'Bishnupur', '13'),
(349, 'Churachandpur', '13'),
(350, 'Chandel', '13'),
(351, 'Imphal East', '13'),
(352, 'Senapati', '13'),
(353, 'Tamenglong', '13'),
(354, 'Thoubal', '13'),
(355, 'Ukhrul', '13'),
(356, 'Imphal West', '13'),
(357, 'East Garo Hills', '14'),
(358, 'East Khasi Hills', '14'),
(359, 'Jaintia Hills', '14'),
(360, 'Ri-Bhoi', '14'),
(361, 'South Garo Hills', '14'),
(362, 'West Garo Hills', '14'),
(363, 'West Khasi Hills', '14'),
(364, 'Aizawl', '15'),
(365, 'Champhai', '15'),
(366, 'Kolasib', '15'),
(367, 'Lawngtlai', '15'),
(368, 'Lunglei', '15'),
(369, 'Mamit', '15'),
(370, 'Saiha', '15'),
(371, 'Serchhip', '15'),
(372, 'Dimapur', '16'),
(373, 'Kohima', '16'),
(374, 'Mokokchung', '16'),
(375, 'Mon', '16'),
(376, 'Phek', '16'),
(377, 'Tuensang', '16'),
(378, 'Wokha', '16'),
(379, 'Zunheboto', '16'),
(380, 'Angul', '17'),
(381, 'Boudh', '17'),
(382, 'Bhadrak', '17'),
(383, 'Bolangir', '17'),
(384, 'Bargarh', '17'),
(385, 'Baleswar', '17'),
(386, 'Cuttack', '17'),
(387, 'Debagarh', '17'),
(388, 'Dhenkanal', '17'),
(389, 'Ganjam', '17'),
(390, 'Gajapati', '17'),
(391, 'Jharsuguda', '17'),
(392, 'Jajapur', '17'),
(393, 'Jagatsinghpur', '17'),
(394, 'Khordha', '17'),
(395, 'Kendujhar', '17'),
(396, 'Kalahandi', '17'),
(397, 'Kandhamal', '17'),
(398, 'Koraput', '17'),
(399, 'Kendrapara', '17'),
(400, 'Malkangiri', '17'),
(401, 'Mayurbhanj', '17'),
(402, 'Nabarangpur', '17'),
(403, 'Nuapada', '17'),
(404, 'Nayagarh', '17'),
(405, 'Puri', '17'),
(406, 'Rayagada', '17'),
(407, 'Sambalpur', '17'),
(408, 'Subarnapur', '17'),
(409, 'Sundargarh', '17'),
(410, 'Karaikal', '27'),
(411, 'Mahe', '27'),
(412, 'Puducherry', '27'),
(413, 'Yanam', '27'),
(414, 'Amritsar', '18'),
(415, 'Bathinda', '18'),
(416, 'Firozpur', '18'),
(417, 'Faridkot', '18'),
(418, 'Fatehgarh Sahib', '18'),
(419, 'Gurdaspur', '18'),
(420, 'Hoshiarpur', '18'),
(421, 'Jalandhar', '18'),
(422, 'Kapurthala', '18'),
(423, 'Ludhiana', '18'),
(424, 'Mansa', '18'),
(425, 'Moga', '18'),
(426, 'Mukatsar', '18'),
(427, 'Nawan Shehar', '18'),
(428, 'Patiala', '18'),
(429, 'Rupnagar', '18'),
(430, 'Sangrur', '18'),
(431, 'Ajmer', '19'),
(432, 'Alwar', '19'),
(433, 'Bikaner', '19'),
(434, 'Barmer', '19'),
(435, 'Banswara', '19'),
(436, 'Bharatpur', '19'),
(437, 'Baran', '19'),
(438, 'Bundi', '19'),
(439, 'Bhilwara', '19'),
(440, 'Churu', '19'),
(441, 'Chittorgarh', '19'),
(442, 'Dausa', '19'),
(443, 'Dholpur', '19'),
(444, 'Dungapur', '19'),
(445, 'Ganganagar', '19'),
(446, 'Hanumangarh', '19'),
(447, 'Juhnjhunun', '19'),
(448, 'Jalore', '19'),
(449, 'Jodhpur', '19'),
(450, 'Jaipur', '19'),
(451, 'Jaisalmer', '19'),
(452, 'Jhalawar', '19'),
(453, 'Karauli', '19'),
(454, 'Kota', '19'),
(455, 'Nagaur', '19'),
(456, 'Pali', '19'),
(457, 'Pratapgarh', '19'),
(458, 'Rajsamand', '19'),
(459, 'Sikar', '19'),
(460, 'Sawai Madhopur', '19'),
(461, 'Sirohi', '19'),
(462, 'Tonk', '19'),
(463, 'Udaipur', '19'),
(464, 'East Sikkim', '20'),
(465, 'North Sikkim', '20'),
(466, 'South Sikkim', '20'),
(467, 'West Sikkim', '20'),
(468, 'Ariyalur', '21'),
(469, 'Chennai', '21'),
(470, 'Coimbatore', '21'),
(471, 'Cuddalore', '21'),
(472, 'Dharmapuri', '21'),
(473, 'Dindigul', '21'),
(474, 'Erode', '21'),
(475, 'Kanchipuram', '21'),
(476, 'Kanyakumari', '21'),
(477, 'Karur', '21'),
(478, 'Madurai', '21'),
(479, 'Nagapattinam', '21'),
(480, 'The Nilgiris', '21'),
(481, 'Namakkal', '21'),
(482, 'Perambalur', '21'),
(483, 'Pudukkottai', '21'),
(484, 'Ramanathapuram', '21'),
(485, 'Salem', '21'),
(486, 'Sivagangai', '21'),
(487, 'Tiruppur', '21'),
(488, 'Tiruchirappalli', '21'),
(489, 'Theni', '21'),
(490, 'Tirunelveli', '21'),
(491, 'Thanjavur', '21'),
(492, 'Thoothukudi', '21'),
(493, 'Thiruvallur', '21'),
(494, 'Thiruvarur', '21'),
(495, 'Tiruvannamalai', '21'),
(496, 'Vellore', '21'),
(497, 'Villupuram', '21'),
(498, 'Dhalai', '22'),
(499, 'North Tripura', '22'),
(500, 'South Tripura', '22'),
(501, 'West Tripura', '22'),
(502, 'Almora', '33'),
(503, 'Bageshwar', '33'),
(504, 'Chamoli', '33'),
(505, 'Champawat', '33'),
(506, 'Dehradun', '33'),
(507, 'Haridwar', '33'),
(508, 'Nainital', '33'),
(509, 'Pauri Garhwal', '33'),
(510, 'Pithoragharh', '33'),
(511, 'Rudraprayag', '33'),
(512, 'Tehri Garhwal', '33'),
(513, 'Udham Singh Nagar', '33'),
(514, 'Uttarkashi', '33'),
(515, 'Agra', '23'),
(516, 'Allahabad', '23'),
(517, 'Aligarh', '23'),
(518, 'Ambedkar Nagar', '23'),
(519, 'Auraiya', '23'),
(520, 'Azamgarh', '23'),
(521, 'Barabanki', '23'),
(522, 'Badaun', '23'),
(523, 'Bagpat', '23'),
(524, 'Bahraich', '23'),
(525, 'Bijnor', '23'),
(526, 'Ballia', '23'),
(527, 'Banda', '23'),
(528, 'Balrampur', '23'),
(529, 'Bareilly', '23'),
(530, 'Basti', '23'),
(531, 'Bulandshahr', '23'),
(532, 'Chandauli', '23'),
(533, 'Chitrakoot', '23'),
(534, 'Deoria', '23'),
(535, 'Etah', '23'),
(536, 'Kanshiram Nagar', '23'),
(537, 'Etawah', '23'),
(538, 'Firozabad', '23'),
(539, 'Farrukhabad', '23'),
(540, 'Fatehpur', '23'),
(541, 'Faizabad', '23'),
(542, 'Gautam Buddha Nagar', '23'),
(543, 'Gonda', '23'),
(544, 'Ghazipur', '23'),
(545, 'Gorkakhpur', '23'),
(546, 'Ghaziabad', '23'),
(547, 'Hamirpur', '23'),
(548, 'Hardoi', '23'),
(549, 'Mahamaya Nagar', '23'),
(550, 'Jhansi', '23'),
(551, 'Jalaun', '23'),
(552, 'Jyotiba Phule Nagar', '23'),
(553, 'Jaunpur District', '23'),
(554, 'Kanpur Dehat', '23'),
(555, 'Kannauj', '23'),
(556, 'Kanpur Nagar', '23'),
(557, 'Kaushambi', '23'),
(558, 'Kushinagar', '23'),
(559, 'Lalitpur', '23'),
(560, 'Lakhimpur Kheri', '23'),
(561, 'Lucknow', '23'),
(562, 'Mau', '23'),
(563, 'Meerut', '23'),
(564, 'Maharajganj', '23'),
(565, 'Mahoba', '23'),
(566, 'Mirzapur', '23'),
(567, 'Moradabad', '23'),
(568, 'Mainpuri', '23'),
(569, 'Mathura', '23'),
(570, 'Muzaffarnagar', '23'),
(571, 'Pilibhit', '23'),
(572, 'Pratapgarh', '23'),
(573, 'Rampur', '23'),
(574, 'Rae Bareli', '23'),
(575, 'Saharanpur', '23'),
(576, 'Sitapur', '23'),
(577, 'Shahjahanpur', '23'),
(578, 'Sant Kabir Nagar', '23'),
(579, 'Siddharthnagar', '23'),
(580, 'Sonbhadra', '23'),
(581, 'Sant Ravidas Nagar', '23'),
(582, 'Sultanpur', '23'),
(583, 'Shravasti', '23'),
(584, 'Unnao', '23'),
(585, 'Varanasi', '23'),
(586, 'Birbhum', '24'),
(587, 'Bankura', '24'),
(588, 'Bardhaman', '24'),
(589, 'Darjeeling', '24'),
(590, 'Dakshin Dinajpur', '24'),
(591, 'Hooghly', '24'),
(592, 'Howrah', '24'),
(593, 'Jalpaiguri', '24'),
(594, 'Cooch Behar', '24'),
(595, 'Kolkata', '24'),
(596, 'Malda', '24'),
(597, 'Midnapore', '24'),
(598, 'Murshidabad', '24'),
(599, 'Nadia', '24'),
(600, 'North 24 Parganas', '24'),
(601, 'South 24 Parganas', '24'),
(602, 'Purulia', '24'),
(603, 'Uttar Dinajpur', '24'),
(604, 'andora city', '36'),
(605, 'anddro city 2', '36'),
(606, 'wakavv city', '37'),
(607, 'wakavv city 2', '37');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`) VALUES
(1, 'gopal'),
(2, 'priyanshu'),
(3, 'bhavin'),
(4, 'ajay');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(3) NOT NULL,
  `country_name` varchar(20) NOT NULL,
  `countryCode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `countryCode`) VALUES
(1, 'Andorra', 'AD'),
(2, 'United Arab Emirates', 'AE'),
(3, 'Afghanistan', 'AF'),
(4, 'Antigua and Barbuda', 'AG'),
(5, 'Anguilla', 'AI'),
(6, 'Albania', 'AL'),
(7, 'Armenia', 'AM'),
(8, 'Angola', 'AO'),
(9, 'Antarctica', 'AQ'),
(10, 'Argentina', 'AR'),
(11, 'American Samoa', 'AS'),
(12, 'Austria', 'AT'),
(13, 'Australia', 'AU'),
(14, 'Aruba', 'AW'),
(15, 'Åland', 'AX'),
(16, 'Azerbaijan', 'AZ'),
(17, 'Bosnia and Herzegovi', 'BA'),
(18, 'Barbados', 'BB'),
(19, 'Bangladesh', 'BD'),
(20, 'Belgium', 'BE'),
(21, 'Burkina Faso', 'BF'),
(22, 'Bulgaria', 'BG'),
(23, 'Bahrain', 'BH'),
(24, 'Burundi', 'BI'),
(25, 'Benin', 'BJ'),
(26, 'Saint Barthélemy', 'BL'),
(27, 'Bermuda', 'BM'),
(28, 'Brunei', 'BN'),
(29, 'Bolivia', 'BO'),
(30, 'Bonaire', 'BQ'),
(31, 'Brazil', 'BR'),
(32, 'Bahamas', 'BS'),
(33, 'Bhutan', 'BT'),
(34, 'Bouvet Island', 'BV'),
(35, 'Botswana', 'BW'),
(36, 'Belarus', 'BY'),
(37, 'Belize', 'BZ'),
(38, 'Canada', 'CA'),
(39, 'Cocos [Keeling] Isla', 'CC'),
(40, 'Democratic Republic ', 'CD'),
(41, 'Central African Repu', 'CF'),
(42, 'Republic of the Cong', 'CG'),
(43, 'Switzerland', 'CH'),
(44, 'Ivory Coast', 'CI'),
(45, 'Cook Islands', 'CK'),
(46, 'Chile', 'CL'),
(47, 'Cameroon', 'CM'),
(48, 'China', 'CN'),
(49, 'Colombia', 'CO'),
(50, 'Costa Rica', 'CR'),
(51, 'Cuba', 'CU'),
(52, 'Cape Verde', 'CV'),
(53, 'Curacao', 'CW'),
(54, 'Christmas Island', 'CX'),
(55, 'Cyprus', 'CY'),
(56, 'Czech Republic', 'CZ'),
(57, 'Germany', 'DE'),
(58, 'Djibouti', 'DJ'),
(59, 'Denmark', 'DK'),
(60, 'Dominica', 'DM'),
(61, 'Dominican Republic', 'DO'),
(62, 'Algeria', 'DZ'),
(63, 'Ecuador', 'EC'),
(64, 'Estonia', 'EE'),
(65, 'Egypt', 'EG'),
(66, 'Western Sahara', 'EH'),
(67, 'Eritrea', 'ER'),
(68, 'Spain', 'ES'),
(69, 'Ethiopia', 'ET'),
(70, 'Finland', 'FI'),
(71, 'Fiji', 'FJ'),
(72, 'Falkland Islands', 'FK'),
(73, 'Micronesia', 'FM'),
(74, 'Faroe Islands', 'FO'),
(75, 'France', 'FR'),
(76, 'Gabon', 'GA'),
(77, 'United Kingdom', 'GB'),
(78, 'Grenada', 'GD'),
(79, 'Georgia', 'GE'),
(80, 'French Guiana', 'GF'),
(81, 'Guernsey', 'GG'),
(82, 'Ghana', 'GH'),
(83, 'Gibraltar', 'GI'),
(84, 'Greenland', 'GL'),
(85, 'Gambia', 'GM'),
(86, 'Guinea', 'GN'),
(87, 'Guadeloupe', 'GP'),
(88, 'Equatorial Guinea', 'GQ'),
(89, 'Greece', 'GR'),
(90, 'South Georgia and th', 'GS'),
(91, 'Guatemala', 'GT'),
(92, 'Guam', 'GU'),
(93, 'Guinea-Bissau', 'GW'),
(94, 'Guyana', 'GY'),
(95, 'Hong Kong', 'HK'),
(96, 'Heard Island and McD', 'HM'),
(97, 'Honduras', 'HN'),
(98, 'Croatia', 'HR'),
(99, 'Haiti', 'HT'),
(100, 'Hungary', 'HU'),
(101, 'Indonesia', 'ID'),
(102, 'Ireland', 'IE'),
(103, 'Israel', 'IL'),
(104, 'Isle of Man', 'IM'),
(105, 'India', 'IN'),
(106, 'British Indian Ocean', 'IO'),
(107, 'Iraq', 'IQ'),
(108, 'Iran', 'IR'),
(109, 'Iceland', 'IS'),
(110, 'Italy', 'IT'),
(111, 'Jersey', 'JE'),
(112, 'Jamaica', 'JM'),
(113, 'Jordan', 'JO'),
(114, 'Japan', 'JP'),
(115, 'Kenya', 'KE'),
(116, 'Kyrgyzstan', 'KG'),
(117, 'Cambodia', 'KH'),
(118, 'Kiribati', 'KI'),
(119, 'Comoros', 'KM'),
(120, 'Saint Kitts and Nevi', 'KN'),
(121, 'North Korea', 'KP'),
(122, 'South Korea', 'KR'),
(123, 'Kuwait', 'KW'),
(124, 'Cayman Islands', 'KY'),
(125, 'Kazakhstan', 'KZ'),
(126, 'Laos', 'LA'),
(127, 'Lebanon', 'LB'),
(128, 'Saint Lucia', 'LC'),
(129, 'Liechtenstein', 'LI'),
(130, 'Sri Lanka', 'LK'),
(131, 'Liberia', 'LR'),
(132, 'Lesotho', 'LS'),
(133, 'Lithuania', 'LT'),
(134, 'Luxembourg', 'LU'),
(135, 'Latvia', 'LV'),
(136, 'Libya', 'LY'),
(137, 'Morocco', 'MA'),
(138, 'Monaco', 'MC'),
(139, 'Moldova', 'MD'),
(140, 'Montenegro', 'ME'),
(141, 'Saint Martin', 'MF'),
(142, 'Madagascar', 'MG'),
(143, 'Marshall Islands', 'MH'),
(144, 'Macedonia', 'MK'),
(145, 'Mali', 'ML'),
(146, 'Myanmar [Burma]', 'MM'),
(147, 'Mongolia', 'MN'),
(148, 'Macao', 'MO'),
(149, 'Northern Mariana Isl', 'MP'),
(150, 'Martinique', 'MQ'),
(151, 'Mauritania', 'MR'),
(152, 'Montserrat', 'MS'),
(153, 'Malta', 'MT'),
(154, 'Mauritius', 'MU'),
(155, 'Maldives', 'MV'),
(156, 'Malawi', 'MW'),
(157, 'Mexico', 'MX'),
(158, 'Malaysia', 'MY'),
(159, 'Mozambique', 'MZ'),
(160, 'Namibia', 'NA'),
(161, 'New Caledonia', 'NC'),
(162, 'Niger', 'NE'),
(163, 'Norfolk Island', 'NF'),
(164, 'Nigeria', 'NG'),
(165, 'Nicaragua', 'NI'),
(166, 'Netherlands', 'NL'),
(167, 'Norway', 'NO'),
(168, 'Nepal', 'NP'),
(169, 'Nauru', 'NR'),
(170, 'Niue', 'NU'),
(171, 'New Zealand', 'NZ'),
(172, 'Oman', 'OM'),
(173, 'Panama', 'PA'),
(174, 'Peru', 'PE'),
(175, 'French Polynesia', 'PF'),
(176, 'Papua New Guinea', 'PG'),
(177, 'Philippines', 'PH'),
(178, 'Pakistan', 'PK'),
(179, 'Poland', 'PL'),
(180, 'Saint Pierre and Miq', 'PM'),
(181, 'Pitcairn Islands', 'PN'),
(182, 'Puerto Rico', 'PR'),
(183, 'Palestine', 'PS'),
(184, 'Portugal', 'PT'),
(185, 'Palau', 'PW'),
(186, 'Paraguay', 'PY'),
(187, 'Qatar', 'QA'),
(188, 'Réunion', 'RE'),
(189, 'Romania', 'RO'),
(190, 'Serbia', 'RS'),
(191, 'Russia', 'RU'),
(192, 'Rwanda', 'RW'),
(193, 'Saudi Arabia', 'SA'),
(194, 'Solomon Islands', 'SB'),
(195, 'Seychelles', 'SC'),
(196, 'Sudan', 'SD'),
(197, 'Sweden', 'SE'),
(198, 'Singapore', 'SG'),
(199, 'Saint Helena', 'SH'),
(200, 'Slovenia', 'SI'),
(201, 'Svalbard and Jan May', 'SJ'),
(202, 'Slovakia', 'SK'),
(203, 'Sierra Leone', 'SL'),
(204, 'San Marino', 'SM'),
(205, 'Senegal', 'SN'),
(206, 'Somalia', 'SO'),
(207, 'Suriname', 'SR'),
(208, 'South Sudan', 'SS'),
(209, 'São Tomé and Príncip', 'ST'),
(210, 'El Salvador', 'SV'),
(211, 'Sint Maarten', 'SX'),
(212, 'Syria', 'SY'),
(213, 'Swaziland', 'SZ'),
(214, 'Turks and Caicos Isl', 'TC'),
(215, 'Chad', 'TD'),
(216, 'French Southern Terr', 'TF'),
(217, 'Togo', 'TG'),
(218, 'Thailand', 'TH'),
(219, 'Tajikistan', 'TJ'),
(220, 'Tokelau', 'TK'),
(221, 'East Timor', 'TL'),
(222, 'Turkmenistan', 'TM'),
(223, 'Tunisia', 'TN'),
(224, 'Tonga', 'TO'),
(225, 'Turkey', 'TR'),
(226, 'Trinidad and Tobago', 'TT'),
(227, 'Tuvalu', 'TV'),
(228, 'Taiwan', 'TW'),
(229, 'Tanzania', 'TZ'),
(230, 'Ukraine', 'UA'),
(231, 'Uganda', 'UG'),
(232, 'U.S. Minor Outlying ', 'UM'),
(233, 'United States', 'US'),
(234, 'Uruguay', 'UY'),
(235, 'Uzbekistan', 'UZ'),
(236, 'Vatican City', 'VA'),
(237, 'Saint Vincent and th', 'VC'),
(238, 'Venezuela', 'VE'),
(239, 'British Virgin Islan', 'VG'),
(240, 'U.S. Virgin Islands', 'VI'),
(241, 'Vietnam', 'VN'),
(242, 'Vanuatu', 'VU'),
(243, 'Wallis and Futuna', 'WF'),
(244, 'Samoa', 'WS'),
(245, 'Kosovo', 'XK'),
(246, 'Yemen', 'YE'),
(247, 'Mayotte', 'YT'),
(248, 'South Africa', 'ZA'),
(249, 'Zambia', 'ZM'),
(250, 'Zimbabwe', 'ZW');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `c1` int(11) NOT NULL DEFAULT 0,
  `c2` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id`, `name`, `email`, `password`, `c1`, `c2`) VALUES
(1, 'bhavin', 'bhavin123@gmail.com', '1111111', 0, 0),
(2, 'gopal', 'gopalahir123@gmail.com', '55555', 0, 0),
(3, 'priyanshu', 'priyanshu123@gmail.com', '111111', 0, 0),
(4, 'hgvhjmv', 'jhjgdJGJGGDJ@gmail.com', '222222', 1, 10);

--
-- Triggers `detail`
--
DELIMITER $$
CREATE TRIGGER `detail_update` AFTER UPDATE ON `detail` FOR EACH ROW INSERT INTO logs
SET name=OLD.name, email=OLD.email, password=OLD.password
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  `salaryy` int(10) NOT NULL,
  `fromm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `name`, `email`, `password`, `salaryy`, `fromm`) VALUES
(1, 'bhavin', 'in645377@gmail.com', 25816, 0, ''),
(2, 'gopal', 'gopal@123', 58469, 0, ''),
(8, 'ajay', 'ajayahur123@gmail.com', 0, 25544, 'lalpur'),
(9, 'gopal', 'gopalahir23@gmail.com', 0, 99999, 'ahmedabad'),
(10, 'mayur', 'mayurahir1234@gmail.com', 0, 25466, 'lalpur'),
(11, 'jayesh', 'jayeshahir123@gmail.com', 0, 33523, 'up'),
(12, 'bhavin', 'bhavin123@gmail.com', 2222, 0, ''),
(13, 'hgvhjmv', 'jhjgdJGJGGDJ@gmail.com', 222222, 0, ''),
(14, 'hgvhjmv', 'jhjgdJGJGGDJ@gmail.com', 222222, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `salaryy` int(10) NOT NULL,
  `fromm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`id`, `name`, `email`, `salaryy`, `fromm`) VALUES
(1, 'bera ajay', 'ajayahir@gmail.com', 25133, ' jamnagar'),
(2, 'bera gopal', 'gopalahir345@gmail.com', 66666, 'ahmedabad'),
(3, 'bera mayur', 'mayurahir345@gmail.com', 88888, 'lalpur'),
(4, 'bera jayesh', 'jayeshahir12345@gmail.com', 45215, 'uttar pradesh');

--
-- Triggers `salary`
--
DELIMITER $$
CREATE TRIGGER `salary_update` BEFORE UPDATE ON `salary` FOR EACH ROW INSERT INTO logs SET name=OLD.name, email=OLD.email, salaryy=OLD.salaryy,fromm=OLD.fromm
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL,
  `country_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`, `country_id`) VALUES
(1, 'ANDHRA PRADESH', 105),
(2, 'ASSAM', 105),
(3, 'ARUNACHAL PRADESH', 105),
(4, 'BIHAR', 105),
(5, 'GUJRAT', 105),
(6, 'HARYANA', 105),
(7, 'HIMACHAL PRADESH', 105),
(8, 'JAMMU & KASHMIR', 105),
(9, 'KARNATAKA', 105),
(10, 'KERALA', 105),
(11, 'MADHYA PRADESH', 105),
(12, 'MAHARASHTRA', 105),
(13, 'MANIPUR', 105),
(14, 'MEGHALAYA', 105),
(15, 'MIZORAM', 105),
(16, 'NAGALAND', 105),
(17, 'ORISSA', 105),
(18, 'PUNJAB', 105),
(19, 'RAJASTHAN', 105),
(20, 'SIKKIM', 105),
(21, 'TAMIL NADU', 105),
(22, 'TRIPURA', 105),
(23, 'UTTAR PRADESH', 105),
(24, 'WEST BENGAL', 105),
(25, 'DELHI', 105),
(26, 'GOA', 105),
(27, 'PONDICHERY', 105),
(28, 'LAKSHDWEEP', 105),
(29, 'DAMAN & DIU', 105),
(30, 'DADRA & NAGAR', 105),
(31, 'CHANDIGARH', 105),
(32, 'ANDAMAN & NICOBAR', 105),
(33, 'UTTARANCHAL', 105),
(34, 'JHARKHAND', 105),
(35, 'CHATTISGARH', 105),
(36, 'andorra state', 1),
(37, 'wakavv', 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(3) NOT NULL,
  `studentname` varchar(50) NOT NULL,
  `classid` varchar(10) NOT NULL,
  `math` int(3) NOT NULL,
  `science` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `studentname`, `classid`, `math`, `science`) VALUES
(1, 'gopal', '1', 70, 70),
(2, 'priyanshu', '2', 70, 71),
(3, 'bhavin', '2', 65, 67),
(4, 'ajay', '1', 78, 85);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `hobby` varchar(50) NOT NULL,
  `country` text NOT NULL,
  `state` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `prof_pic` text DEFAULT NULL,
  `password` varchar(30) NOT NULL,
  `roll_id` int(50) DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `email`, `mobile`, `gender`, `hobby`, `country`, `state`, `city`, `prof_pic`, `password`, `roll_id`) VALUES
(75, 'bhavin', 'bhavin6221', 'bhavin123@gmail.com', '6353998756', 'male', 'cricket', 'india', 'gujrat', 'ahmedabad', '', '123', 1),
(77, 'mayur bera', 'mayur6221', 'mayur12223@gmail.com', '9726125281', 'Male', 'cricket', '105', '5', '134', 'Desert.jpg', '6221', 2),
(78, 'gopal bera', 'gopal2445', 'gopalbera@gmail.com', '9726126318', 'Male', 'cricket', '105', '5', '125', '74378.jpg', '123', 2),
(81, 'manav kansagara', 'manav555', 'manav@gmail.com', '5555555555', 'Male', 'cricket,reading,swiming', '105', '5', '125', 'Lighthouse.jpg', '123321', 2),
(82, 'ajay bera', 'ajay22', 'ajaybera@gmail.com', '7874104783', 'Male', 'cricket', '105', '5', '134', '78983.ico', '2445', 2),
(84, 'dilip bera', 'diliyo', 'dilipbera@gmail.com', '4562139874', 'Male', 'cricket,reading', '', '', '1', '', '6221', 2),
(86, 'jayesh bera ', 'jayesh62221', 'jayeshbera@gmail.com', '6353125281', 'Male', 'cricket,swiming', '105', '5', '134', '33189.jpg', '6221', 2),
(87, 'priyanshu', 'prinsu', 'priyanshuchoudary', '1233211477', 'Male', 'cricket', '105', '5', '128', '39361.ico', '555', 2),
(96, 'ramesh gagiya', 'ramesh ahir', 'rameshgagiya123@gmail.com', '975645251', 'Male', 'cricket,swiming', '105', '5', '134', '51300_.jpg', '9833', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
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
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=608;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=251;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
