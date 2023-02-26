-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : db
-- Généré le : dim. 26 fév. 2023 à 15:13
-- Version du serveur : 8.0.30
-- Version de PHP : 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_school`
--
CREATE DATABASE IF NOT EXISTS `db_school` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `db_school`;

-- --------------------------------------------------------

--
-- Structure de la table `t_section`
--

CREATE TABLE `t_section` (
  `idSection` int NOT NULL,
  `secName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `t_section`
--

INSERT INTO `t_section` (`idSection`, `secName`) VALUES
(1, 'Informatique'),
(2, 'Géographie'),
(3, 'Français'),
(4, 'Anglais'),
(5, 'Histoire');

-- --------------------------------------------------------

--
-- Structure de la table `t_teacher`
--

CREATE TABLE `t_teacher` (
  `idTeacher` int NOT NULL,
  `teaFirstname` varchar(50) NOT NULL,
  `teaName` varchar(50) NOT NULL,
  `teaGender` char(1) NOT NULL,
  `teaNickname` varchar(50) NOT NULL,
  `teaOrigine` text NOT NULL,
  `fkSection` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `t_teacher`
--

INSERT INTO `t_teacher` (`idTeacher`, `teaFirstname`, `teaName`, `teaGender`, `teaNickname`, `teaOrigine`, `fkSection`) VALUES
(6, 'Samuel', 'Fernandez', 'H', 'Chad', 'CET HOMME, UN CHAD, MAIS UN CHAD ! JE VOUS JURE !', 1),
(9, 'Mark', 'Zuckerberg', 'H', 'Bzzzz', 'Il fait des bruits mécaniques quand il travaille.', 1),
(10, 'Philippe', 'Jaquot', 'F', 'L\'homme', 'Il a tout d\'un homme, mais c\'est une femme...', 4),
(14, 'OBahamas', 'Barraque', 'H', 'Michel', 'Son nom est déjà chelou, du coup son surnom c\'est un nom normal pour faciliter la communication avec lui', 4);

-- --------------------------------------------------------

--
-- Structure de la table `t_user`
--

CREATE TABLE `t_user` (
  `idUser` int NOT NULL,
  `useLogin` varchar(20) NOT NULL,
  `usePassword` varchar(255) NOT NULL,
  `useAdministrator` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `t_user`
--

INSERT INTO `t_user` (`idUser`, `useLogin`, `usePassword`, `useAdministrator`) VALUES
(1, 'samfernande', '$2y$10$zjywzXuqdzCLCwNDCZ03JOGTUk4RRRVJt2cu8jpIflcyJwJ0nkKH6', 1),
(2, 'hommesansdroits', '$2y$10$8l1Oax9IH73j2gcdHdCpCenmek97IqcOXjVfmv89ssvRjfft6SR6C', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_section`
--
ALTER TABLE `t_section`
  ADD PRIMARY KEY (`idSection`);

--
-- Index pour la table `t_teacher`
--
ALTER TABLE `t_teacher`
  ADD PRIMARY KEY (`idTeacher`),
  ADD KEY `fkSection` (`fkSection`);

--
-- Index pour la table `t_user`
--
ALTER TABLE `t_user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_section`
--
ALTER TABLE `t_section`
  MODIFY `idSection` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `t_teacher`
--
ALTER TABLE `t_teacher`
  MODIFY `idTeacher` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `t_user`
--
ALTER TABLE `t_user`
  MODIFY `idUser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `t_teacher`
--
ALTER TABLE `t_teacher`
  ADD CONSTRAINT `t_teacher_ibfk_1` FOREIGN KEY (`fkSection`) REFERENCES `t_section` (`idSection`);
--
-- Base de données : `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `mydb`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
