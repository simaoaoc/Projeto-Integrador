-- ====================================================================
-- 1. APAGAR DADOS ANTIGOS (Para evitar conflitos de IDs nos testes)
-- ====================================================================
SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE TABLE mensagens;
TRUNCATE TABLE conversas;
TRUNCATE TABLE imagens;
TRUNCATE TABLE campanha_itens;
TRUNCATE TABLE tipo_itens;
TRUNCATE TABLE campanhas;
TRUNCATE TABLE ongs;
TRUNCATE TABLE usuarios;
SET FOREIGN_KEY_CHECKS = 1;

-- ====================================================================
-- 2. INSERIR CATEGORIAS / TIPOS DE ITENS (Obrigatórios para as campanhas)
-- ====================================================================
INSERT INTO tipo_itens (nome, descrição, unidade_medida, tamanho) VALUES
('Casaco de Lã', 'Casacos pesados de inverno', 'Unidade', 'G'),
('Moletom Canguru', 'Moletons com capuz', 'Unidade', 'M'),
('Tênis Esportivo', 'Calçados para caminhada/corrida', 'Par', '40'),
('Sapato Infantil', 'Calçados para crianças', 'Par', '28'),
('Manta Antialérgica', 'Cobertores e mantas microfibra', 'Unidade', 'Casal'),
('Meias de Algodão', 'Pacote com pares de meias', 'Par', 'Único'),
('Calça Jeans Masculina', 'Calças jeans conservadas', 'Unidade', '42'),
('Blusa de Frio Infantil', 'Roupas quentes para crianças', 'Unidade', '8');

