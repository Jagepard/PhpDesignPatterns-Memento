<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

class Caretaker implements CaretakerInterface
{
    protected array $history = [];

    public function undo(): MementoInterface
    {
        return unserialize(array_pop($this->history));
    }

    public function save(MementoInterface $memento): void
    {
        $this->history[] = serialize($memento);
    }
}
