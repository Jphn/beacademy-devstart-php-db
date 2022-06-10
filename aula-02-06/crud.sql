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


