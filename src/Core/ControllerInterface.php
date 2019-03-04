<?php
namespace RC\Core;

/*
* Controller interface
*
*/
interface ControllerInterface
{
  public function index(Request $request);
  public function render($vista,$layout);
}
