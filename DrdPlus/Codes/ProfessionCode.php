<?php
namespace DrdPlus\Codes;

use DrdPlus\Codes\Partials\TranslatableCode;

/**
 * @method static ProfessionCode getIt($codeValue)
 * @method static ProfessionCode findIt($codeValue)
 */
class ProfessionCode extends TranslatableCode
{
    public const COMMONER = 'commoner';
    public const FIGHTER = 'fighter';
    public const THIEF = 'thief';
    public const RANGER = 'ranger';
    public const WIZARD = 'wizard';
    public const THEURGIST = 'theurgist';
    public const PRIEST = 'priest';

    /**
     * @return array|string[]
     */
    public static function getPossibleValues(): array
    {
        return [
            self::COMMONER,
            self::FIGHTER,
            self::THIEF,
            self::RANGER,
            self::WIZARD,
            self::THEURGIST,
            self::PRIEST,
        ];
    }

    protected function fetchTranslations(): array
    {
        return [
            'cs' => [
                self::COMMONER => ['one' => 'obyvatel', 'few' => 'obyvatelé', 'many' => 'obyvatelů'],
                self::FIGHTER => ['one' => 'bojovník', 'few' => 'bojovníci', 'many' => 'bojovníků'],
                self::THIEF => ['one' => 'zloděj', 'few' => 'zloději', 'many' => 'zlodějů'],
                self::RANGER => ['one' => 'hraničář', 'few' => 'hraničáři', 'many' => 'hraničářů'],
                self::WIZARD => ['one' => 'čaroděj', 'few' => 'čarodějové', 'many' => 'čarodějů'],
                self::THEURGIST => ['one' => 'theurg', 'few' => 'theurgové', 'many' => 'theurgů'],
                self::PRIEST => ['one' => 'kněz', 'few' => 'kněží', 'many' => 'kněží'],
            ],
            'en' => [
                self::COMMONER => ['one' => 'commoner', 'few' => 'commoners', 'many' => 'commoners'],
                self::FIGHTER => ['one' => 'fighter', 'few' => 'fighters', 'many' => 'fighters'],
                self::THIEF => ['one' => 'thief', 'few' => 'thieves', 'many' => 'thieves'],
                self::RANGER => ['one' => 'ranger', 'few' => 'rangers', 'many' => 'rangers'],
                self::WIZARD => ['one' => 'wizard', 'few' => 'wizards', 'many' => 'wizards'],
                self::THEURGIST => ['one' => 'theurgist', 'few' => 'theurgists', 'many' => 'theurgists'],
                self::PRIEST => ['one' => 'priest', 'few' => 'priests', 'many' => 'priests'],
            ],
        ];
    }

}