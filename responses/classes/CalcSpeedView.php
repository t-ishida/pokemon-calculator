<?php
/**
 * CalcSpeedView.php@pokemon
 * User: ishidatakeshi
 * Date: 2014/12/16
 * Time: 18:20
 */
namespace pokemon\responses\classes;

use pokemon\lib\Response;

class CalcSpeedView extends Response {
    private $pokemon = null;
    private $targetList = null;

    function __construct($pokemon, $target)
    {
        $this->pokemon = $pokemon;
        $this->targetList = $target;
    }

    /**
     * @param null $pokemon
     */
    public function setPokemon($pokemon)
    {
        $this->pokemon = $pokemon;
    }

    /**
     * @return null
     */
    public function getPokemon()
    {
        return $this->pokemon;
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