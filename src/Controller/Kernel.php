<?php
namespace RC\Controller;

/*
* Kernel
*/

class Kernel{
  private $router;
  private $request;

  function __construct(){
    $this->router=new Router();
    $this->request=new Request();
  }

  public function start_kernel(){
    $this->router->start_router();
    $this->router->parse_route($this->request);
  }
}
?>
