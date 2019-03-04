<?php
<?php
namespace RC\Controller;

/*
* Response
*/

class Response{
    private $content;

    function __construct(){
      $this->content="";

    /**
     * Get the value of <?php
     *
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set the value of <?php
     *
     * @param mixed content
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

}
