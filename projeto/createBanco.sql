create database integrador;
    \c integrador


create table if not exists funcionario(
  id serial,
  nome varchar(30) not null,
  email varchar(30) not null,
  endereco varchar(50) not null,
  data_admissao date not null,
  telefone varchar(11),
  cargo varchar(30) not null,
  salario varchar(20) not null,
  ativo char not null,
  constraint pk_funcionario primary key (id)
);

create table if not exists veiculo(
    id serial,
    placa varchar(8) not null,
    marca varchar(20) not null,
    modelo varchar(20) not null,
    km int not null,
    dataAquisicao date not null,
    qtdeEixos int not null,
    categoria varchar(15) not null,
    ativo varchar(5) not null,
    id_funcionario int not null,
    constraint pk_veiculo primary key (id),
    constraint  fk_veiculo_funcionario foreign key (id_funcionario) references funcionario(id)
);

create table if not exists cidade(
    id serial,
    nome varchar(30) not null,
    cep varchar(10) not null,
    uf varchar(3),
    constraint pk_cidade primary key (id)
);

create table if not exists rota(
    id serial,
    cid_partida int not null,
    cid_chegada int not null,
    descricao varchar(200) not null,
    distancia varchar(20) not null,
    constraint pk_rota primary key (id),
    constraint fk_partida_cidade foreign key (cid_partida) references cidade(id),
    constraint fk_chegada_cidade foreign key (cid_chegada) references cidade(id)
);

create table if not exists aluno(
    id serial,
    universidade int not null,
    nome_completo varchar(50) not null,
    cpf varchar(11) not null,
    telefone varchar(11) not null,
    email varchar(30) not null,
    data_nascimento date not null,
    constraint pk_aluno primary key (id)
);

create table if not exists usuario(
    id serial,
    nome varchar(30) not null,
    email varchar(50) not null,
    data_nascimento date not null,
    cpf varchar(11) not null,
    login varchar(20) not null,
    senha varchar(64) not null,
    tipo int not null,
    constraint pk_usuario primary key (id)
);

create table if not exists dias_semana(
    id serial,
    descricao varchar (15),
    constraint pk_dia_semana primary key (id)
);

create table if not exists universidade(
    id serial,
    nome varchar(50) not null,
    sigla varchar(10) not null,
    cidade int not null,
    constraint pk_universidade primary key (id),
    constraint fk_universidade_cidade foreign key (cidade) references cidade(id)
);

create table if not exists frequencia_aluno(
   id serial,
   id_aluno int not null,
   id_universidade int not null,
   id_dia int not null,
   ano int not null,
   semestre int not null,
   constraint pk_frequencia primary key (id),
   constraint fk_frequencia_aluno foreign key (id_aluno) references aluno(id),
   constraint fk_frequencia_universidade foreign key (id_universidade) references universidade(id),
   constraint fk_frequencia_dia foreign key (id_dia) references dias_semana(id)
);

insert into usuario(nome, email, data_nascimento, cpf, login, senha, tipo)
values('Angelo Franz', 'angelolfranz@gmail.com', '1999-08-19', '07859701936', 'afranz', 'afranz', 1);

insert into dias_semana (descricao)
values ('Segunda Feira'),
       ('Terca Feira'),
       ('Quarta Feira'),
       ('Quinta Feira'),
       ('Sexta Feira'),
       ('Sabado'),
       ('Domingo');

insert into cidade(nome, cep, uf)
values ('São Carlos', '89885000', 'SC'),
     ('Chapecó', '89834556', 'SC'),
     ('Porto Alegre', '98472840', 'RS'),
     ('Curitiba', '78930298', 'PR'),
     ('Manaus', '83638345', 'AM'),
     ('São Paulo', '75649037', 'SP'),
     ('Rio de Janeiro', '74034560', 'RJ'),
     ('Pelotas', '74839654', 'RS'),
     ('Lucas do Rio Verde', '33456234', 'MT'),
     ('Rio Branco', '11111111', 'AC');

