<?php
/**
 * Sample1.php@pokemon
 * User: ishidatakeshi
 * Date: 2014/12/16
 * Time: 18:29
 */

namespace pokemon\actions\sample;


use pokemon\classes\Pokemon;
use pokemon\classes\Repository;
use pokemon\classes\temperament\Temperament;
use pokemon\lib\ActionBase;
use pokemon\responses\classes\sample\Sample1View;

class Sample1 extends ActionBase {

    private $repository = null;

    function __construct()
    {
        $this->repository = new Repository();
    }

    public function run()
    {
        $pokemon = $this->repository->build(715);
        $pokemon->setLevel(50);
        $pokemon->setTemperament(Temperament::valueOf('COWARDLY'));
        return new Sample1View($pokemon);
    }

    /**
     * @param null $repository
     */
    public function setRepository($repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return null
     */
    public function getRepository()
    {
        return $this->repository;
    }

}