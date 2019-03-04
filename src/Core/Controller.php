<?php
namespace RC\Core;

use RC\Controller\Request;
use RC\Controller\Response;

/*
* Controller
*
*/
class Controller implements ControllerInterface
{

  function __construct()
  {

  }

  function index(Request $request){
    return $this->render("");
  }

  function render($vista,$layout=null){
    return new Response();
  }
}