INSERT INTO funcionario (nome, email, endereco, data_admissao, telefone, cargo, salario, ativo)
VALUES ('João Silva', 'joao.silva@example.com', 'Rua A, 123', '2022-01-01', '1234567890', 'Motorista', '5000', 'S'),
       ('Pedro Oliveira', 'pedro.oliveira@example.com', 'Rua C, 789', '2022-03-01', '1112223334', 'Motorista', '1500', 'S'),
       ('Maria Santos', 'maria.santos@example.com', 'Avenida B, 456', '2022-02-01', '9876543210', 'Motorista', '3000', 'S'),
       ('Pedro Oliveira', 'pedro.oliveira@example.com', 'Rua C, 789', '2022-03-01', '1112223334', 'Motorista', '1500', 'S'),
       ('Ana Costa', 'ana.costa@example.com', 'Avenida D, 321', '2022-04-01', '5556667778', 'Motorista', '2500', 'S'),
       ('Lucas Pereira', 'lucas.pereira@example.com', 'Rua E, 654', '2022-05-01', '9998887776', 'Motorista', '4000', 'S'),
       ('Mariana Oliveira', 'mariana.oliveira@example.com', 'Avenida F, 987', '2022-06-01', '2223334445', 'Motorista', '3500', 'S'),
       ('Carlos Silva', 'carlos.silva@example.com', 'Rua G, 321', '2022-07-01', '7778889990', 'Mecanico', '4500', 'S'),
       ('Laura Mendes', 'laura.mendes@example.com', 'Avenida H, 654', '2022-08-01', '3334445556', 'Auxiliar administrativo', '2700', 'S'),
       ('Rafaela Santos', 'rafaela.santos@example.com', 'Rua I, 987', '2022-09-01', '8889990001', 'Auxiliar administrativo', '1600', 'S'),
       ('Gabriel Costa', 'gabriel.costa@example.com', 'Avenida J, 321', '2022-10-01', '4445556667', 'Auxiliar administrativo', '3800', 'S'),
       ('João Souza', 'joao.silva@example.com', 'Rua A, 123', '2022-01-01', '99999999', 'Analista de Vendas', '5000', 'S'),
       ('Maria Souza', 'maria.souza@example.com', 'Avenida B, 456', '2021-05-10', '88888888', 'Gerente de Projetos', '8000', 'S'),
       ('Carlos Santos', 'carlos.santos@example.com', 'Rua C, 789', '2020-12-15', '77777777', 'Desenvolvedor Web', '6000', 'S'),
       ('Ana Oliveira', 'ana.oliveira@example.com', 'Avenida D, 321', '2022-03-20', '66666666', 'Analista Financeiro', '5500', 'S'),
       ('Pedro Rocha', 'pedro.rocha@example.com', 'Rua E, 654', '2023-02-12', '55555555', 'Engenheiro de Software', '7000', 'S'),
       ('Mariana Lima', 'mariana.lima@example.com', 'Avenida F, 987', '2021-07-08', '44444444', 'Analista de Recursos Humanos', '4800', 'S'),
       ('Rafaela Castro', 'rafaela.castro@example.com', 'Rua G, 321', '2020-11-30', '33333333', 'Analista de Marketing', '5200', 'S'),
       ('Gustavo Almeida', 'gustavo.almeida@example.com', 'Avenida H, 654', '2022-09-25', '22222222', 'Analista de Qualidade', '5800', 'S'),
       ('Laura Ferreira', 'laura.ferreira@example.com', 'Rua I, 987', '2021-04-03', '11111111', 'Designer Gráfico', '4500', 'S'),
       ('Felipe Costa', 'felipe.costa@example.com', 'Avenida J, 123', '2023-06-18', '00000000', 'Analista de Sistemas', '6500', 'S');




