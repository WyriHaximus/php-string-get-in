<?php declare(strict_types=1);

namespace WyriHaximus;

use function igorw\get_in;

function getIn(array $haystack, string $needle, $default = null)
{
    return get_in($haystack, explode('.', $needle), $default);
}
