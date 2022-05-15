<?php

use Psr\Http\Message\ServerRequestInterface;

class GravarJogosModel
{

    /**
     * Método para conexão com BD
     * @author Iago Oliveira <iagooliveira09@outlook.com>
     * @return object|boolean
     */
    static public function conexao() {
        try {
            $pdo = new \PDO("mysql:dbname=servico3;host=db;charset=utf8", "root", "root");
            return $pdo;
        }
        catch (\Exception $e) {
            echo "Erro ao conectar com o banco de dados! " . $e;
            return false;
        }
    }
    /**
     * Metodo responsável para buscar noticias das loterias
     * @author Iago <iagooliveira09@outlook.com>
     * @return array|string
     */ 
    
    static public function gravarJogos(ServerRequestInterface $request)
    {
        $conn = self::conexao();
        
        try {
            $params = (array)$request->getParsedBody();

            if ($params) {
                $campo_loteria = @$params['campo_loteria'];
                $campo1 = @$params['campo1'];
                $campo2 = @$params['campo2'];
                $campo3 = @$params['campo3'];
                $campo4 = @$params['campo4'];
                $campo5 = @$params['campo5'];
                $campo6 = @$params['campo6'];
                $campo7 = @$params['campo7'];
                $campo8 = @$params['campo8'];
                $campo9 = @$params['campo9'];
                $campo10 = @$params['campo10'];
                $campo11 = @$params['campo11'];
                $campo12 = @$params['campo12'];
                $campo13 = @$params['campo13'];
                $campo14 = @$params['campo14'];
                $campo15 = @$params['campo15'];

            
                $res = $conn->prepare("INSERT INTO jogos_loterias (loteria, campo1, campo2, campo3, campo4, campo5, campo6, campo7, campo8, campo9, campo10, campo11, campo12, campo13, campo14, campo15)
                                                        VALUES (:campo_loteria, :campo1, :campo2, :campo3, :campo4, :campo5, :campo6, :campo7, :campo8, :campo9, :campo10, :campo11, :campo12, :campo13, :campo14, :campo15)");
                $res->bindValue(':campo_loteria', @$campo_loteria);
                $res->bindValue(':campo1', @$campo1);
                $res->bindValue(':campo2', @$campo2);
                $res->bindValue(':campo3', @$campo3);
                $res->bindValue(':campo4', @$campo4);
                $res->bindValue(':campo5', @$campo5);
                $res->bindValue(':campo6', @$campo6);
                $res->bindValue(':campo7', @$campo7);
                $res->bindValue(':campo8', @$campo8);
                $res->bindValue(':campo9', @$campo9);
                $res->bindValue(':campo10', @$campo10);
                $res->bindValue(':campo11', @$campo11);
                $res->bindValue(':campo12', @$campo12);
                $res->bindValue(':campo13', @$campo13);
                $res->bindValue(':campo14', @$campo14);
                $res->bindValue(':campo15', @$campo15);
                $res->execute();


                    return json_encode(["resposta" => "sucesso", "mensagem" => "gravado com sucesso"]);
            }
        } catch (\Throwable $th) {
            echo "aaaaaaqui";
            throw new($th);
        }
        return json_encode(["resposta" => "erro2", "mensagem" => "Não foi possível gravar o registro"]);
    }  
    static public function listarJogos () {
        try {
            $conn = self::conexao();
            $res = $conn->query("SELECT * FROM jogos_loterias");
            $res->execute();
            $return_data = $res->fetchAll(\PDO::FETCH_ASSOC);
            return json_encode($return_data);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
