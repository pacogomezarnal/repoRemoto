<?php
namespace RC\Controller;

/*
* Router
*/

class Request{

  private $controlador=null;
  private $accion=null;
  private $params=null;

  function __construct(){

  }

    /**
     * Get the value of namespace RC\Controller;
     *
     * @return mixed
     */
    public function getControlador()
    {
        return $this->controlador;
    }

    /**
     * Set the value of namespace RC\Controller;
     *
     * @param mixed controlador
     *
     * @return self
     */
    public function setControlador($controlador)
    {
        $this->controlador = $controlador;

        return $this;
    }

    /**
     * Get the value of Accion
     *
     * @return mixed
     */
    public function getAccion()
    {
        return $this->accion;
    }

    /**
     * Set the value of Accion
     *
     * @param mixed accion
     *
     * @return self
     */
    public function setAccion($accion)
    {
        $this->accion = $accion;

        return $this;
    }

    /**
     * Get the value of Params
     *
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Set the value of Params
     *
     * @param mixed params
     *
     * @return self
     */
    public function setParams($params)
    {
        $this->params = $params;

        return $this;
    }

}
