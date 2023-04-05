Crie uma DB com o nome "db_lista" depois crie uma TABLE com o seguinte código: 


CREATE TABLE usuarios (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  nome VARCHAR(30) NOT NULL,
  idade INT(3) NOT NULL,
  telefone VARCHAR(15) NOT NULL,
  email VARCHAR(50) NOT NULL
);




Depois adicione os contatos teste com o seguinte código: 

INSERT INTO usuarios (nome, idade, telefone, email) VALUES 
('Ana', 27, '111111111', 'ana@email.com'),
('Pedro', 35, '222222222', 'pedro@email.com'),
('Lucas', 22, '333333333', 'lucas@email.com'),
('Julia', 29, '444444444', 'julia@email.com'),
('Maria', 40, '555555555', 'maria@email.com');



