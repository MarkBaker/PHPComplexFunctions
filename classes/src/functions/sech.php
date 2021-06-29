<?php

/**
 *
 * Function code for the complex sech() function
 *
 * @copyright  Copyright (c) 2013-2018 Mark Baker (https://github.com/MarkBaker/PHPComplex)
 * @license    https://opensource.org/licenses/MIT    MIT
 */
namespace Complex;

/**
 * Returns the hyperbolic secant of a complex number.
 *
 * @param     Complex|mixed    $complex    Complex number or a numeric value.
 * @return    Complex          The hyperbolic secant of the complex argument.
 * @throws    Exception        If argument isn't a valid real or complex number.
 * @throws    \InvalidArgumentException    If function would result in a division by zero
 */
if (!function_exists(__NAMESPACE__ . '\\sech')) {
    function sech($complex): Complex
    {
        return Functions::sech($complex);
    }
}
