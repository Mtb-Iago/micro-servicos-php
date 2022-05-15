<?php
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class LoteriaController
{
    private $loteriaModel;
    public function __construct() 
    {
        $this->loteriaModel = new LoteriasModel();
    }

    public function buscarResultado(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {    
        if (!@$args['nomeloteria']) 
        {
            $response->getBody()->write(json_encode(['resposta'=>'Paramêtro ou url incorreto'], true));
            return $response->withStatus(404)->withHeader('Content-type', 'application/json');
        } 
        
        $resultado = $this->loteriaModel->buscarResultado($args['nomeloteria']);
        if (!$resultado) $resultado = ["Dados não disponiveís!"];
        $response->getBody()->write($resultado);
        return $response->withStatus(200)->withHeader('Content-type', 'application/json');
    }

    public function buscarResultadoConcurso(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {    
        if (!@$args['concurso']) 
        {
            $response->getBody()->write(json_encode(['resposta'=>'Paramêtro ou url incorreto'], true));
            return $response->withStatus(404)->withHeader('Content-type', 'application/json');
        } 
        
        $resultado = $this->loteriaModel->buscarResultadoConcurso($args['concurso'], $args['nomeloteria']);
        if (!$resultado) $resultado = ["Dados não disponiveís!"];
        $response->getBody()->write($resultado);
        return $response->withStatus(200)->withHeader('Content-type', 'application/json');
            
    }
}