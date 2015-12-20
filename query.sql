-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 20 Décembre 2015 à 22:12
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `interet`
--

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `nom` varchar(10) NOT NULL,
  `prenom` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contact`
--

INSERT INTO `contact` (`nom`, `prenom`, `email`, `content`) VALUES
('fgdfgdfgdf', 'sdqsdsqdds', 'durancefiona@gmail.com', 'sdqsdsqdsq'),
('fsdfsdfsdf', 'fsdfsdfs', 'rhidja@gmail.com', 'sfqsdfqsfqsfsfqs'),
('Saint Guil', 'Yu-Ju', 'durancefiona@gmail.com', 'dfsdfsdfsdfsdfsd'),
('Saint Guil', 'aaaaaaaaaa', 'durancefiona@gmail.com', 'sdsdfsdgqhdfhdqhddshdfg'),
('gvfvfgfhdf', 'dfghdfghdf', 'durancefiona@gmail.com', 'gdfgsdfgdfgsdfgsdfgsdfgf'),
('dcdcdgdsfg', 'ggsdfgsdfg', 'rhidja@gmail.com', 'bxbvcxbfhdfhdfhfdhdfghfghfd');

-- --------------------------------------------------------

--
-- Structure de la table `marqueur`
--

CREATE TABLE IF NOT EXISTS `marqueur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(256) NOT NULL,
  `type` varchar(50) NOT NULL,
  `adresse` text NOT NULL,
  `ville` varchar(20) NOT NULL,
  `pays` varchar(20) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `content` text NOT NULL,
  `image_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `marqueur`
--

INSERT INTO `marqueur` (`id`, `nom`, `type`, `adresse`, `ville`, `pays`, `latitude`, `longitude`, `content`, `image_name`) VALUES
(3, 'Tammy', 'gdfgdfgdfg', 'gdfgdfgdfg', 'gdfgdfgdfgdf', 'TW', '24.95390509752445', '121.12822100488279', 'gdfgdfgdfgdfg', ''),
(7, 'Hotel Mistral', 'hotel', 'ssqds', 'sqdqsd', 'TW', '24.83930351601734', '121.46811053124998', '					', ''),
(8, 'Hotel de paris', 'choir un type', '15 rue Aristide Ollivier', '', 'TW', '24.54983743984498', '121.31430193749998', '					', ''),
(9, 'Entre cote', 'resturant', 'Rue verdum', 'MONTPELLIER', 'AG', '24.749541220920822', '121.20443865624998', '					', ''),
(10, 'Marker', 'resturant', '', 'azeazeaze', 'AG', '', '', '', ''),
(12, 'Saint Guilhem', 'paysage', '7 Saint Guilhem', 'MONTPELLIER', 'FR', '24.749541220920822', '121.20443865624998', '				', 'https://www.google.fr/maps/uv?hl=fr&pb=!1s0x12b6afa1290e92eb:0xd544931a547a4140!2m5!2m2!1i80!2i80!3m1!2i100!3m1!7e1!4shttps://picasaweb.google.com/lh/sredir?uname%3D107581046350925933789%26id%3D621808'),
(13, 'HollyCow', 'Restaurant', '16 Rue Boussairolles, 34000 Montpellier', 'Montpellier', 'FR', '24.049188988891355', '121.01767107812498', '', ''),
(18, 'MusÃ©e national du Palais', 'paysage', 'No.221, Sec. 2, Zhishan Rd., Shilin Dist.', 'Taipei City', 'TW', '25.102137082679885', '121.54844805566404', 'Le musÃ©e a pour origine une collection d''antiquitÃ©s rassemblÃ©es en 1914 dans le Centre d''exposition des objets anciens (sud de la CitÃ© interdite Ã  PÃ©kin). AprÃ¨s la fondation du musÃ©e national du Palais en 1924, la Chine a connu une pÃ©riode de grand trouble, ce qui a contraint le dÃ©placement des Å“uvres d''art. Les collections impÃ©riales ont effectuÃ© un pÃ©riple fantastique de plus de trente-deux ans et de plus de dix mille kilomÃ¨tres entre leur dÃ©part dÃ©cidÃ© en 1933 face Ã  l''invasion japonaise et leur entreposage Ã  Taipei dÃ©cidÃ© pour Ã©chapper Ã  l''insurrection communiste.', 'national_palace_Museum.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `marqueur_usager`
--

CREATE TABLE IF NOT EXISTS `marqueur_usager` (
  `id_marqueur` int(11) NOT NULL,
  `id_usager` int(11) NOT NULL,
  `action` varchar(24) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `marqueur_usager`
--

INSERT INTO `marqueur_usager` (`id_marqueur`, `id_usager`, `action`, `date`) VALUES
(7, 10, 'CrÃ©ation', '2015-12-06 00:00:00'),
(8, 10, 'CrÃƒÂ©ation', '2015-12-06 00:00:00'),
(9, 10, 'Création', '2015-12-06 00:00:00'),
(10, 10, 'Création', '2015-12-06 13:42:03'),
(11, 10, 'Création', '2015-12-06 17:01:06'),
(11, 10, 'Modification', '2015-12-06 19:20:17'),
(12, 22, 'Création', '2015-12-08 10:19:38'),
(13, 22, 'Création', '2015-12-08 23:24:58'),
(14, 22, 'Création', '2015-12-09 09:57:00'),
(14, 22, 'Modification', '2015-12-12 21:17:46'),
(11, 22, 'Modification', '2015-12-12 21:23:57'),
(11, 22, 'Modification', '2015-12-12 21:24:14'),
(11, 22, 'Modification', '2015-12-12 21:30:55'),
(11, 22, 'Modification', '2015-12-12 21:37:08'),
(12, 22, 'Modification', '2015-12-12 21:42:48'),
(5, 22, 'Modification', '2015-12-15 20:34:05'),
(15, 23, 'Création', '2015-12-16 00:32:04'),
(16, 21, 'Création', '2015-12-19 19:07:39'),
(5, 21, 'Supprimer', '2015-12-19 23:36:02'),
(16, 21, 'Supprimer', '2015-12-19 23:36:10'),
(11, 21, 'Supprimer', '2015-12-19 23:38:18'),
(14, 21, 'Supprimer', '2015-12-19 23:38:32'),
(4, 21, 'Supprimer', '2015-12-19 23:38:39'),
(6, 21, 'Supprimer', '2015-12-19 23:39:06'),
(17, 21, 'Création', '2015-12-20 00:14:50'),
(17, 21, 'Supprimer', '2015-12-20 00:31:18'),
(2, 21, 'Supprimer', '2015-12-20 00:31:32'),
(18, 21, 'Création', '2015-12-20 09:50:30'),
(19, 21, 'Création', '2015-12-20 12:14:31'),
(19, 21, 'Supprimer', '2015-12-20 19:21:17'),
(15, 21, 'Supprimer', '2015-12-20 19:21:29');

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE IF NOT EXISTS `pays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `code` varchar(2) NOT NULL DEFAULT '',
  `nom` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=247 ;

