<?php
namespace pokemon\temperament;
class Temperament extends \EnumBase{
    public function getAttackReviseBudget () {
        return 1.0;
    }
    public function getDefenceReviseBudget () {
        return 1.0;
    }
    public function getSpecialAttackReviseBudget () {
        return 1.0;
    }
    public function getSpecialDefenceReviseBudget () {
        return 1.0;
    }
    public function getSpeedReviseBudget () {
        return 1.0;
    }
}
/**
 * いじっぱり
 */
class Obstinacy extends Temperament {
    const KEY = 'OBSTINACY';
    const VALUE = 1;

    public function getAttackReviseBudget()
    {
        return 1.1;
    }

    public function getSpecialAttackReviseBudget()
    {
        return 0.9;
    }
}

/**
 * うっかり
 */
class Inadvertently extends Temperament {
    const KEY = 'INADVERTENTLY';
    const VALUE = 2;

    public function getSpecialAttackReviseBudget()
    {
        return 1.1;
    }

    public function getSpecialDefenceReviseBudget()
    {
        return 0.9;
    }
}

/**
 * おくびょう
 */
class Cowardly extends Temperament {
    const KEY = 'COWARDLY';
    const VALUE = 3;

    public function getAttackReviseBudget()
    {
        return 0.9;
    }

    public function getSpeedReviseBudget()
    {
        return 1.1;
    }
}

/**
 * おだやか
 */
class Calm extends Temperament {
    const KEY = 'CALM';
    const VALUE = 4;

    public function getAttackReviseBudget()
    {
        return 0.9;
    }

    public function getSpecialDefenceReviseBudget()
    {
        return 1.1;
    }
}

/**
 * おっとり
 */
class Unfussy extends Temperament {
    const KEY = 'UNFUSSY';
    const VALUE = 5;

    public function getDefenceReviseBudget()
    {
        return 0.9;
    }

    public function getSpecialAttackReviseBudget()
    {
        return 1.1;
    }

}

/**
 * おとなしい
 */
class Meek extends Temperament {
    const KEY = 'MEEK';
    const VALUE = 6;

    public function getDefenceReviseBudget()
    {
        return 0.9;
    }

    public function getSpecialDefenceReviseBudget()
    {
        return 1.1;
    }
}


/**
 * さびしがり
 */
class Lonely extends Temperament {
    const KEY = 'LONELY';
    const VALUE = 7;

    public function getAttackReviseBudget()
    {
        return 1.1;
    }

    public function getDefenceReviseBudget()
    {
        return 0.9;
    }
}

/**
 * 慎重
 */
class Prudence extends Temperament {
    const KEY = 'PRUDENCE';
    const VALUE = 8;

    public function getSpecialAttackReviseBudget()
    {
        return 0.9;
    }

    public function getSpecialDefenceReviseBudget()
    {
        return 1.1;
    }
}

/**
 * ずぶとい
 */
class Zubutoi extends Temperament {
    const KEY = 'ZUBUTOI';
    const VALUE = 9;

    public function getAttackReviseBudget()
    {
        return 0.9;
    }

    public function getDefenceReviseBudget()
    {
        return 1.1;
    }
}

/**
 * せっかち
 */
class Impatient extends Temperament {
    const KEY = 'IMPATIENT';
    const VALUE = 10;

    public function getDefenceReviseBudget()
    {
        return 0.9;
    }

    public function getSpeedReviseBudget()
    {
        return 1.1;
    }
}

/**
 * なまいき
 */
class Saucy extends Temperament {
    const KEY = 'SAUCY';
    const VALUE = 11;

    public function getSpecialDefenceReviseBudget()
    {
        return 1.1;
    }

    public function getSpeedReviseBudget()
    {
        return 0.9;
    }
}


/**
 * 能天気
 */
class HappyGoLucky extends Temperament {
    const KEY = 'HAPPYGOLUCKY';
    const VALUE = 12;

    public function getDefenceReviseBudget()
    {
        return 1.1;
    }

    public function getSpecialDefenceReviseBudget()
    {
        return 0.9;
    }
}

/**
 * のんき
 */
class Lightheartedness extends Temperament {
    const KEY = 'LIGHTHEARTEDNESS';
    const VALUE = 13;

    public function getDefenceReviseBudget()
    {
        return 1.1;
    }

    public function getSpeedReviseBudget()
    {
        return 0.9;
    }
}

/**
 * ひかえめ
 */
class Moderation extends Temperament {
    const KEY = 'MODERATION';
    const VALUE = 14;

    public function getSpecialAttackReviseBudget()
    {
        return 1.1;
    }

    public function getAttackReviseBudget()
    {
        return 0.9;
    }
}

/**
 * むじゃき
 */
class Innocence extends Temperament {
    const KEY = 'INNOCENCE';
    const VALUE = 15;

    public function getSpecialDefenceReviseBudget()
    {
        return 0.9;
    }

    public function getSpeedReviseBudget()
    {
        return 1.1;
    }
}

/**
 * やんちゃ
 */
class Naughty extends Temperament {
    const KEY = 'NAUGHTY';
    const VALUE = 16;

    public function getAttackReviseBudget()
    {
        return 1.1;
    }

    public function getSpecialDefenceReviseBudget()
    {
        return 0.9;
    }
}

/**
 * 勇敢
 */
class Bravery extends Temperament {
    const KEY = 'BRAVERY';
    const VALUE = 17;

    public function getAttackReviseBudget()
    {
        return 1.1;
    }

    public function getDefenceReviseBudget()
    {
        return 0.9;
    }
}

/**
 * ようき
 */
class Container extends Temperament {
    const KEY = 'CONTAINER';
    const VALUE = 18;

    public function getSpeedReviseBudget()
    {
        return 1.1;
    }

    public function getSpecialAttackReviseBudget()
    {
        return 0.9;
    }
}

/**
 * れいせい
 */
class Coolness extends Temperament {
    const KEY = 'COOLNESS';
    const VALUE = 19;

    public function getSpecialAttackReviseBudget()
    {
        return 1.1;
    }

    public function getSpeedReviseBudget()
    {
        return 0.9;
    }
}

/**
 * わんぱく
 */
class Naughtiness extends Temperament {
    const KEY = 'NAUGHTINESS';
    const VALUE = 20;

    public function getDefenceReviseBudget()
    {
        return 1.1;
    }

    public function getSpecialAttackReviseBudget()
    {
        return 0.9;
    }
}

/**
 * がんばりや(補正なし)
 */
class Perseveres extends Temperament {
    const KEY = 'PERSEVERES';
    const VALUE = 21;
}
/**
 * きまぐれ(補正なし)
 */
class Whim extends Temperament {
    const KEY = 'WHIM';
    const VALUE = 22;
}
/**
 * すなお(補正なし)
 */
class Docile extends Temperament {
    const KEY = 'DOCILE';
    const VALUE = 23;
}

/**
 * てれや
 */
class Shy extends Temperament {
    const KEY = 'SHY';
    const VALUE = 24;
}

/**
 * まじめ
 */
class Sobriety extends Temperament {
    const KEY = 'SOBRIETY';
    const VALUE = 25;
}

