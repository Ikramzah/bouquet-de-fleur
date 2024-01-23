-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 10 mai 2023 à 03:50
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
-- Base de données : `projet filali`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `login_ad` varchar(20) NOT NULL,
  `pass_ad` varchar(20) NOT NULL,
  `nom_ad` varchar(20) NOT NULL,
  `prenom_ad` varchar(20) NOT NULL,
  `email_ad` varchar(35) NOT NULL,
  `id_ad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`login_ad`, `pass_ad`, `nom_ad`, `prenom_ad`, `email_ad`, `id_ad`) VALUES
('zekri', 'passwz', 'zekri', 'fatima ezzahra', 'zkr.fatimaezzhra@gmail.com', 1),
('zahiri', 'passwza', 'zahiri', 'ikram', '**', 2);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `login_cl` varchar(20) NOT NULL,
  `pass_cl` varchar(25) NOT NULL,
  `nom_cl` varchar(25) NOT NULL,
  `prenom_cl` varchar(25) NOT NULL,
  `id_cl` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`login_cl`, `pass_cl`, `nom_cl`, `prenom_cl`, `id_cl`) VALUES
('test', 'test', 'test', 'test', 1),
('login', 'passwl', 'riad', 'meriem', 6),
('hi', 'hello', 'hi', 'hello', 7);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `num_pro` int(20) NOT NULL,
  `nbr_pro` int(20) NOT NULL,
  `date_livr` date NOT NULL,
  `total` int(20) NOT NULL,
  `adr_livr` varchar(40) NOT NULL,
  `num_com` int(11) NOT NULL,
  `id_cl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`num_pro`, `nbr_pro`, `date_livr`, `total`, `adr_livr`, `num_com`, `id_cl`) VALUES
(2, 6, '2023-04-26', 480, 'kkkkkkkkkkkkkkkkkkkkkk', 17, 1),
(3, 1, '2023-05-18', 1095, 'yyyyyyyyyyyyyyyyy', 22, 1);

-- --------------------------------------------------------

--
-- Structure de la table `commande2`
--

