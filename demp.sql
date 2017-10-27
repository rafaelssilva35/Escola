CREATE TABLE gestor
(
  id_gestor serial NOT NULL PRIMARY KEY ,
  codigo_imovel real,
  tipo_eleito character varying(40),
  cargo character varying(50),
  situacao_cargo character varying(30),
  matricula character varying(30),
  nome character varying(100),
  cpf character varying(15),
  telefone character(12),
  celular character varying(14),
  celular2 character varying(100),
  email character varying(100)
);

CREATE TABLE imovel
(
  id_imovel serial NOT NULL PRIMARY KEY,
  codigo real,
  codigo_mae real,
  regional character varying(100),
  cidade character varying(100),
  inep integer,
  anexo character varying(20),
  descricao character varying(50),
  modalidade character varying(50),
  situacao character varying(50),
  educacao_infantil_presencial real,
  anos_finais_presencial real,
  ensino_medio_presencial real,
  educacao_profissional_presencial real,
  eja_presencial real,
  eja_semipresencial real,
  magisterio_ead real,
  eja_ead real,
  educacao_presencial_ead real,
  total_escolarizacao real,
  cep character varying(15),
  logradouro character varying(100),
  numero character varying(30),
  bairro character varying(100),
  data_cadastro character varying(20),
  ultima_atualizacao character varying(20),
  latitude character varying(30),
  longitude character varying(30),
  anos_inicais_presencial real,
  educacao_profissional_ead real
);

CREATE TABLE repasses
(
  id_repasse serial NOT NULL PRIMARY KEY,
  codigo_imovel real,
  tipo_repasse character varying(100),
  codigo_caixa_escolar real,
  ano_parcela real,
  nivel_ensino character varying(100),
  etapa_ensino character varying(100),
  descricao_repasse text,
  numero_parcela real,
  valor real,
  numero_processo real,
  ano_processo real
);

CREATE TABLE terceirizados
(
  id_terceirizado serial NOT NULL PRIMARY KEY ,
  codigo_imovel real,
  tipo character varying(100),
  posto_trabalho character varying(100),
  quantidade real,
  valor_unitario real
)
