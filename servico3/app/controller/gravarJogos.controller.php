<?php
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class GravarJogosController
{
    public function __construct() 
    {
        $this->gravarJogosModel = new GravarJogosModel();
    }

    public function gravarJogos(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {    
        try {
            $resultado = $this->gravarJogosModel->gravarJogos($request);
            $response->getBody()->write($resultado);

            return $response->withStatus(200)->withHeader('Content-type', 'application/json');
        } catch (\Throwable $th) {
            $response->getBody()->write(throw $th);
            return $response->withStatus(400)->withHeader('Content-type', 'application/json');
        }
    }
    public function listarJogos(ServerRequestInterface $request, ResponseInterface $response, array $args)
    {
        $resultado = $this->gravarJogosModel->listarJogos();
        $response->getBody()->write($resultado);
        return $response->withStatus(200)->withHeader('Content-type', 'application/json');
    }
}