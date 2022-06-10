--- Criar um banco de dados ---
create database db_escola;

--- Usar o banco criado ---
use db_escola;

--- Criar tabela ---
create table tb_professor(
	id int(11) primary key auto_increment,
	nome varchar(100) not null,
	cpf char(11) unique not null,
	email varchar(250) unique not null
);

create table tb_aluno(
	id int(11) primary key auto_increment,
	nome varchar(100) not null,
	cpf char(11) unique not null,
	email varchar(250) unique not null,
	matricula varchar(10) unique not null
);

create table disciplina(
	id int(11) primary key auto_increment,
	nome varchar(100) not null,
	cargaHoraria int(11) not null,
);

create table curso(
	id int(11) primary key auto_increment,
	nome varchar(100) not null,
	cpf char(11) unique not null,
);

--- Inserir dados na tabela ---
insert into tb_professor (nome, email, cpf)
values (
	'Alessandro',
	'ale@email.com',
	'12345678912'
);

--- Excluir tabela ---
drop table tb_professor;