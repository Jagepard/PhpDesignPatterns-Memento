<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

class Memento implements MementoInterface
{
    private array $memento;

    public function __construct(array $memento)
    {
        $this->memento = $memento;
    }

    public function getMemento(): array
    {
        return $this->memento;
    }
}
