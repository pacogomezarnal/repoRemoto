<?php
namespace RC\Controller;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

/*
* Kernel
*/

class Kernel{
  private $router;
  private $request;
  private $logger;

  function __construct(){
    $this->router=new Router();
    $this->request=new Request();
    // Create the logger
    $this->logger = new Logger('rc');
    $this->logger->pushHandler(new StreamHandler(__DIR__.'/../../var/log/rc.log', Logger::DEBUG));
    $this->logger->info('Kernel ha sido lanzado');
  }

  public function start_kernel(){
    $this->router->start_router();
    $this->router->parse_route($this->request);
    $this->logger->info('Ruta solicitada:',
      array('Controlador'=>$this->request->getControlador(),
            'Accion'=>$this->request->getAccion(),
            'Params'=>$this->request->getParams())
          );
    $this->start_action();
  }

  private function start_action(){
    $controllerName=$this->request->getControlador();
    if(!$controllerName){
      $controller = new Actions\HomeController();
    }
  }
}
?>