INSERT INTO aluno (universidade, nome_completo, cpf, telefone, email, data_nascimento)
VALUES (1, 'João da Silva', '12345678901', '1234567890', 'joao.silva@example.com', '2000-01-01'),
       (1, 'Maria Santos', '98765432109', '9876543210', 'maria.santos@example.com', '2000-02-02'),
       (2, 'Pedro Oliveira', '45678912304', '1112223334', 'pedro.oliveira@example.com', '2000-03-03'),
       (2, 'Ana Costa', '78912345607', '5556667778', 'ana.costa@example.com', '2000-04-04'),
       (3, 'Lucas Pereira', '65498732105', '9998887776', 'lucas.pereira@example.com', '2000-05-05'),
       (3, 'Mariana Oliveira', '98765412303', '2223334445', 'mariana.oliveira@example.com', '2000-06-06'),
       (4, 'Carlos Silva', '32165498706', '7778889990', 'carlos.silva@example.com', '2000-07-07'),
       (4, 'Laura Mendes', '65432198702', '3334445556', 'laura.mendes@example.com', '2000-08-08'),
       (5, 'Gabriel Costa', '32198765401', '4445556667', 'gabriel.costa@example.com', '2000-10-10'),
       (5, 'Rafaela Santos', '98712365408', '8889990001', 'rafaela.santos@example.com', '2000-09-09'),
       (1, 'Juliana Oliveira', '15975346805', '1112223334', 'juliana.oliveira@example.com', '2000-11-11'),
       (1, 'Carlos Mendes', '95175385206', '5556667778', 'carlos.mendes@example.com', '2000-12-12'),
       (2, 'Isabela Rodrigues', '75395185204', '9998887776', 'isabela.rodrigues@example.com', '2001-01-01'),
       (2, 'Ricardo Silva', '85296374109', '2223334445', 'ricardo.silva@example.com', '2001-02-02'),
       (3, 'Fernanda Costa', '45685296302', '7778889990', 'fernanda.costa@example.com', '2001-03-03'),
       (3, 'Gustavo Santos', '74185296305', '3334445556', 'gustavo.santos@example.com', '2001-04-04'),
       (4, 'Camila Oliveira', '96385274108', '8889990001', 'camila.oliveira@example.com', '2001-05-05'),
       (4, 'Diego Costa', '25896314701', '4445556667', 'diego.costa@example.com', '2001-06-06'),
       (5, 'Larissa Mendes', '85274196304', '1112223334', 'larissa.mendes@example.com', '2001-07-07'),
       (5, 'Felipe Silva', '36925814707', '5556667778', 'felipe.silva@example.com', '2001-08-08');

insert into universidade (nome, sigla, cidade)
values    ('Universidade Federal da Fronteira Sul', 'UFFS', 2),
          ('Instituto Federal', 'IFSC', 1),
          ('UNOESC', 'UNOESC', 2),
          ('Universidade Federal de Manaus', 'UFAM', 2),
          ('Universidade Federal de Pelotas', 'UFPEL', 8),
          ('Universidade Federal da Fronteira Sul', 'UFFS', 2),
          ('Universidade', 'UNI', 5),
          ('Univerisdade sem nome', 'USM', 6),
          ('Instituto de Arqueologia', 'UAC', 10),
          ('Universidade Catolica', 'UC', 3);


INSERT INTO veiculo (placa, marca, modelo, km, dataAquisicao, qtdeEixos, categoria, ativo, id_funcionario)
VALUES ('ABC1234', 'Volvo', 'FH 440', 100000, '2020-01-01', 2, 'Caminhão', 'Sim', 1),
       ('DEF5678', 'Scania', 'R450', 80000, '2019-05-15', 3, 'Caminhão', 'Sim', 2),
       ('GHI9012', 'Mercedes-Benz', 'Axor 2544', 120000, '2018-10-20', 2, 'Caminhão', 'Sim', 3),
       ('JKL3456', 'Volkswagen', 'Delivery 10-160', 50000, '2021-03-10', 2, 'Caminhão', 'Sim', 4),
       ('MNO7890', 'Iveco', 'Stralis 480', 90000, '2019-07-25', 3, 'Caminhão', 'Sim', 5),
       ('PQR2345', 'Volvo', 'FH 540', 60000, '2022-02-12', 2, 'Caminhão', 'Sim', 6),
       ('STU6789', 'Mercedes-Benz', 'Actros 2651', 150000, '2017-09-05', 3, 'Caminhão', 'Sim', 7),
       ('VWX0123', 'Scania', 'G450', 70000, '2020-06-18', 2, 'Caminhão', 'Sim', 8),
       ('YZA4567', 'Volkswagen', 'Constellation 24.280', 110000, '2018-12-03', 2, 'Caminhão', 'Sim', 9),
       ('BCD8901', 'Ford', 'Cargo 2429', 75000, '2021-08-08', 2, 'Caminhão', 'Sim', 10),
       ('EFG2345', 'Volvo', 'B450R', 95000, '2019-04-20', 2, 'Caminhão', 'Sim', 11),
       ('HIJ6789', 'Scania', 'P310', 85000, '2020-11-11', 2, 'Caminhão', 'Sim', 12),
       ('KLM0123', 'Mercedes-Benz', 'Atego 1719', 63000, '2022-03-30', 2, 'Caminhão', 'Sim', 13),
       ('NOP4567', 'Volkswagen', 'Worker 23.220', 78000, '2019-06-07', 2, 'Caminhão', 'Sim', 14),
       ('QRS8901', 'Iveco', 'Tector 240E28', 56000, '2021-01-25', 2, 'Caminhão', 'Sim', 15),
       ('TUV2345', 'Volvo', 'FH 460', 92000, '2018-08-14', 2, 'Caminhão', 'Sim', 16),
       ('WXY6789', 'Scania', 'R420', 69000, '2022-05-07', 2, 'Caminhão', 'Sim', 17),
       ('ZAB0123', 'Mercedes-Benz', 'Axor 2035', 54000, '2019-09-28', 2, 'Caminhão', 'Sim', 18),
       ('CDE4567', 'Volkswagen', 'Delivery 8-150', 72000, '2020-04-02', 2, 'Caminhão', 'Sim', 19),
       ('EFG8901', 'Ford', 'Cargo 816', 48000, '2021-11-23', 2, 'Caminhão', 'Sim', 20);



