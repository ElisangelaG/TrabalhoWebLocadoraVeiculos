create table Locacao

(IdLocacao SMALLINT PRIMARY KEY AUTO_INCREMENT,
 Nome VACHAR(200) NOT NULL,
 Cpf  VACHAR(15) NOT NULL,
 Email VARCHAR (50) NOT NULL,
 Telefone INT NOT NULL,
 DataLocacao DATE NOT NULL,
 DataDevolucao DATE NOT NULL,
 Email VARCHAR (50) NOT NULL)
 AUTO_INCREMENT= 1;

INSERT INTO usuario (Nome,Cpf,DataNascimento,Email,Telefone,Usuario,Senha)

VALUES ('Elisangela Goncalves, 98745698745,2013-02-13,elisangelacristine@gmail.com,31984076809,Elis,12345)

INSERT INTO usuario (Nome,Cpf,DataNascimento,Email,Telefone,Usuario,Senha)

VALUES ('Roberta Goncalves, 98745698123,2020-06-29,testeelis@gmail.com,3198407
6809,Roberta,123)

select * from usuario;

show TABLES;