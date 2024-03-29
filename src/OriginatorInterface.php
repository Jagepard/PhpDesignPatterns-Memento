<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

interface OriginatorInterface
{
    /**
     * @return string
     */
    public function getState(): string;

    /**
     * @param  string      $state
     * @param  string|null $date
     * @return void
     */
    public function setState(string $state, string $date = null): void;
}
