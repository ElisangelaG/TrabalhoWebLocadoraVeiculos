-- Estrutura da tabela `usuarios`

CREATE TABLE aut_usuarios (
 id int(11) NOT NULL auto_increment,
 nome varchar(255) NOT NULL,
 email varchar(800) NOT NULL, 
 telefone varchar(20) NOT NULL,
 login varchar(255) NOT NULL,
  (MD5) senha varchar(200) NOT NULL,
 PRIMARY KEY (id)
) AUTO_INCREMENT= 1;


-- inserindo informmação

INSERT INTO `aut_usuarios` (`id`, `nome`, `email`, `telefone`, `login`, `senha`) VALUES (NULL, 'Elisangela Goncalves', 'elisangelacristinne@gmail.com', '3199999999', 'Admin', MD5('123'));