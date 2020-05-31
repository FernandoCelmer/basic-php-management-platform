-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 31-Maio-2020 às 01:48
-- Versão do servidor: 10.4.12-MariaDB
-- versão do PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `u141500443_OFFY_SYSTEM`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `BASE_CONFIG`
--

CREATE TABLE `BASE_CONFIG` (
  `COD_CONFIG` int(11) NOT NULL,
  `TIP_STATUS` tinyint(1) NOT NULL,
  `NUM_VERSION` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DTA_UPDATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `BASE_CONFIG`
--

INSERT INTO `BASE_CONFIG` (`COD_CONFIG`, `TIP_STATUS`, `NUM_VERSION`, `DTA_UPDATE`) VALUES
(0, 1, '1.0.0.1', '2020-05-31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `BASE_CUSTOMER`
--

CREATE TABLE `BASE_CUSTOMER` (
  `BASE_CUSTOMER` int(11) NOT NULL,
  `DES_USER` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DES_EMAIL` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BASE_PASSWORD` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TIP_ADMIN` tinyint(1) DEFAULT NULL,
  `TIP_STATUS` tinyint(1) DEFAULT NULL,
  `IMG_PROFILE` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `BASE_CUSTOMER`
--

INSERT INTO `BASE_CUSTOMER` (`BASE_CUSTOMER`, `DES_USER`, `DES_EMAIL`, `BASE_PASSWORD`, `TIP_ADMIN`, `TIP_STATUS`, `IMG_PROFILE`) VALUES
(1, 'IndexOffy', 'dev@indexoffy.com', '21232f297a57a5a743894a0e4a801fc3', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `BASE_LOG`
--

CREATE TABLE `BASE_LOG` (
  `ID_BASE_LOG` int(11) NOT NULL,
  `BASE_CUSTOMER` int(11) NOT NULL,
  `DES_MODEL` varchar(45) COLLATE latin1_bin NOT NULL,
  `DES_ACTION` varchar(45) COLLATE latin1_bin NOT NULL,
  `DES_LOG` longtext COLLATE latin1_bin NOT NULL,
  `DATE_LOG` date NOT NULL,
  `TIME_LOG` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `BASE_CONFIG`
--
ALTER TABLE `BASE_CONFIG`
  ADD PRIMARY KEY (`COD_CONFIG`);

--
-- Índices para tabela `BASE_CUSTOMER`
--
ALTER TABLE `BASE_CUSTOMER`
  ADD PRIMARY KEY (`BASE_CUSTOMER`);

--
-- Índices para tabela `BASE_LOG`
--
ALTER TABLE `BASE_LOG`
  ADD PRIMARY KEY (`ID_BASE_LOG`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `BASE_CUSTOMER`
--
ALTER TABLE `BASE_CUSTOMER`
  MODIFY `BASE_CUSTOMER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `BASE_LOG`
--
ALTER TABLE `BASE_LOG`
  MODIFY `ID_BASE_LOG` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
