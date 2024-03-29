<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

interface MementoInterface
{
    /**
     * @return array
     */
    public function getMemento(): array;
}
