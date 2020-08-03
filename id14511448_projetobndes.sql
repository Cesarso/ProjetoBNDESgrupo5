-- DROP SCHEMA IF EXISTS ProjetoBNDES;

-- CREATE SCHEMA ProjetoBNDES DEFAULT CHARACTER SET utf8;

-- USE ProjetoBNDES ;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";
-- -------------------------
-- Table Loja
-- -------------------------
CREATE TABLE Loja (
  id_loja int NOT NULL  unique auto_increment,
  statusAtivo CHAR(1) NOT NULL DEFAULT 'S',
  nome_loja varchar(50) DEFAULT NULL,
  categoria_loja varchar(20),
  endereco_loja varchar(50) DEFAULT NULL,
 CONSTRAINT PK_id_loja PRIMARY KEY (id_loja)
)ENGINE = InnoDB;
-- --------------------------
-- Table Produto
-- ---------------------------
CREATE TABLE Produto (
  id_Produto int NOT NULL unique auto_increment ,
  id_Loja int NOT NULL,
  descricao VARCHAR(45) NOT NULL,
  preco decimal (10,2) not null,
  promocao boolean not null,
  Preço_Promocao decimal (10,2) null,
  categoria_produto varchar(20),
  constraint PK_PRODUTOS primary key (id_Produto),
  constraint id_Loja
  foreign key (id_Produto)
    references Loja(id_Loja)
  )
engine = InnoDB;
-- ----------------------------
-- Table Usuario
-- ----------------------------
CREATE TABLE Usuario (
  id INT NOT NULL auto_increment,
  nome VARCHAR(45) NOT NULL,
  cpf varchar (20) not null,
  telefone varchar(11) not null,
  email varchar(50) NOT NULL,
  senha CHAR(8) NOT NULL,
  nivel varchar(20) NOT NULL,
  statusAtivo CHAR(1) NOT NULL DEFAULT 'S',
   constraint primary key (id)
)
ENGINE = InnoDB;
INSERT INTO Usuario (id, nome, cpf, telefone,email, senha, nivel,statusAtivo) VALUES
(1, 'Administrador', '000.000.000-00', 2135343534, 'grupo5@gmail.com', '123', 'Admin',true);
COMMIT;

