import mysql.connector
import requests
import pandas as pd
from sqlalchemy import create_engine
from urllib.parse import quote
import json

ORS_API_KEY = 'eyJvcmciOiI1YjNjZTM1OTc4NTExMTAwMDFjZjYyNDgiLCJpZCI6ImZkYTJmYWIyMTIzNDRmOWE4YzljMGZiMGFmNDAwMjU3IiwiaCI6Im11cm11cjY0In0=';

q1 = """
SELECT
    id_usuario,
    endereco
FROM enderecos 
WHERE 
    id_usuario IS NOT NULL 
"""

q2 = """
SELECT
    id_ong,
    endereco
FROM enderecos 
WHERE 
    id_ong IS NOT NULL 
"""

conexao = mysql.connector.connect(
    host = 'localhost',
    user = 'root',
    password = 'bananas',
    database = 'pi'
)

def get_coordinates(endereco):
    e1 = json.loads(endereco)
    
    c1 = [
        e1.get('logradouro', ''),
        e1.get('bairro', ''),
        e1.get('localidade', ''),
        e1.get('uf', ''),
        'Brasil'
    ]
    
    t1 = ', '.join(filter(None, c1))
    url = "https://api.openrouteservice.org/geocode/search"
    p1 = {'api_key' : ORS_API_KEY, 'text' : t1 }
    r1 = requests.get(url, params=p1)
    
    if r1.status_code == 200:
        d1 = r1.json()
        coor = d1['features'][0]['geometry']['coordinates']
        print(coor)
        return coor[0], coor[1]
    else:
        print(f"Erro {resposta.status_code}: {resposta.text}")
        data = None
    
engine = create_engine('mysql+mysqlconnector://root:bananas@localhost/pi')

cursor = conexao.cursor(dictionary=True)
cursor.execute(q1)
usuarios = pd.DataFrame(cursor.fetchall())
coor = usuarios['endereco'].apply(get_coordinates)
usuarios['lon'] = coor.str[0]
usuarios['lat'] = coor.str[1]
cols = ['id_usuario', 'lon', 'lat']
usuarios[cols].to_sql('coordenadas', con=engine, if_exists='append', index=False)

cursor = conexao.cursor(dictionary=True)
cursor.execute(q2)
ongs = pd.DataFrame(cursor.fetchall())
coor = ongs['endereco'].apply(get_coordinates)
ongs['lon'] = coor.str[0]
ongs['lat'] = coor.str[1]
cols = ['id_ong', 'lon', 'lat']
ongs[cols].to_sql('coordenadas', con=engine, if_exists='append', index=False)








