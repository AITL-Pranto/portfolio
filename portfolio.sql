-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 13, 2022 at 02:34 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_and_professional`
--

DROP TABLE IF EXISTS `academic_and_professional`;
CREATE TABLE IF NOT EXISTS `academic_and_professional` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `place` text NOT NULL,
  `description` text NOT NULL,
  `from_year` varchar(50) NOT NULL,
  `to_year` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_and_professional`
--

INSERT INTO `academic_and_professional` (`id`, `person_id`, `position`, `place`, `description`, `from_year`, `to_year`) VALUES
(1, 1, 'DEPARTMENT HEAD', 'COMPUTER SCIENCE AND ENGINEERING : NORTHERN UNIVERSITY OF BUSINESS & TECHNOLOGY, KHULNA', ' I served as the Head of the Computer Science and Engineering Department since 22 October, 2016 to 15 july 2018', '2016', '2018'),
(2, 1, 'COORDINATOR OF BBA PROGRAM', 'DEPARTMENT OF BUSINESS ADMINISTRATION OF NORTHERN UNIVERSITY BANGLADESH', 'I worked as a Coordinator of BBA program under the Department of Business Administration of Northern University Bangladesh from May 01, 2013 to 21st October, 2016.', '2016', ''),
(3, 1, 'PROCTOR', 'NORTHERN UNIVERSITY OF BUSINESS & TECHNOLOGY, KHULNA', 'I have been serving as the Proctor of NUBT Khulna since 29th December, 2015.', '2015', ''),
(4, 1, 'ASSISTANT PROCTOR', 'NORTHERN UNIVERSITY OF BANGLADESH', 'I worked as Assistant Proctor of NUB from 14, December, 2012 to 31, December, 2015.', '2015', ''),
(5, 1, 'CONVENER', 'PROMOTION AND BRANDING COMMITTEE OF NUBT KHULNA', 'I have also been assigned as the Convener of the Promotion and Branding committee of NUBT Khulna since 3rd August, 2016', '2016', ''),
(6, 1, 'ASSISTANT PROFESSOR', 'NORTHERN UNIVERSITY OF BUSINESS AND TECHNOLOGY KHULNA', 'I have been teaching in Northern University of Business and Technology Khulna as an Assistant Professor under the Department of Computer Science and Engineering since 29th February, 2016.', '2016', ''),
(7, 1, 'ASSISTANT PROFESSOR OF CSE', 'DEPARTMENT OF CSE, NUBTK', 'I worked in Northern University Bangladesh as Assistant Professor of CSE under the Department of Business Administration from February 01, 2011 to February, 28, 2016', '2016', ''),
(8, 1, 'SENIOR LECTURER', 'DEPARTMENT OF BUSINESS ADMINISTRATION', 'I worked as a Senior Lecturer in CSE under the Department of Business Administration in the same University from 1st February, 2009 to 31st January, 2011.', '2011', ''),
(9, 1, 'LECTURER IN CSE', 'NORTHERN UNIVERSITY OF BUSINESS AND TECHNOLOGY KHULNA', 'I worked as a Lecturer in CSE under Business Administration Department in the same University from 1st February, 2007 to 31st January, 2009.', '2009', '');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

DROP TABLE IF EXISTS `education`;
CREATE TABLE IF NOT EXISTS `education` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `degree_name` text NOT NULL,
  `institution` varchar(200) NOT NULL,
  `thesis_title` text NOT NULL,
  `abstract` text NOT NULL,
  `link` text NOT NULL,
  `year` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `person_id`, `degree_name`, `institution`, `thesis_title`, `abstract`, `link`, `year`) VALUES
(1, 1, 'DOCTOR OF PHILOSOPHY (PHD.)', 'KHULNA UNIVERSITY OF ENGINEERING AND TECHNOLOGY (KUET)', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni, sed', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias optio temporibus consequatur. Maiores delectus fugit assumenda ut blanditiis quo, consectetur nemo voluptatum itaque saepe, alias cupiditate vel culpa animi! Dolore.', 'link', 'On Going'),
(2, 1, 'MASTER OF SCIENCE (M.SC. ENG.) IN COMPUTER SCIENCE & ENGINEERING', 'ISLAMIC UNIVERSITY KUSHTIA', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eligendi.', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat soluta commodi totam facere autem molestias accusantium! Impedit repudiandae quis alias, veritatis facere harum blanditiis nemo dolores vero. Doloremque labore, reiciendis nemo beatae suscipit voluptate delectus asperiores vero cupiditate magnam debitis numquam, cumque totam vitae aut fugit sint ipsa, illo est!', 'link', '2002'),
(3, 1, 'BACHELOR OF SCIENCE (B.SC. ENG.) IN COMPUTER SCIENCE AND ENGINEERING', 'ISLAMIC UNIVERSITY KUSHTIA', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, minus.', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptate reprehenderit cum accusamus, id laboriosam inventore amet alias. Aspernatur harum incidunt, sint architecto laudantium adipisci deserunt a illum molestiae perferendis dicta.', '', '2001'),
(4, 1, 'HIGHER SECONDARY CERTIFCATE (HSC)', 'B. L. UNIVERSITY COLLEGE, DAULATPUR, KHULNA.', '', 'Board: Jessore\r\nGroup: Science\r\nGrade: 1st Division\r\nPassing Year: 1996', '', '1996'),
(5, 1, 'SECONDARY SCHOOL CERTIFCATE (SSC)', 'KASHIMARY IDEAL HIGH SCHOOL, KASHIMARY', '', 'Board: Jessore\r\nGroup: Science\r\nGrade: 1st Division\r\nPassing Year: 1994', '', '1994');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

