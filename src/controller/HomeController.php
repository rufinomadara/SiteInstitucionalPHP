<?php 

namespace Code\Controller;

use Code\View\View;

class HomeController{

  public function index(){
    //cria uma variavel instaciada pela classe view
    $view = new View(view:'site/home.phtml');
    //$view->name = "Antonio Rufino";

    //no return vamos ter o require do arquivo html 
    return $view->render();
  }
}