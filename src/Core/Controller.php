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
    return $this->render("home/index");
  }

  function render($vista,$layout=null){
    ob_start();
    require(__DIR__."/../Views/".$vista.".php");
    $content_body=ob_get_clean();
    if($layout==null){
      ob_start();
      require(__DIR__."/../Views/base.php");
      $html_content=ob_get_clean();
    }
    $response=new Response();
    $response->setContent($html_content);
    return $response;
  }
}
