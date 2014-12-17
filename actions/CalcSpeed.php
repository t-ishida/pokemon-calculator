<?php
namespace pokemon\actions;
use pokemon\classes\Repository;
use \pokemon\classes\speed\TargetLoader;
use \pokemon\classes\temperament\Temperament;
use \pokemon\lib\ActionBase;
use pokemon\responses\classes\CalcSpeedView;

class CalcSpeed extends ActionBase {
    private $repository = null;
    public function __construct () {
        $this->repository = new Repository();
    }

    public function run ()
    {
        $targets = TargetLoader::load();
        $id = null;
        if (!isset($this->getRequest()['id'])) {
            // とりあえずオンバーン固定です
            $id = 715;
        } else {
            $id = $this->getRequest()['id'];
        }
        $pokemon = $this->repository->build($id);

        // Lv50 ということにします
        $pokemon->setLevel(50);

        // とりあえず "おくびょう" です
        $pokemon->setTemperament(Temperament::valueOf('COWARDLY'));

        return new CalcSpeedView($pokemon, $targets);
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
