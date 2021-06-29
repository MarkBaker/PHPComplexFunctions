<?php

namespace Complex;

class absTest extends BaseFunctionTestAbstract
{
    protected static $functionName = 'abs';

    /**
     * @dataProvider dataProvider
     */
    public function testAbsFunction()
    {
        if (!function_exists(__NAMESPACE__ . '\\' . self::$functionName)) {
            include_once(APPLICATION_PATH . '/src/functions/' . self::$functionName . '.php');
        }

        $args = func_get_args();
        $complex = new Complex($args[0]);
        $result = abs($complex);

        $this->assertEquals($args[1], $result);
        // Verify that the original complex value remains unchanged
        $this->assertEquals(new Complex($args[0]), $complex);
    }

    /*
     * Results derived from Wolfram Alpha using
     *  N[Abs[<VALUE>], 18]
     */
    public function dataProvider()
    {
        $expectedResults = [
            12,
            12.345,
            0.12345,
            14.0886318001429791,
            14.0886318001429791,
            6.79012230394269113,
            6.79012230394269113,
            0.690032689443043705,
            0.690032689443043705,
            9.8765,
            0.98765,
            10.7803660999986452,
            10.7803660999986452,
            1.07803660999986452,
            1.07803660999986452,
            1,
            1,
            0.123,
            0.123,
            1,
        ];

        return $this->formatOneArgumentTestResultArray($expectedResults);
    }
}
