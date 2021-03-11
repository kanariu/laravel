-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Mar-2021 às 20:32
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `skulltech`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tech_categories`
--

CREATE TABLE `tech_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `active` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tech_categories`
--

INSERT INTO `tech_categories` (`id`, `name`, `type`, `active`) VALUES
(1, 'NOX', 'case', 'S'),
(2, 'AEROCOOL', 'case', 'S'),
(3, 'FORTREK', 'case', 'S'),
(4, 'SHARKOON', 'case', 'S'),
(5, 'HUSKY', 'case', 'S'),
(6, 'CORSAIR', 'case', 'S'),
(7, 'REDRAGON', 'case', 'S'),
(8, 'BLUECASE', 'case', 'S'),
(9, 'NZXT', 'case', 'S'),
(10, 'K-MEX', 'case', 'S'),
(11, 'COOLER MASTER', 'case', 'S'),
(12, 'GIGABYTE', 'motherboard', 'S'),
(13, 'ASUS', 'motherboard', 'S'),
(14, 'AORUS', 'motherboard', 'S'),
(15, 'ASROCK', 'motherboard', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tech_produtos`
--

CREATE TABLE `tech_produtos` (
  `id` int(11) NOT NULL,
  `name_pt` varchar(80) NOT NULL,
  `name_en` varchar(80) NOT NULL,
  `img_link` varchar(500) NOT NULL,
  `description` longtext NOT NULL,
  `price` float NOT NULL,
  `type` varchar(30) NOT NULL,
  `promotion_price` float NOT NULL,
  `expire_promotion` datetime DEFAULT NULL,
  `promotion` varchar(1) NOT NULL DEFAULT 'N',
  `highlight` varchar(1) NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tech_produtos`
--

INSERT INTO `tech_produtos` (`id`, `name_pt`, `name_en`, `img_link`, `description`, `price`, `type`, `promotion_price`, `expire_promotion`, `promotion`, `highlight`) VALUES
(1, 'PLACA MÃE AORUS B360M GAMING 3', 'MOTHERBOARD AORUS B360M GAMING 3', 'motherboard1', '• Supports 9th and 8th Gen Intel® Core™ Processors \\n• Dual Channel Non-ECC Unbuffered DDR4 \\n• New Hybrid Digital PWM Design \\n• Intel® CNVi 802.11ac Wave2 2T2R WIFI Upgradable \\n• High Quality Audio Capacitors and Audio Noise Guard with LED Trace Path Lighting \\n• Dual Ultra-Fast M.2 with PCIe Gen3 X4/X2 & SATA interface \\n• RGB FUSION 2.0 with Digital LED Light Show design \\n• Intel® Native USB 3.1 Gen2 USB Type-A \\n• Intel® GbE LAN with cFosSpeed Internet Accelerator Software \\n• CEC 2019 Ready, Save the Power as Easy as One Click \\n• Smart Fan 5 features Multiple Temperature Sensors and Hybrid Fan Headers with FAN STOP \\n• Anti-Sulfur Resistors Design \\n• Ultra DurableTM 25KV ESD and 15KV Surge LAN Protection \\n• Intel® Optane™ Memory Ready', 899, 'motherboard', 729, '2021-03-16 00:00:00', 'S', 'N'),
(2, 'PROCESSADOR INTEL I9 9900K 9ª GERAÇÃO', 'PROCESSOR INTEL I9 9900K 9ª GEN', 'processor1', '', 3099.9, 'processor', 2799, '2021-03-16 00:00:00', 'S', 'N'),
(3, 'XPG SPECTRIX D60G RGB (2x8GB) 3200MHZ', 'XPG SPECTRIX D60G RGB (2x8GB) 3200MHZ', 'memory1', '', 899, 'memory', 749, '2021-03-16 00:00:00', 'S', 'N'),
(4, 'EVGA NVIDIA GEFORCE RTX 3080', 'EVGA NVIDIA GEFORCE RTX 3080', 'gpu1', '', 12499.9, 'gpu', 10499.9, '2021-03-09 00:00:00', 'S', 'N'),
(5, 'HEADSET GAMER RAZER BLACK SHARK V2 PRO', 'HEADSET GAMER RAZER BLACK SHARK V2 PRO', 'headset1', '• Drivers de 50 mm Razer™ TriForce de Titânio para o máximo desempenho de áudio \\n• Microfone cardioide Razer™ HyperClear com placa de som USB para uma melhor captação de voz e controles avançados do microfone \\n• Cancelamento passivo de ruídos avançado para uma concentração ininterrupta \\n• Almofadas auriculares em espuma viscoelástica FlowKnit para um conforto premium \\n• THX Spatial Audio para uma precisão espacial extrema, oferecendo uma maior imersão e vantagem competitiva', 799.9, 'headset', 0, NULL, 'N', 'S'),
(6, 'MOUSE DEATHADDER V2 CHROMA', 'MOUSE DEATHADDER V2 CHROMA OPTIC SWITCH', 'mouse1', '• Ergonomia de ponta\r\n\\n• Switches ópticos de mouse Razer\r\n\\n• Sensor óptico Razer Focus+\r\n\\n• Cabo Razer Speedflex\r\n\\n• Memória integrada avançada', 599, 'mouse', 0, NULL, 'N', 'S'),
(7, 'GABINETE NOX PAX - ATX USB3.0', 'NOX PAX CASE - ATX USB3.0', 'case1', '', 299, 'case', 199, '2021-03-25 15:56:10', 'S', 'N'),
(8, 'GABINETE HUSKY FROST - MID TOWER', 'HUSKY FROST CASE - MID TOWER', 'case2', '', 659, 'case', 549, '2021-03-23 16:18:03', 'S', 'N'),
(9, 'TECLADO RAZER ORNATA V2 CHROMA MECHA-MEMBRANE', 'KEYBOARD RAZER ORNATA V2 CHROMA MECHA-MEMBRANE', 'keyboard1', '', 659, 'keyboard', 0, NULL, 'N', 'S');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tech_states`
--

CREATE TABLE `tech_states` (
  `id` int(11) NOT NULL,
  `state` varchar(2) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tech_states`
--

INSERT INTO `tech_states` (`id`, `state`, `name`) VALUES
(1, 'AC', 'Acre'),
(2, 'AL', 'Alagoas'),
(3, 'AP', 'Amapá'),
(4, 'AM', 'Amazonas'),
(5, 'BA', 'Bahia'),
(6, 'CE', 'Ceará'),
(7, 'DF', 'Distrito Federal'),
(8, 'ES', 'Espirito Santo'),
(9, 'GO', 'Goiás'),
(10, 'MA', 'Maranhão'),
(11, 'MT', 'Mato Grosso'),
(12, 'MS', 'Mato Grosso do Sul'),
(13, 'MG', 'Minas Gerais'),
(14, 'PA', 'Pará'),
(15, 'PB', 'Paraíba'),
(16, 'PR', 'Paraná'),
(17, 'PE', 'Pernambuco'),
(18, 'PI', 'Piauí'),
(19, 'RJ', 'Rio de Janeiro'),
(20, 'RN', 'Rio Grande do Norte'),
(21, 'RS', 'Rio Grande do Sul'),
(22, 'RO', 'Rondônia'),
(23, 'RR', 'Roraima'),
(24, 'SC', 'Santa Catarina'),
(25, 'SP', 'São Paulo'),
(26, 'SE', 'Sergipe'),
(27, 'TO', 'Tocantins');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tech_users`
--

CREATE TABLE `tech_users` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `birthdate` date NOT NULL,
  `email` varchar(60) NOT NULL,
  `ddd` int(2) NOT NULL,
  `phone` int(9) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `address` varchar(150) NOT NULL,
  `city` varchar(60) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `state` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tech_users`
--

INSERT INTO `tech_users` (`id`, `name`, `birthdate`, `email`, `ddd`, `phone`, `cpf`, `username`, `password`, `address`, `city`, `zipcode`, `state`) VALUES
(1, 'ABIMAEL SALES REIS', '1999-11-25', 'abimael.s.reis@gmail.com', 11, 949686852, 48034904813, 'absales', '$2y$10$MwSMFnbFLj4UrI0/RwuYu.Psz9tH6/.wBpJ43hf3ICApxq6Id.frq', 'Avenida Guaruja, 30 - Jardim Guaruja', 'SAO PAULO', '05877230', '25');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tech_categories`
--
ALTER TABLE `tech_categories`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tech_produtos`
--
ALTER TABLE `tech_produtos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `img_link` (`img_link`);

--
-- Índices para tabela `tech_states`
--
ALTER TABLE `tech_states`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `tech_users`
--
ALTER TABLE `tech_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tech_categories`
--
ALTER TABLE `tech_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `tech_produtos`
--
ALTER TABLE `tech_produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tech_states`
--
ALTER TABLE `tech_states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `tech_users`
--
ALTER TABLE `tech_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
