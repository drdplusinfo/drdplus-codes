<?php
namespace DrdPlus\Codes\Body;

use DrdPlus\Codes\Partials\AbstractCode;
use Granam\String\StringInterface;

/**
 * @method static OrdinaryWoundOriginCode findIt($codeValue)
 */
class OrdinaryWoundOriginCode extends WoundOriginCode
{
    public const ORDINARY = 'ordinary';

    /**
     * @param string|StringInterface $codeValue
     * @return OrdinaryWoundOriginCode|AbstractCode
     * @throws \DrdPlus\Codes\Partials\Exceptions\UnknownValueForCode
     * @throws \Doctrineum\Scalar\Exceptions\UnexpectedValueToEnum
     * @throws \Granam\Scalar\Tools\Exceptions\WrongParameterType
     */
    public static function getIt($codeValue = self::ORDINARY): AbstractCode
    {
        /** @noinspection ExceptionsAnnotatingAndHandlingInspection */
        return parent::getIt($codeValue);
    }

    /**
     * @return bool
     */
    public function isSeriousWoundOrigin(): bool
    {
        return false;
    }

    /**
     * @return bool
     */
    public function isOrdinaryWoundOrigin(): bool
    {
        return true;
    }

    protected function fetchTranslations(): array
    {
        return [
            'cs' => [self::ORDINARY => [self::$ONE => 'bežné']],
            'en' => [self::ORDINARY => [self::$ONE => 'ordinary']],
        ];
    }
}