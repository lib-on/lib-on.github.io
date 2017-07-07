create table usuarios(

	id integer(11) not null primary key,
	nome varchar(45) not null,
	email varchar(50) not null, 
	livro varchar(50) not null, 
	data_emprestimo datetime not null,
	data_renovacao datetime not null,
	data_entrega datetime not null
);