<?php
namespace DrdPlus\Codes;

class WeaponCodes
{
    // axes
    const LIGHT_AXE = 'light_axe';
    const AXE = 'axe';
    const WAR_AXE = 'war_axe';
    const TWO_HANDED_AXE = 'two_handed_axe';

    /**
     * @return array|string[]
     */
    public static function getAxeCodes()
    {
        return [
            self::LIGHT_AXE,
            self::AXE,
            self::WAR_AXE,
            self::TWO_HANDED_AXE,
        ];
    }

    // knifes and daggers
    const KNIFE = 'knife';
    const DAGGER = 'dagger';
    const STABBING_DAGGER = 'stabbing_dagger';
    const LONG_KNIFE = 'long_knife';
    const LONG_DAGGER = 'long_dagger';

    /**
     * @return array|string[]
     */
    public static function getKnifeAndDaggerCodes()
    {
        return [
            self::KNIFE,
            self::DAGGER,
            self::STABBING_DAGGER,
            self::LONG_KNIFE,
            self::LONG_DAGGER,
        ];
    }

    // maces and clubs
    const CUDGEL = 'cudgel';
    const CLUB = 'club';
    const HOBNAILED_CLUB = 'hobnailed_club';
    const LIGHT_MACE = 'light_mace';
    const MACE = 'mace';
    const HEAVY_CLUB = 'heavy_club';
    const WAR_HAMMER = 'war_hammer';
    const TWO_HANDED_CLUB = 'two_handed_club';
    const HEAVY_SLEDGEHAMMER = 'heavy_sledgehammer';

    /**
     * @return array|string[]
     */
    public static function getMaceAndClubCodes()
    {
        return [
            self::CUDGEL,
            self::CLUB,
            self::HOBNAILED_CLUB,
            self::LIGHT_MACE,
            self::MACE,
            self::HEAVY_CLUB,
            self::WAR_HAMMER,
            self::TWO_HANDED_CLUB,
            self::HEAVY_SLEDGEHAMMER,
        ];
    }

    // morningstars and morgensterns
    const LIGHT_MORGENSTERN = 'light_morgenstern';
    const MORGENSTERN = 'morgenstern';
    const HEAVY_MORGENSTERN = 'heavy_morgenstern';
    const FLAIL = 'flail';
    const MORNINGSTAR = 'morningstar';
    const HOBNAILED_FLAIL = 'hobnailed_flail';
    const HEAVY_MORNINGSTAR = 'heavy_morningstar';

    /**
     * @return array|string[]
     */
    public static function getMorningstarAndMorgensternCodes()
    {
        return [
            self::LIGHT_MORGENSTERN,
            self::MORGENSTERN,
            self::HEAVY_MORGENSTERN,
            self::FLAIL,
            self::MORNINGSTAR,
            self::HOBNAILED_FLAIL,
            self::HEAVY_MORNINGSTAR,
        ];
    }

    // sabers and bowie knifes
    const MACHETE = 'machete';
    const LIGHT_SABER = 'light_saber';
    const BOWIE_KNIFE = 'bowie_knife';
    const SABER = 'saber';
    const HEAVY_SABER = 'heavy_saber';

    /**
     * @return array|string[]
     */
    public static function getSaberAndBowieKnifeCodes()
    {
        return [
            self::MACHETE,
            self::LIGHT_SABER,
            self::BOWIE_KNIFE,
            self::SABER,
            self::HEAVY_SABER
        ];
    }

    // staffs and spears
    const LIGHT_SPEAR = 'light_spear';
    const SHORTENED_STAFF = 'shortened_staff';
    const LIGHT_STAFF = 'light_staff';
    const SPEAR = 'spear';
    const HOBNAILED_STAFF = 'hobnailed_staff';
    const LONG_SPEAR = 'long_spear';
    const HEAVY_HOBNAILED_STAFF = 'heavy_hobnailed_staff';
    const PIKE = 'pike';
    const METAL_STAFF = 'metal_staff';

    /**
     * @return array|string[]
     */
    public static function getStaffAndSpearCodes()
    {
        return [
            self::LIGHT_SPEAR,
            self::SHORTENED_STAFF,
            self::LIGHT_STAFF,
            self::SPEAR,
            self::HOBNAILED_STAFF,
            self::LONG_SPEAR,
            self::HEAVY_HOBNAILED_STAFF,
            self::PIKE,
            self::METAL_STAFF
        ];
    }

    // swords
    const SHORT_SWORD = 'short_sword';
    const HANGER = 'hanger';
    const GLAIVE = 'glaive';
    const LONG_SWORD = 'long_sword';
    const ONE_AND_HALF_HANDED_SWORD = 'one_and_half_handed_sword';
    const BARBARIAN_SWORD = 'barbarian_sword';
    const TWO_HANDED_SWORD = 'two_handed_sword';

    /**
     * @return array|string[]
     */
    public static function getSwordCodes()
    {
        return [
            self::SHORT_SWORD,
            self::HANGER,
            self::GLAIVE,
            self::LONG_SWORD,
            self::ONE_AND_HALF_HANDED_SWORD,
            self::BARBARIAN_SWORD,
            self::TWO_HANDED_SWORD
        ];
    }

    // voulges and tridents
    const PITCHFORK = 'pitchfork';
    const LIGHT_VOULGE = 'light_voulge';
    const LIGHT_TRIDENT = 'light_trident';
    const HALBERD = 'halberd';
    const HEAVY_VOULGE = 'heavy_voulge';
    const HEAVY_TRIDENT = 'heavy_trident';
    const HEAVY_HALBERD = 'heavy_halberd';

    /**
     * @return array|string[]
     */
    public static function getVoulgeAndTridentCodes()
    {
        return [
            self::PITCHFORK,
            self::LIGHT_VOULGE,
            self::LIGHT_TRIDENT,
            self::HALBERD,
            self::HEAVY_VOULGE,
            self::HEAVY_TRIDENT,
            self::HEAVY_HALBERD,
        ];
    }

    // unarmed
    const HAND = 'hand';
    const HOBNAILED_GLOVE = 'hobnailed_glove';
    const LEG = 'leg';
    const HOBNAILED_BOOT = 'hobnailed_boot';

    /**
     * @return array|string[]
     */
    public static function getUnarmedCodes()
    {
        return [
            self::HAND,
            self::HOBNAILED_GLOVE,
            self::LEG,
            self::HOBNAILED_BOOT,
        ];
    }

    // bows
    const SHORT_BOW = 'short_bow';
    const LONG_BOW = 'long_bow';
    const SHORT_COMPOSITE_BOW = 'short_composite_bow';
    const LONG_COMPOSITE_BOW = 'long_composite_bow';
    const POWER_BOW = 'power_bow';

    /**
     * @return array|string[]
     */
    public static function getBowCodes()
    {
        return [
            self::SHORT_BOW,
            self::LONG_BOW,
            self::SHORT_COMPOSITE_BOW,
            self::LONG_COMPOSITE_BOW,
            self::POWER_BOW,
        ];
    }
}