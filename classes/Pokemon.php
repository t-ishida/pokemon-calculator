<?php
namespace pokemon;
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

    function __construct($id = null)
    {
        $this->level = 1;
        $this->hp =  new HP();
        $this->attack = new Parameter();
        $this->defence = new Parameter();
        $this->specialAttack = new Parameter();
        $this->specialDefence = new Parameter();
        $this->speed = new Parameter();
        if ($id) {
            $this->load($id);
        }
    }

    public function load ($id)
    {
        // TODO: 種族値をなんらかの手段でロードします。仮置きでオンバーンにしておきます。
        $this->setName('オンバーン');
        $this->hp->setFamilyPoint(85);
        $this->attack->setFamilyPoint(70);
        $this->defence->setFamilyPoint(80);
        $this->specialAttack->setFamilyPoint(97);
        $this->specialAttack->setFamilyPoint(80);
        $this->specialAttack->setFamilyPoint(123);
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

    /**
     * @param \pokemon\Type $skills
     */
    public function setSkills($skills)
    {
        $this->skills = $skills;
    }

    /**
     * @return \pokemon\Type
     */
    public function getSkills()
    {
        return $this->skills;
    }

    /**
     * @param \pokemon\Type $types
     */
    public function setTypes($types)
    {
        $this->types = $types;
    }

    /**
     * @return \pokemon\Type
     */
    public function getTypes()
    {
        return $this->types;
    }

}
