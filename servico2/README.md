# Execute o servico2

##### Micros-serviço para busca de resultados das loterias caixa.


### Execute o docker:
        sudo docker-compose build
    
### Start o container:
        sudo docker-compose up -d
    
### Entre na bash do container:
        sudo docker exec -it servico2 /bin/bash

###  Faça update do composer no container:
        composer update

###### Caso ocorra erro por falta do github execute na bash do container:
        apt-get install git

###  Rotas de endpoint
###### -Rota para último resultado
            http://localhost:8002/{nome_da_loteria} 
###### -Rota para resultado do concurso de uma loteria
            http://localhost:8002/concurso/{numero_concurso}/{nome_loteria}

###### -Url para api fornecedoras dos dados sobre resultados lotericos
            https://loteriascaixa-api.herokuapp.com/api/

##### Iago Oliveira