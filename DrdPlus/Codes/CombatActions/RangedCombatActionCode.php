<?php
namespace DrdPlus\Codes\CombatActions;

/**
 * @method static RangedCombatActionCode getIt($codeValue)
 */
class RangedCombatActionCode extends CombatActionCode
{
    // See PPH page 108
    const AIMED_SHOT = 'aimed_shot';

    public static function getRangedOnlyCombatActionValues()
    {
        return [self::AIMED_SHOT];
    }

    /**
     * @return array|\string[]
     */
    public static function getPossibleValues()
    {
        $rangedCombatActions = parent::getPossibleValues();
        $rangedCombatActions[] = self::AIMED_SHOT;

        return $rangedCombatActions;
    }

    /**
     * @return bool
     */
    public function isForMelee()
    {
        // only actions inherited from generic combat actions can be used for melee attack
        return $this->getValue() !== self::AIMED_SHOT;
    }
}