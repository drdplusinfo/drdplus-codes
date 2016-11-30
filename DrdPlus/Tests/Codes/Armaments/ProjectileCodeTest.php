<?php
namespace DrdPlus\Tests\Codes\Armaments;

use DrdPlus\Codes\Armaments\ProjectileCode;

abstract class ProjectileCodeTest extends ArmamentCodeTest
{
    /**
     * @test
     */
    public function It_is_projectile()
    {
        $sutClass = $this->getSutClass();
        $value = current((new \ReflectionClass($sutClass))->getConstants());
        /** @var ProjectileCode $sut */
        $sut = $sutClass::getIt($value);

        self::assertTrue($sut->isProjectile());
        self::assertFalse($sut->isProtectiveArmament());
        self::assertFalse($sut->isWeaponlike());
    }

    /**
     * @test
     */
    abstract public function I_can_find_out_if_is_arrow();

    /**
     * @test
     */
    abstract public function I_can_find_out_if_is_dart();

    /**
     * @test
     */
    abstract public function I_can_find_out_if_is_sling_stone();
}