--
-- Contenu de la table `pays`
--

INSERT INTO `pays` (`id`, `code`, `nom`) VALUES
(1, 'AF', 'Afghanistan'),
(2, 'AL', 'Albania'),
(3, 'DZ', 'Algeria'),
(4, 'DS', 'American Samoa'),
(5, 'AD', 'Andorra'),
(6, 'AO', 'Angola'),
(7, 'AI', 'Anguilla'),
(8, 'AQ', 'Antarctica'),
(9, 'AG', 'Antigua and/or Barbuda'),
(10, 'AR', 'Argentina'),
(11, 'AM', 'Armenia'),
(12, 'AW', 'Aruba'),
(13, 'AU', 'Australia'),
(14, 'AT', 'Austria'),
(15, 'AZ', 'Azerbaijan'),
(16, 'BS', 'Bahamas'),
(17, 'BH', 'Bahrain'),
(18, 'BD', 'Bangladesh'),
(19, 'BB', 'Barbados'),
(20, 'BY', 'Belarus'),
(21, 'BE', 'Belgium'),
(22, 'BZ', 'Belize'),
(23, 'BJ', 'Benin'),
(24, 'BM', 'Bermuda'),
(25, 'BT', 'Bhutan'),
(26, 'BO', 'Bolivia'),
(27, 'BA', 'Bosnia and Herzegovina'),
(28, 'BW', 'Botswana'),
(29, 'BV', 'Bouvet Island'),
(30, 'BR', 'Brazil'),
(31, 'IO', 'British Indian Ocean Territory'),
(32, 'BN', 'Brunei Darussalam'),
(33, 'BG', 'Bulgaria'),
(34, 'BF', 'Burkina Faso'),
(35, 'BI', 'Burundi'),
(36, 'KH', 'Cambodia'),
(37, 'CM', 'Cameroon'),
(38, 'CA', 'Canada'),
(39, 'CV', 'Cape Verde'),
(40, 'KY', 'Cayman Islands'),
(41, 'CF', 'Central African Republic'),
(42, 'TD', 'Chad'),
(43, 'CL', 'Chile'),
(44, 'CN', 'China'),
(45, 'CX', 'Christmas Island'),
(46, 'CC', 'Cocos (Keeling) Islands'),
(47, 'CO', 'Colombia'),
(48, 'KM', 'Comoros'),
(49, 'CG', 'Congo'),
(50, 'CK', 'Cook Islands'),
(51, 'CR', 'Costa Rica'),
(52, 'HR', 'Croatia (Hrvatska)'),
(53, 'CU', 'Cuba'),
(54, 'CY', 'Cyprus'),
(55, 'CZ', 'Czech Republic'),
(56, 'DK', 'Denmark'),
(57, 'DJ', 'Djibouti'),
(58, 'DM', 'Dominica'),
(59, 'DO', 'Dominican Republic'),
(60, 'TP', 'East Timor'),
(61, 'EC', 'Ecuador'),
(62, 'EG', 'Egypt'),
(63, 'SV', 'El Salvador'),
(64, 'GQ', 'Equatorial Guinea'),
(65, 'ER', 'Eritrea'),
(66, 'EE', 'Estonia'),
(67, 'ET', 'Ethiopia'),
(68, 'FK', 'Falkland Islands (Malvinas)'),
(69, 'FO', 'Faroe Islands'),
(70, 'FJ', 'Fiji'),
(71, 'FI', 'Finland'),
(72, 'FR', 'France'),
(73, 'FX', 'France, Metropolitan'),
(74, 'GF', 'French Guiana'),
(75, 'PF', 'French Polynesia'),
(76, 'TF', 'French Southern Territories'),
(77, 'GA', 'Gabon'),
(78, 'GM', 'Gambia'),
(79, 'GE', 'Georgia'),
(80, 'DE', 'Germany'),
(81, 'GH', 'Ghana'),
(82, 'GI', 'Gibraltar'),
(83, 'GK', 'Guernsey'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'IM', 'Isle of Man'),
(101, 'ID', 'Indonesia'),
(102, 'IR', 'Iran (Islamic Republic of)'),
(103, 'IQ', 'Iraq'),
(104, 'IE', 'Ireland'),
(105, 'IL', 'Israel'),
(106, 'IT', 'Italy'),
(107, 'CI', 'Ivory Coast'),
(108, 'JE', 'Jersey'),
(109, 'JM', 'Jamaica'),
(110, 'JP', 'Japan'),
(111, 'JO', 'Jordan'),
(112, 'KZ', 'Kazakhstan'),
(113, 'KE', 'Kenya'),
(114, 'KI', 'Kiribati'),
(115, 'KP', 'Korea, Democratic People''s Republic of'),
(116, 'KR', 'Korea, Republic of'),
(117, 'XK', 'Kosovo'),
(118, 'KW', 'Kuwait'),
(119, 'KG', 'Kyrgyzstan'),
(120, 'LA', 'Lao People''s Democratic Republic'),
(121, 'LV', 'Latvia'),
(122, 'LB', 'Lebanon'),
(123, 'LS', 'Lesotho'),
(124, 'LR', 'Liberia'),
(125, 'LY', 'Libyan Arab Jamahiriya'),
(126, 'LI', 'Liechtenstein'),
(127, 'LT', 'Lithuania'),
(128, 'LU', 'Luxembourg'),
(129, 'MO', 'Macau'),
(130, 'MK', 'Macedonia'),
(131, 'MG', 'Madagascar'),
(132, 'MW', 'Malawi'),
(133, 'MY', 'Malaysia'),
(134, 'MV', 'Maldives'),
(135, 'ML', 'Mali'),
(136, 'MT', 'Malta'),
(137, 'MH', 'Marshall Islands'),
(138, 'MQ', 'Martinique'),
(139, 'MR', 'Mauritania'),
(140, 'MU', 'Mauritius'),
(141, 'TY', 'Mayotte'),
(142, 'MX', 'Mexico'),
(143, 'FM', 'Micronesia, Federated States of'),
(144, 'MD', 'Moldova, Republic of'),
(145, 'MC', 'Monaco'),
(146, 'MN', 'Mongolia'),
(147, 'ME', 'Montenegro'),
(148, 'MS', 'Montserrat'),
(149, 'MA', 'Morocco'),
(150, 'MZ', 'Mozambique'),
(151, 'MM', 'Myanmar'),
(152, 'NA', 'Namibia'),
(153, 'NR', 'Nauru'),
(154, 'NP', 'Nepal'),
(155, 'NL', 'Netherlands'),
(156, 'AN', 'Netherlands Antilles'),
(157, 'NC', 'New Caledonia'),
(158, 'NZ', 'New Zealand'),
(159, 'NI', 'Nicaragua'),
(160, 'NE', 'Niger'),
(161, 'NG', 'Nigeria'),
(162, 'NU', 'Niue'),
(163, 'NF', 'Norfolk Island'),
(164, 'MP', 'Northern Mariana Islands'),
(165, 'NO', 'Norway'),
(166, 'OM', 'Oman'),
(167, 'PK', 'Pakistan'),
(168, 'PW', 'Palau'),
(169, 'PS', 'Palestine'),
(170, 'PA', 'Panama'),
(171, 'PG', 'Papua New Guinea'),
(172, 'PY', 'Paraguay'),
(173, 'PE', 'Peru'),
(174, 'PH', 'Philippines'),
(175, 'PN', 'Pitcairn'),
(176, 'PL', 'Poland'),
(177, 'PT', 'Portugal'),
(178, 'PR', 'Puerto Rico'),
(179, 'QA', 'Qatar'),
(180, 'RE', 'Reunion'),
(181, 'RO', 'Romania'),
(182, 'RU', 'Russian Federation'),
(183, 'RW', 'Rwanda'),
(184, 'KN', 'Saint Kitts and Nevis'),
(185, 'LC', 'Saint Lucia'),
(186, 'VC', 'Saint Vincent and the Grenadines'),
(187, 'WS', 'Samoa'),
(188, 'SM', 'San Marino'),
(189, 'ST', 'Sao Tome and Principe'),
(190, 'SA', 'Saudi Arabia'),
(191, 'SN', 'Senegal'),
(192, 'RS', 'Serbia'),
(193, 'SC', 'Seychelles'),
(194, 'SL', 'Sierra Leone'),
(195, 'SG', 'Singapore'),
(196, 'SK', 'Slovakia'),
(197, 'SI', 'Slovenia'),
(198, 'SB', 'Solomon Islands'),
(199, 'SO', 'Somalia'),
(200, 'ZA', 'South Africa'),
(201, 'GS', 'South Georgia South Sandwich Islands'),
(202, 'ES', 'Spain'),
(203, 'LK', 'Sri Lanka'),
(204, 'SH', 'St. Helena'),
(205, 'PM', 'St. Pierre and Miquelon'),
(206, 'SD', 'Sudan'),
(207, 'SR', 'Suriname'),
(208, 'SJ', 'Svalbard and Jan Mayen Islands'),
(209, 'SZ', 'Swaziland'),
(210, 'SE', 'Sweden'),
(211, 'CH', 'Switzerland'),
(212, 'SY', 'Syrian Arab Republic'),
(213, 'TW', 'Taiwan'),
(214, 'TJ', 'Tajikistan'),
(215, 'TZ', 'Tanzania, United Republic of'),
(216, 'TH', 'Thailand'),
(217, 'TG', 'Togo'),
(218, 'TK', 'Tokelau'),
(219, 'TO', 'Tonga'),
(220, 'TT', 'Trinidad and Tobago'),
(221, 'TN', 'Tunisia'),
(222, 'TR', 'Turkey'),
(223, 'TM', 'Turkmenistan'),
(224, 'TC', 'Turks and Caicos Islands'),
(225, 'TV', 'Tuvalu'),
(226, 'UG', 'Uganda'),
(227, 'UA', 'Ukraine'),
(228, 'AE', 'United Arab Emirates'),
(229, 'GB', 'United Kingdom'),
(230, 'US', 'United States'),
(231, 'UM', 'United States minor outlying islands'),
(232, 'UY', 'Uruguay'),
(233, 'UZ', 'Uzbekistan'),
(234, 'VU', 'Vanuatu'),
(235, 'VA', 'Vatican City State'),
(236, 'VE', 'Venezuela'),
(237, 'VN', 'Vietnam'),
(238, 'VG', 'Virgin Islands (British)'),
(239, 'VI', 'Virgin Islands (U.S.)'),
(240, 'WF', 'Wallis and Futuna Islands'),
(241, 'EH', 'Western Sahara'),
(242, 'YE', 'Yemen'),
(243, 'YU', 'Yugoslavia'),
(244, 'ZR', 'Zaire'),
(245, 'ZM', 'Zambia'),
(246, 'ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `type`
--

INSERT INTO `type` (`id`, `nom`) VALUES
(1, 'resturant'),
(2, 'hotel'),
(3, 'paysage');

-- --------------------------------------------------------

--
-- Structure de la table `usager`
--

CREATE TABLE IF NOT EXISTS `usager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(10) NOT NULL,
  `password` varchar(15) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `adresse` text NOT NULL,
  `statut` int(1) NOT NULL,
  `role` varchar(10) NOT NULL,
  `date_inscription` datetime NOT NULL,
  `date_modification` datetime NOT NULL,
  `date_authentification` datetime NOT NULL,
  `date_suppression` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=48 ;

--
-- Contenu de la table `usager`
--

INSERT INTO `usager` (`id`, `login`, `password`, `nom`, `prenom`, `date_naissance`, `email`, `mobile`, `adresse`, `statut`, `role`, `date_inscription`, `date_modification`, `date_authentification`, `date_suppression`) VALUES
(21, 'tammy', '0000', 'SHIH', 'Yu-Ju', '1983-06-15', 'yuju.shih@gmail.com', '0615809123', '50 grand rue jean moulin', 1, 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-12-20 18:31:56', '0000-00-00 00:00:00'),
(23, 'ram', '0000', 'STENGEL', 'CIRIMET', '0000-00-00', 'cirigeral16@hotmail.com', '0543625910', '', 1, 'member', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, '', '', 'SOVCHEVSKI', 'DAVID', '0000-00-00', 'david_sovcevski@hotmail.com', '0782980047', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, '', '', 'CAMPELL', 'MICHELE', '0000-00-00', 'aboutmichele@gmail.com', '0633450123', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '', '', 'LI', 'ZINI', '0000-00-00', 'lee1121@gmail.com', '0626707634', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, '', '', 'PAAVONEN', 'MIKKO', '0000-00-00', 'mikko.paavonen@gmail.com', '0641284574', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, '', '', 'PARACLA', 'MARIANA', '0000-00-00', 'mhkparacla@gmail.com', '0687099072', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, '', '', 'GUILARTE', 'WILFREDO', '0000-00-00', 'ftwilfredoguilarte@gmail.com', '0783943970', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, '', '', 'PENG', 'JIANPING', '0000-00-00', 'bensonphangaaa@hotmail.com', '0643892436', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, '', '', 'ROH', 'SEUNGJUN', '0000-00-00', 'roseung123@gmail.com', '0650008189', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, '', '', 'LUO', 'WEI', '0000-00-00', '865763953@qq.com', '0659001271', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, '', '', 'DOUREYEEN', 'ANAHIT', '0000-00-00', 'doureyeen@gmail.com', '0661173654', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, '', '', 'SHIH', 'Yu-JU', '0000-00-00', 'durancefiona@gmail.com', '0615809123', '', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'tammy12345', '123456', '', '', '0000-00-00', 'durancefiona@gmail.com', '', '', 0, 'member', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'AZERTY', 'AZERTY', 'aaaaaaaaa', 'aaaaaaaaaa', '0000-00-00', 'AZERTY@gmail.com', '', '', 0, 'member', '0000-00-00 00:00:00', '2015-12-20 13:58:11', '0000-00-00 00:00:00', '2015-12-20 13:58:19'),
(41, 'nienyshop', 'cc3a05', '', '', '0000-00-00', 'nienyshop@yahoo.com.tw', '', '', 0, 'member', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-12-20 11:44:02'),
(43, 'pppp', 'pppp', '', '', '0000-00-00', 'pppp@gmal', '', '', 0, 'member', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-12-20 11:43:47'),
(44, 'ffsdfsdfsd', '0000sfsd', '', '', '0000-00-00', 'yuju2.shih@gmail.com', '', '', 0, 'member', '0000-00-00 00:00:00', '2015-12-20 13:57:56', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'dfgsdfgsdg', '0000gsdfgsdfgsd', '', '', '0000-00-00', 'ram34@hotmail.fr', '', '', 0, 'member', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2015-12-20 17:46:00'),
(46, 'fsdfsdfsdf', '0000dsfsdf', '', '', '0000-00-00', 'durancddddddefiona@gmail.com', '', '', 0, 'member', '2015-12-20 00:00:00', '0000-00-00 00:00:00', '2015-12-20 00:00:00', '0000-00-00 00:00:00'),
(47, 'ezrttetzet', '0000tezrtertezr', '', '', '0000-00-00', 'duranceertertfiona@gmail.com', '', '', 0, 'member', '2015-12-20 18:27:04', '0000-00-00 00:00:00', '2015-12-20 18:27:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `usager_modify`
--

CREATE TABLE IF NOT EXISTS `usager_modify` (
  `id_usager` int(11) NOT NULL AUTO_INCREMENT,
  `action` varchar(30) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id_usager`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Contenu de la table `usager_modify`
--

INSERT INTO `usager_modify` (`id_usager`, `action`, `date`) VALUES
(21, 'Modification', '2015-12-20'),
(22, 'Modification', '2015-12-15');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
