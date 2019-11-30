-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Nov-2019 às 12:16
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

--
-- Extraindo dados da tabela `carrier`
--

INSERT INTO `carrier` (`car_name`, `car_cpf`, `car_phone`, `car_email`, `car_pwd`) VALUES
('hhh', '15015015015', '123', '5@gmail.com', '202cb962ac59075b964b07152d234b70'),
('Pedro', '23423423423', '12312323', 'p@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `delivery`
--

CREATE TABLE `delivery` (
  `del_id` int(3) NOT NULL,
  `del_exit` varchar(20) DEFAULT NULL,
  `del_destiny` text,
  `del_donedate` text,
  `del_loadphoto` text,
  `del_entryphoto` varchar(300) DEFAULT NULL,
  `del_finishphoto` varchar(30) DEFAULT NULL,
  `del_problems` text,
  `car_cpf` char(11) DEFAULT NULL,
  `order_id` int(3) DEFAULT NULL,
  `del_truck` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `delivery`
--

INSERT INTO `delivery` (`del_id`, `del_exit`, `del_destiny`, `del_donedate`, `del_loadphoto`, `del_entryphoto`, `del_finishphoto`, `del_problems`, `car_cpf`, `order_id`, `del_truck`) VALUES
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, NULL);

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

--
-- Extraindo dados da tabela `order`
--

INSERT INTO `order` (`order_id`, `user_cpf`, `order_status`, `order_deadline`, `order_products`, `order_client`) VALUES
(2, '12312312312', 'undone', '2019-11-30', 'Algum produto aÃ­', 'Loja do ZÃ©'),
(3, '12312312312', 'undone', '2019-11-11', 'efsdfsd', 'sdfsdf');

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
('Fernando de Vinhas', '04199078070', 'fernando@gmail.com', '5599156020', '', '0', '202cb962ac59075b964b07152d234b70'),
('JoÃ£o', '12312312312', 'jd@gmail.com', '123123123', 'foto.jpeg', '0', '202cb962ac59075b964b07152d234b70');

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
  MODIFY `del_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
