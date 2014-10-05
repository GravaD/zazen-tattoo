-- phpMyAdmin SQL Dump
-- version 4.2.5
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Dim 05 Octobre 2014 à 21:32
-- Version du serveur :  5.5.38
-- Version de PHP :  5.5.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `zazen-tattoo`
--
CREATE DATABASE IF NOT EXISTS `zazen-tattoo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `zazen-tattoo`;

-- --------------------------------------------------------

--
-- Structure de la table `imgs`
--

DROP TABLE IF EXISTS `imgs`;
CREATE TABLE `imgs` (
`id_img` int(11) NOT NULL,
  `artist_name` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `imgs`
--

INSERT INTO `imgs` (`id_img`, `artist_name`) VALUES
(1, 'Mathieu');

-- --------------------------------------------------------

--
-- Structure de la table `rdv`
--

DROP TABLE IF EXISTS `rdv`;
CREATE TABLE `rdv` (
`id_rdv` int(11) NOT NULL,
  `client_name` char(30) NOT NULL,
  `tel` char(10) DEFAULT NULL,
  `mail` varchar(100) NOT NULL,
  `subject` enum('Tatouage','Piercing') NOT NULL,
  `message` mediumtext NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `rdv`
--

INSERT INTO `rdv` (`id_rdv`, `client_name`, `tel`, `mail`, `subject`, `message`, `date`) VALUES
(8, 'lolo', '1234567899', 'errrr@frtgfree.fr', 'Piercing', 'PArce que', '2014-10-05 15:54:51'),
(10, 'titi', '0690555555', 'azer@hotyl.fr', 'Tatouage', 'Hello', '2014-10-05 15:56:18'),
(11, 'lolo', '0690555555', 'azer@hotyl.fr', 'Tatouage', 'Hello you', '2014-10-05 15:56:18'),
(13, 'lalala', '0690555555', 'azer@hotyl.fr', 'Tatouage', 'Hello la', '2014-10-05 15:56:18'),
(18, 'yohan', '0690555555', 'yoyo@tilt.fr', 'Piercing', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget finibus sem. Duis quis metus auctor lectus congue rhoncus et ac justo. Ut auctor leo at eros sodales, id aliquet nisl molestie. Praesent luctus dictum est, eget pretium risus porta at. Donec nulla leo, lacinia non ligula vulputate, interdum pharetra orci. Donec id nulla dictum, lacinia sem sit amet, elementum felis. Aliquam sit amet sem nunc. Nulla facilisi. In magna libero, tincidunt quis tristique rutrum, feugiat ut odio. Praesent sed dignissim magna, ac feugiat nunc. Vivamus consectetur, urna sit amet sodales lobortis, eros sapien accumsan velit, sed finibus ante turpis quis tellus. Cras pharetra dictum sagittis. Duis pulvinar, nulla sed mollis consequat, augue justo mollis erat, ut volutpat enim urna quis urna.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eget finibus sem. Duis quis metus auctor lectus congue rhoncus et ac justo. Ut auctor leo at eros sodales, id aliquet nisl molestie. Praesent luctus dictum est, eget pretium risus porta at. Donec nulla leo, lacinia non ligula vulputate, interdum pharetra orci. Donec id nulla dictum, lacinia sem sit amet, elementum felis. Aliquam sit amet sem nunc. Nulla facilisi. In magna libero, tincidunt quis tristique rutrum, feugiat ut odio. Praesent sed dignissim magna, ac feugiat nunc. Vivamus consectetur, urna sit amet sodales lobortis, eros sapien accumsan velit, sed finibus ante turpis quis tellus. Cras pharetra dictum sagittis. Duis pulvinar, nulla sed mollis consequat, augue justo mollis erat, ut volutpat enim urna quis urna.', '2014-10-05 18:24:47');

-- --------------------------------------------------------

--
-- Structure de la table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
`id_tag` int(11) NOT NULL,
  `id_img` int(11) NOT NULL,
  `tag_name` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `tags`
--

INSERT INTO `tags` (`id_tag`, `id_img`, `tag_name`) VALUES
(1, 1, 'gogo');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `imgs`
--
ALTER TABLE `imgs`
 ADD PRIMARY KEY (`id_img`);

--
-- Index pour la table `rdv`
--
ALTER TABLE `rdv`
 ADD PRIMARY KEY (`id_rdv`);

--
-- Index pour la table `tags`
--
ALTER TABLE `tags`
 ADD PRIMARY KEY (`id_tag`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `imgs`
--
ALTER TABLE `imgs`
MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `rdv`
--
ALTER TABLE `rdv`
MODIFY `id_rdv` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT pour la table `tags`
--
ALTER TABLE `tags`
MODIFY `id_tag` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
