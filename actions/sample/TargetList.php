<?php
/**
 * Sample2.php@pokemon
 * User: ishidatakeshi
 * Date: 2014/12/17
 * Time: 10:45
 */

namespace pokemon\actions\sample;


use pokemon\classes\speed\TargetLoader;
use pokemon\lib\ActionBase;
use pokemon\responses\classes\sample\TargetListView;

class TargetList extends ActionBase {

    public function run()
    {
        return new TargetListView(TargetLoader::load());
    }
}