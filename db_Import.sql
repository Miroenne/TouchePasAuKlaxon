-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : lun. 13 juil. 2026 à 13:23
-- Version du serveur : 12.3.2-MariaDB
-- Version de PHP : 8.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `TouchePasAuKlaxon_DB`
--

-- --------------------------------------------------------

--
-- Déchargement des données de la table `agencies`
--

INSERT INTO `agencies` (`agency_Id`, `agency_Name`) VALUES
(9, 'Bordeaux'),
(10, 'Lille'),
(2, 'Lyon'),
(3, 'Marseille'),
(8, 'Montpellier'),
(6, 'Nantes'),
(5, 'Nice'),
(1, 'Paris'),
(12, 'Reims'),
(11, 'Rennes'),
(7, 'Strasbourg'),
(4, 'Toulouse');

-- --------------------------------------------------------

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_Id`, `user_FirstName`, `user_LastName`, `user_PhoneNumber`, `user_Email`) VALUES
(1, 'Alexandre', 'Martin', '0612345678', 'alexandre.martin@email.fr'),
(2, 'Sophie', 'Dubois', '0698765432', 'sophie.dubois@email.fr'),
(3, 'Julien', 'Bernard', '0622446688', 'julien.bernard@email.fr'),
(4, 'Camille', 'Moreau', '0611223344', 'camille.moreau@email.fr'),
(5, 'Lucie', 'Lefèvre', '0777889900', 'lucie.lefevre@email.fr'),
(6, 'Thomas', 'Leroy', '0655443322', 'thomas.leroy@email.fr'),
(7, 'Chloé', 'Roux', '0633221199', 'chloe.roux@email.fr'),
(8, 'Maxime', 'Petit', '0766778899', 'maxime.petit@email.fr'),
(9, 'Laura', 'Garnier', '0688776655', 'laura.garnier@email.fr'),
(10, 'Antoine', 'Dupuis', '0744556677', 'antoine.dupuis@email.fr'),
(11, 'Emma', 'Lefebvre', '0699887766', 'emma.lefebvre@email.fr'),
(12, 'Louis', 'Fontaine', '0655667788', 'louis.fontaine@email.fr'),
(13, 'Clara', 'Chevalier', '0788990011', 'clara.chevalier@email.fr'),
(14, 'Nicolas', 'Robin', '0644332211', 'nicolas.robin@email.fr'),
(15, 'Marine', 'Gauthier', '0677889922', 'marine.gauthier@email.fr'),
(16, 'Pierre', 'Fournier', '0722334455', 'pierre.fournier@email.fr'),
(17, 'Sarah', 'Girard', '0688665544', 'sarah.girard@email.fr'),
(18, 'Hugo', 'Lambert', '0611223366', 'hugo.lambert@email.fr'),
(19, 'Julie', 'Masson', '0733445566', 'julie.masson@email.fr'),
(20, 'Arthur', 'Henry', '0666554433', 'arthur.henry@email.fr');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`agency_Id`),
  ADD UNIQUE KEY `agency_Name_UNIQUE` (`agency_Name`);

--
-- Index pour la table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`trip_Id`),
  ADD KEY `fk_trip_user_idx` (`trip_CreatorUserId`),
  ADD KEY `fk_trip_departure_agency_idx` (`trip_DepartureAgencyId`),
  ADD KEY `fk_trip_arrival_agency_idx` (`trip_ArrivalAgencyId`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_Id`),
  ADD UNIQUE KEY `user_PhoneNumber_UNIQUE` (`user_PhoneNumber`),
  ADD UNIQUE KEY `user_Email_UNIQUE` (`user_Email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agencies`
--
ALTER TABLE `agencies`
  MODIFY `agency_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `trips`
--
ALTER TABLE `trips`
  MODIFY `trip_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `fk_trip_arrival_agency` FOREIGN KEY (`trip_ArrivalAgencyId`) REFERENCES `agencies` (`agency_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trip_departure_agency` FOREIGN KEY (`trip_DepartureAgencyId`) REFERENCES `agencies` (`agency_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_trip_user` FOREIGN KEY (`trip_CreatorUserId`) REFERENCES `users` (`user_Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
