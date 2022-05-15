# Execute o servico3

##### Micros-serviço para salvar jogos de loterias.


### Execute o docker:
        sudo docker-compose build
    
### Start o container:
        sudo docker-compose up -d
    
### Entre na bash do container:
        sudo docker exec -it servico3 /bin/bash

###  Faça update do composer no container:
        composer update

###### Caso ocorra erro por falta do github execute na bash do container:
        apt-get install git

###  Rotas de endpoint
###### -Rota para gravar jogos lotéricos
            http://localhost:8003/

###### -Rota para acesso ao phpmyadmin (Acesso ao BD por interface gráfica)
            http://localhost:8083
###### -Atenção, importante importar o BD servico3 para o mysql, para realizar basta acessar o phpmyadmin clicar em novo banco de dados e importar o arquivo servico3.sql.

##### Iago Oliveira