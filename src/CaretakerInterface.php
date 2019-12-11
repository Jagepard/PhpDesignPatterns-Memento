<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Memento;

interface CaretakerInterface
{
    /**
     * @return MementoInterface
     */
    public function getMemento(): MementoInterface;

    /**
     * @param MementoInterface $memento
     */
    public function setMemento(MementoInterface $memento): void;
}
