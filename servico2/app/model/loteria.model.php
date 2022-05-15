<?php

class LoteriasModel
{
    CONST URL_BASE_API_LOTERIA = "https://loteriascaixa-api.herokuapp.com/api/";
    CONST LOTERIAS = [
        "MEGASENA"      => "mega-sena",
        "LOTOFACIL"     =>"lotofacil",
        "QUINA"         =>"quina",
        "LOTOMANIA"     =>"lotomania",
        "TIMEMANIA"     =>"timemania",
        "DUPLASENA"     =>"dupla-sena",
        "FEDERAL"       =>"loteria-federal",
        "DIA_DE_SORTE"  =>"dia-de-sorte",
        "SUPER_SETE"    =>"super-sete"
        ];
    
    /**
     * Metodo responsável para buscar dados da loteria
     *
     * @param string|array $nomeLoteria
     * @return array|bool
     */ 
    
    static public function buscarResultado(array|string $nomeLoteria)
    {
        $dados = null;
        if (!in_array($nomeLoteria, self::LOTERIAS)) {
            exit(json_encode(['resposta'=>'Loteria não encontrada'], true));
        }
        try {
            $ch = curl_init(self::URL_BASE_API_LOTERIA.$nomeLoteria."/latest");

            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $dados = curl_exec($ch);

            curl_close($ch);

        } catch (\Throwable $th) {
            throw $th;
        }
        if (!$dados) $dados = ["mensagem" => "Não foi possível realizar a busca dos dados"];
        return $dados;
    }

    /*
     * Metodo responsável para buscar dados da loteria por concurso
     *
     * @param string|array $nomeLoteria
     * @param string|int $concurso
     * @return array|bool
     */ 
    
    static public function buscarResultadoConcurso(int|string $concurso = null, array|string $nomeLoteria)
    {
        $dados = null;
        if (!in_array($nomeLoteria, self::LOTERIAS)) {
            exit(json_encode(['resposta'=>'Loteria não encontrada'], true));
        }
        if (!$concurso) {
            exit(json_encode(['resposta'=>'Concurso não encontrado'], true));
        }
        try {
            $ch = curl_init(self::URL_BASE_API_LOTERIA.$nomeLoteria."/".$concurso);

            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $dados = curl_exec($ch);

            curl_close($ch);
            if (!$dados) {
                $dados = json_encode(["resposta"=>"Concurso não encontrado"]);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
        return $dados;
    }
}
