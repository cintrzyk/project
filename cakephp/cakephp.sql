-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 12 Sty 2011, 02:44
-- Wersja serwera: 5.5.8
-- Wersja PHP: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `cakephp`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `profile_id` int(10) NOT NULL,
  `friend_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=39 ;

--
-- Zrzut danych tabeli `friends`
--

INSERT INTO `friends` (`id`, `profile_id`, `friend_id`) VALUES
(20, 23, 18),
(21, 23, 20),
(24, 20, 18),
(26, 18, 24),
(29, 27, 25),
(35, 1, 21),
(36, 1, 24),
(37, 1, 18),
(38, 20, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `imie` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nazwisko` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `miejscowosc` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pseudonim` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rok_urodzenia` int(11) DEFAULT NULL,
  `profile_file_path` varchar(80) CHARACTER SET utf8 DEFAULT 'gravatar.jpg',
  `profile_file_name` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `profile_file_size` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `profile_content_type` varchar(30) CHARACTER SET utf8 DEFAULT NULL,
  `user_id` int(7) unsigned NOT NULL,
  `plec` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `gg` int(7) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=25 ;

--
-- Zrzut danych tabeli `profiles`
--

INSERT INTO `profiles` (`id`, `imie`, `nazwisko`, `miejscowosc`, `pseudonim`, `rok_urodzenia`, `profile_file_path`, `profile_file_name`, `profile_file_size`, `profile_content_type`, `user_id`, `plec`, `gg`) VALUES
(1, 'MichaÅ‚', 'Podlecki', 'GiÅ¼ycko / GdaÅ„sk', 'Misiek', 1989, '4d2d118f-31d0-430a-92cb-15d4c0a80065.jpg', 'Aston Martin V12 Vantage.jpg', '195375', 'image/jpeg', 1, 'mÄ™Å¼czyzna', 2316596),
(18, 'Anna', 'Podlecka', 'Gda', '', 1991, '4d288f3f-d55c-43d4-b980-0f28c0a80065.jpg', '3889907.jpg', '302609', 'image/jpeg', 10, 'kobieta', 6897689),
(19, 'Piotr', 'Pazdan', 'Sadlinki', 'rite', 1985, 'gravatar.jpg', NULL, NULL, NULL, 13, 'mÄ™Å¼czyzna', 6177327),
(20, 'Konrad', 'GÃ³rny', 'GdaÅ„sk', 'Kondzik', 1989, '4d2d006a-6854-4162-b974-15d40e56cf83.jpg', 'gravatar.jpg', '17231', 'image/jpeg', 14, 'mÄ™Å¼czyzna', 1231414),
(21, 'MichaÅ‚', 'Rogulski', 'SÄ™pÃ³lno KrajeÅ„skie', 'zulusnet', 1989, '4d2cf75f-7b30-410c-9798-15d4c0a80065.jpg', 'ZdjÄ™cie021.jpg', '232232', 'image/jpeg', 19, 'mÄ™Å¼czyzna', 3771771),
(23, 'Natalia', 'Tomaszewska', 'GdaÅ„sk', '', 1989, '4d288520-78a8-48b7-b7ba-0f28c0a80065.jpg', 'Audi R8 02.jpg', '930216', 'image/jpeg', 27, 'kobieta', 5454545),
(24, 'Adrian', 'StabiÅ„ski', 'GiÅ¼ycko', 'Biesiad', 1989, '4d2886c9-a798-48fc-ba4f-0f28c0a80065.JPG', 'DSC02933.JPG', '833004', 'image/jpeg', 28, 'mÄ™Å¼czyzna', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(7) unsigned NOT NULL AUTO_INCREMENT,
  `login` varchar(50) CHARACTER SET utf8 NOT NULL,
  `haslo` varchar(32) CHARACTER SET utf8 NOT NULL,
  `lastVisit` datetime DEFAULT '0000-00-00 00:00:00',
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `login`, `haslo`, `lastVisit`, `created`, `modified`) VALUES
(1, 'login1', 'haslo1', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'dziunia', 'holikozaurus83', '0000-00-00 00:00:00', '2011-01-07 10:35:29', '2011-01-07 10:35:29'),
(13, 'ppazdan', '123456', '0000-00-00 00:00:00', '2011-01-08 14:46:49', '2011-01-08 14:46:49'),
(14, 'konrad', 'haslo', '0000-00-00 00:00:00', '2011-01-08 14:58:51', '2011-01-08 14:58:51'),
(19, 'zulusnet', 'elw1szyje', '0000-00-00 00:00:00', '2011-01-08 15:13:43', '2011-01-08 15:13:43'),
(27, 'natka', 'misiek', '0000-00-00 00:00:00', '2011-01-08 15:38:37', '2011-01-08 15:38:37'),
(28, 'szef', 'szef', '0000-00-00 00:00:00', '2011-01-08 15:41:21', '2011-01-08 15:41:21');
