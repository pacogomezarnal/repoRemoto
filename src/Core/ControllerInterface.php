<?php
namespace RC\Core;

use RC\Controller\Request;

/*
* Controller interface
*
*/
interface ControllerInterface
{
  public function index(Request $request);
  public function render($vista,$layout);
}
