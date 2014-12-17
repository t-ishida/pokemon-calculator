<?php
namespace pokemon\lib;
/**
 * JavaっぽいEnumを実装するためのベース
 */
abstract class EnumBase
{
    // Enumを放り込んでおく場所です
    private static $enumArray = array();

    // 値の名前
    private $name = null;

    // 値
    private $value = null;

    public  function __construct()
    {
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * 名前を直に指定してアクセスしたい時に利用します
     * @param $name EnumBaseの名前です
     * @param $args 今回は使いません
     * @throws \Exception
     * @return EnumBase 対象のインスタンスです
     */
    final public static function __callStatic($name, $args)
    {
        if ($args) throw new \Exception('undefined method');
        return self::valueOf($name);
    }

    /**
     * 全てのEnumを返却
     * @throws Exception
     * @return 該当Enumの配列
     */
    final public static function values()
    {
        $className = get_called_class();
        if (!isset(self::$enumArray[$className])) {
            $class = new \ReflectionClass($className);
            $constants = $class->getConstants();
            if ($constants) {
                self::fillByConstants($constants);
            } else {
                self::fillByClasses();
            }

        }
        return self::$enumArray[$className];
    }

    public static function fillByClasses()
    {
        $className = get_called_class();
        $classes = get_declared_classes();
        $history = array();
        foreach ($classes as $class) {
            if (is_subclass_of($class ,$className)) {
                $clazz = new \ReflectionClass($class);
                $key = $clazz->getConstant('KEY');
                $val = $clazz->getConstant('VALUE');
                if (in_array($val, $history)) throw new \Exception('値の重複っす');
                $enum = $clazz->newInstance();
                $enum->setName($key);
                $enum->setValue($val);
                self::$enumArray[$className][] = $enum;
                $history[] = $val;
            }
        }
    }

    /**
     * @param $constants
     * @throws Exception
     */
    public static function fillByConstants($constants)
    {
        $className = get_called_class();
        $history = array();
        foreach ($constants as $key => $val) {
            if (in_array($val, $history)) throw new \Exception('値の重複っす');
            $enum = new $className;
            $enum->setName($key);
            $enum->setValue($val);
            self::$enumArray[$className][] = $enum;
            $history[] = $val;
        }
    }

    /**
     * 名前から該当Enumを探して返却
     * @param $name 名前
     * @return Enumのオブジェクト
     */
    final public static function valueOf($name)
    {
        $result = null;
        foreach (self::values() as $enum) {
            if ($enum->name() === $name) {
                $result = $enum;
                break;
            }
        }
        return $result;
    }

    /**
     * 値から該当Enumを探して返却
     * @param $value 値
     * @return Enumのオブジェクト
     */
    final public static function nameOf($value)
    {
        $result = null;
        foreach (self::values() as $enum) {
            if ($enum->value() === $value) {
                $result = $enum;
                break;
            }
        }
        return $result;
    }


    /**
     * 名前を返却
     * @return 値の名前を文字列で
     */
    public function name()
    {
        return $this->name;
    }

    /**
     * 値を返却
     * @return 値
     */
    public function value()
    {
        return $this->value;
    }

    /**
     * 比較する
     * @param $enum 比べる対象あ
     * @return boolean 一致ならtrue
     */
    public function equals(EnumBase $enum)
    {
        return $this->name() === $enum->name() &&
            $this->value() === $enum->value() &&
            get_class($this) === get_class($enum);
    }
}
