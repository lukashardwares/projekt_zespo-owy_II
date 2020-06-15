-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2020 at 12:45 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `32948172_projekt_zespolowy`
--

-- --------------------------------------------------------

--
-- Table structure for table `adresy`
--

CREATE TABLE `adresy` (
  `id_adres` int(11) NOT NULL,
  `miejscowosc` varchar(45) DEFAULT NULL,
  `kod_pocztowy` varchar(45) DEFAULT NULL,
  `imie` varchar(45) DEFAULT NULL,
  `ulica` varchar(45) DEFAULT NULL,
  `nr_mieszkania` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adresy`
--

INSERT INTO `adresy` (`id_adres`, `miejscowosc`, `kod_pocztowy`, `imie`, `ulica`, `nr_mieszkania`) VALUES
(1, 'q', 'q', NULL, 'q', ''),
(2, 'q', 'q', NULL, 'q', 'q'),
(3, 'q', 'q', NULL, 'q', 'q'),
(4, 'q', 'q', NULL, 'q', 'q'),
(5, 'q', 'q', NULL, 'q', 'q'),
(6, 'q', 'q', NULL, 'q', 'q'),
(7, 'q', 'q', NULL, 'q', 'q'),
(8, 'q', 'q', NULL, 'q', 'q'),
(9, 'q', 'q', NULL, 'q', 'q'),
(10, 'q', 'q', NULL, 'q', 'q'),
(11, 'q', 'q', NULL, 'q', 'q'),
(12, 'q', 'q', NULL, 'q', 'q'),
(13, 'q', 'q', NULL, 'q', 'q'),
(14, 'q', 'q', NULL, 'q', 'q'),
(15, 'q', 'q', NULL, 'q', 'q'),
(16, 'q', 'q', NULL, 'q', 'q'),
(17, 'q', 'q', NULL, 'q', 'q'),
(18, 'q', 'q', NULL, 'q', 'q'),
(19, 'q', 'q', NULL, 'q', 'q'),
(20, 'q', 'q', NULL, 'q', 'q'),
(21, 'q', 'q', NULL, 'q', 'q'),
(22, 'd', 'd', NULL, 'd', 'd'),
(23, 's', 's', NULL, 's', 's'),
(24, 's', 's', NULL, 's', 's'),
(25, 's', 's', NULL, 's', 's'),
(26, 'qadf', 'd', NULL, 'ds', 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `galerie_zdjec`
--

CREATE TABLE `galerie_zdjec` (
  `id_zdjecie` int(11) NOT NULL,
  `nazwa_jpg` varchar(45) DEFAULT NULL,
  `id_produkt_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `klienci`
--

CREATE TABLE `klienci` (
  `id_klient` int(11) NOT NULL,
  `id_adres_fk` int(11) NOT NULL,
  `id_kontakt_fk` int(11) NOT NULL,
  `login` varchar(45) DEFAULT NULL,
  `haslo` varchar(45) DEFAULT NULL,
  `nazwa` varchar(45) DEFAULT NULL,
  `imie` varchar(45) DEFAULT NULL,
  `nazwisko` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `klienci`
--

INSERT INTO `klienci` (`id_klient`, `id_adres_fk`, `id_kontakt_fk`, `login`, `haslo`, `nazwa`, `imie`, `nazwisko`) VALUES
(4, 13, 7, 'q', 'q', NULL, 'qw', 'q'),
(5, 20, 14, 'q', 'q', NULL, 'qw', 'q'),
(6, 21, 15, 'q', 'q', NULL, 'qw', 'q'),
(7, 22, 16, 'd', 'd', NULL, 'd', 'd'),
(8, 23, 17, 's', 's', NULL, 's', 's'),
(9, 24, 18, 's', 's', NULL, 's', 's'),
(10, 25, 19, 's', 's', NULL, 's', 's'),
(11, 26, 20, 'qad', 'd', NULL, 'ascd', 'qdq');

-- --------------------------------------------------------

--
-- Table structure for table `kontakty`
--

CREATE TABLE `kontakty` (
  `id_kontakt` int(11) NOT NULL,
  `nr_tel_1` varchar(15) DEFAULT NULL,
  `fax` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `www` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kontakty`
--

INSERT INTO `kontakty` (`id_kontakt`, `nr_tel_1`, `fax`, `email`, `www`) VALUES
(1, 'q', 'q', 'q', NULL),
(2, 'q', 'q', 'q', NULL),
(3, 'q', 'q', 'q', NULL),
(4, 'q', 'q', 'q', NULL),
(5, 'q', 'q', 'q', NULL),
(6, 'q', 'q', 'q', NULL),
(7, 'q', 'q', 'q', NULL),
(8, 'q', 'q', 'q', NULL),
(9, 'q', 'q', 'q', NULL),
(10, 'q', 'q', 'q', NULL),
(11, 'q', 'q', 'q', NULL),
(12, 'q', 'q', 'q', NULL),
(13, 'q', 'q', 'q', NULL),
(14, 'q', 'q', 'q', NULL),
(15, 'q', 'q', 'q', NULL),
(16, 'd', 'd', 'd', NULL),
(17, 's', 's', 's', NULL),
(18, 's', 's', 's', NULL),
(19, 's', 's', 's', NULL),
(20, 'd', 'd', 'd', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `produkty`
--

CREATE TABLE `produkty` (
  `id_produkt` int(11) NOT NULL,
  `nazwa_produktu` varchar(45) DEFAULT NULL,
  `opis` text,
  `fotografia` varchar(45) DEFAULT NULL,
  `aktualna_cena_sprzedazy` decimal(10,0) DEFAULT NULL,
  `id_zamowienia_fk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produkty`
--

INSERT INTO `produkty` (`id_produkt`, `nazwa_produktu`, `opis`, `fotografia`, `aktualna_cena_sprzedazy`, `id_zamowienia_fk`) VALUES
(1, 'ASUS VivoBook 15 X509JA-BQ023T Srebrny', 'Niezależnie od tego, czy użyjesz go do pracy, czy do rozrywki, ASUS VivoBook 15 to kompaktowy laptop, który zapewnia Ci najlepsze wrażenia wizualne. Jego nowy ekran NanoEdge ze smukłymi ramkami ze wszystkich czterech stron posiada ultrasmukłą oprawkę mierzącą zaledwie 5,7 mm. Gwarantuje to niesamowity stosunek wielkości ekranu do obudowy na poziomie 88%. Ponadto zawias ErgoLift o nowatorskiej konstrukcji unosi nieco klawiaturę dla wyższego komfortu pisania.', '1.jpg', '2999', NULL),
(2, 'ASUS TUF Gaming FX505DU-AL079T', 'ASUS TUF Gaming FX505DU-AL079 to 15,6-calowy laptop dla graczy, w którym zastosowano czterordzeniowy procesor AMD Ryzen 7, dysk SSD o pojemności 512GB oraz pamięć RAM o wielkości 16GB. Wysoką jakość rozgrywki i wydajność 3D gwarantuje dedykowana karta graficzna NVIDIA GeForce GTX 1660Ti. Czarna, szczotkowana obudowa z tworzywa posiada estetyczne, dynamiczne szlifowania na pokrywie laptopa. Oferuje też podwyższoną wytrzymałość, w standardzie klasy wojskowej MIL-STD-810G. W pełnowymiarowej klawiaturze zastosowano efektowne podświetlenie RGB.', '2.jpg', '4699', NULL),
(3, 'ASUS VivoBook X509FB-EJ021T', 'Niezależnie od tego, czy użyjesz go do pracy, czy do rozrywki, Asus X509, to kompaktowy laptop, który zapewnia Ci najlepsze wrażenia wizualne. Jego nowy ekran NanoEdge ze smukłymi ramkami ze wszystkich czterech stron posiada ultrasmukłą oprawkę mierzącą zaledwie 5,7 mm.', '3.jpg', '2399', NULL),
(5, 'ASUS VivoBook X509FJ-BQ271T', 'Niezależnie od tego, czy użyjesz go do pracy, czy do rozrywki, Asus X509, to kompaktowy laptop, który zapewnia Ci najlepsze wrażenia wizualne. Jego nowy ekran NanoEdge ze smukłymi ramkami ze wszystkich czterech stron posiada ultrasmukłą oprawkę mierzącą zaledwie 5,7 mm.', '4.jpg', '3199', NULL),
(6, 'ASUS TUF Gaming FX505DY-AL016T', 'Bardziej płynna i immersyjna rozgrywka z nowym laptopem TUF Gaming FX505 AMD Edition. Zapewnia on wysoką wydajność w korzystnej cenie, oferując najnowocześniejszy ekran NanoEdge z matrycą klasy IPS, technologią AMD® FreeSync™ i częstotliwością odświeżania sięgającą 120 Hz. Jest również wyposażony w najnowszy procesor AMD® Ryzen™ i wydzieloną kartę graficzną Radeon™. Został on także przetestowany do zgodności ze standardem MIL-STD-810G klasy wojskowej, dzięki czemu gwarantuje najlepszą możliwą wytrzymałość i trwałość.', '5.jpg', '3199', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id_zamowienia` int(11) NOT NULL,
  `id_klient_fk` int(11) NOT NULL,
  `data_zlozenia_zamowienia` datetime DEFAULT NULL,
  `zaplacono_kwote` varchar(45) DEFAULT NULL,
  `data_odbioru_produktu` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adresy`
--
ALTER TABLE `adresy`
  ADD PRIMARY KEY (`id_adres`);

--
-- Indexes for table `galerie_zdjec`
--
ALTER TABLE `galerie_zdjec`
  ADD PRIMARY KEY (`id_zdjecie`),
  ADD KEY `produkt_id_fk` (`id_produkt_fk`);

--
-- Indexes for table `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id_klient`),
  ADD KEY `id_kontakt_fk` (`id_kontakt_fk`),
  ADD KEY `id_adres_fk` (`id_adres_fk`);

--
-- Indexes for table `kontakty`
--
ALTER TABLE `kontakty`
  ADD PRIMARY KEY (`id_kontakt`);

--
-- Indexes for table `produkty`
--
ALTER TABLE `produkty`
  ADD PRIMARY KEY (`id_produkt`),
  ADD KEY `id_zamowienia_fk` (`id_zamowienia_fk`);

--
-- Indexes for table `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id_zamowienia`),
  ADD KEY `id_klient_fkk` (`id_klient_fk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adresy`
--
ALTER TABLE `adresy`
  MODIFY `id_adres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `galerie_zdjec`
--
ALTER TABLE `galerie_zdjec`
  MODIFY `id_zdjecie` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id_klient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kontakty`
--
ALTER TABLE `kontakty`
  MODIFY `id_kontakt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `produkty`
--
ALTER TABLE `produkty`
  MODIFY `id_produkt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id_zamowienia` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `galerie_zdjec`
--
ALTER TABLE `galerie_zdjec`
  ADD CONSTRAINT `galerie_zdjec_ibfk_1` FOREIGN KEY (`id_produkt_fk`) REFERENCES `produkty` (`id_produkt`);

--
-- Constraints for table `klienci`
--
ALTER TABLE `klienci`
  ADD CONSTRAINT `id_adres_fk` FOREIGN KEY (`id_adres_fk`) REFERENCES `adresy` (`id_adres`),
  ADD CONSTRAINT `id_kontakt_fk` FOREIGN KEY (`id_kontakt_fk`) REFERENCES `kontakty` (`id_kontakt`);

--
-- Constraints for table `produkty`
--
ALTER TABLE `produkty`
  ADD CONSTRAINT `id_zamowienia_fk` FOREIGN KEY (`id_zamowienia_fk`) REFERENCES `zamowienia` (`id_zamowienia`);

--
-- Constraints for table `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD CONSTRAINT `id_klient_fkk` FOREIGN KEY (`id_klient_fk`) REFERENCES `klienci` (`id_klient`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
