<?php

/**
 *
 * Function code for the complex log10() function
 *
 * @copyright  Copyright (c) 2013-2018 Mark Baker (https://github.com/MarkBaker/PHPComplex)
 * @license    https://opensource.org/licenses/MIT    MIT
 */
namespace Complex;

/**
 * Returns the common logarithm (base 10) of a complex number.
 *
 * @param     Complex|mixed    $complex    Complex number or a numeric value.
 * @return    Complex          The common logarithm (base 10) of the complex argument.
 * @throws    Exception        If argument isn't a valid real or complex number.
 * @throws    \InvalidArgumentException  If the real and the imaginary parts are both zero
 */
if (!function_exists(__NAMESPACE__ . '\\log10')) {
    function log10($complex): Complex
    {
        return Functions::log10($complex);
    }
}