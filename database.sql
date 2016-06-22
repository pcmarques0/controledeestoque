-- Database: `estoque`
CREATE DATABASE IF NOT EXISTS `estoque` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `estoque`;
--
-- Estrutura da tabela Cliente
--
CREATE TABLE IF NOT EXISTS `cliente` (
  `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` VARCHAR(80) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `telefone` VARCHAR(15) NOT NULL
) ENGINE=INNODB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
--
-- Insert dados clientes
--
INSERT INTO `cliente` (`id`, `nome`, `email`, `telefone`) VALUES
(1, 'Ricardo Oliveira Silva', 'ricardo@teste.com', '40028922'),
(2, 'Hiago Ferreira Lopes', 'hiagolopes@testei.com', '6181690541'),
(3, 'Maria Cristina Pereira', 'maria@empresarial.com', '159874394');

-- --------------------------------------------------------
--
-- Estrutura da tabela Pedido
--
CREATE TABLE IF NOT EXISTS `pedido` (
  `id_produto` INT(11) NOT NULL,
  `id_cliente` INT(11) NOT NULL
) ENGINE=INNODB DEFAULT CHARSET=latin1;
--
-- Insert da tabela Pedidos
--
INSERT INTO `pedido` (`id_produto`, `id_cliente`) VALUES
(1, 1);
-- --------------------------------------------------------
--
-- Estrutura da Tabela produtos
--
CREATE TABLE IF NOT EXISTS `produto` (
  `id` INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `nome` VARCHAR(80) NOT NULL,
  `descricao` VARCHAR(300) NOT NULL,
  `preco` VARCHAR(10) NOT NULL
) ENGINE=INNODB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
--
-- Insert da tabela produtos
--
INSERT INTO `produto` (`id`, `nome`, `descricao`, `preco`) VALUES
(1, 'Motorola G3', 'Preto', '899,99'),
(2, 'Sony Z3', 'Branco', '2499,99'),
(3, 'Iphone 6S', 'Branco', '4500,00');
