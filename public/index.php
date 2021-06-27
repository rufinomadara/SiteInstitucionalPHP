<?php

require __DIR__ . '/../vendor/autoload.php';

//use Code\Contoller\pageController;

//informações sobre as requisições que estão sendo feitas
//$url = substr($_SERVER['REQUEST_URI'], start:1);
//Função que transforma uma string em array e remove os caracter e armazena o que sobraram

//$url = explode(delimiter: '/', $url);
$url = substr($_SERVER['REQUEST_URI'], 1);
$url = explode('/', $url);

//se "url" existi a casa 0 ele pega a propria casa 0 e se ja existi um valor ele mostra a prórpia page, senão existi coloca default "page"
$controller = isset($url[0]) && $url[0] ? $url[0] : 'page';
$action     = isset($url[0]) && $url[0] ? $url[0] : 'index';

//concatena o que ta sendo passado com o sufixo "controller"
$controller = "Code\Controller\\". ucfirst($controller).'Controller';



//var_dump($url);
//print 'Controller Default: ' .$controller;
//print '<br>Método Default'.$action;


//função que executa qualquer função ou método
$response = call_user_func_array([new $controller, $action], []);

print $response;

//$execute = new $controller();
//print $execute->index();