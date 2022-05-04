DROP TABLE IF EXISTS pessoas;
CREATE TABLE pessoas(
    id int not null auto_increment,
    nome varchar(120) not null,
    sobrenome varchar(120) not null,
    dtnasc date not null, 
    primary key (id)
);