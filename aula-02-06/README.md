<a href="https://www.beacademy.com.br/devstartpaylivre/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2022/02/Cubo.png" align="right" width="60"/></a>

# PHP E BANCO DE DADOS - ENTREGÁVEIS

## ÍNDICE

### Introdução a linguagem SQL

- Aula 02
- Aula 03
- Aula 04
- Aula 05
- Aula 06

## CÓDIGOS

### [CRUD](./crud.sql)

```sql
use db_escola;

--- Inserir um registro no banco ---
insert into tb_professor (nome, email, cpf)
values (
 'Chiquim',
 'chiquim@email.com',
 '12345678912'
);

--- Inserir mais de um ---
insert into tb_professor (nome, email, cpf)
values
(
 'Chiquim',
 'chiquim@email.com',
 '12345678912'
),
(
 'Chica',
 'chica@email.com',
 '22345678912'
),
(
 'Maria',
 'maria@email.com',
 '32345678912'
);

--- Excluir tudo ---
delete from tb_professor;

--- Excluir um registro ---
delete from tb_professor where email = 'zezin@mail.com';

--- Atualizar todos ---
update tb_professor set nome = 'Luizinha';

--- Atualizar um registro ---
update tb_professor set nome = 'Luizinha' where cpf = '12345678912';

--- Selecionar todos os registros ---
select * from tb_professor;

--- Selecionar todos os registros que se aplicam a condição ---
select * from tb_professor where id = 5;

--- Selecionar apenas alguns dados de todos os registros que se aplicam a condição ---
select nome, email from tb_professor where id = 5;
```

### [BD Escola](./db_escola.sql)

```sql
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
```

## AUTOR

[@Jphn](https://github.com/Jphn)

<a href="https://www.beacademy.com.br/" target="_blank"><img src="https://www.beacademy.com.br/wp-content/uploads/2019/11/Logo-Topo.png" width="300" align="left" /></a>
<a href="https://www.paylivre.com/" target="_blank"><img src="https://web.paylivre.com/static/media/logo-blue.c7100186.png" width="300" align="right" /></a>
