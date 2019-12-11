<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

class Caretaker implements CaretakerInterface
{
    /**
     * @var MementoInterface
     */
    protected $memento;

    /**
     * @return MementoInterface
     */
    public function getMemento(): MementoInterface
    {
        return $this->memento;
    }

    /**
     * @param MementoInterface $memento
     */
    public function setMemento(MementoInterface $memento): void
    {
        $this->memento = $memento;
    }
}
