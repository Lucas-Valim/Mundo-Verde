-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 21/11/2021 às 17:08
-- Versão do servidor: 8.0.27-0ubuntu0.20.04.1
-- Versão do PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `mundo_verde`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `descarte`
--

CREATE TABLE `descarte` (
  `id` int NOT NULL,
  `nome` varchar(60) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `descarte`
--

INSERT INTO `descarte` (`id`, `nome`) VALUES
(2, 'Residuo Hospitalar');

-- --------------------------------------------------------

--
-- Estrutura para tabela `markers`
--

CREATE TABLE `markers` (
  `id` int NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` float(10,6) NOT NULL,
  `lng` float(10,6) NOT NULL,
  `id_descarte` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `id_descarte`) VALUES
(8, 'Codeca', 'RSC-453', -29.128555, -51.183151, 2),
(9, 'AssociaÃ§Ã£o Recicladores', 'RS-230', -29.114515, -51.173042, 2),
(10, 'Mirasul Reciclagem de Materiais', 'Av. Dr. Renato Del Mese, 546', -29.140495, -51.175686, 2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `materia`
--

CREATE TABLE `materia` (
  `id` bigint UNSIGNED NOT NULL,
  `nome` varchar(250) NOT NULL,
  `descricao` varchar(10000) NOT NULL,
  `imagem` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `materia`
--

INSERT INTO `materia` (`id`, `nome`, `descricao`, `imagem`) VALUES
(21, 'Pandemia de covid-19 gerou 8 milhões de toneladas de descartáveis', 'O aumento do uso de plásticos e descartáveis, como máscaras e luvas, durante a pandemia é uma ameaça a rios e oceanos. Pela primeira vez, um estudo projeta a magnitude e os possíveis impactos desse problema ambiental.\r\n\r\nA estimativa de cientistas da Universidade da Califórnia em San Diego, nos Estados Unidos, e da Universidade de Nanjing, na China, é de que, em decorrência da crise sanitária, mais de 8 milhões de toneladas de resíduos plásticos foram gerados globalmente, com mais de 25 mil toneladas entrando no oceano global.\r\n\r\nDentro de três a quatro anos, uma porção significativa desses detritos plásticos oceânicos deverá chegar às praias ou ao fundo do mar, estima a equipe de investigadores. Uma porção menor irá para o oceano aberto, eventualmente para ficar presa nos centros das bacias oceânicas ou giros subtropicais, que podem se tornar manchas de lixo e uma zona de acumulação de plástico no Oceano Ártico.\r\n\r\nForam avaliados dados do início da pandemia até agosto de 2021, e os pesquisadores descobriram que a maior parte do lixo plástico global que entra no oceano vem da Ásia, com os resíduos hospitalares representando a maior parte do descarte terrestre.\r\n\r\n\\\"Quando começamos a fazer as contas, ficamos surpresos ao descobrir que a quantidade de resíduos médicos era substancialmente maior do que a quantidade de resíduos de indivíduos e muitos deles vinham de países asiáticos, embora não seja onde ocorreu a maior parte dos casos de covid\\\", conta, em comunicado, Amina Schartup, coautora do artigo, publicado na revista Proceedings of the National Academy of Sciences.\r\n\r\nPara combater o influxo de resíduos plásticos nos oceanos, os autores defendem uma melhor gestão dos resíduos médicos principalmente nos países em desenvolvimento, além de uma conscientização pública global sobre o impacto ambiental dos equipamentos de proteção individual (EPI) e de outros plásticos.\r\n\r\nAvanços em tecnologias para coleta, classificação, tratamento e reciclagem de resíduos plásticos, e desenvolvimento de materiais mais ecológicos também são defendidos pela equipe. \\\"Na verdade, o plástico relacionado à covid-19 é apenas uma parte de um problema maior que enfrentamos no século 21: resíduos de plástico. Resolver isso requer muita renovação técnica, transição da economia e mudança de estilo de vida\\\", afirma Yanxu Zhang, também autor do estudo.', '../uploads/teste4.jpg'),
(19, 'Vacina CoronaVac', 'O objetivo da vacina CoronaVac contra COVID-19 é proteger o público da doença.', '../uploads/testeImg.jpg'),
(20, 'Veja quem pode se vacinar neste domingo (21/11) em SP, PE, RS e CE', 'O Brasil alcançou a marca de 70,7% da população com 12 anos ou mais no país totalmente imunizada contra a Covid-19. Ou seja, que já recebeu duas doses ou a vacina de dose única. O número corresponde a 128.743.052 dos quase 182 milhões de brasileiros nesta faixa etária com o ciclo vacinal completo.\r\n\r\nDesde o início da campanha, somando a primeira, a segunda, a de reforço e a dose única, são 300.405.955 doses aplicadas.\r\n\r\nNo total, já foram perdidas 612.587 vidas para a doença e computados 22.012.150 casos de contaminação desde o início da pandemia.\r\n\r\nNeste domingo (21/11), o ritmo de vacinação prossegue por algumas capitais do país, que tem à disposição quatro vacinas: Sinovac/Coronavac, Oxford/AstraZeneca e Pfizer/BioNTech, que precisam da aplicação de duas doses. Já a Janssen prevê apenas uma dose para completa imunização.\r\n\r\nVeja como será a vacinação neste domingo em algumas capitais:\r\n\r\nSão Paulo\r\n\r\nEm São Paulo, capital, o esquema de vacinação é o seguinte:', '../uploads/testeImg.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` bigint UNSIGNED NOT NULL,
  `nome` varchar(250) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `email` varchar(250) NOT NULL,
  `tipo` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `senha`, `email`, `tipo`) VALUES
(3, 'Pedro Henrique Lucchese', 'senha', 'pedro130300@gmail.com', 2),
(2, 'teste2', '123', 'teste2@teste', 1);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `descarte`
--
ALTER TABLE `descarte`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `materia`
--
ALTER TABLE `materia`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `descarte`
--
ALTER TABLE `descarte`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `materia`
--
ALTER TABLE `materia`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
