<?php
namespace DrdPlus\Codes;

class ArmorCode extends Code
{
    const WITHOUT_ARMOR = 'without_armor';
    const PADDED_ARMOR = 'padded_armor';
    const LEATHER_ARMOR = 'leather_armor';
    const HOBNAILED_ARMOR = 'hobnailed_armor';
    const CHAINMAIL_ARMOR = 'chainmail_armor';
    const SCALE_ARMOR = 'scale_armor';
    const PLATE_ARMOR = 'plate_armor';
    const FULL_PLATE_ARMOR = 'full_plate_armor';

    /**
     * @return array|string[]
     */
    public static function getBodyArmorCodes()
    {
        return [
            self::WITHOUT_ARMOR,
            self::PADDED_ARMOR,
            self::LEATHER_ARMOR,
            self::HOBNAILED_ARMOR,
            self::CHAINMAIL_ARMOR,
            self::SCALE_ARMOR,
            self::PLATE_ARMOR,
            self::FULL_PLATE_ARMOR,
        ];
    }

    const WITHOUT_HELM = 'without_helm';
    const LEATHER_CAP = 'leather_cap';
    const CHAINMAIL_HOOD = 'chainmail_hood';
    const CONICAL_HELM = 'conical_helm';
    const FULL_HELM = 'full_helm';
    const BARREL_HELM = 'barrel_helm';
    const GREAT_HELM = 'great_helm';

    /**
     * @return array|string[]
     */
    public static function getHelmCodes()
    {
        return [
            self::WITHOUT_HELM,
            self::LEATHER_CAP,
            self::CHAINMAIL_HOOD,
            self::CONICAL_HELM,
            self::FULL_HELM,
            self::BARREL_HELM,
            self::GREAT_HELM
        ];
    }

    /**
     * @return array|string[]
     */
    public static function getArmorCodes()
    {
        return array_merge(
            self::getBodyArmorCodes(),
            self::getHelmCodes()
        );
    }
}