
INSERT INTO usuarios (nome, email, cep, senha_hash, ativo) VALUES
('Astarion', 'astarion.szarr@faerunmail.com', '13801-000', '$2y$12$bNyB3V21.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Shadowheart', 'shadowheart.shar@moonmail.net', '11013-201', '$2y$12$F2JfwDigVRlEgjj.vCvj6OHhk9SMjEIS3QGSVGaFfam6S4lrZdbtC', 'ativo'),
('Gale', 'gale.dekarios@waterdeep.org', '13010-001', '$2y$12$n/WPo2Wxhs0/yOXFsUHnmeqH/s/p.8LVrKCScvJF2zvALpP0DfjFq', 'ativo'),
('Laezel', 'laezel.kithrak@creche.gith', '12210-000', '$2y$12$n/WPo2Wxhs0/yOXFsUHnmeqH/s/p.8LVrKCScvJF2zvALpP0DfjFq', 'ativo'),
('Wyll', 'wyll.ravengard@baldursgate.gov', '14010-000', '$2y$12$n/WPo2Wxhs0/yOXFsUHnmeqH/s/p.8LVrKCScvJF2zvALpP0DfjFq', 'ativo'),
('Karlach', 'karlach.fury@avernus.com', '04533-010', '$2y$12$n/WPo2Wxhs0/yOXFsUHnmeqH/s/p.8LVrKCScvJF2zvALpP0DfjFq', 'ativo'),
('Halsin', 'halsin.bear@emeraldgrove.org', '18015-000', '$2y$12$n/WPo2Wxhs0/yOXFsUHnmeqH/s/p.8LVrKCScvJF2zvALpP0DfjFq', 'ativo'),
('Minthara', 'minthara.vengeance@underdark.net', '01310-100', '$2y$12$n/WPo2Wxhs0/yOXFsUHnmeqH/s/p.8LVrKCScvJF2zvALpP0DfjFq', 'ativo'),
('Jaheira', 'jaheira.highharper@baldur.org', '11060-001', '$2y$12$n/WPo2Wxhs0/yOXFsUHnmeqH/s/p.8LVrKCScvJF2zvALpP0DfjFq', 'ativo'),
('Minsc', 'minsc.boo@rashemen.com', '13092-150', '$2y$12$n/WPo2Wxhs0/yOXFsUHnmeqH/s/p.8LVrKCScvJF2zvALpP0DfjFq', 'ativo'),
('Emerson', 'emerson@email.com', '13300-003', '$2y$12$n/WPo2Wxhs0/yOXFsUHnmeqH/s/p.8LVrKCScvJF2zvALpP0DfjFq', 'ativo'),
('Simão', 'simao@email.com', '06622-000', '$2y$12$n/WPo2Wxhs0/yOXFsUHnmeqH/s/p.8LVrKCScvJF2zvALpP0DfjFq', 'ativo'),
('Bruno', 'bruno@email.com', '06410-300', '$2y$12$n/WPo2Wxhs0/yOXFsUHnmeqH/s/p.8LVrKCScvJF2zvALpP0DfjFq', 'ativo'),
('Leandro', 'leandro@email.com', '06500-200', '$2y$12$n/WPo2Wxhs0/yOXFsUHnmeqH/s/p.8LVrKCScvJF2zvALpP0DfjFq', 'ativo'),
('Tatiana', 'tatiana@email.com', '17340-000', '$2y$12$n/WPo2Wxhs0/yOXFsUHnmeqH/s/p.8LVrKCScvJF2zvALpP0DfjFq', 'ativo'),
('Cristiany', 'cristiany@email.com', '11700-000', '$2y$12$n/WPo2Wxhs0/yOXFsUHnmeqH/s/p.8LVrKCScvJF2zvALpP0DfjFq', 'ativo'),
('Joao', 'joao@email.com', '14800-160', '$2y$12$n/WPo2Wxhs0/yOXFsUHnmeqH/s/p.8LVrKCScvJF2zvALpP0DfjFq', 'ativo'),
('Jonatas', 'jonatas@email.com', '15010-000', '$2y$12$n/WPo2Wxhs0/yOXFsUHnmeqH/s/p.8LVrKCScvJF2zvALpP0DfjFq', 'ativo');

