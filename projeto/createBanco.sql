create table if not exists veiculo(
    id serial primary key,
    placa varchar(8) not null,
    marca varchar(20) not null,
    modelo varchar(20) not null,
    km int not null ,
    dataAquisicao date not null,
    qtdeEixos int not null,
    categoria char not null,
    ativo char not null
);

create table if not exists cidade(
    id serial primary key,
    nome varchar(30) not null,
    cep varchar(10) not null,
    uf varchar(3)
);

create table if not exists funcionario(
    id serial primary key,
    nome varchar(30) not null,
    email varchar(30) not null,
    endereco varchar(50) not null,
    data_admissao date not null,
    telefone varchar(11),
    cargo char not null,
    salario varchar(20) not null,
    ativo char not null
);

create table if not exists rota(
    id serial primary key,
    cid_partida int not null,
    cid_chegada int not null,
    descricao varchar(200) not null,
    distancia varchar(20) not null
);

create table if not exists aluno(
    id serial primary key,
    universidade int not null,
    nome_completo varchar(50) not null,
    cpf varchar(11) not null,
    telefone varchar(11) not null,
    email varchar(30) not null,
    data_nascimento date not null
);

create table if not exists usuario(
    id serial primary key,
    nome varchar(30) not null,
    email varchar(50) not null,
    data_nascimento date not null,
    cpf varchar(11) not null,
    login varchar(20) not null,
    senha varchar(64) not null,
    tipo int not null
);

insert into usuario(nome, email, data_nascimento, cpf, login, senha, tipo)
values('Angelo Franz', 'angelolfranz@gmail.com', '1999-08-19', '07859701936', 'afranz', 'afranz', 1);

insert into aluno(universidade, nome_completo, cpf, telefone, email, data_nascimento)
values(1, 'Angelo Franz', '07859701936', '49999116736', 'angelo.franz@ixcsoft.com.br', '1999-08-19');

insert into aluno(universidade, nome_completo, cpf, telefone, email, data_nascimento)
values(1, 'José Dirceu', '07859701936', '49999116736', 'angelo.franz@ixcsoft.com.br', '1981-09-01');

insert into aluno(universidade, nome_completo, cpf, telefone, email, data_nascimento)
values(1, 'Luiz Carlos', '07859701936', '49999116736', 'angelo.franz@ixcsoft.com.br', '2000-10-30');

insert into aluno (nome_completo, cpf, email, telefone, data_nascimento, universidade)
values( 'Leonardo teste', 12312312312, 'teste@gmail.com', 123123, '2023-07-11', 3);

create table if not exists dias_semana(
    id serial primary key,
    descricao varchar (15)
);

insert into dias_semana (descricao) values ('Segunda Feira');
insert into dias_semana (descricao) values ('Terca Feira');
insert into dias_semana (descricao) values ('Quarta Feira');
insert into dias_semana (descricao) values ('Quinta Feira');
insert into dias_semana (descricao) values ('Sexta Feira');
insert into dias_semana (descricao) values ('Sabado');
insert into dias_semana (descricao) values ('Domingo');

create table if not exists frequencia_aluno(
    id serial primary key,
    id_aluno int not null,
    id_universidade int not null,
    id_dia int not null,
    ano int not null,
    semestre int not null
);