DROP TABLE IF EXISTS `person`;
CREATE TABLE IF NOT EXISTS `person` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `bio` text NOT NULL,
  `hobbies` text NOT NULL,
  `researches` text NOT NULL,
  `carear_objective` text NOT NULL,
  `workshop_n_seminars` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`id`, `name`, `bio`, `hobbies`, `researches`, `carear_objective`, `workshop_n_seminars`) VALUES
(1, 'M. Rabiul Islam', 'has completed his graduation & Post graduation from Islamic University In Computer Science and PHD Degree also going on from Khulna University of Engineering & Technology (KUET). Now he is working as a Assistant professor of BME at Islamic University, Kushtia.He has more than 10 publications till now. He has a long teaching experience of 15 year.', 'Painting and Sketching,Writings,Reading Books,Watching Movie, Playing Games', 'Health Informatics,Data Science,Machine Learning,Biomedical Engineering,Cognitive Science,Predictive Modeling,Mobile Computing', 'Building up a challenging and rewarding career in a technologically developed educational organization that provides structured career advancement within the extent of competitive and dynamic environment and face challenging opportunities with sincerity, punctuality, commitment, self-competency and hard work.', 'Social Business : Building Prosperity By SAYS.|Introduction To Online Work For Freelancers by Elance.|Participation in BDS 12th National Debate Workshop.|Professional Resume & CV writting by Rightsight Consultancy & Training Center.|Participation in Digital Innovation Fair in 2015.|EESTEC Online Seminar, Part 1 to 3: Android Basics.');

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

