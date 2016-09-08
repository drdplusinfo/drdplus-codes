<?php
namespace DrdPlus\Codes\CombatActions;

/**
 * @method static RangedCombatActionCode getIt($codeValue)
 */
class RangedCombatActionCode extends CombatActionCode
{
    // See PPH page 108
    const AIMED_SHOOT = 'aimed_shoot';

    public static function getRangedOnlyCombatActionCodes()
    {
        return [self::AIMED_SHOOT];
    }

    /**
     * @return array|\string[]
     */
    public static function getRangedCombatActionCodes()
    {
        $rangedCombatActions = self::getCombatActionCodes();
        $rangedCombatActions[] = self::AIMED_SHOOT;

        return $rangedCombatActions;
    }

    /**
     * @return bool
     */
    public function isForMelee()
    {
        // only actions inherited from generic combat actions can be used for melee attack
        return $this->getValue() !== self::AIMED_SHOOT;
    }

    /**
     * @return bool
     */
    public function isForRanged()
    {
        // any action represented by this code can be used for ranged attack
        return true;
    }
}