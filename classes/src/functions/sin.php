<?php

/**
 *
 * Function code for the complex sin() function
 *
 * @copyright  Copyright (c) 2013-2018 Mark Baker (https://github.com/MarkBaker/PHPComplex)
 * @license    https://opensource.org/licenses/MIT    MIT
 */
namespace Complex;

/**
 * Returns the sine of a complex number.
 *
 * @param     Complex|mixed    $complex    Complex number or a numeric value.
 * @return    Complex          The sine of the complex argument.
 * @throws    Exception        If argument isn't a valid real or complex number.
 */
if (!function_exists(__NAMESPACE__ . '\\sin')) {
    function sin($complex): Complex
    {
        return Functions::sin($complex);
    }
}