-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 26 Avril 2016 à 12:29
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `evenement`
--

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE IF NOT EXISTS `evenements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_membres` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `heure_debut` time NOT NULL,
  `heure_fin` time NOT NULL,
  `descriptif` varchar(255) NOT NULL,
  `theme` enum('sport','spectacle','musique') NOT NULL,
  `public` enum('tous public','adulte','masculin','feminin') NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `photo_1` varchar(255) NOT NULL,
  `photo_2` varchar(255) NOT NULL,
  `photo_3` varchar(255) NOT NULL,
  `capacite` int(11) NOT NULL,
  `nb_participants` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_users` (`id_membres`),
  KEY `prix` (`prix`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Contenu de la table `evenements`
--

INSERT INTO `evenements` (`id`, `id_membres`, `titre`, `date_debut`, `date_fin`, `heure_debut`, `heure_fin`, `descriptif`, `theme`, `public`, `adresse`, `ville`, `code_postal`, `photo_1`, `photo_2`, `photo_3`, `capacite`, `nb_participants`, `prix`, `created_at`, `updated_at`) VALUES
(4, 0, 'Match de foot', '2016-07-07', '2016-07-07', '09:30:00', '20:00:00', 'Tournoi de foot à Melun - Stade de la Motte', 'sport', 'tous public', 'Place de la Motte aux cailles', 'Melun', 77000, '1_match de foot_un-ballon-de-football-1_4822408.jpg', '2_match de foot_match foot.jpg', '3_match de foot_match_foot_village04.jpg', 80, 0, 0, '0000-00-00 00:00:00', '2016-04-26 11:00:56'),
(5, 0, 'Cours de salsa', '2016-05-18', '2016-05-18', '20:30:00', '00:30:00', 'Cours de salsa pour les débutantes et débutants ;)', 'musique', 'adulte', '10 Rue Anjou', 'Paris', 75008, '1_cours de salsa_nos-cours503784892bcf8.jpg', '2_cours de salsa_latin-salsa-34.jpg', '', 30, 0, 0, '0000-00-00 00:00:00', '2016-04-26 11:12:25'),
(6, 0, 'Spectacle de Gad Elmaleh', '2016-08-24', '2016-08-24', '19:30:00', '22:20:00', 'Mon spectacle à La ferté sous jouarre ! Une première internationnale dans le monde du spaectacle ! Je vous attends nombreux !', 'spectacle', 'tous public', '12 rue du port aux meules', 'La Ferté Sous Jouarre', 77260, '1_spectacle de gad elmaleh_gad.jpg', '2_spectacle de gad elmaleh_gad2.jpg', '3_spectacle de gad elmaleh_gad3.jpg', 10, 0, 0, '0000-00-00 00:00:00', '2016-04-26 11:18:57'),
(9, 0, 'Spectacle de cirque', '2016-05-10', '2016-05-26', '19:30:00', '22:30:00', 'Spectacle de cirque de la troupe Pinder à Paris-Bercy : ACCORD HOTELS ARENA', 'spectacle', 'tous public', '8 Boulevard de Bercy', 'Paris', 75012, '1_spectacle de cirque_pinder.jpg', '2_spectacle de cirque_pinder2.jpg', '', 16065, 0, 0, '0000-00-00 00:00:00', '2016-04-26 11:39:18'),
(13, 0, 'Mix de dj soda', '2016-05-05', '2016-07-06', '09:30:00', '09:30:00', 'Mix de dj soda', 'musique', 'adulte', '18 Rue de Turbigo', 'Paris', 75001, '1_mix de dj soda_379519_cours-de-danse-salsa_133204.jpg', '', '', 20, 0, 0, '0000-00-00 00:00:00', '2016-04-26 12:05:41');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `genre` enum('m','f') NOT NULL,
  `photo_profil` varchar(255) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `admin` enum('on','off') NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Identifiant de connexion' AUTO_INCREMENT=8 ;

--
-- Contenu de la table `membres`
--

INSERT INTO `membres` (`id`, `nom`, `prenom`, `date_de_naissance`, `genre`, `photo_profil`, `telephone`, `email`, `pseudo`, `mot_de_passe`, `admin`, `created_at`, `updated_at`) VALUES
(2, 'Gires', 'Alain', '1978-02-08', 'm', '2_gires_alain-giresse-.jpg', '014896305442', 'gires7@mail.com', 'gires7', '$2y$10$qwEjKG6ak3CRVwR2TL9gguB1h0JcGQZIQW9vFK5xBBdmGpeWiYRhq', 'off', '0000-00-00 00:00:00', '2016-04-26 10:52:14'),
(3, 'Wine', 'Ginger', '1987-03-19', 'f', '3_wine_379519_cours-de-danse-salsa_133204.jpg', '456132798746', 'ginger28@mail.com', 'ginger28', '$2y$10$ac/WiEwu7h64AHUR0Dntnu2cMzsrQfORay.qEA3FurN/CvihgbPNm', 'off', '0000-00-00 00:00:00', '2016-04-26 11:10:23'),
(4, 'Elmaleh', 'Gad', '1977-10-18', 'm', '4_elmaleh_gadelmaleh.jpg', '123456789', 'gad12@mail.com', 'gad12', '$2y$10$N35jwbwDb1.mYc3LmqxN/e0OenH7vgetfOdXVNllkJgprA1OL1JV2', 'off', '0000-00-00 00:00:00', '2016-04-26 11:15:09'),
(5, 'Lecoureur', 'Remy', '1998-05-12', 'm', '5_lecoureur_leocoureur_bd.jpg', '46598793113', 'remy@mail.com', 'remyLeCoureur', '$2y$10$.EcujdlAsbEkTtQsiiD56.lx9vkoVgOUyuOBmMSDfy.zZGTn9pXmq', 'off', '0000-00-00 00:00:00', '2016-04-26 11:21:20'),
(6, 'Mariano', 'Luis', '1960-01-06', 'm', '6_mariano_pinder_profil.jpg', '46532132', 'luis12@gm.com', 'luis12', '$2y$10$ko1xHLyXhnm297UXpjkP5uSRzzI6ymCRdvm/TGuOGQuyzawzv0vDm', 'off', '0000-00-00 00:00:00', '2016-04-26 11:35:27'),
(7, 'Rex', 'Grand', '2016-07-07', 'm', '7_rex_maxresdefault.jpg', '6456431232', 'grandrex@gm.com', 'Grand Rex', '$2y$10$XydJikiTyLFblACWr1N64OWJYAcsdwRLa.jKkyj2oj1trkJWimFCC', 'off', '2016-04-26 11:58:59', '2016-04-26 11:58:59');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
