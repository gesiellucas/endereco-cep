-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15-Jan-2021 às 19:59
-- Versão do servidor: 8.0.21
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `viacep`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE `dados` (
  `ID_dados` int NOT NULL,
  `cep` int NOT NULL,
  `rua` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bairro` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cidade` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `estado` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `IBGE` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`ID_dados`, `cep`, `rua`, `bairro`, `cidade`, `estado`, `IBGE`) VALUES
(1, 30670120, 'Rua A', 'Vila Pinho Vale do J', 'Belo Horizonte', 'MG', 3106200),
(2, 30670150, 'Rua Cabo Wellington ', 'Vila Pinho Vale do J', 'Belo Horizonte', 'MG', 3106200),
(3, 30670190, 'Rua Ayrton Senna da ', 'Vila Pinho Vale do J', 'Belo Horizonte', 'MG', 3106200),
(4, 30670180, 'Rua Cabo Wellington ', 'Vila Pinho Vale do J', 'Belo Horizonte', 'MG', 3106200),
(5, 30670200, 'Rua Rodolfo Fritsch', 'Vila Pinho Vale do J', 'Belo Horizonte', 'MG', 3106200),
(6, 30670140, 'Rua Soldado Júlio Va', 'Vila Pinho Vale do J', 'Belo Horizonte', 'MG', 3106200),
(7, 30670150, 'Rua Cabo Wellington dos Santos', 'Vila Pinho Vale do Jatobá (Barreiro)', 'Belo Horizonte', 'MG', 3106200),
(8, 30670120, 'Rua A', 'Vila Pinho Vale do Jatobá (Barreiro)', 'Belo Horizonte', 'MG', 3106200),
(9, 30670120, 'Rua A', 'Vila Pinho Vale do Jatobá (Barreiro)', 'Belo Horizonte', 'MG', 3106200),
(10, 30668840, 'Rua Manoel Lisboa de Moura', 'Distrito Industrial do Jatobá (Eliana Silva)', 'Belo Horizonte', 'MG', 3106200),
(11, 30670110, 'Rua Paulo Veigas Salles', 'Vila Pinho Vale do Jatobá (Barreiro)', 'Belo Horizonte', 'MG', 3106200),
(12, 30670170, 'Rua Soldado Weverson de Almeida', 'Vila Pinho Vale do Jatobá (Barreiro)', 'Belo Horizonte', 'MG', 3106200);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dados`
--
ALTER TABLE `dados`
  ADD PRIMARY KEY (`ID_dados`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados`
--
ALTER TABLE `dados`
  MODIFY `ID_dados` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
