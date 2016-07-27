<?php
namespace DrdPlus\Codes;

/**
 * @method static MeleeWeaponCategoryCode getIt($codeValue)
 */
class MeleeWeaponCategoryCode extends Code
{
    const AXE = 'axe';
    const KNIFE_OR_DAGGER = 'knife_or_dagger';
    const MACE_OR_CLUB = 'mace_or_club';
    const MORNING_STAR_OR_MORGENSTERN = 'morning_star_or_morgenstern';
    const SABER_OR_BOWIE_KNIFE = 'saber_or_bowie_knife';
    const STAFF_OR_SPEAR = 'staff_or_spear';
    const SWORD = 'sword';
    const VOULGE_OR_TRIDENT = 'voulge_or_trident';
    const UNARMED = 'unarmed';

    /**
     * @return array|string[]
     */
    public static function getMeleeWeaponCategoryCodes()
    {
        return [
            self::AXE,
            self::KNIFE_OR_DAGGER,
            self::MACE_OR_CLUB,
            self::MORNING_STAR_OR_MORGENSTERN,
            self::SABER_OR_BOWIE_KNIFE,
            self::STAFF_OR_SPEAR,
            self::SWORD,
            self::VOULGE_OR_TRIDENT,
            self::UNARMED,
        ];
    }
}