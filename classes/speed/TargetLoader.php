<?php
namespace pokemon\classes\speed;
class TargetLoader {
    private static $targets = array (
        array ( 'speed' => 267, 'name' => 'Ｓ補正有り拘りスカーフ110族'),
        array ( 'speed' => 253, 'name' => 'Ｓ補正有り拘りスカーフガブリアス'),
        array ( 'speed' => 252, 'name' => 'Ｓ補正有り拘りスカーフ101族'),
        array ( 'speed' => 250, 'name' => 'Ｓ補正有り拘りスカーフ100族'),
        array ( 'speed' => 247, 'name' => 'Ｓ補正有り拘りスカーフサザンドラ'),
        array ( 'speed' => 246, 'name' => 'Ｓ補正有り拘りスカーフオノノクス'),
        array ( 'speed' => 243, 'name' => 'Ｓ補正無し拘りスカーフ110族'),
        array ( 'speed' => 241, 'name' => 'Ｓ補正有り拘りスカーフ95族'),
        array ( 'speed' => 234, 'name' => 'Ｓ補正有り拘りスカーフ90族'),
        array ( 'speed' => 231, 'name' => 'Ｓ補正無し拘りスカーフガブリアス'),
        array ( 'speed' => 229, 'name' => 'Ｓ補正無し拘りスカーフ101族'),
        array ( 'speed' => 228, 'name' => 'Ｓ補正無し拘りスカーフ100族'),
        array ( 'speed' => 225, 'name' => 'Ｓ補正有り拘りスカーフ85族/Ｓ補正無し拘りスカーフサザンドラ'),
        array ( 'speed' => 223, 'name' => 'Ｓ補正無し拘りスカーフオノノクス'),
        array ( 'speed' => 219, 'name' => 'Ｓ補正有り拘りスカーフギャラドス'),
        array ( 'speed' => 217, 'name' => 'Ｓ補正有り拘りスカーフ80族'),
        array ( 'speed' => 208, 'name' => 'Ｓ補正有り拘りスカーフドーブル'),
        array ( 'speed' => 205, 'name' => 'Ｓ補正無し拘りスカーフ85族'),
        array ( 'speed' => 201, 'name' => 'Ｓ補正有り拘りスカーフ70族'),
        array ( 'speed' => 200, 'name' => 'Ｓ補正有り最速130族'),
        array ( 'speed' => 198, 'name' => 'Ｓ補正無し拘りスカーフ80族'),
        array ( 'speed' => 194, 'name' => 'Ｓ補正有り最速125族'),
        array ( 'speed' => 192, 'name' => 'Ｓ補正有り拘りスカーフ65族'),
        array ( 'speed' => 189, 'name' => 'Ｓ補正有り最速120族'),
        array ( 'speed' => 186, 'name' => 'Ｓ補正有り拘りスカーフバンギラス'),
        array ( 'speed' => 184, 'name' => 'Ｓ補正有り最速エルフーン'),
        array ( 'speed' => 183, 'name' => 'Ｓ補正有り最速115族'),
        array ( 'speed' => 179, 'name' => 'Ｓ補正有り最速ボルトロス/トルネロス'),
        array ( 'speed' => 178, 'name' => 'Ｓ補正有り最速110族'),
        array ( 'speed' => 176, 'name' => 'Ｓ補正有り最速108族'),
        array ( 'speed' => 172, 'name' => 'Ｓ補正有り最速105族/Ｓ補正無し最速120族'),
        array ( 'speed' => 169, 'name' => 'Ｓ補正有り最速ガブリアス'),
        array ( 'speed' => 168, 'name' => 'Ｓ補正有り最速ランドロス/Ｓ補正無し最速エルフーン'),
        array ( 'speed' => 167, 'name' => 'Ｓ補正有り最速100族'),
        array ( 'speed' => 165, 'name' => 'Ｓ補正有り最速サザンドラ'),
        array ( 'speed' => 163, 'name' => 'Ｓ補正有り最速オノノクス'),
        array ( 'speed' => 162, 'name' => 'Ｓ補正無し最速110族'),
        array ( 'speed' => 161, 'name' => 'Ｓ補正有り最速95族'),
        array ( 'speed' => 156, 'name' => 'Ｓ補正有り最速90族'),
        array ( 'speed' => 154, 'name' => 'Ｓ補正有り最速ドリュウズ'),
        array ( 'speed' => 151, 'name' => 'Ｓ補正有り最速ＦＣロトム'),
        array ( 'speed' => 150, 'name' => 'Ｓ補正有り最速85族/Ｓ補正無し最速サザンドラ'),
        array ( 'speed' => 149, 'name' => 'Ｓ補正無し最速オノノクス'),
        array ( 'speed' => 146, 'name' => 'Ｓ補正有り最速ギャラドス'),
        array ( 'speed' => 141, 'name' => 'Ｓ補正有り最速ヒードラン'),
        array ( 'speed' => 140, 'name' => 'Ｓ補正無し最速ドリュウズ'),
        array ( 'speed' => 139, 'name' => 'Ｓ補正有り最速ドーブル'),
        array ( 'speed' => 138, 'name' => 'Ｓ補正無し最速ＦＣロトム'),
        array ( 'speed' => 134, 'name' => 'Ｓ補正有り最速70族'),
        array ( 'speed' => 132, 'name' => 'Ｓ補正無し最速80族'),
        array ( 'speed' => 128, 'name' => 'Ｓ補正有り最速65族 '),
        array ( 'speed' => 124, 'name' => 'Ｓ補正有り最速バンギラス'),
    );
    public static function load ()
    {
        $result = array();
        foreach (self::$targets as $row) {
            $target = new Target();
            $target->setSpeed($row['speed']);
            $target->setName($row['name']);
            $result[] = $target;
        }
        usort($result, function ($a,$b) {
            if ($a->getSpeed() === $b->getSpeed()) {
                return 0;
            }
            return ($a->getSpeed() < $b->getSpeed()) ? -1 : 1;
        });
        return $result;
    }
}