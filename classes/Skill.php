<?php
namespace pokemon\classes;
class Skill {
    private $name = null;
    /**
     * 属性
     * @var Type
     */
    private $type = null;
    /**
     * 特攻かどうか?
     * @var 1 or 0
     */
    private $special = null;
    private $power = null;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPower($power)
    {
        $this->power = $power;
    }

    public function getPower()
    {
        return $this->power;
    }

    public function setSpecial($special)
    {
        $this->special = $special;
    }

    public function getSpecial()
    {
        return $this->special;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }
}
