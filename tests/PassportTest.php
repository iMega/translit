<?php

namespace iMega\Translit;

class PassportTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @param string $value
     * @param string $expected
     * @dataProvider getValueDataProvider
     */
    public function testGetValue($value, $expected)
    {
        $actual = Passport::getValue($value);
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
                'expected' => 'sieezd',
            ],
            [
                'value'    => 'якорь',
                'expected' => 'iakor',
            ],
            [
                'value'    => 'цапля',
                'expected' => 'tsaplia',
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