INSERT INTO rota(cid_partida, cid_chegada, descricao, distancia)
values(1, 2, 'SÂO CARLOS - UFFS', '55'),
      (1, 2, 'SÂO CARLOS - Unochapeco', '55'),
      (1, 2, 'SÂO CARLOS - Unoesc', '55'),
      (2, 2, 'CCO - POA', '55'),
      (3, 6, 'POA - SP', '55'),
      (4, 5, 'Curitiba - Manaus', '55'),
      (5, 4, 'Manaus - Curitiba', '55'),
      (6, 3, 'SP - POA', '55'),
      (7, 5, 'RJ - Manaus', '55'),
      (8, 1, 'Palotas - São carlos', '55');



INSERT INTO frequencia_aluno(id_aluno, id_universidade, id_dia, ano, semestre)
values (1, 1, 1, 2020, 2),
      (1, 1, 2, 2020, 2),
      (1, 1, 3, 2020, 2),
      (1, 1, 5, 2020, 2),
      (2, 2, 1, 2020, 2),
      (2, 2, 2, 2020, 2),
      (2, 2, 3, 2020, 2),
      (2, 2, 5, 2020, 2),
      (3, 2, 1, 2020, 2),
      (3, 2, 2, 2020, 2),
      (3, 2, 3, 2020, 2),
      (3, 2, 4, 2020, 2),
      (3, 2, 1, 2020, 2),
      (4, 2, 2, 2020, 2),
      (4, 2, 3, 2020, 2),
      (4, 2, 5, 2020, 2),
      (6, 2, 1, 2020, 2),
      (7, 2, 2, 2020, 2),
      (8, 2, 3, 2020, 2),
      (9, 2, 5, 2020, 2),
      (10, 1, 1, 2020, 2),
      (10, 1, 2, 2020, 2),
      (10, 1, 3, 2020, 2),
      (5, 1, 5, 2020, 2),
      (5, 1, 1, 2020, 2),
      (5, 1, 2, 2020, 2),
      (5, 1, 3, 2020, 2),
      (6, 1, 4, 2020, 2),
      (6, 1, 1, 2020, 2),
      (7, 1, 2, 2020, 2),
      (7, 1, 3, 2020, 2),
      (7, 1, 5, 2020, 2),
      (1, 1, 1, 2020, 1),
      (1, 1, 2, 2020, 1),
      (1, 1, 3, 2020, 1),
      (1, 1, 5, 2020, 1),
      (2, 1, 1, 2020, 1),
      (2, 1, 2, 2020, 1),
      (2, 1, 3, 2020, 1),
      (2, 3, 5, 2020, 1),
      (3, 3, 1, 2020, 1),
      (3, 3, 2, 2020, 1),
      (3, 3, 3, 2020, 1),
      (3, 3, 4, 2020, 1),
      (9, 3, 1, 2020, 1),
      (4, 3, 2, 2020, 1),
      (4, 3, 3, 2020, 1),
      (4, 3, 5, 2020, 1),
      (6, 3, 1, 2020, 1),
      (7, 3, 2, 2020, 1),
      (8, 3, 3, 2020, 1),
      (9, 1, 5, 2020, 1),
      (10, 4, 1, 2020,1),
      (10, 4, 2, 2020, 1),
      (10, 4, 3, 2020, 1),
      (5, 4, 5, 2020, 1),
      (5, 4, 1, 2020, 1),
      (5, 4, 2, 2020, 1),
      (5, 4, 3, 2020, 1),
      (6,4, 4, 2020, 1),
      (6, 4, 1, 2020, 1),
      (7, 5, 2, 2020, 1),
      (7, 5, 3, 2020, 1),
      (7, 5, 5, 2020, 1);

