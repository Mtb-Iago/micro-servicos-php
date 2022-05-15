# Serviço 1
###### Esse serviço consome dados via RSS do site G1.globo.com e retorna um json com todas as infos.

##### Micros-serviço para busca de noticas das loterias caixa.

## Execute o servico1
### Execute o docker:
        sudo docker-compose build
    
### Start o container:
        sudo docker-compose up -d
    
### Entre na bash do container:
        sudo docker exec -it servico1 /bin/bash

###  Faça update do composer no container:
        composer update

###### Caso ocorra erro por falta do github execute na bash do container:
        apt-get install git

###  Rotas de endpoint
###### -Rota para noticias
            http://localhost:8001/

###### -Url da globo.com para busca das notícias em rss
           https://g1.globo.com/rss/g1/loterias/

##### Iago Oliveira