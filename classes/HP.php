<?php
namespace pokemon\classes;
class HP extends Parameter {
    public function calcParameter($level, $revise)
    {
        return intval(intval(
            $this->familyPoint * 2 + $this->giftPoint + $this->basePoint / 4
        ) * $level / 100) + 10 + $level;
    }

}
