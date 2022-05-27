CREATE TABLE Pessoa(
	idPessoa int primary key auto_increment,
    nomePessoa VARCHAR(50),
    emailPessoa VARCHAR(30),
    idadePessoa int
);

INSERT INTO Pessoa (nomePessoa, emailPessoa, idadePessoa) VALUES 
				   ('Alciomar', 'alciomar@unasp.br', 35); 

select * from Pessoa;