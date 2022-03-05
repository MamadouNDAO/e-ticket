-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 05 mars 2022 à 08:48
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `eticket`
--

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

CREATE TABLE `artiste` (
  `id` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `artiste`
--

INSERT INTO `artiste` (`id`, `nom`) VALUES
(1, 'Youssou Ndour'),
(2, 'Wally Seck'),
(3, 'Viviane Chidide'),
(4, 'Dip');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `telephone` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `prenom`, `nom`, `telephone`, `password`) VALUES
(1, 'Mamy', 'Diallo', '770123456', '$2y$10$3VoKGORKxbMo77dHw2HK1Ov77JlGojiXpzuO1EZ5pzEwjIOrPMMDe'),
(2, 'Amadou', 'Diop', '778888888', '$2y$10$/wLM1MgSJS84W2L3g.WT9eXhz4ugcetzk6/R/MLfrH7tHPQESGkT6'),
(3, 'Anna', 'Faye', '751234567', '$2y$10$MSc0xQfSW2Me8qnQzztfE.44hCptoC2lGIgHc6.ObJ5cdYVGoF7FS');

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `libelle` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `heure` varchar(50) NOT NULL,
  `lieu` varchar(250) NOT NULL,
  `poster` varchar(250) DEFAULT NULL,
  `ticket_vendu` int(11) NOT NULL,
  `ticket_vip` int(11) NOT NULL,
  `ticket_simple` int(11) NOT NULL,
  `artiste_id` int(11) DEFAULT NULL,
  `place` int(11) NOT NULL,
  `vip` int(11) NOT NULL,
  `simple` int(11) NOT NULL,
  `prix_vip` int(11) NOT NULL,
  `prix_simple` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id_event`, `libelle`, `date`, `heure`, `lieu`, `poster`, `ticket_vendu`, `ticket_vip`, `ticket_simple`, `artiste_id`, `place`, `vip`, `simple`, `prix_vip`, `prix_simple`) VALUES
(1, 'Youssou Ndour', '2022-02-25', '', 'Grand Théatre', NULL, 2500, 500, 200, 1, 0, 0, 0, 0, 0),
(2, 'Wally B. Seck', '2022-03-19', '', 'Sorano', 'waly.jpg', 2, 2, 0, 2, 350, 150, 200, 15000, 10000),
(3, 'a', '2022-02-11', '00:05', 'mercedes', '2651fiche technique.jpg', 0, 0, 0, 1, 1000, 100, 900, 1000, 500),
(11, 'dancing', '2022-04-08', '00:50', 'Sorano', 'you.jpg', 4, 14, 50, 1, 150, 50, 100, 2500, 2000),
(12, 'barak', '2022-03-24', '01:05', 'Sorano', 'you.jpg', 2, 2, 0, 1, 455, 100, 355, 1500, 1000),
(13, 'Vivi', '2022-04-10', '00:00', 'Sorano', 'vivi.jpg', 0, 0, 0, 1, 2000, 500, 1500, 15000, 10000),
(14, 'Dip', '2022-04-30', '23:00', 'Aréna', '6156arton8276.png', 0, 0, 0, 4, 3000, 1000, 2000, 5000, 4000);

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
--

CREATE TABLE `ticket` (
  `id_ticket` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `prix` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ticket`
--

INSERT INTO `ticket` (`id_ticket`, `id_event`, `id_client`, `date`, `prix`, `type`) VALUES
(13, 12, 3, '2022-03-05', 1500, 'vip'),
(14, 12, 3, '2022-03-05', 1500, 'vip'),
(15, 12, 3, '2022-03-05', 1500, 'vip');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `photo` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `prenom`, `nom`, `telephone`, `password`, `photo`) VALUES
(1, 'Mamadou', 'ndao', '785824772', '$2y$10$H9UTP1E0rLk/rKVJD3EO2uqgy1pnxA7hpAH98wMpUzs.9gSOIqdjC', NULL),
(2, 'Marie', 'Anne', '773211059', '$2y$10$WFsCRAMfVnW8ETYI7Hy9heHeAOSDZybaFXEQsK6yfOmubdiluK4HO', NULL),
(3, 'Aminata', 'Diagne', '773333333', '$2y$10$N0FeYgrgydMnkJ/ujbG8fO5Z0D8VdTHmWxemeYF3HFHDPdiJAcRwi', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artiste`
--
ALTER TABLE `artiste`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD KEY `artiste_id` (`artiste_id`);

--
-- Index pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id_ticket`),
  ADD KEY `id_client` (`id_client`),
  ADD KEY `id_event` (`id_event`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `telephone` (`telephone`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artiste`
--
ALTER TABLE `artiste`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `event_ibfk_1` FOREIGN KEY (`artiste_id`) REFERENCES `artiste` (`id`);

--
-- Contraintes pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `ticket_ibfk_2` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
