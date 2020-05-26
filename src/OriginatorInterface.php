<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

interface OriginatorInterface
{
    public function getState(): string;

    public function setState(string $state): void;
}
