/*CREATE TABLE pessoas(
    id int(11) not null AUTO_INCREMENT primary key,
    username varchar(200) not null,
    password varchar(255) not null,
    nome varchar(100) not null,
    idade int(3)not null
);

/*CREATE TABLE alunos(
    matricula varchar(20) not null,
    curso varchar(100) not null,
    periodo varchar(20) not null,
    email varchar(100) not null,
    endereco varchar(100) not null,
    contato varchar(14) not null,
    id_pessoa int(11),
    CONSTRAINT `id_pessoa` FOREIGN KEY (id_pessoa) REFERENCES pessoas(`id`)
);
CREATE TABLE funcionarios(
    siape varchar(20) not null,
    funcao varchar(100) not null,
    setor varchar(100) not null,
    email varchar(100) not null,
    endereco varchar(100) not null,
    contato varchar(14) not null,
    pessoa_id int(11),
    CONSTRAINT `pessoa_id` FOREIGN KEY (pessoa_id) REFERENCES pessoas(`id`)
);*/

CREATE TABLE editoras(
    id int(11) not null AUTO_INCREMENT PRIMARY KEY,
    nome varchar(50) not null,
    contato varchar(14) not null,
    endereco varchar(100) not null,
    email varchar(100) not null
);

CREATE TABLE categorias(
    id int(4) not null PRIMARY KEY AUTO_INCREMENT,
    identificador int(4) not null,
    descricao varchar(100)
);

CREATE TABLE livros(
    id int(11) not null AUTO_INCREMENT PRIMARY KEY,
    titulo varchar(100) not null,
    isbn varchar(20) not null,
    edicao varchar(50) not null,
    autor varchar(100) not null,
    categoria_id int(4) not null,
    editora_id int(11),
    CONSTRAINT `categoria_id` FOREIGN KEY (categoria_id) REFERENCES categorias(`id`),
    CONSTRAINT `editora_id` FOREIGN KEY (editora_id) REFERENCES editoras(`id`)
);

CREATE TABLE livro_fisico(
    livros_id int(11) not null,
    alugado boolean not null,
    quantidade int(11) not null,
    codigo_livro int(10) not null PRIMARY KEY,
    CONSTRAINT `livros_id` FOREIGN KEY (livros_id) REFERENCES livros(`id`)
);

CREATE TABLE users (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150),
    matricula VARCHAR(14),
    email VARCHAR(30),
    username VARCHAR(50),
    password VARCHAR(255),
    role VARCHAR(200),
    created DATETIME DEFAULT NULL,
    modified DATETIME DEFAULT NULL

);
CREATE TABLE emprestimos(
    id int(11) not null AUTO_INCREMENT primary key,
    livro_id int(11) not null,
    id_usuario int(11) not null,
    codigo_livros int(10),
    CONSTRAINT `livro_id` FOREIGN KEY (livro_id) REFERENCES livros(`id`),
    CONSTRAINT `codigo_livros` FOREIGN KEY (codigo_livros) REFERENCES livro_fisico(`codigo_livro`),
    CONSTRAINT `id_usuario` FOREIGN KEY (id_usuario) REFERENCES users(`id`)
);