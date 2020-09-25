<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require './vendor/autoload.php';

$app = new \Slim\App();
$container = $app->getContainer();

$app->get('/', function ($request, $response, $args) {
    $jsonResponse = array("message" => "Hello World from Slim Framework");
    return $response->withHeader('Content-type', 'application/json')->withJson($jsonResponse, 200);
});

$app->get('/api/test', function (Request $request, Response $response) {
    $jsonResponse = array("message" => "Request API");
    return $response->withHeader('Content-type', 'application/json')->withJson($jsonResponse, 200);
});

$app->run();
