<?php
namespace DrdPlus\Codes\Partials;

use Doctrineum\Scalar\ScalarEnum;
use Doctrineum\Scalar\ScalarEnumInterface;
use DrdPlus\Codes\Code;
use Granam\String\StringInterface;
use Granam\Tools\ValueDescriber;

abstract class AbstractCode extends ScalarEnum implements Code
{

    /**
     * @return array|string[]
     * @throws \DrdPlus\Codes\Partials\Exceptions\MethodRequiresOverride
     */
    public static function getPossibleValues(): array
    {
        throw new Exceptions\MethodRequiresOverride(
            'Not implemented. Please overload method ' . __METHOD__ . ' and return all code constants by it.'
        );
    }

    /**
     * @param string|StringInterface $codeValue
     * @return AbstractCode|ScalarEnumInterface
     * @throws \DrdPlus\Codes\Partials\Exceptions\UnknownValueForCode
     * @throws \Doctrineum\Scalar\Exceptions\CanNotCreateInstanceOfAbstractEnum
     * @throws \Doctrineum\Scalar\Exceptions\UnexpectedValueToEnum
     * @throws \Granam\Scalar\Tools\Exceptions\WrongParameterType
     */
    public static function getIt($codeValue)
    {
        return self::getEnum($codeValue);
    }

    /**
     * @param string|Code $codeValue
     * @throws \Doctrineum\Scalar\Exceptions\UnexpectedValueToEnum
     * @throws \DrdPlus\Codes\Partials\Exceptions\UnknownValueForCode
     */
    protected function __construct($codeValue)
    {
        parent::__construct($codeValue);
        $this->guardCodeExistence($this->enumValue);
    }

    /**
     * @param string $codeValue
     * @throws \DrdPlus\Codes\Partials\Exceptions\UnknownValueForCode
     */
    private function guardCodeExistence($codeValue)
    {
        if (!in_array($codeValue, (new \ReflectionClass($this))->getConstants(), true)) {
            throw new Exceptions\UnknownValueForCode('Given code value '
                . ValueDescriber::describe($codeValue)
                . ' is not known to ' . static::class
            );
        }
    }
}