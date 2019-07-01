-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 01 Juillet 2019 à 09:12
-- Version du serveur :  5.7.26-0ubuntu0.18.04.1
-- Version de PHP :  7.2.19-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Projet2`
--

-- --------------------------------------------------------

--
-- Structure de la table `batiment`
--

CREATE TABLE `batiment` (
  `id_bati` int(11) NOT NULL,
  `nom_bati` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `batiment`
--

INSERT INTO `batiment` (`id_bati`, `nom_bati`) VALUES
(1, 'PAVION-A'),
(2, 'PAVION-G'),
(3, 'PAVION-M'),
(4, 'PAVION-K'),
(7, 'BATIMENT-E'),
(8, 'BATIMENT-D');

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `id_chambre` int(11) NOT NULL,
  `id_bati` int(11) NOT NULL,
  `nom_chambre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `chambre`
--

INSERT INTO `chambre` (`id_chambre`, `id_bati`, `nom_chambre`) VALUES
(1, 2, '189A'),
(2, 2, '56B'),
(3, 1, '39S'),
(4, 3, '51N'),
(6, 2, 'CH10'),
(7, 2, 'CH9');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id_etudiant` int(11) NOT NULL,
  `matricule` varchar(30) NOT NULL,
  `Nom` varchar(20) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `tel` int(11) NOT NULL,
  `email` text NOT NULL,
  `date_naiss` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etudiants`
--

INSERT INTO `etudiants` (`id_etudiant`, `matricule`, `Nom`, `prenom`, `tel`, `email`, `date_naiss`) VALUES
(1, 'KZF04', 'DIOP', 'Fatou', 772026057, 'diopsecurite@gmail.com', '1993-06-10'),
(3, 'T10ZM', 'NDIAYE', 'Abdou', 773962587, 'ndiayeabdou@gmail.com', '1992-07-05'),
(6, 'WG55Z', 'DIALLO', 'AMY', 775216935, 'minadiallo@gmail.com', '1990-08-11'),
(7, 'AM89P', 'NDIAYE', 'AWA', 773458827, 'ndiayeawa@gmail.com', '1995-12-21'),
(17, 'B557', 'GAYE', 'DMG', 789643798, 'dmg8@gmail.com', '1997-10-23'),
(19, 'BGF77', 'BA', 'RAMA', 774517899, 'barama96@gmail.com', '1996-05-18'),
(32, 'AZ741', 'NDIAYE', 'SEYNABOU', 776335254, 'nabousye@gmail.com', '1992-07-17'),
(35, 'DG520', 'DIOP', 'MBACKE', 777777777, 'diopsecurite@gmail.com', '2019-06-06'),
(37, 'ERG969', 'MENDY', 'JEANS', 8765353, 'hhioik@hjj.com', '2019-06-20'),
(43, 'JKJJH74', 'KANE', 'MARIAMA', 774140213, 'karmarie@gmail.com', '2019-06-01'),
(49, 'g544651', 'diop', 'diana', 78872331, 'hdgagdhaj@com', '2019-07-01'),
(58, 'RT6852', 'GUEYE', 'GANA', 773652588, 'gana@gmail.com', '2019-07-04'),
(59, 'RTY7756', 'COULBALY', 'KALIDOU', 773695241, 'koulibaly@gmail.com', '2019-06-12'),
(67, 'QS014477', 'GUEYE', 'SADIKH', 770362552, 'sadikhu@gmail.com', '2019-06-05'),
(68, 'MOP25', 'SOW', 'MBAYE', 771004411, 'sow@gmail.com', '2019-05-27'),
(69, 'QSM256', 'NDIAYE', 'BABACAR', 783612010, 'babacar@gmail.com', '1997-08-14'),
(70, 'QMP54', 'GNING', 'NDEYE', 776985442, 'gninhg@gmail.com', '1999-02-11'),
(74, 'DEV041', 'SENE', 'DEMBA', 775054125, 'demba@gmail.com', '1992-08-10'),
(75, '0ZA88', 'MBAYE', 'FALLOU', 772051231, 'loufambaye@gmail.com', '1998-11-08'),
(76, '55TYHL', 'NIANG', 'OMAR', 774161824, 'niangomzo@gmail.com', '1996-02-14'),
(78, '788OPM', 'SOKHNA', 'MBAYE', 772312420, 'sokhu@gmail.com', '1994-11-21');

-- --------------------------------------------------------

--
-- Structure de la table `Et_boursier`
--

