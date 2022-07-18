-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 05:41 PM
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

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `title`, `date`, `image`) VALUES
(1, 'tittle 01', '2022-06-15', '1.jpg'),
(2, 'tittle 02', '2022-06-15', '2.jpg'),
(3, 'tittle 03', '2022-06-15', '3.jpg'),
(4, 'tittle 04', '2022-06-15', '4.jpg'),
(5, 'tittle 05', '2022-06-15', '5.jpg'),
(6, 'tittle 06', '2022-06-15', '6.jpg');

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

--
-- Dumping data for table `articals`
--

INSERT INTO `articals` (`id`, `title`, `author`, `date`, `description`, `type`, `image`) VALUES
(1, 'How to travel with paper map', 'Ashen Nimantha', '2022-06-09', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the... ', 'camping', '1.jpg'),
(2, 'How to travel with paper map', 'Ashen Nimantha', '2022-06-09', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the... ', 'camping', '1.jpg'),
(3, 'How to travel with paper map', 'Ashen Nimantha', '2022-06-09', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the... ', 'camping', '1.jpg'),
(4, 'How to travel with paper map', 'Ashen Nimantha', '2022-06-09', 'A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the... ', 'camping', '1.jpg');

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
(1, 'fun & Entertainment'),
(2, 'Diving & Snokling'),
(3, 'Hiking');

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
  `distance` int(11) NOT NULL,
  `duration` text NOT NULL,
  `short_description` text NOT NULL,
  `description` text NOT NULL,
  `discount` int(11) DEFAULT NULL,
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

INSERT INTO `destinations` (`id`, `name`, `city`, `distance`, `duration`, `short_description`, `description`, `discount`, `price`, `max_people`, `categories_id`, `image`, `status`, `map`) VALUES
(13, 'Horton Plains National Park', 'Ohiya', 178, '1', 'Horton Plains is located on the southern plateau of the central highlands of Sri Lanka.[2] The peaks of Kirigalpoththa (2,389 metres (7,838 ft)) and Thotupola Kanda (2,357 metres (7,733 ft)), the second and the third highest of Sri Lanka, are situated to the west and north respectively. The park\'s elevation ranges from 1,200–2,300 metres (3,900–7,500 ft).[3] The rocks found in the park belong to the Archaean age and belong to the high series of the Precambrian era and are made up of Khondalites, Charnockites and granitic gneisses.[4][5] The soil type is of the red-yellow podsolic group and the surface layer is covered with decayed organic matter', 'Horton Plains is located on the southern plateau of the central highlands of Sri Lanka. The peaks of Kirigalpoththa (2,389 metres (7,838 ft)) and Thotupola Kanda (2,357 metres (7,733 ft)), the second and the third highest of Sri Lanka, are situated to the west and north respectively. The park\'s elevation ranges from 1,200–2,300 metres (3,900–7,500 ft). The rocks found in the park belong to the Archaean age and belong to the high series of the Precambrian era and are made up of Khondalites, Charnockites and granitic gneisses.The soil type is of the red-yellow podsolic group and the surface layer is covered with decayed organic matter.<br><br>\n\nThe mean annual rainfall is greater than 2,000 millimetres (79 in). Frequent cloud cover limits the amount of sunlight that is available to plants. The mean annual temperature is 13 °C (55 °F) but the temperature varies considerably during the course of a day, reaching as high as 27 °C (81 °F) during the day time, and dipping as low as 5 °C (41 °F) at night. During the southwest Monsoon season, the wind speed sometimes reaches gale force. Although some rain falls throughout the year, a dry season occurs from January–March. The ground frost is common in February. Mist can persist in the most of the day during the wet season. Many pools and waterfalls can be seen in the park, and Horton Plains is considered the most important watershed in Sri Lanka. The Horton Plains are the headwaters of important rivers such as the Mahaweli, Kelani, and Walawe. The plains also feeds Belihul Oya, Agra Oya, Kiriketi Oya, Uma Oya, and Bogawantalawa Oya.[6] Due to its high elevation, fog and cloud deposit a considerable amount of moisture on the land. Slow moving streams, swamps, and waterfalls are the important wetland habitats of the park.<br> The original name of the area was Maha Eliya Thenna (මහ එළිය තැන්න - \"great open plain\"). But in the British period the plains were renamed after Sir Robert Wilmot-Horton, the British governor of Ceylon from 1831 to 1837, who travelled to the area to meet the Ratemahatmaya of Sabaragamuwa in 1836, in 1834 by Lt William Fisher of the 78th Regiment and Lt. Albert Watson of the 58th Regiment, who \'discovered\' the plateau. Stone tools dating back to Balangoda culture have been found here. The local population who resided in the lowlands ascended the mountains to mine gems, extract iron ore, construct an irrigational canal and fell trees for timber. A 6-metre (20 ft) pollen core extracted from a mire revealed that in the late quaternary period the area had a semi-arid climate and a species-restricted plant community.<br><br>\n\nSince Sri Lanka has a long non-written history, there is a significant and logical folk story, which also goes with the epic \'Ramayana\' with some deviations. It is believed that Thotupala mountain in Horton plain to be the place where King Rawana landed his aircraft, \'Dandumonaraya\'. According to the story King Rawana kidnapped Sitha, who was the wife of Rama as a revenge for cutting King Rawana\'s sister, Suparnika\'s nose. It provoked Rama in India and he led an army that consisted of monkey like humans, whose leader was Hanuman. In the story, Hanuman set fire to Horton plains and that fire lasted for a long time. The original name, Maha Eliya Thenna carries the meaning, \'The hugely lighten ground\'. Even now the upper layer of soil can be seem in a blackish grey colour. There had been some soil tests done by local universities, and it revealed that upper layer contains a high amount of Calcium Carbonate and Potash. For Sri Lankans, Horton Plains is very significant in their History and Culture.<br><br>\n\nSir Joseph Dalton Hooker had advised the British Government \"to leave all Montane Forests above 5000 ft. undisturbed\" and an administrative order to this effect had been issued in 1873 that prevented clearing and felling of forests in the region. Horton Plains was designated as a wildlife sanctuary on 5 December 1969, and because of its biodiversity value, was elevated to a national park on 18 March 1988. The Peak Wilderness Sanctuary which lies in west is contiguous with the park. The land area covered by Horton Plains is 3,160 hectares (12.2 sq mi). Horton Plains contains the most extensive area of cloud forest still existing in Sri Lanka. The vegetation of the park is classified into two distinctive groups, 2,000 ha (7.7 sq mi) of wet patna (Sinhalese: patana, montane grasslands) and 1,160 ha (4.5 sq mi) of subtropical montane evergreen forests. Nearly 750 species of plants belonging to 20 families have been recorded from the park. The forest canopy reaches the height of 20 m (66 ft) and features Calophyllum walkeri, forming communities with varieties of Myrtaceae species such as Syzygium rotundifolium, and S. sclerophyllum, and Lauraceae members including Litsea, Cinnamomum, and Actinodaphne speciosa. The undergrowth layer is characterised by Strobilanthes spp. The thickness of the Strobilanthes vegetation hinders the development of a herb layer. Dwarf bamboo species such Indocalamus and Ochlandra also found in the undergrowth layer. Rhodomyrtus tomentosa bushes specially grow in forest margin and near the mountain peaks. Species such as Gordonia and Rhododendron arboreum have spread to Sri Lanka, along the Western Ghats of South India from the Himalayas and are now common. Nearly 54 woody plant species have been recorded from the park, of which 27 (50%) are endemic to Sri Lanka. Frequent fire and grazing characterises Plagioclimax communities of the grassland flora. Grasslands are dominated by Arundinella villosa and Chrysopogon zeylanicus. Waterlogged swamps or slow moving streams are found in low-lying areas, and macrophytes such as Aponogeton jacobsenii, sedge species Isolopis fluitans and Utricularia spp. are found near the slow moving streams. The bamboo Chimonobambusa densifolia thrive along the banks of the streams, and near the swampy areas grass species such as Juncus prismatocarpus, Garnotia mutica, Eriocaulon spp. and Exacum trinervium are common. Tussock grasses such as Chrysopogon zeylanicus and Cymbopogon confertiflorus are found in the wet hollows. Herbaceous flora of the grasslands include temperate species including Ranunculus, Pedicularis, Senecio, Gentiana and Alchemilla and also tropical species such as Eriocaulon and Ipsea speciosa (a rare endemic daffodil orchid). The most widespread boreal herbaceous plants of the park are Viola, Lobelia, Gaultheria, Fragaria, and Plantago.<br><br>\n\nTree trunks and branches are ornamented with many species of ferns, Lycopodium, lichens, and orchids. Old man\'s beard (Usnea barbata) hanging from branches adds to the beauty of the forests. About 16 of the orchid species being endemic. Other notable plants include shrubs such as Rhodomyrtus tomentosa, Gaultheria fragrantissima, herbs, Exacum trinervium, E. walkeri, Drosera indica, and tree ferns Cyathea spp. Anzia, a foliose lichen genus belonging to the family Parmeliaceae, which had not been recorded in Sri Lanka before, was discovered here in 2007. There are conflicting views on how the grasslands of the park came into being, whether man-made or natural. It is now believed that the grasslands on the dry slopes were created by forest clearance and fires while grasslands in low-lying areas were naturally created by wet conditions, frost and soil erosion. ', NULL, 160, 4, 3, 'horton.jpg', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.7287724784387!2d80.80690771744385!3d6.8028135999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3882edb4b78ef%3A0xcebca89153777249!2sHorton%20Plains%20National%20Park!5e0!3m2!1sen!2slk!4v1657045271300!5m2!1sen!2slk'),
(14, 'Ella Rock', 'Ella', 178, '1', 'Horton Plains is located on the southern plateau of the central highlands of Sri Lanka.[2] The peaks of Kirigalpoththa (2,389 metres (7,838 ft)) and Thotupola Kanda (2,357 metres (7,733 ft)), the second and the third highest of Sri Lanka, are situated to the west and north respectively. The park\'s elevation ranges from 1,200–2,300 metres (3,900–7,500 ft).[3] The rocks found in the park belong to the Archaean age and belong to the high series of the Precambrian era and are made up of Khondalites, Charnockites and granitic gneisses.[4][5] The soil type is of the red-yellow podsolic group and the surface layer is covered with decayed organic matter', 'Horton Plains is located on the southern plateau of the central highlands of Sri Lanka. The peaks of Kirigalpoththa (2,389 metres (7,838 ft)) and Thotupola Kanda (2,357 metres (7,733 ft)), the second and the third highest of Sri Lanka, are situated to the west and north respectively. The park\'s elevation ranges from 1,200–2,300 metres (3,900–7,500 ft). The rocks found in the park belong to the Archaean age and belong to the high series of the Precambrian era and are made up of Khondalites, Charnockites and granitic gneisses.The soil type is of the red-yellow podsolic group and the surface layer is covered with decayed organic matter.<br><br>\r\n\r\nThe mean annual rainfall is greater than 2,000 millimetres (79 in). Frequent cloud cover limits the amount of sunlight that is available to plants. The mean annual temperature is 13 °C (55 °F) but the temperature varies considerably during the course of a day, reaching as high as 27 °C (81 °F) during the day time, and dipping as low as 5 °C (41 °F) at night. During the southwest Monsoon season, the wind speed sometimes reaches gale force. Although some rain falls throughout the year, a dry season occurs from January–March. The ground frost is common in February. Mist can persist in the most of the day during the wet season. Many pools and waterfalls can be seen in the park, and Horton Plains is considered the most important watershed in Sri Lanka. The Horton Plains are the headwaters of important rivers such as the Mahaweli, Kelani, and Walawe. The plains also feeds Belihul Oya, Agra Oya, Kiriketi Oya, Uma Oya, and Bogawantalawa Oya.[6] Due to its high elevation, fog and cloud deposit a considerable amount of moisture on the land. Slow moving streams, swamps, and waterfalls are the important wetland habitats of the park.<br> The original name of the area was Maha Eliya Thenna (මහ එළිය තැන්න - \"great open plain\"). But in the British period the plains were renamed after Sir Robert Wilmot-Horton, the British governor of Ceylon from 1831 to 1837, who travelled to the area to meet the Ratemahatmaya of Sabaragamuwa in 1836, in 1834 by Lt William Fisher of the 78th Regiment and Lt. Albert Watson of the 58th Regiment, who \'discovered\' the plateau. Stone tools dating back to Balangoda culture have been found here. The local population who resided in the lowlands ascended the mountains to mine gems, extract iron ore, construct an irrigational canal and fell trees for timber. A 6-metre (20 ft) pollen core extracted from a mire revealed that in the late quaternary period the area had a semi-arid climate and a species-restricted plant community.<br><br>\r\n\r\nSince Sri Lanka has a long non-written history, there is a significant and logical folk story, which also goes with the epic \'Ramayana\' with some deviations. It is believed that Thotupala mountain in Horton plain to be the place where King Rawana landed his aircraft, \'Dandumonaraya\'. According to the story King Rawana kidnapped Sitha, who was the wife of Rama as a revenge for cutting King Rawana\'s sister, Suparnika\'s nose. It provoked Rama in India and he led an army that consisted of monkey like humans, whose leader was Hanuman. In the story, Hanuman set fire to Horton plains and that fire lasted for a long time. The original name, Maha Eliya Thenna carries the meaning, \'The hugely lighten ground\'. Even now the upper layer of soil can be seem in a blackish grey colour. There had been some soil tests done by local universities, and it revealed that upper layer contains a high amount of Calcium Carbonate and Potash. For Sri Lankans, Horton Plains is very significant in their History and Culture.<br><br>\r\n\r\nSir Joseph Dalton Hooker had advised the British Government \"to leave all Montane Forests above 5000 ft. undisturbed\" and an administrative order to this effect had been issued in 1873 that prevented clearing and felling of forests in the region. Horton Plains was designated as a wildlife sanctuary on 5 December 1969, and because of its biodiversity value, was elevated to a national park on 18 March 1988. The Peak Wilderness Sanctuary which lies in west is contiguous with the park. The land area covered by Horton Plains is 3,160 hectares (12.2 sq mi). Horton Plains contains the most extensive area of cloud forest still existing in Sri Lanka. The vegetation of the park is classified into two distinctive groups, 2,000 ha (7.7 sq mi) of wet patna (Sinhalese: patana, montane grasslands) and 1,160 ha (4.5 sq mi) of subtropical montane evergreen forests. Nearly 750 species of plants belonging to 20 families have been recorded from the park. The forest canopy reaches the height of 20 m (66 ft) and features Calophyllum walkeri, forming communities with varieties of Myrtaceae species such as Syzygium rotundifolium, and S. sclerophyllum, and Lauraceae members including Litsea, Cinnamomum, and Actinodaphne speciosa. The undergrowth layer is characterised by Strobilanthes spp. The thickness of the Strobilanthes vegetation hinders the development of a herb layer. Dwarf bamboo species such Indocalamus and Ochlandra also found in the undergrowth layer. Rhodomyrtus tomentosa bushes specially grow in forest margin and near the mountain peaks. Species such as Gordonia and Rhododendron arboreum have spread to Sri Lanka, along the Western Ghats of South India from the Himalayas and are now common. Nearly 54 woody plant species have been recorded from the park, of which 27 (50%) are endemic to Sri Lanka. Frequent fire and grazing characterises Plagioclimax communities of the grassland flora. Grasslands are dominated by Arundinella villosa and Chrysopogon zeylanicus. Waterlogged swamps or slow moving streams are found in low-lying areas, and macrophytes such as Aponogeton jacobsenii, sedge species Isolopis fluitans and Utricularia spp. are found near the slow moving streams. The bamboo Chimonobambusa densifolia thrive along the banks of the streams, and near the swampy areas grass species such as Juncus prismatocarpus, Garnotia mutica, Eriocaulon spp. and Exacum trinervium are common. Tussock grasses such as Chrysopogon zeylanicus and Cymbopogon confertiflorus are found in the wet hollows. Herbaceous flora of the grasslands include temperate species including Ranunculus, Pedicularis, Senecio, Gentiana and Alchemilla and also tropical species such as Eriocaulon and Ipsea speciosa (a rare endemic daffodil orchid). The most widespread boreal herbaceous plants of the park are Viola, Lobelia, Gaultheria, Fragaria, and Plantago.<br><br>\r\n\r\nTree trunks and branches are ornamented with many species of ferns, Lycopodium, lichens, and orchids. Old man\'s beard (Usnea barbata) hanging from branches adds to the beauty of the forests. About 16 of the orchid species being endemic. Other notable plants include shrubs such as Rhodomyrtus tomentosa, Gaultheria fragrantissima, herbs, Exacum trinervium, E. walkeri, Drosera indica, and tree ferns Cyathea spp. Anzia, a foliose lichen genus belonging to the family Parmeliaceae, which had not been recorded in Sri Lanka before, was discovered here in 2007. There are conflicting views on how the grasslands of the park came into being, whether man-made or natural. It is now believed that the grasslands on the dry slopes were created by forest clearance and fires while grasslands in low-lying areas were naturally created by wet conditions, frost and soil erosion. ', NULL, 160, 4, 3, 'horton.jpg', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.7287724784387!2d80.80690771744385!3d6.8028135999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3882edb4b78ef%3A0xcebca89153777249!2sHorton%20Plains%20National%20Park!5e0!3m2!1sen!2slk!4v1657045271300!5m2!1sen!2slk'),
(15, 'Unawatuna wreck ship exploration', 'unawatuna', 178, '1', 'Horton Plains is located on the southern plateau of the central highlands of Sri Lanka.[2] The peaks of Kirigalpoththa (2,389 metres (7,838 ft)) and Thotupola Kanda (2,357 metres (7,733 ft)), the second and the third highest of Sri Lanka, are situated to the west and north respectively. The park\'s elevation ranges from 1,200–2,300 metres (3,900–7,500 ft).[3] The rocks found in the park belong to the Archaean age and belong to the high series of the Precambrian era and are made up of Khondalites, Charnockites and granitic gneisses.[4][5] The soil type is of the red-yellow podsolic group and the surface layer is covered with decayed organic matter', 'Horton Plains is located on the southern plateau of the central highlands of Sri Lanka. The peaks of Kirigalpoththa (2,389 metres (7,838 ft)) and Thotupola Kanda (2,357 metres (7,733 ft)), the second and the third highest of Sri Lanka, are situated to the west and north respectively. The park\'s elevation ranges from 1,200–2,300 metres (3,900–7,500 ft). The rocks found in the park belong to the Archaean age and belong to the high series of the Precambrian era and are made up of Khondalites, Charnockites and granitic gneisses.The soil type is of the red-yellow podsolic group and the surface layer is covered with decayed organic matter.<br><br>\r\n\r\nThe mean annual rainfall is greater than 2,000 millimetres (79 in). Frequent cloud cover limits the amount of sunlight that is available to plants. The mean annual temperature is 13 °C (55 °F) but the temperature varies considerably during the course of a day, reaching as high as 27 °C (81 °F) during the day time, and dipping as low as 5 °C (41 °F) at night. During the southwest Monsoon season, the wind speed sometimes reaches gale force. Although some rain falls throughout the year, a dry season occurs from January–March. The ground frost is common in February. Mist can persist in the most of the day during the wet season. Many pools and waterfalls can be seen in the park, and Horton Plains is considered the most important watershed in Sri Lanka. The Horton Plains are the headwaters of important rivers such as the Mahaweli, Kelani, and Walawe. The plains also feeds Belihul Oya, Agra Oya, Kiriketi Oya, Uma Oya, and Bogawantalawa Oya.[6] Due to its high elevation, fog and cloud deposit a considerable amount of moisture on the land. Slow moving streams, swamps, and waterfalls are the important wetland habitats of the park.<br> The original name of the area was Maha Eliya Thenna (මහ එළිය තැන්න - \"great open plain\"). But in the British period the plains were renamed after Sir Robert Wilmot-Horton, the British governor of Ceylon from 1831 to 1837, who travelled to the area to meet the Ratemahatmaya of Sabaragamuwa in 1836, in 1834 by Lt William Fisher of the 78th Regiment and Lt. Albert Watson of the 58th Regiment, who \'discovered\' the plateau. Stone tools dating back to Balangoda culture have been found here. The local population who resided in the lowlands ascended the mountains to mine gems, extract iron ore, construct an irrigational canal and fell trees for timber. A 6-metre (20 ft) pollen core extracted from a mire revealed that in the late quaternary period the area had a semi-arid climate and a species-restricted plant community.<br><br>\r\n\r\nSince Sri Lanka has a long non-written history, there is a significant and logical folk story, which also goes with the epic \'Ramayana\' with some deviations. It is believed that Thotupala mountain in Horton plain to be the place where King Rawana landed his aircraft, \'Dandumonaraya\'. According to the story King Rawana kidnapped Sitha, who was the wife of Rama as a revenge for cutting King Rawana\'s sister, Suparnika\'s nose. It provoked Rama in India and he led an army that consisted of monkey like humans, whose leader was Hanuman. In the story, Hanuman set fire to Horton plains and that fire lasted for a long time. The original name, Maha Eliya Thenna carries the meaning, \'The hugely lighten ground\'. Even now the upper layer of soil can be seem in a blackish grey colour. There had been some soil tests done by local universities, and it revealed that upper layer contains a high amount of Calcium Carbonate and Potash. For Sri Lankans, Horton Plains is very significant in their History and Culture.<br><br>\r\n\r\nSir Joseph Dalton Hooker had advised the British Government \"to leave all Montane Forests above 5000 ft. undisturbed\" and an administrative order to this effect had been issued in 1873 that prevented clearing and felling of forests in the region. Horton Plains was designated as a wildlife sanctuary on 5 December 1969, and because of its biodiversity value, was elevated to a national park on 18 March 1988. The Peak Wilderness Sanctuary which lies in west is contiguous with the park. The land area covered by Horton Plains is 3,160 hectares (12.2 sq mi). Horton Plains contains the most extensive area of cloud forest still existing in Sri Lanka. The vegetation of the park is classified into two distinctive groups, 2,000 ha (7.7 sq mi) of wet patna (Sinhalese: patana, montane grasslands) and 1,160 ha (4.5 sq mi) of subtropical montane evergreen forests. Nearly 750 species of plants belonging to 20 families have been recorded from the park. The forest canopy reaches the height of 20 m (66 ft) and features Calophyllum walkeri, forming communities with varieties of Myrtaceae species such as Syzygium rotundifolium, and S. sclerophyllum, and Lauraceae members including Litsea, Cinnamomum, and Actinodaphne speciosa. The undergrowth layer is characterised by Strobilanthes spp. The thickness of the Strobilanthes vegetation hinders the development of a herb layer. Dwarf bamboo species such Indocalamus and Ochlandra also found in the undergrowth layer. Rhodomyrtus tomentosa bushes specially grow in forest margin and near the mountain peaks. Species such as Gordonia and Rhododendron arboreum have spread to Sri Lanka, along the Western Ghats of South India from the Himalayas and are now common. Nearly 54 woody plant species have been recorded from the park, of which 27 (50%) are endemic to Sri Lanka. Frequent fire and grazing characterises Plagioclimax communities of the grassland flora. Grasslands are dominated by Arundinella villosa and Chrysopogon zeylanicus. Waterlogged swamps or slow moving streams are found in low-lying areas, and macrophytes such as Aponogeton jacobsenii, sedge species Isolopis fluitans and Utricularia spp. are found near the slow moving streams. The bamboo Chimonobambusa densifolia thrive along the banks of the streams, and near the swampy areas grass species such as Juncus prismatocarpus, Garnotia mutica, Eriocaulon spp. and Exacum trinervium are common. Tussock grasses such as Chrysopogon zeylanicus and Cymbopogon confertiflorus are found in the wet hollows. Herbaceous flora of the grasslands include temperate species including Ranunculus, Pedicularis, Senecio, Gentiana and Alchemilla and also tropical species such as Eriocaulon and Ipsea speciosa (a rare endemic daffodil orchid). The most widespread boreal herbaceous plants of the park are Viola, Lobelia, Gaultheria, Fragaria, and Plantago.<br><br>\r\n\r\nTree trunks and branches are ornamented with many species of ferns, Lycopodium, lichens, and orchids. Old man\'s beard (Usnea barbata) hanging from branches adds to the beauty of the forests. About 16 of the orchid species being endemic. Other notable plants include shrubs such as Rhodomyrtus tomentosa, Gaultheria fragrantissima, herbs, Exacum trinervium, E. walkeri, Drosera indica, and tree ferns Cyathea spp. Anzia, a foliose lichen genus belonging to the family Parmeliaceae, which had not been recorded in Sri Lanka before, was discovered here in 2007. There are conflicting views on how the grasslands of the park came into being, whether man-made or natural. It is now believed that the grasslands on the dry slopes were created by forest clearance and fires while grasslands in low-lying areas were naturally created by wet conditions, frost and soil erosion. ', NULL, 160, 4, 2, 'horton.jpg', 0, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.7287724784387!2d80.80690771744385!3d6.8028135999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3882edb4b78ef%3A0xcebca89153777249!2sHorton%20Plains%20National%20Park!5e0!3m2!1sen!2slk!4v1657045271300!5m2!1sen!2slk'),
(16, 'Unawatuna wreck ship exploration', 'unawatuna', 178, '1', 'Horton Plains is located on the southern plateau of the central highlands of Sri Lanka.[2] The peaks of Kirigalpoththa (2,389 metres (7,838 ft)) and Thotupola Kanda (2,357 metres (7,733 ft)), the second and the third highest of Sri Lanka, are situated to the west and north respectively. The park\'s elevation ranges from 1,200–2,300 metres (3,900–7,500 ft).[3] The rocks found in the park belong to the Archaean age and belong to the high series of the Precambrian era and are made up of Khondalites, Charnockites and granitic gneisses.[4][5] The soil type is of the red-yellow podsolic group and the surface layer is covered with decayed organic matter', 'Horton Plains is located on the southern plateau of the central highlands of Sri Lanka. The peaks of Kirigalpoththa (2,389 metres (7,838 ft)) and Thotupola Kanda (2,357 metres (7,733 ft)), the second and the third highest of Sri Lanka, are situated to the west and north respectively. The park\'s elevation ranges from 1,200–2,300 metres (3,900–7,500 ft). The rocks found in the park belong to the Archaean age and belong to the high series of the Precambrian era and are made up of Khondalites, Charnockites and granitic gneisses.The soil type is of the red-yellow podsolic group and the surface layer is covered with decayed organic matter.<br><br>\r\n\r\nThe mean annual rainfall is greater than 2,000 millimetres (79 in). Frequent cloud cover limits the amount of sunlight that is available to plants. The mean annual temperature is 13 °C (55 °F) but the temperature varies considerably during the course of a day, reaching as high as 27 °C (81 °F) during the day time, and dipping as low as 5 °C (41 °F) at night. During the southwest Monsoon season, the wind speed sometimes reaches gale force. Although some rain falls throughout the year, a dry season occurs from January–March. The ground frost is common in February. Mist can persist in the most of the day during the wet season. Many pools and waterfalls can be seen in the park, and Horton Plains is considered the most important watershed in Sri Lanka. The Horton Plains are the headwaters of important rivers such as the Mahaweli, Kelani, and Walawe. The plains also feeds Belihul Oya, Agra Oya, Kiriketi Oya, Uma Oya, and Bogawantalawa Oya.[6] Due to its high elevation, fog and cloud deposit a considerable amount of moisture on the land. Slow moving streams, swamps, and waterfalls are the important wetland habitats of the park.<br> The original name of the area was Maha Eliya Thenna (මහ එළිය තැන්න - \"great open plain\"). But in the British period the plains were renamed after Sir Robert Wilmot-Horton, the British governor of Ceylon from 1831 to 1837, who travelled to the area to meet the Ratemahatmaya of Sabaragamuwa in 1836, in 1834 by Lt William Fisher of the 78th Regiment and Lt. Albert Watson of the 58th Regiment, who \'discovered\' the plateau. Stone tools dating back to Balangoda culture have been found here. The local population who resided in the lowlands ascended the mountains to mine gems, extract iron ore, construct an irrigational canal and fell trees for timber. A 6-metre (20 ft) pollen core extracted from a mire revealed that in the late quaternary period the area had a semi-arid climate and a species-restricted plant community.<br><br>\r\n\r\nSince Sri Lanka has a long non-written history, there is a significant and logical folk story, which also goes with the epic \'Ramayana\' with some deviations. It is believed that Thotupala mountain in Horton plain to be the place where King Rawana landed his aircraft, \'Dandumonaraya\'. According to the story King Rawana kidnapped Sitha, who was the wife of Rama as a revenge for cutting King Rawana\'s sister, Suparnika\'s nose. It provoked Rama in India and he led an army that consisted of monkey like humans, whose leader was Hanuman. In the story, Hanuman set fire to Horton plains and that fire lasted for a long time. The original name, Maha Eliya Thenna carries the meaning, \'The hugely lighten ground\'. Even now the upper layer of soil can be seem in a blackish grey colour. There had been some soil tests done by local universities, and it revealed that upper layer contains a high amount of Calcium Carbonate and Potash. For Sri Lankans, Horton Plains is very significant in their History and Culture.<br><br>\r\n\r\nSir Joseph Dalton Hooker had advised the British Government \"to leave all Montane Forests above 5000 ft. undisturbed\" and an administrative order to this effect had been issued in 1873 that prevented clearing and felling of forests in the region. Horton Plains was designated as a wildlife sanctuary on 5 December 1969, and because of its biodiversity value, was elevated to a national park on 18 March 1988. The Peak Wilderness Sanctuary which lies in west is contiguous with the park. The land area covered by Horton Plains is 3,160 hectares (12.2 sq mi). Horton Plains contains the most extensive area of cloud forest still existing in Sri Lanka. The vegetation of the park is classified into two distinctive groups, 2,000 ha (7.7 sq mi) of wet patna (Sinhalese: patana, montane grasslands) and 1,160 ha (4.5 sq mi) of subtropical montane evergreen forests. Nearly 750 species of plants belonging to 20 families have been recorded from the park. The forest canopy reaches the height of 20 m (66 ft) and features Calophyllum walkeri, forming communities with varieties of Myrtaceae species such as Syzygium rotundifolium, and S. sclerophyllum, and Lauraceae members including Litsea, Cinnamomum, and Actinodaphne speciosa. The undergrowth layer is characterised by Strobilanthes spp. The thickness of the Strobilanthes vegetation hinders the development of a herb layer. Dwarf bamboo species such Indocalamus and Ochlandra also found in the undergrowth layer. Rhodomyrtus tomentosa bushes specially grow in forest margin and near the mountain peaks. Species such as Gordonia and Rhododendron arboreum have spread to Sri Lanka, along the Western Ghats of South India from the Himalayas and are now common. Nearly 54 woody plant species have been recorded from the park, of which 27 (50%) are endemic to Sri Lanka. Frequent fire and grazing characterises Plagioclimax communities of the grassland flora. Grasslands are dominated by Arundinella villosa and Chrysopogon zeylanicus. Waterlogged swamps or slow moving streams are found in low-lying areas, and macrophytes such as Aponogeton jacobsenii, sedge species Isolopis fluitans and Utricularia spp. are found near the slow moving streams. The bamboo Chimonobambusa densifolia thrive along the banks of the streams, and near the swampy areas grass species such as Juncus prismatocarpus, Garnotia mutica, Eriocaulon spp. and Exacum trinervium are common. Tussock grasses such as Chrysopogon zeylanicus and Cymbopogon confertiflorus are found in the wet hollows. Herbaceous flora of the grasslands include temperate species including Ranunculus, Pedicularis, Senecio, Gentiana and Alchemilla and also tropical species such as Eriocaulon and Ipsea speciosa (a rare endemic daffodil orchid). The most widespread boreal herbaceous plants of the park are Viola, Lobelia, Gaultheria, Fragaria, and Plantago.<br><br>\r\n\r\nTree trunks and branches are ornamented with many species of ferns, Lycopodium, lichens, and orchids. Old man\'s beard (Usnea barbata) hanging from branches adds to the beauty of the forests. About 16 of the orchid species being endemic. Other notable plants include shrubs such as Rhodomyrtus tomentosa, Gaultheria fragrantissima, herbs, Exacum trinervium, E. walkeri, Drosera indica, and tree ferns Cyathea spp. Anzia, a foliose lichen genus belonging to the family Parmeliaceae, which had not been recorded in Sri Lanka before, was discovered here in 2007. There are conflicting views on how the grasslands of the park came into being, whether man-made or natural. It is now believed that the grasslands on the dry slopes were created by forest clearance and fires while grasslands in low-lying areas were naturally created by wet conditions, frost and soil erosion. ', NULL, 160, 4, 2, 'horton.jpg', 0, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.7287724784387!2d80.80690771744385!3d6.8028135999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3882edb4b78ef%3A0xcebca89153777249!2sHorton%20Plains%20National%20Park!5e0!3m2!1sen!2slk!4v1657045271300!5m2!1sen!2slk'),
(17, 'Ella Rock', 'Ella', 178, '1', 'Horton Plains is located on the southern plateau of the central highlands of Sri Lanka.[2] The peaks of Kirigalpoththa (2,389 metres (7,838 ft)) and Thotupola Kanda (2,357 metres (7,733 ft)), the second and the third highest of Sri Lanka, are situated to the west and north respectively. The park\'s elevation ranges from 1,200–2,300 metres (3,900–7,500 ft).[3] The rocks found in the park belong to the Archaean age and belong to the high series of the Precambrian era and are made up of Khondalites, Charnockites and granitic gneisses.[4][5] The soil type is of the red-yellow podsolic group and the surface layer is covered with decayed organic matter', 'Horton Plains is located on the southern plateau of the central highlands of Sri Lanka. The peaks of Kirigalpoththa (2,389 metres (7,838 ft)) and Thotupola Kanda (2,357 metres (7,733 ft)), the second and the third highest of Sri Lanka, are situated to the west and north respectively. The park\'s elevation ranges from 1,200–2,300 metres (3,900–7,500 ft). The rocks found in the park belong to the Archaean age and belong to the high series of the Precambrian era and are made up of Khondalites, Charnockites and granitic gneisses.The soil type is of the red-yellow podsolic group and the surface layer is covered with decayed organic matter.<br><br>\r\n\r\nThe mean annual rainfall is greater than 2,000 millimetres (79 in). Frequent cloud cover limits the amount of sunlight that is available to plants. The mean annual temperature is 13 °C (55 °F) but the temperature varies considerably during the course of a day, reaching as high as 27 °C (81 °F) during the day time, and dipping as low as 5 °C (41 °F) at night. During the southwest Monsoon season, the wind speed sometimes reaches gale force. Although some rain falls throughout the year, a dry season occurs from January–March. The ground frost is common in February. Mist can persist in the most of the day during the wet season. Many pools and waterfalls can be seen in the park, and Horton Plains is considered the most important watershed in Sri Lanka. The Horton Plains are the headwaters of important rivers such as the Mahaweli, Kelani, and Walawe. The plains also feeds Belihul Oya, Agra Oya, Kiriketi Oya, Uma Oya, and Bogawantalawa Oya.[6] Due to its high elevation, fog and cloud deposit a considerable amount of moisture on the land. Slow moving streams, swamps, and waterfalls are the important wetland habitats of the park.<br> The original name of the area was Maha Eliya Thenna (මහ එළිය තැන්න - \"great open plain\"). But in the British period the plains were renamed after Sir Robert Wilmot-Horton, the British governor of Ceylon from 1831 to 1837, who travelled to the area to meet the Ratemahatmaya of Sabaragamuwa in 1836, in 1834 by Lt William Fisher of the 78th Regiment and Lt. Albert Watson of the 58th Regiment, who \'discovered\' the plateau. Stone tools dating back to Balangoda culture have been found here. The local population who resided in the lowlands ascended the mountains to mine gems, extract iron ore, construct an irrigational canal and fell trees for timber. A 6-metre (20 ft) pollen core extracted from a mire revealed that in the late quaternary period the area had a semi-arid climate and a species-restricted plant community.<br><br>\r\n\r\nSince Sri Lanka has a long non-written history, there is a significant and logical folk story, which also goes with the epic \'Ramayana\' with some deviations. It is believed that Thotupala mountain in Horton plain to be the place where King Rawana landed his aircraft, \'Dandumonaraya\'. According to the story King Rawana kidnapped Sitha, who was the wife of Rama as a revenge for cutting King Rawana\'s sister, Suparnika\'s nose. It provoked Rama in India and he led an army that consisted of monkey like humans, whose leader was Hanuman. In the story, Hanuman set fire to Horton plains and that fire lasted for a long time. The original name, Maha Eliya Thenna carries the meaning, \'The hugely lighten ground\'. Even now the upper layer of soil can be seem in a blackish grey colour. There had been some soil tests done by local universities, and it revealed that upper layer contains a high amount of Calcium Carbonate and Potash. For Sri Lankans, Horton Plains is very significant in their History and Culture.<br><br>\r\n\r\nSir Joseph Dalton Hooker had advised the British Government \"to leave all Montane Forests above 5000 ft. undisturbed\" and an administrative order to this effect had been issued in 1873 that prevented clearing and felling of forests in the region. Horton Plains was designated as a wildlife sanctuary on 5 December 1969, and because of its biodiversity value, was elevated to a national park on 18 March 1988. The Peak Wilderness Sanctuary which lies in west is contiguous with the park. The land area covered by Horton Plains is 3,160 hectares (12.2 sq mi). Horton Plains contains the most extensive area of cloud forest still existing in Sri Lanka. The vegetation of the park is classified into two distinctive groups, 2,000 ha (7.7 sq mi) of wet patna (Sinhalese: patana, montane grasslands) and 1,160 ha (4.5 sq mi) of subtropical montane evergreen forests. Nearly 750 species of plants belonging to 20 families have been recorded from the park. The forest canopy reaches the height of 20 m (66 ft) and features Calophyllum walkeri, forming communities with varieties of Myrtaceae species such as Syzygium rotundifolium, and S. sclerophyllum, and Lauraceae members including Litsea, Cinnamomum, and Actinodaphne speciosa. The undergrowth layer is characterised by Strobilanthes spp. The thickness of the Strobilanthes vegetation hinders the development of a herb layer. Dwarf bamboo species such Indocalamus and Ochlandra also found in the undergrowth layer. Rhodomyrtus tomentosa bushes specially grow in forest margin and near the mountain peaks. Species such as Gordonia and Rhododendron arboreum have spread to Sri Lanka, along the Western Ghats of South India from the Himalayas and are now common. Nearly 54 woody plant species have been recorded from the park, of which 27 (50%) are endemic to Sri Lanka. Frequent fire and grazing characterises Plagioclimax communities of the grassland flora. Grasslands are dominated by Arundinella villosa and Chrysopogon zeylanicus. Waterlogged swamps or slow moving streams are found in low-lying areas, and macrophytes such as Aponogeton jacobsenii, sedge species Isolopis fluitans and Utricularia spp. are found near the slow moving streams. The bamboo Chimonobambusa densifolia thrive along the banks of the streams, and near the swampy areas grass species such as Juncus prismatocarpus, Garnotia mutica, Eriocaulon spp. and Exacum trinervium are common. Tussock grasses such as Chrysopogon zeylanicus and Cymbopogon confertiflorus are found in the wet hollows. Herbaceous flora of the grasslands include temperate species including Ranunculus, Pedicularis, Senecio, Gentiana and Alchemilla and also tropical species such as Eriocaulon and Ipsea speciosa (a rare endemic daffodil orchid). The most widespread boreal herbaceous plants of the park are Viola, Lobelia, Gaultheria, Fragaria, and Plantago.<br><br>\r\n\r\nTree trunks and branches are ornamented with many species of ferns, Lycopodium, lichens, and orchids. Old man\'s beard (Usnea barbata) hanging from branches adds to the beauty of the forests. About 16 of the orchid species being endemic. Other notable plants include shrubs such as Rhodomyrtus tomentosa, Gaultheria fragrantissima, herbs, Exacum trinervium, E. walkeri, Drosera indica, and tree ferns Cyathea spp. Anzia, a foliose lichen genus belonging to the family Parmeliaceae, which had not been recorded in Sri Lanka before, was discovered here in 2007. There are conflicting views on how the grasslands of the park came into being, whether man-made or natural. It is now believed that the grasslands on the dry slopes were created by forest clearance and fires while grasslands in low-lying areas were naturally created by wet conditions, frost and soil erosion. ', NULL, 160, 4, 3, 'horton.jpg', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.7287724784387!2d80.80690771744385!3d6.8028135999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3882edb4b78ef%3A0xcebca89153777249!2sHorton%20Plains%20National%20Park!5e0!3m2!1sen!2slk!4v1657045271300!5m2!1sen!2slk');
INSERT INTO `destinations` (`id`, `name`, `city`, `distance`, `duration`, `short_description`, `description`, `discount`, `price`, `max_people`, `categories_id`, `image`, `status`, `map`) VALUES
(18, 'Ella Rock', 'Ella', 178, '1', 'Horton Plains is located on the southern plateau of the central highlands of Sri Lanka.[2] The peaks of Kirigalpoththa (2,389 metres (7,838 ft)) and Thotupola Kanda (2,357 metres (7,733 ft)), the second and the third highest of Sri Lanka, are situated to the west and north respectively. The park\'s elevation ranges from 1,200–2,300 metres (3,900–7,500 ft).[3] The rocks found in the park belong to the Archaean age and belong to the high series of the Precambrian era and are made up of Khondalites, Charnockites and granitic gneisses.[4][5] The soil type is of the red-yellow podsolic group and the surface layer is covered with decayed organic matter', 'Horton Plains is located on the southern plateau of the central highlands of Sri Lanka. The peaks of Kirigalpoththa (2,389 metres (7,838 ft)) and Thotupola Kanda (2,357 metres (7,733 ft)), the second and the third highest of Sri Lanka, are situated to the west and north respectively. The park\'s elevation ranges from 1,200–2,300 metres (3,900–7,500 ft). The rocks found in the park belong to the Archaean age and belong to the high series of the Precambrian era and are made up of Khondalites, Charnockites and granitic gneisses.The soil type is of the red-yellow podsolic group and the surface layer is covered with decayed organic matter.<br><br>\r\n\r\nThe mean annual rainfall is greater than 2,000 millimetres (79 in). Frequent cloud cover limits the amount of sunlight that is available to plants. The mean annual temperature is 13 °C (55 °F) but the temperature varies considerably during the course of a day, reaching as high as 27 °C (81 °F) during the day time, and dipping as low as 5 °C (41 °F) at night. During the southwest Monsoon season, the wind speed sometimes reaches gale force. Although some rain falls throughout the year, a dry season occurs from January–March. The ground frost is common in February. Mist can persist in the most of the day during the wet season. Many pools and waterfalls can be seen in the park, and Horton Plains is considered the most important watershed in Sri Lanka. The Horton Plains are the headwaters of important rivers such as the Mahaweli, Kelani, and Walawe. The plains also feeds Belihul Oya, Agra Oya, Kiriketi Oya, Uma Oya, and Bogawantalawa Oya.[6] Due to its high elevation, fog and cloud deposit a considerable amount of moisture on the land. Slow moving streams, swamps, and waterfalls are the important wetland habitats of the park.<br> The original name of the area was Maha Eliya Thenna (මහ එළිය තැන්න - \"great open plain\"). But in the British period the plains were renamed after Sir Robert Wilmot-Horton, the British governor of Ceylon from 1831 to 1837, who travelled to the area to meet the Ratemahatmaya of Sabaragamuwa in 1836, in 1834 by Lt William Fisher of the 78th Regiment and Lt. Albert Watson of the 58th Regiment, who \'discovered\' the plateau. Stone tools dating back to Balangoda culture have been found here. The local population who resided in the lowlands ascended the mountains to mine gems, extract iron ore, construct an irrigational canal and fell trees for timber. A 6-metre (20 ft) pollen core extracted from a mire revealed that in the late quaternary period the area had a semi-arid climate and a species-restricted plant community.<br><br>\r\n\r\nSince Sri Lanka has a long non-written history, there is a significant and logical folk story, which also goes with the epic \'Ramayana\' with some deviations. It is believed that Thotupala mountain in Horton plain to be the place where King Rawana landed his aircraft, \'Dandumonaraya\'. According to the story King Rawana kidnapped Sitha, who was the wife of Rama as a revenge for cutting King Rawana\'s sister, Suparnika\'s nose. It provoked Rama in India and he led an army that consisted of monkey like humans, whose leader was Hanuman. In the story, Hanuman set fire to Horton plains and that fire lasted for a long time. The original name, Maha Eliya Thenna carries the meaning, \'The hugely lighten ground\'. Even now the upper layer of soil can be seem in a blackish grey colour. There had been some soil tests done by local universities, and it revealed that upper layer contains a high amount of Calcium Carbonate and Potash. For Sri Lankans, Horton Plains is very significant in their History and Culture.<br><br>\r\n\r\nSir Joseph Dalton Hooker had advised the British Government \"to leave all Montane Forests above 5000 ft. undisturbed\" and an administrative order to this effect had been issued in 1873 that prevented clearing and felling of forests in the region. Horton Plains was designated as a wildlife sanctuary on 5 December 1969, and because of its biodiversity value, was elevated to a national park on 18 March 1988. The Peak Wilderness Sanctuary which lies in west is contiguous with the park. The land area covered by Horton Plains is 3,160 hectares (12.2 sq mi). Horton Plains contains the most extensive area of cloud forest still existing in Sri Lanka. The vegetation of the park is classified into two distinctive groups, 2,000 ha (7.7 sq mi) of wet patna (Sinhalese: patana, montane grasslands) and 1,160 ha (4.5 sq mi) of subtropical montane evergreen forests. Nearly 750 species of plants belonging to 20 families have been recorded from the park. The forest canopy reaches the height of 20 m (66 ft) and features Calophyllum walkeri, forming communities with varieties of Myrtaceae species such as Syzygium rotundifolium, and S. sclerophyllum, and Lauraceae members including Litsea, Cinnamomum, and Actinodaphne speciosa. The undergrowth layer is characterised by Strobilanthes spp. The thickness of the Strobilanthes vegetation hinders the development of a herb layer. Dwarf bamboo species such Indocalamus and Ochlandra also found in the undergrowth layer. Rhodomyrtus tomentosa bushes specially grow in forest margin and near the mountain peaks. Species such as Gordonia and Rhododendron arboreum have spread to Sri Lanka, along the Western Ghats of South India from the Himalayas and are now common. Nearly 54 woody plant species have been recorded from the park, of which 27 (50%) are endemic to Sri Lanka. Frequent fire and grazing characterises Plagioclimax communities of the grassland flora. Grasslands are dominated by Arundinella villosa and Chrysopogon zeylanicus. Waterlogged swamps or slow moving streams are found in low-lying areas, and macrophytes such as Aponogeton jacobsenii, sedge species Isolopis fluitans and Utricularia spp. are found near the slow moving streams. The bamboo Chimonobambusa densifolia thrive along the banks of the streams, and near the swampy areas grass species such as Juncus prismatocarpus, Garnotia mutica, Eriocaulon spp. and Exacum trinervium are common. Tussock grasses such as Chrysopogon zeylanicus and Cymbopogon confertiflorus are found in the wet hollows. Herbaceous flora of the grasslands include temperate species including Ranunculus, Pedicularis, Senecio, Gentiana and Alchemilla and also tropical species such as Eriocaulon and Ipsea speciosa (a rare endemic daffodil orchid). The most widespread boreal herbaceous plants of the park are Viola, Lobelia, Gaultheria, Fragaria, and Plantago.<br><br>\r\n\r\nTree trunks and branches are ornamented with many species of ferns, Lycopodium, lichens, and orchids. Old man\'s beard (Usnea barbata) hanging from branches adds to the beauty of the forests. About 16 of the orchid species being endemic. Other notable plants include shrubs such as Rhodomyrtus tomentosa, Gaultheria fragrantissima, herbs, Exacum trinervium, E. walkeri, Drosera indica, and tree ferns Cyathea spp. Anzia, a foliose lichen genus belonging to the family Parmeliaceae, which had not been recorded in Sri Lanka before, was discovered here in 2007. There are conflicting views on how the grasslands of the park came into being, whether man-made or natural. It is now believed that the grasslands on the dry slopes were created by forest clearance and fires while grasslands in low-lying areas were naturally created by wet conditions, frost and soil erosion. ', NULL, 160, 4, 3, 'horton.jpg', 1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.7287724784387!2d80.80690771744385!3d6.8028135999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3882edb4b78ef%3A0xcebca89153777249!2sHorton%20Plains%20National%20Park!5e0!3m2!1sen!2slk!4v1657045271300!5m2!1sen!2slk');

-- --------------------------------------------------------

--
-- Table structure for table `destinations_in_packages`
--

CREATE TABLE `destinations_in_packages` (
  `packages_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinations_in_packages`
--

INSERT INTO `destinations_in_packages` (`packages_id`, `destination_id`) VALUES
(1, 6),
(1, 7);

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
(3, 'trending1.jpg', 13),
(4, 'trending2.jpg', 13),
(5, 'trending3.jpg', 13),
(6, 'trending4.jpg', 13);

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

--
-- Dumping data for table `destination_plan`
--

INSERT INTO `destination_plan` (`id`, `day`, `title`, `plan`, `destination_id`) VALUES
(3, 1, 'title 01', 'We’ll meet at 4 p.m. at our hotel in Luzern (Lucerne) for a “Welcome to Switzerland” meeting. Then we’ll take a meandering evening walk through Switzerland’s most charming lakeside town, and get acquainted with one another over dinner together. Sleep in Luzern (2 nights). No bus. Walking: light.', 13),
(4, 2, 'title 02', 'Enjoy an orientation walk of Zurich’s OLD TOWN, Switzerland’s center of banking and commerce. Then, leave Zurich and start your Swiss adventure. You’ll quickly discover that Switzerland isn’t just home to the Alps, but also to some of the most beautiful lakes. First, stop at the foot of the Jura Mountains in the picturesque town of Biel, known as Bienne by French-speaking Swiss, famous for watch-making, and explore the historical center. Next, enjoy a scenic drive to lakeside Neuchâtel, dominated by the medieval cathedral and castle. Time to stroll along the lake promenade before continuing to stunning Geneva, the second-largest city in Switzerland, with its fantastic lakeside location and breathtaking panoramas of the Alps.', 13),
(5, 3, 'title 03', 'Our morning drive takes us from Swiss lakes to Swiss Army. At the once-secret Swiss army bunker at Fortress Fürigen, we’ll see part of the massive defense system designed to keep Switzerland strong and neutral. Afterward, a short drive into the countryside brings us to the charming Alpine village of Engelberg, our picturesque home for the next two days. We’ll settle into our lodge then head out for an orientation walk. Our stroll through the village will end at the Engelberg Abbey, a Benedictine monastery with its own cheese-making operation. You’ll have free time to wander back before dinner together. Sleep in Engelberg (2 nights). Bus: 1 hr. Walking: light.', 13);

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
(7, 'Tickets', 'fa fa-sticky-note'),
(8, 'Transportation', 'fa fa-taxi'),
(9, 'Tour Guiad', 'fa fa-user');

-- --------------------------------------------------------

--
-- Table structure for table `facilities_in_destinations`
--

CREATE TABLE `facilities_in_destinations` (
  `facilities_id` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities_in_destinations`
--

INSERT INTO `facilities_in_destinations` (`facilities_id`, `destination_id`) VALUES
(7, 13),
(8, 13),
(9, 13);

-- --------------------------------------------------------

--
-- Table structure for table `facilities_in_packages`
--

CREATE TABLE `facilities_in_packages` (
  `packages_id` int(11) NOT NULL,
  `facilities_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities_in_packages`
--

INSERT INTO `facilities_in_packages` (`packages_id`, `facilities_id`) VALUES
(1, 3),
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `facilities_in_rooms`
--

CREATE TABLE `facilities_in_rooms` (
  `facility_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `facilities_in_rooms`
--

INSERT INTO `facilities_in_rooms` (`facility_id`, `room_id`) VALUES
(3, 1),
(4, 1),
(5, 1),
(6, 1);

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
(33, 'Tomas Andrew', 'thomasa34@gmail.com', '13-06-2022', 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum.Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum.', 1, NULL, 1),
(34, 'ascsz', 'abc@gmail.com', '13-06-2022', 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum.Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum.', 1, NULL, 1),
(36, 'deshan', 'abc@gmail.com', '16-06-2022', 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum.Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum.', NULL, 13, 1),
(41, 'deshan', 'deshan.bandara1997@gmail.com', '18-06-2022', 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum.Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum.', 1, NULL, 1),
(42, 'Suneth Chanuka', 'suneth chanuka', '25-06-2022', 'sckodmsc', 1, NULL, 0),
(43, 'suneth', 'abc@gmail.com', '16-06-2022', 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum.Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum.', NULL, 13, 1),
(44, 'mahesh', 'abc@gmail.com', '16-06-2022', 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum.Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum.', NULL, 13, 1),
(45, 'kavindhu', 'kan@gmail.com', '15-07-2022', 'Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum.Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas faucibus mollis interdum.', NULL, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `location` text NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `ratings` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `name`, `location`, `description`, `image`, `ratings`) VALUES
(1, 'Taj Samudra', 'Colombo 07', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.', '111.jpg', 5),
(2, 'Citrus', 'Hikkaduwa', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.', '111.jpg', 3),
(3, 'Blue Sky', 'Unawatuna', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.', '111.jpg', 2),
(4, 'Top Secret', 'Welligama', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.', '111.jpg', 1);

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

--
-- Dumping data for table `inquries`
--

INSERT INTO `inquries` (`id`, `name`, `email`, `date`, `inqury`, `reply`) VALUES
(1, 'deshan', '0', '0000-00-00', '0', NULL),
(2, 'deshan', '0', '0000-00-00', '0', NULL),
(3, 'deshan', '0', '0000-00-00', '0', NULL),
(4, 'deshan', '0', '0000-00-00', '0', NULL),
(5, 'Geeth Werasinghe', 'geethsinghe@gmail.com', '0000-00-00', 'Can I know the best packages of yours', NULL),
(6, 'deshan bandara', 'deshan.bandara1997@gmail.com', '0000-00-00', 'i need to blah bal bala', NULL),
(7, 'Suneth Chanuka', 'deshan.bandara1997@gmail.com', '0000-00-00', 'How can i call you', NULL);

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
  `map` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `description`, `duration`, `image`, `price`, `status`, `discount`, `map`) VALUES
(1, 'package 001', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has ', '05 Days/ 04 Nights', '11.jpg', 100, 'Platinum', NULL, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.3981114302615!2d80.26267460790912!3d6.158040865619478!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae17aa53ebbfec7%3A0xcdc3b30e23c245db!2sAralliya%20Urala!5e0!3m2!1sen!2slk!4v1655375122768!5m2!1sen!2slk'),
(2, 'package 002', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has ', '05 Days/ 04 Nights', '11.jpg', 100, 'Platinum', NULL, NULL),
(3, 'package 003', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has ', '05 Days/ 04 Nights', '33.jpg', 100, 'Gold', 15, NULL),
(4, 'package 004', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has ', '05 Days/ 04 Nights', '44.jpg', 100, 'Silver', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `album_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `image`, `album_id`) VALUES
(1, '1.jpg', 1),
(2, '2.jpg', 1),
(3, '3.jpg', 1),
(4, '4.jpg', 1);

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

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `day`, `title`, `plan`, `package_id`) VALUES
(1, 1, 'tittle 01', 'Arrive at the airport and transfer to hotel. Check-in time at the hotel will be at 2:00 PM. In the evening, enjoy a tasty dinner on the Dhow cruise. Later, head back to the hotel for a comfortable overnight stay', 1),
(2, 2, 'tittle 02', 'After breakfast, proceed for tour of Dubai city. Visit Jumeirah Mosque, World Trade Centre, Palaces and Dubai Museum. Enjoy your overnight stay at the hotel.In the evening, enjoy a tasty dinner on the Dhow cruise. Later, head back to the hotel for a comfortable overnight stay.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `plan_in_packages`
--

CREATE TABLE `plan_in_packages` (
  `plan_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan_in_packages`
--

INSERT INTO `plan_in_packages` (`plan_id`, `package_id`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `description`, `price`, `hotel_id`) VALUES
(1, 'Single Room', 'Owl Carousel 2.x.x is not compatibile with previous version 1.x.x. The idea stays the same and it has a lot in common with Owl1 but the core code was re-written from scratch and I’m very proud with all the new features.Owl Carousel 2.x.x is not compatibile with previous version 1.x.x. The idea stays the same and it has a lot in common with Owl1 but the core code was re-written from scratch and I’m very proud with all the new features.Owl Carousel 2.x.x is not compatibile with previous version 1.x.x. The idea stays the same and it has a lot in common with Owl1 but the core code was re-written from scratch and I’m very proud with all the new features.', 100, 1),
(2, 'Double Room', 'Owl Carousel 2.x.x is not compatibile with previous version 1.x.x. The idea stays the same and it has a lot in common with Owl1 but the core code was re-written from scratch and I’m very proud with all the new features.Owl Carousel 2.x.x is not compatibile with previous version 1.x.x. The idea stays the same and it has a lot in common with Owl1 but the core code was re-written from scratch and I’m very proud with all the new features.Owl Carousel 2.x.x is not compatibile with previous version 1.x.x. The idea stays the same and it has a lot in common with Owl1 but the core code was re-written from scratch and I’m very proud with all the new features.', 200, 1),
(3, 'Family Room', 'Owl Carousel 2.x.x is not compatibile with previous version 1.x.x. The idea stays the same and it has a lot in common with Owl1 but the core code was re-written from scratch and I’m very proud with all the new features.Owl Carousel 2.x.x is not compatibile with previous version 1.x.x. The idea stays the same and it has a lot in common with Owl1 but the core code was re-written from scratch and I’m very proud with all the new features.Owl Carousel 2.x.x is not compatibile with previous version 1.x.x. The idea stays the same and it has a lot in common with Owl1 but the core code was re-written from scratch and I’m very proud with all the new features.', 250, 1);

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
(23, 'deshan bandara', 'deshan.bandara1997@gmail.com', 'EaMYhxiW9h2Hr5y', '7581', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `articals`
--
ALTER TABLE `articals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `destination_photos`
--
ALTER TABLE `destination_photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `destination_plan`
--
ALTER TABLE `destination_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `inquries`
--
ALTER TABLE `inquries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
