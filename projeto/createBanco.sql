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