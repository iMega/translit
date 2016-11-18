<?php

namespace iMega\Translit;

class Passport1997Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @param string $value
     * @param string $expected
     * @dataProvider getValueDataProvider
     */
    public function testGetValue($value, $expected)
    {
        $actual = Passport1997::getValue($value);
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
                'expected' => 'sʺezd',
            ],
            [
                'value'    => 'якорь',
                'expected' => 'yakor',
            ],
            [
                'value'    => 'цапля',
                'expected' => 'tsaplya',
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
