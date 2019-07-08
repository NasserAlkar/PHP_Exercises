-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 05, 2019 at 12:19 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moviedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `directors`
--

DROP TABLE IF EXISTS `directors`;
CREATE TABLE IF NOT EXISTS `directors` (
  `directors_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `picture` varchar(250) NOT NULL,
  PRIMARY KEY (`directors_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `directors`
--

INSERT INTO `directors` (`directors_id`, `first_name`, `last_name`, `date_of_birth`, `country`, `picture`) VALUES
(1, 'noOne', 'noThing', '1000-01-01', NULL, 'https://mymodernmet.com/wp/wp-content/uploads/archive/S-XfnShhJZWxBMFOlFyl_moviedirectorportraits07.jpg'),
(2, 'nasser', 'alkar', '1992-05-23', 'syrian', 'https://cdn.dribbble.com/users/47218/screenshots/2084633/slash.png'),
(3, 'gokdag', 'goktepe', '1984-05-25', 'Turkia', 'http://www.fubiz.net/wp-content/uploads/2015/10/moviedirectorsposters-3-900x1125.jpg'),
(4, 'simon', 'daTeachers', '1985-11-25', 'France', 'https://i.pinimg.com/originals/48/8e/d2/488ed2db152bdfab2b2d89c47d6019ed.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `movie_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(30) NOT NULL,
  `release_year` year(4) DEFAULT NULL,
  `views` int(11) NOT NULL,
  `directorID` int(11) DEFAULT NULL,
  `poster` varchar(250) NOT NULL,
  PRIMARY KEY (`movie_id`),
  KEY `directorID` (`directorID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `release_year`, `views`, `directorID`, `poster`) VALUES
(1, 'fight club', 2001, 60767645, 2, 'https://m.media-amazon.com/images/M/MV5BMjJmYTNkNmItYjYyZC00MGUxLWJhNWMtZDY4Nzc1MDAwMzU5XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg'),
(2, 'star wars', 2018, 765456, 3, 'https://alternativemovieposters.com/wp-content/uploads/2017/12/taylor_newhope.jpg'),
(3, 'Night Crawler', 2015, 7864564, 4, 'https://www.movieposter.com/posters/archive/main/199/MPW-99844'),
(4, 'lord of the ring', 2001, 124543546, 2, 'https://images-na.ssl-images-amazon.com/images/I/8150KG7y2EL.jpg\r\n'),
(5, 'star wars IV', 2005, 53215, 3, 'https://m.media-amazon.com/images/M/MV5BNzVlY2MwMjktM2E4OS00Y2Y3LWE3ZjctYzhkZGM3YzA1ZWM2XkEyXkFqcGdeQXVyNzkwMjQ5NzM@._V1_.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `movies`
--
ALTER TABLE `movies`
  ADD CONSTRAINT `movies_ibfk_1` FOREIGN KEY (`directorID`) REFERENCES `directors` (`directors_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
