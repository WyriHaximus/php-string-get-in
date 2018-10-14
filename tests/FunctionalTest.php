<?php declare(strict_types=1);

namespace WyriHaximus\Tests;

use ApiClients\Tools\TestUtilities\TestCase;
use function WyriHaximus\getIn;

final class FunctionalTest extends TestCase
{
    public function provideGetIn()
    {
        $single = ['key' => 'value'];
        $nested = ['foo' => ['bar' => ['baz' => 'value']]];
        $list   = [['name' => 'foo']];
        return [
            ['value', $single, 'key', 'default'],
            [['bar' => ['baz' => 'value']], $nested, 'foo', 'default'],
            [['baz' => 'value'], $nested, 'foo.bar', 'default'],
            ['value', $nested, 'foo.bar.baz', 'default'],
            ['default', $nested, 'foo.bar.bang', 'default'],
            ['default', $nested, 'non_existent', 'default'],
            [null, $nested, 'non_existent'],
            //[$nested, $nested, '', 'default'],
            //[$nested, $nested, ''],
            ['foo', $list, '0.name'],
            [null, ['foo' => null], 'foo', 'err'],
            [null, ['foo' => null], 'foo.bar'],
            ['default', $single, 'foo.value', 'default'],
        ];
    }

    /** @dataProvider provideGetIn */
    public function testGetIn($expected, $array, $keys, $default = null)
    {
        $this->assertSame($expected, getIn($array, $keys, $default));
    }
}
