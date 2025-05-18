<?php declare(strict_types = 1);

namespace Country;

use Phpuef\Country\Countries;
use PHPUnit\Framework\TestCase;

class CountriesTest extends TestCase
{

    public function testFindByAlpha2(): void
    {
        $result = Countries::FindByAlpha2('cz');
        self::assertNotEquals(null, $result);
        self::assertSame('Czechia', $result?->name);
        self::assertSame('CZ', $result->alpha2);

        $result = Countries::FindByAlpha2('USF');
        self::assertEquals(null, $result);
    }

    public function testFindByAlpha3(): void
    {
        $result = Countries::FindByAlpha3('CZE');
        self::assertNotEquals(null, $result);
        self::assertSame('Czechia', $result?->name);
        self::assertSame('CZE', $result->alpha3);

        $result = Countries::FindByAlpha3('USAF');
        self::assertEquals(null, $result);
    }

    public function testFindByName(): void
    {
        $result = Countries::FindByName('Czechia');
        self::assertNotEquals(null, $result);
        self::assertSame('Czechia', $result?->name);

        $result = Countries::FindByName('USA');
        self::assertEquals(null, $result);
    }

}
