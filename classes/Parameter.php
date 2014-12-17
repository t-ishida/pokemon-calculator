<?php
namespace pokemon\classes;
class Parameter {
    protected $familyPoint = null;
    protected $giftPoint = 31;
    protected $basePoint = 0;

    public function calcParameter ($level, $revise) {
        return intval(intval(((intval(
            $this->familyPoint * 2 + $this->giftPoint + $this->basePoint / 4
        ) * $level / 100) + 5)  * $revise));
    }

    public function calcBasePoint ($target, $level, $revise) {
        $backUp = $this->basePoint;
        $result = -1;
        for ($i = 0; $i <= 252; $i++) {
            $this->basePoint = $i;
            if ($this->calcParameter($level, $revise) > $target) {
                $result = $i;
                break;
            }
        }
        $this->basePoint = $backUp;
        return $result;
    }

    public function getMax ($level, $revise) {
        $basePoint = $this->getBasePoint();
        $this->basePoint = 252;
        $result = $this->calcParameter($level, $revise);
        $this->basePoint = $basePoint;
        return $result;
    }

    public function getMin ($level, $revise) {
        $basePoint = $this->getBasePoint();
        $this->basePoint = 0;
        $result = $this->calcParameter($level, $revise);
        $this->basePoint = $basePoint;
        return $result;
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
