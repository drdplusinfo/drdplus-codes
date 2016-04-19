<?php
namespace DrdPlus\Tests\Codes;

use DrdPlus\Codes\ShieldCodes;

class ShieldCodesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function I_can_get_shield_codes_at_once()
    {
        $reflection = new \ReflectionClass('\DrdPlus\Codes\ShieldCodes');
        self::assertSame(
            array_values($reflection->getConstants()),
            ShieldCodes::getShieldCodes()
        );
    }
}