CREATE TABLE `Et_boursier` (
  `id_pension` int(11) NOT NULL,
  `id_etudiant` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Et_boursier`
--

INSERT INTO `Et_boursier` (`id_pension`, `id_etudiant`) VALUES
(1, 32),
(1, 49),
(1, 59),
(1, 68),
(1, 78),
(2, 3),
(2, 43),
(2, 58),
(2, 67),
(2, 69),
(2, 75),
(8, 74);

-- --------------------------------------------------------

--
-- Structure de la table `Et_loge`
--

CREATE TABLE `Et_loge` (
  `id_etudiant` int(11) NOT NULL,
  `id_chambre` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Et_loge`
--

INSERT INTO `Et_loge` (`id_etudiant`, `id_chambre`) VALUES
(1, 1),
(58, 1),
(74, 1),
(78, 1),
(32, 2),
(69, 2),
(67, 3),
(59, 4),
(68, 4),
(75, 6);

-- --------------------------------------------------------

--
-- Structure de la table `Non_loge`
--

CREATE TABLE `Non_loge` (
  `id_etudiant` int(11) NOT NULL,
  `addresse` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Non_loge`
--

INSERT INTO `Non_loge` (`id_etudiant`, `addresse`) VALUES
(1, 'Grand yoff'),
(17, 'toubatoul'),
(19, 'Dakar'),
(35, 'thiaytou'),
(37, 'dakar'),
(70, 'THIAYTOU'),
(76, 'TOUBA');

-- --------------------------------------------------------

--
-- Structure de la table `Pension`
--

CREATE TABLE `Pension` (
  `id_pension` int(11) NOT NULL,
  `type` int(20) NOT NULL,
  `libelle` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Pension`
--

INSERT INTO `Pension` (`id_pension`, `type`, `libelle`) VALUES
(1, 20000, 'DEMIE'),
(2, 40000, 'ENTIERE'),
(3, 40000, 'ENTIERE'),
(7, 40000, 'ENTIERE'),
(8, 20000, 'DEMIE');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `batiment`
--
ALTER TABLE `batiment`
  ADD PRIMARY KEY (`id_bati`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id_chambre`),
  ADD KEY `id_bati` (`id_bati`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id_etudiant`),
  ADD UNIQUE KEY `matricule` (`matricule`),
  ADD UNIQUE KEY `tel` (`tel`),
  ADD UNIQUE KEY `matricule_2` (`matricule`);

--
-- Index pour la table `Et_boursier`
--
ALTER TABLE `Et_boursier`
  ADD PRIMARY KEY (`id_etudiant`),
  ADD KEY `id_pension` (`id_pension`),
  ADD KEY `matricule` (`id_etudiant`),
  ADD KEY `id_pension_2` (`id_pension`);

--
-- Index pour la table `Et_loge`
--
ALTER TABLE `Et_loge`
  ADD PRIMARY KEY (`id_etudiant`),
  ADD KEY `matricule` (`id_etudiant`),
  ADD KEY `id_chambre` (`id_chambre`),
  ADD KEY `id_chambre_2` (`id_chambre`),
  ADD KEY `id_chambre_3` (`id_chambre`);

--
-- Index pour la table `Non_loge`
--
ALTER TABLE `Non_loge`
  ADD PRIMARY KEY (`id_etudiant`),
  ADD KEY `id_etudiant` (`id_etudiant`);

--
-- Index pour la table `Pension`
--
ALTER TABLE `Pension`
  ADD PRIMARY KEY (`id_pension`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `batiment`
--
ALTER TABLE `batiment`
  MODIFY `id_bati` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id_chambre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id_etudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT pour la table `Pension`
--
ALTER TABLE `Pension`
  MODIFY `id_pension` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `chambre_ibfk_1` FOREIGN KEY (`id_bati`) REFERENCES `batiment` (`id_bati`);

--
-- Contraintes pour la table `Et_boursier`
--
ALTER TABLE `Et_boursier`
  ADD CONSTRAINT `Et_boursier_ibfk_1` FOREIGN KEY (`id_pension`) REFERENCES `Pension` (`id_pension`),
  ADD CONSTRAINT `Et_boursier_ibfk_2` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiants` (`id_etudiant`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Et_loge`
--
ALTER TABLE `Et_loge`
  ADD CONSTRAINT `Et_loge_ibfk_2` FOREIGN KEY (`id_chambre`) REFERENCES `chambre` (`id_chambre`),
  ADD CONSTRAINT `Et_loge_ibfk_3` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiants` (`id_etudiant`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `Non_loge`
--
ALTER TABLE `Non_loge`
  ADD CONSTRAINT `Non_loge_ibfk_1` FOREIGN KEY (`id_etudiant`) REFERENCES `etudiants` (`id_etudiant`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
