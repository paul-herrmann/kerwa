-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 08 Mar 2011, 20:18
-- Wersja serwera: 5.1.36
-- Wersja PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `qwejq`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `img`
--

CREATE TABLE IF NOT EXISTS `img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `delete_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `name` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Zrzut danych tabeli `img`
--

INSERT INTO `img` (`id`, `date`, `user_id`, `deleted`, `delete_date`, `name`, `link`) VALUES
(1, '2011-02-20 17:32:47', 3, 1, '2011-02-20 22:52:52', 'dsadas', ''),
(2, '2011-02-20 19:00:33', 3, 1, '2011-02-20 20:54:47', 'ytrytytyt', ''),
(3, '2011-02-20 19:06:04', 3, 1, '2011-02-20 20:54:47', '7u7u7u7u7u7u7u7u7u7u', ''),
(4, '2011-02-20 19:11:33', 3, 1, '2011-02-20 20:54:46', 'dsadasdas', ''),
(5, '2011-02-20 19:23:13', 3, 1, '2011-02-20 20:54:45', 'MISTRZ', ''),
(6, '2011-02-20 19:25:31', 3, 0, '0000-00-00 00:00:00', 'dadsdasasddasasdsdsda', '60397_cfba.jpeg'),
(7, '2011-02-20 19:29:04', 3, 0, '0000-00-00 00:00:00', 'dsadsadsad', '8f14e45fceea167a5a36dedd4bea25430607__5029_81e7_500.jpeg'),
(8, '2011-02-20 19:50:37', 3, 0, '0000-00-00 00:00:00', 'dsadasdsaa', 'c9f0f895fb98ab9159f51fd0297e236d0484__9100_f67a.gif'),
(9, '2011-02-20 19:53:45', 3, 0, '0000-00-00 00:00:00', 'arnie', '45c48cce2e2d7fbdea1afc51c7c6ad261291317017373.jpg'),
(10, '2011-02-20 19:57:20', 3, 0, '0000-00-00 00:00:00', 'dsadas', 'd3d9446802a44259755d38e6d163e8201291315553272.png'),
(11, '2011-02-20 22:58:41', 3, 0, '0000-00-00 00:00:00', 'sdadas', '6512bd43d9caa6e02c990b0a82652dca1291343762009.jpg'),
(12, '2011-02-21 02:35:24', 3, 0, '0000-00-00 00:00:00', 'sdasdsda', 'c20ad4d76fe97759aa27a0c99bff67101294526422880.gif'),
(13, '2011-02-21 02:36:02', 3, 0, '0000-00-00 00:00:00', 'hinol', 'c51ce410c124a10e0db5e4b97fc2af39tumblr_lesk9c7Vyk1qdhlt6o1_400.gif'),
(14, '2011-02-21 02:42:44', 3, 1, '2011-02-21 02:44:12', 'ciome at me bro', 'aab3238922bcc25a6f606eb525ffdc5617884-aa0cd1fb0ef8f475c6899d8877a74c9d..gif'),
(15, '2011-02-21 02:44:04', 3, 1, '2011-02-21 02:44:10', 'ciome at me bro', '9bf31c7ff062936a96d3c8bd1f8f2ff317884-aa0cd1fb0ef8f475c6899d8877a74c9d..gif'),
(16, '2011-02-21 02:44:20', 3, 0, '0000-00-00 00:00:00', 'asd', 'c74d97b01eae257e44aa9d5bade97baf17884-aa0cd1fb0ef8f475c6899d8877a74c9d. (1).gif'),
(17, '2011-02-21 02:53:42', 3, 1, '2011-02-21 02:54:04', 'asd', '70efdf2ec9b086079795c442636b55fb17884-aa0cd1fb0ef8f475c6899d8877a74c9d. (1).gif'),
(18, '2011-02-21 02:56:08', 3, 0, '0000-00-00 00:00:00', 'dsa', '6f4922f45568161a8cdf4ad2299f6d231294723842701.gif'),
(19, '2011-02-24 00:48:12', 3, 0, '0000-00-00 00:00:00', 'putin', '1f0e3dad99908345f7439f8ffabdffc40777__6408_a4ba_500.jpeg'),
(20, '2011-02-28 00:07:41', 3, 0, '0000-00-00 00:00:00', 'opis', '98f13708210194c475687be6106a3b841294385199303.gif'),
(21, '2011-02-28 00:08:27', 3, 0, '0000-00-00 00:00:00', 'opis', '3c59dc048e8850243be8079a5c74d0791294433444391.gif'),
(22, '2011-02-28 00:08:32', 3, 0, '0000-00-00 00:00:00', 'opis', 'b6d767d2f8ed5d21a44b0e5886680cb91294433444391.gif'),
(23, '2011-02-28 00:08:51', 3, 0, '0000-00-00 00:00:00', 'opis', '37693cfc748049e45d87b8c7d8b9aacd1295200619250.gif'),
(24, '2011-02-28 00:11:04', 3, 0, '0000-00-00 00:00:00', 'dsad', '1ff1de774005f8da13f42943881c655f1295624424425.gif'),
(25, '2011-02-28 00:11:14', 3, 0, '0000-00-00 00:00:00', 'dsa', '8e296a067a37563370ded05f5a3bf3ec1294508832117.gif'),
(26, '2011-02-28 00:11:54', 3, 0, '0000-00-00 00:00:00', 'opis', '4e732ced3463d06de0ca9a15b6153677e64xl.gif'),
(27, '2011-02-28 00:13:44', 3, 0, '0000-00-00 00:00:00', 'opis', '02e74f10e0327ad868d138f2b4fdd6f01295200619250.gif'),
(28, '2011-02-28 00:38:03', 3, 0, '0000-00-00 00:00:00', 'opis', '33e75ff09dd601bbe69f3510391521891295149975831.gif'),
(29, '2011-02-28 00:42:49', 3, 0, '0000-00-00 00:00:00', 'opis', '6ea9ab1baa0efb9e19094440c317e21b1295197275318.gif'),
(30, '2011-02-28 00:44:05', 3, 0, '0000-00-00 00:00:00', 'opis', '34173cb38f07f89ddbebc2ac9128303f1295197275318.gif'),
(31, '2011-02-28 00:44:08', 3, 1, '2011-02-28 00:44:42', 'opis', 'c16a5320fa475530d9583c34fd356ef51294723842701 (1).gif'),
(32, '2011-02-28 00:44:12', 3, 0, '0000-00-00 00:00:00', 'opis', '6364d3f0f495b6ab9dcf8d3b5c6e0b011294488630956.gif'),
(33, '2011-02-28 00:49:44', 3, 0, '0000-00-00 00:00:00', 'opis', '182be0c5cdcd5072bb1864cdee4d3d6e1295200619250.gif'),
(34, '2011-02-28 00:49:50', 3, 0, '0000-00-00 00:00:00', 'opis', 'e369853df766fa44e1ed0ff613f563bd1295201060831.gif'),
(35, '2011-02-28 00:49:55', 3, 0, '0000-00-00 00:00:00', 'opis', '1c383cd30b7c298ab50293adfecb7b1817602-a33000bf893baf03d11ca6d4369399d4..gif');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `logs_login`
--

