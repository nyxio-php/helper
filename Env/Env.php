<?php

declare(strict_types=1);

namespace Nyx\Helper\Env;

use function Nyx\Helper\Text\parseFromString;

function env(string $name, mixed $default = null): string|int|float|bool|null
{
    $value = \getenv($name);

    if ($value === false) {
        return $default;
    }

    return parseFromString($value);
}
