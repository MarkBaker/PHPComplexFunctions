<?php

/**
 *
 * Function code for the complex sqrt() function
 *
 * @copyright  Copyright (c) 2013-2018 Mark Baker (https://github.com/MarkBaker/PHPComplex)
 * @license    https://opensource.org/licenses/MIT    MIT
 */
namespace Complex;

/**
 * Returns the square root of a complex number.
 *
 * @param     Complex|mixed    $complex    Complex number or a numeric value.
 * @return    Complex          The Square root of the complex argument.
 * @throws    Exception        If argument isn't a valid real or complex number.
 */
if (!function_exists(__NAMESPACE__ . '\\sqrt')) {
    function sqrt($complex): Complex
    {
        return Functions::sqrt($complex);
    }
}