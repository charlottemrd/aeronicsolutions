-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 17, 2021 at 12:02 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `inscription`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrateurs`
--

CREATE TABLE `administrateurs` (
                                   `id` int(11) NOT NULL,
                                   `firstName` varchar(255) NOT NULL,
                                   `name` varchar(255) NOT NULL,
                                   `mail` varchar(255) NOT NULL,
                                   `password` varchar(255) NOT NULL,
                                   `status` varchar(255) NOT NULL DEFAULT 'administrateur',
                                   `icode` int(11) NOT NULL,
                                   `banish` varchar(5) NOT NULL DEFAULT 'false'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrateurs`
--

INSERT INTO `administrateurs` (`id`, `firstName`, `name`, `mail`, `password`, `status`, `icode`, `banish`) VALUES
(3, 'admin', 'xxx', 'admin2@gmail.com', '$2y$12$W14m2iBErJlZRANIK8mh5.qnQ2q9xro8LFnvOWTWOt1T80iBKWecG', 'administrateur', 111, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
                           `id` int(11) NOT NULL,
                           `firstName` varchar(255) NOT NULL,
                           `name` varchar(255) NOT NULL,
                           `birthDate` date NOT NULL,
                           `kind` varchar(255) NOT NULL,
                           `company` varchar(255) NOT NULL,
                           `mail` varchar(255) NOT NULL,
                           `password` varchar(255) NOT NULL,
                           `doctor` varchar(255) NOT NULL,
                           `status` varchar(255) NOT NULL DEFAULT 'client',
                           `icode` int(11) NOT NULL,
                           `banish` varchar(5) NOT NULL DEFAULT 'false'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `firstName`, `name`, `birthDate`, `kind`, `company`, `mail`, `password`, `doctor`, `status`, `icode`, `banish`) VALUES
(7, 'Charlotte', 'Milard', '1999-12-25', 'Femme', 'air isep', 'charlotte@gymilard.fr', 'test', 'smith', 'client', 11, '0');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
                       `idFaq` int(11) NOT NULL,
                       `question` varchar(255) NOT NULL,
                       `reponse` varchar(255) NOT NULL,
                       `partie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`idFaq`, `question`, `reponse`, `partie`) VALUES
(1, 'Où puis-je trouver le code I-C demandé lors de l\'inscription ?', 'Le code I-C vous est fourni par votre entreprise lorsque celle-ci décide d\'adhérer au programme Aeronic Solutions.', 1),
(2, 'Je n\'arrive pas à me connecter', 'Si vous avez oublié votre mot de passe ou que vous avez des problèmes de connexion, vous pouvez nous contacter à l\'adresse mail : solutionsaeronic@gmail.com.', 2),
(3, 'Que représente l\'identifiant lors de la connexion ?', 'L\'identifiant vous est donné par votre adresse e-mail.', 2),
(4, 'Puis-je changer mon mot de passe ?', 'Vous pouvez changer votre mot de passe, nom, prénom et date de naissance depuis la page gestion du profil.', 3),
(5, 'Je n\'arrive pas à modifier mon adresse e-mail', 'Vous ne pouvez pas modifier votre adresse e-mail vous-même. Nous vous invitons à prendre contact avec un administrateur de Aeronic Solutions pour le faire.', 3),
(6, 'Je souhaite supprimer mon compte', 'Si vous n\'êtes pas satisfait des prestations offertes par Aeronic Solutions, il vous est possible d\'adresser un e-mail à solutionsaeronic@gmail.com afin que votre compte et vos données associées soient supprimées.', 3),
(9, 'Je suis un pilote, puis-je consulter les résultats de mes tests psychotechniques ?', 'Vous pouvez consulter vos tests à tout moment depuis la page Résultat test.', 4),
(10, 'Est-il possible de connaître le déroulement d\'un test Aeronic Solutions?', 'Afin que vous ne soyez pas déstabilisé la première fois que vous passez une série de tests, nous avons mis à votre disposition un résumé des tests ainsi que l\'ordre de ces derniers depuis la page information sur les tests.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `gestionnaires`
--

CREATE TABLE `gestionnaires` (
                                 `id` int(11) NOT NULL,
                                 `firstName` varchar(255) NOT NULL,
                                 `name` varchar(255) NOT NULL,
                                 `center` varchar(255) NOT NULL,
                                 `mail` varchar(255) NOT NULL,
                                 `password` varchar(255) NOT NULL,
                                 `status` varchar(255) NOT NULL DEFAULT 'gestionnaire',
                                 `icode` int(11) NOT NULL,
                                 `banish` varchar(5) NOT NULL DEFAULT 'false'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gestionnaires`
--

INSERT INTO `gestionnaires` (`id`, `firstName`, `name`, `center`, `mail`, `password`, `status`, `icode`, `banish`) VALUES
(1, 'mariecurie', 'curie', 'pariss', 'marie.curie@gmail.com', 'test', 'gestionnaire', 787, 'false');

-- --------------------------------------------------------

--
-- Table structure for table `icodes`
--

CREATE TABLE `icodes` (
                          `id` int(11) NOT NULL,
                          `icode` int(11) NOT NULL,
                          `status` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `icodes`
--

INSERT INTO `icodes` (`id`, `icode`, `status`) VALUES
(1, 123, 'client'),
(2, 787, 'gestionnaire'),
(3, 1234, 'administrateur'),
(4, 11, 'client'),
(5, 111, 'administrateur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrateurs`
--
ALTER TABLE `administrateurs`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `mail` (`mail`),
    ADD UNIQUE KEY `icode` (`icode`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `mail` (`mail`),
    ADD UNIQUE KEY `icode` (`icode`) USING BTREE;

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
    ADD PRIMARY KEY (`idFaq`);

--
-- Indexes for table `gestionnaires`
--
ALTER TABLE `gestionnaires`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `mail` (`mail`),
    ADD UNIQUE KEY `icode` (`icode`);

--
-- Indexes for table `icodes`
--
ALTER TABLE `icodes`
    ADD PRIMARY KEY (`id`),
    ADD UNIQUE KEY `icode` (`icode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrateurs`
--
ALTER TABLE `administrateurs`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
    MODIFY `idFaq` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gestionnaires`
--
ALTER TABLE `gestionnaires`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `icodes`
--
ALTER TABLE `icodes`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;