DROP TABLE IF EXISTS `publications`;
CREATE TABLE IF NOT EXISTS `publications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `day` varchar(10) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `title` varchar(500) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `type` varchar(100) NOT NULL,
  `is_selected` tinyint(1) NOT NULL,
  `publishers` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`id`, `person_id`, `day`, `month`, `year`, `title`, `location`, `description`, `type`, `is_selected`, `publishers`) VALUES
(1, 1, '27', 'Oct', '2019', 'AUTOMATIC VEHICLE SYSTEM INTERFACED THROUGH PARALLEL PRINTER PORT, ACCEPTED IN THE JOURNAL OF APPLIED SCIENCE & TECHNOLOGY', 'KUSHTIA, BANGLADESH', 'Islamic University, Kushtia. Bangladesh', 'Thesis', 1, 'M. Rabiul Islam'),
(2, 1, '10', 'Sep', '2016', 'EMERGING CYBER THREATS IN BANGLADESH', 'WOLTERS KLUWER HEALTH', 'In quest of effective legal remedies, the northern university journal of law, volume-i (2010)', 'Journal Paper ', 1, 'M. Rabiul Islam'),
(3, 1, '03', 'Nov', '2017', 'DESIGN AND DEVELOPMENT OF AUTOMATIC ENGLISH TO BANGLA TEXT TRANSLATOR, INTERNATIONAL JOURNAL OF COMPUTER APPLICATION ISSUE 3, VOLUME 1 (FEBRUARY 2013)', 'BANGLADESH', 'Available online on http://www.rspublication.com/ijca/ijca_index.htm ISSN: 2250-1797 Page 118', 'Journal Paper', 1, 'M. Rabiul Islam'),
(4, 1, '22', 'Dec', '2017', 'FACTORS AFFECTING CUSTOMERS’ PURCHASING DECISION OF TOILETRIES PRODUCTS', 'KHULNA, BANGLADESH', 'An empirical Study in Khulna Region, in the journal of Business and technology, Northern University Bangladesh', 'Conferences', 0, 'M. Rabiul Islam'),
(5, 1, '09', 'Feb', '2018', 'EFFECTS OF CUSTOMERS’ RELATIONAL BENEFITS ON THE DEVELOPMENT OF BANKING INDUSTRY', 'BANGLADESH', 'An Empirical Study on Some Commercial Banks of Bangladesh', 'Conferences', 0, 'M. Rabiul Islam'),
(6, 1, '10', 'Oct', '2018', 'IMPACT OF THE INFLUENTIAL FACTORS ON LAPTOP BUYING DECISION', 'BANGLADESH', 'A Study on the Students of Bangladesh, Asian Journal of Research in Social Sciences and Humanities, Year : 2015, Volume : 5, Issue : 7, First page : ( 116) Last page : ( 124), Online ISSN : 2249-7315.', 'Journal Paper', 1, 'M. Rabiul Islam'),
(7, 1, '19', 'Jul', '2018', 'EXPLORING CUSTOMER SATISFACTION OF TWO WHEELER MOTOR BIKE USERS', 'BANGLADESH', 'A comparative study on some selected brands, International Journal of Multidisciplinary Research and Development Online ISSN: 2349-4182 Print ISSN: 2349-5979, www.allsubjectjournal.com, Volume 2; Issue 11; November 2015; Page No. 457-468\r\n', 'Journal Paper', 0, 'M. Rabiul Islam'),
(8, 1, '10', 'Jul', '2018', 'BOOK: CREDIT RISK GRADING ADOPTED BY PRIVATE COMMERCIAL BANKS', 'GERMANY', 'LAP, LAMBERT Academic Publishing is a trade mark of Omniscriptum GmbH & Co. KG, Bahnhofstrae28, 66111 Saarbrucken, Deutchland, Germany, email: info@lap-publishing.com, ISBN: 978-3-659-81228-6, 2nd Author.', 'Conferences', 0, 'M. Rabiul Islam');

-- --------------------------------------------------------

--
-- Table structure for table `research_profile_link`
--

DROP TABLE IF EXISTS `research_profile_link`;
CREATE TABLE IF NOT EXISTS `research_profile_link` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `person_id` int(11) NOT NULL,
  `google_scholar_profile` text NOT NULL,
  `orcid_id` text NOT NULL,
  `wos_researcher_id` text NOT NULL,
  `researchgate_profile` text NOT NULL,
  `scopus_id` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `research_profile_link`
--

INSERT INTO `research_profile_link` (`id`, `person_id`, `google_scholar_profile`, `orcid_id`, `wos_researcher_id`, `researchgate_profile`, `scopus_id`) VALUES
(1, 1, 'https://scholar.google.com/citations?hl=en&amp;user=2OnxEuEAAAAJ', 'https://orcid.org/0000-0003-1072-3555', 'https://publons.com/researcher/3746708/m-raihan/', 'https://www.researchgate.net/profile/M-Raihan', 'https://www.scopus.com/authid/detail.uri?authorId=57193738838');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `level` varchar(100) NOT NULL,
  `main_topic` varchar(200) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `skill_level` int(11) NOT NULL,
  `fields` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `level`, `main_topic`, `experience`, `skill_level`, `fields`) VALUES
(1, 'Machine Learning, Statistical Analysis, Predictive Model Development, Artificial Intelligence and Expert System.', 'Advanced', 'DATA ANALYSIS AND PATTERN RECOGNITION', 'More than 5 Years', 100, 'WEKA, IBM SPSS, R, Python, Graphpad Prism, Microsoft Power BI'),
(2, 'MS WORD, EXCEL, POWER POINT, PUBLISHER', 'Advanced ', 'MS OFFICE', 'More than 5 Years', 100, 'WORD, EXCEL, POWER POINT, PPT'),
(3, 'Logic Development, Structural Programing.', 'Advanced', 'C', 'More than 5 Years', 100, 'C, C++, Array, String, Branching, Looping'),
(4, 'Object Oriented Programming. SWING applications', 'Advanced ', 'JAVA', 'More than 5 Years', 100, 'OOP,JAVA,JVM,Swing'),
(5, 'Object Oriented Programming. Desktop Applications, Windows Phone Applications', 'Advanced ', 'C#, .NET, SQL, XAML', 'More than 5 Years', 92, 'OOP,C#,Windows Phone,Database Projec,tDesktop Applications'),
(6, 'Technical Writing', 'Advanced ', 'LATEX ', 'More than 5 Years', 92, 'Research Article,Content Writing,Presentation,Research,TeX Studio'),
(7, 'JAVA, OOP Programing, Mobile Application Development', 'Advanced', 'ANDROID ', 'More than 5 Years', 88, 'Android,JAVA,JVM,XML'),
(8, 'Website Development and Design', 'Intermediate ', 'WEB PROGRAMING ', 'More than 5 Years', 88, 'HTML,CSS,WordPress,MySQL,PHP');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
