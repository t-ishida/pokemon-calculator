<?php
/**
 * TargetListView.php@pokemon
 * User: ishidatakeshi
 * Date: 2014/12/17
 * Time: 10:46
 */

namespace pokemon\responses\classes\sample;


use pokemon\lib\Response;

class TargetListView extends Response {
    private $targetList = null;
    public function __construct ($targetList) {
        $this->targetList = $targetList;
    }
    /**
     * @param null $targetList
     */
    public function setTargetList($targetList)
    {
        $this->targetList = $targetList;
    }

    /**
     * @return null
     */
    public function getTargetList()
    {
        return $this->targetList;
    }

}