CREATE TABLE IF NOT EXISTS `logs_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Zrzut danych tabeli `logs_login`
--

INSERT INTO `logs_login` (`id`, `time`, `user_id`, `username`) VALUES
(1, '2011-02-20 00:29:00', 3, 'admin'),
(2, '2011-02-20 00:29:49', 3, 'admin'),
(3, '2011-02-20 00:32:02', 3, 'admin'),
(4, '2011-02-20 15:47:42', 3, 'admin'),
(5, '2011-02-20 16:25:34', 3, 'admin'),
(6, '2011-02-20 16:44:09', 3, 'admin'),
(7, '2011-02-20 17:16:53', 3, 'admin'),
(8, '2011-02-20 17:30:46', 3, 'admin'),
(9, '2011-02-20 17:32:43', 3, 'admin'),
(10, '2011-02-20 19:11:27', 3, 'admin'),
(11, '2011-02-20 19:50:29', 3, 'admin'),
(12, '2011-02-20 20:54:21', 3, 'admin'),
(13, '2011-02-20 20:54:39', 3, 'admin'),
(14, '2011-02-20 22:58:22', 3, 'admin'),
(15, '2011-02-21 02:33:59', 3, 'admin'),
(16, '2011-02-21 02:34:50', 3, 'admin'),
(17, '2011-02-21 02:54:45', 3, 'admin'),
(18, '2011-02-21 02:55:41', 3, 'admin'),
(19, '2011-02-22 01:49:29', 3, 'admin'),
(20, '2011-02-23 02:26:26', 3, 'admin'),
(21, '2011-02-23 02:26:59', 3, 'admin'),
(22, '2011-02-23 02:27:46', 3, 'admin'),
(23, '2011-02-23 02:32:04', 3, 'admin'),
(24, '2011-02-23 02:33:23', 3, 'admin'),
(25, '2011-02-23 02:34:07', 3, 'admin'),
(26, '2011-02-23 02:34:35', 3, 'admin'),
(27, '2011-02-23 02:34:50', 3, 'admin'),
(28, '2011-02-23 02:35:06', 3, 'admin'),
(29, '2011-02-23 02:35:16', 3, 'admin'),
(30, '2011-02-23 02:52:36', 3, 'admin'),
(31, '2011-02-23 02:53:02', 3, 'admin'),
(32, '2011-02-23 05:00:37', 3, 'admin'),
(33, '2011-02-23 05:01:22', 3, 'admin'),
(34, '2011-02-23 05:18:53', 3, 'admin'),
(35, '2011-02-23 05:36:13', 3, 'admin'),
(36, '2011-02-23 06:00:53', 3, 'admin'),
(37, '2011-02-24 00:47:16', 3, 'admin'),
(38, '2011-02-27 23:57:41', 3, 'admin'),
(39, '2011-02-27 23:58:10', 3, 'admin'),
(40, '2011-02-27 23:59:05', 3, 'admin'),
(41, '2011-02-27 23:59:30', 3, 'admin'),
(42, '2011-02-28 00:07:20', 3, 'admin'),
(43, '2011-02-28 00:13:40', 3, 'admin'),
(44, '2011-03-02 21:54:57', 3, 'admin'),
(45, '2011-03-03 02:22:46', 3, 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `link` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `deleted` tinyint(1) NOT NULL,
  `delete_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `cue` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=112 ;

