<?php
namespace pokemon\actions;
use pokemon\classes\speed\TargetLoader;
use pokemon\classes\temperament\Temperament;
use pokemon\lib\ActionBase;
use pokemon\Pokemon;

class CalcSpeed extends ActionBase
{
    public function run ()
    {
        $targets = TargetLoader::load();

        // とりあえずオンバーン固定です
        $pokemon = new Pokemon();

        // Lv50 ということにします
        $pokemon->setLevel(50);

        // とりあえず "おくびょう" です
        $pokemon->setTemperament(Temperament::valueOf('COWARDLY'));
        return array (
            'pokemon' => $pokemon,
            'targets' => $targets,
        );
    }
}