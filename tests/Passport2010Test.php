<?php

namespace iMega\Translit;

use iMega\Formatter\Formatter;

class Passport2010Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @param string $value
     * @param string $expected
     * @dataProvider getValueDataProvider
     */
    public function testGetValue($value, $expected)
    {
        $actual = Passport2010::getValue($value);
        $this->assertSame($expected, $actual);
    }

    /**
     * @see testGetValue
     * @return array
     */
    public function getValueDataProvider()
    {
        return [
            [
                'value'    => 'щука',
                'expected' => 'shchuka',
            ],
            [
                'value'    => 'выход',
                'expected' => 'vykhod',
            ],
            [
                'value'    => 'съезд',
                'expected' => 'sezd',
            ],
            [
                'value'    => 'якорь',
                'expected' => 'iakor',
            ],
            [
                'value'    => 'цапля',
                'expected' => 'tcaplia',
            ],
            [
                'value'    => 'журавль',
                'expected' => 'zhuravl',
            ],
            [
                'value'    => 'interface',
                'expected' => 'interface',
            ],
        ];
    }
}
