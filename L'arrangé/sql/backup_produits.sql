-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 22 avr. 2021 à 18:37
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `base_arrange`
--

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

DROP TABLE IF EXISTS `produits`;
CREATE TABLE IF NOT EXISTS `produits` (
  `product_id` int(4) NOT NULL AUTO_INCREMENT,
  `product_img_rel` varchar(128) NOT NULL,
  `product_categories` varchar(32) NOT NULL,
  `product_ref` varchar(4) NOT NULL,
  `product_label` varchar(32) NOT NULL,
  `product_stock` int(4) NOT NULL,
  `product_desc` varchar(512) NOT NULL,
  `product_prix` int(4) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`product_id`, `product_img_rel`, `product_categories`, `product_ref`, `product_label`, `product_stock`, `product_desc`, `product_prix`) VALUES
(1, 'src=\"./img/produits/Livre/Printemps.jpg\" alt=\"Livre Printemps\"', 'Livre', 'L1', 'Recettes printaniere', 15, 'Notre livre de recette Ã  base de rhum Ã  faire au printemps.<br/> Rhum arrange avec des fruits de saisons et nos meilleurs recettes floral.', 25),
(2, 'src=\"./img/produits/Livre/Ete.jpeg\" alt=\"Livre ete\"', 'Livre', 'L2', 'Recettes d ete', 15, 'Notre livre de recette Ã  base de rhum Ã  faire en ete.<br/> Rhum arrange avec des fruits de saisons et nos meilleurs cocktail rafraichissant.', 25),
(3, 'src=\"./img/produits/Livre/Automne.jpg\" alt=\"Livre Automne\"', 'Livre', 'L3', 'Recettes d automne', 15, 'Notre livre de recette Ã  base de rhum Ã  faire en automne.<br/> Rhum arrange avec des fruits de saisons et nos meilleurs cocktail pour halloween.', 25),
(4, 'src=\"./img/produits/Livre/Hiver.jpg\" alt=\"Livre Hiver\"', 'Livre', 'L4', 'Recettes hiver', 15, 'Notre livre de recette Ã  base de rhum Ã  faire en hiver.<br/> Rhum arrange avec des fruits de saisons ou encore des Grogs Ã  boire au coin du feu.', 25),
(5, 'src=\"./img/produits/Livre/Pack.jpg\" alt=\"Pack Livre\"', 'Livre', 'L5', 'Pack de Livre', 10, 'Tous les livres de notre boutique au prix avantageux de 3 !!!', 75),
(6, 'src=\"./img/produits/Kit/Miel.jpg\" alt=\"Miel\"', 'Kit', 'K1', 'Miel Bio de France', 10, 'Le miel de lavande est un aliment 100 % naturel produit par les abeilles Ã  partir du nectar de la fleur.<br/> D une couleur ambree Ã  jaune doree, il se caracterise par un arÃ´me delicat typique, une texture onctueuse aux saveurs fruitees.<br/> Moins calorique que le sucre, avec un pouvoir sucrant superieur, il peut le remplacer avantageusement.', 25),
(7, 'src=\"./img/produits/Kit/Poivre.jpg\" alt=\"Poivre Voatsiperifery\"', 'Kit', 'K2', 'Poivre Voatsiperifery', 10, 'Poivre Sauvage De Madagascar, appele aussi Voatsiperifery, est un poivre plutÃ´t doux au niveau du piquant.<br/> Son caractere exceptionnel provient de son parfum riche et intense. DejÃ  Ã  l odeur, on decele des notes de terre fraiche, subtilement boisee.<br/> Une fois en bouche, commence une saveur d herbes fraiches brulees, de dessous de bois qui laisse place rapidement Ã  une fraicheur fruitee d agrume citronne, avec une pointe de note fleurie.', 15),
(8, 'src=\"./img/produits/Kit/sucrecoco.jpg\" alt=\"Sucre de fleur de coco\"', 'Kit', 'K3', 'Sucre de fleur de coco', 10, 'Câ€™est un edulcorant sain et naturel, caracterise par son incroyable saveur avec un indice glycemique particulierement bas, il commence tout juste Ã  devenir populaire en Occident.<br/> Au nez, il developpe des notes fleuries de fleur de coco, aux touches d arÃ´me caramelise avec des pointes dâ€™amandes et de noisettes.<br/> Son goÃ»t est subtilement caramelise. Il est moins prononce que le sucre complet, mais plus type que le sucre de table sans avoir le goÃ»t de la noix de coco.', 25),
(9, 'src=\"./img/produits/Kit/Vanille.jpg\" alt=\"Vanille\"', 'Kit', 'K4', 'Vanille', 10, '10 gousse de vanille de Tahiti Raiatea gourmet extra d une longueur de 16 Ã  20cm.<br/> Cette vanille de Tahiti va se caracteriser par une gousse de vanille tres grasse, huileuse avec une belle robe ridee.<br/> La vanille est tres brillante avec parfum extraordinaire.<br/> Notes principales : d anis et de pruneaux qui laisse place Ã  un goÃ»t de vanille florale....', 55),
(10, 'src=\"./img/produits/Kit/Cannelle.jpg\" alt=\"Cannelle de Ceylan\"', 'Kit', 'K5', 'Cannelle de Ceylan', 10, 'Parmi les nombreuses especes, la plus reputee est la cannelle de Ceylan (Cinnamomum zeylanicum, synonyme de Cinnamomum verum).<br/> Celle-ci, est ainsi originaire de Ceylan autrement dit du Sri Lanka, appelee Â« vraie cannelle Â».<br/> La cannelle de Ceylan a plusieurs fines couches dâ€™ecorces, celle-ci tres subtile, peut Ãªtre laissee tout au long de vos macerations. ', 15),
(11, 'src=\"./img/produits/Accessoire/3L.jpg\" alt=\"Bocal hermetique 3L\"', 'Accessoire', 'A1', 'Bocal hermetique 3L', 10, 'L incontournalbe, sa contenance vous permettra de faire rentrer n importe quel fruit mÃªme les plus volumineux.', 12),
(12, 'src=\"./img/produits/Accessoire/Filtre.jpg\" alt=\"Filtre reutilisable\"', 'Accessoire', 'A2', 'Filtre reutilisable', 10, 'Pour filtrer vos preparation avant degustation.<br/> Ce filtre en inox retiendra aisement les pulpes de vos fruits ou encore vos epices les plus fines.', 12),
(13, 'src=\"./img/produits/Accessoire/1L.jpg\" alt=\"Bouteille en verre 1L\"', 'Accessoire', 'A3', 'Bouteille en verre 1L', 10, 'Sa simplicite est son atout, son systeme de fermeture hermetique vous garantira securite et longevite Ã  vos preparations.', 5),
(14, 'src=\"./img/produits/Accessoire/Zesteur.jpg\" alt=\"Zesteur pour agrume\"', 'Accessoire', 'A4', 'Zesteur pour agrume', 10, 'Ce zesteur tres simple vous permettra de zester vos agrumes en tout simplicite.<br/> Tout en evitant le mesocarpe(Ziste, partie blanche du zeste) de celui-ci.', 8),
(15, 'src=\"./img/produits/Accessoire/Fiole.jpg\" alt=\"10 Fiole\"', 'Accessoire', 'A5', '10 Fiole', 10, '10 petites fioles pour offrir vos creations Ã  vos amis et famille !', 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
