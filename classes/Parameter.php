<?php
namespace pokemon\classes;
class Parameter {
    protected $familyPoint = null;
    protected $giftPoint = null;
    protected $basePoint = null;

    public function calcParameter ($level, $revise) {
        return intval(intval(((intval(
            $this->familyPoint * 2 + $this->giftPoint + $this->basePoint / 4
        ) * $this->level / 100) + 5)  * $revise));
    }

    public function addBasePoint ()
    {
        $this->basePoint++;
    }

    public function resetBasePoint ()
    {
        $this->basePoint = 0;
    }

    public function setBasePoint($basePoint)
    {
        $this->basePoint = $basePoint;
    }

    public function getBasePoint()
    {
        return $this->basePoint;
    }

    public function setFamilyPoint($familyPoint)
    {
        $this->familyPoint = $familyPoint;
    }

    public function getFamilyPoint()
    {
        return $this->familyPoint;
    }

    public function setGiftPoint($giftPoint)
    {
        $this->giftPoint = $giftPoint;
    }

    public function getGiftPoint()
    {
        return $this->giftPoint;
    }
}
