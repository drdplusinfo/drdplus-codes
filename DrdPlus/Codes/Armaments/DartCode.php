<?php
namespace DrdPlus\Codes\Armaments;

/**
 * @method static DartCode getIt($codeValue)
 */
class DartCode extends ProjectileCode
{
    const BASIC_DART = 'basic_dart';
    const WAR_DART = 'war_dart';
    const PIERCING_DART = 'piercing_dart';
    const HOLLOW_DART = 'hollow_dart';
    const SILVER_DART = 'silver_dart';

    /**
     * @return array|string[]
     */
    public static function getDartCodes()
    {
        return [
            self::BASIC_DART,
            self::WAR_DART,
            self::PIERCING_DART,
            self::HOLLOW_DART,
            self::SILVER_DART,
        ];
    }

    /**
     * @return bool
     */
    public function isDart()
    {
        return true;
    }

    /**
     * @return bool
     */
    public function isArrow()
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isSlingStone()
    {
        return false;
    }

}