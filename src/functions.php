<?php

declare(strict_types=1);

namespace WyriHaximus;

use function explode;
use function igorw\get_in;

/**
 * @param array<string, mixed> $haystack
 * @param mixed|null           $default
 *
 * @return mixed|null
 */
function getIn(array $haystack, string $needle, $default = null)
{
    return get_in($haystack, explode('.', $needle), $default);
}
