import mysql.connector
import requests
import pandas as pd
from sqlalchemy import create_engine

conexao = mysql.connector.connect(
    host = 'localhost',
    user = 'root',
    password = 'bananas',
    database = 'pi'
)

cursor = conexao.cursor(dictionary=True)
query = "SELECT * FROM ongs;"
cursor.execute(query)
ongs = pd.DataFrame(cursor.fetchall())

# Obter endereços das ONGs no ViaCEP

def retorna_end(cep):
    end = requests.get(f"https://viacep.com.br/ws/{cep}/json")
    return end.text

ongs['endereco'] = ongs['cep'].apply(retorna_end)

print(ongs)



# Inserir endereços no DB
engine = create_engine('mysql+mysqlconnector://root:bananas@localhost/pi')
ongs[['id_ong', 'endereco']].to_sql('enderecos', con=engine, if_exists='append', index=False)


# Usar ORS para obter lat e lon


# Calcular distâncias


# Inserir distâncias no DB
