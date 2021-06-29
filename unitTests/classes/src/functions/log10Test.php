<?php

namespace Complex;

class log10Test extends BaseFunctionTestAbstract
{
    protected static $functionName = 'log10';

    /**
     * @dataProvider dataProvider
     */
    public function testLog10Function()
    {
        if (!function_exists(__NAMESPACE__ . '\\' . self::$functionName)) {
            include_once(APPLICATION_PATH . '/src/functions/' . self::$functionName . '.php');
        }

        $args = func_get_args();
        $complex = new Complex($args[0]);
        $result = log10($complex);

        $this->complexNumberAssertions($args[1], $result);
        // Verify that the original complex value remains unchanged
        $this->assertEquals(new Complex($args[0]), $complex);
    }

    public function testLog10Zero()
    {
        $this->expectException(\InvalidArgumentException::class);

        $complex = new Complex(0);
        log10($complex);
    }

    /*
     * Results derived from Wolfram Alpha using
     *  N[Log10[<VALUE>], 18]
     */
    public function dataProvider()
    {
        $expectedResults = [
            1.07918124604762483,
            1.09149109426795108,
            -0.908508905732048918,
            '1.148868819191706605+0.218361774173230021i',
            '1.148868819191706605-0.218361774173230021i',
            '0.831877596879774119+0.674291911518508134i',
            '0.831877596879774119-0.674291911518508134i',
            '-0.161130334612822794+0.604070350358071680i',
            '-0.161130334612822794-0.604070350358071680i',
            '0.99460306807077916+1.36437635384184135i',
            '-0.005396931929220836+1.364376353841841347i',
            '1.03263350969204423+1.18526762140087618i',
            '1.03263350969204423-1.18526762140087618i',
            '0.032633509692044229+1.185267621400876176i',
            '0.032633509692044229-1.185267621400876176i',
            '0.682188176920920674i',
            '-0.682188176920920674i',
            '-0.910094888560602068+0.682188176920920674i',
            '-0.910094888560602068-0.682188176920920674i',
            '1.36437635384184135i',
        ];

        return $this->formatOneArgumentTestResultArray($expectedResults);
    }
}
