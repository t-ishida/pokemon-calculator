<?php
namespace pokemon\lib;
abstract class ActionBase {
    private $request = null;
    abstract public function run();
    /**
     * @param null $request
     */
    public function setRequest($request)
    {
        $this->request = $request;
    }

    /**
     * @return null
     */
    public function getRequest()
    {
        return $this->request;
    }

}