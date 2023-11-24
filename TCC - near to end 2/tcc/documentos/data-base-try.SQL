/*create DATABASE linguas; 
use linguas;
create table usuario(
    email VARCHAR PRIMARY KEY(80),
    senha VARCHAR(25),
    nome VARCHAR(50)
);
create table teste_pro(
    codigo_test INT  PRIMARY KEY(15),
    nivel VARCHAR(15),
    resultado VARCHAR(20),
    email VARCHAR(80),
    FOREIGN KEY (email) REFERENCES usuario(email)
);
create table cursos(
    lingua VARCHAR PRIMARY KEY(25),
    nivel VARCHAR(15),
    FOREIGN KEY (nivel) REFERENCES teste_pro(nivel)
);
create table salvos(
    salvar PRIMARY KEY,
    progresso VARCHAR,
    lingua VARCHAR,
    email VARCHAR,
    FOREIGN KEY (lingua) REFERENCES cursos(lingua),
    FOREIGN KEY (email) REFERENCES usuario(email)
);
*/

CREATE DATABASE linguas;
USE linguas;

CREATE TABLE usuario (
    email VARCHAR(80) PRIMARY KEY,
    senha VARCHAR(25),
    nome VARCHAR(50)
);

CREATE TABLE teste_pro (
    codigo_test INT PRIMARY KEY,
    nivel VARCHAR(15),
    resultado VARCHAR(20),
    email VARCHAR(80),
    FOREIGN KEY (email) REFERENCES usuario(email)
);

CREATE TABLE cursos (
    lingua VARCHAR(25) PRIMARY KEY,
    nivel VARCHAR(15),
    codigo_test INT,
    FOREIGN KEY (codigo_test) REFERENCES teste_pro(codigo_test)
);

CREATE TABLE salvos (
    salvar INT PRIMARY KEY,
    progresso VARCHAR(50),
    lingua VARCHAR(25),
    email VARCHAR(80),
    FOREIGN KEY (lingua) REFERENCES cursos(lingua),
    FOREIGN KEY (email) REFERENCES usuario(email)
);