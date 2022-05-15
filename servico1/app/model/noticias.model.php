<?php

class NoticiasModel
{
    CONST URL_BASE_API_LOTERIA = "https://g1.globo.com/rss/g1/loterias/";
    /**
     * Metodo responsável para buscar noticias das loterias
     * @author Iago <iagooliveira09@outlook.com>
     * @return array|string
     */ 
    
    static public function buscarNoticias()
    {
        
        try {
            $ch = curl_init(self::URL_BASE_API_LOTERIA);

            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
            $dados = curl_exec($ch);

            curl_close($ch);

        } catch (\Throwable $th) {
            throw $th;
        }
        $dados = simplexml_load_string($dados,"SimpleXMLElement",LIBXML_NOCDATA);
        if (!$dados) $dados = ["mensagem"=>"Não foi possível realizar a busca dos dados"];
        //echo ($dados);
        return json_encode($dados);
    }    
}