--
-- Zrzut danych tabeli `posts`
--

INSERT INTO `posts` (`id`, `date`, `link`, `user_id`, `name`, `deleted`, `delete_date`, `cue`) VALUES
(1, '2011-02-10 18:23:57', 'http://www.youtube.com/watch?v=gxvNGy5jUeA', 2, '', 0, '0000-00-00 00:00:00', 0),
(2, '2011-02-10 18:23:57', 'http://www.youtube.com/watch?v=gxvNGy5jUeA', 2, '', 0, '0000-00-00 00:00:00', 0),
(3, '2011-02-10 18:23:57', 'http://www.youtube.com/watch?v=gxvNGy5jUeA', 2, '', 0, '0000-00-00 00:00:00', 0),
(4, '2011-02-10 18:23:57', 'http://www.youtube.com/watch?v=gxvNGy5jUeA', 2, '', 0, '0000-00-00 00:00:00', 0),
(5, '2011-02-10 18:23:57', 'http://www.youtube.com/watch?v=gxvNGy5jUeA', 1, '', 1, '2011-02-23 03:11:46', 0),
(6, '2011-02-10 18:23:57', 'http://www.youtube.com/watch?v=gxvNGy5jUeA', 1, '', 1, '2011-02-23 03:11:43', 0),
(7, '2011-02-10 18:23:57', 'http://www.youtube.com/watch?v=gxvNGy5jUeA', 1, '', 0, '0000-00-00 00:00:00', 0),
(8, '2011-02-10 18:23:57', 'http://www.youtube.com/watch?v=gxvNGy5jUeA', 1, '', 1, '0000-00-00 00:00:00', 0),
(9, '2011-02-10 18:23:57', 'http://www.youtube.com/watch?v=gxvNGy5jUeA', 1, '', 1, '0000-00-00 00:00:00', 0),
(10, '2011-02-10 18:23:57', 'http://www.youtube.com/watch?v=gxvNGy5jUeA', 3, '', 0, '0000-00-00 00:00:00', 0),
(11, '2011-02-10 19:46:23', 'http://www.youtube.com/watch?v=gxvNGy5jUeA', 1, '', 1, '2011-02-20 00:22:09', 0),
(12, '2011-02-10 19:53:00', 'http://www.youtube.com/watch?v=gxvNGy5jUeA', 4, '', 1, '2011-02-20 00:22:07', 0),
(27, '2011-02-11 19:25:44', 'http://www.youtube.com/watch?v=ai4LRYbfE6Q&feature', 3, '', 1, '0000-00-00 00:00:00', 0),
(16, '2011-02-11 19:07:55', 'http://www.youtube.com/watch?v=ai4LRYbfE6Q&feature', 3, '', 1, '0000-00-00 00:00:00', 0),
(17, '2011-02-11 19:13:26', 'http://www.youtube.com/watch?v=ai4LRYbfE6Q&feature', 3, '', 1, '0000-00-00 00:00:00', 0),
(28, '2011-02-11 19:25:45', 'http://www.youtube.com/watch?v=ai4LRYbfE6Q&feature', 3, '', 1, '0000-00-00 00:00:00', 0),
(85, '2011-02-12 20:13:34', 'http://www.youtube.com/watch?v=ai4LRYbfE6Q&feature', 3, 'JAKAS CHUJNIA', 1, '0000-00-00 00:00:00', 0),
(30, '2011-02-11 19:25:47', 'http://www.youtube.com/watch?v=ai4LRYbfE6Q&feature', 3, '', 1, '0000-00-00 00:00:00', 0),
(87, '2011-02-19 23:49:12', 'dsadsa', 3, 'dsadas', 1, '0000-00-00 00:00:00', 0),
(88, '2011-02-19 23:49:15', 'link z youtube.com', 3, 'opis', 1, '0000-00-00 00:00:00', 0),
(89, '2011-02-19 23:49:15', 'link z youtube.com', 3, 'opis', 1, '0000-00-00 00:00:00', 0),
(90, '2011-02-19 23:49:50', 'link z youtube.com', 3, 'opis', 1, '0000-00-00 00:00:00', 0),
(91, '2011-02-19 23:49:51', 'link z youtube.com', 3, 'opis', 1, '0000-00-00 00:00:00', 0),
(92, '2011-02-19 23:49:51', 'link z youtube.com', 3, 'opis', 1, '0000-00-00 00:00:00', 0),
(93, '2011-02-19 23:49:52', 'link z youtube.com', 3, 'opis', 1, '0000-00-00 00:00:00', 0),
(94, '2011-02-19 23:49:52', 'link z youtube.com', 3, 'opis', 1, '0000-00-00 00:00:00', 0),
(95, '2011-02-19 23:49:52', 'link z youtube.com', 3, 'opis', 1, '0000-00-00 00:00:00', 0),
(96, '2011-02-19 23:49:57', 'link z youtube.com', 3, 'opis', 1, '0000-00-00 00:00:00', 0),
(97, '2011-02-22 01:49:43', 'http://www.youtube.com/watch?v=AT98RhgoEoA&feature', 3, 'dasdasdasd', 0, '0000-00-00 00:00:00', 0),
(98, '2011-02-22 02:08:52', 'http://www.youtube.com/watch?v=37saGxpVi74', 3, 'dlugi tekst wsadzony tylko po to zeby zobaczyc jak', 0, '0000-00-00 00:00:00', 0),
(99, '2011-02-22 02:47:38', 'dsa', 3, 'dsa', 1, '2011-02-22 02:47:58', 0),
(100, '2011-02-22 02:47:57', 'http://www.youtube.com/watch?v=JubYNw8xZek', 3, 'Only Girl - Rihanna', 0, '0000-00-00 00:00:00', 0),
(103, '2011-02-23 03:02:17', 'http://www.youtube.com/watch?v=Q16KpquGsIc&feature', 0, 'Jakas bieda', 0, '0000-00-00 00:00:00', 1),
(102, '2011-02-23 02:30:07', 'http://www.youtube.com/watch?v=ffDPTKn7HiY', 0, 'Dancing Horseman', 0, '0000-00-00 00:00:00', 0),
(104, '2011-02-23 03:02:39', 'http://www.youtube.com/watch?v=Q16KpquGsIc&feature', 0, 'sdaasdasdsdasdaadd', 1, '2011-02-23 03:12:01', 1),
(105, '2011-02-23 03:05:06', 'http://www.youtube.com/watch?v=JubYNw8xZek', 0, 'asdasdasdasdasdsda', 0, '0000-00-00 00:00:00', 1),
(106, '2011-02-23 03:13:39', 'Wklej tutaj link z youtube.com...', 0, 'Opis filmu...', 1, '2011-02-23 05:00:03', 1),
(107, '2011-03-02 21:55:10', 'http://www.youtube.com/watch?v=zhpVTQV4G8w&feature', 3, 'das', 0, '0000-00-00 00:00:00', 0),
(108, '2011-03-02 21:55:12', 'http://www.youtube.com/watch?v=zhpVTQV4G8w&feature', 3, 'dsadas', 0, '0000-00-00 00:00:00', 0),
(109, '2011-03-02 21:55:15', 'http://www.youtube.com/watch?v=zhpVTQV4G8w&feature', 3, '1', 0, '0000-00-00 00:00:00', 0),
(110, '2011-03-02 21:55:16', 'http://www.youtube.com/watch?v=zhpVTQV4G8w&feature', 3, '2', 0, '0000-00-00 00:00:00', 0),
(111, '2011-03-02 21:55:19', 'http://www.youtube.com/watch?v=zhpVTQV4G8w&feature', 3, '3', 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'chuje muje', 'DLUGAWY CHUJ'),
(2, 'chuje muje', 'DLUGAWY CHUJ'),
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3');
