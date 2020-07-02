CREATE TABLE veiculos (
 codVeiculo int(11) NOT NULL auto_increment,
 placa varchar(255) NOT NULL,
 modelo varchar(800) NOT NULL, 
 statusVeiculo varchar(20) NOT NULL,
 imagem varchar(255) NOT NULL,
 dataDevolucao date NULL,
 PRIMARY KEY (codVeiculo)
) AUTO_INCREMENT= 1;


INSERT INTO veiculos (placa,  modelo, statusVeiculo,imagem,dataDevolucao) VALUES ( 'RON-1617', 'HB 20 Hyundai', Disponivel', 'NULL', 'https://img.favpng.com/10/9/3/hyundai-hb20-car-hyundai-motor-company-hyundai-motor-brasil-png-favpng-F99MsMbM7mtWrziFEitpC8s0Y.jpg',NULL)
