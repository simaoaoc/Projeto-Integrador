<?php
$em = 'astarion.szarr@faerunmail.com';
$stmt = $conexao->prepare("
with coor AS (
SELECT
	lon as lon,
	lat as lat
FROM usuarios u
LEFT JOIN coordenadas c
	ON c.id_usuario =  u.id
WHERE email = ?
LIMIT 1
)
SELECT
	o.id_ong,
	i.url,
	o.whatsapp,
	o.instagram,
	o.nome_fantasia,
	ROUND(
    6371 * 2 * ASIN(
        SQRT(
            POWER(SIN(RADIANS(co.lat - c.lat) / 2), 2) +
            COS(RADIANS(c.lat)) *
            COS(RADIANS(co.lat)) *
            POWER(SIN(RADIANS(co.lon - c.lon) / 2), 2)
        )
    ), 1) AS distancia
FROM ongs o
LEFT JOIN coordenadas co
	ON co.id_ong = o.id_ong
LEFT JOIN imagens i
	ON i.id_ong = o.id_ong
CROSS JOIN coor c
ORDER BY distancia;
");

//$em = 'astarion.szarr@faerunmail.com';

$stmt->bind_param('s', $_SESSION['email']);
$stmt->execute();
$result = $stmt->get_result();

$dadosOngs = $result->fetch_all(MYSQLI_ASSOC);