CREATE TABLE `commande2` (
  `id_com` int(11) NOT NULL,
  `id_cl` int(11) NOT NULL,
  `adr_livr` varchar(55) NOT NULL,
  `date_livr` date NOT NULL,
  `total_prix` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande2`
--

INSERT INTO `commande2` (`id_com`, `id_cl`, `adr_livr`, `date_livr`, `total_prix`) VALUES
(14, 1, 'kkkkkkkkkkkkkkkkk', '2023-05-17', 60),
(15, 1, 'ooooooooooooooo', '2023-05-10', 168),
(16, 1, 'hhhhhhhhhhhhhhhhhhh', '2023-05-24', 73);

-- --------------------------------------------------------

--
-- Structure de la table `commande2_produit`
--

CREATE TABLE `commande2_produit` (
  `id_com` int(11) NOT NULL,
  `num_pro` int(11) NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `id_com2_pro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commande2_produit`
--

INSERT INTO `commande2_produit` (`id_com`, `num_pro`, `quantite`, `prix`, `id_com2_pro`) VALUES
(14, 2, 5, 30, 51),
(14, 2, 5, 30, 52),
(14, 2, 5, 30, 53),
(15, 3, 3, 18, 54),
(15, 4, 4, 24, 55),
(15, 7, 5, 45, 56),
(15, 8, 9, 99, 57),
(16, 12, 5, 55, 58),
(16, 12, 5, 55, 59),
(16, 10, 3, 18, 60);

-- --------------------------------------------------------

--
-- Structure de la table `email`
--

CREATE TABLE `email` (
  `email` varchar(50) NOT NULL,
  `id_cl` int(25) NOT NULL,
  `message` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fleur`
--

CREATE TABLE `fleur` (
  `type_fleur` varchar(30) NOT NULL,
  `id_type_fleur` int(7) NOT NULL,
  `prix_fleur` int(8) NOT NULL,
  `image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `fleur`
--

INSERT INTO `fleur` (`type_fleur`, `id_type_fleur`, `prix_fleur`, `image`) VALUES
('rose', 1, 5, 'rose.jpeg'),
('lilas', 2, 6, 'lilas.jpeg'),
('light pink rose ', 3, 6, 'babypinkrose.jpeg'),
('blue rose', 4, 6, 'bluerose.jpeg'),
('Daisy Flower', 5, 5, 'daisyflower.jpeg'),
('White Daisy Flower', 6, 5, 'daisywhiteflower.jpeg'),
('Light Pink Dahlia', 7, 9, 'lightpinkdahlia.jpeg'),
('Peach Blossom', 8, 11, 'peachblossom.jpeg'),
('Pink Dahlia', 9, 10, 'pinkdahlia.jpeg'),
('Pink Rose', 10, 6, 'pinkrose2.jpeg'),
('Pink Tulip', 11, 7, 'pinktulip2.jpeg'),
('Purple Dahlia', 12, 11, 'purpledahlia.jpeg'),
('Purple Tulip', 13, 7, 'purpletulip.jpeg'),
('Red Dahlia', 14, 11, 'reddahlia.jpeg'),
('Red Gazania', 15, 7, 'redgazania.png'),
('Red White Dahlia', 16, 12, 'redwhitedahlia.jpg'),
('Red Rose', 17, 7, 'rose.jpeg'),
('Sunflower', 18, 9, 'sunflower.jpeg'),
('White Rose', 19, 7, 'whiterose.jpeg'),
('Yellow Rose', 20, 7, 'yellowrose2.jpeg'),
('Yellow Tulip', 21, 7, 'yellowtulip.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `historique_achat`
--

CREATE TABLE `historique_achat` (
  `id_prod` int(20) NOT NULL,
  `nbr_pro` int(20) NOT NULL,
  `id_cl` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) DEFAULT NULL,
  `image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `nom_pro` varchar(20) NOT NULL,
  `num_pro` int(12) NOT NULL,
  `prix_ttc` int(12) NOT NULL,
  `prix_ht` int(12) NOT NULL,
  `qte_stc` int(20) NOT NULL,
  `caracteristiques` varchar(500) NOT NULL,
  `type_prod` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`nom_pro`, `num_pro`, `prix_ttc`, `prix_ht`, `qte_stc`, `caracteristiques`, `type_prod`, `image`) VALUES
('Bali', 1, 1800, 1500, 100, 'Cette composition florale tendre et toute douce transmettra un sentiment d’affection et d’admiration sincère à la personne de votre choix ! Choisissez-le pour un premier rendez-vous ou pour un anniversaire !', 'bouquet', 'bouquet.jpg'),
('Floralight', 2, 80, 75, 100, 'Évadez-vous sous le soleil d’un été chaud avec cette Bougie parfumée Jardin Méditerranéen. Son contenant, unique et design, est un véritable objet de décoration.', 'decoration', 'candle.jpg'),
('Bright Midnight', 3, 1095, 1000, 1000, 'Cette composition florale tendre et toute douce transmettra un sentiment d’affection et d’admiration sincère à la personne de votre choix ! Ramadan est la meilleure occasion pour le donner comme cadeau !', 'bouquet', 'bouquet2.jpg'),
('Beautifully Dark', 4, 730, 700, 100, 'Cette composition florale tendre et toute douce transmettra un sentiment d’affection et d’admiration sincère à la personne de votre choix ! Choisissez-le pour un premier rendez-vous ou pour un anniversaire !', 'bouquet', 'bouquet3.jpg'),
('Crème en noir', 5, 520, 500, 100, 'Cette composition florale tendre et toute douce transmettra un sentiment d’affection et d’admiration sincère à la personne de votre choix ! Choisissez-le pour un premier rendez-vous ou pour un anniversaire !', 'bouquet', 'bouquet4.jpg'),
('50 Shades of Pink', 6, 625, 600, 100, 'Cette composition florale tendre et toute douce transmettra un sentiment d’affection et d’admiration sincère à la personne de votre choix ! Choisissez-le pour un premier rendez-vous ou pour un anniversaire !', 'bouquet', 'bouquet5.jpg'),
('A Brighter Day', 7, 1050, 1000, 100, 'Offrez ce sublime bouquet de roses blanches et jaunes, symbole de pureté, pour signifier votre admiration avec délicatesse. ce bouquet ajoutera la touche de classe à votre surprise pour un anniversaire ou mariage.', 'bouquet', 'bouquet6.jpg'),
('A Night In Paris', 8, 620, 600, 100, 'Offrez ce sublime bouquet de roses, symbole de pureté, pour signifier votre admiration avec délicatesse. ce bouquet ajoutera la touche de classe à votre surprise pour un anniversaire ou mariage.', 'bouquet', 'bouquet7.jpg'),
('White Swan', 9, 620, 600, 100, 'Offrez ce sublime bouquet de roses blanches, symbole de pureté, pour signifier votre admiration avec délicatesse. ce bouquet ajoutera la touche de classe à votre surprise pour un anniversaire ou mariage.', 'bouquet', 'bouquet8.jpg'),
('Can\'t wait to see yo', 10, 510, 500, 100, 'Les roses roses prônent par-dessus tout la paix et la sincérité, Les roses roses expriment la tendresse, Elles sont merveilleusement talentueuses quand vient le moment de dire quelque chose d’important : un message affectueux de joie et de bonheur.', 'bouquet', 'bouquet9.jpg'),
('Blossom Buddies', 11, 1560, 1300, 100, 'White ceramic carved vase with faux Blossom spray', 'decoration', 'Blossombuddies.jpg'),
('Craved to perfection', 12, 1800, 1500, 100, 'Carved white ceramic vase with faux spray stems', 'decoration', 'carvedtoperfection.jpg'),
('Al Qamar', 13, 5400, 4500, 100, 'Large Gold Crescent With Lights And Draping White Faux Flowers.', 'decoration', 'alqamar.jpg'),
('Bedazzled', 14, 1800, 1500, 100, 'Pink hydrangea and Mixed fresh flowers arrangement in a White 30 cm round box', 'bouquet', 'Bedazzled.jpg'),
('Luminous Purples', 15, 6600, 5500, 100, 'Antique gold lantern with 6 levels of candles, draped in beautiful purple faux flowers.', 'decoration', 'luminouspurples.jpg'),
('Lustrous Violet', 16, 1800, 1500, 100, 'A fusion of fuchsia faux florals placed precipitously in a large traditional antique-gold colored vase.', 'decoration', 'lustrousviolet.jpg'),
('My Lovely Sunshine', 17, 1644, 1370, 100, 'An ensemble that will light up any room. A Beautiful white orchid lays against fresh roses in a 30 cm round box.', 'bouquet', 'mylovelysunshine.jpg'),
('Our Happily Ever Aft', 18, 1980, 1650, 100, 'Shades of pink come together with white flowers in a 30 cm round box to spend their happily ever after.', 'bouquet', 'ourhappilyeverafter.jpg'),
('Pinky Minky', 19, 1860, 1550, 100, 'Pink spray roses and white fresh flowers in a White 20 cm round box.', 'bouquet', 'pinkyminky.jpg'),
('The Red Carpet', 20, 1800, 1500, 100, 'A star studded arrangement of 57 long life classic roses in a 90 cm clear acrylic box.', 'bouquet', 'theredcarpet.webp'),
('Vienna', 21, 1872, 1560, 100, 'Stylish symphony of pink and purple fresh flowers boasting magnificently in a 30 cm white round box.\r\n', 'bouquet', 'vienna.jpg'),
('Voilà', 22, 1560, 1300, 100, 'A bright and bold assortment of violet faux florals and leaves is presented in a tall lean antique-colored vase', 'decoration', 'voilà.jpg'),
('You Deserve The Worl', 23, 1800, 1500, 100, 'Show them how much you care with a WILD ROSE classic gift set of fresh blue Hydrangeas with 2 orchid blooms in a White 20 cm round box, coupled with a large box of premium Medjool dates', 'bouquet', 'youdeservetheworld.jpg'),
('Say it', 24, 840, 700, 100, 'Somethings are best said with chocolate. Say it with 25 Pieces of Assorted Chocolate in a beautiful black and gold box.', 'chocolat', 'choco1.jpg'),
('It\'s a date', 25, 300, 250, 100, 'A proper delicacy and an elegant gift. Wild Rose doesn’t provide just any dates. Grown deep within the Jordan valley, our King of Dates are rich with caramel flavor, handpicked and stored inside a lavish black tin box comprised of 12 Medjool Dates over 2 layers. A Minimum Order Of 2 Boxes required, but if we’re being honest, one is not enough.', 'chocolat', 'choco2.jpg'),
('Chocilat', 26, 900, 750, 100, '50 pieces of assorted chocolate kisses spread over 2 layers, in a chic black box.', 'chocolat', 'choco3.jpg'),
('Boite Émeraude', 27, 360, 300, 100, 'WILD ROSE a réinventé ce joli coffret circulaire, garni d’un assortiment de 23 chocolats croquants, fondants, onctueux… pour étonner les gourmands et leur faire découvrir des émotions inédites ! Au-delà des recettes, ce coffret illustre notre goût du détail et affirme notre savoir-fair de chocolatier cacaoculteur. ', 'chocolat', 'choco4.jpg'),
('Centre de table', 28, 708, 590, 100, 'WILD ROSE a réinventé ce joli coffret circulaire, garni d’un assortiment de 23 chocolats croquants, fondants, onctueux… pour étonner les gourmands et leur faire découvrir des émotions inédites ! Au-delà des recettes, ce coffret illustre notre goût du détail et affirme notre savoir-fair de chocolatier cacaoculteur. ', 'chocolat', 'choco6.jpg'),
('Coffret magique', 29, 720, 600, 100, 'WILD ROSE a réinventé ce joli coffret circulaire, garni d’un assortiment de 23 chocolats croquants, fondants, onctueux… pour étonner les gourmands et leur faire découvrir des émotions inédites ! Au-delà des recettes, ce coffret illustre notre goût du détail et affirme notre savoir-fair de chocolatier cacaoculteur. ', 'chocolat', 'choco7.jpg'),
('Coupe Bicolore', 30, 744, 620, 100, 'WILD ROSE a réinventé ce joli coffret circulaire, garni d’un assortiment de 23 chocolats croquants, fondants, onctueux… pour étonner les gourmands et leur faire découvrir des émotions inédites ! Au-delà des recettes, ce coffret illustre notre goût du détail et affirme notre savoir-fair de chocolatier cacaoculteur. ', 'chocolat', 'choco8.jpg'),
('Coffret Gourmand', 31, 720, 600, 100, 'WILD ROSE a réinventé ce joli coffret circulaire, garni d’un assortiment de 23 chocolats croquants, fondants, onctueux… pour étonner les gourmands et leur faire découvrir des émotions inédites ! Au-delà des recettes, ce coffret illustre notre goût du détail et affirme notre savoir-fair de chocolatier cacaoculteur. ', 'chocolat', 'choco9.jpg'),
('Boite En Cuir', 32, 744, 620, 100, 'WILD ROSE a réinventé ce joli coffret circulaire, garni d’un assortiment de 23 chocolats croquants, fondants, onctueux… pour étonner les gourmands et leur faire découvrir des émotions inédites ! Au-delà des recettes, ce coffret illustre notre goût du détail et affirme notre savoir-fair de chocolatier cacaoculteur. ', 'chocolat', 'choco10.jpg'),
('Prestige', 33, 708, 590, 100, 'WILD ROSE a réinventé ce joli coffret circulaire, garni d’un assortiment de 23 chocolats croquants, fondants, onctueux… pour étonner les gourmands et leur faire découvrir des émotions inédites ! Au-delà des recettes, ce coffret illustre notre goût du détail et affirme notre savoir-fair de chocolatier cacaoculteur. ', 'chocolat', 'choco11.jpg'),
('Never', 34, 744, 690, 100, 'WILD ROSE a réinventé ce joli coffret circulaire, garni d’un assortiment de 23 chocolats croquants, fondants, onctueux… pour étonner les gourmands et leur faire découvrir des émotions inédites ! Au-delà des recettes, ce coffret illustre notre goût du détail et affirme notre savoir-fair de chocolatier cacaoculteur. ', 'chocolat', 'choco12.jpg'),
('Always', 35, 590, 708, 100, 'WILD ROSE a réinventé ce joli coffret circulaire, garni d’un assortiment de 23 chocolats croquants, fondants, onctueux… pour étonner les gourmands et leur faire découvrir des émotions inédites ! Au-delà des recettes, ce coffret illustre notre goût du détail et affirme notre savoir-fair de chocolatier cacaoculteur. ', 'chocolat', 'choco13.jpg'),
('Boite En Noyer Laqué', 36, 420, 350, 100, 'WILD ROSE a réinventé ce joli coffret circulaire, garni d’un assortiment de 23 chocolats croquants, fondants, onctueux… pour étonner les gourmands et leur faire découvrir des émotions inédites ! Au-delà des recettes, ce coffret illustre notre goût du détail et affirme notre savoir-fair de chocolatier cacaoculteur. ', 'chocolat', 'choco5.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id_ad`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_cl`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`num_com`);

--
-- Index pour la table `commande2`
--
ALTER TABLE `commande2`
  ADD PRIMARY KEY (`id_com`);

--
-- Index pour la table `commande2_produit`
--
ALTER TABLE `commande2_produit`
  ADD PRIMARY KEY (`id_com2_pro`);

--
-- Index pour la table `fleur`
--
ALTER TABLE `fleur`
  ADD PRIMARY KEY (`id_type_fleur`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`num_pro`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id_ad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_cl` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `num_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `commande2`
--
ALTER TABLE `commande2`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `commande2_produit`
--
ALTER TABLE `commande2_produit`
  MODIFY `id_com2_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT pour la table `fleur`
--
ALTER TABLE `fleur`
  MODIFY `id_type_fleur` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `num_pro` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
