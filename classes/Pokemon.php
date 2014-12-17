<?php
namespace pokemon\classes;
use pokemon\classes\Parameter;
use pokemon\classes\temperament\Temperament;

class Pokemon {
    // level
    private $name = null;
    private $level = null;
    private $hp = null;
    private $attack = null;
    private $defence = null;
    private $specialAttack = null;
    private $specialDefence = null;
    private $speed = null;


    /**
     * 性格
     * @var Temperament
     */
    private $temperament = null;

    /**
     * 属性
     * @var array
     */
    private $types = null;

    /**
     * 技
     * @var array
     */
    private $skills = null;

    function __construct()
    {
        $this->level = 1;
        $this->hp =  new HP();
        $this->attack = new Parameter();
        $this->defence = new Parameter();
        $this->specialAttack = new Parameter();
        $this->specialDefence = new Parameter();
        $this->speed = new Parameter();
    }

    public function getHpValue ()
    {
        return $this->hp->calcParameter($this->level,0);
    }

    public function getAttackValue ()
    {
        return $this->attack->calcParameter(
            $this->level,
            $this->temperament->getAttackReviseBudget()
        );
    }

    public function getDefenceValue ()
    {
        return $this->defence->calcParameter(
            $this->level,
            $this->temperament->getDefenceReviseBudget()
        );
    }

    public function getSpecialAttackValue ()
    {
        return $this->specialAttack->calcParameter(
            $this->level,
            $this->temperament->getSpecialAttackReviseBudget()
        );
    }

    public function getSpecialDefenceValue ()
    {
         return $this->specialDefence->calcParameter(
             $this->level,
             $this->temperament->getSpecialDefenceReviseBudget()
        );
    }

    public function getSpeedValue ()
    {
        return $this->speed->calcParameter(
            $this->level,
            $this->temperament->getSpeedReviseBudget()
        );
    }

    public function getMaxSpeedValue ()
    {
        return $this->speed->getMax(
            $this->level,
            $this->temperament->getSpeedReviseBudget()
        );
    }

    public function calcTargetSpeed ($target)
    {
        return $this->speed->calcBasePoint(
            $target,
            $this->level,
            $this->temperament->getSpeedReviseBudget()
        );
    }


    public function levelUp ()
    {
        $this->level++;
    }

    /// 以下、ただのgetter,setter
    public function setTemperament($temperament)
    {
        $this->temperament = $temperament;
    }

    public function getTemperament()
    {
        return $this->temperament;
    }

    public function setAttack($attack)
    {
        $this->attack = $attack;
    }

    public function getAttack()
    {
        return $this->attack;
    }

    public function setDefence($defence)
    {
        $this->defence = $defence;
    }

    public function getDefence()
    {
        return $this->defence;
    }

    public function setHp($hp)
    {
        $this->hp = $hp;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function setLevel($level)
    {
        $this->level = $level;
    }

    public function getLevel()
    {
        return $this->level;
    }

    public function setSpecialAttack($specialAttack)
    {
        $this->specialAttack = $specialAttack;
    }

    public function getSpecialAttack()
    {
        return $this->specialAttack;
    }

    public function setSpecialDefence($specialDefence)
    {
        $this->specialDefence = $specialDefence;
    }

    public function getSpecialDefence()
    {
        return $this->specialDefence;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return null|Parameter
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSkills($skills)
    {
        $this->skills = $skills;
    }

    public function getSkills()
    {
        return $this->skills;
    }

    public function setTypes($types)
    {
        $this->types = $types;
    }

    public function getTypes()
    {
        return $this->types;
    }
}
