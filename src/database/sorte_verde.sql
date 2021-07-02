-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 02-Jul-2021 às 00:08
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sorte_verde`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `descarte`
--

DROP TABLE IF EXISTS `descarte`;
CREATE TABLE IF NOT EXISTS `descarte` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `descarte`
--

INSERT INTO `descarte` (`id`, `nome`) VALUES
(1, 'Residuo Eletronico'),
(2, 'Residuo Hospitalar'),
(3, 'Residuo Inflamavel'),
(4, 'Residuo Toxico'),
(5, 'Residuo De Construcao');

-- --------------------------------------------------------

--
-- Estrutura da tabela `markers`
--

DROP TABLE IF EXISTS `markers`;
CREATE TABLE IF NOT EXISTS `markers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `id_descarte` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `id_descarte`) VALUES
(8, 'Codeca', 'RSC-453', -29.128555, -51.183151, 3),
(9, 'AssociaÃ§Ã£o Recicladores', 'RS-230', -29.114515, -51.173042, 2),
(10, 'Mirasul Reciclagem de Materiais', 'Av. Dr. Renato Del Mese, 546', -29.140495, -51.175686, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `materia`
--

DROP TABLE IF EXISTS `materia`;
CREATE TABLE IF NOT EXISTS `materia` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `descricao` varchar(10000) NOT NULL,
  `imagem` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `materia`
--

INSERT INTO `materia` (`id`, `nome`, `descricao`, `imagem`) VALUES
(11, 'O que vocÃª faria para ajudar a conservar as florestas?', 'Nossa PolÃ­tica de Responsabilidade Social e nossos Compromissos de Sustentabilidade convergem para essa descoberta da ciÃªncia. O Programa Petrobras Socioambiental, que materializa nossas orientaÃ§Ãµes, refletidas tambÃ©m no Plano EstratÃ©gico 2021-25, prevÃª investimentos voluntÃ¡rios que contribuem para esse esforÃ§o de restauraÃ§Ã£o florestal.\r\n\r\nSÃ£o 12 iniciativas patrocinadas na linha de atuaÃ§Ã£o â€œClimaâ€, das quais fazem parte oito projetos, voltados para a conservaÃ§Ã£o e recuperaÃ§Ã£o de florestas e Ã¡reas naturais, e que iniciaram suas atividades em 2021. AlÃ©m da contribuiÃ§Ã£o em carbono, estas iniciativas viabilizam a geraÃ§Ã£o de diversos benefÃ­cios sociais e ambientais, como conservaÃ§Ã£o da biodiversidade, capacitaÃ§Ã£o de comunidades e geraÃ§Ã£o de renda pelo suporte Ã s cadeias produtivas locais, seguranÃ§a alimentar, promoÃ§Ã£o da equidade de gÃªnero, manutenÃ§Ã£o dos ecossistemas, desenvolvimento de inventÃ¡rios ou levantamentos florestais e constituiÃ§Ã£o de base de dados por localizaÃ§Ã£o geogrÃ¡fica.', '../uploads/mata.jpg'),
(14, 'CaptaÃ§Ã£o de Ãgua da Chuva', 'Diante da elevada demanda por Ã¡gua nÃ£o potÃ¡vel em um condomÃ­nio, na zona norte de Porto Alegre, analisou-se a viabilidade de instalaÃ§Ã£o de um sistema de captaÃ§Ã£o da Ã¡gua da chuva. Para isso, foi elaborado um anteprojeto e realizada uma anÃ¡lise de payback para o sistema. Buscou-se aproveitar as calhas e Ã¡reas passÃ­veis de captaÃ§Ã£o jÃ¡ existentes e definir os locais adequados para a implementaÃ§Ã£o das cisternas. Com isso, pode-se determinar diferentes cenÃ¡rios que mostraram-se adequados Ã s condiÃ§Ãµes pluviomÃ©tricas e estruturais presentes no local.', '../uploads/captaÃ§ao_de_agua_da_chuva.jpeg'),
(13, 'AnÃ¡lise da Qualidade e Quantidade de Ãgua', 'Projeto de estudo da qualidade e quantidade das Ã¡guas superficiais e subterrÃ¢neas, atravÃ©s de dados coletados em campo e analisados em laboratÃ³rio, no perÃ­odo de um ano. O estudo englobou:\r\n- Mapeamento de bacias;\r\n- BalanÃ§o hÃ­drico;\r\n- DiagnÃ³stico de qualidade de Ã¡gua baseado nos parÃ¢metros das resoluÃ§Ãµes CONAMA 355/2017 e 396/2008;\r\n- Modelo de risco hidrolÃ³gico em SIG, com elaboraÃ§Ã£o de mapa de vulnerabilidade natural dos aquÃ­feros Ã  contaminaÃ§Ã£o utilizando o mÃ©todo GOD;\r\n- ProposiÃ§Ã£o de mÃ©todo para monitoramento das Ã¡guas.\r\nO estudo deve ser empregado como subsÃ­dio ao Plano de Manejo do refÃºgio de vida silvestre.', '../uploads/qualidade_da_agua.jpeg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(250) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `email` varchar(250) NOT NULL,
  `tipo` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `senha`, `email`, `tipo`) VALUES
(3, 'Pedro Henrique Lucchese', 'senha', 'pedro130300@gmail.com', 2),
(2, 'teste2', '123', 'teste2@teste', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
