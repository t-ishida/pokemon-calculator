<?php
/**
 * Targets.php@pokemon
 * User: ishidatakeshi
 * Date: 2014/03/17
 * Time: 0:30
 */

namespace pokemon\classes\speed;


class Target {
    private $speed = null;
    private $name = null;

    /**
     * @param null $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return null
     */
    public function getSpeed()
    {
        return $this->speed;
    }
}