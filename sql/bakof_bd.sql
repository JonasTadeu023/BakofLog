-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Nov-2019 às 07:21
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bakof_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrier`
--

CREATE TABLE `carrier` (
  `car_name` varchar(300) NOT NULL,
  `car_cpf` char(11) NOT NULL,
  `car_phone` varchar(15) NOT NULL,
  `car_email` varchar(300) DEFAULT NULL,
  `car_pwd` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `delivery`
--

CREATE TABLE `delivery` (
  `del_id` int(3) NOT NULL,
  `del_exit` enum('Frederico Westphalen - RS','Joinville - SC','Campo Grande - MS','Montes Claros -MG','Tauá - CE','Rio Branco -AC') NOT NULL,
  `del_destiny` text NOT NULL,
  `del_donedate` text NOT NULL,
  `del_loadphoto` int(11) NOT NULL,
  `del_finishphoto` varchar(30) NOT NULL,
  `del_problems` text NOT NULL,
  `car_cpf` char(11) NOT NULL,
  `order_id` int(3) NOT NULL,
  `del_truck` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `order`
--

CREATE TABLE `order` (
  `order_id` int(3) NOT NULL,
  `user_cpf` char(11) NOT NULL,
  `order_status` enum('done','undone') NOT NULL,
  `order_deadline` date NOT NULL,
  `order_products` text NOT NULL,
  `order_client` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `user_name` varchar(300) NOT NULL,
  `user_cpf` char(11) NOT NULL,
  `user_email` varchar(300) DEFAULT NULL,
  `user_phone` varchar(15) NOT NULL,
  `user_photo` text NOT NULL,
  `user_adm` enum('0','1') NOT NULL DEFAULT '0',
  `user_pwd` char(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`user_name`, `user_cpf`, `user_email`, `user_phone`, `user_photo`, `user_adm`, `user_pwd`) VALUES
('JoÃ£o', '04722427097', 'jddiedrich@gmail.com', '55984234885', '', '0', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrier`
--
ALTER TABLE `carrier`
  ADD PRIMARY KEY (`car_cpf`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`del_id`),
  ADD KEY `car_cpf` (`car_cpf`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `user_cpf` (`user_cpf`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_cpf`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `del_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `delivery_ibfk_1` FOREIGN KEY (`car_cpf`) REFERENCES `carrier` (`car_cpf`),
  ADD CONSTRAINT `delivery_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`);

--
-- Limitadores para a tabela `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_cpf`) REFERENCES `user` (`user_cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