INSERT INTO ongs (nome_fantasia, cnpj, cep, site, instagram, whatsapp, status_aprovação) VALUES
('Projeto Roupas para Baldurs Gate', '12.345.678/0001-01', '01001-000', 'www.roupasbg.org', '@roupasbg', '11999990001', 'Aprovada'),
('Casa Solidaria Shadowheart', '12.345.678/0001-02', '11013-201', 'www.shadowheartcasa.org', '@shadowcasa', '13999990002', 'Aprovada'),
('Karlach Aquece Vidas', '12.345.678/0001-03', '04533-010', 'www.karlachaquece.com', '@karlachaquece', '11999990003', 'Aprovada'),
('Rede Solidaria Vale do Sol', '12.345.678/0001-04', '13010-001', 'www.valedosol.org', '@valedosolsolidario', '19999990004', 'Aprovada'),
('Harpistas do Bem Coleta Textile', '12.345.678/0001-05', '11060-001', 'www.harpistasdobem.org', '@harpistasbem', '13999990005', 'Aprovada'),
('Astarion Recomeço Comunitário', '12.345.678/0001-06', '06600-000', 'www.aquecendocoracoes.org', '@aquecendocoracoes', '11988880001', 'Aprovada');

INSERT INTO campanhas (id_ong, titulo, descrição, status, criado_em) VALUES
(1, 'Campanha do Agasalho Baldurs', 'Ajude a aquecer as noites frias.', 'Aberta', NOW()),
(2, 'Inverno Acolhedor de Shadowheart', 'Doação focada em cobertores e casacos.', 'Aberta', NOW()),
(3, 'Karlach esquenta sua noite', 'Precisamos de roupas pesadas.', 'Aberta', NOW()),
(4, 'Campanha Metropolitana de Jandira', 'Doações gerais de roupas e calçados.', 'Aberta', NOW()),
(5, 'Passos Quentes em Carapicuiba', 'Arrecadação de meias e calçados infantis.', 'Aberta', NOW()),
(6, 'Astarion Recomeço Comunitário', 'Doações gerais de roupas e calçados.', 'Aberta', NOW());

INSERT INTO tipo_itens (nome, descrição, unidade_medida, tamanho) VALUES
('Casaco de Lã', 'Casacos pesados de inverno', 'Unidade', 'G'),
('Moletom Canguru', 'Moletons com capuz', 'Unidade', 'M'),
('Tênis Esportivo', 'Calçados para caminhada/corrida', 'Par', '40'),
('Sapato Infantil', 'Calçados para crianças', 'Par', '28'),
('Manta Antialérgica', 'Cobertores e mantas microfibra', 'Unidade', 'Casal'),
('Meias de Algodão', 'Pacote com pares de meias', 'Par', 'Único'),
('Calça Jeans Masculina', 'Calças jeans conservadas', 'Unidade', '42'),
('Blusa de Frio Infantil', 'Roupas quentes para crianças', 'Unidade', '8');

INSERT INTO campanha_itens (id_campanha, id_tipo_item, quantidade_meta, quantidade_arrecadada, observação) VALUES
(1, 1, 100, 20, 'Apenas casacos em bom estado.'),
(1, 3, 50, 10, 'Tênis de corrida preferencialmente.'),
(2, 5, 200, 45, 'Mantas limpas e ensacadas.'),
(3, 2, 80, 15, 'Moletons de qualquer cor.'),
(4, 4, 120, 30, 'Sapatos para crianças de 2 a 10 anos.'),
(5, 5, 200, 45, 'Mantas limpas e ensacadas.'),
(5, 3, 50, 10, 'Tênis de corrida preferencialmente.');

INSERT INTO imagens (tipo, url, id_ong) VALUES
('ong', 'https://i.imgur.com/aI4BfS8.jpeg', 1),
('ong', 'https://i.imgur.com/6D13XUI.jpeg', 2),
('ong', 'https://i.imgur.com/0bY6Lqi.png', 3),
('ong', 'https://i.imgur.com/QZJ7ND0.jpeg', 4),
('ong', 'https://i.imgur.com/AvL9OeT.png', 5),
('ong', 'https://i.imgur.com/3moAFmv.jpeg', 6);

INSERT INTO imagens (tipo, url, id_campanha) VALUES
('campanha', 'https://i.imgur.com/PgZqZui.jpeg', 1),
('campanha', 'https://i.imgur.com/S6wIVen.jpeg', 2),
('campanha', 'https://i.imgur.com/xZWLMK9.jpeg', 3),
('campanha', 'https://i.imgur.com/3hx5cUs.jpeg', 4),
('campanha', 'https://i.imgur.com/u8vjlYZ.jpeg', 5);


