create database bd_atividade;
use bd_atividade;

create table funcionario(
id_funcionario int auto_increment,
nm_funcionario varchar(45),
sobrenome varchar(45),
dt_nascimento date,
cargo varchar(30),
salario decimal (9,2),
dt_admissao date,
senha text,
primary key (id_funcionario)
);

create table cliente(
id_cliente int auto_increment,
nm_cliente varchar(45),
sobrenome varchar(45),
email  varchar(45),
telefone varchar(13),
endereco varchar (45),
nr_endereco int,
primary key (id_cliente)
);

create table fornecedor(
id_fornecedor int auto_increment,
nm_fornecedor varchar(45),
contato varchar(45),
email varchar(45),
telefone varchar(45),
endereco varchar(45),
nr_endereco int,
primary key (id_fornecedor)
);

create table tb_Categoria(
id_categoria int auto_increment,
nome varchar(45),
descricao varchar(200),
primary key (id_categoria)
);

create table tb_Lancamentos(
id_despesa int auto_increment,
descricao varchar(200),
valor decimal (6,2),
tipo boolean,
data_lancamento date,
id_categoria int,
id_funcionario int,
primary key (id_despesa),
foreign key (id_categoria) references tb_Categoria (id_categoria),
foreign key (id_funcionario) references funcionario (id_funcionario)
);

insert into funcionario
values (null, "Henrique", "Paiero", '2000-10-15', "Designer", 1000.00, '2020-08-10', "123");