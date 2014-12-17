<?php
/**
 * Sample1View.php@pokemon
 * User: ishidatakeshi
 * Date: 2014/12/16
 * Time: 18:30
 */

namespace pokemon\responses\classes\sample;


use pokemon\lib\Response;

class Sample1View extends Response {
    private $pokemon = null;
    public function __construct ($pokemon)
    {
        $this->pokemon = $pokemon;
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

    public function resolveName()
    {
        return 'pokemon\responses\templates\sample\SampleView';
    }
}