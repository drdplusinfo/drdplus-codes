<?php
namespace DrdPlus\Codes\Armaments;

/**
 * @method static MeleeWeaponCode getIt($codeValue)
 */
class MeleeWeaponCode extends WeaponCode implements MeleeWeaponlikeCode
{

    private static $customMeleeWeaponCodePerCategory = [];

    // axes
    const LIGHT_AXE = 'light_axe';
    const AXE = 'axe';
    const WAR_AXE = 'war_axe';
    const TWO_HANDED_AXE = 'two_handed_axe';

    /**
     * @param bool $withCustomValues = true
     * @return array|string[]
     */
    public static function getAxeCodes(bool $withCustomValues = true): array
    {
        $defaultValues = [self::LIGHT_AXE, self::AXE, self::WAR_AXE, self::TWO_HANDED_AXE];
        if (!$withCustomValues) {
            return $defaultValues;
        }

        return array_merge(
            $defaultValues,
            self::$customMeleeWeaponCodePerCategory[WeaponCategoryCode::AXE] ?? []
        );
    }

    // knifes and daggers
    const KNIFE = 'knife';
    const DAGGER = 'dagger';
    const STABBING_DAGGER = 'stabbing_dagger';
    const LONG_KNIFE = 'long_knife';
    const LONG_DAGGER = 'long_dagger';