INSERT INTO imagens (tipo, url, id_usuario)
SELECT
  'perfil',
  'https://bg3.wiki/wiki/Special:Redirect/file/Portrait_Astarion.png',
  id
FROM usuarios
WHERE nome = 'Astarion';

INSERT INTO imagens (tipo, url, id_usuario)
SELECT
  'perfil',
  'https://bg3.wiki/wiki/Special:Redirect/file/Portrait_Shadowheart.png',
  id
FROM usuarios
WHERE nome = 'Shadowheart';

INSERT INTO imagens (tipo, url, id_usuario)
SELECT
  'perfil',
  'https://bg3.wiki/wiki/Special:Redirect/file/Portrait_Gale.png',
  id
FROM usuarios
WHERE nome = 'Gale';

INSERT INTO imagens (tipo, url, id_usuario)
SELECT
  'perfil',
  'https://bg3.wiki/wiki/Special:Redirect/file/Portrait_Lae%27zel.png',
  id
FROM usuarios
WHERE nome = 'Laezel';

INSERT INTO imagens (tipo, url, id_usuario)
SELECT
  'perfil',
  'https://bg3.wiki/wiki/Special:Redirect/file/Portrait_Wyll.png',
  id
FROM usuarios
WHERE nome = 'Wyll';

INSERT INTO imagens (tipo, url, id_usuario)
SELECT
  'perfil',
  'https://bg3.wiki/wiki/Special:Redirect/file/Portrait_Karlach.png',
  id
FROM usuarios
WHERE nome = 'Karlach';

INSERT INTO imagens (tipo, url, id_usuario)
SELECT
  'perfil',
  'https://bg3.wiki/wiki/Special:Redirect/file/Portrait_Minthara.png',
  id
FROM usuarios
WHERE nome = 'Minthara';

INSERT INTO imagens (tipo, url, id_usuario)
SELECT
  'perfil',
  'https://bg3.wiki/wiki/Special:Redirect/file/Portrait_Halsin.png',
  id
FROM usuarios
WHERE nome = 'Halsin';

INSERT INTO imagens (tipo, url, id_usuario)
SELECT
  'perfil',
  'https://bg3.wiki/wiki/Special:Redirect/file/Portrait_Jaheira.png',
  id
FROM usuarios
WHERE nome = 'Jaheira';

INSERT INTO imagens (tipo, url, id_usuario)
SELECT
  'perfil',
  'https://bg3.wiki/wiki/Special:Redirect/file/Portrait_Minsc.png',
  id
FROM usuarios
WHERE nome = 'Minsc';


INSERT INTO imagens (tipo, url, id_usuario)
SELECT
  'perfil',
  './images/QUEM SOMOS/emerson.png',
  id
FROM usuarios
WHERE nome = 'Emerson';

INSERT INTO imagens (tipo, url, id_usuario)
SELECT
  'perfil',
  './images/QUEM SOMOS/simao.png',
  id
FROM usuarios
WHERE nome = 'Simão';

INSERT INTO imagens (tipo, url, id_usuario)
SELECT
  'perfil',
  './images/QUEM SOMOS/bruno.png',
  id
FROM usuarios
WHERE nome = 'Bruno';

INSERT INTO imagens (tipo, url, id_usuario)
SELECT
  'perfil',
  './images/QUEM SOMOS/leandro.png',
  id
FROM usuarios
WHERE nome = 'Leandro';

INSERT INTO imagens (tipo, url, id_usuario)
SELECT
  'perfil',
  './images/QUEM SOMOS/jonatas.png',
  id
FROM usuarios
WHERE nome = 'Jonatas';

INSERT INTO imagens (tipo, url, id_usuario)
SELECT
  'perfil',
  './images/QUEM SOMOS/tatiana.png',
  id
FROM usuarios
WHERE nome = 'Tatiana';

INSERT INTO imagens (tipo, url, id_usuario)
SELECT
  'perfil',
  './images/QUEM SOMOS/cristiany.png',
  id
FROM usuarios
WHERE nome = 'Cristiany';

INSERT INTO imagens (tipo, url, id_usuario)
SELECT
  'perfil',
  './images/QUEM SOMOS/joao.png',
  id
FROM usuarios
WHERE nome = 'João';
