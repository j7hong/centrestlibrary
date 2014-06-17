-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2014 at 10:26 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cslibrary`
--
CREATE DATABASE IF NOT EXISTS `cslibrary` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `cslibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `Books_Id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Author` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ISBN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`Books_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Books_Id`, `Title`, `Author`, `ISBN`, `Location`, `Type`) VALUES
(1, 'HTML and CSS', 'Elizabeth Castro, Bruce Hyslop', '978-0-321-92883-2', 'Technology', 'Paperback'),
(2, 'Web Developer''s Cookbook', 'Robin Nixon', '978-0-07-179431-2', 'Technology', 'Paperback'),
(3, 'Don''t Make Me Think!', 'Steve Krug', '0-321-34475-8', 'Technology', 'Paperback'),
(4, 'PHP, MySQL & JavaScript', 'Robin Nixon', '978-0-596-15713-5', 'Technology', 'Paperback');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_06_12_112722_create_Books_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'james', 'password'),
(3, 'tester', 'pass'),
(4, 'teacher', 'yes'),
(5, 'NewName', '$2y$10$6X3sF4aVIpjGfsnp3E9cl.dIUYWYE8rVZ2pUcwemEiZqlSDKOIBFq'),
(6, 'foo', '$2y$10$C/eHq8UgZeGvUye8DNhzyuC79LbaMM.Z4vpPyCDgOloNZFk6KV3yy'),
(7, 'foobar3', '$2y$10$YuNTT63aiorda9uS5ttI/eeM81fzsuFI35dgf5kTqNzYqLA160U8G'),
(8, 'bob', 'joe'),
(9, 'bob', '$2y$10$pCNTgH5kEfmP8GaFPDPUTerJsDkWZcj26wtOxRCiTDDp0QmuLGbdW'),
(10, 'timhortons', 'coffee'),
(11, 'timhortons', '$2y$10$.BU1rWKW4SgNW464hNKhruCFtk5QMl36CFRb2pYnxRvjwFOL6zjp2'),
(12, 'barry', 'white'),
(13, 'jack', '$2y$10$Cq//ivZQyv8eiQHy.kFWue/Ba7ZR75zZ7zNBkIHHbSMgLpkCuvxTO'),
(14, 'NewUser', '$2y$10$rtNTpjd5aYrL0gbYTlKAo.Y1Lj0t1bgZI5NzdAe8KItOaRzG1ngPi'),
(15, 'NewUser', '$2y$10$s.pGB2uwXheE7xP4PAHQaOthF3dPPcdsAn618DxUqHrfqk9Q43R8K'),
(16, 'AnotherUser', '$2y$10$sRAb.rbfCCRZ5hVfEnOvUuwzbJBa.jweiILq/nJ0G2uB60dSNSN8i');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