    /**
     * @param bool $withCustomValues = true
     * @return array|string[]
     */
    public static function getKnifeAndDaggerCodes(bool $withCustomValues = true): array
    {
        $defaultValues = [self::KNIFE, self::DAGGER, self::STABBING_DAGGER, self::LONG_KNIFE, self::LONG_DAGGER];
        if (!$withCustomValues) {
            return $defaultValues;
        }

        return array_merge(
            $defaultValues,
            self::$customMeleeWeaponCodePerCategory[WeaponCategoryCode::KNIFE_AND_DAGGER] ?? []
        );
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
     * @param bool $withCustomValues = true
     * @return array|string[]
     */
    public static function getMaceAndClubCodes(bool $withCustomValues = true): array
    {
        $defaultValues = [
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
        if (!$withCustomValues) {
            return $defaultValues;
        }

        return array_merge(
            $defaultValues,
            self::$customMeleeWeaponCodePerCategory[WeaponCategoryCode::MACE_AND_CLUB] ?? []
        );
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
     * @param bool $withCustomValues = true
     * @return array|string[]
     */
    public static function getMorningstarAndMorgensternCodes(bool $withCustomValues = true): array
    {
        $defaultValues = [
            self::LIGHT_MORGENSTERN,
            self::MORGENSTERN,
            self::HEAVY_MORGENSTERN,
            self::FLAIL,
            self::MORNINGSTAR,
            self::HOBNAILED_FLAIL,
            self::HEAVY_MORNINGSTAR,
        ];
        if (!$withCustomValues) {
            return $defaultValues;
        }

        return array_merge(
            $defaultValues,
            self::$customMeleeWeaponCodePerCategory[WeaponCategoryCode::MORNINGSTAR_AND_MORGENSTERN] ?? []
        );
    }

    // sabers and bowie knifes
    const MACHETE = 'machete';
    const LIGHT_SABER = 'light_saber';
    const BOWIE_KNIFE = 'bowie_knife';
    const SABER = 'saber';
    const HEAVY_SABER = 'heavy_saber';

    /**
     * @param bool $withCustomValues = true
     * @return array|string[]
     */
    public static function getSaberAndBowieKnifeCodes(bool $withCustomValues = true): array
    {
        $defaultValues = [self::MACHETE, self::LIGHT_SABER, self::BOWIE_KNIFE, self::SABER, self::HEAVY_SABER];
        if (!$withCustomValues) {
            return $defaultValues;
        }

        return array_merge(
            $defaultValues,
            self::$customMeleeWeaponCodePerCategory[WeaponCategoryCode::SABER_AND_BOWIE_KNIFE] ?? []
        );
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
     * @param bool $withCustomValues = true
     * @return array|string[]
     */
    public static function getStaffAndSpearCodes(bool $withCustomValues = true): array
    {
        $defaultValues = [
            self::LIGHT_SPEAR,
            self::SHORTENED_STAFF,
            self::LIGHT_STAFF,
            self::SPEAR,
            self::HOBNAILED_STAFF,
            self::LONG_SPEAR,
            self::HEAVY_HOBNAILED_STAFF,
            self::PIKE,
            self::METAL_STAFF,
        ];
        if (!$withCustomValues) {
            return $defaultValues;
        }

        return array_merge(
            $defaultValues,
            self::$customMeleeWeaponCodePerCategory[WeaponCategoryCode::STAFF_AND_SPEAR] ?? []
        );
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
     * @param bool $withCustomValues = true
     * @return array|string[]
     */
    public static function getSwordCodes(bool $withCustomValues = true): array
    {
        $defaultValues = [
            self::SHORT_SWORD,
            self::HANGER,
            self::GLAIVE,
            self::LONG_SWORD,
            self::ONE_AND_HALF_HANDED_SWORD,
            self::BARBARIAN_SWORD,
            self::TWO_HANDED_SWORD,
        ];
        if (!$withCustomValues) {
            return $defaultValues;
        }

        return array_merge($defaultValues, self::$customMeleeWeaponCodePerCategory[WeaponCategoryCode::SWORD] ?? []);
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
     * @param bool $withCustomValues = true
     * @return array|string[]
     */
    public static function getVoulgeAndTridentCodes(bool $withCustomValues = true): array
    {
        $defaultValues = [
            self::PITCHFORK,
            self::LIGHT_VOULGE,
            self::LIGHT_TRIDENT,
            self::HALBERD,
            self::HEAVY_VOULGE,
            self::HEAVY_TRIDENT,
            self::HEAVY_HALBERD,
        ];
        if (!$withCustomValues) {
            return $defaultValues;
        }

        return array_merge(
            $defaultValues,
            self::$customMeleeWeaponCodePerCategory[WeaponCategoryCode::VOULGE_AND_TRIDENT] ?? []
        );
    }

    // unarmed
    const HAND = 'hand';
    const HOBNAILED_GLOVE = 'hobnailed_glove';
    const LEG = 'leg';
    const HOBNAILED_BOOT = 'hobnailed_boot';

    /**
     * @param bool $withCustomValues = true
     * @return array|string[]
     */
    public static function getUnarmedCodes(bool $withCustomValues = true): array
    {
        $defaultValues = [self::HAND, self::HOBNAILED_GLOVE, self::LEG, self::HOBNAILED_BOOT];
        if (!$withCustomValues) {
            return $defaultValues;
        }

        return array_merge(
            $defaultValues,
            self::$customMeleeWeaponCodePerCategory[WeaponCategoryCode::UNARMED] ?? []
        );
    }

    /**
     * @return array|string[]
     */
    protected static function getDefaultValues(): array
    {
        return array_values( // to get continual integer keys
            array_merge(
                self::getAxeCodes(false /* without custom */),
                self::getKnifeAndDaggerCodes(false /* without custom */),
                self::getMaceAndClubCodes(false /* without custom */),
                self::getMorningstarAndMorgensternCodes(false /* without custom */),
                self::getSaberAndBowieKnifeCodes(false /* without custom */),
                self::getStaffAndSpearCodes(false /* without custom */),
                self::getSwordCodes(false /* without custom */),
                self::getVoulgeAndTridentCodes(false /* without custom */),
                self::getUnarmedCodes(false /* without custom */)
            )
        );
    }

    /**
     * @param string $newMeleeWeaponCodeValue
     * @param WeaponCategoryCode $newWeaponCategoryCode
     * @param array $translations
     * @return bool
     * @throws \DrdPlus\Codes\Armaments\Exceptions\InvalidWeaponCategoryForNewMeleeWeaponCode
     * @throws \DrdPlus\Codes\Partials\Exceptions\InvalidLanguageCode
     * @throws \DrdPlus\Codes\Partials\Exceptions\UnknownTranslationPlural
     * @throws \DrdPlus\Codes\Partials\Exceptions\InvalidTranslationFormat
     */
    public static function addNewMeleeWeaponCode(
        string $newMeleeWeaponCodeValue,
        WeaponCategoryCode $newWeaponCategoryCode,
        array $translations
    ): bool
    {
        if (!$newWeaponCategoryCode->isMeleeWeaponCategory()) {
            throw new Exceptions\InvalidWeaponCategoryForNewMeleeWeaponCode(
                'Expected one of melee weapon categories, got ' . $newWeaponCategoryCode
            );
        }
        $extended = parent::addNewCode($newMeleeWeaponCodeValue, $translations);
        if (!$extended) {
            return false;
        }
        self::$customMeleeWeaponCodePerCategory[$newWeaponCategoryCode->getValue()][] = $newMeleeWeaponCodeValue;

        return true;
    }

    /**
     * Both melee weapons and shields are melee.
     *
     * @return bool
     */
    final public function isMelee(): bool
    {
        return true;
    }

    /**
     * Note: Shield is weaponlike, but not a weapon.
     *
     * @return bool
     */
    final public function isMeleeWeapon(): bool
    {
        return true;
    }

    /**
     * Even melee weapon can be ranged (currently spear only).
     *
     * @return bool
     */
    public function isRanged(): bool
    {
        return $this->isShootingWeapon() || $this->isThrowingWeapon();
    }

    /**
     * @return bool
     */
    public function isShootingWeapon(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isThrowingWeapon(): bool
    {
        return $this->getValue() === self::SPEAR; // spear can be used both as a throwing and melee weapon
    }

    /**
     * @return bool
     */
    public function isAxe(): bool
    {
        return in_array($this->getValue(), self::getAxeCodes(), true);
    }

    /**
     * @return bool
     */
    public function isKnifeOrDagger(): bool
    {
        return in_array($this->getValue(), self::getKnifeAndDaggerCodes(), true);
    }

    /**
     * @return bool
     */
    public function isMaceOrClub(): bool
    {
        return in_array($this->getValue(), self::getMaceAndClubCodes(), true);
    }

    /**
     * @return bool
     */
    public function isMorningstarOrMorgenstern(): bool
    {
        return in_array($this->getValue(), self::getMorningstarAndMorgensternCodes(), true);
    }

    /**
     * @return bool
     */
    public function isSaberOrBowieKnife(): bool
    {
        return in_array($this->getValue(), self::getSaberAndBowieKnifeCodes(), true);
    }

    /**
     * @return bool
     */
    public function isStaffOrSpear(): bool
    {
        return in_array($this->getValue(), self::getStaffAndSpearCodes(), true);
    }

    /**
     * @return bool
     */
    public function isSword(): bool
    {
        return in_array($this->getValue(), self::getSwordCodes(), true);
    }

    /**
     * @return bool
     */
    public function isVoulgeOrTrident(): bool
    {
        return in_array($this->getValue(), self::getVoulgeAndTridentCodes(), true);
    }

    /**
     * @return bool
     */
    public function isUnarmed(): bool
    {
        return in_array($this->getValue(), self::getUnarmedCodes(), true);
    }

    /**
     * @return RangedWeaponCode
     * @throws \DrdPlus\Codes\Armaments\Exceptions\CanNotBeConvertedToRangeWeaponCode
     */
    public function convertToRangedWeaponCodeEquivalent(): RangedWeaponCode
    {
        if (!$this->isRanged()) {
            throw new Exceptions\CanNotBeConvertedToRangeWeaponCode(
                "Melee weapon code {$this} can not be converted to range weapon code"
            );
        }

        return RangedWeaponCode::getIt($this->getValue());
    }

    /**
     * @return MeleeWeaponCode
     */
    public function convertToMeleeWeaponCodeEquivalent(): MeleeWeaponCode
    {
        return $this;
    }

    /**
     * @return array|string[]
     */
    protected function fetchTranslations(): array
    {
        return [
            'en' => [
                self::LIGHT_AXE => ['one' => 'light axe', 'few' => 'light axes', 'many' => 'light axes'],
                self::AXE => ['one' => 'axe', 'few' => 'axes', 'many' => 'axes'],
                self::WAR_AXE => ['one' => 'war axe', 'few' => 'war axes', 'many' => 'war axes'],
                self::TWO_HANDED_AXE => ['one' => 'two handed axe', 'few' => 'two handed axes', 'many' => 'two handed axes'],
                self::KNIFE => ['one' => 'knife', 'few' => 'knifes', 'many' => 'knifes'],
                self::DAGGER => ['one' => 'dagger', 'few' => 'daggers', 'many' => 'daggers'],
                self::STABBING_DAGGER => ['one' => 'stabbing dagger', 'few' => 'stabbing daggers', 'many' => 'stabbing daggers'],
                self::LONG_KNIFE => ['one' => 'long knife', 'few' => 'long knifes', 'many' => 'long knifes'],
                self::LONG_DAGGER => ['one' => 'long dagger', 'few' => 'long daggers', 'many' => 'long daggers'],
                self::CUDGEL => ['one' => 'cudgel', 'few' => 'cudgels', 'many' => 'cudgels'],
                self::CLUB => ['one' => 'club', 'few' => 'clubs', 'many' => 'clubs'],
                self::HOBNAILED_CLUB => ['one' => 'hobnailed club', 'few' => 'hobnailed clubs', 'many' => 'hobnailed clubs'],
                self::LIGHT_MACE => ['one' => 'light mace', 'few' => 'light maces', 'many' => 'light maces'],
                self::MACE => ['one' => 'mace', 'few' => 'maces', 'many' => 'maces'],
                self::HEAVY_CLUB => ['one' => 'heavy club', 'few' => 'heavy clubs', 'many' => 'heavy clubs'],
                self::WAR_HAMMER => ['one' => 'war hammer', 'few' => 'war hammers', 'many' => 'war hammers'],
                self::TWO_HANDED_CLUB => ['one' => 'two handed club', 'few' => 'two handed clubs', 'many' => 'two handed clubs'],
                self::HEAVY_SLEDGEHAMMER => ['one' => 'heavy sledgehammer', 'few' => 'heavy sledgehammers', 'many' => 'heavy sledgehammers'],
                self::LIGHT_MORGENSTERN => ['one' => 'light morgenstern', 'few' => 'light morgensterns', 'many' => 'light morgensterns'],
                self::MORGENSTERN => ['one' => 'morgenstern', 'few' => 'morgensterns', 'many' => 'morgensterns'],
                self::HEAVY_MORGENSTERN => ['one' => 'heavy morgenstern', 'few' => 'heavy morgensterns', 'many' => 'heavy morgensterns'],
                self::FLAIL => ['one' => 'flail', 'few' => 'flails', 'many' => 'flails'],
                self::MORNINGSTAR => ['one' => 'morningstar', 'few' => 'morningstars', 'many' => 'morningstars'],
                self::HOBNAILED_FLAIL => ['one' => 'hobnailed flail', 'few' => 'hobnailed flails', 'many' => 'hobnailed flails'],
                self::HEAVY_MORNINGSTAR => ['one' => 'heavy morningstar', 'few' => 'heavy morningstars', 'many' => 'heavy morningstars'],
                self::MACHETE => ['one' => 'machete', 'few' => 'machetes', 'many' => 'machetes'],
                self::LIGHT_SABER => ['one' => 'light saber', 'few' => 'light sabers', 'many' => 'light sabers'],
                self::BOWIE_KNIFE => ['one' => 'bowie knife', 'few' => 'bowie knifes', 'many' => 'bowie knifes'],
                self::SABER => ['one' => 'saber', 'few' => 'sabers', 'many' => 'sabers'],
                self::HEAVY_SABER => ['one' => 'heavy saber', 'few' => 'heavy sabers', 'many' => 'heavy sabers'],
                self::LIGHT_SPEAR => ['one' => 'light spear', 'few' => 'light spears', 'many' => 'light spears'],
                self::SHORTENED_STAFF => ['one' => 'shortened staff', 'few' => 'shortened staffs', 'many' => 'shortened staffs'],
                self::LIGHT_STAFF => ['one' => 'light staff', 'few' => 'light staffs', 'many' => 'light staffs'],
                self::SPEAR => ['one' => 'spear', 'few' => 'spears', 'many' => 'spears'],
                self::HOBNAILED_STAFF => ['one' => 'hobnailed staff', 'few' => 'hobnailed staffs', 'many' => 'hobnailed staffs'],
                self::LONG_SPEAR => ['one' => 'long spear', 'few' => 'long spears', 'many' => 'long spears'],
                self::HEAVY_HOBNAILED_STAFF => ['one' => 'heavy hobnailed staff', 'few' => 'heavy hobnailed staffs', 'many' => 'heavy hobnailed staffs'],
                self::PIKE => ['one' => 'pike', 'few' => 'pikes', 'many' => 'pikes'],
                self::METAL_STAFF => ['one' => 'metal staff', 'few' => 'metal staffs', 'many' => 'metal staffs'],
                self::SHORT_SWORD => ['one' => 'short sword', 'few' => 'short swords', 'many' => 'short swords'],
                self::HANGER => ['one' => 'hanger', 'few' => 'hangers', 'many' => 'hangers'],
                self::GLAIVE => ['one' => 'glaive', 'few' => 'glaives', 'many' => 'glaives'],
                self::LONG_SWORD => ['one' => 'long sword', 'few' => 'long swords', 'many' => 'long swords'],
                self::ONE_AND_HALF_HANDED_SWORD => ['one' => 'one and half handed sword', 'few' => 'one and half handed swords', 'many' => 'one and half handed swords'],
                self::BARBARIAN_SWORD => ['one' => 'barbarian sword', 'few' => 'barbarian swords', 'many' => 'barbarian swords'],
                self::TWO_HANDED_SWORD => ['one' => 'two handed sword', 'few' => 'two handed swords', 'many' => 'two handed swords'],
                self::PITCHFORK => ['one' => 'pitchfork', 'few' => 'pitchforks', 'many' => 'pitchforks'],
                self::LIGHT_VOULGE => ['one' => 'light voulge', 'few' => 'light voulges', 'many' => 'light voulges'],
                self::LIGHT_TRIDENT => ['one' => 'light trident', 'few' => 'light tridents', 'many' => 'light tridents'],
                self::HALBERD => ['one' => 'halberd', 'few' => 'halberds', 'many' => 'halberds'],
                self::HEAVY_VOULGE => ['one' => 'heavy voulge', 'few' => 'heavy voulges', 'many' => 'heavy voulges'],
                self::HEAVY_TRIDENT => ['one' => 'heavy trident', 'few' => 'heavy tridents', 'many' => 'heavy tridents'],
                self::HEAVY_HALBERD => ['one' => 'heavy halberd', 'few' => 'heavy halberds', 'many' => 'heavy halberds'],
                self::HAND => ['one' => 'hand', 'few' => 'hands', 'many' => 'hands'],
                self::HOBNAILED_GLOVE => ['one' => 'hobnailed glove', 'few' => 'hobnailed gloves', 'many' => 'hobnailed gloves'],
                self::LEG => ['one' => 'leg', 'few' => 'legs', 'many' => 'legs'],
                self::HOBNAILED_BOOT => ['one' => 'hobnailed boot', 'few' => 'hobnailed boots', 'many' => 'hobnailed boots'],
            ],
            'cs' => [
                self::LIGHT_AXE => ['one' => 'lehká sekerka', 'few' => 'lehké sekerky', 'many' => 'lehkých sekerek'],
                self::AXE => ['one' => 'sekera', 'few' => 'sekery', 'many' => 'seker'],
                self::WAR_AXE => ['one' => 'válečná sekera', 'few' => 'válečné sekery', 'many' => 'válečných seker'],
                self::TWO_HANDED_AXE => ['one' => 'obouruční sekera', 'few' => 'obouruční sekery', 'many' => 'obouručních seker'],
                self::KNIFE => ['one' => 'nůž', 'few' => 'nože', 'many' => 'nožů'],
                self::DAGGER => ['one' => 'dýka', 'few' => 'dýky', 'many' => 'dýk'],
                self::STABBING_DAGGER => ['one' => 'bodná dýka', 'few' => 'bodné dýky', 'many' => 'bodných dýk'],
                self::LONG_KNIFE => ['one' => 'dlouhý nůž', 'few' => 'dlouhé nože', 'many' => 'dlouhých nožů'],
                self::LONG_DAGGER => ['one' => 'dlouhá dýka', 'few' => 'dlouhé dýky', 'many' => 'dlouhých dýk'],
                self::CUDGEL => ['one' => 'obušek', 'few' => 'obušky', 'many' => 'obušků'],
                self::CLUB => ['one' => 'kyj', 'few' => 'kyje', 'many' => 'kyjů'],
                self::HOBNAILED_CLUB => ['one' => 'okovaný kyj', 'few' => 'okované kyje', 'many' => 'okovaných kyjů'],
                self::LIGHT_MACE => ['one' => 'lehký palcát', 'few' => 'lehké palcáty', 'many' => 'lehkých palcátů'],
                self::MACE => ['one' => 'palcát', 'few' => 'palcáty', 'many' => 'palcátů'],
                self::HEAVY_CLUB => ['one' => 'těžký kyj', 'few' => 'těžké kyje', 'many' => 'těžkých kyjů'],
                self::WAR_HAMMER => ['one' => 'válečné kladivo', 'few' => 'válečná kladiva', 'many' => 'válečných kladiv'],
                self::TWO_HANDED_CLUB => ['one' => 'obouruční kyj', 'few' => 'obouruční kyje', 'many' => 'obouručních kyjů'],
                self::HEAVY_SLEDGEHAMMER => ['one' => 'těžký perlík', 'few' => 'těžké perlíky', 'many' => 'těžkých perlíků'],
                self::LIGHT_MORGENSTERN => ['one' => 'lehký biják', 'few' => 'lehké bijáky', 'many' => 'lehkých bijáků'],
                self::MORGENSTERN => ['one' => 'biják', 'few' => 'bijáky', 'many' => 'bijáků'],
                self::HEAVY_MORGENSTERN => ['one' => 'těžký biják', 'few' => 'těžké bijáky', 'many' => 'těžkých bijáků'],
                self::FLAIL => ['one' => 'cep', 'few' => 'cepy', 'many' => 'cepů'],
                self::MORNINGSTAR => ['one' => 'řemdih', 'few' => 'řemdihy', 'many' => 'řemdihů'],
                self::HOBNAILED_FLAIL => ['one' => 'okovaný cep', 'few' => 'okované cepy', 'many' => 'okovaných cepů'],
                self::HEAVY_MORNINGSTAR => ['one' => 'těžký řemdih', 'few' => 'těžké řemdihy', 'many' => 'těžkých řemdihů'],
                self::MACHETE => ['one' => 'mačeta', 'few' => 'mačety', 'many' => 'mačet'],
                self::LIGHT_SABER => ['one' => 'lehká šavle', 'few' => 'lehké šavle', 'many' => 'lehkých šavlí'],
                self::BOWIE_KNIFE => ['one' => 'tesák', 'few' => 'tesáky', 'many' => 'tesáků'],
                self::SABER => ['one' => 'šavle', 'few' => 'šavle', 'many' => 'šavlí'],
                self::HEAVY_SABER => ['one' => 'těžká šavle', 'few' => 'těžké šavle', 'many' => 'těžkých šavlí'],
                self::LIGHT_SPEAR => ['one' => 'lehké kopí', 'few' => 'lehká kopí', 'many' => 'lehkých kopí'],
                self::SHORTENED_STAFF => ['one' => 'zkrácená hůl', 'few' => 'zkrácené hole', 'many' => 'zkrácených holí'],
                self::LIGHT_STAFF => ['one' => 'lehká hůl', 'few' => 'lehké hole', 'many' => 'lehkých holí'],
                self::SPEAR => ['one' => 'kopí', 'few' => 'kopí', 'many' => 'kopí'],
                self::HOBNAILED_STAFF => ['one' => 'okovaná hůl', 'few' => 'okované hole', 'many' => 'okovaných holí'],
                self::LONG_SPEAR => ['one' => 'dlouhé kopí', 'few' => 'dlouhá kopí', 'many' => 'dlouhých kopí'],
                self::HEAVY_HOBNAILED_STAFF => ['one' => 'těžká okovaná hůl', 'few' => 'těžké okované hole', 'many' => 'těžkých okovaných holí'],
                self::PIKE => ['one' => 'píka', 'few' => 'píky', 'many' => 'pík'],
                self::METAL_STAFF => ['one' => 'kovová hůl', 'few' => 'kovové hole', 'many' => 'kovových holí'],
                self::SHORT_SWORD => ['one' => 'krátký meč', 'few' => 'krátké meče', 'many' => 'krátkých mečů'],
                self::HANGER => ['one' => 'krátký široký meč', 'few' => 'krátké široké meče', 'many' => 'krátkých širokých mečů'],
                self::GLAIVE => ['one' => 'široký meč', 'few' => 'široké meče', 'many' => 'širokých mečů'],
                self::LONG_SWORD => ['one' => 'dlouhý meč', 'few' => 'dlouhé meče', 'many' => 'dlouhých mečů'],
                self::ONE_AND_HALF_HANDED_SWORD => ['one' => 'jedenapůlruční meč', 'few' => 'jedenapůlruční meče', 'many' => 'jedenapůlručních mečů'],
                self::BARBARIAN_SWORD => ['one' => 'barbarský meč', 'few' => 'barbarské meče', 'many' => 'barbarských mečů'],
                self::TWO_HANDED_SWORD => ['one' => 'obouruční meč', 'few' => 'obouruční meče', 'many' => 'obouručních mečů'],
                self::PITCHFORK => ['one' => 'vidle', 'few' => 'vidle', 'many' => 'vidlí'],
                self::LIGHT_VOULGE => ['one' => 'lehká sudlice', 'few' => 'lehké sudlice', 'many' => 'lehkých sudlic'],
                self::LIGHT_TRIDENT => ['one' => 'lehký trojzubec', 'few' => 'lehké trojzubce', 'many' => 'lehkých trojzubců'],
                self::HALBERD => ['one' => 'halapartna', 'few' => 'halapartny', 'many' => 'halaparten'],
                self::HEAVY_VOULGE => ['one' => 'těžká sudlice', 'few' => 'těžké sudlice', 'many' => 'těžkých sudlic'],
                self::HEAVY_TRIDENT => ['one' => 'těžký trojzubec', 'few' => 'těžké trojzubce', 'many' => 'těžkých trojzubců'],
                self::HEAVY_HALBERD => ['one' => 'těžká halapartna', 'few' => 'těžké halapartny', 'many' => 'těžkých halaparten'],
                self::HAND => ['one' => 'ruka', 'few' => 'ruce', 'many' => 'rukou'],
                self::HOBNAILED_GLOVE => ['one' => 'okovaná rukavice', 'few' => 'okované rukavice', 'many' => 'okovaných rukavic'],
                self::LEG => ['one' => 'noha', 'few' => 'nohy', 'many' => 'nohou'],
                self::HOBNAILED_BOOT => ['one' => 'okovaná bota', 'few' => 'okované boty', 'many' => 'okovaných bot'],
            ],
        ];
    }
}