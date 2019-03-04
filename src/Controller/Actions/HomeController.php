<?php
namespace RC\Controller\Actions;

use RC\Core\Controller;

/*
* HomeController
*/

class HomeController implements Controller
{

  function __construct()
  {
    echo "HomeController<br>";
  }

  function index($request){
    echo "index";
  }
  function contacto($request){
    echo "contacto";
  }
}
