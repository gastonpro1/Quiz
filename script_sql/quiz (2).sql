-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 31 jan. 2023 à 15:05
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quiz`
--

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

CREATE TABLE `question` (
  `Question_id` int(10) UNSIGNED NOT NULL,
  `Question_contenue` varchar(1000) NOT NULL,
  `Question_reponse` varchar(1000) NOT NULL,
  `Question_idtheme` varchar(50) NOT NULL,
  `choix1` varchar(1000) NOT NULL,
  `choix2` varchar(1000) NOT NULL,
  `choix3` varchar(1000) NOT NULL,
  `reponseVouF` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`Question_id`, `Question_contenue`, `Question_reponse`, `Question_idtheme`, `choix1`, `choix2`, `choix3`, `reponseVouF`) VALUES
(5, ' Est ce que le gardien de but est le seul joueur à pouvoir toucher le ballon avec la main sur l’ensemble du terrain ?', 'Faux', '1', '', '', '', 1),
(4, 'Est ce que la largeur officielle d’une cage de but est 7,32 m ?', 'Vrai', '1', '', '', '', 1),
(3, 'Est ce que dans les compétitions officielles, le ballon de foot doit être noir et blanc ?', 'Faux', '1', '', '', '', 1),
(2, 'Est ce que l’équipement complet d’un arbitre de foot se compose d’un sifflet, un carton jaune et un carton rouge ?', 'vrai', '1', '', '', '', 0),
(1, 'Est ce que les recours à l’assistance vidéo à l’arbitrage est autorisé au football ? ', 'Vrai', '1', '', '', '', 1),
(6, 'Est ce qu\'un but est accordé dès lors que le ballon touche la ligne de but ?', 'Faux', '1', '', '', '', 0),
(7, 'Est ce qu\'un ballon de foot adéquat doit avoir une circonférence de 70 cm environ ?', 'Vrai', '1', '', '', '', 1),
(8, 'Est ce que les gardiens de but au foot peuvent jouer en pantalon de survêtement ?', 'faux', '1', '', '', '', 1),
(9, 'Est ce que Messi est le meilleur joueur du monde ?', 'Vrai', '1', '', '', '', 1),
(10, 'Est ce qu\'au football en cas d’infraction de hors-jeu l’arbitre accorde un coup franc indirect ?', 'Vrai', '1', '', '', '', 1),
(11, 'Les animaux aussi sont des musiciens: le mouton bêle, le cerf brame. Mais quel est l\'animal qui \"trompette\" ?', 'l\'aigle', '2', 'Le chameau', 'L\'aigle', 'la souris', 0),
(12, 'Pourquoi Maurice Ravel a t\'il été exempté du service militaire ?', ' Ravel était trop petit (1,61)', '2', 'Ravel avait des troubles psychiques', 'Ravel a annoncé vouloir se consacrer à la musique', ' Ravel était trop petit (1,61)', 0),
(13, 'Qui est le compositeur de l\'opéra << La Bohème>> ? ', 'Giacomo Puccini', '2', 'Monteverdi Claudio', 'Giacomo Puccini', 'Giuseppe Verdi', 0),
(14, 'Que signifie le terme <<Adagio>>?', 'vient de l\'italien signifie à son aise\r\n', '2', 'vient de l\'espagnol signifie lentement', 'vient de l\'italien signifie à son aise', 'vient de l\'italien signifie lentement', 0),
(15, 'Comment s\'appelle l\'instrumentiste qui joue des Ondes Martenot ?', 'un Ondiste', '2', 'un Martenotiste', 'un Marteniste', 'un Ondiste', 0),
(16, 'Est ce que Serge Prokofiev est mort le même jour que Staline ?', 'Prokofiev est mort une heure avant Staline', '2', 'Prokofiev est mort une heure avant Staline', 'Prokofiev est mort une semaine après Staline', '', 0),
(17, 'Quel compositeur a en 1833, composé un Boléro ?', 'Chopin', '2', 'Liszt', 'Brahms', 'Chopin', 0),
(18, 'Le 18 mai 1911, Gustav Mahler meurt, à la Vienne, laissant inachevée sa deuxième symphonie. Quelles furent ses dernières paroles ?', 'Mozart', '2', 'Mon heure viendra', 'Mozart', 'Jean-Sébastien Bach', 0),
(19, 'Quelle est la ville natale de Haydn ?', 'Rohrau (Autriche)', '2', 'Rohrau (Autriche)', 'Edimbourg (Ecosse)', 'Londres', 0),
(20, 'Que signifie l\'Organologie ?', 'l\'étude des instruments de musique\r\n', '2', 'l\'étude des orgues', ' l\'étude des instruments de musique', 'la réparation des orgues', 0),
(21, 'A quoi ressemble l\'animal appelé le \"Loup à crinière\" qui vit en Amérique du Sud ?', 'Un grand renard', '3', 'Un grand renard', 'Un gros berger allemand', 'Un trèèèèèèèèèèèès gros chat', 0),
(22, 'Quelle est la particularité du poisson nommé la môle, aussi connue sous le nom poisson lune ?', 'C\'est un poisson long et large', '3', 'Elle pèse en moyenne 100 kg', 'Elle est carnivore', 'C\'est un poisson trèèèèèèès long et trèèèèès large', 0),
(23, 'Quelle est la vitesse de pointe que peut atteindre le guépard ?', 'C 120 km/h\r\n', '3', '90 km/h', '100 km/h', '120 km/h', 0),
(24, 'Quel animal ne boit pas d\'eau ?', 'La grenouille', '3', 'Le hérisson', 'Le mouton', 'La grenouille', 0),
(25, 'Quel animal produit du lait de couleur rose ?', 'L\'hippopotame', '3', 'Le flamant rose', ' Le cochon', 'L\'hippopotame', 0),
(26, 'Quelle espèce de requin n\'existe pas ?', 'Le requin à lunettes', '3', 'Le requin à lunettes', 'Le requin bull-dog', 'Le requin citron', 0),
(27, 'Quelle est la masse que peut soulever une fourmi ?', '50 fois son poids', '3', '10 fois son poids', '25 fois son poids', '50 fois son poids', 0),
(28, 'Quel animal est appelé \"Chat-ours\" par les Chinois et \"Renard de feu\" chez les Anglais ?', 'Le panda roux\r\n', '3', 'Le panda roux', ' Le Dingo', 'Le Chow Chow', 0),
(29, 'Quel animal a un fort caractère ?', 'Un corbeau', '3', ' Un lion', 'Un éléphant', 'Un corbeau', 0),
(30, 'Quel animal appelé \"le Jardinier\" collecte des objets et éléments bleus pour décorer sa maison ? ', 'un oiseau', '3', 'un insecte ', 'un écureuil', 'un oiseau', 0);

-- --------------------------------------------------------

--
-- Structure de la table `theme`
--

CREATE TABLE `theme` (
  `Theme_id` int(10) UNSIGNED NOT NULL,
  `libelle` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `theme`
--

INSERT INTO `theme` (`Theme_id`, `libelle`) VALUES
(1, 'football'),
(2, 'musique'),
(3, 'animaux');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `pseudo` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`) VALUES
(1, 'Mike'),
(2, 'Brice'),
(5, 'Goku'),
(9, 'Vegeta'),
(10, 'Krillin'),
(11, 'Piccolo'),
(12, 'Mr Satan'),
(13, 'Beerus'),
(15, 'Bulma'),
(16, 'Buu'),
(17, 'Chichi');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`Question_id`),
  ADD KEY `theme` (`Question_id`),
  ADD KEY `fk_question_idtheme` (`Question_idtheme`);

--
-- Index pour la table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`Theme_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `question`
--
ALTER TABLE `question`
  MODIFY `Question_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `theme`
--
ALTER TABLE `theme`
  MODIFY `Theme_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