-- ====================================================================
-- 3. INSERIR 50 UTILIZADORES
-- Nota: Todos usam a senha criptografada correspondente a '123456'
-- ====================================================================
INSERT INTO usuarios (nome, email, cep, senha_hash, ativo) VALUES
('Astarion Szarr', 'astarion.szarr@faerunmail.com', '01001-000', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Shadowheart Shar', 'shadowheart.shar@moonmail.net', '11013-201', '.vCvj6OHhk9SMjEIS3QGSVGaFfam6S4lrZdbtC', 'ativo'),
('Gale Dekarios', 'gale.dekarios@waterdeep.org', '13010-001', '/vU6NrdxWdM.VGBeQtviLukDyAfQU20.GvqcNdOwATe', 'ativo'),
('Laezel Kithrak', 'laezel.kithrak@creche.gith', '12210-000', '/rsZB/oeqi/5LjElO8o2FiR6S7HimIqXrw1PsQ/abaLisszO', 'ativo'),
('Wyll Ravengard', 'wyll.ravengard@baldursgate.gov', '14010-000', '/7xMUberRHYvJL28c7mdFvA7lO3vK59pB17N3q', 'ativo'),
('Karlach Cliffgate', 'karlach.fury@avernus.com', '04533-010', '', 'ativo'),
('Halsin Wood', 'halsin.bear@emeraldgrove.org', '18015-000', '', 'ativo'),
('Minthara Baenre', 'minthara.vengeance@underdark.net', '01310-100', '', 'ativo'),
('Jaheira Harper', 'jaheira.highharper@baldur.org', '11060-001', '', 'ativo'),
('Minsc Stonelord', 'minsc.boo@rashemen.co', '13092-150', '', 'ativo'),
('Emerson Silva', 'emerson@email.com', '06600-000', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Simão Cirilo', 'simao@email.com', '06622-000', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Bruno Castro', 'bruno@email.com', '06611-111', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Leandro Cunha', 'leandro@email.com', '06500-200', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Jonatas Morais', 'jonatas@email.com', '06400-300', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Carlos Souza', 'carlos@outlook.com', '02010-000', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Ana Beatriz', 'anabeatriz@gmail.com', '04005-001', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Marcos Paulo', 'marcos.paulo@hotmail.com', '13020-050', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Julia Martins', 'julia.m@yahoo.com', '11015-002', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Lucas Oliveira', 'lucas.oli@gmail.com', '18020-110', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Fernanda Costa', 'fe.costa@live.com', '05422-030', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Rodrigo Santos', 'rodrigo.santos@gmail.com', '03102-010', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Camila Rodrigues', 'camila.r@outlook.com', '14020-220', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Pedro Henrique', 'pedro.h@gmail.com', '12215-400', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Amanda Lima', 'amanda.lima@yahoo.com', '09010-100', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Gabriel Almeida', 'gabriel.almeida@gmail.com', '17010-050', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Larissa Soares', 'larissa.s@hotmail.com', '15015-300', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Thiago Silva', 'thiago.silva@gmail.com', '08020-000', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Vanessa Rocha', 'vanessa.rocha@live.com', '11700-500', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Leonardo Alves', 'leo.alves@gmail.com', '13400-120', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Beatriz Nuñes', 'bia.nunes@outlook.com', '06700-450', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Daniel Ribeiro', 'daniel.rib@gmail.com', '04101-020', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Patricia Gomes', 'patricia.g@yahoo.com', '01222-010', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Rafael Carvalho', 'rafa.carvalho@gmail.com', '16010-020', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Aline Vieira', 'aline.v@hotmail.com', '09710-150', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Gustavo Borges', 'gustavo.b@gmail.com', '14050-100', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Leticia Dias', 'leticia.dias@live.com', '12245-010', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Felipe Xavier', 'felipe.xav@gmail.com', '18040-200', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Tatiana Silva', 'tatiana.silva@email.com', '06600-111', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Joao Valle', 'joao.valle@email.com', '06633-333', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Matheus Reis', 'matheus.reis@gmail.com', '03540-020', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Sofia Moraes', 'sofia.moraes@outlook.com', '04720-100', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('André Luiz', 'andre.luiz@gmail.com', '11045-200', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Carolina Melo', 'carol.melo@yahoo.com', '13080-010', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Roberto Carlos', 'roberto.c@gmail.com', '01530-001', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Debora Ramos', 'debora.ramos@hotmail.com', '19010-020', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Ricardo Teixeira', 'ricardo.t@gmail.com', '12230-050', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Simone Mendes', 'simone.m@live.com', '06412-010', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Renato Aragao', 'renato.a@gmail.com', '02315-000', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo'),
('Eliana Michael', 'eliana.m@outlook.com', '04510-020', '.6vu9B1jAFHvKOhV4SMAOzdCnOG7hJIIX16eIcZkGS.ly', 'ativo');

-- ====================================================================
-- 4. INSERIR 20 ONGS
-- ====================================================================
INSERT INTO ongs (nome_fantasia, cnpj, cep, site, instagram, whatsapp, status_aprovação) VALUES
('Projeto Roupas para Baldurs Gate', '12.345.678/0001-01', '01001-000', 'www.roupasbg.org', '@roupasbg', '11999990001', 'Aprovada'),
('Casa Solidaria Shadowheart', '12.345.678/0001-02', '11013-201', 'www.shadowheartcasa.org', '@shadowcasa', '13999990002', 'Aprovada'),
('Karlach Aquece Vidas', '12.345.678/0001-03', '04533-010', 'www.karlachaquece.com', '@karlachaquece', '11999990003', 'Aprovada'),
('Rede Solidaria Vale do Sol', '12.345.678/0001-04', '13010-001', 'www.valedosol.org', '@valedosolsolidario', '19999990004', 'Aprovada'),
('Harpistas do Bem Coleta Textile', '12.345.678/0001-05', '11060-001', 'www.harpistasdobem.org', '@harpistasbem', '13999990005', 'Aprovada'),
('ONG Aquecendo Coracoes', '12.345.678/0001-06', '06600-000', 'www.aquecendocoracoes.org', '@aquecendocoracoes', '11988880001', 'Aprovada'),
('Instituto Passos Firmes', '12.345.678/0001-07', '06622-000', 'www.passosfirmes.org', '@inst.passosfirmes', '11988880002', 'Aprovada'),
('Associacao Inverno Sem Frio', '12.345.678/0001-08', '02010-000', 'www.invernosemfrio.org', '@invernosemfrio', '11988880003', 'Aprovada'),
('Amigos do Peito Jandira', '12.345.678/0001-09', '06611-111', 'www.amigosjandira.org', '@amigosjandira', '11988880004', 'Em análise'),
('Corrente do Bem Barueri', '12.345.678/0001-10', '06400-300', 'www.correntebarueri.org', '@correntebarueri', '11988880005', 'Aprovada'),
('ONG Agasalha Sao Paulo', '12.345.678/0001-11', '04005-001', 'www.agasalhasp.org', '@agasalhasp', '11977770001', 'Aprovada'),
('Anjos da Noite Coletas', '12.345.678/0001-12', '13020-050', 'www.anjosdanoite.org', '@anjosdanoite', '19977770002', 'Aprovada'),
('Instituto Pezinho Feliz', '12.345.678/0001-13', '11015-002', 'www.pezinhofeliz.org', '@pezinhofeliz', '13977770003', 'Aprovada'),
('Casa do Caminho Solidaria', '12.345.678/0001-14', '18020-110', 'www.casadocaminho.org', '@casacaminhosolidaria', '15977770004', 'Aprovada'),
('Uniao Pela Dignidade', '12.345.678/0001-15', '05422-030', 'www.uniaodignidade.org', '@uniaodignidade', '11977770005', 'Aprovada'),
('Gesto de Amor Coletas', '12.345.678/0001-16', '03102-010', 'www.gestodeamor.org', '@gesto.amor', '11966660001', 'Em análise'),
('Missao Esperanca Viva', '12.345.678/0001-17', '14020-220', 'www.esperancaviva.org', '@missaoesperancaviva', '16966660002', 'Aprovada'),
('Mãos Estendidas Campinas', '12.345.678/0001-18', '12215-400', 'www.maosestendidas.org', '@maosestendidas', '12966660003', 'Aprovada'),
('Rede de Apoio Social', '12.345.678/0001-19', '09010-100', 'www.redeapoiosocial.org', '@redeapoiosocial', '11966660004', 'Aprovada'),
('Luz do Amanha', '12.345.678/0001-20', '17010-050', 'www.luzdoamanha.org', '@luzamanha', '14966660005', 'Aprovada');

-- ====================================================================
-- 5. INSERIR CAMPANHAS PARA AS ONGS
-- ====================================================================
INSERT INTO campanhas (id_ong, titulo, descrição, status, criado_em) VALUES
(1, 'Campanha do Agasalho Baldurs', 'Ajude a aquecer as noites frias.', 'Aberta', NOW()),
(2, 'Inverno Acolhedor de Shadowheart', 'Doação focada em cobertores e casacos.', 'Aberta', NOW()),
(3, 'Karlach esquenta sua noite', 'Precisamos de roupas pesadas.', 'Aberta', NOW()),
(6, 'Campanha Metropolitana de Jandira', 'Doações gerais de roupas e calçados.', 'Aberta', NOW()),
(7, 'Passos Quentes em Carapicuiba', 'Arrecadação de meias e calçados infantis.', 'Aberta', NOW());

-- ====================================================================
-- 6. ASSOCIAR ITENS ÀS CAMPANHAS (Metas e Arrecadações)
-- ====================================================================
INSERT INTO campanha_itens (id_campanha, id_tipo_item, quantidade_meta, quantidade_arrecadada, observação) VALUES
(1, 1, 100, 20, 'Apenas casacos em bom estado.'),
(1, 3, 50, 10, 'Tênis de corrida preferencialmente.'),
(2, 5, 200, 45, 'Mantas limpas e ensacadas.'),
(3, 2, 80, 15, 'Moletons de qualquer cor.'),
(4, 4, 120, 30, 'Sapatos para crianças de 2 a 10 anos.');

-- ====================================================================
-- 7. BANCO DE IMAGENS CENTRALIZADO (Respeitando a Regra do Simão)
-- ====================================================================
INSERT INTO imagens (tipo, url, id_ong) VALUES
('ong', 'https://i.imgur.com/aI4BfS8.jpeg', 1),
('ong', 'https://i.imgur.com/6D13XUI.jpeg', 2),
('ong', 'https://i.imgur.com/0bY6Lqi.png', 3),
('ong', 'https://i.imgur.com/QZJ7ND0.jpeg', 4),
('ong', 'https://i.imgur.com/AvL9OeT.png', 5);

INSERT INTO imagens (tipo, url, id_usuario) VALUES
('perfil', 'https://images.unsplash.com/photo-1535713875002-d1d0cf377fde', 1),
('perfil', 'https://images.unsplash.com/photo-1494790108377-be9c29b29330', 2);
