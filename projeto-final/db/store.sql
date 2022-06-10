--- Cria o banco STORE ---
create database store;

--- Usar o banco ---
use store;

--- Criar tabela CATEGORIA ---
create table category(
	id int(11) not null primary key auto_increment,
	name varchar(30) not null,
	description varchar(100) not null
);

--- Inserir dados dentro dela ---
insert into category (name, description)
values
(
	'Informática',
	'Peças de informática e acessórios para computador.'
),
(
	'Escritório',
	'Canetas, cadernos, folhas e etc...'
),
(
	'Eletrónicos',
	'TVs, som portátil, caixas de som e etc...'
);

--- Criar tabela PRODUTOS ---
create table product(
	id int(11) not null primary key auto_increment,
	name varchar(30) not null,
	description varchar(250) not null,
	image varchar(255) not null,
	price float(5,2) not null,
	quantity int(5) not null,
	categoryId int(11) not null,
	createdAt datetime not null
);

insert into product (name, description, image, price, quantity, categoryId, createdAt)
values
(
	'AMD Atlhon 3000G',
	'Ele vem com 2 núcleos, 4 threads e clockes de 3.5GHz, com possiblidade de overclock através do Ryzen Master.',
	'https://m.media-amazon.com/images/I/61THc9DLMCL._AC_SX466_.jpg',
	469.90,
	2,
	1,
	'2022-06-09 11:47:25'
),
(
	'Intel Core i3-10100F',
	'O processador possuí 4 núcleos e 8 threads, seu clock base é de 3.6GHz, mas sua frequência pode atingir até 4.3Ghz no modo turbo.',
	'https://http2.mlstatic.com/D_NQ_NP_674528-MLA44438189458_122020-O.jpg',
	579.00,
	4,
	1,
	'2022-06-09 11:47:25'
),
(
	'JBL Partybox 110',
	'Caixa de som portátil para festas com som potente de 160W RMS, luzes integradas e design à prova de respingos.',
	'https://www.jbl.com.br/dw/image/v2/AAUJ_PRD/on/demandware.static/-/Sites-masterCatalog_Harman/default/dwd08a4100/1_JBL_PARTYBOX_110_HERO_x2.png?sw=537&sfrm=png',
	100.00,
	2,
	3,
	'2022-06-09 11:47:25'
),
(
	'Smart TV LG 43 4K UHD 43UQ7500',
	'Comande facilmente usando apenas a voz. O controle inteligente de voz via Google Assistente, Amazon Alexa, Apple AirPlay e outras opções permite controlar sua TV LG UHD com muito mais facilidade e rapidez.',
	'https://www.lg.com/br/images/tv/md07556155/gallery/D-1.jpg',
	318.90,
	1,
	3,
	'2022-06-09 11:47:25'
),
(
	'Lápis de Cor, Faber-Castell',
	'Tecnologia exclusiva de mina supermacia, garantindo máximo conforto ao pintar.',
	'https://m.media-amazon.com/images/I/71oPsKBsrZL._AC_SX569_.jpg',
	79.90,
	10,
	2,
	'2022-06-09 11:47:25'
);