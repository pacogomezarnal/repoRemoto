<?php
namespace RC\Controller;

/*
* Router
*/

class Router{
  private $url=null;
  //Se moveria al CONFIG
  private const URL_START_DELETE="/repoCompartido/public/";
  function __construct(){

  }
  public function start_router(){
    $this->url =$_SERVER['REQUEST_URI'];
  }

  public function parse_route($request){
    //Eliminar la parte inicial del URI
    $this->url=str_replace($this::URL_START_DELETE,"",$this->url);
    $explode_url=explode("/",$this->url);
    if(count($explode_url)==1){
      $request->setControlador($explode_url[0]);
      $request->setAccion("index");
    }elseif(count($explode_url)==2){
      $request->setControlador($explode_url[0]);
      $request->setAccion($explode_url[1]);
    }elseif(count($explode_url)>2){
      $request->setControlador($explode_url[0]);
      $request->setAccion($explode_url[1]);
      $request->setParams(array_slice($explode_url,2));
    }
  }
}
