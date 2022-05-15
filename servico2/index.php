<?php
use Slim\Factory\AppFactory;
header('Access-Control-Allow-Origin:*'); 
header('Access-Control-Allow-Headers:X-Request-With');

header('Access-Control-Allow-Methods: GET, POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
require_once 'loads.php';
$app = AppFactory::create();

$app->get('/', LoteriaController::class . ':buscarResultado');
$app->map(['GET', 'POST'],'/{nomeloteria}', LoteriaController::class . ':buscarResultado');
$app->get("/concurso/{concurso}/{nomeloteria}", LoteriaController::class . ':buscarResultadoConcurso');

try {
    $app->run();
} catch (\Throwable $th) {
    exit(json_encode(["resposta" => "Erro, página não encontrada.."]));
}