-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 16-Out-2021 às 16:14
-- Versão do servidor: 10.3.31-MariaDB
-- versão do PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jcinfbr_agenda`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adesao_curso`
--

CREATE TABLE `adesao_curso` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `id_aluno` int(11) NOT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `curso` varchar(255) DEFAULT NULL,
  `valor` decimal(11,2) DEFAULT NULL,
  `pagamento` varchar(255) NOT NULL,
  `parcelas` varchar(20) NOT NULL,
  `val_parcelas` decimal(11,2) NOT NULL,
  `juros` varchar(20) NOT NULL,
  `periodo` varchar(255) DEFAULT NULL,
  `profissional` varchar(255) DEFAULT NULL,
  `id_prof` int(11) DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` int(11) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `meio_pg` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `id_cliente` int(11) NOT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `servico` varchar(255) DEFAULT NULL,
  `valor` decimal(11,2) DEFAULT NULL,
  `tempo` time DEFAULT NULL,
  `pontos` int(11) DEFAULT NULL,
  `profissional` varchar(255) DEFAULT NULL,
  `id_prof` int(11) DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` int(11) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `meio_pg` varchar(255) DEFAULT NULL,
  `parcelas` int(11) DEFAULT NULL,
  `val_parcelas` decimal(11,2) DEFAULT NULL,
  `descricao` longtext DEFAULT NULL,
  `acrescimo` decimal(11,2) DEFAULT NULL,
  `desconto` decimal(11,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda_verifica`
--

CREATE TABLE `agenda_verifica` (
  `id` int(11) NOT NULL,
  `email_serv` varchar(255) NOT NULL,
  `email_rec` varchar(255) NOT NULL,
  `tempo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `almoco`
--

CREATE TABLE `almoco` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `horario` time DEFAULT NULL,
  `tempo` int(11) DEFAULT NULL,
  `id_pro` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `cpf` bigint(20) NOT NULL,
  `rg` int(11) NOT NULL,
  `sexo` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `celular` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `uf` varchar(255) NOT NULL,
  `senha` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  `hora` varchar(30) NOT NULL,
  `valor` decimal(11,2) NOT NULL,
  `data` varchar(60) DEFAULT NULL,
  `clientes` int(11) DEFAULT NULL,
  `ganhos` decimal(11,2) DEFAULT NULL,
  `acrescimo` decimal(11,2) DEFAULT NULL,
  `desconto` decimal(11,2) DEFAULT NULL,
  `curso` decimal(11,2) DEFAULT NULL,
  `prom_serv` decimal(11,2) DEFAULT NULL,
  `gastos` decimal(11,2) DEFAULT NULL,
  `compras` decimal(11,2) DEFAULT NULL,
  `produtos` decimal(11,2) DEFAULT NULL,
  `lucro` decimal(11,2) DEFAULT NULL,
  `responsavel` varchar(100) NOT NULL,
  `status` varchar(60) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `municipio` varchar(255) DEFAULT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` int(11) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `contrato`
--

CREATE TABLE `contrato` (
  `id` int(11) NOT NULL,
  `contrato` longtext NOT NULL,
  `curso` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `periodo` varchar(255) NOT NULL,
  `valor` decimal(11,2) NOT NULL,
  `porcentagem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cpf_cnpj` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `municipio` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `empresa`
--

INSERT INTO `empresa` (`id`, `nome`, `cpf_cnpj`, `endereco`, `bairro`, `municipio`, `estado`, `telefone`) VALUES
(2, 'Jacy Cabeleireiro', '36.896.614/0001-40', 'Rio Grande do Sul, 2151', 'Centro', 'Cascavel', 'Pr', '(45)3225-1670 | 99988-2100');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estoque`
--

CREATE TABLE `estoque` (
  `id` int(11) NOT NULL,
  `produto` varchar(255) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `valor_uni` decimal(11,2) DEFAULT NULL,
  `valor_compra` decimal(11,2) DEFAULT NULL,
  `fornecedor` varchar(255) DEFAULT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` int(11) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `expira_pontos`
--

CREATE TABLE `expira_pontos` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  `d` int(11) NOT NULL,
  `m` int(11) NOT NULL,
  `a` int(11) NOT NULL,
  `pontos` int(11) NOT NULL,
  `servico` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fidelidade`
--

CREATE TABLE `fidelidade` (
  `id` int(11) NOT NULL,
  `servico` varchar(255) NOT NULL,
  `pontos` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cpf_cnpj` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `site` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `municipio` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcao`
--

CREATE TABLE `funcao` (
  `id` int(11) NOT NULL,
  `funcao` varchar(255) DEFAULT NULL,
  `salario` decimal(11,2) DEFAULT NULL,
  `porcentagem` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `municipio` varchar(255) DEFAULT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` int(11) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL,
  `funcao` varchar(255) DEFAULT NULL,
  `salario` decimal(11,2) DEFAULT NULL,
  `porcentagem` int(11) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `email`, `telefone`, `celular`, `endereco`, `bairro`, `municipio`, `dia`, `mes`, `ano`, `funcao`, `salario`, `porcentagem`, `login`, `senha`) VALUES
(7, 'Jacy: Cabeleireiro - Barbeiro', 'jacycabeleireiro@gmail.com', '(45)3225-1670 ', '4  99988-2100', 'Rio Grande do Sul, 2151', 'Centro', 'Cascavel', 14, 2, 1977, 'Barbeiro / Cabeleireiro', 0.00, 100, 'JACY', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gastos`
--

CREATE TABLE `gastos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `valor` decimal(11,2) DEFAULT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` int(11) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_expira_pontos`
--

CREATE TABLE `historico_expira_pontos` (
  `id` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `pontos` int(11) NOT NULL,
  `data` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `historico_print`
--

CREATE TABLE `historico_print` (
  `id` int(11) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `pontos` int(11) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `datahora` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `master`
--

CREATE TABLE `master` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `municipio` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `login` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `nivel` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `master`
--

INSERT INTO `master` (`id`, `nome`, `email`, `telefone`, `celular`, `endereco`, `bairro`, `municipio`, `estado`, `login`, `senha`, `nivel`) VALUES
(1, 'Jacy Cordeiro', 'jacycordeiro1@gmail.com', '4532251670', '45999882100', 'Rio Grande do Sul, 2151', 'CENTRO', 'Cascavel', 'Pr', 'JACY', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mercado_pago`
--

CREATE TABLE `mercado_pago` (
  `id` int(11) NOT NULL,
  `cliente_id` varchar(255) NOT NULL,
  `secreto` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagseguro`
--

CREATE TABLE `pagseguro` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `app_id` varchar(255) NOT NULL,
  `app_key` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `prazo_pontos`
--

CREATE TABLE `prazo_pontos` (
  `id` int(11) NOT NULL,
  `prazo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `prazo_pontos`
--

INSERT INTO `prazo_pontos` (`id`, `prazo`) VALUES
(2, 365);

-- --------------------------------------------------------

--
-- Estrutura da tabela `premio`
--

CREATE TABLE `premio` (
  `id` int(11) NOT NULL,
  `premio` varchar(255) NOT NULL,
  `pontos` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `custo` decimal(11,2) DEFAULT NULL,
  `descricao` text DEFAULT NULL,
  `valor` decimal(11,2) NOT NULL,
  `porcentagem` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_venda`
--

CREATE TABLE `produto_venda` (
  `id` int(11) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `vendedor` varchar(255) NOT NULL,
  `produto` varchar(255) NOT NULL,
  `valor` decimal(11,2) NOT NULL,
  `desconto` decimal(11,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `pagamento` varchar(20) NOT NULL,
  `parcelas` varchar(20) DEFAULT NULL,
  `val_parcelas` decimal(11,2) DEFAULT NULL,
  `juros` varchar(20) DEFAULT NULL,
  `pgforma` varchar(20) DEFAULT NULL,
  `cardf` varchar(20) DEFAULT NULL,
  `obs` text DEFAULT NULL,
  `dia` int(11) DEFAULT NULL,
  `mes` int(11) DEFAULT NULL,
  `ano` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `promissioria`
--

CREATE TABLE `promissioria` (
  `id` int(11) NOT NULL,
  `codigo` varchar(20) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `produto` varchar(255) NOT NULL,
  `valor` decimal(11,2) NOT NULL,
  `parcela` int(11) NOT NULL,
  `vencimento` varchar(20) NOT NULL,
  `pagamento` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `promissioria_parcelas`
--

CREATE TABLE `promissioria_parcelas` (
  `id` int(11) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `servico` varchar(255) NOT NULL,
  `valor` decimal(11,2) NOT NULL,
  `parcela` int(11) NOT NULL,
  `vencimento` varchar(20) NOT NULL,
  `pagamento` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `promissoria`
--

CREATE TABLE `promissoria` (
  `id` int(11) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_prof` int(11) DEFAULT NULL,
  `servico` varchar(255) NOT NULL,
  `valor` decimal(11,2) NOT NULL,
  `parcela` int(11) NOT NULL,
  `data_ini` varchar(20) NOT NULL,
  `vencimento` varchar(20) NOT NULL,
  `pagamento` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `promissoria_parcelas`
--

CREATE TABLE `promissoria_parcelas` (
  `id` int(11) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `cliente` varchar(255) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_prof` int(11) DEFAULT NULL,
  `servico` varchar(255) NOT NULL,
  `valor` decimal(11,2) NOT NULL,
  `parcela` int(11) NOT NULL,
  `data_ini` varchar(20) NOT NULL,
  `vencimento` varchar(20) NOT NULL,
  `pagamento` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `resgate`
--

CREATE TABLE `resgate` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `id_c` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  `premio` varchar(255) NOT NULL,
  `pontos` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `valor` decimal(11,2) DEFAULT NULL,
  `tempo` time DEFAULT NULL,
  `funcao` varchar(255) DEFAULT NULL,
  `pontos` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sobra`
--

CREATE TABLE `sobra` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `pontos` int(11) NOT NULL,
  `dia` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adesao_curso`
--
ALTER TABLE `adesao_curso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `agenda_verifica`
--
ALTER TABLE `agenda_verifica`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `almoco`
--
ALTER TABLE `almoco`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contrato`
--
ALTER TABLE `contrato`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `estoque`
--
ALTER TABLE `estoque`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `expira_pontos`
--
ALTER TABLE `expira_pontos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fidelidade`
--
ALTER TABLE `fidelidade`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcao`
--
ALTER TABLE `funcao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `historico_expira_pontos`
--
ALTER TABLE `historico_expira_pontos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `historico_print`
--
ALTER TABLE `historico_print`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `mercado_pago`
--
ALTER TABLE `mercado_pago`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pagseguro`
--
ALTER TABLE `pagseguro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `prazo_pontos`
--
ALTER TABLE `prazo_pontos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `premio`
--
ALTER TABLE `premio`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produto_venda`
--
ALTER TABLE `produto_venda`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `promissioria`
--
ALTER TABLE `promissioria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `promissioria_parcelas`
--
ALTER TABLE `promissioria_parcelas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `promissoria`
--
ALTER TABLE `promissoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `promissoria_parcelas`
--
ALTER TABLE `promissoria_parcelas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `resgate`
--
ALTER TABLE `resgate`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `sobra`
--
ALTER TABLE `sobra`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adesao_curso`
--
ALTER TABLE `adesao_curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2652;

--
-- AUTO_INCREMENT de tabela `agenda_verifica`
--
ALTER TABLE `agenda_verifica`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `almoco`
--
ALTER TABLE `almoco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=445;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=413;

--
-- AUTO_INCREMENT de tabela `contrato`
--
ALTER TABLE `contrato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `curso`
--
ALTER TABLE `curso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `estoque`
--
ALTER TABLE `estoque`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `expira_pontos`
--
ALTER TABLE `expira_pontos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=361;

--
-- AUTO_INCREMENT de tabela `fidelidade`
--
ALTER TABLE `fidelidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `funcao`
--
ALTER TABLE `funcao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `gastos`
--
ALTER TABLE `gastos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `historico_expira_pontos`
--
ALTER TABLE `historico_expira_pontos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT de tabela `historico_print`
--
ALTER TABLE `historico_print`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `master`
--
ALTER TABLE `master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `mercado_pago`
--
ALTER TABLE `mercado_pago`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `pagseguro`
--
ALTER TABLE `pagseguro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `prazo_pontos`
--
ALTER TABLE `prazo_pontos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `premio`
--
ALTER TABLE `premio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de tabela `produto_venda`
--
ALTER TABLE `produto_venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `promissioria`
--
ALTER TABLE `promissioria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `promissioria_parcelas`
--
ALTER TABLE `promissioria_parcelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `promissoria`
--
ALTER TABLE `promissoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=126;

--
-- AUTO_INCREMENT de tabela `promissoria_parcelas`
--
ALTER TABLE `promissoria_parcelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `resgate`
--
ALTER TABLE `resgate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=157;

--
-- AUTO_INCREMENT de tabela `sobra`
--
ALTER TABLE `sobra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
