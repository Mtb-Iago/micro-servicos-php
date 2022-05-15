<?php
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class NoticiasController
{
    public function __construct() 
    {
        $this->noticiasModel = new NoticiasModel();
    }

    public function buscarNoticias(ServerRequestInterface $request, ResponseInterface $response, array $args): ResponseInterface
    {    
        try {
            $resultado = $this->noticiasModel->buscarNoticias();
            $response->getBody()->write($resultado);

            return $response->withStatus(200)->withHeader('Content-type', 'application/json');
        } catch (\Throwable $th) {
            $response->getBody()->write(throw $th);
            return $response->withStatus(400)->withHeader('Content-type', 'application/json');
        }
    }
}