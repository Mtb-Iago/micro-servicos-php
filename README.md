# Execute os containers docker todos orquestrados pelo docker-compose

##### Micros-serviço atividade avaliativa sistemas distribuidos.


### Execute o docker:
        sudo docker-compose build
    
### Start os containers:
        sudo docker-compose up -d
    
### Entre na bash do container:
        sudo docker exec -it servico1 /bin/bash
        sudo docker exec -it servico2 /bin/bash
        sudo docker exec -it servico3 /bin/bash
      
      - para cada bash se deve seguir os passos:
        *instalar as dependecias com o composer php
        *instalar caso necessário o git para completar a instalação das libs do framework slimphp
###  Faça update do composer no container:
        composer update

###### Caso ocorra erro por falta do github execute na bash do container:
        apt-get install git

###  Rotas de endpoint

###### -Rota para noticias [SERVICO 1]
            http://localhost:8001/

###### -Rota para último resultado [SERVICO 2]
            http://localhost:8002/{nome_da_loteria} 

###### -Rota para resultado do concurso de uma loteria [SERVICO 2]
            http://localhost:8002/concurso/{numero_concurso}/{nome_loteria}

###### -Rota para gravar jogos lotéricos [SERVICO 3]
            http://localhost:8003/

###### -Rota para listar jogos salvos [SERVICO 3]
            http://localhost:8003/


###### -Rota para acesso ao phpmyadmin [Acesso ao BD por interface gráfica]
            http://localhost:8083/
###### -Credênciais para acesso ao BD
            user: root
            pass: root

###### -Acessar o cliente.html [CLIENTE QUE CONSOME OS SERVICOS]
            Basta abrir o arquivo cliente.html no navegador.


##### Iago Oliveira