<?php
namespace RC\Controller\Actions;

use RC\Core\Controller;

/*
* BlogController
*/

/**
 *
 */
class BlogController implements Controller
{

  function __construct()
  {
    echo "BlogController";
  }

  function index($request){
    echo "index";
  }

  function list($request){
    echo "list";
  }
}
