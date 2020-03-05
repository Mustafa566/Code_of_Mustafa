-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 13 feb 2019 om 11:12
-- Serverversie: 10.1.37-MariaDB
-- PHP-versie: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tut`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `voorraad` text NOT NULL,
  `categorie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `products`
--

INSERT INTO `products` (`id`, `p_name`, `image`, `price`, `voorraad`, `categorie`) VALUES
(0, 'Volcano', 'https://www.vuurwerkbieb.nl/files/2114/0118/4597/1205-assorted-volcano.png', 8.00, '200', 'siervuurwerk'),
(1, 'super kanonslag	', 'https://anypos.o.auroraobjects.eu/71/article/1705.1543242512.png', 8.00, '20', 'knalvuurwerk'),
(2, 'Little General	', 'https://cdn.vuurwerkland.nl/medium/images/wolff/1165-Littel-General.png', 6.00, '8', 'siervuurwerk'),
(3, 'ARROW FAMILY	', 'https://www.grootvuurwerk.nl/product_afbeeldingen/new-medium-small/2688-arrow-family-2000-gram-45-seconden.png', 20.00, '30', 'kindervuurwerk'),
(4, 'GRONDBLOEMEN', 'https://www.rikxoort.com/wp-content/uploads/2012/11/grondbloem.png', 2.00, '20', 'kindervuurwerk'),
(5, 'HEAVEN JEWELS', 'https://www.grootvuurwerk.nl/product_afbeeldingen/new-medium-small/2570-heaven-jewels-1000-gram.png', 16.00, '50', 'kindervuurwerk'),
(6, 'Mega klapper\r\n', 'https://anypos-sbo.o.auroraobjects.eu/2/article/24.1410255571.png', 50.00, '60', 'knalvuurwerk'),
(7, 'Japanese Thunder\r\n', 'https://anypos-sbo.o.auroraobjects.eu/2/article/494.1406807059.png', 2.00, '100', 'knalvuuwerk'),
(8, 'Thunderking', 'https://anypos-sbo.o.auroraobjects.eu/2/article/31.1408952015.png', 35.00, '40', 'siervuurwerk'),

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
