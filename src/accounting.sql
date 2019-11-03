-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Erstellungszeit: 11. Jan 2018 um 13:10
-- Server-Version: 10.1.28-MariaDB
-- PHP-Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `accounting`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `billin`
--

CREATE TABLE `billin` (
  `uid` int(11) NOT NULL,
  `db` text NOT NULL,
  `timest` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `r_nr` int(11) NOT NULL DEFAULT '0',
  `umstv` text NOT NULL,
  `hinweis` text NOT NULL,
  `bill_tax_free` float NOT NULL DEFAULT '0',
  `bill_tax_price` float NOT NULL DEFAULT '0',
  `bill_trade` varchar(12) NOT NULL DEFAULT 'informatik',
  `bill_date` date NOT NULL,
  `bill_provided_date_mm` date NOT NULL COMMENT 'monat',
  `bill_prebill_uid` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `bill_storno_uid` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `bill_storno_text` text NOT NULL,
  `bill_article_description` text NOT NULL,
  `bill_article_type` text NOT NULL,
  `bill_payment_type` text NOT NULL,
  `bill_client_uid` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `bill_tax` int(11) NOT NULL DEFAULT '19',
  `bill_price` float NOT NULL DEFAULT '0',
  `bill_business_terms_data` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `bill_business_terms_use` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `transaction_type` varchar(255) NOT NULL DEFAULT '',
  `transaction_token_id` varchar(255) NOT NULL DEFAULT '',
  `transaction_transaction_id` varchar(255) NOT NULL DEFAULT '',
  `transaction_client_id` varchar(255) NOT NULL DEFAULT '',
  `transaction_payment_id` varchar(255) NOT NULL DEFAULT '',
  `transaction_refund_id` varchar(255) NOT NULL DEFAULT '',
  `transaction_status` varchar(255) NOT NULL DEFAULT '',
  `transaction_response_code` varchar(255) NOT NULL DEFAULT '',
  `transaction_response_object` text NOT NULL,
  `transaction_response_array` text NOT NULL,
  `transaction_amount` int(11) NOT NULL DEFAULT '0',
  `transaction_description` text NOT NULL,
  `transaction_price` varchar(255) NOT NULL DEFAULT '',
  `customer_newsletter` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `customer_firstname` varchar(255) NOT NULL DEFAULT '',
  `customer_lastname` varchar(255) NOT NULL DEFAULT '',
  `customer_email` varchar(255) NOT NULL DEFAULT '',
  `customer_address` varchar(255) NOT NULL DEFAULT '',
  `customer_country` varchar(255) NOT NULL DEFAULT '',
  `customer_city` varchar(255) NOT NULL DEFAULT '',
  `customer_company` varchar(255) NOT NULL DEFAULT '',
  `customer_phone` varchar(255) NOT NULL DEFAULT '',
  `customer_zip` varchar(255) NOT NULL DEFAULT '',
  `customer_domain_license` varchar(255) NOT NULL DEFAULT '',
  `customer_domain` varchar(255) NOT NULL DEFAULT '',
  `customer_domain_holder` varchar(255) NOT NULL DEFAULT '',
  `customer_domain_email` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `billout`
--

CREATE TABLE `billout` (
  `uid` int(11) NOT NULL,
  `db` text NOT NULL,
  `timest` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `r_nr` int(11) NOT NULL DEFAULT '0',
  `umstv` text NOT NULL,
  `hinweis` text NOT NULL,
  `bill_tax_free` float NOT NULL DEFAULT '0',
  `bill_tax_price` float NOT NULL DEFAULT '0',
  `bill_trade` varchar(12) NOT NULL DEFAULT 'informatik',
  `bill_date` date NOT NULL,
  `bill_provided_date_mm` date NOT NULL COMMENT 'monat',
  `bill_prebill_uid` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `bill_storno_uid` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `bill_storno_text` text NOT NULL,
  `bill_article_description` text NOT NULL,
  `bill_article_type` text NOT NULL,
  `bill_payment_type` text NOT NULL,
  `bill_client_uid` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `bill_tax` int(11) NOT NULL DEFAULT '19',
  `bill_price` float NOT NULL DEFAULT '0',
  `bill_business_terms_data` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `bill_business_terms_use` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `transaction_type` varchar(255) NOT NULL DEFAULT '',
  `transaction_token_id` varchar(255) NOT NULL DEFAULT '',
  `transaction_transaction_id` varchar(255) NOT NULL DEFAULT '',
  `transaction_client_id` varchar(255) NOT NULL DEFAULT '',
  `transaction_payment_id` varchar(255) NOT NULL DEFAULT '',
  `transaction_refund_id` varchar(255) NOT NULL DEFAULT '',
  `transaction_status` varchar(255) NOT NULL DEFAULT '',
  `transaction_response_code` varchar(255) NOT NULL DEFAULT '',
  `transaction_response_object` text NOT NULL,
  `transaction_response_array` text NOT NULL,
  `transaction_amount` int(11) NOT NULL DEFAULT '0',
  `transaction_description` text NOT NULL,
  `transaction_price` varchar(255) NOT NULL DEFAULT '',
  `customer_newsletter` tinyint(4) UNSIGNED NOT NULL DEFAULT '0',
  `customer_firstname` varchar(255) NOT NULL DEFAULT '',
  `customer_lastname` varchar(255) NOT NULL DEFAULT '',
  `customer_email` varchar(255) NOT NULL DEFAULT '',
  `customer_address` varchar(255) NOT NULL DEFAULT '',
  `customer_country` varchar(255) NOT NULL DEFAULT '',
  `customer_city` varchar(255) NOT NULL DEFAULT '',
  `customer_company` varchar(255) NOT NULL DEFAULT '',
  `customer_phone` varchar(255) NOT NULL DEFAULT '',
  `customer_zip` varchar(255) NOT NULL DEFAULT '',
  `customer_domain_license` varchar(255) NOT NULL DEFAULT '',
  `customer_domain` varchar(255) NOT NULL DEFAULT '',
  `customer_domain_holder` varchar(255) NOT NULL DEFAULT '',
  `customer_domain_email` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL DEFAULT '',
  `username` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `roles` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`id`, `full_name`, `username`, `email`, `password`, `roles`) VALUES
(1, 'Jane Doe', 'jane_admin', 'jane_admin@symfony.com', '$2y$13$IMalnQpo7xfZD5FJGbEadOcqyj2mi/NQbQiI8v2wBXfjZ4nwshJlG', '[\"ROLE_ADMIN\"]');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `billin`
--
ALTER TABLE `billin`
  ADD PRIMARY KEY (`uid`);

--
-- Indizes für die Tabelle `billout`
--
ALTER TABLE `billout`
  ADD PRIMARY KEY (`uid`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `billin`
--
ALTER TABLE `billin`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT für Tabelle `billout`
--
ALTER TABLE `billout`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
